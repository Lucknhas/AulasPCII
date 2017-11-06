<!doctype html>
<?php
	
	session_start();
	
	if(!isset($_SESSION["prontuario"]) || !isset($_SESSION["senha"])) {
	
		header("Location: Index.html");
	
	}
	else{
		
		include_once("Conexoes/conexao.php");
		$conn;
		$select = "SELECT * FROM tbusuariosap ";
		$resultadoselect = mysqli_query($conn,$select);
		
	}
	
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Consulta de Usuário SAP - SAP</title>
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
			<caption><h1>Lista dos Usuários SAP Cadastrados<br/>ETIM Centro Paula Souza</h1></caption>
		</div>
		
				<table id="tabela-consulta-estagiario">
			<tr>
				<td>Código</td>
				<td>Nome</td>
				<td>Sobrenome</td>
				<td>Prontuário</td>
				<td>Senha</td>
				<td>Confirmar senha</td>
				<td>E-mail</td>
				<td>Data de cadastro</td>
				<td>Modificar</td>
			</tr>
			<?php while($dado = $resultadoselect->fetch_array()){ ?>
			<tr>
				<td><?php echo $dado["idUsuario"];?></td>
				<td><?php echo $dado["nome"];?></td>
				<td><?php echo $dado["sobrenome"];?></td>
				<td><?php echo $dado["prontuario"];?></td>
				<td><?php echo $dado["senha"];?></td>
				<td><?php echo $dado["confirmaSenha"];?></td>
				<td><?php echo $dado["email"];?></td>
				<td><?php echo date("d/m/Y", strtotime($dado["dateTimeCadastro"]));?></td>
				<td>
					<a href="EditarEstagiario.php?codigo=<?php echo $dado["idUsuario"]; ?>">Editar</a>
					<a href="DeletarEstagiario.php?codigo=<?php echo $dado["idUsuario"]; ?>">Deletar</a>
				</td>
			</tr>
			<?php } ?>
		</table>
		
	</body>
</html>

