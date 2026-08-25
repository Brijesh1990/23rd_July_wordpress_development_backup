<?php
//check max numbers among three numbers take input from users using function
$n1=500;
$n2=500;
$n3=100;
if($n1>$n2 && $n1>$n3)
{
echo "N1 is max numbers among Three Numbers";
}
elseif($n2>$n1 && $n2>$n3)
{
echo "N2 is max numbers among Three Numbers";
} 
elseif($n3>$n1 && $n3>$n2)
{
echo "N3 is max numbers among Three Numbers";
}
else 
{
 echo "something went wrong please input proper number to check condition";   
}    



?>