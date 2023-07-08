-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 04:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adamproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_apikey`
--

CREATE TABLE `a_apikey` (
  `nation_code` int(3) NOT NULL DEFAULT 62,
  `id` int(4) NOT NULL,
  `code` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'alias apikey',
  `name` varchar(24) NOT NULL COMMENT 'apikey for',
  `cdate` datetime DEFAULT NULL COMMENT 'create date',
  `ldate` timestamp NULL DEFAULT NULL COMMENT 'lastupdate',
  `is_active` int(1) NOT NULL DEFAULT 1 COMMENT '1 active, 0 inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='API Key storage';

-- --------------------------------------------------------

--
-- Table structure for table `b_karyawan`
--

CREATE TABLE `b_karyawan` (
  `id` int(6) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `no_hp` int(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `ditugaskan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b_member`
--

CREATE TABLE `b_member` (
  `id` int(6) NOT NULL,
  `kode_member` varchar(6) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b_member`
--

INSERT INTO `b_member` (`id`, `kode_member`, `nama`, `email`, `alamat`) VALUES
(1, 'AAA001', 'Adam', 'shizualpha@gmail.com', 'Kp.Legok Nangka'),
(2, 'AAA002', 'Syahdan', 'syahdan@gmail.com', 'Kp.Pasir Pendeuy'),
(3, 'AAA003', 'Hadi', 'Hadi@gmail.com', 'Panyirapan'),
(4, 'AAA004', 'Sonny', 'Sonny@gmail.com', 'Panyirapan'),
(5, 'AAA005', 'Andika', 'andika@gmail.com', 'Kp.Legok Nangka');

-- --------------------------------------------------------

--
-- Table structure for table `b_user`
--

CREATE TABLE `b_user` (
  `id` int(6) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `is_active` enum('1','2','','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b_user`
--

INSERT INTO `b_user` (`id`, `nama`, `email`, `password`, `is_active`) VALUES
(1, 'adam', 'shizu@gmail.com', '$2y$10$NkiI9Bzfhu.qZn5pCaybwOeqZ5/wK5TCSvrz99.N3mp1Cs4Uz9nHW', '1'),
(2, 'adam', 'kiryu@gmail.com', '$2y$10$LJlrHHhYpSoCRNJtw2IixuV2a36jdvvaHkJVOMNQ9sWaR99XpvbFK', '1');

-- --------------------------------------------------------

--
-- Table structure for table `c_jenis_alat`
--

CREATE TABLE `c_jenis_alat` (
  `id` int(6) NOT NULL,
  `jenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `c_jenis_alat`
--

INSERT INTO `c_jenis_alat` (`id`, `jenis`) VALUES
(1, 'adhensive & tape'),
(2, 'alat tulis'),
(3, 'pemotong kertas'),
(4, 'penjilidan & penyimpanan'),
(5, 'produk kertas');

-- --------------------------------------------------------

--
-- Table structure for table `c_jenis_buku`
--

CREATE TABLE `c_jenis_buku` (
  `id` int(6) NOT NULL,
  `jenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `c_jenis_buku`
--

INSERT INTO `c_jenis_buku` (`id`, `jenis`) VALUES
(6, 'biografi'),
(1, 'ensiklopedia'),
(3, 'Kamus'),
(4, 'Komik atau manga'),
(8, 'Ligth novel (novel ringan)'),
(2, 'Majalah'),
(7, 'Naskah'),
(5, 'novel');

-- --------------------------------------------------------

--
-- Table structure for table `d_alat`
--

CREATE TABLE `d_alat` (
  `id` int(6) NOT NULL,
  `kode_alat` varchar(255) DEFAULT NULL,
  `nm_brg` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) NOT NULL,
  `jumlah` int(255) DEFAULT NULL,
  `harga` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `d_buku`
--

CREATE TABLE `d_buku` (
  `id` int(6) NOT NULL,
  `kode_buku` varchar(255) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_member`
--
ALTER TABLE `b_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_user`
--
ALTER TABLE `b_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_jenis_alat`
--
ALTER TABLE `c_jenis_alat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis` (`jenis`);

--
-- Indexes for table `c_jenis_buku`
--
ALTER TABLE `c_jenis_buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis` (`jenis`);

--
-- Indexes for table `d_alat`
--
ALTER TABLE `d_alat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis` (`jenis`);

--
-- Indexes for table `d_buku`
--
ALTER TABLE `d_buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis` (`jenis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_member`
--
ALTER TABLE `b_member`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `b_user`
--
ALTER TABLE `b_user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `c_jenis_alat`
--
ALTER TABLE `c_jenis_alat`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `c_jenis_buku`
--
ALTER TABLE `c_jenis_buku`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `d_alat`
--
ALTER TABLE `d_alat`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `d_buku`
--
ALTER TABLE `d_buku`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `d_alat`
--
ALTER TABLE `d_alat`
  ADD CONSTRAINT `d_alat_ibfk_1` FOREIGN KEY (`jenis`) REFERENCES `c_jenis_alat` (`jenis`);

--
-- Constraints for table `d_buku`
--
ALTER TABLE `d_buku`
  ADD CONSTRAINT `d_buku_ibfk_1` FOREIGN KEY (`jenis`) REFERENCES `c_jenis_buku` (`jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
