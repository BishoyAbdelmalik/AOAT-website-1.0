-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2017 at 07:07 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `studentworkdill`
--

CREATE TABLE `studentworkdill` (
  `id` int(11) NOT NULL,
  `instructor` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `course` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `project` tinytext NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentworkdill`
--

INSERT INTO `studentworkdill` (`id`, `instructor`, `url`, `course`, `project`, `description`, `images`) VALUES
(1, 'Gabriela Rosillo', 'rosillo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Cell Diagram', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '"images/student_work/digital_illustrations/cell_gale-thumb.jpg","images/student_work/digital_illustrations/cell_depaz-thumb.jpg","images/student_work/digital_illustrations/cell_lee-thumb.jpg","images/student_work/digital_illustrations/cell_nguyen-thumb.jpg","images/student_work/digital_illustrations/cell_pham-thumb.jpg","images/student_work/digital_illustrations/cell_pimentel-thumb.jpg","images/student_work/digital_illustrations/cell_salais-thumb.jpg","images/student_work/digital_illustrations/cell_vu-thumb.jpg","images/student_work/digital_illustrations/cell_tran-thumb.jpg"'),
(2, 'Gabriela Rosillo', 'rosillo', '', 'Heart Diagram', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '"images/student_work/digital_illustrations/heart_bausch-thumb.jpg","images/student_work/digital_illustrations/heart_crisolo-thumb.jpg","images/student_work/digital_illustrations/heart_daugherty-thumb.jpg","images/student_work/digital_illustrations/heart_isaac-thumb.jpg","images/student_work/digital_illustrations/heart_meza-thumb.jpg","images/student_work/digital_illustrations/heart_pham-thumb.jpg","images/student_work/digital_illustrations/heart_rivera-thumb.jpg","images/student_work/digital_illustrations/heart_solis-thumb.jpg"'),
(3, 'Gabriela Rosillo', 'rosillo', '', 'Textile', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '"images/student_work/digital_illustrations/textile_aldaba-thumb.jpg","images/student_work/digital_illustrations/textile_aceves-thumb.jpg","images/student_work/digital_illustrations/textile_flores-thumb.jpg","images/student_work/digital_illustrations/textile_gale-thumb.jpg","images/student_work/digital_illustrations/textile_ibrahim-thumb.jpg","images/student_work/digital_illustrations/textile_isaac-thumb.jpg","images/student_work/digital_illustrations/textile_martinez-thumb.jpg","images/student_work/digital_illustrations/textile_mendoza-thumb.jpg","images/student_work/digital_illustrations/textile_meza-thumb.jpg","images/student_work/digital_illustrations/textile_nguyen-thumb.jpg","images/student_work/digital_illustrations/textile_otanez-thumb.jpg","images/student_work/digital_illustrations/textile_tran-thumb.jpg","images/student_work/digital_illustrations/textile_vu-thumb.jpg"'),
(4, 'Gabriela Rosillo', 'rosillo', '', 'Holiday Cards', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '"images/student_work/digital_illustrations/holiday_girgis-thumb.jpg","images/student_work/digital_illustrations/holiday_arriola-thumb.jpg","images/student_work/digital_illustrations/holiday_hill-thumb.jpg","images/student_work/digital_illustrations/holiday_londra-thumb.jpg","images/student_work/digital_illustrations/holiday_velasquez-thumb.jpg"'),
(5, 'Gabriela Rosillo', 'rosillo', '', 'GMO Monster', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '"images/student_work/digital_illustrations/gmo_bravo-thumb.jpg",\n"images/student_work/digital_illustrations/gmo_arceo-thumb.jpg",\n"images/student_work/digital_illustrations/gmo_bravo-thumb.jpg",\n"images/student_work/digital_illustrations/gmo_arceo-thumb.jpg",\n"images/student_work/digital_illustrations/gmo_din-thumb.jpg"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentworkdill`
--
ALTER TABLE `studentworkdill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentworkdill`
--
ALTER TABLE `studentworkdill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
