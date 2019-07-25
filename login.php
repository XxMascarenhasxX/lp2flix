<?php
    session_start();
    $_SESSION = array();
    require_once "dbcontroller.php";
    $banco = new DBController;
    $_SESSION['banco'] = $banco;
?>

<html>
    <head>
        <title>LP2FLIX Login</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <body>
            <div class="loginbox">
                <img src="./assets/img/avatar.png" class="avatar">
                <h1>Acesse o LP2FLIX</h1>
                <form action="validation_log.php" method="post">
                    <p>Login</p>
                    <input type="text" name="login" placeholder="Digite o Login" required>
                    <p>Senha</p>
                    <input type="password" name="senha" placeholder="Digite a Senha" required>
                    <input type="submit" name="" value="Login">
                    <a href="registro.php">Não possui conta?</a>
                </form>
            </div>
        </body>
    </head>
</html>