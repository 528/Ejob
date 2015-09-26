-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2012 at 04:31 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `bcs_mcq`
--

CREATE TABLE IF NOT EXISTS `bcs_mcq` (
  `questions_id` int(11) NOT NULL AUTO_INCREMENT,
  `tutorial_id` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `tutorial_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `question` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`questions_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bcs_mcq`
--

INSERT INTO `bcs_mcq` (`questions_id`, `tutorial_id`, `detail_id`, `cat`, `category`, `tutorial_name`, `question`, `status`) VALUES
(2, 10, 67, 'BCS', 'Bangla', 'Prachin Jog', 'bcs?', 1),
(3, 13, 62, 'Bank', 'Bangla', 'Prachin Jog', 'bank?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bcs_mcq_answer`
--

CREATE TABLE IF NOT EXISTS `bcs_mcq_answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `questions_id` int(11) NOT NULL,
  `answer` varchar(200) CHARACTER SET utf8 NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `bcs_mcq_answer`
--

INSERT INTO `bcs_mcq_answer` (`answer_id`, `questions_id`, `answer`, `is_correct`) VALUES
(12, 2, 'd', 0),
(11, 2, 'c', 0),
(10, 2, 'b', 0),
(9, 2, 'a', 1),
(13, 3, 'b', 1),
(14, 3, 'b', 0),
(15, 3, 'b', 0),
(16, 3, 'b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `course_detail` text NOT NULL,
  `credit` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `dept_id`, `sem_id`, `course_code`, `course_title`, `course_detail`, `credit`) VALUES
(1, 1, 1, 'CSE-101', 'Introduction To Computer', 'Introduction To Computer\r\nIntroduction To ComputerIntroduction To ComputerIntroduction To ComputerIntroduction To ComputerIntroduction To ComputerIntroduction To Computer', 3),
(2, 2, 1, 'EEE-101', 'Electrical', 'Electrical\r\nElectrical\r\nElectrical\r\nElectrical', 3),
(3, 3, 1, 'ME-101', 'Mechanical', 'Mechanical\r\nMechanical\r\nMechanical\r\nMechanical', 3),
(4, 2, 5, 'CSE-501', 'Networking', 'Networking\r\nNetworking\r\nNetworking\r\nNetworking', 4);

-- --------------------------------------------------------

--
-- Table structure for table `current_affair`
--

CREATE TABLE IF NOT EXISTS `current_affair` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `affair_title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `affair_desc` text CHARACTER SET utf8 NOT NULL,
  `affair_link` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Published',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `current_affair`
--

INSERT INTO `current_affair` (`id`, `affair_title`, `affair_desc`, `affair_link`, `status`) VALUES
(3, 'Todays World', '<p>asdasdasdas</p>', 'www.google.com', 'Published'),
(2, 'Azker Bisshow', '<p>ASddfsdfsdggg</p>', 'www.localhost.com', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE IF NOT EXISTS `custom` (
  `id` varchar(50) NOT NULL,
  `info` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `due` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom`
--

INSERT INTO `custom` (`id`, `info`, `contact`, `total`, `due`) VALUES
('1', 'sec', 'cse', '23434', '4242'),
('2', 'forhad', 'forhad', '5654', '6456'),
('3', 'sust', 'sust', '6456', '5645'),
('4', 'suet', 'suet', '76756', '76567');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `des` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `dat` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `name`, `des`, `username`, `dat`) VALUES
(1, 'CSE', 'Compute Science and Engineering', 'a', '25-10-11'),
(2, 'EEE', 'Electrical', 'a', '25-10-11'),
(3, 'ME', 'Mech', 'a', '25-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `job_info`
--

CREATE TABLE IF NOT EXISTS `job_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `job_desc` text CHARACTER SET utf8 NOT NULL,
  `job_link` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Published',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `job_info`
--

INSERT INTO `job_info` (`id`, `job_title`, `job_desc`, `job_link`, `status`) VALUES
(1, 'Flamma', '<p>Flamma Bd</p>', 'Localhost', 'Published'),
(2, 'AB Bank', '<p>AGM</p>', 'localhost', 'Published'),
(4, 'Bank', '<p>GM</p>', 'localhost', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `matching`
--

CREATE TABLE IF NOT EXISTS `matching` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tutorial_id` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `tutorial_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `left1` varchar(50) CHARACTER SET utf8 NOT NULL,
  `right1` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `matching`
--

INSERT INTO `matching` (`id`, `tutorial_id`, `detail_id`, `cat`, `category`, `tutorial_name`, `left1`, `right1`) VALUES
(50, 10, 67, 'BCS', 'Bangla', 'Prachin Jog', 'Begining', '1200'),
(51, 10, 67, 'BCS', 'Bangla', 'Prachin Jog', 'End', '1800'),
(52, 13, 62, 'Bank', 'Bangla', 'Prachin Jog', 'ab', 'c'),
(53, 13, 62, 'Bank', 'Bangla', 'Prachin Jog', 'bc', 'd'),
(54, 13, 62, 'Bank', 'Bangla', 'Prachin Jog', 'abc', 'bcd'),
(55, 13, 62, 'Bank', 'Bangla', 'Prachin Jog', '12', 'ab');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Activate',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `user_name`, `password`, `email`, `fname`, `lname`, `status`) VALUES
(1, 'sec', 'sec', 'forhad271@gmail.com', 'sec', 'sec', 'Activate'),
(3, 'sust', 'sust', 'forhad271@gmail.com', 'sust', 'sust', 'Activate'),
(6, 'cse', 'cse', 'forhad271@gmail.com', 'md.forhadur', 'rahman', 'Activate'),
(7, 'forhad', 'forhad', 'forhad271@gmail.com', 'Md.Forhadur', 'Rahman', 'Activate');

-- --------------------------------------------------------

--
-- Table structure for table `model_test`
--

CREATE TABLE IF NOT EXISTS `model_test` (
  `questions_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `test_name` varchar(50) NOT NULL,
  `question` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`questions_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `model_test`
--

INSERT INTO `model_test` (`questions_id`, `test_id`, `detail_id`, `cat`, `category`, `test_name`, `question`, `status`) VALUES
(1, 1, 71, 'BCS', 'Model Test', 'Model Test-2', 'SEC???', 1),
(2, 1, 71, 'BCS', 'Model Test', 'Model Test-2', 'SEC???', 1),
(3, 3, 71, 'BCS', 'Model Test', 'Model Test-2', 'SEC???', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_test_answer`
--

CREATE TABLE IF NOT EXISTS `model_test_answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `questions_id` int(11) NOT NULL,
  `answer` varchar(200) CHARACTER SET utf8 NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=153 ;

--
-- Dumping data for table `model_test_answer`
--

INSERT INTO `model_test_answer` (`answer_id`, `questions_id`, `answer`, `is_correct`) VALUES
(152, 3, '5', 0),
(151, 3, '4', 0),
(150, 3, '3', 0),
(149, 3, '2', 1),
(148, 2, '9', 0),
(147, 2, '7', 0),
(146, 2, '5', 0),
(145, 2, '3', 1),
(144, 1, '4', 0),
(143, 1, '3', 0),
(142, 1, '2', 0),
(141, 1, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mod_test`
--

CREATE TABLE IF NOT EXISTS `mod_test` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `detail_id` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `test_name` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`test_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mod_test`
--

INSERT INTO `mod_test` (`test_id`, `detail_id`, `cat`, `category`, `test_name`, `status`) VALUES
(1, 71, 'BCS', 'Model Test', 'Model Test-2', 1),
(2, 71, 'BCS', 'Model Test', 'Model Test-3', 1),
(3, 69, 'Bank', 'Model Test', 'Model Test-1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `more_mcq`
--

CREATE TABLE IF NOT EXISTS `more_mcq` (
  `questions_id` int(11) NOT NULL AUTO_INCREMENT,
  `tutorial_id` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `tutorial_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `question` varchar(200) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`questions_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `more_mcq`
--

INSERT INTO `more_mcq` (`questions_id`, `tutorial_id`, `detail_id`, `cat`, `category`, `tutorial_name`, `question`, `status`) VALUES
(3, 10, 67, 'BCS', 'Bangla', 'Prachin Jog', 'more??', 1),
(4, 13, 62, 'Bank', 'Bangla', 'Prachin Jog', 'bank more??', 1);

-- --------------------------------------------------------

--
-- Table structure for table `more_mcq_answer`
--

CREATE TABLE IF NOT EXISTS `more_mcq_answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `questions_id` int(11) NOT NULL,
  `answer` varchar(50) CHARACTER SET utf8 NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `more_mcq_answer`
--

INSERT INTO `more_mcq_answer` (`answer_id`, `questions_id`, `answer`, `is_correct`) VALUES
(36, 3, '4', 0),
(35, 3, '3', 0),
(34, 3, '2', 0),
(33, 3, '1', 1),
(37, 4, 'm', 1),
(38, 4, 'm', 0),
(39, 4, 'm', 0),
(40, 4, 'm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `parent_category`
--

CREATE TABLE IF NOT EXISTS `parent_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `category` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `parent_category`
--

INSERT INTO `parent_category` (`id`, `parent_id`, `category`, `status`) VALUES
(1, 0, 'BCS', 1),
(2, 0, 'Bank', 1),
(66, 1, 'Math', 1),
(65, 1, 'English', 1),
(64, 2, 'Math', 0),
(63, 2, 'English', 1),
(62, 2, 'Bangla', 1),
(67, 1, 'Bangla', 1),
(71, 1, 'Model Test', 1),
(69, 2, 'Model Test', 1),
(70, 0, 'IBA', 1),
(74, 0, 'MBA', 1),
(77, 0, 'BBB', 1);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `theory` float NOT NULL,
  `session` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `name`, `theory`, `session`) VALUES
(1, '1st Semester', 12, 1),
(2, '2nd Semester', 21, 3),
(3, '3rd Semester', 21, 21),
(4, '4th Semester', 21, 12),
(5, '5th Semester', 12, 12),
(6, '6th Semester', 10, 10),
(7, '7th Semester', 12, 8),
(9, '8th Semester', 12, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE IF NOT EXISTS `tutorial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `detail_id` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `tutorial_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `top_description` text CHARACTER SET utf8 NOT NULL,
  `flow_chart` text CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`id`, `detail_id`, `cat`, `category`, `tutorial_name`, `top_description`, `flow_chart`, `status`) VALUES
(11, 62, 'Bank', 'Bangla', 'Kazi Nazrul', '<p>Kazi NazrulKazi NazrulKazi NazrulKazi NazrulKazi NazrulKazi Nazrul</p>', '<p>Kazi Nazrul-&gt;Kazi Nazrul-&gt;Kazi Nazrul</p>', 1),
(12, 62, 'Bank', 'Bangla', 'Moddo Jog', '<p>Moddo JogModdo JogModdo JogModdo Jog</p>', '<p>Moddo Jog-&gt;Moddo Jog</p>', 1),
(9, 67, 'BCS', 'Bangla', 'Robi', '<p>RobiRobiRobiRobiRobiRobiRobiRobiRobi</p>', '<p>Robi-&gt;Robi-&gt;Robi</p>', 1),
(10, 67, 'BCS', 'Bangla', 'Prachin Jog', '<p>Prachin JogPrachin JogPrachin JogPrachin JogPrachin JogPrachin Jog</p>', '<p>Prachin Jog-&gt;Prachin Jog-&gt;Prachin Jog</p>', 1),
(13, 62, 'Bank', 'Bangla', 'Prachin Jog', '<p>Prachin JogPrachin Jog</p>', '<p>Prachin JogPrachin JogPrachin Jog</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tutorial_mcq`
--

CREATE TABLE IF NOT EXISTS `tutorial_mcq` (
  `questions_id` int(11) NOT NULL AUTO_INCREMENT,
  `tutorial_id` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `tutorial_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `question` varchar(200) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`questions_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tutorial_mcq`
--

INSERT INTO `tutorial_mcq` (`questions_id`, `tutorial_id`, `detail_id`, `cat`, `category`, `tutorial_name`, `question`, `status`) VALUES
(2, 10, 67, 'BCS', 'Bangla', 'Prachin Jog', 'a?', 1),
(3, 10, 67, 'BCS', 'Bangla', 'Prachin Jog', 'b?', 1),
(5, 10, 67, 'BCS', 'Bangla', 'Prachin Jog', 'd', 1),
(7, 13, 62, 'Bank', 'Bangla', 'Prachin Jog', 'p?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tutorial_mcq_answer`
--

CREATE TABLE IF NOT EXISTS `tutorial_mcq_answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `questions_id` int(11) NOT NULL,
  `answer` varchar(100) CHARACTER SET utf8 NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `tutorial_mcq_answer`
--

INSERT INTO `tutorial_mcq_answer` (`answer_id`, `questions_id`, `answer`, `is_correct`) VALUES
(104, 2, '4', 0),
(103, 2, '3', 0),
(102, 2, '2', 0),
(101, 2, '1', 1),
(105, 3, '4', 1),
(106, 3, '4', 0),
(107, 3, '4', 0),
(108, 3, '4', 0),
(109, 4, 'a', 1),
(110, 4, 'a', 0),
(111, 4, 'a', 0),
(112, 4, 'a', 0),
(113, 5, 'd', 1),
(114, 5, 'd', 0),
(115, 5, 'd', 0),
(116, 5, 'd', 0),
(117, 6, 'b', 1),
(118, 6, 'b', 0),
(119, 6, 'b', 0),
(120, 6, 'b', 0),
(121, 7, 'p', 1),
(122, 7, 'p', 0),
(123, 7, 'p', 0),
(124, 7, 'p', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `password`, `email`) VALUES
(21, 'sdasdasd', 'adasdasd', 'a@b.com'),
(18, 'mn', 'mn', 'm@gmail.com');
