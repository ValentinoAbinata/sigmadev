<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>KEMASIN</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
    <link rel="stylesheet" href="../assets/css/styleSlide.css">
</head>

<body>

    <?php include "../layout/navbar.php" ?>
    <div class="bg-gray-100">
        <div style=" padding: 5%; padding-top : 7%; padding-bottom : 0%; min-height:75dvh;">
            <p class="text-center text-4xl font-bold text-blue-700 mb-10"> Selamat Datang </p>
        </div>
        <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_EWct6A5puG014l71HK0EW7_4h5vL_5dW6A&s" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="../assets/image/iconKemasin.png" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_EWct6A5puG014l71HK0EW7_4h5vL_5dW6A&s" style="width:100%">
            <div class="text"></div>
        </div>

    </div>
    <br>

        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>



        <?php include "../layout/footer.php" ?>
    </div>




    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
    <script src="../assets/source/mainSlide.js"></script>
</body>

</html>