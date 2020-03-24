<?php 
session_start();

	$conn = mysqli_connect("localhost", "id8765345_ebc", "embrac123", "id8765345_formulario");

	if((isset($_POST['login'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['login']);
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);

		$sql = "SELECT * FROM cadastrado WHERE login = '$usuario' AND senha = '$senha' ";
		$result = mysqli_query($conn, $sql);
		$resultado = mysqli_fetch_assoc($result);

		if (empty($resultado)){
			$_SESSION['loginErro'] = "Usuario ou senha invalido";
			header("Location: Login.php");
		}elseif (!empty($resultado)) {
			header("Location: adminpage.php");
		}else {
			header("Location: Login.php");
		}
	}
	else{
		$_SESSION['loginErro'] = "Usuario ou senha invalido";
		header("Location: Login.php");
	}


/*
session_start();
define('HOST', 'localhost');
define('USER', 'id8765345_ebc');
define('PASS', 'embrac123');
define('BASE', 'id8765345_formulario');

$conexao = 'mysql:host='.HOST.';dbname='.BASE;

try{
	$conecta = new PDO($conexao, USER, PASS);
	$conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOExeption $erro){
	echo "Erro ao se conectar ao database   Erro: ".$erro-getMessage;
}

$Login = $_POST['login'];
$Senha = $_POST['senha'];

$sql = $conecta->prepare("SELECT * FROM cadastrado WHERE Login = '$Login' and Senha = '$Senha'");
$sql->execute();
$num = $sql->rowCount();

if($num > 0){
	$verifica = $conecta->query("SELECT * FROM cadastrado");
	while ($linha = $verifica->fetch(PDO::FETCH_ASSOC)) {
		if($linha['Login'] == $Login){
			$nivel = $linha['nivel'];
			$_SESSION['logado'] = true;
			switch ($nivel) {
				case '0':					
							header("Location: adminpage.php");
					break;				
				case '1':
							header("Location: Login.php");					
					break;
				default: 			
							header("Location: adminpage.php");
					break;		
			}
		}
	}	
}*/

?>
