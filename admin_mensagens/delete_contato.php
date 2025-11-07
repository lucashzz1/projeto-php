<?php
require_once "config.inc2.php";

$id = $_GET['id'];

$sql = "DELETE FROM contatos WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);

if($resultado){
    echo "<h2>Contato excluído com sucesso!</h2>";
    echo "<a href='?pg=admin_contato'>Voltar</a>";
}else{
    echo "<h2>Erro ao excluir o contato!</h2>";
    echo "<a href='?pg=admin_contato'>Voltar</a>";
}
?>
