<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="width=device-width" charset="utf-8">
	<script type="text/javascript">
			function cadastrar(){
				alert("Cadastrado com sucesso!!");
			}
	</script>
	<title>Formulário EMBRAC</title>
	<link rel="stylesheet" type="text/css" href="styleend.css">
</head>
<body>
	<header class="menu">
		<img src="imagens/logobranco.jpg" class="imagem" id="logo">
		<div class="empresa">
			<h1>EMPRESA BRASILEIRA DE CARGAS LTDA.</h1>
		</div>
		<div class="fixo">
			<a href="Login.php">Admin</a>
		</div>
	</header>
			<h1 class="titulo">PESQUISA DE CLIMA ORGANIZACIONAL EMBRAC</h1>
	<div>
		<h1 class="Subtitulo">O objetivo desta pesquisa é avaliar a satisfação dos nossos colaboradores. 
		melhorar o ambiente de trabalho e o desempenho dos processos da empresa. Para isso, sua opinião 
		e participação são fundamentais. Contamos com suas sugestões. Você não precisa informar seu nome 
		nem cargo. O que interessa é a sua opinião franca.</h1>
	</div>					
			<div class="espaço"></div>
	<form action="resultado.php" method="POST">												
			<div class="z">
					<h3 class="textarea"></h3> 
				<div class="a">
					<h4>Nome:</h4>
					<input type="text" name="nome" class="cc">				
					<h4>Cargo:</h4>
					<input type="text" name="cargo" class="cc">
				</div>				
			</div>
												<div class="legenda"></div>
												<div class="espaçog"></div>
			<div class="itens">
						<p class="grupo">Ambiente de trabalho:</p>
			</div>										
			<div class="z">				
						<h3>1 - Você se sente seguro quanto ás condições do seu local de trabalho? (Aspecto Físico)<br></h3> 
					<div class="a">
						<input type="radio" name="p1" value="Pessimo." id="P1"/><label for="P1"><b>Péssimo.</b></label></br>				
						<input type="radio" name="p1" value="Ruim." id="Ru1"><label for="Ru1"><b>Ruim.</b></label></br>
						<input type="radio" name="p1" value="Regular." id="Re1"><label for="Re1"><b>Regular.</b></label></br>
						<input type="radio" name="p1" value="Bom." id="B1"><label for="B1"><b>Bom.</b></label></br> 
						<input type="radio" name="p1" value="Excelente." id="E1" checked><label for="E1"><b>Excelente.</b></label></br> 
					</div>
			</div>
												<div class="legenda"></div>
												<div class="espaço"></div>			
			<div class="z">
						<h3> 2 - Você tem a sua disposição os materiais e recursos necessarios para desempenhar um bom trabalho? <br></h3>
					<div class="a">
						<input type="radio" name="p2" value="Pessimo." id="P2"><label for="P2"><b>Não tenho materiais nem recursos necessarios.</b></label></br>
						<input type="radio" name="p2" value="Ruim." id="Ru2"><label for="Ru2"><b>Tenho poucos materiais e recursos.</b></label></br> 
						<input type="radio" name="p2" value="Regular." id="Re2"><label for="Re2"><b>Parcialmente.</b></label></br> 
						<input type="radio" name="p2" value="Bom." id="B2"><label for="B2"><b>Tenho o essencial.</b></label></br>
						<input type="radio" name="p2" value="Excelente." id="E2" checked><label for="E2"><b>Tenho todos os materiais e recursos.</b></label></br>
					</div>
			</div>
												<div class="legenda"></div>
												<div class="espaço"></div>			
			<div class="z">
						<h3>3 - Como é seu ambiente de trabalho? Considerar sua mesa e sua sala de reunião, banheiro etc..<br></h3>
					<div class="a">
						<input type="radio" name="p3" value="Pessimo." id="P3"><label for="P3"><b>Muito desconfortavel.</b></label></br> 
						<input type="radio" name="p3" value="Ruim." id="Ru3"><label for="Ru3"><b>Um pouco desconfortavel.</b></label></br>
						<input type="radio" name="p3" value="Regular." id="Re3"><label for="Re3"><b>Nem confortavel, nem desconfortavel.</b></label></br>
						<input type="radio" name="p3" value="Bom." id="B3"><label for="B3"><b>Um pouco confortavel.</b></label></br> 
						<input type="radio" name="p3" value="Excelente." id="E3" checked><label for="E3"><b>Muito confortavel.</b></label></br>
					</div>
			</div>
												<div class="legenda"></div>
												<div class="espaçog"></div>
			<div class="itens">
						<p class="grupo">Remuneração e desempenho:</p>
			</div>				
			<div class="z">
						<h3>4 - Você está satisfeito com a função que exerce?<br></h3>
					<div class="a">
						<input type="radio" name="p4" value="Ruim." id="P4"><label for="P4"><b>Péssimo.</b></label></br>
						<input type="radio" name="p4" value="Regular." id="Ru4"><label for="Ru4"><b>Ruim.</b></label></br> 
						<input type="radio" name="p4" value="Bom." id="Re4"><label for="Re4"><b>Regular.</b></label></br> 
						<input type="radio" name="p4" value="Ótimo." id="B4"><label for="B4"><b>Bom.</b></label></br>
						<input type="radio" name="p4" value="Excelente." id="E4" checked><label for="E4"><b>Excelente.</b></label></br>
					</div>
			</div>
												<div class="legenda"></div>
												<div class="espaço"></div>
			<div class="z">
						<h3>5 - Você sabe quais as expectativas que a empresa tem em relação ao seu trabalho?<br></h3>
					<div class="a">	
						<input type="radio" name="p5" value="Pessimo." id="P5"><label for="P5"><b>Não tenho a minima idéia.</b></label></br> 
						<input type="radio" name="p5" value="Ruim." id="Ru5"><label for="Ru5"><b>Nunca me disseram, mas eu imagino quais são as expectativas.</b></label></br> 
						<input type="radio" name="p5" value="Regular." id="Re5"><label for="Re5"><b>Nunca pensei sobre isso.</b></label></br>
						<input type="radio" name="p5" value="Bom." id="B5"><label for="B5"><b>Já conversaram comigo sobre as expectativas mas eu tenho algumas duvidas.</b></label></br>
						<input type="radio" name="p5" value="Excelente." id="E5" checked><label for="E5"><b>Sim, tenho total certeza de quais são as expectativas.</b></label></br>
					</div>
			</div>
												<div class="legenda"></div>
												<div class="espaço"></div>
			<div class="z">
						<h3>6 - Você sente que seu trabalho é importante para a empresa como um todo?<br></h3>
					<div class="a6">
						<input type="radio" name="p6" value="Estressante." id="Estressante"><label for="Estressante"><b>Estressante.</b></label></br>
						<input type="radio" name="p6" value="Cansativo." id="Cansativo"><label for="Cansativo"><b>Cansativo.</b></label></br>
						<input type="radio" name="p6" value="Motivador." id="Motivador"><label for="Motivador"><b>Motivador.</b></label></br>
						<input type="radio" name="p6" value="Entediante." id="Entediante"><label for="Entediante"><b>Entediante.</b></label></br>
						<input type="radio" name="p6" value="Empolgante." id="Empolgante"><label for="Empolgante"><b>Empolgante.</b></label></br>
						<input type="radio" name="p6" value="Desafiador." id="Desafiador"><label for="Desafiador"><b>Desafiador.</b></label></br>
						<input type="radio" name="p6" value="Inovador." id="Inovador"><label for="Inovador"><b>Inovador.</b></label></br>
						<input type="radio" name="p6" value="Estimulante." id="Estimulante"><label for="Estimulante"><b>Estimulante.</b></label></br>
						<input type="radio" name="p6" value="Indiferente." id="Indiferente"><label for="Indiferente"><b>Indiferente.</b></label></br>
						<input type="radio" name="p6" value="prazeroso." id="prazeroso"><label for="prazeroso"><b>Prazeroso.</b></label></br>
						<input type="radio" name="p6" value="Promissor." id="Promissor"><label for="Promissor"><b>Promissor.</b></label></br>
						<input type="radio" name="p6" value="Impotante." id="Impotante"><label for="Impotante"><b>Importante.</b></label></br>
						<input type="radio" name="p6" value="Descontraido." id="Descontraido" checked><label for="Descontraido"><b>Descontraido.</b></label></br>
					</div>
			</div>
												<div class="legenda"></div>
												<div class="espaçog"></div>
			<div class="itens">
						<p class="grupo">Benefícios:</p>
			</div>
			<div class="z">
						<h3>7 - Você está satisfeito com o benefício que recebe da empresa (Cesta-Básica)?<br></h3>
					<div class="a">
						<input type="radio" name="p7" value="Pessimo." id="P7"><label for="P7"><b>Totalmente insatisfeito.</b></label></br>
						<input type="radio" name="p7" value="Ruim." id="Ru7"><label for="Ru7"><b>Insatisfeito.</b></label></br>
						<input type="radio" name="p7" value="Regular." id="Re7"><label for="Re7"><b>Nem insatisfeito, nem satisfeito.</b></label></br>
						<input type="radio" name="p7" value="Bom." id="B7"><label for="B7"><b>Satisfeito.</b></label></br>
						<input type="radio" name="p7" value="Excelente." id="E7" checked><label for="E7"><b>Totalmente satisfeito.</b></label></br>
					</div>
			</div>
												<div class="legenda"></div>
												<div class="espaçog"></div>
			<div class="itens">
						<p class="grupo">Capacitação e comunicação:</p>
			</div>
			<div class="z">
						<h3>8 - Os meios de comunicação internos são adequados (Murais, Reuniões...)?<br></h3> 
					<div class="a">	
						<input type="radio" name="p8" value="Pessimo." id="P8"><label for="P8"><b>Péssimo.</b></label></br>
						<input type="radio" name="p8" value="Ruim." id="Ru8"><label for="Ru8"><b>Ruim.</b></label></br>
						<input type="radio" name="p8" value="Regular." id="Re8"><label for="Re8"><b>Regular.</b></label></br>
						<input type="radio" name="p8" value="Bom." id="B8"><label for="B8"><b>Bom.</b></label></br>
						<input type="radio" name="p8" value="Excelente." id="E8" checked><label for="E8"><b>Excelente.</b></label></br>
					</div>
			</div>
												<div class="legenda"></div>
												<div class="espaço"></div>	 
			<div class="z">
						<h3>9 - Como é seu conhecimento sobre a política da empresa (Missão. Visão e Valores)?<br></h3>
					<div class="a">
						<input type="radio" name="p9" value="Bom." id="P9"><label for="P9"><b>Péssimo.</b></label></br>
						<input type="radio" name="p9" value="Ruim." id="Ru9"><label for="Ru9"><b>Ruim.</b></label></br>
						<input type="radio" name="p9" value="Regular." id="Re9"><label for="Re9"><b>Regular.</b></label></br>
						<input type="radio" name="p9" value="Bom." id="B9"><label for="B9"><b>Bom.</b></label></br>
						<input type="radio" name="p9" value="Excelente." id="E9" checked><label for="E9"><b>Excelente.</b></label></br>
					</div>
			</div>
												<div class="legenda"></div>
												<div class="espaçog"></div>
			<div class="itens">
						<p class="grupo">Relacionamento da organização:</p>
			</div>	
			<div class="z">
						<h3>10 - Como é a sua relação de trabalho com seu supeuvisor, gerente ou coordenador?<br></h3> 
					<div class="a">
						<input type="radio" name="p10" value="Excelente." id="E10" checked><label for="E10"><b>Muito tranquila.</b></label></br>
						<input type="radio" name="p10" value="Bom." id="B10"><label for="B10"><b>Um pouco tranquila.</b></label></br>
						<input type="radio" name="p10" value="Regular." id="Re10"><label for="Re10"><b>Nem tranquila, nem conturbada.</b></label></br>
						<input type="radio" name="p10" value="Ruim." id="Ru10"><label for="Ru10"><b>Um pouco conturbada.</b></label></br>
						<input type="radio" name="p10" value="Pessimo." id="P10"><label for="P10"><b>Muito conturbada.</b></label></br>
					</div>
			</div>
												<div class="legenda"></div>
												<div class="espaço"></div>			
			<div class="z">
						<h3>11 - Seu gerente. Supervisor ou coordenador costuma dar apoio ao seu trabalho?<br></h3> 
					<div class="a">
						<input type="radio" name="p11" value="Pessimo." id="P11"><label for="P11"><b>Não me dá apoio nenhum.</b></label></br>
						<input type="radio" name="p11" value="Ruim." id="Ru11"><label for="Ru11"><b>Me dá pouco apoio.</b></label></br>
						<input type="radio" name="p11" value="Regular." id="Re11"><label for="Re11"><b>Me dá algum apoio.</b></label></br>
						<input type="radio" name="p11" value="Bom." id="B11"><label for="B11"><b>Me dá muito apoio.</b></label></br>
						<input type="radio" name="p11" value="Excelente." id="E11" checked><label for="E11"><b>Me dá total apoio.</b></label></br>
					</div>				
			</div>
												<div class="legenda"></div>
												<div class="espaço"></div>	
			<div class="z">
						<h3>12 - Como é a relação de trabalho com seus colegas?<br></h3> 
					<div class="a">
						<input type="radio" name="p12" value="Excelente." id="E12" checked><label for="E12"><b>Muito tranquila.</b></label></br>
						<input type="radio" name="p12" value="Bom." id="B12"><label for="B12"><b>Um pouco tranquila.</b></label></br>
						<input type="radio" name="p12" value="Regular." id="Re12"><label for="Re12"><b>Nem tranquila, nem conturbada.</b></label></br>
						<input type="radio" name="p12" value="Ruim." id="Ru12"><label for="Ru12"><b>Um pouco conturbada.</b></label></br>
						<input type="radio" name="p12" value="Pessimo." id="P12"><label for="P12"><b>Muito conturbada.</b></label></br>
					</div>				
			</div>
												<div class="legenda"></div>
												<div class="espaço"></div>	
			<div class="z">
						<h3>13 - O você pensa da cooperação dos setores da empresa?<br></h3> 
					<div class="a">
						<input type="radio" name="p13" value="Pessimo." id="P13"><label for="P13"><b>Péssima.</b></label></br>
						<input type="radio" name="p13" value="Ruim." id="Ru13"><label for="Ru13"><b>Ruim.</b></label></br>
						<input type="radio" name="p13" value="Regular." id="Re13"><label for="Re13"><b>Regular.</b></label></br>
						<input type="radio" name="p13" value="Bom." id="B13"><label for="B13"><b>Boa.</b></label></br>
						<input type="radio" name="p13" value="Excelente." id="E13" checked><label for="E13"><b>Excelente.</b></label></br>
					</div>				
			</div>
												<div class="legenda"></div>
												<div class="espaçog"></div>
			<div class="itens">
						<p class="grupo">SSMA:</p>
			</div>	
			<div class="z">
						<h3>14 - As ações da empresa sobre SSMA (Saúde, Segurança, Meio ambiente) são suficientes?<br></h3> 
					<div class="a">
						<input type="radio" name="p14" value="Pessimo." id="P14"><label for="P14"><b>Péssimo.</b></label></br>
						<input type="radio" name="p14" value="Ruim." id="Ru14"><label for="Ru14"><b>Ruim.</b></label></br>
						<input type="radio" name="p14" value="Regular." id="Re14"><label for="Re14"><b>Regular.</b></label></br>
						<input type="radio" name="p14" value="Bom." id="B14"><label for="B14"><b>Bom.</b></label></br>
						<input type="radio" name="p14" value="Excelente." id="E14" checked><label for="E14"><b>Excelente.</b></label></br>
					</div>				
			</div>
												<div class="legenda"></div>
												<div class="espaço"></div>																			
			<div class="z">
						<h3 class="textarea">Você gostaria de deixar sua opinião ou dar alguma sugestão para melhorar o ambiente da empresa como um todo!<br></h3> 
					<div class="a">
						<input type="textarea" name="p15" maxlength="240">
					</div>				
			</div>
												<div class="legenda"></div>
												<div class="espaço"></div>
			<div class="rodape">
				<div class="Enviar">

					<input type="submit" name="enviar" value="Enviar Respostas" onclick="cadastrar()">
				</div>
			</div>			
</form>
</body>
</html>