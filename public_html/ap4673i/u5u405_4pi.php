<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$axc0 = $dCry($axc0);
if(!isset($_SESSION['xx_001'])){
	header("location:../lgaccs25.php?axc0=x001"); // --- r3Diri6ir a login si no hay sesión ---
}
$xXUNVrSXx = $_SESSION['xXUNVrSXx'];

if($axc0 === "5u540l_03" || $axc0 === '5u540l_04' || $axc0 === '10300' || $axc0 === '10400' || $axc0 === 'r3gu'){
	include('ccnnxx547.php');
 	include('fncnes5632.php');
 	include('fncnesF0rM5.php');
}
/// --- axc0 Listado de usuarios
if($axc0 === "5u540l"){
	if($pp_xx001_add != ''){ $pp_xx001_add = $dCry($pp_xx001_add); }
	if($pp_xx002_add != ''){ $pp_xx002_add = $dCry($pp_xx002_add); }
	if($pp_xx003_add != ''){ $pp_xx003_add = $dCry($pp_xx003_add); }
	if($pp_xx004_add != ''){ $pp_xx004_add = $dCry($pp_xx004_add); }
	if($pp_xx005_add != ''){ $pp_xx005_add = $dCry($pp_xx005_add); }
	if($pp_xx006_add != ''){ $pp_xx006_add = $dCry($pp_xx006_add); }
	if($pp_xx007_add != ''){ $pp_xx007_add = $dCry($pp_xx007_add); }
	if($pp_xx008_add != ''){ $pp_xx008_add = $dCry($pp_xx008_add); }
	if($cxxt453_add != ''){ $cxxt453_add = $dCry($cxxt453_add); }

	//$C002 = "SELECT eMIDEm FROM eMpR3sA5 WHERE eMiDuS3Em = $u5u4i0 ";
	//$S002 = $cnnx4s->query($C002) or die ("Fallo al cargar empresas: ".$C002);
	$LU = [];
	/*while ($DE = $S002->fetch_assoc()) {
		$ei = $DE['eMIDEm'];
		$C003 = "SELECT UEFUxTU FROM r3l3UEF WHERE UEFExTU = $ei ";
		$S003 = $cnnx4s->query($C003) or die ("Fallo al seleccionar relaciondes de usuarios: ".$c003);
		while($DR = $S003->fetch_assoc()){
			$iu = $DR['UEFUxTU'];*/
			$C004 = "SELECT * FROM u5u405 WHERE xXUNVrSXx = $xXUNVrSXx ";
			$S004 = $cnnx4s->query($C004) or die ("Fallo al seleccionar usuarios: ".$C004);
			$nu = $S004->num_rows;
			

			while ($DU = $S004->fetch_assoc()) {
				$cDfA2 = $DU['u5hA28ir5'];
				$cDfN2 = $DU['u5hN28ir5'];
				if($cDfA2 != ''){ $cDfA2 = dCry2($DU['u5hA28ir5']); } else{ $cDfA2 = '';}
				if($cDfN2 != ''){ $cDfN2 = dCry2($DU['u5hN28ir5']); } else{ $cDfN2 = '';}
				$xuid = $DU['u5hID8ir5'];
				$xuus = $DU['u5hUS8ir5'];
				$xuft = $DU['u5hFt8ir5'];
				$xunc = dCry2($DU['u5hA18ir5']).' '.$cDfA2.' '.dCry2($DU['u5hN18ir5']).' '.$cDfN2;
			

				$ar4 = array(
					'xuid' => $xuid,
					'xuus' => $xuus,
					'xuft' => $xuft,
					'xunc' => $xunc,
				);
				array_push($LU, $ar4);
			}
		//} 
	//}

	//$C002 = "SELECT * FROM u5u405 WHERE "
	if($flo0 == '' && $ePr3 == ''){
		include('escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		//$_SESSION['m3n3Rr0R']  = 'si';
		//$_SESSION['m3ns4J3'] = lbl_8i7_U014;
		$hr = 'v75t4?axc0=5u250e';
		//r3Diri6ir($hr);
	}
	else{ 
		
		if($flo0 != ''){
			$u5hy68 = c0nUs($flo0, 0);
		}
		elseif($ePr3 != ''){
			$u5hy68 = c0nUs(0, $ePr3);
		}
	}
}
/// --- axc0 Consultar Datos de un usuario
elseif($axc0 === "5u540l_02"){
	$u5u4oxX = $dCry($u5u4oxX);
	if(!empty($u5u4oxX)){
    // --- Consulta para datos de usuario
    $q5u5xXd = "SELECT * FROM u5u405 WHERE u5hID8ir5 = '".$u5u4oxX."' ";
    $c5u5xXd = $cnnx4s->query($q5u5xXd) or die ("Falló al obtener datos de usuario " . $q5u5xXd);
    $d4705_u5u = [];
    while($dU5u4o = $c5u5xXd->fetch_assoc()){

			$SQkdo = "SELECT * FROM L4v3s WHERE L4v3s_id = '".$dU5u4o['u5hpV8ir5']."'";
			$CQkdo = $cnnx4s->query($SQkdo) or die ("Fallo al seleccionar llaves ".$SQkdo);
			$dkjiT = $CQkdo->fetch_assoc();
			$froi9 = dCry2($dkjiT['L4v3s_pv']);
			$dis66 = dCry2($dkjiT['L4v3s_dipnme']);
			$sjh77 = dCry2($dkjiT['L4v3s_dipid']);
			//	$u5hN1 = dCry2($dU5u4o['u5hN18ir5']);
			if($dU5u4o['u5hA18ir5'] != ''){ $A18ir5 = dCry2($dU5u4o['u5hA18ir5']); }
			if($dU5u4o['u5hA28ir5'] != ''){ $A28ir5 = dCry2($dU5u4o['u5hA28ir5']); }
			if($dU5u4o['u5hA28ir5'] == ''){ $A28ir5 = ''; }
			if($dU5u4o['u5hN18ir5'] != ''){ $N18ir5 = dCry2($dU5u4o['u5hN18ir5']); }
			if($dU5u4o['u5hN28ir5'] != ''){ $N28ir5 = dCry2($dU5u4o['u5hN28ir5']); }
			if($dU5u4o['u5hN28ir5'] == ''){ $N28ir5 = ''; }
			if($dU5u4o['u5hUS8ir5'] != ''){ $US8ir5 = /*dCry2(*/$dU5u4o['u5hUS8ir5']/*)*/; }

      $u5h34r5_nombre = $N18ir5. ' ' .$A28ir5. ' ' .$N18ir5. ' ' .$N28ir5;
			$C005 = "SELECT * FROM r3l3UEF WHERE UEFUxTU = $u5u4oxX";
			$S005 = $cnnx4s->query($C005) or die ("Fallo al consultar relaciones de usuario: ".$C005);
			if($DdR = $S005->fetch_assoc()){
				$xDridn = $DdR['UEFIxTU'];
				$xDeidn = $DdR['UEFExTU'];
				$xDfidn = $DdR['UEFFxTU'];
				$xDaidn = $DdR['UEFVxTU'];

				$C008 = "SELECT eMNICEm, eMIDEm FROM eMpR3sA5 WHERE eMIDEm = $xDeidn";
				$S008 = $cnnx4s->query($C008) or die ("Fallo al consultar empresas: ".$C008);
				$DdE = $S008->fetch_assoc();
				$nEmP = dCry2($DdE['eMNICEm']);

				$C009 = "SELECT xN4m37l0, xID7l0 FROM x7l07 WHERE xID7l0 = $xDfidn";
				$S009 = $cnnx4s->query($C009) or die ("Fallo al consultar flotas: ".$C009);
				$DdF = $S009->fetch_assoc();
				$nFlO = dCry2($DdF['xN4m37l0']);
			}

      $x4rr36l0 = array('u5hID8ir5' => $dU5u4o['u5hID8ir5'],
                      'u5hUS8ir5' => $US8ir5,
                      'u5h8ir5_nombre' => $u5h34r5_nombre,
                      'u5hFt8ir5' => $dU5u4o['u5hFt8ir5'],
                      'u5hN18ir5' => $N18ir5,
                      'u5hN28ir5' => $N28ir5,
                      'u5hA18ir5' => $A18ir5,
                      'u5hA28ir5' => $A28ir5,
                      'u5h8ir5_llave_privada' => $froi9,
											'dis66' => $dis66,
											'sjh77' => $sjh77,
                      'u5hOn8ir5' => $dU5u4o['u5hOn8ir5'],
                      'u5hOn44P8ir5' => $dU5u4o['u5hOn44P8ir5'],
											'xDeidn' => $xDeidn,
											'xDfidn' => $xDfidn,
											'nEmP' => $nEmP,
											'nFlO' => $nFlO
          );
      array_push($d4705_u5u, $x4rr36l0); 
    }

		$C008 = "SELECT eMNICEm, eMIDEm FROM eMpR3sA5 WHERE xXUNVrSXx = $xXUNVrSXx";
		$S008 = $cnnx4s->query($C008) or die ("Fallo al consultar empresas: ".$C008);
		$LDE = [];
		while ($DdE = $S008->fetch_array()) {
			$xEID = $DdE['eMIDEm'];
			$xNIc = dCry2($DdE['eMNICEm']);
			unset($elme);
			$elme = [
				'xEID' => $xEID,
				'xNIc' => $xNIc
			];
			array_push($LDE, $elme);
		}

		$C009 = "SELECT xN4m37l0, xID7l0 FROM x7l07 WHERE xXUNVrSXx = $xXUNVrSXx";
		$S009 = $cnnx4s->query($C009) or die ("Fallo al consultar flotas: ".$C009);
		$LDF = [];
		while ($DdE = $S009->fetch_array()) {
			$xFID = $DdE['xID7l0'];
			$xFDc = dCry2($DdE['xN4m37l0']);
			unset($elme);
			$elme = [
				'xFID' => $xFID,
				'xFDc' => $xFDc
			];
			array_push($LDF, $elme);
		}

		$C005 = "SELECT * FROM r3l3UEF WHERE UEFUxTU = $u5u4oxX";
		$S005 = $cnnx4s->query($C005) or die ("Fallo al consultar relaciones de usuario: ".$C005);
		$lV = [];
		
			while ($DR = $S005->fetch_assoc()) {
				if($DR['UEFVxTU'] != 0){
					$xDridn = $DR['UEFIxTU'];
					$xDeidn = $DR['UEFExTU'];
					$xDfidn = $DR['UEFFxTU'];
					$xDaidn = $DR['UEFVxTU'];

					$C006 = "SELECT * FROM v3hiXu7l0s WHERE xV3hiIDXu7l0s = $xDaidn";
					$S006 = $cnnx4s->query($C006) or die ("Fallo: erro al seleccionar auto: ".$C006);
					$DV = $S006->fetch_assoc();

					$vXIDxv = $DV['xV3hiIDXu7l0s'];
					$vXECxv = dCry2($DV['xV3hi3C0Xu7l0s']);
					$vXPLxv = dCry2($DV['xV3hiPl4c45Xu7l0s']);
					$vXEIxv = $DV['xV3hi3MPrXu7l0s'];
					$xVFIxv = $DV['xV3hiFl074Xu7l0s'];
					$xVUIxv = $DV['xV3hiUIDXu7l0s'];
					$xVEDxv = $DV['xV3hiEDOXu7l0s'];
					$xVMDidxv = $DV['xV3hi5uBm4rc4Xu7l0s'];
					$vXMKidxv = $DV['xV3hiM4rc4Xu7l0s'];
					$xVTPxv = dCry2($DV['xV3hi5ub7ip0Xu7l0s']);
					$xVANxV = $DV['xV3hi4n0Xu7l0s'];

					$C007 = "SELECT m4rCxD35c5s FROM m4rC45v3Hi WHERE m4rCxID5s = $vXMKidxv";
					$S007 = $cnnx4s->query($C007) or die ("Fallo al seleccionar marca de auto: ".$C007);
					$DM = $S007->fetch_assoc();
					$vXMKxv = $DM['m4rCxD35c5s'];

					$SQ5u8M4 = "SELECT j5uBxMiMgx, j5uBxD35x FROM m0d3loS WHERE j5uBxIDx = '".$xVMDidxv."' ";
					$CQ5u8M4 = $cnnx4s->query($SQ5u8M4) or die ("Falló al cargar submarcas: ".$SQ5u8M4);
					$su8 = $CQ5u8M4->fetch_assoc();
					$j5m0FT = $su8['j5uBxMiMgx'];
					if($j5m0FT != ''){
						$xVFTxv = '<img src="dist/img/m0d3l0s/'.$su8['j5uBxMiMgx'].'" class="card-img-top" style="width: 100px;">';
					}
					else{
						$xVFTxv = '<img src="dist/img/m0d3l0s/0.png" class="card-img-top" style="width: 100px;">';
					}
					$xVMDxv = $su8['j5uBxD35x'];
					$ea = true;
					$lDUREF = [
						'xDeidn' => $xDeidn
					];
					array_push($lV);
				}
				else{
					$ea = false;
				}				
			}
		
  }
  else{
    $_SESSION['m3ns4J3'] = 'No habia ID de usuario a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    r3Diri6ir('v75t4?axc0=5u540l');
  }
 
}
/// --- axc0 Actualizar Usuario en BD
elseif ($axc0 === '5u540l_03') {
	unset($_SESSION['m3ns4j3Frm']);
	$_SESSION['m3ns4j3Frm'] = [];
	$_SESSION['err'] = 0;

	if(!v4lRQ($pp_xx001)){
		$_SESSION['m3ns4j3Frm']['pp_xx001'] = 'Ingresa el Primer Nombre';		
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}
	elseif(strlen($pp_xx001) > 30){
		$_SESSION['m3ns4j3Frm']['pp_xx001'] = 'El campo Primer Nombre solo puede contener 30 caracteres';	
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;	
	}
	
	if(strlen($pp_xx002) > 30){
		$_SESSION['m3ns4j3Frm']['pp_xx002'] = 'El campo Segundo Nombre solo puede contener 30 caracteres';		
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}

	if(!v4lRQ($pp_xx003)){
		$_SESSION['m3ns4j3Frm']['pp_xx003'] = 'Ingresa el Apellido Paterno';		
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}
	elseif(strlen($pp_xx003) > 30){
		$_SESSION['m3ns4j3Frm']['pp_xx003'] = 'El campo Apellido Paterno solo puede contener 30 caracteres';		
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}

	if(strlen($pp_xx004) > 30){
		$_SESSION['m3ns4j3Frm']['pp_xx004'] = 'El campo Apellido Materno solo puede contener 30 caracteres';		
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}

	if(!v4l_mail($pp_xx005)){
		$_SESSION['m3ns4j3Frm']['pp_xx005'] = 'El Correo Eléctronico no es válido';		
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}
	elseif(!v4lRQ($pp_xx005)){
		$_SESSION['m3ns4j3Frm']['pp_xx005'] = 'Ingresa El Correo Eléctronico';
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}

	if(!empty($cxxt453)){
		if(!V4lPss($cxxt453)){
		$_SESSION['m3ns4j3Frm']['cxxt453'] = 'Tu contraseña debe tener al menos 8 caracteres:<br> ->1 número<br> ->1 minúscula<br> ->1 mayúscula<br> ->1 carácter (, _ @ #. + * / -))';
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}
	}

	/*if(!v4lRQ($pp_xx006) || $pp_xx006 == 'nada'){
		$_SESSION['m3ns4j3Frm']['pp_xx006'] = 'Selecciona el puesto de la persona';
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}
	elseif(!is_numeric($pp_xx006)){
		$_SESSION['m3ns4j3Frm']['pp_xx006'] = 'Se ha manipulado la información, elige una de las opciones';
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
		$pp_xx006 == 'nada';
	}
	
	if(!v4lRQ($pp_xx007) || $pp_xx007 == 'nada'){
		$_SESSION['m3ns4j3Frm']['pp_xx007'] = 'Selecciona La Empresa';
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}

	if(!v4lRQ($pp_xx008) || $pp_xx008 == 'nada'){
		$_SESSION['m3ns4j3Frm']['pp_xx008'] = 'Selecciona La Flota';
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}*/
 
	$pp_xx001 = Cl34N($pp_xx001);
	$pp_xx002 = Cl34N($pp_xx002);
	$pp_xx003 = Cl34N($pp_xx003);
	$pp_xx004 = Cl34N($pp_xx004);
	$pp_xx005 = strtolower($pp_xx005); 


	//if($u5h8ir5nm != '' && $pp_xx005 != ''){
		if($_SESSION['err'] == 0){
			if($pp_xx001 != ''){ $pp_xx001 = eCry2($pp_xx001); }
			if($pp_xx002 != ''){ $pp_xx002 = eCry2($pp_xx002); }
			if($pp_xx002 == ''){ $pp_xx002 = $pp_xx002; }
			if($pp_xx003 != ''){ $pp_xx003 = eCry2($pp_xx003); }
			if($pp_xx004 != ''){ $pp_xx004 = eCry2($pp_xx004); }
			//if($pp_xx005 != ''){ $pp_xx005 = eCry2($pp_xx005); }
			if($cxxt453 != ''){ $cxxt453 = md5($cxxt453); }

			$axc0 = 'actualizar';
			$p455wMd5 = $cxxt453;
			$cxxt_A533n = $eCry($u5h34r5_pass_ase);
			$p4r4m37r05 = "u5hID8ir5 = '$u5h8ir5nm'"; 

			if($p455wMd5 == ''){
				unset($sQl_d474_4rr4y);
			
				$sQl_d474_4rr4y = ['u5hN18ir5' => $pp_xx001,
												'u5hN28ir5' => $pp_xx002,
												'u5hA18ir5' => $pp_xx003,
												'u5hA28ir5' => $pp_xx004,
												'u5hUS8ir5' => $pp_xx005
												];		

				$xidu = x3J3cU74DB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
				

				include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
				$_SESSION['m3ns4J3'] = lbl_8i7_x004.$pp_xx005;
				bi74c0('3dtu5u', $_SESSION['m3ns4J3'], '');
				
				include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_Bin4kuru.php');
				$axc0 = 203;
				$d3s = eCry2($Bin4kuru[$axc0]);
				Bin4kuru($d3s, $axc0, $V=0, $u5h8ir5nm, $F=0, $E=0, $D=0, $P=0);

			}
			elseif ($p455wMd5 != '') {
				$sQl_d474_4rr4y = ['u5hN18ir5' => $pp_xx001,
												'u5hN28ir5' => $pp_xx002,
												'u5hA18ir5' => $pp_xx003,
												'u5hA28ir5' => $pp_xx004,
												'u5hUS8ir5' => $pp_xx005,
												'u5hpW8ir5' => $p455wMd5
												];		
				$xidu = x3J3cU74DB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
				include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
				$_SESSION['m3ns4J3'] = lbl_8i7_x005.$pp_xx005;
				bi74c0('3dtu5u2', $_SESSION['m3ns4J3'], '');

				$pp_xx001 = dCry2($pp_xx001);
				$pp_xx002 = dCry2($pp_xx002);
				$pp_xx003 = dCry2($pp_xx003);
				$pp_xx004 = dCry2($pp_xx004);
			}
			else {
				$_SESSION['m3n3Rr0R']  = 'si';
				include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
				$_SESSION['m3ns4J3'] = lbl_8i7_x006.$pp_xx005;
				bi74c0('3dtu5u3', $_SESSION['m3ns4J3'], '');
			}
		}
	/*}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x007.$pp_xx005;	
		bi74c0('3dtu5u4', $_SESSION['m3ns4J3'], '');
    $r = '../v75t4?axc0=5u540l';
	}*/

	if($_SESSION['err'] == 0){
		$r = '../v75t4?axc0=5u540l_02&u5u4oxX='.$eCry($u5h8ir5nm);
	}
	else{
		$r = '../v75t4?axc0=5u540l_02&u5u4oxX='.$eCry($u5h8ir5nm);
		if(!empty($pp_xx001)){ $r .= '&pp_xx001='.$eCry($pp_xx001);	}
		if(!empty($pp_xx002)){ $r .= '&pp_xx002='.$eCry($pp_xx002);	}
		if(!empty($pp_xx003)){ $r .= '&pp_xx003='.$eCry($pp_xx003);	}
		if(!empty($pp_xx004)){ $r .= '&pp_xx004='.$eCry($pp_xx004);	}
		if(!empty($pp_xx005)){ $r .= '&pp_xx005='.$eCry($pp_xx005);	}
		if(!empty($pp_xx006)){ $r .= '&pp_xx006='.$eCry($pp_xx006);	}
		if(!empty($pp_xx007)){ $r .= '&pp_xx007='.$eCry($pp_xx007);	}
		if(!empty($pp_xx008)){ $r .= '&pp_xx008='.$eCry($pp_xx008);	}
		if(!empty($cxxt453)){ 	$r .= '&cxxt453='.$eCry($cxxt453);	}
		//echo 'hola';
	}
	r3Diri6ir($r);

}
/// --- axc0 agregar usuario
elseif ($axc0 == '5u540l_04') {

	unset($_SESSION['m3ns4j3Frm']);
	$_SESSION['m3ns4j3Frm'] = [];
	$_SESSION['err'] = 0;

  if(!v4lRQ($pp_xx001_add)){
		$_SESSION['m3ns4j3Frm']['pp_xx001_add'] = 'Ingresa el Primer Nombre';		
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}
	elseif(strlen($pp_xx001_add) > 30){
		$_SESSION['m3ns4j3Frm']['pp_xx001_add'] = 'El campo Primer Nombre solo puede contener 30 caracteres';	
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;	
	}
	
	if(strlen($pp_xx002_add) > 30){
		$_SESSION['m3ns4j3Frm']['pp_xx002_add'] = 'El campo Segundo Nombre solo puede contener 30 caracteres';		
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}

	if(!v4lRQ($pp_xx003_add)){
		$_SESSION['m3ns4j3Frm']['pp_xx003_add'] = 'Ingresa el Apellido Paterno';		
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}
	elseif(strlen($pp_xx003_add) > 30){
		$_SESSION['m3ns4j3Frm']['pp_xx003_add'] = 'El campo Apellido Paterno solo puede contener 30 caracteres';		
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}

	if(strlen($pp_xx004_add) > 30){
		$_SESSION['m3ns4j3Frm']['pp_xx004_add'] = 'El campo Apellido Materno solo puede contener 30 caracteres';		
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}

	if(!v4l_mail($pp_xx005_add)){
		$_SESSION['m3ns4j3Frm']['pp_xx005_add'] = 'El Correo Eléctronico no es válido';		
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}
	elseif(!v4lRQ($pp_xx005_add)){
		$_SESSION['m3ns4j3Frm']['pp_xx005_add'] = 'Ingresa El Correo Eléctronico';
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}
	elseif(x_sisM($pp_xx005_add)){
		$_SESSION['m3ns4j3Frm']['pp_xx005_add'] = 'El Correo Eléctronico ya esta registrado';
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}

	if(!V4lPss($cxxt453_add)){
		$_SESSION['m3ns4j3Frm']['cxxt453_add'] = 'Tu contraseña debe tener al menos 8 caracteres:<br> ->1 número<br> ->1 minúscula<br> ->1 mayúscula<br> ->1 carácter (, _ @ #. + * / -))';
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}

	if(!v4lRQ($pp_xx006_add) || $pp_xx006_add == 'nada'){
		$_SESSION['m3ns4j3Frm']['pp_xx006_add'] = 'Selecciona el puesto de la persona';
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}
	elseif(!is_numeric($pp_xx006_add)){
		$_SESSION['m3ns4j3Frm']['pp_xx006_add'] = 'Se ha manipulado la información, elige una de las opciones';
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
		$pp_xx006_add == 'nada';
	}
	
	if(!v4lRQ($pp_xx007_add) || $pp_xx007_add == 'nada'){
		$_SESSION['m3ns4j3Frm']['pp_xx007_add'] = 'Selecciona La Empresa';
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}

	if(!v4lRQ($pp_xx008_add) || $pp_xx008_add == 'nada'){
		$_SESSION['m3ns4j3Frm']['pp_xx008_add'] = 'Selecciona La Flota';
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['err'] ++;
	}

	$pp_xx001_add = Cl34N($pp_xx001_add);
	$pp_xx002_add = Cl34N($pp_xx002_add);
	$pp_xx003_add = Cl34N($pp_xx003_add);
	$pp_xx004_add = Cl34N($pp_xx004_add);
	$pp_xx005_add = strtolower($pp_xx005_add); 

	if($_SESSION['err'] == 0){

		$xx005 = $pp_xx005_add;
		$xx001 = eCry2($pp_xx001_add);
		$xx002 = eCry2($pp_xx002_add);
		$xx003 = eCry2($pp_xx003_add);
		$xx004 = eCry2($pp_xx004_add);
		$xxt453 = md5($cxxt453_add);
		$activo = '1';
		$On44P = '0';
		$ft = 'dist/img/usuario.png';
		$config_navbar = 'navbar-light navbar-warning';
		$config_accent = 'accent-warning';
		$config_sidebar = 'sidebar-dark-warning';
		$config_brand = 'navbar-warning';
		$config_7im3Bl0 = 10;
		$config_DrKm0d = 1;
		$config_m0dstr = 1;
		$config_vista = 2;
		$u5h8ir5_iDi = 'es_MX';
		$xx006 = $pp_xx006_add;
		$u5hFR8ir5 = date("Y-m-d H:i:s");

		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = [
			'u5hUS8ir5' => $xx005,
			'u5hN18ir5' => $xx001,
			'u5hN28ir5' => $xx002,
			'u5hA18ir5' => $xx003,
			'u5hA28ir5' => $xx004,
      'u5hpW8ir5' => $xxt453,
      'u5hpV8ir5' => 0,
      'u5hpU8ir5' => 0,
			'u5hDpID8ir5' => 0,
			'u5hDpNm8ir5' => 0,
			'u5htK8ir5' => 0,
			'u5hOn8ir5' => $activo,
			'u5hOn44P8ir5' => 0,
			'u5hFt8ir5' => $ft,
			'config_navbar' => $config_navbar,
			'config_accent' => $config_accent,
			'config_sidebar' => $config_sidebar,
			'config_brand' => $config_brand,
			'config_7im3Bl0' => $config_7im3Bl0,
			'config_rDven' => 30,
			'config_DrKm0d' => $config_DrKm0d,
			'config_m0dstr' => $config_m0dstr,
			'config_vista' => $config_vista,
			'u5h8ir5_iDi' => $u5h8ir5_iDi,
			'u5hpR0lr5' => $xx006,
			'u5hFR8ir5' => $u5hFR8ir5,
			'xXUNVrSXx' => $xXUNVrSXx
		];
		
		$xidu = x3J3cU74DB('u5u405', $sQl_d474_4rr4y, 'insertar', '');
		echo $xidu;
		if($xidu != ''){
			include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
			$_SESSION['m3ns4J3'] = lbl_8i7_x002.$pp_xx005_add;
			$_SESSION['pp_xx005_add'] = $pp_xx005_add;
			$_SESSION['cxxt453_add'] = $cxxt453_add;
			
			include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_Bin4kuru.php');
			$axc0 = 200;
			$d3s = eCry2($Bin4kuru[$axc0]);
			Bin4kuru($d3s, $axc0, $V=0, $xidu, $F=0, $E=0, $D=0, $P=0);

			bi74c0('addu5u', $_SESSION['m3ns4J3'], '');

			$yarra = [
				'UEFUxTU' => $xidu,
				'UEFExTU' => $pp_xx007_add,
				'UEFFxTU' => $pp_xx008_add,
				'UEFVxTU' => 0,
				'UEFTxTU' => $u5hFR8ir5,
			];
			$axc0 = 'insertar';
			x3J3cU74DB('r3l3UEF', $yarra, $axc0, $p4r4m37r05);

			$p3rm5admin = [
				1 => '100-001',
				12 => '100-002',
				27 => '1100-001',
				28 => '1100-002', 
				42 => '1100-004',
				37 => '1200-001',
				29 => '1100-003',
				38 => '1200-002',
				43 => '1200-004',
				19 => '700-001',
				39 => '1200-003',
				31 => '700-002',
				32 => '700-004',
				30 => '700-003',
				33 => '700-005',
				34 => '700-006',
				35 => '700-007',
				36 => '700-008',
				40 => '700-009',
				41 => '700-010',
				45 => '700-012',
				44 => '700-011',
				46 => '700-013',
				47 => '700-014',
				9 => '500-001',
				10 => '500-002',
				11 => '500-003',
				13 => '500-004',
				14 => '500-005',
				15 => '500-006',
				16 => '500-007',
				3 => '300-001',
				5 => '300-003',
				4 => '300-002',
				49 => '700-015',
				15 => '500-006'
			];
			$p3rm5OPE = [
				1 => '100-001',
				32 => '700-004',
				44 => '700-011',
				36 => '700-008',
				35 => '700-007',
				34 => '700-006',

			];

		}
	}

	
	if($xidu != ''){
		$r = '../v75t4?axc0=5u540l_02&u5u4oxX='.$eCry($xidu);
	}
	else{
		$r = '../v75t4?axc0=5u540l';
		if(!empty($pp_xx001_add)){ $r .= '&pp_xx001_add='.$eCry($pp_xx001_add);	}
		if(!empty($pp_xx002_add)){ $r .= '&pp_xx002_add='.$eCry($pp_xx002_add);	}
		if(!empty($pp_xx003_add)){ $r .= '&pp_xx003_add='.$eCry($pp_xx003_add);	}
		if(!empty($pp_xx004_add)){ $r .= '&pp_xx004_add='.$eCry($pp_xx004_add);	}
		if(!empty($pp_xx005_add)){ $r .= '&pp_xx005_add='.$eCry($pp_xx005_add);	}
		if(!empty($pp_xx006_add)){ $r .= '&pp_xx006_add='.$eCry($pp_xx006_add);	}
		if(!empty($pp_xx007_add)){ $r .= '&pp_xx007_add='.$eCry($pp_xx007_add);	}
		if(!empty($pp_xx008_add)){ $r .= '&pp_xx008_add='.$eCry($pp_xx008_add);	}
		if(!empty($cxxt453_add)){ 	$r .= '&cxxt453_add='.$eCry($cxxt453_add);	}
		//echo 'hola';
	}
	r3Diri6ir($r);
}
/// --- axc0 suspender usuario
elseif ($axc0 === '10300') {
	$u5h8ir5nm = $dCry($u5h8ir5nm);
	if(!empty($u5h8ir5nm)){
		$axc0 = 'actualizar';
		$p4r4m37r05 = "u5hID8ir5 = '$u5h8ir5nm'"; 
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = ['u5hOn8ir5' => 0,
											 'u5hOn44P8ir5' => 0
											];		
		x3J3cU74DB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
		
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_Bin4kuru.php');
		$axc0 = 201;
		$d3s = eCry2($Bin4kuru[$axc0]);
		Bin4kuru($d3s, $axc0, $V=0, $u5h8ir5nm, $F=0, $E=0, $D=0, $P=0);


		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x008.$u5h8ir5nm;
		bi74c0('susPu5u', $_SESSION['m3ns4J3'], '');
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x009;
		bi74c0('susPu5u2', $_SESSION['m3ns4J3'], '');
    
	}
  r3Diri6ir('../v75t4?axc0=5u540l');
	
}
/// --- axc0 activar usuario
elseif ($axc0 === '10400') {
	$u5h8ir5nm = $dCry($u5h8ir5nm);
	if(!empty($u5h8ir5nm)){
		$axc0 = 'actualizar';
		$p4r4m37r05 = "u5hID8ir5 = '$u5h8ir5nm'"; 
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = ['u5hOn8ir5' => 1,
											 'u5hOn44P8ir5' => 0
											];		
		x3J3cU74DB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);

		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x010.$u5h8ir5nm;
		bi74c0('4ctPu5u', $_SESSION['m3ns4J3'], '');

		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_Bin4kuru.php');
		$axc0 = 202; 
		$d3s = eCry2($Bin4kuru[$axc0]);
		Bin4kuru($d3s, $axc0, $V=0, $u5h8ir5nm, $F=0, $E=0, $D=0, $P=0);
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x011;
		bi74c0('4ctPu5u2', $_SESSION['m3ns4J3'], '');
    
	}
  r3Diri6ir('../v75t4?axc0=5u540l');
	
}