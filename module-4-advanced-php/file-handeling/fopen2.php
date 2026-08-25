<?php 
$file=fopen("ajax.txt","r+") or die("file does exist please check");
if($file)
{
echo "file opened successfully";
}
else 
{
echo "filed does not exist";
}


?>