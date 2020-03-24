<?php

// A baixo insere em "embrac" (as colunas) de determinado valor (das variaveis)

$inserir = "INSERT INTO embrac(nome, cargo, pergunta1, pergunta2, pergunta3, pergunta4, pergunta5, pergunta6, pergunta7, pergunta8, pergunta9, pergunta10, pergunta11, pergunta12, pergunta13, pergunta14, pergunta15)
    VALUES ('$nome', '$cargo', '$pergunta1', '$pergunta2', '$pergunta3', '$pergunta4', '$pergunta5', '$pergunta6', '$pergunta7', '$pergunta8', '$pergunta9', '$pergunta10', '$pergunta11', '$pergunta12', '$pergunta13', '$pergunta14', '$pergunta15')";
    // use exec() because no results are returned
    $conn->exec($inserir);

?>
