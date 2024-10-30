<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>KEMASIN</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />

</head>

<body>

    <?php include "../layout/navbar.php" ?>
    <div class="bg-gray-100">
        <div style=" padding: 5%; padding-top : 9%; padding-bottom : 0%; min-height:75dvh;">

            <p class="text-center text-4xl font-bold text-blue-700 mb-10"> Layanan Kesehatan </p>

            <form method="GET" action="formLayan.php">
                <div class="grid grid-cols-3 gap-4">

                    <button type="submit" name="layanan" value="Vaksin Sinovac" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30 blur-sm hover:blur-none"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_EWct6A5puG014l71HK0EW7_4h5vL_5dW6A&s"
                            alt="Gambar Sinovac">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-1000 dark:text-white">Vaksin Sinovac</h5>
                            <p class="mb-3 font-normal text-gray- font-semibold">Vaksin Sinovac atau CoronaVac adalah vaksin COVID-19 yang dikembangkan oleh perusahaan bioteknologi asal China.</p>
                        </div>
                    </button>

                    <button type="submit" name="layanan" value="Vaksin AstraZeneca" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30 blur-sm hover:blur-none"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKctBQ6amDZI3thkb3VPN7_IvbV39wH7ctlg&s"
                            alt="Gambar AstraZeneca">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-1000 dark:text-white">Vaksin AstraZeneca</h5>
                            <p class="mb-3 font-normal text-gray-   font-semibold">Vaksin AstraZeneca adalah vaksin COVID-19 yang dikembangkan oleh Universitas Oxford dan AstraZeneca. Vaksin ini menggunakan vektor virus yang dilemahkan untuk menyampaikan protein spiku SARS-CoV-2 ke dalam tubuh.</p>
                        </div>
                    </button>


                    <button type="submit" name="layanan" value="Vaksin Moderna" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30 blur-sm hover:blur-none"
                            src="https://rsia.acehprov.go.id/thumbnail/700x0/media/2021.08/moderna.jpg"
                            alt="Gambar Moderna">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Vaksin Moderna</h5>
                            <p class="mb-3 font-normal text-white font-semibold">Vaksin Sinovac atau CoronaVac adalah vaksin COVID-19 yang dikembangkan oleh perusahaan bioteknologi asal China.</p>
                        </div>
                    </button>

                    <button type="submit" name="layanan" value="Vaksin Stunting" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30 blur-sm hover:blur-none"
                            src="https://cdn.antaranews.com/cache/1200x800/2024/09/20/Polio.jpg"
                            alt="Gambar Stunting">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Vaksin Stunting</h5>
                            <p class="mb-3 font-normal text-gray- font-semibold">Vaksin stunting adalah vaksin yang sedang dikembangkan untuk mengatasi masalah stunting atau kerdil pada anak-anak. Stunting disebabkan oleh kekurangan gizi kronis sehingga anak tidak tumbuh secara optimal.</p>
                        </div>
                    </button>

                    <button type="submit" name="layanan" value="Vaksin BioNTech" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30 blur-sm hover:blur-none"
                            src="https://gdb.voanews.com/3e8439cb-9ef0-48ff-90b2-a50e5cee7760_cx0_cy3_cw0_w1200_r1.jpg"
                            alt="Gambar BioNTech">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl text-white font-bold tracking-tight text-gray-900 dark:text-white">Vaksin BioNTech</h5>
                            <p class="mb-3 font-normal text-white font-semibold">Vaksin BioNTech, juga dikenal sebagai Comirnaty, adalah vaksin COVID-19 yang dikembangkan bersama oleh BioNTech dan Pfizer. Vaksin ini menggunakan teknologi mRNA untuk menyampaikan instruksi genetik ke sel-sel tubuh agar memproduksi protein spiku SARS-CoV-2.</p>
                        </div>
                    </button>

                    <button type="submit" name="layanan" value="Vaksin Sinopharm" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30 blur-sm hover:blur-none"
                            src="https://static.republika.co.id/uploads/images/inpicture_slide/vaksin_210501153804-715.jpeg"
                            alt="Gambar Sinopharm">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Vaksin Sinopharm</h5>
                            <p class="mb-3 font-normal text-gray- font-semibold">Vaksin Sinopharm adalah vaksin COVID-19 yang dikembangkan oleh perusahaan farmasi Cina, Sinopharm. Vaksin ini menggunakan virus SARS-CoV-2 yang dilemahkan.</p>
                        </div>
                    </button>

                    <button type="submit" name="layanan" value="Vaksin Janssen" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30 blur-sm hover:blur-none"
                            src="https://rm.id/images/berita/med/dukung-percepatan-vaksinasi-bpom-terbitkan-izin-darurat-untuk-vaksin-janssen-dan-convidecia_90133.jpg"
                            alt="Gambar Janssen">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Vaksin Janssen</h5>
                            <p class="mb-3 font-normal text-gray- font-semibold">Vaksin Janssen, juga dikenal sebagai vaksin COVID-19 Johnson & Johnson, adalah vaksin satu dosis yang menggunakan teknologi vektor virus. Dikembangkan oleh Janssen Pharmaceutical Companies.</p>
                        </div>
                    </button>

                    <button type="submit" name="layanan" value="Vaksin SputnikV" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30 blur-sm hover:blur-none"
                            src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1619162393/attached_image/vaksin-sputnik.jpg"
                            alt="Gambar SputnikV">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold text-white tracking-tight text-gray-900 dark:text-white">Vaksin SputnikV</h5>
                            <p class="mb-3 font-normal text-white font-semibold">SputnikV adalah vaksin COVID-19 yang dikembangkan oleh Pusat Riset Epidemiologi dan Mikrobiologi Gamaleya di Rusia. Vaksin ini menggunakan teknologi vektor virus yang sama dengan vaksin AstraZeneca.</p>
                        </div>
                    </button>


                </div>
            </form>

        </div>
        <?php include "../layout/footer.php" ?>

    </div>



    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
</body>

</html>