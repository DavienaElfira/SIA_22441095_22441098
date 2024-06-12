<?php
session_start();
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $password_baru = $_POST['password_baru'];
    $password_ulang = $_POST['password_ulang'];

    // Validasi input
    if ($password_baru !== $password_ulang) {
        $_SESSION['pesan'] = "Kata sandi baru tidak cocok.";
        header('Location: ../../profile.php');
        exit;
    }

    // Hash kata sandi baru jika diisi
    if (!empty($password_baru)) {
        $hashed_password = password_hash($password_baru, PASSWORD_DEFAULT);
        $query = "UPDATE tbl_pengguna SET nama_lengkap=?, email=?, password=? WHERE username=?";
        $stmt = $koneksi->prepare($query);
        $stmt->bind_param("ssss", $nama_lengkap, $email, $hashed_password, $username);
    } else {
        $query = "UPDATE tbl_pengguna SET nama_lengkap=?, email=? WHERE username=?";
        $stmt = $koneksi->prepare($query);
        $stmt->bind_param("sss", $nama_lengkap, $email, $username);
    }

    if ($stmt->execute()) {
        $_SESSION['pesan'] = "Profil berhasil diperbarui.";
    } else {
        $_SESSION['pesan'] = "Terjadi kesalahan saat memperbarui profil.";
    }

    $stmt->close();
    header('Location: ../../profile.php');
    exit;
}
?>
