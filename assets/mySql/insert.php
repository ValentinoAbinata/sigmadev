<?php
    include "connect.php" ;

    $nikP = $_POST['NIK'] ;
    $emailP = $_POST['email'] ;
    $first_name = $_POST['first_name'] ;
    $last_name = $_POST['last_name'] ;
    $jkP = $_POST['gender'] ;
    $lahirP = $_POST['tLahir'] ;
    $telpP = $_POST['phone'] ;
    $domisiliP = $_POST['domisili'] ;
    $isShow = $_POST['isShow'] ;
    $selectedLayanan = $_POST['selectedLayanan'] ;

    $namaP = $first_name . ' ' . $last_name ;
    
    $query = mysqli_query($conn, "INSERT INTO pasien VALUES('$nikP', '$emailP', '$namaP', '$jkP', '$lahirP', '$telpP', '$domisiliP', '$isShow', '$selectedLayanan')") or die(mysqli_error($conn)) ;
    if ($query){
        echo "Proses Input Berhasil, Ingin Lihat Hasil? <a href='../../pages/beranda.php'> Kembali ke Beranda </a>" ;
    }
?>