<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");
// local do servidor, usuario, senha, nome do bacno


if ($conn->connect_error) { // se houver erro
	echo "Error: " . $conn->connect_error;
	exit;
}


$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");//preparando para insert

$stmt->bind_param("ss", $login, $pass);//ss tipo de dados, valores passados pelas lavriaveis

$login = "luiz";
$pass = "123458";
// como é um statement prepare o codigo é executado somente no execute
$stmt->execute();

$login = "root";
$pass = "!@#$";

$stmt->execute();

?>