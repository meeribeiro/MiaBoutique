<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/estiloLoginAdm.css">
    <title>Login ADM</title>
</head>
<body>
    <div class="container" id="container">
    
        <div class="form-container sign-in">
            <form method="post" action="processa_login.php">
                <h1>Login</h1>  
                <span>use seu e-mail e senha</span>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Senha">
                <?php
                if(isset($_GET['erro'])){
                    if($_GET['erro'] === '1'){
                        echo "<p class='erro'>Usuário ou senha incorretos</p>";
                    }
                }

                ?>
                <button>entrar</button>
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