<?php 
require_once("admin/functions.php");
require_once("includes/header.php");
// add products in cart

if(isset($_POST["addcart"]))
{
date_default_timezone_set("Asia/Calcutta");    
$pid=$_POST["pid"];
$customer_id=$_SESSION["customer_id"];
$price=$_POST["price"];
$qty=$_POST["qty"];
$subtotal=$price*$qty;
$added_date=date("d/m/Y H:i:s a");

$data=array("pid"=>$pid,"customer_id"=>$customer_id,"quantity"=>$qty,"subtotal"=>$subtotal,"added_date"=>$added_date);
insertalldata('tbl_cart',$data);   

 echo "<script>
 alert('Your Cart added  successfully')
 window.location='cart.php';
 </script>";
}
?>

?>
<body class="fade-in">
<div class="container my-5">
<?php 
if(isset($_GET["product-details-id"]))
{  
$id=base64_decode($_GET["product-details-id"]);  
$shwProdDetails=selectAllDataId1('tbl_addproducts','tbl_addcategory','categoryname','catid','pid',$id);

?>
<!-- call script -->
<script src="js/script.js"></script>
<div class="row">
   
<!-- Product Image -->
<div class="col-md-6">
<img src="admin/<?php echo $shwProdDetails[0]["photo"];?>" class="img-fluid rounded shadow w-75">
</div>

<!-- Product Info -->
<div class="col-md-6">
<form method="post">     
<input type="hidden" name="pid" value="<?php echo $shwProdDetails[0]["pid"];?>">

<h3><?php echo $shwProdDetails[0]["categoryname"];?></h3>
<h2><?php echo $shwProdDetails[0]["pname"];?></h2>

<!-- Ratings -->
<div class="mb-2">
⭐⭐⭐⭐☆ <span class="text-muted">(120 reviews)</span>
</div>

<h4 class="text-primary">Rs.<input type="text" name="price" id="price" value="<?php echo $shwProdDetails[0]["offerprice"];?>" readonly style="border:none" /></h4>

<!-- Description -->
<p class="mt-3">
<?php echo $shwProdDetails[0]["descriptions"];?>
</p>

<!-- Quantity -->
<div class="mb-3">
<label class="form-label"><strong>Quantity</strong></label>
<input type="number" name="qty" id="qty" class="form-control w-25" value="1" min="1" onchange="subTotal()">
</div>


<h4 class="text-success">Subtotals of Rs.<label id="subtot"><?php echo $shwProdDetails[0]["offerprice"];?>
</label></h4>

<!-- Buttons -->
<?php 
if(isset($_SESSION["customer_id"]))
{
?>
<button type="submit" name="addcart" class="btn btn-success me-2">
Add to Cart
</button>
<?php 
}
else 
{
?>

<a href="login.php"><button class="btn btn-success me-2" onclick="return confirm('Are you sure to add Cart Login first')">
Add to Cart
</button></a>

<?php 
}
?>
<button class="btn btn-outline-dark">
Continue Shoping
</button>

</div>
<?php 

}
?>
</div>

</form>
<!-- Reviews Section -->
<div class="mt-5">
<h4>Customer Reviews</h4>

<!-- Review -->
<div class="border p-3 mb-3 rounded">
<strong>John Doe</strong>  
<div>⭐⭐⭐⭐⭐</div>
<p>Excellent product! Worth the price.</p>
</div>

<div class="border p-3 mb-3 rounded">
<strong>Priya Sharma</strong>  
<div>⭐⭐⭐⭐☆</div>
<p>Good performance but battery could be better.</p>
</div>

<!-- Add Review -->
<h5 class="mt-4">Add Your Review</h5>

<form onsubmit="submitReview(event)">
<input type="text" id="name" class="form-control mb-2" placeholder="Your Name" required>

<select id="rating" class="form-control mb-2">
<option value="5">⭐⭐⭐⭐⭐</option>
<option value="4">⭐⭐⭐⭐</option>
<option value="3">⭐⭐⭐</option>
<option value="2">⭐⭐</option>
<option value="1">⭐</option>
</select>

<textarea id="review" class="form-control mb-2" placeholder="Write review..." required></textarea>

<button class="btn btn-primary">Submit Review</button>
</form>

<!-- Dynamic Reviews -->
<div id="reviewList" class="mt-3"></div>

</div>
</div>
<?php 
require_once("includes/footer.php");
?>