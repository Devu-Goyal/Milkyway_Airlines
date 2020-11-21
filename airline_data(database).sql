-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 12:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `aid` int(11) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`aid`, `city`) VALUES
(1, 'ajmer'),
(2, 'jaipur'),
(3, 'mumbai'),
(4, 'delhi'),
(5, 'chennai'),
(6, 'bangalore'),
(7, 'hyderabad'),
(8, 'surat'),
(9, 'lucknow'),
(10, 'ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `fid`, `id`) VALUES
(1, 2, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 2, 1),
(7, 2, 1),
(8, 2, 1),
(9, 2, 1),
(10, 2, 1),
(11, 2, 1),
(12, 2, 1),
(13, 2, 1),
(14, 2, 1),
(15, 2, 1),
(16, 2, 1),
(17, 2, 1),
(18, 1, 1),
(19, 1, 1),
(20, 1, 1),
(21, 1, 1),
(22, 1, 1),
(23, 1, 1),
(24, 1, 1),
(25, 1, 1),
(26, 1, 1),
(27, 1, 1),
(28, 1, 1),
(29, 1, 1),
(30, 1, 1),
(31, 1, 1),
(32, 1, 1),
(33, 1, 1),
(34, 1, 1),
(35, 1, 1),
(36, 1, 1),
(37, 1, 1),
(38, 1, 1),
(39, 1, 1),
(40, 1, 1),
(41, 1, 1),
(42, 1, 1),
(43, 1, 1),
(44, 1, 1),
(45, 1, 1),
(46, 1, 1),
(47, 8, 1),
(48, 13, 1),
(49, 12, 1),
(50, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fights`
--

CREATE TABLE `fights` (
  `fid` int(11) NOT NULL,
  `source` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `duration` decimal(10,0) NOT NULL,
  `class` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `sno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fights`
--

INSERT INTO `fights` (`fid`, `source`, `destination`, `duration`, `class`, `price`, `sno`, `name`) VALUES
(1, 1, 2, '3', 'economy', '2000', 'A-1', 'spicejet'),
(2, 1, 2, '3', 'business', '7000', 'A-16', 'Emirates'),
(3, 2, 1, '1', 'economy', '1500', 'A-139', 'Indigo'),
(4, 5, 6, '1', 'economy', '3000', 'A-123', 'Indigo'),
(5, 5, 6, '2', 'business', '3000', 'A-73', 'Spicejet'),
(6, 10, 7, '2', 'Economy', '3700', 'A-115', 'Indigo'),
(7, 2, 3, '3', 'Economy', '2600', 'A-64', 'Emirates'),
(8, 2, 3, '2', 'Business', '7000', 'A-63', 'Spicejet'),
(9, 4, 3, '3', 'Economy', '4700', 'A-87', 'Luftansa'),
(10, 1, 3, '2', 'Business', '6700', 'A-56', 'Indigo'),
(11, 7, 3, '2', 'Economy', '3200', 'A-85', 'Economy'),
(12, 2, 3, '3', 'Business', '7700', 'A-39', 'Emirates'),
(13, 9, 8, '3', 'Economy', '4900', 'A-69', 'Vistara'),
(14, 2, 8, '2', 'Business', '10000', 'A-09', 'Emirates'),
(15, 2, 3, '4', 'Economy', '7000', 'A-863', 'Indigo'),
(16, 3, 2, '2', 'Economy', '4600', 'A-97', 'Spicejet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `curr_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `curr_time`) VALUES
(1, 'rajchordia', '$2y$10$71squmhBp1PJpHQ5UT3tJu2Kkm1w3qi6qbpO6XZ9lAkU8XXiZHeIi', '2020-10-29 13:44:35'),
(10, 'rajchordia14', '$2y$10$1W1z2Rp56rb5WWj1B3fSq.gKx4JBr2PAG3VKhmlaxM7gi2rD.1oCO', '2020-11-18 12:37:19'),
(11, 'jiajsdf', '$2y$10$0noh/v6lapw.vI2q8jvwS.LLBDVMhGuQsxe3uLVVnot/9uPYDeYGy', '2020-11-18 12:39:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `fid` (`fid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `fights`
--
ALTER TABLE `fights`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `source` (`source`),
  ADD KEY `destination` (`destination`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `fights`
--
ALTER TABLE `fights`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`fid`) REFERENCES `fights` (`fid`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `fights`
--
ALTER TABLE `fights`
  ADD CONSTRAINT `fights_ibfk_1` FOREIGN KEY (`source`) REFERENCES `airport` (`aid`),
  ADD CONSTRAINT `fights_ibfk_2` FOREIGN KEY (`destination`) REFERENCES `airport` (`aid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
