-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2021 at 04:10 PM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga` int NOT NULL,
  `stok` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `stok`) VALUES
('089686596427', 'Lays', 2000, 6),
('089686598018', 'Chitato', 2000, 11),
('089686604443', 'Jetz', 1000, 1),
('8886013281481', 'French Fries', 2500, 5),
('8990800021362', 'Alpenliebe', 500, 11),
('8991002103238', 'Good day Mocacinno', 1000, 27),
('8991002103436', 'Good day Coolin', 1000, 2),
('8991102385114', 'Tango Vanilla', 500, 26),
('8991102714495', 'Tango Drink', 5500, 2),
('8991102986694', 'Walut', 1000, 3),
('8991102989428', 'Tango Wafer ', 1000, 3),
('8992772585026', 'Adem Sari ', 6500, 2),
('8992775110171', 'Kacang Garuda', 1000, 35),
('8992933256116', 'Pop Ice Avocado', 1000, 5),
('8993004785139', 'Smax Ring', 1000, 0),
('8993175531863', 'Nabati 500', 500, 12),
('8993175541626', 'Nabati Richesee', 1000, 13),
('8993175545006', 'Nabati pink lava', 1000, 33),
('8994075230399', 'Momogi Jagung', 500, 1),
('8994075230412', 'Momogi Keju', 500, 30),
('8994075230870', 'Momogi Fruit', 500, 15),
('8994755030677', 'Good Time', 7500, 2),
('8996001600153', 'Kopikap', 1000, 7),
('8997004302143', 'Rin-Bee', 1000, 13),
('8997004307230', 'Pillows Ubi', 500, 2),
('8997025910570', 'Apilo Wafer Stroberi', 2500, 3),
('8997025910723', 'Apilo Wafer Vanila', 2500, 1),
('8997035563414', 'Pocari Sweat', 6500, 1),
('8997878001357', 'Milkita Stroberi', 500, 13),
('8997878001364', 'Milkita Coklat', 500, 7),
('8997878001371', 'Milkita Melon', 500, 5),
('8998009010552', 'Ultra Vanilla', 4500, 1),
('8998009010569', 'Ultra Coklat', 4500, 1),
('8998009010576', 'Ultra Stroberi', 4500, 1),
('8998009040023', 'Teh Kotak', 3500, 6),
('8998866201445', 'Pota-Bee', 2000, 2),
('8998866610377', 'Iso+', 3000, 1),
('8999999000165', 'Taro', 1000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int NOT NULL,
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `harga_barang` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int NOT NULL,
  `nama_pembeli` varchar(30) NOT NULL,
  `nama_barang` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `harga` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL,
  `at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `nama_pembeli`, `nama_barang`, `harga`, `jumlah`, `total`, `at`) VALUES
(1, 'Ernadel', 'Smax Ring', 1000, 1, 1000, '2021-04-30 09:15:44'),
(2, 'Ernadel', 'Momogi Fruit', 500, 1, 500, '2021-04-30 09:15:44'),
(3, 'Aldo', 'Teh Kotak', 3500, 1, 3500, '2021-04-30 10:49:00'),
(4, 'Aldo', 'Ultra Stroberi', 4500, 1, 4500, '2021-04-30 10:49:00'),
(5, 'Johan', 'Kopikap', 1000, 2, 2000, '2021-05-01 08:27:15'),
(6, 'ester l', 'Good day Mocacinno', 1000, 3, 3000, '2021-05-01 08:40:39'),
(7, 'Aldo', 'Teh Kotak', 3500, 1, 3500, '2021-05-01 08:51:34'),
(11, 'max', 'Lays', 2000, 3, 6000, '2021-05-02 05:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int NOT NULL,
  `tgl_bayar` date NOT NULL,
  `total_bayar` int NOT NULL,
  `id_transaksi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int NOT NULL,
  `nama_pembeli` varchar(30) NOT NULL,
  `jk` char(1) NOT NULL,
  `no_telp` char(14) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `id_pembeli` int NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `id_barang` (`nama_barang`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
