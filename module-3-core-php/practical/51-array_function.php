<?php 
// $arr=array("a"=>"govind","b"=>"harmit","c"=>"vijay","d"=>"brijesh");
// array function : provides many inbuild function of array

// list of array function
// array()
// array_keys()
// array_values()
// array_count_values()
// array_combine()
// array_merge()
// array_column()
// array_flip()
// array_map()
// array_reverse()
// sort()
// asort()
// arsort()
// ksort()
// krsort()
// array_diff()
// array_sum()
// array_pop()
// array_push()
// array_shift()
// array_slice()
// array_replace()
// rand()
// rand_mt()
// is_array()
// in_array()
// array_reduce()
// array_chunk()

// print_r(array($arr));
// print_r(array_keys($arr));
// $arr=array(0=>"govind",1=>"harmit",2=>"vijay",3=>"brijesh");
// print_r(array_values($arr));

// $arr1=array(0,1,2,3,4);
// $arr2=array("brijesh","govind","rajesh","harmit","vijay");
// print_r(array_combine($arr1,$arr2));

// $arr1=array("a"=>"brijesh","b"=>"rajesh");
// $arr2=array("c"=>"krunal","b"=>"govind");
// $arr3=array("d"=>"krunal","b"=>"govind","e"=>"nilesh");
// $arr4=array("e"=>"lokesh","b"=>"govind","f"=>"ram");
// print_r(array_merge($arr1,$arr2,$arr3,$arr4));

// $arr=array(445,5454,6646,8121,65645,322132);
// print_r(array_sum($arr));

// print_r(rand(11111,99999));
// print_r(rand(1111,9999));
//print_r(rand_mt(00000,99999)); depricated

// sorting array 
//sorting is used to sort any array in assesnding and descending order 

// $arr=array("govind","harmit","vijay","brijesh");
// asort($arr);
// foreach($arr as $value)
// {
//  echo "Name is :".$value."<br>";
// }

// $arr=array("govind","harmit","vijay","brijesh");
// arsort($arr);
// foreach($arr as $value)
// {
//  echo "Name is :".$value."<br>";
// }

//$arr=array(0=>"govind",1=>"harmit",2=>"vijay",3=>"brijesh");
// ksort($arr);
// foreach($arr as $value)
// {
//  echo "Name is :".$value."<br>";
// }


// krsort($arr);
// foreach($arr as $value)
// {
//  echo "Name is :".$value."<br>";
// }


// pop : delete an array of last element 
// $arr=array("govind","harmit","vijay","brijesh");
// print_r(array_pop($arr));
// print_r($arr);

// push : add at the end of array a new element 
// $arr=array("govind","harmit","vijay","brijesh");
// print_r(array_push($arr,"rajesh"));
// print_r($arr);

// reverse a array 
$arr=array("govind","harmit","vijay","brijesh");
print_r(array_reverse($arr));



?>