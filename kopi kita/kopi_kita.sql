-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 03:31 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopi_kita`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` varchar(4) NOT NULL,
  `nama_karyawan` varchar(20) NOT NULL,
  `no_tlpn` varchar(12) NOT NULL,
  `alamat_karyawan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `no_tlpn`, `alamat_karyawan`) VALUES
('W001', 'Budi Anduk', '081346557388', 'Jalan indah'),
('W002', 'Susi susanti', '0812112355', 'jalan ruko baru'),
('W003', 'Hendi mulyawan', '085567544', 'jalan muda'),
('W004', 'Romadhon jaya', '087877877787', 'jalan naga'),
('W005', 'wanda hamida', '08765432133', 'Jalan Sampang'),
('W006', 'Indah Kalalo', '081228746584', 'Jalan salak'),
('W007', 'Dandi Hapsari', '081283743829', 'Jalan petir'),
('W008', 'Lucinta Luna', '087872837462', 'Jalan Bunga');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_supplier` varchar(4) NOT NULL,
  `kd_menu` varchar(5) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `Harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_supplier`, `kd_menu`, `nama_menu`, `Harga`) VALUES
('s001', 'k0001', 'cappuccino', 25000),
('s002', 'k0002', 'kopi luwak', 35000),
('s001', 'k0003', 'matcha latte', 40000),
('s003', 'k0004', 'caramel machiato', 40000),
('s004', 'k0005', 'mochaccino', 35000),
('s005', 'k0006', 'americano', 40000),
('s006', 'k0007', 'flat white', 45000),
('s002', 'k0008', 'expresso', 45000),
('s002', 'k0009', 'Affogato', 5000),
('s006', 'k0010', 'caramel latte', 26000),
('s006', 'k0012', 'Granolla', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `kd_pembeli` varchar(3) NOT NULL,
  `nama_pembeli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`kd_pembeli`, `nama_pembeli`) VALUES
('n01', 'hana'),
('n02', 'farah'),
('n03', 'errina'),
('n04', 'dandy'),
('n05', 'gabriel');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(4) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `no_tlpn` varchar(12) NOT NULL,
  `alamat_supplier` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `no_tlpn`, `alamat_supplier`) VALUES
('s001', 'PT Abadi Jaya', '0216319727', 'Jalan Suplir'),
('s002', 'PT Luwak White Coffee', '0226728821', 'Jalan Gatsu'),
('s003', 'PT Indofood', '03416415611', 'Jalan Garuda'),
('s004', 'PT Nestle', '02177766654', 'Jalan Tulip'),
('s005', 'PT Torabika', '02145436', 'Jalan Abadi'),
('s006', 'PT Kapal Api', '021888999', 'Jalan Mekar');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `tgl_beli` date DEFAULT NULL,
  `kd_transaksi` int(3) NOT NULL,
  `id_karyawan` varchar(4) NOT NULL,
  `kd_pembeli` varchar(3) NOT NULL,
  `kd_menu` varchar(5) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `harga` int(5) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`tgl_beli`, `kd_transaksi`, `id_karyawan`, `kd_pembeli`, `kd_menu`, `nama_menu`, `harga`, `jumlah_beli`, `total_bayar`) VALUES
('2018-05-02', 1, 'W001', 'n01', 'k0001', 'cappuccino', 20000, 1, 20000),
('2018-05-02', 2, 'W007', 'n04', 'k0006', 'americano', 40000, 3, 120000),
('2018-05-20', 3, 'W007', 'n04', 'k0001', 'cappuccino', 25000, 1, 25000),
('2018-05-20', 4, 'W007', 'n01', 'k0009', 'Affogato', 5000, 5, 25000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`kd_menu`),
  ADD KEY `id_PTpenerbit` (`id_supplier`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`kd_pembeli`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kd_transaksi`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `kd_pembeli` (`kd_pembeli`),
  ADD KEY `id_buku` (`kd_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kd_transaksi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kd_pembeli`) REFERENCES `pembeli` (`kd_pembeli`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`kd_menu`) REFERENCES `menu` (`kd_menu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
