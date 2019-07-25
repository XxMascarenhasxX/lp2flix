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
        <title>LP2FLIX Adicionar Titulo</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/stylef.css">
        <body>
            <div class="loginbox">
                <img src="./assets/img/avatar.png" class="avatar">
                <h1>Adicionar Filme</h1>
                <form action="validation_cont.php" method="post">
                    <p>Nome do filme</p>
                    <input type="text" name="nomef" placeholder="Digite o nome" required>
                    <p>Ano do filme</p>
                    <input type="text" name="anof" placeholder="Digite o ano" required>
                    <p>Categoria do filme</p>
                    <input type="text" name="catf" placeholder="Digite a categoria" required>
                    <p>Diretor do filme</p>
                    <input type="text" name="dirf" placeholder="Digite o diretor" required>
                    <p>Nome do ator 1</p>
                    <input type="text" name="ator1f" placeholder="Digite o nome do ator 1" required>
                    <p>Nome do ator 2</p>
                    <input type="text" name="ator2f" placeholder="Digite o nome do ator 2" required>
                    <p>URL da iamgem do IMDB</p>
                    <input type="text" name="imgf" placeholder="Cole aqui a URL" required>
                    <input type="hidden" name="notaf" value="0">
                    <input type="submit" name="" value="Adicionar filme">
                    <a href="remove.php">Retirar algum filme</a><br>
                    <a href="login.php">Voltar para a pagina de Login</a><br>
                </form>
            </div>
        </body>
    </head>
</html>