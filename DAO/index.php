<?php

require_once("config.php");

// $user1 = new Usuario();
//
// $user1->loadById(4);
//
// echo $user1;

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

// $lista = Usuario::getList();
//
// echo json_encode($lista);

// $search = Usuario::search("he");
// echo json_encode($search);

// $usuario = new Usuario();
// $usuario->login("gjsantos","senha123");
// echo $usuario;

// $aluno=new Usuario("Novo Aluno","Nova Senha");
// $aluno->insert();
// echo $aluno;

// $aluno = new Usuario();
// $aluno->loadById(9);
// $aluno->update("Prof","tatata");
//
// echo $aluno;


$aluno = new Usuario();
$aluno->loadById(9);
$aluno->delete();

echo $aluno;

?>
