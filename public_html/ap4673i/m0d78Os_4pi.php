<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';
session_start();

if(!isset($_SESSION['xx_001'])){
	header("location:../lgaccs25.php?axc0=x001"); // --- r3Diri6ir a login si no hay sesión ---
}
if($axc0 === "m0d7545x" || $axc0 === 'm0d7ff5Gg'){
	include('ccnnxx547.php');
 	include('fncnes5632.php');
}

if($axc0 === "m0d78Os"){ 
	
	// --- Consulta para listado de carreras
	$Qum0d78Os = "SELECT * FROM m0d78Os ORDER BY m0DxL0_descripcion ASC";
	$Cm0d78Os = $cnnx4s->query($Qum0d78Os) or die ("Falló listado de modulos" . $Qum0d78Os);
	$Li57m0d78Os = [];
	while($Lm0d78Os = $Cm0d78Os->fetch_assoc()){

		$x4rr36l0 = array('m0DxL0_id' => $Lm0d78Os['m0DxL0_id'],
										 'm0DxL0_descripcion' => $Lm0d78Os['m0DxL0_descripcion'],
										 'm0DxL0_numero' => $Lm0d78Os['m0DxL0_numero'],
										 'm0DxL0_estado' => $Lm0d78Os['m0DxL0_estado']
				);
		array_push($Li57m0d78Os, $x4rr36l0); 
	}



}

elseif ($axc0 == 'm0d7545x') {

	if(!empty($m0DxL0_descripcion_add)){

		$axc0 = 'insertar';
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = ['m0DxL0_descripcion' => $m0DxL0_descripcion_add,
											 'm0DxL0_numero' => $m0DxL0_numero_add,
											 'm0DxL0_estado' => $m0DxL0_estado_add
											];		
    x3J3cU74DB('m0d78Os', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
    $_SESSION['m3ns4J3'] = lbl_8i7_x020.$m0DxL0_descripcion_add;
		bi74c0('4DdM0du', $_SESSION['m3ns4J3'], '');

    r3Diri6ir('../v75t4?axc0=m0d78Os');
	}
  else{
    $_SESSION['m3n3Rr0R'] = 'si';
    $_SESSION['m3ns4J3'] = lbl_8i7_x021;
    r3Diri6ir('../v75t4?axc0=m0d78Os');
		bi74c0('4DdM0du2', $_SESSION['m3ns4J3'], '');
  }
}

/// --- axc0 Consultar Datos de un modulo
elseif($axc0 === "m0d7fdDs"){
	$m0ft6sV = $dCry($m0ft6sV);
	if(!empty($m0ft6sV)){
    // --- Consulta para datos de usuario
    $q5u5xXd = "SELECT * FROM m0d78Os WHERE m0DxL0_id = '".$m0ft6sV."' ";
    $c5u5xXd = $cnnx4s->query($q5u5xXd) or die ("Falló al obtener datos de modulo " . $q5u5xXd);
    $d4705m0D = [];
    while($dU5u4o = $c5u5xXd->fetch_assoc()){
      $x4rr36l0 = array('m0ds6L0iD' => $dU5u4o['m0DxL0_id'],
                      'm0ds6L0d3s5cRp' => $dU5u4o['m0DxL0_descripcion'],
                      'm0ds6L0nM' => $dU5u4o['m0DxL0_numero'],
                      'm0ds6L03574d0' => $dU5u4o['m0DxL0_estado']
          );
      array_push($d4705m0D, $x4rr36l0); 
    }
  }
  else{
    $_SESSION['m3ns4J3'] = 'No habia ID de modulo a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    r3Diri6ir('v75t4?axc0=m0d78Os');
  }

}

elseif ($axc0 == 'm0d7ff5Gg') {  /// --- accion actualizar modulo

	if(!empty($pp_xx004)){
		$axc0 = 'actualizar';
		$p4r4m37r05 = "m0DxL0_id = '$pp_xx004'"; 
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = ['m0DxL0_descripcion' => $pp_xx001,
											 'm0DxL0_numero' => $pp_xx002,
											 'm0DxL0_estado' => $pp_xx003
											];		
    x3J3cU74DB('m0d78Os', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
    
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
    $_SESSION['m3ns4J3'] = lbl_8i7_x022.$pp_xx001;
		bi74c0('4c7M0du', $_SESSION['m3ns4J3'], '');

		r3Diri6ir('../v75t4?axc0=m0d78Os');   

	}
  else {

    $_SESSION['m3n3Rr0R'] = 'si';
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
    $_SESSION['m3ns4J3'] = lbl_8i7_x023;
		bi74c0('4c7M0du2', $_SESSION['m3ns4J3'], '');

    r3Diri6ir('../v75t4?axc0=m0d78Os');
  }
		
}
