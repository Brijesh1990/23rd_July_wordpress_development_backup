<?php

require('config.php');
require('vendor/autoload.php');

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

$orderAmount = 500; // INR

$orderData = [
    'receipt'         => 'rcptid_11',
    'amount'          => $orderAmount * 100, // paise
    'currency'        => 'INR',
    'payment_capture' => 1
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

<h2>Online Payment Only</h2>

<p>Total Amount: ₹<?php echo $orderAmount; ?></p>

<button id="rzp-button1">Pay Now</button>

<script>

var options = {
    "key": "<?php echo $keyId; ?>",
    "amount": "<?php echo $orderAmount * 100; ?>",
    "currency": "INR",
    "name": "My Store",
    "description": "Order Payment",
    "image": "https://yourlogo.com/logo.png",
    "order_id": "<?php echo $razorpayOrderId; ?>",

    "handler": function (response){

        window.location.href =
        "verify.php?payment_id=" + response.razorpay_payment_id +
        "&order_id=" + response.razorpay_order_id +
        "&signature=" + response.razorpay_signature;

    },

    "prefill": {
        "name": "Customer Name",
        "email": "customer@example.com",
        "contact": "9999999999"
    },

    "theme": {
        "color": "#3399cc"
    },

    "modal": {
        "ondismiss": function(){
            window.location.href = "payment_cancelled.php";
        }
    }
};

var rzp1 = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}

rzp1.on('payment.failed', function (response){

    window.location.href = "payment_failed.php";

});

</script>

</body>
</html>