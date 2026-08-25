<?php 
require_once("functions.php");
require_once("includes/header.php");
require_once("includes/sidebar.php");
// set session 
if(!isset($_SESSION["adminid"]))
{
header("location:index.php");
}  
?>

<!-- Content -->
<div class="content fade-in">
  <h2 class="mb-4">Dashboard</h2>

  <!-- Cards -->
  <div class="row">

    <div class="col-md-3">
      <div class="card p-3 shadow dashboard-card">
        <h6>Total Products</h6>
        <h4>120</h4>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card p-3 shadow dashboard-card">
        <h6>Total Orders</h6>
        <h4>80</h4>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card p-3 shadow dashboard-card">
        <h6>Users</h6>
        <h4>45</h4>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card p-3 shadow dashboard-card">
        <h6>Revenue</h6>
        <h4>$5000</h4>
      </div>
    </div>

  </div>

  <!-- Table -->
  <div class="card mt-4 p-3 shadow">
    <h5>Recent Orders</h5>

    <table class="table mt-3">
      <tr>
        <th>ID</th>
        <th>Customer</th>
        <th>Amount</th>
        <th>Status</th>
      </tr>

      <tr>
        <td>#101</td>
        <td>John</td>
        <td>$200</td>
        <td><span class="badge bg-success">Completed</span></td>
      </tr>

      <tr>
        <td>#102</td>
        <td>Priya</td>
        <td>$350</td>
        <td><span class="badge bg-warning">Pending</span></td>
      </tr>

    </table>

  </div>
</div>
