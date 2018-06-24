-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2018 at 03:36 AM
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
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(25) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `id_prodi` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama_dosen`, `id_prodi`, `password`, `status`) VALUES
('197008311998031001', 'Moh. Munih Dian W, S.Kom.,M.T.', 'P003', '197008311998031001', 'Dosen'),
('197009292003121001', 'Yogiswara, S.T., M.T.', 'P001', '197009292003121001', 'Dosen'),
('197104082001121003', 'Wahyu Kurnia Dewanto, S.Kom., M.T.', 'P002', '197104082001121003', 'Dosen'),
('197111151998021001', 'Adi Heru Utomo, S.Kom., M.Kom.', 'P002', '197111151998021001', 'Dosen'),
('197709292005011003', 'Didit Rahmat Hartadi S.Kom., M.T.', 'P002', '197709292005011003', 'Dosen'),
('197808172003121005', 'Agus Hariyanto, S.T., M.Kom.', 'P001', '197808172003121005', 'Dosen'),
('197808192005022001', 'Ika Widiastuti, S.ST., M.T.', 'P002', '197808192005022001', 'Dosen'),
('197809082005011001', 'Denny Wijanarko, S.T.,M.T.', 'P001', '197809082005011001', 'Dosen'),
('198005172008121002', 'Dwi Putro Sarwo S, S.Kom., M.Kom.', 'P002', '198005172008121002', 'Dosen'),
('198012122005011001', 'Prawidya Destarianto, S.Kom.,M.T.', 'P003', '198012122005011001', 'Dosen'),
('198106152006041002', 'Syamsul Arifin, S.Kom., M.Cs.', 'P002', '198106152006041002', 'Reviewer'),
('198302032006041003', 'Hendra Yufit Riskiawan, S.Kom., M.Cs.', 'P002', '198302032006041003', 'Dosen'),
('198606092008122004', 'Nanik Anita M. ,S.ST.,M.T.', 'P002', '198606092008122004', 'Dosen'),
('198608022015042002', 'Ratih Ayuninghemi, S.ST., M.Kom.', 'P003', '198608022015042002', 'Dosen'),
('198903292015031001', 'Taufiq Rizaldi, S.ST.,M.T.', 'P002', '198903292015031001', 'Koordinator'),
('198907102015091001', 'Ery Setiawan Julev Atmaji, S.Kom.,M.Cs.', 'P003', '198907102015091001', 'Dosen'),
('199002272018032001', 'Trismayanti Dwi P, S.Kom., M,Cs.', 'P003', '199002272018032001', 'Dosen');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_gol` varchar(5) NOT NULL,
  `golongan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_gol`, `golongan`) VALUES
('G001', 'A'),
('G002', 'B'),
('G003', 'C'),
('G004', 'D'),
('G005', 'E');

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
  `ringkasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judul`
--

INSERT INTO `judul` (`id_judul`, `nim`, `id_gol`, `id_prodi`, `nip`, `judul`, `judul_dosen`, `ringkasan`) VALUES
('1', 'E31150493', 'G001', 'P001', '197008311998031001', 'a', 'a', 'kiki');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `id_gol` varchar(10) NOT NULL,
  `id_prodi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mhs`, `id_gol`, `id_prodi`) VALUES
('E31150493', 'ARQISTA DWI SEPTYA MUTIARA', 'G004', 'P002'),
('E31151409', 'Edho Dickey Pharanza Junior', 'G004', 'P002'),
('E31151415', 'Denny Setiady Prabowo', 'G004', 'P002'),
('E31161567', 'Lutfa Ainul Hasanah', 'G004', 'P002'),
('E31161636', 'Akhyar Nur Rahmadhan', 'G004', 'P002'),
('E31161642', 'Moh Azman', 'G004', 'P002'),
('E31161652', 'Decha Putri Landungsari', 'G004', 'P002'),
('E31161689', 'Abdillah Syaifuddin Basarsah', 'G004', 'P002'),
('E31161703', 'Lilik Widayanti', 'G004', 'P002'),
('E31161707', 'Nurul Lailatul Jannah', 'G004', 'P002'),
('E31161709', 'Galung Reinan Artanca', 'G004', 'P002'),
('E31161719', 'Reza Septia Safirah', 'G004', 'P002'),
('E31161776', 'Wildan Faizal Imawan', 'G004', 'P002'),
('E31161812', 'Defredo Oyvind Yogaprawira', 'G004', 'P002'),
('E31161816', 'Dhimas Ulfa Lathifah', 'G004', 'P002'),
('E31161833', 'Ivanda Afrizal Aldifriansyah', 'G004', 'P002'),
('E31161956', 'Indah Nur Rizqi Rahmadani', 'G004', 'P002'),
('E31161985', 'Nanda Wyapeksa', 'G004', 'P002'),
('E31162023', 'Fadillah Sari', 'G004', 'P002'),
('E31162041', 'Fandi Ahmad Rifqi', 'G004', 'P002'),
('E31162061', 'Rifqi Widiarko', 'G004', 'P002'),
('E31162081', 'Nailes Tabuni', 'G004', 'P002'),
('E31162092', 'Khoirul Umam', 'G004', 'P002'),
('E31180001', 'Nariratih Anggraeni', 'G004', 'P002'),
('E31180039', 'Branjas Setianto Nugroho', 'G004', 'P002'),
('E31180040', 'Haries Gatot Andrianto', 'G004', 'P002');

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `id_penelitian` varchar(5) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `judul_penelitian` varchar(50) NOT NULL,
  `kuota` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` varchar(5) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `prodi`) VALUES
('P001', 'Teknik Komputer'),
('P002', 'Manajemen Informatika'),
('P003', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` varchar(5) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `id_prodi` varchar(5) NOT NULL,
  `id_gol` varchar(5) NOT NULL,
  `cover` text NOT NULL,
  `bab1` text NOT NULL,
  `bab2` text NOT NULL,
  `bab3` text NOT NULL,
  `pengajuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` enum('koordinator','reviewer','dosen','mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `status`) VALUES
('E31161567', 'E31161567', 'mahasiswa'),
('E31161652', 'E31161652', 'mahasiswa'),
('E31161816', 'E31161816', 'mahasiswa'),
('E31161956', 'E31161956', 'mahasiswa'),
('E31161985', 'E31161985', 'mahasiswa'),
('E31162023', 'E31162023', 'mahasiswa'),
('E31162041', 'E31162041', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_gol`);

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
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_prodi` (`id_prodi`),
  ADD KEY `id_gol` (`id_gol`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`),
  ADD KEY `nim` (`nim`),
  ADD KEY `id_prodi` (`id_prodi`),
  ADD KEY `id_gol` (`id_gol`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD KEY `nim` (`username`),
  ADD KEY `username` (`username`);

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

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_gol`) REFERENCES `golongan` (`id_gol`),
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`);

--
-- Constraints for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD CONSTRAINT `penelitian_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`);

--
-- Constraints for table `proposal`
--
ALTER TABLE `proposal`
  ADD CONSTRAINT `proposal_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proposal_ibfk_2` FOREIGN KEY (`id_gol`) REFERENCES `golongan` (`id_gol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proposal_ibfk_3` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`username`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
