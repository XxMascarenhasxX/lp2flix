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
                        if(isset ($_POST['anof']) && !empty($_POST['anof'])){
                            if(isset ($_POST['catf']) && !empty($_POST['catf'])){
                                if(isset ($_POST['dirf']) && !empty($_POST['dirf'])){
                                    if(isset ($_POST['ator1f']) && !empty($_POST['ator1f'])){
                                        if(isset ($_POST['ator2f']) && !empty($_POST['ator2f'])){
                                            if(isset ($_POST['imgf']) && !empty($_POST['imgf'])){
                                                $nomef = addslashes($_POST['nomef']);
                                                $anof = addslashes($_POST['anof']);
                                                $catf = addslashes($_POST['catf']);
                                                $dirf = addslashes($_POST['dirf']);
                                                $ator1f = addslashes($_POST['ator1f']);
                                                $ator2f = addslashes($_POST['ator2f']);
                                                $imgf = addslashes($_POST['imgf']);
                                                $notaf = addslashes($_POST['notaf']);
                                                $query = "INSERT INTO `filmes` (`id`, `nome`, `ano`, `categoria`, `diretor`, `ator1`, `ator2`, `nota`, `img`) VALUES (NULL, '$nomef', '$anof', '$catf', '$dirf', '$ator1f', '$ator2f', $notaf, '$imgf')";
                                                $sucesso = $banco->insertDB($query);
                                                if ($sucesso == 0){
                                                    ?>
                                                    <h1>Filme mal inserido, tente novamente.</h1><br>
                                                    <a href="controlpanel.php">Inserir outro filme</a><br>
                                                    <a href="login.php">Voltar para a pagina de Login</a><br> 
                                                    <a href="remove.php">Remover algum filme</a><br>
                                                    <?php
                                                }
                                                ?>
                                                <h1>Filme inserido</h1><br>
                                                <a href="controlpanel.php">Inserir outro filme</a><br>
                                                <a href="login.php">Voltar para a pagina de Login</a><br> 
                                                <a href="remove.php">Remover algum filme</a><br>
                                                <?php
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                ?>
            </div>  
        </body>
    </head>
</html>