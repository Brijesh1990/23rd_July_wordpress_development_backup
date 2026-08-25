<?php 
require_once("admin/functions.php");
require_once("includes/header.php");
// display cart
$customer_id=$_SESSION["customer_id"];
$shwcart=managecart('tbl_cart','tbl_addproducts','photo','pname','offerprice','pid','customer_id',$customer_id);


?>
<div class="container my-5">
  <h2 class="mb-4">🛒 Your Cart</h2>

  <div class="row">

    <!-- Cart Items -->
    <div class="col-lg-8">

      <!-- Item -->
      <div class="card mb-3 shadow-sm cart-item">
        <div class="row g-0 align-items-center">

         <?php 
         foreach($shwcart as $row)
          {
         ?>
          <div class="col-md-3">
            <img src="admin/<?php echo $row["photo"];?>" class="img-fluid w-50 rounded-start">
          </div>

          <div class="col-md-5">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row["pname"];?></h5>
              <p class="text-muted"></p>
              <h6 class="text-primary"><?php echo $row["offerprice"];?></h6>
            </div>
          </div>

          <div class="col-md-2 text-center">
            <div class="d-flex justify-content-center align-items-center">

              <button class="btn btn-outline-secondary btn-sm">−</button>
              <input type="text" value="1" class="form-control mx-2 text-center" style="width:60px;">
              <button class="btn btn-outline-secondary btn-sm">+</button>

            </div>
          </div>

          <div class="col-md-2 text-center">
            <h6><?php echo $row["subtotal"];?></h6>
            <button class="btn btn-sm btn-danger mt-2">Remove</button>
          </div>

          <?php 
          }
          ?>

        </div>
      </div>

 

    </div>

    <!-- Cart Summary -->
    <div class="col-lg-4">
      <div class="card shadow-sm p-4 summary-box">

        <h4>Summary</h4>
        <hr>

        <div class="d-flex justify-content-between">
          <span>Subtotal</span>
          <span>Rs. <?php echo $shwcart[0]["subtotal"]; ?></span>
        </div>

      

        <hr>

        <div class="d-flex justify-content-between fw-bold">
          <span>Total</span>
          <span>Rs. <?php echo $shwcart[0]["subtotal"]; ?></span>
        </div>

        <a href="checkout.php" class="btn btn-success w-100 mt-3">
          Proceed to Checkout
        </a>

      </div>
    </div>

  </div>
</div>
<?php
require_once("includes/footer.php"); 
?>