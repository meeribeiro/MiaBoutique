
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
        <script type="text/javascript" src="js/arq.js"></script>
        <meta charset="utf-8">
    </head>
<body>
    <script>

         /*MUDANDO A COR DOS NOMES QUANDO O MOUSE PASSA POR CIMA*/
         function MudarCor(){
            var nomes = document.getElementById("nomes");
            nomes.style.color = "#A0522D";
        }

        function CorNormal() {
            var nomes = document.getElementById("nomes");
            nomes.style.color = "black";
        }
        
    </script>


    <?php include('menu.php'); ?><!--include do arquivo do menu-->


    <div class="centro" id="centroProduto">
    
        <?php
        $temProduto = false;

        
        
        while ($registro = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $nomeProduto = $registro['nm_produto'];
            $foto = $registro['img_produto'];
            $id = $registro['id_produto'];
        
            echo " <a href='descproduto.php?produto_id=$id'>
            <div class='card'>
                <img id='$id' src='$foto'>
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