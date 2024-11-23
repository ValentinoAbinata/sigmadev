
<?php
      include "connect.php" ;
      //insert brutal pendataan diuser
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
          $checkQuery = mysqli_query($conn, "SELECT * FROM pasien WHERE nikP = '$nikP'");
          if (mysqli_num_rows($checkQuery) > 0) {
              // Jika NIK sudah ada
              echo "
              <script>
                  alert('Terdapat kesalahan pada NIK, silahkan ulangi lagi!');
                  window.history.back();
              </script>";
              exit();
          }

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

        //insert brutal pendataan diadmin
      if(isset($_POST["aformLayan"])){
     
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

        $query = mysqli_query($conn, "SELECT * FROM pasien WHERE nikP = '$nikP'");
        if (mysqli_num_rows($query) > 0) {
            // Jika NIK sudah ada
            echo "
            <script>
                alert('Terdapat kesalahan pada NIK, silahkan ulangi lagi!');
                window.history.back();
            </script>";
            exit();
        }
        
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
                header('Location:../../pages/adakes.php?insertSukses=true') ; 
                exit ();
            }
          }
        }
      }


    //insert brutal tambah Vaksin
    if(isset($_POST["submitAdd"])){
      $namaVaksin = $_POST['namaVaksin'] ;
      $deskripsi = $_POST['deskripsi'] ;
      $tipe = $_POST['tipe'] ;

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
        else if($fileSize > 10000000){ //max 20 mb
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
    
          move_uploaded_file($temp_name, '../uploadVaksin/' . $uploadFoto);
          $query = mysqli_query($conn, "INSERT INTO vaksin (namaVaksin, deskripsi, tipe, imgV) VALUES ('$namaVaksin', '$deskripsi', '$tipe', '$uploadFoto')") or die(mysqli_error($conn));

          if($query){
              header('Location:../../pages/alaykes.php?insertSukses=true') ; 
              exit ();
          }
        }
      }
    }

    //register user
    if(isset($_POST["uregister"])){
      $pengguna = $_POST['pengguna'];
      $pass = $_POST['pass'];
      $query1 = mysqli_query($conn, "SELECT * FROM user");
      while($data=mysqli_fetch_array($query1)){
          if($pengguna == $data['pengguna']){
              header("Location:../../pages/ulogin.php?register=gagal_daftar");
              exit();
          }
      }
      $query = mysqli_query($conn,"INSERT INTO user VALUES ('','$pengguna','$pass')");
      header("Location:../../pages/ulogin.php?register=berhasil");
    
    }

    //submit Pesan
    if(isset($_POST['submitPesan'])){
        $namaP = $_POST['namaP'] ;
        $deskripsi = $_POST['deskripsi'] ;
        $query = mysqli_query($conn, "INSERT INTO pesan VALUES('','$namaP', '$deskripsi')") or die(mysqli_error($conn)) ;
        if($query){
          header('Location:../../pages/fTentKami.php?pesanSukses=true') ;
          exit();
        }
    }

    //Submit Proses Delete
    if (isset($_GET['deleteNikP'])) {
        $nikP = $_GET['deleteNikP'] ;
        $file = $_GET['deleteFile'] ;
        $query = mysqli_query($conn, "DELETE FROM pasien WHERE nikP = $nikP;") or die(mysqli_error($conn)) ;
        if($query){
            unlink('../uploadImg/'.$file) ;
            header('Location:../../pages/Adakes.php?deleteSukses=true') ; 
            exit() ;            
        }
    
    }
    //submit delete vaksin
    if (isset($_GET['deleteVaksin'])) {
      $id = $_GET['deleteVaksin'];
      $file = $_GET['deleteFile'];
      $cekQuery = "SELECT COUNT(*) as jumlah FROM pasien WHERE id = $id";
      $result = mysqli_query($conn, $cekQuery);
      $data = mysqli_fetch_assoc($result);
  
      if ($data['jumlah'] > 0) {
          // Ada pasien terkait, tidak dapat dihapus
          header("Location:../../pages/alaykes.php?deleteSukses=failed");
      } else {
          // Tidak ada pasien terkait, hapus vaksin
          $deleteQuery = "DELETE FROM vaksin WHERE id = $id";
          if (mysqli_query($conn,$deleteQuery)) {
              // Reset ulang ID setelah data dihapus
              mysqli_query($conn, "SET @count = 0;") or die(mysqli_error($conn));
              mysqli_query($conn, "UPDATE vaksin SET id = @count:= @count + 1;") or die(mysqli_error($conn));
              mysqli_query($conn, "ALTER TABLE vaksin AUTO_INCREMENT = 1;") or die(mysqli_error($conn));
              unlink('../uploadVaksin/'.$file);

              header('Location:../../pages/alaykes.php?deleteSukses=success');
          } else {
            header('Location:../../pages/alaykes.php?deleteSukses=error');
          }
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
            header('Location:../../pages/AdaKes.php?editSukses=true') ;
            exit();
         }
    }

    //submit tampil
    if (isset($_GET['tampilNikP'])) {
      $nikP = $_GET['tampilNikP'] ;
      $query = mysqli_query($conn, "UPDATE pasien SET isShow = '1' WHERE nikP = '$nikP'") or die(mysqli_error($conn)) ;
      if($query){
            header('Location:../../pages/Adakes.php?tampilSukses=true') ;
        }
   }
   //submit sembunyikan
   if (isset($_GET['sembunyikanNikP'])) {
    $nikP = $_GET['sembunyikanNikP'] ;
    $query = mysqli_query($conn, "UPDATE pasien SET isShow = '0' WHERE nikP = '$nikP'") or die(mysqli_error($conn)) ;
    if($query){
        header('Location:../../pages/Adakes.php?sembunyikanSukses=true') ;
    }
  }

  //Submit delete Pesan
  if (isset($_GET['deletePesan'])) {
    $idPesan = $_GET['deletePesan'] ;
    $query = mysqli_query($conn, "DELETE FROM pesan WHERE idPesan = $idPesan;") or die(mysqli_error($conn)) ;
    if($query){
      header('Location:../../pages/apesan.php?deleteSukses=true') ; 
      exit() ;            
    }  
  }

  //logout admin
  if(isset($_GET['logout'])){
      session_start();
      session_unset();
      session_destroy();
      header("Location:../../pages/login.php?islogin=logout");  

  }
  //logout user
  if(isset($_GET['ulogout'])){
    session_start();
    session_unset();
    session_destroy();
    header("Location:../../pages/beranda.php?logout=true");  
  }
?>