<?php

//  Criar Conexão

try {
    $conn = new PDO("mysql:host=localhost;dbname=id8765345_formulario", "id8765345_ebc", "embrac123",
      array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    /*  set the PDO error mode to exception / Servifor: local = Ip fisico; nome do database = formulario, "usuario", "senha"  e transforma para UTF8 */ 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} //  Imprime Conexão Bem Sucedida caso funcione
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
} //  Imprime Conexão Falhou!! :(

?>