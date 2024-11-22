<?php
    include("../assets/mySql/connect.php");
    $query = mysqli_query($conn, "SELECT p.emailP, p.namaP, p.jkP, p.lahirP, p.telpP,p.isShow, p.domisiliP, v.namaVaksin 
                          FROM pasien AS p INNER JOIN vaksin AS v ON p.id = v.id ORDER BY p.namaP ASC") ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="../assets/cdn/flowbite.min.css" />
</head>

<body>
    <?php include "../layout/navbar.php" ?>
    <div style="background-image : url('../assets/image/dakes.avif'); background-size: cover;">
        <div style=" padding: 5%; padding-top : 9%; padding-bottom : 0%; min-height:75dvh;">
            <p class="text-center text-4xl font-bold mb-10" style="color: #003366"> Data Kesehatan </p>

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
                                    Jenis Kelamin
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
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while ($data = mysqli_fetch_array($query)) : 
                            if($data['isShow'] == 1) : 
                        ?>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $data['namaVaksin'] ?>
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




    <script src="../assets/cdn/flowbite.bundle.js"></script> 
    <script src="../assets/cdn/flowbite.min.js"></script>
</body>

</html>