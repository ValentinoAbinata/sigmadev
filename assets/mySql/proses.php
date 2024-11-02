<?php
include "connect.php" ;

    //  Submit Proses Insert
    if (isset($_POST['formLayan'])){

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
        if($query){
        header('Location : ../../pages/beranda.php?insertSukses=true', true, 301) ; exit ;
        }
}


    //  Submit Proses Delete
    if (isset($_GET['deleteNikP'])) {
        $nikP = $_GET['deleteNikP'] ;
        $query = mysqli_query($conn, "DELETE FROM pasien WHERE nikP = $nikP;") or die(mysqli_error($conn)) ;
        if($query){
            header('Location: ../../pages/beranda.php?deleteSukses=true', true, 301) ; exit ;            
        }
    
    }
    //submit edit data
    if (isset($_POST['submitEdit'])) {
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
        $query = mysqli_query($conn,"UPDATE pasien  SET nikP='$nikP',emailP='$emailP', namaP='$namaP', jkP='$jkP', lahirP='$lahirP', telpP='$telpP', domisiliP='$domisiliP', isShow='$isShow', selectedLayanan='$selectedLayanan' where nikP='$nikP'") or die(mysqli_error($db));
        if($query){
            header('Location: ../../pages/beranda.php?editSukses=true', true, 301) ;
         }
    }