<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$axc0 = $dCry($axc0);
if(!isset($_SESSION['xx_001'])){
	header("location:../lgaccs25.php?axc0=x001"); // --- r3Diri6ir a login si no hay sesión ---
}
if($axc0 === "xmRc4s_o985" || $axc0 === '5u540l_04' || $axc0 === '10300' || $axc0 === '10400'){
	include('ccnnxx547.php');
 	include('fncnes5632.php');
}
/// --- axc0 Listado de marcas
if($axc0 === "xmRc4s"){
	
	// --- Consulta para listado de marcas
	$query_u5u405 = "SELECT * FROM m4rC45v3Hi LIMIT 12";
	$CMks3C = $cnnx4s->query($query_u5u405) or die ("Falló listado de marcas" . $query_u5u405);
	$u5hy68 = [];
	while($MVh3C = $CMks3C->fetch_assoc()){
		
		$x4rr36l0 = array('rxCxID5' => $MVh3C['m4rCxID5s'],
										 'rxCxD35c5' => $MVh3C['m4rCxD35c5s'],
										 'rxCxIm463N5' => $MVh3C['m4rCxIm463N5s']
				);
		array_push($u5hy68, $x4rr36l0); 
	}
	$num_usr = $CMks3C->num_rows;




	$num_usr_off = $num_usr - $num_usr_on;
}
/// --- axc0 Consultar Datos de una marca
elseif($axc0 === "xmRc4s_o983"){
	$mk9ID = $dCry($mk9ID);
	if(!empty($mk9ID)){
    // --- Consulta para datos de una marca
    $q5u5xXd = "SELECT * FROM m4rC45v3Hi WHERE m4rCxID5s = '".$mk9ID."' ";
    $c5u5xXd = $cnnx4s->query($q5u5xXd) or die ("Falló al obtener datos de marca " . $q5u5xXd);
    $d4705_u5u = [];
    while($dU5u4o = $c5u5xXd->fetch_assoc()){
			
      $x4rr36l0 = array(
				'm4rCxID5s' => $dU5u4o['m4rCxID5s'],
        'm4rCxD35c5s' => $dU5u4o['m4rCxD35c5s'],
        'm4rCxIm463N5s' => $dU5u4o['m4rCxIm463N5s']
			);
      array_push($d4705_u5u, $x4rr36l0); 
    }
  }
  else{
    $_SESSION['m3ns4J3'] = 'No habia ID de marca a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    r3Diri6ir('v75t4?axc0=xmRc4s');
  }
 
}
/// --- axc0 Actualizar marca en BD
elseif ($axc0 === 'xmRc4s_o985') {
	include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
	if($mk76id != ''){
		if(isset($_FILES['pp_xx002']) && $_FILES['pp_xx002'] != ''){

			if (isset($_FILES['pp_xx002']) && $_FILES['pp_xx002']['error'] === UPLOAD_ERR_OK)	{
				$fileTmpPath = $_FILES['pp_xx002']['tmp_name'];
				$fileName = $_FILES['pp_xx002']['name'];
				$fileSize = $_FILES['pp_xx002']['size'];
				$fileType = $_FILES['pp_xx002']['type'];
				$fileNameCmps = explode(".", $fileName);
				$fileExtension = strtolower(end($fileNameCmps));
				$newFileName = $mk76id. '.' . $fileExtension;

				$allowedfileExtensions = array('png');

				if (in_array($fileExtension, $allowedfileExtensions))	{
					$path = '../dist/img/m4rc45/';
					$dest_path = $path . $newFileName;

					if(move_uploaded_file($fileTmpPath, $dest_path)) {
						$axc0 = 'actualizar';
						$p4r4m37r05 = "m4rCxID5s = '$mk76id'"; 

						unset($sQl_d474_4rr4y);
						$sQl_d474_4rr4y = [
							'm4rCxD35c5s' => $pp_xx001,
							'm4rCxIm463N5s' => $newFileName,
						];		
						x3J3cU74DB('m4rC45v3Hi', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
						$_SESSION['m3ns4J3'] = lbl_8i7_x0201.$pp_xx001;
						bi74c0('3dtmK', $_SESSION['m3ns4J3'], '');

						
					}
					else {
						$_SESSION['m3n3Rr0R']  = 'si';
						$_SESSION['m3ns4J3'] = lbl_8i7_x0202.$dest_path;					
					}
				}
				else{
					$_SESSION['m3n3Rr0R']  = 'si';
					$frg = implode(',', $allowedfileExtensions);
					$_SESSION['m3ns4J3'] = lbl_8i7_x0203. $fileExtension;
				}
			}
			elseif($_FILES['pp_xx002']['error'] == '4'){
				$axc0 = 'actualizar';
				$p4r4m37r05 = "m4rCxID5s = '$mk76id'"; 

				unset($sQl_d474_4rr4y);
				$sQl_d474_4rr4y = [
					'm4rCxD35c5s' => $pp_xx001,
					'm4rCxIm463N5s' => '',
				];		
				x3J3cU74DB('m4rC45v3Hi', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
						
				$_SESSION['m3ns4J3'] = lbl_8i7_x0205.$pp_xx001;
				bi74c0('3dtmK', $_SESSION['m3ns4J3'], '');
				
				
			}
			else{
				$_SESSION['m3n3Rr0R']  = 'si';
				$_SESSION['m3ns4J3'] = lbl_8i7_x0204.$_FILES['pp_xx002']['error'];
			}
		
		}
		else{
			$axc0 = 'actualizar';
			$p4r4m37r05 = "m4rCxID5s = '$mk76id'"; 

			unset($sQl_d474_4rr4y);
			$sQl_d474_4rr4y = ['m4rCxD35c5s' => $pp_xx001];		
			x3J3cU74DB('m4rC45v3Hi', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
				
			$_SESSION['m3ns4J3'] = lbl_8i7_x0205.$pp_xx001;
			bi74c0('3dtmK', $_SESSION['m3ns4J3'], '');
		}


	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = lbl_8i7_x0200;
	}
	
  r3Diri6ir('../v75t4?axc0=xmRc4s');
	
}
/// --- axc0 Actualizar Usuario en BD
elseif ($axc0 === '5u540l_03') {
	if($pp_xx001 != ''){ $pp_xx001 = eCry2($pp_xx001); }
	if($pp_xx002 != ''){ $pp_xx002 = eCry2($pp_xx002); }
	if($pp_xx003 != ''){ $pp_xx003 = eCry2($pp_xx003); }
	if($pp_xx004 != ''){ $pp_xx004 = eCry2($pp_xx004); }
	//if($pp_xx005 != ''){ $pp_xx005 = eCry2($pp_xx005); }
	if($cxxt453 != ''){ $cxxt453 = md5($cxxt453); }


	if($u5h8ir5nm != '' && $pp_xx005 != ''){
		$axc0 = 'actualizar';
		$p455wMd5 = $cxxt453;
		$cxxt_A533n = $eCry($u5h34r5_pass_ase);
		$p4r4m37r05 = "u5hID8ir5 = '$u5h8ir5nm'"; 

		if($p455wMd5 == ''){
			unset($sQl_d474_4rr4y);
		
			$sQl_d474_4rr4y = ['u5hN18ir5' => $pp_xx001,
											 'u5hN28ir5' => $pp_xx002,
											 'u5hA18ir5' => $pp_xx003,
											 'u5hA28ir5' => $pp_xx004,
											 'u5hUS8ir5' => $pp_xx005
											];		
			x3J3cU74DB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
			

			include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
			$_SESSION['m3ns4J3'] = lbl_8i7_x004.$pp_xx005;
			bi74c0('3dtu5u', $_SESSION['m3ns4J3'], '');
      
		}
		elseif ($p455wMd5 != '') {
			$sQl_d474_4rr4y = ['u5hN18ir5' => $pp_xx001,
											 'u5hN28ir5' => $pp_xx002,
											 'u5hA18ir5' => $pp_xx003,
											 'u5hA28ir5' => $pp_xx004,
											 'u5hUS8ir5' => $pp_xx005,
											 'u5hpW8ir5' => $p455wMd5
											];		
			x3J3cU74DB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
			include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
			//$_SESSION['m3ns4J3'] = lbl_8i7_x005.$pp_xx005;
			$_SESSION['m3ns4J3'] = $te;
			bi74c0('3dtu5u2', $_SESSION['m3ns4J3'], '');
		}
		else {
			$_SESSION['m3n3Rr0R']  = 'si';
			include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
			$_SESSION['m3ns4J3'] = lbl_8i7_x006.$pp_xx005;
			bi74c0('3dtu5u3', $_SESSION['m3ns4J3'], '');
		}
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x007.$pp_xx005;	
		bi74c0('3dtu5u4', $_SESSION['m3ns4J3'], '');
    
	}
  r3Diri6ir('../v75t4?axc0=5u540l');
	
}
/// --- axc0 agregar usuario
elseif ($axc0 == '5u540l_04') {
  
	if (empty($pp_xx001_add) OR empty($pp_xx005_add) OR empty($pp_xx003_add) OR empty($cxxt453_add)){
		$_SESSION['m3n3Rr0R']  = 'si';
		$m3ns4J31 = 'Faltan los datos: ';
		if(empty($pp_xx001_add)) { $_SESSION['m3ns4J3'] = ' Primer Nombre|' . $_SESSION['m3ns4J3']; }
		if(empty($pp_xx005_add)) { $_SESSION['m3ns4J3'] = ' Usuario|' . $_SESSION['m3ns4J3']; }
		if(empty($pp_xx003_add)) { $_SESSION['m3ns4J3'] = ' Primer Apellido|' . $_SESSION['m3ns4J3']; }
		if(empty($cxxt453_add)) { $_SESSION['m3ns4J3'] = ' Contraseña|' . $_SESSION['m3ns4J3']; }
		
		$_SESSION['m3ns4J3'] = $m3ns4J31 . ' ' .$_SESSION['m3ns4J3'];
	}
	else{
    $sql_existe_mail = "SELECT u5hUS8ir5 FROM u5u405 WHERE u5hUS8ir5 = '".$pp_xx005_add."' ";
    $consulra_em = $cnnx4s->query($sql_existe_mail);
    $em = $consulra_em->num_rows;

    if($em == 0){ $existpp_xx005 = false; } else { $existpp_xx005 = true; }

		$foto = 'dist/img/usuario.png';
		$activo = '1';
		$p455wMd5 = md5($cxxt453_add);
		$On44P8ir5 = '0';
		$config_navbar = 'navbar-dark navbar-secondary';
		$config_accent = 'accent-navy';
		$config_sidebar = 'sidebar-dark-info';
		$config_brand = 'navbar-secondary';
		$u5h8ir5_iDi = 'es_MX';

		if($existpp_xx005 == false){

      unset($sQl_d474_4rr4y);
			if($pp_xx001_add != ''){ $pp_xx001_add = eCry2($pp_xx001_add);}
			if($pp_xx002_add != ''){ $pp_xx002_add = eCry2($pp_xx002_add);}
			if($pp_xx003_add != ''){ $pp_xx003_add = eCry2($pp_xx003_add);}
			if($pp_xx004_add != ''){ $pp_xx004_add = eCry2($pp_xx004_add);}

			$sQl_d474_4rr4y = ['u5hN18ir5' => $pp_xx001_add,
											 'u5hN28ir5' => $pp_xx002_add,
											 'u5hA18ir5' => $pp_xx003_add,
											 'u5hA28ir5' => $pp_xx004_add,
											 'u5hUS8ir5' => $pp_xx005_add,
                       'u5hpW8ir5' => $p455wMd5,
                       'u5hOn8ir5' => $activo,
                       'u5hFt8ir5' => $foto,
											 'u5hOn44P8ir5' => $On44P8ir5,
											 'config_navbar' => $config_navbar,
											 'config_accent' => $config_accent,
											 'config_sidebar' => $config_sidebar,
											 'config_brand' => $config_brand,
											 'u5h8ir5_iDi' => $u5h8ir5_iDi
											];		
      $axc0 = 'insertar';
			x3J3cU74DB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
											
			include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
			$_SESSION['m3ns4J3'] = lbl_8i7_x002.$pp_xx005_add;
			bi74c0('addu5u', $_SESSION['m3ns4J3'], '');
			
			$SqfR5 = "SELECT u5hID8ir5 FROM u5u405 WHERE u5hUS8ir5 = '".$pp_xx005_add."' ";
			$CSqfR5 = $cnnx4s->query($SqfR5);
			$fh65G = $CSqfR5->fetch_assoc();

			
			unset($sQl_d474_4rr4y);	
			$sQl_d474_4rr4y = ['p3rXoNmRs' => '1',
											 'p3rXou5Rs' => $fh65G['u5hID8ir5'],
											 'p3rXo3PRs' => '1',
											 'p3rXoFPRs' => date('Y-m-d H:i:s')
											];		
      $axc0 = 'insertar';
			x3J3cU74DB('p3rXo70R64D0s', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);							
		}
		else{
			include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
			$_SESSION['m3n3Rr0R']  = 'si';
			$_SESSION['m3ns4J3'] = $pp_xx005_add .lbl_8i7_x003;
			bi74c0('addu5u2', $_SESSION['m3ns4J3'], '');
		}

		
	}
	r3Diri6ir('../v75t4?axc0=5u540l');
}
/// --- axc0 suspender usuario
elseif ($axc0 === '10300') {
	$u5h8ir5nm = $dCry($u5h8ir5nm);
	if(!empty($u5h8ir5nm)){
		$axc0 = 'actualizar';
		$p4r4m37r05 = "u5hID8ir5 = '$u5h8ir5nm'"; 
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = ['u5hOn8ir5' => 0,
											 'u5hOn44P8ir5' => 0
											];		
		x3J3cU74DB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);

		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x008.$u5h8ir5nm;
		bi74c0('susPu5u', $_SESSION['m3ns4J3'], '');
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x009;
		bi74c0('susPu5u2', $_SESSION['m3ns4J3'], '');
    
	}
  r3Diri6ir('../v75t4?axc0=5u540l');
	
}
/// --- axc0 activar usuario
elseif ($axc0 === '10400') {
	$u5h8ir5nm = $dCry($u5h8ir5nm);
	if(!empty($u5h8ir5nm)){
		$axc0 = 'actualizar';
		$p4r4m37r05 = "u5hID8ir5 = '$u5h8ir5nm'"; 
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = ['u5hOn8ir5' => 1,
											 'u5hOn44P8ir5' => 0
											];		
		x3J3cU74DB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);

		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x010.$u5h8ir5nm;
		bi74c0('4ctPu5u', $_SESSION['m3ns4J3'], '');
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x011;
		bi74c0('4ctPu5u2', $_SESSION['m3ns4J3'], '');
    
	}
  r3Diri6ir('../v75t4?axc0=5u540l');
	
}