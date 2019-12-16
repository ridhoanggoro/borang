-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 09:16 AM
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
-- Table structure for table `dosen_pa`
--

CREATE TABLE `dosen_pa` (
  `seq_id` int(10) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `th_akademik` int(6) NOT NULL,
  `nik/nidn_pembimbing` int(15) NOT NULL,
  `nama_pembimbing` varchar(100) NOT NULL,
  `mhs_pa` enum('PS sendiri','PS lain') NOT NULL,
  `prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen_pa`
--

INSERT INTO `dosen_pa` (`seq_id`, `nim`, `nama`, `th_akademik`, `nik/nidn_pembimbing`, `nama_pembimbing`, `mhs_pa`, `prodi`) VALUES
(1, '131313', 'bfdbfdb', 2018, 321241, 'fdbfdbfdb', 'PS sendiri', 'arsitektur s1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen_pa`
--
ALTER TABLE `dosen_pa`
  ADD PRIMARY KEY (`seq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen_pa`
--
ALTER TABLE `dosen_pa`
  MODIFY `seq_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
