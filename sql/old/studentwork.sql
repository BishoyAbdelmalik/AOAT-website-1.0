-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2018 at 11:56 AM
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
(1, 'Gabriela Rosillo', 'rosillo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Cell Diagram', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '"/images/student_work/digital_illustrations/cell_gale-thumb.jpg","/images/student_work/digital_illustrations/cell_depaz-thumb.jpg","/images/student_work/digital_illustrations/cell_lee-thumb.jpg","/images/student_work/digital_illustrations/cell_nguyen-thumb.jpg","/images/student_work/digital_illustrations/cell_pham-thumb.jpg","/images/student_work/digital_illustrations/cell_pimentel-thumb.jpg","/images/student_work/digital_illustrations/cell_salais-thumb.jpg","/images/student_work/digital_illustrations/cell_vu-thumb.jpg","/images/student_work/digital_illustrations/cell_tran-thumb.jpg"'),
(2, 'Gabriela Rosillo', 'rosillo', '', 'Heart Diagram', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '"/images/student_work/digital_illustrations/heart_bausch-thumb.jpg","/images/student_work/digital_illustrations/heart_crisolo-thumb.jpg","/images/student_work/digital_illustrations/heart_daugherty-thumb.jpg","/images/student_work/digital_illustrations/heart_isaac-thumb.jpg","/images/student_work/digital_illustrations/heart_meza-thumb.jpg","/images/student_work/digital_illustrations/heart_pham-thumb.jpg","/images/student_work/digital_illustrations/heart_rivera-thumb.jpg","/images/student_work/digital_illustrations/heart_solis-thumb.jpg"'),
(3, 'Gabriela Rosillo', 'rosillo', '', 'Textile', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '"/images/student_work/digital_illustrations/textile_aldaba-thumb.jpg","/images/student_work/digital_illustrations/textile_aceves-thumb.jpg","/images/student_work/digital_illustrations/textile_flores-thumb.jpg","/images/student_work/digital_illustrations/textile_gale-thumb.jpg","/images/student_work/digital_illustrations/textile_ibrahim-thumb.jpg","/images/student_work/digital_illustrations/textile_isaac-thumb.jpg","/images/student_work/digital_illustrations/textile_martinez-thumb.jpg","/images/student_work/digital_illustrations/textile_mendoza-thumb.jpg","/images/student_work/digital_illustrations/textile_meza-thumb.jpg","/images/student_work/digital_illustrations/textile_nguyen-thumb.jpg","/images/student_work/digital_illustrations/textile_otanez-thumb.jpg","/images/student_work/digital_illustrations/textile_tran-thumb.jpg","/images/student_work/digital_illustrations/textile_vu-thumb.jpg"'),
(4, 'Gabriela Rosillo', 'rosillo', '', 'Holiday Cards', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '"/images/student_work/digital_illustrations/holiday_girgis-thumb.jpg","/images/student_work/digital_illustrations/holiday_arriola-thumb.jpg","/images/student_work/digital_illustrations/holiday_hill-thumb.jpg","/images/student_work/digital_illustrations/holiday_londra-thumb.jpg","/images/student_work/digital_illustrations/holiday_velasquez-thumb.jpg"'),
(5, 'Gabriela Rosillo', 'rosillo', '', 'GMO Monster', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '"/images/student_work/digital_illustrations/gmo_bravo-thumb.jpg",\n"/images/student_work/digital_illustrations/gmo_arceo-thumb.jpg",\n"/images/student_work/digital_illustrations/gmo_bravo-thumb.jpg",\n"/images/student_work/digital_illustrations/gmo_arceo-thumb.jpg",\n"/images/student_work/digital_illustrations/gmo_din-thumb.jpg"');

-- --------------------------------------------------------

--
-- Table structure for table `studentworkdimg`
--

CREATE TABLE `studentworkdimg` (
  `id` int(11) NOT NULL,
  `instructor` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `course` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `project` tinytext NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentworkdimg`
--

INSERT INTO `studentworkdimg` (`id`, `instructor`, `url`, `course`, `project`, `description`, `images`) VALUES
(1, 'Gabriela Rosillo', 'rosillo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Album Cover', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ''),
(2, 'Gabriela Rosillo', 'rosillo', '', 'Movie Poster', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ''),
(3, 'Gabriela Rosillo', 'rosillo', '', 'Selfie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentworkdp`
--

CREATE TABLE `studentworkdp` (
  `id` int(11) NOT NULL,
  `instructor` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `course` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `project` tinytext NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentworkdp`
--

INSERT INTO `studentworkdp` (`id`, `instructor`, `url`, `course`, `project`, `description`, `images`) VALUES
(2, 'Paola Prato', 'prato', '', 'Kaleidescope', '<b>Objective:</b> An extension to the Selective Focus Project students will refine their Photoshop skills by creating a kaleidoscope image. They will begin with a Single image and create a seamless rhythmic geometric pattern.', '"/images/student_work/digital_photography/kaleidescope_aguilar-thumb.jpg",\n"/images/student_work/digital_photography/kaleidescope_aguilera-thumb.jpg",\n"/images/student_work/digital_photography/kaleidescope_alavarado-thumb.jpg",\n"/images/student_work/digital_photography/kaleidescope_arceo-thumb.jpg",\n"/images/student_work/digital_photography/kaleidescope_morenoa-thumb.jpg",\n"/images/student_work/digital_photography/kaleidescope_obrego-thumb.jpg",\n"/images/student_work/digital_photography/kaleidescope_rafaelov-thumb.jpg",\n"/images/student_work/digital_photography/kaleidescope_sotelo-thumb.jpg",\n"/images/student_work/digital_photography/kaleidescope_gonzalez-thumb.jpg",\n"/images/student_work/digital_photography/kaleidescope_hernandez-thumb.jpg",\n"/images/student_work/digital_photography/kaleidescope_lapuz-thumb.jpg",\n"/images/student_work/digital_photography/kaleidescope_mendoza-thumb.jpg"'),
(1, 'Paola Prato', 'prato', 'In this course we explore digital photography in relation to commercial and fine art. Students will be asked to produce art work and will be asked to participate in class discussion to better understand the physical, conceptual and theoretical characteristics of the digital media as it pertains to art, art making and the commercial world. Emphasis will be placed on the students\' development and understanding of photography and digital imaging as well as art history in a way which will help them produce expressive and thoughtful photographs. Students will be introduced to the basic technology necessary for the production of their images, as well as learning about the visual arts, how to look at and critique photography, photographic vocabulary, using tools such as framing, composition, "rule of thirds", light, texture, pattern, lines, symmetry, depth of field, distance, perspective, culture, space, balance, color versus black and white photography, and be introduced to many works by well known photographers. Students will be expected to demonstrate an ability to use the Photoshop tools competently in the production of their art work, however, the production and analysis of expressive and thoughtful art work is the main objective of this course.', 'Hockney Inspired Digital Photo Collage', '<b>Objective:</b> Study and analyze the style and method of David Hockney\'s photographic work. Begin by researching the tools he used to make the images, his technique in organizing and executing the project, and his relationship to the subject he is photographing. Using 15-20 individual photographs taken with your cellphone, photograph a significant subject in your life. It may be a person, place, or thing. By the end of the project, you should know your subject matter better than you did before starting this project.', '"/images/student_work/digital_photography/hockney_calampiano-thumb.jpg",\n"/images/student_work/digital_photography/hockney_soberanis-thumb.jpg","/images/student_work/digital_photography/hockney_correa-thumb.jpg","/images/student_work/digital_photography/hockney_martineza-thumb.jpg","/images/student_work/digital_photography/hockney_ngo-thumb.jpg","/images/student_work/digital_photography/hockney_parada-thumb.jpg","/images/student_work/digital_photography/hockney_pena-thumb.jpg"'),
(3, 'Paola Prato', 'prato', '', 'Politics + Art: The Power of Words and Text', '<b>Objective:</b> Reflecting on the issues that may impact your learning or lifestyle, create a work of art using text and image to make your viewer understand a problem in your school or community. Having studied the work of Barbara Kruger and Jenny Holzer, select an issue from your school or community that you feel is necessary for others to know about. Make an original photograph using your digital camera or cellphone and create an original five word slogan that will illustrate the image and the problem you\'re addressing.', '"/images/student_work/digital_photography/kruger_callaway-thumb.jpg",\n"/images/student_work/digital_photography/kruger_aguilar.jpg",\n"/images/student_work/digital_photography/kruger_villa-thumb.jpg",\n"/images/student_work/digital_photography/kruger_ruano-thumb.jpg",\n"/images/student_work/digital_photography/kruger_torres-thumb.jpg",\n"/images/student_work/digital_photography/kruger_tran-thumb.jpg"'),
(5, 'Paola Prato', 'prato', '', 'Photo Composition', '<b>Objective:</b> Good composition is a key elements of good art, therefore, good photography. Instead of looking at photographic composition as a set of rules to follow, look at it like a set of ingredients, a recipe to follow, that you can modify and change as you become better skilled. Begin documenting what see see around you, at school or at home, while maintaining the idea of good photographic composition in mind.', '"/images/student_work/digital_photography/composition_bonilla-thumb.jpg",\n"/images/student_work/digital_photography/composition_butler-thumb.jpg",\n"/images/student_work/digital_photography/composition_diosdado-thumb.jpg",\n"/images/student_work/digital_photography/composition_lacson-thumb.jpg",\n"/images/student_work/digital_photography/composition_gonzalez-thumb.jpg",\n"/images/student_work/digital_photography/composition_pineda-thumb.jpg"'),
(4, 'Paola Prato', 'prato', '', 'Photo Narrative - Story Telling in Five Photos', '<b>Objective:</b> Use cellphone or digital camera to tell a story (myth, fairy tale, etc.) in five still images. Explain how visual artists and writers represent similar stories in different ways; how does cultural and language affect the way a story is told? Discuss universal story themes such as love, desire, death and immortality.', '"/images/student_work/digital_photography/narrative.LaLlorona_1-thumb.jpg", "/images/student_work/digital_photography/narrative.LaLlorona_2-thumb.jpg", "/images/student_work/digital_photography/narrative.LaLlorona_3-thumb.jpg", "/images/student_work/digital_photography/narrative.LaLlorona_4-thumb.jpg", "/images/student_work/digital_photography/narrative.LaLlorona_5-thumb.jpg", "/images/student_work/digital_photography/narrative.LaLlorona_6-thumb.jpg", "/images/student_work/digital_photography/narrative.LaLlorona_7-thumb.jpg", "/images/student_work/digital_photography/narrative.SleepingBeauty_1-thumb.jpg", "/images/student_work/digital_photography/narrative.SleepingBeauty_2-thumb.jpg", "/images/student_work/digital_photography/narrative.SleepingBeauty_3-thumb.jpg", "/images/student_work/digital_photography/narrative.SleepingBeauty_4-thumb.jpg", "/images/student_work/digital_photography/narrative.SleepingBeauty_5-thumb.jpg", "/images/student_work/digital_photography/narrative.SleepingBeauty_6-thumb.jpg", "/images/student_work/digital_photography/narrative.SleepingBeauty_7-thumb.jpg"');

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

-- --------------------------------------------------------

--
-- Table structure for table `studentworkwd`
--

CREATE TABLE `studentworkwd` (
  `id` int(11) NOT NULL,
  `instructor` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `course` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `project` tinytext NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------





--
-- Indexes for table `studentworkdill`
--
ALTER TABLE `studentworkdill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentworkdimg`
--
ALTER TABLE `studentworkdimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentworkdp`
--
ALTER TABLE `studentworkdp`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for table `studentworkdill`
--
ALTER TABLE `studentworkdill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `studentworkdimg`
--
ALTER TABLE `studentworkdimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `studentworkdp`
--
ALTER TABLE `studentworkdp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;