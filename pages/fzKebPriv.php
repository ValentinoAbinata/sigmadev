<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/image/iconWeb.png">
    <title>Privacy Policy - sigmaDev</title>
    <link rel="stylesheet" href="../assets/cdn/flowbite.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body style="background-image: url('../assets/image/kebpriv.jpg'); background-size: cover;">
    <?php include "../layout/navbar.php" ?>

    
    <div style=" padding: 5%; padding-top : 9%; padding-bottom : 0%; min-height:75dvh;">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4" style="color: #003366" data-aos="slide-left">Kebijakan Privasi</h1>
            <p class="text-lg text-gray-800 py-5" data-aos="slide-right">Pelajari bagaimana sigmaDev mengelola data pribadi Anda dengan aman dan transparan.</p>
        </div>


        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="zoom-out-down">

            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-bold mb-2" style="color: #003366">Persetujuan</h2>
                <p class="text-gray-600">sigmaDev akan memproses data pribadi Anda hanya setelah mendapatkan persetujuan yang jelas dari Anda untuk tujuan tertentu.</p>
            </div>

            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-bold mb-2" style="color: #003366">Kepentingan yang Sah</h2>
                <p class="text-gray-600">Kami dapat menggunakan data Anda untuk kepentingan bisnis yang sah, selama tidak mengabaikan hak dan kebebasan privasi Anda.</p>
            </div>

            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-bold mb-2" style="color: #003366">Pelaksanaan Kontrak</h2>
                <p class="text-gray-600">Data Anda digunakan untuk memastikan bahwa layanan yang dijanjikan dalam kontrak dapat diselesaikan dengan baik.</p>
            </div>

            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-bold mb-2" style="color: #003366">Kewajiban Hukum</h2>
                <p class="text-gray-600">sigmaDev dapat mengungkapkan informasi Anda jika diwajibkan secara hukum untuk melakukannya.</p>
            </div>

            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-bold mb-2" style="color: #003366">Kepentingan Vital</h2>
                <p class="text-gray-600">Data dapat digunakan untuk menyelidiki pelanggaran kebijakan, mencegah penipuan, atau melindungi pengguna dari aktivitas ilegal.</p>
            </div>

            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-bold mb-2" style="color: #003366">Penggunaan Cookies</h2>
                <ul class="list-disc ml-6 text-gray-600">
                    <li>Menyediakan dan mengelola layanan</li>
                    <li>Memantau gangguan layanan</li>
                    <li>Melindungi pengguna dari spam dan aktivitas ilegal</li>
                    <li>Mengukur keterlibatan audiens dan statistik situs</li>
                </ul>
            </div>
        </section>

        <div class="mt-12 text-center mt-10 mb-10" data-aos="zoom-in">
            <p class="text-gray-700" >
                sigmaDev berkomitmen untuk mematuhi standar perlindungan data GDPR dan memiliki tim R&D yang fokus pada keamanan data.
            </p>
        </div>
    </div>

    <?php include "../layout/footer.php" ?>

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
