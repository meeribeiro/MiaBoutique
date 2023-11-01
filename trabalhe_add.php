<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    require_once("db.php");
    $pastaDestino = "imagens/curriculo/";
    $nomeOriginal = $_FILES['foto']['name'];
    $extensao = pathinfo($nomeOriginal, PATHINFO_EXTENSION);
    $novoNome = uniqid() . '.' . $extensao;
    $caminhoCompleto = $pastaDestino . $novoNome;
    $img = "imagens/curriculo/" . $novoNome;

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $nascimento = $_POST['nascimento'];
        $sobreVoce = $_POST['sobreVoce'];
        $genero =  $_POST['genero'];


    if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoCompleto)) {
        
        $stmt = $conn->prepare("INSERT INTO tb_trabalheconosco (nm_pessoa, email_pessoa, nu_telefone, dt_nascimento, descricao_pessoa, fl_sexo, foto_pessoa) VALUES(:nm_pessoa, :email_pessoa, :nu_telefone, :dt_nascimento, :descricao_pessoa, :fl_sexo, :foto_pessoa )");
        $stmt->bindParam(':nm_pessoa', $nome);
        $stmt->bindParam(':email_pessoa', $email);
        $stmt->bindParam(':nu_telefone', $tel);
        $stmt->bindParam(':dt_nascimento', $nascimento);
        $stmt->bindParam(':descricao_pessoa', $sobreVoce);
        $stmt->bindParam(':fl_sexo', $genero);
        $stmt->bindParam(':foto_pessoa', $img);

        $stmt->execute();
    
        header("Location: trabalhe.php");
        exit();
        
    } else {

        echo "Erro ao enviar curriculo : ";
    }  
}
?>
