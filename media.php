<?php
    //media abstrata pra tornar melhor de implementar
	abstract class media {

		abstract public function __construct($id,$nome,$ano,$categoria,$diretor,$ator1,$ator2,$nota,$imagem);
		abstract  public function setNome($nome);

        abstract public function setAno($ano);

        abstract public function setAtor1($ator);

        abstract public function setAtor2($ator);
		
		abstract public function setId($id);
		
		abstract public function setCategoria($categoria);
		
		abstract public function setDiretor($diretor);
		
		abstract public function setNota($nota);
		
		abstract public function setImagem($imagem);
		
		//-----------------------||----------------------------
		abstract  public function getNome();

        abstract public function getAno();

        abstract public function getAtor1();

        abstract public function getAtor2();
		
		abstract public function getId();
		
		abstract public function getCategoria();
		
		abstract public function getDiretor();
		
		abstract public function getNota();
		
		abstract public function getImagem();
		
		
    }

//---------------------------------------||----------------------------------------   
   class filme extends media {
		protected $nome;
        protected $id;
		protected $ano;
        protected $ator1;
        protected $ator2;
        protected $diretor;
		protected $categoria;
		protected $nota;
		protected $imagem;
		
		public function __construct($id,$nome,$ano,$categoria,$diretor,$ator1,$ator2,$nota,$imagem){
			$this->nome = $nome;
			$this->ano = $ano;
			$this->ator1=$ator1;
			$this->ator2=$ator2;
			$this->diretor=$diretor;
			$this->categoria=$categoria;
			$this->nota=$nota;
			$this->imagem=$imagem;
			$this->id=$id;
		}
		public function setNome($nome){
            $this->nome = $nome;
        }

        public function setAno($ano){
            $this->ano = $ano;
        }

        public function setAtor1($ator){
            $this->ator1 = $ator;
        }

        public function setAtor2($ator){
            $this->ator2 = $ator;
        }
		
		public function setId($id){
			$this->id=$id;
		}
		
		public function setCategoria($categoria){
			$this->categoria=$categoria;
		}
		
		public function setDiretor($diretor){
			$this->diretor=$diretor;
		}
		
		public function setNota($nota){
			$this->nota=$nota;
		}
		
		public function setImagem($imagem){
			$this->imagem=$imagem;
		}
		
		//------------------------------||-------------------------
		public function getNome(){
			return $this->nome;
		}

        public function getAno() {
			return $this->ano;
		}

        public function getAtor1(){
			return $this->ator1;
		}

        public function getAtor2(){
			return $this->ator2;
		}
		
		public function getId(){
			return $this->id;
		}
		
		public function getCategoria(){
			return $this->categoria;
		}
		
		public function getDiretor(){
			return $this->diretor;
		}
		
		public function getNota(){
			return $this->nota;
		}
		
		public function getImagem(){
			return $this->imagem;
		}
		
    }
	
    //----------------------------------||---------------------------------------------
	/*class serie extends filme {
        protected $eps;
		
		public function __construct($id,$nome,$ano,$ator1,$ator2,$tempo,$eps){
			parent::__construct($id,$nome,$ano,$ator1,$ator2,$tempo);
			$this->eps=$eps;
		}
		
		public function setNome($nome){
            $this->nome = $nome;
        }

        public function setAno($ano){
            $this->ano = $ano;
        }

        public function setAtor_1($ator){
            $this->ator_1 = $ator;
        }

        public function setAtor_2($ator){
            $this->ator_2 = $ator;
        }

		public function setEps($eps){
			$this->eps=$eps;
		}
    }*/
	//------------AGORA A FODENDO CLASSE LISTA QUE VAI CONTER O FODENDO ARRAY DE FILMES OU SÉRIES, TAOKEY?----------------
	//a lista pode ser de qualquer tipo de filme tranquilamente, se for necessário especificar o tipo do filme no metodo, é só criar uma condição a mais
	//A estrutura ficará : $acao = new lista; 
	//assim teremos uma lista do tipo ação, caso precisemos de uma de romance: $romance = new lista; e assim vai. 
	//a classe é o molde, não esqueça disso, Keep It Simple, Stupid.
	class lista {
		 protected $catalogo;
		 //Construtor cria um catalogo vazio
		 public function __construct()
		 {
			 $this->catalogo= array();
		 }
		 //adiciona o filme desejado ao catalogo, contanto que passe um objeto do tipo serie ou filme
		 public function add($filme)
		{
			
				array_push($this->catalogo,$filme);			
			
				
		}
		
		//------------------------------||-------------------------
		public function getNome($i){
			return $this->catalogo[$i]->getNome();
		}

        public function getAno($i) {
			return $this->catalogo[$i]->getAno();
		}

        public function getAtor1($i){
			return $this->catalogo[$i]->getAtor1();
		}

        public function getAtor2($i){
			return $this->catalogo[$i]->getAtor2();
		}
		
		public function getId($i){
			return $this->catalogo[$i]->getId();
		}
		
		public function getCategoria($i){
			return $this->catalogo[$i]->getCategoria($i);
		}
		
		public function getDiretor($i){
			return $this->catalogo[$i]->getDiretor();
		}
		
		public function getNota($i){
			return $this->catalogo[$i]->getNota();
		}
		
		public function getImagem($i){
			return $this->catalogo[$i]->getImagem();
		}
		
    }
		
		//funções para puxar o array ou informações especificas dele devem ser postas abaixo 
		//O ideal é que o banco já passasse um array com os objetos filmes requeridos, mas caso não dê, dá pra chamar a função add em um FOR tranquilamente.
	
	
?>