<?php
//"nome" "sobrenome" "prontuario" "senha" "confirme" "email" 

include_once("conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$prontuario = $_POST['prontuario'];
$senha = $_POST['senha'];
$confirme = $_POST['confirme'];
$email = $_POST['email'];



$result_msg_inserir = "INSERT INTO tbusuariosap(nome, sobrenome, prontuario, senha, confirmaSenha, email) VALUES ('$nome', '$sobrenome', '$prontuario', '$senha', '$confirme', '$email', NOW())";

$resultado_msg_inserir =mysqli_query($conn, $result_msg_inserir)
?>