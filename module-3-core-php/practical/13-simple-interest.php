<?php 
function simplInterest($principle,$rate,$time)
{
  return ($principle*$rate*$time)/100; // return statement is used to return a value from a function. It can be used to return any type of value, such as a string, number, array, etc.
}

echo simplInterest(500000,5,2); // calling a function with an argument. An argument is a value that is passed to a function when it is called. It can be used to provide input to the function.

?>