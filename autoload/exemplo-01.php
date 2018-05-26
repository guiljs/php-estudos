<?php

spl_autoload_register(function($className){
  //var_dump($className);
  if (file_exists("$className.php")===true) {
    require_once("$className.php");
  }
});

$alguem = new Pessoa("Guilherme",36);
$alguem->setSexo("masculino");
$alguem->show();

$outro = new Pessoa("Cibele",36);
$outro->setSexo("feminino");
$outro->show();

// $outraCoisa = new Pessoa("Darci",136);
// $outraCoisa->setSexo("transbinario");
// $outraCoisa->show();

$programador = new Programador("Heitor",4);
$programador->setSexo("masculino");
$programador->setLinguagemProgramacao("javascript");
$programador->show();

$programador2 = new Programador("Henrique",1);
$programador2->setSexo("masculino");
$programador2->setLinguagemProgramacao("C#, Python, R e PHP");
$programador2->show();

 ?>
