<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
//$accion = $dCry($accion);
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
$Universo = $_SESSION['Universo'];
if($accion === "5u540l_03"){
	include('conexion.php');
 	include('funciones.php');
}

$nU = 0; 
$nP = 0; 
$nM = 0;

$C016 = "SELECT usuarioID FROM u5u405 WHERE Universo = $Universo";
$S016 = $conexion->query($C016) or die ("Fallo al seleccionar Usuarios: ".$C016);
$nU = $S016->num_rows;

$C017 = "SELECT mascota_id FROM mascotas WHERE mascota_universo = $Universo";
$S017 = $conexion->query($C017) or die ("Fallo al seleccionar Mascotas: ".$C017);
$nM = $S017->num_rows;

$C018 = "SELECT prov_id FROM proveedores WHERE Universo = $Universo";
$S018 = $conexion->query($C018) or die ("Fallo al seleccionar Proveedores: ".$C018);
$nP = $S018->num_rows;
?>