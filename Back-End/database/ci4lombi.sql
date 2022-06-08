-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 01:39 PM
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
(157, 'Bebek5', '2022-06-01', 'Sudah Verifikasi', '100000', '', 'Bebek5', 33),
(158, 'CeritanyaTim1', '2022-06-03', 'Sudah Verifikasi', '', '', 'CeritanyaTim1', 31),
(159, 'CeritanyaTim2', '2022-06-03', 'Sudah Verifikasi', '', '', 'CeritanyaTim2', 31),
(160, 'CeritanyaTim3', '2022-06-03', 'Sudah Verifikasi', '', '', 'CeritanyaTim3', 31),
(161, 'CeritanyaTim4', '2022-06-03', 'Sudah Verifikasi', '', '', 'CeritanyaTim4', 31),
(162, 'CeritanyaTim5', '2022-06-03', 'Sudah Verifikasi', '100000', '', 'CeritanyaTim5', 31),
(163, 'CeritanyaTim6', '2022-06-03', 'Sudah Verifikasi', '100000', '', 'CeritanyaTim6', 31),
(164, 'CeritanyaTim7', '2022-06-03', 'Gagal Verifikasi', '100000', '', 'CeritanyaTim7', 31),
(165, 'haha', '2022-06-03', 'Belum Verifikasi', '100000', '', 'link', 46),
(169, 'abc', '2022-06-07', 'Sudah Verifikasi', '100000', '', 'whatsapp.com', 40),
(170, 'haha', '2022-06-07', 'Sudah Verifikasi', '100000', '', 'whatsapp.com', 40),
(171, 'lompat', '2022-06-07', 'Sudah Verifikasi', '100000', '', 'whatsapp.com', 40);

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
(148, 'Tim1', 'Sudah Diperiksa', 34, NULL),
(149, 'Tim2', 'Berkas Kurang', 34, NULL),
(152, 'Tim5', 'Sudah Diperiksa', 34, NULL),
(153, 'Bebek1', 'Belum Diperiksa', 33, NULL),
(154, 'Bebek2', 'Sudah Diperiksa', 33, NULL),
(155, 'Bebek3', 'Sudah Diperiksa', 33, NULL),
(156, 'Bebek4', 'Sudah Diperiksa', 33, NULL),
(157, 'Bebek5', 'Sudah Diperiksa', 33, NULL),
(158, 'CeritanyaTim1', 'Sudah Diperiksa', 31, 'ya'),
(159, 'CeritanyaTim2', 'Sudah Diperiksa', 31, 'ya'),
(160, 'CeritanyaTim3', 'Sudah Diperiksa', 31, 'ya'),
(161, 'CeritanyaTim4', 'Belum Diperiksa', 31, 'ya'),
(162, 'CeritanyaTim5', 'Sudah Diperiksa', 31, NULL),
(163, 'CeritanyaTim6', 'Berkas Kurang', 31, NULL),
(169, 'abc', 'Sudah Diperiksa', 40, 'ya'),
(170, 'haha', 'Sudah Diperiksa', 40, 'ya'),
(171, 'lompat', 'Sudah Diperiksa', 40, 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `juri`
--

CREATE TABLE `juri` (
  `id_lomba` int(5) NOT NULL,
  `id_tim` int(5) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `status_penilaian_juri` varchar(100) NOT NULL,
  `link_template_penilaianjuri` varchar(255) NOT NULL,
  `link_penilaianjuri` varchar(255) NOT NULL,
  `skor` varchar(255) DEFAULT NULL,
  `status_final` varchar(255) DEFAULT NULL,
  `juara` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `juri`
--

INSERT INTO `juri` (`id_lomba`, `id_tim`, `nama_tim`, `status_penilaian_juri`, `link_template_penilaianjuri`, `link_penilaianjuri`, `skor`, `status_final`, `juara`) VALUES
(33, 153, 'Bebek1', 'sudah', 'Sastra3', 'BebekJuri', '980', 'ya', '1'),
(33, 154, 'Bebek2', 'sudah', 'Sastra3', 'WEW', '999', 'ya', '2'),
(31, 158, 'CeritanyaTim1', 'sudah', 'Sastra2', 'Tim1', '1000', 'ya', '1'),
(31, 159, 'CeritanyaTim2', 'sudah', 'Sastra2', 'Tim2', '999', 'ya', '2'),
(31, 160, 'CeritanyaTim3', 'sudah', 'Sastra2', 'Tim3', '998', 'ya', '3'),
(31, 161, 'CeritanyaTim4', 'sudah', 'Sastra2', 'Tim4', '996', 'ya', NULL),
(31, 162, 'CeritanyaTim5', 'belum', 'Sastra2', '', NULL, NULL, NULL),
(40, 169, 'abc', 'sudah', 'Programming5', 'link', '689', 'ya', '3'),
(40, 170, 'haha', 'sudah', 'Programming5', 'link', '567', 'ya', '2'),
(40, 171, 'lompat', 'sudah', 'Programming5', 'link', '800', 'ya', '1');

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
  `juara` varchar(255) DEFAULT NULL,
  `status_juara` varchar(255) NOT NULL DEFAULT 'belum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_lomba`
--

INSERT INTO `list_lomba` (`id_user`, `nama_lomba`, `nama_tim`, `status_verif_bayar`, `status_kelengkapanberkas`, `id_lomba`, `id_tim`, `status_final`, `skor`, `juara`, `status_juara`) VALUES
(26, 'Sastra4', 'Tim1', 'Sudah Verifikasi', 'Sudah Diperiksa', 34, 148, 'ya', 985, '1', 'belum'),
(26, 'Sastra4', 'Tim2', 'Sudah Verifikasi', 'Berkas Kurang', 34, 149, 'ya', 990, NULL, 'belum'),
(26, 'Sastra4', 'Tim3', 'Gagal Verifikasi', NULL, 34, 150, NULL, NULL, NULL, 'belum'),
(26, 'Sastra4', 'Tim4', 'Belum Verifikasi', NULL, 34, 151, NULL, NULL, NULL, 'belum'),
(26, 'Sastra4', 'Tim5', 'Sudah Verifikasi', 'Sudah Diperiksa', 34, 152, NULL, NULL, NULL, 'belum'),
(26, 'Sastra3', 'Bebek1', 'Sudah Verifikasi', 'Belum Diperiksa', 33, 153, 'ya', 980, '1', 'belum'),
(26, 'Sastra3', 'Bebek2', 'Sudah Verifikasi', 'Sudah Diperiksa', 33, 154, 'ya', 999, '2', 'belum'),
(26, 'Sastra3', 'Bebek3', 'Sudah Verifikasi', 'Sudah Diperiksa', 33, 155, 'ya', NULL, '3', 'belum'),
(26, 'Sastra3', 'Bebek4', 'Sudah Verifikasi', 'Sudah Diperiksa', 33, 156, 'ya', NULL, NULL, 'belum'),
(26, 'Sastra3', 'Bebek5', 'Sudah Verifikasi', 'Sudah Diperiksa', 33, 157, NULL, NULL, NULL, 'belum'),
(26, 'Sastra2', 'CeritanyaTim1', 'Sudah Verifikasi', 'Sudah Diperiksa', 31, 158, 'ya', 1000, '1', 'sudah'),
(26, 'Sastra2', 'CeritanyaTim2', 'Sudah Verifikasi', 'Sudah Diperiksa', 31, 159, 'ya', 999, '2', 'sudah'),
(26, 'Sastra2', 'CeritanyaTim3', 'Sudah Verifikasi', 'Sudah Diperiksa', 31, 160, 'ya', 998, '3', 'sudah'),
(26, 'Sastra2', 'CeritanyaTim4', 'Sudah Verifikasi', 'Belum Diperiksa', 31, 161, 'ya', 996, NULL, 'sudah'),
(26, 'Sastra2', 'CeritanyaTim5', 'Sudah Verifikasi', 'Sudah Diperiksa', 31, 162, NULL, NULL, NULL, 'sudah'),
(26, 'Sastra2', 'CeritanyaTim6', 'Sudah Verifikasi', 'Berkas Kurang', 31, 163, NULL, NULL, NULL, 'sudah'),
(26, 'Sastra2', 'CeritanyaTim7', 'Gagal Verifikasi', NULL, 31, 164, NULL, NULL, NULL, 'sudah'),
(26, 'Sastra6', 'haha', 'Belum Verifikasi', NULL, 46, 165, NULL, NULL, NULL, 'belum'),
(36, 'Programming5', 'abc', 'Sudah Verifikasi', 'Sudah Diperiksa', 40, 169, 'ya', 689, '3', 'sudah'),
(35, 'Programming5', 'haha', 'Sudah Verifikasi', 'Sudah Diperiksa', 40, 170, 'ya', 567, '2', 'sudah'),
(37, 'Programming5', 'lompat', 'Sudah Verifikasi', 'Sudah Diperiksa', 40, 171, 'ya', 800, '1', 'sudah');

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
(30, 'Sastra1', 'Sastra', 'Ini lomba sastra', 'Sastra1', 'Sastra1', 'Sastra1', '2022-06-05', '2022-06-22', '2022-06-25', 'IMG_5629.JPG', 'Sastra1', '50000', '10000', 'Sastra1', 26, 'belum'),
(31, 'Sastra2', '1', 'Sastra2', 'Sastra2', 'Sastra2', 'Sastra2', '2022-06-21', '2022-06-17', '2022-07-01', 'stupid.png', 'Sastra2', '100000', '', 'Sastra2', 26, 'sudah'),
(33, 'Sastra3', '1', 'Sastra3', 'Sastra3', 'Sastra3', 'Sastra3', '2022-06-29', '2022-06-22', '2022-06-23', 'stupid.png', 'Sastra3', '100000', '', 'Sastra3', 26, 'sudah'),
(34, 'Sastra4', '1', 'Sastra4', 'Sastra4', 'Sastra4', 'Sastra4', '2022-07-07', '2022-06-29', '2022-06-30', 'stupid.png', 'Sastra4', '100000', '', 'Sastra4', 26, 'belum'),
(35, 'Sastra5', '1', 'Sastra5', 'Sastra5', 'Sastra5', 'Sastra5', '2022-06-21', '2022-06-30', '2022-07-01', 'stupid.png', 'Sastra5', '100000', '100000', 'Sastra5', 26, 'belum'),
(36, 'Programming1', '2', 'Programming1', 'Programming1', 'Programming1', 'Programming1', '2022-06-15', '2022-06-23', '2022-07-08', 'stupid.png', 'Programming1', '100000', '', 'Programming1', 26, 'belum'),
(37, 'Programming2', '2', 'Programming2', 'Programming2', 'Programming2', 'Programming2', '2022-06-23', '2022-06-30', '2022-07-08', 'stupid.png', 'Programming2', '100000', '100000', 'Programming2', 26, 'belum'),
(39, 'Programming4', '2', 'Programming4', 'Programming4', 'Programming4', 'Programming4', '2022-06-09', '2022-06-16', '2022-06-24', 'stupid.png', 'Programming4', '100000', '', 'Programming4', 26, 'belum'),
(40, 'Programming5', '2', 'Programming5', 'Programming5', 'Programming5', 'Programming5', '2022-06-08', '2022-06-23', '2022-06-25', 'stupid.png', 'Programming5', '100000', '', 'Programming5', 26, 'sudah'),
(41, 'Seni1', '3', 'Seni1', 'Seni1', 'Seni1', 'Seni1', '2022-06-24', '2022-06-09', '2022-06-16', 'stupid.png', 'Seni1', '100000', '', 'Seni1', 26, 'belum'),
(42, 'Seni2', '3', 'Seni2', 'Seni2', 'Seni2', 'Seni2', '2022-06-16', '2022-06-23', '2022-06-22', 'stupid.png', 'Seni2', '100000', '', 'Seni2', 26, 'belum'),
(43, 'Seni3', '3', 'Seni3', 'Seni3', 'Seni3', 'Seni3', '2022-06-23', '2022-06-18', '2022-06-24', 'stupid.png', 'Seni3', '100000', '', 'Seni3', 26, 'belum'),
(44, 'Seni4', '3', 'Seni4', 'Seni4', 'Seni4', 'Seni4', '2022-06-22', '2022-06-23', '2022-07-01', 'stupid.png', 'Seni4', '100000', '100000', 'Seni4', 26, 'belum'),
(45, 'Seni5', '3', 'Seni5', 'Seni5', 'Seni5', 'Seni5', '2022-06-15', '2022-06-17', '2022-06-13', 'stupid.png', 'Seni5', '100000', '', 'Seni5', 26, 'belum'),
(46, 'Sastra6', '1', 'Sastra6', 'Sastra6', 'Sastra6', 'Sastra6', '2022-06-22', '2022-06-30', '2022-06-18', 'stupid.png', 'Sastra6', '100000', '', 'Sastra6', 26, 'belum'),
(47, 'Sastra7', '1', 'Sastra7', 'Sastra7', 'Sastra7', 'Sastra7', '2022-06-23', '2022-06-23', '2022-06-18', 'stupid.png', 'Sastra7', '100000', '', 'Sastra7', 26, 'belum'),
(48, 'Ini lomba apa', '1', 'ga jelas', 'gatau', 'bebas', 'kepo', '2022-06-10', '2022-06-17', '2022-06-19', 'stupid.png', 'link', '100000', '50000', 'link', 26, 'belum'),
(52, 'hehe', '1', 'pp', 'p', 'p', 'p', '2022-10-12', '2022-10-12', '2022-10-12', '1654493559_67470a9efaced4f3a953.jpg', 'p', 'p', 'p', 'p', 34, 'belum'),
(53, 'nama', '3', 'deskripsi', 'gatau', 'bebas', 'kepo', '2022-12-05', '2022-12-10', '2022-12-12', '1654494930_4c709f488411ad5a5784.jpg', 'p', '100000', '10000', 'link', 34, 'belum'),
(54, 'Bahasa C', '2', 'Bahasa C', 'siapa', 'apa', 'gatau', '2022-12-10', '2022-12-10', '2022-12-10', '1654597743_6f145ee47865e100e269.jpg', 'link', '100000', '10000', 'link', 26, 'belum');

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
(153, 'Bebek1@gmail.com', 33, 26, 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Bebek1', 'Sudah Verifikasi', 'Bebek', 'Bebek', 'ya', 'Bebek', 'Bebek', 'Bebek', 'Bebek', 'Bebek', 980, '1'),
(154, 'Bebek2@gmail.com', 33, 26, 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Bebek2', 'Sudah Verifikasi', 'Bebek', 'Bebek', 'ya', 'Bebek', 'Bebek', 'Bebek', 'Bebek', 'Bebek', 999, '2'),
(155, 'Bebek3@gmail.com', 33, 26, 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Bebek3', 'Sudah Verifikasi', 'Bebek', 'Bebek', 'ya', 'Bebek', 'Bebek', 'Bebek', 'Bebek', 'Bebek', NULL, '3'),
(156, 'Bebek4@gmail.com', 33, 26, 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Bebek4', 'Sudah Verifikasi', 'Bebek', 'Bebek', 'ya', 'Bebek', 'Bebek', 'Bebek', 'Bebek', 'Bebek', NULL, NULL),
(157, 'Bebek5@gamicl.com', 33, 26, 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Bebek5', 'Sudah Verifikasi', 'Bebek', 'Bebek', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(158, 'CeritanyaTim1@gmail.com', 31, 26, 'CeritanyaTim1', 'CeritanyaTim1', 'CeritanyaTim1', 'CeritanyaTim1', 'CeritanyaTim1', 'CeritanyaTim1', 'CeritanyaTim1', 'CeritanyaTim1', 'CeritanyaTim1', 'CeritanyaTim1', 'CeritanyaTim1', 'CeritanyaTim1', 'CeritanyaTim1', '', '', 'CeritanyaTim1', 'Sudah Verifikasi', 'Tim1', 'Tim1', 'ya', 'Tim1', 'Tim1', 'Tim1', 'Tim1', 'Tim1', 1000, '1'),
(159, 'CeritanyaTim2@gmail.com', 31, 26, 'CeritanyaTim2', 'CeritanyaTim2', 'CeritanyaTim2', 'CeritanyaTim2', 'CeritanyaTim2', 'CeritanyaTim2', 'CeritanyaTim2', 'CeritanyaTim2', 'CeritanyaTim2', 'CeritanyaTim2', 'CeritanyaTim2', 'CeritanyaTim2', 'CeritanyaTim2', 'CeritanyaTim2', 'CeritanyaTim2', 'CeritanyaTim2', 'Sudah Verifikasi', 'Tim1', 'Tim1', 'ya', 'Tim2', 'Tim2', 'Tim2', 'Tim2', 'Tim2', 999, '2'),
(160, 'CeritanyaTim3@gmail.com', 31, 26, 'CeritanyaTim3', 'CeritanyaTim3', 'CeritanyaTim3', 'CeritanyaTim3', 'CeritanyaTim3', 'CeritanyaTim3', 'CeritanyaTim3', 'CeritanyaTim3', 'CeritanyaTim3', 'CeritanyaTim3', 'CeritanyaTim3', 'CeritanyaTim3', 'CeritanyaTim3', 'CeritanyaTim3', 'CeritanyaTim3', 'CeritanyaTim3', 'Sudah Verifikasi', 'Tim1', 'Tim1', 'ya', 'Tim3', 'Tim3', 'Tim3', 'Tim3', 'Tim3', 998, '3'),
(161, 'CeritanyaTim4@gmai.com', 31, 26, 'CeritanyaTim4', 'CeritanyaTim4', 'CeritanyaTim4', 'CeritanyaTim4', 'CeritanyaTim4', 'CeritanyaTim4', 'CeritanyaTim4', 'CeritanyaTim4', 'CeritanyaTim4', 'CeritanyaTim4', 'CeritanyaTim4', 'CeritanyaTim4', 'CeritanyaTim4', 'CeritanyaTim4', 'CeritanyaTim4', 'CeritanyaTim4', 'Sudah Verifikasi', 'Tim4', 'Tim4', 'ya', 'Tim4', 'Tim4', 'Tim4', 'Tim4', 'Tim4', 996, NULL),
(162, 'CeritanyaTim5@gmail.com', 31, 26, 'CeritanyaTim5', 'CeritanyaTim5', 'CeritanyaTim5', 'CeritanyaTim5', 'CeritanyaTim5', 'CeritanyaTim5', 'CeritanyaTim5', 'CeritanyaTim5', 'CeritanyaTim5', 'CeritanyaTim5', 'CeritanyaTim5', 'CeritanyaTim5', 'CeritanyaTim5', 'CeritanyaTim5', 'CeritanyaTim5', 'CeritanyaTim5', 'Sudah Verifikasi', 'Tim5', 'Tim5', NULL, '', NULL, NULL, NULL, NULL, 995, NULL),
(163, 'CeritanyaTim6@gmail.com', 31, 26, 'CeritanyaTim6', 'CeritanyaTim6', 'CeritanyaTim6', 'CeritanyaTim6', 'CeritanyaTim6', 'CeritanyaTim6', 'CeritanyaTim6', 'CeritanyaTim6', 'CeritanyaTim6', 'CeritanyaTim6', 'CeritanyaTim6', 'CeritanyaTim6', 'CeritanyaTim6', 'CeritanyaTim6', 'CeritanyaTim6', 'CeritanyaTim6', 'Sudah Verifikasi', 'Tim6', 'Tim6', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(164, 'CeritanyaTim7@gmail.com', 31, 26, 'CeritanyaTim7', 'CeritanyaTim7', 'CeritanyaTim7', 'CeritanyaTim7', 'CeritanyaTim7', 'CeritanyaTim7', 'CeritanyaTim7', 'CeritanyaTim7', 'CeritanyaTim7', 'CeritanyaTim7', 'CeritanyaTim7', 'CeritanyaTim7', 'CeritanyaTim7', 'CeritanyaTim7', 'CeritanyaTim7', 'CeritanyaTim7', 'Gagal Verifikasi', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(169, 'inooo@gmail.com', 40, 36, 'abc', 'sekolah', 'Inoo Kei', '1234', 'wa.me/', '0909', 'abc', '', '', '', '', '', '', '', '', 'whatsapp.com', 'Sudah Verifikasi', 'instagram.com', 'drive.google.com', 'ya', 'ss', '', '', '', '', 689, '3'),
(170, 'yurii@gmail.com', 40, 35, 'haha', 'janis', 'chinen', 'pppp', 'wa.me/', 'ppp', 'abc', '', '', '', '', '', '', '', '', 'whatsapp.com', 'Sudah Verifikasi', 'instagram.com', 'drive.google.com', 'ya', 'link', '', '', '', '', 567, '2'),
(171, 'lompat@gmail.com', 40, 37, 'lompat', 'janis', 'gatauu', '1234', 'wa.me/', '1234', 'abc', '', '', '', '', '', '', '', '', 'whatsapp.com', 'Sudah Verifikasi', 'instagram.com', 'drive.google.com', 'ya', 'link', '', '', '', '', 800, '1');

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
(26, 'user@gmail.com', 'user', 'user', 'admin-lomba', NULL),
(27, 'staffsastra1@gmail.com', 'staffsastra1', 'staffsastra11', 'Staff Juri', 30),
(28, 'staffsastra2@gmail.com', 'staffsastra2', 'staffsastra2', 'Staff Konten', 30),
(29, 'staffsastra3@gmail.com', 'staffsastra3', 'staffsastra3', 'Staff Peserta', 30),
(30, 'staffsastra4@gmail.com', 'staffsastra4', 'staffsastra4', 'Staff Berkas', 30),
(31, 'staffsastra5@gmail.com', 'staffsastra5', 'staffsastra5', 'Staff Keuangan', 30),
(32, 'bambang@gmail.com', 'bambang', 'bambang', 'Staff Juri', 31),
(35, 'yurii@gmail.com', 'sabonen', 'chinenyuri', 'user', NULL),
(36, 'inooo@gmail.com', 'inoteri', 'inookei', 'user', NULL),
(37, 'lompat@gmail.com', 'lompat', 'heysayjump', 'user', NULL);

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
  MODIFY `id_lomba` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id_tim` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
