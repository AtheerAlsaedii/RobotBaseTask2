-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 08:38 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moves`
--

-- --------------------------------------------------------

--
-- Table structure for table `moves`
--

CREATE TABLE `moves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `MForWard` varchar(10) NOT NULL,
  `MBackWard` varchar(10) NOT NULL,
  `MRight` varchar(10) NOT NULL,
  `MLeft` varchar(10) NOT NULL,
  `MStop` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moves`
--

INSERT INTO `moves` (`id`, `MForWard`, `MBackWard`, `MRight`, `MLeft`, `MStop`) VALUES
(18, 'Forward', '0', '0', '0', '0'),
(21, '0', 'Backward', '0', '0', '0'),
(28, '0', '0', '0', 'Left', '0'),
(29, '0', '0', '0', 'Left', '0'),
(30, '0', 'Backward', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moves`
--
ALTER TABLE `moves`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moves`
--
ALTER TABLE `moves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
