-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 15 Mei 2018 pada 15.46
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `judul_ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `nip` varchar(25) NOT NULL,
  `nama_dosen` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE IF NOT EXISTS `golongan` (
  `id_gol` varchar(5) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  PRIMARY KEY (`id_gol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `judul`
--

CREATE TABLE IF NOT EXISTS `judul` (
  `id_judul` varchar(5) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `id_gol` varchar(5) NOT NULL,
  `id_prodi` varchar(5) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `judul_dosen` varchar(50) NOT NULL,
  `ringkasan` text NOT NULL,
  `tugas` varchar(100) NOT NULL,
  `catatan` text NOT NULL,
  PRIMARY KEY (`id_judul`),
  KEY `nim` (`nim`,`id_gol`,`id_prodi`,`nip`),
  KEY `nip` (`nip`),
  KEY `id_gol` (`id_gol`),
  KEY `id_prodi` (`id_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama_mhs` varchar(25) NOT NULL,
  `id_gol` varchar(10) NOT NULL,
  `id_prodi` varchar(25) NOT NULL,
  PRIMARY KEY (`nim`),
  KEY `id_prodi` (`id_prodi`),
  KEY `id_gol` (`id_gol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian`
--

CREATE TABLE IF NOT EXISTS `penelitian` (
  `id_penelitian` varchar(5) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `judul_penelitian` varchar(50) NOT NULL,
  `kuota` int(5) NOT NULL,
  PRIMARY KEY (`id_penelitian`),
  KEY `nip` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `id_prodi` varchar(5) NOT NULL,
  `prodi` varchar(15) NOT NULL,
  PRIMARY KEY (`id_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL,
  KEY `nim` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `status`) VALUES
('E31161567', 'lutfa', 'mahasiswa');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `judul`
--
ALTER TABLE `judul`
  ADD CONSTRAINT `judul_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`),
  ADD CONSTRAINT `judul_ibfk_2` FOREIGN KEY (`id_gol`) REFERENCES `golongan` (`id_gol`),
  ADD CONSTRAINT `judul_ibfk_3` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`),
  ADD CONSTRAINT `judul_ibfk_4` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_gol`) REFERENCES `golongan` (`id_gol`),
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`);

--
-- Ketidakleluasaan untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  ADD CONSTRAINT `penelitian_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
