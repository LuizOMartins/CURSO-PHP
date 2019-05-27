<?php

$images = scandir("images");
$data = array();

foreach ($images as $img) {
	if (!in_array($img, array(".", ".."))) {// o que nao for ponto e ponto ponto 

		$filename = "images" . DIRECTORY_SEPARATOR . $img;//caminho todo da imagem
		$info = pathinfo($filename);//obtem informações do arquivo

		$info['size'] = filesize($filename);
		$info['modified'] = date("d/m/Y H:i:s", filemtime($filename));
		$info['url'] = "http://localhost/DIR/". str_replace("\\", "/", $filename);
		array_push($data, $info);//adicionando info na variavel data
		// str_replace("\\", "/", $filename); trocando barra invertida por barra normal com replace 
	}
}

echo json_encode($data);

?>