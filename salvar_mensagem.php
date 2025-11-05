<?php

$conn = new mysqli("localhost", "root", "", "site_db");


if ($conn->connect_error) {
    die("Erro ao conectar: " . $conn->connect_error);
}


$email = $_POST['email'];
$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];


$sql = "INSERT INTO mensagens (email, nome, mensagem) VALUES ('$email', '$nome', '$mensagem')";

if ($conn->query($sql) === TRUE) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro ao enviar: " . $conn->error;
}

$conn->close();
?>
