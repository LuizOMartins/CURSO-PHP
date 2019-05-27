<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

// $conn->rollback();
// com o rollback volta para o inicio da transação

$conn->commit();

echo "Delete OK!";

?>