-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2014 at 01:44 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_davv_tube`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `DOB` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `sen_no` varchar(20) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(120) DEFAULT NULL,
  `lname` varchar(120) DEFAULT NULL,
  `gender` varchar(120) DEFAULT NULL,
  `DOB` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `department` varchar(120) DEFAULT NULL,
  `course` varchar(120) DEFAULT NULL,
  `semester` varchar(120) DEFAULT NULL,
  `enroll_no` varchar(120) DEFAULT NULL,
  `roll_no` varchar(120) DEFAULT NULL,
  `attached_img` varchar(120) DEFAULT NULL,
  `type` varchar(120) DEFAULT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `gender`, `DOB`, `email`, `department`, `course`, `semester`, `enroll_no`, `roll_no`, `attached_img`, `type`, `status`) VALUES
(1, 'komal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(2, 'komak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(3, 'komal', 'Rathore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(4, 'komal', 'hgj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(5, 'komak', 'Rathore', 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(6, 'lilna', 'Rathore', 'M', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(7, 'lilna', 'Rathore', 'M', '27-7-1992', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(8, 'lilna', 'Rathore', 'M', '27-7-1992', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(9, 'lilna', 'Rathore', 'M', '27-7-1992', 'komal@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(10, 'lilna', 'Rathore', 'M', '27-7-1992', 'komal@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', 'dec24.jpg', 'image/jpeg', 1),
(11, 'lilna', 'Rathore', 'M', '27-7-1992', 'komal@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', 'dec24.jpg', 'image/jpeg', 1),
(12, 'komal', 'Rathore', 'M', '27-7-1992', 'komal@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', 'images (2).jpg', 'image/jpeg', 1),
(13, 'komak', 'Rathore', 'F', '27-7-1992', 'komal.rathore40@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', '1491178_489585531158589_833410536_n.jpg', 'image/jpeg', 2),
(14, 'komak', 'Rathore', 'F', '27-7-1992', 'komal.rathore40@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', '1491178_489585531158589_833410536_n.jpg', 'image/jpeg', 2),
(15, 'komak', 'Rathore', 'F', '27-7-1992', 'komal@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', 'IMG4816A.jpg', 'image/jpeg', 2),
(16, 'komal', 'Rathore', 'F', '27-7-1992', 'komal@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', 'jnv barwani.jpg', 'image/jpeg', 1),
(17, 'komal', 'Rathore', 'F', '27-7-1992', 'komal@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', 'jnv barwani.jpg', 'image/jpeg', 1),
(18, 'komal', 'Rathore', 'F', '27-7-1992', 'komal@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', 'images (7).jpg', 'image/jpeg', 2),
(19, 'komal', 'RAthore', 'M', '27-7-1992', 'komal@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', 'images (9).jpg', 'image/jpeg', 1),
(20, 'lilna', 'Rathore', 'F', '27-7-1992', 'komal@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', '2013-12-15 .jpg', 'image/jpeg', 2),
(21, 'komal', 'RAthore', 'F', '', '', '', '', '', '', '', 'jnv barwani.jpg', 'image/jpeg', 1),
(22, '', '', 'M', '', '', '', '', '', '', '', 'Copy of images (4).jpg', 'image/jpeg', 2),
(23, 'komal', 'Rathore', 'F', '27-7-1992', 'komal@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', 'default_cover_8_14d0436d687b1b22589bbc67e793e75e.jpg', 'image/jpeg', 1),
(24, 'komal', 'Rathore', 'F', '27-7-1992', 'komal@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', '1483831_591722090901051_1008760932_n.jpg', 'image/jpeg', 1),
(25, 'komal', 'Rathore', 'F', '27-7-1992', '', '', 'MCA', '10', 'DE-)9-2013', '10245', 'it.jpg', 'image/jpeg', 2),
(26, 'komal', 'Rathore', 'F', '27-7-1992', 'komal.rathore40@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', 'it.jpg', 'image/jpeg', 1),
(27, 'komal', 'Rathore', 'F', '27-7-1992', 'komal.rathore40@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', 'it1.jpg', 'image/jpeg', 1),
(28, 'komal', 'Rathore', 'F', '27-7-1992', 'komal.rathore40@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', 'komal.jpg', 'image/jpeg', 1),
(29, 'komal', 'Rathore', 'F', '27-7-1992', 'komal.rathore40@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', 'komal1.jpg', 'image/jpeg', 1),
(30, 'komal', 'Rathore', 'F', '27-7-1992', 'komal.rathore40@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', 'komal2.jpg', 'image/jpeg', 2),
(31, 'komal', 'Rathore', 'F', '27-7-1992', 'komal.rathore40@gmail.com', 'iips.edu.in', 'MCA', '10', 'DE-)9-2013', '10245', 'WP_20131214_012.jpg', 'image/jpeg', 2),
(32, 'komal', '', '', '', '', 'School of Biochemistry', '', '', '', '', 'images.jpg', 'image/jpeg', 1),
(33, 'komal', '', 'F', '', '', 'School of Biochemistry', '', '', '', '', 'images.jpg', 'image/jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test_videos`
--

CREATE TABLE IF NOT EXISTS `test_videos` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `url` varchar(200) NOT NULL,
  `like` int(11) NOT NULL,
  `unlike` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `test_videos`
--

INSERT INTO `test_videos` (`id`, `name`, `url`, `like`, `unlike`) VALUES
(1, 'Mein Tenu Samjhawan.mp4', 'http://127.0.0.1/My_davv_tube/uploaded/Mein Tenu Samjhawan.mp4', 0, 0),
(2, 'Dave Days - Olive You feat. Kimmi Smiles (lyrics).mp4', 'http://127.0.0.1/My_davv_tube/uploaded/Dave Days - Olive You feat. Kimmi Smiles (lyrics).mp4', 0, 0),
(3, 'OneRepublic - All The Right Moves.mp4', 'http://127.0.0.1/My_davv_tube/uploaded/OneRepublic - All The Right Moves.mp4', 0, 0),
(5, 'TAYLOR SWIFT - You Belong With Me (OFFICIAL MUSIC VIDEO) [www.keepvid.com].mp4', 'http://127.0.0.1/My_davv_tube/uploaded/TAYLOR SWIFT - You Belong With Me (OFFICIAL MUSIC VIDEO) [www.keepvid.com].mp4', 0, 0),
(6, 'Jennifer Lopez - On The Floor ft. Pitbull.mp4', 'http://127.0.0.1/My_davv_tube/DAVV_tube_template/uploaded/Jennifer Lopez - On The Floor ft. Pitbull.mp4', 0, 0),
(7, 'The Band Perry - If I Die Young.mp4', 'http://127.0.0.1/My_davv_tube/DAVV_tube_template/uploaded/The Band Perry - If I Die Young [www.keepvid.com].mp4', 0, 0),
(8, 'Twilight Breaking Dawn Music Video - Christina Perri A Thousand Years - Official [HD].mp4', 'http://127.0.0.1/My_davv_tube/DAVV_tube_template/uploaded/Twilight Breaking Dawn Music Video - Christina Perri A Thousand Years - Official [HD].mp4', 0, 0),
(9, 'The Lion Sleeps Tonight - Hippo Singer.mp4', 'http://127.0.0.1/My_davv_tube/DAVV_tube_template/uploaded/The Lion Sleeps Tonight - Hippo Singer.mp4', 0, 0),
(10, 'Anwar_Maula_Mere.webm', 'http://127.0.0.1/My_davv_tube/DAVV_tube_template/uploaded/Anwar_Maula_Mere.webm', 0, 0),
(11, 'Apple_iWorld_-_World_After_30_Years.webm', 'http://127.0.0.1/My_davv_tube/DAVV_tube_template/uploaded/Apple_iWorld_-_World_After_30_Years.webm', 0, 0),
(12, 'Apple_iWorld_-_World_After_30_Years.webm', 'http://127.0.0.1/My_davv_tube/DAVV_tube_template/uploaded/Apple_iWorld_-_World_After_30_Years.webm', 0, 0),
(13, 'Example - Kickstarts (Bar9 Remix Official Video) [www.keepvid.com].mp4', 'http://127.0.0.1/My_davv_tube/DAVV_tube_template/uploaded/Example - Kickstarts (Bar9 Remix Official Video) [www.keepvid.com].mp4', 0, 0),
(14, 'Coldplay - Paradise.mp4', 'http://127.0.0.1/My_davv_tube/DAVV_tube_template/uploaded/Coldplay - Paradise.mp4', 0, 0),
(15, 'Hes The Pirate By Klaus Badelt  Hans Zimmer LIVE.mp4.mp4', 'http://127.0.0.1/My_davv_tube/DAVV_tube_template/uploaded/Hes The Pirate By Klaus Badelt  Hans Zimmer LIVE.mp4.mp4', 0, 0),
(16, 'Lee DeWyze - Sweet Serendipity.mp4', 'vfssfvfv', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `video_list`
--

CREATE TABLE IF NOT EXISTS `video_list` (
  `video_id` int(200) NOT NULL AUTO_INCREMENT,
  `instructor_name` varchar(70) NOT NULL,
  `category` varchar(80) NOT NULL,
  `title` varchar(70) NOT NULL,
  `description` varchar(400) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `duration` varchar(20) NOT NULL,
  `views` int(255) NOT NULL,
  `original_name` varchar(80) NOT NULL,
  `file_name` varchar(80) NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `video_list`
--

INSERT INTO `video_list` (`video_id`, `instructor_name`, `category`, `title`, `description`, `tags`, `date_created`, `duration`, `views`, `original_name`, `file_name`) VALUES
(1, 'helloname', 'helloname', 'helloname', 'helloname', 'helloname', '2013-12-25', '4:56', 8, 'mp4', 'misha'),
(2, 'Alex goot', 'General', 'Preety eyes', 'sweet video', '#alexgoot', '2013-12-30', '4:15', 8, 'Pretty Eye', 'Pretty Eyes - Alex Goot [www'),
(3, 'Instructor', 'General', 'komal', 'qwerty', '#goodgirl', '2013-12-30', '5:05', 8, 'Lee DeWyze - Sweet Serendipity.mp4', 'Lee DeWyze - Sweet Serendipity'),
(4, 'bedi', 'computer_science', 'hithere', 'vvfvd', '#AI', '2013-12-27', '2:00', 8, 'Lee DeWyze - Sweet Serendipity.ogv', 'Lee DeWyze - Sweet Serendipity'),
(5, 'xyz', 'General', 'say na ', 'nothing', '#movie', '2013-12-30', '4:00', 8, 'SAY_NA.m4v', 'SAY_NA'),
(6, 'xyz', 'General', 'say na', 'nothing', '#movie', '2013-12-30', '4:00', 8, 'SAY_NA.mp4', 'SAY_NA'),
(7, 'xyz', 'General', 'say na', 'nothing', 'mkmalv', '2013-12-30', '5:00', 8, 'SAY_NA.ogv', 'SAY_NA'),
(8, 'fvfev', 'General', 'say na', 'nothing', '#movie', '2013-12-30', '3:00', 8, 'SAY_NA.web', 'SAY_NA'),
(11, 'sid', 'General', 'wake up', 'be happy', '#wakeupsid', '2013-12-30', '3:00', 9, 'Life Is Crazy - Wake Up Sid (2009) _HD_ Music Videos.mp4', 'Life Is Crazy - Wake Up Sid (2009) _HD_ Music Videos'),
(13, 'stanford proff', 'Computer_Science', 'Learn to program', 'Learn to program', '#LTP', '2013-12-31', '4:00', 9, '2 - 1 - Welcome to LTP (035).mp4', '2 - 1 - Welcome to LTP (035)'),
(14, 'Jillian Hess -Stanford Proffesor', 'Computer_Science', 'Database Authorization', 'Introduction to database', '#database', '2014-01-01', '3:00', 1, '14 - 1 - Authorization (11 min).mp4', '14 - 1 - Authorization (11 min)');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
