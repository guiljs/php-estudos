<?php
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
 ?>
