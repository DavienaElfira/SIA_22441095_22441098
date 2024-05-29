<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIA Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Internal CSS for h3 elements */
        h3 {
            font-family: Georgia;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3 text-bg-dark" style="min-height:100vh">
                <div class="text-center pt-4">
                    <i class="bi bi-cash-coin fs-1 text-success"></i>
                    <h3>Sistem Informasi Akuntansi</h3>
                </div>
                <div class="pt-4">
                    <!-- Include Sidebar Content -->
                    <?php include_once('sidebar.php'); ?>
                </div>
            </div>
            <!-- Main Content Column -->
            <div class="col-md-9" style="background-color: #F8F6FA">
                <div class="text-end p-3">
                    <!-- User Dropdown Menu -->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                            Administrator
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="?modul-profile">
                                    <i class="bi bi-person-badge-fill"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="bi bi-door-closed-fill"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-3">
                    <!-- Include Main Content -->
                    <?php include_once('media.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
