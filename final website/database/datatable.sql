-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2015 at 07:30 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `datastorage`
--

-- --------------------------------------------------------

--
-- Table structure for table `datatable`
--

CREATE TABLE IF NOT EXISTS `datatable` (
  `name` varchar(50) NOT NULL,
  `registration number` varchar(8) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `year` varchar(20) NOT NULL,
  `mobile number` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`registration number`),
  UNIQUE KEY `mobile number` (`mobile number`,`email`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datatable`
--

INSERT INTO `datatable` (`name`, `registration number`, `gender`, `year`, `mobile number`, `email`, `password`) VALUES
('jatin qwerty', '12345678', 'M', '1st year', '2222222222', 'son@gmail.com', 'oye'),
('Sonia Narula', '20142007', 'F', '1st year', '8853219642', 'sonia@gmail.com', 'sonia'),
('Jatin Narula', '20142008', 'M', '1st year', '8853219641', 'jatin.jt.narula@gmail.com', 'jatin@1996'),
('prabhjot singh', '20143004', 'M', '1st year', '9839603014', 'prabhjot@gmail.com', 'prabhjot'),
('prabhjot singh', '20143007', 'M', '1st year', '9839603019', 'prabh@gmail.com', 'prabh'),
('brijesh', '20143083', 'M', '1st year', '4444444444', 'brijesh@gmail.com', '123'),
('Manveer Singh', '20148061', 'M', '1st year', '8960312280', 'manveers96@gmail.com', 'manveer1996');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
