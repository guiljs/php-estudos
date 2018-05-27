<?php

$name = "images";

if (!is_dir($name)) {
  mkdir($name);
  echo "Criado o diretório {$name}";
}else {
  rmdir($name);
  echo "Já existe o diretório {$name}. Foi removido.";
}

?>
