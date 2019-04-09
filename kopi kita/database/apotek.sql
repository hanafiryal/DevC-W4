-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 06:03 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `bentuk_obat`
--

CREATE TABLE `bentuk_obat` (
  `kd_bentuk` char(5) NOT NULL,
  `bentuk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `kd_dokter` char(5) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita','','') NOT NULL,
  `ket` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_obat`
--

CREATE TABLE `jenis_obat` (
  `kd_jenis` char(5) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kd_obat` char(5) NOT NULL,
  `nama_obat` varchar(20) NOT NULL,
  `kd_jenis` char(5) NOT NULL,
  `kd_bentuk` char(2) NOT NULL,
  `harga` int(8) NOT NULL,
  `stok` int(8) NOT NULL,
  `kd_supplier` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `kd_pasien` char(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita','','') NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `kd_pegawai` char(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita','','') NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `no` int(10) NOT NULL,
  `kd_beli` char(5) NOT NULL,
  `tgl_beli` date NOT NULL,
  `kd_pasien` char(5) NOT NULL,
  `kd_obat` char(5) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total_bayar` int(10) NOT NULL,
  `kd_pegawai` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `no` int(10) NOT NULL,
  `kd_resep` char(5) NOT NULL,
  `kd_pasien` char(5) NOT NULL,
  `keluhan` varchar(15) NOT NULL,
  `kd_obat` char(5) NOT NULL,
  `kd_dokter` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `kd_supplier` char(5) NOT NULL,
  `nama_supplier` varchar(15) NOT NULL,
  `alamat` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kd_dokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kd_obat`),
  ADD KEY `kd_supplier` (`kd_supplier`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`kd_pasien`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`kd_pegawai`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`no`),
  ADD KEY `kd_dokter` (`kd_dokter`),
  ADD KEY `kd_obat` (`kd_obat`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kd_supplier`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `obat_ibfk_1` FOREIGN KEY (`kd_supplier`) REFERENCES `supplier` (`kd_supplier`);

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_ibfk_1` FOREIGN KEY (`kd_dokter`) REFERENCES `dokter` (`kd_dokter`),
  ADD CONSTRAINT `resep_ibfk_2` FOREIGN KEY (`kd_obat`) REFERENCES `obat` (`kd_obat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
