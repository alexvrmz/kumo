<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$axc0 = $dCry($axc0);
if(!isset($_SESSION['xx_001'])){
	header("location:../lgaccs25.php?axc0=x001"); // --- llevame a login si no hay sesión ---
}
if($axc0 === "tR4Add" || $axc0 === 'ad4DcTr4' || $axc0 === 'edTDcTr4'){
	include('ccnnxx547.php');
 	include('fncnes5632.php');
 	include('fncnesF0rM5.php');
}
 $u5 = $_SESSION['u5hID8ir5'];
 $xXUNVrSXx = $_SESSION['xXUNVrSXx'];
if($axc0 === 'N3wTr4'){
	if(!empty($xDI4Rt) && !empty($xcIDV3Hs)){
		$xDI4Rt = $dCry($xDI4Rt);
		$xcIDV3Hs = $dCry($xcIDV3Hs);
		$rr = $dCry($rr);

		
		$C001 = "SELECT * FROM r3l3PTr WHERE r3fTiDt = $xDI4Rt";
		$S001 = $cnnx4s->query($C001) or die ("Fallo al consultar datos de proveedor: ".$C001);
		$LDP = [];
		$nDRT = $S001->num_rows;
		if($nDRT != 0){
			while ($DdR = $S001->fetch_array()) {
				$xPIDx = $DdR['r3fPiDt'];
				$C002 = "SELECT pR0nic, prov_id FROM proveedores WHERE prov_id = $xPIDx AND pR0ACT = 1";
				$S002 = $cnnx4s->query($C002) or die ("Fallo al seleccionar provedor 1 : ".$C002);
				while ($DdP = $S002->fetch_array()) {
					$xpD = $DdP['prov_id'];
					$xpN = dCry2($DdP['pR0nic']);
					unset($el3);
					$el3 = [
						'xPIDx' => $xPIDx,
						'xpD' => $xpD, 
						'xpN' => $xpN
					];
					array_push($LDP, $el3);
				}
			}
		}
		else{
			$C002 = "SELECT pR0nic, prov_id FROM proveedores WHERE pR0TT = 2 AND pR0ACT = 1";
			$S002 = $cnnx4s->query($C002) or die ("Fallo al seleccionar provedor 2 : ".$C002);
			while ($DdP = $S002->fetch_array()) {
				$xpD = $DdP['prov_id'];
				$xpN = dCry2($DdP['pR0nic']);
				unset($el3);
				$el3 = [
					'xPIDx' => $xPIDx,
					'xpD' => $xpD,
					'xpN' => $xpN
				];
				array_push($LDP, $el3);
			}
		}

		$C003 = "SELECT * FROM c4TD0cxxV WHERE d0C_xDID = $xDI4Rt";
		$S003 = $cnnx4s->query($C003) or die ("Fallo al seleccionar Tipo de Trámite: ".$C003);
		$DdT = $S003->fetch_assoc();
		$n4mtR4 = $DdT['d0C_xDd35'];
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Falta ID de Trámite y/o de Vehiculo';
		llevame('v75t4?axc0=v3hFh4&vh3iP='.$eCry($xcIDV3Hs));
	}
}
elseif($axc0 === 'tR4Add'){
	$_SESSION['m3n3Rr0R_num'] = 0;
	$_SESSION['tXFrm'] = [];

	if(!V4lRQ($frm_x001)){
		$_SESSION['m3n3Rr0R_num']++;
		$_SESSION['tXFrm']['frm_x001'] = 'El Número de trámite es obligatorio.';
	}

	if(!V4lRQ($frm_x002)){
		$_SESSION['m3n3Rr0R_num']++;
		$_SESSION['tXFrm']['frm_x002'] = 'La fecha de emisión es obligatoria.';
	}

	if(!V4lRQ($frm_x009)){
		$_SESSION['m3n3Rr0R_num']++;
		$_SESSION['tXFrm']['frm_x009'] = 'El proveedor es obligatoria.';
	}

	if(!is_numeric($frm_x004) && !empty($frm_x004)){
		$_SESSION['m3n3Rr0R_num']++;
		$_SESSION['tXFrm']['frm_x004'] = 'El importe debe de ser númerico.';
	}

	if(!is_numeric($frm_x005) && !empty($frm_x005)){
		$_SESSION['m3n3Rr0R_num']++;
		$_SESSION['tXFrm']['frm_x005'] = 'Los dias deben de ser númericos.';
	}

	if($_SESSION['m3n3Rr0R_num'] == 0){

		if(!empty($rr)){
			
			unset($art);
			$art = [
				'xIoTrEDOx' => 0
			];
			$p4r4m37r05 = "xIoTrIDx = $rr";
			$axc0 = 'actualizar';
			ejecutaDB('tr4m7s', $art, $axc0, $p4r4m37r05);
			bi74c0('4ctTraM', 'Se desactivo el tramite '.$rr, '');

			unset($art);
			$art = [
				'xIoTrEDOx' => 0
			];
			$p4r4m37r05 = "xIoTrIDx = $rr";
			$axc0 = 'actualizar';
			ejecutaDB('tr4m7s', $art, $axc0, $p4r4m37r05);
			bi74c0('4ctTraM', 'Se desactivo el tramite '.$rr, '');

			$C011 = "SELECT D0cIDxS FROM D0cUM3n705 WHERE D0cTR4xS = $rr";
			$S012 = $cnnx4s->query($C011) or die ("Fallo al consultar Documentos de trámite: ".$C011);
			while($DdTRE = $S012->fetch_array()){
				unset($art);
				$art = [
					'D0c4c7iv0xS' => 0
				];
				$p4r4m37r05 = "D0cIDxS = ".$DdTRE['D0cIDxS'];
				$axc0 = 'actualizar';
				ejecutaDB('D0cUM3n705', $art, $axc0, $p4r4m37r05);
				bi74c0('4ctD0c', 'Se desactivo el Documento '.$DdTRE['D0cIDxS'], '');
			}
		}
		if(!empty($frm_x003)){
			$fyT5 = $frm_x003;
		}
		else{
			$C012 = "SELECT d0C_xDTMP FROM c4TD0cxxV WHERE d0C_xDID = $frm_x007";
			$S012 = $cnnx4s->query($C012) or die ("Fallo al seleccionar Tipo trámite: ".$C012);
			$DdTT = $S012->fetch_assoc();
			$ttmp = $DdTT['d0C_xDTMP'];
			$fyT5 = date("Y-m-d",strtotime($frm_x002."+ $ttmp days")); 
		}
		unset($srt6);
		$Tm9 = date("Y-m-d H:i:s");
		$srt6 = [
			'xIoTrIDC4Tx' => $frm_x007,
			'xIoTrV3Hx' => $frm_x006,
			'xIoTrUS3x' => $frm_x008,
			'xIoTrPROx' => $frm_x009,
			'xIoTrNSx' => $frm_x001,
			'xIoTrFIx' => $frm_x002,
			'xIoTrFFx' => $fyT5,
			'xIoTrALTx' => $frm_x005,
			'xIoTrFSx' => $Tm9,
			'xIoTrIMPx' => $frm_x004,
			'xIoTrEDOx' => 1,
			'xXUNVrSXx' => $xXUNVrSXx
		];
		echo '<pre>';
		print_r($srt6);
		echo '</pre>';
		$p4r4m37r05 = "";
		$axc0 = "insertar";
		$idt = ejecutaDB('tr4m7s', $srt6, $axc0, $p4r4m37r05);
		$_SESSION['m3ns4J3'] = 'Se Agrego correctamente el trámite: '.$frm_x001;
		bi74c0('4ddTraM', $_SESSION['m3ns4J3'], '');
		/*include('../escen78/iDi0m45/'.$_SESSION['iDi0m4'].'/i_Bin4kuru.php');
		$axc0 = 301;
		$d3s = eCry2($Bin4kuru[$axc0]);
		Bin4kuru($d3s, $axc0, $V=0, $U=0, $F=0, $eMpr3, $D=0, $P=0);*/
		unset($_SESSION['tXFrm']);
		$rl = '../v75t4?axc0=Tr4V&xIDS='.$eCry($idt).'&xDI4Rt='.$eCry($frm_x007).'&xcIDV3Hs='.$eCry($frm_x006);
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Revisa los Campos indicados';
		$rl = '../v75t4?axc0=N3wTr4&frm_x001='.$eCry($frm_x001).'&frm_x002='.$eCry($frm_x002).'&frm_x003='.$eCry($frm_x003).'&frm_x006='.$eCry($frm_x004);
		$rl .= '&frm_x005='.$eCry($frm_x005).'&frm_x006='.$eCry($frm_x006).'&frm_x007='.$eCry($frm_x007).'&frm_x008='.$eCry($frm_x008).'&frm_x009='.$eCry($frm_x009);
		$rl .= '&xDI4Rt='.$eCry($frm_x007).'&xcIDV3Hs='.$eCry($frm_x006);
	}
	llevame($rl);

}
elseif($axc0 === 'Tr4V'){
	if(!empty($xIDS)){
		$xDI4Rt = $dCry($xDI4Rt);
		$xcIDV3Hs = $dCry($xcIDV3Hs);
		$xIDS = $dCry($xIDS);

		$C001 = "SELECT * FROM tr4m7s WHERE xIoTrIDx = $xIDS";
		$S001 = $cnnx4s->query($C001) or die ("Fallo al consultar trmites: ".$C001);
		$DdT = $S001->fetch_assoc();
		$xFidOn = $DdT['xIoTrIDx'];
		$xFidc4tOn = $DdT['xIoTrIDC4Tx'];
		$xFveOn = $DdT['xIoTrV3Hx'];
		$xFUsOn = $DdT['xIoTrUS3x'];
		$xFPrOn = $DdT['xIoTrPROx'];
		$xFNSOn = $DdT['xIoTrNSx'];
		$xFFIOn = $DdT['xIoTrFIx'];
		$xFFFOn = $DdT['xIoTrFFx'];
		$xFTAOn = $DdT['xIoTrALTx'];
		$xFFSOn = $DdT['xIoTrFSx'];
		$xFIMOn = $DdT['xIoTrIMPx'];
		$xFEDOn = $DdT['xIoTrEDOx'];


		$fv = date("Y-m-d",strtotime($xFFFOn."- $xFTAOn days")); 
		$h = date("Y-m-d");
		$xdDcVED = date_diff(date_create($h), date_create($xFFFOn));
		$xdDcVED = $xdDcVED->format('%R%a');
		$fvta = date("Y-m-d",strtotime($xFFFOn."- $dRV days")); 
		$xdDcVTA = date_diff(date_create($h), date_create($fvta));
		$xdDcVTA = $xdDcVTA->format('%R%a');
				
		if($fv <= $h){
			$vnc = TRUE;
			$pd = TRUE;
		}
		else{
			$vnc = FALSE;
			$pd = FALSE;
		} 

		$C009 = "SELECT * FROM r3l3PTr WHERE r3fTiDt = $xDI4Rt AND xXUNVrSXx = $xXUNVrSXx";
		$S009 = $cnnx4s->query($C009) or die ("Fallo al consultar relacion Proveedor - Trámite: ".$C009);
		$LDPS = [];
		while ($DdPS = $S009->fetch_array()) {
			unset($attr);
			$xidPf = $DdPS['r3fPiDt'];
			$xidTf = $DdPS['r3fTiDt'];
			$C010 = "SELECT prov_id, pR0nic FROM proveedores WHERE prov_id = $xidPf";
			$S010 = $cnnx4s->query($C010) or die ("Fallo al consultar proveedor: ".$C010);
			$DdlP = $S010->fetch_assoc();
			$idpDFes = dCry2($DdlP['pR0nic']);
			$attr =[
				'xidPf' => $xidPf,
				'idpDFes' => $idpDFes
			];
			array_push($LDPS, $attr);
		}

		$C004 = "SELECT d0C_xDd35, d0C_xDico FROM c4TD0cxxV WHERE d0C_xDID = $xDI4Rt";
		$S004 = $cnnx4s->query($C004) or die ("Fallo al consultar categorias: ".$C004);
		$DdCT = $S004->fetch_assoc();
		$xFDECOn = $DdCT['d0C_xDd35'];
		$xFICOn = $DdCT['d0C_xDico'];

		$C001 = "SELECT * FROM r3l3PTr WHERE r3fTiDt = $xDI4Rt AND xXUNVrSXx = $xXUNVrSXx";
		$S001 = $cnnx4s->query($C001) or die ("Fallo al consultar datos de proveedor: ".$C001);
		$LDP = [];
		while ($DdR = $S001->fetch_array()) {
			$xPIDx = $DdR['r3fPiDt'];
			$C002 = "SELECT pR0nic, prov_id FROM proveedores WHERE prov_id = $xPIDx AND pR0ACT = 1";
			$S002 = $cnnx4s->query($C002) or die ("Fallo al seleccionar provedor: ".$C002);
			while ($DdP = $S002->fetch_array()) {
				$xpD = $DdP['prov_id'];
				$xpN = dCry2($DdP['pR0nic']);
				unset($el3);
				$el3 = [
					'xPIDx' => $xPIDx,
					'xpD' => $xpD,
					'xpN' => $xpN
				];
				array_push($LDP, $el3);
			}
		}

	  $C005 = "SELECT pR0nic, prov_id FROM proveedores WHERE prov_id = $xFPrOn";
		$S005 = $cnnx4s->query($C005) or die ("Fallo al seleccionar proveedor: ".$C005);
		$DdPT = $S005->fetch_assoc();
		$xFDesPROn = dCry2($DdPT['pR0nic']);

		$C006 = "SELECT xV3hi3C0Xu7l0s FROM v3hiXu7l0s WHERE xV3hiIDXu7l0s = $xFveOn";
		$S006 = $cnnx4s->query($C006) or die ("Fallo al consultar vehiculo: ".$C006);
		$DdV = $S006->fetch_assoc();
		$xFECOn = dCry2($DdV['xV3hi3C0Xu7l0s']);
		
		$C007 = "SELECT u5hN18ir5, u5hA18ir5 FROM u5u405 WHERE u5hID8ir5 = $xFUsOn";
		$S007 = $cnnx4s->query($C007) or die ("Fallo al consultar ususario: ".$C007);
		$DdU = $S007->fetch_assoc();
		$xFNaMUOn = dCry2($DdU['u5hA18ir5']).' '.dCry2($DdU['u5hN18ir5']);

		$C008 = "SELECT * FROM D0cUM3n705 WHERE D0cTR4xS = $xFidOn";
		$S008 = $cnnx4s->query($C008) or die ("Fallo al consultar documentos: ".$C008);
		$LDDT = [];
		while ($DddT = $S008->fetch_array()) {
			unset($ifcICOc);
			unset($el3Doc);
			unset($xFgDFEjk);
			unset($xFgDFVjk);
			unset($flis);

			$xFgDIDjk = $DddT['D0cIDxS'];
			$xFgDDesjk = dCry2($DddT['D0cD3SxS']);
			$xFgDFiljk = dCry2($DddT['D0cFil3xS']);
			$xFgDFEjk = $DddT['D0cFDxS'];
			$xFgDIMjk = $DddT['D0cIMxS'];
			if($DddT['D0cFVxS'] === $DddT['D0cFDxS']) { $xFgDFVjk == '';}else{ $xFgDFVjk = $DddT['D0cFVxS']; }
			$xFgDED0jk = $DddT['D0c4c7iv0xS'];
			//chmod('../d0cUm3N70s/'.$xXUNVrSXx, 0777);
			$gYhNb6 = '../d0cUm3N70s/'.$xXUNVrSXx.'/'.$xFgDFiljk;
			$nmflex = 'tmp/'.$xXUNVrSXx.'/'.$_SESSION['u5hID8ir5'].'/'.$xFgDFiljk;
			if (!file_exists($nmflex)) { if (!copy($gYhNb6, $nmflex)) { $flis = ''; } else{ $flis = $nmflex; } } else{ $flis = $nmflex; }
			chmod('../d0cUm3N70s/'.$xXUNVrSXx, 0775);
			$aPieces = explode( '.', $xFgDFiljk ); // A file name can have more than 1 .something
			switch( strtolower( $aPieces[ count( $aPieces) - 1 ] ) )
			{
				case 'jpg':

				$ifcICOc = 'file-image';
				break;
				case 'pdf':

				$ifcICOc = 'file-pdf';
				break;
			}

			
			
			$el3Doc = [
				'xFgDIDjk' => $xFgDIDjk,
				'xFgDDesjk' => $xFgDDesjk,
				'xFgDFiljk' => $flis,
				'ifcICOc' => $ifcICOc,
				'xFgDFEjk' => $xFgDFEjk,
				'xFgDFVjk' => $xFgDFVjk,
				'xFgDED0jk' => $xFgDED0jk,
				'xFgDIMjk' => dCry2($xFgDIMjk)
			];
			array_push($LDDT, $el3Doc);
		}
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Falta ID de Trámite y/o de Vehiculo';
		$xDI4Rt = $dCry($xDI4Rt);
		$xcIDV3Hs = $dCry($xcIDV3Hs);
		llevame('v75t4?axc0=v3hFh4&vh3iP='.$eCry($xcIDV3Hs));
	}
}
elseif($axc0 === 'ad4DcTr4'){

	if (isset($_FILES['fmrd_008']) && $_FILES['fmrd_008']['error'] === UPLOAD_ERR_OK && isset($fmrd_001))	{
		$fileTmpPath = $_FILES['fmrd_008']['tmp_name'];
		$fileName = $_FILES['fmrd_008']['name'];
		$fileSize = $_FILES['fmrd_008']['size'];
		$fileType = $_FILES['fmrd_008']['type'];
		$fileNameCmps = explode(".", $fileName);
		$fileExtension = strtolower(end($fileNameCmps));
		$do9j = $fmrd_009;
		$yu7u = time();
		$newFileName = $fmrd_010. '-'.$do9j.'-'.$yu7u.'.'.$fileExtension;

		$allowedfileExtensions = array('png', 'webp', 'jpeg', 'jpg', 'pdf', 'doc', 'docx');

		if (in_array($fileExtension, $allowedfileExtensions))	{
		
			$path = '../../d0cUm3N70s/'.$xXUNVrSXx.'/';
			$dest_path = $path . $newFileName;

			if(move_uploaded_file($fileTmpPath, $dest_path)) {
				$w3bp = $fmrd_010. '-'.$do9j.'-'.$yu7u.'.'.$fileExtension;
				$w3bpP47h = $path . $w3bp;

				//c0nVt0Jp3g($dest_path, $w3bpP47h);

				$newFile = eCry2($w3bp);

				echo $w3bpP47h;

				$axc0 = 'insertar';
				$p4r4m37r05 = ""; 
				$fmrd_001 = eCry2($fmrd_001);
				$fmrd_005 = eCry2($fmrd_005);
				if($fmrd_004 == ''){ $fmrd_004 == $fmrd_003; }
				unset($sQl_d474_4rr4y);
				$Fs = date("Y-m-d H:m:i");
				$sQl_d474_4rr4y = ['D0cD3SxS' => $fmrd_001,
													'D0cIMxS' => $fmrd_005,
													'D0cFil3xS' => $newFile,
													'D0cv3HiDxS' => $fmrd_010,
													'D0cu53RxS' => $_SESSION['u5hID8ir5'],
													'D0c4c7iv0xS' => 1,
													'D0c7ip0xS' => 1,
													'D0cFDxS' => $fmrd_003,
													'D0cFSxS' => $Fs,
													'D0cFVxS'=> $fmrd_004,
													'D0cALTxS' => $fmrd_007,
													'D0cTR4xS' => $fmrd_011,
													'xXUNVrSXx' => $xXUNVrSXx
													];		
				echo '<pre>'; print_r($sQl_d474_4rr4y); echo '</pre>';

				ejecutaDB('D0cUM3n705', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);

				$_SESSION['m3ns4J3'] = 'Se subio con exito el documento: '.dCry2($fmrd_001);
				bi74c0('4dd-doc-', $_SESSION['m3ns4J3'], '');
				$rd = '../v75t4?axc0=Tr4V&xDI4Rt='.$eCry($fmrd_009).'&xcIDV3Hs='.$eCry($fmrd_010).'&xIDS='.$eCry($fmrd_011);
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
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = lbl_8i7_x0304.$_FILES['fmrd_008']['error'];
	}

		llevame($rd);
	

}
elseif($axc0 === 'edTDcTr4'){

	$_SESSION['m3n3Rr0R_num'] = 0;
	unset($_SESSION['m3ns4j3Frm']);

	if(!V4lRQ($fmrd_002)){
		$_SESSION['m3n3Rr0R_num']++;
		$_SESSION['tXFrm']['fmrd_002'] = 'El Número/Folio es obligatorio.';
	}

	if(!V4lRQ($fmrd_003_e)){
		$_SESSION['m3n3Rr0R_num']++;
		$_SESSION['tXFrm']['fmrd_003_e'] = 'La fecha de emisión es obligatoria.';
	}

	if(!is_numeric($fmrd_005) && $fmrd_005 != ''){
		$_SESSION['m3n3Rr0R_num']++;
		$_SESSION['tXFrm']['fmrd_005'] = 'El Importe debe de ser númerico.';
	}

	if(!is_numeric($fmrd_007) && $fmrd_007 != ''){
		$_SESSION['m3n3Rr0R_num']++;
		$_SESSION['tXFrm']['fmrd_007'] = 'Los dias debe de ser númericos.';
	}
	
	if($_SESSION['m3n3Rr0R_num'] == 0){
				
		$axc0 = 'actualizar';
		$p4r4m37r05 = "xIoTrIDx = $fmrd_011"; 

		unset($sQl_d474_4rr4y);
		$Fs = date("Y-m-d H:m:i");
		$sQl_d474_4rr4y = [
			'xIoTrPROx' => $fmrd_012,
			'xIoTrNSx' => $fmrd_002,
			'xIoTrFIx' => $fmrd_003_e,
			'xIoTrFFx' => $fmrd_004_e,
			'xIoTrALTx' => $fmrd_007,
			'xIoTrIMPx' => $fmrd_005,
			//'xIoTrEDOx' => 1
		];		

		ejecutaDB('tr4m7s', $sQl_d474_4rr4y, $axc0, $p4r4m37r05);

		$_SESSION['m3ns4J3'] = 'Se actualizo el trámite '.$fmrd_002;
		bi74c0('4ct-Tr4', $_SESSION['m3ns4J3'], '');
		$rd = '../v75t4?axc0=Tr4V&xDI4Rt='.$eCry($fmrd_009).'&xcIDV3Hs='.$eCry($fmrd_010);
	}
	else {
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Verifica los campos indicados';					
		$rd = '../v75t4?axc0=Tr4V&xDI4Rt='.$eCry($fmrd_009).'&xcIDV3Hs='.$eCry($fmrd_010).'&fmrd_003_e='.$eCry($fmrd_003_e).'&fmrd_004_e='.$eCry($fmrd_004_e).'&fmrd_005='.$eCry($fmrd_005).'&fmrd_007='.$eCry($fmrd_007).'&xcIDV3Hs='.$eCry($fmrd_010);
	}
	llevame($rd);
}