-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 09:01 AM
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
-- Table structure for table `rekognisi_dpts`
--

CREATE TABLE `rekognisi_dpts` (
  `seq_id` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `bidang_keahlian` varchar(100) NOT NULL,
  `bukti_pendukung` varchar(100) NOT NULL,
  `tingkat` enum('Wilayah','Nasional','Internasional') NOT NULL,
  `tahun` year(4) NOT NULL,
  `prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekognisi_dpts`
--

INSERT INTO `rekognisi_dpts` (`seq_id`, `nama`, `bidang_keahlian`, `bukti_pendukung`, `tingkat`, `tahun`, `prodi`) VALUES
(1, 'wdwdwdwd', 'cscsc', 'scscs', 'Wilayah', 2019, 'arsitektur s1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rekognisi_dpts`
--
ALTER TABLE `rekognisi_dpts`
  ADD PRIMARY KEY (`seq_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
