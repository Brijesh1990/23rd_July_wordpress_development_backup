<?php 
require_once("include/config.php");
require_once("include/header.php");
require_once("include/sidebar.php");
?>

<div class="app-wrapper">
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">

      <h1 class="app-page-title">Create Add Product</h1>

      <div class="row g-4">
        <div class="col-12 col-lg-10">

          <div class="card shadow-sm">
            <div class="card-header">
              <h5 class="mb-0">Add New Product</h5>
            </div>

            <div class="card-body">

              <form action="#" method="POST" enctype="multipart/form-data">

                <div class="row">

                  <!-- Product Name -->
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="product_name" class="form-control" placeholder="Enter product name" required>
                  </div>

                  <!-- Slug -->
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control" placeholder="Enter slug">
                  </div>

                  <!-- Category -->
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Category</label>
                    <select name="category_id" class="form-select" required>
                      <option value="">Select Category</option>
                      <option value="1">Category 1</option>
                      <option value="2">Category 2</option>
                    </select>
                  </div>

                  <!-- Subcategory -->
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Subcategory</label>
                    <select name="subcategory_id" class="form-select">
                      <option value="">Select Subcategory</option>
                      <option value="1">Subcategory 1</option>
                      <option value="2">Subcategory 2</option>
                    </select>
                  </div>

                  <!-- Price -->
                  <div class="col-md-4 mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" placeholder="Enter price" required>
                  </div>

                  <!-- Discount Price -->
                  <div class="col-md-4 mb-3">
                    <label class="form-label">Discount Price</label>
                    <input type="number" name="discount_price" class="form-control" placeholder="Enter discount price">
                  </div>

                  <!-- Quantity -->
                  <div class="col-md-4 mb-3">
                    <label class="form-label">Quantity</label>
                    <input type="number" name="quantity" class="form-control" placeholder="Enter stock quantity">
                  </div>

                  <!-- SKU -->
                  <div class="col-md-6 mb-3">
                    <label class="form-label">SKU</label>
                    <input type="text" name="sku" class="form-control" placeholder="Enter SKU">
                  </div>

                  <!-- Brand -->
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Brand</label>
                    <input type="text" name="brand" class="form-control" placeholder="Enter brand name">
                  </div>

                  <!-- Short Description -->
                  <div class="col-12 mb-3">
                    <label class="form-label">Short Description</label>
                    <textarea name="short_description" class="form-control" rows="2"></textarea>
                  </div>

                  <!-- Full Description -->
                  <div class="col-12 mb-3">
                    <label class="form-label">Full Description</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                  </div>

                  <!-- Product Image -->
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Main Image</label>
                    <input type="file" name="main_image" class="form-control">
                  </div>

                  <!-- Gallery Images -->
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Gallery Images</label>
                    <input type="file" name="gallery_images[]" class="form-control" multiple>
                  </div>

                  <!-- Status -->
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                    </select>
                  </div>

                  <!-- Featured -->
                  <div class="col-md-6 mb-3 d-flex align-items-center">
                    <div class="form-check mt-4">
                      <input type="checkbox" name="featured" class="form-check-input" id="featuredCheck">
                      <label class="form-check-label" for="featuredCheck">Featured Product</label>
                    </div>
                  </div>

                </div>

                <!-- Submit -->
                <div class="d-flex justify-content-end mt-3">
                  <button type="reset" class="btn btn-secondary me-2">Reset</button>
                  <button type="submit" class="btn btn-primary">Add Product</button>
                </div>

              </form>

            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
<?php 
require_once("include/footer.php");
?>