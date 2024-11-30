<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenGrid</title>
    <link rel="icon" type="image/png" href="../../../Images/GREENGRID Logo 1.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../../styles/style.css">
</head>

<body class="sidebar-mini"></body>
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-envelope"></i>
                    <span class="badge badge-success navbar-badge">4</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">4 New Messages</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> Order #1234 Request
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> Stock Update Required
                        <span class="float-right text-muted text-sm">12 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> Delivery Confirmation
                        <span class="float-right text-muted text-sm">2 hrs</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> New Supplier Message
                        <span class="float-right text-muted text-sm">4 hrs</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>

            <!-- Notifications -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">8</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">8 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-shopping-cart mr-2"></i> 4 new orders
                        <span class="float-right text-muted text-sm">5 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 3 new registrations
                        <span class="float-right text-muted text-sm">2 hrs</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-chart-line mr-2"></i> Weekly report ready
                        <span class="float-right text-muted text-sm">1 day</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>

            <!-- Alerts -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-exclamation-circle"></i>
                    <span class="badge badge-danger navbar-badge">5</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">5 Alerts</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-exclamation-triangle text-warning mr-2"></i> Low stock: Rice
                        <span class="float-right text-muted text-sm">Now</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-temperature-high text-danger mr-2"></i> Temperature Alert: W3
                        <span class="float-right text-muted text-sm">10 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-exclamation-circle text-warning mr-2"></i> Maintenance Due
                        <span class="float-right text-muted text-sm">2 hrs</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-truck text-danger mr-2"></i> Delayed Shipment
                        <span class="float-right text-muted text-sm">4 hrs</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-exclamation-triangle text-warning mr-2"></i> Quality Check Required
                        <span class="float-right text-muted text-sm">6 hrs</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Alerts</a>
                </div>
            </li>

            <!-- Fullscreen Button -->
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-custom elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="../../../Images/GREENGRID Logo 1.png" alt="GreenGrid Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light"><b>GreenGrid</b></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <i class="fa-solid fa-user-tie fa-2x" style="color: #fff; margin: 0 10px;"></i>
                </div>
                <div class="info">
                    <a href="#" class="d-block">Agricultural Officer</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
                <div class="sidebar-search-results">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="search-title text-light">No element found!</div>
                            <div class="search-path"></div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Simplified sidebar menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="officer-dashboard.html" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <!-- Product Insight -->
                    <li class="nav-item">
                        <a href="production-monitoring.html" class="nav-link">
                            <i class="nav-icon fas fa-box"></i>
                            <p>Production Monitoring</p>
                        </a>
                    </li>

                    <!-- Order Processing System -->
                    <li class="nav-item">
                        <a href="order-processing.html" class="nav-link">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>Order Processing</p>
                        </a>
                    </li>

                    <!-- Data Analysis -->
                    <li class="nav-item">
                        <a href="data-analysis.html" class="nav-link">
                            <i class="nav-icon fas fa-chart-line"></i>
                            <p>Data Analysis</p>
                        </a>
                    </li>

                    <!-- Subsidy Management -->
                    <li class="nav-item">
                        <a href="subsidy-management.html" class="nav-link">
                            <i class="nav-icon fas fa-hand-holding-usd"></i>
                            <p>Subsidy Management</p>
                        </a>
                    </li>

                    <!-- Settings and Logout -->
                    <li class="nav-item">
                        <a href="settings.html" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>Settings</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Agricultural Officer Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="fas fa-box"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Products</span>
                                <span class="info-box-number">1,410</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-success"><i class="fas fa-shopping-cart"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Pending Orders</span>
                                <span class="info-box-number">15</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-warning"><i class="fas fa-hand-holding-usd"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Active Subsidies</span>
                                <span class="info-box-number">45</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-danger"><i class="fas fa-exclamation-circle"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Quality Alerts</span>
                                <span class="info-box-number">5</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main row -->
                <div class="row">
                    <!-- Product Insight Card -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Product Insight</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="productChart" style="height: 250px;"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Order Processing Card -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Recent Orders</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Product</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ORD-2024-001</td>
                                            <td>BRRI Dhan 28 (Rice Seeds)</td>
                                            <td><span class="badge badge-warning">Pending Approval</span></td>
                                            <td>2024-03-15</td>
                                        </tr>
                                        <tr>
                                            <td>ORD-2024-002</td>
                                            <td>Fertilizer Package A</td>
                                            <td><span class="badge badge-success">In Transit</span></td>
                                            <td>2024-03-14</td>
                                        </tr>
                                        <tr>
                                            <td>ORD-2024-003</td>
                                            <td>Mixed Seeds Package</td>
                                            <td><span class="badge badge-primary">Processing</span></td>
                                            <td>2024-03-16</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Subsidy Management Card -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Subsidy Status</h3>
                            </div>
                            <div class="card-body">
                                <div class="info-box bg-gradient-success">
                                    <span class="info-box-icon"><i class="fas fa-check"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Approved Subsidies</span>
                                        <span class="info-box-number">35</span>
                                    </div>
                                </div>
                                <div class="info-box bg-gradient-warning">
                                    <span class="info-box-icon"><i class="fas fa-clock"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Pending Applications</span>
                                        <span class="info-box-number">10</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Add necessary scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Sample chart initialization
        const ctx = document.getElementById('productChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Rice', 'Wheat', 'Corn', 'Soybeans', 'Cotton'],
                datasets: [{
                    label: 'Stock Level',
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: 'rgba(0, 123, 255, 0.5)'
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>