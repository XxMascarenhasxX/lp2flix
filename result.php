<?php
    session_start();
    require_once "dbcontroller.php";
    require_once "media.php";
    $banco = new DBController;
    $_SESSION['banco'] = $banco;
    $login = $_SESSION['login'];
    $k = 0;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>LP2FLIX</title>

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style_index.css">
    <script src="js/index.js"></script>
	  
	  


  </head>

  <body>
    
    <script>
      var intervalo;

      function scrollDireita(){
        intervalo = setInterval(function(){ document.getElementById('scroller').scrollLeft += 1 }  , 5);
      };
      function scrollEsquerda(){
        intervalo = setInterval(function(){ document.getElementById('scroller').scrollLeft -= 1 }  , 5);
      };
      function clearScroll(){
        clearInterval(intervalo);
      };
    </script>

    <div class="contain">
      <!-- <div class="logo">
      </div> -->

      <!-- Nav bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.php">LP2FLIX</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $login ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="login.php">Log Out</a>
                <a class="dropdown-item" href="delete.php">Excluir Conta</a>
              </div>
            </li>
          </ul>
          <form action="result.php" method="post" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" name="pesquisa" placeholder="O que você procura?" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </div>
      </nav>


    <!-- Nav bar end -->

      <!-- For each tipo de filme, cria slider -->
      <?php

        $pesquisa = addslashes($_POST['pesquisa']);
        $lista = new lista();
		$i=0;
		for($k; $k<1; $k++){
      ?>
      <div class="slider">


        <h3><?php switch ($k) {
                    case 0:
                      echo "Resultados para \"$pesquisa\" ";
                      $query = "SELECT * FROM filmes WHERE nome LIKE '%$pesquisa%' OR ano LIKE '%$pesquisa%' OR categoria LIKE '%$pesquisa%' OR diretor LIKE '%$pesquisa%' OR ator1 LIKE '%$pesquisa%' OR ator2 LIKE '%$pesquisa%' "; // adicionar os outros fields, ajeitar a nav bar e limpar codigos desnecessarios!!
                      $resultado = $banco->selectDB($query);
                      break;
                  }
            ?>
        </h3>


        <span onmouseover="scrollEsquerda()" onmouseout="clearScroll()" class="handle handlePrev active">
          <i class="fa fa-caret-left" aria-hidden="true"></i>
        </span>

        <div id="scroller" class="row">
          <div class="row__inner">

            <!-- for each movie cria painel -->
            <?php 
              foreach ($resultado as $filme){ 
				  $auxfilm = new filme($filme["id"],$filme["nome"],$filme["ano"],$filme["categoria"],$filme["diretor"],$filme["ator1"],$filme["ator2"],$filme["nota"],$filme["img"]);
				  $lista->add(clone $auxfilm);
			?>
            <div class="gui-card">
              <div class="gui-card__media">
                <img class="gui-card__img" src="<?php echo $lista->getImagem($i); ?>" alt=""  />
              </div>
              <div class="gui-card__details">
                <div class="centerize">
                  <form action="player.php" method="POST">
                    <input type="hidden" name="filme_id" value="<?php echo $lista->getId($i); ?>">
                    <input type="submit" name="<?php echo $lista->getNome($i); ?>"  value="Assistir">
                  </form>
                </div>
                <div class="gui-card__title">
                  <?php
                    echo $lista->getNome($i);
                  ?>
                  
                </div>
              </div>
            </div>
          
            <?php
              $i++;}
            ?>
          

          </div>

        </div>
        
        <span onmouseover="scrollDireita()" onmouseout="clearScroll()"  class="handle handleNext active">
          <i class="fa fa-caret-right" aria-hidden="true"></i>
        </span>
      </div>

      <?php
         }
      ?>

    </div>

    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
