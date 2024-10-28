<?php
    $hostname = "localhost" ;
    $username = "root" ;
    $password = "" ;
    $database = "kemasin" ;

    $conn = mysqli_connect($hostname, $username, $password, $database) ;
    if ($conn){
        echo "Koneksi Berhasil!" ;
    } else {
        echo "Koneksi Gagal!" ;
        // die("Koneksi Gagal!") ;
    }                
?>

