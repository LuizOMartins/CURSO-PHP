<?php

// Você pode usá-lo para salvar seus arquivos no Banco de Dados
// ou também salvar o caminho de diretórios até o arquivo

$filename = "logo.png";
$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode = "data:" . $mimetype . ";base64," . $base64;
echo "<pre>";
var_dump($base64encode);
?>

<a href="<?=$base64encode?>" target="_blank">Link para Imagem</a>

<img src="<?=$base64encode?>">