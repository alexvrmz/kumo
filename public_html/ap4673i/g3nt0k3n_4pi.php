<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();

if(!isset($_SESSION['xx_001'])){
	header("location:../lgaccs25.php?axc0=x001"); // --- r3Diri6ir a login si no hay sesión ---
}
if($axc0 === "50210"){
	include('ccnnxx547.php');
 	include('fncnes5632.php');
}
/// --- axc0 Generar Token
if ($axc0 === '50210') {
	if(!empty($u5h8ir5nm)){
		$u5h8ir5nm = $dCry($u5h8ir5nm);

		$Q001 = "SELECT u5hpV8ir5 FROM u5u405 WHERE u5hID8ir5 = '$u5h8ir5nm' ";
		$S001 = $cnnx4s->query($Q001) or die ("Fallo al seleccionar usuario");
		$DU = $S001->fetch_assoc();
		$IDLL = $DU['u5hpV8ir5'];

		$axc0 = 'actualizar';
		$p4r4m37r05 = "u5hID8ir5 = '$u5h8ir5nm'"; 
    /*$cadenaToken = $id_dispositivo.'.'.$nombre_dispositivo;
    $tokenGenerado = base64_encode($cadenaToken);*/
    $sQl_d474_4rr4y = [/*'u5hDpID8ir5' => $id_dispositivo,
											 'u5hDpNm8ir5' => $nombre_dispositivo,
                       'u5htK8ir5' => $tokenGenerado,*/
                       'u5hOn44P8ir5' => 1,
											 //'u5hpV8ir5' => 0
											];		
		x3J3cU74DB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
		
		$p4r4m37r05 = "L4v3s_id = '$IDLL'";
		unset($sQl_d474_4rr4y);
		$FF = date("Y-m-d H:i:s");
		$sQl_d474_4rr4y = [
			'L4v3s_ff' => $FF
		];
		x3J3cU74DB('L4v3s', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);

		
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x012.$u5h8ir5nm;
		bi74c0('gN7kn', $_SESSION['m3ns4J3'], '');
		
	}
	else{
		$_SESSION['m3n3Rr0R']   = 'si';
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x013.$u5h8ir5nm;
		bi74c0('gN7kn2', $_SESSION['m3ns4J3'], '');
    
	}
	r3Diri6ir('../v75t4?axc0=5u540l_02&u5u4oxX='.$eCry($u5h8ir5nm));
	
}
elseif ($axc0 === '50200') {
	$u5u4oxX = $dCry($u5u4oxX);
	// --- Consulta para datos de usuario
	$q5u5xXd = "SELECT * FROM u5u405 WHERE u5hID8ir5 = '".$u5u4oxX."' ";
	$c5u5xXd = $cnnx4s->query($q5u5xXd) or die ("Falló al obtener datos de usuario " . $q5u5xXd);
	$d4705_u5u = [];
	while($dU5u4o = $c5u5xXd->fetch_assoc()){
		
		$u5h34r5_nombre = $dU5u4o['u5hA18ir5']. ' ' .$dU5u4o['u5hA28ir5']. ' ' .$dU5u4o['u5hN18ir5']. ' ' .$dU5u4o['u5hN28ir5'];

		$x4rr36l0 = array('u5hID8ir5' => $dU5u4o['u5hID8ir5'],
										 'u5hUS8ir5' => $dU5u4o['u5hUS8ir5'],
										 'u5h8ir5_nombre' => $u5h34r5_nombre,
										 'u5hFt8ir5' => $dU5u4o['u5hFt8ir5'],
										 'u5hN18ir5' => $dU5u4o['u5hN18ir5'],
										 'u5hN28ir5' => $dU5u4o['u5hN28ir5'],
										 'u5hA18ir5' => $dU5u4o['u5hA18ir5'],
										 'u5hA28ir5' => $dU5u4o['u5hA28ir5'],
                     'u5h8ir5_llave_privada' => $dU5u4o['u5hpV8ir5'],
                     'u5h8ir5_llave_publica' => $dU5u4o['u5hpU8ir5'],
                     'u5htK8ir5' => $dU5u4o['u5htK8ir5'],
                     'u5hOn8ir5' => $dU5u4o['u5hOn8ir5'],
                     'u5hOn44P8ir5' => $dU5u4o['u5hOn44P8ir5'],
                     'u5h8ir5_dispositivo_id' => $dU5u4o['u5hDpID8ir5'],
                     'u5h8ir5_dispositivo_nombre' => $dU5u4o['u5hDpNm8ir5']
				);
		array_push($d4705_u5u, $x4rr36l0); 
	}

}
