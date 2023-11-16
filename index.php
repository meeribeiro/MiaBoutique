<?php
require_once("db.php");

$query = "SELECT * FROM tb_config_index LIMIT 1";

$stmt = $conn->prepare($query);
$stmt->execute();

$registro = $stmt->fetch(PDO::FETCH_ASSOC);


if ($registro) {
  // O primeiro registro foi encontrado, você pode acessar os valores das colunas
  $title = $registro['title_index'];
  $twitter = $registro['link_twitter'];
  $facebook = $registro['link_facebook'];
  $instagram = $registro['link_instagram'];
  $whatsapp = $registro['link_whatsapp'];
  $descricao = $registro['descricao_index'];
} else {
  echo "Erro: Nenhum registro encontrado na tabela.";
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title> Mia Boutique </title>
    <link rel="icon" type="imagem/png" href="imagens/MiaBoutique_logo.png" width="900" height="1000" />
    <link href="css/estiloIndex.css" rel="stylesheet" />
    <link href="css/estilo.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta charset="utf-8">
</head>
<body>
    <div class="circle"></div> <!--criando o circulo da pagina inicial-->

    <?php include('menu.php'); ?><!--include do arquivo do menu-->
    
    <section>

    <div class="content"> <!--Paragrafo da página-->
        <div class="text">
            <h1><?php echo $title ?></h1>
            <pre><?php echo $descricao ?></pre>
         <a href="produtos.html">COMPRAR</a> <!--Botão de comprar-->
        </div>
    </div>
    <ul class="icons"><!--icons das redes sociais-->
        <?php 
        if($facebook != ''){echo " <li><a href='$facebook'><img src='imagens/facebook.png' alt=''></a></li>";}  
        if($instagram != ''){echo " <li><a href='$instagram'><img src='imagens/instagram.png' alt=''></a></li>";}
        if($twitter != ''){echo " <li><a href='$twitter'><img src='imagens/twitter.png' alt=''></a></li>";}
        if($whatsapp != ''){echo " <li><a href='$whatsapp'><img src='imagens/whatsapp.png' alt=''></a></li>";}
        ?>
        
    </ul>
   
</section>
<div class="boxImg"><!--imagem em cima do circulo-->
    <img id="image" src="imagens/index.png">
</div>
</body>
</html>