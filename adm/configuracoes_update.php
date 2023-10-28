<?php
session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("../db.php");
    try {
        $titulo = $_POST['titulo'];
        $desc = $_POST['desc'];
        $twitter = $_POST['twitter'] ?? '';
        $facebook = $_POST['facebook'] ?? '';
        $instagram = $_POST['instagram'] ?? '';
        $whatsapp = $_POST['whatsapp'] ?? '';
        $adm = $_SESSION['id_adm'];

        $stmt = $conn->prepare("UPDATE tb_config_index SET title_index = :title_index, link_twitter = :link_twitter, link_facebook = :link_facebook, link_instagram = :link_instagram, link_whatsapp = :link_whatsapp, descricao_index = :descricao_index, id_adm = :id_adm");
        $stmt->bindParam(':title_index', $titulo);
        $stmt->bindParam(':link_twitter', $twitter);
        $stmt->bindParam(':link_facebook', $facebook);
        $stmt->bindParam(':link_instagram', $instagram);
        $stmt->bindParam(':link_whatsapp', $whatsapp);
        $stmt->bindParam(':descricao_index', $desc);
        $stmt->bindParam(':id_adm', $adm);
        $stmt->execute();

        header("Location: index.php?pagina=configuracoes");
    } catch (PDOException $e) {
        echo "Erro ao atualizar registro: " . $e->getMessage();
    }
}
?>