<?php

function error_handler($code,$message,$file,$line)
{
  $dados = array('code' => $code,
  'message' =>$message,
  'file'=>$file,
  'line'=>$line);

  echo json_encode($dados);
}

set_error_handler("error_handler");


echo $divisao;

?>
