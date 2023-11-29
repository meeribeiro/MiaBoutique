<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("db.php");
    try {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
       

        $stmt = $conn->prepare("INSERT INTO tb_usuario (email_usuario, senha_usuario) VALUES(:email_usuario, :senha_usuario )");
        $stmt->bindParam(':email_usuario', $email);
        $stmt->bindParam(':senha_usuario', $senha);
    
        $stmt->execute();

        header("Location: index.php");
    } catch (PDOException $e) {
        echo "Erro ao cadastrar usuario: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/estiloLogin.css">
    <title>Login Usuario</title>
    </head>
    <body>

    <div class="container" id="container">
        <div class="form-container sign-in">
        <form action="cadastro_usuario.php" method="POST">
        <h1>Cadastro</h1>  
                <span>use seu e-mail e senha</span>
                <input id="email" type="email" name="email" placeholder="E-mail de usuario" required="required">
                <input id="senha" type="password" name="senha" placeholder="Senha de usuario" required="required">
                <a href="loginUsuario.php">Já tem conta? Faça seu login. </a>
                <button>cadastrar</button>
            </form>

        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>Olá, bem vindo(a)!</h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

