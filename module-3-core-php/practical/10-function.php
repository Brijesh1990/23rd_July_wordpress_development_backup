<?php 

// what is a function?
// a function is a block of code that performs a specific task. It can be reused multiple times in a program. Functions can take input parameters and return output values.
// function should always call after defining it
// defining a function

// function display() {
    
//     $name="My name is Brijesh";
//     echo $name;
// }
// // calling a function
// display();

// function should be returned a value

// function display($name){
//     return "My name is $name"; // return statement is used to return a value from a function. It can be used to return any type of value, such as a string, number, array, etc.
// }
// echo display("Brijesh"); // calling a function with an argument. An argument is a value that is passed to a function when it is called. It can be used to provide input to the function.


// parameters and arguments
// parameters are the variables that are defined in the function definition. They are used to receive input values when the function is called. Arguments are the actual values that are passed to the function when it is called. They are used to provide input to the function.

// function add($a,$b){
//     return $a+$b;
// }
// echo add(10,20);



// types of functions
// 1. built-in functions: these are the functions that are provided by the programming language. They are pre-defined and can be used without any modification. Examples of built-in functions in PHP include strlen(), str_replace(), etc.

//list of build in function 

  // print_r(get_defined_functions()); // get_defined_functions() is a built-in function that returns an array of all the functions that are defined in the current script, including both built-in and user-defined functions.

  //var_dump()

  //echo date("Y-m-d"); // date() is a built-in function that formats a local date and time, and returns the formatted date string. The "Y-m-d" format string specifies that the date should be returned in the format of year-month-day.

  

// 2. user-defined functions: these are the functions that are defined by the user. They can be used to perform specific tasks that are not provided by the built-in functions. User-defined functions can be created using the function keyword followed by the function name and a pair of parentheses. The function body is enclosed in curly braces.

//example of user-defined function

// function meet($name) {
//     return "Hello, $name!";
// }
// echo meet("Brijesh"); // calling the user-defined function with an argument. The function will return a greeting message that includes the name provided as an argument.


// how to call a function

//  1) call by value 
//  2) call by reference

//  call by value 

//  function increment($num) {
//     $num++;
//     return $num;
//  }
// echo  increment(5); 

// calling the function with an argument. The function will return the incremented value of the argument, but it will not change the original value of the argument outside the function.



// call by reference

// function increment(&$num) { // the & symbol is used to indicate that the parameter is passed by reference. This means that any changes made to the parameter inside the function will affect the original variable outside the function.
//     $num++;

// }
// $number = 5;
// increment($number); // calling the function with an argument. The function will increment the value of the argument, and it will also change the original value of the argument outside the function.
// echo $number; // output will be 6 because the original variable $number is modified


function increment(&$num)
{
    $num++;
}
$number=10;
increment($num);
echo $number; // output will be 10 because the original variable $num is not modified, as it is passed by value to the function.




?>