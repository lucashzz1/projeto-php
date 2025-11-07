<p>
    <a href="?pg=form_contato">Cadastrar nova mensagem</a>
</p>

<h2>Lista de Contatos</h2>
<?php
require_once "config.inc2.php";

$sql = "SELECT * FROM contatos";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while($dados = mysqli_fetch_array($resultado)) {
        echo "<br>===============<br>";
        echo "ID: $dados[id] | ";
        echo "Nome: $dados[nome] | ";
        echo "Email: $dados[email] | ";
        echo "Mensagem: $dados[mensagem]";
        echo " | <a href='?pg=form_contato_alterar&id=$dados[id]'>Alterar</a>";
        echo " | <a href='?pg=delete_contato&id=$dados[id]'>Excluir</a>";
        echo "<br>=============<br>";
    }
} else {
    echo "<br><h2>Nenhum contato encontrado!</h2><br>";
}
?>
