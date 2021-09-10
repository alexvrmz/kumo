<?php
date_default_timezone_set("America/Mexico_City");
setlocale(LC_MONETARY, 'es_MX');
//error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(0);
if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '192.168.1.80' ){
    $cnnx4s = new mysqli('kumo.click', 'uNh7uH', 'Rjf6ge.Fa', 'kumo_v4');
   // $cnnx4s = new mysqli('localhost', 'uNh7uH', 'Rjf6ge.Fa', 'hiiqwla5x64x');
}
elseif($_SERVER['SERVER_NAME'] == 'app.kumo.click'){
    $cnnx4s = new mysqli('localhost', 'uNh7uH', 'Rjf6ge.Fa', 'kumo_v4');
}
$tildes = $cnnx4s->query("SET NAMES 'utf8'");

if($cnnx4s->connect_errno){ // --- si hay un error en la conexión ---
    die("La conexion no pudo establecerse");
}

$sqiDi = "SELECT * FROM u5u405 WHERE u5hID8ir5 = '".$u5u4i0."'";
$ciDi = $cnnx4s->query($sqiDi) or die ("Falló carga de Idioma");
$iDi = $ciDi->fetch_assoc();
$mdr = $iDi['config_m0dstr'];
$vst = $iDi['config_vista'];
$rll = $iDi['u5hpR0lr5'];
$xXUNVrSXx = $_SESSION['xXUNVrSXx'];
$dRV = $iDi['config_rDven'];

if($_SERVER['SERVER_NAME'] == 'app.kumo.click'){
    $carpeta = '/home/app/kumov4/public_html/tmp/'.$xXUNVrSXx;
}
else{
    $carpeta = '/home/alejandro/alejandro/sitios/kumov4/public_html/tmp/'.$xXUNVrSXx;
}

////------ Varibles de configuracion
$carpetaFondos = "dist/img/wallpappers/animals/";