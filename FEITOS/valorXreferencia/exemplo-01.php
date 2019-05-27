<?php 

$a = 10;


function troca_Valor(&$b = 0){

	$b+=50;

	return $b;
}


echo troca_Valor($a);
echo "<br>";
echo troca_Valor($a);
echo "<br>";
echo $a;
 ?>