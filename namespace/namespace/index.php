<?php

require_once("config.php");

use Cliente\Cadastro; //usando namespace Cliente da Classe cadastro de cliente que herda de cadastro.

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();

?>