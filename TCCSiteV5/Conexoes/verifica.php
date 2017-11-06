<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "sap";
$conexao = mysqli_connect($host, $user, $pass,$banco) or die(mysql_error());
//mysqli_select_db($banco) or die(mysql_error());
?>
<html>
	<title>
		Autenticando usuario
	</title>
<head>
	<script type="text/javascript">
	function loginsuccessfully(){
		setTimeout("window.location='../Home.html'",800);
	}
		
	function loginfailed(){
		setTimeout("window.location='../Index.html'",800);
	}
	</script>
</head>


	<body>

<?php
$prontuario=$_POST['prontuario'];
$senha=$_POST['senha'];
$sql = mysqli_query($conexao,"SELECT * FROM tbusuariosap WHERE prontuario = '$prontuario' and senha = '$senha'");
$row = $sql->num_rows;
if($row > 0){
	session_start();
	$_SESSION['prontuario']=$_POST['prontuario'];
	$_SESSION['senha']=$_POST['senha'];
	echo "<center>Você foi autenticado com sucesso! aguarde um instante...</center>";
	echo"<script>loginsuccessfully()</script>";	
} else{
	echo"<center>Usuario ou senha invalidos!</center>";
	echo"<script>loginfailed()</script>";
}
?>
</body>
</html>
