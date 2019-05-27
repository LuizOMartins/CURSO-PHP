<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">
	<button type="submit">Enviar</button>
</form>

<?php
//o envio de arquivo é feito para uma pasta de aruquivos temporario, depois que o arquivo termina de ser feito su uploud ele é direcionado para a pagina que precisa ficar.

if ($_SERVER['REQUEST_METHOD'] === "POST") {//se for uma requisição POST
	
	$file = $_FILES['fileUpload'];//Files é a informacao dos arquivos d uploud, com o mesmo namo do input
	if ($file['error']) {
		throw new Exception("Error: ".$file['error']);		
	}// se der erro, gerar um erro no php

	$dirUploads = "uploads";
	if (!is_dir($dirUploads)) {// se não tiver um diretorio com esse nome ele será criando
		mkdir($dirUploads);
	}

	if (move_uploaded_file($file['tmp_name'], $dirUploads . DIRECTORY_SEPARATOR . $file['name'])) {//nome e local de destino do uploud
		echo "Upload realizado com sucesso!";
	} else {

		throw new Exception("Não foi possível realizar o upload.");
		

	}

}

?>