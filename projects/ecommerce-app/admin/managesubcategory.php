<?php 
require_once("include/config.php");
require_once("include/header.php");
require_once("include/sidebar.php");
?>

<div class="app-wrapper">
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">

      <!-- Page Title -->
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="app-page-title">Manage Subcategories</h1>
        <a href="#" class="btn btn-primary">+ Add Subcategory</a>
      </div>

      <!-- Card -->
      <div class="card shadow-sm">
        <div class="card-header">
          <h5 class="mb-0">Subcategory List</h5>
        </div>

        <div class="card-body">

          <!-- Search & Filter -->
          <div class="row mb-3">
            <div class="col-md-4">
              <input type="text" class="form-control" placeholder="Search subcategories...">
            </div>
            <div class="col-md-3">
              <select class="form-select">
                <option value="">All Categories</option>
                <option>Category 1</option>
                <option>Category 2</option>
              </select>
            </div>
            <div class="col-md-3">
              <select class="form-select">
                <option value="">Status</option>
                <option>Active</option>
                <option>Inactive</option>
              </select>
            </div>
          </div>

          <!-- Table -->
          <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">

              <thead class="table-light">
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Subcategory Name</th>
                  <th>Category</th>
                  <th>Slug</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

                <!-- Row Example -->
                <tr>
                  <td>1</td>
                  <td>
                    <img src="https://via.placeholder.com/50" class="img-thumbnail" width="50">
                  </td>
                  <td>Mobile Phones</td>
                  <td>Electronics</td>
                  <td>mobile-phones</td>
                  <td>
                    <span class="badge bg-success">Active</span>
                  </td>
                  <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>
                    <img src="https://via.placeholder.com/50" class="img-thumbnail" width="50">
                  </td>
                  <td>T-Shirts</td>
                  <td>Clothing</td>
                  <td>t-shirts</td>
                  <td>
                    <span class="badge bg-danger">Inactive</span>
                  </td>
                  <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>

              </tbody>

            </table>
          </div>

          <!-- Pagination -->
          <nav class="mt-3">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link">Previous</a>
              </li>
              <li class="page-item active">
                <a class="page-link">1</a>
              </li>
              <li class="page-item">
                <a class="page-link">2</a>
              </li>
              <li class="page-item">
                <a class="page-link">Next</a>
              </li>
            </ul>
          </nav>

        </div>
      </div>

    </div>
  </div>
</div>
<?php 
require_once("include/footer.php");
?>