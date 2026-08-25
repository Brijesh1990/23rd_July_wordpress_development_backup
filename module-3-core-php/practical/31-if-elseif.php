<?php 
/* if elseif : if is executed when condition is true elseif is executed to check multiple true  condition if elseif is false else is  executed
syntax 

if(condition)
{
statements;
}
elseif(condition) 
{
statements; 
}
elsif(condition)
{
statements;
}
else 
{
statements; 
}

*/
$a=20;
$b=20;
if($a>$b)
{
echo "a is greater than b";
}
elseif($b>$a) 
{
echo "b is greater than a";
}
else 
{
echo "a and b both are equal";
}

?>