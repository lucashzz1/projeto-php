<?php
require_once "config.inc2.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO contatos (nome, email, mensagem)
        VALUES ('$nome', '$email', '$mensagem')";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
    echo "<h2>Mensagem enviada com sucesso!</h2>";
    echo "<a href='../?pg=faleconosco'>Voltar</a>";
}else{
    echo "<h2>Erro ao enviar a mensagem.</h2>";
    echo "<a href='../?pg=faleconosco'>Tentar novamente</a>";
}
?>
