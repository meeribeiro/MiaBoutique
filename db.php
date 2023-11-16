<?php
    $db_host = "200.19.1.18";
    $db_name = "melissarodrigues";
    $db_user = "melissarodrigues";
    $db_pass = "123456";


    try{
        $conn = new PDO("pgsql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("Erro na conexão com o banco de dados: ".$e->getMessage());
    }

?>