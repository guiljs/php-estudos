<?php

$conn = new PDO("mysql:host=127.0.0.1;dbname=dbphp7","root","");

$stmt = $conn->prepare("UPDATE tb_usuarios set deslogin = :LOGIN , dessenha = :PASSWORD WHERE idusuario= :ID");

$login="guiljs";
$senha="zyxwv";
$id=2;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$senha);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Alterado ok";


 ?>
