<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';

session_start(); 
if(!isset($_SESSION['xx_001'])){
	header("location:../lgaccs25.php?axc0=x001"); // --- r3Diri6ir a login si no hay sesión ---
}
$xXUNVrSXx = $_SESSION['xXUNVrSXx'];

if($axc0 === '4dds3r' || $axc0 === 'sV3S3rv'){
	include('ccnnxx547.php');
 	include('fncnes5632.php');
 	include('fncnesF0rM5.php');
}

if($axc0 == 'v3r'){
	$C001 = "SELECT version, fecha FROM features GROUP BY version ORDER BY version DESC";
	$S001 = $cnnx4s->query($C001) or die ("Fallo al consultar caracteristicas: ".$C001);
	$LDC = [];
	while ($DCD = $S001->fetch_array()) {
		//if($xVxR != $DCD['version'] ||  empty($xVxR)){
			/**/
			$xVxR = $DCD['version'];
			$xFxE = $DCD['fecha'];

			$C002 = "SELECT * FROM features WHERE version = '".$xVxR."' ORDER BY fecha DESC";
			$S002 = $cnnx4s->query($C002) or die ("Fallo al consultAR detalles version: ".$C002);
			while ($DdCV = $S002->fetch_array()) {
				$xixD = $DdCV['id'];
				$xTxT = $DdCV['titulo'];
				$xDxE = $DdCV['descripcion'];
				$xTxM = substr($DdCV['fecha'], 10);
				$xLxN = $DdCV['link'];
				$xIxC = $DdCV['ico'];
				$xCxL = $DdCV['color'];
				unset($v3r);
				$v3r = [
					$xVxR => [
						'xTxT' => $xTxT,
						'xDxE' => $xDxE,
						'xTxM' => $xTxM,
						'xLxN' => $xLxN,
						'xIxC' => $xIxC,
						'xCxL' => $xCxL
					],
					'xVxR' => $xVxR,
					'xFxE' => $xFxE
				];
				array_push($LDC, $v3r);
			}
			
		//}
	}
}