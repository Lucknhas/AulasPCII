<?php
	include_once("conexao.php");
	
	//primeira avaliação
	$apreCard = $_POST['apreCard'];
	$conRefCarApro = $_POST['conRefCarApro'];
	$conHorEstRef = $_POST['conHorEstRef'];
	$qualRef = $_POST['qualRef'];
	
	//total 1
	$totalum = $apreCard + $conRefCarApro + $conHorEstRef + $qualRef;

	$result_primeiraA = "INSERT INTO tbtotalum (apreCard, conRefCarApro, conHorEstRef, qualRef, totalPontos) VALUES ('$apreCard', '$conRefCarApro', '$conHorEstRef', '$qualRef', '$totalum')";
	$resultado_primeiraA= mysqli_query($conn, $result_primeiraA);
	
	
	
	//segunda avaliação
	$qualGenAlim = $_POST['qualGenAlim'];
	$dispManEquiUteUtiDep = $_POST['dispManEquiUteUtiDep'];
	$adeMatConUtil = $_POST['adeMatConUtil'];

	//total 2
	$totaldois = $qualGenAlim + $dispManEquiUteUtiDep + $adeMatConUtil;
	
	$result_segundaA = "INSERT INTO tbtotaldois (qualGenAlim, dispManEquiUteUtiDep, adeMatConUtil, totalPontos) VALUES ('$qualGenAlim', '$dispManEquiUteUtiDep', '$adeMatConUtil', '$totaldois')";
	$resultado_segundaA = mysqli_query($conn, $result_segundaA);
	
	
	
	//terceira avaliação
	$condHig = $_POST['condHig'];
	$higInstUten = $_POST['higInstUten'];
	
	//total 3
	$totaltres = $condHig + $higInstUten;

	$result_terceiraA = "INSERT INTO tbtotaltres (condHig, higInstUten, totalPontos) VALUES ('$condHig', '$higInstUten', '$totaltres')";
	$resultado_terceiraA= mysqli_query($conn, $result_terceiraA);
	
	
	
	//quarta avaliação
	$quadroPes = $_POST['quadroPes'];
	$UnifEpi = $_POST['UnifEpi'];
	$manQualUnifPadAlimServ = $_POST['manQualUnifPadAlimServ'];
	$cumpNormas = $_POST['cumpNormas'];
	
	//total 4
	$totalquatro = $quadroPes + $UnifEpi + $manQualUnifPadAlimServ + $cumpNormas;

	$result_quartaA = "INSERT INTO tbtotalquatro (quadroPes, UnifEpi, manQualUnifPadAlimServ, cumpNormas, totalPontos) VALUES ('$quadroPes', '$UnifEpi', '$manQualUnifPadAlimServ', '$cumpNormas', '$totalquatro')";
	$resultado_quartaA= mysqli_query($conn, $result_quartaA);
	
	
	
	//quinta avaliação
	$usoRacAgua = $_POST['usoRacAgua'];
	$usoRacEnerEl = $_POST['usoRacEnerEl'];
	$sepResSol = $_POST['sepResSol'];
	$recDestResAlim = $_POST['recDestResAlim'];
	
	//total 5
	$totalcinco = $usoRacAgua + $usoRacEnerEl + $sepResSol + $recDestResAlim;
	
	$result_quintaA = "INSERT INTO tbtotalcinco (usoRacAgua, usoRacEnerEl, sepResSol, recDestResAlim, totalPontos) VALUES ('$usoRacAgua', '$usoRacEnerEl', '$sepResSol', '$recDestResAlim', '$totalcinco')";
	$resultado_quintaA= mysqli_query($conn, $result_quintaA);
	
	
	
	//total avalicações
	$total = $totalum + $totaldois + $totaltres + $totalquatro + $totalcinco;
	
	
?>