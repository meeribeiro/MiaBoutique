<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/estiloLogin.css">
    <title>Login Usuario</title>
    
    <style>
.centro {
    display: flex;
    flex-wrap: wrap; /* deixa na mesma linha */
    max-width: 1280px; /* limita a largura */
    margin: 0 auto;
    padding: 0.2%;
}

header {
    height: 100px; /*tamanho - altura*/
    padding: 10px 0;
}

/*ESILIZANDO CLASS MENU*/
.menu {
    padding-top: 20px;
    padding-left:500px;
    width: 30%; 
    text-align: right;
}

.menu a {
    color: #222;
    text-decoration: none;
    font-weight: bold;
    margin: 10px 10px;
	position: relative;
}
    </style>
</head>
<body>
<header><!--menu no topo da pagina-->
        <div class="centro">
            <nav class="menu">
                <a class="link" href="login.php">Administração</a>
            </nav>
        </div>
</header>


    <div class="container" id="container">
        <div class="form-container sign-in">
            <form method="post" action="processa_login_usuario.php">
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
                <a href="cadastro_usuario.php">Ainda não tem conta? Faça sua conta </a>
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