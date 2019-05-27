<?php

$name = "images";

if (!is_dir($name)) {
	mkdir($name);// se o diretorio não existir
	echo "Diretório $name criado com sucesso!";

} else {
	rmdir($name);
	echo "Já existe o diretório: $name foi removido";
}

?>