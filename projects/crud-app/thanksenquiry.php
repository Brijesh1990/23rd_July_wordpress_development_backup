<?php 
include_once("config.php");
include_once("navigation.php");
if(!isset($_SESSION["rid"]))
{
header("location:index.php");   
}
?>
<style>
@keyframes fadeSlideUp {
0% {
opacity: 0;
transform: translateY(40px);
}
100% {
opacity: 1;
transform: translateY(0);
}
}

.animate-fadeSlideUp {
animation: fadeSlideUp 1s ease forwards;
}
</style>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen flex items-center justify-center">

<div class="w-full px-4">

<!-- Container -->
<div class="max-w-xl mx-auto bg-white rounded-2xl shadow-xl p-8 text-center animate-fadeSlideUp">

<!-- GIF Image -->
<div class="mb-6">
<img 
src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRfpGaFGu_9Toz6-rU3yXaldBWZFJh5b0xDQ&s" 
alt="Thank You" 
class="w-40 mx-auto rounded-lg"
>
</div>

<!-- Heading -->
<h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
Thank You!
</h1>

<!-- Subtext -->
<p class="text-gray-600 text-lg mb-6">
Your enquiry has been successfully submitted.  
Our team will get back to you shortly.
</p>

<!-- Button -->
<a href="dashboard.php" 
class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-full shadow-lg hover:bg-indigo-700 transition duration-300 transform hover:scale-105">
Back to Home
</a>

</div>

</div>

<!-- add modal here -->
<?php 
include_once("adduser.php");
?>
</body>
</html>