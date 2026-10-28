<?php
ob_start();
?>

<!-- Header Card -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Staffs</h2>
        <p class="text-muted mb-0">Manage and track all your staff members</p>
    </div>
</div>

<!-- Form Card -->
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>Staff Form
                </h5>
                <small class="text-muted">Fill in the details of a staff member</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>
        
        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="sid" class="form-label">Staff ID <span class="text-danger">*</span></label>
                    <input name="sid" id="sid" type="text" class="form-control" placeholder="Enter Staff ID" required>
                </div>

                <div class="col-md-3">
                    <label for="sname" class="form-label">Name <span class="text-danger">*</span></label>
                    <input name="sname" id="sname" type="text" class="form-control" placeholder="Enter Staff Name" required>
                </div>

                <div class="col-md-3">
                    <label for="sphone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                    <input name="sphone" id="sphone" type="text" class="form-control" placeholder="Enter Phone Number" required>
                </div>

                <div class="col-md-3">
                    <label for="email" class="form-label">Email <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="staff_email" id="email" type="email" class="form-control" placeholder="Enter Email Address" value="" required>
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

<!-- Table Card -->
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <h5 class="mb-3">
            <i class="bi bi-table text-primary me-2"></i>Staff List
        </h5>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Staff ID</th>
                        <th>Full Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>S001</td>
                        <td>Nur Auni Fakhirah</td>
                        <td>011-2345678</td>
                        <td>aunifakhirah15@gmail.com</td>
                        <td class="text-center">
                            <a href="staffs.php?edit=S001" class="btn btn-success btn-sm"><i class="bi bi-pencil-fill"></i> Edit</a>
                            <a href="staffs.php?delete=S001" class="btn btn-danger btn-sm" onclick="return confirm('Delete staff?');"><i class="bi bi-trash-fill"></i> Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>