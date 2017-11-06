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
		<title>Avaliação - SAP</title>
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
			
			
			

			
			
			
			<form action="Conexoes/salvarquestionarioavaliacao.php" method="POST" id="avaliacoes">

				<div id="titulo-principal">
					<caption><h1>Avaliação da Qualidade dos Serviços de Nutrição e Alimentação<br/>ETIM Centro Paula Souza</h1></caption>
				</div>
						<table id="tabela-questionario-avaliacao">	
							<caption id="titulo-avaliacao"><h3>1. Quanto às refeições servidas:</h3></caption>
								<tr>
									<td rowspan="2">Parâmetro Avaliado</td>
									<td>Conforme</td>
									<td>Conforme com Ressalva</td>
									<td>Não Conforme</td>	
								</tr>
								
								<tr>
									<td>10 pontos</td>
									<td>5 pontos</td>
									<td>0 pontos</td>	
								</tr>

								<tr>
									<td >Apresentação do cardápio</td>
									<td><input type="radio" name="apreCard" value="10"/></td>
									<td><input type="radio" name="apreCard" value="5"/></td>
									<td><input type="radio" name="apreCard" value="0"/></td>	
								</tr>


								<tr>
									<td >Conformidade das refeições com o cardápio aprovado</td>
									<td><input type="radio" name="conRefCarApro" value="10" /></td>
									<td><input type="radio" name="conRefCarApro" value="5"/></td>
									<td><input type="radio" name="conRefCarApro" value="0"/></td>	
								</tr>

								<tr>
									<td >Conformidade com os horários estabelecidos para as refeições</td>
									<td><input type="radio" name="conHorEstRef" value="10"/></td>
									<td><input type="radio" name="conHorEstRef" value="5"/></td>
									<td><input type="radio" name="conHorEstRef"value="0"/></td>	
								</tr>

								<tr>
									<td >Qualidade das refeições</td>
									<td><input type="radio" name="qualRef" value="10"/></td>
									<td><input type="radio"name="qualRef" value="5"/></td>
									<td><input type="radio"name="qualRef" value="0"/></td>	
								</tr>

								<tr>
									<td >TOTAL DE PONTOS</td>
									<td colspan="3" ><input type="text"readonly name="totalPontos" /></td>
								</tr>
						</table>
						
						<br/><br/>
						
						<table id="tabela-questionario-avaliacao">
							<caption id="titulo-avaliacao"><h3>2. Quanto aos gêneros e produtos alimentícios, equipamentos e materiais de consumo utilizados:</h3></caption>
								<tr>
									<td rowspan="2">Parâmetro Avaliado</td>
									<td>Conforme</td>
									<td>Conforme com Ressalva</td>
									<td>Não Conforme</td>	
								</tr>
								<tr>
									<td>10 pontos</td>
									<td>5 pontos</td>
									<td>0 pontos</td>	
								</tr>

								<tr>
									<td >Qualidade dos gêneros alimentícios</td>
									<td><input type="radio" name="qualGenAlim" value="0"/></td>
									<td><input type="radio"name="qualGenAlim" value="5"/></td>
									<td><input type="radio"name="qualGenAlim" value="10"/></td>
								</tr>
									
								<tr>
									<td >Disponibilidade e manutenção dos equipamentos e utensílios utilizados e das dependências</td>
									<td><input type="radio" name="dispManEquiUteUtiDep"value="0"/></td>
									<td><input type="radio" name="dispManEquiUteUtiDep"value="5"/></td>
									<td><input type="radio" name="dispManEquiUteUtiDep"value="10"/></td>	
								</tr>

								<tr>
									<td >Adequação dos materiais de consumo utilizados</td>
										<td><input type="radio" name="adeMatConUtil" value="0"/></td>
									<td><input type="radio" name="adeMatConUtil"value="5"/></td>
									<td><input type="radio" name="adeMatConUtil"value="10"/></td>

								</tr>

								<tr>
									<td >TOTAL DE PONTOS</td>
									<td colspan="3" ><input type="text"readonly /></td>		
								</tr>
						</table>

						<br/><br/>
		
						<table id="tabela-questionario-avaliacao">
							<caption id="titulo-avaliacao"><h3>3. Quanto às condições higiênicas:</h3></caption>
								<tr>
									<td rowspan="2">Parâmetro Avaliado</td>
									<td>Conforme</td>
									<td>Conforme com Ressalva</td>
									<td>Não Conforme</td>	
								</tr>
								<tr>
									<td>10 pontos</td>
									<td>5 pontos</td>
									<td>0 pontos</td>	
								</tr>

								<tr>
									<td >Condições higiênicas:</td>
									<td><input type="radio" name="condHig" value="0" /></td>
									<td><input type="radio" name="condHig" value="5" /></td>
									<td><input type="radio" name="condHig" value="10"/></td>	
								</tr>


								<tr>
									<td >Higienização das instalações e utensílios:</td>
									<td><input type="radio" name="higInstUten" value="0"/></td>
									<td><input type="radio" name="higInstUten" value="5"/></td>
									<td><input type="radio" name="higInstUten" value="10" /></td>	
								</tr>

								<tr>
									<td >TOTAL DE PONTOS</td>
									<td colspan="3" ><input type="text"readonly /></td>		
								</tr>
					</table>
					
					<br/><br/>
					
					<table id="tabela-questionario-avaliacao">
						<caption id="titulo-avaliacao"><h3>4. Quanto ao pessoal e à segurança, medicina e meio ambiente do trabalho:</h3></caption>
							<tr>
								<td rowspan="2">Parâmetro Avaliado</td>
								<td>Conforme</td>
								<td>Conforme com Ressalva</td>
								<td>Não Conforme</td>	
							</tr>
							<tr>
								<td>10 pontos</td>
								<td>5 pontos</td>
								<td>0 pontos</td>	
							</tr>

							<tr>
								<td >Quadro de pessoal</td>
								<td><input type="radio" name="quadroPes" value="0"/></td>
								<td><input type="radio" name="quadroPes" value="5"/></td>
								<td><input type="radio" name="quadroPes" value="10"/></td>	
							</tr>


							<tr>
								<td >Uniformes EPI</td>
								<td><input type="radio" name="UnifEpi" value="0"/></td>
								<td><input type="radio" name="UnifEpi" value="5"/></td>
								<td><input type="radio" name="UnifEpi"  value="10"/></td>	
							</tr>

							<tr>
								<td >Manutenção da qualidade e uniformidade no padrão de alimentação e do serviço</td>
								<td><input type="radio" name="manQualUnifPadAlimServ" value="0"/></td>
								<td><input type="radio" name="manQualUnifPadAlimServ" value="5" /></td>
								<td><input type="radio" name="manQualUnifPadAlimServ" value="10" /></td>	
							</tr>

							<tr>
								<td >Cunprimento às normas de segurança, medicina e meio ambiente do trabalho</td>
								<td><input type="radio" name="cumpNormas" value="0"/></td>
								<td><input type="radio" name="cumpNormas" value="5" /></td>
								<td><input type="radio" name="cumpNormas" value="10" /></td>	
							</tr>

							<tr>
								<td >TOTAL DE PONTOS</td>
								<td colspan="3" ><input type="text"readonly /></td>		
							</tr>
					</table >

					<br/><br/>
		
					<table id="tabela-questionario-avaliacao">
						<caption id="titulo-avaliacao"><h3>5. Quanto às condições socioambientais:</h3></caption>
							<tr>
								<td rowspan="2">Parâmetro Avaliado</td>
								<td>Conforme</td>
								<td>Conforme com Ressalva</td>
								<td>Não Conforme</td>	
							</tr>
							<tr>
								<td>10 pontos</td>
								<td>5 pontos</td>
								<td>0 pontos</td>	
							</tr>

							<tr>
								<td >Uso racional de água</td>
								<td><input type="radio" name="usoRacAgua" value="0" /></td>
								<td><input type="radio" name="usoRacAgua" value="5" /></td>
								<td><input type="radio" name="usoRacAgua" value="10" /></td>	
							</tr>


							<tr>
								<td >Uso racional de energia elétrica</td>
								<td><input type="radio" name="usoRacEnerEl" value="0" /></td>
								<td><input type="radio" name="usoRacEnerEl" value="5" /></td>
								<td><input type="radio" name="usoRacEnerEl" value="10"/></td>	
							</tr>

							<tr>
								<td >Separação de resíduos sólidos</td>
								<td><input type="radio" name="sepResSol" value="0" /></td>
								<td><input type="radio" name="sepResSol" value="5" /></td>
								<td><input type="radio" name="sepResSol" value="10" /></td>	
							</tr>

							<tr>
								<td >Recolhimento e destinação dos resíduos alimentares</td>
								<td><input type="radio" name="recDestResAlim" value="0" /></td>
								<td><input type="radio" name="recDestResAlim" value="5" /></td>
								<td><input type="radio" name="recDestResAlim" value="10"/></td>	
							</tr>

							<tr>
								<td >TOTAL DE PONTOS</td>
								<td colspan="3" ><input type="text"readonly /></td>		
							</tr>
					</table>
					
					<br/><br/>
				
					<table id="tabela-questionario-avaliacao">
						<caption><h2><br/>TOTAL DE PONTOS OBTIDO PELA CONTRATADA<br/><br/></h2></caption>
							<tr>
							<td>Critérios Avaliados</td>
							<td>Total de Pontos Obtido</td>
							</tr>

							<tr>
							<td>Refeições Servidas</td>
							<td><input type="text" readonly /></td>
							</tr>

							<tr>
							<td>Gêneros, Produtos, Equipamentos, Materiais Utilizados</td>
							<td><input type="text" readonly /></td>
							</tr>

							<tr>
							<td>Condições Higiênicas</td>
							<td><input type="text" readonly /></td>
							</tr>

							<tr>
							<td>Pessoal, Segurança, Medicina e Meio Ambiente do Trabalho</td>
							<td><input type="text"readonly /></td>
							</tr>

							<tr>
							<td>Condições Socioambientais</td>
							<td><input type="text"readonly /></td>
							</tr>

							<tr>
							<td>Total de Pontos da Contratada</td>
							<td><input type="text"readonly /></td>
							</tr>

							<tr>
							<td>Percentual de Liberação da Fatura</td>
							<td><input type="text" readonly /></td>
							</tr>

							<tr>
								<td>Fator de Desconto da Fatura</td>
								<td><input type="text" readonly /></td>
							</tr>

					</table>
					
					<br/><br/>
					
				<input type="submit" id="btn-r" name="submit" value="Registrar">
				
			</form>
			
		<br/><br/>

	</body>
</html>