<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="../assets/css/tentKami.css">
    <link rel="stylesheet" href="../assets/cdn/flowbite.min.css" />
    <link href="../assets/cdn/aos.css" rel="stylesheet">
</head>

<body>
    <?php include "../layout/navbar.php" ?>
    <div class="background">
        <div style=" padding: 10%; padding-top : 9%; padding-bottom : 0%; min-height:75dvh;">
            <!-- Notification Modal -->
            <div id="notif"
                class="<?php echo isset($_GET['pesanSukses']) && $_GET['pesanSukses'] == 'true' ? '' : 'hidden'; ?> fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
                <div class="bg-white rounded-lg shadow-lg max-w-sm w-full">
                    <div class="p-6 text-center">
                        <h2 class="text-xl font-bold mb-4 text-gray-900">Pesan berhasil terkirim!</h2>
                        <button type="button" id="closeNotif"
                            class="bg-blue-500 text-white px-4 py-2 rounded-md">OK</button>
                    </div>
                </div>
            </div>

            <p class="text-center text-4xl font-bold text-white mb-5"> OUR TEAM </p>

            <section class="text-gray-600 body-font">
                <div class="container py-0 mx-auto" style="padding-left : 10%; padding-right : 10%">
                    <div class="flex flex-col text-center w-full mb-0">
                        <h1 class="text-2xl font-medium title-font mb-0 text-gray-900"></h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>
                    </div>
                    <div class="flex flex-wrap -m-4">
                        <div class="p-4 basis-1/2 flex-auto" style="width:40%;">
                            <div class="h-full flex flex-col items-center text-center image-hover">

                                <img alt="team" class="default-image rounded-lg w-full object-cover object-center mb-4"
                                    src="../assets/image/valent.png" data-aos="fade-up">
                                <img alt="team hover"
                                    class="hover-image rounded-lg w-full object-cover object-center mb-4"
                                    src="../assets/image/valent2.jpg">
                                <div class="w-full text-font" data-aos="zoom-in">
                                    <h2 class="title-font font-medium text-lg text-white">Valentino Abinata</h2>
                                    <h3 class="text-white mb-3">123230013</h3>
                                    <p class="mb-4" style="color:#ffffff;">Background : Umumnya dikenal dengan julukan Northern Blade, adalah
                                        Pemimpin Sekte Sekte Surgawi Utara generasi ke-5. Dia juga satu-satunya praktisi
                                        seni bela diri rahasia yang dikenal sebagai ''Gathering Of Ten Thousand
                                        Shadows'', dan putra dari Pemimpin Sekte generasi ke-4, Jin Kwan-Ho.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 basis-1/2 flex-auto" style="width:40%;">
                            <div class="h-full flex flex-col items-center text-center image-hover">
                                <img alt="team" class="default-image rounded-lg w-full object-cover object-center mb-4"
                                    style="" src="../assets/image/reza.png" data-aos="fade-down">
                                <img alt="team hover" class=" hover-image2 rounded-lg w-full object-cover object-center mb-4"
                                    style="" src="../assets/image/reza2.jpg">
                                <div class="w-full text-font" data-aos="zoom-in">
                                    <h2 class="title-font font-medium text-lg text-white">Reza Rasendriya Adi Putra
                                    </h2>
                                    <h3 class="text-white mb-3">123230030</h3>
                                    <p class="mb-4 text-bold" style="color:#ffffff">Background : Seorang samurai dan ronin yang sangat terkenal
                                        di Jepang pada abad pertengahan. Ia diperkirakan lahir pada sekitar tahun 1584,
                                        dan meninggal tahun 1645. Nama aslinya adalah Shinmen Takezo. Kata Musashi
                                        merupakan lafal lain dari "Takezo".</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="text-center flex justify-center items-center mb-10" data-aos="zoom-in">
                <button id="hubKamiBTN" class="tombolP">
                    <span class="hover-underline-animation px-5 mx-auto">Hubungi Kami</span>
                </button>
            </div>

            <!-- Modal -->
            <div id="hubKami"
                class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
                <div class="bg-white rounded-lg shadow-lg max-w-md w-full">
                    <div class="p-6">
                        <h2 class="text-xl font-bold mb-4 text-gray-900">Hubungi Kami</h2>
                        <form action="../assets/mySql/proses.php" method="POST">
                            <div class="mb-4">
                                <label for="namaP" class="block text-sm font-medium text-gray-700">Nama</label>
                                <input type="text" name="namaP" id="namaP"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Nama harus sesuai form!">
                            </div>
                            <div class="mb-4">
                                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Pesan</label>
                                <textarea name="deskripsi" id="deskripsi" rows="4"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button type="button" id="close"
                                    class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md mr-2">Batal</button>
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                                    name="submitPesan">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <?php include "../layout/footer.php" ?>
    </div>

    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
    <script src="../assets/cdn/aos.js"></script>
    <script src="../assets/src/tentKami.js"></script>
</body>

</html>