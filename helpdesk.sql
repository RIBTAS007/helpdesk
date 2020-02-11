-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2017 at 07:30 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `helpdesk`
--
CREATE DATABASE IF NOT EXISTS `helpdesk` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `helpdesk`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '2345678');

-- --------------------------------------------------------

--
-- Table structure for table `custcomp`
--

CREATE TABLE IF NOT EXISTS `custcomp` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `prefix` text NOT NULL,
  `first` text NOT NULL,
  `last` text NOT NULL,
  `phone` bigint(123) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dop` date NOT NULL,
  `dov` date NOT NULL,
  `dov1` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `complaint` varchar(150) NOT NULL,
  `refid` varchar(30) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `custcomp`
--

INSERT INTO `custcomp` (`id`, `prefix`, `first`, `last`, `phone`, `email`, `dop`, `dov`, `dov1`, `address`, `complaint`, `refid`, `status`) VALUES
(24, 'Mr', 'alex', 'hales', 9147483698, 'alex@ljkdj.com', '2017-06-30', '2017-06-15', '2017-06-17', 'gfgh', 'hjhj', '12e0738ea0b55af2e27165d29a8d4d', 1),
(25, 'Mr', 'qweri', 'ytrewq', 9090909099, 'as@as.com', '2017-06-06', '2017-06-15', '2017-06-17', 'hsdsjd', 'asfjfd', 'e41df689a89cf031710c5baaa491cf', 0),
(26, 'Mr', 'qwerty', 'ytrewq', 0, 'as@as.com', '2017-06-06', '2017-06-15', '2017-06-17', 'cvbhgfserty', 'qazxswedcvfrtgbnhyujm,ki', 'e2d4bafa52e6494977f160ae611744', 0),
(27, 'Mr', 'qwerty', 'ytrewq', 2147483647, 'as@as.com', '2017-06-06', '2017-06-15', '2017-06-17', 'cvbhgfserty', 'qazxswedcvfrtgbnhyujm,ki', '161884b740dea65509f90844c4d04f', 0),
(28, 'Mr', 'qwerty', 'ytrewq', 2147483647, 'as@as.com', '2017-06-06', '2017-06-15', '2017-06-17', 'cvbhgfserty', 'qazxswedcvfrtgbnhyujm,ki', '9a2f6f33a809c19867978149c2de73', 0),
(54, 'Mr', 'kjj', 'hjklhkl', 897, 'kk@hjd.com', '2017-06-21', '2017-06-30', '2017-07-02', 'iuu', 'hjlhljhlhhjk', '5567de86d9566aa3af050a87a1b8c4', 0),
(55, 'Mr', 'djsdjak', 'dshkjdasjda', 8989900890, 'ssa2@gfds.cc', '2017-06-03', '2017-06-30', '2017-07-02', 'hljh', 'lkjhjk', '9cabd242e4aa595c6d357d43e220dc', 0),
(56, 'Mr', 'ddbsf', 'dsfhjfdkfd', 2020202020, 'gg@mm.com', '2017-06-08', '2017-06-30', '2017-07-02', 'dfjdfkjs', 'dfjdfskj', '04e54c92c8343bb69b893ce4cc1834', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `refid` varchar(40) NOT NULL,
  `feed` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `refid`, `feed`) VALUES
(1, '08115fc113b22c6af050cb20e55a34', '       I loved the service '),
(2, '12e0738ea0b55af2e27165d29a8d4d', 'love u brp'),
(3, '12e0738ea0b55af2e27165d29a8d4d', 'hjh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
