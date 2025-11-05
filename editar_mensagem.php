<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}


if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
    die("ID inválido.");
}

$id = intval($_POST['id']);
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
$mensagem = isset($_POST['mensagem']) ? trim($_POST['mensagem']) : '';


if ($email === '' || $nome === '' || $mensagem === '') {
    die("Preencha todos os campos.");
}


$stmt = $conn->prepare("UPDATE mensagens SET email = ?, nome = ?, mensagem = ? WHERE id = ?");
if ($stmt === false) {
    die("Erro no prepare: " . $conn->error);
}

$stmt->bind_param("sssi", $email, $nome, $mensagem, $id);

if ($stmt->execute()) {
  
    header("Location: listar_mensagens.php?msg=atualizado");
    exit;
} else {
    echo "Erro ao atualizar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
