<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';
session_start();

if(!isset($_SESSION['xx_001'])){
	header("location:../lgaccs25.php?axc0=x001"); // --- r3Diri6ir a login si no hay sesión ---
}
$xXUNVrSXx = $_SESSION['xXUNVrSXx'];

if($axc0 === "fLo7025" || $axc0 === 'm0d7ff5Gg' || $axc0 == 'aGr3mP' || $axc0 == 'eDi7flo0' || $axc0 == 'd3lr3l'){
	include('ccnnxx547.php');
 	include('fncnes5632.php');
 	include('fncnesF0rM5.php');
}

if($axc0 === "x7l07iLl4"){ 

	if($eMpr3 != ''){
		$eMpr3 = $dCry($eMpr3);
		$Qum0d781 = "SELECT * FROM r3l3mpfl00 WHERE r3F3mP00 = '".$eMpr3."' ";
		$Cm0d781 = $cnnx4s->query($Qum0d781) or die ("Falló listado de relaciones" . $Qum0d781);
		$Li57m0d78Os = [];
		$nu7l0 = $Cm0d781->num_rows;
		while($Lm0d781 = $Cm0d781->fetch_assoc()){
			
			$Lm0 = $Lm0d781['r3FFloO00'];
			$lm1 = $Lm0d781['r3F3mP00']; 
			
			$Qum0d78O = "SELECT * FROM x7l07 WHERE xID7l0 = '".$Lm0."' ";
			$Cm0d78O = $cnnx4s->query($Qum0d78O) or die ("Falló listado de flotas" . $Qum0d78O);
			$dflo0 = $Cm0d78O->fetch_assoc();
			
			$nflo0 = dCry2($dflo0['xN4m37l0']);
			$iflo0 = $dflo0['xID7l0'];
			$eflo0 = $dflo0['x3MPID7l0'];

			$Q004 = "SELECT * FROM r3l3mpfl00 WHERE r3FFloO00 = '".$iflo0."' ORDER BY r3FID00 DESC";
			$C004 = $cnnx4s->query($Q004) or die ("Falló listado de relaciones" . $Q004);
			$eMps4s = [];
			$ne3m = $C004->num_rows;
			while($dr3l = $C004->fetch_assoc()){
				$emp34i = $dr3l['r3F3mP00'];
				$Q002 = "SELECT * FROM eMpR3sA5 WHERE eMIDEm = '".$emp34i."' ORDER BY eMIDEm ASC";
				$C002 = $cnnx4s->query($Q002) or die ("Falló listado de empresas" . $Q002);
				
				while($eMp = $C002->fetch_assoc()){
					$z3MPID7 = dCry2($eMp['eMRZEm']);
					$z3MPNIC7 = dCry2($eMp['eMNICEm']);
					unset($arre);
					$arre = array(
						'nm' => $z3MPNIC7,
						'rz' => $z3MPID7,
						'id' => $eMp['eMIDEm']
					);
					array_push($eMps4s, $arre);
				}
			}

			unset($fl98);
			$fl98 = array(
				'zID7' => $iflo0,
				'zN4m37' => $nflo0,
				'3mP' => $eMps4s,
				'ne3m' => $ne3m
			);
			array_push($Li57m0d78Os, $fl98);
		}

		
		$Q005 = "SELECT * FROM eMpR3sA5 WHERE eMIDEm = '".$eMpr3."'";
		$C005 = $cnnx4s->query($Q005) or die ("Falló listado de empresas" . $Q005);
		$D3MP1 = $C005->fetch_assoc();
		$EPAN = dCry2($D3MP1['eMNICEm']);
		$EPAR = dCry2($D3MP1['eMRZEm']);
		$EPAC = dCry2($D3MP1['eMCLLEm']);
		$EPANE = dCry2($D3MP1['eMNEEm']);
		$EPANI = dCry2($D3MP1['eMNIEm']);
		$EPACO = dCry2($D3MP1['eMCOLEm']);
		$EPACP = dCry2($D3MP1['eMCPEm']);
		$EPAMN = $D3MP1['eMMUNEm'];
		$EPAES = $D3MP1['eMEDOEm'];
		$EPAPS = $D3MP1['eMP4ISEm'];
		$EPARF = $D3MP1['eMRFCEm'];
		$EPARP = dCry2($D3MP1['eMREPEm']);
		$EPATL = dCry2($D3MP1['eMTELEm']);
		$EPAEM = dCry2($D3MP1['eMEMLEm']);
		$EPAFS = $D3MP1['eMFSEm'];
		$EPAID = $D3MP1['eMIDEm'];

		$u5hy68 = c0nUs(0, $EPAID);

	}
	else{
		$Qum0d78Os = "SELECT * FROM x7l07 WHERE xu5uID7l0 = '".$u5u4i0."' ";
		$Qum0d78Os .= "ORDER BY xN4m37l0 ASC";
		
		$Cm0d78Os = $cnnx4s->query($Qum0d78Os) or die ("Falló listado de flotas" . $Qum0d78Os);
		$Li57m0d78Os = [];
		while($Lm0d78Os = $Cm0d78Os->fetch_assoc()){

			$z3MPID7 = $Lm0d78Os['x3MPID7l0'];
			$zID7 = $Lm0d78Os['xID7l0'];

			$Qum0d781 = "SELECT * FROM r3l3mpfl00 WHERE r3FFloO00 = '".$zID7."' ";
			$Cm0d781 = $cnnx4s->query($Qum0d781) or die ("Falló listado de relaciones" . $Qum0d781);
			$empresas = [];
			while($Lm0d781 = $Cm0d781->fetch_assoc()){
				$eMp1 = $Lm0d781['r3F3mP00'];

				$Q002 = "SELECT eMRZEm, eMNICEm, eMIDEm FROM eMpR3sA5 WHERE eMIDEm = '".$eMp1."'";
				$C002 = $cnnx4s->query($Q002) or die ("Falló listado de empresas" . $Q002);
				$eMps4s = [];
				while($eMp = $C002->fetch_array()){
					$z3MPID7 = $eMp['eMIDEm'];
					$z3MPNIC7 = dCry2($eMp['eMNICEm']);
					$z3MPRZ7 = dCry2($eMp['eMRZEm']);
					unset($arre);
					$arre = array(
						'nm' => $z3MPNIC7,
						'nn' => $z3MPID7,
					);

				}			
				array_push($empresas, $arre);
				unset($z3MPNIC7); unset($z3MPID7);
			}

			$Q003 = "SELECT xV3hiIDXu7l0s FROM v3hiXu7l0s WHERE xV3hiFl074Xu7l0s = '".$zID7."'";
			$C003 = $cnnx4s->query($Q003) or die ("Falló listado de Autos" . $Q003);

			$zN4m37 = dCry2($Lm0d78Os['xN4m37l0']);
			$ne3m = count($empresas);

			$x4rr36l0 = array('zID7' => $zID7, 
											'zN4m37' => $zN4m37,
											'zu5uID7' => $Lm0d78Os['xu5uID7l0'],
											'zFR7' => $Lm0d78Os['xFR7l0'],
											'z3D07' => $Lm0d78Os['x3D07l0'],
											'3mP' => $empresas,
											'ne3m' => $ne3m
					);
			array_push($Li57m0d78Os, $x4rr36l0); 
		}
		
		$nu7l0 = $Cm0d78Os->num_rows;

		
	}
	$Q001 = "SELECT eMIDEm, eMNICEm FROM eMpR3sA5 WHERE eMiDuS3Em = '".$u5u4i0."' ORDER BY eMRZEm ASC";
	$C001 = $cnnx4s->query($Q001) or die ("Falló listado de empresas" . $Q001);
	$Lfl0 = [];
	while($LF = $C001->fetch_assoc()){
		$dCr = dCry2($LF['eMNICEm']);
		$x4rr36l02 = array(
			'xIDEx' => $LF['eMIDEm'],
			'xNICEx' => $dCr
		);
		array_push($Lfl0, $x4rr36l02); 
	}
	$nu3mp = $C001->num_rows;
}

elseif ($axc0 == 'fLo7025') {
	$Fl0_x001 = Cl34N($Fl0_x001);
	if(!empty($Fl0_x001)){
		$Fl0_x001 = eCry2($Fl0_x001);
		$axc0 = 'insertar'; 
		unset($sQl_d474_4rr4y);
		
		$sQl_d474_4rr4y = ['xN4m37l0' => $Fl0_x001,
											 'x3MPID7l0' => $Fl0_x002,
											 'xu5uID7l0' => $Fl0_x003,
											 'xFR7l0' => date('Y-m-d H:i:s'),
											 'x3D07l0' => 1,
											 'xXUNVrSXx' => $xXUNVrSXx
											];		
    
		
		$ffflo0 = x3J3cU74DB('x7l07', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
		if($Fl0_x002 === 0){}
		elseif($Fl0_x002 != 0){
			unset($sQl_d474_4rr4y);
			$sQl_d474_4rr4y = ['r3F3mP00' => $Fl0_x002,
												'r3FFloO00' => $ffflo0,
												'xXUNVrSXx' => $xXUNVrSXx
												];		
			x3J3cU74DB('r3l3mpfl00', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
		}



		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		$Fl0_x001 = dCry2($Fl0_x001);
    $_SESSION['m3ns4J3'] = lbl_8i7_x0501.$Fl0_x001;
		bi74c0('4DdFl0', $_SESSION['m3ns4J3'], '');

		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_Bin4kuru.php');
		$axc0 = 400;
		$d3s = eCry2($Bin4kuru[$axc0]);
		Bin4kuru($d3s, $axc0, $V=0, $U=0, $ffflo0, $E=0, $D=0, $P=0);

	}
  else{
    $_SESSION['m3n3Rr0R'] = 'si';
    $_SESSION['m3ns4J3'] = lbl_8i7_x0500;
    
  }
	r3Diri6ir('../v75t4?axc0=x7l07iLl4');
}

/// --- axc0 Consultar Datos de una flota
elseif($axc0 === "edi74flo0"){
	$flo0 = $dCry($flo0);
	if(!empty($flo0)){
    // --- Consulta para datos de flota
    $q5u5xXd = "SELECT * FROM x7l07 WHERE xID7l0 = '".$flo0."' ";
    $c5u5xXd = $cnnx4s->query($q5u5xXd) or die ("Falló al obtener datos de flota " . $q5u5xXd);
    $d4705m0D = [];
    while($dU5u4o = $c5u5xXd->fetch_assoc()){
			$_xNMyvU = dCry2($dU5u4o['xN4m37l0']);
			$_x3IDyvU = $dU5u4o['x3MPID7l0'];

			

      $x4rr36l0 = array('_xIDyvU' => $dU5u4o['xID7l0'],
                      '_xNMyvU' => $_xNMyvU,
                      '_x3IDyvU' => $_x3IDyvU,
                      '_xFRyvU' => $dU5u4o['xFR7l0']
          );
      array_push($d4705m0D, $x4rr36l0); 
    }

		$Q0001 = "SELECT eMRZEm, eMNICEm, eMIDEm FROM eMpR3sA5 WHERE eMiDuS3Em = $u5u4i0 ORDER BY eMIDEm ASC";
    $C0001 = $cnnx4s->query($Q0001) or die ("Falló al obtener datos de empresas " . $Q0001);
		$_L3MP = [];
		while($D3MP = $C0001->fetch_assoc()){
			$_3MPID = $D3MP['eMIDEm'];
			$_3MPNIC = dCry2($D3MP['eMNICEm']);
			$_3MPRZ = dCry2($D3MP['eMRZEm']);
			$_3MP = array(
				'eMPID' => $_3MPID,
				'eMPNIC' => $_3MPNIC,
				'eMPRZ' => $_3MPRZ,
			);
			array_push($_L3MP, $_3MP);
		}

		$Q0002 = "SELECT * FROM r3l3mpfl00 WHERE r3FFloO00 = $flo0";
    $C0002 = $cnnx4s->query($Q0002) or die ("Falló al obtener datos de flotas " . $Q0002);
		$_LFLo0 = [];
		while($DFLO = $C0002->fetch_assoc()){
			$_FLO3ID = $DFLO['r3F3mP00'];
			$_FLORID = $DFLO['r3FID00'];

			$Q0003 = "SELECT eMNICEm FROM eMpR3sA5 WHERE eMIDEm = $_FLO3ID";
    	$C0003 = $cnnx4s->query($Q0003) or die ("Falló al obtener datos de empresas " . $Q0003);

			$DEMP = $C0003->fetch_assoc();
			$_FLONME = dCry2($DEMP['eMNICEm']);

			$_FLO = array(
				'_FLORID' => $_FLORID,
				'_FLO3ID' => $_FLO3ID,
				'_FLONME' => $_FLONME
			);
			array_push($_LFLo0, $_FLO);
		}


  }
  else{
    $_SESSION['m3ns4J3'] = lbl_8i7_eFlo0_1;
    $_SESSION['m3n3Rr0R'] = 'si';
    r3Diri6ir('v75t4?axc0=x7l07iLl4');
  }
}
elseif($axc0 == 'aGr3mP'){
	if($gju8UUy != '' && $pp_xx005 != ''){

		$Q0004 = "SELECT * FROM r3l3mpfl00 WHERE r3F3mP00 = $pp_xx005 AND r3FFloO00 = $gju8UUy";
    $C0004 = $cnnx4s->query($Q0004) or die ("Falló al obtener datos de relacion " . $Q0004);
		$nR3l = $C0004->num_rows;

		if($nR3l > 0){
			include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
			$_SESSION['m3ns4J3'] = lbl_8i7_eFlo0_3;
   	 	$_SESSION['m3n3Rr0R'] = 'si';
			r3Diri6ir('../v75t4?axc0=edi74flo0&flo0='.$eCry($gju8UUy));
			
		}
		elseif($nR3l == 0){
			$axc0 = 'insertar';
			$p4r4m37r05 = ''; 
			unset($sQl_d474_4rr4y);
			$sQl_d474_4rr4y = ['r3F3mP00' => $pp_xx005,
												'r3FFloO00' => $gju8UUy
												];		
			x3J3cU74DB('r3l3mpfl00', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
			
			include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
			$_SESSION['m3ns4J3'] = lbl_8i7_F001.' => '.$pp_xx005.' / '.$gju8UUy;
			bi74c0('r3lEmpAdd', $_SESSION['m3ns4J3'], '');
			include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_Bin4kuru.php');
			$axc0 = 402;
			$d3s = eCry2($Bin4kuru[$axc0]);
			Bin4kuru($d3s, $axc0, $V=0, $U=0, $gju8UUy, $pp_xx005, $D=0, $P=0);
			r3Diri6ir('../v75t4?axc0=edi74flo0&flo0='.$eCry($gju8UUy));
		}
		
	}
	else{
    $_SESSION['m3ns4J3'] = lbl_8i7_eFlo0_2;
    $_SESSION['m3n3Rr0R'] = 'si';
    r3Diri6ir('../v75t4?axc0=x7l07iLl4');
  }
}
elseif($axc0 == 'eDi7flo0'){
	$pp_xx001 = Cl34N($pp_xx001);
	if($gju8UUy != '' && $pp_xx001 != ''){
		$axc0 = 'actualizar';
		$p4r4m37r05 = 'xID7l0 = "'.$gju8UUy.'"'; 
		unset($sQl_d474_4rr4y);
		$pp_xx001 = eCry2($pp_xx001);
		$sQl_d474_4rr4y = ['xN4m37l0' => $pp_xx001,
											 'x3MPID7l0' => $pp_xx004
											];		
    x3J3cU74DB('x7l07', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
    $pp_xx001 = dCry2($pp_xx001);
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
    $_SESSION['m3ns4J3'] = lbl_8i7_F002.' => '.$pp_xx001;
		bi74c0('4ctFlo0', $_SESSION['m3ns4J3'], '');
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_Bin4kuru.php');
		$axc0 = 401;
		$d3s = eCry2($Bin4kuru[$axc0]);
		Bin4kuru($d3s, $axc0, $V=0, $U=0, $gju8UUy, $E=0, $D=0, $P=0);
		r3Diri6ir('../v75t4?axc0=edi74flo0&flo0='.$eCry($gju8UUy));
	}
	else{
		$_SESSION['m3ns4J3'] = lbl_8i7_eFlo0_2;
    $_SESSION['m3n3Rr0R'] = 'si';
    r3Diri6ir('../v75t4?axc0=x7l07iLl4');
	}
}
elseif($axc0 = 'd3lr3l'){
	if($r3l4 != ''){
		$flo0 = $dCry($flo0);
		$r3l4 = $dCry($r3l4);
		$eMp4 = $dCry($eMp4);
		$axc0 = 'eliminar';
		$p4r4m37r05 = 'r3FID00 = "'.$r3l4.'"'; 
		
    x3J3cU74DB('r3l3mpfl00', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
    $_SESSION['m3ns4J3'] = lbl_8i7_F003.' => '.$r3l4;
		bi74c0('d3l7Rel', $_SESSION['m3ns4J3'], '');
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_Bin4kuru.php');
		$axc0 = 403;
		$d3s = eCry2($Bin4kuru[$axc0]);
		Bin4kuru($d3s, $axc0, $V=0, $U=0, $flo0, $eMp4, $D=0, $P=0);
		r3Diri6ir('../v75t4?axc0=edi74flo0&flo0='.$eCry($flo0));
	}
	else{
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_eFlo0_4;
    $_SESSION['m3n3Rr0R'] = 'si';
    r3Diri6ir('../v75t4?axc0=x7l07iLl4');
	}
}