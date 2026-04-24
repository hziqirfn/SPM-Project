-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2026 at 03:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenama`
--

CREATE TABLE `jenama` (
  `idJenama` int(11) NOT NULL,
  `namaJenama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenama`
--

INSERT INTO `jenama` (`idJenama`, `namaJenama`) VALUES
(27, 'PORSCHE'),
(28, 'KOENIGSEGG'),
(30, 'BUGATTI'),
(31, 'NISSAN'),
(32, 'LAMBORGHINI'),
(33, 'FORD'),
(34, 'MCLAREN'),
(35, 'DODGE');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idPengguna` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nomhp` varchar(12) DEFAULT NULL,
  `aras` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idPengguna`, `password`, `nama`, `nomhp`, `aras`) VALUES
('admin', '012345', 'OWNER', '0123456789', 'OWNER'),
('Chris', '123456', 'CHRIS', '123456', 'PENGGUNA'),
('Johns', '12345', 'JOHNS', '0123456', 'PENGGUNA');

-- --------------------------------------------------------

--
-- Table structure for table `pilih`
--

CREATE TABLE `pilih` (
  `idPilih` int(11) NOT NULL,
  `idPengguna` varchar(20) DEFAULT NULL,
  `idProduk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pilih`
--

INSERT INTO `pilih` (`idPilih`, `idPengguna`, `idProduk`) VALUES
(2, 'Johns', 12),
(4, 'Johns', 12),
(6, 'Johns', 13),
(7, 'Johns', 18),
(9, 'Johns', 17),
(12, 'Chris', 15),
(13, 'Chris', 13),
(14, 'Johns', 17),
(16, 'Johns', 12),
(17, 'Johns', 15),
(19, 'Johns', 13),
(20, 'Johns', 21),
(21, 'Johns', 21),
(22, 'Johns', 18),
(24, 'Johns', 15),
(26, 'admin', 33),
(27, 'admin', 18),
(29, 'Chris', 48),
(30, 'Chris', 45),
(31, 'Chris', 34),
(32, 'Chris', 39),
(33, 'Chris', 40),
(34, 'Chris', 39),
(35, 'Chris', 25),
(36, 'Chris', 23),
(37, 'Chris', 36),
(38, 'Chris', 54),
(39, 'Chris', 52),
(40, 'Chris', 33),
(41, 'Chris', 43),
(42, 'Chris', 53),
(43, 'Chris', 42),
(44, 'Chris', 41),
(45, 'Chris', 31),
(46, 'Johns', 54),
(47, 'Johns', 48),
(48, 'Johns', 45),
(49, 'Johns', 15),
(50, 'Johns', 33),
(51, 'Johns', 45),
(52, 'Johns', 41),
(53, 'Chris', 57),
(54, 'Chris', 59),
(55, 'Chris', 56),
(56, 'Johns', 61),
(57, 'Johns', 17),
(58, 'Johns', 61),
(60, 'Johns', 65);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idProduk` int(11) NOT NULL,
  `namaProduk` varchar(50) DEFAULT NULL,
  `detail` longtext DEFAULT NULL,
  `harga` decimal(15,2) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `idJenama` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idProduk`, `namaProduk`, `detail`, `harga`, `gambar`, `idJenama`) VALUES
(12, '911 TURBO S', '3745cc\r\n\r\n640hp\r\n\r\nTop Speed 332km/h', 2235463.00, '8e5a0cc89a5a502309a7d1097bbef794.webp', 27),
(13, 'AGERA RS', '4695cc\r\n\r\n1030hp\r\n\r\nTop Speed 400km/h', 4990000.00, '53783f49fc0466d7069d9fa4af2a8b95.jpg', 28),
(15, '718 CAYMAN GT4', '3995cc\r\n\r\n414hp\r\n\r\nTop Speed 304km/h', 1060001.00, 'be2ac510a102c029e81433ba24b9dd2c.jpg', 27),
(17, 'GTR R35', '3798cc\r\n\r\n565hp\r\n\r\nTop Speed 315km/h', 680300.00, 'aaf8a07938a8373b9cbe212a3bdc30e9.webp', 31),
(18, 'HURACAN STERRATO', '5204cc\r\n\r\n602hp\r\n\r\nTop Speed 310km/h', 1055555.00, '7c0090e62cc217636bb05301872f8244.jpg', 32),
(21, 'MACH 1', '5198 cc\r\n\r\n460hp\r\n\r\nTop Speed 270km/h ', 300500.00, '114fa3550aade86085501e3172fa841c.jpg', 33),
(23, 'VEYRON', '7993 cc\r\n\r\n987 hp\r\n\r\nTop Speed 431 km/h', 14628369.00, '1807859e9f256a6af7322901f782aa07.jpg', 30),
(25, 'BOLIDE', '7993 cc\r\n\r\n1578 hp\r\n\r\nTop Speed 498 km/h', 19281200.00, '8f39b7817b47bb894abc626145191ce1.jpg', 30),
(31, 'ARTURA', '2993 cc\r\n\r\n671 hp\r\n\r\nTop Speed 330 km/h', 1074925.00, '06ba8077d9c0b462697cb8a8b7e1bc67.jpeg', 34),
(33, 'AVENTADOR', '6498 cc\r\n\r\n769 hp\r\n\r\nTop Speed 350 km/h', 1850000.00, '576738741966577449ca09574d00836e.jpg', 32),
(34, 'GEMERA', '1988 cc\r\n\r\n800 hp\r\n\r\nTop Speed 400 km/h', 7694200.00, '5b76cc1146f02bd4f2087275b1834564.jpg', 28),
(36, 'W16 MISTRAL ', '7993 cc\r\n\r\n1578 hp\r\n\r\nTop Speed 420 km/h', 22630000.00, '27ac5b688d0dc95e76c29708681b1748.jpg', 30),
(39, 'JESKO', '5065 cc\r\n\r\n1280 hp\r\n\r\nTop Speed 480 km/h', 11054268.00, '6eb6cb53f1fa9cf7462efd96dd172b38.jpg', 28),
(40, 'JESKO ABSOLUT', '5065 cc\r\n\r\n1280 hp\r\n\r\nTop speed 480 km/h', 13676000.00, '949acfc5e412a84e5d6112bb0afc659a.jpg', 28),
(41, '765LT', '3994 cc\r\n\r\n755 hp \r\n\r\nTop Speed 330 km/h ', 1488000.00, '821f20bcf9fa7090d15b4c35a3df9203.jpg', 34),
(42, '720S', '3994 cc\r\n\r\n710 hp \r\n\r\nTop Speed 341 km/h ', 5421720.00, 'a849d0fb7b5d65e96a61ef6eee9146ad.jpg', 34),
(43, 'REVEULTO', '6498 cc\r\n\r\n814 hp\r\n\r\nTop Speed 350 km/h ', 2452762.00, 'b142227ff49e8c883b1d64d41d5a45b7.jpg', 32),
(45, '911 CARRERA T', '2981 cc\r\n\r\n380 hp\r\n\r\nTop Speed 303 km/h', 900000.00, 'd771a8b756a893e7aab10c548cf0932f.jpg', 27),
(48, '718 CAYMAN S', '2497 cc\r\n\r\n350 hp\r\n\r\nTop Speed 285 km/h', 710000.00, 'd8c98a3dccb979952905da55e50880d8.jpeg', 27),
(52, 'HURACAN TECNICA', '5204 cc \r\n\r\n640 hp \r\n\r\nTop Speed 325 km/h', 1086240.00, '6cab2c0fd5b4718b2d7d0f1624c1cdc5.jpg', 32),
(53, 'SHELBY GT500', '5200 cc\r\n\r\n760 hp\r\n\r\nTop Speed 292 km/h', 359454.00, 'bc678e9ddcedcd0dd183fa8a1574fb32.jpg', 33),
(54, 'GTR R34', '2568 cc\r\n\r\n276 hp\r\n\r\nTop Speed 250 km/h', 458600.00, '23fb0a6179d040e830acf6d0ff4706d6.jpg', 31),
(56, 'P1', '3799cc\r\n\r\n903hp\r\n\r\nTop Speed 350 km/h', 4900610.00, 'e6b0ccf4402e846d1f1ba2d61e687a3c.jpg', 34),
(57, 'CHALLENGER SRT', '6162 cc\r\n\r\n807 hp\r\n\r\nTop Speed 326 km/h', 273141.00, 'c2736e05ab143993d4e1dc7cd1fa02d2.jpg', 35),
(59, 'CHARGER SRT', '6162 cc\r\n\r\n807 hp\r\n\r\nTop Speed 327 km/h', 297400.00, '5a4986766d81c3a5d356b958fe1b32a6.jpg', 35),
(61, 'GTR R36', '3798 cc\r\n\r\n600 hp\r\n\r\nTop Speed 315km/h', 561950.00, '57148645c5be99418b09cc408e11b8eb.jpg', 31),
(65, 'CHIRON', '7993 cc\r\n\r\n1500 hp\r\n\r\nTop Speed 440 km/h', 12500500.00, '9e2d000501790db5a04f68ddd3de21ac.jpg', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenama`
--
ALTER TABLE `jenama`
  ADD PRIMARY KEY (`idJenama`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idPengguna`);

--
-- Indexes for table `pilih`
--
ALTER TABLE `pilih`
  ADD PRIMARY KEY (`idPilih`),
  ADD KEY `idPengguna` (`idPengguna`),
  ADD KEY `idProduk` (`idProduk`),
  ADD KEY `idProduk_2` (`idProduk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD KEY `idJenama` (`idJenama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenama`
--
ALTER TABLE `jenama`
  MODIFY `idJenama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pilih`
--
ALTER TABLE `pilih`
  MODIFY `idPilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pilih`
--
ALTER TABLE `pilih`
  ADD CONSTRAINT `idPengguna` FOREIGN KEY (`idPengguna`) REFERENCES `pengguna` (`idPengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pilih_ibfk_1` FOREIGN KEY (`idProduk`) REFERENCES `produk` (`idProduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `idJenama` FOREIGN KEY (`idJenama`) REFERENCES `jenama` (`idJenama`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
