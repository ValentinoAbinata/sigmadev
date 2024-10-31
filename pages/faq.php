<?php ?>

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
            <p class="text-center text-4xl font-bold text-blue-700 mb-10"> Frequently Asked Questions (FAQ) </p>
            <div class="mb-5" style="padding:0px 20% 0px 20%;" >
                
                <div class="col p-2 bg-green-300" style="border-color : white; border-width : 3px; border-radius: 12px;">
                    <button onclick="q1()">Apakah sigmaDev itu?</button>

                    <div id="q1" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                        sigmaDev adalah website heheheheheeeheheheehehehe
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

                <div class="col p-2 bg-green-300" style="border-color : white; border-width : 3px; border-radius: 12px;">
                    <button onclick="q2()">Bagaimana cara agar data Saya tampil dalam data kesehatan?</button>

                    <div id="q2" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                        Setelah Anda mengisi form, maka laporkan kepada Customer Service.
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

                <div class="col p-2 bg-green-300" style="border-color : white; border-width : 3px; border-radius: 12px;">
                    <button onclick="q3()">Apa itu Klinik Utama?</button>
                    <div id="q3" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                    Klinik Utama adalah klinik yang menyelenggarakan pelayanan medik spesialistik atau pelayanan medik dasar dan spesialis.
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

                <div class="col p-2 bg-green-300" style="border-color : white; border-width : 3px; border-radius: 12px;">
                    <button onclick="q4()">Apa itu Klinik Pratama?</button>

                    <div id="q4" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                    Klinik Pratama adalah klinik yang menyelenggarakan pelayanan medik dasar yang terdiri dari Pelayanan dokter umum, Pelayanan dokter gigi umum, Pelayanan tindakan sederhana, Pelayanan kebidanan sederhana, Pelayanan administrasi rekam medis.
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

                <div class="col p-2 bg-green-300" style="border-color : white; border-width : 3px; border-radius: 12px;">
                    <button onclick="q5()">Siapakah pembuat website sigma ini?</button>

                    <div id="q5" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                    Hanya Valentino Abinata
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


            </div>
        </div>
        <?php include "../layout/footer.php" ?>
    </div>




    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
</body>

</html>