<?php
$json = '[{"nome":"Guilherme","idade":36},{"nome":"Cibele","idade":36},{"nome":"Jo\u00e3o","idade":90}]';

$data = json_decode($json,true);

var_dump($data);
//print_r(json_decode($json,true));

 ?>
