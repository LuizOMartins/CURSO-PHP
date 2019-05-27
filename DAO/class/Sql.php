<?php 

class Sql extends PDO {
	// classe SQL para facilitar o uso das QUERYs
	//PDO classe nativa do sistema
	private $conn;
	public function __construct(){
	//metedo magina de construtor padrão que ja faz a conexão no banco
	//poderia ser um metodo prametricado com os dados de conexao
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	}

	private function setParams($statement, $parameters = array()){
		foreach ($parameters as $key => $value) {
			// depedento da query vai ter mais que um, no caso para cada um ele chama o metodo setParam que relaciona os dados
			$this->setParam($statement, $key, $value);//chama o metodo setParam com os parmetros
		}
	}

	private function setParam($statement, $key, $value){
		$statement->bindParam($key, $value);// relaciona cada chave com seu valor
	}

	public function query($rawQuery, $params = array()){
		// rawQuery: query bruta / params : vai ser um array  
		// medoto prepare: Prepara uma instrução SQL para ser executada pelo método PDOStatement :: execute () .  
		$stmt = $this->conn->prepare($rawQuery); //query bruta
		$this->setParams($stmt, $params);//chama o metodo setParams com os parmetros
		$stmt->execute();
		return $stmt;
	}

	public function select($rawQuery, $params = array()):array{//parametros como um array
		$stmt = $this->query($rawQuery, $params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC); //retornar so os dados associativos
	}
}

 ?>