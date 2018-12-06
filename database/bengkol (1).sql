-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2018 at 02:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkol`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` varchar(10) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam_kerja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `jam_kerja`) VALUES
('1', 'Senin-Jumat', '07.00-15.00'),
('2', 'Kamis', 'Libur');

-- --------------------------------------------------------

--
-- Table structure for table `tb_servis`
--

CREATE TABLE `tb_servis` (
  `id_servis` varchar(10) NOT NULL,
  `nama_jasa` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `harga_jasa` double NOT NULL,
  `jasa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_servis`
--

INSERT INTO `tb_servis` (`id_servis`, `nama_jasa`, `keterangan`, `harga_jasa`, `jasa`) VALUES
('1', 'Ganti oli', '-', 15000, 'Servis Ringan');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `nama_bengkel` varchar(50) DEFAULT NULL,
  `nama_pemilimk` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `no_telepon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`nama_bengkel`, `nama_pemilimk`, `deskripsi`, `no_telepon`) VALUES
('Bengkol', 'Arif abi bin sandis morgan', 'Bengkol adalah merupakan sebuah', '08123456789');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `username`, `password`, `level`) VALUES
(4, 'Morgan Ardianto', 'Perum Gn Batu F20 Sumbersari', 'morganteng98', '0fa1daa3c9d44097872c55d9c720553f', 'admin'),
(5, 'Sandistya Diski', 'Jl keramat Sumbersari', 'sandis', 'sandis123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_servis`
--
ALTER TABLE `tb_servis`
  ADD PRIMARY KEY (`id_servis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
