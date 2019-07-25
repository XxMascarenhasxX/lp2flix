<?php
    session_start();
    require_once "dbcontroller.php";
    $banco = new DBController;
    $_SESSION['banco'] = $banco;
?>

<html>
    <head>
        <title>LP2FLIX Validação</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/stylef.css">
        <body>
            <div class="loginbox">
                <img src="./assets/img/avatar.png" class="avatar">
                <?php
                    if(isset ($_POST['nomef']) && !empty($_POST['nomef'])){
                        $nomef = addslashes($_POST['nomef']);
                        $query = " DELETE FROM `filmes` WHERE `filmes`.`nome` = '$nomef' ";
                        $sucesso = $banco->insertDB($query);
                        if($sucesso == 0){
                            ?>
                            <h1>Erro! Filme inexistente ou nome incorreto.</h1>
                            <a href="controlpanel.php">Inserir outro filme</a><br>
                            <a href="login.php">Voltar para a pagina de Login</a><br> 
                            <a href="remove.php">Remover algum filme</a><br>
                            <?php
                        }
                        if($sucesso == 1){
                            ?>
                            <h1>Filme removido</h1><br>
                            <a href="controlpanel.php">Inserir outro filme</a><br>
                            <a href="login.php">Voltar para a pagina de Login</a><br> 
                            <a href="remove.php">Remover algum filme</a><br>
                            <?php
                        }
                        ?>
                        <?php
                    }
                ?>
            </div>  
        </body>
    </head>
</html>