<?php session_start(); ?> <!DOCTYPE html> <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body style="font-family: Poppins;">
    <div>
        <nav class="bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 fixed w-full z-20 top-0 start-0 border-b border-blue-200"
            style="z-index: 100000;">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="beranda.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="../assets/image/iconsigmaDev.png" class="h-20" alt="sigmaDev Logo">
                    <span class="self-center text-2xl font-bold whitespace-nowrap">sigma</span> <span
                        class="mx-0 px-0 text-2xl font-bold text-white" style="margin-left : 0 ;">Dev</span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a type="button" href="login.php"
                        class="flex items-center justify-center gap-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-base px-4 py-2 text-center">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        Login
                    </a>

                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-blue-200 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                        <li>
                            <a href="beranda.php" class="block py-2 px-3 rounded hover:bg-blue-200 text-lg font-bold md:hover:bg-transparent md:hover:text-blue-700 md:p-0" aria-current="page">Beranda</a>
                        </li>
                        <li>
                            <a href="daKes.php" class="block py-2 px-3 rounded text-lg font-bold hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Data Kesehatan</a>
                        </li>
                        <li>
                            <a href="layKes.php" class="block py-2 px-3 rounded text-lg font-bold hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0"> Layanan Kesehatan</a>
                        </li>
                        <li>
                            <a href="faq.php" class="block py-2 px-3 rounded text-lg font-bold hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
</body>

</html>