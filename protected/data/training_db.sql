-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2015 at 01:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `training_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Microsoft Office'),
(2, 'Graphic Design & Web Design'),
(3, 'Application & Software Development'),
(4, 'E-Lerning'),
(5, 'Mocrosoft Office Specialist (MOS)');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` varchar(10) NOT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text,
  `course_detail` text,
  `duration` varchar(10) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `status` enum('Close','Open') DEFAULT NULL,
  `img` text,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `category_id`, `description`, `course_detail`, `duration`, `price`, `status`, `img`, `created`) VALUES
('C001', 'สร้างและจัดการเว็บไซต์องค์กรด้วย Joomla', 3, 'สร้างและจัดการเว็บไซต์องค์กรด้วย Joomla', '', '12', '10000', 'Close', 'C001-picture.jpg', '2015-03-26 09:40:18'),
('C002', 'สร้างเว็บไซต์ใน 1 วัน ด้วย Joomla! ', 3, NULL, '', '12', '10000', 'Close', 'C002-picture.jpg', '2015-03-26 09:40:26'),
('C003', 'ครบเครื่องเรื่องการสร้างเว็บไซต์ด้วย Joomla! (Basic)', 3, NULL, '', '12', '4200', 'Open', 'C003-picture.jpg', '2015-03-26 09:40:30'),
('C004', 'ครบเครื่องเรื่องการสร้างเว็บไซต์ด้วย Joomla! (Advance)', 3, NULL, '', '12', '4200', 'Open', 'C004-picture.jpg', '2015-03-26 09:40:33'),
('C005', 'การใช้งานระบบ Microsoft Office 365', 3, NULL, '', '6', '2500', 'Open', 'C005-picture.jpg', '2015-03-26 09:40:40'),
('C006', 'สร้างรายงานด้วย Crystal Reports (Advance)', 3, NULL, '', '12', '4200', 'Open', 'C006-picture.jpg', '2015-03-26 09:40:45'),
('C007', 'เริ่มต้นสร้างรายงานด้วย Crystal Reports (Basic)', 3, NULL, '', '12', '4200', 'Open', 'C007-picture.jpg', '2015-03-26 09:40:48'),
('C008', 'สร้างเว็บไซต์ง่ายๆด้วย WordPress', 3, NULL, '', '12', '4200', 'Open', 'C008-picture.jpg', '2015-03-26 09:40:52'),
('C009', 'ตกแต่งภาพด้วยโปรแกรม Photoshop ', 2, NULL, '', '12', '4200', 'Open', 'C009-picture.jpg', '2015-03-26 09:40:55'),
('C010', 'การตัดต่อและผลิตสื่อวีดีโอด้วย Adobe Premiere ', 2, NULL, '', '18', '5500', 'Open', 'C010-picture.jpg', '2015-03-26 09:40:57'),
('C011', 'Adobe Premiere  8 ชั่วโมง (basic)', 2, NULL, '', '6', '2500', 'Open', 'C011-picture.jpg', '2015-03-26 09:41:00'),
('C012', 'พัฒนาเว็บไซต์อย่างมืออาชีพ (Web Design and Development with Photoshop & Dreamweaver) ', 2, NULL, '', '18', '5500', 'Open', 'C012-picture.jpg', '2015-03-26 09:41:03'),
('C013', 'สร้าง Animation ด้วย Adobe Flash ', 2, NULL, '', '18', '5500', 'Open', 'C013-picture.jpg', '2015-03-26 09:41:05'),
('C014', 'ผลิตสื่อการเรียนการสอนอย่างง่ายด้วย Microsoft PowerPoint ', 4, NULL, '', '12', '4200', 'Open', 'C014-picture.jpg', '2015-03-26 09:41:08'),
('C015', 'การผลิตสื่อการเรียนการสอนโดยใช้ Adobe Flash', 4, NULL, '', '12', '4200', 'Open', 'C015-picture.jpg', '2015-03-26 09:41:14'),
('C016', 'การจัดเก็บเอกสารอย่างมีประสิทธิภาพ ยุค IT', 1, NULL, '', '6', '2500', 'Open', 'C016-picture.jpg', '2015-03-26 09:41:16'),
('C017', 'เทคนิคการใช้งาน Microsoft Office  เพื่องานออฟฟิศ', 1, NULL, '', '12', '4200', 'Open', 'C017-picture.jpg', '2015-03-26 09:41:21'),
('C018', 'โปรแกรมสำนักงานเบื้องต้น Microsoft Office ', 1, NULL, '', '12', '4200', 'Open', 'C018-picture.jpg', '2015-03-26 09:41:27'),
('C019', 'Creating Professional Form with Excel', 1, NULL, '', '12', '4200', 'Open', 'C019-picture.jpg', '2015-03-26 09:41:31'),
('C020', 'Creating Advanced Conditional Formatting Report with Excel', 1, NULL, '', '12', '4200', 'Open', 'C020-picture.jpg', '2015-03-26 09:41:35'),
('C021', 'ปูพื้นฐานการใช้งานโปรแกรม Microsoft Excel เบื้องต้น (Basic)', 1, NULL, '', '6', '2500', 'Open', 'C021-picture.jpg', '2015-03-26 09:41:37'),
('C022', 'รอบรู้ใช้งานคล่องกับสูตรในโปรแกรม Excel (Advance)', 1, NULL, '', '12', '4200', 'Open', 'C022-picture.jpg', '2015-03-26 09:41:40'),
('C023', 'เจาะลึกสูตร Excel และเทคนิคประยุกต์สำหรับงาน HR (Excel HR)', 1, NULL, '', '6', '2500', 'Open', 'C023-picture.jpg', '2015-03-26 09:41:44'),
('C024', 'บริหารเงินสดและงานการเงิน ด้วยโปรแกรม Microsoft Excel ', 1, NULL, '', '12', '4200', 'Open', 'C024-picture.jpg', '2015-03-26 09:41:46'),
('C025', 'Microsoft Access Workshop สำหรับธุรกิจงานบริการ (Access Service)', 1, NULL, '', '18', '5500', 'Open', 'C025-picture.jpg', '2015-03-26 09:41:50'),
('C026', 'Microsoft Access Workshop สำหรับระบบงานสต๊อคสินค้า', 1, NULL, '', '18', '5500', 'Open', 'C026-picture.jpg', '2015-03-26 09:41:52'),
('C027', 'เรียนรู้การออกแบบฐานข้อมูลเบื้องต้นด้วย Microsoft Access', 1, NULL, '', '12', '4200', 'Open', 'C027-picture.jpg', '2015-03-26 09:41:55'),
('C028', 'เพิ่มลูกเล่นให้กับงานพรีเซนเทชั่นด้วยโปรแกรม Microsoft PowerPoint', 1, NULL, '', '6', '2500', 'Open', 'C028-picture.jpg', '2015-03-26 09:41:57'),
('C029', 'Outlook & Excel  เพื่อยกระดับการทำงาน ', 1, NULL, '', '18', '5500', 'Open', 'C029-picture.jpg', '2015-03-26 09:41:59'),
('C030', 'สร้างสำนักงานอัตโนมัติด้วย Microsoft Outlook ', 1, NULL, '', '6', '2500', 'Open', 'C030-picture.jpg', '2015-03-26 09:42:01'),
('C031', 'สร้างสื่อสิ่งพิมพ์งานประชาสัมพันธ์อย่างมืออาชีพ ด้วย Publisher ', 1, 'สร้างสื่อสิ่งพิมพ์งานประชาสัมพันธ์อย่างมืออาชีพ ด้วย Publisher ', '', '12', '4200', 'Open', 'C031-picture.jpg', '2015-03-26 09:42:04'),
('C032', 'Microsoft PowerPoint ขั้นสูง (PowerPoint Advance)', 1, NULL, '', '12', '4200', 'Open', 'C032-picture.jpg', '2015-03-26 09:42:06'),
('C033', 'MOS Word 2010,2013 Specialist', 5, NULL, '', '6', '2500', 'Open', 'C033-picture.jpg', '2015-03-26 09:42:08'),
('C034', 'MOS Word 2010,2013 Specialist (Expert)', 5, NULL, '', '6', '2500', 'Open', 'C034-picture.jpg', '2015-03-26 09:42:11'),
('C035', 'MOS Excel 2010,2013 Specialist', 5, NULL, '', '6', '2500', 'Open', 'C035-picture.jpg', '2015-03-26 09:42:14'),
('C036', 'MOS Excel 2010,2013 Specialist (Expert)', 5, NULL, '', '6', '2500', 'Open', 'C036-picture.jpg', '2015-03-26 09:42:17'),
('C037', 'MOS PowerPoint 2010,2013 Specialist', 5, NULL, '', '6', '2500', 'Open', 'C037-picture.jpg', '2015-03-26 09:42:19'),
('C038', 'MOS Access 2010,2013 Specialist', 5, NULL, '', '6', '2500', 'Open', 'C038-picture.jpg', '2015-03-26 09:42:21'),
('C039', 'MOS Outlook 2010,2013 Specialist', 5, NULL, '', '6', '2500', 'Open', 'C039-picture.jpg', '2015-03-26 09:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `courseopen`
--

CREATE TABLE IF NOT EXISTS `courseopen` (
  `copenid` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(10) DEFAULT NULL,
  `opendate` varchar(255) DEFAULT NULL,
  `recive` varchar(10) DEFAULT NULL,
  `status` enum('Close','Open') DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`copenid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `courseopen`
--

INSERT INTO `courseopen` (`copenid`, `course_id`, `opendate`, `recive`, `status`, `teacher_id`, `created`) VALUES
(1, 'C004', '--รอเปิด--', '30', 'Open', 1, '2015-03-26 08:32:51'),
(2, 'C005', '2-4 เมษายน 2558', '30', 'Open', 3, '2015-03-26 09:39:26'),
(3, 'C033', '1-2 May 2015', '50', 'Open', 1, '2015-03-31 10:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `courseregis`
--

CREATE TABLE IF NOT EXISTS `courseregis` (
  `registerid` int(11) NOT NULL AUTO_INCREMENT,
  `copenid` int(11) DEFAULT NULL,
  `course_id` varchar(10) NOT NULL,
  `stucode` varchar(20) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `faculity` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `address` text,
  `phone` varchar(20) NOT NULL,
  `score` varchar(255) DEFAULT NULL,
  `status` enum('No','Payment','Cancel') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`registerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `courseregis`
--

INSERT INTO `courseregis` (`registerid`, `copenid`, `course_id`, `stucode`, `fname`, `lname`, `faculity`, `major`, `address`, `phone`, `score`, `status`, `created`) VALUES
(1, 3, 'C033', '57004699990', 'กวีศักดิ์', 'ปัญญาใส', 'ปป', 'ปป', '', '022445229', '0', 'No', '2015-03-31 13:17:20'),
(2, 1, 'C004', '5634654654', 'hgjghkfgjfg', 'gfjkfgkfgkf', 'ghfgh', 'gdhgfh', '63453', '12556565', '', 'No', '2015-03-31 13:20:05'),
(3, 1, 'C004', '5555', '5555', '555', '55', '55', '555', '5555', NULL, 'No', '2015-03-31 13:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_mem_id` varchar(4) NOT NULL,
  `news_topic` varchar(100) NOT NULL,
  `news_detail` text,
  `news_create_date` date NOT NULL,
  `news_update_date` date NOT NULL,
  `news_status` enum('N','U') NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_mem_id`, `news_topic`, `news_detail`, `news_create_date`, `news_update_date`, `news_status`) VALUES
(4, '19', 'เว็บไซต์โรงพยาบาลเกาะยาวชัยพัฒน์ อำเภอเกาะยาว จังหวัดพังงา', '<p>เว็บไซต์โรงพยาบาลเกาะยาวชัยพัฒน์ อำเภอเกาะยาว จังหวัดพังงา &gt;&gt;&nbsp;<a href="http://kohyaohos.pngo.moph.go.th/index.php/newspost1">http://kohyaohos.pngo.moph.go.th/index.php/newspost1</a></p>\r\n', '2014-12-13', '2014-12-13', 'N'),
(2, '19', 'เป็นเรื่องที่แจ้ให้ทราบอย่างไม่เป็นทางการจนกว่าจะได้หรับเอกสารหรือคำสั่งที่ชัดเจน ! ', '1234 กรุณาใส่ข้อมูลให้ครบถ้วนและถูกต้อง เป็นเรื่องที่แจ้ให้ทราบอย่างไม่เป็นทางการจนกว่าจะได้หรับเอกสารหรือคำสั่งที่ชัดเจน ! ', '2014-12-13', '0000-00-00', 'N'),
(3, '19', 'หัวข้อข่าวประชาสัมพันธ์', '<p><strong>หัวข้อข่าวประชาสัมพันธ์ &nbsp;ดาวน์โหลด &gt;&gt;&nbsp;<a href="http://kohyaohos.pngo.moph.go.th/">http://kohyaohos.pngo.moph.go.th/</a>&nbsp;</strong><img src="http://images.diaryis.com/a/aiwa/w06.icon_new.gif" /></p>\r\n', '2014-12-13', '2014-12-13', 'N'),
(8, '19', 'Yii PHP Framework: Best for Web 2.0 Development', '<p>The Fast, Secure and ProfessionalPHP Framework</p>\r\n', '2014-12-13', '2014-12-13', 'N'),
(9, '19', 'Getting started Bootstrap 3', '<p>Bootstrap v3. has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>\r\n', '2014-12-13', '2014-12-13', 'N'),
(10, '19', 'โปรแกรมคลังข้อมูลสุขภาพระดับจังหวัด PDC', '<p>พัฒนาขึ้นตามนโยบายท่านผู้ตรวจราชการเครื่อข่ายบริการสุขภาพที่ 11 &nbsp;นพ.สุวรรณชัย &nbsp;วัฒนายิ่งเจริญชัย มีวัตถุประสงค์เพื่อการประมวลผลรายงานและตัวชี้วัด จากฐานข้อมูล 43 แฟ้ม เชื่อมโยงข้อมูลทั้งในระดับหน่วยบริการ ระดับจังหวัด และระดับเขต</p>\r\n', '2014-12-13', '2014-12-13', 'N'),
(11, '19', 'HDC: Health Data Center', '<p>Health Data Center&nbsp;ศูนย์เทคโนโลยสารสนเทศและการสื่อสาร ได้พัฒนาคลังข้อมูลทางการแพทย์และสุขภาพ ระดับจังหวัด (Data Center ) เพื่อเป็นทางเลือกสำหรับหน่วยงาน โดยใช้โปรแกรมที่เป็น Open Source ในการพัฒนา คือ Pentaho ,JSP ,MySQL และใช้ชื่อว่า Health Data Center(HDC)e text here</p>\r\n', '2014-12-13', '0000-00-00', 'N'),
(12, '19', 'พรบ. คอมพิวเตอร์ 2550 ทุกคนที่ใช้คอมพิวเตอร์ต้องรู้', '<p><strong>มาตรา ๙</strong> ผู้ใดทำให้เสียหาย ทำลาย แก้ไข เปลี่ยนแปลง หรือเพิ่มเติมไม่ว่าทั้งหมดหรือบางส่วน ซึ่งข้อมูลคอมพิวเตอร์ของผู้อื่นโดยมิชอบ ต้องระวางโทษจำคุกไม่เกินห้าปี หรือปรับไม่เกินหนึ่งแสนบาท</p>\r\n', '2014-12-13', '2014-12-13', 'N'),
(13, '19', 'VCCXB', '<p>CBCXBCXB</p>\r\n', '2014-12-22', '0000-00-00', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `roomid` int(11) NOT NULL AUTO_INCREMENT,
  `roomname` varchar(255) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `description` text,
  `tv` enum('No','Yes') DEFAULT NULL,
  `sound` enum('No','Yes') DEFAULT NULL,
  `projector` enum('No','Yes') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`roomid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `room_reserv`
--

CREATE TABLE IF NOT EXISTS `room_reserv` (
  `rid` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_permiss` enum('User','Manager','Admin','Super Admin') DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `username`, `password`, `user_permiss`) VALUES
(1, 'Admin', 'Admin', 'admin', 'admin', 'Super Admin'),
(2, '', '', 'gdxfhgh', 'dfgdfgdfg', 'User');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
