<?php
session_start();
include_once('../../koneksi.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_suplier = $_POST['nama_suplier'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    if ($_GET['act'] == "insert") {
        $query = "INSERT INTO suplier (nama_suplier, alamat, telp, email) VALUES ('$nama_suplier','$alamat','$telp','$email')";
        $exec = mysqli_query($koneksi, $query);
        if ($exec) {
            $_SESSION['pesan'] = "Data suplier telah ditambahkan";
            header('location:../../dashboard.php?modul=suplier');
        } else {
            $_SESSION['pesan'] = "Data suplier gagal ditambahkan";
            header('location:../../dashboard.php?modul=suplier');
        }
    } elseif ($_GET['act'] == "update") {
        $id = $_GET['id'];
        $query = "UPDATE suplier SET nama_suplier='$nama_suplier', alamat='$alamat', telp='$telp', email='$email' WHERE id='$id'";
        $exec = mysqli_query($koneksi, $query);
        if ($exec) {
            $_SESSION['pesan'] = "Data suplier telah diubah";
            header('location:../../dashboard.php?modul=suplier');
        } else {
            $_SESSION['pesan'] = "Data suplier gagal diubah";
            header('location:../../dashboard.php?modul=suplier');
        }
    }
} else {
    if ($_GET['act'] == "delete") {
        $id = $_GET['id'];
        $query = "DELETE FROM suplier WHERE id='$id'";
        $exec = mysqli_query($koneksi, $query);
        if ($exec) {
            $_SESSION['pesan'] = "Data suplier telah dihapus";
            header('location:../../dashboard.php?modul=suplier');
        } else {
            $_SESSION['pesan'] = "Data suplier gagal dihapus";
            header('location:../../dashboard.php?modul=suplier');
        }
    } else {
        header('location:../../index.php');
    }
}
?>