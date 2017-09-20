-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 07:59 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitm_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `std_id` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `course_credit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `std_id`, `course_id`, `course_title`, `course_duration`, `course_credit`) VALUES
(5, '', '110', 'PPL', '1 years', '120'),
(8, '', '102', 'HTML', '2 year', '150'),
(11, '', '105', 'B.Sc in Computer Science  (CS)', '4 years', '150'),
(12, '', '107', 'B.Sc in Computer Science  (CSE)', '4 years', '158'),
(13, '', '102', 'EEE', '3 years', '185');

-- --------------------------------------------------------

--
-- Table structure for table `crs_std`
--

CREATE TABLE `crs_std` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `crs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crs_std`
--

INSERT INTO `crs_std` (`id`, `std_id`, `crs_id`) VALUES
(2, 3, 8),
(4, 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `roll`, `name`, `email`, `phone`, `gender`, `dob`, `image`, `subject`) VALUES
(3, 630437, 'Imran', 'imran@gmail.coma', '01723333608', 'male', '1 - January - 1990', 'IMG_20131112_181807.jpg', 'HTML'),
(7, 630438, 'Rimon', 'rimon@gmail.com', '01789445455', 'male', '19 - July - 1998', 'Photo0011.jpg', 'PPL'),
(12, 653543, 'ertert', 'fgggfdhf@gmail.com', '01789542654', 'male', '18 - July - 2005', 'if.jpg', ''),
(13, 53563, 'admin', 'spider@gmail.com', '563565545', 'female', '14 - August - 1993', 'if.jpg', 'PPL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `std_id` (`std_id`);

--
-- Indexes for table `crs_std`
--
ALTER TABLE `crs_std`
  ADD PRIMARY KEY (`id`),
  ADD KEY `std_id` (`std_id`),
  ADD KEY `crs_id` (`crs_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`,`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `crs_std`
--
ALTER TABLE `crs_std`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `crs_std`
--
ALTER TABLE `crs_std`
  ADD CONSTRAINT `crs_std_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `student_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crs_std_ibfk_2` FOREIGN KEY (`crs_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
