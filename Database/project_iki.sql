-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 06:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_iki`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kamar`
--

CREATE TABLE `data_kamar` (
  `id` int(11) NOT NULL,
  `nama_kamar` varchar(50) NOT NULL,
  `gambar_kamar` varchar(255) NOT NULL,
  `tipe_kamar` varchar(20) NOT NULL,
  `jumlah_orang` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kamar`
--

INSERT INTO `data_kamar` (`id`, `nama_kamar`, `gambar_kamar`, `tipe_kamar`, `jumlah_orang`, `deskripsi`, `harga`) VALUES
(94, 'Bali Style', 'big_image_1.jpg', 'Luxury', '2 Orang', 'Nyaman Dan Bagus Untuk ...', '20000000'),
(95, 'Gorontalo Style', 'img_3.jpg', 'Standard', '1 Orang', 'Asri Nan Sejuk', '10000000'),
(96, 'Makassar Style', 'img_4.jpg', 'Deluxe', '4 Orang', 'Bagus ki', '100000000');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `tanggal_kedatangan` date NOT NULL,
  `tanggal_pulang` date NOT NULL,
  `jumlah_kamar` varchar(20) NOT NULL,
  `jumlah_orang` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `catatan` text NOT NULL,
  `diterima` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `nama_user`, `id_kamar`, `tanggal_kedatangan`, `tanggal_pulang`, `jumlah_kamar`, `jumlah_orang`, `email`, `catatan`, `diterima`) VALUES
(8, 'user', 95, '2023-03-18', '2023-03-19', '1 Kamar', '1 Orang', 'user@gmail.com', 'asa', 1),
(9, 'user', 94, '2023-03-21', '2023-03-31', '1 Kamar', '1 Orang', 'user@gmail.com', 'as', 1),
(10, 'Alim', 96, '2023-03-18', '2023-03-20', '5 Kamar', '4 Orang', 'alim@gmail.com', 'asas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(3, 'user', 'user@gmail.com', 'user', 'user'),
(4, 'Alim', 'asas@gmail.com', 'user', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kamar`
--
ALTER TABLE `data_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kamar`
--
ALTER TABLE `data_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
