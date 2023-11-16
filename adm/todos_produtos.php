<?php
require_once("../db.php");
$query = "SELECT * FROM tb_produto ORDER BY id_produto";
$stmt = $conn->prepare($query);
$stmt->execute();
?>

<section class="main">
    <div class="title">
        <h3>Todos <span>Produtos</span></h3>
    </div>
    <div class="centro">
    <div class="grid-container-produto">
        <div class="grid-item grid-destaque">ID</div>
        <div class="grid-item grid-destaque">PRODUTO</div>
        <div class="grid-item grid-destaque">ATIVO</div>
        <div class="grid-item grid-destaque">AÇÃO</div>
        <div class="grid-item grid-destaque">AÇÃO</div>
        <?php 
        while ($registro = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $idProduto = $registro['id_produto'];
        $nomeProduto = $registro['nm_produto'];
        $statusTexto = $registro['fl_produto_ativo'] == 1 ? 'sim' : 'nao';
        echo "
                <div class='grid-item'>$idProduto</div>
                <div class='grid-item'>$nomeProduto</div>
                <div class='grid-item'>$statusTexto</div>
                <div class='grid-item'><a href='index.php?pagina=produtos_update&id=$idProduto'>ativar/desativar</a></div>
                <div class='grid-item'><a href='produtos_delete.php?id=$idProduto'>excluir</a></div>
            ";
         }
        ?>
    </div>
</section>