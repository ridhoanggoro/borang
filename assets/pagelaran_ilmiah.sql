-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 10:02 AM
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
-- Table structure for table `pagelaran_ilmiah`
--

CREATE TABLE `pagelaran_ilmiah` (
  `seq_id` int(11) NOT NULL,
  `jenis_publikasi` enum('Jurnal penelitian tidak terakreditasi','Jurnal penelitian nasional terakreditasi','Jurnal penelitian internasional','Jurnal penelitian internasional bereputasi','Seminar wilayah-lokal-perguruan tinggi','Seminar nasional','Seminar internasional','Tulisan di media massa wilayah','Tulisan di media massa nasional','Tulisan di media massa internasional') NOT NULL,
  `jml_judul` varchar(25) NOT NULL,
  `th_akademik` varchar(10) NOT NULL,
  `prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pagelaran_ilmiah`
--

INSERT INTO `pagelaran_ilmiah` (`seq_id`, `jenis_publikasi`, `jml_judul`, `th_akademik`, `prodi`) VALUES
(1, 'Jurnal penelitian tidak terakreditasi', '12', '2906', 'arsitektur s1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pagelaran_ilmiah`
--
ALTER TABLE `pagelaran_ilmiah`
  ADD PRIMARY KEY (`seq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pagelaran_ilmiah`
--
ALTER TABLE `pagelaran_ilmiah`
  MODIFY `seq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
