<?php 

$pessoa =  array (

	'nome'=>'Luiz',
	'idade'=>21

); 


// foreach ($pessoa as &$value) { //por referencia
foreach ($pessoa as $value) {
	if(gettype($value) === 'integer') $value +=10;
	echo $value."<br>";
}

print_r($pessoa);

?>