<?php

require('config.php');
require('vendor/autoload.php');

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$api = new Api($keyId, $keySecret);

$success = true;

$error = "Payment Failed";

if (empty($_GET['payment_id']) === false)
{
    try
    {
        $attributes = array(
            'razorpay_order_id' => $_GET['order_id'],
            'razorpay_payment_id' => $_GET['payment_id'],
            'razorpay_signature' => $_GET['signature']
        );

        $api->utility->verifyPaymentSignature($attributes);

    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{

    $conn = new mysqli("localhost","root","","razorepay_db");

    $payment_id = $_GET['payment_id'];
    $order_id = $_GET['order_id'];
    $signature = $_GET['signature'];

    $sql = "INSERT INTO payments
    (razorpay_payment_id, razorpay_order_id, razorpay_signature, amount, payment_status)
    VALUES
    ('$payment_id','$order_id','$signature','500','Success')";

    $conn->query($sql);

    header("Location: success.php");
}
else
{
    header("Location: payment_failed.php");
}
?>