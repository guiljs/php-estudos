<?php 

$dir1="folder_01";
$dir2="folder_02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);


$filename = "README.txt";
$fullpath =$dir1. DIRECTORY_SEPARATOR. $filename;

if (!file_exists($fullpath)) {
	$file=fopen($fullpath, "w+");

	fwrite($file,date("d/m/Y H:i:s"));

	fclose($file);
}
rename($fullpath, $dir2.DIRECTORY_SEPARATOR.$filename);
 ?>