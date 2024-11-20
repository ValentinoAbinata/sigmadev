<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
.pembuka {
backdrop-filter: blur(2px) saturate(166%);
-webkit-backdrop-filter: blur(30px) saturate(166%);
background-color: rgba(255, 255, 255, 0.2);

}

</style>

<body style="font-family: Poppins;">
    <div>
    <nav class="fixed w-full z-20 top-0 start-0 pembuka" style=" z-index:1000000;border-radius:0px !important">

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
                        class="flex flex-row p-4 md:p-0 mt-4 font-medium border border-blue-200 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                        <li>
                            <a href="beranda.php"
                                class="flex items-center py-2 px-3 rounded hover:bg-blue-200 text-lg font-bold md:hover:bg-transparent md:hover:text-blue-700 md:p-0"
                                aria-current="page">
                                <i class='bx bx-grid-alt'></i>
                                <span class="ml-2">Beranda</span>
                            </a>
                        </li>
                        <li>
                            <a href="daKes.php"
                                class="flex items-center py-2 px-3 rounded text-lg font-bold hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white rounded hover:bg-blue-200 text-lg font-bold md:hover:bg-transparent md:hover:text-blue-700"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2">Data Kesehatan</span>
                            </a>
                        </li>
                        <li>
                            <a href="layKes.php"
                                class="flex items-center py-2 px-3 rounded text-lg font-bold hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white rounded hover:bg-blue-200 text-lg font-bold md:hover:bg-transparent md:hover:text-blue-700"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z" />
                                </svg>
                                <span class="ml-2">Layanan Kesehatan</span>
                            </a>
                        </li>
                        <li>
                            <a href="faq.php"
                                class="flex items-center py-2 px-3 rounded text-lg font-bold hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white rounded hover:bg-blue-200 text-lg font-bold md:hover:bg-transparent md:hover:text-blue-700 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9.529 9.988a2.502 2.502 0 1 1 5 .191A2.441 2.441 0 0 1 12 12.582V14m-.01 3.008H12M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                                <span class="ml-2">FAQ</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
</body>

</html>