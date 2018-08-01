-- phpMyAdmin SQL Dump
-- version 3.4.10.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2018 at 04:03 PM
-- Server version: 5.5.21
-- PHP Version: 5.6.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aikram2`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentInformation`
--

CREATE TABLE IF NOT EXISTS `studentInformation` (
  `moduleCode` varchar(255) NOT NULL,
  `studentID` int(25) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `overallMark` int(25) NOT NULL,
  PRIMARY KEY (`moduleCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentInformation``
--

INSERT INTO `studentInformation` (`moduleCode`, `studentID`, `firstName`, `lastName`, `overallMark`) VALUES
('COS5B23', '15011284', 'aamir', 'ikram', 86);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
