<?php

require_once("config.php");

use  Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Guilherme de Jesus Santos");
$cad->setEmail("guiljs@gmail.com");
$cad->setSenha("123456");
$cad->RegistrarVenda();
echo $cad;

 ?>
