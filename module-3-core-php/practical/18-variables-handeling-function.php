<?php 
// variables handeling function in php

// 1. var_dump() : this function is used to print all description about variables
// 2. isset() : this function is used to check whether a variable is set or
// 3. export() : this function is used to export a variable as a string
// 4. empty() : this function is used to check whether a variable is empty or
// 5. unset() : this function is used to destroy a variable


// echo "var_dump() function <br>";
// $a=10;
// echo var_dump($a);

echo "isset() function <br>";
$a=10;
echo isset($a); // this will return true because variable is set on server
echo isset($b); // this will return false because variable is not set on server


?>