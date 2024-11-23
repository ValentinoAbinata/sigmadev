<?php

session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php?islogin=false");
    
}
include("../assets/mySql/connect.php");

$query = mysqli_query($conn, "SELECT * FROM vaksin");
// Ambil semua data vaksin menjadi array
$vaksinData = [];
while ($data = mysqli_fetch_array($query)) {
    $vaksinData[] = $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    
    <link rel="stylesheet" href="../assets/css/alaykes.css">
    <link rel="stylesheet" href="../assets/cdn/flowbite.min.css" />
    <link href="../assets/cdn/aos.css" rel="stylesheet">


</head>

<body style="background-image: url('../assets/image/laykes.jpg'); background-size: cover height: 100dvh">
    <?php include "../layout/anavbar.php" ?>
    <div >
        <div style="padding: 5%; padding-top: 3%; padding-bottom: 0%; min-height:75vh;">
            <p class="text-center text-4xl font-bold mt-5 mb-10" style="color: #003366">Layanan Kesehatan</p>
            <center>
                <a href="addVaksin.php">
                    <button class="add-btn ">
                        <span>Tambah Vaksin</span>
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </button>
                </a>
            </center>
            <div class="py-5"></div>

            <?php 
                if(isset($_GET['insertSukses'])) :
                    if($_GET['insertSukses'] == "true") :
                ?>
            <center>

                <div id="alert-border-3"
                    class="flex rounded justify-center items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800"
                    role="alert" style="width: 50%;">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                        <p>Vaksin baru berhasil ditambahkan!</p>
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
            </center>
            <?php
                    endif;
                endif;
            ?>
            

         


            <div class="flex flex-wrap grid grid-rows w-full mb-3" style="padding-top:50px; padding-right:14px;"
                data-aos="zoom-in-up">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0" style="padding-left: 15px;">
                    <h1 class="text-3xl font-bold mb-2 text-black">Pendataan Vaksin COVID-19</h1>
                    <div class="h-1 bg-red-600 rounded" style="width: 138px; margin-left: 295px;"></div>
                </div>
                <p class="col-span-2 text-md text-black text-justify" style="padding-left: 15px;margin-top: 20px;">
                    Pendataan Vaksinasi COVID-19 untuk Masyarakat
                    Dalam upaya mendukung program vaksinasi nasional, kami menyediakan platform untuk mendata vaksinasi
                    COVID-19 yang telah dilaksanakan di berbagai daerah. Kami berkomitmen untuk memberikan data yang
                    akurat dan transparan terkait vaksinasi, yang bertujuan untuk memastikan setiap individu mendapatkan
                    akses vaksin yang tepat demi kesehatan masyarakat yang lebih baik. Dengan informasi ini, masyarakat
                    diharapkan dapat lebih memahami pentingnya vaksinasi dalam melawan pandemi.</p>
            </div>

            <div class="px-3 py-3">
                <div class="grid grid-cols-4 items-center block rounded-lg bg-white p-6 text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white shadow-lg hover:shadow-xl"
                    data-aos="fade-in">
                    <?php
                    foreach ($vaksinData as $data) :
                        if ($data['tipe'] == "covid") :
                    ?>
                    <!-- Kolom Teks -->
                    <div class="col-span-3 pembuka p-4" data-aos="fade-up">
                        <h2 class="text-2xl font-bold mb-4 text-indigo-600"
                            style="border-left: 4px solid #000; padding-left: 10px;">
                            <?= $data['namaVaksin'] ?>
                        </h2>
                        <p class="text-md text-gray-700 mb-6 mt-5 px-3"
                            style="border-right: 4px solid #000; text-align: justify;">
                            <?= $data['deskripsi'] ?>
                        </p>
                        <form action="aformLayan.php" method="GET" class="w-full flex space-x-5">
                            <button type="submit" class="tombolP" name="layanan" value="<?= $data['namaVaksin'] ?>">
                                <span class="hover-underline-animation px-5 mx-auto">Pilih Vaksin</span>
                            </button>
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                            <!-- Delete Button -->
                            <a href="../assets/mySql/proses.php?deleteVaksin=<?=$data['id'];?>&deleteFile=<?=$data['imgV'];?>"
                                class="button bin-button" onclick="return confirm('Yakin ingin menghapus data ini?');">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 39 7" class="bin-top">
                                    <line stroke-width="4" stroke="white" y2="5" x2="39" y1="5"></line>
                                    <line stroke-width="3" stroke="white" y2="1.5" x2="26.0357" y1="1.5" x1="12"></line>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 33 39"
                                    class="bin-bottom">
                                    <mask fill="white" id="path-1-inside-1_8_19">
                                        <path d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z">
                                        </path>
                                    </mask>
                                    <path mask="url(#path-1-inside-1_8_19)" fill="white"
                                        d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z">
                                    </path>
                                    <path stroke-width="4" stroke="white" d="M12 6L12 29"></path>
                                    <path stroke-width="4" stroke="white" d="M21 6V29"></path>
                                </svg>

                            </a>
                        </form>

                    </div>

                    <!-- Kolom Gambar -->
                    <form action="aformLayan.php" method="GET" class="w-full">
                        <button type="submit" name="layanan" value="<?= $data['namaVaksin'] ?>" class="w-full">
                            <div class="flex justify-center bg-center bg-cover overflow-hidden">
                                <img src="../assets/uploadVaksin/<?=$data['imgV']?>" alt="vaksin Desa"
                                    class="rounded-lg object-fit bg-cover infoT" data-aos="fade-right"
                                    style="height:250px; width:250px;">
                            </div>
                        </button>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    </form>
                    <?php
                    endif;    
                endforeach; 
                    ?>
                </div>
            </div>

            <div class="flex flex-wrap grid grid-rows w-full mb-3" style="padding-top:80px; padding-right:14px;"
                data-aos="zoom-in-up">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0" style="padding-left: 15px;">
                    <h1 class="text-3xl font-bold mb-2 text-black">Pendataan Vaksin Lainnya</h1>
                    <div class="h-1 bg-red-600 rounded" style="width: 270px;"></div>
                </div>
                <p class="col-span-2 text-md text-black text-justify" style="padding-left: 15px;margin-top: 20px;">
                    Kami juga menyediakan informasi mengenai berbagai jenis vaksinasi penting lainnya yang diperlukan
                    untuk kesehatan masyarakat, seperti vaksin campak, polio, rubella, dan lain-lain. Data vaksinasi ini
                    penting
                    untuk mendukung upaya pencegahan penyakit menular dan meningkatkan kualitas hidup di komunitas desa.
                    Kami berharap informasi ini dapat mempermudah masyarakat dalam mengambil langkah-langkah preventif
                    yang dibutuhkan untuk menjaga kesehatan dan kesejahteraan bersama.</p>
            </div>

            <div class="px-3 py-3" style="padding-bottom:70px;">
                <div
                    class="grid grid-cols-4 items-center block rounded-lg bg-white p-6 text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white shadow-lg hover:shadow-xl">
                    <?php
                    $i = 0;
                    foreach ($vaksinData as $data) :
                        // Cek apakah tipe vaksin adalah "lainnya"
                        if ($data['tipe'] == "lainnya") :
                            // Tentukan layout berdasarkan genap atau ganjil
                            $kiri = $i % 2 == 0;
                            $i++;
                    ?>

                    <?php if ($kiri): ?>
                    <!-- Kolom Teks -->
                    <div class="col-span-3 pembuka p-4" data-aos="fade-up">
                        <h2 class="text-2xl font-bold mb-4 text-indigo-600"
                            style="border-left: 4px solid #000; padding-left: 10px;">
                            <?= $data['namaVaksin'] ?>
                        </h2>
                        <p class="text-md text-gray-700 mb-6 mt-5 px-3"
                            style="border-right: 4px solid #000; text-align: justify;">
                            <?= $data['deskripsi'] ?>
                        </p>
                        <form action="aformLayan.php" method="GET" class="w-full flex space-x-5">
                            <button type="submit" class="tombolP" name="layanan" value="<?= $data['namaVaksin'] ?>">
                                <span class="hover-underline-animation px-5 mx-auto">Pilih Vaksin</span>
                            </button>
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                            <a href="../assets/mySql/proses.php?deleteVaksin=<?=$data['id'];?>&deleteFile=<?=$data['imgV'];?>"
                                class="button bin-button" onclick="return confirm('Yakin ingin menghapus data ini?');">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 39 7" class="bin-top">
                                    <line stroke-width="4" stroke="white" y2="5" x2="39" y1="5"></line>
                                    <line stroke-width="3" stroke="white" y2="1.5" x2="26.0357" y1="1.5" x1="12">
                                    </line>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 33 39"
                                    class="bin-bottom">
                                    <mask fill="white" id="path-1-inside-1_8_19">
                                        <path d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z">
                                        </path>
                                    </mask>
                                    <path mask="url(#path-1-inside-1_8_19)" fill="white"
                                        d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z">
                                    </path>
                                    <path stroke-width="4" stroke="white" d="M12 6L12 29"></path>
                                    <path stroke-width="4" stroke="white" d="M21 6V29"></path>
                                </svg>
                            </a>
                        </form>
                    </div>

                    <!-- Kolom Gambar -->
                    <form action="aformLayan.php" method="GET" class="w-full">
                        <button type="submit" name="layanan" value="<?= $data['namaVaksin'] ?>" class="w-full">
                            <div class="flex justify-center bg-center bg-cover overflow-hidden">
                                <img src="../assets/uploadVaksin/<?=$data['imgV']?>" alt="vaksin Desa"
                                    class="rounded-lg object-fit bg-cover infoT" data-aos="fade-left"
                                    style="height:250px; width:250px;">
                            </div>
                        </button>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    </form>


                    <?php else: ?>
                    <!-- Kolom Gambar -->
                    <form action="aformLayan.php" method="GET" class="w-full">
                        <button type="submit" name="layanan" value="<?= $data['namaVaksin'] ?>" class="w-full">
                            <div class="flex justify-center bg-center bg-cover overflow-hidden">
                                <img src="../assets/uploadVaksin/<?=$data['imgV']?>" alt="vaksin Desa"
                                    class="rounded-lg object-fit bg-cover infoT" data-aos="fade-left"
                                    style="height:250px; width:250px;">
                            </div>
                        </button>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    </form>

                    <!-- Kolom Teks -->
                    <div class="col-span-3 pembuka p-4" data-aos="fade-up">
                        <h2 class="text-2xl font-bold mb-4 text-indigo-600"
                            style="border-left: 4px solid #000; padding-left: 10px;">
                            <?= $data['namaVaksin'] ?>
                        </h2>
                        <p class="text-md text-gray-700 mb-6 mt-5 px-3"
                            style="border-right: 4px solid #000; text-align: justify;">
                            <?= $data['deskripsi'] ?>
                        </p>
                        <form action="aformLayan.php" method="GET" class="w-full flex space-x-5">
                            <button type="submit" class="tombolP" name="layanan" value="<?= $data['namaVaksin'] ?>">
                                <span class="hover-underline-animation px-5 mx-auto">Pilih Vaksin</span>
                            </button>
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                            <a href="../assets/mySql/proses.php?deleteVaksin=<?=$data['id'];?>&deleteFile=<?=$data['imgV'];?>"
                                class="button bin-button" onclick="return confirm('Yakin ingin menghapus data ini?');">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 39 7" class="bin-top">
                                    <line stroke-width="4" stroke="white" y2="5" x2="39" y1="5"></line>
                                    <line stroke-width="3" stroke="white" y2="1.5" x2="26.0357" y1="1.5" x1="12">
                                    </line>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 33 39"
                                    class="bin-bottom">
                                    <mask fill="white" id="path-1-inside-1_8_19">
                                        <path d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z">
                                        </path>
                                    </mask>
                                    <path mask="url(#path-1-inside-1_8_19)" fill="white"
                                        d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z">
                                    </path>
                                    <path stroke-width="4" stroke="white" d="M12 6L12 29"></path>
                                    <path stroke-width="4" stroke="white" d="M21 6V29"></path>
                                </svg>
                            </a>
                        </form>
                    </div>
                    <?php endif; ?>

                    <?php
            endif;
        endforeach;
        ?>
                </div>
            </div>

        </div>
    </div>
    <?php include "../layout/footer.php" ?>
    </div>
    <script src="../assets/cdn/flowbite.bundle.js"></script>
    <script src="../assets/cdn/flowbite.min.js"></script>
    <script src="../assets/cdn/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    AOS.init({
        duration: 1500,
        once: false,
        loop: true
    });

    function showMessage() {
        // Menangkap parameter deleteSukses dari URL
        const params = new URLSearchParams(window.location.search);
        const deleteSukses = params.get('deleteSukses');

        // Menampilkan SweetAlert sesuai status deleteSukses
        if (deleteSukses === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Vaksin berhasil dihapus!',
                confirmButtonColor: '#3085d6',
            });
        } else if (deleteSukses === 'failed') {
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Vaksin gagal dihapus karena ada pasien terkait!',
                confirmButtonColor: '#d33',
            });
        } else if (deleteSukses === 'error') {
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Terjadi kesalahan saat menghapus vaksin!',
                confirmButtonColor: '#d33',
            });
        }
    }
    window.onload = showMessage;
</script>

</body>

</html>