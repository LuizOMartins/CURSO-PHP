<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
//tipos de banco, nome do banco, onde esta o banco, login e senha
//padrao de conexao com banco
//PDO (PHP Data Objects) é uma extensão que fornece uma interface padronizada para trabalhar com bancos de dados

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>".$key.":</strong>".$value."<br/>";
	}

	echo "====================================================<br/>";

}

?>