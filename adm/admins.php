<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("../db.php");
    try {
        /*$id = $_POST['id'];*/
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
       

        $stmt = $conn->prepare("INSERT INTO tb_adm (nm_adm, email_adm, senha_adm) VALUES(:nm_adm, :email_adm, :senha_adm )");
       /* $stmt->bindParam(':id_adm', $id);*/
        $stmt->bindParam(':nm_adm', $nome);
        $stmt->bindParam(':email_adm', $email);
        $stmt->bindParam(':senha_adm', $senha);
    
        $stmt->execute();

        header("Location: index.php?pagina=admins");
    } catch (PDOException $e) {
        echo "Erro ao cadastrar adm: " . $e->getMessage();
    }
}
?>
<section class="main">
    <div class="title">
        <h3>Gerenciar <span>administradores</span></h3>
    </div>
    <div class="centro">
        <form action="admins.php" method="POST">
    
            <div class="todosInputs">
                <div class="inputBox">
                    <label for="nome">Nome:</label>
                    <input id="nome" type="text" name="nome" placeholder="Nome de usuario" required="required">
                </div>
                <div class="inputBox">
                    <label for="email">E-mail:</label>
                    <input id="email" type="email" name="email" placeholder="email" required="required">
                </div>
                <div class="inputBox">
                    <label for="nome">Senha:</label>
                    <input id="senha" type="password" name="senha" placeholder="Senha" required="required">
                </div>
                
                <div class="botaoEnviar">
                    <input type="submit" value="Enviar">
                </div>
            </div>
    
        </form>
    </div>
</section>