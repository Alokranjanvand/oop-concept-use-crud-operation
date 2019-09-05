-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2017 at 06:27 PM
-- Server version: 5.5.35-1ubuntu1
-- PHP Version: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oops_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `city` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `age`, `city`, `gender`) VALUES
(1, 'Mohammad', 31, 'Rajkot', ''),
(2, 'Amit', 25, 'Rajkot', ''),
(3, 'Sagar', 33, 'Ahemdabad', ''),
(4, 'Nirav', 31, 'Banglore', ''),
(5, 'Niraj', 28, 'Pune', ''),
(6, 'Hardik', 29, 'Jamnager', ''),
(7, 'Piyush', 33, 'Rajkot', ''),
(8, 'Jimit', 35, 'Gondal', ''),
(9, 'Rashida', 6, 'Rajkot', 'F'),
(10, '', 0, '', ''),
(11, 'Hiren', 23, 'Gondal', ''),
(12, 'Pruthvi', 23, 'Rajkot', ''),
(13, 'Mohammad Bharmal', 32, 'Rajkot', 'M'),
(14, 'Parmar', 32, 'Gondal', 'M');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
