<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "lp2flix";
	private $conn;

	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	/*
		O construtor ja chama a função connectDB pra puxar o banco de dados e jogar na variavel $conn. 
	*/

	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	/*
		O select puxa linhas do banco de dados de acordo com a query, que geralmente é:
		SELECT * FROM (tabela) WHERE (alguma coisa, tipo: login = joao) 
		Ai ele pega	todos os logins que tem joão) 
	*/

	function selectDB($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	/*
		A numRows é o que a gente vai usar pra saber se tem ou não gente. pq ele faz o select mas ele
		conta quantos resultados foram obtidos. Se retornar 0, o login n existe. 
	*/

	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
	
	/*
		Esse vai ser o da tela de registro, pra add os usuarios no banco. Tb vai ser usado por tras pra adicionar os filmes na lista de assistidos. 
	*/

	function insertDB($query) {
		if (mysqli_query($this->conn, $query)) {
			return 1;
			} 
			else {
			   return 0;
			}

		/*
		if (mysqli_query($this->conn, $query)) {
        echo "Novo registro criado com sucesso";
		} 
		else {
           echo "Error: " . $query . "<br>" . mysqli_error($this->conn);
		}
		*/
	
	/*
		Acho que a gente n vai precisar do update, so se botarmos a opção de mudar senha. 
	*/

	}
	function updateDB($query) {
		if (mysqli_query($this->conn, $query)) {
        echo "Registro atualizado com sucesso";
        } else {
           echo "Error: " . $query . "<br>" . mysqli_error($this->conn);
     }
	}
	
	function closeDB() {
		mysqli_close($this->conn);
	}	
 
	
}
?>