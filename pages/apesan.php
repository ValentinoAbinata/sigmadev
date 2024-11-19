<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:login.php?islogin=false");
        
    }
    
    include("../assets/mySql/connect.php");
    $query = mysqli_query($conn, "SELECT * FROM pesan") ;
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
            <p class="text-center text-4xl font-bold text-blue-700 mb-10"> Pesan Penduduk </p>
            <div>
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
                        <p>Pesan berhasil dihapus!</p>
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
                                <th scope="col" class="px-1 py-1 text-center">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    NIK
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Pesan
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            while ($data = mysqli_fetch_array($query)) : 
                           
                        ?>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <td class="px-1 py-1 text-center">
                                    <?= $i; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $data['nikP'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $data['deskripsi'] ?>
                                </td>
                                <td
                                    class="px-6 py-4 flex relative justify-center items-center space-x-2 ">

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
                                </td>


                            </tr>
                            <?php
                                $i++;
                                endwhile ;
                            ?>
                        </tbody>
                    </table>
                </div>


        </div>
        <?php include "../layout/footer.php" ?>
    </div>




    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>