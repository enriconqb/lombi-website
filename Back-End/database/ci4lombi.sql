-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 10:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

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
  `tgl_dibayar` date NOT NULL,
  `status_verif_bayar` varchar(20) NOT NULL,
  `biaya_registrasitim` varchar(20) NOT NULL,
  `biaya_registrasiindividu` varchar(20) NOT NULL,
  `link_buktibayar` varchar(255) NOT NULL,
  `id_lomba` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_tim` int(5) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `status_kelengkapanberkas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `juri`
--

CREATE TABLE `juri` (
  `id_tim` int(5) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `status_penilaian_juri` varchar(100) NOT NULL,
  `link_template_penilaian_juri` varchar(255) NOT NULL,
  `link_penilaianjuri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `file_booklet` varchar(255) NOT NULL,
  `biaya_registrasitim` varchar(50) NOT NULL,
  `biaya_registrasiindividu` varchar(50) NOT NULL,
  `link_template_penilaianjuri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lomba`
--

INSERT INTO `lomba` (`id_lomba`, `nama_lomba`, `kategori_lomba`, `deskripsi_lomba`, `nama_penyelenggara`, `persyaratan_lomba`, `hadiah`, `tgl_daftar`, `tgl_kumpul`, `tgl_pengumuman`, `file_poster`, `file_booklet`, `biaya_registrasitim`, `biaya_registrasiindividu`, `link_template_penilaianjuri`) VALUES
(1, 'Puisi', '1', 'Puisi adalah', 'Hehe', '1. abcd\r\n2. efgh\r\n3. ijkl', 'Uang Tunai, Sertifikat', '2022-05-19', '2022-05-26', '2022-05-28', 'stupid.png', '-', '500000', '200000', 'link'),
(2, 'Menulis Hiragana', '1', 'apaan', 'pe', 'anuan', 'rahasia', '2022-05-20', '2022-05-26', '2022-05-28', 'stupid.png', 'gada', '400000', '200000', 'link'),
(5, 'Bahasa C', '2', 'pe', 'pe', 'pe', 'pe', '2022-05-28', '2022-05-31', '2022-06-01', 'stupid.png', 'gada', 'kepo', 'keo', 'gada'),
(6, 'Mewarnai', '3', 'gatau', 'gatau', 'gada', 'motor', '2022-05-20', '2022-05-26', '2022-05-28', 'stupid.png', 'gada', '0', '0', 'gada'),
(7, 'Pantun', '1', 'pantun aja yg bagus', 'pe', 'p', 'p', '2022-05-20', '2022-05-28', '2022-05-31', 'stupid.png', 'gada', '10', '10', 'o'),
(8, 'Mendongen', '1', 'dongeng', 'p', 'p', 'p', '2022-05-25', '2022-05-26', '2022-05-27', 'stupid.png', 'g', 'p', 'p', 'p'),
(10, 'gada', '1', 'p', 'p', 'p', 'p', '2022-05-26', '2022-05-26', '2022-05-27', 'stupid.png', 'gada', 'p', 'p', 'p'),
(11, 'java', '2', 'p', 'p', 'p', 'p', '2022-05-10', '2022-05-11', '2022-05-12', 'stupid.png', 'p', 'p', 'p', 'p'),
(12, 'html', '2', 'p', 'p', 'p', 'p', '2022-05-10', '2022-05-10', '2022-05-10', 'stupid.png', 'p', 'p', 'p', 'p'),
(13, 'CSS', '2', '2', '2', '2', '2', '2022-05-12', '2022-05-12', '2022-05-12', 'stupid.png', 'p', 'p', 'p', 'p'),
(14, 'Python', '2', 'p', 'p', 'p', 'p', '2022-05-18', '2022-05-18', '2022-05-18', 'stupid.png', 'p', 'p', 'p', 'p'),
(15, 'gatau', '2', 'p', 'p', 'p', 'p', '2022-05-11', '2022-05-11', '2022-05-11', 'stupid.png', 'p', 'p', 'p', 'p'),
(16, 'tari', '3', 'p', 'p', 'p', 'p', '2022-05-18', '2022-05-18', '2022-05-18', 'stupid.png', 'p', 'p', 'p', 'p'),
(17, 'modern dance', '3', 'p', 'p', 'p', 'p', '2022-05-18', '2022-05-18', '2022-05-18', 'stupid.png', 'p', 'p', 'p', 'p'),
(18, 'menyanyi', '3', 'p', 'p', 'p', 'p', '2022-05-10', '2022-05-10', '2022-05-10', 'stupid.png', 'p', 'p', 'p', 'p'),
(19, 'beat box', '3', 'p', 'p', 'p', 'p', '2022-05-10', '2022-05-10', '2022-05-10', 'stupid.png', 'p', 'p', 'p', 'p'),
(20, 'apa', '3', 'p', 'p', 'p', 'p', '2022-05-24', '2022-05-24', '2022-05-24', 'stupid.png', 'p', 'p', 'p', 'p');

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
  `anggota1_nama` varchar(255) NOT NULL,
  `anggota1_nim` varchar(20) NOT NULL,
  `anggota2_nama` varchar(255) NOT NULL,
  `anggota2_nim` varchar(20) NOT NULL,
  `anggota3_nama` varchar(255) NOT NULL,
  `anggota3_nim` varchar(20) NOT NULL,
  `anggota4_nama` varchar(255) NOT NULL,
  `anggota4_nim` varchar(20) NOT NULL,
  `link_buktibayar` varchar(255) NOT NULL,
  `status_verif_bayar` varchar(255) NOT NULL,
  `link_karya` varchar(255) NOT NULL,
  `link_orisinalitas` varchar(255) NOT NULL,
  `status_finalist` varchar(255) NOT NULL,
  `link_suratfinalis` varchar(255) NOT NULL,
  `link_ktm_anggota1` varchar(255) NOT NULL,
  `link_ktm_anggota2` varchar(255) NOT NULL,
  `link_ktm_anggota3` varchar(255) NOT NULL,
  `link_ktm_anggota4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id_tim`, `emailketua`, `id_lomba`, `id_user`, `nama_tim`, `nama_instansi`, `ketua_nama`, `ketua_nim`, `link_ktm_ketua`, `norek`, `jenisbank`, `anggota1_nama`, `anggota1_nim`, `anggota2_nama`, `anggota2_nim`, `anggota3_nama`, `anggota3_nim`, `anggota4_nama`, `anggota4_nim`, `link_buktibayar`, `status_verif_bayar`, `link_karya`, `link_orisinalitas`, `status_finalist`, `link_suratfinalis`, `link_ktm_anggota1`, `link_ktm_anggota2`, `link_ktm_anggota3`, `link_ktm_anggota4`) VALUES
(31, 'inooo@gmail.com', 8, 0, 'hiuhu', 'sekolah', 'gatauu', '1234', 'abcd', '1234', 'abc', '', '', '', '', '', '', '', '', 'link', '', '', '', '', '', '', '', '', ''),
(33, 'ayeshaprilia10@upi.edu', 10, 0, 'pppp', 'ppp', 'ppp', 'pppp', 'ppp', 'ppp', 'ppp', '', '', '', '', '', '', '', '', 'link', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hak_akses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`, `hak_akses`) VALUES
(6, 'inooo@gmail.com', 'inoteri', 'inookei', 'peserta'),
(7, 'abc@gmail.com', 'abc', 'jjj', 'peserta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`status_verif_bayar`),
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
  ADD KEY `id_tim` (`id_tim`),
  ADD KEY `nama_tim` (`nama_tim`);

--
-- Indexes for table `juri`
--
ALTER TABLE `juri`
  ADD KEY `id_tim` (`id_tim`),
  ADD KEY `nama_tim` (`nama_tim`);

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`id_lomba`),
  ADD UNIQUE KEY `nama_lomba` (`nama_lomba`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id_tim`),
  ADD KEY `status_verif_bayar` (`status_verif_bayar`);

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
  MODIFY `id_lomba` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id_tim` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
