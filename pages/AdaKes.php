<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:login.php?islogin=false");
        
    }
    
    include("../assets/mySql/connect.php");
    $query = mysqli_query($conn, "SELECT p.nikP, p.emailP, p.namaP, p.jkP, p.lahirP, p.telpP, p.domisiliP, p.isShow, p.imgP, v.namaVaksin 
                          FROM pasien AS p INNER JOIN vaksin AS v ON p.id = v.id") ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
    <link rel="stylesheet" href="../assets/css/adakes.css" />
</head>


<body>
    <?php include "../layout/anavbar.php" ?>
    <div class="bg-gray-100">
        <div style=" padding: 7%; padding-top : 2%; padding-bottom : 0%; min-height:75dvh;">
            <p class="text-center text-4xl font-bold text-blue-700 mb-10"> Data Kesehatan </p>
            <div>
                <?php 
                if(isset($_GET['editSukses'])) :
                    if($_GET['editSukses'] == "true") :
                ?>
                <div id="alert-border-3"
                    class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                        <p>Data penduduk berhasil diupdate!</p>
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-border-3" aria-label="Close">
                        
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <?php
                    endif;
                endif;
            ?>

                <?php 
                if(isset($_GET['deleteSukses'])) :
                    if($_GET['deleteSukses'] == "true") :
                ?>
                <div id="alert-border-3"
                    class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                        <p>Data penduduk berhasil dihapus!</p>
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-border-3" aria-label="Close">
                        
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <?php
                    endif;
                endif;
            ?>
             <?php 
                if(isset($_GET['tampilSukses'])) :
                    if($_GET['tampilSukses'] == "true") :
                ?>
                <div id="alert-border-3"
                    class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                        <p>Data penduduk berhasil ditampilkan!</p>
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-border-3" aria-label="Close">
                        
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <?php
                    endif;
                endif;
            ?>

                <div class="mt-5">
                    <p class="text-start text-2xl font-bold text-gray-800 mb-5"> Data Tidak Tampil </p>
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Foto
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Layanan Kesehatan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    JK
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal Lahir
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nomor Telepon
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Domisili
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($data = mysqli_fetch_array($query)) : 
                            if($data['isShow'] == 0) : 
                        ?>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <td scope=""
                                    class="flex justify-center items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="../assets/uploadImg/<?= $data['imgP'] ?>" alt="ktp" style="width:100%">
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $data['namaVaksin'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $data['emailP'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $data['namaP'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $data['jkP'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $data['lahirP'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $data['telpP'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $data['domisiliP'] ?>
                                </td>
                                <td
                                    class="px-6 py-4 flex relative justify-center items-center space-x-2 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    <!-- Edit Button -->
                                    <a href="AformEdit.php?editNikP=<?=$data['nikP'];?>">
                                        <button class="editBtn gx-3 col">
                                            <svg height="1em" viewBox="0 0 512 512">
                                                <path
                                                    d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z">
                                                </path>
                                            </svg>
                                        </button>
                                    </a>

                                    <!-- Delete Button -->
                                    <a href="../assets/mySql/proses.php?deleteNikP=<?=$data['nikP'];?>">
                                        <button class="bin-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 39 7"
                                                class="bin-top">
                                                <line stroke-width="4" stroke="white" y2="5" x2="39" y1="5"></line>
                                                <line stroke-width="3" stroke="white" y2="1.5" x2="26.0357" y1="1.5"
                                                    x1="12"></line>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 33 39"
                                                class="bin-bottom">
                                                <mask fill="white" id="path-1-inside-1_8_19">
                                                    <path
                                                        d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z">
                                                    </path>
                                                </mask>
                                                <path mask="url(#path-1-inside-1_8_19)" fill="white"
                                                    d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z">
                                                </path>
                                                <path stroke-width="4" stroke="white" d="M12 6L12 29"></path>
                                                <path stroke-width="4" stroke="white" d="M21 6V29"></path>
                                            </svg>
                                        </button>
                                    </a>

                                    <!-- Tampil Button -->
                                    <a href="../assets/mySql/proses.php?tampilNikP=<?=$data['nikP'];?>">
                                        <button class="archiveBtn" title="Unarchive">
                                            <svg height="512" width="512" viewBox="0 0 2048 2048" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="white"
                                                    d="m0 0 1233 1 13 3 13 7 10 9 8 9 7 14 3 13v743l-3 13-7 14-8 10-10 8-14 7-12 3-14 1h-1183l-83-1-13-4-10-5-11-9-9-11-6-13-4-16-1-56v-74l1-604 2-14 5-12 7-11 7-8 13-9 11-5 9-2zm432 234v190h321l2-1 1-41v-147l-1-1zm-122 334-10 3-8 5-8 9-7 16-15 40-4 14v10l4 12 7 9 9 6 9 3 12 1h593l13-2 10-5 8-8 5-10 2-12-2-12-16-43-7-16-6-9-7-6-10-4-5-1h-8l-9 2-10 6-8 9-4 9-1 5v11l4 12-495 1 4-10 1-4v-9l-3-10-6-10-7-6-8-4-8-2z"
                                                    class="toshrink"></path>
                                                <path fill="white"
                                                    d="m0 0h947l15 3 12 5 12 7 12 11 9 13 6 13 3 11 1 7v297l-5-4-7-9-9-11-13-16-14-17-18-22-14-17-11-14-11-13-9-11-14-17-18-22-13-16-6-7-10-7-9-3-9-1h-709l-12 2-10 5-9 8-11 14-11 13-11 14-11 13-9 11-13 16-14 17-18 22-11 13-11 14-12 14-7 9-10 12-7 9-2 1-1-51v-225l1-23 3-14 5-12 7-11 11-12 14-10 14-6z"
                                                    class="toremainasis"></path>

                                                <path fill="white"
                                                    d="m0 0 646 1 12 5 9 9 5 10 2 10v32l-1 1h-710l-1-1v-36l3-9 5-9 8-7 11-5z"
                                                    class="tocome"></path>
                                                <path fill="white"
                                                    d="m0 0h833l12 3 11 7 7 8 5 10 2 8v42l-1 1h-905v-45l4-11 6-9 9-8 8-4z"
                                                    class="tocome2"></path>
                                            </svg>
                                        </button>
                                    </a>
                                </td>


                            </tr>
                            <?php
                                endif; 
                                endwhile ;
                            ?>
                        </tbody>
                    </table>
                </div>


                <div class="mt-10">
                    <p class="text-start text-2xl font-bold text-gray-800 mb-5"> Data Sudah Tampil </p>
                </div>
                <?php 
                if(isset($_GET['sembunyikanSukses'])) :
                    if($_GET['sembunyikanSukses'] == "true") :
                ?>
                <div id="alert-border-3"
                    class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                        <p>Data penduduk berhasil disembunyikan!</p>
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-border-3" aria-label="Close">
                        
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <?php
                    endif;
                endif;
            ?>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Foto
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Layanan Kesehatan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    JK
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal Lahir
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nomor Telepon
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Domisili
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query2 = $query = mysqli_query($conn, "SELECT p.nikP, p.emailP, p.namaP, p.jkP, p.lahirP, p.telpP, p.domisiliP, p.isShow, p.imgP, v.namaVaksin 
                                                            FROM pasien AS p INNER JOIN vaksin AS v ON p.id = v.id") ;
                            while ($dataTampil = mysqli_fetch_array($query)) : 
                            if($dataTampil['isShow'] == 1) : 
                        ?>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <td scope=""
                                    class="flex justify-center items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="../assets/uploadImg/<?= $dataTampil['imgP'] ?>" alt="ktp" style="width:75%">
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $dataTampil['namaVaksin'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $dataTampil['emailP'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $dataTampil['namaP'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $dataTampil['jkP'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $dataTampil['lahirP'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $dataTampil['telpP'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $dataTampil['domisiliP'] ?>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <!-- Tampil Button -->
                                    <a href="../assets/mySql/proses.php?sembunyikanNikP=<?=$dataTampil['nikP'];?>">
                                        <button class="archiveBtn" title="Unarchive">
                                            <svg height="512" width="512" viewBox="0 0 2048 2048" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="white"
                                                    d="m0 0 1233 1 13 3 13 7 10 9 8 9 7 14 3 13v743l-3 13-7 14-8 10-10 8-14 7-12 3-14 1h-1183l-83-1-13-4-10-5-11-9-9-11-6-13-4-16-1-56v-74l1-604 2-14 5-12 7-11 7-8 13-9 11-5 9-2zm432 234v190h321l2-1 1-41v-147l-1-1zm-122 334-10 3-8 5-8 9-7 16-15 40-4 14v10l4 12 7 9 9 6 9 3 12 1h593l13-2 10-5 8-8 5-10 2-12-2-12-16-43-7-16-6-9-7-6-10-4-5-1h-8l-9 2-10 6-8 9-4 9-1 5v11l4 12-495 1 4-10 1-4v-9l-3-10-6-10-7-6-8-4-8-2z"
                                                    class="toshrink"></path>
                                                <path fill="white"
                                                    d="m0 0h947l15 3 12 5 12 7 12 11 9 13 6 13 3 11 1 7v297l-5-4-7-9-9-11-13-16-14-17-18-22-14-17-11-14-11-13-9-11-14-17-18-22-13-16-6-7-10-7-9-3-9-1h-709l-12 2-10 5-9 8-11 14-11 13-11 14-11 13-9 11-13 16-14 17-18 22-11 13-11 14-12 14-7 9-10 12-7 9-2 1-1-51v-225l1-23 3-14 5-12 7-11 11-12 14-10 14-6z"
                                                    class="toremainasis"></path>

                                                <path fill="white"
                                                    d="m0 0 646 1 12 5 9 9 5 10 2 10v32l-1 1h-710l-1-1v-36l3-9 5-9 8-7 11-5z"
                                                    class="tocome"></path>
                                                <path fill="white"
                                                    d="m0 0h833l12 3 11 7 7 8 5 10 2 8v42l-1 1h-905v-45l4-11 6-9 9-8 8-4z"
                                                    class="tocome2"></path>
                                            </svg>
                                        </button>
                                    </a>
                                </td>


                            </tr>
                            <?php
                                endif; 
                                endwhile ;
                            ?>
                        </tbody>
                        
                    </table>
                </div>

            </div>

        </div>
        <?php include "../layout/footer.php" ?>
    </div>




    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>