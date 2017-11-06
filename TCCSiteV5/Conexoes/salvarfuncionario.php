<?php


include_once("conexao.php");

$nome = $_POST['nome'];
$rg = $_POST['rg'];
$setor = $_POST['setor'];
$dataAdmissao = $_POST['dataAdmissao'];
$semana1 = $_POST['semana1'];
$semana2 = $_POST['semana2'];
$horarioinicio = $_POST['horarioinicio'];
$horariotermino = $_POST['horariotermino'];

$result_msggg_inserir = "INSERT INTO tbfuncionario(nome, rg, setor, dataAdmissao, semanaDe, semanaA, horarioDas, horarioAs, dateTimeCadastro) VALUES ('$nome', '$rg', '$setor', '$dataAdmissao', '$semana1', '$semana2', '$horarioinicio', '$horariotermino', NOW())";

$resultado_msggg_inserir =mysqli_query($conn, $result_msggg_inserir)
?>