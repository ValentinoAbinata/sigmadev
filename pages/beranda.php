<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                        <div class="relative z-10">
                            <h1 class="text-7xl font-bold mb-2 w3-animate-top" style="font-family: Roboto !important ">
                                Lindungi Dirimu
                                atau <br> Kematian Menjemputmu</h1>
                            <h1 class="mb-2 w3-animate-right" style="font-size:20px">Vaksinasi diperlukan untuk
                                memperkuat imunitas
                                tubuh. <br> Ayo daftar vaksin sekarang
                                dan jaga kesehatanmu agar terhindar dari penyakit yang berbahaya. <br>
                                Pastikan untuk mendapatkan vaksin lengkap untuk perlindungan maksimal.</h1>
                            <div class="w3-animate-bottom" style="margin-top: 2.5%">
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
                            <h1 class="text-7xl font-bold mb-2" style="font-family: Roboto !important">Ciptakan Masa
                                Depan Sehatmu</h1>
                            <h1 class="mb-2" style="font-size:20px">Vaksinasi adalah langkah pertama untuk melindungi
                                diri dan orang yang kamu cintai. <br> Segera daftar vaksinasi dan tingkatkan
                                perlindunganmu dari berbagai penyakit. <br> Jangan tunggu lagi, jaga kesehatanmu
                                sekarang juga!</h1>
                            <div style="margin-top: 2.5%">
                                <a href="#banner"
                                    class="bg-teal-500 hover:bg-teal-600 text-white  mx-auto rounded-lg font-semibold"
                                    style="padding: 20px; font-size: 20px">
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
                            <h1 class="text-7xl font-bold mb-2" style="font-family: Roboto !important">Kesehatan Adalah
                                Investasi</h1>
                            <h1 class="mb-2" style="font-size:20px">Dengan vaksinasi, kamu tidak hanya melindungi diri
                                sendiri tetapi juga berkontribusi pada kesehatan masyarakat. <br> Ayo, jadilah bagian
                                dari perubahan positif dan pastikan imunmu terjaga. <br> Vaksin lengkap adalah kunci
                                untuk kesehatan optimal.</h1>
                            <div style="margin-top: 2.5%">
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
                                Pengumuman: Program vaksinasi flu gratis akan dilaksanakan pada tanggal 3 Desember 2024
                                di Puskesmas terdekat. Daftarkan diri Anda sekarang!
                            </span>
                        </marquee>
                    </div>
                </div>
            </div>


            <div class="mt-7 px-8 py-6">
                <div class="grid grid grid-cols-3 gap-3 items-center">
                    <!-- Kolom Teks -->
                    <div class=" col-span-2 pembuka p-4">
                        <h2 class="text-6xl font-bold mb-4 text-indigo-600"
                            style="border-left: 4px solid #000; padding-left: 10px;">
                            Selamat Datang di sigmaDev
                        </h2>
                        <p class="text-md text-gray-700 mb-6 mt-5 px-3"
                            style="border-right: 4px solid #000; text-align: justify;">
                            Platform sigmaDev menyediakan informasi penting seputar vaksinasi dan pendataan warga untuk
                            vaksinasi, yang
                            bertujuan untuk meningkatkan kesadaran masyarakat tentang pentingnya imunisasi serta
                            memastikan
                            bahwa setiap warga mendapatkan akses yang tepat terhadap vaksin yang dibutuhkan. Dalam upaya
                            ini, sigmaDev mengintegrasikan berbagai fitur yang memudahkan proses pendataan dan
                            informasi.
                            <br><br>
                            Dengan menggunakan platform ini, masyarakat dapat dengan mudah mendaftarkan diri dan
                            memberikan
                            informasi terkait status vaksinasi mereka. Ini termasuk data identitas warga, seperti nama,
                            alamat, dan tanggal lahir, yang diperlukan untuk memastikan bahwa semua informasi yang
                            tercatat
                            akurat dan up-to-date. Selain itu, platform ini juga mencakup riwayat vaksinasi,
                            memungkinkan
                            warga untuk melaporkan jenis vaksin yang telah diterima beserta tanggalnya, sehingga pihak
                            kesehatan dapat memantau cakupan vaksinasi di komunitas.
                        </p>
                        <a href="laykes.php">
                            <button class="tombolP">
                                <span class="hover-underline-animation px-5 mx-auto">Pilih Vaksin</span>
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

            <!-- Pengertian,Cara Kerja,Dampak -->
            <section style="font-family: Poppins;">
                <div class="container px-5 py-10 mx-auto">
                    <div class="flex flex-wrap grid grid-cols-3 w-full mb-20">
                        <div class="lg:w-1/2 w-full mb-6 lg:mb-0" style="padding-left: 15px;">
                            <h1 class="text-4xl font-bold mb-4 text-black">Informasi sigmaDev</h1>
                            <div class="h-1 bg-red-600 rounded" style="width: 315px;"></div>
                        </div>
                        <p class="col-span-2 text-md text-black text-justify">
                            sigmaDev adalah platform yang menyediakan informasi lengkap seputar vaksinasi dan sumber daya kesehatan,
                            dirancang khusus untuk mendukung komunitas desa. Kami berfokus pada memberikan informasi yang faktual dan
                            mudah diakses untuk membantu masyarakat dalam mengambil keputusan kesehatan yang tepat.
                        </p>
                    </div>
                    <div class="flex flex-wrap -m-4 grid grid-cols-3 gap-5 mt-7">
                        <div class="p-4">
                            <div class="card h-60 w-60">
                                <div class="first-content relative h-full w-full">
                                    <img class="h-full w-full object-cover rounded" src="../assets/image/pengertian.jpg" alt="content">
                                    <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-60 text-white px-3 py-1 rounded text-3xl font-bold">
                                        Pengertian
                                    </div>
                                </div>
                                <div class="second-content mx-auto py-9 ">
                                    <span class="">Vaksinasi adalah pemberian vaksin untuk membantu sistem kekebalan tubuhmengembangkan perlindungan dari suatu penyakit. Vaksin sendiri mengandung mikroorganisme atau virus dalam keadaan lemah, hidup atau mati, atau mengandung protein atau toksin dari organisme.</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="card h-60 w-60">
                                <div class="first-content relative h-full w-full">
                                    <img class="h-full w-full object-cover rounded" src="../assets/image/caraKerja.jpg" alt="content">
                                    <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-60 text-white px-3 py-1 rounded text-3xxl font-bold">
                                        Cara Kerja
                                    </div>
                                </div>
                                <div class="second-content">
                                    <span>More Info about Great Pyramid of Giza</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="card h-60 w-60">
                                <div class="first-content relative h-full w-full">
                                    <img class="h-full w-full object-cover rounded" src="../assets/image/dampak.jpg" alt="content">
                                    <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-60 text-white px-3 py-1 rounded text-3xl font-bold">
                                        Manfaat
                                    </div>
                                </div>
                                <div class="second-content">
                                    <span>More Info about Great Pyramid of Giza</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Cara Pendaftaran -->
            <section>
                <div class="container px-5 py-10 mx-auto" style="margin-top:50px;">
                    <div class="flex flex-col justify-center items-center text-center w-full mb-20">
                        <img src="../assets/image/iconsigmaDev2.png" alt="iconsigmaDev" style="width:150px; height:150px;">
                        <h1 class="text-4xl font-bold text-black">Cara Pendaftaran</h1>
                        <div class="h-1 bg-red-600 rounded" style="width: 270px;"></div>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base mt-5">Pendaftaran vaksinasi di website sigmaDev sangat mudah dan cepat. Kami telah merancang proses ini untuk memudahkan setiap orang dalam mendaftar vaksinasi dengan langkah-langkah yang jelas dan sederhana. Berikut ini adalah langkah-langkah pendaftaran vaksinasi:</p>
                    </div>
                    <div class="flex flex-wrap grid grid-cols-4 mt-3 mb-7">
                        <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60" style="border-left:2px solid #000000;border-right:2px solid #000000;">
                            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Shooting Stars</h2>
                            <p class="leading-relaxed text-base mb-4">Fingerstache flexitarian street art 8-bit
                                waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            <a class="text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60" style="border-right:2px solid #000000;">
                            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">The Catalyzer</h2>
                            <p class="leading-relaxed text-base mb-4">Fingerstache flexitarian street art 8-bit
                                waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            <a class="text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60" style="border-right:2px solid #000000;">
                            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Neptune</h2>
                            <p class="leading-relaxed text-base mb-4">Fingerstache flexitarian street art 8-bit
                                waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            <a class="text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60" style="border-right:2px solid #000000;">
                            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Melanchole</h2>
                            <p class="leading-relaxed text-base mb-4">Fingerstache flexitarian street art 8-bit
                                waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            <a class="text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <button
                        class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                </div>
            </section>


            <div class="text-black py-12 px-8 lg:px-20 rounded-lg mt-8">
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <!-- Teks Pencapaian -->
                    <div class="text-justify p-3" style="margin-left: 100px;">
                        <h2 class="text-3xl font-bold mb-4">Pencapaian Kesehatan Desa</h2>

                        <p class="mb-4 text-left">
                            Kami berkomitmen untuk menyediakan informasi vaksinasi yang akurat dan sumber daya
                            kesehatan untuk komunitas desa. Bersama-sama, kita dapat menciptakan lingkungan yang lebih sehat.
                        </p>

                        <p class="mb-8 text-right">
                            Lihat bagaimana inisiatif kesehatan kami berdampak positif pada komunitas. Dari
                            peningkatan vaksinasi hingga kegiatan edukasi, kami berusaha untuk kesehatan yang lebih baik.
                        </p>
                    </div>

                    <!-- Gambar  -->
                    <div class="flex justify-center lg:justify-end">
                        <img src="../assets/image/vaccine.jpg" alt="keberagaman"
                            class="rounded-lg max-w-xs object-cover" style="width:400px;height:250px">
                    </div>
                </div>

                <!-- Statistik -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center mt-8 justify-center items-center">
                    <div>
                        <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center bg-green-500 hover:bg-blue-500 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="width:35px; height:35px;" class="text-blue-500">
                                <path d="M29.0918,8.5654,27.68,7.1533l-.002-.0029L24.85,4.3223l-.0029-.002L23.4346,2.9082a1,1,0,0,0-1.4141,1.4141l.7075.7075L19.9,7.8579,17.7783,5.7363A1,1,0,0,0,16.3643,7.15l1.4146,1.4146L7.1719,19.1719a3.959,3.959,0,0,0-.6072,4.8494L2.293,28.293A1,1,0,1,0,3.707,29.707l4.2717-4.2717a3.959,3.959,0,0,0,4.8494-.6072L23.4351,14.2212,24.85,15.6357a1,1,0,0,0,1.4141-1.4141L24.1421,12.1,26.97,9.272l.7075.7075a1,1,0,0,0,1.4141-1.4141ZM20.6211,14.207,20,13.5859A1,1,0,0,0,18.5859,15l.6211.6211L17.6211,17.207,17,16.5859A1,1,0,0,0,15.5859,18l.6211.6211L14.6211,20.207,14,19.5859A1,1,0,0,0,12.5859,21l.6211.6211-1.793,1.793a2.0471,2.0471,0,0,1-2.8281,0,1.9993,1.9993,0,0,1,0-2.8281L19.1924,9.9795l2.8281,2.8281Zm2.1069-3.521L21.314,9.272l2.8281-2.8281,1.4141,1.4141Z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold mt-2">85%</h3>
                        <p class="text-sm">Vaksinasi Terbaru</p>
                    </div>
                    <div class="borderS">
                        <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center bg-green-500 hover:bg-blue-500 transition-all duration-300">
                            <svg class="w-[50px] h-[50px]  text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold">1200 orang</h3>
                        <p class="text-sm">Partisipasi Komunitas</p>
                    </div>
                    <div class="borderS">
                        <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center bg-green-500 hover:bg-blue-500 transition-all duration-300">
                            <svg class="w-[50px] h-[50px]  text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold">50 sesi</h3>
                        <p class="text-sm">Program Edukasi</p>
                    </div>
                    <div class="borderS">
                        <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center bg-green-500 hover:bg-blue-500 transition-all duration-300">
                            <svg class="w-[50px] h-[50px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" viewBox="0 0 24 24">
                                <path d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold">30%</h3>
                        <p class="text-sm">Kenaikan Kesehatan Masyarakat</p>
                    </div>
                </div>
            </div>




        </div>


        <!-- Testimoni Pasien -->
        <div class="mt-10 mb-10">
            <h2 class="text-center text-3xl font-bold text-blue-700 mb-5">Apa Kata Mereka?</h2>
            <div id="testimonial-carousel" class="relative w-full" data-carousel="slide">
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Testimonial 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <div class="text-center">
                            <p
                                class="italic text-xl absolute w-10/12 max-w-md -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                "Layanan sigmaDev sangat membantu saya dalam memantau kesehatan harian saya. Terima
                                kasih!"
                                <span class="block mt-4">- Faris, Bima</span>
                            </p>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="text-center">
                            <p
                                class="italic text-xl absolute w-10/12 max-w-md -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                "Proses konsultasi online sangat cepat dan mudah. Dokter memberikan saran yang
                                bermanfaat."
                                <span class="block mt-4">- Adi, Sleman</span>
                            </p>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="text-center">
                            <p
                                class="italic text-xl absolute w-10/12 max-w-md -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                "Saya merasa lebih tenang karena bisa mengatur pengingat obat melalui fitur
                                sigmaDev."
                                <span class="block mt-4">- Rama, Bantul</span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>



        <?php include "../layout/footer.php" ?>

        <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.polyfills.min.js">
        </script>
        <script src="../assets/src/beranda.js"></script>
</body>

</html>