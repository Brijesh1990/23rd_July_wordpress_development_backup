<?php 
/*
 date function is inbuild function in php
 date provides a current date | future date and past date 
 date and time used to print current date of systems 
 date provides some formate ...

 1) date('d/m/y')
 2) date('d.m.y')
 3) date('d-m-y')


*/
//  echo date('d/m/y')."<br>";
//  echo date('d.m.y')."<br>";
//  echo date('d-m-y')."<br>";
//  echo Date('d/m/Y')."<br>";
 
// partial case senstive

// type of date function

// date()
// mktime()
// strtotime()
// strftime()


// date : print current data & time 

// for print date 
//  echo date('d/m/y')."<br>";
//  echo date('d.m.y')."<br>";
//  echo date('d-m-y')."<br>";
//  echo Date('d/m/Y')."<br>";


// for print time 
// unix timestamp 

// print time via timezone
//date_default_timezone_set("Asia/Calcutta");
// echo "The time is it :".date("H:i:s a"); 24 hours
//echo "The time is it :".date("h:i:s a");// 12 hours 
// H:hour
// i:minute
// s:second
// a: am|pm

// used of mktime(hours,minute,second,date(m),date(d),date(y))
// mktime() print current | future | past date & time

// $date=mktime(00,00,00,date('m'),date('d'),date('Y'));
// echo "Current date is :".date("d/m/Y",$date);

// tommarow

// $date=mktime(00,00,00,date('m'),date('d')+1,date('Y'));
// echo "Tommarow date is :".date("d/m/Y",$date);


// after 5 days 2 month 1 years the date is 
// $date=mktime(00,00,00,date('m')+2,date('d')+5,date('Y')+1);
// echo "The date is :".date("d/m/Y",$date);

// before 5 days 2 month 1 years the date is  
// $date=mktime(00,00,00,date('m')-2,date('d')-5,date('Y')-1);
// echo "The date is :".date("d/m/Y",$date);

// find the difference b/w 2 days 

// $today=mktime(00,00,00,date('m'),date('d'),date('Y'));
// $tommarow=mktime(00,00,00,date('m'),date('d')+1,date('Y'));
// $result=($tommarow-$today)/86400;
// echo $result;

// strtotime() : this is convert any string to date formate

// echo "Tommarow the date is :".date("d/m/Y",strtotime("+1 day"));

// echo "the date is :".date("d/m/Y",strtotime("+15 day"))."<br>";
 
// echo "the date is :".date("d/m/Y",strtotime("+15 month"));
 
// strftime : this is used to convert string to date formate 


// convert in fomate of date
// echo ("%d/%m/%y");  

// echo strftime("%d/%m/%y")."<br>";

// echo strftime("%d/%m/%Y")."<br>";  

// parameter in date functions

// set the default timezone to use.
date_default_timezone_set('Asia/Calcutta');

// Prints something like: Monday
//echo date("l") . "\n";

// Prints something like: Monday 8th of August 2005 03:12:46 PM
//echo date('l jS \of F Y h:i:s A') . "\n";

// Prints: July 1, 2000 is on a Saturday
// echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)) . "\n";


// name of day 
// echo date("l")."<br>";
// echo date("D")."<br>"; // sort form of day

// the day with th jS \of
// echo date("jS \of");

// echo date("jS \of F");

// echo date("jS \of F Y H:i:s A");

// 19 october 1990 

echo "The date of my birthday :".date("l", mktime(0, 0, 0, 10, 19, 1990)) . "\n"



// create a login page and applied simple logged in with email and password and print on welcome.php your logged in time and date.


?>