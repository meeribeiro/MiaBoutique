<?php
require_once("../db.php");

$query = "SELECT * FROM tb_categoria";

$stmt = $conn->prepare($query);
$stmt->execute();

?>



<section class="main">
    <div class="title">
        <h3>Gerenciar <span>categorias</span></h3>
    </div>
    <div class="centro">
        <form action="categorias_add.php" method="POST">
    
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
    <table class="tabela">
    <tr>
        <th>ID</th>
        <th>NOME</th>

     </tr>

     <?php 
     
     while ($registro = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $idCategoria = $registro['id_categoria'];
        $nomeCategoria = $registro['nm_categoria'];
    
        echo "<tr>
                <td>$idCategoria</td>
                <td>$nomeCategoria</td>
            </tr>";
    }
     ?>
    </table>
</section>
