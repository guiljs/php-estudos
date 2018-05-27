<?php
require_once("config.php");

main();

?>

<?php

function main()
{
  $file=fopen("usuarios.csv","w+");
  $sql = new Sql();

  $usuarios = $sql->select("select * from tb_usuarios order by deslogin");

  geraHeaders($usuarios,$file);

  geraLinhas($usuarios,$file);

  fclose($file);

}
function geraHeaders($usuarios,$file)
{
  $headers = array();

  foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));
  }

  fwrite($file,implode(",",$headers)."\r\n");
}

function geraLinhas($usuarios,$file)
{
  foreach ($usuarios as $row) {
    $data = array();
    //Foreach de linha
    foreach ($row as $key => $value) {
      array_push($data,$value);
    }//foreach de coluna
    fwrite($file, implode(",",$data)."\r\n");
  }//End foreach de linha
}

?>
