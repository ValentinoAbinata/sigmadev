<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="../assets/css/login.css" />




</head>

<body>
    <?php include "../layout/navbar.php" ?>
    <div class="container bg-login" style="margin-top: 50px;">
        <div class="forms-container">
            <div class="signin-signup">

                <!-- Form admin login -->
                <form action="../assets/mySql/cek_login.php" class="sign-in-form" method="POST">
                    <h2 class="title">Welcome Admin</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                    <input type="submit" value="Login" class="btn solid mt-0" name="login" />
                    <p class="social-text mt-0">Login dengan cara lain</p>
                    <div class="social-media">
                        <ul class="example-2 mb-8">
                            <li class="icon-content">
                                <a href="https://www.github.com/" aria-label="GitHub" data-social="github">
                                    <div class="filled"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-github" viewBox="0 0 16 16" xml:space="preserve">
                                        <path
                                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                                <div class="tooltip">GitHub</div>
                            <li class="icon-content">
                                <a href="https://google.com/" aria-label="Google" data-social="google">
                                    <div class="filled"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                                        <path
                                            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                                    </svg>
                                </a>
                                <div class="tooltip">Google</div>
                            </li>
                        </ul>
                    </div>
                </form>

                <?php
                if (isset($_GET['islogin'])) {
                    if ($_GET['islogin'] == "gagal_login") {
                        ?>
                    <div id="error-message"
                        class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert" style="z-index: 100;">
                        <span class="font-medium">Username atau/dan Password Kurang Tepat, Silahkan Ulangi!</span>
                    </div>
                    <?php
                    }elseif ($_GET['islogin'] == "logout") {
                        echo "<div id='error-message'>Anda telah berhasil logout</div>";
                    }elseif ($_GET['islogin'] == "false") {
                        ?>
                    <div id="error-message"
                        class="p-4 mb-4 text-sm text-center text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <span class="font-medium">Harap Login terlebih dahulu!</span>
                    </div>
                   <?php
                    }
                }
                ?>

                <form action class="sign-up-form shadow-lg p-8">
                    <h2 class="title text-3xl font-bold text-gray-800 mb-6 text-center">Informasi Login Page</h2>
                    <div class="content p-6 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl">
                        <p class="text-xl font-semibold mb-6 text-gray-700 border-b pb-3 border-gray-400">
                            Halaman ini hanya dapat diakses oleh admin karena:
                        </p>
                        <ul class="space-y-4">
                            <li
                                class="flex items-center space-x-3 text-gray-600 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span>Mengandung informasi sensitif yang perlu dijaga</span>
                            </li>
                            <li
                                class="flex items-center space-x-3 text-gray-600 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                                </svg>
                                <span>Memerlukan otorisasi khusus untuk mengakses fitur administratif</span>
                            </li>
                            <li
                                class="flex items-center space-x-3 text-gray-600 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                                <span>Menjaga keamanan data pengguna</span>
                            </li>
                            <li
                                class="flex items-center space-x-3 text-gray-600 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                                <span>Memberikan kontrol penuh atas sistem</span>
                            </li>
                            <li
                                class="flex items-center space-x-3 text-gray-600 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Mencegah akses tidak sah ke data penting</span>
                            </li>
                        </ul>
                    </div>
                    
                </form>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Kenapa hanya bisa Admin yang login?</h3>
                    <p>
                        Tekan tombol di bawah ini untuk informasi lanjutan
                    </p>
                    <button class="btn transparent bg-info" id="sign-up-btn">
                        Lanjut
                    </button>
                </div>
                <img src="../assets/image/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3 class="mb-3">Ingin Kembali?</h3>
                    <p>
                        Tekan tombol di bawah ini untuk kembali ke login page
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Login page
                    </button>
                </div>
                <img src="../assets/image/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script>
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");
    const errorMessage = document.querySelector("#error-message");

    sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
        container.classList.remove("bg-login");
        container.classList.add("bg-info");
        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    });

    sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
        container.classList.remove("bg-info");
        container.classList.add("bg-login");
        if (errorMessage) {
            errorMessage.style.display = 'block';
        }
    });
    </script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</body>

</html>