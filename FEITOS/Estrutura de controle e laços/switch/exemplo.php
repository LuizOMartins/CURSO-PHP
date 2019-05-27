<?php 

$diadaSemana  = date("w");

echo $diadaSemana;



switch ($diadaSemana) {
	case 0: echo "	Domingo"; break;
	case 1: echo "	Segunda"; break;
	case 2: echo "	Terça-feira"; break;
	case 3: echo "	Quarta-feira"; break;
	case 4: echo "	Quinta-feira"; break;
	case 5: echo "	Sexta-feira"; break;
	case 6: echo "	Sabado"; break;
	default: break;
}
?>