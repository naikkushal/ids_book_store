-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 11:29 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_kart`
--

CREATE TABLE IF NOT EXISTS `book_kart` (
  `kart_id` int(100) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(40) NOT NULL,
  `book_id` int(100) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_id` int(100) NOT NULL,
  `total_rate` int(255) NOT NULL,
  `order_time` date NOT NULL,
  `delivery_time` date NOT NULL,
  PRIMARY KEY (`kart_id`),
  KEY `user_id` (`user_id`),
  KEY `book_id` (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `book_kart`
--

INSERT INTO `book_kart` (`kart_id`, `book_name`, `book_id`, `user_name`, `user_id`, `total_rate`, `order_time`, `delivery_time`) VALUES
(21, 'Wings of Fire', 109, 'kushal naik', 3, 1500, '2017-04-12', '2017-04-13'),
(23, 'Half Girlfriend', 105, 'kushal naik', 3, 1500, '2017-04-13', '2017-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `book_tbl`
--

CREATE TABLE IF NOT EXISTS `book_tbl` (
  `book_id` int(100) NOT NULL,
  `book_name` varchar(40) NOT NULL,
  `book_type` varchar(40) NOT NULL,
  `book_by` varchar(40) NOT NULL,
  `book_rate` int(255) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_tbl`
--

INSERT INTO `book_tbl` (`book_id`, `book_name`, `book_type`, `book_by`, `book_rate`) VALUES
(101, 'A Midsummer Night''s Dream', 'drama', 'William Shakespeare', 500),
(102, 'To Kill a Mockingbird', 'drama', 'Harper Lee', 550),
(103, 'The Great Gatsby', 'drama', 'F. Scott Fitzgerald', 749),
(104, 'The Fault in Our Stars', 'drama', 'John Green', 799),
(105, 'Half Girlfriend', 'romance', 'Chetan Bhagat', 1500),
(106, '2 states', 'romance', 'Chetan Bhagat', 550),
(107, 'I Too Had a Love Story', 'romance', 'Ravinder Singh', 749),
(108, 'outlander', 'romance', 'Diana Gabaldon', 799),
(109, 'Wings of Fire', 'biographies', 'A. P. J. Abdul Kalam', 1500),
(110, 'Steve Jobs', 'biographies', 'Walter Isaacson', 550),
(111, 'I Am Malala', 'biographies', 'Christina Lamb and Malala Yousafzai', 749),
(112, 'The Diary of a Young Girl', 'biographies', 'Anne Frank', 799),
(113, 'Justice League, Vol. 1', 'comics', 'Geoff Johns', 999),
(114, 'Maus', 'comics', 'Art Spiegelman', 559),
(115, 'Arkham Asylum', 'comics', 'Grant Morrison', 1299),
(116, 'X-Men: Days of Future Past', 'comics', 'Chris Claremont', 1799);

-- --------------------------------------------------------

--
-- Table structure for table `order_canceled`
--

CREATE TABLE IF NOT EXISTS `order_canceled` (
  `cancel_id` int(100) NOT NULL AUTO_INCREMENT,
  `kart_id` int(100) NOT NULL,
  `book_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `order_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `cancel_date` date NOT NULL,
  PRIMARY KEY (`cancel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `order_canceled`
--

INSERT INTO `order_canceled` (`cancel_id`, `kart_id`, `book_id`, `user_id`, `order_date`, `delivery_date`, `cancel_date`) VALUES
(1, 20, 106, 3, '2017-04-12', '2017-04-24', '2017-04-13'),
(2, 22, 104, 3, '2017-04-13', '2017-04-25', '2017-04-13'),
(3, 24, 110, 6, '2017-04-13', '2017-04-25', '2017-04-13'),
(4, 25, 109, 6, '2017-04-13', '2017-04-25', '2017-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `profile_table`
--

CREATE TABLE IF NOT EXISTS `profile_table` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic` varchar(90) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `profile_table`
--

INSERT INTO `profile_table` (`user_id`, `user_name`, `email`, `address`, `password`, `profile_pic`) VALUES
(3, 'kushal naik', 'kushalgnaik11@gmail.com', 'sancoale', '202cb962ac59075b964b07152d234b70', 'user_profile_pic/kushal naik.jpg'),
(6, 'dora', 'dora@gmail.com', 'noby', '202cb962ac59075b964b07152d234b70', 'user_profile_pic/dora.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_kart`
--
ALTER TABLE `book_kart`
  ADD CONSTRAINT `book_kart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `profile_table` (`user_id`),
  ADD CONSTRAINT `book_kart_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book_tbl` (`book_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
