<?php 

for($i=0; $i<1000;$i+=5){

	if ($i  >= 200  && $i<=800 ) continue;
	//continue : continuar pulando o que foi delimitado

	if($i === 900) break;
	// sair do laço

	echo "$i"."<br/>";
}

?>