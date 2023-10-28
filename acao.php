
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("db.php");
    try {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $nascimento = $_POST['nascimento'];
        $sobreVoce = $_POST['sobreVoce'];

        $stmt = $conn->prepare("INSERT INTO TB_TRABALHECONOSCO (NM_PESSOA, EMAIL_PESSOA, NU_TELEFONE, DT_NASCIMENTO, DESCRICAO_PESSOA) VALUES (:NM_PESSOA, :EMAIL_PESSOA, :NU_TELEFONE, :DT_NASCIMENTO, :DESCRICAO_PESSOA)");
        $stmt->bindParam(':NM_PESSOA', $nome);
        $stmt->bindParam(':EMAIL_PESSOA', $email);
        $stmt->bindParam(':NU_TELEFONE', $tel);
        $stmt->bindParam(':DT_NASCIMENTO', $nascimento);
        $stmt->bindParam(':DESCRICAO_PESSOA', $sobreVoce);
        $stmt->execute();

        header("Location: listar.php");
        exit();
    } catch (PDOException $e) {
        echo "Erro ao inserir registro: " . $e->getMessage();
    }
}
?>
