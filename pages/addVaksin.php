<?php

    session_start();
    if(!isset($_SESSION['username'])){
        header("location:login.php?islogin=false");
        
    }
    include("../assets/mySql/connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="../assets/cdn/flowbite.min.css" />
    <link rel="stylesheet" href="../assets/css/addVaksin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/cdn/aos.css">

</head>

<body>
    <div style="background-image: url('../assets/image/dakes.jpg'); background-size: cover; height:100dvh">
        <?php include "../layout/anavbar.php" ?>
        <div style=" padding: 5%; padding-top : 9%; padding-bottom : 1%; min-height:75dvh;">
            <p class="text-center text-4xl font-bold text-gray-800 mb-10" data-aos="fade-up"> Tambah Vaksin </p>

            <div class="formAdd py-8 mx-auto" style="width:50%; margin-bottom : 8%;" data-aos="zoom-in">
                <form class="max-w-md mx-auto" method="POST" action="../assets/mySql/proses.php" id="AddForm"
                    enctype="multipart/form-data">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="namaVaksin" id="namaVaksin"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="namaVaksin"
                            class="peer-focus:font-medium absolute text-sm text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                            Vaksin</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">

                        <textarea name="deskripsi" id="deskripsi"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required></textarea>
                        <label for="deskripsi"
                            class="peer-focus:font-medium absolute text-sm text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Deskripsi</label>
                    </div>


                    <div class=" relative z-0 w-full mb-5 group">
                        <label> Tipe Vaksin</label>
                        <div class="grid grid-cols-2 mt-2" style="margin-left:50px;">
                            <div class="flex items-center justify-center items-center">
                                <input id="covid" type="radio" value="covid" name="tipe"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="covid"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Covid</label>
                            </div>
                            <div class="flex items-center">
                                <input id="lainnya" type="radio" value="lainnya" name="tipe" checked
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="lainnya"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lainnya</label>
                            </div>
                        </div>
                    </div>
                    <!-- input file -->
                    <div class="flex flex-col items-center mb-7 mt-4">
                        <p class="text-gray-600 font-semibold mb-2">Upload gambar vaksin sebagai bukti:</p>
                        <div class="relative w-64">
                            <label for="image"
                                class="btn-file bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 flex items-center justify-center space-x-2 cursor-pointer">
                                <i class="fa fa-upload text-white"></i>
                                <span id="uploadLabel">Pilih File</span>
                            </label>
                            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png"
                                class="absolute inset-0 opacity-0 cursor-pointer" />
                        </div>
                    </div>


                    <!-- manipulate submit -->
                    <div class="grid grid-cols-2 gap-6 flex justify-center items-center">
                        <button type="button" id="confirmButton" name="submitAdd" value="submitAdd"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 mx-auto focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-2 py-2 flex items-center justify-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-6 h-6 inline-block mr-2 text-whitetext-gray-800 dark:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Submit
                        </button>
                        <!-- submit real -->
                        <button type="submit" id="realSubmitButton" name="submitAdd" value="submitAdd"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 mx-auto focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-2 py-2 flex items-center justify-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            style="display: none;">
                            <svg class="w-6 h-6 inline-block mr-2 text-whitetext-gray-800 dark:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Submit
                        </button>

                        <a href="alaykes.php"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 mx-auto focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm w-32 px-2 py-2 flex items-center justify-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            <svg class="w-6 h-6 mr-2 text-white dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M3 9h13a5 5 0 0 1 0 10H7M3 9l4-4M3 9l4 4" />
                            </svg>
                            Kembali
                        </a>
                    </div>



                </form>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="../assets/src/addVaksin.js">
        </script>


    </div>


    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/cdn/flowbite.bundle.js"></script>
    <script src="../assets/cdn/aos.js"></script>
    <script>
    AOS.init({
        duration: 1500,
        once: false,
        loop: true
    });
    </script>
</body>

</html>