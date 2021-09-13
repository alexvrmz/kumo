<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$accion = $dCry($accion);
if(!isset($_SESSION['xx_001'])){
	header("location:../lgaccs25.php?accion=x001"); // --- llevame a login si no hay sesión ---
}
if($accion === "procesaCliente" || $accion == 'borrarFormulario'){
	include('ccnnxx547.php');
 	include('fncnes5632.php');
 	include('fncnesF0rM5.php');
}
include('clientesFunciones.php');
if($accion === 'clientes'){
	$C001 = "SELECT * FROM clientes WHERE xXUNVrSXx = $xXUNVrSXx";
	$S001 = $cnnx4s->query($C001) or die ("Fallo al consultar clientes");
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
		$S001 = $cnnx4s->query($C001) or die ("Fallo al seleccionar Cliente");
		$cliente = $S001->fetch_assoc();

		$listaRazas = listaSelectRazas($cliente['cliente_especie']);

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
	$clienteNE = limpia($clienteNE);
	$clienteCalle = limpia($clienteCalle);
	$clienteColonia = limpia($clienteColonia);


	$_SESSION['mensajeForm'] = [];
	$_SESSION['formError'] = 0;
	
	if(empty($clienteNombre1)){ $_SESSION['mensajeForm'][] = 'No has escrito un Nombre'; $_SESSION['formError']++; }
	if(empty($clienteApellido1)){ $_SESSION['mensajeForm'][] = 'No has escrito Apellido Paterno'; $_SESSION['formError']++; }
	if(!empty($clienteUsuario) && !v4lEm4Il($clienteUsuario)){ $_SESSION['mensajeForm'][] = 'Email no Valido'; $_SESSION['formError']++; }
	if(!empty($clienteCP) && !v4l_cp($clienteCP)){ $_SESSION['mensajeForm'][] = 'Código Postal no Válido	'; $_SESSION['formError']++; }
	if($clienteSexo == 'Ninguno' || empty($clienteSexo)){ $_SESSION['mensajeForm'][] = 'Selecciona el sexo de '.$clienteNombre1; $_SESSION['formError']++; }
	if($clienteMunicipio == 'Ninguno'){ $clienteMunicipio = 0; }
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

	if($_SESSION['formError'] == 0){
		if($editar == 'editar' && $clienteID != ''){
			unset($sql_array);
			$sql_array = [
				'cliente_nombre' => $clienteNombre,
				'cliente_especie' => $clienteEspecie,
				'cliente_raza' => $clienteRaza,
				'cliente_sexo' => $clienteSexo,
				'cliente_esteril' => $clienteEsteril,
				'cliente_color' => $clienteColor,
				'cliente_nacimiento' => $clienteNacimiento,
				'cliente_dueno' => $clienteCliente,
				//'cliente_sistema' => date("Y-m-d H:i:s"),
				//'cliente_universo' => $xXUNVrSXx
			];
			$accion = 'actualizar';
			$paramatros = 'cliente_id = '.$clienteID;
			/*echo '<pre>';
			print_r($sql_array);
			echo '</pre>';*/
			ejecutaDB('clientes', $sql_array, $accion, $paramatros);
			unset($_SESSION['formCliente']);
			//Bin4kuru('Se creo la cliente -> ', $accion, $V=0, $U, $F=0, $E=0, $D=0, $P=0);
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
				'xXUNVrSXx' => $xXUNVrSXx
			];
			$accion = 'insertar';
			$paramatros = NULL;
			/*echo '<pre>';
			print_r($sql_array);
			echo '</pre>';*/
			$clienteID = ejecutaDB('clientes', $sql_array, $accion, $paramatros);
			
			$carpetaCliente = 'documentos/'.$_SESSION['xXUNVrSXx'].'/cliente-'.$clienteID;
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
	$S004 = $cnnx4s->query($C004) or die ("Fallo al seleccionar Cliente");
	$cliente = $S004->fetch_assoc();

	$C005 = "SELECT doc_archivo, doc_id FROM documentos WHERE doc_tipo = 1 AND doc_individuo = ".$cliente['cliente_id']." ORDER BY doc_id ASC";
	$S005 = $cnnx4s->query($C005) or die ("Fallo al consultar foto de cliente");
	$fotoCliente = $S005->fetch_assoc();

	$C007 = "SELECT raza_descripcion FROM razas WHERE raza_id = ".$cliente['cliente_raza'];
	$S007 = $cnnx4s->query($C007) or die ("Fallo al seleccionar raza de cliente");
	$datoRaza = $S007->fetch_assoc();
	$clienteRaza = $datoRaza['raza_descripcion'];

	$edadCompleta = calcularEdad($cliente['cliente_nacimiento']);
	$edad = $edadCompleta->format('%Y').' Año(s) '.$edadCompleta->format('%m').' Mes(es) y '.$edadCompleta->format('%d').' Dia(s)';

	if($fotoCliente['doc_archivo'] != ''){
		$flis = 'documentos/'.$xXUNVrSXx.'/cliente-'.$cliente['cliente_id'].'/'.$fotoCliente['doc_archivo'];
	}
	else{
		$flis = 'dist/img/gato_avatar.jpg'; 
	}

	$C006 = "SELECT especie_descripcion FROM especies WHERE especie_id = ".$cliente['cliente_especie'];
	$S006 = $cnnx4s->query($C006) or die ("Fallo al consultar especie");
	$datoEspecie = $S006->fetch_assoc();
	$clienteEspecie = $datoEspecie['especie_descripcion'];
	
}