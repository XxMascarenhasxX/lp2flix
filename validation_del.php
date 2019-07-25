<?php
    session_start();
    require_once "dbcontroller.php";
    $banco = new DBController;
    $_SESSION['banco'] = $banco;
    $login = $_SESSION['login'];

?>


<html>
    <head>
        <title>LP2FLIX Validação</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <body>
            <div class="loginbox">
                <img src="./assets/img/avatar.png" class="avatar">
                <?php
                    if(isset ($_POST['senha']) && !empty($_POST['senha'])){
                        $senha = addslashes($_POST['senha']);
                        if($senha == $_SESSION['senha']){
                            $query = "DELETE FROM `usuarios` WHERE `usuarios`.`login` = '$login' ";
                            $sucesso = $banco->insertDB($query);
                            if($sucesso == 0){
                                ?>
                                <h1>Erro ao deletar conta!</h1><br>
                                <a href="delete.php">Tente novamente</a><br>
                                <a href="login.php">Voltar para a pagina de Login</a>
                                <?php
                            }
                            if($sucesso == 1){
                                ?>
                                <h1>Conta deletada!</h1> 
                                <h1>Antigo Login: <?php echo $login?></h1><br>
                                <h1>Antiga Senha: <?php echo $senha?></h1><br>
                                <a href="registro.php">Registrar nova conta</a><br>
                                <a href="login.php">Voltar para a pagina de Login</a>
                                <?php 
                            }
                        }
                        else{
                            ?>
                            <h1>Senha Incorreta!</h1><br>
                            <a href="delete.php">Tente novamente</a><br>
                            <a href="login.php">Voltar para a pagina de Login</a>
                            <?php
                        }   
                    }
                ?>
            </div>  
        </body>
    </head>
</html>