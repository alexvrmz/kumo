<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$axc0 = $dCry($axc0);
if(!isset($_SESSION['xx_001'])){
	header("location:../lgaccs25.php?axc0=x001"); // --- llevame a login si no hay sesión ---
}
if($axc0 === "Tm0d3ls_9i45" || $axc0 === '5u540l_04' || $axc0 === '10300' || $axc0 === '10400'){
	include('ccnnxx547.php');
 	include('fncnes5632.php');
}
/// --- axc0 Listado de modelos
if($axc0 === "Tm0d3ls"){ 
	$cfr = $dCry($cfr);
	if(!empty($cfr)){ $xfr = 'WHERE j5uBxMIDx = '.$cfr.''; }else{ $xfr = '';}
	// --- Consulta para listado de modelos
	$query_u5u405 = "SELECT * FROM m0d3loS $xfr";
	$CMks3C = $cnnx4s->query($query_u5u405) or die ("Falló listado de modelos" . $query_u5u405);
	$u5hy68 = [];
	while($MVh3C = $CMks3C->fetch_assoc()){
		$query_u5u4052 = "SELECT * FROM m4rC45v3Hi WHERE m4rCxID5s = '".$MVh3C['j5uBxMIDx']."'";
		$CMks3C2 = $cnnx4s->query($query_u5u4052) or die ("Falló listado de marcas" . $query_u5u4052);
		$MVh3C2 = $CMks3C2->fetch_assoc();
		$mk = $MVh3C2['m4rCxD35c5s'];
		$mki = $MVh3C2['m4rCxIm463N5s'];

		$x4rr36l0 = array(
			'KuBIDx' => $MVh3C['j5uBxIDx'],
			'KuBD35x' => $MVh3C['j5uBxD35x'],
			'KuBMIDx' => $MVh3C['j5uBxMIDx'],
			'KuBMIMgx' => $MVh3C['j5uBxMiMgx'],
			'KuBMKDsx' => $mk,
			'KuBMKImgx' => $mki
		);
		
		array_push($u5hy68, $x4rr36l0); 
	}
	$num_usr = $CMks3C2->num_rows;

	$num_usr_off = $num_usr - $num_usr_on;
}
/// --- axc0 Consultar Datos de un modelo
elseif($axc0 === "Tm0d3ls_9i88"){
	$cfr99 = $dCry($cfr99);
	if(!empty($cfr99)){
    // --- Consulta para datos de modelo
    $q5u5xXd = "SELECT * FROM m0d3loS WHERE j5uBxIDx = '".$cfr99."' ";
    $c5u5xXd = $cnnx4s->query($q5u5xXd) or die ("Falló al obtener datos de modelo " . $q5u5xXd);
    $d4705_u5u = [];
    while($dU5u4o = $c5u5xXd->fetch_assoc()){
			
      $x4rr36l0 = array('xBxIDu' => $dU5u4o['j5uBxIDx'],
                      'xBxD35u' => $dU5u4o['j5uBxD35x'],
                      'xBxMIDu' => $dU5u4o['j5uBxMIDx'],
                      'xBxMiMgu' => $dU5u4o['j5uBxMiMgx']
          );
      array_push($d4705_u5u, $x4rr36l0); 
    }
  }
  else{
    $_SESSION['m3ns4J3'] = 'No habia ID de modelo a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    llevame('v75t4?axc0=Tm0d3ls');
  }
 
}
/// --- axc0 Actualizar Usuario en BD
elseif ($axc0 === 'Tm0d3ls_9i45') {

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

				$allowedfileExtensions = array('png', 'webp');

				if (in_array($fileExtension, $allowedfileExtensions))	{
					$path = '../dist/img/m0d3l0s/';
					$dest_path = $path . $newFileName;

					if(move_uploaded_file($fileTmpPath, $dest_path)) {
						$axc0 = 'actualizar';
						$p4r4m37r05 = "j5uBxIDx = '$mk76id'"; 

						unset($sQl_d474_4rr4y);
						$sQl_d474_4rr4y = [
							'j5uBxD35x' => $pp_xx001,
							'j5uBxMiMgx' => $newFileName,
						];		
						ejecutaDB('m0d3loS', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
						$_SESSION['m3ns4J3'] = lbl_8i7_x0301.$pp_xx001;
						bi74c0('3dtm0del', $_SESSION['m3ns4J3'], '');

						
					}
					else {
						$_SESSION['m3n3Rr0R']  = 'si';
						$_SESSION['m3ns4J3'] = lbl_8i7_x0302.$dest_path;					
					}
				}
				else{
					$_SESSION['m3n3Rr0R']  = 'si';
					$frg = implode(',', $allowedfileExtensions);
					$_SESSION['m3ns4J3'] = lbl_8i7_x0303. $fileExtension;
				}
			}
			elseif($_FILES['pp_xx002']['error'] == '4'){
				$axc0 = 'actualizar';
				$p4r4m37r05 = "j5uBxIDx = '$mk76id'"; 

				unset($sQl_d474_4rr4y);
				$sQl_d474_4rr4y = [
					'j5uBxD35x' => $pp_xx001,
					'j5uBxMiMgx' => '',
				];		
				ejecutaDB('m0d3loS', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
						
				$_SESSION['m3ns4J3'] = lbl_8i7_x0305.$pp_xx001;
				bi74c0('3dtm0del', $_SESSION['m3ns4J3'], '');
				
				
			}
			else{
				$_SESSION['m3n3Rr0R']  = 'si';
				$_SESSION['m3ns4J3'] = lbl_8i7_x0304.$_FILES['pp_xx002']['error'];
			}
		
		}
		else{
			$axc0 = 'actualizar';
			$p4r4m37r05 = "m4rCxID5s = '$mk76id'"; 

			unset($sQl_d474_4rr4y);
			$sQl_d474_4rr4y = ['m4rCxD35c5s' => $pp_xx001];		
			ejecutaDB('m4rC45v3Hi', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
				
			$_SESSION['m3ns4J3'] = lbl_8i7_x0305.$pp_xx001;
			bi74c0('3dtmK', $_SESSION['m3ns4J3'], '');
		}


	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = lbl_8i7_x0300;
	}
  llevame('../v75t4?axc0=Tm0d3ls&cfr='.$eCry($pp_xx003));



	
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
			ejecutaDB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);
											
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
			ejecutaDB('p3rXo70R64D0s', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);							
		}
		else{
			include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_8i74c0r4.php');
			$_SESSION['m3n3Rr0R']  = 'si';
			$_SESSION['m3ns4J3'] = $pp_xx005_add .lbl_8i7_x003;
			bi74c0('addu5u2', $_SESSION['m3ns4J3'], '');
		}

		
	}
	llevame('../v75t4?axc0=5u540l');
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
		ejecutaDB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);

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
  llevame('../v75t4?axc0=5u540l');
	
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
		ejecutaDB('u5u405', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);

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
  llevame('../v75t4?axc0=5u540l');
	
}