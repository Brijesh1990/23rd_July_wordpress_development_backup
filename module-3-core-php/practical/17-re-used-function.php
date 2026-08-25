<?php 
function display($num)
{
   return $num * $num; // return statement is used to return a value from a function. It can be used to return any type of value, such as a string, number, array, etc.
}

?>

<?php
function sq()
{
    $num = 144;
    return sqrt($num); // return statement is used to return a value from a function. It can be used to return any type of value, such as a string, number, array, etc.
}
?>

<?php
function simplInterest($principle,$rate,$time)
{
  return ($principle*$rate*$time)/100; // return statement is used to return a value from a function. It can be used to return any type of value, such as a string, number, array, etc.
}
?>

<?php
function compundInterest($principle,$rate,$time)
{
  return $principle * pow((1 + $rate / 100), $time); // return statement is used to return a value from a function. It can be used to return any type of value, such as a string, number, array, etc.
}   

?>

<html>
    <head>
        <title>Re-Used Function</title>
     
        <style>
               /* CSS styles for the container */
            .container {
                width: 50%;
                margin: auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #f9f9f9;
            }
            h1 {
                text-align: center !important;
                color: #333;
            }
            p {
                  text-align: center !important;
                font-size: 18px;
                color: #555;
            }
        </style>
    </head>
<body>
    <div class="container">
    <h1>Re-Used Function</h1>
    <p>Square of 5 is: <?php echo display(5); ?></p>
    <p>Square root of 144 is: <?php echo sq(); ?></p>
    <p>Simple Interest is: <?php echo simplInterest(500000,5,2); ?></p>
    <p>Compound Interest is: <?php echo compundInterest(500000,5,2); ?></p>
    </div>
</body>
</html>