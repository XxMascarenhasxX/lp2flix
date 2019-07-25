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
        <meta charset="UTF-8">
        <title>LP2FLIX</title>

        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/style_player.css">
        <script src="js/index.js"></script>
  </head>

  <body>
    
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

      <!-- Divisoria da img do filme -->

      <div class="filme_img">
        <?php
          //Pegando a imagem e colocando à esquerda da pagina
          $id = $_POST['filme_id'];
          $query = "SELECT * FROM filmes WHERE id = '$id' ";
          $resultado = $banco->selectDB($query);
          foreach($resultado as $filme){
            ?>
              <?php $auxfilm = new filme($filme["id"],$filme["nome"],$filme["ano"],$filme["categoria"],$filme["diretor"],$filme["ator1"],$filme["ator2"],$filme["nota"],$filme["img"]);?>
			  <img src="<?php echo $auxfilm->getImagem(); ?>" alt="" height="800px"  />
            <?php
          }
        ?>
        
      </div>
      
      <!-- Aba de informações do filme -->
      
      <div class="info">
          <h2> Nome: <?php echo $auxfilm->getNome(); ?></h2><br>
          <h2> Ano: <?php echo $auxfilm->getAno(); ?></h2><br>
          <h2> Diretor: <?php echo $auxfilm->getDiretor(); ?></h2><br>
          <h2> Atores: <?php echo $auxfilm->getAtor1().", ".$auxfilm->getAtor2(); ?></h2><br>
          
          <h2> Categoria: <?php if($auxfilm->getCategoria() == "acao") echo "Ação"; else if($auxfilm->getCategoria() === "animacao") echo "Animação"; else if($auxfilm->getCategoria() === "comedia") echo "Comédia"; else echo $auxfilm->getCategoria(); ?></h2><br>


          <h2> Nota: <?php echo $auxfilm->getNota()."/10"; ?></h2>

      </div>
      
      <!-- Botão para assistir o filme -->
      
      <div class="view">
        <!-- Button trigger modal -->
        <br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
          Assistir
        </button>
        
        <!-- The Modal -->
        
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $filme["nome"]."... ou será que...";?> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <video height="270" autoplay muted loop id="myVideo">
                  <source src="./assets/img/gandalf.mp4" type="video/mp4">
                    Seu navegador não suporta videos em HTML5.
                </video>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
      $query_insert = "INSERT INTO `historico` (`id`, `login`) VALUES ('$id', '$login');";
      $banco->insertDB($query_insert);
      ?>

      
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    


    
  </body>