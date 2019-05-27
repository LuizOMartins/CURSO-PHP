<?php

spl_autoload_register(function($nameClass){ //standart php libery
	//recebe o nome da classe que esta sendo chamada
	var_dump($nameClass);

	$dirClass = "class"; //classe
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"; 
	//nome do arquivo e da classe ter que ser igual
	if (file_exists($filename)) {

		require_once($filename);

	}

});

?>