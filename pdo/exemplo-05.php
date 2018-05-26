<?php

$conn = new PDO("mysql:host=127.0.0.1;dbname=dbphp7","root","");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario= :ID");

$id=2;

$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Excluido ok";


 ?>
