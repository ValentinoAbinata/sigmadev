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
        
        $query = mysqli_query($conn, "INSERT INTO pasien VALUES('$nikP', '$emailP', '$first_name','$last_name','$namaP', '$jkP', '$lahirP', '$telpP', '$domisiliP', '$isShow', '$selectedLayanan')") or die(mysqli_error($conn)) ;
    }
    header('Location : ../../pages/a.php') ; 
    ?>