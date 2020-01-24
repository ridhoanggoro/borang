-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2020 at 02:50 AM
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
-- Table structure for table `jenis_publikasi`
--

CREATE TABLE `jenis_publikasi` (
  `seq_id` int(11) NOT NULL,
  `id` varchar(100) NOT NULL,
  `nama` text NOT NULL,
  `modul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_publikasi`
--

INSERT INTO `jenis_publikasi` (`seq_id`, `id`, `nama`, `modul`) VALUES
(1, 'Jurnal penelitian tidak terakreditasi', 'Jurnal penelitian tidak terakreditasi', 'publikasi_ilmiah'),
(2, 'Jurnal penelitian nasional terakreditasi', 'Jurnal penelitian nasional terakreditasi', 'publikasi_ilmiah'),
(3, 'Jurnal penelitian internasional', 'Jurnal penelitian internasional', 'publikasi_ilmiah'),
(4, 'Jurnal penelitian internasional bereputasi', 'Jurnal penelitian internasional bereputasi', 'publikasi_ilmiah'),
(5, 'Seminar wilayah-lokal-perguruan tinggi', 'Seminar wilayah/lokal/perguruan tinggi', 'publikasi_ilmiah'),
(6, 'Seminar nasional', 'Seminar nasional', 'publikasi_ilmiah'),
(7, 'Seminar internasional', 'Seminar internasional', 'publikasi_ilmiah'),
(8, 'Tulisan di media massa wilayah', 'Tulisan di media massa wilayah', 'publikasi_ilmiah'),
(9, 'Tulisan di media massa nasional', 'Tulisan di media massa nasional', 'publikasi_ilmiah'),
(10, 'Tulisan di media massa internasional', 'Tulisan di media massa internasional', 'publikasi_ilmiah'),
(11, 'Jurnal penelitian tidak terakreditasi', 'Jurnal penelitian tidak terakreditasi', 'pagelaran_ilmiah'),
(12, 'Jurnal penelitian nasional terakreditasi', 'Jurnal penelitian nasional terakreditasi', 'pagelaran_ilmiah'),
(13, 'Jurnal penelitian internasional', 'Jurnal penelitian internasional', 'pagelaran_ilmiah'),
(14, 'Jurnal penelitian internasional bereputasi', 'Jurnal penelitian internasional bereputasi', 'pagelaran_ilmiah'),
(15, 'Seminar wilayah-lokal-perguruan tinggi', 'Seminar wilayah/lokal/perguruan tinggi', 'pagelaran_ilmiah'),
(16, 'Seminar nasional', 'Seminar nasional', 'pagelaran_ilmiah'),
(17, 'Seminar internasional', 'Seminar internasional', 'pagelaran_ilmiah'),
(18, 'Pagelaran-pameran-presentasi dalam forum di tingkat wilayah', 'Pagelaran/pameran/presentasi dalam forum di tingkat wilayah\r\n', 'pagelaran_ilmiah'),
(19, 'Pagelaran-pameran-presentasi dalam forum di tingkat nasional', 'Pagelaran/pameran/presentasi dalam forum di tingkat nasional\r\n', 'pagelaran_ilmiah'),
(20, 'Pagelaran-pameran-presentasi dalam forum di tingkat internasional', 'Pagelaran/pameran/presentasi dalam forum di tingkat internasional\r\n', 'pagelaran_ilmiah'),
(21, 'biaya_dosen', 'a. Biaya Dosen (Gaji, Honor)', 'dana'),
(22, 'biaya_tenaga_kependidikan', 'b. Biaya Tenaga Kependidikan (Gaji, Honor)', 'dana'),
(23, 'biaya_operasional_pembelajaran', 'c. Biaya Operasional Pembelajaran (Bahan dan Peralatan Habis Pakai)\r\n', 'dana'),
(24, 'biaya_operasional_tidak_langsung', 'd. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport Lokal, Pajak, Asuransi, dll.)\r\n', 'dana'),
(25, 'biaya_operasional_kemahasiswaan', 'Biaya operasional kemahasiswaan (penalaran, minat, bakat, dan kesejahteraan).\r\n', 'dana'),
(26, 'biaya_penelitian', 'Biaya Penelitian\r\n', 'dana'),
(27, 'biaya_pkm', 'Biaya PkM\r\n', 'dana'),
(28, 'biaya_investasi_sdm', 'Biaya Investasi SDM\r\n', 'dana'),
(29, 'biaya_investasi_sarana', 'Biaya Investasi Sarana\r\n', 'dana'),
(30, 'biaya_investasi_prasarana', 'Biaya Investasi Prasarana\r\n', 'dana'),
(31, 'keandalan', 'Keandalan (reliability): kemampuan dosen, tenaga kependidikan, dan pengelola dalam memberikan pelayanan.', 'kepuasan_mahasiswa'),
(32, 'daya_tangkap', 'Daya tanggap (responsiveness): kemauan dari dosen, tenaga kependidikan, dan pengelola dalam membantu mahasiswa dan memberikan jasa dengan cepat.', 'kepuasan_mahasiswa'),
(33, 'kepastian', 'Kepastian (assurance): kemampuan dosen, tenaga kependidikan, dan pengelola untuk memberi keyakinan kepada mahasiswa bahwa pelayanan yang diberikan telah sesuai dengan ketentuan.', 'kepuasan_mahasiswa'),
(34, 'empati', 'Empati (empathy): kesediaan/kepedulian dosen, tenaga kependidikan, dan pengelola untuk memberi perhatian kepada mahasiswa.', 'kepuasan_mahasiswa'),
(35, 'tangible', 'Tangible: penilaian mahasiswa terhadap kecukupan, aksesibitas, kualitas sarana dan prasarana.', 'kepuasan_mahasiswa'),
(36, 'etika', 'Etika', 'kepuasan_pengguna_lulusan'),
(37, 'keahlian pada bidang ilmu', 'Keahlian pada bidang ilmu (kompetensi utama)', 'kepuasan_pengguna_lulusan'),
(38, 'kemampuan berbahasa asing', 'Kemampuan berbahasa asing', 'kepuasan_pengguna_lulusan'),
(39, 'penggunaan teknologi informasi', 'Penggunaan teknologi informasi', 'kepuasan_pengguna_lulusan'),
(40, 'kemampuan berkomunikasi', 'Kemampuan berkomunikasi', 'kepuasan_pengguna_lulusan'),
(41, 'kerjasama', 'Kerjasama', 'kepuasan_pengguna_lulusan'),
(42, 'pengembangan diri', 'Pengembangan diri', 'kepuasan_pengguna_lulusan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_publikasi`
--
ALTER TABLE `jenis_publikasi`
  ADD PRIMARY KEY (`seq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_publikasi`
--
ALTER TABLE `jenis_publikasi`
  MODIFY `seq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
