-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 01:01 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimtek`
--

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id` int(11) NOT NULL,
  `matkul` varchar(250) NOT NULL,
  `dosen` varchar(250) NOT NULL,
  `hari` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id`, `matkul`, `dosen`, `hari`, `tanggal`, `jam`) VALUES
(1, 'Pemrograman Web', 'Adi Pratomo ST, M.Kom', 'Senin', '2020-10-19', '08.00 - 10.00'),
(3, 'Multimedia & Animasi', 'Adi Pratomo ST. M.Kom', 'Kamis', '2020-10-22', '14.00 - 16.00'),
(4, 'Pemrograman Mobile (Android)', 'Ronny Mantala S.Kom MM.', 'Rabu', '2020-10-21', '11.00 - 13.00'),
(5, 'Pemrograman Java', 'Ramadhani Noor Pratama M.Kom', 'Selasa', '2020-10-20', '08.00 - 10.00'),
(7, 'Sistem Basis Data (MySQl)', 'Abdul Rozaq S.Kom M.Kom MM.', 'Jumat', '2020-10-23', '14.00 - 16.00'),
(8, 'Pemrograman Mobile (Android)', 'Ronny Mantala S.Kom MM.', 'Selasa', '2020-10-20', '16.00 - 18.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'dosen', 'dosen123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
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
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
