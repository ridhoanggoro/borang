-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 08:59 AM
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
-- Table structure for table `ekuivalen_dosen_mengajar`
--

CREATE TABLE `ekuivalen_dosen_mengajar` (
  `seq_id` int(10) NOT NULL,
  `nik/nidn` int(25) NOT NULL,
  `nama_dosen` varchar(200) NOT NULL,
  `dtps` enum('V','') NOT NULL,
  `pembelajaran_pembimbingan` enum('ps yang diakreditasi','ps lain di dalam pt','ps lain di luar pt') NOT NULL,
  `penelitian` int(4) NOT NULL,
  `pkm` int(4) NOT NULL,
  `tugas_tambahan` varchar(100) NOT NULL,
  `prodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekuivalen_dosen_mengajar`
--

INSERT INTO `ekuivalen_dosen_mengajar` (`seq_id`, `nik/nidn`, `nama_dosen`, `dtps`, `pembelajaran_pembimbingan`, `penelitian`, `pkm`, `tugas_tambahan`, `prodi`) VALUES
(1, 3242324, 'dfgbfgbgfb', 'V', 'ps yang diakreditasi', 3, 4, 'gbngbngf', 'arsitektur s1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ekuivalen_dosen_mengajar`
--
ALTER TABLE `ekuivalen_dosen_mengajar`
  ADD PRIMARY KEY (`seq_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
