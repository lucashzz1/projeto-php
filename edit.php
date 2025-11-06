<?php
$conn = new mysqli("localhost", "root", "", "site_db");
if ($conn->connect_error) die("Erro: " . $conn->connect_error);

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $conn->prepare("SELECT mensagem FROM mensagens WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($mensagem);
    $stmt->fetch();
    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $nova_mensagem = $_POST["mensagem"];

    $stmt = $conn->prepare("UPDATE mensagens SET mensagem = ? WHERE id = ?");
    $stmt->bind_param("si", $nova_mensagem, $id);

    if ($stmt->execute()) {
        echo "<p>Mensagem atualizada com sucesso!</p>";
        echo "<a href='deletar_mensagens.php'>Voltar</a>";
    } else {
        echo "<p>Erro ao atualizar!</p>";
    }

    $stmt->close();
    $conn->close();
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Editar Mensagem</title></head>
<body>
<h2>Editar Mensagem</h2>
<form method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    <textarea name="mensagem" rows="4" cols="50"><?= htmlspecialchars($mensagem ?? '') ?></textarea><br><br>
    <button type="submit">Atualizar</button>
</form>
</body>
</html>


