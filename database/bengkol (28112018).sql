-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 01:30 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

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
  `id_jadwal` int(3) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam_kerja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(6) NOT NULL,
  `nama_brg` varchar(50) DEFAULT NULL,
  `ket_brg` text NOT NULL,
  `harga_beli` int(10) NOT NULL,
  `harga_jual` int(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `kode_ktgr` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `ket_brg`, `harga_beli`, `harga_jual`, `jumlah`, `satuan`, `kode_ktgr`) VALUES
(56, 'aki', 'baa', 12, 2, 1, '12', 21),
(57, 'aki', 'baa', 12, 2, 1, '2', 22),
(58, 'aki', 'baa', 12, 2, 1, '12', 21);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kode_ktgr` int(6) NOT NULL,
  `nama_ktgr` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`kode_ktgr`, `nama_ktgr`) VALUES
(21, 'Aku'),
(22, 'Spion');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kendaraan`
--

CREATE TABLE `tb_kendaraan` (
  `no_polisi` int(5) NOT NULL,
  `nama_knd` varchar(30) DEFAULT NULL,
  `jenis_knd` varchar(3) DEFAULT NULL,
  `merk_knd` varchar(30) DEFAULT NULL,
  `id_plg` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mekanik`
--

CREATE TABLE `tb_mekanik` (
  `id_mekanik` int(7) NOT NULL,
  `nama_mekanik` varchar(50) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mekanik`
--

INSERT INTO `tb_mekanik` (`id_mekanik`, `nama_mekanik`, `no_telepon`) VALUES
(1018, 'Boy 134', '089123456'),
(1019, 'Abi', '08912345');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_plg` int(5) NOT NULL,
  `nama_plg` varchar(30) DEFAULT NULL,
  `nama_pengguna` varchar(20) DEFAULT NULL,
  `kata_sandi` varchar(30) DEFAULT NULL,
  `email_plg` varchar(30) DEFAULT NULL,
  `notelp_plg` varchar(20) DEFAULT NULL,
  `alamat_plg` text,
  `jk_plg` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_servis`
--

CREATE TABLE `tb_servis` (
  `id_servis` int(10) NOT NULL,
  `nama_jasa` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `harga_jasa` int(10) NOT NULL,
  `jasa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_servis`
--

INSERT INTO `tb_servis` (`id_servis`, `nama_jasa`, `keterangan`, `harga_jasa`, `jasa`) VALUES
(7, 'Ganti oli', '-', 12000, 'Servis Ringan Berat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suplier`
--

CREATE TABLE `tb_suplier` (
  `id_suplier` int(6) NOT NULL,
  `nama_suplier` varchar(30) NOT NULL,
  `alamat_suplier` varchar(100) DEFAULT NULL,
  `notelp_suplier` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suplier`
--

INSERT INTO `tb_suplier` (`id_suplier`, `nama_suplier`, `alamat_suplier`, `notelp_suplier`) VALUES
(1010, 'Sandistya Diski A', 'Keramat 123', '08123412');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id_ttg` int(3) NOT NULL,
  `nama_bengkel` varchar(50) DEFAULT NULL,
  `nama_pemilimk` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `no_telepon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id_ttg`, `nama_bengkel`, `nama_pemilimk`, `deskripsi`, `no_telepon`) VALUES
(1, 'Bengkel Online', 'Arifabisandismorgan', 'Bengkol merupakan sebuah website bengkel online yang melayani antrian dan pemesanan sparepart', '085330434053');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`),
  ADD KEY `kode_ktgr` (`kode_ktgr`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kode_ktgr`);

--
-- Indexes for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD PRIMARY KEY (`no_polisi`),
  ADD KEY `id_plg` (`id_plg`);

--
-- Indexes for table `tb_mekanik`
--
ALTER TABLE `tb_mekanik`
  ADD PRIMARY KEY (`id_mekanik`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_plg`);

--
-- Indexes for table `tb_servis`
--
ALTER TABLE `tb_servis`
  ADD PRIMARY KEY (`id_servis`);

--
-- Indexes for table `tb_suplier`
--
ALTER TABLE `tb_suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_ttg`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kode_ktgr` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  MODIFY `no_polisi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_mekanik`
--
ALTER TABLE `tb_mekanik`
  MODIFY `id_mekanik` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1020;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_plg` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_servis`
--
ALTER TABLE `tb_servis`
  MODIFY `id_servis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_suplier`
--
ALTER TABLE `tb_suplier`
  MODIFY `id_suplier` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_ttg` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `kode_ktgr` FOREIGN KEY (`kode_ktgr`) REFERENCES `tb_kategori` (`kode_ktgr`);

--
-- Constraints for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD CONSTRAINT `id_plg` FOREIGN KEY (`id_plg`) REFERENCES `tb_pelanggan` (`id_plg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
