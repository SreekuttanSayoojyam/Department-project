-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 12, 2021 at 02:47 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `department`
--

-- --------------------------------------------------------

--
-- Table structure for table `question_paper`
--

DROP TABLE IF EXISTS `question_paper`;
CREATE TABLE IF NOT EXISTS `question_paper` (
  `qpid` int(11) NOT NULL AUTO_INCREMENT,
  `sem` int(11) DEFAULT NULL,
  `qp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`qpid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_paper`
--

INSERT INTO `question_paper` (`qpid`, `sem`, `qp`) VALUES
(1, 1, 'fff'),
(2, 2, 'dftr'),
(3, 1, 'uploads/IMG-20190523-WA0001.jpg'),
(4, 1, 'uploads/IMG-20190523-WA0001.jpg'),
(5, 1, 'uploads/IMG-20190523-WA0001.jpg'),
(6, 1, 'uploads/IMG-20190523-WA0001.jpg'),
(7, 1, 'uploads/IMG-20190523-WA0001.jpg'),
(8, 1, 'uploads/IMG-20190523-WA0001.jpg'),
(9, 1, 'uploads/IMG-20190523-WA0001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `emailid` varchar(50) DEFAULT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `q1` int(1) NOT NULL,
  `q2` int(1) NOT NULL,
  `q3` int(1) NOT NULL,
  `q4` int(1) NOT NULL,
  `q5` int(1) NOT NULL,
  `student` varchar(50) NOT NULL,
  `sem` int(1) NOT NULL,
  KEY `emailid` (`emailid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`emailid`, `comment`, `q1`, `q2`, `q3`, `q4`, `q5`, `student`, `sem`) VALUES
('teacher1', '', 1, 1, 1, 1, 1, '', 0),
('teacher2', 'no comment', 4, 5, 5, 5, 8, '', 0),
('teacher2', '', 1, 2, 3, 4, 5, '', 0),
('teacher1', '', 1, 2, 3, 4, 5, '', 0),
('teacher1', '', 1, 1, 1, 1, 1, 'student1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `emailid` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `semester` int(1) NOT NULL,
  `batch` varchar(15) NOT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`emailid`),
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`emailid`, `password`, `name`, `address`, `phone`, `bloodgroup`, `semester`, `batch`, `status`) VALUES
('student2', 'password', 'student', 'abc', 123456789, 'A+', 4, '1999', 1),
('student1', 'password', 'Sneha P S', 'whefhfawhaqwdh', 9876543210, 'O+', 4, '2018', 1),
('student3', 'password', 'student3', 'abc', 123456789, 'A+', 4, '1999', NULL),
('student4', 'password', 'student3', 'abc', 123456789, 'A+', 4, '1999', 1),
('student5', 'password', 'student5', 'abc', 123456789, 'A+', 4, '1999', 1),
('student6', 'password', 'student6', 'abc', 123456789, 'A+', 4, '1999', 1),
('alan@gmail.com', 'password', 'Alan Dude', 'ALAN HOME', 9898133335, 'B+', 6, '2020', NULL),
('aaaaaaaaa', 'password', 'abbbbbbbbhi', 'sdgfjhegbgjhbjhfweyjuwf', 121325, 'o', 4, 'goog', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `emailid` varchar(50) DEFAULT NULL,
  `subject` varchar(50) NOT NULL,
  KEY `emailid` (`emailid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`emailid`, `subject`) VALUES
('teacher3', 'php'),
('teacher2', 'physics'),
('teacher1', 'physics'),
('teacher1', 'php');

-- --------------------------------------------------------

--
-- Table structure for table `subject2`
--

DROP TABLE IF EXISTS `subject2`;
CREATE TABLE IF NOT EXISTS `subject2` (
  `subject2` varchar(100) NOT NULL,
  UNIQUE KEY `subject2` (`subject2`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject2`
--

INSERT INTO `subject2` (`subject2`) VALUES
('abbbbb'),
('php'),
('physics');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

DROP TABLE IF EXISTS `syllabus`;
CREATE TABLE IF NOT EXISTS `syllabus` (
  `syllabus` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`syllabus`) VALUES
('uploads/IMG-20190523-WA0001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `emailid` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `joindate` date NOT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`emailid`),
  UNIQUE KEY `emailid` (`emailid`),
  UNIQUE KEY `emailid_2` (`emailid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`emailid`, `password`, `name`, `address`, `phone`, `bloodgroup`, `joindate`, `status`) VALUES
('teacher1', 'password', 'teacher1', 'address', 23654365754, 'a', '2011-01-01', 1),
('teacher2', 'password', 'teacher1', 'abc', 123, 'a', '2011-01-01', 1),
('teacher3', 'password', 'sneha', 'abc', 123, 'a', '2011-01-01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `year` int(1) NOT NULL,
  `day` int(1) NOT NULL,
  `p1` varchar(50) NOT NULL,
  `t1` varchar(50) NOT NULL,
  `p2` varchar(50) NOT NULL,
  `t2` varchar(50) NOT NULL,
  `p3` varchar(50) NOT NULL,
  `t3` varchar(50) NOT NULL,
  `p4` varchar(50) NOT NULL,
  `t4` varchar(50) NOT NULL,
  `p5` varchar(50) NOT NULL,
  `t5` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`year`, `day`, `p1`, `t1`, `p2`, `t2`, `p3`, `t3`, `p4`, `t4`, `p5`, `t5`, `id`) VALUES
(1, 1, 'php', 'teacher1', 'php', 'Sneha P S', 'php', 'Sneha P S', 'php', 'sneha', 'php', 'Sneha P S', 2),
(2, 2, 'abbbbb', 'teacher2', 'physics', 'teacher1', 'physics', 'teacher1', 'physics', 'teacher1', 'physics', 'teacher1', 3),
(2, 2, 'abbbbb', 'teacher2', 'physics', 'teacher1', 'physics', 'teacher1', 'physics', 'teacher1', 'physics', 'teacher1', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
