<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    require_once("../db.php");
    $pastaDestino = "../imagens/produtos/";
    $nomeOriginal = $_FILES['foto']['name'];
    $extensao = pathinfo($nomeOriginal, PATHINFO_EXTENSION);
    $novoNome = uniqid() . '.' . $extensao;
    $caminhoCompleto = $pastaDestino . $novoNome;
    $img = "imagens/produtos/" . $novoNome;

    $nome = $_POST['nome_produto'];
    $descricao = $_POST['descricao_produto'];
    $categoriasSelecionadas = $_POST['categorias'];
    $preco = $_POST['preco_produto'];
    $ativo = true;



    if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoCompleto)) {
        
        $stmt = $conn->prepare("INSERT INTO tb_produto (nm_produto, preco_produto, descricao_produto, img_produto, fl_produto_ativo, id_adm) VALUES (:nm_produto, :preco_produto, :descricao_produto, :img_produto, :fl_produto_ativo, :id_adm)");
        $stmt->bindParam(':nm_produto', $nome);
        $stmt->bindParam(':preco_produto', $preco);
        $stmt->bindParam(':descricao_produto', $descricao);
        $stmt->bindParam(':img_produto', $img);
        $stmt->bindParam(':fl_produto_ativo', $ativo);
        $stmt->bindParam(':id_adm', $_SESSION['id_adm']);
    
        $stmt->execute();
    
        $idProduto = $conn->lastInsertId();
    
    
        $sqlInserirAssociacoes = "INSERT INTO tb_categoriaproduto (id_produto, id_categoria) VALUES (:id_produto, :id_categoria)";
        $stmtAssociacoes = $conn->prepare($sqlInserirAssociacoes);
        
        foreach ($categoriasSelecionadas as $idCategoria) {
            $stmtAssociacoes->bindParam(':id_produto', $idProduto);
            $stmtAssociacoes->bindParam(':id_categoria', $idCategoria);
            $stmtAssociacoes->execute();
        }
    
        header("Location: index.php?pagina=adicionarprodutos");
        exit();


    } else {

        header("Location: index.php?pagina=adicionarprodutos&erro=1");
    }





    
}
?>
