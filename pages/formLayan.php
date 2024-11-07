<?php
$selectedLayanan = isset($_GET['layanan']) ? $_GET['layanan'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />

</head>

<body>
    <?php include "../layout/navbar.php" ?>
    <div class="bg-gray-100">
        <div style=" padding: 5%; padding-top : 9%; padding-bottom : 0%; min-height:75dvh;">
            <p class="text-center text-4xl font-bold text-gray-600 mb-10"> Pengisian Form <?= $selectedLayanan ?> </p>

            <div class="border-2 border-gray-800 py-8 mx-auto" style="width:50%; margin-bottom : 8%;">
                <form class="max-w-md mx-auto close" method="POST" action="../assets/mySql/proses.php">

                    <div class="relative z-0 w-full mb-5 group">
                        <input type="email" name="email" id="email"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="email"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat
                            Email</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="number" name="NIK" id="NIK"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="NIK"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NIK</label>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="first_name" id="first_name"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="first_name"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nama Depan</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="last_name" id="last_name"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="last_name"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                                Belakang</label>
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label> Jenis Kelamin </label>
                        <div class="grid grid-cols-2 mt-2">
                            <div class="flex items-center">
                                <input id="Laki-laki" type="radio" value="L" name="gender" checked
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="Laki-laki"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                            </div>
                            <div class="flex items-center">
                                <input id="Perempuan" type="radio" value="P" name="gender"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="Perempuan"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                            </div>
                        </div>

                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="date" name="tLahir" id="tLahir"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="tLahir"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal
                            Lahir</label>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="number" name="phone" id="phone"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="number"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor
                                Telepon</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="domisili" id="domisili"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="domisili"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Domisili</label>
                            <!-- isShow -->
                            <input type="hidden" name="isShow" value="0">
                            <!-- $selectedLayanan -->
                            <input type="hidden" name="selectedLayanan" value="<?= $selectedLayanan ?>">

                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-6 flex justify-center items-center">

                        <div>
                            <button type="submit" name="formLayan" value="formLayan"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 mx-auto focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32 px-2 py-2 flex items-center justify-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-6 h-6 inline-block mr-2 text-whitetext-gray-800 dark:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Submit
                            </button>
                        </div>

                        <button type="reset"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 mx-auto focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm w-32 px-2 py-2 flex items-center justify-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            <svg class="w-6 h-6 mr-2 text-white dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M3 9h13a5 5 0 0 1 0 10H7M3 9l4-4M3 9l4 4" />
                            </svg>
                            Reset
                        </button>
                    </div>



                </form>

            </div>
        </div>


        <!-- <script>
            // document.addEventListener("DOMContentLoaded", function() {
            //     const closeButton = document.querySelector(".close");

            //     closeButton.addEventListener("submit", function(event) {
            //         event.preventDefault();

            //         Swal.fire({
            //             title: "Terima Kasih \ntelah mengisi form!",
            //             text: "Silahkan Menghubungi mimin",
            //             icon: "success",
            //             confirmButtonText: "Ke Nganu Proses"
            //         }).then((result) => {
            //             if (result.isConfirmed) {
            //                 closeButton.submit();
            //                 // window.location.href = "../assets/mySql/proses.php";

            //             }
            //         });
            //     });
            // });

            // closeButton.addEventListener("submit", function (event) {
            //     event.preventDefault(); // Prevent default form submission

            //     Swal.fire({
            //         title: "Terima Kasih \ntelah mengisi form!",
            //         text: "Silahkan Menghubungi mimin",
            //         icon: "success",
            //         confirmButtonText: "Ke Nganu Proses"
            //     }).then((result) => {
            //         if (result.isConfirmed) {
            //             closeButton.submit(); // Only submit if confirmed
            //         }
            //     });
            // });

            // document.addEventListener("DOMContentLoaded", function () {
            //     const closeButton = document.querySelector(".close");

            //     closeButton.addEventListener("submit", function (event) {
            //         event.preventDefault(); // Prevent default form submission

            //         Swal.fire({
            //             title: "Terima Kasih \ntelah mengisi form!",
            //             text: "Silahkan Menghubungi mimin",
            //             icon: "success",
            //             confirmButtonText: "Ke Nganu Proses"
            //         }).then((result) => {
            //             if (result.isConfirmed) {
            //                 closeButton.submit(); // Only submit if confirmed
            //             }
            //         });
            //     });
            // });

        </script> -->
        <?php include "../layout/footer.php" ?>
    </div>


    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
</body>

</html>