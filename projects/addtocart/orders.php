<?php 
require_once("functions.php");
require_once("includes/header.php");
?>

<div class="container my-5 text-center">

  <!-- Success Icon -->
  <div class="success-icon mb-4">
    ✓
  </div>

  <h2 class="text-success">Order Confirmed!</h2>
  <p class="text-muted">Thank you for your purchase. Your order has been successfully placed.</p>

  <!-- Order Details -->
  <div class="card p-4 shadow-sm mt-4 mx-auto" style="max-width:500px;">

    <h5>Order Summary</h5>
    <hr>

    <div class="d-flex justify-content-between">
      <span>Order ID:</span>
      <strong>#12345</strong>
    </div>

    <div class="d-flex justify-content-between">
      <span>Total Amount:</span>
      <strong>$1384</strong>
    </div>

    <div class="d-flex justify-content-between">
      <span>Payment Method:</span>
      <strong>Cash on Delivery</strong>
    </div>

    <div class="d-flex justify-content-between">
      <span>Delivery:</span>
      <strong>3-5 Days</strong>
    </div>

  </div>

  <!-- Buttons -->
  <div class="mt-4">
    <a href="index.html" class="btn btn-primary me-2">Continue Shopping</a>
    <a href="#" class="btn btn-outline-dark">View Orders</a>
  </div>

</div>


<?php
require_once("includes/footer.php"); 
?>