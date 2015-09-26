-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2012 at 03:45 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ejob`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `password`, `email`) VALUES
(18, 'mn', 'mn', 'm@gmail.com'),
(22, 'admin', 'admin', 'admin@admin.com'),
(24, 'das', 'asda', 'sdsd@ds.com'),
(26, '', '', ''),
(27, 'sdas', 'da', 'sdasdasd'),
(28, 'cfbgc', 'bcv', 'bcvbcvb'),
(29, 'ffff', 'fffff', 'ffff'),
(30, 'forhad', 'forhad', 'forhad'),
(31, 'sayem', 'sayem', 'hi...'),
(32, 'sec', 'sec', 'secsecsecsec'),
(33, 'yahooo', 'yaooo', 'yahooo');

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE IF NOT EXISTS `advertise` (
  `add_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `publish_date` varchar(20) NOT NULL,
  `dead_line` varchar(20) NOT NULL,
  `url` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`add_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`add_id`, `user_id`, `cat_id`, `company_name`, `description`, `publish_date`, `dead_line`, `url`, `status`, `image`) VALUES
(2, 7, 1, 'Novice Limited', 'Post : Java Programmer Need\nWe Need  a Java programmer with 3 years of experience at the corresponding field ', '05/20/2012', '05/31/2012', 'http://localhost/ejob/publisher/myAdvertise', 1, 'no_image'),
(3, 7, 2, 'Tutor Wanted', 'Tutor needed for student', '05/20/2012', '05/23/2012', '', 1, 'no_image'),
(4, 7, 3, 'Brothers Builders', 'Flat to sell,at Mohammnadpu,Blocl b/12,1200', '05/20/2012', '05/20/2012', '', 1, 'no_image'),
(6, 7, 4, 'AB Travels', 'We provide travel guide.you need to be familier with various tourist place', '05/21/2012', '05/17/2012', '', 1, 'no_image'),
(7, 7, 5, 'CAR House', 'A car to sell.Corrolla X', '05/21/2012', '05/31/2012', '', 1, 'no_image'),
(8, 7, 6, 'BD Jobs', 'We Provide various jobs for partime.Currenlty we need 3 part time programmer', '05/01/2012', '05/22/2012', '', 1, 'no_image'),
(9, 7, 6, 'Job Provider', 'We provide Part time Job', '05/02/2012', '05/17/2012', '', 1, 'no_image'),
(10, 7, 3, 'Stain Builder', '1200 square feet,10000/= sq/ft\nLocation: Mohakhali,Dhaka', '05/08/2012', '05/31/2012', 'http://localhost/ejob/publisher/myAdvertise', 1, 'no_image'),
(11, 7, 5, 'Uttalra Motors', 'New Mitsubishi 2012', '05/24/2012', '05/23/2012', 'http://localhost/ejob/index.php/publisher/myAdvert', 1, 'no_image');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `add_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `apply_date` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `add_id`, `user_id`, `publisher_id`, `cat_id`, `apply_date`, `message`, `status`) VALUES
(15, 11, 6, 7, 5, '05/25/2012', 'Contact Me Please', 1),
(16, 7, 6, 7, 5, '05/26/2012', 'I want to buy this', 1),
(17, 6, 6, 7, 4, '05/26/2012', 'My Contact', 1),
(18, 10, 6, 7, 3, '05/26/2012', 'I want this..Contact Me', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `description`, `status`) VALUES
(1, 'Work Search', '<p>Various job any fulltime , parttime all included in this categoty</p>', 1),
(2, 'Tutor Wanted', '<p>Teaching student at home</p>', 1),
(3, 'Apartment ', '<p>Flat,home,shelter,rent house</p>', 1),
(4, 'Tourist', '<p>Travel agencies</p>', 1),
(5, 'Car Sale', '<p>Selling Car,new car,Recondition and repair</p>', 1),
(6, 'Part Time Job', '<p>We are agencies for to give you opportunity at various organizatiob as part time employee</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publisher_inbox`
--

CREATE TABLE IF NOT EXISTS `publisher_inbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `msg_body` text NOT NULL,
  `send_date` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `publisher_inbox`
--

INSERT INTO `publisher_inbox` (`id`, `user_id`, `publisher_id`, `job_title`, `msg_body`, `send_date`) VALUES
(1, 6, 7, 'java', 'ja va java ', '05/24/2012'),
(2, 6, 7, 'php', 'contact infio 7879890', '05/26/2012');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` int(11) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `marital_status` int(11) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `picture` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `birthdate`, `username`, `password`, `user_type`, `sex`, `marital_status`, `nationality`, `religion`, `present_address`, `permanent_address`, `phone`, `email`, `picture`, `status`) VALUES
(6, 'Usr', '05/08/2012', 'user', 'user', 1, 'on', 0, 'Bangladeshi', '1', 'Sylhet', 'Dhaka', '87983973', 'admin@yahoo.com', 'insert image', 1),
(7, 'publisher', '05/08/2012', 'publish', 'publish', 2, 'on', 0, 'BD', '1', 'Sylhet', '56 B,Tikatoli Hatkhula,Motijill,Dhaka-1200,Bangladesh', '564564', 'publish@yahoo.com', 'insert image', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_inbox`
--

CREATE TABLE IF NOT EXISTS `user_inbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `msg_body` text NOT NULL,
  `send_date` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user_inbox`
--

INSERT INTO `user_inbox` (`id`, `user_id`, `publisher_id`, `job_title`, `msg_body`, `send_date`) VALUES
(7, 6, 7, 'Job Apps', 'Contact us at 39-04545', '05/17/2012'),
(8, 6, 7, 'Job Apps', 'Please Contact soon', '05/31/2012'),
(11, 6, 7, 'dasd', 'asdasd', '05/02/2012');
