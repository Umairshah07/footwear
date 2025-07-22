<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel - Footwear Store</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .sidebar {
      height: 100vh;
      background: #343a40;
      color: #fff;
      padding-top: 20px;
      position: fixed;
      width: 250px;
    }
    .sidebar a {
      color: #adb5bd;
      display: block;
      padding: 10px 20px;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #495057;
      color: #fff;
    }
    .content {
      margin-left: 250px;
      padding: 40px;
    }
    .navbar {
      margin-left: 250px;
      background-color: #88c8bc;
    }
    .navbar .navbar-brand {
      color: #fff;
    }
    .navbar .nav-link {
      color: #fff !important;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="text-center mb-4">
      <h4><i class="fas fa-socks"></i> Footwear Admin</h4>
    </div>
    <a href="#"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
    <a href="#"><i class="fas fa-plus me-2"></i> Add Product</a>
    <a href="#"><i class="fas fa-list me-2"></i> Product List</a>
    <a href="#"><i class="fas fa-boxes me-2"></i> Orders</a>
    <a href="#"><i class="fas fa-users me-2"></i> Customers</a>
    <a href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand">Welcome, Admin</a>
      <div class="ms-auto d-flex">
        <a class="nav-link" href="#"><i class="fas fa-cog"></i></a>
        <a class="nav-link" href="#"><i class="fas fa-user-circle"></i></a>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="content">
    <h2>Dashboard Overview</h2>
    <div class="row mt-4">
      <div class="col-md-4 mb-3">
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-box me-2"></i>Total Products</h5>
            <p class="card-text display-6">145</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-shopping-cart me-2"></i>Total Orders</h5>
            <p class="card-text display-6">87</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-users me-2"></i>Total Customers</h5>
            <p class="card-text display-6">250</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
