<?php
    echo "<h1>Painel Administrativo</h1>";
?>

<nav>
    <a href="index.php">Início</a>  
    <a href="?pg=admin_contato">Mensagens</a>
</nav>

<?php
    if(empty($_SERVER["QUERY_STRING"])){
        echo "<h3>Bem-vindo ao painel admin.</h3>";
    }elseif(isset($_GET['pg'])){
        $pg = $_GET['pg'];
        include_once "$pg.php";
    }else{
        echo "Página não encontrada";
    }
?>
