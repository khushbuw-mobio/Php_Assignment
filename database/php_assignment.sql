-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 11:52 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `first_name`, `last_name`, `emailid`, `password`) VALUES
(1, 'asd', 'asd', 'sadsa@gmail.com', '123'),
(2, 'asdaaaa', 'qqqqq', 'q@gmail.com', '12345'),
(3, 'Kush', 'vaja', 'k@gmail.com', 'k123'),
(4, 'qw', 'sda', 'xasx', 'cds'),
(5, 'khushi', 'vaja', 'khush@gmail.com', '$2y$10$HGk06C7ApghwEzRZGLHsM.kQjmfgs.b.m5HSGDXKMUrJ8pa0rpRfK'),
(6, '', '', 'khush@gmail.com', '$2y$10$v98vIpYzef97bQfeD6bJjecclxsf8Pqpclzs2QcSYPa/ZiLumlRqy'),
(7, 'visakha', 'chauhan', 'v@gmail.com', 'v123');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `math` int(3) NOT NULL,
  `biology` int(3) NOT NULL,
  `history` int(3) NOT NULL,
  `physics` int(3) NOT NULL,
  `chemistry` int(3) NOT NULL,
  `english` int(3) NOT NULL,
  `total` int(3) NOT NULL,
  `perc` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `math`, `biology`, `history`, `physics`, `chemistry`, `english`, `total`, `perc`) VALUES
(1, 'kh', 50, 90, 90, 99, 89, 89, 89, 89.9),
(2, 'TRISH', 76, 56, 67, 76, 45, 67, 387, 64.5),
(3, 'manya', 67, 56, 56, 54, 44, 48, 325, 54.17),
(4, 'kh', 50, 90, 90, 99, 89, 89, 89, 89.9),
(5, 'khushi', 56, 76, 78, 86, 67, 78, 441, 73.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
