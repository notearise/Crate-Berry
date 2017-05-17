-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2014 at 04:27 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crateberry`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

SELECT * FROM uploads;
TRUNCATE uploads;
DROP TABLE IF EXISTS uploads;

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SELECT * FROM uploads;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `file`, `type`, `size`) VALUES
(1, '70455-(r)11d.jpg', 'image/jpeg', 19),
(2, '77190-3d-glass-green-effect.jpg', 'image/jpeg', 249);
