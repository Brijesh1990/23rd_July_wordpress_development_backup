
<!-- Sidebar -->
<div class="sidebar">
<h4 class="text-left py-3 ms-3">
<?php echo rtrim($_SESSION["admin_email"],"@gmail.com");?>  
</h4>
<a href="dashboard.php">Dashboard</a>
<a href="#">Manage Customers</a>
<a href="addcategory.php">Add Category</a>
<a href="addproducts.php">Add Products</a>
<a href="#">Orders</a>
<a href="index.php?logoutid" onclick="return confirm('Are you sure to Logout with admin ?')">Logout</a>
</div>