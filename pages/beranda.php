<?php ?>

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

            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap w-full mb-20">
                        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Pitchfork
                                Kickstarter Taxidermy</h1>
                            <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                        </div>
                        <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr
                            hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably
                            haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid
                            celiac humblebrag.</p>
                    </div>
                    <div class="flex flex-wrap -m-4 grid grid-cols-3">
                        <div class="xl:w-1/4 md:w-1/2 p-4">
                            <div class="bg-gray-100 p-6 rounded-lg">
                                <img class="h-40 rounded w-full object-cover object-center mb-6"
                                    src="../assets/image/pengertian.jpg" alt="content">
                                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Chichen Itza</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                    waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            </div>
                        </div>
                        <div class="xl:w-1/4 md:w-1/2 p-4">
                            <div class="bg-gray-100 p-6 rounded-lg">
                                <img class="h-40 rounded w-full object-cover object-center mb-6"
                                    src="../assets/image/perbedaan.jpg" alt="content">
                                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Colosseum Roma</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                    waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            </div>
                        </div>
                        <div class="xl:w-1/4 md:w-1/2 p-4">
                            <div class="bg-gray-100 p-6 rounded-lg">
                                <img class="h-40 rounded w-full object-cover object-center mb-6"
                                    src="../assets/image/dampak.jpg" alt="content">
                                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Great Pyramid of Giza</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit
                                    waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>


            <!-- inti Section -->
            <div class="cineronta bg-[#F8F4E4] text-center py-10 px-4 rounded-lg mx-auto mt-7" id="inti">
                <img src="../assets/image/iconsigmaDev2.png" alt="sigmaDev logo" class="mx-auto"
                    style="width: 10%; margin-bottom: 2px;">
                <h2 class="text-3xl font-bold mb-2 text-gray-800">sigmaDev (Siaga Masyarakat Desa Vaksin)</h2>
                <p class="text-lg mb-4 text-gray-600">Website ini menyediakan beberapa informasi mengenai vaksinasi</p>

                <button class="tombolP mb-10">
                    <span class="hover-underline-animation font-semibold">Learn more</span>
                </button>

                <!-- Card Section -->
                <div class="flex flex-col md:flex-row justify-center gap-6 px-3 mb-10">
                    <!-- Pengertian Card -->
                    <div
                        class="relative flex-1 h-56 bg-cover bg-center rounded-lg shadow-lg overflow-hidden text-black card">
                        <img src="../assets/image/pengertian.jpg" alt="Pengertian" class="object-fit w-full h-full">
                        <div class="absolute bottom-0 w-full bg-black bg-opacity-50 p-4 text-center">
                            <h3 class="text-2xl font-bold">Pengertian</h3>
                        </div>
                    </div>

                    <!-- Perbedaan card -->
                    <div
                        class="relative flex-1 h-56 bg-cover bg-center rounded-lg shadow-lg overflow-hidden text-black card">
                        <img src="../assets/image/perbedaan.jpg" alt="Perbedaan" class="object-fit w-full h-full">
                        <div class="absolute bottom-0 w-full bg-black bg-opacity-50 p-4 text-center">
                            <h3 class="text-2xl font-bold">Perbedaan</h3>
                        </div>
                    </div>

                    <!-- Dampak Card -->
                    <div
                        class="relative flex-1 h-56 bg-cover bg-center rounded-lg shadow-lg overflow-hidden text-black card">
                        <img src="../assets/image/dampak.jpg" alt="Dampak" class="object-fit w-full h-full">
                        <div class="absolute bottom-0 w-full bg-black bg-opacity-50 p-4 text-center">
                            <h3 class="text-2xl font-bold">Dampak</h3>
                        </div>
                    </div>
                </div>
            </div>



            <div class="bg-green-800 text-white py-12 px-8 lg:px-20 rounded-lg mt-8">
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <!-- Teks Pencapaian -->
                    <div>
                        <h5 class="text-sm font-semibold uppercase mb-2 text-gray-300">Meningkatkan Kesadaran</h5>
                        <h2 class="text-3xl font-bold mb-4">Pencapaian Kesehatan Desa</h2>
                        <p class="mb-4">
                            Kami berkomitmen untuk menyediakan informasi vaksinasi yang akurat dan sumber daya kesehatan
                            untuk komunitas desa. Bersama-sama, kita dapat menciptakan lingkungan yang lebih sehat.
                        </p>
                        <p class="mb-8">
                            Lihat bagaimana inisiatif kesehatan kami berdampak positif pada komunitas. Dari peningkatan
                            vaksinasi hingga kegiatan edukasi, kami berusaha untuk kesehatan yang lebih baik.
                        </p>
                    </div>

                    <!-- Gambar  -->
                    <div class="flex justify-center lg:justify-end">
                        <img src="../assets/image/keberagaman.jpeg" alt="Avocado"
                            class="rounded-lg w-full max-w-xs object-cover">
                    </div>
                </div>

                <!-- Statistik -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center mt-8">
                    <div>
                        <h3 class="text-3xl font-bold">85%</h3>
                        <p class="text-sm">Vaksinasi Terbaru</p>
                    </div>
                    <div class="borderS">
                        <h3 class="text-3xl font-bold">1200 orang</h3>
                        <p class="text-sm">Partisipasi Komunitas</p>
                    </div>
                    <div class="borderS">
                        <h3 class="text-3xl font-bold">50 sesi</h3>
                        <p class="text-sm">Program Edukasi</p>
                    </div>
                    <div class="borderS">
                        <h3 class="text-3xl font-bold">Meningkat 30%</h3>
                        <p class="text-sm">Kesehatan Masyarakat</p>
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
                                "Saya merasa lebih tenang karena bisa mengatur pengingat obat melalui fitur sigmaDev."
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