<?php 
/* 
foreach loop is used to convert array as value
array is collection of multiple values stored in a single variables 

$name=array("govind","meet","harmeet","vijay","brijesh");
print_r($name);

*/
// $name=array("govind","meet","harmeet","vijay","brijesh");
// print_r($name);
$name=array("govind","meet","harmeet","vijay","brijesh","preet","neha","hetvi");
//print_r($name[6]);

// syntax
// foreach(array as values)
// {
//     statements
// }

foreach($name as $value)
{
echo "The name is :".$value."<br>";  
}

?>