<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
    <style>
        /* Menambahkan efek scroll smooth */
        html {
            scroll-behavior: smooth;
        }

        /* Menambahkan Efek .fadeInRight */
        .fadeInRight {
            animation: fadeInRight 1s forwards;
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(100%);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>

<body>

    <?php include "../layout/navbar.php" ?>

    <div class="bg-gray-100">
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

        <div style="padding: 5%; padding-top: 7%; padding-bottom: 0%; min-height:75dvh;">
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

            <div id="section1" class="p-10 border-2 border-black">
                faris
            </div>

            <br>
        </div>

        <?php include "../layout/footer.php" ?>

        <script>
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("fadeInRight");
                    }
                });
            });

            const targetElement = document.getElementById("section1");
            if (targetElement) {
                observer.observe(targetElement);
            }
        </script>

        <script src="https://unpkg.com/flowbite @latest/dist/flowbite.bundle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.polyfills.min.js">
        </script>
        <script>

        </script>
</body>

</html>