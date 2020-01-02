-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 04:51 AM
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
-- Table structure for table `kepuasan_pelanggan`
--

CREATE TABLE `kepuasan_pelanggan` (
  `seq_id` int(10) NOT NULL,
  `aspek_ukuran` enum('Keandalan (reliability): kemampuan dosen, tenaga kependidikan, dan pengelola dalam memberikan pelayanan','Daya tanggap (responsiveness): kemauan dari dosen, tenaga kependidikan, dan pengelola dalam membantu mahasiswa dan memberikan jasa dengan cepat','Kepastian (assurance): kemampuan dosen, tenaga kependidikan, dan pengelola untuk memberi keyakinan kepada mahasiswa bahwa pelayanan yang diberikan telah sesuai dengan ketentuan','Empati (empathy): kesediaan/kepedulian dosen, tenaga kependidikan, dan pengelola untuk memberi perhatian kepada mahasiswa','Tangible: penilaian mahasiswa terhadap kecukupan, aksesibitas, kualitas sarana dan prasarana') NOT NULL,
  `sangat_baik` int(10) NOT NULL,
  `baik` int(10) NOT NULL,
  `cukup` int(10) NOT NULL,
  `kurang` int(10) NOT NULL,
  `rencana_tindaklanjut` varchar(200) NOT NULL,
  `prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepuasan_pelanggan`
--

INSERT INTO `kepuasan_pelanggan` (`seq_id`, `aspek_ukuran`, `sangat_baik`, `baik`, `cukup`, `kurang`, `rencana_tindaklanjut`, `prodi`) VALUES
(1, 'Keandalan (reliability): kemampuan dosen, tenaga kependidikan, dan pengelola dalam memberikan pelayanan', 60, 50, 24, 10, 'efef', 'Ti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kepuasan_pelanggan`
--
ALTER TABLE `kepuasan_pelanggan`
  ADD PRIMARY KEY (`seq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kepuasan_pelanggan`
--
ALTER TABLE `kepuasan_pelanggan`
  MODIFY `seq_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
