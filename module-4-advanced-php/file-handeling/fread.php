<?php 
$file=fopen("hello.txt","r+") or die("file does not exist");
// read only;
$res=fread($file,200);
echo nl2br($res);
fclose($file);
?>