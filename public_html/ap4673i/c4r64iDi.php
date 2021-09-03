<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
include ('ccnnxx547.php');
include ('fncnes5632.php');

if(!isset($_SESSION['xx_001'])){
	header("location:../lgaccs25.php?axc0=x001"); // --- llevame a login si no hay sesión ---
}
if($axc0 === 'c02251'){
  unset($sQl_d474_4rr4y);
  $sQl_d474_4rr4y = ['u5h8ir5_iDi' => 'es_MX'];		
  $axc0 = 'actualizar';
  $p4r4m37r05 = "u5hID8ir5 = '$u5u4i0'";
  ejecutaDB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
	$_SESSION['m3ns4J3'] = 'Exito! se actualizo el Idioma a es_MX (m-01)';  
  llevame($uh73Gg);
}
elseif($axc0 === 'c02252'){
  unset($sQl_d474_4rr4y);
  $sQl_d474_4rr4y = ['u5h8ir5_iDi' => 'en_US'];		
  $axc0 = 'actualizar';
  $p4r4m37r05 = "u5hID8ir5 = '$u5u4i0'";
  ejecutaDB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
	$_SESSION['m3ns4J3'] = 'Exito! se actualizo el Idioma a en_US (m-01)'; 
  llevame($uh73Gg);
}

?>