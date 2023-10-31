<?php
require_once("../db.php");

$query = "SELECT * FROM tb_categoria";

$stmt = $conn->prepare($query);
$stmt->execute();

?>


<section class="main">
    <div class="title">
        <h3>Adicionar Novo <span>Produto</span></h3>
    </div>
    <div class="centro">
        <form action="adicionarprodutos_add.php" method="POST" enctype="multipart/form-data">
    
            <div class="todosInputs">
                <div class="inputBox">
                    <label for="nome_produto">Nome:</label>
                    <input id="nome_produto" type="text" name="nome_produto" placeholder="Nome do produto" required="required" >
                </div>
    
                <div class="inputBox">
                    <label for="preco_produto">Preço:</label>
                    <input id="preco_produto" type="number" step="0.01" name="preco_produto" placeholder="Preço do produto" required="required" >
                </div>

                <div class="selectBox">
                   <div class="subTitle">Categorias:</div>
                   <div class="selectItems">
                       <?php 
                       while ($registro = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $idCategoria = $registro['id_categoria'];
                        $nomeCategoria = $registro['nm_categoria'];
                    
                        echo "<div><input type='checkbox' id='$nomeCategoria' name='categorias[]' value='$idCategoria' />
                                <label for='$nomeCategoria'>$nomeCategoria</label></div>";
                    }
                     ?>
                   </div>
                </div>
    
                <div class="inputBox">
                    <label for="foto">Envie a foto do produto:</label>
                    <input id="foto" type="file" name="foto">
                </div>

                <div class="inputBox">
                    <label for="descricao_produto">Descrição do Produto:</label>
                    <textarea id="descricao_produto" name="descricao_produto" rows="5" cols="33"></textarea>
                </div>
                
                <div class="botaoEnviar">
                    <input type="submit" value="Enviar">
                </div>
            </div>
    
        </form>
    </div>
</section>
