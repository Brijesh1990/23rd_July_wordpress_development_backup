<?php 
// define plugins path
if(!defined('ABSPATH'))
{
exit;
}
/* 

---------create a mysqli connection--------------------- 

*/ 
$mysqli=new mysqli(

DB_HOST,
DB_USER,
DB_PASSWORD,
DB_NAME

);

if(mysqli->connect_error)
{
die('Database connection failed :' .$mysqli->connect_error);
}

// ---------table schema add ------------------
$table=$GLOBALS['wpdb']->prifix .'wp_';

//  add teams 

//  manage teams 

//  edit teams 

//  delete teams 

// close the connection 
mysqli_close();

?>