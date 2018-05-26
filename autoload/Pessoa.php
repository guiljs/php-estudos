<?php
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

 ?>
