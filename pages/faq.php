<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="../assets/cdn/flowbite.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="../assets/cdn/aos.css" rel="stylesheet">


</head>

<body
    style="font-family: Poppins;background-image: url('../assets/image/faq.jpg'); background-size: cover;background-attachment: fixed"
    class="overflow-x-hidden">
    <?php include "../layout/navbar.php" ?>
    <div>
        <div style=" padding: 5%; padding-top : 9%; padding-bottom : 0%; min-height:75dvh;">
            <p class="text-center text-4xl font-bold mb-10" style="color: #003366" data-aos="zoom-in"> Frequently Asked
                Questions (FAQ) </p>

            <div class="mb-5" style="padding:0px 20% 0px 20%;">


                <div class="col p-2 bg-green-300" style="border-color : white; border-width : 3px; border-radius: 12px;"
                    data-aos="slide-right">
                    <button onclick="q1()">Apakah sigmaDev itu?</button>

                    <div id="q1" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                        <p class="text-md mb-3 mt-3 px-3 text-justify">
                            Platform sigmaDev hadir untuk mempermudah proses pendataan vaksinasi di desa Anda. Kami
                            menyediakan
                            solusi digital yang membantu warga desa mendaftarkan diri secara mandiri, mencatat informasi
                            identitas, dan seputar informasi vaksin.
                            Kami berharap dapat meningkatkan
                            partisipasi warga dalam program vaksinasi demi terciptanya desa yang lebih sehat.
                        </p>
                    </div>

                    <script>
                    function q1() {
                        var x = document.getElementById("q1");
                        if (x.style.display === "block") {
                            x.style.display = "none";
                        } else {
                            x.style.display = "block";
                        }
                    }
                    </script>
                </div>

                <div class="col p-2 bg-green-300" style="border-color : white; border-width : 3px; border-radius: 12px;"
                    data-aos="slide-left">
                    <button onclick="q2()">Bagaimana cara agar data saya tampil dalam data kesehatan?</button>

                    <div id="q2" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                        <p class="text-md mb-3 mt-3 px-3 text-justify">
                            Setelah Anda mengisi form layanan, kemudian hubungi admin di "Tentang Kami".
                        </p>
                    </div>

                    <script>
                    function q2() {
                        var x = document.getElementById("q2");
                        if (x.style.display === "block") {
                            x.style.display = "none";
                        } else {
                            x.style.display = "block";
                        }
                    }
                    </script>
                </div>

                <div class="col p-2 bg-green-300" style="border-color : white; border-width : 3px; border-radius: 12px;"
                    data-aos="slide-right">
                    <button onclick="q3()">Bagaimana cara mendaftar di sigmaDev?</button>
                    <div id="q3" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                        <p class="text-md mb-3 mt-3 px-3 text-justify">
                            Anda dapat mendaftar melalui Layanan Kesehatan. Dalam Layanan Kesehatan, Anda dapat memilih
                            vaksin. Setelah Memilih vaksin, Anda akan ditujukan pada pengisian form pendaftaran vaksin.
                        </p>
                    </div>

                    <script>
                    function q3() {
                        var x = document.getElementById("q3");
                        if (x.style.display === "block") {
                            x.style.display = "none";
                        } else {
                            x.style.display = "block";
                        }
                    }
                    </script>
                </div>

                <div class="col p-2 bg-green-300" style="border-color : white; border-width : 3px; border-radius: 12px;"
                    data-aos="slide-left">
                    <button onclick="q4()">Pendataan vaksin apa saja yang ditawarkan sigmaDev?</button>

                    <div id="q4" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                        <p class="text-md mb-3 mt-3 px-3 text-justify">
                            sigmaDev melayani pendataan vaksinasi untuk vaksin Covid-19 maupun vaksinasi lainnya. Jika
                            dijabarkan sigmaDev melayani beberapa vaksin, diantaranya vaksin sinovac, vaksin moderna,
                            vaksin rubella, vaksin campak, vaksin polio, vaksin rabies, vaksin anthrax, vaksin hepatitis
                            A dan B.
                        </p>
                    </div>

                    <script>
                    function q4() {
                        var x = document.getElementById("q4");
                        if (x.style.display === "block") {
                            x.style.display = "none";
                        } else {
                            x.style.display = "block";
                        }
                    }
                    </script>
                </div>
                <div class="col p-2 bg-green-300" style="border-color : white; border-width : 3px; border-radius: 12px;"
                    data-aos="slide-right">
                    <button onclick="q5()">Mengapa dibuat website sigmaDev</button>

                    <div id="q5" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                        <p class="text-md mb-3 mt-3 px-3 text-justify">
                            Masyarakat desa sering kali menghadapi tantangan dalam mendapatkan informasi yang akurat dan
                            terkini mengenai vaksinasi. Hal ini disebabkan oleh faktor geografis, kurangnya sumber daya,
                            dan minimnya kampanye edukasi kesehatan.

                    </div>

                    <script>
                    function q5() {
                        var x = document.getElementById("q5");
                        if (x.style.display === "block") {
                            x.style.display = "none";
                        } else {
                            x.style.display = "block";
                        }
                    }
                    </script>
                </div>

                <div class="col p-2 bg-green-300" style="border-color : white; border-width : 3px; border-radius: 12px;"
                    data-aos="slide-left">
                    <button onclick="q6()">Apakah Tujuan Utama sigmaDev</button>

                    <div id="q6" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                        
                           <ol class="text-md mb-3 mt-3 px-3 text-justify">
                                <li>1. Memfasilitasi pendaftaran online bagi masyarakat untuk mendapatkan vaksin dengan mudah dan cepat.</li>
                                <li>2. Menyediakan data lengkap tentang berbagai jenis vaksin yang tersedia, manfaatnya, serta efek samping dan mungkin terjadi.</li>
                                <li>3. Menawarkan artikel dan sumber daya edukatif tentang pentingnya vaksinasi dan kesehatan masyarakat. </li>

                           </ol>
                    </div>

                    <script>
                    function q6() {
                        var x = document.getElementById("q6");
                        if (x.style.display === "block") {
                            x.style.display = "none";
                        } else {
                            x.style.display = "block";
                        }
                    }
                    </script>
                </div>
                <div class="col p-2 bg-green-300" style="border-color : white; border-width : 3px; border-radius: 12px;"
                    data-aos="slide-right">
                    <button onclick="q7()">
                    Fitur-fitur Apa Saja yang digunakan dalam Website Ini?
                    </button>

                    <div id="q7" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                        <p class="text-md mb-3 mt-3 px-3 text-justify">
                            Fitur-fitur utama yang akan kami kembangkan melibatkan antarmuka pengguna yang intuitif,
                            sehingga pengguna dapat dengan mudah memasukkan dan melihat data vaksinasi mereka tanpa
                            mengalami kesulitan. Selain itu, platform ini juga akan menyediakan informasi terkini
                            tentang jenis-jenis vaksin, manfaat vaksin, serta lokasi fasilitas kesehatan yang
                            menyediakan layanan vaksinasi.
                    </div>

                    <script>
                    function q7() {
                        var x = document.getElementById("q7");
                        if (x.style.display === "block") {
                            x.style.display = "none";
                        } else {
                            x.style.display = "block";
                        }
                    }
                    </script>
                </div>


            </div>
        </div>
        <?php include "../layout/footer.php" ?>
    </div>




    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
    <script src="../assets/cdn/aos.js"></script>
    <script>
    AOS.init({
        duration: 1500,
        once: false,
        loop: true
    });
    </script>

</body>

</html>