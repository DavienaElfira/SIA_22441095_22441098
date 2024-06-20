<?php
<<<<<<< HEAD
session_start();

// Hapus semua data sesi
session_unset();

//Hapus sesi dari penyimpanan
session_destroy();

// Redirect ke halaman login atau halaman lainnya
header("location: index.php")
=======
 session_start();

// Hapus semua data sesi
 session_unset();

// Hapus sesi dari penyimpanan
session_destroy();

 // Redirect ke halaman login atau halaman lainnya
 header("location: index.php");
>>>>>>> 3685a77bdaceeae07c47d1c192b3fb7df21e961c
exit;
?>