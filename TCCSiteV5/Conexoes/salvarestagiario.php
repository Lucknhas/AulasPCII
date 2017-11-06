<?php


include_once("conexao.php");

$nome = $_POST['nome'];
$rg = $_POST['rg'];
$setor = $_POST['setor'];
$inicio = $_POST['inicio'];
$semana1 = $_POST['semana1'];
$semana2 = $_POST['semana2'];
$horarioinicio = $_POST['horarioinicio'];
$horariotermino = $_POST['horariotermino'];

$result_msgg_inserir = "INSERT INTO tbestagiario(nome, rg, setor, inicio, semanaDe, semanaA, horarioDas, horarioAs, dateTimeCadastro) VALUES ('$nome', '$rg', '$setor', '$inicio', '$semana1', '$semana2', '$horarioinicio', '$horariotermino', NOW())";

$resultado_msgg_inserir =mysqli_query($conn, $result_msgg_inserir)

?>