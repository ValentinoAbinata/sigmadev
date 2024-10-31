<?php
    include("../assets/mySql/connect.php");
    $query = mysqli_query($conn, "SELECT * FROM pasien") ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
</head>

<body>

    <?php include "../layout/navbar.php" ?>
    <div class="bg-gray-100">
        <div style=" padding: 5%; padding-top : 9%; padding-bottom : 0%; min-height:75dvh;">
            <p class="text-center text-4xl font-bold text-blue-700 mb-10"> Data Kesehatan </p>

            <div>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
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
                                <th scope="col" class="px-6 py-3">
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
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $data['selectedLayanan'] ?>
                                </th>
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
                                <td class="flex">
                                    <a href="AformEdit.php?editNikP=<?=$data['nikP'];?>" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"> Edit </a>
                                    <a href="../assets/mySql/proses.php?deleteNikP=<?=$data['nikP'];?>" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900"> Delete </a>
                                    <a href="../assets/mySql/proses.php?nikP=<?=$data['nikP'];?>" class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900"> Tampilkan di Dakes</a>
                                </td>
                            </tr>
                            <?php
                                endif; 
                                endwhile ;
                            ?>
                            
                       <!-- ini nanti buat isShow == 1 tapi gaada tampilkandi dakes.. adanya jangan tampilkan di dakes :D-->
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