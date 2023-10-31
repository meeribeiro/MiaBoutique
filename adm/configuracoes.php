<?php
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    header("Location: ../login.php");
    exit;
}

require_once("../db.php");

$query = "SELECT tb_config_index.*, tb_adm.nm_adm
        FROM tb_config_index
        INNER JOIN tb_adm ON tb_config_index.id_adm = tb_adm.id_adm
        LIMIT 1";


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
  $nomeAdm = $registro['nm_adm'];
} else {
  echo "Erro: Nenhum registro encontrado na tabela.";
}
?>
<section class="main">
    <div class="title">
        <h3>Gerenciar <span>configurações</span></h3>
    </div>
    <div class="centro">
        <form action="configuracoes_update.php" method="POST">
    
            <div class="todosInputs">
                <div class="inputBox">
                    <label for="titulo">Titulo do Site:</label>
                    <input id="titulo" type="text" name="titulo" placeholder="Titulo" value="<?php echo $title ?>">
                </div>
    
                <div class="inputBox">
                    <label for="twitter">Link Twitter:</label>
                    <input id="twitter" type="text" name="twitter" placeholder="link twitter" value="<?php echo $twitter ?>">
                </div>

                <div class="inputBox">
                    <label for="facebook">Link Facebook:</label>
                    <input id="facebook" type="text" name="facebook" placeholder="link facebook" value="<?php echo $facebook ?>">
                </div>
                <div class="inputBox">
                    <label for="instagram">Link Instagram:</label>
                    <input id="instagram" type="text" name="instagram" placeholder="link instagram" value="<?php echo $instagram ?>">
                </div>
                <div class="inputBox">
                    <label for="whatsapp">Link Whatsapp:</label>
                    <input id="whatsapp" type="text" name="whatsapp" placeholder="link whatsapp" value="<?php echo $whatsapp ?>">
                </div>

                <div class="inputBox">
                    <label for="desc">Descrição do Site:</label>
                    <textarea id="desc" name="desc" rows="5" cols="33" ><?php echo $descricao ?></textarea>
                </div>

                <div class="inputBox">
                    <label for="adm">Ultimo Adm:</label>
                    <input id="adm" type="text" name="adm" placeholder="" disabled value="<?php echo $nomeAdm ?>">
                </div>
                
                <div class="botaoEnviar">
                    <input type="submit" value="Enviar">
                </div>
            </div>
    
        </form>
    </div>
</section>
