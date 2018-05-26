<?php
$conn = new mysqli("localhost","root","","dbphp7");

if ($conn->connect_error) {
  echo "Error : ". $conn->connect_error;
}

$resultado = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$dados = array();

while ($row = $resultado->fetch_assoc()) {
  array_push($dados,$row);
  //var_dump($row);
}
echo json_encode($dados);
 ?>
