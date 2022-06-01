-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 08:19 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4lombi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `id_tim` int(5) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `tgl_dibayar` date NOT NULL DEFAULT current_timestamp(),
  `status_verif_bayar` varchar(20) NOT NULL,
  `biaya_registrasitim` varchar(20) NOT NULL,
  `biaya_registrasiindividu` varchar(20) NOT NULL,
  `link_buktibayar` varchar(255) NOT NULL,
  `id_lomba` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bayar`
--

INSERT INTO `bayar` (`id_tim`, `nama_tim`, `tgl_dibayar`, `status_verif_bayar`, `biaya_registrasitim`, `biaya_registrasiindividu`, `link_buktibayar`, `id_lomba`) VALUES
(148, 'Tim1', '2022-06-01', 'Sudah Verifikasi', '100000', '', 'Tim1', 34),
(149, 'Tim2', '2022-06-01', 'Sudah Verifikasi', '100000', '', 'Tim2', 34),
(150, 'Tim3', '2022-06-01', 'Gagal Verifikasi', '100000', '', 'Tim3', 34),
(151, 'Tim4', '2022-06-01', 'Belum Verifikasi', '100000', '', 'Tim4', 34),
(152, 'Tim5', '2022-06-01', 'Sudah Verifikasi', '100000', '', 'Tim5', 34),
(153, 'Bebek1', '2022-06-01', 'Sudah Verifikasi', '100000', '', 'Bebek1', 33),
(154, 'Bebek2', '2022-06-01', 'Sudah Verifikasi', '100000', '', 'Bebek2', 33),
(155, 'Bebek3', '2022-06-01', 'Sudah Verifikasi', '100000', '', 'Bebek3', 33),
(156, 'Bebek4', '2022-06-01', 'Sudah Verifikasi', '100000', '', 'Bebek4', 33),
(157, 'Bebek5', '2022-06-01', 'Sudah Verifikasi', '100000', '', 'Bebek5', 33);

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_tim` int(5) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `status_kelengkapanberkas` varchar(20) NOT NULL,
  `id_lomba` int(5) NOT NULL,
  `status_final` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_tim`, `nama_tim`, `status_kelengkapanberkas`, `id_lomba`, `status_final`) VALUES
(148, 'Tim1', 'Sudah Diperiksa', 34, 'ya'),
(149, 'Tim2', 'Berkas Kurang', 34, NULL),
(152, 'Tim5', 'Sudah Diperiksa', 34, NULL),
(153, 'Bebek1', 'Sudah Diperiksa', 33, 'ya'),
(154, 'Bebek2', 'Sudah Diperiksa', 33, 'ya'),
(155, 'Bebek3', 'Sudah Diperiksa', 33, 'ya'),
(156, 'Bebek4', 'Sudah Diperiksa', 33, 'ya'),
(157, 'Bebek5', 'Sudah Diperiksa', 33, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `juri`
--

CREATE TABLE `juri` (
  `id_lomba` int(5) NOT NULL,
  `id_tim` int(5) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `status_penilaian_juri` varchar(100) NOT NULL,
  `link_template_penilaian_juri` varchar(255) NOT NULL,
  `link_penilaianjuri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `list_lomba`
--

CREATE TABLE `list_lomba` (
  `id_user` int(5) NOT NULL,
  `nama_lomba` varchar(255) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `status_verif_bayar` varchar(255) DEFAULT NULL,
  `status_kelengkapanberkas` varchar(255) DEFAULT NULL,
  `id_lomba` int(5) NOT NULL,
  `id_tim` int(5) NOT NULL,
  `status_final` varchar(255) DEFAULT NULL,
  `skor` int(11) DEFAULT NULL,
  `juara` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_lomba`
--

INSERT INTO `list_lomba` (`id_user`, `nama_lomba`, `nama_tim`, `status_verif_bayar`, `status_kelengkapanberkas`, `id_lomba`, `id_tim`, `status_final`, `skor`, `juara`) VALUES
(26, 'Sastra4', 'Tim1', 'Sudah Verifikasi', 'Sudah Diperiksa', 34, 148, 'ya', 985, '1'),
(26, 'Sastra4', 'Tim2', 'Sudah Verifikasi', 'Berkas Kurang', 34, 149, 'ya', 990, NULL),
(26, 'Sastra4', 'Tim3', 'Gagal Verifikasi', NULL, 34, 150, NULL, NULL, NULL),
(26, 'Sastra4', 'Tim4', 'Belum Verifikasi', NULL, 34, 151, NULL, NULL, NULL),
(26, 'Sastra4', 'Tim5', 'Sudah Verifikasi', 'Sudah Diperiksa', 34, 152, NULL, NULL, NULL),
(26, 'Sastra3', 'Bebek1', 'Sudah Verifikasi', 'Sudah Diperiksa', 33, 153, 'ya', NULL, '1'),
(26, 'Sastra3', 'Bebek2', 'Sudah Verifikasi', 'Sudah Diperiksa', 33, 154, 'ya', NULL, '2'),
(26, 'Sastra3', 'Bebek3', 'Sudah Verifikasi', 'Sudah Diperiksa', 33, 155, 'ya', NULL, '3'),
(26, 'Sastra3', 'Bebek4', 'Sudah Verifikasi', 'Sudah Diperiksa', 33, 156, 'ya', NULL, NULL),
(26, 'Sastra3', 'Bebek5', 'Sudah Verifikasi', 'Sudah Diperiksa', 33, 157, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lomba`
--

CREATE TABLE `lomba` (
  `id_lomba` int(5) NOT NULL,
  `nama_lomba` varchar(255) NOT NULL,
  `kategori_lomba` varchar(255) NOT NULL,
  `deskripsi_lomba` varchar(500) NOT NULL,
  `nama_penyelenggara` varchar(255) NOT NULL,
  `persyaratan_lomba` varchar(500) NOT NULL,
  `hadiah` varchar(300) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `tgl_kumpul` date NOT NULL,
  `tgl_pengumuman` date NOT NULL,
  `file_poster` varchar(255) NOT NULL,
  `link_booklet` varchar(255) DEFAULT NULL,
  `biaya_registrasitim` varchar(50) DEFAULT 'Gratis',
  `biaya_registrasiindividu` varchar(50) DEFAULT NULL,
  `link_template_penilaianjuri` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_juara` varchar(25) NOT NULL DEFAULT 'belum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lomba`
--

INSERT INTO `lomba` (`id_lomba`, `nama_lomba`, `kategori_lomba`, `deskripsi_lomba`, `nama_penyelenggara`, `persyaratan_lomba`, `hadiah`, `tgl_daftar`, `tgl_kumpul`, `tgl_pengumuman`, `file_poster`, `link_booklet`, `biaya_registrasitim`, `biaya_registrasiindividu`, `link_template_penilaianjuri`, `id_user`, `status_juara`) VALUES
(30, 'Sastra1', '1', 'Sastra1', 'Sastra1', 'Sastra1', 'Sastra1', '2022-06-05', '2022-06-22', '2022-06-25', 'stupid.png', 'Sastra1', '50000', '', 'Sastra1', 26, 'belum'),
(31, 'Sastra2', '1', 'Sastra2', 'Sastra2', 'Sastra2', 'Sastra2', '2022-06-21', '2022-06-17', '2022-07-01', 'stupid.png', 'Sastra2', '', '', 'Sastra2', 26, 'belum'),
(33, 'Sastra3', '1', 'Sastra3', 'Sastra3', 'Sastra3', 'Sastra3', '2022-06-29', '2022-06-22', '2022-06-23', 'stupid.png', 'Sastra3', '100000', '', 'Sastra3', 26, 'sudah'),
(34, 'Sastra4', '1', 'Sastra4', 'Sastra4', 'Sastra4', 'Sastra4', '2022-07-07', '2022-06-29', '2022-06-30', 'stupid.png', 'Sastra4', '100000', '', 'Sastra4', 26, 'belum'),
(35, 'Sastra5', '1', 'Sastra5', 'Sastra5', 'Sastra5', 'Sastra5', '2022-06-21', '2022-06-30', '2022-07-01', 'stupid.png', 'Sastra5', '100000', '100000', 'Sastra5', 26, 'belum'),
(36, 'Programming1', '2', 'Programming1', 'Programming1', 'Programming1', 'Programming1', '2022-06-15', '2022-06-23', '2022-07-08', 'stupid.png', 'Programming1', '100000', '', 'Programming1', 26, 'belum'),
(37, 'Programming2', '2', 'Programming2', 'Programming2', 'Programming2', 'Programming2', '2022-06-23', '2022-06-30', '2022-07-08', 'stupid.png', 'Programming2', '100000', '100000', 'Programming2', 26, 'belum'),
(38, 'Programming3', '2', 'Programming3', 'Programming3', 'Programming3', 'Programming3', '2022-06-23', '2022-06-23', '2022-06-24', 'stupid.png', 'Programming3', '100000', '', 'Programming3', 26, 'belum'),
(39, 'Programming4', '2', 'Programming4', 'Programming4', 'Programming4', 'Programming4', '2022-06-09', '2022-06-16', '2022-06-24', 'stupid.png', 'Programming4', '100000', '', 'Programming4', 26, 'belum'),
(40, 'Programming5', '2', 'Programming5', 'Programming5', 'Programming5', 'Programming5', '2022-06-08', '2022-06-23', '2022-06-25', 'stupid.png', 'Programming5', '100000', '', 'Programming5', 26, 'belum'),
(41, 'Seni1', '3', 'Seni1', 'Seni1', 'Seni1', 'Seni1', '2022-06-24', '2022-06-09', '2022-06-16', 'stupid.png', 'Seni1', '100000', '', 'Seni1', 26, 'belum'),
(42, 'Seni2', '3', 'Seni2', 'Seni2', 'Seni2', 'Seni2', '2022-06-16', '2022-06-23', '2022-06-22', 'stupid.png', 'Seni2', '100000', '', 'Seni2', 26, 'belum'),
(43, 'Seni3', '3', 'Seni3', 'Seni3', 'Seni3', 'Seni3', '2022-06-23', '2022-06-18', '2022-06-24', 'stupid.png', 'Seni3', '100000', '', 'Seni3', 26, 'belum'),
(44, 'Seni4', '3', 'Seni4', 'Seni4', 'Seni4', 'Seni4', '2022-06-22', '2022-06-23', '2022-07-01', 'stupid.png', 'Seni4', '100000', '100000', 'Seni4', 26, 'belum'),
(45, 'Seni5', '3', 'Seni5', 'Seni5', 'Seni5', 'Seni5', '2022-06-15', '2022-06-17', '2022-06-13', 'stupid.png', 'Seni5', '100000', '', 'Seni5', 26, 'belum'),
(46, 'Sastra6', '1', 'Sastra6', 'Sastra6', 'Sastra6', 'Sastra6', '2022-06-22', '2022-06-30', '2022-06-18', 'stupid.png', 'Sastra6', '100000', '', 'Sastra6', 26, 'belum'),
(47, 'Sastra7', '1', 'Sastra7', 'Sastra7', 'Sastra7', 'Sastra7', '2022-06-23', '2022-06-23', '2022-06-18', 'stupid.png', 'Sastra7', '100000', '', 'Sastra7', 26, 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id_tim` int(5) NOT NULL,
  `emailketua` varchar(50) NOT NULL,
  `id_lomba` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nama_tim` varchar(100) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `ketua_nama` varchar(255) NOT NULL,
  `ketua_nim` varchar(20) NOT NULL,
  `link_ktm_ketua` varchar(255) NOT NULL,
  `norek` varchar(255) NOT NULL,
  `jenisbank` varchar(255) NOT NULL,
  `anggota1_nama` varchar(255) DEFAULT NULL,
  `anggota1_nim` varchar(20) DEFAULT NULL,
  `anggota2_nama` varchar(255) DEFAULT NULL,
  `anggota2_nim` varchar(20) DEFAULT NULL,
  `anggota3_nama` varchar(255) DEFAULT NULL,
  `anggota3_nim` varchar(20) DEFAULT NULL,
  `anggota4_nama` varchar(255) DEFAULT NULL,
  `anggota4_nim` varchar(20) DEFAULT NULL,
  `link_buktibayar` varchar(255) NOT NULL,
  `status_verif_bayar` varchar(255) NOT NULL,
  `link_karya` varchar(255) NOT NULL,
  `link_orisinalitas` varchar(255) NOT NULL,
  `status_final` varchar(255) DEFAULT NULL,
  `link_suratfinalis` varchar(255) NOT NULL,
  `link_ktm_anggota1` varchar(255) DEFAULT NULL,
  `link_ktm_anggota2` varchar(255) DEFAULT NULL,
  `link_ktm_anggota3` varchar(255) DEFAULT NULL,
  `link_ktm_anggota4` varchar(255) DEFAULT NULL,
  `skor` int(5) DEFAULT NULL,
  `juara` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id_tim`, `emailketua`, `id_lomba`, `id_user`, `nama_tim`, `nama_instansi`, `ketua_nama`, `ketua_nim`, `link_ktm_ketua`, `norek`, `jenisbank`, `anggota1_nama`, `anggota1_nim`, `anggota2_nama`, `anggota2_nim`, `anggota3_nama`, `anggota3_nim`, `anggota4_nama`, `anggota4_nim`, `link_buktibayar`, `status_verif_bayar`, `link_karya`, `link_orisinalitas`, `status_final`, `link_suratfinalis`, `link_ktm_anggota1`, `link_ktm_anggota2`, `link_ktm_anggota3`, `link_ktm_anggota4`, `skor`, `juara`) VALUES
(148, 'Tim1@gmail.com', 34, 26, 'Tim1', 'Tim1', 'Tim1', 'Tim1', 'Tim1', 'Tim1', 'Tim1', 'Tim1', 'Tim1', '', '', '', '', '', '', 'Tim1', 'Sudah Verifikasi', 'Tim1', 'Tim1', 'ya', 'Tim1', 'Tim1', '', '', '', 985, NULL),
(149, 'Tim2@gmail.com', 34, 26, 'Tim2', 'Tim2', 'Tim2', 'Tim2', 'Tim2', 'Tim2', 'Tim2', 'Tim2', 'Tim2', 'Tim2', 'Tim2', '', '', '', '', 'Tim2', 'Sudah Verifikasi', 'Tim2', 'Tim2', 'ya', '', NULL, NULL, NULL, NULL, 990, NULL),
(150, 'Tim3@gmail.com', 34, 26, 'Tim3', 'Tim3', 'Tim3', 'Tim3', 'Tim3', 'Tim3', 'Tim3', 'Tim3', 'Tim3', 'Tim3', 'Tim3', 'Tim3', 'Tim3', '', '', 'Tim3', 'Gagal Verifikasi', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(151, 'Tim4@gmail.com', 34, 26, 'Tim4', 'Tim4', 'Tim4', 'Tim4', 'Tim4', 'Tim4', 'Tim4', 'Tim4', 'Tim4', 'Tim4', 'Tim4', 'Tim4', 'Tim4', 'Tim4', 'Tim4', 'Tim4', 'Belum Verifikasi', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(152, 'Tim5@gmail.com', 34, 26, 'Tim5', 'Tim5', 'Tim5', 'Tim5', 'Tim5', 'Tim5', 'Tim5', 'Tim5', 'Tim5', 'Tim5', 'Tim5', 'Tim5', 'Tim5', 'Tim5', 'Tim5', 'Tim5', 'Sudah Verifikasi', 'Tim5', 'Tim5', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(153, 'Bebek1@gmail.com', 33, 26, 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Sudah Verifikasi', 'Bebek', 'Bebek', 'ya', 'Bebek', 'Bebek', 'Bebek', 'Bebek', 'Bebek', NULL, '1'),
(154, 'Bebek2@gmail.com', 33, 26, 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Sudah Verifikasi', 'Bebek', 'Bebek', 'ya', 'Bebek', 'Bebek', 'Bebek', 'Bebek', 'Bebek', NULL, '2'),
(155, 'Bebek3@gmail.com', 33, 26, 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Sudah Verifikasi', 'Bebek', 'Bebek', 'ya', 'Bebek', 'Bebek', 'Bebek', 'Bebek', 'Bebek', NULL, '3'),
(156, 'Bebek4@gmail.com', 33, 26, 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Sudah Verifikasi', 'Bebek', 'Bebek', 'ya', 'Bebek', 'Bebek', 'Bebek', 'Bebek', 'Bebek', NULL, NULL),
(157, 'Bebek5@gamicl.com', 33, 26, 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Sudah Verifikasi', 'Bebek', 'Bebek', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hak_akses` varchar(255) NOT NULL,
  `id_lomba` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`, `hak_akses`, `id_lomba`) VALUES
(16, 'admin@gmail.com', 'admin', 'admin', 'super_admin', NULL),
(26, 'user@gmail.com', 'user', 'user', 'user', NULL),
(27, 'staffsastra1@gmail.com', 'staffsastra1', 'staffsastra1', 'Staff Juri', 30),
(28, 'staffsastra2@gmail.com', 'staffsastra2', 'staffsastra2', 'Staff Konten', 30),
(29, 'staffsastra3@gmail.com', 'staffsastra3', 'staffsastra3', 'Staff Peserta', 30),
(30, 'staffsastra4@gmail.com', 'staffsastra4', 'staffsastra4', 'Staff Berkas', 30),
(31, 'staffsastra5@gmail.com', 'staffsastra5', 'staffsastra5', 'Staff Keuangan', 30),
(32, 'bambang@gmail.com', 'bambang', 'bambang', 'Staff Juri', 31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD UNIQUE KEY `id_tim_2` (`id_tim`),
  ADD KEY `id_tim` (`id_tim`),
  ADD KEY `nama_tim` (`nama_tim`),
  ADD KEY `biaya_registrasitim` (`biaya_registrasitim`),
  ADD KEY `biaya_registrasiindividu` (`biaya_registrasiindividu`),
  ADD KEY `link_buktibayar` (`link_buktibayar`),
  ADD KEY `id_lomba` (`id_lomba`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD UNIQUE KEY `id_tim_2` (`id_tim`),
  ADD KEY `id_tim` (`id_tim`),
  ADD KEY `nama_tim` (`nama_tim`);

--
-- Indexes for table `juri`
--
ALTER TABLE `juri`
  ADD UNIQUE KEY `id_tim_2` (`id_tim`),
  ADD KEY `id_tim` (`id_tim`),
  ADD KEY `nama_tim` (`nama_tim`);

--
-- Indexes for table `list_lomba`
--
ALTER TABLE `list_lomba`
  ADD UNIQUE KEY `id_tim` (`id_tim`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_lomba` (`id_lomba`,`id_tim`);

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`id_lomba`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id_tim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lomba`
--
ALTER TABLE `lomba`
  MODIFY `id_lomba` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id_tim` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
