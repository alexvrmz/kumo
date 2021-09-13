<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';
session_start(); // --- Validar sesión ---
//error_reporting(E_ALL ^ E_NOTICE);
error_reporting(0);

$u5u4i0 = $_SESSION['u5hID8ir5'];
include ('ap4673i/ccnnxx547.php');
include ('ap4673i/fncnes5632.php');
 
if(!isset($_SESSION['xx_001'])){
	header("location:lgaccs25.php?accion=x001"); // --- llevame a login si no hay sesión ---
}

include ('escen78/iDi0m45/'.$iDi['u5h8ir5_iDi'].'/iDi.php');

$fjkj = $_SESSION['session_look'];
if ($fjkj === true) {
   	if($accion != 'l00k5cR3n'){
			llevame('app?accion=l00k5cR3n');
		}
}


///----
  //$C004 = "SELECT * FROM "

//$accion = $dCry($accion);
if(v4lID44x50("100-001", $u5u4i0) == TRUE){          
          
	// ---- Hora actual
	$hora_actual = strftime("%A, %e $de %B $de %Y %R");

	// ---- Saludo de acuerdo a la hora del día
	$today = getdate();
	$hora=$today["hours"];
	if ($hora<12) {
		$saludo = '<i class="fad fa-sun fa-lg" style="color: #ffef00; text-shadow: 0 0 5px #000;"></i>'.lbl_bi3nv3nid4_1;
	}elseif($hora<19){
		$saludo = '<i class="fad fa-cloud-sun fa-lg" style="color: #faff50; text-shadow: 0 0 5px #000;"></i>'.lbl_bi3nv3nid4_2;
	}else{ 
		$saludo = '<i class="fad fa-moon fa-lg" style="color: blue; text-shadow: 0 0 5px #000;"></i>'.lbl_bi3nv3nid4_3; 
	}

	if(!isset($_SESSION['xx_001'])){
		header("location:lgaccs25.php?accion=x001&m3ns4J3=".$m3ns4J3); // --- llevame a login si no hay sesión ---
	}

	if($accion == 'escritorio'){ /// --- Dash
		
		// ---- Marcar la sección en el menú ---
		$menu_escritorio = 'active';
    
    // --- BACKEND ----
		include('ap4673i/escritorio_4pi.php');
		include('escen78/escritorio.php');
		
	}

	elseif($accion == 'cuenta'){ /// --- Cuenta
		
    // ---- Marcar la sección en el menú ---
		$menu_cuenta = 'active';		

		// --- BACKEND ----
		include('escen78/cuenta.php');		
	}
	elseif($accion == '5u540l'){ /// --- Usuarios

    if(v4lID44x50("500-001", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_u5u405_t = 'active';
      $menu_u5u405_abierto = 'menu-open';
      $menu_u5u405 = 'active';
      
      // --- BACKEND ----
      include('ap4673i/u5u405_4pi.php');
      include('escen78/u5u405.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA 1';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
	elseif($accion == '5u540l_02'){	/// ---Editar usuario
		if(v4lID44x50("500-003", $u5u4i0) == TRUE){
			
      // ---- Marcar la sección en el menú ---
			$menu_u5u405_t = 'active';
			$menu_u5u405_abierto = 'menu-open';
			$menu_u5u405 = 'active';
      
      // --- BACKEND ----
      include('ap4673i/u5u405_4pi.php');
			include('escen78/u5u405-3di7.php');
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA 2';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
	}
	elseif($accion == '50200'){ /// --- Generar Token
		if(v4lID44x50("500-006", $u5u4i0) == TRUE){	

      // ---- Marcar la sección en el menú ---
			$menu_u5u405_t = 'active';
			$menu_u5u405_abierto = 'menu-open';
			$menu_u5u405 = 'active';
      
      // --- BACKEND ----
      include('ap4673i/g3nt0k3n_4pi.php');	
			include('escen78/g3n-t0k3n.php');
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA 3';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
	elseif($accion == '5u550l'){	/// --- accion Permisos
		/// --- ACCESO MODULO PERMISOS
		if(v4lID44x50("300-004", $u5u4i0) == TRUE){

      // ---- Marcar la sección en el menú ---
			$menu_permisos_t = 'active';
			$menu_permisos_abierto = 'menu-open';
			$menu_permisos = 'active';
      $menu_permisos_0 = 'active';
      
      // --- BACKEND ----
      include('ap4673i/p3rm5o5_4pi.php');
			include('escen78/p3rm5o5.php');
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA 4';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
	}
  elseif($accion == '5uXds4H'){	/// --- ver Permisos otorgados
		/// --- ACCESO MODULO PERMISOS
		if(v4lID44x50("300-001", $u5u4i0) == TRUE){

      // ---- Marcar la sección en el menú ---
			$menu_permisos_t = 'menu-open';
      $menu_permisos = 'active';
			$menu_permisos_abierto = 'menu-open';
			$menu_permisos_2 = 'active';
      
      // --- BACKEND ----
      include('ap4673i/p3rm5o5_4pi.php');
			include('escen78/p3rm5o5-45i6.php');
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
	}
	elseif($accion == 'xu5sdS7l'){ /// --- accion Permisos
		/// --- ACCESO MODULO PERMISOS 
		if(v4lID44x50("300-003", $u5u4i0) == TRUE){

      // ---- Marcar la sección en el menú ---
			$menu_permisos_t = 'active';
			$menu_permisos_abierto = 'menu-open';
			$menu_permisos = 'active';
			$menu_permisos_0 = 'active';
      
      // --- BACKEND ----
      include('ap4673i/p3rm5o5_4pi.php');
			include('escen78/p3rm5o5-3di7.php');		
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
	}
  elseif($accion == 'mascotas'){
    if(v4lID44x50("200-001", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_mascotas_t = 'active';
      $menu_mascotas_abierto = 'menu-open';
      $menu_mascotas = 'active';
      
      // --- BACKEND ----
      include('ap4673i/mascotas_api.php');
      include('escen78/mascotas.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
  }
  elseif($accion == 'editarMascota'){
    if(v4lID44x50("200-003", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_mascotas_editar = 'active';
      $menu_mascotas_abierto = 'menu-open';
      $menu_mascotas = 'active';
      
      // --- BACKEND ----
      include('ap4673i/mascotas_api.php');
      include('escen78/mascotas_editar.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
  }
  elseif($accion == 'fichaMascota'){
    if(v4lID44x50("200-004", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_mascotas_ficha = 'active';
      $menu_mascotas_abierto = 'menu-open';
      $menu_mascotas = 'active';
      // --- BACKEND ----
      include('ap4673i/mascotas_api.php');
      include('escen78/mascota_ficha.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
  }
  elseif($accion == 'clientes'){
    if(v4lID44x50("200-001", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_clientes_t = 'active';
      $menu_clientes_abierto = 'menu-open';
      $menu_clientes = 'active';
      
      // --- BACKEND ----
      include('ap4673i/clientes_api.php');
      include('escen78/clientes.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
  }
  elseif($accion == 'editarCliente'){
    if(v4lID44x50("200-003", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_clientes_editar = 'active';
      $menu_clientes_abierto = 'menu-open';
      $menu_clientes = 'active';
      
      // --- BACKEND ----
      include('ap4673i/clientes_api.php');
      include('escen78/clientes_editar.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
  }
  elseif($accion == 'fichaCliente'){
    if(v4lID44x50("200-004", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_clientes_ficha = 'active';
      $menu_clientes_abierto = 'menu-open';
      $menu_clientes = 'active';
      // --- BACKEND ----
      include('ap4673i/clientes_api.php');
      include('escen78/cliente_ficha.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
  }
  elseif($accion == 's3rv'){ /// --- accion Servicios
		/// --- ACCESO MODULO PERMISOS 
		if(v4lID44x50("1300-001", $u5u4i0) == TRUE){

      // ---- Marcar la sección en el menú ---
			$menu_s3rv_t = 'active';
			$menu_s3rv_abierto = 'menu-open';
			$menu_s3rv = 'active';
			$menu_s3rv_0 = 'active';
      
      // --- BACKEND ----
      include('ap4673i/s3rv_4pi.php');
			include('escen78/s3rv.php');		
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
	}
  elseif($accion == 's3rv3Dt'){ /// --- editar Servicios (categoria)
		/// --- ACCESO MODULO Servicios 
		if(v4lID44x50("1300-003", $u5u4i0) == TRUE){

      // ---- Marcar la sección en el menú ---
			//$menu_s3rv_t = 'active';
			//$menu_s3rv_abierto = 'menu-open';
			$menu_s3rv = 'active';
			$menu_s3rv_0 = 'active';
      
      // --- BACKEND ----
      include('ap4673i/s3rv_4pi.php');
			include('escen78/s3rv3Dt.php');		
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
	}
  elseif($accion == 'Tr43Dt'){ /// --- editar tramites (categoria)
		/// --- ACCESO MODULO Servicios 
		if(v4lID44x50("1400-101", $u5u4i0) == TRUE){

      // ---- Marcar la sección en el menú ---
			//$menu_s3rv_t = 'active';
			//$menu_s3rv_abierto = 'menu-open';
			$menu_d0cx6y = 'active';
			$menu_d0cx6y_0 = 'active';
      
      // --- BACKEND ----
      include('ap4673i/d0cx6y_4pi.php');
			include('escen78/d0cx6yET.php');		
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
	}
	elseif($accion == 'm0d78Os'){
		/// --- ACCESO MODULO MODULOS
		if(v4lID44x50("400-001", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
			$menu_m0d78Os_t = 'active';
			$menu_m0d78Os_abierto = 'menu-open';
			$menu_m0d78Os = 'active';
      
      // --- BACKEND ----
      include('ap4673i/m0d78Os_4pi.php');
			include('escen78/m0d78Os.php');

			
			
		}
		else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
  elseif($accion == 'm0d7fdDs'){ /// --- actualizar modulos
		/// --- ACCESO MODULO MODULOS
		if(v4lID44x50("400-003", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
			$menu_m0d78Os_t = 'active';
			$menu_m0d78Os_abierto = 'menu-open';
			$menu_m0d78Os = 'active';
      
      // --- BACKEND ----
      include('ap4673i/m0d78Os_4pi.php');
			include('escen78/m0d78Os-3di7.php');
			
		}
		
	}
  elseif($accion == 'pR0VxD'){ /// --- Proveedores
		/// --- ACCESO MODULO empresas
		if(v4lID44x50("1600-000", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
			$menu_pR0VxD_t = 'active';
			$menu_pR0VxD_abierto = 'menu-open';
			$menu_pR0VxD = 'active';
      
      // --- BACKEND ----
      include('ap4673i/pR0VxD_4pi.php');
        include('escen78/pR0VxD.php');
		}
		
	}
  elseif($accion == 'pr0VxVW'){ /// --- Ver Proveedor
		if(v4lID44x50("1600-003", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
			$menu_pR0VxD_t = 'active';
			$menu_pR0VxD_abierto = 'menu-open';
			$menu_pR0VxD = 'active';
      
      // --- BACKEND ----
      include('ap4673i/pR0VxD_4pi.php');
        include('escen78/pr0VxVW.php');
		}
		
	}
  elseif($accion == 'pr0VxDT'){ /// --- Editar Proveedor
		if(v4lID44x50("1600-002", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
			$menu_pR0VxD_t = 'active';
			$menu_pR0VxD_abierto = 'menu-open';
			$menu_pR0VxD = 'active';
      
      // --- BACKEND ----
      include('ap4673i/pR0VxD_4pi.php');
        include('escen78/pr0VxDT.php');
		}
		
	}
  elseif($accion == 'eDtSrv'){ /// --- Editar Servicio (documentos)

    if(v4lID44x50("1300-101", $u5u4i0) == TRUE){
      // ---- Marcar la sección en el menú ---
			//$menu_v3hiXs_t = 'active';
      /*$menu_v3hiXs_abierto = 'menu-open';
      $menu_xkmtr4G = 'active';
			$menu_v3hiXs = 'active';*/
      // --- BACKEND ----
      include('ap4673i/eDtSrv_4pi.php');
      include('escen78/eDtSrv.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
  elseif($accion == 'eDtD'){ /// --- Editar Documentos (documentos)

    if(v4lID44x50("1400-101", $u5u4i0) == TRUE){
      // ---- Marcar la sección en el menú ---
			//$menu_v3hiXs_t = 'active';
      /*$menu_v3hiXs_abierto = 'menu-open';
      $menu_xkmtr4G = 'active';
			$menu_v3hiXs = 'active';*/
      // --- BACKEND ----
      include('ap4673i/eDtD_4pi.php');
      include('escen78/eDtD.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
  elseif($accion == 'Tr4V'){ /// --- ver tramite (documentos)

    if(v4lID44x50("1400-004", $u5u4i0) == TRUE){
      
      include('ap4673i/N3wTr4_4pi.php');
      include('escen78/VwTr4.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
  elseif($accion == 'N3wTr4'){ /// --- nuevo tramite (documentos)

    if(v4lID44x50("1400-002", $u5u4i0) == TRUE){
      // ---- Marcar la sección en el menú ---
			//$menu_v3hiXs_t = 'active';
      /*$menu_v3hiXs_abierto = 'menu-open';
      $menu_xkmtr4G = 'active';
			$menu_v3hiXs = 'active';*/
      // --- BACKEND ----
      include('ap4673i/N3wTr4_4pi.php');
      include('escen78/N3wTr4.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
  elseif($accion == 'c0Nfi6'){ /// --- ajustes

    if(v4lID44x50("100-002", $u5u4i0) == TRUE){
      		
      
      // --- BACKEND ----
      include('ap4673i/c0Nfi6_4pi.php');
      include('escen78/c0Nfi6.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
  elseif($accion == 'v3r'){ /// --- ajustes

    if(v4lID44x50("100-001", $u5u4i0) == TRUE){
      		

      // --- BACKEND ----
      include('ap4673i/v3r_4pi.php');
      include('escen78/v3r.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
  elseif($accion == 'bin4kuru'){ /// --- Biatcora

    if(v4lID44x50("1500-001", $u5u4i0) == TRUE){
      		
      $menu_kuru_abierto = 'menu-open';
      $menu_kuru = 'active';
      // --- BACKEND ----
      include('ap4673i/bin4kuru_4pi.php');
      include('escen78/bin4kuru.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA 7';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
  elseif($accion === 'l00k5cR3n'){ /// --- lookscreen
		/// --- ACCESO MODULO MODULOS
		
      
      // --- BACKEND ----
      //include('ap4673i/m0d78Os_4pi.php');
			include('escen78/l00k5cR3n.php');
			
		
		
	}
	else{
    $_SESSION['m3ns4J3'] = 'LA PAGINA NO EXISTE';
    $_SESSION['m3n3Rr0R'] = 'si';
    include('escen78/404.php');
  }

}
else{
  $titulo_pagina = 'Error 404';
  //$_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA 5';
	include('escen78/404.php');

}
?>
