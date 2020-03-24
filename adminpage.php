<?php
session_start();
/*
if(!isset($_SESSION['login1']) AND !isset($_SESSION['senha1'])){
		header("Location: Login.php");
		exit;

} */

$mysqli = new mysqli("localhost", "root", "", "formulario");

?>
<!DOCTYPE html>
<html>
<head>
<header class="menu">
		<meta name="viewport" content="width=device-width" charset="utf-8">
		<link rel="stylesheet" type="text/css" href="styleadmin.css">
		<img src="imagens/logobranco.jpg" class="imagem" id="logo">
		<div class="empresa"><h1> EMPRESA BRASILEIRA DE CARGAS LTDA. </h1></div>
</header>
</head>
<body>	
			<h1 class="titulo">Índice de respostas da PESQUISA DE CLIMA ORGANIZACIONAL EMBRAC.</h1>
<body>
		<div class="z">
		<h3 class="textarea"></h3>	
		<div class="a">
			<?php 		
					$resultid = $mysqli->query("SELECT id FROM embrac");
					$p1pessimo = $mysqli->query("SELECT * FROM embrac WHERE(pergunta1='Pessimo.')");
					$p2pessimo = $mysqli->query("SELECT * FROM embrac WHERE(pergunta2='Pessimo.')");
					$p3pessimo = $mysqli->query("SELECT * FROM embrac WHERE(pergunta3='Pessimo.')");
					$p4pessimo = $mysqli->query("SELECT * FROM embrac WHERE(pergunta4='Pessimo.')");
					$p5pessimo = $mysqli->query("SELECT * FROM embrac WHERE(pergunta5='Pessimo.')");
					$p7pessimo = $mysqli->query("SELECT * FROM embrac WHERE(pergunta7='Pessimo.')");
					$p8pessimo = $mysqli->query("SELECT * FROM embrac WHERE(pergunta8='Pessimo.')");
					$p9pessimo = $mysqli->query("SELECT * FROM embrac WHERE(pergunta9='Pessimo.')");
					$p10pessimo = $mysqli->query("SELECT * FROM embrac WHERE(pergunta10='Pessimo.')");
					$p11pessimo = $mysqli->query("SELECT * FROM embrac WHERE(pergunta11='Pessimo.')");
					$p12pessimo = $mysqli->query("SELECT * FROM embrac WHERE(pergunta12='Pessimo.')");
					$p13pessimo = $mysqli->query("SELECT * FROM embrac WHERE(pergunta13='Pessimo.')");
					$p14pessimo = $mysqli->query("SELECT * FROM embrac WHERE(pergunta14='Pessimo.')");
					$p1ruim = $mysqli->query("SELECT * FROM embrac WHERE(pergunta1='Ruim.')");
					$p2ruim = $mysqli->query("SELECT * FROM embrac WHERE(pergunta2='Ruim.')");
					$p3ruim = $mysqli->query("SELECT * FROM embrac WHERE(pergunta3='Ruim.')");
					$p4ruim = $mysqli->query("SELECT * FROM embrac WHERE(pergunta4='Ruim.')");
					$p5ruim = $mysqli->query("SELECT * FROM embrac WHERE(pergunta5='Ruim.')");
					$p7ruim = $mysqli->query("SELECT * FROM embrac WHERE(pergunta7='Ruim.')");
					$p8ruim = $mysqli->query("SELECT * FROM embrac WHERE(pergunta8='Ruim.')");
					$p9ruim = $mysqli->query("SELECT * FROM embrac WHERE(pergunta9='Ruim.')");
					$p10ruim = $mysqli->query("SELECT * FROM embrac WHERE(pergunta10='Ruim.')");
					$p11ruim = $mysqli->query("SELECT * FROM embrac WHERE(pergunta11='Ruim.')");
					$p12ruim = $mysqli->query("SELECT * FROM embrac WHERE(pergunta12='Ruim.')");
					$p13ruim = $mysqli->query("SELECT * FROM embrac WHERE(pergunta13='Ruim.')");
					$p14ruim = $mysqli->query("SELECT * FROM embrac WHERE(pergunta14='Ruim.')");
					$p1regular = $mysqli->query("SELECT * FROM embrac WHERE(pergunta1='Regular.')");
					$p2regular = $mysqli->query("SELECT * FROM embrac WHERE(pergunta2='Regular.')");
					$p3regular = $mysqli->query("SELECT * FROM embrac WHERE(pergunta3='Regular.')");
					$p4regular = $mysqli->query("SELECT * FROM embrac WHERE(pergunta4='Regular.')");
					$p5regular = $mysqli->query("SELECT * FROM embrac WHERE(pergunta5='Regular.')");
					$p7regular = $mysqli->query("SELECT * FROM embrac WHERE(pergunta7='Regular.')");
					$p8regular = $mysqli->query("SELECT * FROM embrac WHERE(pergunta8='Regular.')");
					$p9regular = $mysqli->query("SELECT * FROM embrac WHERE(pergunta9='Regular.')");
					$p10regular = $mysqli->query("SELECT * FROM embrac WHERE(pergunta10='Regular.')");
					$p11regular = $mysqli->query("SELECT * FROM embrac WHERE(pergunta11='Regular.')");
					$p12regular = $mysqli->query("SELECT * FROM embrac WHERE(pergunta12='Regular.')");
					$p13regular = $mysqli->query("SELECT * FROM embrac WHERE(pergunta13='Regular.')");
					$p14regular = $mysqli->query("SELECT * FROM embrac WHERE(pergunta14='Regular.')");
					$p1bom = $mysqli->query("SELECT * FROM embrac WHERE(pergunta1='Bom.')");
					$p2bom = $mysqli->query("SELECT * FROM embrac WHERE(pergunta2='Bom.')");
					$p3bom = $mysqli->query("SELECT * FROM embrac WHERE(pergunta3='Bom.')");
					$p4bom = $mysqli->query("SELECT * FROM embrac WHERE(pergunta4='Bom.')");
					$p5bom = $mysqli->query("SELECT * FROM embrac WHERE(pergunta5='Bom.')");
					$p7bom = $mysqli->query("SELECT * FROM embrac WHERE(pergunta7='Bom.')");
					$p8bom = $mysqli->query("SELECT * FROM embrac WHERE(pergunta8='Bom.')");
					$p9bom = $mysqli->query("SELECT * FROM embrac WHERE(pergunta9='Bom.')");
					$p10bom = $mysqli->query("SELECT * FROM embrac WHERE(pergunta10='Bom.')");
					$p11bom = $mysqli->query("SELECT * FROM embrac WHERE(pergunta11='Bom.')");
					$p12bom = $mysqli->query("SELECT * FROM embrac WHERE(pergunta12='Bom.')");
					$p13bom = $mysqli->query("SELECT * FROM embrac WHERE(pergunta13='Bom.')");
					$p14bom = $mysqli->query("SELECT * FROM embrac WHERE(pergunta14='Bom.')");
					$p1excelente = $mysqli->query("SELECT * FROM embrac WHERE(pergunta1='Excelente.')");
					$p2excelente = $mysqli->query("SELECT * FROM embrac WHERE(pergunta2='Excelente.')");
					$p3excelente = $mysqli->query("SELECT * FROM embrac WHERE(pergunta3='Excelente.')");
					$p4excelente = $mysqli->query("SELECT * FROM embrac WHERE(pergunta4='Excelente.')");
					$p5excelente = $mysqli->query("SELECT * FROM embrac WHERE(pergunta5='Excelente.')");
					$p7excelente = $mysqli->query("SELECT * FROM embrac WHERE(pergunta7='Excelente.')");
					$p8excelente = $mysqli->query("SELECT * FROM embrac WHERE(pergunta8='Excelente.')");
					$p9excelente = $mysqli->query("SELECT * FROM embrac WHERE(pergunta9='Excelente.')");
					$p10excelente = $mysqli->query("SELECT * FROM embrac WHERE(pergunta10='Excelente.')");
					$p11excelente = $mysqli->query("SELECT * FROM embrac WHERE(pergunta11='Excelente.')");
					$p12excelente = $mysqli->query("SELECT * FROM embrac WHERE(pergunta12='Excelente.')");
					$p13excelente = $mysqli->query("SELECT * FROM embrac WHERE(pergunta13='Excelente.')");
					$p14excelente = $mysqli->query("SELECT * FROM embrac WHERE(pergunta14='Excelente.')");					
					$p6estressante = $mysqli->query("SELECT * FROM embrac WHERE(pergunta6='Estressante.')");
					$p6cansativo = $mysqli->query("SELECT * FROM embrac WHERE(pergunta6='Cansativo.')");
					$p6motivador = $mysqli->query("SELECT * FROM embrac WHERE(pergunta6='Motivador.')");
					$p6entediante = $mysqli->query("SELECT * FROM embrac WHERE(pergunta6='Entediante.')");
					$p6empolgante = $mysqli->query("SELECT * FROM embrac WHERE(pergunta6='Empolgante.')");
					$p6desafiador = $mysqli->query("SELECT * FROM embrac WHERE(pergunta6='Desafiador.')");
					$p6inovador = $mysqli->query("SELECT * FROM embrac WHERE(pergunta6='Inovador.')");
					$p6estimulante = $mysqli->query("SELECT * FROM embrac WHERE(pergunta6='Estimulante.')");
					$p6indiferente = $mysqli->query("SELECT * FROM embrac WHERE(pergunta6='Indiferente.')");
					$p6prazeroso = $mysqli->query("SELECT * FROM embrac WHERE(pergunta6='Prazeroso.')");
					$p6promissor = $mysqli->query("SELECT * FROM embrac WHERE(pergunta6='Promissor.')");
					$p6importante = $mysqli->query("SELECT * FROM embrac WHERE(pergunta6='Importante.')");
					$p6descontraido = $mysqli->query("SELECT * FROM embrac WHERE(pergunta6='Descontraido.')");
					$p15sugestao = $mysqli->query("SELECT ('pergunta15') FROM embrac");

					printf("<h1 class='pesquisa'> A pesquisa teve um total de %d Respostas.</h1>", $resultid->num_rows);
				//==========================================================================================
					echo "<h1 class='pergunta' title='1 - Você se sente seguro quanto ás condições do seu local de trabalho? (Aspecto Físico)'>PERGUNTA 1:</h1>";
	 				echo "<h1 class='indiceN'>Excelente:</h1>"; printf("<p class='irN'>%d", $p1excelente->num_rows."</p>");
					echo "<h1 class='indiceN'>Bom:</h1>"; printf("<p class='irN'>%d", $p1bom->num_rows."</p>");
					echo "<h1 class='indiceN'>Regular:</h1>"; printf("<p class='irN'>%d", $p1regular->num_rows."</p>");
					echo "<h1 class='indiceN'>Ruim:</h1>"; printf("<p class='irN'>%d", $p1ruim->num_rows."</p");
					echo "<h1 class='indiceN'>Péssimo:</h1>"; printf("<p class='irN'>%d", $p1pessimo->num_rows."</p>");
				//==========================================================================================					
					echo "<h1 class='pergunta' title='2 - Você tem a sua disposição os materiais e recursos necessarios para desempenhar um bom trabalho?'>PERGUNTA 2:</h1>";
	 				echo "<h1 class='indice'>Tenho todos os materiais e recursos:</h1>"; printf("<p class='ir'>%d", $p2excelente->num_rows."</p>");
					echo "<h1 class='indice'>Tenho o essencial:</h1>"; printf("<p class='ir'>%d", $p2bom->num_rows."</p>");
					echo "<h1 class='indice'>Parcialmente:</h1>"; printf("<p class='ir'>%d", $p2regular->num_rows."</p>");
					echo "<h1 class='indice'>Tenho poucos materiais e recursos:</h1>"; printf("<p class='ir'>%d", $p2ruim->num_rows."</p");
					echo "<h1 class='indice'>Não tenho materiais nem recursos necessarios:</h1>"; printf("<p class='ir'>%d", $p2pessimo->num_rows."</p>");
				//==========================================================================================
					echo "<h1 class='pergunta' title='3 - Como é seu ambiente de trabalho? Considerar sua mesa e sua sala de reunião, banheiro etc..'>PERGUNTA 3:</h1>";
	 				echo "<h1 class='indice'>Muito confortável:</h1>"; printf("<p class='ir'>%d", $p3excelente->num_rows."</p>");
					echo "<h1 class='indice'>Um pouco confortável:</h1>"; printf("<p class='ir'>%d", $p3bom->num_rows."</p>");
					echo "<h1 class='indice'>Nem confortável, nem desconfortável:</h1>"; printf("<p class='ir'>%d", $p3regular->num_rows."</p>");
					echo "<h1 class='indice'>Um pouco desconfortável:</h1>"; printf("<p class='ir'>%d", $p3ruim->num_rows."</p");
					echo "<h1 class='indice'>Muito desconfortável:</h1>"; printf("<p class='ir'>%d", $p3pessimo->num_rows."</p>");
				//==========================================================================================
					echo "<h1 class='pergunta' title='4 - Você está satisfeito com a função que exerce?'>PERGUNTA 4:</h1>";
	 				echo "<h1 class='indiceN'>Excelente:</h1>"; printf("<p class='irN'>%d", $p4excelente->num_rows."</p>");
					echo "<h1 class='indiceN'>Bom:</h1>"; printf("<p class='irN'>%d", $p4bom->num_rows."</p>");
					echo "<h1 class='indiceN'>Regular:</h1>"; printf("<p class='irN'>%d", $p4regular->num_rows."</p>");
					echo "<h1 class='indiceN'>Ruim:</h1>"; printf("<p class='irN'>%d", $p4ruim->num_rows."</p");
					echo "<h1 class='indiceN'>Péssimo:</h1>"; printf("<p class='irN'>%d", $p4pessimo->num_rows."</p>");
				//==========================================================================================
					echo "<h1 class='pergunta' title='5 - Você sabe quais as expectativas que a empresa tem em relação ao seu trabalho?'>PERGUNTA 5:</h1>";
	 				echo "<h1 class='indice5'>Sim, tenho total certeza de quais são as expectativas:</h1>"; printf("<p class='ir5'>%d", $p5excelente->num_rows."</p>");
					echo "<h1 class='indice5'>Já conversaram comigo sobre as expectativas, mas eu tenho algumas dúvidas:</h1>"; printf("<p class='ir5'>%d", $p5bom->num_rows."</p>");
					echo "<h1 class='indice5'>Nunca pensei sobre isso:</h1>"; printf("<p class='ir5'>%d", $p5regular->num_rows."</p>");
					echo "<h1 class='indice5'>Nunca me disseram, mas eu imagino quais são as expectativas:</h1>"; printf("<p class='ir5'>%d", $p5ruim->num_rows."</p");
					echo "<h1 class='indice5'>Não tenho a minima idéia:</h1>"; printf("<p class='ir5'>%d", $p5pessimo->num_rows."</p>");
				//==========================================================================================
					echo "<h1 class='pergunta' title='6 - Você sente que seu trabalho é importante para a empresa como um todo?'>PERGUNTA 6:</h1>";
	 				echo "<h1 class='indiceN'>Estressante:</h1>"; printf("<p class='irN'>%d", $p6estressante->num_rows."</p>");
					echo "<h1 class='indiceN'>Cansativo:</h1>"; printf("<p class='irN'>%d", $p6cansativo->num_rows."</p>");
					echo "<h1 class='indiceN'>Motivador:</h1>"; printf("<p class='irN'>%d", $p6motivador->num_rows."</p>");
					echo "<h1 class='indiceN'>Entediante:</h1>"; printf("<p class='irN'>%d", $p6entediante->num_rows."</p");
					echo "<h1 class='indiceN'>Empolgante:</h1>"; printf("<p class='irN'>%d", $p6empolgante->num_rows."</p>");
					echo "<h1 class='indiceN'>Desafiador:</h1>"; printf("<p class='irN'>%d", $p6desafiador->num_rows."</p>");
					echo "<h1 class='indiceN'>Inovador:</h1>"; printf("<p class='irN'>%d", $p6inovador->num_rows."</p>");
					echo "<h1 class='indiceN'>Estimulante:</h1>"; printf("<p class='irN'>%d", $p6estimulante->num_rows."</p>");
					echo "<h1 class='indiceN'>Indiferente:</h1>"; printf("<p class='irN'>%d", $p6indiferente->num_rows."</p>");
					echo "<h1 class='indiceN'>Prazeroso:</h1>"; printf("<p class='irN'>%d", $p6prazeroso->num_rows."</p>");
					echo "<h1 class='indiceN'>Promissor:</h1>"; printf("<p class='irN'>%d", $p6promissor->num_rows."</p>");
					echo "<h1 class='indiceN'>Importante:</h1>"; printf("<p class='irN'>%d", $p6importante->num_rows."</p>");
					echo "<h1 class='indiceN'>Descontraido:</h1>"; printf("<p class='irN'>%d", $p6descontraido->num_rows."</p>");
				//==========================================================================================
					echo "<h1 class='pergunta' title='7 - Você está satisfeito com o beneficio que recebe da empresa (Cesta-Básica)?'>PERGUNTA 7:</h1>";
	 				echo "<h1 class='indice'>Totalmente satisfeito:</h1>"; printf("<p class='ir'>%d", $p7excelente->num_rows."</p>");
					echo "<h1 class='indice'>Satisfeito:</h1>"; printf("<p class='ir'>%d", $p7bom->num_rows."</p>");
					echo "<h1 class='indice'>Nem insatisfeito, nem satisfeito:</h1>"; printf("<p class='ir'>%d", $p2regular->num_rows."</p>");
					echo "<h1 class='indice'>Insatisfeito:</h1>"; printf("<p class='ir'>%d", $p7ruim->num_rows."</p");
					echo "<h1 class='indice'>Totalmente insatisfeito:</h1>"; printf("<p class='ir'>%d", $p7pessimo->num_rows."</p>");
				//==========================================================================================
					echo "<h1 class='pergunta' title='8 - Os meios de comunicação internos são adequados (Murais, Reuniões...)?'>PERGUNTA 8:</h1>";
	 				echo "<h1 class='indiceN'>Excelente:</h1>"; printf("<p class='irN'>%d", $p8excelente->num_rows."</p>");
					echo "<h1 class='indiceN'>Bom:</h1>"; printf("<p class='irN'>%d", $p8bom->num_rows."</p>");
					echo "<h1 class='indiceN'>Regular:</h1>"; printf("<p class='irN'>%d", $p8regular->num_rows."</p>");
					echo "<h1 class='indiceN'>Ruim:</h1>"; printf("<p class='irN'>%d", $p8ruim->num_rows."</p");
					echo "<h1 class='indiceN'>Péssimo:</h1>"; printf("<p class='irN'>%d", $p8pessimo->num_rows."</p>");
				//==========================================================================================
					echo "<h1 class='pergunta' title='9 - Como é seu conhecimento sobre a política da empresa (Missão. Visão e Valores)?'>PERGUNTA 9:</h1>";
	 				echo "<h1 class='indiceN'>Excelente:</h1>"; printf("<p class='irN'>%d", $p9excelente->num_rows."</p>");
					echo "<h1 class='indiceN'>Bom:</h1>"; printf("<p class='irN'>%d", $p9bom->num_rows."</p>");
					echo "<h1 class='indiceN'>Regular:</h1>"; printf("<p class='irN'>%d", $p9regular->num_rows."</p>");
					echo "<h1 class='indiceN'>Ruim:</h1>"; printf("<p class='irN'>%d", $p9ruim->num_rows."</p");
					echo "<h1 class='indiceN'>Péssimo:</h1>"; printf("<p class='irN'>%d", $p9pessimo->num_rows."</p>");
				//==========================================================================================
					echo "<h1 class='pergunta' title='10 - Como é a sua relação de trabalho com seu supeuvisor, gerente ou coordenador?'>PERGUNTA 10:</h1>";
	 				echo "<h1 class='indice'>Muito tranquila:</h1>"; printf("<p class='ir'>%d", $p10excelente->num_rows."</p>");
					echo "<h1 class='indice'>Um pouco tranquila:</h1>"; printf("<p class='ir'>%d", $p10bom->num_rows."</p>");
					echo "<h1 class='indice'>Nem tranquila, nem conturbada:</h1>"; printf("<p class='ir'>%d", $p10regular->num_rows."</p>");
					echo "<h1 class='indice'>Um pouco conturbada:</h1>"; printf("<p class='ir'>%d", $p10ruim->num_rows."</p");
					echo "<h1 class='indice'>Muito conturbada:</h1>"; printf("<p class='ir'>%d", $p10pessimo->num_rows."</p>");
				//==========================================================================================
					echo "<h1 class='pergunta' title='11 - Seu gerente. Supervisor ou coordenador costuma dar apoio ao seu trabalho?'>PERGUNTA 11:</h1>";
	 				echo "<h1 class='indice'>Me dá total apoio:</h1>"; printf("<p class='ir'>%d", $p11excelente->num_rows."</p>");
					echo "<h1 class='indice'>Me dá muito apoio:</h1>"; printf("<p class='ir'>%d", $p11bom->num_rows."</p>");
					echo "<h1 class='indice'>Me dá pouco apoio:</h1>"; printf("<p class='ir'>%d", $p11regular->num_rows."</p>");
					echo "<h1 class='indice'>Me dá pouco apoio:</h1>"; printf("<p class='ir'>%d", $p11ruim->num_rows."</p");
					echo "<h1 class='indice'>Não me dá apoio nenhum:</h1>"; printf("<p class='ir'>%d", $p11pessimo->num_rows."</p>");
				//==========================================================================================
					echo "<h1 class='pergunta' title='12 - Como é a relação de trabalho com seus colegas?'>PERGUNTA 12:</h1>";
	 				echo "<h1 class='indice'>Muito tranquila:</h1>"; printf("<p class='ir'>%d", $p12excelente->num_rows."</p>");
					echo "<h1 class='indice'>Um pouco tranquila:</h1>"; printf("<p class='ir'>%d", $p12bom->num_rows."</p>");
					echo "<h1 class='indice'>Nem tranquila, nem conturbada:</h1>"; printf("<p class='ir'>%d", $p12regular->num_rows."</p>");
					echo "<h1 class='indice'>Um pouco conturbada:</h1>"; printf("<p class='ir'>%d", $p12ruim->num_rows."</p");
					echo "<h1 class='indice'>Muito conturbada:</h1>"; printf("<p class='ir'>%d", $p12pessimo->num_rows."</p>");
				//==========================================================================================
					echo "<h1 class='pergunta' title='13 - O você pensa da cooperação dos setores da empresa?'>PERGUNTA 13:</h1>";
	 				echo "<h1 class='indiceN'>Excelente:</h1>"; printf("<p class='irN'>%d", $p13excelente->num_rows."</p>");
					echo "<h1 class='indiceN'>Bom:</h1>"; printf("<p class='irN'>%d", $p13bom->num_rows."</p>");
					echo "<h1 class='indiceN'>Regular:</h1>"; printf("<p class='irN'>%d", $p13regular->num_rows."</p>");
					echo "<h1 class='indiceN'>Ruim:</h1>"; printf("<p class='irN'>%d", $p13ruim->num_rows."</p");
					echo "<h1 class='indiceN'>Péssimo:</h1>"; printf("<p class='irN'>%d", $p13pessimo->num_rows."</p>");
				//==========================================================================================
					echo "<h1 class='pergunta' title='14 - As ações da empresa sobre SSMA (Saúde, Segurança, Meio ambiente) são suficientes?'>PERGUNTA 14:</h1>";
	 				echo "<h1 class='indiceN'>Excelente:</h1>"; printf("<p class='irN'>%d", $p14excelente->num_rows."</p>");
					echo "<h1 class='indiceN'>Bom:</h1>"; printf("<p class='irN'>%d", $p14bom->num_rows."</p>");
					echo "<h1 class='indiceN'>Regular:</h1>"; printf("<p class='irN'>%d", $p14regular->num_rows."</p>");
					echo "<h1 class='indiceN'>Ruim:</h1>"; printf("<p class='irN'>%d", $p14ruim->num_rows."</p");
					echo "<h1 class='indiceN'>Péssimo:</h1>"; printf("<p class='irN'>%d", $p14pessimo->num_rows."</p>");
				//==========================================================================================
			?>
		</div>	
		</div>
		</div>
									<div class="legenda"></div>
<div class="footer"><a class="link" href="LogOut.php">Sair</a> <a class="link" href="sugestoes.php">Visualizar Sugestões</a></div>
</body>
</html>
