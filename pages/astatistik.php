<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location:login.php?islogin=false");
    }

    include("../assets/mySql/connect.php");

    $query = mysqli_query($conn, "SELECT v.id, v.namaVaksin, COUNT(p.id) AS jumlah
                                  FROM vaksin AS v
                                  LEFT JOIN pasien AS p ON v.id = p.id
                                  GROUP BY v.id, v.namaVaksin");
    
    $vaksinData = [];
    while ($data = mysqli_fetch_assoc($query)) {
        $vaksinData[] = [
            'namaVaksin' => $data['namaVaksin'],
            'jumlah' => $data['jumlah']
        ];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>sigmaDev</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
    <link rel="stylesheet" href="../assets/css/adakes.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>


<body style="font-family: Poppins;background-image : url('../assets/image/statistik.jpg'); background-size: cover;">
    <?php include "../layout/anavbar.php" ?>
    <div>
        <div style=" padding: 7%; padding-top : 2%; padding-bottom : 0%; min-height:75dvh;">
            <p class="text-center text-4xl font-bold text-gray-800 mb-5"> Statistik Vaksinasi </p>
            <p class="text-center text-xl text-gray-800 mb-10">
                Data vaksinasi terbaru untuk memantau jumlah orang yang telah mendapatkan vaksin sesuai jenisnya. </p>

            <div class="flex row justify-center items-center gap-2 py-12 mx-auto">
                <div class="col w-full h-full">
                    <canvas class="mt-10" id="myChart"></canvas>
                </div>
                <div class="col w-full h-full">
                    <canvas id="myPieChart"></canvas>
                </div>
            </div>

            <div class="justify-center flex items-center">
                <p class="text-2xl font-semibold text-gray-800 py-12">
                    Jumlah seluruh orang yang telah mendapatkan vaksinasi: <?php echo array_sum(array_column($vaksinData, 'jumlah')); ?>
                </p>

            </div>

        </div>
    </div>

    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script>
    const vaksinData = <?php echo json_encode($vaksinData); ?>; //json_ecode untuk ngirim php ke js
    const xValues = vaksinData.map(item => item.namaVaksin);
    const yValues = vaksinData.map(item => item.jumlah);

    const barColors = ["#FF6384", "#36A2EB", "#FFCE56", "#4BC0C0", "#9966FF", "#FF9F40", "#C9CBCF", "#2D3E50",
        "#00B74A"
    ];

    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors.slice(0, xValues.length),
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: "Grafik Vaksinasi"
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        return tooltipItem.yLabel + " orang";
                    }
                }
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }]
            }
        }
    });

    new Chart("myPieChart", {
        type: "pie",
        data: {
            labels: xValues, //label sama kyk grafik 
            datasets: [{
                backgroundColor: barColors.slice(0, xValues.length), 
                data: yValues // Data vaksinasi
            }]
        },
        options: {
            title: {
                display: true,
                text: "Diagram Vaksinasi"
            },
            responsive: true,
            maintainAspectRatio: false,
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        const label = data.labels[tooltipItem.index];
                        const value = data.datasets[0].data[tooltipItem.index];
                        const total = data.datasets[0].data.reduce((sum, val) => sum + val, 0);
                        const percentage = ((value / total) * 100).toFixed(2);
                        return `${label}: ${value} orang (${percentage}%)`;
                    }
                }
            }
        }
    });
    </script>

</body>

</html>