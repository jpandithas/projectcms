-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2015 at 06:47 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE IF NOT EXISTS `routes` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(30) NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  `id` bigint(20) DEFAULT NULL,
  `status` enum('Enabled','Disabled') NOT NULL,
  `function` varchar(50) NOT NULL,
  `permission` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`rid`, `action`, `type`, `id`, `status`, `function`, `permission`) VALUES
(1, 'create', 'page', NULL, 'Enabled', 'create_page', 0),
(2, 'create', 'user', NULL, 'Enabled', 'create_user', 0),
(3, 'switch', 'theme', NULL, 'Enabled', 'switch_theme', 0),
(4, 'login', NULL, NULL, 'Enabled', 'login', 11),
(5, 'logout', NULL, NULL, 'Enabled', 'logout', 11);

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `theme_name` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`tid`, `theme_name`, `enabled`) VALUES
(1, 'default', 1),
(2, 'theme2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(15) NOT NULL,
  `passwd` varchar(15) CHARACTER SET utf8 COLLATE utf8_german2_ci NOT NULL,
  `fname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `ulevel` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `passwd`, `fname`, `lname`, `email`, `ulevel`) VALUES
(1, 'admin', 'admin', 'root', 'user', 'a@b.com', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
