<?php
session_start();
include 'koneksi.php'; // Pastikan di sini variabelnya adalah $koneksi

// Menggunakan $koneksi sesuai dengan file koneksi.php milikmu
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

// Query menggunakan variabel $koneksi
$query  = "SELECT * FROM tb_admin WHERE Username='$username' AND Password='$password'";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    $_SESSION['admin'] = $data['Username'];
    $_SESSION['status'] = "login";
    
    header("location: ds_admin.php"); 
    exit(); 
} else {
    header("location: login.php?error=gagal");
    exit();
}
?>