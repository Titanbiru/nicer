<?php
// Mulai sesi
session_start();

// Hapus semua data sesi
session_unset();
session_destroy();

// Arahkan kembali ke halaman login
header("Location: login.php");
exit();
?>

