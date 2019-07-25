<?php
    session_start();
    require_once "dbcontroller.php";
    $banco = new DBController;
    $_SESSION['banco'] = $banco;
?>

<html>
    <head>
        <title>LP2FLIX Validação</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <body>
            <div class="loginbox">
                <img src="./assets/img/avatar.png" class="avatar">
                <?php
                    if(isset ($_POST['login']) && !empty($_POST['login'])){
                        if(isset ($_POST['senha']) && !empty($_POST['senha'])){
                            $login = addslashes($_POST['login']);
                            $senha = addslashes($_POST['senha']);
                            $query = "INSERT INTO `usuarios` (`login`, `senha`) VALUES ('$login', '$senha')";
                            $sucesso = $banco->insertDB($query);
                            if($sucesso == 0){
                                ?>
                                <h1>Este login ja está em uso!</h1><br>
                                <a href="registro.php">Tente novamente</a><br>
                                <a href="login.php">Voltar para a pagina de Login</a>
                                <?php
                            }
                            if($sucesso == 1){
                                ?>
                                <h1>Nova conta registrada!</h1> 
                                <h1>Login: <?php echo $login?></h1><br>
                                <h1>Senha: <?php echo $senha?></h1><br>
                                <a href="registro.php">Registrar nova conta</a><br>
                                <a href="login.php">Voltar para a pagina de Login</a>
                                <?php 
                            }
                        }
                    }
                ?>
            </div>  
        </body>
    </head>
</html>