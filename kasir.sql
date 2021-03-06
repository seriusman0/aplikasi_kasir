-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2021 at 03:57 PM
-- Server version: 8.0.25-0ubuntu0.20.04.1
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
  `stok` int NOT NULL,
  `at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `stok`, `at`) VALUES
('089686596427', 'Lays', 2000, -28, '2021-05-16 04:46:55'),
('089686598018', 'Chitato', 2000, 11, '2021-05-16 04:46:55'),
('089686604443', 'Jetz', 1000, 1, '2021-05-16 04:46:55'),
('10', 'd', 1, 28, '2021-05-16 04:52:09'),
('829951283300233', 'baru', 5000, 10, '2021-05-16 04:49:02'),
('8886013281481', 'French Fries', 2500, 5, '2021-05-16 04:46:55'),
('8990800021362', 'Alpenliebe', 500, 11, '2021-05-16 04:46:55'),
('8991002103238', 'Good day Mocacinno', 1000, 25, '2021-05-16 04:46:55'),
('8991002103436', 'Good day Coolin', 1000, 2, '2021-05-16 04:46:55'),
('8991102385114', 'Tango Vanilla', 500, 26, '2021-05-16 04:46:55'),
('8991102714495', 'Tango Drink', 5500, 2, '2021-05-16 04:46:55'),
('8991102986694', 'Walut', 1000, 3, '2021-05-16 04:46:55'),
('8991102989428', 'Tango Wafer ', 1000, 3, '2021-05-16 04:46:55'),
('8992772585026', 'Adem Sari ', 6500, 2, '2021-05-16 04:46:55'),
('8992775110171', 'Kacang Garuda', 1000, 35, '2021-05-16 04:46:55'),
('8992933256116', 'Pop Ice Avocado', 1000, 5, '2021-05-16 04:46:55'),
('8993004785139', 'Smax Ring', 1000, 0, '2021-05-16 04:46:55'),
('8993175531863', 'Nabati 500', 500, 12, '2021-05-16 04:46:55'),
('8993175541626', 'Nabati Richesee', 1000, 13, '2021-05-16 04:46:55'),
('8993175545006', 'Nabati pink lava', 1000, 33, '2021-05-16 04:46:55'),
('8994075230399', 'Momogi Jagung', 500, 1, '2021-05-16 04:46:55'),
('8994075230412', 'Momogi Keju', 500, 30, '2021-05-16 04:46:55'),
('8994075230870', 'Momogi Fruit', 500, 15, '2021-05-16 04:46:55'),
('8994755030677', 'Good Time', 7500, 2, '2021-05-16 04:46:55'),
('89951283300233', 'Bandrek', 5000, 10, '2021-05-16 04:47:13'),
('8996001600153', 'Kopikap', 1000, 7, '2021-05-16 04:46:55'),
('8997004302143', 'Rin-Bee', 1000, 13, '2021-05-16 04:46:55'),
('8997004307230', 'Pillows Ubi', 500, 2, '2021-05-16 04:46:55'),
('8997025910570', 'Apilo Wafer Stroberi', 2500, 3, '2021-05-16 04:46:55'),
('8997025910723', 'Apilo Wafer Vanila', 2500, 1, '2021-05-16 04:46:55'),
('8997035563414', 'Pocari Sweat', 6500, 1, '2021-05-16 04:46:55'),
('8997878001357', 'Milkita Stroberi', 500, 13, '2021-05-16 04:46:55'),
('8997878001364', 'Milkita Coklat', 500, 7, '2021-05-16 04:46:55'),
('8997878001371', 'Milkita Melon', 500, 5, '2021-05-16 04:46:55'),
('8998009010552', 'Ultra Vanilla', 4500, 1, '2021-05-16 04:46:55'),
('8998009010569', 'Ultra Coklat', 4500, 1, '2021-05-16 04:46:55'),
('8998009010576', 'Ultra Stroberi', 4500, 1, '2021-05-16 04:46:55'),
('8998009040023', 'Teh Kotak', 3500, 6, '2021-05-16 04:46:55'),
('8998866201445', 'Pota-Bee', 2000, 2, '2021-05-16 04:46:55'),
('8998866610377', 'Iso+', 3000, 1, '2021-05-16 04:46:55'),
('8999999000165', 'Taro', 1000, 3, '2021-05-16 04:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int NOT NULL,
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `harga_barang` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int NOT NULL,
  `nama_pembeli` varchar(30) NOT NULL,
  `nama_barang` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `harga` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL,
  `at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int NOT NULL,
  `tgl_bayar` date NOT NULL,
  `total_bayar` int NOT NULL,
  `id_transaksi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  MODIFY `id_cart` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int NOT NULL AUTO_INCREMENT;

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
