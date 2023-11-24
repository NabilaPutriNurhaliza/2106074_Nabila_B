-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 04:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2106074_nabila`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_pakaian`
--

CREATE TABLE `pesanan_pakaian` (
  `id` int(5) NOT NULL,
  `nama_pemesan` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_pakaian` varchar(30) NOT NULL,
  `jenis_pakaian` varchar(30) NOT NULL,
  `harga` int(30) NOT NULL,
  `jumlah` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan_pakaian`
--

INSERT INTO `pesanan_pakaian` (`id`, `nama_pemesan`, `alamat`, `email`, `nama_pakaian`, `jenis_pakaian`, `harga`, `jumlah`) VALUES
(1, 'Nabila', 'Bandung', 'nputrinurhaliza@gmail.com', 'Kaos', 'Unisex', 50000, 2),
(2, 'Putri', 'Jakarta', 'putri@gmail.com', 'Seragam SMP', 'Perempuan', 150000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan_pakaian`
--
ALTER TABLE `pesanan_pakaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan_pakaian`
--
ALTER TABLE `pesanan_pakaian`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
