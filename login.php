<?php
    session_start();

    if(isset($_SESSION['identity'])){
        header('Location: index.php');
        exit;
    }
$submitted = false;
if($_SERVER['REQUEST_METHOD']=='POST'){
    $submitted = true;

    $email = $_POST['email'];
    $password = $_POST['password'];

    $authenticated = false;
        if($email=='admin@example.com' && $password=='Secur1ty'){
            $authenticated = true;

            $_SESSION['identity'] = $email;

            header('Location: index.php');
            exit;
        }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Entrar</h1>
    <?php if($submitted && !$authenticated): ?>
        <div class="alert">
            Credenciais invalidas.
        </div>
        <?php endif; ?>
        <form name="Login-form" action="/login.php" method="POST">
            <label for="email">E-mail</label>
            <input type="text" name="email">
            <br>
            <label for="password">Senha</label>
            <input type="password" name="password">
            <br>
            <input type="submit" name="submit" value="Logar">
        </form>
</body>
</html>