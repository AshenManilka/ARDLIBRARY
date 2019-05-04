-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 04:08 PM
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
(79, 'A0056', 'Mollecular Science', 'Science', 'John Doe', '600', 'Science Press', '2019-04-20', '3', 'Chemistry Science', 'Sciench.JPG');

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
(25, 'Dimuth', 'Gunawardana', 'demo', 'Deneth@gmail.com', '12345678', 'wefwefwee', '0774937372');

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
(3, 'DM001', 'Steve', 'Rogers', '253391346V', 'Database Manager', 'Kandy Road, Malabe.', '0781234567', 'avatar6.png');

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
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
