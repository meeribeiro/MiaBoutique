
<?php
require_once("db.php");
$id = $_GET["produto_id"];

$query = "SELECT * FROM tb_produto WHERE id_produto = $id";

$queryCategoria = "SELECT c.nm_categoria FROM tb_categoria c INNER JOIN tb_categoriaproduto cp ON c.id_categoria = cp.id_categoria WHERE cp.id_produto = $id";

$stmt = $conn->prepare($query);
$stmt->execute();

$stmtCategoria = $conn->prepare($queryCategoria);
$stmtCategoria->execute();

$registro = $stmt->fetch(PDO::FETCH_ASSOC);

if ($registro) {

  // O primeiro registro foi encontrado, você pode acessar os valores das colunas
  $nome = $registro['nm_produto'];
  $preco = $registro['preco_produto'];
  $descricao = $registro['descricao_produto'];
  $img = $registro['img_produto'];
} else {
    header("Location: produtos.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Descrição do Produto </title>
        <link rel="icon" type="imagem/png" href="imagens/MiaBoutique_logo.png" width="900" height="1000" />
        <link href="css/estiloDescProdutos.css" rel="stylesheet" />
        <link href="css/estilo.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta charset="utf-8">
    </head>
<body>
    <header>
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
    <div class="centro">
        <div class="fotosProduto">
            <figure>
                <img id="destaque" src="<?php echo $img ?>"/>
            </figure>
            <div id="infoProduto">
                <h1> <?php echo $nome ?> </h1>
                <h3> <span>por</span> R$ <?php echo $preco ?> </h3>
                <span> em até 3x sem juros</span>
                <hr>
                <ul>
                    <p id="descricao"> Descrição do produto </p>
                    <li> <span> Categoria:  <?php while ($categoria = $stmtCategoria->fetch(PDO::FETCH_ASSOC)) {
                                                $nomeCategoria = $categoria['nm_categoria'];
                                                echo "$nomeCategoria. ";
                                            }?></span> </li>
                    <li> <span> Descrição: <?php echo $descricao ?> </span> </li>
                </ul>
                <button onclick="alertaComprar()"> Comprar </button>
            </div><!--infoProduto-->
        </div><!--fotosProduto-->
    </div> <!-- centro -->
    <div class="footer-bottom">
        <div class="box">
          <a > &copy; | Site criado por Melissa Ribeiro</a>
        </div>
      </div>
</body>

</html>