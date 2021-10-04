-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 02:18 PM
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
(64, 'priya', 'rana', 'p@gmail.com', '$2y$10$kKzoyfVyVImZgjwlND2FxO9eHiik42rTU2vNVYqzEW/40Ij/2Iqk6'),
(65, 'khushi', 'vaghela', 'k@gmail.com', '$2y$10$7pebAQklrfKDBz8c/OluQeTmyd.aWQTV6xn6oo0eg4vJT2n3.ozyK'),
(66, 'advait', 'chauhan', 'a@gmail.com', '$2y$10$uyCxOpDiPcsA52QPkHh7u.tnoQvsAhISqRyn4At/UvrMSQW3JBUoO'),
(67, 'tanushree', 'parmar', 't@gmail.com', '$2y$10$aEbJ3l1XcsMrW3hRr7Bc.uQKPVqCclrKujauknlBrf7tOm6GwDw/y'),
(68, 'dinesh', 'sorathiya', 'd@gmail.com', '$2y$10$4ZMRxzyNAbYzI/ximxzRwuKIULkLXumI4F8QKwtw4TLRVkWaDru5C');

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
  `perc` float NOT NULL,
  `assign_marks_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `math`, `biology`, `history`, `physics`, `chemistry`, `english`, `total`, `perc`, `assign_marks_by`) VALUES
(19, 'yatri', 77, 70, 73, 78, 78, 94, 470, 78.33, 64),
(20, 'divya', 60, 78, 59, 85, 68, 89, 439, 73.17, 65),
(22, 'shivanshi', 68, 57, 68, 87, 76, 67, 423, 70.5, 65),
(23, 'vaishnavi', 78, 89, 89, 89, 89, 89, 523, 87.17, 66);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
