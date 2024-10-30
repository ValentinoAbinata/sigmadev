<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>KEMASIN</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
    <style>
        /* Menambahkan efek scroll smooth */
        html {
            scroll-behavior: smooth;
        }

        .card {
            background: rgba(232, 228, 166, 0.25);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(2px);
            -webkit-backdrop-filter: blur(2px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .card:hover {
            transform: scale(1.05);
        }
        #inti{
            border: 2px solid #D1D5DB;
            border-radius : 10px ;
        }
    </style>


</head>

<body>

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
            <div id="banner" class="scroll-mt-20 bg-indigo-600 text-white py-2 px-4 rounded-lg">
                <marquee behavior="scroll" direction="left" scrollamount="6">
                    <span>Pengumuman: Program vaksinasi flu gratis akan dilaksanakan pada tanggal 15 November
                        2024 di
                        Puskesmas terdekat. Daftarkan diri Anda sekarang!</span>
                    <a href="#" class="text-yellow-300 underline ml-2">Pelajari Lebih Lanjut</a>
                </marquee>
            </div>


            <p class="text-center text-4xl font-bold text-blue-700 mb-10" id="halo"> Selamat Datang </p>

            <div id="gallery" class="relative w-full mb-" style="z-index: 0;" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96 mx-auto" style="height : 75dvh ; width :75% ;">
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
            <!-- inti Section -->
            <div class="bg-[#F8F4E4] text-center py-10 px-4 rounded-lg mx-auto mt-7" id= "inti">
                <img src="../assets/image/iconKemasin2.png" alt="Kemasin logo" class="mx-auto mb-4 w-25">
                <h2 class="text-3xl font-bold mb-2 text-gray-800">KEMASIN (Kesehatan Masyarakat Indonesia)</h2>
                <p class="text-lg mb-4 text-gray-600">Website ini menyediakan beberapa informasi mengenai vaksinasi</p>
                <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-lg text-lg font-semibold mb-8">Learn More</button>
    
                <!-- Card Section -->
                <div class="flex flex-col md:flex-row justify-center gap-5 px-3 mb-10">
                    <!-- Pengertian Card -->
                    <div class="relative w-full md:w-1/3 h-56 bg-cover bg-center rounded-lg shadow-lg overflow-hidden text-black card">
                        <img src="../assets/image/pengertian.jpg" alt="Pengertian">
                        <div class="absolute bottom-0 w-full bg-black bg-opacity-50 p-4 text-center">
                            <h3 class="text-2xl font-bold">Pengertian</h3>
                        </div>
                    </div>
    
                    <!-- Dampak card -->
                    <div class="relative w-full md:w-1/3 h-56 bg-cover bg-center rounded-lg shadow-lg overflow-hidden text-black card">
                        <img src="../assets/image/perbedaan.jpg" alt="Perbedaan">
                        <div class="absolute bottom-0 w-full bg-black bg-opacity-50 p-4 text-center">
                            <h3 class="text-2xl font-bold">Perbedaan</h3>
                        </div>
                    </div>
    
                    <!-- Dampak Card -->
                    <div class="relative w-full md:w-1/3 h-56 bg-cover bg-center rounded-lg shadow-lg overflow-hidden text-black card">
                        <img src="../assets/image/dampak.jpg" alt="Dampak">
                        <div class="absolute bottom-0 w-full bg-black bg-opacity-50 p-4 text-center">
                            <h3 class="text-2xl font-bold">Dampak</h3>
                        </div>
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
                            <p class="italic text-xl absolute w-10/12 max-w-md -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                "Layanan KEMASIN sangat membantu saya dalam memantau kesehatan harian saya. Terima kasih!"
                                <span class="block mt-4">- Faris, Bima</span>
                            </p>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="text-center">
                            <p class="italic text-xl absolute w-10/12 max-w-md -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                "Proses konsultasi online sangat cepat dan mudah. Dokter memberikan saran yang bermanfaat."
                                <span class="block mt-4">- Adi, Sleman</span>
                            </p>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="text-center">
                            <p class="italic text-xl absolute w-10/12 max-w-md -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                "Saya merasa lebih tenang karena bisa mengatur pengingat obat melalui fitur KEMASIN."
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