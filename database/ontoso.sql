-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 02:47 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbd_tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE `agen` (
  `id_agen` varchar(11) NOT NULL,
  `nama_agen` varchar(50) NOT NULL,
  `wilayah_agen` varchar(20) NOT NULL,
  `agensi` varchar(25) NOT NULL,
  `perkenalan` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `properti_agen`
--

CREATE TABLE `properti_agen` (
  `id_properti` varchar(11) NOT NULL,
  `nama_properti` varchar(20) NOT NULL,
  `jenis_properti` varchar(20) NOT NULL,
  `dijual_disewa` varchar(11) NOT NULL,
  `kota_properti` varchar(20) NOT NULL,
  `alamat_properti` varchar(50) NOT NULL,
  `deskripsi_properti` varchar(255) NOT NULL,
  `luas_min` double NOT NULL,
  `luas_max` double NOT NULL,
  `kamar_tidur` int(11) NOT NULL,
  `kamar_mandi` int(11) NOT NULL,
  `garasi` int(11) NOT NULL,
  `foto_1` varchar(11) NOT NULL,
  `foto_2` varchar(11) NOT NULL,
  `foto_3` varchar(11) NOT NULL,
  `id_agen` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id_agen`);

--
-- Indexes for table `properti_agen`
--
ALTER TABLE `properti_agen`
  ADD PRIMARY KEY (`id_properti`),
  ADD KEY `idx_agen` (`id_agen`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `properti_agen`
--
ALTER TABLE `properti_agen`
  ADD CONSTRAINT `fk_id_agen` FOREIGN KEY (`id_agen`) REFERENCES `agen` (`id_agen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
