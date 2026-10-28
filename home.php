<?php
ob_start();
?>

<!-- Welcome Banner Card -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">WORKOUT PROGRAM PDFs</h2>
        <p class="text-muted mb-0">Welcome to the central administrative portal for managing workout routine PDFs, orders, customers, and staff operations.</p>
    </div>
</div>

<!-- Key Metrics Summary Row -->
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-white">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3 text-primary">
                    <i class="bi bi-file-earmark-pdf fs-3"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1">Total Programs</h6>
                    <h3 class="mb-0 fw-bold">12</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-white">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3 text-success">
                    <i class="bi bi-people fs-3"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1">Customers</h6>
                    <h3 class="mb-0 fw-bold">48</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-white">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle bg-warning bg-opacity-10 p-3 me-3 text-warning">
                    <i class="bi bi-person-badge fs-3"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1">Active Staffs</h6>
                    <h3 class="mb-0 fw-bold">6</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-white">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle bg-info bg-opacity-10 p-3 me-3 text-info">
                    <i class="bi bi-cart-check fs-3"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1">Total Orders</h6>
                    <h3 class="mb-0 fw-bold">124</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Module Quick Access Grid -->
<div class="row g-4">
    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body p-4">
                <i class="bi bi-bar-chart-line-fill text-primary display-4 mb-3"></i>
                <h5 class="card-title">Workout Programs</h5>
                <p class="card-text text-muted small">Manage catalog details, pricing, levels, and PDF attachments.</p>
                <a href="products.php" class="btn btn-outline-primary btn-sm">Go to Products</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body p-4">
                <i class="bi bi-people-fill text-success display-4 mb-3"></i>
                <h5 class="card-title">Customers</h5>
                <p class="card-text text-muted small">Maintain registered customer profiles and contact details.</p>
                <a href="customers.php" class="btn btn-outline-success btn-sm">Go to Customers</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body p-4">
                <i class="bi bi-person-badge-fill text-warning display-4 mb-3"></i>
                <h5 class="card-title">Staffs</h5>
                <p class="card-text text-muted small">Manage administrative staff member accounts.</p>
                <a href="staffs.php" class="btn btn-outline-warning btn-sm">Go to Staffs</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body p-4">
                <i class="bi bi-cart-fill text-info display-4 mb-3"></i>
                <h5 class="card-title">Orders &amp; Invoices</h5>
                <p class="card-text text-muted small">Process new purchases and view order invoices.</p>
                <a href="orders.php" class="btn btn-outline-info btn-sm">Go to Orders</a>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>