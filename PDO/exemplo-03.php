<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

//PDO com MYSQL

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");
//:paramtros

$login = "jose";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
//relacionar valores com os paramtros
$stmt->execute();

echo "Inserido OK!";

?>