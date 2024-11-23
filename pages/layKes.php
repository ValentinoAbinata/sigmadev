<?php
include("../assets/mySql/connect.php");

$query = mysqli_query($conn, "SELECT * FROM vaksin");
// Ambil semua data vaksin menjadi array
$vaksinData = [];
while ($data = mysqli_fetch_array($query)) {
    $vaksinData[] = $data;
}

session_start() ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="../assets/css/laykes.css">
    <link rel="stylesheet" href="../assets/cdn/flowbite.min.css" />
    <link href="../assets/cdn/aos.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>


</head>

<body style="background-image: url('../assets/image/laykes.jpg'); background-size: cover; height: 100dvh; font-family: Poppins">
<?php 
    if(isset($_SESSION['usernameU'])){
        include "../layout/unavbar.php" ;
    } else {
        if(isset($_SESSION['username'])){
            include "../layout/unavbar.php" ;
        } else {
            include "../layout/navbar.php" ;
        }
    }
    ?>
  
        <div style="padding: 5%; padding-top: 9%; padding-bottom: 0%; min-height:75vh;">
            <p class="text-center text-4xl font-bold mt-5 mb-10" style="color: #003366">Layanan Kesehatan</p>


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
                        <form action="formLayan.php" method="GET" class="w-full flex space-x-5">
                            <button type="submit" class="tombolP" name="layanan" value="<?= $data['namaVaksin'] ?>">
                                <span class="hover-underline-animation px-5 mx-auto">Pilih Vaksin</span>
                            </button>
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        </form>

                    </div>

                    <!-- Kolom Gambar -->
                    <form action="formLayan.php" method="GET" class="w-full">
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
                        <form action="formLayan.php" method="GET" class="w-full flex space-x-5">
                            <button type="submit" class="tombolP" name="layanan" value="<?= $data['namaVaksin'] ?>">
                                <span class="hover-underline-animation px-5 mx-auto">Pilih Vaksin</span>
                            </button>
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">

                        </form>
                    </div>

                    <!-- Kolom Gambar -->
                    <form action="formLayan.php" method="GET" class="w-full">
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
                    <form action="formLayan.php" method="GET" class="w-full">
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
                        <form action="formLayan.php" method="GET" class="w-full flex space-x-5">
                            <button type="submit" class="tombolP" name="layanan" value="<?= $data['namaVaksin'] ?>">
                                <span class="hover-underline-animation px-5 mx-auto">Pilih Vaksin</span>
                            </button>
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">

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
  
    <script src="../assets/cdn/flowbite.bundle.js"></script>
    <script src="../assets/cdn/flowbite.min.js"></script>
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