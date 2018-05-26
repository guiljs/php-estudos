<?php
  spl_autoload_register(function($className){
var_dump($className);
    $dirClass = "classes";
    $fileName = $dirClass . DIRECTORY_SEPARATOR . $className  . ".php";
    if (file_exists($fileName)) {
      require_once($fileName);
    }
  });
 ?>
