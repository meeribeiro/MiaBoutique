<?php
require_once('db.php');


if($_SERVER['REQUEST_METHOD'] == "POST"){
    session_start();
    $email = $_POST["email"];
    $senha = $_POST["password"];

    $sql = "SELECT * FROM tb_usuario WHERE email_usuario = :email AND senha_usuario = :senha";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['id_usuario'] = $user['id_usuario'];
        $_SESSION['autenticado'] = true;
        header("Location: index.php");
    } else {
        // Usuário ou senha incorretos, redirecione de volta para a página de login com uma mensagem de erro
        header("Location: login.php?erro=1");
    }
}

?>