<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$accion = $dCry($accion);
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
if($accion === "procesaCliente" || $accion == 'borrarFormulario'){
	include('conexion.php');
 	include('funciones.php');
 	include('fncnesF0rM5.php');
}
include('clientesFunciones.php');
if($accion === 'clientes'){
	$C001 = "SELECT * FROM clientes WHERE Universo = $Universo";
	$S001 = $conexion->query($C001) or die ("Fallo al consultar clientes: ".$C001);
	$numClientes = $S001->num_rows;

	$LdClientes = [];
	while ($cliente = $S001->fetch_array()) {
		unset($datosCliente);
		
		$datosCliente = [
			'clienteID' => $cliente['cliente_id'],
			'clienteNombre1' => $cliente['cliente_nombre1'],
			'clienteNombre2' => $cliente['cliente_nombre2'],
			'clienteApellido1' => $cliente['cliente_apellido1'],
			'clienteApellido2' => $cliente['cliente_apellido2'],
			'clienteUsuario' => $cliente['cliente_usuario'],
			'clienteTel1' => $cliente['cliente_telefono1'],
			'clienteTel2' => $cliente['cliente_telefono2'],
			'clienteSexo' => $cliente['cliente_sexo'],
			'clienteNacimiento' => $cliente['cliente_nacimiento'],
			'clienteSistema' => $cliente['cliente_registro'],
		];
		array_push($LdClientes, $datosCliente);
	}

}
elseif($accion == 'editarCliente'){
	if($clienteID != ''){
		$clienteID = $dCry($clienteID);
		$C001 = "SELECT * FROM clientes WHERE cliente_id = $clienteID";
		$S001 = $conexion->query($C001) or die ("Fallo al seleccionar Cliente");
		$cliente = $S001->fetch_assoc();
		$sexo = $cliente['cliente_sexo'];
		//$listaRazas = listaSelectRazas($cliente['cliente_especie']);

	}
	else{
		$_SESSION['m3ns4J3'] = 'No habia ID de cliente a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    llevame('app?accion=clientes');
	}
}
elseif($accion == 'procesaCliente'){

	$clienteNombre1 = limpia($clienteNombre1);
	$clienteNombre2 = limpia($clienteNombre2);
	$clienteApellido1 = limpia($clienteApellido1);
	$clienteApellido2 = limpia($clienteApellido2);
	$clienteNI = limpia($clienteNI);
	//$clienteSexo = limpia($clienteSexo);
	//$clienteNacimiento = limpia($clienteNacimiento);
	$clienteNE = limpia($clienteNE);
	$clienteCalle = limpia($clienteCalle);
	$clienteColonia = limpia($clienteColonia);
	$clienteMunicipio = 52;
	$clienteEstado = 255;
	$clienteCP = limpia($clienteCP);
	$clientePais = 52;
	$clienteTelefono1 = '5512771445';
	$clienteTelefono2 = '5512771489';

	$_SESSION['mensajeForm'] = [];
	$_SESSION['formError'] = 0;
	
	if(empty($clienteNombre1)){ $_SESSION['mensajeForm'][] = 'No has escrito un Nombre'; $_SESSION['formError']++; }
	if(empty($clienteApellido1)){ $_SESSION['mensajeForm'][] = 'No has escrito Apellido Paterno'; $_SESSION['formError']++; }
	//if(!empty($clienteUsuario) && !v4lEm4Il($clienteUsuario)){ $_SESSION['mensajeForm'][] = 'Email no Valido'; $_SESSION['formError']++; }
	//if(!empty($clienteCP) && !v4l_cp($clienteCP)){ $_SESSION['mensajeForm'][] = 'Código Postal no Válido	'; $_SESSION['formError']++; }
	//if($clienteSexo == '' || empty($clienteSexo)){ $_SESSION['mensajeForm'][] = 'Selecciona el sexo de '.$clienteNombre1; $_SESSION['formError']++; }
	//if($clienteMunicipio == 'Ninguno'){ $clienteMunicipio = 0; }
	$_SESSION['formCliente'] = [];
	$_SESSION['formCliente']['clienteNombre1'] = $clienteNombre1;
	$_SESSION['formCliente']['clienteNombre2'] = $clienteNombre2;
	$_SESSION['formCliente']['clienteApellido1'] = $clienteApellido1;
	$_SESSION['formCliente']['clienteApellido2'] = $clienteApellido2;
	$_SESSION['formCliente']['clienteUsuario'] = $clienteUsuario;
	$_SESSION['formCliente']['clienteNI'] = $clienteNI;
	$_SESSION['formCliente']['clienteNE'] = $clienteNE;
	$_SESSION['formCliente']['clienteEstado'] = $clienteEstado;
	$_SESSION['formCliente']['clienteCalle'] = $clienteCalle;
	$_SESSION['formCliente']['clienteColonia'] = $clienteColonia;
	$_SESSION['formCliente']['clienteMunicipio'] = $clienteMunicipio;
	$_SESSION['formCliente']['clienteCP'] = $clienteCP;
	$_SESSION['formCliente']['clienteTelefono1'] = $clienteTelefono1;
	$_SESSION['formCliente']['clienteTelefono2'] = $clienteTelefono2;
	$_SESSION['formCliente']['clienteSexo'] = $clienteSexo;
	$_SESSION['formCliente']['clienteNacimiento'] = $clienteNacimiento;
	$_SESSION['formCliente']['clientePais'] = '52';

	if($_SESSION['formError'] == 0){
		if($editar == 'editar' && $clienteID != ''){
			unset($sql_array);
			$sql_array = [
				'cliente_nombre1' => eCry2($clienteNombre1),
				'cliente_nombre2' => eCry2($clienteNombre2),
				'cliente_apellido1' => eCry2($clienteApellido1),
				'cliente_apellido2' => eCry2($clienteApellido2),
				'cliente_usuario' => $clienteUsuario,
				//'cliente_psswd' => $clientePsswd,
				'cliente_ni' => eCry2($clienteNI),
				'cliente_sexo' => $clienteSexo,
				'cliente_ne' => eCry2($clienteNE),
				'cliente_calle' => eCry2($clienteCalle),
				'cliente_colonia' => eCry2($clienteColonia),
				'cliente_municipio' => $clienteMunicipio,
				'cliente_estado' => $clienteEstado,
				'cliente_pais' => $clientePais,
				'cliente_cp' => $clienteCP,
				'cliente_telefono1' => eCry2($clienteTelefono1),
				'cliente_telefono2' => eCry2($clienteTelefono2),
				'cliente_nacimiento' => $clienteNacimiento,
				'cliente_registro' => date("Y-m-d H:i:s"),
				'Universo' => $Universo
			];
			$accion = 'actualizar';
			$paramatros = 'cliente_id = '.$clienteID;
			echo '<pre>';
			print_r($sql_array);
			echo '</pre>';
			ejecutaDB('clientes', $sql_array, $accion, $paramatros);
			unset($_SESSION['formCliente']);
			Bin4kuru('Se creo la cliente -> ', $accion, $V=0, $U, $F=0, $E=0, $D=0, $P=0);
			llevame('../app?accion=fichaCliente&clienteID='.$eCry($clienteID));
		}
		else{
			unset($sql_array);
			$sql_array = [
				'cliente_usuario' => $clienteUsuario,
				'cliente_psswd' => NULL,
				'cliente_nombre1' => $clienteNombre1,
				'cliente_nombre2' => $clienteNombre2,
				'cliente_apellido1' => $clienteApellido1,
				'cliente_apellido2' => $clienteApellido2,
				'cliente_sexo' => $clienteSexo,
				'cliente_ni' => $clienteNI,
				'cliente_ne' => $clienteNE,
				'cliente_calle' => $clienteCalle,
				'cliente_colonia' => $clienteColonia,
				'cliente_municipio' => $clienteMunicipio,
				'cliente_estado' => $clienteEstado,
				'cliente_pais' => 52,
				'cliente_cp' => $clienteCP,
				'cliente_telefono1' => $clienteTelefono1,
				'cliente_telefono2' => $clienteTelefono2,
				'cliente_nacimiento' => $clienteNacimiento,
				'cliente_registro' => date("Y-m-d H:i:s"),
				'Universo' => $Universo
			];
			$accion = 'insertar';
			$paramatros = NULL;
			/*echo '<pre>';
			print_r($sql_array);
			echo '</pre>';*/
			$clienteID = ejecutaDB('clientes', $sql_array, $accion, $paramatros);
			
			$carpetaCliente = 'documentos/'.$_SESSION['Universo'].'/cliente-'.$clienteID;
			mkdir($carpetaCliente, 0777, true);
			chmod($carpetaCliente, 0777);

			unset($_SESSION['formCliente']);
			//Bin4kuru('Se creo la cliente -> ', $accion, $V=0, $U, $F=0, $E=0, $D=0, $P=0);
			llevame('../app?accion=fichaCliente&clienteID='.$eCry($clienteID));
		}
	}
	else{
		if($editar == 'editar' && $clienteID != ''){
			llevame('../app?accion=editarCliente&clienteID='.$eCry($clienteID));
		}
		else{
			llevame('../app?accion=clientes');
		}
	}

}
elseif($accion == 'borrarFormulario'){
	unset($_SESSION['formCliente']);
	unset($_SESSION['formError']);
	unset($_SESSION['mensajeForm']);
	llevame('../app?accion=clientes');
}
elseif($accion == 'fichaCliente'){
	$C004 = "SELECT * FROM clientes WHERE cliente_id = ".$dCry($clienteID)." ";
	$S004 = $conexion->query($C004) or die ("Fallo al seleccionar Cliente");
	$cliente = $S004->fetch_assoc();

	$C005 = "SELECT doc_archivo, doc_id FROM documentos WHERE doc_tipo = 1 AND doc_individuo = ".$cliente['cliente_id']." ORDER BY doc_id ASC";
	$S005 = $conexion->query($C005) or die ("Fallo al consultar foto de cliente");
	$fotoCliente = $S005->fetch_assoc();

	$edadCompleta = calcularEdad($cliente['cliente_nacimiento']);
	$edad = $edadCompleta->format('%Y').' Año(s) '.$edadCompleta->format('%m').' Mes(es) y '.$edadCompleta->format('%d').' Dia(s)';

	if($fotoCliente['doc_archivo'] != ''){
		$flis = 'documentos/'.$Universo.'/cliente-'.$cliente['cliente_id'].'/'.$fotoCliente['doc_archivo'];
	}
	else{
		$flis = 'dist/img/gato_avatar.jpg'; 
	}	
}