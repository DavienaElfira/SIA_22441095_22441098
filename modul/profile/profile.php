<?php
session_start();
include 'koneksi.php';

// Memeriksa apakah pengguna telah login
if (!isset($_SESSION['username'])) {
    header('Location: modul/akun/index.php');
    exit();
}

// Generate CSRF token if not already set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Menggunakan prepared statements untuk menghindari SQL injection
$query = "SELECT * FROM tbl_pengguna WHERE username=?";
$stmt = $koneksi->prepare($query);
$stmt->bind_param("s", $_SESSION['username']);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="path_to_your_css_framework.css">
</head>
<body>
<div class="card mb-3">
    <div class="card-body">
        <form action="modul/profile/aksi_profile.php" method="post">
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= htmlspecialchars($data['username']) ?>" readonly>
                </div>
                <div class="mb-3 col-md-4">
                    <label for="nama_lengkap" class="form-label">Nama lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" value="<?= htmlspecialchars($data['nama_lengkap']) ?>" required>
                </div>
                <div class="mb-3 col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($data['email']) ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label for="password" class="form-label">Password saat ini</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3 col-md-4">
                    <label for="password_baru" class="form-label">Password baru</label>
                    <input type="password" class="form-control" name="password_baru">
                </div>
                <div class="mb-3 col-md-4">
                    <label for="password_ulang" class="form-label">Ulangi password baru</label>
                    <input type="password" class="form-control" name="password_ulang">
                </div>
            </div>
            <hr class="text-secondary">
            <div class="d-flex">
                <span class="me-auto text-gray">
                <?php
                if (isset($_SESSION['pesan'])) {
                    echo htmlspecialchars($_SESSION['pesan']);
                    unset($_SESSION['pesan']);
                }
                ?>
                </span>
                <button type="submit" name="submit" class="btn btn-primary">Perbaharui</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
