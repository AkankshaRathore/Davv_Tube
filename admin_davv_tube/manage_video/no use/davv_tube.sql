-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2013 at 09:56 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `griddemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `davv_tube`
--

CREATE TABLE IF NOT EXISTS `davv_tube` (
  `id` bigint(200) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `enroll_no` varchar(20) NOT NULL,
  `id_photo` varchar(300) NOT NULL,
  `Permission` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `davv_tube`
--

INSERT INTO `davv_tube` (`id`, `name`, `roll_no`, `enroll_no`, `id_photo`, `Permission`) VALUES
(1, 'misha', '488', '226', '66896_462890853766401_194723574_n.jpg', b'1'),
(2, 'komal', '40', '220', '526077_435006006583012_1276203044_n.jpg', b'1'),
(5, 'kanika', '36', '216', 'k.jpg', b'1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
