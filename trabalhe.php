<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Trabalhe Conosco</title>
    <link rel="icon" type="imagem/png" href="imagens/MiaBoutique_logo.png" width="900" height="1000" />
    <link href="css/estilo.css" rel="stylesheet" />
    <link href="css/estiloTrabalhe.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta charset="utf-8">
</head>

<body>
<header>
    <div class="centro">
        <h2>Mia<span>Boutique</span></h2>
        <nav class="menu">
            <a class="link" href="index.php">Home</a>
            <a class="link" href="info.html">Informações</a>
            <a class="link" href="produtos.html">Produtos</a>
            <a class="link" href="trabalhe.php">Trabalhe conosco</a>
        </nav>
    </div>
</header>
<div class="centro" id="centroTrabalhe">
    <form action="acao.php" method="POST">
        <div class="form-header">
            <div class="titulo">
                <h1>Trabalhe conosco</h1>
            </div>
        </div>

        <div class="todosInputs">
            <div class="inputBox">
                <label for="nome">Nome:</label>
                <input id="nome" type="text" name="nome" placeholder="Digite seu nome" required="required"
                       onkeyup="maiuscula(this)">
            </div>

            <div class="inputBox">
                <label for="email">Email:</label>
                <input id="email" type="email" name="email" placeholder="Digite seu email" required="required"
                       onkeyup="maiuscula(this)">
            </div>

            <div class="inputBox">
                <label for="tel">Telefone:</label>
                <input id="tel" type="tel" name="tel" placeholder="(xx) xxxx-xxxxx" required="required">
            </div>

            <div class="inputBox">
                <label for="nascimento">Data de nascimento:</label>
                <input id="nascimento" type="date" name="nascimento" required="required">
            </div>


            <!---
            <div class="inputBox">
                <label for="foto">Envie sua foto:</label>
                <input id="foto" type="file" name="foto">
            </div>
        -->
            <div class="inputBox">
                <label for="sobreVoce">Fale sobre você:</label>
                <textarea id="sobreVoce" name="sobreVoce" rows="5" cols="33"
                          onblur="descricaoTextArea()"></textarea>
            </div>
            <div class="inputBox">


        
               <!--<label id="tituloGenero" for="genero">Gênero:</label>
                <div class="inputGenero">
                    <input type="radio" id="feminino" name="genero" value="Feminino">
                    <label for="feminino">Feminino</label><br>
                    <input type="radio" id="masculino" name="genero" value="Masculino">
                    <label for="masculino">Masculino</label>
                </div>
        -->
        </div>

        <div class="botaoEnviar">
            <input type="submit" value="Enviar">
        </div>
    </form>
</div>

</body>
</html>
