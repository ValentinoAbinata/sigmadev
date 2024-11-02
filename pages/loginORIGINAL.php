<?php
session_start();
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

            <div class="flex flex-row bg-white rounded-lg shadow-lg mt-10 mb-10">

                <div class="w-full">
                    <img class="w-full contain" style="border-right-color: aliceblue; border-right-width: 3px ;"
                        src="../assets/image/vaksin.png" alt="pemanis">
                </div>

                <div class="w-full" style="padding:10%;">
                    <div class="flex justify-center mx-auto">
                        <img class="w-auto h-24" src="../assets/image/iconsigmaDev2.png" alt="logo">
                    </div>

                    <p class="mt-3 text-xl text-center text-gray-600 dark:text-gray-200">
                        Welcome Admin!
                    </p>

                    <a href="#"
                        class="flex items-center justify-center mt-4 text-gray-600 transition-colors duration-300 transform border rounded-lg dark:border-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <div class="px-4 py-2">
                            <svg class="w-6 h-6" viewBox="0 0 40 40">
                                <path
                                    d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                    fill="#FFC107" />
                                <path
                                    d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
                                    fill="#FF3D00" />
                                <path
                                    d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
                                    fill="#4CAF50" />
                                <path
                                    d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                    fill="#1976D2" />
                            </svg>
                        </div>

                        <span class="w-5/6 px-4 py-3 font-bold text-center">Sign in with Google</span>
                    </a>

                    <div class="flex items-center justify-between mt-4">
                        <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>

                        <a href="#"
                            class="text-xs text-center text-gray-500 uppercase dark:text-gray-400 hover:underline">or
                            login
                            with email</a>

                        <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4"></span>
                    </div>

                    <form method="POST" action>

                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                                for="LoggingEmailAddress">Username</label>
                            <input id="LoggingEmailAddress"
                                class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                                type="text" name="username" />
                        </div>

                        <div class="mt-4">
                            <div class="flex justify-between">
                                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                                    for="loggingPassword">Password</label>
                                <a href="#" class="text-xs text-gray-500 dark:text-gray-300 hover:underline">Forget
                                    Password?</a>
                            </div>

                            <input id="loggingPassword"
                                class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                                type="password" name="password" />
                        </div>

                        <div class="mt-6">
                            <button
                                class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50"
                                name="login">
                                Sign In
                            </button>
                        </div>

                        <div class="flex items-center justify-between mt-4">
                            <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>

                            <a href="#" class="text-xs text-gray-500 uppercase dark:text-gray-400 hover:underline">or
                                sign
                                up</a>

                            <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
                        </div>
                    </form>
                    <?php
                    if (isset($_GET['isLogin'])){
                        echo "Harap Login Terlebih Dahulu!" ;
                    }
                    if (isset($_POST["login"])) {
                        if ($_POST['username'] == "admin" && $_POST['password'] == "admin1234") {
                            $_SESSION['username'] = $_POST['username'];
                            $_SESSION['password'] = $_POST['password'];
                            echo "Jika Tidak Kembali ke Beranda, Tekan <a href='beranda.php' class='text-blue-400'> ini </a>" ;
                            ("Location : beranda.php?isLogin=tru") ;
                        } else {
                            ?>
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <span class="font-medium">Username atau/dan Password Kurang Tepat, Silahkan Ulangi!</span>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>


        </div>
        <?php include "../layout/footer.php" ?>
    </div>




    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
</body>

</html>