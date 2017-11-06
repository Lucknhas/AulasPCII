<?php
	
$apreCard = $_POST['apreCard'];
$conRefCarApro = $_POST['conRefCarApro'];
$conHorEstRef = $_POST['conHorEstRef'];
$qualRef = $_POST['qualRef'];

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "sap";

	
//Criar Conexão
		
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na Conexão:" . mysqli_connect_error());
	}else{
		echo "Conexao realizada com sucesso";
	}



echo $apreCard;

$result_msg_inserir = "INSERT INTO tbTotalUm(apreCard, conRefCarApro, conHorEstRef, qualRef ) VALUES ($apreCard, $conRefCarApro, $conHorEstRef, $qualRef)" ;

$resultado_msg_inserir = mysqli_query($conn, $result_msg_inserir);
?>