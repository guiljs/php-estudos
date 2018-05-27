<?php 

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$conteudo = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $conteudo);

fclose($file);
 ?>


 <img src="<?=$basename?>">