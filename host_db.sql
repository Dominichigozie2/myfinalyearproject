-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 09:58 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `host_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE IF NOT EXISTS `admin_tb` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `aname` varchar(200) NOT NULL,
  `apass` varchar(200) NOT NULL,
  `amail` varchar(200) NOT NULL,
  `aphone` varchar(200) NOT NULL,
  `aimg` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `aname`, `apass`, `amail`, `aphone`, `aimg`) VALUES
(4, 'Dominic', '090', 'dom@gmail.com', '07046586037', 'portrait-african-american-man_23-2149072178.webp');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_tb`
--

CREATE TABLE IF NOT EXISTS `allocation_tb` (
  `a_id` int(200) NOT NULL AUTO_INCREMENT,
  `property_id` varchar(200) NOT NULL,
  `name_id` varchar(200) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `allocation_tb`
--

INSERT INTO `allocation_tb` (`a_id`, `property_id`, `name_id`) VALUES
(44, '27', '2467'),
(45, '27', '7117');

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE IF NOT EXISTS `approve` (
  `aid` int(200) NOT NULL AUTO_INCREMENT,
  `auser` varchar(200) NOT NULL,
  `aprop` varchar(200) NOT NULL,
  `approval` enum('No','Yes') NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact_tb`
--

CREATE TABLE IF NOT EXISTS `contact_tb` (
  `cid` int(200) NOT NULL AUTO_INCREMENT,
  `cname` varchar(200) NOT NULL,
  `cmail` varchar(200) NOT NULL,
  `cphone` varchar(200) NOT NULL,
  `csubject` varchar(200) NOT NULL,
  `ccomment` longtext NOT NULL,
  `cuid` varchar(200) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact_tb`
--

INSERT INTO `contact_tb` (`cid`, `cname`, `cmail`, `cphone`, `csubject`, `ccomment`, `cuid`) VALUES
(1, 'Dominic', 'chigoziedominic@gmail.com', '07046586037', 'Vote of Thanks', 'I thank you for a work well done in this project, it is really reducing the stress in the allocation process of the student, thanks to you', '6714'),
(3, 'Doris', 'doris@gmail.com', '08063334177', 'a wonderful project', 'I thank you for a work well done in this project, it is really reducing the stress in the allocation process of the student, thanks to you', '2467'),
(4, 'Chisom', 'chisom@gmail.com', '07046586037', 'Vote of Thanks', 'I think this is a wonderful project.', '9632');

-- --------------------------------------------------------

--
-- Table structure for table `feed_db`
--

CREATE TABLE IF NOT EXISTS `feed_db` (
  `cid` int(200) NOT NULL AUTO_INCREMENT,
  `cname` varchar(200) NOT NULL,
  `cmail` varchar(200) NOT NULL,
  `cphone` varchar(200) NOT NULL,
  `csubject` varchar(200) NOT NULL,
  `ccomment` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feed_db`
--

INSERT INTO `feed_db` (`cid`, `cname`, `cmail`, `cphone`, `csubject`, `ccomment`) VALUES
(1, 'dominic', 'dominic@gmail.com', '08063334177', 'conplaint', 'our landlord is harrasing me'),
(2, 'Dominic', 'Dom@gmail.com', '08063334177', 'Thanks', ' Thanks you\r\n                       '),
(3, 'Dominic', 'Dom@gmail.com', '08063334177', 'Thanks', ' Thanks you\r\n                       '),
(4, 'chidimma', 'ifedioralailia@yahoo.com', '08063334177', 'I am being harassed ', 'The study will consider the perspectives of both students and administrators, with a focus on improv');

-- --------------------------------------------------------

--
-- Table structure for table `hostelproposal`
--

CREATE TABLE IF NOT EXISTS `hostelproposal` (
  `prop_id` int(200) NOT NULL AUTO_INCREMENT,
  `prop_gender` enum('Male','Female') NOT NULL,
  `prop_fee` mediumtext NOT NULL,
  `prop_state` mediumtext NOT NULL,
  `prop_dep` enum('elect','mech','cit') NOT NULL,
  `prop_uid` int(200) NOT NULL,
  `prop-pid` int(200) NOT NULL,
  PRIMARY KEY (`prop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hostelproposal`
--

INSERT INTO `hostelproposal` (`prop_id`, `prop_gender`, `prop_fee`, `prop_state`, `prop_dep`, `prop_uid`, `prop-pid`) VALUES
(3, 'Female', '300000', 'umueri', 'cit', 7117, 0),
(4, 'Female', '60000', 'Onitsha', 'cit', 2467, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hubby_tb`
--

CREATE TABLE IF NOT EXISTS `hubby_tb` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `ename` varchar(200) NOT NULL,
  `use_id` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `hubby_tb`
--

INSERT INTO `hubby_tb` (`id`, `ename`, `use_id`) VALUES
(16, '2070', 'Singing'),
(17, '2070', 'Movies'),
(18, '2070', 'other'),
(19, '2070', 'Singing'),
(20, '2070', 'Movies'),
(21, '2070', 'other'),
(22, '2467', 'Singing'),
(23, '2467', 'Dancing'),
(24, '2467', 'Movies'),
(25, '2467', 'Reading'),
(26, '2467', 'other'),
(27, '7117', 'Singing'),
(28, '7117', 'other');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `no_id` int(200) NOT NULL AUTO_INCREMENT,
  `sender_id` varchar(200) NOT NULL,
  `recipient_id` int(200) NOT NULL,
  `msg` longtext NOT NULL,
  `sdate` date NOT NULL,
  `Heading` text NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`no_id`, `sender_id`, `recipient_id`, `msg`, `sdate`, `Heading`) VALUES
(1, '4', 0, 'In this code, the functions sendIndividualNotification(), sendGeneralNotification(), and sendGroupNotification() are used to insert the notifications into the notifications table based on the sender, recipient, and message parameters.\r\n\r\nYou can customize this code to fit your specific requirements, such as adding additional tables or fields, implementing user authentication, and styling the notification bar on the front end.', '2023-06-28', 'Make Sure You Read'),
(2, '4', 0, 'make sure to do your Saturday clean often, some compliant have been coming to my table that you do come back late at night, Please desist from those illegal act', '2023-06-28', 'Clean Up');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `pid` int(200) NOT NULL AUTO_INCREMENT,
  `utitle` varchar(200) NOT NULL,
  `ulocation` varchar(200) NOT NULL,
  `uprice` varchar(200) NOT NULL,
  `uroom` varchar(200) NOT NULL,
  `ukitchen` varchar(200) NOT NULL,
  `ubathroom` varchar(200) NOT NULL,
  `p_id` varchar(200) NOT NULL,
  `uid` int(200) NOT NULL,
  `ubuildpic` varchar(200) NOT NULL,
  `uroompic` varchar(200) NOT NULL,
  `ukitchenpic` varchar(200) NOT NULL,
  `ubathroompic` varchar(200) NOT NULL,
  `uuserpic` varchar(200) NOT NULL,
  `uwater` varchar(200) NOT NULL,
  `usecuritty` varchar(200) NOT NULL,
  `upeople` varchar(200) NOT NULL,
  `ulightfee` varchar(200) NOT NULL,
  `usecurityfee` varchar(200) NOT NULL,
  `uduration` varchar(200) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pid`, `utitle`, `ulocation`, `uprice`, `uroom`, `ukitchen`, `ubathroom`, `p_id`, `uid`, `ubuildpic`, `uroompic`, `ukitchenpic`, `ubathroompic`, `uuserpic`, `uwater`, `usecuritty`, `upeople`, `ulightfee`, `usecurityfee`, `uduration`) VALUES
(27, 'Smaall', 'Awka', '60000', '1', 'Yes', 'No', '9632', 0, 'download (2).jfif', 'ch-05.jpg', 'download (3).jfif', 'ch-08-720x800.jpg', '', 'No', 'No', '1', '300', '9', '1year'),
(28, 'Jesus Zone', 'Obosi', '100000', '1', 'Yes', 'Yes', '', 0, 'download (2).jfif', 'images.jpeg', 'download (3).jfif', 'ch-08-720x800.jpg', '', 'No', 'No', '2', '800', '300', '1'),
(29, 'Jesus Zone', 'awka', '60000', '1', 'Yes', 'Yes', '7427', 0, 'rooms (8).jpg', 'rooms (1).jpg', 'room5.jfif', 'rooms (4).jpg', '', 'Yes', 'Yes', '2', '700', '3000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE IF NOT EXISTS `proposal` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `uname` varchar(200) NOT NULL,
  `ulocation` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `room` varchar(200) NOT NULL,
  `kitchen` enum('Yes','No') NOT NULL,
  `bath` enum('Yes','No') NOT NULL,
  `p_id` text NOT NULL,
  `build-p` varchar(200) NOT NULL,
  `room-p` varchar(200) NOT NULL,
  `kitch-p` varchar(200) NOT NULL,
  `bath-p` varchar(200) NOT NULL,
  `water` enum('Yes','No') NOT NULL,
  `usecurity` enum('Yes','No') NOT NULL,
  `people` varchar(200) NOT NULL,
  `lightf` varchar(200) NOT NULL,
  `securityf` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `pub` enum('No','Yes') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id`, `uname`, `ulocation`, `price`, `room`, `kitchen`, `bath`, `p_id`, `build-p`, `room-p`, `kitch-p`, `bath-p`, `water`, `usecurity`, `people`, `lightf`, `securityf`, `duration`, `pub`) VALUES
(1, 'Jesus Zone', 'awka', '60000', '1', 'Yes', 'Yes', '7427', 'rooms (8).jpg', 'rooms (1).jpg', 'room5.jfif', 'rooms (4).jpg', 'Yes', 'Yes', '2', '700', '3000', '1', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE IF NOT EXISTS `tb_about` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `ucontent` varchar(200) NOT NULL,
  `uimage` longtext NOT NULL,
  `uvid` varchar(200) NOT NULL,
  `ulowercont` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(200) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `uemail` varchar(25) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `uphone` varchar(75) NOT NULL,
  `utype` enum('student','landlord') NOT NULL,
  `user_id` int(200) NOT NULL,
  `uimage` varchar(200) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `ulocation` varchar(200) NOT NULL,
  `uabout` longtext NOT NULL,
  `udepartment` enum('elect','mech','cit') NOT NULL,
  `surname` varchar(200) NOT NULL,
  `othername` varchar(200) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `upass`, `uphone`, `utype`, `user_id`, `uimage`, `gender`, `ulocation`, `uabout`, `udepartment`, `surname`, `othername`) VALUES
(1, 'Dominic', 'chigoziedomnic@gmail.com', '08063334177', '07046586037', 'student', 6714, 'handsome-young-man-with-new-stylish-haircut_176420-19637.webp', 'male', 'Awka', 'I am all you should have in your school\r\n', 'cit', 'onwuzuligbo', 'chigozie'),
(2, 'LAILAI', 'ifedioralailai@yahoo.com', '000', '07046586037', 'student', 7117, 'confident-business-woman-portrait-smiling-face_53876-137693.webp', 'female', 'onitsha', 'my love', 'cit', 'Ezinwa', 'Chidimma'),
(3, 'Benjamine', 'chigoziedomnic@gmail.com', '090', '07046586037', 'student', 2070, 'handsome-young-man-with-new-stylish-haircut_176420-19637.webp', 'male', 'orifite', '', 'cit', 'Uniegwe', 'Ifechukwu'),
(4, 'Doris', 'doris@gmail.com', '080', '07046586037', 'student', 2467, '', 'female', 'onitsha', 'I am innovative and I like stay in a quiet place.', 'cit', 'Ozoude', 'chinecherem'),
(6, 'Chisom', 'chisom@gmail.com', '000', '07046586037', 'landlord', 9632, 'senior-man-face-portrait-wearing-bowler-hat_53876-148154.webp', 'male', '', '', 'elect', 'Ohalete', 'Tenoreh'),
(7, 'kingsely', 'Nwozor@gmail.com', '000', '07046586037', 'landlord', 7427, 'man-g715c270b8_640.jpg', 'male', '', '', 'elect', 'Nwozor', 'ikechukwu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
