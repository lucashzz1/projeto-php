<?php
$conn = new mysqli("localhost", "root", "", "site_db");
if ($conn->connect_error) die("Erro: " . $conn->connect_error);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $stmt = $conn->prepare("DELETE FROM mensagens WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

$result = $conn->query("SELECT * FROM mensagens ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Deletar Mensagens</title></head>
<body>
<h2>Mensagens</h2>
<table border="1" cellpadding="5">
<tr><th>ID</th><th>Mensagem</th><th>Ações</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row["id"] ?></td>
    <td><?= htmlspecialchars($row["mensagem"]) ?></td>
    <td>
        <form method="post" onsubmit="return confirm('Excluir esta mensagem?');">
            <input type="hidden" name="id" value="<?= $row["id"] ?>">
            <button type="submit">Excluir</button>
        </form>
    </td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>
<?php $conn->close(); ?>
