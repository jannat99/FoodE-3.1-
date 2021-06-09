-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 04:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `170204051`
--
CREATE DATABASE IF NOT EXISTS `170204051` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `170204051`;

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `firstname`, `lastname`, `email`, `password`, `contact`, `gender`) VALUES
(1, 'muniya', 'hg', 'jannat11@gmail.com', '1234ASDFqwer', 2147483647, 'Female'),
(2, 'taniya', 'fg', 'gdf@gmail.com', '0987ASDFqwer', 2147483647, 'Female'),
(3, 'Turbatul ', 'Jannah', 'jannat11@gmail.com', '12PASSword', 1196097344, 'Female'),
(4, 'bhnj', 'gvbh', 'fg@gmail.com', 'dfgbh3456ASDFG', 2147483647, 'Female'),
(5, 'fgh', 'gvgb', 'vb@gmail.com', 'cfvg3456ASDFGH', 2147483647, 'Male'),
(6, 'fghb', 'fvbh', 'fg@gmail.com', 'dfvgbyhw4567ASDFG', 2147483647, 'Male'),
(7, 'gbh', 'gh', 'fg@gmail.com', 'fvgbh2345QWERT', 1745634567, 'Male'),
(8, 'jh', 'iu', 'hj@gmail.com', 'dcfvg456QWERTY', 1787700477, 'Other'),
(9, 'oitr', 'edrftgyh', 'fg@gmail.com', 'ghj567QWERTY', 836452798, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`id`, `fname`, `lname`, `email`, `phone`, `message`) VALUES
(1, 'fvgb', 'fgh', 'fgybh@gmail.com', 34567, '$'),
(2, 'Turbatul', 'Jannah', 'jannat11@gmail.com', 196097344, '$'),
(3, 'Turbatul', 'Jannah', 'jannat11@gmail.com', 196097344, 'rdctfvgbhjkjhgfdrcftvgbyhnujmk\r\ndftvgybhnujmk'),
(4, 'rftgy', 'fgbh', 'ghn@gmail.com', 2147483647, 'rtyuvbn\r\nfghj'),
(5, 'rftgy', 'fgbh', 'ghn@gmail.com', 2147483647, 'rtyuvbn\r\nfghj'),
(6, 'gyhj', 'fg', 'gh@gmail.com', 2147483647, 'rdftvgbyhnu'),
(7, 'oiuy', 'lkj', 'h@gmail.com', 2147483647, 'dfgh'),
(8, 'oiuy', 'lkj', 'h@gmail.com', 2147483647, 'dfgh'),
(9, 'oiuy', 'lkj', 'h@gmail.com', 2147483647, 'dfgh'),
(10, 'hj', 'frgh', 'gh@gmail.com', 398765434, 'yhjmk'),
(11, 'hj', 'frgh', 'gh@gmail.com', 398765434, 'yhjmk');

-- --------------------------------------------------------

--
-- Table structure for table `table3`
--

CREATE TABLE `table3` (
  `id` int(11) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table3`
--

INSERT INTO `table3` (`id`, `total`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `table4`
--

CREATE TABLE `table4` (
  `id` int(11) NOT NULL,
  `o1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table4`
--

INSERT INTO `table4` (`id`, `o1`) VALUES
(1, 'Chicken Mayo : Small'),
(2, 'Chicken Mayo : Small'),
(3, 'Chicken Mayo : Small'),
(4, 'Chicken Mayo : Small'),
(5, 'Chicken Mayo : Small'),
(6, ''),
(7, ''),
(8, 'Chicken Mayo : Small'),
(9, ''),
(10, ''),
(11, 'Chicken Mayo : Small'),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, 'Chicken Mayo : Small'),
(21, 'Chicken Mayo : Small');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table3`
--
ALTER TABLE `table3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table4`
--
ALTER TABLE `table4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table3`
--
ALTER TABLE `table3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table4`
--
ALTER TABLE `table4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
