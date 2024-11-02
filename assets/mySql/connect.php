<?php
function debug_to_console($data)//  Biar Echo Koneksi Berhasil! dan Koneksi Gagal! keluar di console

    {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sigmaDev";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if ($conn) {
        debug_to_console("Koneksi Berhasil!");
    } else {
       debug_to_console("Koneksi Gagal!");
    }