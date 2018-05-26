<?php
/**
 *
 */
class Pessoa
{
  private $nome;
  private $idade;
  private $sexo;

  public function setSexo($sexo){
    if ($sexo != "masculino" && $sexo != "feminino") {
      throw new Exception("O sexo $sexo não existe.", 1);
    }
    $this->sexo = $sexo;
  }

  public function getSexo()
  {
    return $this->sexo;
  }

  function __construct($nome, $idade)
  {
    $this->nome = ucwords($nome);
    $this->idade= $idade;
  }

  public function show()
  {
    echo "<br>";
    $artigo = $this->sexo =="masculino"? "O":"A";

    echo "$artigo $this->nome tem $this->idade anos";
  }
}

/**
 *
 */
class Programador extends Pessoa
{
  private $linguagemProgramacao;
  public function getLinguagemProgramacao()
  {
    return $this->linguagemProgramacao;
  }
  public function setLinguagemProgramacao($value)
  {
    $this->linguagemProgramacao = $value;
  }

  public function show()
  {
    parent::show();
    echo " e programa em $this->linguagemProgramacao.";
  }
}


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
