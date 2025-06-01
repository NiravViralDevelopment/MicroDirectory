@extends('layouts.admin.app')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
            <div class="row diffBxRw">



            <div class="row g-4">

    <!-- Categories Card -->
    <div class="col-xxl-3 col-md-4 col-sm-6">
        <a href="#" class="text-decoration-none">
            <div class="card info-card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="card-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-tags-fill fs-4"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-dark">Categories</h6>
                            <small class="text-muted">Active Categories</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 text-primary">8</h4>
                        <span class="badge bg-success">+2%</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Products Card -->
    <div class="col-xxl-3 col-md-4 col-sm-6">
        <a href="#" class="text-decoration-none">
            <div class="card info-card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="card-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-box-seam fs-4"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-dark">Products</h6>
                            <small class="text-muted">Total Products</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 text-success">125</h4>
                        <span class="badge bg-warning text-dark">+10</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Users Card -->
    <div class="col-xxl-3 col-md-4 col-sm-6">
        <a href="#" class="text-decoration-none">
            <div class="card info-card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="card-icon bg-warning text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-people-fill fs-4"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-dark">Users</h6>
                            <small class="text-muted">Registered Users</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 text-warning">540</h4>
                        <span class="badge bg-info text-dark">+5%</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Directors Card -->
    <div class="col-xxl-3 col-md-4 col-sm-6">
        <a href="#" class="text-decoration-none">
            <div class="card info-card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="card-icon bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-person-badge-fill fs-4"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-dark">Directors</h6>
                            <small class="text-muted">Active Directors</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 text-danger">6</h4>
                        <span class="badge bg-light text-dark">0%</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Orders Card -->
    <div class="col-xxl-3 col-md-4 col-sm-6">
        <a href="#" class="text-decoration-none">
            <div class="card info-card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="card-icon bg-info text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-cart-check-fill fs-4"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-dark">Orders</h6>
                            <small class="text-muted">Completed Orders</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 text-info">89</h4>
                        <span class="badge bg-success">+12%</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

</div>


        </div>
    </div>
</div>
</section>
<script>
    setInterval(function() {
        location.reload();
    }, 30000);
</script>
@endsection
