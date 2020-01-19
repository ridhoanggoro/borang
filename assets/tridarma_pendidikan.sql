-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2020 at 04:14 PM
-- Server version: 10.1.38-MariaDB
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
-- Table structure for table `tridarma_pendidikan`
--

CREATE TABLE `tridarma_pendidikan` (
  `seq_id` int(10) NOT NULL,
  `prodi` varchar(30) DEFAULT NULL,
  `lembaga_mitra` varchar(200) NOT NULL,
  `tingkat` enum('Internasional','Nasional','Lokal') NOT NULL,
  `judul_kegiatan` text NOT NULL,
  `manfaat_bagi_ps` varchar(255) DEFAULT NULL,
  `durasi` varchar(50) NOT NULL,
  `bukti_kerjasama` varchar(255) DEFAULT NULL,
  `tahun_berakhir` year(4) NOT NULL,
  `doc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tridarma_pendidikan`
--
ALTER TABLE `tridarma_pendidikan`
  ADD PRIMARY KEY (`seq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tridarma_pendidikan`
--
ALTER TABLE `tridarma_pendidikan`
  MODIFY `seq_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
