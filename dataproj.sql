-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2015 at 10:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

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
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `username` varchar(50) NOT NULL,
  `eID` int(100) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cid`),
  KEY `username` (`username`),
  KEY `username_2` (`username`),
  KEY `eID` (`eID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`username`, `eID`, `comment`, `cid`) VALUES
('a', 1, 'Comments are done for the most part', 7);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `eID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `view` varchar(11) NOT NULL,
  PRIMARY KEY (`eID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eID`, `name`, `category`, `description`, `date`, `phone`, `email`, `view`) VALUES
(11, 'UCF Fan Fest', 'sports', 'The UCF Fan Fest is an event that introduces the current year Football team and Staff to the student body and general fan base. Personalize autographs opportunities and giveaways!', '08/21/2015 6:00 PM', '787-898-8989', 'mgarcia@athletics.ucf.edu', 'public'),
(12, 'Salary Negotiation', 'Career Jobs', 'What is an appropriate salary? Learn to evaluate the worth of the whole benefits package. Know what’s important to you, research the market, and have realistic expectations before you begin salary discussions.', '07/22/2015 11:00 AM', '407-823-2361', 'career@ucf.edu', 'public'),
(13, 'Board of Trustees Meeting', 'Meeting', 'No description provided.\r\n', '07/23/2015 9:30 AM', '407-823-5711', 'Cindy.Hawks@ucf.edu', 'private'),
(14, 'UCF College of Sciences Scholarship Luncheon', 'Uncategorized/Other', 'The UCF College of Sciences will hold its third Scholarship\r\nLuncheon to celebrate its supportive donors and accomplished student\r\nscholarship recipients. To learn more, please contact Julia Anderson at julia.anderson@ucf.edu.', '07/25/2015 11:09 AM', 'N/A', 'N/A', 'ACM'),
(15, 'The Importance of Being Earnest, A Trivial Comedy for Serious People', 'Concert/Performance', 'By\r\nOscar Wilde \r\nDirected\r\nby Mark Routhier\r\n\r\nA delightful romp\r\nof mistaken identities, witty banter, and larger-than-life characters! \r\nWhile\r\nGwendolyn and Cecily both fall in love with a man named Ernest, Jack and\r\nAlgernon learn the importance of being earnest. \r\n“The Importance of Being Earnest is the\r\nrare work of art that achieves perfection on its own terms.” The New York Times\r\n\r\n$20 standard, $10 UCF ID \r\nMain Stage, 4000 Central Florida Blvd., Orlando \r\nBuy tickets in advance online, on the phone, or in person:', '08/27/2015 8:00 PM', '407-823-1500', 'theatre@ucf.edu', 'public'),
(16, 'UCF Alumni: COS Graduation Reception for Summer 2015', ' Social Event', 'The UCF College of Sciences, in partnership with the UCF College of Sciences Alumni Chapter, will host a Summer 2015 Graduation Reception. The reception serves as a celebration of camaraderie in which College of Sciences graduates and their guests are able to say farewell to faculty, take photos with Knightro, return rental regalia, and enjoy refreshments. RSVP online at www.sciences.ucf.edu/reception by July 31.', '08/08/2015 4:30 PM', 'N/A', 'Julia.Anderson@ucf.edu', 'private');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `name` varchar(20) NOT NULL,
  `address` varchar(80) NOT NULL,
  `log` float(10,6) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`name`, `address`, `log`, `lat`, `ID`) VALUES
('houston', '', -98.000000, 30.000000, 6),
('ucf', '', -81.200211, 28.601252, 7),
('UCF stadium', 'Lakeland, FL 33801, United States', -81.909599, 28.074404, 8),
('Frankie Johnnie & Lu', '939 W El Camino Real, Mountain View, CA', -122.085823, 37.386337, 9),
('Frankie Johnnie & Lu', '939 W El Camino Real, Mountain View, CA', -122.085823, 37.386337, 10),
('Frankie Johnnie & Lu', '939 W El Camino Real, Mountain View, CA', -122.085823, 37.386337, 11),
('Amici''s East Coast P', '790 Castro St, Mountain View, CA', -122.083237, 37.387138, 12),
('Kapp''s Pizza Bar & G', '191 Castro St, Mountain View, CA', -122.078918, 37.393887, 13),
('Round Table Pizza: M', '570 N Shoreline Blvd, Mountain View, CA', -122.079353, 37.402653, 14),
('Tony & Alba''s Pizza ', '619 Escuela Ave, Mountain View, CA', -122.095528, 37.394012, 15),
('Oregano''s Wood-Fired', '4546 El Camino Real, Los Altos, CA', -122.114647, 37.401726, 16),
('UCF Soccer Complex', 'UCF', -81.160126, 28.680649, 20),
('UCF Soccer Complex', 'UCF', -81.160126, 28.680649, 21),
('andrea', 'andrea', -81.958008, 26.941660, 22),
('UCF Soccer Complex', 'UCF', -81.160126, 28.680649, 23),
('UCF Soccer Complex', 'UCF', -81.160126, 28.680649, 24),
('UCF Soccer Complex', 'UCF Soccer Complex', -81.738281, 28.497662, 25),
('UCF Soccer Complex', 'UCF Soccer Complex', -81.738281, 28.497662, 26),
('UCF Soccer Complex', 'UCF', -81.562500, 28.536276, 27),
('Bright House Network', '4465 Knights Victory Way, Orlando, FL 32816, United States', -81.192574, 28.607883, 28),
('Career Services', '4000 Central Florida Blvd, Orlando, FL 32816, United States', -81.199348, 28.604851, 29),
('Fairwinds Alumni Cen', '4000 Central Florida Blvd, Orlando, FL 32816, United States', -81.386719, 28.381735, 30),
('Student Union: Cape ', '4000 Central Florida Boulevard, Orlando, FL 32816, United States', -81.342773, 28.536276, 31),
('UCF-Theather', '4000 Central Florida Blvd, Orlando, FL 32816, United States', -81.518555, 28.613459, 32),
('Psychology Building', '4000 Central Florida Blvd, Orlando, FL 32816, United States', -81.474609, 28.497662, 33);

-- --------------------------------------------------------

--
-- Table structure for table `rso`
--

CREATE TABLE IF NOT EXISTS `rso` (
  `rso_id` int(11) NOT NULL AUTO_INCREMENT,
  `rso_name` varchar(30) NOT NULL,
  `admin` varchar(30) NOT NULL,
  `university` varchar(12) NOT NULL,
  `num_students` int(11) NOT NULL,
  `visible` tinyint(4) NOT NULL,
  PRIMARY KEY (`rso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `rso`
--

INSERT INTO `rso` (`rso_id`, `rso_name`, `admin`, `university`, `num_students`, `visible`) VALUES
(1, '4EverKnights', 'skroff@knights.ucf.edu', 'UCF', 20, 1),
(2, 'ACM', 'jsmith@knights.ucf.edu', 'UCF', 45, 1),
(3, 'FTPLA', 'rmansy@knights.ucf.edu', 'UCF', 15, 1),
(4, 'Golden Key', 'jkramer@mdc.edu', 'MDC', 32, 0),
(5, 'Technical Futures', 'mland@mdc.edu', 'MDC', 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rsostudents`
--

CREATE TABLE IF NOT EXISTS `rsostudents` (
  `rs_id` int(11) NOT NULL AUTO_INCREMENT,
  `rso_name` varchar(30) NOT NULL,
  `student_email` varchar(30) NOT NULL,
  PRIMARY KEY (`rs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `rsostudents`
--

INSERT INTO `rsostudents` (`rs_id`, `rso_name`, `student_email`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `university` varchar(30) NOT NULL,
  `access` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`username`, `password`, `university`, `access`) VALUES
('a', 'a', 'UCF', 'student'),
('cheuaman@knights.ucf.edu', 'disney', 'UCF', NULL),
('dcapaldi@knights.ucf.edu', 'secret', 'UCF', NULL),
('jkramer@mdc.edu', 'godinez', 'MDC', 'admin'),
('jsmith@knights.ucf.edu', 'doctorwho', 'UCF', 'admin'),
('mlang@mdc.edu', 'dragons', 'MDC', 'admin'),
('rmansy@knights.ucf.edu', 'littlemermaid', 'UCF', 'admin'),
('skroff@knights.ucf.edu', 'acm', 'UCF', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `u_name` varchar(12) NOT NULL,
  `location` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `num_students` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `website` varchar(30) NOT NULL,
  PRIMARY KEY (`u_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`username`) REFERENCES `students` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
