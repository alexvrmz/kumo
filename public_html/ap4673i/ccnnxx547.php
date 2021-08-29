<?php

date_default_timezone_set("America/Mexico_City");
setlocale(LC_MONETARY, 'es_MX');

//error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(0);
if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == 'app.kumo.click' || $_SERVER['SERVER_NAME'] == '192.168.1.80' ){
    $cnnx4s = new mysqli('kumo.click', 'uNh7uH', 'Rjf6ge.Fa', 'kumo_v4');
   // $cnnx4s = new mysqli('localhost', 'uNh7uH', 'Rjf6ge.Fa', 'hiiqwla5x64x');
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

//
/*
localhost/nopixcua/u5u405/		https://jup2.carshopmgr.com/controldb/sql.php?server=1&db=nopixcua&table=u5u405&pos=0
 Showing rows 0 -  1 (2 total, Query took 0.0002 seconds.)

 SELECT * FROM `u5u405`
 
 
 u5hID8ir5	u5hUS8ir5	u5hN18ir5	u5hN28ir5	u5hA18ir5	u5hA28ir5	u5hpW8ir5	u5hHSH8ir5	u5hpV8ir5	u5hpU8ir5	u5hDpID8ir5	u5hDpNm8ir5	u5htK8ir5	u5hOn8ir5	u5hOn44P8ir5	u5hFt8ir5	config_navbar	config_accent	config_sidebar	config_brand	config_7im3Bl0	config_DrKm0d	config_m0dstr	config_vista	config_rDven	u5h8ir5_iDi	u5hpR0lr5	u5hFR8ir5	xXUNVrSXx	
 64	agustin_diaz@outlook.com	eZdu08sX2IWJhgP3HW1tohGMjd0bRTc9quNjv1qDrVIjw0e2LQ...	g9YeNc9GQKoVEWHzirN1YM7hElFm96aX/x8L8/7IRQuwKNe77S...	juRHUIu877Vxf9Pv6jQGU5Ks2x81LrV2C467QuMio2wJPH81lg...	VSKRpZWXBESGL/c1GinBTvAGN3+Z0r00B503jbPGjggfZvWO0v...	2b294109d24d8f0872ce858047fd3eff	fde9264cf376fffe2ee4ddf4a988880d	0	0	0	0	0	1	0	dist/img/usuario.png	navbar-light navbar-warning	accent-warning	sidebar-dark-warning	navbar-warning	10	1	1	2	30	es_MX	2	2021-07-28 17:46:05	37	
 */


?>
 