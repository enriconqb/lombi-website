-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 05:09 AM
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
  `id_user` int(5) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id_tim` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
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
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id_tim`),
  ADD UNIQUE KEY `nama_tim` (`nama_tim`),
  ADD KEY `status_verif_bayar` (`status_verif_bayar`),
  ADD KEY `id_user` (`id_user`);

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
  MODIFY `id_lomba` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id_tim` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bayar`
--
ALTER TABLE `bayar`
  ADD CONSTRAINT `bayar_ibfk_1` FOREIGN KEY (`id_tim`) REFERENCES `tim` (`id_tim`),
  ADD CONSTRAINT `bayar_ibfk_2` FOREIGN KEY (`id_lomba`) REFERENCES `lomba` (`id_lomba`);

--
-- Constraints for table `berkas`
--
ALTER TABLE `berkas`
  ADD CONSTRAINT `berkas_ibfk_1` FOREIGN KEY (`id_tim`) REFERENCES `tim` (`id_tim`);

--
-- Constraints for table `juri`
--
ALTER TABLE `juri`
  ADD CONSTRAINT `juri_ibfk_1` FOREIGN KEY (`id_tim`) REFERENCES `tim` (`id_tim`);

--
-- Constraints for table `lomba`
--
ALTER TABLE `lomba`
  ADD CONSTRAINT `lomba_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `tim`
--
ALTER TABLE `tim`
  ADD CONSTRAINT `tim_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
