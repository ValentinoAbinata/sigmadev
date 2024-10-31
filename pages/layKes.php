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
                            src="../assets/image/Sinovac.png"
                            alt="Gambar Sinovac">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-1000 dark:text-white">Vaksin Sinovac</h5>
                            <p class="mb-3 font-normal text-gray- font-semibold">Vaksin Sinovac atau CoronaVac adalah vaksin COVID-19 yang dikembangkan oleh perusahaan bioteknologi asal China.</p>
                        </div>
                    </button>

                    <button type="submit" name="layanan" value="Vaksin AstraZeneca" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30 blur-sm hover:blur-none"
                            src="../assets/image/AstraZeneca.png"
                            alt="Gambar AstraZeneca">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-1000 dark:text-white">Vaksin AstraZeneca</h5>
                            <p class="mb-3 font-normal text-gray-   font-semibold">Vaksin AstraZeneca adalah vaksin COVID-19 yang dikembangkan oleh Universitas Oxford dan AstraZeneca. Vaksin ini menggunakan vektor virus yang dilemahkan untuk menyampaikan protein spiku SARS-CoV-2 ke dalam tubuh.</p>
                        </div>
                    </button>


                    <button type="submit" name="layanan" value="Vaksin Moderna" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30 blur-sm hover:blur-none"
                            src="../assets/image/Moderna.png"
                            alt="Gambar Moderna">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Vaksin Moderna</h5>
                            <p class="mb-3 font-normal text-white font-semibold">Vaksin Sinovac atau CoronaVac adalah vaksin COVID-19 yang dikembangkan oleh perusahaan bioteknologi asal China.</p>
                        </div>
                    </button>

                    <button type="submit" name="layanan" value="Vaksin Stunting" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30 blur-sm hover:blur-none"
                            src="../assets/image/Stunting.png"
                            alt="Gambar Stunting">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Vaksin Stunting</h5>
                            <p class="mb-3 font-normal text-gray- font-semibold">Vaksin stunting adalah vaksin yang sedang dikembangkan untuk mengatasi masalah stunting atau kerdil pada anak-anak. Stunting disebabkan oleh kekurangan gizi kronis sehingga anak tidak tumbuh secara optimal.</p>
                        </div>
                    </button>

                    <button type="submit" name="layanan" value="Vaksin BioNTech" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30 blur-sm hover:blur-none"
                            src="../assets/image/BioNTech.png"
                            alt="Gambar BioNTech">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl text-white font-bold tracking-tight text-gray-900 dark:text-white">Vaksin BioNTech</h5>
                            <p class="mb-3 font-normal text-white font-semibold">Vaksin BioNTech, juga dikenal sebagai Comirnaty, adalah vaksin COVID-19 yang dikembangkan bersama oleh BioNTech dan Pfizer. Vaksin ini menggunakan teknologi mRNA untuk menyampaikan instruksi genetik ke sel-sel tubuh agar memproduksi protein spiku SARS-CoV-2.</p>
                        </div>
                    </button>

                    <button type="submit" name="layanan" value="Vaksin Sinopharm" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30 blur-sm hover:blur-none"
                            src="../assets/image/Sinopharm.png"
                            alt="Gambar Sinopharm">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Vaksin Sinopharm</h5>
                            <p class="mb-3 font-normal text-gray- font-semibold">Vaksin Sinopharm adalah vaksin COVID-19 yang dikembangkan oleh perusahaan farmasi Cina, Sinopharm. Vaksin ini menggunakan virus SARS-CoV-2 yang dilemahkan.</p>
                        </div>
                    </button>

                    <button type="submit" name="layanan" value="Vaksin Janssen" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30 blur-sm hover:blur-none"
                            src="../assets/image/Janssen.jpg"
                            alt="Gambar Janssen">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Vaksin Janssen</h5>
                            <p class="mb-3 font-normal text-gray- font-semibold">Vaksin Janssen, juga dikenal sebagai vaksin COVID-19 Johnson & Johnson, adalah vaksin satu dosis yang menggunakan teknologi vektor virus. Dikembangkan oleh Janssen Pharmaceutical Companies.</p>
                        </div>
                    </button>

                    <button type="submit" name="layanan" value="Vaksin SputnikV" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30 blur-sm hover:blur-none"
                            src="../assets/image/sputnikv.jpg"
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