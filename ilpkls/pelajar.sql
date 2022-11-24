-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 05:07 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapekerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `id` int(3) NOT NULL,
  `namapelajar` varchar(50) NOT NULL,
  `nokp` varchar(12) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `nohp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`id`, `namapelajar`, `nokp`, `jantina`, `nohp`) VALUES
(4, 'yusuf', '021223100154', 'Lelaki', '0123999999'),
(350, 'aniq', '046134582645', 'Lelaki', '0463215468'),
(405, 'mirul bin osman', '030512643512', 'Lelaki', '01298651280');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`id`,`nokp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=406;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
