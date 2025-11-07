<?php
require_once "config.inc2.php";
$id = $_REQUEST['id'];
$sql = "SELECT * FROM contatos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

while ($contato = mysqli_fetch_array($resultado)){
    $id = $contato['id'];
    $nome = $contato['nome'];
    $email = $contato['email'];
    $mensagem = $contato['mensagem'];
}
?>

<form action="?pg=altera_contato" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$nome?>">
    <br>
    <label>Email:</label>
    <input type="email" name="email" value="<?=$email?>">
    <br>
    <label>Mensagem:</label>
    <textarea name="mensagem"><?=$mensagem?></textarea>
    <br>
    <input type="submit" value="Salvar Alterações">
</form>
