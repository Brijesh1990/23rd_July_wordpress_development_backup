<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>User Management Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen">
<!-- Header -->
<nav class="bg-white shadow px-6 py-4 flex items-center justify-between">

<!-- Left Section -->
<div class="flex items-center gap-4">
<button id="menuBtn" class="text-gray-700 md:hidden text-2xl">
☰
</button>

<h1 class="text-xl font-bold">User Management</h1>
</div>

<!-- Right Section -->
<div class="relative">

<button id="adminBtn" class="flex items-center gap-2 bg-slate-100 px-4 py-2 rounded hover:bg-slate-200">
Welcome:<?php echo $_SESSION["fullname"];?>
<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
</svg>
</button>

<!-- Dropdown -->
<div id="adminDropdown" class="hidden absolute right-0 mt-2 w-40 bg-white border rounded shadow">

<a href="manageprofile.php" class="block px-4 py-2 hover:bg-slate-100">
Profile
</a>

<a href="changepassword.php" class="block px-4 py-2 hover:bg-slate-100">
change Password
</a>

<hr>

<a href="logout.php?logout_here" onclick="return confirm('Are you sure to logout ?')" class="block px-4 py-2 text-red-500 hover:bg-red-50">
Logout
</a>

</div>

</div>

</nav>

<!-- Sidebar -->
<div id="sidebar"
class="fixed top-0 left-0 h-full w-64 bg-white shadow transform -translate-x-full transition-transform duration-300 md:translate-x-0">

<div class="p-5 border-b font-bold text-lg">
Dashboard
</div>

<ul class="p-4 space-y-3">

<li><a href="#" class="block p-2 rounded hover:bg-slate-100">Dashboard</a></li>
<li><a href="#" class="block p-2 rounded hover:bg-slate-100">Users</a></li>
<li><a href="#" class="block p-2 rounded hover:bg-slate-100">Add User</a></li>
<li><a href="#" class="block p-2 rounded hover:bg-slate-100">Roles</a></li>
<li><a href="enquiry.php" class="block p-2 rounded hover:bg-red-900 bg-red-700 text-white">Enquiry with us 👤</a></li>
<li><a href="#" class="block p-2 rounded hover:bg-slate-100">Settings</a></li>

</ul>

</div>

<!-- Main Content -->
<div class="md:ml-64 p-6">

<h2 class="text-2xl font-bold mb-4">Dashboard</h2>

<p class="text-gray-600">
Welcome to the Admin Dashboard.
</p>

</div>

<script>

const menuBtn = document.getElementById("menuBtn");
const sidebar = document.getElementById("sidebar");

menuBtn.addEventListener("click", () => {
sidebar.classList.toggle("-translate-x-full");
});


const adminBtn = document.getElementById("adminBtn");
const adminDropdown = document.getElementById("adminDropdown");

adminBtn.addEventListener("click", () => {
adminDropdown.classList.toggle("hidden");
});

window.addEventListener("click", function(e){
if(!adminBtn.contains(e.target)){
adminDropdown.classList.add("hidden");
}
});

</script>

</body>
</html>