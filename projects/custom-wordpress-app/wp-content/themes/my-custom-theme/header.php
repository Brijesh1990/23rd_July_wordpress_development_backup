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
<?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-expand-lg site-navbar">
<div class="container"><a class="navbar-brand text-white" href="index.html"><span class="brand-bag">🛍️</span>
ShopHub</a><button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
data-bs-target="#mainNav"><span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="mainNav">
<ul class="navbar-nav ms-auto">
<li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
<li class="nav-item"><a class="nav-link" href="products.html">Products</a></li>
<li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
<li class="nav-item"><a class="nav-link" href="account.html">Account</a></li>
<li class="nav-item"><a class="nav-link" href="cart.html">Cart (0)</a></li>
</ul>
</div>
</div>
</nav>
