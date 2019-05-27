<?php 


function ola_mundo(){

	$argumentos = func_get_args();

	return $argumentos;
}

var_dump(ola_mundo("Bom dia","Ola"));


?>
