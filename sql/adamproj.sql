-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2023 pada 06.13
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `a_apikey`
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

--
-- Dumping data untuk tabel `a_apikey`
--

INSERT INTO `a_apikey` (`nation_code`, `id`, `code`, `name`, `cdate`, `ldate`, `is_active`) VALUES
(62, 1, 'ABCD1234', 'General APIKEY', '2020-06-09 09:47:18', '2020-06-09 02:47:18', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `b_member`
--

CREATE TABLE `b_member` (
  `id` int(6) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `b_user`
--

CREATE TABLE `b_user` (
  `id` int(6) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `is_active` enum('1','2','','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `b_user`
--

INSERT INTO `b_user` (`id`, `nama`, `email`, `password`, `token`, `is_active`) VALUES
(1, 'adam', 'shizu@gmail.com', '$2y$10$NkiI9Bzfhu.qZn5pCaybwOeqZ5/wK5TCSvrz99.N3mp1Cs4Uz9nHW', '123456', '1'),
(2, 'adam', 'kiryu@gmail.com', '$2y$10$LJlrHHhYpSoCRNJtw2IixuV2a36jdvvaHkJVOMNQ9sWaR99XpvbFK', NULL, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_jenis_alat`
--

CREATE TABLE `c_jenis_alat` (
  `id` int(6) NOT NULL,
  `jenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `c_jenis_alat`
--

INSERT INTO `c_jenis_alat` (`id`, `jenis`) VALUES
(1, 'adhensive & tape'),
(2, 'alat tulis'),
(3, 'pemotong kertas'),
(4, 'penjilidan & penyimpanan'),
(5, 'produk kertas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_jenis_buku`
--

CREATE TABLE `c_jenis_buku` (
  `id` int(6) NOT NULL,
  `jenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `c_jenis_buku`
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
-- Struktur dari tabel `c_jenis_teknologi`
--

CREATE TABLE `c_jenis_teknologi` (
  `id` int(6) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `c_jenis_teknologi`
--

INSERT INTO `c_jenis_teknologi` (`id`, `jenis`) VALUES
(2, 'accessories'),
(9, 'drawing device'),
(6, 'headset'),
(1, 'kabel dan konektor'),
(5, 'keyboard'),
(3, 'monitor'),
(4, 'mouse'),
(10, 'mousepad'),
(7, 'speaker'),
(8, 'webcam & modem');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_alat`
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
-- Struktur dari tabel `d_buku`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_teknologi`
--

CREATE TABLE `d_teknologi` (
  `id` int(6) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `nm_barang` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `jumlah` int(255) DEFAULT NULL,
  `harga` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `b_member`
--
ALTER TABLE `b_member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `b_user`
--
ALTER TABLE `b_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c_jenis_alat`
--
ALTER TABLE `c_jenis_alat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis` (`jenis`);

--
-- Indeks untuk tabel `c_jenis_buku`
--
ALTER TABLE `c_jenis_buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis` (`jenis`);

--
-- Indeks untuk tabel `c_jenis_teknologi`
--
ALTER TABLE `c_jenis_teknologi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis` (`jenis`);

--
-- Indeks untuk tabel `d_alat`
--
ALTER TABLE `d_alat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis` (`jenis`);

--
-- Indeks untuk tabel `d_buku`
--
ALTER TABLE `d_buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis` (`jenis`);

--
-- Indeks untuk tabel `d_teknologi`
--
ALTER TABLE `d_teknologi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis` (`jenis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `b_member`
--
ALTER TABLE `b_member`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `b_user`
--
ALTER TABLE `b_user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `c_jenis_alat`
--
ALTER TABLE `c_jenis_alat`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `c_jenis_buku`
--
ALTER TABLE `c_jenis_buku`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `c_jenis_teknologi`
--
ALTER TABLE `c_jenis_teknologi`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `d_alat`
--
ALTER TABLE `d_alat`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `d_buku`
--
ALTER TABLE `d_buku`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `d_teknologi`
--
ALTER TABLE `d_teknologi`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `d_alat`
--
ALTER TABLE `d_alat`
  ADD CONSTRAINT `d_alat_ibfk_1` FOREIGN KEY (`jenis`) REFERENCES `c_jenis_alat` (`jenis`);

--
-- Ketidakleluasaan untuk tabel `d_buku`
--
ALTER TABLE `d_buku`
  ADD CONSTRAINT `d_buku_ibfk_1` FOREIGN KEY (`jenis`) REFERENCES `c_jenis_buku` (`jenis`);

--
-- Ketidakleluasaan untuk tabel `d_teknologi`
--
ALTER TABLE `d_teknologi`
  ADD CONSTRAINT `d_teknologi_ibfk_1` FOREIGN KEY (`jenis`) REFERENCES `c_jenis_teknologi` (`jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
