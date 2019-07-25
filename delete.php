<?php
    session_start();
    require_once "dbcontroller.php";
    $banco = new DBController;
    $_SESSION['banco'] = $banco;
    $login = $_SESSION['login'];

?>

<html>
    <head>
        <title>LP2FLIX Apagar Conta</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <body>
            <div class="loginbox">
                <img src="./assets/img/avatar.png" class="avatar">
                <h1>Tem certeza que deseja apagar sua conta?</h1>
                <form action="validation_del.php" method="post">
                    <p>Senha</p>
                    <input type="text" name="senha" placeholder="Digite a senha para confirmar..." required>
                    <input type="submit" name="" value="Apagar Conta">
                    <a href="index.php">Voltar para o LP2FLIX</a>
                </form>
            </div>
        </body>
    </head>
</html>