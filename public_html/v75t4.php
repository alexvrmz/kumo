<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';
session_start(); // --- Validar sesión ---
//error_reporting(E_ALL ^ E_NOTICE);
error_reporting(0);

$u5u4i0 = $_SESSION['u5hID8ir5'];
include ('ap4673i/ccnnxx547.php');
include ('ap4673i/fncnes5632.php');
 
if(!isset($_SESSION['xx_001'])){
	header("location:lgaccs25.php?axc0=x001"); // --- r3Diri6ir a login si no hay sesión ---
}

include ('escen78/iDi0m45/'.$iDi['u5h8ir5_iDi'].'/iDi.php');

$fjkj = $_SESSION['session_look'];
if ($fjkj === true) {
   	if($axc0 != 'l00k5cR3n'){
			r3Diri6ir('v75t4?axc0=l00k5cR3n');
		}
}



$D0c7ip0s = [
	'1' => 'Tarjeta de Circulación',
	'2' => 'Póliza de Seguro',
	//'10' => 'Archivo PDF',
	//'11' => 'Archivo Word',
	//'12' => 'Imagen',
	'13' => 'Placas',
	//'100' => 'Otro Tipo'
];

$tPV = [
  1 => 'Automoviles',
  2 => 'Motocicletas',
  3 => 'Camiones',
  4 => 'Remolques'
];

/// --- NOTIFICACION TRAMITES
  $C001n = "SELECT * FROM c4TD0cxxV WHERE d0C_xDED0 = 1 AND xXUNVrSXx = $xXUNVrSXx";
  $S001n = $cnnx4s->query($C001n) or die ("Fallo al consultar notificaciones de Trámites: ".$C001n);
  $LDNT = [];
  $DPA = 0;
  while ($DnFT = $S001n->fetch_array()) {
    $dNIxd = $DnFT['d0C_xDID'];
    $dNDx3s = $DnFT['d0C_xDd35'];
    $dNTxIm = $DnFT['d0C_xDTMP'];
    $dNIxCo = $DnFT['d0C_xDico'];
    $h = date("Y-m-d");
    $C002n = "SELECT * FROM tr4m7s WHERE xIoTrIDC4Tx = $dNIxd AND xIoTrEDOx = 1 AND xXUNVrSXx = $xXUNVrSXx ORDER BY xIoTrFFx ASC";
    $S002n = $cnnx4s->query($C002n) or die ("Fallo al consultar detalle de trámites: ".$C002n);
    while ($DT = $S002n->fetch_array()) {
      $xmVhe = $DT['xIoTrV3Hx'];
      $xmFeF = $DT['xIoTrFFx'];
      $xmCeI = $DT['xIoTrIDC4Tx'];
      $xmIeD = $DT['xIoTrIDx'];
      $FF = date("Y-m-d",strtotime($xmFeF."- $dRV days")); 
      $xdDcVED = date_diff(date_create($h), date_create($xmFeF));
			$xdDcVED = $xdDcVED->format('%R%a');
      if($xdDcVED > 0){
        $xTXVx = 'Vence en: ';
        $xdDcVED = str_replace("+", "", $xdDcVED);
        $class = 'success';
      }
      elseif($xdDcVED < 0){
        $xTXVx = 'Vencio hace: ';
        $xdDcVED = str_replace("-", "", $xdDcVED);
        $class = 'danger';
      }
      else{
        $xTXVx = 'Vence Hoy';
        $xdDcVED = str_replace("+", "", $xdDcVED);
        $class = 'warning';
      }
      if($h >= $FF){
        $C003n = "SELECT xV3hiPl4c45Xu7l0s FROM v3hiXu7l0s WHERE xV3hiIDXu7l0s = $xmVhe";
        $S003n = $cnnx4s->query($C003n) or die ("Fallo al consultar placas de automovil (trámite notificaciones): ".$C003n);
        $PDV = $S003n->fetch_assoc();
        $xmVheP = dCry2($PDV['xV3hiPl4c45Xu7l0s']);
        unset($ara);
        $ara = [
          'xmD3s' => $dNDx3s,
          'xmVhe' => $xmVhe,
          'xmVheP' => $xmVheP,
          'dNIxCo' => $dNIxCo,
          'xdDcVED' => $xdDcVED,
          'xTXVx' => $xTXVx,
          'class' => $class,
          'xmCeI' => $xmCeI,
          'xmIeD' => $xmIeD,
          'xmFeF' => $xmFeF
        ];
        array_push($LDNT, $ara);
        $DPA++;
      }
    }
  }
/// --- NOTIFICACION TRAMITES FIN
 
/// --- NOTIFICACION SERVICIOS
  $C001s = "SELECT * FROM c4TS3rxxV WHERE s3R_xDED0 = 1 AND xXUNVrSXx = $xXUNVrSXx";
  $S001s = $cnnx4s->query($C001s) or die ("Fallo al consultar Notificaciones de Servicios: ".$C001s);
  $LDNS = [];
  $NDDP = 0;
  $hs = date("Y-m-d");
  while ($DdNS = $S001s->fetch_array()) {
    $xIDSx = $DdNS['s3R_xDID'];
    $dNDx3ss = $DdNS['s3R_xDd35'];
    $dNTxIms = $DdNS['s3R_xDTMP'];
    $dNIxCos = $DdNS['s3R_xDico'];
    $C002s = "SELECT * FROM D0cUM3n705 WHERE D0cS3RxS = $xIDSx AND D0c4c7iv0xS = 1 AND xXUNVrSXx = $xXUNVrSXx ORDER BY D0cFVxS ASC";
    $S002s = $cnnx4s->query($C002s) or die ("Fallo al consultar detalles de servicios: ".$C002s);
    while ($DdDS = $S002s->fetch_array()) {
      $xmVhes = $DdDS['D0cv3HiDxS'];
      $xmFeFs = $DdDS['D0cFVxS'];
      $xmCeIs = $DdDS['D0cS3RxS'];
      $xmIeDs = $DdDS['D0cIDxS'];
      $FFs = date("Y-m-d",strtotime($xmFeFs."- $dRV days")); 
      $xdDcVEDs = date_diff(date_create($hs), date_create($xmFeFs));
			$xdDcVEDs = $xdDcVEDs->format('%R%a');
      if($xdDcVEDs > 0){
        $xTXVxs = 'Vence en: ';
        $xdDcVEDs = str_replace("+", "", $xdDcVEDs);
        $classs = 'success';
      }
      elseif($xdDcVEDs < 0){
        $xTXVxs = 'Vencio hace: ';
        $xdDcVEDs = str_replace("-", "", $xdDcVEDs);
        $classs = 'danger';
      }
      else{
        $xTXVxs = 'Vence Hoy';
        $xdDcVEDs = str_replace("+", "", $xdDcVEDs);
        $classs = 'warning';
      }
      if($hs >= $FFs){
        $C003n = "SELECT xV3hiPl4c45Xu7l0s FROM v3hiXu7l0s WHERE xV3hiIDXu7l0s = $xmVhes";
        $S003n = $cnnx4s->query($C003n) or die ("Fallo al consultar placas de automovil (trámite notificaciones): ".$C003n);
        $PDVs = $S003n->fetch_assoc();
        $xmVhePs = dCry2($PDVs['xV3hiPl4c45Xu7l0s']);
        unset($aras);
        $aras = [
          'xmD3ss' => $dNDx3ss,
          'xmVhes' => $xmVhes,
          'xmVhePs' => $xmVhePs,
          'dNIxCos' => $dNIxCos,
          'xdDcVEDs' => $xdDcVEDs,
          'xTXVxs' => $xTXVxs,
          'classs' => $classs,
          'xmCeIs' => $xmCeIs,
          'xmIeDs' => $xmIeDs,
          'xmFeFs' => $xmFeFs
        ];
        array_push($LDNS, $aras);
        $NDDP++;
      }
    }
  }
/// --- NOTIFICACION SERVICIOS FIN

///----
  //$C004 = "SELECT * FROM "

//$axc0 = $dCry($axc0);
if(v4lID44x50("100-001", $u5u4i0) == TRUE){          
          
	// ---- Hora actual
	$hora_actual = strftime("%A, %e $de %B $de %Y %R");

	// ---- Saludo de acuerdo a la hora del día
	$today = getdate();
	$hora=$today["hours"];
	if ($hora<12) {
		$saludo = '<i class="fa-duotone fa-sun fa-lg" style="color: #ffef00; text-shadow: 0 0 5px #000;"></i>'.lbl_bi3nv3nid4_1;
	}elseif($hora<19){
		$saludo = '<i class="fa-duotone fa-cloud-sun fa-lg" style="color: #faff50; text-shadow: 0 0 5px #000;"></i>'.lbl_bi3nv3nid4_2;
	}else{ 
		$saludo = '<i class="fa-duotone fa-moon fa-lg" style="color: blue; text-shadow: 0 0 5px #000;"></i>'.lbl_bi3nv3nid4_3; 
	}

	if(!isset($_SESSION['xx_001'])){
		header("location:lgaccs25.php?axc0=x001&m3ns4J3=".$m3ns4J3); // --- r3Diri6ir a login si no hay sesión ---
	}

	if($axc0 == '5u250e'){ /// --- Dash
		
		// ---- Marcar la sección en el menú ---
		$menu_5u250e = 'active';
    
    // --- BACKEND ----
		include('ap4673i/5u250e_4pi.php');
		include('escen78/5u250e.php');
		
	}

	elseif($axc0 == 'cuenta'){ /// --- Cuenta
		
    // ---- Marcar la sección en el menú ---
		$menu_cuenta = 'active';		

		// --- BACKEND ----
		include('escen78/cuenta.php');		
	}
	elseif($axc0 == '5u540l'){ /// --- Usuarios

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
	elseif($axc0 == '5u540l_02'){	/// ---Editar usuario
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
	elseif($axc0 == '50200'){ /// --- Generar Token
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
	elseif($axc0 == '5u550l'){	/// --- axc0 Permisos
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
  elseif($axc0 == '5uXds4H'){	/// --- ver Permisos otorgados
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
	elseif($axc0 == 'xu5sdS7l'){ /// --- axc0 Permisos
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
  elseif($axc0 == 's3rv'){ /// --- axc0 Servicios
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
  elseif($axc0 == 's3rv3Dt'){ /// --- editar Servicios (categoria)
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
  elseif($axc0 == 'Tr43Dt'){ /// --- editar tramites (categoria)
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
  elseif($axc0 == 'd0cx6y'){ /// --- axc0 Documentos
		/// --- ACCESO MODULO PERMISOS 
		if(v4lID44x50("1400-001", $u5u4i0) == TRUE){

      // ---- Marcar la sección en el menú ---
			$menu_d0cx6y_t = 'active';
			$menu_d0cx6y_abierto = 'menu-open';
			$menu_d0cx6y = 'active';
			$menu_d0cx6y_0 = 'active';
      
      // --- BACKEND ----
      include('ap4673i/d0cx6y_4pi.php');
			include('escen78/d0cx6y.php');		
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
	}
  elseif($axc0 == 'ldxV'){ /// --- axc0 Documentos x vencer
		/// --- ACCESO MODULO PERMISOS 
		if(v4lID44x50("1300-001", $u5u4i0) == TRUE){

      // ---- Marcar la sección en el menú ---
			$menu_ldxV_t = 'active';
			$menu_ldxV_abierto = 'menu-open';
			$menu_ldxV = 'active';
			$menu_ldxV_0 = 'active';
      
      // --- BACKEND ----
      //include('ap4673i/ldxV_4pi.php');
			include('escen78/ldxV.php');		
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
	}  
  elseif($axc0 == 'lsxV'){ /// --- axc0 Servicios x vencer
		/// --- ACCESO MODULO PERMISOS 
		if(v4lID44x50("1300-001", $u5u4i0) == TRUE){

      // ---- Marcar la sección en el menú ---
			$menu_lsxV_t = 'active';
			$menu_lsxV_abierto = 'menu-open';
			$menu_lsxV = 'active';
			$menu_lsxV_0 = 'active';
      
      // --- BACKEND ----
      //include('ap4673i/lsxV_4pi.php');
			include('escen78/lsxV.php');		
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
	}  
	elseif($axc0 == 'm0d78Os'){
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
  elseif($axc0 == 'm0d7fdDs'){ /// --- actualizar modulos
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
	elseif($axc0 == 'eMpr35As'){ /// --- empresas
		/// --- ACCESO MODULO empresas
		if(v4lID44x50("1100-001", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
			$menu_eMpr35As_t = 'active';
			$menu_eMpr35As_abierto = 'menu-open';
			$menu_eMpr35As = 'active';
      
      // --- BACKEND ----
      include('ap4673i/eMpr35As_4pi.php');
      if($mdr == 1){
        include('escen78/eMpr35As.php');
      }
			else{ 
        include('escen78/eMpr35As_m2.php');
      }
			
		}
		
	}
  elseif($axc0 == 'emPr3Edi7'){ /// --- editar empresa
		/// --- ACCESO MODULO empresas
		if(v4lID44x50("1100-003", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
			//$menu_eMpr35As_t = 'active';
			//$menu_eMpr35As_abierto = 'menu-open';
			$menu_eMpr35As = 'active';
      
      include('ap4673i/eMpr35As_4pi.php');
      include('escen78/emPr3Edi7.php');
		}
		
	}
  elseif($axc0 == 'pR0VxD'){ /// --- Proveedores
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
  elseif($axc0 == 'pr0VxVW'){ /// --- Ver Proveedor
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
  elseif($axc0 == 'pr0VxDT'){ /// --- Editar Proveedor
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
	elseif($axc0 == 'v3hiXs'){ /// --- Automoviles

    if(v4lID44x50("700-001", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_v3hiXs_t = 'active';
      $menu_v3hiXs_abierto = 'menu-open';
      $menu_v3hiXs = 'active';
			$menu_v3hiXs1 = 'active';
      
      // --- BACKEND ----
      include('ap4673i/v3hiCs_4pi.php');
      include('escen78/v3hiCs.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
  elseif($axc0 == 'asNxV'){ /// --- Automoviles

    if(v4lID44x50("700-015", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_v3hiXs_t = 'active';
      $menu_v3hiXs_abierto = 'menu-open';
      $menu_v3hiXs = 'active';
			$menu_v3hiXsAS = 'active';
      
      // --- BACKEND ----
      include('ap4673i/asgNv_4pi.php');
      include('escen78/asgNv.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
	elseif($axc0 == 'xmRc4s'){ /// --- marcas

    if(v4lID44x50("900-001", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_v3hiXs_t = 'active';
      $menu_v3hiXs_abierto = 'menu-open';
      $menu_xmRc4s = 'active';
			$menu_v3hiXs = 'active';
			
      
      // --- BACKEND ----
      include('ap4673i/xmRc4s_4pi.php');
      include('escen78/xmRc4s.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
	elseif($axc0 == 'xmRc4s_o983'){ /// --- marcas

    if(v4lID44x50("900-003", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_v3hiXs_t = 'active';
      $menu_v3hiXs_abierto = 'menu-open';
      $menu_xmRc4s = 'active';
			$menu_v3hiXs = 'active';
			
      
      // --- BACKEND ----
      include('ap4673i/xmRc4s_4pi.php');
      include('escen78/xmRc4s_3di7.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
	elseif($axc0 == 'Tm0d3ls'){ /// --- Automoviles

    if(v4lID44x50("1000-001", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_v3hiXs_t = 'active';
      $menu_v3hiXs_abierto = 'menu-open';
      $menu_Tm0d3ls = 'active';
			$menu_v3hiXs = 'active';
			
      
      // --- BACKEND ----
      include('ap4673i/Tm0d3ls_4pi.php');
      include('escen78/Tm0d3ls.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
	elseif($axc0 == 'Tm0d3ls_9i88'){ /// --- Automoviles

    if(v4lID44x50("1000-003", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_v3hiXs_t = 'active';
      $menu_v3hiXs_abierto = 'menu-open';
      $menu_Tm0d3ls = 'active';
			$menu_v3hiXs = 'active';
			
      
      // --- BACKEND ----
      include('ap4673i/Tm0d3ls_4pi.php');
      include('escen78/Tm0d3ls_3di7.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
	elseif($axc0 == 'v3hFh4'){ /// --- Automoviles ficha

    if(v4lID44x50("700-004", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_v3hiXs_t = 'active';
      $menu_v3hiXs_abierto = 'menu-open';
      $menu_v3hFicH4 = 'active';
			$menu_v3hiXs = 'active';
			
      
      // --- BACKEND ----
      include('ap4673i/v3hFicH4_4pi.php');
      include('escen78/v3hFicH4.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
	elseif($axc0 == 'v3hFh4_sd04'){ /// --- Automoviles editar

    if(v4lID44x50("700-003", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_v3hiXs_t = 'active';
      $menu_v3hiXs_abierto = 'menu-open';
      $menu_v3hFh4_sd04 = 'active';
			$menu_v3hiXs = 'active';
			
      
      // --- BACKEND ----
      include('ap4673i/v3hiCs_4pi.php');
      include('escen78/v3hiCs_3di7.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
	elseif($axc0 == 'x7l07iLl4'){ /// --- flotillas

    if(v4lID44x50("1200-001", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_x7l07iLl4_t = 'active';
      $menu_x7l07iLl4_abierto = 'menu-open';
      $menu_x7l07iLl4_sd04 = 'active';
			$menu_x7l07iLl4 = 'active';
			
      
      // --- BACKEND ----
      include('ap4673i/x7l07iLl4_4pi.php');
      if($mdr == 1){
        include('escen78/x7l07iLl4.php');
      }
      else{
        include('escen78/x7l07iLl4_m2.php');
      }
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
  elseif($axc0 == 'edi74flo0'){ /// --- flotillas

    if(v4lID44x50("1200-003", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_x7l07iLl4_f = 'active';
      $menu_x7l07iLl4_abierto = 'menu-open';
      $menu_x7l07iLl4_sd04 = 'active';
			$menu_x7l07iLl4 = 'active';
			
      
      // --- BACKEND ----
      include('ap4673i/x7l07iLl4_4pi.php');
      include('escen78/edi74flo0.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
	elseif($axc0 == 'xkmtr4G'){ /// --- kilomtraje

    if(v4lID44x50("700-008", $u5u4i0) == TRUE){
      
      // ---- Marcar la sección en el menú ---
			//$menu_v3hiXs_t = 'active';
      $menu_v3hiXs_abierto = 'menu-open';
      $menu_xkmtr4G = 'active';
			$menu_v3hiXs = 'active';
			
      
      // --- BACKEND ----
      include('ap4673i/v3hiCs_4pi.php');
      include('escen78/xkmtr4G.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('escen78/404.php');
    }
		
	}
  elseif($axc0 == 'eDtSrv'){ /// --- Editar Servicio (documentos)

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
  elseif($axc0 == 'eDtD'){ /// --- Editar Documentos (documentos)

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
  elseif($axc0 == 'Tr4V'){ /// --- ver tramite (documentos)

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
  elseif($axc0 == 'N3wTr4'){ /// --- nuevo tramite (documentos)

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
  elseif($axc0 == 'c0Nfi6'){ /// --- ajustes

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
  elseif($axc0 == 'v3r'){ /// --- ajustes

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
  elseif($axc0 == 'bin4kuru'){ /// --- Biatcora

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
  elseif($axc0 === 'l00k5cR3n'){ /// --- lookscreen
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
