<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../assets/css/beranda.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>

<body style="font-family: Poppins;">

    <?php include "../layout/navbar.php" ?>

    <div style="background-color: #FBFBFB">

        <!-- Carousel Hero -->
        <div id="hero-carousel" class="relative w-full h-screen overflow-hidden" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative w-full h-full flex items-center justify-center text-white text-center">
                <!-- Slide 1 -->
                <div class="hidden duration-700 ease-in-out h-full w-full bg-cover bg-center"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/image/bg1.jpg');"
                    data-carousel-item="active">
                    <div class="flex flex-col text-left justify-center h-full bg-black bg-opacity-50 p-6 mt-0">
                        <div class="relative z-10" style="margin-left:50px;">
                            <h1 class="text-7xl font-bold mb-2 " style="font-family: Roboto !important">
                                Pendataan Vaksinasi <br> untuk Desa Kita</h1>
                            <h1 class="mb-2" style="font-size:20px">
                                Mari dukung kesehatan bersama dengan mengikuti program pendataan vaksinasi desa.
                                <br> Daftar sekarang untuk membantu memastikan semua warga terlindungi dengan baik.
                                <br> Bersama kita ciptakan desa yang lebih sehat.</h1>
                            <div class="" style="margin-top: 2.5%">
                                <a href="#banner"
                                    class="bg-teal-500 hover:bg-teal-600 text-white  mx-auto rounded-lg font-semibold"
                                    style="padding: 20px; font-size: 20px">
                                    Mulai Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="hidden duration-700 ease-in-out h-full w-full bg-cover bg-center"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/image/bg2.jpg');"
                    data-carousel-item>
                    <div class="flex flex-col text-left justify-center h-full bg-black bg-opacity-50 p-6 mt-0">
                        <div class="relative z-10">
                            <h1 class="text-7xl font-bold mb-2"
                                style="font-family: Roboto !important; margin-left:50px;">Bersama Lindungi Desa <br> Dengan Mendata Diri Anda</h1>
                            <h1 class="mb-2" style="font-size:20px; margin-left:50px;">Pendataan vaksinasi adalah langkah awal untuk membangun lingkungan yang sehat.
                                <br> Segera daftarkan diri dan keluarga agar seluruh desa terlindungi.
                                <br> Jadilah bagian dari upaya menjaga kesehatan desa kita!</h1>
                            <div style="margin-top: 2.5%">
                                <a href="#banner"
                                    class="bg-teal-500 hover:bg-teal-600 text-white  mx-auto rounded-lg font-semibold"
                                    style="padding: 20px; font-size: 20px;margin-left:50px;">
                                    Mulai Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="hidden duration-700 ease-in-out h-full w-full bg-cover bg-center"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/image/bg3.jpg');"
                    data-carousel-item>
                    <div class="flex flex-col text-left justify-center h-full bg-black bg-opacity-50 p-6 mt-0">
                        <div class="relative z-10">
                            <h1 class="text-7xl font-bold mb-2" style="font-family: Roboto !important;margin-left:50px;">Wujudkan Desa Bebas Penyakit</h1>
                            <h1 class="mb-2" style="font-size:20px; margin-left:50px;">Dengan pendataan vaksinasi, kita berkontribusi dalam menciptakan desa yang sehat dan kuat.
                                <br> Ayo ambil bagian dalam program ini untuk masa depan desa yang lebih aman.</h1>
                            <div style="margin-top: 2.5%;margin-left:50px;">
                                <a href="#banner"
                                    class="bg-teal-500 hover:bg-teal-600 text-white  mx-auto rounded-lg font-semibold"
                                    style="padding: 20px; font-size: 20px">
                                    Mulai Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/75 group-hover:bg-white/75">
                    <svg class="w-4 h-4 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/75 group-hover:bg-white/75">
                    <svg class="w-4 h-4 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 9l4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <div style=" padding: 5%; padding-top : 0%; padding-bottom : 0%; min-height:75dvh;">
            <!-- Banner Pengumuman Kesehatan -->
            <div class="announcement-banner" id="banner">
                <div class="announcement-content">
                    <div class="announcement-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <div class="announcement-marquee">
                        <marquee behavior="scroll" scrollamount="5">
                            <span class="announcement-text text-2xl">
                                Pengumuman: Program vaksinasi campak akan dilaksanakan pada tanggal 3 Desember 2024
                                di Puskesmas terdekat. Daftarkan diri Anda sekarang!
                            </span>
                        </marquee>
                    </div>
                </div>
            </div>


            <div class="mt-7 px-8 py-24">
                <div class="grid grid grid-cols-3 gap-3 items-center">
                    <!-- Kolom Teks -->
                    <div class=" col-span-2 pembuka p-4">
                        <h2 class="text-6xl font-bold mb-4 text-indigo-600"
                            style="border-left: 4px solid #000; padding-left: 10px;">
                            Selamat Datang di sigmaDev
                        </h2>
                        <p class="text-md text-gray-700 mb-6 mt-5 px-3"
                            style="border-right: 4px solid #000; text-align: justify;">
                            Platform sigmaDev hadir untuk mempermudah proses pendataan vaksinasi di desa Anda. Kami menyediakan
                            solusi digital yang membantu warga desa mendaftarkan diri secara mandiri, mencatat informasi identitas, dan seputar informasi vaksin. 
                            Kami berharap dapat meningkatkan
                            partisipasi warga dalam program vaksinasi demi terciptanya desa yang lebih sehat.
                            <br><br>
                            Melalui sigmaDev, Anda dapat dengan cepat memasukkan data seperti email, nik, nama, alamat, tanggal lahir, dan
                            jenis kelamin. Pendataan yang lengkap dan akurat ini akan memudahkan pihak kesehatan desa dalam memantau dan memastikan setiap warga terlindungi dengan baik.
                            Bergabunglah bersama kami dalam upaya untuk mewujudkan desa yang aman dan terbebas dari berbagai
                            penyakit. Mari pastikan bersama bahwa semua warga desa memiliki akses yang mudah dan transparan untuk
                            memperoleh vaksinasi yang diperlukan.
                        </p>
                        <a href="laykes.php">
                            <button class="tombolP">
                                <span class="hover-underline-animation px-5 mx-auto">Daftar Vaksin</span>
                            </button>
                        </a>
                    </div>

                    <!-- Kolom Gambar -->
                    <div class="flex justify-center bg-center bg-cover">
                        <img src="../assets/image/pembuka.avif" alt="vaksin Desa"
                            class="rounded-lg object-fit w-full h-full" style="height:350px; width:400px;">
                    </div>
                </div>
            </div>

            <section>
                <div class="container px-5 mx-auto">
                    <div class="flex flex-wrap grid grid-cols-3 w-full mb-10">
                        <div class="lg:w-1/2 w-full mb-6 lg:mb-0" style="padding-left: 15px;">
                            <h1 class="text-4xl font-bold mb-4 text-black">Informasi sigmaDev</h1>
                            <div class="h-1 bg-red-600 rounded" style="width: 315px;"></div>
                        </div>
                        <p class="col-span-2 text-md text-black text-justify">sigmaDev juga
                            menyediakan informasi lengkap seputar vaksin dan sumber daya kesehatan, dirancang khusus
                            untuk mendukung komunitas desa. Kami berfokus pada memberikan informasi yang faktual dan
                            mudah diakses untuk membantu masyarakat dalam mengambil keputusan kesehatan yang tepat.</p>
                    </div>
                    <div class="flex flex-wrap -m-4 grid grid-cols-3 gap-6">
                        <!-- Card 1 - Pengertian -->
                        <div class="xl:w-1/4 md:w-1/2 p-4">
                            <div
                                class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <img class="h-40 rounded w-full object-cover object-center mb-6"
                                    src="../assets/image/pengertian.jpg" alt="Gambar Pengertian Vaksinasi" style="height:230px">
                                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">INFORMASI
                                </h3>
                                <h2 class="font-bold text-gray-900 text-2xl text-center mb-4" style="Roboto;">Pengertian
                                </h2>
                                <p class="leading-relaxed text-base text-justify mb-5">Vaksinasi adalah proses pemberian
                                    vaksin untuk membantu sistem kekebalan tubuh dalam mengembangkan perlindungan
                                    terhadap suatu penyakit. Vaksin mengandung mikroorganisme atau virus dalam keadaan
                                    lemah, atau mengandung protein/toksin dari organisme tertentu.</p>
                            </div>
                        </div>

                        <!-- Card 2 - Cara Kerja -->
                        <div class="xl:w-1/4 md:w-1/2 p-4">
                            <div
                                class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <img class="h-40 rounded w-full object-cover object-center mb-6"
                                    src="../assets/image/caraKerja.jpg" alt="Gambar Cara Kerja Vaksinasi">
                                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">MEKANISME
                                </h3>
                                <h2 class="font-bold text-gray-900 text-2xl text-center mb-4" style="Roboto;">Cara Kerja
                                </h2>
                                <p class="leading-relaxed text-base text-justify mb-5" style="padding-bottom: 30px">Vaksinasi bekerja dengan
                                    merangsang
                                    sistem kekebalan tubuh untuk mengenali dan melawan patogen penyebab penyakit
                                    tertentu. Vaksin mengajarkan tubuh untuk melawan infeksi secara efektif tanpa
                                    menyebabkan penyakit.</p>
                            </div>
                        </div>

                        <!-- Card 3 - Manfaat -->
                        <div class="xl:w-1/4 md:w-1/2 p-4">
                            <div
                                class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <img class="h-40 rounded w-full object-cover object-center mb-6"
                                    src="../assets/image/manfaat.jpg" alt="Gambar Manfaat Vaksinasi">
                                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">KEUNTUNGAN
                                </h3>
                                <h2 class="font-bold text-gray-900 text-2xl text-center mb-4" style="Roboto;">Manfaat
                                </h2>
                                <p class="leading-relaxed text-base text-justify">Vaksinasi membantu mencegah penyebaran
                                    penyakit dengan meningkatkan imunitas individu dan komunitas. Vaksinasi berperan
                                    penting dalam mengurangi angka
                                    kematian dan penyakit parah akibat infeksi, serta menekan biaya kesehatan dan
                                    ekonomi akibat wabah.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Cara Pendaftaran -->
            <section>
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col justify-center items-center text-center mb-20">
                        <img src="../assets/image/iconsigmaDev2.png" alt="iconsigmaDev" style="width: 135px;  height: 125px;">
                        <h1 class="text-4xl font-bold text-black">Cara Pendaftaran</h1>
                        <div class="h-1 bg-red-600 rounded" style="width: 270px;"></div>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base mt-5">Pendaftaran vaksinasi di website
                            sigmaDev sangat mudah dan cepat. Kami telah merancang proses ini untuk memudahkan setiap
                            orang dalam mendaftar vaksinasi dengan langkah-langkah yang jelas dan sederhana. Berikut ini
                            adalah langkah-langkah pendaftaran vaksinasi:</p>
                    </div>

                    <div class="container mx-auto flex flex-col items-center">
                        <!-- Garis dan Nomor -->
                        <div class="flex items-center justify-center space-x-10 mb-5">
                            <div class="flex items-center space-x-2">
                                <div class="h-1 bg-gray-200" style="width: 199px"></div>
                                <div
                                    class="w-6 h-6 rounded-full bg-indigo-500 text-white flex items-center justify-center font-medium text-sm">
                                    1</div>
                                <div class=" h-1 bg-gray-200" style="width: 180px"></div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class=" h-1 bg-gray-200" style="width: 220px"></div>
                                <div
                                    class="w-6 h-6 rounded-full bg-indigo-500 text-white flex items-center justify-center font-medium text-sm">
                                    2</div>
                                <div class="w-60 h-1 bg-gray-200"></div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class=" h-1 bg-gray-200" style="width: 170px"></div>
                                <div
                                    class="w-6 h-6 rounded-full bg-indigo-500 text-white flex items-center justify-center font-medium text-sm">
                                    3</div>
                                <div class=" h-1 bg-gray-200"style="width: 200px"></div>
                            </div>
                        </div>

                        <!-- Icon dan Deskripsi Langkah -->
                        <div class="grid grid-cols-3 gap-10">
                            <!-- Langkah 1 -->
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full flex items-center justify-center mb-3">
                                    <svg class="w-12 h-12 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z" />
                                    </svg>

                                </div>
                                <h2 class="font-medium title-font text-gray-900 mb-1 text-2xl">Tekan Menu "Layanan
                                    Kesehatan"</h2>
                                <p class="leading-relaxed text-center">Menu layanan kesehatan berisi vaksin-vaksin yang
                                    telah disediakan.</p>
                            </div>

                            <!-- Langkah 2 -->
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full flex items-center justify-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                        class="text-blue-500 w-12 h-12">
                                        <path
                                            d="M29.0918,8.5654,27.68,7.1533l-.002-.0029L24.85,4.3223l-.0029-.002L23.4346,2.9082a1,1,0,0,0-1.4141,1.4141l.7075.7075L19.9,7.8579,17.7783,5.7363A1,1,0,0,0,16.3643,7.15l1.4146,1.4146L7.1719,19.1719a3.959,3.959,0,0,0-.6072,4.8494L2.293,28.293A1,1,0,1,0,3.707,29.707l4.2717-4.2717a3.959,3.959,0,0,0,4.8494-.6072L23.4351,14.2212,24.85,15.6357a1,1,0,0,0,1.4141-1.4141L24.1421,12.1,26.97,9.272l.7075.7075a1,1,0,0,0,1.4141-1.4141ZM20.6211,14.207,20,13.5859A1,1,0,0,0,18.5859,15l.6211.6211L17.6211,17.207,17,16.5859A1,1,0,0,0,15.5859,18l.6211.6211L14.6211,20.207,14,19.5859A1,1,0,0,0,12.5859,21l.6211.6211-1.793,1.793a2.0471,2.0471,0,0,1-2.8281,0,1.9993,1.9993,0,0,1,0-2.8281L19.1924,9.9795l2.8281,2.8281Zm2.1069-3.521L21.314,9.272l2.8281-2.8281,1.4141,1.4141Z">
                                        </path>
                                    </svg>
                                </div>
                                <h2 class="font-medium title-font text-gray-900 mb-1 text-2xl">Pilih Vaksin </h2>
                                <p class="leading-relaxed text-center">Pilih vaksin yang tersedia lalu isi form sesuai
                                    dengan jenis vaksin.</p>
                            </div>

                            <!-- Langkah 3 -->
                            <div class="flex flex-col items-center">
                                <div
                                    class="w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full flex items-center justify-center mb-3">
                                    <svg class="w-12 h-12 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                            d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>

                                </div>
                                <h2 class="font-medium title-font text-gray-900 mb-1 text-2xl">Hubungi Admin</h2>
                                <p class="leading-relaxed text-center">Jika ingin data Anda tampil pada "Data Kesehatan"
                                    pilih menu "Tentang Kami" lalu hubungi admin yang tersedia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="text-gray-600 body-font py-12">
                <h1 class="text-4xl font-bold text-black px-5">Kenapa Harus sigmaDev?</h1>
                <div class=" h-1 bg-red-600 rounded mb-2 mt-2" style="margin-left: 248px;width: 165px;"></div>
                <div class="container px-5 py-3 mx-auto flex flex-wrap">
                    <div class="flex flex-wrap grid grid-cols-3 gap-5 w-full">
                        <div class="col-span-2 lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
                            <div class="flex relative pb-12">
                                <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                                </div>
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow pl-4 px-2">
                                    <h2 class="font-medium title-font text-md text-gray-900 mb-1 tracking-wider">
                                        Keamanan Terjamin
                                    </h2>
                                    <p class="leading-relaxed text-justify">Platform kami dirancang dengan standar
                                        keamanan yang
                                        tinggi, melindungi data pengguna dari ancaman digital dan memastikan informasi
                                        tetap terjaga.</p>
                                </div>
                            </div>
                            <div class="flex relative pb-12">
                                <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                                </div>
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow pl-4 px-2">
                                    <h2 class="font-medium title-font text-md text-gray-900 mb-1 tracking-wider">Akses
                                        Informasi yang Mudah
                                    </h2>
                                    <p class="leading-relaxed text-justify">sigmaDev menawarkan antarmuka yang mudah
                                        digunakan dan
                                        mempermudah pengguna dalam mencari informasi kesehatan dan vaksinasi.</p>
                                </div>
                            </div>
                            <div class="flex relative pb-12">
                                <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                                </div>
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow pl-4 px-2">
                                    <h2 class="font-medium title-font text-md text-gray-900 mb-1 tracking-wider">Sumber
                                        Tepercaya
                                    </h2>
                                    <p class="leading-relaxed text-justify">Kami bekerja sama dengan sumber terpercaya
                                        dan
                                        diverifikasi sehingga informasi yang disajikan di sigmaDev adalah akurat dan
                                        dapat dipercaya.</p>
                                </div>
                            </div>
                            <div class="flex relative pb-12">
                                <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                                </div>
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M7 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h1m4-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm7.441 1.559a1.907 1.907 0 0 1 0 2.698l-6.069 6.069L10 19l.674-3.372 6.07-6.07a1.907 1.907 0 0 1 2.697 0Z" />
                                    </svg>

                                </div>
                                <div class="flex-grow pl-4 px-2">
                                    <h2 class="font-medium title-font text-md text-gray-900 mb-1 tracking-wider">
                                        Kemudahan Pembaruan Data
                                    </h2>
                                    <p class="leading-relaxed text-justify">Platform kami memungkinkan pembaruan
                                        informasi kesehatan
                                        secara berkala, memastikan semua data selalu up-to-date.</p>
                                </div>
                            </div>
                            <div class="flex relative">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                            d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                    </svg>
                                </div>
                                <div class="flex-grow pl-4 px-2">
                                    <h2 class="font-medium title-font text-md text-gray-900 mb-1 tracking-wider">Fokus
                                        pada Kesehatan Masyarakat
                                    </h2>
                                    <p class="leading-relaxed text-justify">Komitmen sigmaDev adalah meningkatkan
                                        kualitas hidup
                                        masyarakat melalui akses informasi kesehatan yang mudah dan cepat.</p>
                                </div>
                            </div>
                        </div>
                        <img class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12"
                            src="../assets/image/kenapaharusSigma.jpg" alt="step" style="height: 350px; width: 400px">
                    </div>
                </div>
            </section>

            <div class="text-black py-24 px-3  rounded-lg mt-8">
                <div class="grid grid-cols-3 items-center">
                    <!-- Gambar  -->
                    <div class="flex justify-center lg:justify-end">
                        <img src="../assets/image/vaccine.jpg" alt="keberagaman"
                            class="rounded-lg max-w-xs object-cover"
                            style=" margin-left: 20px;width:400px;height:250px">
                    </div>

                    <!-- Teks Pencapaian -->
                    <div class="col-span-2 text-justify p-3" style="margin-left: 20px;">
                        <h2 class="text-3xl font-bold mb-4">Pencapaian Kesehatan Desa</h2>

                        <p class="mb-4 text-left">
                            Kami berkomitmen untuk menyediakan informasi vaksinasi yang akurat dan sumber daya kesehatan
                            bagi komunitas desa. Dengan akses yang lebih baik, kami berharap dapat memberdayakan
                            masyarakat untuk membuat keputusan kesehatan yang lebih baik. Bersama, kita bisa menciptakan
                            lingkungan yang lebih sehat dan produktif untuk semua.
                        </p>

                        <p class="mb-8 text-right">
                            Lihat bagaimana inisiatif kesehatan kami berdampak positif pada komunitas. Dari peningkatan
                            vaksinasi hingga kegiatan edukasi yang bermanfaat, kami berupaya menciptakan kesehatan yang
                            lebih baik untuk semua. Mari bergandeng tangan untuk masa depan yang
                            lebih sehat dan sejahtera.
                        </p>
                    </div>


                </div>

                <!-- Statistik -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center mt-8 justify-center items-center"
                    style="margin-right:50px">
                    <div>
                        <div
                            class="w-16 h-16 mx-auto rounded-full flex items-center justify-center bg-green-500 hover:bg-blue-500 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="width:35px; height:35px;"
                                class="text-blue-500">
                                <path
                                    d="M29.0918,8.5654,27.68,7.1533l-.002-.0029L24.85,4.3223l-.0029-.002L23.4346,2.9082a1,1,0,0,0-1.4141,1.4141l.7075.7075L19.9,7.8579,17.7783,5.7363A1,1,0,0,0,16.3643,7.15l1.4146,1.4146L7.1719,19.1719a3.959,3.959,0,0,0-.6072,4.8494L2.293,28.293A1,1,0,1,0,3.707,29.707l4.2717-4.2717a3.959,3.959,0,0,0,4.8494-.6072L23.4351,14.2212,24.85,15.6357a1,1,0,0,0,1.4141-1.4141L24.1421,12.1,26.97,9.272l.7075.7075a1,1,0,0,0,1.4141-1.4141ZM20.6211,14.207,20,13.5859A1,1,0,0,0,18.5859,15l.6211.6211L17.6211,17.207,17,16.5859A1,1,0,0,0,15.5859,18l.6211.6211L14.6211,20.207,14,19.5859A1,1,0,0,0,12.5859,21l.6211.6211-1.793,1.793a2.0471,2.0471,0,0,1-2.8281,0,1.9993,1.9993,0,0,1,0-2.8281L19.1924,9.9795l2.8281,2.8281Zm2.1069-3.521L21.314,9.272l2.8281-2.8281,1.4141,1.4141Z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold transition-all duration-300"
                            style="color: #000000; transition: color 0.3s;" onmouseover="this.style.color='#ef4444'"
                            onmouseout="this.style.color='#000000'">85%</h3>
                        <p class="text-sm font-semibold transition-all duration-300"
                            style="color: #000000; transition: color 0.3s;" onmouseover="this.style.color='#ef4444'"
                            onmouseout="this.style.color='#000000'">
                            Vaksinasi Terbaru
                        </p>

                    </div>
                    <div class=" borderS">
                        <div
                            class="w-16 h-16 mx-auto rounded-full flex items-center justify-center bg-green-500 hover:bg-blue-500 transition-all duration-300">
                            <svg class="w-[50px] h-[50px]  text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold transition-all duration-300"
                            style="color: #000000; transition: color 0.3s;" onmouseover="this.style.color='#ef4444'"
                            onmouseout="this.style.color='#000000'">1200 orang</h3>
                        <p class="text-sm font-semibold transition-all duration-300"
                            style="color: #000000; transition: color 0.3s;" onmouseover="this.style.color='#ef4444'"
                            onmouseout="this.style.color='#000000'">Partisipasi Komunitas</p>
                    </div>
                    <div class="borderS">
                        <div
                            class="w-16 h-16 mx-auto rounded-full flex items-center justify-center bg-green-500 hover:bg-blue-500 transition-all duration-300">
                            <svg class="w-[50px] h-[50px]  text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold transition-all duration-300"
                            style="color: #000000; transition: color 0.3s;" onmouseover="this.style.color='#ef4444'"
                            onmouseout="this.style.color='#000000'">50 sesi</h3>
                        <p class="text-sm font-semibold transition-all duration-300"
                            style="color: #000000; transition: color 0.3s;" onmouseover="this.style.color='#ef4444'"
                            onmouseout="this.style.color='#000000'">Program Edukasi</p>
                    </div>
                    <div class="borderS">
                        <div
                            class="w-16 h-16 mx-auto rounded-full flex items-center justify-center bg-green-500 hover:bg-blue-500 transition-all duration-300">
                            <svg class="w-[50px] h-[50px] text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold transition-all duration-300"
                            style="color: #000000; transition: color 0.3s;" onmouseover="this.style.color='#ef4444'"
                            onmouseout="this.style.color='#000000'">30%</h3>
                        <p class="text-sm font-semibold transition-all duration-300"
                            style="color: #000000; transition: color 0.3s;" onmouseover="this.style.color='#ef4444'"
                            onmouseout="this.style.color='#000000'">Kenaikan Kesehatan Masyarakat</p>
                    </div>
                </div>
            </div>
            <!-- Info tambahan Ngarah ke Website Lain-->
            <section class="text-gray-600 body-font">
                <h2 class="text-center text-3xl font-bold text-black mt-7 mb-3">Informasi Lainnya</h2>
                <div class="container px-5 py-3 mx-auto">
                    <div class="flex flex-wrap -m-4 grid grid-cols-3">
                        <div class="p-4 md:w-1/3">
                            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                <img class="lg:h-48 md:h-36 w-full object-cover object-center infoT"
                                    src="../assets/image/info1.jpeg" alt="blog">
                                <div class="p-6">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                        CATEGORY</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Pertanyaan Seputar
                                        Vaksin</h1>
                                    <p class="leading-relaxed mb-7">Website tersebut memaparkan pertanyaan yang
                                        berkaitan dengan vaksin</p>
                                    <div class="flex items-center flex-wrap ">
                                        <a class="inline-flex items-center md:mb-2 lg:mb-0  transition-all duration-300"
                                            style="color: #000000; transition: color 0.3s;"
                                            onmouseover="this.style.color='#00acee'"
                                            onmouseout="this.style.color='#000000'"
                                            href="https://www.unicef.org/indonesia/id/imunisasi?gad_source=1&gclid=Cj0KCQiAoae5BhCNARIsADVLzZeKUHy6q4IOWHeE-NjN2nWxGlqo8p6S8p4asmwxVF1q4zqyEC2kd9IaAsG5EALw_wcB">
                                            Pelajari lebih lanjut
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <span
                                            class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>50.2K
                                        </span>
                                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                </path>
                                            </svg>1975
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/3">
                            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                <img class="lg:h-48 md:h-36 w-full object-cover object-center infoT"
                                    src="../assets/image/info2.jpeg" style="height: 275px;" alt="blog">
                                <div class="p-6">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                        CATEGORY</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Vaksin Covid-19</h1>
                                    <p class="leading-relaxed mb-7">Tujuan, manfaat, jenis-jenis, dan prosedur vaksin
                                        Covid-19.</p>
                                    <div class="flex items-center flex-wrap">
                                        <a class="inline-flex items-center md:mb-2 lg:mb-0  transition-all duration-300"
                                            style="color: #000000; transition: color 0.3s;"
                                            onmouseover="this.style.color='#00acee'"
                                            onmouseout="this.style.color='#000000'"
                                            href="https://www.halodoc.com/kesehatan/vaksin-covid-19?srsltid=AfmBOoqInkNABjjIBBDoZeF4-LfGojzDy5p5f2njUzaxf7g0M-xIZVEu">
                                            Pelajari lebih lanjut
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <span
                                            class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>15.9K
                                        </span>
                                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                </path>
                                            </svg>612
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/3">
                            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                <img class="lg:h-48 md:h-36 w-full object-cover object-center infoT"
                                    src="../assets/image/info3.jpeg" alt="blog" style="height:275px;">
                                <div class="p-6">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                        CATEGORY</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Mitos-Mitos Tentang
                                        Vaksin COVID-19</h1>
                                    <p class="leading-relaxed mb-7">Informasi mengenai hoaks yang beredar di masyarakat
                                        mengenai vaksin COVID-19</p>
                                    <div class="flex items-center flex-wrap ">
                                        <a class="inline-flex items-center md:mb-2 lg:mb-0  transition-all duration-300"
                                            style="color: #000000; transition: color 0.3s;"
                                            onmouseover="this.style.color='#00acee'"
                                            onmouseout="this.style.color='#000000'"
                                            href="https://www.menpan.go.id/site/berita-terkini/mitos-mitos-tentang-vaksin-covid-19">
                                            Pelajari lebih lanjut
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <span
                                            class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>11.7K
                                        </span>
                                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                </path>
                                            </svg>181
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </div>


        <!-- Testimoni Pasien -->
        <section class="swiper mySwiper py-24 px-6">
            <h2 class="text-center text-3xl font-bold text-blue-700 mb-5">Apa Kata Mereka?</h2>
            <div class="swiper-wrapper">

                <div class="card swiper-slide">
                    <div class="card__image">
                        <img src="../assets/image/user_1.jpg" alt="gambar kartu">
                    </div>
                    <div class="card__content">
                        <span class="card__title">Warga Desa</span>
                        <span class="card__name">Dewi Lestari</span>
                        <div class="flex flex-wrap grid grid-cols-5 justify-center items-center">
                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                        </div>
                        <p class="card__text">SigmaDev sangat membantu saya dalam proses pendataan vaksinasi. Terima
                            kasih sigmaDev atas layanan yang memudahkan warga seperti kami.</p>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="card__image">
                        <img src="../assets/image/user_11.jpg" alt="gambar kartu">
                    </div>

                    <div class="card__content">
                        <span class="card__title">Sekretaris Desa</span>
                        <span class="card__name">Putri Puspita</span>
                        <div class="flex flex-wrap grid grid-cols-5 justify-center items-center">
                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                        </div>
                        <p class="card__text">sigmaDev memberikan kemudahan bagi kami untuk mengakses informasi
                            vaksinasi. Sistemnya memudahkan dan sangat informatif!</p>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="card__image">
                        <img src="../assets/image/user_22.jpg" alt="gambar kartu">
                    </div>

                    <div class="card__content">
                        <span class="card__title">Perawat Puskesmas</span>
                        <span class="card__name">Siti Aminah</span>
                        <div class="flex flex-wrap grid grid-cols-5 justify-center items-center">
                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                        </div>
                        <p class="card__text">Terima kasih sigmaDev, sekarang kami bisa mengelola data vaksinasi warga
                            dengan lebih mudah. Platform ini benar-benar membantu pekerjaan kami.</p>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="card__image">
                        <img src="../assets/image/user_33.jpg" alt="gambar kartu">
                    </div>

                    <div class="card__content">
                        <span class="card__title">Warga Desa</span>
                        <span class="card__name">Siti Khansa</span>
                        <div class="flex flex-wrap grid grid-cols-5 justify-center items-center">
                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                        </div>
                        <p class="card__text">sigmaDev sangat bermanfaat dalam menyediakan informasi vaksinasi. Sistem
                            ini ramah pengguna dan memudahkan proses pendataan.</p>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="card__image">
                        <img src="../assets/image/user2.jpg" alt="gambar kartu">
                    </div>

                    <div class="card__content">
                        <span class="card__title text-center">Bidang Kesehatan Desa</span>
                        <span class="card__name">Rina Sari</span>
                        <div class="flex flex-wrap grid grid-cols-5 justify-center items-center">
                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                        </div>
                        <p class="card__text">sigmaDev sangat membantu kami dalam mendata vaksinasi warga desa.
                            Pelayanan yang cepat dan efisien.</p>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="card__image">
                        <img src="../assets/image/user3.jpg" alt="gambar kartu">
                    </div>

                    <div class="card__content">
                        <span class="card__title">Kepala Desa</span>
                        <span class="card__name">Imam Sutanto</span>
                        <div class="flex flex-wrap grid grid-cols-5 justify-center items-center">
                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                        </div>
                        <p class="card__text">Dengan sigmaDev, saya dapat dengan mudah memantau perkembangan vaksinasi
                            di desa kami. Sangat berguna dan mudah digunakan!</p>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="card__image">
                        <img src="../assets/image/user4.jpg" alt="gambar kartu">
                    </div>

                    <div class="card__content">
                        <span class="card__title">Warga Desa</span>
                        <span class="card__name">Nurul Sukmawati</span>
                        <div class="flex flex-wrap grid grid-cols-5 justify-center items-center">
                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                            </svg>

                            <svg class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="m12.25 20.825 4.247-2.436a1 1 0 0 0 .503-.867V4.03c0-.405-2.062 3.38-2.8 4.747a1 1 0 0 1-.807.523l-4.87.367c-.903.068-1.258 1.208-.55 1.776l3.576 2.878a1 1 0 0 1 .343 1.025l-1.11 4.366c-.217.856.701 1.553 1.468 1.113Z" />
                            </svg>


                        </div>
                        <p class="card__text">sigmaDev membantu kami mendapatkan informasi yang lengkap tentang
                            vaksinasi. Terima kasih atas pelayanannya!</p>
                    </div>
                </div>

            </div>
        </section>

        <?php include "../layout/footer.php" ?>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.polyfills.min.js">
        </script>
        <script src="../assets/src/beranda.js"></script>
</body>

</html>