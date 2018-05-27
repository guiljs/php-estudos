<?php

require_once("config.php");

$user1 = new Usuario();

$user1->loadById(4);

echo $user1;

// echo "<hr>";
//
// $sql = new Sql();
// foreach ($sql->select("Select * from tb_usuarios") as $row)
// {
//
//   $user1->loadById($row["idusuario"]);
//   echo $user1;
//   echo "<hr>";
// }

 ?>
