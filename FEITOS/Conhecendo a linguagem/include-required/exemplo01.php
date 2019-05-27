<?php 

// include "inc/exemplo2.php";

require "inc/exemplo2.php";



/*
require
- arquivo exista 

- funcione corretamente

include
- tenta funcionar
- include dinamico : trazer arquivo do servidor
- permite include path

_once: traz o arquivo somente uma unica vez

*/
$resultado = somar(10,25);

echo  $resultado;


var_dump($resultado);
?>

