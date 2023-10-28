<?php
    $db_host = "banco";
    $db_name = "seu_usuario";
    $db_user = "seu_usuario";
    $db_pass = "sua_senha";


    try{
        $conn = new PDO("pgsql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("Erro na conexão com o banco de dados: ".$e->getMessage());
    }

?>