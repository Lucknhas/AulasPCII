<?php

	
?>

<html>
	<head>

		<script type="text/javascript">
					
			function loginsucesso(){
				setTimeout("window.location='../home.html'",6000);
			}
			
			function loginfalha(){
				setTimeout("window.location='../index.html'",6000);
			}
					
		</script>
		
	</head>
	
	<body>
		<?php
				
			include_once("conexao.php");
			$conn;

			$prontuario = $_POST['prontuario'];
			$senha = $_POST['senha'];
			$mysql_select_login = "select * from tbusuariosap where prontuario = '$prontuario' and senha = '$senha'";
			$login = mysqli_query($mysql_select_login);

			$row = mysqli_num_rows($login);

			if($row > 0){
				
				session_start();
				$_SESSION['prontuario']=$_POST['prontuario'];
				$_SESSION['senha']=$_POST['senha'];
				
				echo "<script>loginsucesso()</script>";
				
			}

				echo "<script>loginfalha()</script>";
				
			

		?>
	</body>
</html>