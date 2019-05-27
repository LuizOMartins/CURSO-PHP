<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
$headers = array();


foreach ($usuarios[0] as $key => $value) {// pegando o nome das colunas no banco de dados
	array_push($headers, ucfirst($key));//icfrist mudando a primria letra para maiusculo
}

$file = fopen("usuarios.csv", "w+");//se não existir arquivo csv ele cria um
fwrite($file, implode(",", $headers) . "\r\n");//seperar itens por virgula

foreach ($usuarios as $row) { //foreach para as linha
	$data = array();
	foreach ($row as $key => $value) {//foreach para as celulas
		array_push($data, $value);//adcionando os valores no array
	}// End Foreach de coluna
	fwrite($file, implode(",", $data) . "\r\n");//separando por virgula também
} // End Foreach de linha

fclose($file);

?>