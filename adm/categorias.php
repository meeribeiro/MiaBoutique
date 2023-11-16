<?php
require_once("../db.php");

$query = "SELECT * FROM tb_categoria ORDER BY id_categoria";

$stmt = $conn->prepare($query);
$stmt->execute();

?>



<section class="main">
    <div class="title">
        <h3>Gerenciar <span>categorias</span></h3>
    </div>
    <div class="centro">
        <form action="categorias_create.php" method="POST">
    
            <div class="todosInputs">
                <div class="inputBox">
                    <label for="nome">Nome:</label>
                    <input id="nome" type="text" name="nome" placeholder="Nome categoria" required="required">
                </div>
                
                <div class="botaoEnviar">
                    <input type="submit" value="Enviar">
                </div>
            </div>
        </form>
    </div>

    <?php

    if(isset($_GET["erro"])&& $_GET["erro"] = 1){
        echo"<p class='erro'>Impossivel excluir, a categoria ainda está vinculada a um produto, remova o produto primeiro</p>";
    }

    ?>
    
    <div class="grid-container">
        <div class="grid-item grid-destaque">ID</div>
        <div class="grid-item grid-destaque">CATEGORIA</div>
        <div class="grid-item grid-destaque">AÇÃO</div>
        <div class="grid-item grid-destaque">AÇÃO</div>

        <?php 
        while ($registro = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $idCategoria = $registro['id_categoria'];
        $nomeCategoria = $registro['nm_categoria'];
        echo "
                <div class='grid-item'>$idCategoria</div>
                <div class='grid-item'>$nomeCategoria</div>
                <div class='grid-item'><a href='index.php?pagina=categorias_update&id=$idCategoria'>editar</a></div>
                <div class='grid-item'><a href='categorias_delete.php?id=$idCategoria'>excluir</a></div>
            ";
         }
        ?>

 
    </div>

</section>
