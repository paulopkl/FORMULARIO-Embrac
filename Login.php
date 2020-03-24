<!DOCTYPE html>
<html>
<head>
<meta charset="UTF8">
<link rel="stylesheet" type="text/css" href="estilo_de_login.css">
</head>
<title> </title>
<body>
	<div id="login">
		<div class="mensage">
			<div class="logo"></div>
			<div class="acomodar"><img src="imagens\logobranco.jpg" class="imagem"></div>
			<form action="conectaraologin.php" method="post">
				<fieldset>
					<label for="login">Login: </label><input id="login" type="text" name="login" required="">
					<label for="senha">Senha: </label><input id="senha" type="password" name="senha" required="">
					<input type="submit" name="enviar">
				</fieldset>	
			</form>
		</div>
	</div>
	<div>
		<?php 
			if (isset($_SESSION['loginErro'])) {
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}
		?>	
	</div>
</body>
</html>