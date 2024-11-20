<?php


    include '../assets/mySql/connect.php';
    
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Dashboard Admin </title>
    <link rel="stylesheet" href="../assets/css/anavbar.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="../assets/image/iconsigmaDev2.png" alt="SigmaDev Logo" class="logo-image" />
            <span class="logo_name">SigmaDev</span>
            <i class="bx bx-menu" id="btn"></i>
        </div>

        <ul class="nav-list">
            <li>
                <a href="../pages/aberanda.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="../pages/adakes.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Data Kesehatan</span>
                </a>
                <span class="tooltip">Data Kesehatan</span>
            </li>
            <li>
                <a href="../pages/apesan.php">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Pesan</span>
                </a>
                <span class="tooltip">Pesan</span>
            </li>
            <li>
                <a href="../pages/astatistik.php">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Statistik</span>
                </a>
                <span class="tooltip">Statistik</span>
            </li>

            <?php
                if(isset($_SESSION['username'])) {
                    $dataAdmin = $_SESSION['username'];
                }
            ?>
            <li class="profile">
                <div class="profile-details">
                    <div style="padding: 5px;">
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>

                    <div class="name_job">
                        <div class="name"><?= $dataAdmin?></div>
                        <div class="job">Admin sigmaDev</div>
                    </div>
                </div>
                <a href="../assets/mySql/proses.php?logout=true" style="text-decoration:none !important; background: none;">
                    <i class='bx bx-log-out' id="log_out"></i>
                </a>
            </li>
        </ul>
    </div>
    <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange();
    });

    searchBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange();
    });


    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    }
    </script>
</body>

</html>