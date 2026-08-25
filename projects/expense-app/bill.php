<?php 
require_once "functions.php";
$billData=getBill();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Invoice</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-4xl mx-auto bg-white shadow-lg rounded-2xl p-6">

<!-- Header -->
<div class="flex flex-col md:flex-row justify-between items-center border-b pb-4">
<div class="flex items-center gap-3">
<img src="https://via.placeholder.com/60" alt="Logo" class="w-14 h-14 rounded">
<div>
<h1 class="text-xl font-bold">Your Company</h1>
<p class="text-sm text-gray-500">company@email.com</p>
</div>
</div>

<div class="mt-4 md:mt-0 text-right">
<h2 class="text-2xl font-bold text-gray-800">INVOICE</h2>
<p class="text-sm text-gray-500">#INV-001</p>
</div>
</div>

<!-- Billing Info -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
<div>
<h3 class="font-semibold text-gray-700">Bill To:</h3>
<p class="text-gray-600">John Doe</p>
<p class="text-gray-600">123 Street Name</p>
<p class="text-gray-600">City, Country</p>
</div>

<div class="text-left md:text-right">
<p><span class="font-semibold">Invoice Date:</span> <?php echo date("D d/m/Y");?></p>
</div>
</div>

<!-- Table -->
<div class="overflow-x-auto mt-6">
<table class="w-full border border-gray-200 rounded-lg overflow-hidden">
<thead class="bg-gray-100">
<tr>
<th class="text-left p-3 text-sm font-semibold">Name</th>
<th class="text-center p-3 text-sm font-semibold">Descriptions</th>
<th class="text-right p-3 text-sm font-semibold">Ammount</th>
<th class="text-right p-3 text-sm font-semibold">Added Date</th>
</tr>
</thead>

<tbody class="divide-y">


<?php
foreach($billData as $row)
{
?>
<tbody class="divide-y">
<tr>
<td class="p-3"><?php echo $row["name"];?></td>
<td class="p-3 text-center"><?php echo $row["descriptions"];?></td>
<td class="p-3 text-right">₹<?php echo $row["ammount"];?></td>
<td class="p-3 text-right"><?php echo $row["added_date_time"];?></td>
</tr>
<?php 
}
?>

</tbody>
</table>
</div>

<!-- Summary -->
<div class="flex justify-end mt-6">
<div class="w-full md:w-1/3">
<div class="flex justify-between py-2">
<span class="text-gray-600">Subtotal</span>
<span class="font-medium">₹ <?php
$sum_expense=getSumExpense();
echo $sum_expense[0]["total_sum_expense"];?></span>
</div>



<div class="flex justify-between py-3 border-t text-lg font-bold">
<span>Total</span>
<span>₹ <?php
$sum_expense=getSumExpense();
echo $sum_expense[0]["total_sum_expense"];?></span>
</div>
</div>
</div>

<!-- Footer -->
<div class="mt-8 text-center text-sm text-gray-500 border-t pt-4">
Thank you for your business!
</div>

</div>

</body>
</html>