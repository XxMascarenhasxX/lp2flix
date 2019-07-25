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
      var intervalo0;

      function scrollDireita0(){
        intervalo0 = setInterval(function(){ document.getElementById('scroller0').scrollLeft += 1 }  , 5);
      };
      function scrollEsquerda0(){
        intervalo0 = setInterval(function(){ document.getElementById('scroller0').scrollLeft -= 1 }  , 5);
      };
      function clearScroll0(){
        clearInterval(intervalo0);
      };
	  
	    var intervalo1;

      function scrollDireita1(){
        intervalo1 = setInterval(function(){ document.getElementById('scroller1').scrollLeft += 1 }  , 5);
      };
      function scrollEsquerda1(){
        intervalo1 = setInterval(function(){ document.getElementById('scroller1').scrollLeft -= 1 }  , 5);
      };
      function clearScroll1(){
        clearInterval(intervalo1);
      };
	  
	   var intervalo2;

      function scrollDireita2(){
        intervalo2 = setInterval(function(){ document.getElementById('scroller2').scrollLeft += 1 }  , 5);
      };
      function scrollEsquerda2(){
        intervalo2 = setInterval(function(){ document.getElementById('scroller2').scrollLeft -= 1 }  , 5);
      };
      function clearScroll2(){
        clearInterval(intervalo2);
      };
	  
	   var intervalo3;

      function scrollDireita3(){
        intervalo3 = setInterval(function(){ document.getElementById('scroller3').scrollLeft += 1 }  , 5);
      };
      function scrollEsquerda3(){
        intervalo3 = setInterval(function(){ document.getElementById('scroller3').scrollLeft -= 1 }  , 5);
      };
      function clearScroll3(){
        clearInterval(intervalo3);
      };
	  
	   var intervalo4;

      function scrollDireita4(){
        intervalo4 = setInterval(function(){ document.getElementById('scroller4').scrollLeft += 1 }  , 5);
      };
      function scrollEsquerda4(){
        intervalo4 = setInterval(function(){ document.getElementById('scroller4').scrollLeft -= 1 }  , 5);
      };
      function clearScroll4(){
        clearInterval(intervalo4);
      };
	  
	   var intervalo5;

      function scrollDireita5(){
        intervalo5 = setInterval(function(){ document.getElementById('scroller5').scrollLeft += 1 }  , 5);
      };
      function scrollEsquerda5(){
        intervalo5 = setInterval(function(){ document.getElementById('scroller5').scrollLeft -= 1 }  , 5);
      };
      function clearScroll5(){
        clearInterval(intervalo5);
      };
	  
	   var intervalo6;

      function scrollDireita6(){
        intervalo6 = setInterval(function(){ document.getElementById('scroller6').scrollLeft += 1 }  , 5);
      };
      function scrollEsquerda6(){
        intervalo6 = setInterval(function(){ document.getElementById('scroller6').scrollLeft -= 1 }  , 5);
      };
      function clearScroll6(){
        clearInterval(intervalo6);
      };
	  
	   var intervalo7;

      function scrollDireita7(){
        intervalo7 = setInterval(function(){ document.getElementById('scroller7').scrollLeft += 1 }  , 5);
      };
      function scrollEsquerda7(){
        intervalo7 = setInterval(function(){ document.getElementById('scroller7').scrollLeft -= 1 }  , 5);
      };
      function clearScroll7(){
        clearInterval(intervalo7);
      };
	  
	   var intervalo8;

      function scrollDireita8(){
        intervalo8 = setInterval(function(){ document.getElementById('scroller8').scrollLeft += 1 }  , 5);
      };
      function scrollEsquerda8(){
        intervalo8 = setInterval(function(){ document.getElementById('scroller8').scrollLeft -= 1 }  , 5);
      };
      function clearScroll8(){
        clearInterval(intervalo8);
      };
	  
	   var intervalo9;

      function scrollDireita9(){
        intervalo9 = setInterval(function(){ document.getElementById('scroller9').scrollLeft += 1 }  , 5);
      };
      function scrollEsquerda9(){
        intervalo9 = setInterval(function(){ document.getElementById('scroller9').scrollLeft -= 1 }  , 5);
      };
      function clearScroll9(){
        clearInterval(intervalo9);
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
		$lista= new lista;
		$i=0;
		for($k; $k<10; $k++){
		
	  ?>
      <div class="slider">


        <h3><?php switch ($k) {
                    case 0:
                      echo "Novidades";
                      $query = "SELECT * FROM filmes WHERE ano = '2018' ";
                      $resultado = $banco->selectDB($query);
                      break;
                    case 1:
                      $hquery = "SELECT * FROM historico WHERE login = '$login' ORDER BY RAND() LIMIT 1 ";
                      $historico = $banco->selectDB($hquery);
                      if($historico != NULL){
                      $aux2=[];
                      foreach($historico as $filmes){
                        $id = $filmes["id"];
                        $query = "SELECT * FROM filmes WHERE id = '$id' ";
                        $aux = $banco->selectDB($query);
                        foreach($aux as $nome_filme){
                          $nomef = addslashes($nome_filme["nome"]);
                          $categoria = addslashes($nome_filme["categoria"]);
                          $ator1 = addslashes($nome_filme["ator1"]);
                          $ator2 = addslashes($nome_filme["ator2"]);
                          $diretor = addslashes($nome_filme["diretor"]);
                          $ano = addslashes($nome_filme["ano"]);
                        }
                        $query2 = "SELECT * FROM filmes WHERE diretor = '$diretor' OR ator1 = '$ator1' OR ator1 = '$ator2' OR ator2 = '$ator1' OR ator2 = '$ator2' ";
                        $aux2= array_merge($aux2,$aux);
                      }
                      $resultado = $banco->selectDB($query2);
                      echo "Porque você viu: ".$nomef;
                      }
                      else{
                        echo "Nenhuma sugestão no momento. Assista alguma coisa! Que tal uma pipoca?";
                        $query = "SELECT * FROM historico WHERE login = '$login' ";
                        $resultado = $banco->selectDB($query);
                      }
                      break;
                    case 2:
                      echo "Veja novamente";
                      $hquery = "SELECT * FROM historico WHERE login = '$login' GROUP BY id ";
                      $historico = $banco->selectDB($hquery);
                      if($historico != NULL){
                      $aux2=[];
					            foreach($historico as $filmes){
						            $id = $filmes["id"];
                        $query = "SELECT * FROM filmes WHERE id = '$id' ";
                        $aux = $banco->selectDB($query);
					              $aux2= array_merge($aux2,$aux);
					            }
					            $resultado=[];
					            $resultado= array_merge($resultado,$aux2);
                      }
                      else{
                        $query = "SELECT * FROM historico WHERE login = '$login' ";
                        $resultado = $banco->selectDB($query);
                      }
                      break;
                    case 3:
                      echo "Ação";
                      $query = "SELECT * FROM filmes WHERE categoria = 'acao' ";
                      $resultado = $banco->selectDB($query);
                   	  break;
                    case 4:
                      echo "Romance";
                      $query = "SELECT * FROM filmes WHERE categoria = 'romance' ";
                      $resultado = $banco->selectDB($query);
                      break;
                    case 5:
                      echo "Fantasia / Ficção";
                      $query = "SELECT * FROM filmes WHERE categoria = 'fantasia'";
                      $resultado = $banco->selectDB($query);
					  break;
                    case 6:
                      echo "Terror";
                      $query = "SELECT * FROM filmes WHERE categoria = 'terror'";
                      $resultado = $banco->selectDB($query);
					  break;
                    case 7:
                      echo "Comédia";
                      $query = "SELECT * FROM filmes WHERE categoria = 'comedia'";
                      $resultado = $banco->selectDB($query);
					  break;
                    case 8:
                      echo "Suspense";
                      $query = "SELECT * FROM filmes WHERE categoria = 'suspense'";
                      $resultado = $banco->selectDB($query);
					  break;
                    case 9:
                      echo "Animações";
                      $query = "SELECT * FROM filmes WHERE categoria = 'animacao'";
                      $resultado = $banco->selectDB($query);
                      break;
                  }
            ?>
        </h3>


        <span onmouseover=<?php echo "scrollEsquerda".$k."()";?> onmouseout=<?php echo "clearScroll".$k."()";?> class="handle handlePrev active">
          <i class="fa fa-caret-left" aria-hidden="true"></i>
        </span>

        <div id=<?php echo "scroller".$k;?> class="row">
          <div class="row__inner">

            <!-- for each movie cria painel -->
            <?php 
              foreach ($resultado as $filme){
				//$id,$nome,$ano,$categoria,$diretor,$ator1,$ator2,$nota,$imagem
				$auxfilme = new filme($filme["id"],$filme["nome"],$filme["ano"],$filme["categoria"],$filme["diretor"],$filme["ator1"],$filme["ator2"],$filme["nota"],$filme["img"]);
				$lista->add(clone $auxfilme);
				
				//$nome = $filme["nome"];
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
        
        <span onmouseover=<?php echo "scrollDireita".$k."()";?> onmouseout=<?php echo "clearScroll".$k."()";?>  class="handle handleNext active">
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
