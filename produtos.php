
<?php
require_once("db.php");

$query = "SELECT * FROM tb_produto WHERE fl_produto_ativo = true";

$stmt = $conn->prepare($query);
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Produtos </title>
        <link rel="icon" type="imagem/png" href="imagens/MiaBoutique_logo.png" width="900" height="1000" />
        <link href="css/estiloProdutos.css" rel="stylesheet" />
        <link href="css/estilo.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta charset="utf-8">
    </head>
<body>
    <header><!--menu no topo da pagina-->
        <div class="centro">
           <h2>Mia<span>Boutique</span></h2>
            <nav class="menu">
                <a class="link" href="index.php">Home</a>
                <a class="link" href="info.html">Informações</a>
                <a class="link" href="produtos.php">Produtos</a>
                <a class="link" href="trabalhe.php">Trabalhe conosco</a>
            </nav>
        </div>
    </header>
    <div class="centro" id="centroProduto">
    
        <?php
        $temProduto = false;

        
        
        while ($registro = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $nomeProduto = $registro['nm_produto'];
            $foto = $registro['img_produto'];
            $id = $registro['id_produto'];
        
            echo " <a href='descproduto.php?produto_id=$id'>
            <div class='card'>
                <img id='$id' src='$foto'  onclick='esgotado()'>
                <p> $nomeProduto </p>
            </div> 
        </a>";

            $temProduto = true;
        }

        if(!$temProduto){
            echo "Nenhum produto encontrado!";
        }
        ?>
    </div><!--centroProduto-->
    <div class="footer-bottom">
        <div class="box">
          <a id="nomes" onmouseover="MudarCor()" onmouseout="CorNormal()"> &copy; | Site criado por Melissa Ribeiro</a>
        </div>
      </div>
</body>
</html>