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
                            $query = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                            $resultado = $banco->numRows($query);
                            if($resultado == 0){
                                ?>
                                <h1>Erro na validação!</h1> 
                                <h1>Login ou Senha incorretos!</h1>
                                <a href="registro.php">Registrar nova conta</a><br>
                                <a href="login.php">Voltar para a pagina de Login</a>
                                <?php
                            }
                            if ($resultado == 1){
                                $_SESSION['login'] = $login;
                                $_SESSION['senha'] = $senha;
                                if($login == "admin" && $senha == "admin"){
                                    ?>
                                    <h1>Validado com Sucesso! Redirecionando...</h1>
                                    <META http-equiv="refresh" content="1;URL=controlpanel.php">
                                    <?php
                                }
                                else{
                                ?>
                                <h1>Validado com Sucesso! Redirecionando...</h1>
                                <META http-equiv="refresh" content="1;URL=index.php">
                                <?php
                                }
                            } 
                        }
                    }
                ?>
            </div>  
        </body>
    </head>
</html>