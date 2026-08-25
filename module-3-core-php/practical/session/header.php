<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>TOPS Career Center Login</title>
<!-- Tailwind CSS v4 CDN -->
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-100 to-slate-200">
<header class="bg-white shadow-md  w-full z-50">
  <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
    
    <!-- Left Section -->
    <div class="flex items-center gap-4">
      
      <!-- Hamburger -->
      <button id="menuBtn" class="md:hidden text-gray-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <!-- Logo -->
      <div class="flex items-center gap-2">
        <div class="w-8 h-8 bg-blue-600 rounded-md"></div>
        <h1 class="text-lg md:text-xl font-bold text-blue-600">
          TOPS Technologies
        </h1>
      </div>
    </div>

    <!-- Right Navigation -->
    <nav class="hidden md:flex items-center gap-4">
      <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Home</a>
      <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">About</a>
      <?php 
      if(!isset($_SESSION["email"]))
        {
      ?>
      <!-- Login Button -->
      <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
        Login
      </button>
      <?php 
        }
        else 
        {
        ?>    
      <!-- Logout Button -->
      <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Add employee</a> 
      <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Manage employee</a> 
      <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Manage Orders</a> 
      <a href="logout.php" onclick="return confirm('Are you sure to logout as users ?')"><button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
        Logout
      </button></a>
      <?php 
        }
      ?>
    </nav>

  </div>
</header>

<!-- SIDEBAR -->
<aside id="sidebar"
  class="fixed top-0 left-0 h-full w-64 bg-white shadow-lg transform -translate-x-full transition-transform duration-300 z-40">

  <div class="p-5 border-b flex justify-between items-center">
    <h2 class="font-bold text-lg text-blue-600">Menu</h2>
    <button id="closeBtn" class="text-gray-600 md:hidden">✕</button>
  </div>

  <nav class="p-5 space-y-4">
    <a href="#" class="block text-gray-700 hover:text-blue-600">Dashboard</a>
    <a href="#" class="block text-gray-700 hover:text-blue-600">Profile</a>
    <a href="#" class="block text-gray-700 hover:text-blue-600">Settings</a>

    <hr>

    <button class="w-full text-left px-3 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
      Login
    </button>

    <button class="w-full text-left px-3 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
      Logout
    </button>
  </nav>
</aside>

<!-- Overlay -->
<div id="overlay"
  class="fixed inset-0 bg-black/40 hidden z-30"></div>

<!-- content here -->

<!-- SCRIPT -->
<script>
  const menuBtn = document.getElementById("menuBtn");
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");
  const closeBtn = document.getElementById("closeBtn");

  menuBtn.addEventListener("click", () => {
    sidebar.classList.remove("-translate-x-full");
    overlay.classList.remove("hidden");
  });

  closeBtn.addEventListener("click", closeSidebar);
  overlay.addEventListener("click", closeSidebar);

  function closeSidebar() {
    sidebar.classList.add("-translate-x-full");
    overlay.classList.add("hidden");
  }
</script>