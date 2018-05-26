<div>

<?php
require_once("config.php");
echo "Oi ".$_SESSION["nome"];

 ?>
</div>
 <br>

 <?php
echo session_id();

session_regenerate_id();

echo "<br>";

echo session_id();

echo "<br>";

var_dump($_SESSION);
  ?>
