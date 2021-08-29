<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$axc0 = $dCry($axc0);
if(!isset($_SESSION['xx_001'])){
	header("location:../lgaccs25.php?axc0=x001"); // --- r3Diri6ir a login si no hay sesión ---
}
$xXUNVrSXx = $_SESSION['xXUNVrSXx'];
if($axc0 === "5u540l_03"){
	include('ccnnxx547.php');
 	include('fncnes5632.php');
}

$nUeMpr3 = 0;
$nUfl0 = 0; 
$nuVh3 = 0;
$nd0c5 = 0;
$nU = 0; 
$nP = 0; 
$arrD0c = [];

$QR67001 = "SELECT eMIDEm FROM eMpR3sA5 WHERE xXUNVrSXx = $xXUNVrSXx";
$CR67001 = $cnnx4s->query($QR67001) or die ("Falló listado de empresas" . $QR67001);
$nUeMpr3 = $CR67001->num_rows;

$QR67003 = "SELECT xID7l0 FROM x7l07 WHERE xXUNVrSXx = $xXUNVrSXx";
$CR67003 = $cnnx4s->query($QR67003) or die ("Falló listado de flotas" . $QR67003);
$nUfl0 = $CR67003->num_rows;

$C016 = "SELECT u5hID8ir5 FROM u5u405 WHERE xXUNVrSXx = $xXUNVrSXx";
$S016 = $cnnx4s->query($C016) or die ("Fallo al seleccionar Usuarios: ".$C016);
$nU = $S016->num_rows;

$QR67002 = "SELECT xV3hiIDXu7l0s FROM v3hiXu7l0s WHERE xXUNVrSXx = $xXUNVrSXx";
$CR67002 = $cnnx4s->query($QR67002) or die ("Falló listado de autos" . $QR67002);
$nuVh3 = $CR67002->num_rows;
 
$C014 = "SELECT D0cFVxS FROM D0cUM3n705 WHERE xXUNVrSXx = $xXUNVrSXx";
$S014 = $cnnx4s->query($C014) or die ("Fallo al consultar número de Documentos: ".$C014);
$nd0c5 = $S014->num_rows;
	
if($rll == 0 || $rll == 2 || $rll == 3){ 
	$C008 = "SELECT eMIDEm, eMNICEm FROM `eMpR3sA5` WHERE xXUNVrSXx = $xXUNVrSXx";
	$S008 = $cnnx4s->query($C008) or die ("Fallo al consultar empresas: ".$C008);
	$opau = [];
	while ($DE = $S008->fetch_array()) {
		$eMrid = $DE['eMIDEm'];
		$eMni = dCry2($DE['eMNICEm']);
		$C009 = "SELECT UEFUxTU, UEFVxTU, UEFExTU, UEFFxTU FROM `r3l3UEF` WHERE `UEFExTU` = $eMrid AND UEFVxTU != 0 ";
		$S009 = $cnnx4s->query($C009) or die ("Fallo al consultar Relaciones de Operadores->Autos: ".$C009);
		while ($DR = $S009->fetch_array()) {
			$x5uidn = $DR['UEFUxTU'];
			$x5aidn = $DR['UEFVxTU'];
			$x5eidn = $DR['UEFExTU'];
			$x5fidn = $DR['UEFFxTU'];

			$C010 = "SELECT u5hID8ir5, u5hA18ir5, u5hUS8ir5, u5hN18ir5 FROM `u5u405` WHERE `xXUNVrSXx` = $xXUNVrSXx ";
			$S010 = $cnnx4s->query($C010) or die ("Fallo al consultar datos de operador: ".$C010);
			$DU = $S010->fetch_assoc();
			$duKuidx = $DU['u5hID8ir5'];
			$duKua1x = dCry2($DU['u5hA18ir5']);
			$duKun1x = dCry2($DU['u5hN18ir5']);
			$duKuusx = $DU['u5hUS8ir5'];
			$duKunmx = $duKua1x.' '.$duKun1x;

			$C011 = "SELECT xV3hiIDXu7l0s, xV3hiEDOXu7l0s, xV3hi3C0Xu7l0s, xV3hiPl4c45Xu7l0s, xV3hiM4rc4Xu7l0s, xV3hi5uBm4rc4Xu7l0s, xV3hi5ub7ip0Xu7l0s, xV3hiFl074Xu7l0s, xV3hi4n0Xu7l0s FROM `v3hiXu7l0s` WHERE `xV3hiIDXu7l0s` = $x5aidn ";
			$S011 = $cnnx4s->query($C011) or die ("Fallo al consultar datos de automovil: ".$C011);
			$DA = $S011->fetch_assoc();
			$duKaidx = $DA['xV3hiIDXu7l0s'];
			$duKaedx = $DA['xV3hiEDOXu7l0s'];
			$duKaecx = dCry2($DA['xV3hi3C0Xu7l0s']);
			$duKaplx = dCry2($DA['xV3hiPl4c45Xu7l0s']);
			$duKmidx = $DA['xV3hiM4rc4Xu7l0s'];
			$duKsidx = $DA['xV3hi5uBm4rc4Xu7l0s'];
			$duKatpx = dCry2($DA['xV3hi5ub7ip0Xu7l0s']);
			$duKfidx = $DA['xV3hiFl074Xu7l0s'];
			$duKaanx = $DA['xV3hi4n0Xu7l0s'];

			$C012 = "SELECT m4rCxID5s, m4rCxD35c5s FROM `m4rC45v3Hi` WHERE `m4rCxID5s` = $duKmidx ";
			$S012 = $cnnx4s->query($C012) or die ("Fallo al consultar marca de automovil: ".$C012);
			$DM = $S012->fetch_assoc();
			$dukMdsx = $DM['m4rCxD35c5s'];

			$C013 = "SELECT j5uBxIDx, j5uBxD35x FROM `m0d3loS` WHERE `j5uBxIDx` = $duKsidx ";
			$S013 = $cnnx4s->query($C013) or die ("Fallo al consultar modelo de automovil: ".$C013);
			$DS = $S013->fetch_assoc();
			$duKSdsx = $DS['j5uBxD35x'];

			$dukaMCx = /*$dukMdsx.' '.*/$duKSdsx.' '.$duKatpx.' '.$duKaanx;

			$C013 = "SELECT xN4m37l0 FROM `x7l07` WHERE `xXUNVrSXx` = $xXUNVrSXx ";
			$S013 = $cnnx4s->query($C013) or die ("Fallo al consultar datos de Flota");
			$DF = $S013->fetch_assoc();
			$duKfdex = dCry2($DF['xN4m37l0']);

			unset($arre);
			$arre = [
				'duKuidx' => $duKuidx,
				'duKua1x' => $duKua1x,
				'duKun1x' => $duKun1x, 
				'duKuusx' => $duKuusx,
				'duKaidx' => $duKaidx,
				'duKaedx' => $duKaedx,
				'duKaecx' => $duKaecx,
				'duKaplx' => $duKaplx,
				'duKunmx' => $duKunmx,
				'dukaMCx' => $dukaMCx,
				'duKfdex' => $duKfdex,
				'duKfidx' => $duKfidx,
				'eMni' => $eMni,
				'eMrid' => $eMrid
			];
			array_push($opau, $arre);
		}
	}
	$C015 = "SELECT pR0id FROM pR0xV3D WHERE xXUNVrSXx = $xXUNVrSXx";
	$S015 = $cnnx4s->query($C015) or die ("Fallo al seleccionar proveedores: ".$C015);
	$nP = $S015->num_rows;
}
elseif($rll == 4){
	$C002 = "SELECT * FROM `r3l3UEF` WHERE `UEFUxTU` = $u5u4i0 ";
	$S002 = $cnnx4s->query($C002) or die ("Fallo al seleccionar relaciones de usuario: ".$C002);
	$DR = $S002->fetch_assoc();
	$AAU = $DR['UEFVxTU'];
	$EAU = $DR['UEFExTU'];
	$FAU = $DR['UEFFxTU'];

	if($AAU != 0){
		$C003 = "SELECT * FROM `v3hiXu7l0s` WHERE `xV3hiIDXu7l0s` = $AAU ";
		$S003 = $cnnx4s->query($C003) or die ("Fallo al consultar automovil de usuario");
		$DV = $S003->fetch_assoc();
		$xDvECOs = dCry2($DV['xV3hi3C0Xu7l0s']);
		$xDvPLs = dCry2($DV['xV3hiPl4c45Xu7l0s']);
		$xDvpMKs = $DV['xV3hiM4rc4Xu7l0s'];
		$xDvpSBs = $DV['xV3hi5uBm4rc4Xu7l0s'];
		$xDv7Ps = dCry2($DV['xV3hi5ub7ip0Xu7l0s']);
		$xDvANs = $DV['xV3hi4n0Xu7l0s'];
		$xDvCLs = $DV['xV3hic0l0rXu7l0s'];
		$xDv7Ms = $DV['xV3hi7Mot0rXu7l0s'];
		$xDvLTs = $DV['xV3hilI7r05Xu7l0s'];
		$xDvpFTs = $DV['xV3hiFl074Xu7l0s'];
		$xDvpEMs = $DV['xV3hi3MPrXu7l0s'];

		$C004 = "SELECT j5uBxD35x, j5uBxMiMgx FROM `m0d3loS` WHERE `j5uBxIDx` = $xDvpSBs ";
		$S004 = $cnnx4s->query($C004) or die ("Fallo al seleccionar modelo de auto: ".$C004);
		$DM = $S004->fetch_assoc();
		$xDvIMs = $DM['j5uBxMiMgx'];
		if(empty($xDvIMs)){
			$xDvSBs = '0.png';
		}
		else{
			$xDvSBs = $DM['j5uBxD35x'];
		} 

		$C005 = "SELECT m4rCxD35c5s FROM `m4rC45v3Hi` WHERE `m4rCxID5s` = $xDvpMKs ";
		$S005 = $cnnx4s->query($C005) or die ("Fallo al seleccionar modelo de auto: ".$C005);
		$DMK = $S005->fetch_assoc();
		$xDvMKs = $DMK['m4rCxD35c5s'];

		$C006 = "SELECT xN4m37l0 FROM `x7l07` WHERE `xID7l0` = $xDvpFTs ";
		$S006 = $cnnx4s->query($C006) or die ("Fallo al seleccionar flota de auto: ".$C006);
		$DFT = $S006->fetch_assoc();
		$xDvFTs = dCry2($DFT['xN4m37l0']);

		$C007 = "SELECT eMNICEm FROM `eMpR3sA5` WHERE `eMIDEm` = $xDvpEMs ";
		$S007 = $cnnx4s->query($C007) or die ("Fallo al seleccionar empresa de auto: ".$C007);
		$DEM = $S007->fetch_assoc();
		$xDvEMs = dCry2($DEM['eMNICEm']);
	}
	else{
		$NEAA  = true;
	}

	
}

/// sai puebla peñuelas cuadro comparativo carga todo 2226616306 Daniel calixto; 


?>