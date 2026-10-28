<?php
ob_start();
?>

<!-- Header Card -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Orders</h2>
        <p class="text-muted mb-0">Create and manage customer orders</p>
    </div>
</div>

<!-- Form Card -->
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>Order Form
                </h5>
                <small class="text-muted">Create an order header before adding products</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">Required fields</span>
            </div>
        </div>
        
        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="odate" class="form-label">Order Date <span class="text-danger">*</span></label>
                    <input name="odate" id="odate" type="date" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="customer" class="form-label">Customer <span class="text-danger">*</span></label>
                    <select name="cid" id="customer" class="form-select" required>
                        <option value="">Select Customer</option>
                        <option value="C001">C001 - Ahmad Zulkarnain</option>
                        <option value="C002">C002 - Siti Sarah Ahmad</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="staff" class="form-label">Staff <span class="text-danger">*</span></label>
                    <select name="sid" id="staff" class="form-select" required>
                        <option value="">Select Staff</option>
                        <option value="S001">S001 - Nur Auni Fakhirah</option>
                    </select>
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
            <i class="bi bi-table text-primary me-2"></i>Order List
        </h5>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Order ID</th>
                        <th>Order Date</th>
                        <th>Customer</th>
                        <th>Staff</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>O001</td>
                        <td>2026-10-20</td>
                        <td>Ahmad Zulkarnain</td>
                        <td>Nur Auni Fakhirah</td>
                        <td class="text-center">
                            <a href="orderdetails.php?oid=O001" class="btn btn-warning btn-sm text-dark" title="Order details"><i class="bi bi-list"></i> Details</a>
                            <a href="invoice.php?oid=O001" class="btn btn-info btn-sm text-white" title="Invoice"><i class="bi bi-receipt"></i> Invoice</a>
                            <a href="orders.php?edit=O001" class="btn btn-success btn-sm"><i class="bi bi-pencil-fill"></i> Edit</a>
                            <a href="orders.php?delete=O001" class="btn btn-danger btn-sm" onclick="return confirm('Delete order?');"><i class="bi bi-trash-fill"></i> Delete</a>
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