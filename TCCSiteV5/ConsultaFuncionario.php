<!doctype html>
<?php
	
	session_start();
	
	if(!isset($_SESSION["prontuario"]) || !isset($_SESSION["senha"])) {
	
		header("Location: Index.html");
	
	}
	else{
		
		include_once("Conexoes/conexao.php");
		$conn;
		$select = "SELECT * FROM tbfuncionario ";
		$resultadoselect = mysqli_query($conn,$select);
		
	}
	
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Consulta de Funcionário - SAP</title>
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
			<caption><h1>Lista dos Funcionários Cadastrados<br/>ETIM Centro Paula Souza</h1></caption>
		</div>
		
		<table id="tabela-consulta-estagiario">
			<tr>
				<td>Código</td>
				<td>Nome</td>
				<td>RG</td>
				<td>Setor</td>
				<td>Data de Admissão</td>
				<td>Início da carga horária semanal</td>
				<td>Final da carga horária semanal</td>
				<td>Início da carga horária diária</td>
				<td>Final da carga horária diária</td>
				<td>dateTimeCadastro</td>
				<td>Modificar</td>
			</tr>
			<?php while($dado = $resultadoselect->fetch_array()){ ?>
			<tr>
				<td><?php echo $dado["idFuncionario"];?></td>
				<td><?php echo $dado["nome"];?></td>
				<td><?php echo $dado["rg"];?></td>
				<td><?php echo $dado["setor"];?></td>
				<td><?php echo date("d/m/Y", strtotime($dado["dataAdmissao"]));?></td>
				<td><?php echo $dado["semanaDe"];?></td>
				<td><?php echo $dado["semanaA"];?></td>
				<td><?php echo $dado["horarioDas"];?></td>
				<td><?php echo $dado["horarioAs"];?></td>
				<td><?php echo date("d/m/Y", strtotime($dado["dateTimeCadastro"]));?></td>
				<td>
					<a href="EditarEstagiario.php?codigo=<?php echo $dado["idFuncionario"]; ?>">Editar</a>
					<a href="DeletarEstagiario.php?codigo=<?php echo $dado["idFuncionario"]; ?>">Deletar</a>
				</td>
			</tr>
			<?php } ?>
		</table>
		
	</body>
</html>

