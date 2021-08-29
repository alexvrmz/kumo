<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';
session_start(); // --- Validar sesión ---

if($axc0 == 'x002'){
	include('ap4673i/ccnnxx547.php');
	include('ap4673i/fncnes5632.php');
	include('escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
  bi74c0('3xi7', lbl_8i7_x028.$_SESSION['u5hID8ir5'], '');
	
	include('escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_Bin4kuru.php');
	$axc0 = 101;
	$d3s = eCry2($Bin4kuru[$axc0]);
	$U = $_SESSION['u5hID8ir5'];
	Bin4kuru($d3s, $axc0, $V=0, $U, $F=0, $E=0, $D=0, $P=0);
	$Hy65 = glob('tmp/'.$_SESSION['xXUNVrSXx'].'/'.$_SESSION['u5hID8ir5'].'/*');
	foreach($Hy65 as $Hy6){		
			if(is_file($Hy6))
			chmod($Hy6, '0777');
			unlink($Hy6); 
	}
	bi74c0('3xi7e', lbl_8i7_x031.$_SESSION['u5hID8ir5'], ''); 

	session_destroy();
	

	header("location:index.php");

}

elseif(isset($_SESSION['xx_001']) && $axc0 != 'x006' && $axc0 != 'x001' ){ // ---- sesión iniciada, r3Diri6ir a index ----

	header("location: index.php");

}


elseif($axc0 == 'x001' && !isset($_SESSION['xx_001'])){ // --- Iniciar sesión si es redirigido y la sessi´on no existe ---
	
	// ---- Include del escen78 ----
	include('escen78/lgaccs25.php');
	
} 
elseif($axc0 == 'r3g7r0'){
	include('escen78/r3g7r0.php');
}
elseif($axc0 == 'x005'){ // --- Validar datos ---
		
	include 'ap4673i/ccnnxx547.php';
	include('escen78/iDi0m45/es_MX/i_8i74c0r4.php');
	include('ap4673i/fncnes5632.php');
	//include 'ap4673i/fncnes5632.php';
	
	$pp_xx005 = $cnnx4s->real_escape_string(htmlentities($pp_xx005));
	$psbxX012s = $cnnx4s->real_escape_string(htmlentities($psbxX012s));

	$passEncriptada = md5($psbxX012s);
	
	$query = "SELECT * FROM u5u405 WHERE u5hUS8ir5 = '" . $pp_xx005 . "' AND u5hpW8ir5 = '" . $passEncriptada . "' AND u5hOn8ir5 = 1";
	$consulta = $cnnx4s->query($query) or die ("Falló " . $query);

	if($d4705 = $consulta->fetch_assoc()){

		session_unset();
		session_destroy(); 
		session_start();
		

		$n1TYt = dCry2($d4705['u5hN18ir5']);
		$n2TYt = dCry2($d4705['u5hN28ir5']);
		$A1TYt = dCry2($d4705['u5hA18ir5']);
		$A2TYt = dCry2($d4705['u5hA28ir5']);

		$_SESSION['xx_001'] = [];
		$_SESSION['u5hID8ir5'] = $d4705['u5hID8ir5'];
		$_SESSION['iDi0m4'] = $d4705['u5h8ir5_iDi'];
		$_SESSION['u5hUS8ir5'] = $d4705['u5hUS8ir5'];
		$_SESSION['u5hN18ir5'] = $n1TYt;
		$_SESSION['u5hN28ir5'] = $n2TYt;
		$_SESSION['u5hA18ir5'] = $A1TYt;
		$_SESSION['u5hA28ir5'] = $A2TYt;
		$_SESSION['u5h8ir5_nombre_corto'] = $A1TYt . ' ' . $n1TYt;
		$_SESSION['u5h8ir5_nombre_completo'] = $A1TYt . ' ' . $A2TYt . ' ' . $n1TYt . ' ' . $n2TYt;
		$_SESSION['u5hOn8ir5'] = $d4705['u5hOn8ir5'];
		$_SESSION['u5hFt8ir5'] = $d4705['u5hFt8ir5'];
		$_SESSION['config_navbar'] = $d4705['config_navbar'];
		$_SESSION['config_accent'] = $d4705['config_accent'];
		$_SESSION['config_sidebar'] = $d4705['config_sidebar'];
		$_SESSION['config_brand'] = $d4705['config_brand'];
		$_SESSION['xXUNVrSXx'] = $d4705['xXUNVrSXx'];

		$fu = 'tmp/'.$_SESSION['xXUNVrSXx'].'/'.$_SESSION['u5hID8ir5'];
		mkdir($fu, 0777, true);
		//chmod($fu, 0777);
		chmod('tmp/'.$_SESSION['xXUNVrSXx'], 0777);
		$fu2 = '../d0cUm3N70s/'.$_SESSION['xXUNVrSXx'];
		mkdir($fu2, 0777, true);
		//chmod($fu2, 0777);

		$m5y6 = lbl_8i7_x001 .' '. $_SESSION['u5hID8ir5'].'<br>/= '.$_SERVER['HTTP_USER_AGENT'].'<br>/='.$_SERVER["REMOTE_ADDR"].'<br>/='.$_SERVER["REMOTE_PORT"];
		bi74c0('lgaccs25', $m5y6, '');
		
		include('escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_Bin4kuru.php');
		$axc0 = 100;
		$d3s = eCry2($Bin4kuru[$axc0]);
		$U = $_SESSION['u5hID8ir5'];
		Bin4kuru($d3s, $axc0, $V=0, $U, $F=0, $E=0, $D=0, $P=0);

		r3Diri6ir('v75t4?axc0=5u250e');
	} else{ 
		//	include('ap4673i/fncnes5632.php');
		$m3ns4J3	= 'El usuario y/o Contraseña son Incorrectos!!!';
		r3Diri6ir('lgaccs25?axc0=x001&m3ns4J3='.$m3ns4J3.'&err=true');

	}

} 
elseif($axc0 == 'x006'){ 

	include 'ap4673i/ccnnxx547.php';
	include 'ap4673i/fncnes5632.php';

	$Sq7yh = "SELECT u5hpW8ir5 FROM u5u405 WHERE u5hID8ir5 = '".$_SESSION['u5hID8ir5']."'";
	$Cq7yh = $cnnx4s->query($Sq7yh) or die ("Falló " . $Sq7yh);
	$d5tg5 = $Cq7yh->fetch_assoc();

	$psEcdDn45_xS = md5($cdDn45_xS);

	if($d5tg5['u5hpW8ir5'] == $psEcdDn45_xS){

		$_SESSION['session_look'] = false;
		r3Diri6ir($_SESSION['url_previa']);

	}else{
		
		$_SESSION['m3ns4J3'] = 'Contraseña Incorrecta';
		r3Diri6ir('v75t4?axc0=l00k5cR3n');
	}

}
elseif($axc0 == 'x007'){
	include('ap4673i/ccnnxx547.php');
	include('ap4673i/fncnes5632.php');
	
	if(!empty($xcd) && !empty($cft)){
		$xcd = $dCry($xcd);
		//$cft = $dCry($cft);
		$C001 = "SELECT u5hUS8ir5, u5hHSH8ir5 FROM u5u405 WHERE u5hUS8ir5 LIKE '$xcd' AND u5hHSH8ir5 LIKE '$cft'"; 
		$S001 = $cnnx4s->query($C001) or die ("Fallo al consultar hash de usuario: ".$C001);
		
		if($DDUH = $S001->fetch_assoc()){
			$p4r4 = "u5hUS8ir5 = '".$xcd."'";
			$ax = 'actualizar';
			unset($fg);
			$fg = [
				'u5hOn8ir5' => 1
			];
			x3J3cU74DB('u5u405', $fg, $ax, $p4r4);
			$m3ns4J3 = 'Tu cuenta se Activo con Exito!, ingresa tus credenciales.';
    	r3Diri6ir('lgaccs25?axc0=x001&m3ns4J3='.$eCry($m3ns4J3));
		}
		else{
			$m3ns4J3 = 'Enlace no Valido! 1<br>';
			$_SESSION['m3n3Rr0R'] = 'si';
    	r3Diri6ir('lgaccs25?axc0=x001&m3ns4J3='.$eCry($m3ns4J3));
		}

	}
	else{
		$m3ns4J3 = 'Enlace no Valido! 2';
		$_SESSION['m3n3Rr0R'] = 'si';
    r3Diri6ir('lgaccs25?axc0=x001&m3ns4J3='.$eCry($m3ns4J3));
	}

}

if($axc0 == '00001'){
	echo 'whoami';
}