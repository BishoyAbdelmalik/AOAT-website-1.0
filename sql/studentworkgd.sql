-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 29, 2018 at 09:18 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `aoat`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentworkgd`
--

CREATE TABLE `studentworkgd` (
  `id` int(11) NOT NULL,
  `instructor` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `course` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `project` tinytext NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentworkgd`
--

INSERT INTO `studentworkgd` (`id`, `instructor`, `url`, `course`, `project`, `description`, `images`) VALUES
(1, 'Gabriela Rosillo', 'rosillo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Activism Booklets', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '\"/images/student_work/graphic_design/booklet_arriola-thumb.jpg\", \"/images/student_work/graphic_design/booklet_bejerano-thumb.jpg\", \"/images/student_work/graphic_design/booklet_cervantes-thumb.jpg\", \"/images/student_work/graphic_design/booklet_DeLaCruz-thumb.jpg\", \"/images/student_work/graphic_design/booklet_jandres-thumb.jpg\", \"/images/student_work/graphic_design/booklet_keh-thumb.jpg\", \"/images/student_work/graphic_design/booklet_lara-thumb.jpg\", \"/images/student_work/graphic_design/booklet_macias-thumb.jpg\", \"/images/student_work/graphic_design/booklet_marquez-thumb.jpg\", \"/images/student_work/graphic_design/booklet_pimentel-thumb.jpg\"'),
(2, 'Gabriela Rosillo', 'rosillo', '', 'Materialism vs. Minimalism', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '\"/images/student_work/graphic_design/MVM_betsy-thumb.jpg\", \"/images/student_work/graphic_design/MVM_flores_g-thumb.jpg\", \"/images/student_work/graphic_design/MVM_girgis-thumb.jpg\", \"/images/student_work/graphic_design/MVM_aguilera-thumb.jpg\", \"/images/student_work/graphic_design/MVM_bejerano-thumb.jpg\", \"/images/student_work/graphic_design/MVM_flores_d-thumb.jpg\", \"/images/student_work/graphic_design/MVM_ornelas-thumb.jpg\", \"/images/student_work/graphic_design/MVM_keh-thumb.jpg\"'),
(3, 'Gabriela Rosillo', 'rosillo', '', 'Senior Portfolio Cover', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '\"/images/student_work/graphic_design/portfolio_sanchez-thumb.jpg\", \"/images/student_work/graphic_design/portfolio_gallegos-thumb.jpg\", \"/images/student_work/graphic_design/portfolio_hernandez-thumb.jpg\", \"/images/student_work/graphic_design/portfolio_le-thumb.jpg\", \"/images/student_work/graphic_design/portfolio_mendoza-thumb.jpg\", \"/images/student_work/graphic_design/portfolio_pham-thumb.jpg\", \"/images/student_work/graphic_design/portfolio_quevedo-thumb.jpg\", \"/images/student_work/graphic_design/portfolio_amparo-thumb.jpg\", \"/images/student_work/graphic_design/portfolio_chung-thumb.jpg\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentworkgd`
--
ALTER TABLE `studentworkgd`
  ADD UNIQUE KEY `id` (`id`);
