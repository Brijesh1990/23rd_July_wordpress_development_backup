<?php 
$file=fopen("ajax.txt","r+") or die("file does not exist");
// get the contents of file
// echo fgets($file);
echo fgets($file,100);
fclose($file);
?>