<?php
    session_start();

    $identity = null;
    if(isset($_SESSION['identity'])){
        $identity = $_SESSION['identity'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <h1>Home</h1>
    <?php if($identity==null): ?>
        <a href="login.php">Entrar</a>
    <?php else: ?>
        <strong>Bem-vindo!, <?=$identity?></strong><a href="logout.php">Sair</a>
    <?php endif; ?>

    <p>Este é um site simples para demonstrar as vantagens de um framework PHP
            e desvantagens do PHP "puro".</p>
</body>
</html>