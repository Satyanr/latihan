-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 04:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_latihan_grafik_mahasiswa`
--

CREATE TABLE `tbl_latihan_grafik_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `fakultas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_latihan_grafik_mahasiswa`
--

INSERT INTO `tbl_latihan_grafik_mahasiswa` (`id`, `nama`, `nim`, `jenis_kelamin`, `fakultas`) VALUES
(1, 'Johny Pambudi', '1234567890', 'L', 'Teknik'),
(2, 'Maya Rahmaniah', '1234456667', 'P', 'Ekonomi'),
(3, 'Diki ALfarabi Hadi', '123345678887', 'L', 'Teknik'),
(4, 'Suamtono', '123456789', 'L', 'Fisip'),
(5, 'Jamludin Syah', '12345663536', 'L', 'Teknik'),
(6, 'Rahmaniah', '212111231133', 'P', 'Ekonomi'),
(7, 'Qiano Arfabian Putra', '1123555365', 'L', 'Teknik'),
(8, 'Gibran', '1122432434', 'L', 'Ekonomi'),
(9, 'Johny', '12363377332', 'L', 'Pertanian'),
(10, 'Muhammad Riski', '12837373839', 'L', 'Fisip'),
(11, 'Rahmat Syah Alub', '122652626252', 'L', 'Fisip'),
(12, 'Mahmud Amir', '123455467464', 'L', 'Pertanian'),
(13, 'Aminah', '123112342', 'P', 'Teknik'),
(14, 'Putri Aladin', '213114324234', 'P', 'Ekonomi'),
(15, 'Lubis', '11231334234', 'P', 'Pertanian'),
(16, 'Iqlima', '12312423423', 'P', 'Pertanian'),
(17, 'Rahman Muhammad', '121312438', 'L', 'Pertanian'),
(18, 'Muhammad Ikbal', '12387448844', 'L', 'Teknik'),
(19, 'Monika', '1223244344', 'P', 'Fisip'),
(20, 'Haris Aziz', '1123834748', 'L', 'Teknik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_latihan_map_lokasi`
--

CREATE TABLE `tbl_latihan_map_lokasi` (
  `id` int(11) NOT NULL,
  `lat_long` varchar(255) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_latihan_map_lokasi`
--

INSERT INTO `tbl_latihan_map_lokasi` (`id`, `lat_long`, `nama_tempat`, `kategori`, `keterangan`) VALUES
(1, 'LatLng(-7.252815, 108.370365)', 'SMPN 1 Buniseuri', 'Sekolah', ''),
(2, 'LatLng(-7.252708, 108.374634)', 'Padang', 'rumah makan', 'Rm padang'),
(3, 'LatLng(-6.850078, 107.624775)', 'pasar', 'pasarmall', 'asd'),
(5, 'LatLng(-7.28006, 108.302281)', 'dsadasd', 'Fasilitas Umum', ''),
(6, 'LatLng(-7.259116, 108.377916)', 'pertamini', 'pom bensin', ''),
(7, 'LatLng(-7.269503, 108.363026)', 'rs cipaku', 'rumah sakit', ''),
(8, 'LatLng(-7.2443, 108.393914)', 'pasar malam', 'pasarmall', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_latihan_grafik_mahasiswa`
--
ALTER TABLE `tbl_latihan_grafik_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_latihan_map_lokasi`
--
ALTER TABLE `tbl_latihan_map_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_latihan_grafik_mahasiswa`
--
ALTER TABLE `tbl_latihan_grafik_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_latihan_map_lokasi`
--
ALTER TABLE `tbl_latihan_map_lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
