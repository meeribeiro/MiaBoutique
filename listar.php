<!DOCTYPE html>
<html>
<head>
    <title>Lista de Registros</title>
</head>
<body>
    <h2>Lista de Registros</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Data de Nascimento</th>
            <th>Sobre Você</th>
        </tr>
        <?php
        require_once("db.php");
        try {
            $query = "SELECT NM_PESSOA, EMAIL_PESSOA, NU_TELEFONE, DT_NASCIMENTO, DESCRICAO_PESSOA FROM TB_TRABALHECONOSCO";
            $stmt = $conn->query($query);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['nm_pessoa'] . "</td>";
                echo "<td>" . $row['email_pessoa'] . "</td>";
                echo "<td>" . $row['nu_telefone'] . "</td>";
                echo "<td>" . $row['dt_nascimento'] . "</td>";
                echo "<td>" . $row['descricao_pessoa'] . "</td>";
                echo "</tr>";
            }
        } catch (PDOException $e) {
            echo "erro ao listar: " . $e->getMessage();
        }
        ?>
    </table>
</body>
</html>

