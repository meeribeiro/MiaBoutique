<?php
require_once("db.php");
$autenticado = false;
if (isset($_SESSION['autenticado'])) {
    $autenticado = true;
}
$queryMenu = "SELECT * FROM tb_config_index LIMIT 1";

$stmtMenu = $conn->prepare($queryMenu);
$stmtMenu->execute();

$registroMenu = $stmtMenu->fetch(PDO::FETCH_ASSOC);
if ($registroMenu) {
    $title = $registroMenu['title_index'];
}
?>


<header><!--menu no topo da pagina-->
        <div class="centro">
           <h2><?php echo $title ?></h2>
            <nav class="menu">
                <a class="link" href="index.php">Home</a>
                <a class="link" href="info.php">Informações</a>
                <a class="link" href="produtos.php">Produtos</a>
                <a class="link" href="trabalhe.php">Trabalhe conosco</a>
                <?php if ($autenticado == true) {?>
                    <a class="adm" href="adm/logout.php">Sair</a>
                <?php }else{ ?>
                    <a class="adm" href="login.php">Login</a>
                <?php }?>
            </nav>
        </div>
</header>