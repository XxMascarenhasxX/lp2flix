<?php
    session_start();
    require_once "dbcontroller.php";
    require_once "media.php";
    $banco = new DBController;
    $_SESSION['banco'] = $banco;
    $login = $_SESSION['login'];
?>

<html>
    <head>
        <title>LP2FLIX Remover Titulo</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/stylef.css">
        <body>
            <div class="loginbox">
                <img src="./assets/img/avatar.png" class="avatar">
                <h1>Remover Filme</h1>
                <form action="validation_rem.php" method="post">
                    <p>Nome do filme</p>
                    <input type="text" name="nomef" placeholder="Digite o nome" required>
                    <input type="submit" name="" value="Remover filme">
                    <a href="controlpanel.php">Adicionar algum filme</a><br>
                    <a href="login.php">Voltar para a pagina de Login</a><br>
                </form>
            </div>
        </body>
    </head>
</html>