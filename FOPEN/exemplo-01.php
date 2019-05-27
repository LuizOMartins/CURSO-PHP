<?php

$file = fopen("log.txt", "a+");//abrir o arquivo e com a permissão que deseja

fwrite($file, date("Y-m-d H:i:s") . "\r\n");//inserir a data dentro do arquivo

fclose($file); //fecha o arquivo e salva

echo "Arquivo criado com sucesso!";

?>