-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2015 at 12:12 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dataproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `rsoStudents`
--

CREATE TABLE IF NOT EXISTS `rsoStudents` (
  `rs_id` int(11) NOT NULL,
  `rso_name` varchar(30) NOT NULL,
  `student_email` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsoStudents`
--

INSERT INTO `rsoStudents` (`rs_id`, `rso_name`, `student_email`) VALUES
(1, 'ACM', 'bstan@knights.ucf.edu'),
(2, 'ACM', 'bstan@knights.ucf.edu'),
(3, '4EverKnights', 'bstan@knights.ucf.edu'),
(4, 'FTPLA', 'bstan@knights.ucf.edu'),
(5, 'ACM', 'bstan@knights.ucf.edu'),
(6, '4EverKnights', 'bstan@knights.ucf.edu'),
(7, '4EverKnights', 'bstan@knights.ucf.edu'),
(8, '4EverKnights', 'bstan@knights.ucf.edu'),
(9, '4EverKnights', 'bstan@knights.ucf.edu'),
(10, 'ACM', 'bstan@knights.ucf.edu'),
(11, '4EverKnights', 'bstan@knights.ucf.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rsoStudents`
--
ALTER TABLE `rsoStudents`
  ADD PRIMARY KEY (`rs_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rsoStudents`
--
ALTER TABLE `rsoStudents`
  MODIFY `rs_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
