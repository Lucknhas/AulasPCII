<!doctype html>
<?php
	
	session_start();
	
	if(!isset($_SESSION["prontuario"]) || !isset($_SESSION["senha"])) {
	
		header("Location: Index.html");
	
	}
	
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Consulta de Avaliação - SAP</title>
		<link rel="Stylesheet" type="text/css" href="CSS/CSS.css" />
		<link rel="Stylesheet" type="text/css" href="CSS/CSSAvaliacao/TabelasConsultas.css" />
	</head>

	<body>
		<div id="container">
			<div id="header"></div>
			
		
			<input type="checkbox" id="bt_menu">
			<label for="bt_menu">&#9776;</label>
		
			<nav class="menu">
				<ul>
					<li>
						<a href="Home.html">Inicio</a>
					</li>
				</ul>
				
				<ul>
					<li><a href="#">Cadastros</a>
						<ul>
							<li>
								<a href="CadastroEstagiario.html">Estagiário</a>
							</li>
							
							<li>
								<a href="CadastroFuncionario.html">Terceirizado</a>
							</li>
						
							<li>
								<a href="CadastroUsuarioSAP.html">Usuário SAP</a>
							</li>
						</ul>
					</li>
					
					<li><a href="#">Consultar</a>
						<ul>
							<li>
								<a href="ConsultaEstagiario.php">Estagiario</a>
							</li>
							
							<li>
								<a href="ConsultaFuncionario.php">Terceirizado</a>
							</li>
							
							<li>
								<a href="ConsultaUsuarioSAP.php">Usuário SAP</a>
							</li>
						</ul>
					</li>
					
					<li><a href="#">Questionários</a>
						<ul>
							<li>
								<a href="QuestionarioAvaliacao.php">Avaliações dos serviços</a>
							</li>
							
							<li>
								<a href="ConsultaQuestionarioAvaliacao.php">Consultar Avaliações</a>
							</li>
						</ul>
					</li>
					
				</ul>
			</nav>
		</div>
		
		<div id="titulo-principal">
			<caption><h1>Lista de Avaliações Cadastrados<br/>ETIM Centro Paula Souza</h1></caption>
		</div>
		
	</body>
</html>

