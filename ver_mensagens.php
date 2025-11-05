<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}


$sql = "SELECT * FROM mensagens";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mensagens Recebidas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Mensagens Recebidas</h2>

    <?php

    if ($result->num_rows > 0) {
        echo "<table class='table table-bordered table-striped mt-3'>";
        echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Mensagem</th></tr>";

  
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["mensagem"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Nenhuma mensagem encontrada.</p>";
    }

    $conn->close();
    ?>
</body>
</html>
