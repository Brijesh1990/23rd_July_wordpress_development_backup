# What is php ?

## Definition 
    
   1. php stands for personal home page in 1994
   2. php is now stands for php:hypertext preprocessor
   3. php is first time release in in 1994 by rasmus landroef 
   4. php server side scripting language 
   5. php run on apache  server using some server tools

        types of server tool in php

        1. wamp 
              1. w : windows
              2. a : apache(server)
              3. m : mysql
              4. p : perl
        2. xampp
              1. x : cross plateform(support all OS)
              2. a : apache(server)
              3. m : mysql
              4. p : perl
              5. p : php
        3. lamp  
              1. l : linux/unix
              2. a : apache(server)
              3. m : mysql
              4. p : perl
   6. php support all os
   7. php support all server 
      examples : apache | tomcat | IIS
   8. php support all database also 
      examples: mysql | mongoDB | oracle | cybase | sql server etc.

   9.  php is one of most popular server side language 
   10. php create a dynamic website 
   11. php file extension .php or .php3 or .phtml
   12. php is open source language 
       example : open source meanse avaiale free without any licence


   **how to start php**
   
   php start with its extension with .php 

   1. standard delimeter 
      ```
      <?php  
      statements;
      ?> 
      ```  

   2. direct output  delimeter 
      ```
      <?=  
      statements;
      ?>   
      ```

## what is operator in php

  A operator is used to perform any operation on its values and variables there we used operator 

   **types of oeperator**
   1. airtmatic operator 
      **examples**
      ```
      + , - , * , / , %
      ``` 
    2. Relational or comparison operator 
       **examples**
      ```
      >, >= , < , <= , ===
      ```    

    3. assingment operator 
     
       **examples**
      ```
      ==, =, != , +=, -=, *=, /= , %=  
      ```

     
    4. ternary operator 
     
       **examples**
      ```
      ? :  
      ```

      
    5. increment/decrement operator 
     
       **examples**
      ```
      ++ , -- 
      ```
      
    6. string concatenate operator 
     
       **examples**
      ```
       .
      ```
      7. logical operator 

        **examples**

        ```
        && , ||, !
        
        ```
## what is variable in php
   
   1. A variable is used to stored an  information about data there we used variables.

   2. A variable is assinged in php by $ symbol

      **examples**

      ```
       <?php 
     $a=10;
     $b=20;
     $name="Brijesh";
     $c=10.56;
     $d=114545656565;
     $e=true;

     echo $a."<br>".$b."<br>".$name;

      ?>
      ```

## Rules to assign any variables
   
   1. any variable in php start with $ symbol
   2. any variables start with character $name can not start with number
   3. any variables in php does not accept space $a b=10
   4. any variables does not start with white space $ a=10
   5. any variables did  start with underscore $_a=10
   6. any variables does not start with reserved keyword 


   ```
   <?php 
   // $a=10;
   // $b=20;
   // $name="Brijesh";
   // $c=10.56;
   // $d=114545656565;
   // $e=true;
   // echo $a."<br>".$b."<br>".$name;


   // $a=10;
  // echo $a;

  // $ab=10;

  // _$a=10

  $name="hi i am brijesh";
  echo $name;
  ?>

   ```

## data types in variables

   A data types is used to stored which type of value in variables i.e called data types 

   **types of data type**
   1. int 
   2. string 
   3. float 
   4. undefined 
   5. boolean 
   6. null

   ```
  <?php

  $a=10; //int
  $b=20; //int
  $name="Brijesh"; //string
  $c=10.56;   //float
  $d=114545656565; //int
  $e=true; //boolean
  //$f;
  $g=null;

  echo $a."<br>".$b."<br>".$name."<br>";
  echo var_dump($e)."<br>";
  echo var_dump($c);
  //echo $f;
  echo var_dump($g);
  // 
   ?>
  ```
## examples of operator

  ```
 // examples of operator 
 $a=10;
 $b=5;
// airthematic operator

// echo $a+$b."<br>";
// echo $a-$b."<br>";
// echo $a*$b."<br>";
// echo $a/$b."<br>";
// echo $a%$b."<br>";

// relational or comparison operator

// echo ($a > $b)."<br>";
// echo ($a >= $b)."<br>";
// echo ($a < $b)."<br>";
// echo ($a <= $b)."<br>";
// echo ($a != $b)."<br>";

// ternary operator (conditional operator)
// without condition check true or false or conditional operator
 
// $age=10;
// $res=$age>=18?"i am adult":"i am child";
// echo $res;


// true both assinged same values with data types  
// $a=10;
// $b=5;
// echo ($a && $b);

// true
// $a=10;
// $b=5;
// echo ($a || $b);


// false 
// $a=10;
// $b=5;
// echo (! $a);


// increments / decrement 

// $i=10;
// // $i++;
// $i=$i+1;
// echo $i;


// $i=10;
// $i--;
// echo $i;


// $i=10;
// ++$i;
// echo $i;


$i=10;
--$i;
echo $i;

  ```

## comments in php

   A comment is used to explain the code and make it more readable there we used comments 

   **types of comments**

   1. single line comment 
      **examples**
      ```
      // this is single line comment 
      # this is also single line comment 
      ```

   2. multi line comment 
      **examples**
      ```
      /* this is an examples of multi line comment
      this is also an examples of multi line comment
      this is also an examples of multi line comment
      */
      ``` 
   
## var_dump() 
   This is an inbuild method of php that can be used to print all description about variables.

   This is also called variables handeling function in php 

   **examples**
   ```
   <?php  
   $a=10;
   $b=20.56;
  $c="brijesh pandey";
  $d=true;
  $e=false;
  $f=null;

  // echo $a."<br>".$b."<br>".$c."<br>".$d."<br>".$e."<br>".$f."<br>";
  echo var_dump($a)."<br>";
  echo var_dump($b)."<br>";
  echo var_dump($c)."<br>";
  echo var_dump($d)."<br>";
  echo var_dump($e)."<br>";
  echo var_dump($f)."<br>";

  ?>
```

## differnece between echo and print in php

   1. echo is faster than print 
   2. echo can take multiple parameters but print can take only one parameter 
   3. echo does not return any value but print return 1 value 
   4. echo is more commonly used than print in php

   **examples**
   ```
   <?php
   // echo "hello world";
   // print "hello world";
   // echo "hello","world";
   // print "hello","world"; // this will give error because print can take only one parameter
   // echo (print "hello world"); // this will give 1 because print return 1 value
   // print (echo "hello world"); // this will give error because echo does not return any value
   ?>
   ```

## function in php 

   A function is a block of code that can be used to completed any task.
   **syntax of function**
   ```
  function function_name()
  {
   // statements
  }
  call function by its name
  function_name();

  ```
   
   **advantages of function**
   1. code reusability
   2. modularity
   3. better readability
   4. easy to debug



   **types of function**
   1. inbuild function
   2. user defined function



## variables handeling function in php 

 1. var_dump() : this function is used to print all description about variables
 2. isset() : this function is used to check whether a variable is set or not on server
 3. export() : this function is used to export a variable as a string
 4. empty() : this function is used to check whether a variable is empty or not
 5. unset() : this function is used to destroy a variable



## what is  php statements  ?

  A php statements used conditional and looping statements 
  A php can check true and false there we used conditional statements
  A php can print numbers of iteration again and again or repeatation of numbers there we applied loop  

  **conditional statements**

  1. if 
  2. if else
  3. nested if 
  4. if elseif 
  5. switch 


  **looping statements**

  1. for
  2. foreach
  3. while 
  4. do while 

  **loop control statements**

  1. break
  2. continue


## what is array ?
   An array is collection of multiple data will stored in a single variables
   or 
   An array stored multiples data in a single variables i.e called array

   Note : array will stored data in key=>value

   **types of array**   
   1. numeric array or index array
   2. associative array
   3. multidimensional array 

   ```
     // how to declared array 
    $arr=array("govind","harmit","vijay");
   // array print always with print_r()
   // array  will stored data key=>value
   // array is start to stored on zero index
   print_r($arr);
   // output
   // Array ( [0] => govind [1] => harmit [2] => vijay ) 
   // print govind 
   print_r($arr[0]);

   ```