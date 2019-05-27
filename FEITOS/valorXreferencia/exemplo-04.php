<?php 

function soma (float ...$valores):float {

	return array_sum($valores);
}


echo var_dump(soma(2,2));
echo "<br>";
echo soma(25,33);
echo "<br>";
echo(soma(1.55,6.55,8,1,5,8));

?>