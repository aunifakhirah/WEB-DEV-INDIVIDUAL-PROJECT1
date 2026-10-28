<?php
ob_start();
?>

<!-- Header Card -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Order Details</h2>
        <p class="text-muted mb-0">Order #O001 for Ahmad Zulkarnain</p>
    </div>
</div>

<!-- Order Summary Card -->
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <h5 class="card-title border-bottom pb-2 mb-3">Order Information</h5>
        <div class="row g-3">
            <div class="col-md-3">
                <strong>Order Date:</strong> 2026-10-20
            </div>
            <div class="col-md-3">
                <strong>Customer:</strong> Ahmad Zulkarnain
            </div>
            <div class="col-md-3">
                <strong>Staff:</strong> Nur Auni Fakhirah
            </div>
        </div>
    </div>
</div>

<!-- Add Item Form Card -->
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <h5 class="mb-3"><i class="bi bi-cart-plus text-primary me-2"></i>Add Workout Program to Order</h5>
        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-8">
                    <label for="product" class="form-label">Workout Program <span class="text-danger">*</span></label>
                    <select name="product_num" id="product" class="form-select" required>
                        <option value="">Select Program PDF</option>
                        <option value="W001">W001 - Full Body Hypertrophy Split (RM 49.00)</option>
                        <option value="W002">W002 - 15-Minute Home HIIT Cardio (RM 29.00)</option>
                        <option value="W003">W003 - Core Mobility &amp; Posture Guide (RM 19.00)</option>
                    </select>
                    
                    <!-- Buttons placed directly under the dropdown -->
                    <div class="d-flex gap-2 mt-3">
                        <button type="submit" name="add_program" class="btn btn-primary">
                            <i class="bi bi-plus-lg me-1"></i>Add Program
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            <i class="bi bi-x-circle me-1"></i>Cancel
                        </button>
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="quantity" class="form-label">Quantity <span class="text-danger">*</span></label>
                    <input name="quantity" id="quantity" type="number" class="form-control" value="1" min="1" required>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Items Table Card -->
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0"><i class="bi bi-list-check text-primary me-2"></i>Ordered Programs</h5>
            <a href="invoice.php?oid=O001" target="_blank" class="btn btn-success btn-sm text-white">
                <i class="bi bi-receipt me-1"></i>View Invoice
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Program Name</th>
                        <th>Quantity</th>
                        <th>Unit Price (RM)</th>
                        <th>Subtotal (RM)</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Full Body Hypertrophy Split</td>
                        <td>1</td>
                        <td>49.00</td>
                        <td>49.00</td>
                        <td class="text-center">
                            <a href="orderdetails.php?edit=D001" class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i> Edit</a>
                            <a href="orderdetails.php?delete=D001" class="btn btn-danger btn-sm" onclick="return confirm('Remove program?');"><i class="bi bi-trash-fill"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>15-Minute Home HIIT Cardio</td>
                        <td>2</td>
                        <td>29.00</td>
                        <td>58.00</td>
                        <td class="text-center">
                            <a href="orderdetails.php?edit=D002" class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i> Edit</a>
                            <a href="orderdetails.php?delete=D002" class="btn btn-danger btn-sm" onclick="return confirm('Remove program?');"><i class="bi bi-trash-fill"></i> Delete</a>
                        </td>
                    </tr>

                    <!-- Empty state message displayed directly above Grand Total -->
                    <tr>
                        <td colspan="5" class="text-center py-3 text-muted border-top border-bottom">
                            <i class="bi bi-inbox me-1"></i> No programs added to this order
                        </td>
                    </tr>
                </tbody>
                <tfoot class="table-group-divider fw-bold">
                    <tr>
                        <td colspan="3" class="text-end">Grand Total:</td>
                        <td class="text-primary">RM 107.00</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Back to Orders at the Bottom -->
        <div class="mt-4 pt-3 border-top">
            <a href="orders.php" class="btn btn-secondary">
                <i class="bi bi-arrow-left me-1"></i>Back to Orders
            </a>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>