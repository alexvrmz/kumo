<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$accion = $dCry($accion);
if(!isset($_SESSION['xx_001'])){
	header("location:../lgaccs25.php?accion=x001"); // --- llevame a login si no hay sesión ---
}
$xXUNVrSXx = $_SESSION['xXUNVrSXx'];
if($accion === "5u540l_03"){
	include('ccnnxx547.php');
 	include('fncnes5632.php');
}

$nU = 0; 
$nP = 0; 
$nM = 0;

$C016 = "SELECT u5hID8ir5 FROM u5u405 WHERE xXUNVrSXx = $xXUNVrSXx";
$S016 = $cnnx4s->query($C016) or die ("Fallo al seleccionar Usuarios: ".$C016);
$nU = $S016->num_rows;

$C017 = "SELECT mascota_id FROM mascotas WHERE mascota_universo = $xXUNVrSXx";
$S017 = $cnnx4s->query($C017) or die ("Fallo al seleccionar Mascotas: ".$C017);
$nM = $S017->num_rows;

$C018 = "SELECT prov_id FROM proveedores WHERE xXUNVrSXx = $xXUNVrSXx";
$S018 = $cnnx4s->query($C018) or die ("Fallo al seleccionar Proveedores: ".$C018);
$nP = $S018->num_rows;
?>