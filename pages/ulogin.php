<?php
session_start() ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="../assets/cdn/flowbite.min.css" />
    <link rel="stylesheet" href="../assets/css/login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>

<body>
    <div class="container bg-login mt-0">
        <?php 
    if(isset($_SESSION['usernameU'])){
        include "../layout/unavbar.php" ;
    } else {
        if(isset($_SESSION['username'])){
            include "../layout/unavbar.php" ;
        } else {
            include "../layout/navbar.php" ;
        }
    }
    ?>
        <div class="forms-container">
            <div class="signin-signup">

                <!-- Form user login -->
                <form action="../assets/mySql/cek_login.php" class="sign-in-form" method="POST">
                    <h2 class="title mb-3">Welcome User</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" style="border-radius : 14px;" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" style="border-radius : 14px;" />
                    </div>
                    <p> Kamu adalah Admin? Klik <a href="login.php" class="text-blue-700"> disini! </a> </p>
                    <button type="submit" value="uLogin" class="btn solid mt-3" name="ulogin"
                        style="background-color: #4d84e2;">LOGIN </button>

                </form>

                <?php
                if (isset($_GET['islogin'])) {
                    if ($_GET['islogin'] == "gagal_login") {
                        ?>
                <div id="error-message"
                    class="p-4 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert" style="z-index: 100; height:50px;">
                    <span class="font-medium">Username atau/dan Password Kurang Tepat, Silahkan Ulangi!</span>
                </div>
                <?php
                    }elseif ($_GET['islogin'] == "harap_login"){
                    ?>
                <div id="error-message"
                    class="p-4 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert" style="z-index: 100;height:50px;">
                    <span class="font-medium text-center flex justify-center items-center">Harap Login Sebelum Mengisi
                        Form Layan!</span>
                </div>

                <?php
                    }elseif ($_GET['islogin'] == "logout") {
                        echo "<div id='success-message' class='p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 text-center'
                        role='alert' style='z-index: 100;'>
                        <span class='font-medium '>Anda Berhasil Logout!</span></div>";
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
                <?php
                    if (isset($_GET['register']) && $_GET['register'] == "berhasil"){
                        echo "<div id='success-message' class='p-4 mb-2 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 text-center'
                        role='alert' style='z-index: 100; width:100%; height:50px;'>
                        <span class='font-medium '>Anda Berhasil mendaftarkan akun!</span></div>";
                    }
                
                ?>

                <form action="../assets/mySql/proses.php" method="POST" class="sign-up-form shadow-lg">
                    <h2 class="title">Daftar Akun</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="pengguna" style="border-radius : 14px;" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="pass" style="border-radius : 14px;" required/>
                    </div>
                    <button type="submit" value="uregister" class="btn solid mt-7 " name="uregister"
                        style="background-color: #4d84e2;">DAFTAR </button>



                </form>
                <?php
                if (isset($_GET['register'])) {
                    if ($_GET['register'] == "gagal_daftar") {
                    echo"
                <div id='error-message'
                    class='p-4 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400'
                    role='alert' style='z-index: 100; height:50px;'>
                    <span class='font-medium'>Username tidak dapat digunakan, Silahkan Ulangi!</span>
                </div>";
                    }
                }
                ?>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum Punya Akun Untuk Login?</h3>
                    <p>
                        Tekan tombol di bawah ini untuk mendaftar
                    </p>
                    <button class="btn transparent bg-info" id="sign-up-btn">
                        Lanjut
                    </button>

                </div>
                <img src="../assets/image/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3 class="mb-3">Sudah Punya Akun?</h3>
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