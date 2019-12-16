-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 09:00 AM
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
-- Table structure for table `dosen_praktisi`
--

CREATE TABLE `dosen_praktisi` (
  `seq_id` int(10) NOT NULL,
  `nik/nidn` int(25) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `pendidikan_tertinggi` varchar(50) NOT NULL,
  `bidang_keahlian` varchar(100) NOT NULL,
  `sertifikat_profesi` varchar(100) NOT NULL,
  `matakuliah_diampu` varchar(100) NOT NULL,
  `sks` int(4) NOT NULL,
  `prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen_praktisi`
--

INSERT INTO `dosen_praktisi` (`seq_id`, `nik/nidn`, `nama_dosen`, `perusahaan`, `pendidikan_tertinggi`, `bidang_keahlian`, `sertifikat_profesi`, `matakuliah_diampu`, `sks`, `prodi`) VALUES
(1, 21414, 'gsdgsdg', 'dsgsdgsd', 'dsgdsgdsg', 'dsgsdg', 'sdgsdgs', 'dsgsdg', 3, 'arsitektur s1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen_praktisi`
--
ALTER TABLE `dosen_praktisi`
  ADD PRIMARY KEY (`seq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen_praktisi`
--
ALTER TABLE `dosen_praktisi`
  MODIFY `seq_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
