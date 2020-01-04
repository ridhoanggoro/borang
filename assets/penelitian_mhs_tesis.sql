-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 05:02 AM
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
-- Table structure for table `penelitian_mhs_tesis`
--

CREATE TABLE `penelitian_mhs_tesis` (
  `seq_id` int(10) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `tema_penelitian` varchar(200) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `judul_kegiatan` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `prodi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penelitian_mhs_tesis`
--

INSERT INTO `penelitian_mhs_tesis` (`seq_id`, `nama_dosen`, `tema_penelitian`, `nama_mhs`, `judul_kegiatan`, `tahun`, `prodi`) VALUES
(1, 'Prof. Hadi', 'X', 'Joko', 'Y', 2018, 'ARSITEKTUR S1'),
(2, 'Ing, Joni', 'ZZZ', 'Mashsiswa', 'YYY', 2019, 'ARSITEKTUR S1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penelitian_mhs_tesis`
--
ALTER TABLE `penelitian_mhs_tesis`
  ADD PRIMARY KEY (`seq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penelitian_mhs_tesis`
--
ALTER TABLE `penelitian_mhs_tesis`
  MODIFY `seq_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
