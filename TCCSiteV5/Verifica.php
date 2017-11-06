<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "sap";
$conexao = mysqli_connect($host, $user, $pass);
mysqli_select_db($banco);
?>
<html>
	<title>
		Autenticando usuario
	</title>
<head>
	<script type="text/javascript">
	function loginsuccessfully(){
		setTimeout("window.location='home.html'",5000);
	}
		
	function loginfailed(){
		setTimeout("window.location='index.html'",5000);
	}
	</script>
</head>


	<body>

<?php
$prontuario=$_POST['prontuario'];
$senha=$_POST['senha'];
$sql = mysql_query("SELECT * FROM tbusuariosap WHERE prontuario = '$prontuario' and senha ='$senha'") or die(mysql_error());
$row = mysql_num_rows($sql);
if(row >0){
	session_start();
	$_SESSION['prontuario']=$_POST['prontuario'];
	$_SESSION['senha']=$_POST['senha'];
	echo "<center>Você foi autenticado com sucesso! aguarde um instante...</center>";
	echo"<script>loginsuccessfully</script>";	
} else{
	echo"<center>Usuario ou senha invalidos!</center>";
	echo"<script>loginfailed</script>";
}
?>
</body>
</html>
