<?php
require_once("../db.php");
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $idCategoria = $_POST['id_categoria'];
    $novoNome = $_POST['nome'];

    $stmt = $conn->prepare("UPDATE tb_categoria SET nm_categoria = :nm_categoria WHERE id_categoria = :id");
    $stmt->bindParam(':nm_categoria', $novoNome);
    $stmt->bindParam(':id', $idCategoria, PDO::PARAM_INT);
    $stmt->execute();
    header('Location: index.php?pagina=categorias');
}
$id = $_GET["id"];

$stmt = $conn->prepare("SELECT * FROM tb_categoria WHERE id_categoria = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$categoria = $stmt->fetch(PDO::FETCH_ASSOC);
?>



<section class="main">
    <div class="title">
        <h3>Gerenciar <span>categorias</span></h3>
    </div>
    <div class="centro">
        <form action="categorias_update.php" method="POST">
        <input type="hidden" name="id_categoria" value="<?= $categoria['id_categoria'] ?>">
            <div class="todosInputs">
                <div class="inputBox">
                    <label for="nome">Nome:</label>
                    <input id="nome" type="text" name="nome" placeholder="Nome categoria" value="<?= $categoria['nm_categoria'] ?>" required="required">
                </div>
                
                <div class="botaoEnviar">
                    <input type="submit" value="Atualizar">
                </div>
            </div>
        </form>
    </div>


 
    </div>

</section>
