<?php 
/** 
 * Theme header
 * 
 * @package of my-custom-theme
 * 
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>ShopHub - Home</title>
<!-- wp_head() load your all assets via functions.php -->
<?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-expand-lg site-navbar">
<!-- logo -->
<div class="container">

<a class="navbar-brand text-white" href="index.html"><span class="brand-bag">🛍️</span>
ShopHub</a><button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
data-bs-target="#mainNav"><span class="navbar-toggler-icon"></span></button>
<!-- main navbar -->
<div class="collapse navbar-collapse" id="mainNav">
<!-- load dynamic and custom navbar -->
<?php 
// create a function to load or display dynamic navbar
wp_nav_menu(
 
   array(
      'theme_location' =>'primary_menu', 
      'container'      =>false,
      'menu_class'     =>'navbar-nav ms-auto',
      'fallback_cb'    =>false,
      'depth'          =>3,

   )
);
?>
</div>
<!-- navbar end here -->
</div>
</nav>
