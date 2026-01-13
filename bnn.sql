-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2026 pada 22.39
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_access_menu`
--

CREATE TABLE `admin_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin_access_menu`
--

INSERT INTO `admin_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `menu`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sosilisas_p4gn`
--

CREATE TABLE `tb_sosilisas_p4gn` (
  `id` int(11) NOT NULL,
  `nama_pemohon` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no` varchar(255) NOT NULL,
  `tanggal_waktu` varchar(255) NOT NULL,
  `surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_sosilisas_p4gn`
--

INSERT INTO `tb_sosilisas_p4gn` (`id`, `nama_pemohon`, `instansi`, `alamat`, `no`, `tanggal_waktu`, `surat`) VALUES
(17, 'hdewgr', 'sdgshdghf', 'ff', 'kkkkk', '2025-06-30T14:29', 'PENYAMBUNGAN_KABEL_FIBER_OPTIC_24_4T_MENGGUNAKAN_METODE_FUSI_DAN_ALAT_FUSION_SPLICER.pdf'),
(18, 'iiyiy', 'iiiii', 'iiii', 'iiii', '2025-07-01T14:33', 'CV_YUSRIANI_2.pdf'),
(19, 'fdesfesrfes', 'dsfsdfsd', 'sfsdfds', '56464', '2025-07-01T11:48', 'Presentasi_Teknologi_Terkini_Modern_Biru_Tua_Krem_(1).pdf'),
(20, 'fdesfesrfes', 'dsfsdfsd', 'sfsdfds', '56464', '2025-07-01T11:48', 'Presentasi_Teknologi_Terkini_Modern_Biru_Tua_Krem_(1)1.pdf'),
(21, 'fdesfesrfes', 'dsfsdfsd', 'sfsdfds', '56464', '2025-07-01T11:48', 'Presentasi_Teknologi_Terkini_Modern_Biru_Tua_Krem_(1)2.pdf'),
(22, 'fdesfesrfes', 'dsfsdfsd', 'sfsdfds', '56464', '2025-07-01T11:49', 'Presentasi_Teknologi_Terkini_Modern_Biru_Tua_Krem_(1)3.pdf'),
(23, 'fdesfesrfes', 'dsfsdfsd', 'sfsdfds', '56464', '2025-07-01T11:49', 'Presentasi_Teknologi_Terkini_Modern_Biru_Tua_Krem_(1)4.pdf'),
(24, 'wadwaewa', 'rewrwer', 'fdsfs', '45354', '2025-07-01T11:58', 'Presentasi_Teknologi_Terkini_Modern_Biru_Tua_Krem_(1)6.pdf'),
(25, 'ewaewqe', 'ewrw', 'fdsfs', '45353', '2025-07-01T11:59', 'Presentasi_Teknologi_Terkini_Modern_Biru_Tua_Krem_(1)7.pdf'),
(26, 'ddd', 'jjjjj', 'jjjjj', '00444', '2025-07-01T12:25', 'LAPORAN_UAS_PBO5.pdf'),
(27, 'hdewgr', 'sdgshdghf', 'iiiii', '45454564', '2025-07-11T08:52', 'LAPORAN_UAS_PBO7.pdf'),
(28, 'hdewgr', 'sdgshdghf', 'iiiii', '45454564', '2025-07-24T09:20', 'LAPORAN_UAS_PBO9.pdf'),
(29, 'hdewgr', 'sdgshdghf', 'hghhgh', '45454564', '2025-07-10T13:55', 'LAPORAN_UAS_PBO11.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tes_urine`
--

CREATE TABLE `tb_tes_urine` (
  `id` int(11) NOT NULL,
  `nama_pemohon` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no` varchar(255) NOT NULL,
  `tanggal_waktu` varchar(255) NOT NULL,
  `surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_tes_urine`
--

INSERT INTO `tb_tes_urine` (`id`, `nama_pemohon`, `instansi`, `alamat`, `no`, `tanggal_waktu`, `surat`) VALUES
(1, 'ani', 'smk 2', 'amban', '00333', '2025-07-17T12:34', 'LAPORAN_UAS_PBO.pdf'),
(2, 'ttt', 'jjj', 'jjj', 'jjjj', '2025-06-12T12:06', 'CV_YUSRIANI_.pdf'),
(3, 'hdewgr', 'shdfjdshfj', 'dfjdhj', '45454564', '2025-06-30T14:06', 'LAPORAN_UAS_PBO1.pdf'),
(4, 'hdewgr', 'sdgshdghf', 'iiiii', 'kkkkk', '2025-06-30T14:13', 'LAPORAN_UAS_PBO2.pdf'),
(5, 'erewrewrwe', 'strretre', 'et454646', 'sdfsdfd', '2025-06-30T14:18', 'LAPORAN_UAS_PBO3.pdf'),
(6, 'hdewgr', 'sdgshdghf', 'ff', 'kkkkk', '2025-06-30T14:30', 'Presentasi_web.pdf'),
(7, 'dadsad', 'sfsfs', 'retrete', '54353', '2025-07-01T11:56', 'Presentasi_Teknologi_Terkini_Modern_Biru_Tua_Krem_(1)5.pdf'),
(8, 'fffi', 'uuuuuu', 'uu', 'uuu', '2025-07-01T16:12', 'CV_YUSRIANI_3.pdf'),
(9, 'hhh', 'hhhjjh', 'jjj', '089539494', '2025-07-01T15:20', 'LAPORAN_UAS_PBO4.pdf'),
(10, 'hdewgr', 'vvbvb', 'iiiii', '45454564', '2025-07-09T08:52', 'LAPORAN_UAS_PBO6.pdf'),
(11, 'hdewgr', 'sdgshdghf', 'hghhgh', '45454564', '2025-07-10T09:19', 'LAPORAN_UAS_PBO8.pdf'),
(12, 'hdewgr', 'sdgshdghf', 'iiiii', '45454564', '2025-07-03T13:54', 'LAPORAN_UAS_PBO10.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', '$2y$10$D4Zh4pkF9cgsvGH3e7cdjui5N1QalM2Y5AKAQjskBXjm9UwkMS.gS', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_access_menu`
--
ALTER TABLE `admin_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sosilisas_p4gn`
--
ALTER TABLE `tb_sosilisas_p4gn`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tes_urine`
--
ALTER TABLE `tb_tes_urine`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_access_menu`
--
ALTER TABLE `admin_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_sosilisas_p4gn`
--
ALTER TABLE `tb_sosilisas_p4gn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tb_tes_urine`
--
ALTER TABLE `tb_tes_urine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
