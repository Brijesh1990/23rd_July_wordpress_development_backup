<?php 

function ac()
{
    $radius=5;
    $area=pi()*pow($radius,2); // pi() is a built-in function that returns the value of pi, and pow() is a built-in function that returns the result of raising a number to a power. In this case, it is used to calculate the area of a circle by raising the radius to the power of 2.
    return $area; // return statement is used to return a value from a function. It
}
echo ac(); // calling a function with an argument. An argument is a value that is passed to a function when it is called. It can be used to provide input to the function.

?>