<?php
$conn = new mysqli("localhost","root","","dbphp7");

if ($conn->connect_error) {
  echo "Error : ". $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (?, ?)");
$stmt->bind_param("ss",$user,$senha);
$user = "Cibele";
$senha = "senhaCibele";
$stmt->execute();

$user = "Heitor";
$senha = "senhaHeitor";
$stmt->execute();

$user = "Henrique";
$senha = "senhaHenrique";
$stmt->execute();

 ?>
