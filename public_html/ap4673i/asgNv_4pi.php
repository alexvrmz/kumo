<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$axc0 = $dCry($axc0);
if(!isset($_SESSION['xx_001'])){
	header("location:../lgaccs25.php?axc0=x001"); // --- llevame a login si no hay sesión ---
}
if($axc0 === "svasg" || $axc0 === 'BrrS' || $axc0 === 'BrrA' || $axc0 === 'DrK' || $axc0 === 'cEfs' || $axc0 === '54v3c0nFi6' || $axc0 === 'mo0DStruX' || $axc0 === 'Ac7Vs7'){
	include('ccnnxx547.php');
 	include('fncnes5632.php');
}
if($axc0 === 'asNxV'){

	if($xux != ''){
		//$xux1 = $xux;
		$xux = $dCry($xux);
		$RT= $xux;
		$du = c0nUs(0, 0, $xux);

		$C005 = "SELECT * FROM r3l3UEF WHERE UEFUxTU = $xux";
		$S005 = $cnnx4s->query($C005) or die ("Fallo al consultar relaciones de usuario: ".$C005);
		$lV = [];
		while ($DR = $S005->fetch_assoc()) {
			$xDeidn = $DR['UEFExTU'];
			$xDfidn = $DR['UEFExTU'];
			$xDaidn = $DR['UEFVxTU'];

			$C006 = "SELECT * FROM v3hiXu7l0s WHERE xV3hiFl074Xu7l0s = $xDfidn OR xV3hi3MPrXu7l0s = $xDeidn";
			$S006 = $cnnx4s->query($C006) or die ("Fallo: error al seleccionar autos: ".$C006);
			while ($DV = $S006->fetch_assoc()) {

				$vXIDxv = $DV['xV3hiIDXu7l0s'];
				$vXECxv = dCry2($DV['xV3hi3C0Xu7l0s']);
				$vXPLxv = dCry2($DV['xV3hiPl4c45Xu7l0s']);
				$eid = $DV['xV3hi3MPrXu7l0s'];
				$xVFIxv = $DV['xV3hiFl074Xu7l0s'];
				$xVUIxv = $DV['xV3hiUIDXu7l0s'];
				$xVEDxv = $DV['xV3hiEDOXu7l0s'];

				$de = c0nEmP($eid);
				$enc = $de[0]['XrNICEx'];
				$erz = $de[0]['XrRZEx'];
				$eMp = $eid;

				$df = C0nFl0($eMp);
				$fnm = $df[0]['xfmnfx'];

				if($xVEDxv == 1){
					$art = [
						'vXIDxv' => $vXIDxv,
						'vXECxv' => $vXECxv,
						'vXPLxv' => $vXPLxv,
						'vXEIxv' => $enc,
						'xVFIxv' => $fnm,
					];
					array_push($lV, $art);
				}
			}
		}
	}
	elseif($v3h != ''){
		$v3h = $dCry($v3h);
		$C001 = "SELECT * FROM v3hiXu7l0s WHERE xV3hiIDXu7l0s = $v3h";
		$S001 = $cnnx4s->query($C001) or die ("Fallo al consultar datos de automovil: ".$C001);
		$DV = $S001->fetch_assoc();
		$xgVid0m = $DV['xV3hiIDXu7l0s'];
		$xgV3co0m = $DV['xV3hi3C0Xu7l0s'];
		$xgVpl40m = $DV['xV3hiPl4c45Xu7l0s'];
		$xgV3mp0m = $DV['xV3hi3MPrXu7l0s'];
		$xgVflo0m = $DV['xV3hiFl074Xu7l0s'];
		$ePr3 = $xgV3mp0m;
		$du = [];
		$C003 = "SELECT * FROM `r3l3UEF` WHERE `UEFVxTU` = 0 AND UEFExTU = $xgV3mp0m";
		$S003 = $cnnx4s->query($C003) or die ("Fallo al cargar relaciones de auto: ".$C003);
		while($DR = $S003->fetch_assoc()){
			$u = $DR['UEFUxTU'];
			$C007 = "SELECT * FROM `u5u405` WHERE `u5hID8ir5` = $u ORDER BY `u5hID8ir5`";
			$S007 = $cnnx4s->query($C007) or die ("Fallo al consultar datos de usuario: ".$C007);
			while ($Duu = $S007->fetch_array()) {
				if($Duu['u5hA18ir5'] != ''){ $A18ir5 = dCry2($Duu['u5hA18ir5']); }
				if($Duu['u5hA28ir5'] != ''){ $A28ir5 = dCry2($Duu['u5hA28ir5']); }
				if($Duu['u5hN18ir5'] != ''){ $N18ir5 = dCry2($Duu['u5hN18ir5']); }
				if($Duu['u5hN28ir5'] != ''){ $N28ir5 = dCry2($Duu['u5hN28ir5']); }
				if($Duu['u5hUS8ir5'] != ''){ $US8ir5 = /*dCry2(*/$Duu['u5hUS8ir5']/*)*/; }

				$u5h34r5_nombre = $N18ir5. ' ' .$A28ir5. ' ' .$N18ir5. ' ' .$N28ir5;
				
				$x4rr36l0 = array('u5hID8ir5' => $Duu['u5hID8ir5'],
												'u5hUS8ir5' => $US8ir5,
												'u5h8ir5_nombre' => $u5h34r5_nombre,
												'u5hFt8ir5' => $Duu['u5hFt8ir5'],
												'u5hN18ir5' => $N18ir5,
												'u5hN28ir5' => $N28ir5,
												'u5hA18ir5' => $A18ir5,
												'u5hA28ir5' => $A28ir5,
												'u5h8ir5_llave_privada' => $froi9,
												'u5h8ir5_llave_publica' => $froi7,
												'u5htK8ir5' => $froi8,
												'u5hOn8ir5' => $Duu['u5hOn8ir5'],
												'u5hOn44P8ir5' => $Duu['u5hOn44P8ir5']
						);
				array_push($du, $x4rr36l0); 
			}
		}


		//$du = c0nUs($ePr3);
	}
	elseif($v3h == '' && $xux == ''){
		include('escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_817_as_01;
    $_SESSION['m3n3Rr0R'] = 'si';
		llevame('v75t4?axc0=v3hiXs');
	}
	
	/*
	unset($sQl_d474_4rr4y);		
	$axc0 = 'actualizar';
	$p4r4m37r05 = "u5hID8ir5 = '".$cc_x002."' ";
	$sQl_d474_4rr4y = ['config_7im3Bl0' => $cc_x001];		
	ejecutaDB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
	
	include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
	include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_c0Nfi6.php');
	$m3ns4J3 = lbl_8i7_x0706;
	if(!empty($cc_x001)){ $m3ns4J3 .= lbl_x001.','; }
	 
	bi74c0('actC0nF', $m3ns4J3, '');
	$_SESSION['m3ns4J3'] = $m3ns4J3;

	llevame('../v75t4?axc0=c0Nfi6');*/
}
elseif($axc0 === 'svasg'){
	$axc0 = 'actualizar';
		$p4r4m37r05 = "xV3hiIDXu7l0s = '".$r_002."'";
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = [
			'xV3hiEDOXu7l0s' => 4,
			//'xV3hiUIDXu7l0s' => $r_001
		];		
		ejecutaDB('v3hiXu7l0s', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);

		
		$C002 = "SELECT * FROM r3l3UEF WHERE UEFUxTU = $r_001";
		$S002 = $cnnx4s->query($C002) or die ("Fallo al seleccionar relaciones de usuario: ".$C002);
		$DR = $S002->fetch_assoc();
		$nr = $S002->num_rows;

		if($nr == 0){
			unset($sQl_d474_4rr4y);
			$sQl_d474_4rr4y = [
				'UEFUxTU' => $r_001,
				'UEFVxTU' => $r_002
			];		
			$p4r4m37r05 = '';
			$axc0 = 'insertar';
			ejecutaDB('r3l3UEF', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
		}
		else{
			unset($sQl_d474_4rr4y);
			$sQl_d474_4rr4y = [
				'UEFVxTU' => $r_002
			];		
			$p4r4m37r05 = "UEFUxTU = '".$r_001."'";
			$axc0 = 'actualizar';
			ejecutaDB('r3l3UEF', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
		}

		$_SESSION['m3ns4J3'] = 'Se Asigno el Auto: '.$r_002.' al usuario: '.$r_001;

		bi74c0('4ctrelAU', $_SESSION['m3ns4J3'], '');
		bi74c0('4ctEdoAu', 'Se actualizo a C/Operador el Auto: '.$r_002,'');

	if($r_003 == 'xux'){
		
		llevame('../v75t4?axc0=5u540l_02&u5u4oxX='.$eCry($r_001));
	}
	elseif($r_003 == 'v3h'){
		
		llevame('../v75t4?axc0=v3hFh4&vh3iP='.$eCry($r_002));
	}
	
}
?>