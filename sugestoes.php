<?php
session_start();
$mysqli = new mysqli("localhost", "id8765345_ebc", "embrac123", "id8765345_formulario");
$con = $mysqli->query("SELECT * FROM embrac") or die ($mysqli->error);
$mysqli->set_charset('utf8');
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
				echo "<h1 class='pergunta' title='Você gostaria de deixar sua opinião ou dar alguma sugestão para melhorar o ambiente da empresa como um todo!'>SUGESTÕES:</h1>";
				while ($p15sugestoes = $con->fetch_array()){ 
				echo "<h1 class='indiceN'>".$p15sugestoes['pergunta15']."</h1>";
				} 
				//==========================================================================================
			?>	
		</div>	
		</div>
		</div>
									<div class="legenda"></div>
<div class="footer"><a class="link" href="LogOut.php">Sair.</a> <a class="link" href="adminpage.php">Ver Respostas.</a></div>
</body>
</html>