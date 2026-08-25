<?php 
// current data
$price=1500;
// // check in date...
// $chkInDate=mktime(0,0,0,date("m"),date("d"),date("y"));
// echo ("Today the date is :".date("d.m.y",$chkInDate));

// day after tommarow ..
// $chkInDate=mktime(0,0,0,date("m"),date("d")+2,date("y"));
// echo ("Today the date is :".date("d.m.y",$chkInDate));

$chkInDate=mktime(0,0,0,date("m"),date("d"),date("y"));
$chkOutDate=mktime(0,0,0,date("m"),date("d")+2,date("y"));
$diff=($chkOutDate-$chkInDate)/86400;
//echo $diff;
//echo $res*$price;
echo "Total bill is :".$diff*$price;


?>