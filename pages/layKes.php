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
        <div style=" padding: 5%; padding-top : 7%; padding-bottom : 0%; min-height:75dvh;">

            <p class="text-center text-4xl font-bold text-blue-700 mb-10"> Layanan Kesehatan </p>

            <form method="GET" action="formLayan.php">
                <div class="grid grid-cols-3 gap-4">

                    <button type="submit" name="layanan" value="Sinovac" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_EWct6A5puG014l71HK0EW7_4h5vL_5dW6A&s"
                            alt="Sinovac">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-1000 dark:text-white">Vaksin Sinovac</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Vaksin Sinovac atau CoronaVac adalah vaksin COVID-19 yang dikembangkan oleh perusahaan bioteknologi asal China.</p>
                        </div>
                    </button>

                    <button type="submit" name="layanan" value="AstraZeneca" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKctBQ6amDZI3thkb3VPN7_IvbV39wH7ctlg&s"
                            alt="AstraZeneca">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-1000 dark:text-white">Vaksin AstraZeneca</h5>
                            <p class="mb-3 font-normal text-gray-   dark:text-gray-400">Vaksin Sinovac atau CoronaVac adalah vaksin COVID-19 yang dikembangkan oleh perusahaan bioteknologi asal China.</p>
                        </div>
                    </button>


                    <button type="submit" name="layanan" value="Moderna" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30"
                            src="https://rsia.acehprov.go.id/thumbnail/700x0/media/2021.08/moderna.jpg"
                            alt="Moderna">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-1000 dark:text-white">Vaksin Moderna</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Vaksin Sinovac atau CoronaVac adalah vaksin COVID-19 yang dikembangkan oleh perusahaan bioteknologi asal China.</p>
                        </div>
                    </button>

                    <button type="submit" name="layanan" value="Stunting" 
                    class="relative w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style = "height: 250px">
                        <img class="absolute inset-0 object-cover w-full h-full rounded-lg opacity-30"
                            src="https://d1bpj0tv6vfxyp.cloudfront.net/articles/810611_25-11-2020_11-40-43.webp"
                            alt="Stunting">
                        <div class="relative">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Vaksin Stunting</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Vaksin Stunting or similar treatment for health conditions.</p>
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