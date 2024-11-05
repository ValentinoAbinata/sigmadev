<?php 
    ob_start(); // Memulai output buffering
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="../assets/css/Login.css"/>

     


</head>

<body>
    <?php include "../layout/navbar.php" ?>
    <div class="container" style="margin-top: 50px;">
        <div class="forms-container">
            <div class="signin-signup">
                <form action class="sign-in-form" method="POST">
                    <h2 class="title">Welcome Admin</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                    <input type="submit" value="Login" class="btn solid mt-0" name="login" />
                    <p class="social-text mt-0">Login dengan cara lain</p>
                    <div class="social-media"> 
                        <ul class="example-2 mb-8">
                            <li class="icon-content ">
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
                    if (isset($_GET['isLogin'])){
                        echo "Harap Login Terlebih Dahulu!" ;
                    }
                    if (isset($_POST["login"])) {
                        if ($_POST['username'] == "admin" && $_POST['password'] == "admin1234") {
                            $_SESSION['username'] = $_POST['username'];
                            $_SESSION['password'] = $_POST['password'];
                            header("Location: beranda.php?isLogin=true");
                            exit();
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



                <form action class="sign-up-form">
                    <h2 class="title">informasi Login Page</h2>
                    
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
                    <button class="btn transparent" id="sign-up-btn">
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
                        Sign in
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

    sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
    });

    sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
    });
    </script>
     <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</body>

</html>

<?php
    ob_end_flush(); // ngirim semua output yang ketunda
?>