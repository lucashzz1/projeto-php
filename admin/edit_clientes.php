<?php

require_once "config.inc.php";

$id = $_GET['id']; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    
    $sql = "UPDATE clientes SET nome = '$nome', email = '$email', telefone = '$telefone' WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    
    if ($resultado) {
        echo "<h2>Cliente atualizado com sucesso!</h2>";
        echo "<a href='?pg=admin_clientes'>Voltar</a>";
    } else {
        echo "<h2>Erro ao atualizar o cliente!</h2>";
        echo "<a href='?pg=admin_clientes'>Voltar</a>";
    }

} else {

    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);
    $cliente = mysqli_fetch_assoc($resultado);
?>

<h2>Atualizar Cliente</h2>

<form method="POST">
    Nome: <input type="text" name="nome" value="<?= $cliente['nome'] ?>"><br><br>
    Email: <input type="text" name="email" value="<?= $cliente['email'] ?>"><br><br>
    Telefone: <input type="text" name="telefone" value="<?= $cliente['telefone'] ?>"><br><br>
    <input type="submit" value="Atualizar">
</form>

<?php
}
?>
