<?php
include("conexaopdo.php"); // Conecta á conexao PDO ao database
///////////////////////////////////////////////////////////////////////////////////////////////////
$nome = ($_POST["nome"]);	 // Nome
$cargo = ($_POST["cargo"]) ; // Cargo  
///////////////////////////////////////////////////////////////////////////////////////////////////
$pergunta1 = filter_input(INPUT_POST, 'p1', FILTER_SANITIZE_STRING);	         //Pergunta 01
$pergunta2 = filter_input(INPUT_POST, 'p2', FILTER_SANITIZE_STRING);			 //Pergunta 02
$pergunta3 = filter_input(INPUT_POST, 'p3', FILTER_SANITIZE_STRING);			 //Pergunta 03
$pergunta4 = filter_input(INPUT_POST, 'p4', FILTER_SANITIZE_STRING);           	 //Pergunta 04
$pergunta5 = filter_input(INPUT_POST, 'p5', FILTER_SANITIZE_STRING);			 //Pergunta 05
$pergunta6 = filter_input(INPUT_POST, 'p6', FILTER_SANITIZE_STRING);			 //Pergunta 06
$pergunta7 = filter_input(INPUT_POST, 'p7', FILTER_SANITIZE_STRING);			 //Pergunta 07
$pergunta8 = filter_input(INPUT_POST, 'p8', FILTER_SANITIZE_STRING);			 //Pergunta 08
$pergunta9 = filter_input(INPUT_POST, 'p9', FILTER_SANITIZE_STRING);			 //Pergunta 09
$pergunta10 = filter_input(INPUT_POST, 'p10', FILTER_SANITIZE_STRING);			 //Pergunta 10
$pergunta11 = filter_input(INPUT_POST, 'p11', FILTER_SANITIZE_STRING);			 //Pergunta 11
$pergunta12 = filter_input(INPUT_POST, 'p12', FILTER_SANITIZE_STRING);			 //Pergunta 11
$pergunta13 = filter_input(INPUT_POST, 'p13', FILTER_SANITIZE_STRING);			 //Pergunta 11
$pergunta14 = filter_input(INPUT_POST, 'p14', FILTER_SANITIZE_STRING);			 //Pergunta 11
$pergunta15 = filter_input(INPUT_POST, 'p15', FILTER_SANITIZE_STRING);			 //Pergunta 11
///////////// Nome ////////////////////////////////////////////////////////////////////////////////
if ($nome == ""){
	$nome = "Anonimo"; 
}
else{
	$nome = $nome;
}
///////////// Cargo //////////////////////////////////////////////////////////////////////////////
if ($cargo == ""){
	$cargo = "Cargo anonimo"; 
}
else{
	$cargo = $cargo;
}
//////////////////////////////////////////////////////////////////////////////////////////////////
if ($pergunta15 == ""){
	$pergunta15 = "Não respondeu."; 
}
else{
	$pergunta15 = $pergunta15;
}
///////////////////////////////////////////////////////////////////////////////////////////////////

include_once("insert.php"); // Conecta e insere na table do database
/*
//////////////////////////////////////////////////
// IMPRIMIR AS INFORMAÇÕES RECEBIDAS EM TABELA ///
// IMPRIMIR UMA TABELA DE 2 COLUNAS E 24 LINHAS //
// FONTAMATAÇÃO = FONT-SIZE - 15PT ///////////////
///////////////// FONT-FAMILY - HELVETICA ////////
///////////////// TEXT-ALIGN - CENTER ////////////
///////////////// VERTICAL-ALIGN - MIDDLE ////////
//////////////////////////////////////////////////
echo "<p style = 'font-family: helvetica; font-size: 20pt; padding-left: 10px;'><b>Seus dados foram enviados com Sucesso!!!</b><p>";
echo "
		<table style = ''
			   width='400' 
			   border='3' 
			   cellspacing='2' 
			   cellpadding='0'
			   >
		
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Nome:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$nome</b></td>
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Cargo:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$cargo</b></td>
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>pergunta 1:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$pergunta1</b></td>
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Pergunta 2:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$pergunta2</b></td>			
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Pergunta 3:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$pergunta3</b></td>			
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Pergunta 4:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$pergunta4</b></td>			
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Pergunta 5:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$pergunta5</b></td>			
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Pergunta 6:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$pergunta6</b></td>			
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Pergunta 7:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$pergunta7</b></td>			
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Pergunta 8:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$pergunta8</b></td>			
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Pergunta 9:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$pergunta9</b></td>			
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Pergunta 10:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$pergunta10</b></t>			
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Pergunta 11:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$pergunta11</b></td>
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Pergunta 12:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$pergunta12</b></td>
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Pergunta 13:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$pergunta13</b></td>
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Pergunta 14:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$pergunta14</b></td>
		</tr>
		<tr>
			<td width = '200' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>Pergunta 15:</b><td>
			<td width = '300' style = 'text-align: center; vertical-align: middle; font-family: helvetica; font-size: 15pt;'><b>$pergunta15</b></td>
		</tr>
</table>
";
*/
header('Location: index.php');
?>
