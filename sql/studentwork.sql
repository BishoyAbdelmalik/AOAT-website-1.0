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
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` text NOT NULL,
  `role` text NOT NULL,
  `grade` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bio` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `link`, `img`, `role`, `grade`, `bio`) VALUES
(1, 'Gabriela Rosillo', '#rosillo', 'images/teachers/rosillo.jpg', 'Coordinator, Art and Design', '10, 11, and 12', 'Coordinator, design teacher, graduated with a degree in Art and Design, concentration in graphic design, from Cal Poly State University, San Luis Obispo. Having worked as a freelance graphic designer and art director, she has experience in conceptual design, production, photography, photo retouching, and web design. She received her teaching credential from Cal State University, Northridge, and her CTE training at UCLA. She connects with students both in design classes and in her award-winning Yearbook program.'),
(2, 'Louis Barreto', '#barreto', 'images/teachers/barreto.jpg', 'Art and Design', '9, 10, 11, and 12', '9th and 10th grade drawing and painting teacher. Graduated from California State University Northridge with a degree in arts, concentrating in illustration and education. He also received his teaching credential from Cal State University Northridge. His previous experience includes art director at an enrichment company operating in the Santa Clarita Valley and freelance graphic designer. He is co-founder and editor in chief of Enizine, a monthly magazine publication on the CSUN campus. His work focuses on blending traditional and digital illustration to create stories through his art. As an educator, Barreto strives to enrich students on how to create art and communicate through it.\r\n\r\n'),
(3, 'Gregory Fenno-Bustos', '#fenno-bustos', '', 'Intro to Art', '9', 'need bio'),
(4, 'Michael Trimarchi', '#michael', 'images/teachers/michael.jpg', 'TA', '', 'need bio\r\n'),
(5, 'Benett Berkowitz', '#berkowitz', 'images/teachers/berkowitz.jpg', 'English', '10 and 12', 'English teacher (and general population drama teacher), attended the SUNY College at Buffalo, NY earning a Bachelor\'s of Science in Education with an emphasis in Secondary English. His dramatic style of teaching brings literature to life for the students, and his warm, effusive personality builds friendships as he works on multiple grade levels. Most AOAT students have Mr. Berkowitz in both 10th and 12th grades. He also is a part of the Impact (intervention) team of teachers for Cleveland, and sponsors the "Be the Conscious Change" club on campus.'),
(6, 'David Fitzmorris', '#fitzmorris', 'images/teachers/fitzmorris.jpg', 'English\r\n', '11', 'need bio'),
(7, 'Kim Kosach', '#kosach', '', 'English', '11', 'need bio'),
(8, 'Maura Penders', '#penders', 'images/teachers/penders.jpg', 'English', '10', 'Educated at Canisius College, Syracuse University and Hamline University, Maura Penders graduated Magna Cum Laude with a B.A. in English, an M.S. in Film and a Master of Fine Arts in Writing. Previous experience includes writing for television and film and behind the scenes positions in television production. Taught screening at the University level, animation, film production and film appreciation at Birmingham High School and Daniel Pearl Magnet High School. A member of the Cleveland faculty since 2009, Maura Penders is a member of AOAT\'s 9th, 10th and 11th Grade teams.'),
(9, 'Ellen Yuen', '#yuen', 'images/teachers/yuen.jpg', 'English', '9', 'need bio'),
(10, 'Ami McColl', '#mccoll', 'images/teachers/mccoll.jpg', 'Counselor', '10, 11, and 12', 'Counselor, graduated from Loyola Marymount University, Los Angeles, CA with a Bachelor of Arts Degree in Political Science and Economics, where she also earned her Master of Arts in Education and her Pupil Personnel Services Credential. Prior to joining the Cleveland counseling staff, Ms. McColl was a counselor at University High School and Marina del Rey Middle School. Ms. McColl keeps all students on track and informed about opportunities and requirements for graduation and college. She is at the heart of AOAT, and is key to our excellent graduation rate.'),
(11, 'Wesley DeGracia', '#degracia', 'images/teachers/degracia.jpg', 'Social Studies\r\n', '10 and 12', '12th grade team leader, social studies teacher, Art Club sponsor, is a graduate of UCLA with a BA in History, and earned his teaching credential at CSUN. Joining AOAT when he came to Cleveland, Mr. De Gracia is a tireless sponsor for all the Art Club activities, and teaches the majority of our students in both 10th and 12th grade. He also is our chief BBQ chef for parties, and supplies Rock Band for all events.'),
(12, 'Laura Neustaedter', '#neustaedter', 'images/teachers/neustaedter.jpg', 'Social Studies', '10 and 11', '11th Grade Team leader, World and U.S. History teacher, AOAT Scholarships coordinator, and AOAT Mentor Program sponsor; Ms. Neustaedter graduated with a BA in History from San Diego State University and went on to pursue both a Multiple Subject Teaching Credential and a Single Subject Teaching Credential in the field of Social Science. She became a National Board Certified teacher in 2014. Her years as an elementary teacher before joining AOAT gave her a breadth of knowledge that informs her interdisciplinary projects and her incorporation of literacy and writing skills into the curriculum. Ms. Neustaedter\'s experiences as a United Teachers Los Angeles chapter chair and as a Master Cooperating Teacher for Cal State Northridge, developed her leadership skills which she brings to heading the AOAT\'s 11th Grade Team.'),
(13, 'Paola Prato', '#prato', 'images/teachers/prato.jpg', 'Photography', '10', 'Paola Prato is a Photography teacher, a Cleveland HS graduate, received her BFA from California Institute of the Arts (CalArts) and her MA Ed. from CSU Los Angeles. She has worked with the Community Arts Partnership at CalArts and the Digital Arts Network at Side Street Projects developing and implementing innovative projects that link 10 community based arts organizations via the web. She has taught Art History and Digital Humanities, a film based, project driven, interdisciplinary class at Cleveland\'s Humanities Magnet.'),
(14, 'Runa Ray', '#ray', 'images/teachers/ray.jpg', 'Chemistry', '11', 'Chemistry teacher. Graduated with a Masters in Science (M.S.) in Chemistry, M.A. in Education and Administration, Single Subject Teaching Credential in Chemistry, Administrative Credential from CSUN. Her wide range of experience in teaching Chemistry in B.S. Level College in India, and in Chatsworth High School, CA., and as Assistant Research Scientist in a Lab in India brings enrichment in knowledge and variety in laboratory work to Cleveland HS, and to AOAT 11th grade team.'),
(15, 'Bruce Broger-Macky', '#broger-macky', 'images/teachers/broger-macky.jpg', 'Biology', '?', 'need bio'),
(16, 'Casey Hayes', '#hayes', 'images/teachers/hayes.jpg', 'Biology', '10', 'need bio'),
(17, 'Soheila Norouzi', '#norouzi', '', 'Honers Biology\r\n', '10', 'need bio'),
(18, 'Kate Sobel', '#sobel', 'images/teachers/sobel.jpg', 'Environmental Science', '9', 'need bio');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `access` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `access`) VALUES
(1, 'rosillo', '$2y$10$8d0fxbk4iXPMdUwkU7usGuV6oQRiZDTgJYex7IjhzGcJ/2wIVY.s.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calender`
--
ALTER TABLE `calender`
  ADD UNIQUE KEY `id` (`id`);

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
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`(10)),
  ADD UNIQUE KEY `password` (`password`(20));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calender`
--
ALTER TABLE `calender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
