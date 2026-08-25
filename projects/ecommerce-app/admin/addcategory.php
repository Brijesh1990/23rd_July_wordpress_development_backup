<?php 
require_once("include/config.php");
require_once("include/header.php");
require_once("include/sidebar.php");
?>
<div class="app-wrapper">
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">

      <h1 class="app-page-title">Create Add Category</h1>

      <div class="row g-4">
        <div class="col-12 col-md-8 col-lg-6">

          <div class="card shadow-sm">
            <div class="card-header">
              <h5 class="mb-0">Add New Category</h5>
            </div>

            <div class="card-body">

              <form action="#" method="POST">

                <!-- Category Name -->
                <div class="mb-3">
                  <label class="form-label">Category Name</label>
                  <input type="text" name="category_name" class="form-control" placeholder="Enter category name" required>
                </div>

                <!-- Slug -->
                <div class="mb-3">
                  <label class="form-label">Slug</label>
                  <input type="text" name="slug" class="form-control" placeholder="Enter slug (optional)">
                </div>

                <!-- Parent Category -->
                <div class="mb-3">
                  <label class="form-label">Parent Category</label>
                  <select name="parent_id" class="form-select">
                    <option value="">None</option>
                    <option value="1">Category 1</option>
                    <option value="2">Category 2</option>
                  </select>
                </div>

                <!-- Description -->
                <div class="mb-3">
                  <label class="form-label">Description</label>
                  <textarea name="description" class="form-control" rows="3" placeholder="Enter description"></textarea>
                </div>

                <!-- Status -->
                <div class="mb-3">
                  <label class="form-label">Status</label>
                  <select name="status" class="form-select">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                  </select>
                </div>

                <!-- Image Upload -->
                <div class="mb-3">
                  <label class="form-label">Category Image</label>
                  <input type="file" name="image" class="form-control">
                </div>

                <!-- Submit -->
                <div class="d-flex justify-content-end">
                  <button type="reset" class="btn btn-secondary me-2">Reset</button>
                  <button type="submit" class="btn btn-primary">Add Category</button>
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