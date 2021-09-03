<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$axc0 = $dCry($axc0);
if(!isset($_SESSION['xx_001'])){
	header("location:../lgaccs25.php?axc0=x001"); // --- llevame a login si no hay sesión ---
}
$xXUNVrSXx = $_SESSION['xXUNVrSXx'];
if($axc0 === "5u540l_03"){
	include('ccnnxx547.php');
 	include('fncnes5632.php');
}

$nU = 0; 
$nP = 0; 

$C016 = "SELECT u5hID8ir5 FROM u5u405 WHERE xXUNVrSXx = $xXUNVrSXx";
$S016 = $cnnx4s->query($C016) or die ("Fallo al seleccionar Usuarios: ".$C016);
$nU = $S016->num_rows;
?>