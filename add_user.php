<?php
include_once "koneksi.php";
$password = password_hash ('123', PASSWORD_BCRYPT);
$query = "INSERT INTO tb_pengguna (
    username,
    password,
    nama_lengkap,
    email,
    jabatan,
    hak_akses
) 
VALUES (
    'admin',
    '$password',
    'Administrator Web',
    'admin@gmail.com',
    'Administrator',
    'admin'
)";
if ($koneksi->query($query)) {
    echo "Data user berhasil ditambah";
} else {
    echo "Data user gagal ditambah";
}
mysqli_close($koneksi);
?>