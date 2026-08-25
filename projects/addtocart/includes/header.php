<!DOCTYPE html>
<html>
<head>
<title>MyShop</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
/* Sticky Header (your original style kept) */
.sticky-nav {
  top: 0;
  position: sticky !important;
  z-index: 10 !important;
  box-shadow: 0 2px 10px rgba(0,0,0,0.15);
}

body {
  margin: 0;
}

/* Sidebar links */
.offcanvas-body a {
  text-decoration: none;
  color: #333;
  font-weight: 500;
  display: block;
  padding: 8px 0;
}

.offcanvas-body a:hover {
  color: #0d6efd;
}
</style>

</head>

<body>

<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm sticky-nav">
  <div class="container-fluid">
    <!-- MOBILE HAMBURGER -->
    <button class="navbar-toggler d-lg-none" type="button"
      data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- LOGO -->
    <a class="navbar-brand fw-bold" href="#">
      🛒 MyShop
    </a>
    <!-- DESKTOP SEARCH -->
    <form class="d-none d-lg-flex mx-auto w-50">
      <input class="form-control me-2" type="search" placeholder="Search products...">
      <button class="btn btn-warning">Search</button>
    </form>

    <!-- DESKTOP MENU -->
    <div class="d-none d-lg-flex align-items-center ms-auto">

      <a class="nav-link text-white" href="index.php">Home</a>
       <?php
    if(!isset($_SESSION["customer_id"]))
      { 
    ?>
      <a class="nav-link text-white" href="account.php">Account</a>
      <?php 
      }
      else 
       {
        ?>
     
    <div class="dropdown">
    
    <a class="nav-link dropdown-toggle text-white"
       href="#"
       id="userDropdown"
       role="button"
       data-bs-toggle="dropdown"
       aria-expanded="false">
       
       Welcome : <?php echo $_SESSION["email"]; ?>
    </a>

    <ul class="dropdown-menu dropdown-menu-end"
        aria-labelledby="userDropdown">

        <li>
            <a class="dropdown-item"
               href="manage-notifications.php">
                🔔 Manage Notifications
            </a>
        </li>

        <li>
            <a class="dropdown-item"
               href="change-password.php">
                🔑 Change Password
            </a>
        </li>

        <li><hr class="dropdown-divider"></li>

        <li>
            <a class="dropdown-item text-danger"
               href="index.php?logoutid">
                🚪 Logout
            </a>
        </li>

    </ul>
</div>
     
     <?php 
       }
       ?>

      <a class="nav-link text-white position-relative" href="cart.php">
        🛒 Cart
        <span class="position-absolute top-2 start-80 translate-middle badge bg-danger">
          <?php
          if(isset($_SESSION["customer_id"]))
            {
          $customer_id=$_SESSION["customer_id"];
          $total=selectCountData('tbl_cart','cartid','customer_id',$customer_id);
          echo $total[0]["total"]; 
            }
            else 
              {
          ?>
          
          0
          <?php 
              }
              ?>
        </span>
      </a>

    </div>

  </div>
</nav>

<!-- ================= OFFCANVAS SIDEBAR ================= -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">

  <div class="offcanvas-header bg-primary text-white">
    <h5 class="offcanvas-title">MyShop Menu</h5>

    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>

  <div class="offcanvas-body">

    <a href="index.php">🏠 Home</a>
    <?php
    if(!isset($_SESSION["customer_id"]))
      { 
    ?>
    <a href="account.php">👤 Account</a>

 
    <?php 
      }
      else 
      {
        ?>  
       <a href="account.php">Welcome :<?php echo $_SESSION["email"];?></a>
      <a href="index.php?logoutid">👤 Logout</a>
          
   <?php 
      }
      ?>
    <a href="cart.php">🛒 Cart (3)</a>
      <hr>

    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search products...">
      <button class="btn btn-primary">Search</button>
    </form>

  </div>
</div>

</body>
</html>