-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 08:55 AM
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
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `seq_id` int(11) NOT NULL,
  `npd` varchar(10) DEFAULT NULL,
  `nidn` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `pendidikan_magister` varchar(255) NOT NULL,
  `pendidikan_doktor` varchar(255) NOT NULL,
  `bidang_keahlian` varchar(255) NOT NULL,
  `kesesuaian_kompetensi_inti_ps` enum('YA','TIDAK') NOT NULL,
  `jabatan_akademik` enum('TENAGA PENGAJAR','LEKTOR','ASISTEN AHLI','LEKTOR KEPALA','GURU BESAR') DEFAULT NULL,
  `sertifikasi_profesional` varchar(255) NOT NULL,
  `sertifikasi_kompetensi` varchar(255) NOT NULL,
  `matakuliah_diampu` varchar(255) NOT NULL,
  `pendidikan_tertinggi` enum('S1','S2','S3') NOT NULL,
  `matakuliah_diampu_ps_lain` varchar(255) NOT NULL,
  `kesesuaian_bidang_keahlian` enum('YA','TIDAK') NOT NULL,
  `status` enum('TETAP','TIDAK TETAP') DEFAULT NULL,
  `status_forlap` enum('YA','TIDAK') NOT NULL,
  `prodi` varchar(30) DEFAULT NULL,
  `sertifikasi` enum('YA','TIDAK') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`seq_id`, `npd`, `nidn`, `nama`, `pendidikan_magister`, `pendidikan_doktor`, `bidang_keahlian`, `kesesuaian_kompetensi_inti_ps`, `jabatan_akademik`, `sertifikasi_profesional`, `sertifikasi_kompetensi`, `matakuliah_diampu`, `pendidikan_tertinggi`, `matakuliah_diampu_ps_lain`, `kesesuaian_bidang_keahlian`, `status`, `status_forlap`, `prodi`, `sertifikasi`) VALUES
(1, NULL, '0412019001', 'Abid Fahreza Alphanoda', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin D3', 'YA'),
(198, '-', '-', 'ACHMAD HERMANTO DARDAK', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'TEKNIK SIPIL S1', 'YA'),
(2, '4695211006', '0322027002', 'Adhi Mahendra', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Elektro S1', 'YA'),
(3, '4505214004', '0321087806', 'Adi Wahyu Pribadi,', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Informatika S1', 'TIDAK'),
(4, '4105230030', '0326017104', 'Adryanto Ibnu Wibisono', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'TIDAK'),
(5, '4311211001', '0319028301', 'Agri Suwandi, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'YA'),
(6, '4696211007', '0330127202', 'Agung Saputra', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Elektro S1', 'YA'),
(7, '4417214001', '0318026702', 'Agung Terminanto,', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'TIDAK'),
(147, '4211230239', NULL, 'Agus Hardjanta, Ir.DS.CES', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(8, '4314211002', '0301106007', 'Agus Riyanto ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'TIDAK'),
(9, '4102211008', '0323086801', 'Agus Surya Sadana, ', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(10, '4604230016', '0329097603', 'Ainil Syafitri', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Elektro D3', 'YA'),
(11, '4292211005', '0307056003', 'Akhmad Dofir, ', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(12, '4508211006', '0316097701', 'Amir Murtako, ', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Informatika S1', 'TIDAK'),
(13, '4600211009', '0328087402', 'Ane Prasetyowati', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Elektro S1', 'YA'),
(14, '4198211006', '0301116801', 'Anedya Wardhani', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(15, '4416211004', '0310029002', 'Anggina Sandy Sundari', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'YA'),
(182, '4405130391', '0328046602', 'Aprianto Agung, Ir.,MM', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Industri S1', 'TIDAK'),
(16, '4287211002', '0328115805', 'AR. Indra Tjahjani, ', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(17, '4317211006', '0725097603', 'Arif Riyadi Tatak K, ', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'YA'),
(164, '4112230142', NULL, 'Ario Darmoko, Ir.,MT', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(18, NULL, '8856690019', 'As Natio Lasman, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', '', 'Teknik Mesin S2', 'TIDAK'),
(19, '4198211007', '0316087201', 'Ashri Prawesti D,', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(20, '4410211219', '0302107903', 'Asrul Harun Ismail', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'YA'),
(21, '4295212008', '0328066001', 'Atie Tri Juniati, ', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(22, '4197211005', '0315085901', 'Atiek Untarti,', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(23, '4314211004', '0320096908', 'Atma Windrija', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'TIDAK'),
(24, '4114211002', '0304067802', 'Atri Prautama Dewi', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(25, '4216211002', '0330068902', 'Ayu Herzanita Yufrizal', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'TIDAK'),
(26, '4216211005', '0312088801', 'Azaria Andreas', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'TIDAK'),
(27, '4413211001', '0324068107', 'Bambang Cahyadi', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'YA'),
(28, '4517211003', '0426047102', 'Bambang Hariyanto, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Teknik Informatika S1', 'YA'),
(29, '4517211001', '0317048203', 'Bambang Riono Arsad,', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Informatika S1', 'TIDAK'),
(30, '4390230011', '0315016101', 'Bambang Sulaksono,', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin D3', 'YA'),
(183, '4416230291', '0303106102', 'Bayu Retno W, Dra.,MM.Psi', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Industri S1', 'TIDAK'),
(165, '4008130465', NULL, 'Betty Zelda Siahaan, Dr.Dra.,MM', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(148, '4210230220', NULL, 'Bihar A.S. Tobing Dipl.SE.Delft', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(149, '4212230231', NULL, 'Binsar Hariandja, Prof.,Dr.,Ir.,M.Eng', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(136, '4398210223', NULL, 'Bintoro Maisdwiananto, Ir.,MM', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Mesin S1', 'TIDAK'),
(31, '4379210058', '8825530017', 'Budhi M. Suyitno', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', '', 'Teknik Mesin S2', 'TIDAK'),
(129, '4694130160', '0301064401', 'Busono Soerowirdjo,Prof.DR.MSc.Ir', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Teknik Elektro S1', 'TIDAK'),
(32, '4395110173', '0304055701', 'Chandrasa Sukardi,', '', '', '', 'YA', 'GURU BESAR', '', '', '', 'S3', '', 'YA', 'TETAP', '', 'Teknik Mesin S2', 'TIDAK'),
(33, '4113211002', '0327098405', 'Cynthia Puspitasari', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(34, '4316210296', '0015065201', 'Dahmir Dahlan, ', '', '', '', 'YA', 'GURU BESAR', '', '', '', 'S3', '', 'YA', 'TETAP', '', 'Teknik Mesin S2', 'YA'),
(35, '4300211011', '0312017603', 'Dede Lia Zariatin,', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'YA'),
(36, '4605130408', '0308047201', 'Dede Sutarya', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', '', 'Teknik Elektro D3', 'TIDAK'),
(37, '4416211003', '0319128701', 'Desinta Rahayu Ningtyas', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'TIDAK'),
(38, '4514211002', '0330118901', 'Desti Fitriati, ', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Informatika S1', 'YA'),
(39, '4614211001', '0316056601', 'Dewanto Indra Krisnadi, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Teknik Elektro S1', 'YA'),
(150, '4216211001', '0308028604', 'Dian Perwitasari, ST.,MT', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(40, '4109211012', '0303067002', 'Dini Rosmalia, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(41, '4409211005', '0306017007', 'Dino Rimantho', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'YA'),
(42, '4113211001', '0320028601', 'Diptya Anggita', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(43, '4396213007', '8894150017', 'Djoko  W Karmiadji, ', '', '', '', 'YA', 'GURU BESAR', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'TIDAK'),
(44, '4388210079', '0324075901', 'Djoni Rustino, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', '', 'Teknik Mesin D3', 'TIDAK'),
(151, '4286210063', NULL, 'Djumpono, Ir.MSc', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(137, '4315211219', '0311077903', 'Dodi Mulyadi, ST.,MT', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'TIDAK'),
(166, '4195210189', NULL, 'Dr. Yophie Septiady, ST. M.Si', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(45, '4688211001', '0316096202', 'Duta Widhya Sasmojo, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Elektro S1', 'YA'),
(46, '4215211001', '0328038602', 'Dwi Ariyani', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(47, '4312211232', '0301096901', 'Dwi Rahmalina, ', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S3', '', 'YA', 'TETAP', '', 'Teknik Mesin S2', 'YA'),
(48, '4517211002', '0309039001', 'Dyah Sulistyowati R, ', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Informatika S1', 'YA'),
(49, '4387211004', '8877301019', 'Eddy Djatmiko,', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'YA'),
(50, '4211230320', NULL, 'Eddy Harsono, ', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(167, '4006130422', NULL, 'Edhy Soedarsono, Drs.,SE.,MM', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(138, NULL, NULL, 'Edy Sutanto, Drs.,M.Hum', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Mesin S1', 'TIDAK'),
(188, '4513230259', NULL, 'Edza Rinaldi, ST.,MM', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Informatika S1', 'TIDAK'),
(51, '4300211012', '0319096502', 'Eka Maulana, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'YA'),
(52, '4898111002', '0317107301', 'Eko Prasetyo', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin D3', 'YA'),
(168, '4100110266', '0322106001', 'Ellys Sundiana, Ir., M.Ars', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(53, '4317211004', '0329019201', 'Erlanda Augupta Pane, ', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'YA'),
(54, '4292211006', '0325036201', 'Erna Savitri,', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(139, '4001130298', '0312045401', 'Erni Dianawati, SH.M.Hum', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Mesin S1', 'TIDAK'),
(152, NULL, NULL, 'Eryati Djamal, Dra.,M.Pd', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(55, '4314211001', '0314055901', 'Estu Prayogi', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin D3', 'YA'),
(169, '4110230212', '0325107503', 'Euis Puspita Dewi, Dr.,Ir.,M.Si', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(56, NULL, NULL, 'Ezri', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Teknik Mesin S2', 'TIDAK'),
(153, '4222211013', '8844540017', 'F J Putuhena, Prof.Dr', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(57, '4216211007', '0318118801', 'Fadli Kurnia', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(58, '4690211003', '0305045901', 'Fauzie Busalim', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Elektro D3', 'YA'),
(59, '4514211001', '0306028704', 'Febri Maspiyanti, ', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Informatika S1', 'YA'),
(60, '4416211002', '0314098003', 'Gama Harta Nugraha N R,', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'TIDAK'),
(61, '4510211001', '0507058502', 'Gregorius Hendita Artha Kusuma, ', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Informatika S1', 'YA'),
(62, '4600211000', '0320087301', 'Gunady Haryanto', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Elektro S1', 'YA'),
(63, '4416211007', '0309049101', 'Haris Adi Swantoro, ', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'TIDAK'),
(154, '4213230251', NULL, 'Harmadi, Dr.Ir.,Drs.,Sp-1', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(64, '4118211002', '0308057102', 'Harry Mufrizon, ', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'TIDAK'),
(65, '4318211226', '8858470018', 'Hary Soebagyo', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'TIDAK'),
(66, '4890111001', '0318125905', 'Hasan Hariri,', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin D3', 'YA'),
(67, '4800111003', '0313067103', 'Hendri Sukma', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin D3', 'YA'),
(68, '4295211009', '0316037201', 'Herawati Zetha Rahman, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(140, '4395210176', '0325065101', 'Herlan Martono, Ir.M.Sc', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Mesin S1', 'TIDAK'),
(141, NULL, NULL, 'Heru Pratikno, SS.,MA', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Mesin S1', 'TIDAK'),
(69, '4300211013', '0327087501', 'I Gede Eka Lesmana', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'YA'),
(189, '4506130429', NULL, 'IGN Mantra, S.Kom.,M.Kom', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Informatika S1', 'TIDAK'),
(70, '4292211007', '0319076002', 'Imam Hagni Puspito H, ', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(71, '4507211005', '0316116602', 'Iman P, dipl.Geotherm.tech,', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Informatika S1', 'TIDAK'),
(72, '4314230267', '0008097706', 'Indra Chandra Setiawan', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', '', 'Teknik Mesin S2', 'YA'),
(73, '4502211001', '0315036901', 'Ionia Veritawati, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Informatika S1', 'YA'),
(74, '4317211002', '0306088001', 'Iqbal Rahmadhian Pamungkas,', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'TIDAK'),
(75, '4214211001', '0304037608', 'Irfan Ihsani, ', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(130, '4682130047', '0304095301', 'Irwan Wijaya, Ir, M.Sc.', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Elektro S1', 'TIDAK'),
(76, '4311211240', '0312058001', 'Ismail, ', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S3', '', 'YA', 'TETAP', '', 'Teknik Mesin S2', 'YA'),
(131, '4600130372', '0330057601', 'Iwan Sonjaya, ST.,MT', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Elektro S1', 'TIDAK'),
(155, '4215211216', '0331018306', 'Jade Sjafrecia Petroceany, ST.,M.Inf.Mgt', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(77, '4203211001', '0301106303', 'Jonbi, ', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(190, '4002130311', '0311105401', 'Kartini Istiqomah, SE.,MM', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Informatika S1', 'TIDAK'),
(170, NULL, NULL, 'Khairil Ikhsan Siregar, Lc.,MA', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(78, '4188211002', '0328115901', 'Kiki Kunthi Lestari', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(79, '4416211006', '0302068701', 'Kirana Rukmayuninda Ririh', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'YA'),
(156, '4213230250', NULL, 'Kusno Adi Sambodo, ST.,M.Sc.,Ph.D', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(80, '4105211010', '0330047201', 'L.Edhi Prasetya', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(81, '4313230240', '0324066701', 'La Ode Mohammad Firman,', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', '', 'Teknik Mesin S2', 'YA'),
(82, '4411211235', '0329067801', 'Laela Chairani', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'TIDAK'),
(171, NULL, NULL, 'Listya Nindita, ST.,MT', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(172, NULL, NULL, 'M. Andri Febru, ST.,M.Ars', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(173, NULL, NULL, 'M. Arthum Artha, ST.,MSi', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(83, '4418211001', '0310109001', 'M. Ilhamsyah Akbar', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'TIDAK'),
(84, '4413211003', '0303115701', 'M. Solihin M. Yudi, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'YA'),
(191, '4511230316', '0314048002', 'Maharani Ardi Putri, P.Si.,M.Si', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Informatika S1', 'TIDAK'),
(85, '4305130405', '8813023419', 'Mahfudz Al Huda,', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S3', '', 'YA', 'TETAP', '', 'Teknik Mesin S2', 'TIDAK'),
(174, '4112230154', NULL, 'Margaret Arni Bayu Murti, ST.,M.Si', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(192, '4508130461', NULL, 'Martini, SH.,MH', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Informatika S1', 'TIDAK'),
(86, '4313211002', '0020108602', 'Megara Munandar', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'YA'),
(157, '4206130424', NULL, 'Mohd Ali Fulazzaky, Dr.,CES.,DEA', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(87, '4479211001', '8810890019', 'Muchtar Darmawan A', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'YA'),
(193, NULL, NULL, 'Muhammad Tassim Billah, Ir.,M.Sc', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Informatika S1', 'TIDAK'),
(88, '4616211001', '0318048105', 'Muhammad Yaser', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Elektro D3', 'YA'),
(184, '4416230297', NULL, 'Mulyanto, Phd.,Ir.,SE.,MSc  ', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Teknik Industri S1', 'TIDAK'),
(89, '4313211001', '0327025802', 'Nafsan Upara,', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'YA'),
(90, NULL, '0325102601', 'Nakoela Soenarta, ', '', '', '', 'YA', 'GURU BESAR', '', '', '', 'S2', '', 'YA', 'TETAP', '', 'Teknik Mesin S2', 'TIDAK'),
(91, '4502211002', '0302076101', 'Naniek  Andiani, ', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Informatika S1', 'YA'),
(92, '4317211001', '0302118004', 'Nely Toding Bunga', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'TIDAK'),
(93, '4198230018', '0316127001', 'Nia Rachmawati,', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(94, '4220211011', '0312047702', 'Niken Warastuti', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(194, '4505130410', '0327116201', 'Nofriyadi Nurdam, Dipl.Inform.,M.Kom', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Informatika S1', 'TIDAK'),
(95, '4698211008', '0318027102', 'Noor Suryaningsih', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Elektro S1', 'YA'),
(132, '4605130392', NULL, 'Nur Hanifah Yuninda, ST.,MT', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Elektro S1', 'TIDAK'),
(96, '4400211003', '0325077501', 'Nur Yulianti Hidayah', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'YA'),
(158, '4196210201', NULL, 'Nurahma Tresani, Dr.Ir.MPM', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(133, '4092130145', '0320056401', 'Nurhanan, Drs., MM', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Elektro S1', 'TIDAK'),
(195, '4517230002', '0324027901', 'Nurita Andayani, Dr.,S.Si.,M.Si', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Teknik Informatika S1', 'TIDAK'),
(185, '4411211233', '0315037003', 'Nurul Retno Palupi, S.Si.,MT', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TETAP', '', 'Teknik Industri S1', 'TIDAK'),
(97, '4216211004', '0310108905', 'Nuryani Tinumbia', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(98, '4108211011', '0320057103', 'Nyoman Teguh Prasidha', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(142, '4016230293', NULL, 'Obay Jambari, S.Pd.,M.Pd', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Mesin S1', 'TIDAK'),
(99, '4215211215', '0316038801', 'Perdana Mi\'raj Sejatiguna', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(159, '4217230299', '0014077101', 'Pio Ranap Tua Naibaho, Dr.,ST.,MT', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(175, '4179210036', NULL, 'Pradiono S.Suriadi, Dr.,M.Arch.MBA.MM', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(100, '4220211012', '0316127601', 'Prima Jiwa Osly, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(160, '4212230229', NULL, 'Putra Agung Maha Agung, Dr.ST.MT', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(101, '4118211001', '0312048907', 'Ramadhani Isna Putri', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'TIDAK'),
(102, '4398211008', '0316117101', 'Ramon Trisno, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'YA'),
(103, '4414211001', '0329087503', 'Renny Reswati, ', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'TIDAK'),
(104, '4216211006', '0310058901', 'Resti Nur Arini', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(105, '4617211001', '8869470018', 'Ridwan Gunawan,', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Teknik Elektro S1', 'TIDAK'),
(106, NULL, NULL, 'Rildarini Syahfarin, ST.,MT', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(107, '4400211004', '0330016801', 'Rini Prasetyani', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'YA'),
(176, '4192210146', NULL, 'Riyanti Karlini, Ir. M.Si.', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(108, '4317211003', '0309018901', 'Rovida Camalia Hartantrie', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'TIDAK'),
(109, '4399214010', '0312077302', 'Rudi Hermawan, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'YA'),
(110, '4414211002', '0301026604', 'Sambas Sundana, ', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'YA'),
(186, '4416230292', '0303077704', 'Seta A. Wicaksana, S.Psi.,M.Psi', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Industri S1', 'TIDAK'),
(111, '4117211001', '0326036402', 'Setia Damajanti, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(143, '4370210013', '0313034401', 'Setijono, Ir. MSc', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Mesin S1', 'TIDAK'),
(112, '4188211003', '0302045501', 'Siti Rachima Mumpuni', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(187, '4404230008', '0010016701', 'Siti Rohana Nasution, Ir, MT', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TETAP', '', 'Teknik Industri S1', 'TIDAK'),
(113, '4416211005', '0324057403', 'Sodikun, ', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'YA'),
(144, '4394130167', NULL, 'Soeharsono, Ir., MSc.,Dr', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Mesin S1', 'TIDAK'),
(114, '4502211003', '0322016602', 'Sri Rezeki Candra N, ', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Informatika S1', 'YA'),
(196, '4505130413', '0301055703', 'Sudirman, Drs., M.Kom', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Informatika S1', 'TIDAK'),
(115, NULL, '8899930017', 'Susanto Sudiro, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', '', 'Teknik Mesin S2', 'TIDAK'),
(161, '4287210073', NULL, 'Suwandi Saputra, Ir, MSc', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(116, '4102211009', '0330107601', 'Swambodo Adi, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(117, '4313230235', '0308065902', 'Syahbuddin, ', '', '', '', 'YA', 'GURU BESAR', '', '', '', 'S3', '', 'YA', 'TETAP', '', 'Teknik Mesin S2', 'YA'),
(177, '4006130428', '0308115301', 'Tjahjaningtyas Ngesti B, S.Pak.M.Th', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(118, '4412211001', '0312128101', 'Toni Marulitua Munthe, ', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'YA'),
(119, '4688211002', '0325025801', 'Untung Priyanto,', '', '', '', 'YA', 'LEKTOR KEPALA', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Elektro S1', 'YA'),
(120, '4604211011', '0312108001', 'Vector Anggit Pratomo', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Elektro D3', 'YA'),
(121, '4114211004', '0301016406', 'Wahyu Dewanto, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(162, '4213230254', NULL, 'Wahyu Hendrastomo, ST.,MM', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Sipil S1', 'TIDAK'),
(197, '4502130324', '0322107101', 'Warsim, S.Kom.,M.Kom', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Informatika S1', 'TIDAK'),
(145, '4397130214', '0316114301', 'Wegie Ruslan, Prof, Dr, Ir, MBA', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Teknik Mesin S1', 'TIDAK'),
(178, NULL, NULL, 'Widhya Adhikarya K, Ir.,M.Arch.Eng', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(122, '4315211001', '0313095705', 'Widia Nursiyanto,', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'TIDAK'),
(123, '4398230024', '0304107603', 'Wina Libyawati  ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'YA'),
(124, '4605211012', '0309088002', 'Wisnu Broto ', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Elektro D3', 'YA'),
(125, '4216211003', '0310108904', 'Wita Meutia', '', '', '', 'YA', 'ASISTEN AHLI', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Sipil S1', 'YA'),
(179, '4003130358', '0302127408', 'Yamin, SS.,SH, M.Hum', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(126, '4313211003', '0017028901', 'Yani Kurniawan, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Mesin S1', 'YA'),
(134, '4695130188', '0318026701', 'Yohanes Dewanto, DR.,MT.,Ir', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Teknik Elektro S1', 'TIDAK'),
(146, '4390130129', '0301055302', 'Yuhani Djaya, Ir., M.Si', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Teknik Mesin S1', 'TIDAK'),
(127, '4114211001', '0319066301', 'Yuke Ardhiati,', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S3', '', 'YA', 'TETAP', 'YA', 'Arsitektur S1', 'YA'),
(180, '4106130432', NULL, 'Yulianto Sumalyo, Prof.DR.Ir', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(128, '4409211006', '0322076902', 'Yulita Veranda Usman, ', '', '', '', 'YA', 'LEKTOR', '', '', '', 'S2', '', 'YA', 'TETAP', 'YA', 'Teknik Industri S1', 'YA'),
(181, NULL, NULL, 'Yuni Prihayati, SP.,MSi', '', '', '', 'YA', '', '', '', '', 'S2', '', 'YA', 'TIDAK TETAP', '', 'Arsitektur S1', 'TIDAK'),
(135, '4295130190', '0022055704', 'Zuherman R, DR.,Drs.DEA', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Teknik Elektro S1', 'TIDAK'),
(163, '4295130190', NULL, 'Zuherman Rustam, DR.,Drs.DEA', '', '', '', 'YA', '', '', '', '', 'S3', '', 'YA', 'TIDAK TETAP', '', 'Teknik Sipil S1', 'TIDAK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`seq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `seq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
