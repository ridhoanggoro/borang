-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 04:41 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `seq_id` int(10) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `kode_matkul` int(12) NOT NULL,
  `matkul_kopetensi` enum('V','') NOT NULL,
  `kuliah` int(10) NOT NULL,
  `seminar` int(10) NOT NULL,
  `praktikum` int(10) NOT NULL,
  `konversi_jam` int(10) NOT NULL,
  `sikap` enum('V','') NOT NULL,
  `pengetahuan` enum('V','') NOT NULL,
  `keterampilan_umum` enum('V','') NOT NULL,
  `keterampilan_khusus` enum('V','') NOT NULL,
  `dokumen_pembelajaran` varchar(50) NOT NULL,
  `unit_penyelenggara` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`seq_id`, `semester`, `kode_matkul`, `matkul_kopetensi`, `kuliah`, `seminar`, `praktikum`, `konversi_jam`, `sikap`, `pengetahuan`, `keterampilan_umum`, `keterampilan_khusus`, `dokumen_pembelajaran`, `unit_penyelenggara`, `prodi`) VALUES
(1, 'Genap 2019', 3546464, 'V', 3, 4, 2, 45, 'V', 'V', 'V', 'V', 'ada', 'prodi', 'Ti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`seq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `seq_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
