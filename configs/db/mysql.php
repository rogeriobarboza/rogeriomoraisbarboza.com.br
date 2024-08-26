<?php

    $db_type = 'mysql';
    $db = '';
    $host = 'localhost';
    $user = 'root';
    $passwd = '';
    // $table = 'cesta_basica';
    // $colluns = 'id, categoria, quant, itens, preco, subtotal';

    // Estrutura de conexão
    try {
        $connect = new PDO("$db_type:dbname=$db;host=$host","$user",$passwd);
        //echo "Conexão realizada com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao conectar com banco de dados: ".$e->getMessage();
    }



?>