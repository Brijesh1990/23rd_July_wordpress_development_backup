<?php

session_start();
require_once("admin/functions.php");

$payment_id = $_GET['payment_id'];
$order_id   = $_GET['order_id'];

$name     = $_SESSION['checkout_name'];
$mobile   = $_SESSION['checkout_mobile'];
$email    = $_SESSION['checkout_email'];
$address  = $_SESSION['checkout_address'];
$city     = $_SESSION['checkout_city'];
$pincode  = $_SESSION['checkout_pincode'];

$total    = $_SESSION['grand_total'];

mysqli_query($conn,"
INSERT INTO tbl_orders
(
customer_id,
name,
mobile,
email,
address,
city,
pincode,
payment_id,
order_amount,
payment_status,
order_date
)
VALUES
(
'".$_SESSION['customer_id']."',
'$name',
'$mobile',
'$email',
'$address',
'$city',
'$pincode',
'$payment_id',
'$total',
'Paid',
NOW()
)
");

unset($_SESSION['checkout_name']);
unset($_SESSION['checkout_mobile']);
unset($_SESSION['checkout_email']);
unset($_SESSION['checkout_address']);
unset($_SESSION['checkout_city']);
unset($_SESSION['checkout_pincode']);
unset($_SESSION['grand_total']);

header("Location: order-success.php");
exit;
?>