<?php
    session_start();
    require_once "dbcontroller.php";
    $banco = new DBController;
    $_SESSION['banco'] = $banco;
?>

<html>
    <head>
        <title>LP2FLIX Registro</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <body>
            <div class="loginbox">
                <img src="./assets/img/avatar.png" class="avatar">
                <h1>Registre-se</h1>
                <form action="validation_reg.php" method="post">
                    <p>Login</p>
                    <input type="text" name="login" placeholder="Digite um Login" required>
                    <p>Senha</p>
                    <input type="password" name="senha" placeholder="Digite uma Senha" required>
                    <input type="submit" name="" value="Registrar">
                    <a href="login.php">Voltar para a tela de Login</a><br>
                </form>
            </div>
        </body>
    </head>
</html>