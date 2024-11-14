<?php
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($conn, "SELECT * FROM admins WHERE username='$username' AND password='$password'") or die(mysqli_error($conn));
if(mysqli_num_rows($query)) {
    session_start();
    $_SESSION["username"] = $username;
    header("Location:../../pages/beranda.php");
}else {
    header("Location:../../pages/login.php?islogin=gagal_login");
}
?>
