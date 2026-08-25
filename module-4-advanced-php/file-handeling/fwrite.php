<?php 
$file=fopen("hello.txt","w") or die("file does not exist");
// write only;
$txt="hello govind how are you ?\n";
$txt1="i am good how are you brijesh";
fwrite($file,$txt);
fwrite($file,$txt1);

fclose($file);
?>