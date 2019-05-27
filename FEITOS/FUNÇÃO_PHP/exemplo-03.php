<?php 


function ola_mundo($texto = "valor padrao", $periodo= "Bom dia"){
	return "Ola! $texto  $periodo<br>" ;
}

echo ola_mundo();



echo ola_mundo("","Boa noite");

echo ola_mundo("mundo","");

echo ola_mundo("Luiz");


?>
