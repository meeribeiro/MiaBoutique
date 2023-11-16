
<?php
    require_once("../db.php");
    try {
        $id = $_GET['id'];

        $stmt = $conn->prepare("DELETE FROM tb_categoria WHERE id_categoria = :id_categoria");
        $stmt->bindParam(':id_categoria', $id, PDO::PARAM_INT);
        $stmt->execute();

        header("Location: index.php?pagina=categorias");
        exit();
    } catch (PDOException $e) {

        if(strpos($e->getMessage(),"Foreign key violation") !== false){
            header("Location: index.php?pagina=categorias&erro=1");
        }else{

            echo "Erro ao deletar registro: " . $e->getMessage();
        }

    }
?>