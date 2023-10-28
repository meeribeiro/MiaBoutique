<?php
require_once('db.php');


if($_SERVER['REQUEST_METHOD'] == "POST"){
    session_start();
    $email = $_POST["email"];
    $senha = $_POST["password"];

    $sql = "SELECT * FROM tb_adm WHERE email_adm = :email AND senha_adm = :senha";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['id_adm'] = $user['id_adm'];
        $_SESSION['autenticado'] = true;
        header("Location: adm/index.php");
    } else {
        // Usuário ou senha incorretos, redirecione de volta para a página de login com uma mensagem de erro
        header("Location: login.php?erro=1");
    }
}

?>