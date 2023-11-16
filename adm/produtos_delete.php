
<?php
    require_once("../db.php");
    try {
        $id = $_GET['id'];

        $stmt = $conn->prepare("DELETE FROM tb_produto WHERE id_produto = :id_produto");
        $stmt->bindParam(':id_produto', $id, PDO::PARAM_INT);
        $stmt->execute();

        header("Location: index.php?pagina=todos_produtos");
        exit();
    } catch (PDOException $e) {
        echo "Erro ao deletar registro: " . $e->getMessage();
    }
?>