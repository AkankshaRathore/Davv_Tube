1. Set the config file database name and username and password.


2. Import the student tabel

3. Run verification.html on localhost

4. verification.html contain the view code and called the userInfo.php for dynamically loading of data.
Check the path of image folder in it.And another file info.php which contain the code of allow and deny of user.
Status 0 = User apply for Acces
       1 = Admin allow user
       2 =  Admin deny the user

_____________________________________________________________________________________________________________________


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