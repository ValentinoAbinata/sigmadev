-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2025 at 02:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigmadev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(50) NOT NULL,
  `password` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('Valentino Abinata', 123230013),
('Reza Rasendriya Adi Putra', 123230030);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nikP` varchar(20) NOT NULL,
  `emailP` varchar(75) NOT NULL,
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `namaP` varchar(75) NOT NULL,
  `jkP` varchar(20) NOT NULL,
  `lahirP` date NOT NULL,
  `telpP` varchar(20) NOT NULL,
  `domisiliP` varchar(75) NOT NULL,
  `isShow` tinyint(1) NOT NULL,
  `id` int(11) NOT NULL,
  `imgP` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`nikP`, `emailP`, `first_name`, `last_name`, `namaP`, `jkP`, `lahirP`, `telpP`, `domisiliP`, `isShow`, `id`, `imgP`) VALUES
('34000441224', 'mewing@gmail.com', 'Mewing', 'Rizz', 'Mewing Rizz', 'L', '2024-11-01', '081239163182', 'Sleman', 0, 3, '674038f3384ca.jpeg'),
('34000911282', 'salvanaMesyska@gmail.com', 'Salvana', 'Meyska', 'Salvana Meyska', 'P', '1991-12-12', '0819721428', 'Sleman', 0, 3, '673e95e4b35be.jpg'),
('34004002801', 'putri@gmail.com', 'putri', 'lestari', 'putri lestari', 'P', '2015-12-30', '089712482', 'Sleman', 0, 3, '673e942067b07.jpg'),
('34004128429', 'putra@gmail.com', 'Putra', 'Nurahman', 'Putra Nurahman', 'L', '2011-08-09', '089173183123', 'Sleman', 0, 5, '673e97b3a1be8.png'),
('34040000001', 'Sina@gmail.com', 'Sina', 'Baswedan', 'Sina Baswedan', 'L', '1970-08-09', '0812000001', 'Jakarta', 0, 1, '673e2126104dd.png'),
('34040028289', 'lutfi@gmail.com', 'Lutfi', 'Halimabar', 'Lutfi Halimabar', 'L', '1987-08-08', '0812683812', 'Jakarta', 0, 8, '673e20a1dbfeb.png'),
('34040040721109', 'Fariz@gmail.com', 'Salman', 'Fariz', 'Salman Fariz', 'L', '2005-06-14', '081215234881', 'Bima', 1, 6, '673e1c3d0680f.png'),
('3404007123845', 'Retyz@gmail.com', 'Reza', 'Adi P', 'Reza Adi P', 'L', '2005-05-03', '08121523412', 'Ngaglik, DI Yogyakarta', 1, 2, '673e1d1b56586.png'),
('34040072159', 'Floryn@gmail.com', 'Floryn', 'Mobilejen', 'Floryn Mobilejen', 'P', '2009-12-04', '081212423', 'Land of Dawn', 0, 3, '673e21dfe886b.png'),
('3404007281322', 'talent@gmail.com', 'Valentino', 'Abinata', 'Valentino Abinata', 'L', '2004-01-21', '081215234681', 'Sleman', 1, 1, '673e1ccec2033.png'),
('3404007297839', 'Jessy@gmail.com', 'Jessica', 'Jane', 'Jessica Jane', 'P', '2000-05-31', '08121512132', 'Jakarta', 1, 4, '673e1fc4e59ca.png'),
('340400784010', 'lvstchie@gmail.com', 'Nadia', 'Chie', 'Nadia Chie', 'P', '2003-04-04', '0812123592', 'Jakarta', 0, 7, '673e20344a707.png'),
('34040999059', 'balita@gmail.com', 'Aku', 'Balita', 'Aku Balita', 'L', '2023-01-01', '081293931', 'Jawa Timur', 0, 3, '673e242200dad.png'),
('726312838', '1@gmail.com', 'Martin', 'Paes', 'Martin Paes', 'L', '0000-00-00', '1', '1', 1, 1, '674805a667286.jpg'),
('9127218', 'Manut@gmail.com', 'Rusdi', 'Mewing', 'Rusdi Mewing', 'L', '2024-11-22', '0812741912', 'Bantul', 1, 7, '674037fcc5ab8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `idPesan` int(11) NOT NULL,
  `namaP` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`idPesan`, `namaP`, `deskripsi`) VALUES
(14, 'Sina Baswedan', 'Ketika, ketika ketika.. Tolong Tampilkan akun Saya'),
(15, 'Floryn Mobilejen', 'Tanaman, Bunga, Tumbuhan.. Tolong tampilkan dataku! Terimakasih'),
(17, 'Lutfi Halimabar', 'Tolong tampilkan punyaku pls bg plssssssssss AOKWOK'),
(19, 'sky piercer', 'tambahkan saya atau damage saya 9999'),
(34, 'sigma rizz', 'Apakah saya harus tampil'),
(35, 'martin', 'tampil bang');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pengguna` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pengguna`, `pass`) VALUES
(1, '1', '1'),
(7, 'alan walker', '123'),
(8, 'martin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `vaksin`
--

CREATE TABLE `vaksin` (
  `id` int(11) NOT NULL,
  `namaVaksin` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `imgV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaksin`
--

INSERT INTO `vaksin` (`id`, `namaVaksin`, `deskripsi`, `tipe`, `imgV`) VALUES
(1, 'Vaksin Sinovac', 'Vaksin Sinovac, juga dikenal sebagai CoronaVac, adalah vaksin COVID-19 yang dikembangkan oleh perusahaan bioteknologi Tiongkok, Sinovac Biotech. Vaksin ini menggunakan teknologi virus yang tidak aktif, yang berarti virus COVID-19 telah dilemahkan agar tidak menyebabkan penyakit tetapi tetap dapat merangsang respons imun tubuh. Vaksin Sinovac telah digunakan di banyak negara dan merupakan bagian dari program vaksinasi di beberapa negara untuk melawan COVID-19.', 'covid', '673f4642be9ca.png'),
(2, 'Vaksin Moderna', 'Vaksin Moderna adalah vaksin COVID-19 berbasis teknologi mRNA yang dikembangkan oleh perusahaan bioteknologi Moderna di Amerika Serikat. Vaksin ini bekerja dengan mengirimkan pesan genetik ke sel-sel tubuh untuk memproduksi protein lonjakan (spike protein) virus COVID-19, yang kemudian dikenali oleh sistem kekebalan sebagai ancaman dan meresponsnya dengan membentuk antibodi. Moderna dikenal dengan efektivitasnya yang tinggi dalam mencegah COVID-19.', 'covid', '673f75476f642.png'),
(3, 'Vaksin Rubella', 'Vaksin Rubella biasanya diberikan dalam bentuk vaksin kombinasi MMR (campak, gondongan, rubella) dan berfungsi untuk melindungi dari infeksi rubella, juga dikenal sebagai campak Jerman. Rubella adalah penyakit virus yang dapat menyebabkan komplikasi serius bagi ibu hamil karena dapat menyebabkan cacat lahir. Vaksin ini biasanya diberikan pada anak-anak dan juga pada perempuan usia subur untuk mencegah infeksi selama kehamilan.', 'lainnya', '673f755f32220.jpg'),
(4, 'Vaksin Campak', 'Vaksin ini digunakan untuk melindungi dari infeksi campak, sebuah penyakit yang sangat menular dan bisa menimbulkan komplikasi serius seperti pneumonia dan ensefalitis. Vaksin campak biasanya diberikan dalam bentuk kombinasi MMR (campak, gondongan, rubella). Imunisasi campak sangat penting, terutama di daerah dengan cakupan vaksinasi rendah, untuk mencegah wabah penyakit ini.', 'lainnya', '673f75751e330.png'),
(5, 'Vaksin Polio', 'Vaksin polio adalah vaksin yang sangat efektif untuk melindungi dari penyakit polio, yang dapat menyebabkan kelumpuhan permanen dan bahkan kematian pada anak-anak. Terdapat dua jenis vaksin polio: vaksin oral (OPV) dan vaksin suntik (IPV). Program vaksinasi polio telah membantu menurunkan kasus polio secara signifikan di seluruh dunia dan merupakan bagian penting dari upaya pemberantasan polio.', 'lainnya', '673f7589a89bc.jpg'),
(6, 'Vaksin Rabies', 'Vaksin rabies diberikan untuk mencegah infeksi rabies, penyakit virus yang ditularkan melalui gigitan hewan yang terinfeksi, seperti anjing dan kelelawar. Rabies sangat mematikan jika tidak segera ditangani setelah paparan. Vaksin rabies dapat diberikan sebagai pencegahan (sebelum terpapar) atau sebagai pengobatan darurat setelah gigitan (post-exposure prophylaxis).', 'lainnya', '673f759b3034e.jpeg'),
(7, 'Vaksin Anthrax', 'Vaksin ini diberikan kepada individu yang berisiko tinggi terpapar bakteri anthrax, seperti pekerja yang menangani hewan atau produk hewani tertentu. Anthrax adalah infeksi bakteri yang berpotensi fatal jika tidak diobati. Vaksin anthrax membantu memberikan perlindungan dengan merangsang sistem kekebalan tubuh untuk mengenali dan melawan bakteri Bacillus anthracis yang menyebabkan penyakit ini.', 'lainnya', '673f75aaaa01e.jpeg'),
(8, 'Vaksin Hepatitis A dan B', 'Vaksin kombinasi yang memberikan perlindungan terhadap dua jenis hepatitis, yaitu hepatitis A dan hepatitis B. Hepatitis A disebabkan oleh virus yang menyebar melalui makanan atau air yang terkontaminasi, sedangkan hepatitis B ditularkan melalui darah atau cairan tubuh. Vaksin ini penting untuk melindungi dari infeksi hati yang dapat menyebabkan kerusakan hati jangka panjang.', 'lainnya', '673f7ba88e833.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`password`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nikP`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idPesan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaksin`
--
ALTER TABLE `vaksin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idPesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vaksin`
--
ALTER TABLE `vaksin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`id`) REFERENCES `vaksin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
