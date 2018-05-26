<form>
  <input type="text" name="nome" value="<?php echo $_GET["nome"] ?>">
  <input type="date" name="nascimento" value="<?php echo $_GET["nascimento"] ?>">
  <input type="submit" value="Enviar">
</form>

<?php
foreach ($_GET as $key => $value) {
  echo "$key : $value <br>";
}
 ?>
