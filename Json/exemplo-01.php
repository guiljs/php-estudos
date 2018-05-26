<?php
$pessoas = array();
array_push($pessoas,array('nome' => 'Guilherme','idade'=>36 ));
array_push($pessoas,array('nome' => 'Cibele','idade'=>36 ));
array_push($pessoas,array('nome' => 'João','idade'=>90 ));

echo json_encode($pessoas);
 ?>
