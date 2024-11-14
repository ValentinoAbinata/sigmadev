<?php

    include "connect.php" ;
    //insert brutal
    if(isset($_POST["formLayan"])){
        $nikP = $_POST['NIK'] ;
        $emailP = $_POST['email'] ;
        $first_name = $_POST['first_name'] ;
        $last_name = $_POST['last_name'] ;
        $jkP = $_POST['gender'] ;
        $lahirP = $_POST['tLahir'] ;
        $telpP = $_POST['phone'] ;
        $domisiliP = $_POST['domisili'] ;
        $isShow = $_POST['isShow'] ;
        $id = $_POST['id'] ;

        $namaP = $first_name . ' ' . $last_name ;

        if($_FILES["image"]["error"] == 4){
          echo
          "<script> alert('Gambar Tidak Tersedia!'); </script>"
          ;
        }
        else{
          $fileName = $_FILES["image"]["name"]; //Nama File
          $fileSize = $_FILES["image"]["size"]; //Ukuran file
          $temp_name = $_FILES["image"]["tmp_name"]; //untuk menampung file
      
          $khususon = ['jpg', 'jpeg', 'png']; // file yang bisa diupload
          $imgExtension = explode('.', $fileName);
          $imgExtension = strtolower(end($imgExtension));
          if ( !in_array($imgExtension, $khususon) ){
            echo
            "
            <script>
              alert('Extension Gambar Tidak Valid!');
            </script>
            ";
          }
          else if($fileSize > 10000000){ //max 10 mb
            echo
            "
            <script>
              alert('Ukuran Gambar Terlalu Besar!');
            </script>
            ";
          }
          else{
            $uploadFoto = uniqid();
            $uploadFoto .= '.' . $imgExtension;
      
            move_uploaded_file($temp_name, '../uploadImg/' . $uploadFoto);
            $query = mysqli_query($conn, "INSERT INTO pasien VALUES('$nikP', '$emailP', '$first_name','$last_name','$namaP', '$jkP', '$lahirP', '$telpP', '$domisiliP', '$isShow', '$id', '$uploadFoto')") or die(mysqli_error($conn)) ;
            if($query){
                header('Location:../../pages/beranda.php?insertSukses=true') ; 
                exit ();
            }
          }
        }
      }






    // //  Submit Proses Insert original
    // if (isset($_POST['formLayan'])){

    // $nikP = $_POST['NIK'] ;
    // $emailP = $_POST['email'] ;
    // $first_name = $_POST['first_name'] ;
    // $last_name = $_POST['last_name'] ;
    // $jkP = $_POST['gender'] ;
    // $lahirP = $_POST['tLahir'] ;
    // $telpP = $_POST['phone'] ;
    // $domisiliP = $_POST['domisili'] ;
    // $isShow = $_POST['isShow'] ;
    // $id = $_POST['id'] ;

    // $namaP = $first_name . ' ' . $last_name ;

    // $query = mysqli_query($conn, "INSERT INTO pasien VALUES('$nikP', '$emailP', '$first_name','$last_name','$namaP', '$jkP', '$lahirP', '$telpP', '$domisiliP', '$isShow', '$id')") or die(mysqli_error($conn)) ;
    // if($query){
    //     header('Location: ../../pages/beranda.php?insertSukses=true') ; 
    //     exit ();
    // }
    // }



    //  Submit Proses Delete
    if (isset($_GET['deleteNikP'])) {
        $nikP = $_GET['deleteNikP'] ;
        $query = mysqli_query($conn, "DELETE FROM pasien WHERE nikP = $nikP;") or die(mysqli_error($conn)) ;
        if($query){
            header('Location: ../../pages/Adakes.php?deleteSukses=true') ; 
            exit() ;            
        }
    
    }
    //submit edit data
    if (isset($_POST['submitEdit'])) {
        $nikPawal = $_POST['nikPawal'];
        $nikP = $_POST['NIK'] ;
        $emailP = $_POST['email'] ;
        $first_name = $_POST['first_name'] ;
        $last_name = $_POST['last_name'] ;
        $jkP = $_POST['gender'] ;
        $lahirP = $_POST['tLahir'] ;
        $telpP = $_POST['phone'] ;
        $domisiliP = $_POST['domisili'] ;
        $isShow = $_POST['isShow'] ;
        $id = $_POST['id'] ;

    
        $namaP = $first_name . ' ' . $last_name ;
        $query = mysqli_query($conn,"UPDATE pasien  SET nikP='$nikP',emailP='$emailP',first_name='$first_name',last_name='$last_name', namaP='$namaP', jkP='$jkP', lahirP='$lahirP', telpP='$telpP', domisiliP='$domisiliP', isShow='$isShow', id='$id' where nikP='$nikPawal'") or die(mysqli_error($db));
        if($query){
            header('Location: ../../pages/AdaKes.php?editSukses=true') ;
            exit();
         }
    }