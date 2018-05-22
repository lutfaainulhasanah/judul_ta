-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 09:04 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `judul_ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `judul`
--

CREATE TABLE `judul` (
  `id_judul` varchar(5) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `id_gol` varchar(5) NOT NULL,
  `id_prodi` varchar(5) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `judul_dosen` varchar(50) NOT NULL,
  `ringkasan` text NOT NULL,
  `tugas` varchar(100) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `judul`
--
ALTER TABLE `judul`
  ADD PRIMARY KEY (`id_judul`),
  ADD KEY `nim` (`nim`,`id_gol`,`id_prodi`,`nip`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_gol` (`id_gol`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `judul`
--
ALTER TABLE `judul`
  ADD CONSTRAINT `judul_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`),
  ADD CONSTRAINT `judul_ibfk_2` FOREIGN KEY (`id_gol`) REFERENCES `golongan` (`id_gol`),
  ADD CONSTRAINT `judul_ibfk_3` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`),
  ADD CONSTRAINT `judul_ibfk_4` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
