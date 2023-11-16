<?php
    require_once("../db.php");
    $idProduto = $_GET['id'];

    $query = "UPDATE tb_produto SET fl_produto_ativo = NOT fl_produto_ativo WHERE id_produto = :id";
    $stmt = $conn->prepare($query);;
    $stmt->bindParam(':id', $idProduto, PDO::PARAM_INT);
    $stmt->execute();
    header("Location: index.php?pagina=todos_produtos");
?>