<?php

$filename = "usuarios.csv";


if (file_exists($filename)) {
	$file = fopen($filename, "r");//abrir com leitura
	$headers = explode(",", fgets($file));//pega so primeira linnha do arquivo e da um explode pela virgula
	$data = array();
	//header vai constar o nome das colunas
	while ($row = fgets($file)) {//enqunto existir linhas no documento
		$rowData = explode(",", $row);// while vai pelas linhas
		$linha = array();
		for ($i=0; $i < count($headers); $i++) { // for para as celulas de cada linha
			$linha[$headers[$i]] = $rowData[$i];
		}
		array_push($data, $linha);//adiciona linha a linha no array datas 
	}

	fclose($file);

	echo json_encode($data);

}

?>