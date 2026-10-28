<?php
ob_start();
?>

<!-- Header Card -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Products</h2>
        <p class="text-muted mb-0">Manage and track all workout program PDFs offered in your system</p>
    </div>
</div>

<!-- Form Card -->
<div class="card shadow-sm mb-4">
    <div class="card-body">

        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Workout Program Form
                </h5>
                <small class="text-muted">Fill in the details of a workout program PDF</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>
        
        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="pid" class="form-label">Program ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_num" id="pid" type="text" class="form-control" placeholder="Enter Program ID" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="name" class="form-label">Program Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_name" id="name" type="text" class="form-control" placeholder="Enter Program Name" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price (RM) <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_price" id="price" type="number" class="form-control" placeholder="Enter Price" value="" required min="0" step="0.01">
                </div>
                <div class="col-md-3">
                    <label for="category" class="form-label">Category <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_category" id="category" class="form-select" required>
                        <option value="">Select Category</option>
                        <option value="Hypertrophy">Hypertrophy / Muscle Building</option>
                        <option value="Fat Loss">Fat Loss &amp; Cardio</option>
                        <option value="Strength">Strength &amp; Powerlifting</option>
                        <option value="Calisthenics">Bodyweight &amp; Calisthenics</option>
                        <option value="Mobility">Mobility &amp; Core</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="level" class="form-label">Difficulty Level <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_level" id="level" class="form-select" required>
                        <option value="">Select Level</option>
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advanced">Advanced</option>
                        <option value="All Levels">All Levels</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="duration" class="form-label">Duration <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_duration" id="duration" class="form-select" required>
                        <option value="">Select Duration</option>
                        <option value="2 Weeks">2 Weeks</option>
                        <option value="4 Weeks">4 Weeks</option>
                        <option value="8 Weeks">8 Weeks</option>
                        <option value="12 Weeks">12 Weeks</option>
                    </select>
                </div>
                
                <div class="col-md-3">
                    <label for="pages" class="form-label">Quantity <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_pages" id="pages" type="number" class="form-control" placeholder="Enter Quantity" value="" required min="1">
                </div>
                <div class="col-md-3">
                    <label for="product_image" class="form-label">PDF Cover Image</label>
                    <input name="product_image" id="product_image" type="text" class="form-control" placeholder="Enter image filename" value="">
                </div>
            </div>
            
            <hr class="mt-4 mb-3">
            
            <div>
                <button type="submit" name="create" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i>Create
                </button>
                <button type="reset" class="btn btn-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Products Table Card -->
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">
                <i class="bi bi-table text-primary me-2"></i>Workout Program List
            </h5>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Program ID</th>
                        <th>Program Name</th>
                        <th>Price (RM)</th>
                        <th>Category</th>
                        <th>Level</th>
                        <th>Duration</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>W001</td>
                        <td>Full Body Hypertrophy Split</td>
                        <td>49.00</td>
                        <td>Hypertrophy</td>
                        <td>Intermediate</td>
                        <td>4 Weeks</td>
                        <td class="text-center">
                            <a href="products_details.php?id=W001" class="btn btn-warning btn-sm" title="View Details"><i class="bi bi-eye-fill"></i> Details</a>
                            <a href="products.php?edit=W001" class="btn btn-success btn-sm" title="Edit Record"><i class="bi bi-pencil-fill"></i> Edit</a>
                            <a href="products.php?delete=W001" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this program?');" title="Delete Record"><i class="bi bi-trash-fill"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>W002</td>
                        <td>15-Minute Home HIIT Cardio</td>
                        <td>29.00</td>
                        <td>Fat Loss</td>
                        <td>Beginner</td>
                        <td>2 Weeks</td>
                        <td class="text-center">
                            <a href="products_details.php?id=W002" class="btn btn-warning btn-sm" title="View Details"><i class="bi bi-eye-fill"></i> Details</a>
                            <a href="products.php?edit=W002" class="btn btn-success btn-sm" title="Edit Record"><i class="bi bi-pencil-fill"></i> Edit</a>
                            <a href="products.php?delete=W002" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this program?');" title="Delete Record"><i class="bi bi-trash-fill"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>W003</td>
                        <td>Core Mobility &amp; Posture Guide</td>
                        <td>19.00</td>
                        <td>Mobility</td>
                        <td>All Levels</td>
                        <td>1 Week</td>
                        <td class="text-center">
                            <a href="products_details.php?id=W003" class="btn btn-warning btn-sm" title="View Details"><i class="bi bi-eye-fill"></i> Details</a>
                            <a href="products.php?edit=W003" class="btn btn-success btn-sm" title="Edit Record"><i class="bi bi-pencil-fill"></i> Edit</a>
                            <a href="products.php?delete=W003" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this program?');" title="Delete Record"><i class="bi bi-trash-fill"></i> Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Static Pagination 
        <nav aria-label="Page navigation example" class="mt-3">
            <ul class="pagination justify-content-center mb-0">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav> -->
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>