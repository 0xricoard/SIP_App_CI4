<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            </div>
        </div>
        <div class="alert alert-info" role="alert">
  Selamat Datang di SIP Online.
</div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-4">
        <div class="info-box">
  <span class="info-box-icon bg-info"><i class="fas fa-shopping-cart"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Total Orders</span>
    <span class="info-box-number">1,410</span>
  </div>
</div>
</div>
<div class="col-lg-4">
        <div class="info-box">
  <span class="info-box-icon bg-gradient-success"><i class="fas fa-user"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Total Users</span>
    <span class="info-box-number">1</span>
  </div>
</div>
</div>
<div class="col-lg-4">
        <div class="info-box">
  <span class="info-box-icon bg-warning"><i class="fas fa-shopping-bag"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Total Product</span>
    <span class="info-box-number">5</span>
  </div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h5 class="m-0">Sales Graph</h5>
                        </div>
                        <div class="card-body">
                            <p>Halaman sales graph</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h5 class="m-0">Latest Transaction</h5>
                        </div>
                        <div class="card-body">
                            <p>Halaman latest transaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<?php echo view('_partials/footer'); ?>