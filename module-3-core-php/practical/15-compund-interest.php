<?php 
function compundInterest($principle,$rate,$time)
{
  return $principle * pow((1 + $rate / 100), $time); // return statement is used to return a value from a function. It can be used to return any type of value, such as a string, number, array, etc.
}

echo compundInterest(500000,5,2); // calling a function with an argument. An argument is a value that is passed to a function when it is called. It can be used to provide input to the function.


?>