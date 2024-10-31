<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
    <link rel="stylesheet" href="../assets/css/beranda.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>

<body style="font-family: Poppins;">

    <?php include "../layout/navbar.php" ?>

    <div style="background-color: #FBFBFB">
        <div class="relative h-screen flex items-center justify-center text-center text-white bg-cover bg-center"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../assets/image/bg1.jpg')">
            <!-- Teks Pembuka-->
            <div class="relative z-10" style="z-index:0;">
                <p class="text-sm tracking-widest uppercase mb-2">Rerap & Valen COOKING</p>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Pemuda Pembantai Boti</h1>
                <p class="text-lg md:text-xl mb-8">Lu Boti Lu Mati.</p>
                <a href="#banner"
                    class="bg-teal-500 hover:bg-teal-600 text-white px-6 py-3 rounded-lg text-lg font-semibold">
                    Mulai Sekarang
                </a>
            </div>
        </div>

        <div style=" padding: 5%; padding-top : 0%; padding-bottom : 0%; min-height:75dvh;">
            <!-- Banner Pengumuman Kesehatan -->
            <div id="banner" class="scroll-mt-20 bg-indigo-600 text-white py-2 px-4 rounded-lg" style="margin-bottom: 5%;">
                <marquee behavior="scroll" direction="left" scrollamount="6">
                    <span>Pengumuman: Program vaksinasi flu gratis akan dilaksanakan pada tanggal 15 November
                        2024 di
                        Puskesmas terdekat. Daftarkan diri Anda sekarang!</span>
                    <a href="#" class="text-yellow-300 underline ml-2">Pelajari Lebih Lanjut</a>
                </marquee>
            </div>




            <div id="gallery" class="relative w-full" style="z-index: 0;margin-top:25px;" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96 mx-auto"
                    style="height : 30dvh ; width :75% ;">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="../assets/image/1.png"
                            class="absolute block max-h-85 w-85 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-contain"
                            alt="">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="../assets/image/2.jpg"
                            class="absolute block max-h-85 w-85 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-contain"
                            alt="">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="../assets/image/3.jpg"
                            class="absolute block max-h-85 w-85 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-contain"
                            alt="">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="../assets/image/4.jpg"
                            class="absolute block max-h-85 w-85 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-contain"
                            alt="">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="../assets/image/5.jpg"
                            class="absolute block max-h-85 w-85 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-contain"
                            alt="">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-dark dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-dark dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>



            <div class="grid grid-flow-row-dense grid-cols-3 grid-rows-1 gap-0 mt-10">
                <!-- inti Section -->
                <div class="col-span-2 bg-gray-300 py-10 mt-7 px-4 shadow-lg" style="max-height: 75%">
                    <h2 class="text-6xl font-bold mb-4 text-indigo-600 " style="margin-top: 10px; padding: 10px; border-left: 4px solid #000;">Selamat Datang di
                        sigmaDev</h2>
                    <p class="text-lg text-gray-700 mb-6 mt-5" style= "border-right: 4px solid #000;">Platform sigmaDev menyediakan informasi penting seputar
                        vaksinasi dan sumber daya kesehatan bagi komunitas desa. Temukan artikel, panduan, dan berita
                        terbaru yang membantu meningkatkan kesadaran serta mendukung gaya hidup sehat di lingkungan
                        desa.</p>

                    <a href="laykes.php">
                        <button class="tombolP">
                            <span class="hover-underline-animation px-5 mx-auto"> Pilih Vaksin </span>
                        </button>
                    </a>

                </div>
                <div class=" col-span-1/3 text-center py-10 px-4 rounded-lg mx-auto mt-7">
                    <img src="../assets/image/vaksinDesa.jpg" alt="vaksin Desa" class="mx-auto">

                </div>

            </div>


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
        <script>
        const scroll = new SmoothScroll('a[href="#banner"]', {
            speed: 1,
            speedAsDuration: true,
            offset: 110 // Sesuaikan offset
        });
        </script>
</body>

</html>