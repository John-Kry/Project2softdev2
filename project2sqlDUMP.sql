-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2015 at 01:49 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `champ`
--

CREATE TABLE IF NOT EXISTS `champ` (
  `CWID` tinytext,
  `Name` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `champ`
--

INSERT INTO `champ` (`CWID`, `Name`) VALUES
('568985', 'tyler');

-- --------------------------------------------------------

--
-- Table structure for table `foy`
--

CREATE TABLE IF NOT EXISTS `foy` (
  `CWID` tinytext,
  `Name` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fulton_street`
--

CREATE TABLE IF NOT EXISTS `fulton_street` (
  `CWID` tinytext,
  `Name` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gartland`
--

CREATE TABLE IF NOT EXISTS `gartland` (
  `CWID` tinytext,
  `Name` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leo`
--

CREATE TABLE IF NOT EXISTS `leo` (
  `CWID` text NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leo`
--

INSERT INTO `leo` (`CWID`, `Name`) VALUES
('20099999', 'John'),
('4355435435', 'jacob'),
('45345435', 'john'),
('gfdgf', 'gfgf'),
('gfdgf', 'gfgf');

-- --------------------------------------------------------

--
-- Table structure for table `lower_west`
--

CREATE TABLE IF NOT EXISTS `lower_west` (
  `CWID` tinytext,
  `Name` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marian`
--

CREATE TABLE IF NOT EXISTS `marian` (
  `CWID` tinytext,
  `Name` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `midrise`
--

CREATE TABLE IF NOT EXISTS `midrise` (
  `CWID` tinytext,
  `Name` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE IF NOT EXISTS `new` (
  `CWID` tinytext,
  `Name` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_fulton`
--

CREATE TABLE IF NOT EXISTS `new_fulton` (
  `CWID` tinytext,
  `Name` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sheahan`
--

CREATE TABLE IF NOT EXISTS `sheahan` (
  `CWID` tinytext,
  `Name` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `talmadge`
--

CREATE TABLE IF NOT EXISTS `talmadge` (
  `CWID` tinytext,
  `Name` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upper_west`
--

CREATE TABLE IF NOT EXISTS `upper_west` (
  `CWID` tinytext,
  `Name` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upper_west`
--

INSERT INTO `upper_west` (`CWID`, `Name`) VALUES
('gfdgfdgd', 'edmund');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
