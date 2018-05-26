<?php
namespace Cliente;

/**
 *
 */
class Cadastro extends \Cadastro
{

  public function RegistrarVenda()
  {
    echo "Foi registrada a venda para o cliente".$this->getNome();
  }
}


 ?>
