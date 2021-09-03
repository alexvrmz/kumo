<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$axc0 = $dCry($axc0);
if(!isset($_SESSION['xx_001'])){
	header("location:../lgaccs25.php?axc0=x001"); // --- llevame a login si no hay sesión ---
}
if($axc0 === "procesaMascota" ){
	include('ccnnxx547.php');
 	include('fncnes5632.php');
 	include('fncnesF0rM5.php');
}
 
if($axc0 === 'mascotas'){
	$C001 = "SELECT * FROM mascotas WHERE mascota_universo = $xXUNVrSXx";
	$S001 = $cnnx4s->query($C001) or die ("Fallo al consultar mascotas");

	$LdMascotas = [];
	while ($mascota = $S001->fetch_array()) {
		unset($datosMascota);
		$especie = $mascota['mascota_especie'];
		$raza = $mascota['mascota_raza'];

		$C002 = "SELECT * FROM especies WHERE especie_id = $especie";
		$S002 = $cnnx4s->query($C002) or die ("Error al consultar especie de mascota");
		$datosEspecie = $S002->fetch_assoc();
		$especie = $datosEspecie['especie_descripcion'];

		$C003 = "SELECT * FROM razas WHERE raza_id = $raza";
		$S003 = $cnnx4s->query($C003) or die ("Error al consultar raza");
		$datosRaza = $S003->fetch_assoc();
		$raza = $datosRaza['raza_descripcion'];

		$edad = calcularEdad($mascota['mascota_nacimiento']);
		$datosMascota = [
			'mascotaID' => $mascota['mascota_id'],
			'mascotaNombre' => $mascota['mascota_nombre'],
			'mascotaEspecie' => $especie,
			'mascotaRaza' => $raza,
			'mascotaSexo' => $mascota['mascota_sexo'],
			'mascotaEsteril' => $mascota['mascota_esteril'],
			'mascotaColor' => $mascota['mascota_color'],
			'mascotaEdad' => $edad,
			'mascotaNacimiento' => $mascota['mascota_nacimiento'],
			'mascotaSistema' => $mascota['mascota_sistema'],
			'mascotaDueno' => $mascota['mascota_dueno'],
		];
		array_push($LdMascotas, $datosMascota);
	}

	$C004 = "SELECT * FROM especies WHERE especie_estado = 1 AND especie_inicial = 1 AND especie_universo = 0";
	$S004 = $cnnx4s->query($C004) or die ("Error al consultar especies");
	$listaEspecies = [];
	while ($datosEspecie = $S004->fetch_array()) {
		unset($especie);
		$especie = [
			'especieID' => $datosEspecie['especie_id'],
			'especieDescripcion' => $datosEspecie['especie_descripcion'],
		];
		array_push($listaEspecies, $especie);
	}

	if($_SESSION['formMascota']['mascotaEspecie'] != 'Ninguno' && !empty($_SESSION['formMascota']['mascotaEspecie'])){
		echo $_SESSION['formMascota']['mascotaEspecie'];
		$C005 = "SELECT * FROM razas WHERE raza_especie = ".$_SESSION['formMascota']['mascotaEspecie']."";
		$S005 = $cnnx4s->query($C005) or die ("Fallo al seleccionar razas");
		$listaRazas = [];
		while ($datosRaza = $S005->fetch_array()) {
			unset($raza);
			$raza = [
				'razaID' => $datosRaza['raza_id'],
				'razaDescripcion' => $datosRaza['raza_descripcion']
			];
			array_push($listaRazas, $raza);
		}
	}

}
elseif($axc0 == 'procesaMascota'){

	$mascotaNombre = limpia($mascotaNombre);
	$mascotaEspecie = limpia($mascotaEspecie);
	$mascotaRaza = limpia($mascotaRaza);
	$mascotaSexo = limpia($mascotaSexo);
	$mascotaEsteril = limpia($mascotaEsteril);
	$mascotaColor = limpia($mascotaColor);
	$mascotaCliente = limpia($mascotaCliente);

	$_SESSION['mensajeForm'] = [];
	$_SESSION['formError'] = 0;

	if(empty($mascotaNombre)){ $_SESSION['mensajeForm'][] = 'No has escrito un Nombre'; $_SESSION['formError']++; }
	if($mascotaNombre == 'Puto'){ $_SESSION['mensajeForm'][] = 'No seas basura! <i class="fad fa-trash"></i>'; $_SESSION['formError']++; }
	if($mascotaNombre == 'Kina'){ $_SESSION['mensajeForm'][] = 'Kina!!!, TE AMO <i class="fad fa-heart" style="--fa-secondary-opacity: 1.0; --fa-primary-color: pink; --fa-secondary-color: red;"></i> <i class="fad fa-disease" style="--fa-secondary-opacity: 1.0; --fa-primary-color: dodgerblue; --fa-secondary-color: gold;"></i>'; }
	if($mascotaEspecie == 'Ninguno' || empty($mascotaEspecie)){ $_SESSION['mensajeForm'][] = 'Selecciona una especie para '.$mascotaNombre; $_SESSION['formError']++; }
	if($mascotaRaza == 'Ninguno' || empty($mascotaRaza)){ $_SESSION['mensajeForm'][] = 'Selecciona una raza para '.$mascotaNombre; $_SESSION['formError']++; }
	if($mascotaSexo == 'Ninguno' || empty($mascotaSexo)){ $_SESSION['mensajeForm'][] = 'Selecciona el sexo para '.$mascotaNombre; $_SESSION['formError']++; }
	if($mascotaEsteril == 'Ninguno' || empty($mascotaEsteril)){ $_SESSION['mensajeForm'][] = 'Selecciona el Estado Reproductivo de '.$mascotaNombre; $_SESSION['formError']++; }
	if($mascotaColor == 'Ninguno' || empty($mascotaColor)){ $_SESSION['mensajeForm'][] = 'Selecciona el Pelaje de '.$mascotaNombre; $_SESSION['formError']++; }
	if(empty($mascotaNacimiento)){ $_SESSION['mensajeForm'][] = 'Cuando se festeja el cumpleaños <i class="fad fa-birthday-cake" style="--fa-secondary-opacity: 1.0; --fa-primary-color: pink; --fa-secondary-color: palevioletred;"></i> de '.$mascotaNombre; $_SESSION['formError']++; }
	if($mascotaNacimiento >= date("Y-m-d")){ $_SESSION['mensajeForm'][] = 'Como crees?? '.$mascotaNombre.' aún no nace!!!'; $_SESSION['formError']++; }

	$_SESSION['formMascota'] = [];
	$_SESSION['formMascota']['mascotaNombre'] = $mascotaNombre;
	$_SESSION['formMascota']['mascotaEspecie'] = $mascotaEspecie;
	$_SESSION['formMascota']['mascotaRaza'] = $mascotaRaza;
	$_SESSION['formMascota']['mascotaSexo'] = $mascotaSexo;
	$_SESSION['formMascota']['mascotaEsteril'] = $mascotaEsteril;
	$_SESSION['formMascota']['mascotaColor'] = $mascotaColor;
	$_SESSION['formMascota']['mascotaNacimiento'] = $mascotaNacimiento;
	$_SESSION['formMascota']['mascotaCliente'] = $mascotaCliente;

	if($_SESSION['formError'] == 0){
		unset($sql_array);
		$sql_array = [
			'mascota_nombre' => $mascotaNombre,
			'mascota_especie' => $mascotaEspecie,
			'mascota_raza' => $mascotaRaza,
			'mascota_sexo' => $mascotaSexo,
			'mascota_esteril' => $mascotaEsteril,
			'mascota_color' => $mascotaColor,
			'mascota_nacimiento' => $mascotaNacimiento,
			'mascota_dueno' => 0,
			'mascota_sistema' => date("Y-m-d H:i:s"),
			'mascota_universo' => $xXUNVrSXx
		];
		$accion = 'insertar';
		$paramatros = NULL;
		echo '<pre>';
		print_r($sql_array);
		echo '</pre>';
		$mascotaID = ejecutaDB('mascotas', $sql_array, $accion, $paramatros);
		unset($_SESSION['formMascota']);
		//Bin4kuru('Se creo la mascota -> ', $axc0, $V=0, $U, $F=0, $E=0, $D=0, $P=0);
		llevame('../v75t4?axc0=fichaMascota&mascotaID='.$eCry($mascotaID));
	}
	else{
		llevame('../v75t4?axc0=mascotas');
	}


}