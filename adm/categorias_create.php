
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("../db.php");
    try {
        $nome = $_POST['nome'];

        $stmt = $conn->prepare("INSERT INTO tb_categoria (nm_categoria) VALUES (:nm_categoria)");
        $stmt->bindParam(':nm_categoria', $nome);
        $stmt->execute();

        header("Location: index.php?pagina=categorias");
        exit();
    } catch (PDOException $e) {
        echo "Erro ao inserir registro: " . $e->getMessage();
    }
}
?>