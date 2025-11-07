<?php
require_once "config.inc2.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$sql = "UPDATE contatos SET
        nome = '$nome',
        email = '$email',
        mensagem = '$mensagem'
        WHERE id = '$id'";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
    echo "Contato alterado com sucesso!";
    echo "<a href='?pg=admin_contato'>Voltar</a>";
}else{
    echo "Erro na alteração.";
    echo "<a href='?pg=admin_contato'>Voltar</a>";
}
?>
