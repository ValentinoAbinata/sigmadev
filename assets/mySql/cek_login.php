<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'sigmadev');

$username = $_POST['username'];
$password = $_POST['password'];

// Seleksi data admin yang sesuai
$query = mysqli_query($conn, "SELECT * FROM admins WHERE username='$username' AND password='$password'") or die(mysqli_error($conn));

// Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    // Ambil data admin
    $data = mysqli_fetch_assoc($query);

    // Set session
    $_SESSION['username'] = $data['username'];
    $_SESSION['status'] = "islogin";

    header("Location: ../../pages/beranda.php");
    exit();
} else {
    // Jika login gagal, arahkan kembali ke halaman login dengan pesan error
    header("Location: ../../pages/loginNew.php?islogin=gagal_login");
    exit();
}
?>
