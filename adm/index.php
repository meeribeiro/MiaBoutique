<?php
session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    header("Location: ../login.php");
    exit;
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/estiloIndexAdm.css" />
    <link rel="stylesheet" href="css/estiloAdicionarProdutos.css">
    <title>Mia Boutique - ADM</title>
  </head>
  <body>
    <div class="container">
      <nav>
        <ul>
          <li>
            <a href="index.php?pagina=configuracoes"><span class="nav-item">CONFIGURAÇÕES</span></a>
          </li>
          <li>
            <a href="index.php?pagina=admins"><span class="nav-item">ADMS</span></a>
          </li>
          <li>
            <a href="index.php?pagina=todos_produtos"><span class="nav-item">PRODUTOS</span></a>
          </li>
          <li>
            <a href="index.php?pagina=produtos"><span class="nav-item">NOVO PRODUTO</span></a>
          </li>
          <li>
            <a href="index.php?pagina=categorias"><span class="nav-item">CATEGORIAS</span></a>
          </li>
          <li>
            <a href="logout.php"><span class="nav-item">SAIR</span></a>
          </li>
        </ul>
      </nav>

      <section class="main">
        <div class="main-top">
          <h2>Mia<span>Boutique</span> Administração</h2>

          <?php
          if(isset($_GET['pagina'])){
            $pagina = $_GET['pagina'];
            if(file_exists($pagina.'.php')){
              include($pagina.'.php');
            }else{
              include('pagina_inicial.php');
            }
          }else{
            include('pagina_inicial.php');
          }

          ?>
        </div>
      </section>
    </div>
  </body>
</html>
