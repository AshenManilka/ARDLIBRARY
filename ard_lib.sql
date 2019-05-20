-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 11:46 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ard_lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `bid` varchar(5) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `bcategory` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `pages` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `bDate` date NOT NULL,
  `cnumber` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bid`, `bookName`, `bcategory`, `author`, `pages`, `publisher`, `bDate`, `cnumber`, `discription`, `image`) VALUES
(67, 'B001', 'World History', 'History', 'K.L. Khurana', '700', 'India', '2019-04-03', '2', 'World History', '004595.jpg'),
(68, 'A001', 'The Queen of Heart', 'Novel', 'Kimmery Martin', '380', 'Sarasavi', '2019-04-10', '4', 'Good book', 'Queen.jpg'),
(69, 'B002', 'Harry Potter', 'Novel', 'J.K.Rowling', '1400', 'M.D.Gunasena', '2019-04-13', '4', 'A novel', 'harry.jpg'),
(70, 'A003', 'JAVA Programming', 'Computer', 'Nalaka Dissanayake', '450', 'SLIIT', '2019-04-17', '6', 'Programming Fundamantals', 'Java_.jpg'),
(72, 'A004', 'Maths Terms', 'Maths', 'Sudath Wehthamuni', '450', 'Apa publishers', '2019-04-19', '4', 'Mathematics', '1p0.jpg'),
(73, 'A007', 'Kotlin Standerds', 'Computer', 'Ranjana Rahuman', '600', 'SLIIT', '2019-02-25', '8', 'Programming', 'kotlin.png'),
(74, 'A008', 'Weather', 'Science', 'Ariyasena Pererea', '320', 'sarasavi', '2019-04-18', '4', 'Wether forcast', 'life-.jpg'),
(75, 'A0012', 'LAGAIN', 'Novel', 'Karun Mackwell', '340', 'ARD Publishers', '2019-04-14', '2', 'A novel', 'CsBOZ0T.jpg'),
(76, 'A0013', 'Business Startup', 'Business', 'Benn August', '400', 'India', '2019-04-18', '2', 'Business Analize', 'non.jpg'),
(77, 'A0014', 'Programming in Haskell', 'Computer', 'Martin Luther', '320', 'SLIIT', '2019-04-23', '4', 'Computer Science', 'pih.jpg'),
(78, 'A0015', 'Maths Dictionary', 'Maths', 'Abdull Rahuman', '470', 'Maths Press', '2019-04-22', '3', 'Fundamantals theory', 'piqr5pKbT.jpg'),
(79, 'A0056', 'Mollecular Science', 'Science', 'John Doe', '600', 'Science Press', '2019-04-20', '3', 'Chemistry Science', 'Sciench.JPG'),
(80, 'b7080', 'Supun Ruchira', 'Novel', 'supun', '80', 'sskk', '2019-05-09', '5', 'no one', '6963147-funny-wallpaper-for-pc-desktop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookskk`
--

CREATE TABLE `bookskk` (
  `id` int(11) NOT NULL,
  `bid` varchar(5) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `bcategory` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `pages` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `bDate` date NOT NULL,
  `cnumber` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookskk`
--

INSERT INTO `bookskk` (`id`, `bid`, `bookName`, `bcategory`, `author`, `pages`, `publisher`, `bDate`, `cnumber`, `discription`, `image`) VALUES
(67, 'B001', 'World History', 'History', 'K.L. Khurana', '700', 'India', '2019-04-03', '0', 'World History', '004595.jpg'),
(68, 'A001', 'The Queen of Heart', 'Novel', 'Kimmery Martin', '380', 'Sarasavi', '2019-04-10', '4', 'Good book', 'Queen.jpg'),
(69, 'B002', 'Harry Potter', 'Novel', 'J.K.Rowling', '1400', 'M.D.Gunasena', '2019-04-13', '4', 'A novel', 'harry.jpg'),
(70, 'A003', 'JAVA Programming', 'Computer', 'Nalaka Dissanayake', '450', 'SLIIT', '2019-04-17', '6', 'Programming Fundamantals', 'Java_.jpg'),
(72, 'A004', 'Maths Terms', 'Maths', 'Sudath Wehthamuni', '450', 'Apa publishers', '2019-04-19', '8', 'Mathematics', '1p0.jpg'),
(73, 'A007', 'Kotlin Standerds', 'Computer', 'Ranjana Rahuman', '600', 'SLIIT', '2019-02-25', '8', 'Programming', 'kotlin.png'),
(74, 'A008', 'Weather', 'Science', 'Ariyasena Pererea', '320', 'sarasavi', '2019-04-18', '4', 'Wether forcast', 'life-.jpg'),
(75, 'A0012', 'LAGAIN', 'Novel', 'Karun Mackwell', '340', 'ARD Publishers', '2019-04-14', '2', 'A novel', 'CsBOZ0T.jpg'),
(76, 'A0013', 'Business Startup', 'Business', 'Benn August', '400', 'India', '2019-04-18', '2', 'Business Analize', 'non.jpg'),
(77, 'A0014', 'Programming in Haskell', 'Computer', 'Martin Luther', '320', 'SLIIT', '2019-04-23', '4', 'Computer Science', 'pih.jpg'),
(78, 'A0015', 'Maths Dictionary', 'Maths', 'Abdull Rahuman', '470', 'Maths Press', '2019-04-22', '3', 'Fundamantals theory', 'piqr5pKbT.jpg'),
(79, 'A0056', 'Mollecular Science', 'Science', 'John Doe', '600', 'Science Press', '2019-04-20', '3', 'Chemistry Science', 'Sciench.JPG'),
(0, 'b7080', 'Supun Ruchira', 'Novel', 'supun', '80', 'sskk', '2019-05-09', '5', 'no one', '6963147-funny-wallpaper-for-pc-desktop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book_di`
--

CREATE TABLE `book_di` (
  `id` int(4) NOT NULL,
  `bid` varchar(10) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `avalabi` int(9) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_dit`
--

CREATE TABLE `customer_dit` (
  `id` int(11) NOT NULL,
  `cid` varchar(5) NOT NULL,
  `c_name` varchar(40) DEFAULT NULL,
  `bid` varchar(5) NOT NULL,
  `b_name` varchar(50) DEFAULT NULL,
  `divs` int(8) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_dit`
--

INSERT INTO `customer_dit` (`id`, `cid`, `c_name`, `bid`, `b_name`, `divs`, `date`) VALUES
(1, '1212', NULL, '45', NULL, NULL, '0000-00-00 00:00:00'),
(2, '24', 'admin', 'B001 ', 'World History', 45, '0000-00-00 00:00:00'),
(3, '36', 'kumudu', 'A0014', 'Programming in Haskell', 100, '0000-00-00 00:00:00'),
(4, '24', 'admin', 'B001 ', 'World History', 1547, '0000-00-00 00:00:00'),
(5, '24', 'admin', 'B001 ', 'World History', 45, '2019-05-20 13:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `Event_ID` varchar(255) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `edate` date NOT NULL,
  `eabout` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `Event_ID`, `ename`, `edate`, `eabout`, `image`) VALUES
(7, 'cvbc', 'bvcbvc', '2019-03-08', 'cvbc', 'book.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `issus_book`
--

CREATE TABLE `issus_book` (
  `no` int(11) NOT NULL,
  `cid` varchar(5) NOT NULL,
  `c_name` varchar(40) NOT NULL,
  `b_no` varchar(5) NOT NULL,
  `b_name` varchar(50) DEFAULT NULL,
  `t_give` int(5) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issus_book`
--

INSERT INTO `issus_book` (`no`, `cid`, `c_name`, `b_no`, `b_name`, `t_give`, `date`) VALUES
(1, '1452', '', '45', '', 0, '2019-05-13 17:44:07'),
(2, '22', '', '55', '', 0, '2019-05-13 17:45:22'),
(3, '22', '', '45', '', 0, '2019-05-13 17:47:15'),
(4, '555', '', '5665', '', 0, '2019-05-13 18:21:45'),
(5, '555', '', '555', '', 0, '2019-05-13 18:23:34'),
(6, '78', '', '85', '', 0, '2019-05-13 18:25:27'),
(7, '52', '', '124', '', 0, '2019-05-13 18:47:30'),
(8, '564', '', '556', '', 0, '2019-05-13 18:49:51'),
(9, '', '', '', '', 0, '2019-05-13 20:56:49'),
(10, '', '', '', '', 0, '2019-05-13 22:21:10'),
(11, '', '', '', '', 0, '2019-05-13 22:21:14'),
(12, '', '', '', '', 0, '2019-05-13 22:21:19'),
(13, '', '', '', '', 0, '2019-05-13 22:39:09'),
(14, '', '', '', '', 0, '2019-05-13 23:07:06'),
(15, 'd5555', '', '', '', 0, '2019-05-13 23:07:17'),
(16, '', '', '', '', 0, '2019-05-13 23:08:12'),
(17, '', '', '', '', 0, '2019-05-13 23:08:21'),
(18, '', '', '', '', 0, '2019-05-13 23:12:31'),
(19, '', '', '', '', 0, '2019-05-13 23:23:10'),
(20, '', '', '', '', 0, '2019-05-13 23:31:51'),
(21, '', '', '', '', 0, '2019-05-13 23:32:28'),
(22, '', '', '', '', 0, '2019-05-13 23:44:43'),
(23, '', '', '', '', 0, '2019-05-13 23:44:48'),
(24, '', '', '', '', 0, '2019-05-13 23:48:36'),
(25, '', '', '', '', 0, '2019-05-13 23:48:42'),
(26, '55', '', '', '', 0, '2019-05-14 00:09:47'),
(27, '555', '', '44747', '', 0, '2019-05-14 00:12:53'),
(28, '55', '', '555', '', 0, '2019-05-14 00:13:24'),
(29, '', '', '', '', 0, '2019-05-14 00:40:07'),
(30, '', '', '', '', 0, '2019-05-14 09:20:54'),
(31, '', '', '', '', 0, '2019-05-14 09:27:43'),
(32, '', '', '556', '', 0, '2019-05-14 09:27:55'),
(33, '', '', '', '', 0, '2019-05-14 09:32:37'),
(34, '', '', 'sfaff', '', 0, '2019-05-14 09:32:46'),
(35, '', '', '', '', 0, '2019-05-14 10:11:46'),
(36, '', '', '', '', 0, '2019-05-14 10:11:55'),
(37, '', '', '', '', 0, '2019-05-14 10:12:18'),
(38, '', '', '', '', 0, '2019-05-14 10:12:21'),
(39, '', '', '', '', 0, '2019-05-14 10:12:31'),
(40, '', '', '', '', 0, '2019-05-14 10:12:38'),
(41, '', '', '', '', 0, '2019-05-14 10:12:43'),
(42, '1245', '', '', '', 0, '2019-05-14 10:12:54'),
(43, '548', '', '265', '', 0, '2019-05-14 10:14:02'),
(44, '38', '', '38', '', 0, '2019-05-14 10:15:08'),
(45, '55', '', '55', '', 0, '2019-05-20 13:15:45'),
(46, '27', '', 'A004', '', 0, '2019-05-20 14:37:52'),
(47, '31', '', 'A008 ', '', 5, '2019-05-20 15:07:27'),
(48, '24', '', 'B001 ', '', 8, '2019-05-20 15:27:25'),
(49, '36', '', 'A004 ', '', 566, '2019-05-20 15:28:55'),
(50, '24', '', 'B001 ', '', 45, '2019-05-20 15:41:39'),
(51, '24', '', 'B001 ', '', 45, '2019-05-20 15:42:32'),
(52, '24', '', 'B001 ', '', 4, '2019-05-20 15:44:41'),
(53, '24', '', 'B001 ', '', 45, '2019-05-20 15:46:46'),
(54, '24', '', 'B001 ', '', 7777, '2019-05-20 15:49:07'),
(55, '24', '', 'B001 ', '', 45, '2019-05-20 16:00:20'),
(56, '24', '', 'B001 ', '', 56, '2019-05-20 16:08:57'),
(57, '24', 'admin', 'B001 ', NULL, 5, '2019-05-20 16:48:11'),
(58, '24', 'admin', 'B001 ', NULL, 5, '2019-05-20 16:48:53'),
(59, '24', 'admin', 'B001 ', NULL, 5, '2019-05-20 16:48:58'),
(60, '24', 'admin', 'B001 ', NULL, 5, '2019-05-20 16:50:13'),
(61, '31', 'kumara', 'A007 ', NULL, 8, '2019-05-20 16:51:27'),
(62, '24', 'admin', 'B001 ', NULL, 5, '2019-05-20 16:51:49'),
(63, '33', 'kumari', 'B001 ', NULL, 45, '2019-05-20 16:54:36'),
(64, '28', 'dushith', 'A007 ', 'Kotlin Standerds', 45, '2019-05-20 17:01:13'),
(65, '24', 'admin', 'B001 ', 'World History', 45, '2019-05-20 17:06:49'),
(66, '40', 'akila', 'B001 ', 'World History', 58, '2019-05-20 18:09:28'),
(67, '26', 'admin', 'A003 ', 'JAVA Programming', 5, '2019-05-20 18:31:04'),
(68, '24', 'admin', 'B001 ', 'World History', 58, '2019-05-20 18:31:13'),
(69, '24', 'admin', 'B001 ', 'World History', 45, '2019-05-20 18:32:23'),
(70, '36', 'kumudu', 'A0014', 'Programming in Haskell', 100, '2019-05-20 18:32:46'),
(71, '24', 'admin', 'B001 ', 'World History', 1547, '2019-05-20 18:33:36'),
(72, '24', 'admin', 'B001 ', 'World History', 45, '2019-05-20 18:34:32'),
(73, '24', 'admin', 'B001 ', 'World History', 14, '2019-05-20 23:00:19'),
(74, '25', 'Dimuth', 'B001 ', 'World History', 14, '2019-05-20 23:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstName`, `lastname`, `username`, `email`, `password`, `address`, `mobile`) VALUES
(24, 'admin', 'admin', 'admin', 'admin@admin', 'admin', 'owner', ''),
(25, 'Dimuth', 'Gunawardana', 'demo', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372'),
(26, 'admin', 'admin', 'admin', 'admin@admin', 'admin', 'owner', ''),
(27, 'Dimuth', 'Gunawardana', 'demo', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372'),
(28, 'dushith', 'Gunawardana', 'niki', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372'),
(29, 'Dimuth', 'Gunawardana', 'demo', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372'),
(30, 'samantha', 'Gunawardana', 'niki', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372'),
(31, 'kumara', 'Gunawardana', 'demo', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372'),
(32, 'Dimuth', 'Gunawardana', 'niki', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372'),
(33, 'kumari', 'Gunawardana', 'demo', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372'),
(34, 'kumudu', 'Gunawardana', 'niki', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372'),
(35, 'samantha', 'Gunawardana', 'demo', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372'),
(36, 'kumudu', 'Gunawardana', 'niki', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372'),
(37, 'Dimuth', 'Gunawardana', 'demo', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372'),
(38, 'kumudu', 'Gunawardana', 'niki', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372'),
(39, 'samantha', 'Gunawardana', 'niki', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372'),
(40, 'akila', 'Gunawardana', 'demo', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372'),
(41, 'samantha', 'Gunawardana', 'demo', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `Rname` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `Rname`, `quantity`) VALUES
(1, 'Multi Power Adapter', 10),
(2, 'Power Extension Cord', 8);

-- --------------------------------------------------------

--
-- Table structure for table `return_book`
--

CREATE TABLE `return_book` (
  `no` int(11) NOT NULL,
  `b_no` varchar(5) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `b_taital` varchar(15) NOT NULL,
  `issudate` date NOT NULL,
  `due` int(2) NOT NULL,
  `return_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return_book`
--

INSERT INTO `return_book` (`no`, `b_no`, `cid`, `b_taital`, `issudate`, `due`, `return_date`) VALUES
(1, '124', '52', '', '2019-05-09', 2019, '2019-05-13 18:47:30'),
(2, '556', '564', 'Science', '2019-05-10', 12, '2019-05-13 18:49:52'),
(3, '', '', '', '0000-00-00', 0, '2019-05-13 20:56:49'),
(4, '', '', '', '0000-00-00', 0, '2019-05-13 22:21:10'),
(5, '', '', '', '0000-00-00', 0, '2019-05-13 22:21:16'),
(6, '', '', 'Choose', '0000-00-00', 0, '2019-05-13 22:21:19'),
(7, '', '', '', '0000-00-00', 0, '2019-05-13 22:39:09'),
(8, '', '', '', '0000-00-00', 0, '2019-05-13 23:07:07'),
(9, '', 'd55555555', '', '0000-00-00', 0, '2019-05-13 23:07:17'),
(10, '', '', '', '0000-00-00', 0, '2019-05-13 23:08:12'),
(11, '', '', '', '0000-00-00', 0, '2019-05-13 23:08:21'),
(12, '', '', 'Choose', '0000-00-00', 0, '2019-05-13 23:12:31'),
(13, '', '', 'Choose', '0000-00-00', 0, '2019-05-13 23:23:10'),
(14, '', '', 'Choose', '0000-00-00', 0, '2019-05-13 23:31:51'),
(15, '', '', 'Choose', '0000-00-00', 0, '2019-05-13 23:32:28'),
(16, '', '', '', '0000-00-00', 0, '2019-05-13 23:44:43'),
(17, '', '', '', '0000-00-00', 0, '2019-05-13 23:44:48'),
(18, '', '', '', '0000-00-00', 0, '2019-05-13 23:48:36'),
(19, '', '', 'Choose', '0000-00-00', 0, '2019-05-13 23:48:42'),
(20, '', '55', '', '0000-00-00', 0, '2019-05-14 00:09:47'),
(21, '44747', '555', '', '0000-00-00', 0, '2019-05-14 00:12:53'),
(22, '555', '55', '', '0000-00-00', 0, '2019-05-14 00:13:24'),
(23, '', '', 'Choose', '0000-00-00', 0, '2019-05-14 00:40:07'),
(24, '', '', 'Choose', '0000-00-00', 0, '2019-05-14 09:20:54'),
(25, '', '', 'Choose', '0000-00-00', 0, '2019-05-14 09:27:43'),
(26, '556', '', 'Novel', '0000-00-00', 0, '2019-05-14 09:27:55'),
(27, '', '', 'Choose', '0000-00-00', 0, '2019-05-14 09:32:37'),
(28, 'sfaff', '', 'Computer', '0000-00-00', 0, '2019-05-14 09:32:47'),
(29, '', '', 'Choose', '0000-00-00', 0, '2019-05-14 10:11:46'),
(30, '', '', 'Choose', '0000-00-00', 0, '2019-05-14 10:11:55'),
(31, '', '', 'Choose', '0000-00-00', 0, '2019-05-14 10:12:18'),
(32, '', '', 'Choose', '0000-00-00', 0, '2019-05-14 10:12:21'),
(33, '', '', 'Choose', '0000-00-00', 0, '2019-05-14 10:12:31'),
(34, '', '', 'Choose', '0000-00-00', 0, '2019-05-14 10:12:38'),
(35, '', '', 'Choose', '0000-00-00', 0, '2019-05-14 10:12:43'),
(36, '', '1245', 'Choose', '0000-00-00', 0, '2019-05-14 10:12:54'),
(37, '265', '548', 'Novel', '2019-05-09', 5, '2019-05-14 10:14:02'),
(38, '38', '38', 'Sinhala', '2019-05-10', 5, '2019-05-14 10:15:08'),
(39, '55', '55', 'Novel', '2019-05-03', 5, '2019-05-20 13:15:45'),
(40, 'A004', '27', '', '0000-00-00', 0, '2019-05-20 14:37:52'),
(41, 'A008 ', '31', '', '0000-00-00', 0, '2019-05-20 15:07:27'),
(42, 'B001 ', '24', '', '0000-00-00', 0, '2019-05-20 15:27:25'),
(43, 'A004 ', '36', '', '0000-00-00', 0, '2019-05-20 15:28:55'),
(44, 'B001 ', '24', '', '0000-00-00', 0, '2019-05-20 15:41:39'),
(45, 'B001 ', '24', '', '0000-00-00', 0, '2019-05-20 15:42:32'),
(46, 'B001 ', '24', '', '0000-00-00', 0, '2019-05-20 15:44:41'),
(47, 'B001 ', '24', '', '0000-00-00', 0, '2019-05-20 15:46:46'),
(48, 'B001 ', '24', '', '0000-00-00', 0, '2019-05-20 15:49:07'),
(49, 'B001 ', '24', '', '0000-00-00', 0, '2019-05-20 16:00:20'),
(50, 'B001 ', '24', '', '0000-00-00', 0, '2019-05-20 16:08:57'),
(51, 'B001 ', '24', '', '0000-00-00', 0, '2019-05-20 16:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `reg_id` int(11) NOT NULL,
  `staff_id` varchar(5) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `sname2` varchar(200) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `Desig` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`reg_id`, `staff_id`, `sname`, `sname2`, `NIC`, `Desig`, `address`, `Tel`, `image`) VALUES
(1, 'LA001', 'Tony', 'Stark', '704502976V', 'Library Assistant', 'Peradeniya Road, Kandy.', '0711234567', 'avatar1.png'),
(2, 'AR001', 'Nathasha', 'Romanoff', '841234567V', 'Archivist', 'Welangolla Road, Kurunagala.', '0771234567', 'avater3.png'),
(3, 'DM001', 'Steve', 'Rogers', '253391346V', 'Database Manager', 'Kandy Road, Malabe.', '0781234567', 'avatar6.png'),
(4, '', 'Sarath', 'Peramuna', '780152162V', 'Clerk', 'Colombo', '0112256214', 'sarath.png'),
(5, '', 'Sarath', 'Peramuna', '780152162V', 'Clerk', 'Colombo', '0112256214', 'sarath.png'),
(6, '', '', '', '', 'Choose', '', '', ''),
(8, '', 'Shashika', 'Gamage', '780152162V', 'Technician', 'Anuradhapura', '0773357414', 'image09.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bid` (`bid`);

--
-- Indexes for table `customer_dit`
--
ALTER TABLE `customer_dit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issus_book`
--
ALTER TABLE `issus_book`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_book`
--
ALTER TABLE `return_book`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `customer_dit`
--
ALTER TABLE `customer_dit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `issus_book`
--
ALTER TABLE `issus_book`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `return_book`
--
ALTER TABLE `return_book`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
