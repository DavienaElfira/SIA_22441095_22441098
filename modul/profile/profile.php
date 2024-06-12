<?php 
session_start();
include('koneksi.php');

// Periksa apakah pengguna sudah login
if(!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$username = $_SESSION['username'];

// Ambil data pengguna dari database
$query = "SELECT * FROM tbl_pengguna WHERE username='$username'";
$exec = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($exec);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <form action="modul/profile/aksi_profile.php" method="post">
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" value="<?=htmlspecialchars($data['username'])?>" readonly>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="<?=htmlspecialchars($data['nama_lengkap'])?>">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="<?=htmlspecialchars($data['email'])?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label for="password_baru" class="form-label">Password Baru</label>
                            <input type="password" class="form-control" name="password_baru">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="password_ulang" class="form-label">Ulangi Password</label>
                            <input type="password" class="form-control" name="password_ulang">
                        </div>
                    </div>
                    <hr class="text-secondary">
                    <div class="d-flex">
                        <span class="me-auto text-gray">
                            <?php
                            if (isset($_SESSION['pesan'])) {
                                echo $_SESSION['pesan'];
                                unset($_SESSION['pesan']);
                            }
                            ?>
                        </span>
                        <button type="submit" name="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
