<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Everything delivered in a minutes in all cities clickIt App </title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- main css -->
<link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
<!-- icons cdn -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<!-- tailwinds js  -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<!-- modal js -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
<!-- main js  -->
<script src="js/main.js"></script> 
</head>
<body onload="mainContent()">
<!--loader load here -->
<div id="loader"></div>
<section id="main-content">    
<!-- clickIt header here -->
<section id="clickIt-header" class="sticky top-0 z-10 bg-white shadow">
<!-- HEADER BAR -->
<div class="flex items-center justify-between p-4 md:grid md:grid-cols-4">
<!-- LOGO -->
<div class="flex items-center justify-between w-full md:w-auto">
<h1 class="text-5xl font-extrabold animate-bounce">
<a href="index.php"><span class="text-yellow-500">Click</span>
<span class="text-green-500">IT</span></a>
</h1>
<!-- MOBILE TOGGLER -->
<button
id="menu-btn"
class="md:hidden text-3xl"
onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
>
☰
</button>
</div>

<!-- DELIVERY (DESKTOP) -->
<div class="hidden md:flex items-center">
<button
type="button"
command="show-modal"
commandfor="dialog2"
class="text-xl font-medium"
>
Delivery in 8 minutes
</button>
</div>

<!-- SEARCH (DESKTOP) -->
<div class="hidden md:flex">
<input
type="text"
placeholder="Search products here..."
class="border-2 border-gray-300 rounded-3xl w-full p-2"
/>
</div>
<!-- LOGIN & CART (DESKTOP) -->
<div class="hidden md:flex gap-4 items-center ms-20">
<button
type="button"
command="show-modal"
commandfor="dialog1"
class="text-xl font-bold"
>
Login
</button>
<button
type="button"
class="p-3 bg-gray-400 rounded-2xl text-white font-bold"
>
<span class="bi bi-cart3"></span> My Cart
</button>
</div>
</div>

<!-- MOBILE MENU -->
<div id="mobile-menu" class="hidden md:hidden border-t border-gray-200 p-4 space-y-4">
<!-- DELIVERY -->
<button
type="button"
command="show-modal"
commandfor="dialog2"
class="block text-lg font-medium"
>
Delivery in 8 minutes
</button>

<!-- SEARCH -->
<input
type="text"
placeholder="Search products here..."
class="border-2 border-gray-300 rounded-3xl w-full p-2"
/>

<!-- LOGIN -->
<button
type="button"
command="show-modal"
commandfor="dialog1"
class="block text-lg font-bold"
>
Login
</button>
<!-- CART -->
<button
type="button"
class="w-full p-3 bg-gray-400 rounded-2xl text-white font-bold"
>
<span class="bi bi-cart3"></span> My Cart
</button>
</div>
</section>