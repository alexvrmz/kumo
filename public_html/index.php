<?php

	session_start(); // --- Validar sesión ---
	//error_reporting(0);

	if(!isset($_SESSION['xx_001'])){
			
		echo 'no hay sesión';
		header("location:lgaccs25?axc0=x001"); // --- llevame a login si no hay sesión ---
			
	} else{
		
		echo 'hay sesión<br>';
		header("location:v75t4?axc0=5u250e"); // --- llevame si hay sesión ---
			
	}


	/***********************************************************
	 * NOMBRE DE ARCHIVOS ALTERNOS
	 * ANTES						AHORA
	 * inicio.php						v75t4.php
	 * login.php						lgaccss25.php
	 * /api								/ap4673i
	 * conexion.php						ccnnxx547.php
	 * funciones.php					fncnes5632.php
	 * /front							/escen78
	 * /front/login.php					/escen78/lgaccss25.php
	 * /front/parciales/cabecera.php	/escen78/p4rc4l35/c4bec4r4.php
	 * /front/parciales/menu.php		/escen78/p4rc4l35/m3nu-p4.php
	 * /front/parciales/7i7ul0.php		/escen78/p4rc4l35/7i7ul0.php
	 * /front/parciales/pie.php			/escen78/p4rc4l35/3p1416e.php
	 * /front/usuarios.php				/encen78/u5u405.php
	 * /api/usuarios_api.php			/ap4673i/u5u405_4pi.php
	 * 
	 ***********************************************************/

	 /***********************************************************
	 * NOMBRE DE ACCIONES ALTERNAS
	 * ANTES						AHORA
	 * usuarios						5u540l
	 * 	editar usuario					5u540l_02
	 * 		guardar datos					5u540l_03
	 * 	agregar usuario					5u540l_04
	 * 		guardar datos					5u540l_05
	 * 
	 * permisos						5u550l
	 * 
	 * dashboard					5u250e
	 * 
	 * $_SESSION['usr']				$_SESSION['xx_001']
	 * 
	 * ACCIONES
	 * accion=						axc0
	 * 
	 * entrar						x001
	 * salir						x002
	 ***********************************************************/


?>