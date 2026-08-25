<?php

// fetch details from tbl_orders using customer_id and order_id
require_once("admin/functions.php");
$customer_id = $_SESSION["customer_id"];
$payment_id = $_GET['payment_id'] ?? 'PAY'.rand(1000,9999);

// used function for fetch order details

$shworder=manageorders('tbl_orders','customer_id','payment_status',$customer_id);

$name = $shworder[0]['name'];
$amount = $shworder[0]['order_amount'];
$date = date("d M Y", strtotime($shworder[0]['order_date']));




?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Successful</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:linear-gradient(135deg,#e8fff0,#f8fffb);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    overflow:hidden;
    font-family:'Segoe UI',sans-serif;
}

.success-card{
    max-width:700px;
    width:100%;
    border:none;
    border-radius:25px;
    padding:40px;
    text-align:center;
    box-shadow:0 15px 40px rgba(0,0,0,.12);
    animation:popup .8s ease;
    position:relative;
    z-index:5;
}

.success-icon{
    width:100px;
    height:100px;
    line-height:100px;
    margin:auto;
    border-radius:50%;
    background:#28a745;
    color:#fff;
    font-size:55px;
    animation:bounce 1.5s infinite;
}

.details-box{
    background:#f8f9fa;
    border-radius:15px;
    padding:20px;
    margin-top:20px;
    text-align:left;
}

.details-box p{
    margin-bottom:10px;
}

.home-btn{
    border-radius:50px;
    padding:12px 30px;
    font-weight:600;
}

.confetti{
    position:absolute;
    width:12px;
    height:12px;
    border-radius:50%;
    animation:fall linear infinite;
}

@keyframes popup{
    from{
        opacity:0;
        transform:scale(.5);
    }
    to{
        opacity:1;
        transform:scale(1);
    }
}

@keyframes bounce{
    0%,100%{transform:translateY(0);}
    50%{transform:translateY(-8px);}
}

@keyframes fall{
    from{
        transform:translateY(-100vh) rotate(0deg);
    }
    to{
        transform:translateY(100vh) rotate(360deg);
    }
}

</style>
</head>
<body>

<!-- Confetti -->
<?php for($i=1;$i<=25;$i++){ ?>
<div class="confetti"
     style="
     left:<?php echo rand(1,100); ?>%;
     background:hsl(<?php echo rand(1,360); ?>,90%,50%);
     animation-duration:<?php echo rand(4,10); ?>s;">
</div>
<?php } ?>

<div class="card success-card">

    <img src="https://media.giphy.com/media/111ebonMs90YLu/giphy.gif"
         width="220"
         class="mx-auto d-block mb-3">

    <div class="success-icon">
        ✓
    </div>

    <h1 class="text-success fw-bold mt-4">
        Payment Successful
    </h1>

    <p class="lead text-muted">
        Thank you <strong><?php echo $shworder[0]['name']; ?></strong> for your purchase.
    </p>

    <div class="alert alert-success">
        Your payment has been completed successfully.
    </div>

    <div class="details-box">

        <p>
            <strong>Order ID :</strong>
            <?php echo $shworder[0]['order_id']; ?>
        </p>

        <p>
            <strong>Payment ID :</strong>
            <?php echo $payment_id; ?>
        </p>

        <p>
            <strong>Customer :</strong>
            <?php echo $shworder[0]['name']; ?>
        </p>

        <p>
            <strong>Amount Paid :</strong>
            ₹<?php echo number_format($shworder[0]['order_amount'],2); ?>
        </p>

        <p>
            <strong>Payment Status :</strong>
            <span class="badge bg-success">
                Paid
            </span>
        </p>

        <p>
            <strong>Date :</strong>
            <?php echo $date; ?>
        </p>

    </div>

    <div class="mt-4">

        <a href="index.php"
           class="btn btn-success home-btn">
            🏠 Go To Home Page
        </a>

        <a href="my-orders.php"
           class="btn btn-outline-success home-btn">
            📦 View Orders
        </a>

    </div>

    <div class="mt-4 text-muted">
        Need help?
        Contact our support team for assistance.
    </div>

</div>

</body>
</html>