-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2017 at 11:11 PM
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
(1, 'Gabriela Rosillo', '#rosillo', 'images/teachers/rosillo.jpg', 'Coordinator, Art and Design', '10, 11, and 12\r\n', 'Coordinator, design teacher, graduated with a degree in Art and Design, concentration in graphic design, from Cal Poly State University, San Luis Obispo. Having worked as a freelance graphic designer and art director, she has experience in conceptual design, production, photography, photo retouching, and web design. She received her teaching credential from Cal State University, Northridge, and her CTE training at UCLA. She connects with students both in design classes and in her award-winning Yearbook program.'),
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
