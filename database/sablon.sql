-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 03:31 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sablon`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `file`) VALUES
(6, 'es teh KK Bukti_ datar.jpeg'),
(7, 'es teh KK Bukti_ Gelas oval.jpeg'),
(8, 'Screenshot 2022-10-17 095014.png'),
(9, 'Screenshot 2022-10-17 115521.png'),
(10, 'Screenshot 2022-10-17 115521.png'),
(11, 'Screenshot 2022-10-17 115521.png'),
(12, 'Screenshot 2022-10-17 115521.png'),
(13, 'Screenshot 2022-10-25 120254.png'),
(14, 'Screenshot 2022-11-03 132046.png'),
(15, 'Screenshot 2022-10-21 164648.png'),
(16, 'Screenshot 2022-10-21 164648.png'),
(17, 'Screenshot 2022-10-21 164648.png'),
(18, 'Screenshot 2022-10-21 164648.png'),
(19, 'Screenshot 2022-10-21 164648.png'),
(20, 'Screenshot 2022-10-30 194510.png'),
(21, 'Screenshot (40).png'),
(22, 'Screenshot 2022-11-12 111519.png'),
(23, 'Screenshot 2022-11-12 111519.png'),
(24, 'Screenshot 2022-11-12 111519.png'),
(25, 'Screenshot 2022-10-17 102336.png'),
(26, 'Screenshot (9).png'),
(27, 'Screenshot (9).png'),
(28, 'Screenshot (2).png'),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, 'Screenshot (9).png'),
(36, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pesanan` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `pesanan`, `jumlah`, `notelp`, `alamat`) VALUES
(1, 'fikri azal', 'Gelas 12oz Datar', '100000000', '089676468900', 'bogor'),
(7, 'fazal', 'Paper Bowl 650ml', '10000', '0798988', 'bogor'),
(25, 'ari', 'Paper Bowl 600ml', '1000', '085728832772', 'Cawang'),
(26, 'meidi', 'Gelas 22oz Oval', '2000', '089364377333', 'Depok'),
(27, '', 'Gelas 12oz Datar', '', '', ''),
(28, '', 'Gelas 12oz Datar', '', '', ''),
(29, 'gg', 'Paper Bowl 600ml', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
