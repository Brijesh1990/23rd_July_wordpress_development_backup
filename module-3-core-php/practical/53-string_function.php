<?php 
// $name="brijesh pandey";
// $str='hi i am brijesh';
// $str1="15451201";
// echo $name."<br>".$str."<br>".$str1;

// list of string function 
// str_repeat()
// strlen()
// strpos()
// base64_encode()
// base64_decode()
// implode()
// explode()
// strtoupper()
// strtolower()
// md5()
// strstr()
// stristr()
// str_replace()
// str_shuffle()
// ucfirst()
// ucwords()
// trim()
// ltrim()
// rtrim()

// examples of function 

// $str="hey i am brijesh";
// find the length of string 
// echo strlen($str);

// find the position of string
// echo strpos("tops technology","tops");
// echo strpos("tops technology","technology");

// string lower case | uppercase | first letter uppercase 

// $str="hey i am brijesh";
// echo strtoupper($str);

// $str="HEY I AM BRIJESH";
// echo strtolower($str);

// $str="hey i am brijesh";
// echo ucwords($str);

// $str="hey i am brijesh";
// echo ucfirst($str);

// strstr
// echo strstr("hello world","world");
// echo strstr("hello world","hello");
// echo strstr("hello world","l");
// strstr is a case sensitive
// echo strstr("hello world","hello");

// stristr not case sensitive 
//echo stristr("hello world","Hello");

// shuffle 

// $str="brijesh";
// echo str_shuffle($str);

// $str="ABCDEFGH123456789";
// echo str_shuffle($str);

// $str="brijesh";
// echo strrev($str);  


// encode 
// $str="brij$$123456789";
// echo base64_encode($str);

// decode 
// $str="YnJpaiQkMTIzNDU2Nzg5";
// echo base64_decode($str);


// $str="brij&&321";
// echo md5($str);


// implode : implode is used to convert any array into string 

// $arr=array("brijesh","rajesh","vijay","govind","harmit");
// print_r(implode(" ",$arr));


// explode : is used to convert string in to array 

// $str="hi i am brijesh";
// print_r(explode(" ",$str));


// trim : trim a string from both side left and right

// echo trim("tops technology","technology");
// $str="Brijesh pandey";
// echo trim($str,"pandey");
// echo trim($str,"Brijesh");
// echo ltrim($str,"Brijesh");
// echo rtrim($str,"Brijesh");
// echo trim($str,"Brijesh");

$str="pandey";
echo trim($str,"aey");


?>