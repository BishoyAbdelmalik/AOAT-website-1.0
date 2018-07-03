-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2017 at 09:33 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aoat`
--
CREATE DATABASE IF NOT EXISTS `aoat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aoat`;

-- --------------------------------------------------------

--
-- Table structure for table `calender`
--

CREATE TABLE `calender` (
  `id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `month` int(2) NOT NULL,
  `day` int(2) NOT NULL,
  `event` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text,
  `time` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calender`
--

INSERT INTO `calender` (`id`, `year`, `month`, `day`, `event`, `details`, `time`) VALUES
(1, 2017, 10, 9, 'this is a test', NULL, NULL),
(2, 2017, 10, 10, 'this is not a test', NULL, NULL),
(3, 2017, 10, 1, 'this is another test', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper enim et facilisis iaculis. Donec erat leo, ornare nec erat non, commodo porttitor sem. Phasellus vehicula dapibus justo, sed venenatis massa consequat id. Vivamus quis placerat nulla, et blandit nisl. Praesent in pharetra nisl, vitae rutrum est. Vivamus odio erat, accumsan sit amet dolor id, commodo ullamcorper nisl.', NULL),
(4, 2017, 11, 20, 'test', NULL, NULL),
(5, 2017, 10, 1, 'hi', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper enim et facilisis iaculis. Donec erat leo, ornare nec erat non, commodo porttitor sem. Phasellus vehicula dapibus justo, sed venenatis massa consequat id. Vivamus quis placerat nulla, et blandit nisl. Praesent in pharetra nisl, vitae rutrum est. Vivamus odio erat, accumsan sit amet dolor id, commodo ullamcorper nisl.', 'At: 8:00'),
(6, 2017, 11, 10, 'test', NULL, NULL),
(7, 2017, 11, 1, 'hi', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calender`
--
ALTER TABLE `calender`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calender`
--
ALTER TABLE `calender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
