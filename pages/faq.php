<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>KEMASIN</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
</head>

<body>

    <?php include "../layout/navbar.php" ?>
    <div class="bg-gray-100">
        <div style=" padding: 5%; padding-top : 7%; padding-bottom : 0%; min-height:75dvh;">
            <p class="text-center text-4xl font-bold text-blue-700 mb-10"> Frequently Asked Questions (FAQ) </p>
            <div class="" style="padding:0px 20% 0px 20%;" >
                
                <div class="col p-2 bg-green-300" style="border-color : white; border-width : 3px; border-radius: 12px;">
                    <button onclick="q1()">q1?</button>

                    <div id="q1" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                        Why are you gay, Faris? Are you need 8==D
                        annk ememk <br>
                        eankae <br>
                        aekn<br>
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
                    <button onclick="q2()">q2?</button>

                    <div id="q2" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                        Why are you gay, Faris? Are you need 8==D
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
                    <button onclick="q3()">q3?</button>

                    <div id="q3" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                        Why are you gay, Faris? Are you need 8==D
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
                    <button onclick="q4()">q4?</button>

                    <div id="q4" class="" style="display:none; border-color:gray; border-top-width : 3px;">
                        Why are you gay, Faris? Are you need 8==D
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


            </div>
        </div>
        <?php include "../layout/footer.php" ?>
    </div>




    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
</body>

</html>