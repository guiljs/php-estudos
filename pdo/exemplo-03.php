<?php

$conn = new PDO("mysql:host=127.0.0.1;dbname=dbphp7","root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login="guiljs";
$senha="abc123";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$senha);

$stmt->execute();

echo "Inserido ok";


 ?>
