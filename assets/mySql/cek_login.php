<?php
include 'connect.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM admins WHERE username='$username' AND password='$password'") or die(mysqli_error($conn));
    if(mysqli_num_rows($query)) {
        session_start();
        $_SESSION["username"] = $username;
        header("Location:../../pages/aberanda.php?login=berhasil");
    }else {
        header("Location:../../pages/login.php?islogin=gagal_login");
}
}

if(isset($_POST['ulogin'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM user WHERE pengguna='$username' AND pass='$password'") or die(mysqli_error($conn));
    if(mysqli_num_rows($query)) { 
        session_start();
        $_SESSION["usernameU"] = $username;
        header("Location:../../pages/beranda.php?login=berhasil");
    }else {
        header("Location:../../pages/ulogin.php?islogin=gagal_login");
}
}
