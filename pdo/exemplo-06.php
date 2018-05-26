<?php

$conn = new PDO("mysql:host=127.0.0.1;dbname=dbphp7","root","");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario= ?");

$id=1;

$stmt->bindParam(":ID",$id);

$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();
echo "Excluido ok";


 ?>
