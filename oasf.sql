-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2014 at 11:43 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oasf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(10) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_phone_no` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_category` varchar(10) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_name`, `admin_phone_no`, `admin_password`, `admin_email`, `admin_category`) VALUES
(1, '33333', 'Azizan Rizki', '012-4567890', '89admin', 'azizan.rizki@gmail.com', 'admin'),
(3, '783933', 'ariel peter', '993939393838', 'ariellove', 'ariel@gmail.com', 'admin'),
(4, '38383', 'amber rose', '292929292', 'ambelove', 'amber.rose@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `appointment_id` int(11) NOT NULL AUTO_INCREMENT,
  `lecturer_id` varchar(10) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `date` int(20) NOT NULL,
  `time_id` int(1) NOT NULL,
  PRIMARY KEY (`appointment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE IF NOT EXISTS `lecturer` (
  `lecturer_id` int(5) NOT NULL AUTO_INCREMENT,
  `lecturer_username` varchar(10) NOT NULL,
  `lecturer_name` varchar(50) NOT NULL,
  `lecturer_phone_no` varchar(20) NOT NULL,
  `lecturer_password` varchar(20) NOT NULL,
  `lecturer_email` varchar(50) NOT NULL,
  `lecturer_category` varchar(10) NOT NULL,
  PRIMARY KEY (`lecturer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `lecturer_username`, `lecturer_name`, `lecturer_phone_no`, `lecturer_password`, `lecturer_email`, `lecturer_category`) VALUES
(1, '01395', 'NURZETY AQTAR BINTI AHMAD AZUAN', '019-4567765', 'zety95', 'zety.aqtar@gmail.com', 'lecturer'),
(2, '1986', 'LUHUR BAYUAJI', '011-6637833', 'luhur86', 'luhur.bayuaji@gmail.com', 'lecturer'),
(3, '0882', 'RAHIWAN NAZAR BIN ROMLI', '013-4285676', 'wan82', 'rahiwan.nazar@gmail.com', 'lecturer'),
(4, '1773', 'BALSAM ABDUL JABBAR MUSTAFA', '017-33142222', 'balsam73', 'balsam.jabbar@gmail.com', 'lecturer'),
(8, '54321', 'samuel jackson', '0174521865', 'samuelxx', 'samuel@gmail.com', 'lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(5) NOT NULL AUTO_INCREMENT,
  `student_username` varchar(20) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_phone_no` varchar(20) NOT NULL,
  `student_password` varchar(20) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_category` varchar(10) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_username`, `student_name`, `student_phone_no`, `student_password`, `student_email`, `student_category`) VALUES
(1, 'ca11069', 'Liliana Binti Azmi', '0111-2949648', 'awesome77', 'lillix91@gmail.com', 'student'),
(2, 'ca11078', 'KHALISAH BINTI ABDUL BASID', '017-9347182', 'lisa78', 'khalisah.ab@gmail.com', 'student'),
(3, 'ca11080', 'NUR AMIRA BINTI AMIN', '012-3456789', 'mira80', 'amira.amin@gmail.com', 'student'),
(4, 'ca11063', 'ahmad ', '435789765889', '0123456789', 'ahmad@gmail.com', 'student'),
(12, 'ca11567', 'aiman amin', '7373737382', 'kenari', 'aiman@gmail.com', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `timerange`
--

CREATE TABLE IF NOT EXISTS `timerange` (
  `time_id` int(11) NOT NULL,
  `time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timerange`
--

INSERT INTO `timerange` (`time_id`, `time`) VALUES
(1, '8.00-9.00'),
(2, '9.00-10.00'),
(3, '10.00-11.00'),
(4, '11.00-12.00'),
(5, '12.00-13.00'),
(6, '13.00-14.00'),
(7, '14.00-15.00'),
(8, '15.00-16.00'),
(9, '16.00-17.00');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `lecturer_id` varchar(10) NOT NULL,
  `lecturer_name` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `day` varchar(10) NOT NULL,
  `time_id` int(11) NOT NULL,
  `details` varchar(20) NOT NULL,
  PRIMARY KEY (`lecturer_id`,`time_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`lecturer_id`, `lecturer_name`, `date`, `day`, `time_id`, `details`) VALUES
('', '', '', '', 0, ''),
('01395', 'NUR ZETY AQTAR BINTI AHMAD AZUAN', '1142014', 'Tuesday', 4, 'Meeting');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
