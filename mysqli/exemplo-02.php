<?php
$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
	exit;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");//consulta no banco

$data = array();

while ($row = $result->fetch_assoc()) { //feth_assoc andando linha a linha na tabela
	array_push($data, $row);

}

print_r(json_encode($data));//resultado do banco em json

?>