-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 07:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc_lib`
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
  `bDate` date NOT NULL,
  `cnumber` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bid`, `bookName`, `bcategory`, `bDate`, `cnumber`, `discription`, `image`) VALUES
(45, 'xcfv', 'fbfbnc', 'JAVA', '2019-03-02', '6', 'dvs', 'reading.png'),
(46, '1233', 'ash', 'java', '2018-12-31', '2', 'asd', 'r.jpg'),
(47, 'wdAD', 'ADKN', 'JAVA', '0324-08-04', '8', 'WDJ ', '57379467_2168249033223963_8492228565666889728_n.jpg'),
(48, 'ASHE', 'ASHEN', 'JAVA', '0003-02-03', '2', 'ERQWERK', 'r.jpg'),
(49, 'wdDM', 'FFE,', 'java', '0435-05-02', '4', '435TWER', '5.JPG'),
(50, 'AFA', 'EWFW', 'java', '0045-04-05', '234', 'ERAFS', 'Untitled-4.jpg'),
(51, '1234', 'WFAEGK', 'java', '0008-04-05', '3', 'asFD', '1-9.png');

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
  `mobile` varchar(12) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstName`, `lastname`, `username`, `email`, `password`, `address`, `mobile`, `image`) VALUES
(23, 'menol', 'shehan', 'menol', 'aceproperty7@gmail.com', 'menolshehan', 'kudawewa', '0778500835', ''),
(24, 'admin', 'admin', 'admin', 'admin@admin', 'pptx', 'owner', '', ''),
(25, 'ashenm', 'manilka', 'ashenBDWDKK', 'ashen9593@gmail.com', 'asdf', 'wefwefemw', '0770261700', '_downloadfiles_wallpapers_2560_1440_samantha_vijay_tamil_movie_16351.jpg'),
(26, '', '', '123', 'as@gmail.com', '12345', '', '', ''),
(27, '', '', '', 'test1@gmail.com', '12345', '', '', ''),
(28, '', '', '', 'test1@gmail.com', '12345', '', '', ''),
(29, '', '', '', '', '', '', '', ''),
(30, '', '', '', 'tt11', '12345', '', '', ''),
(31, '', '', '', 'tt11', '12345', '', '', ''),
(32, '', '', '', 'qw', '12345', '', '', ''),
(33, '', '', '', 'qw', '12345', '', '', ''),
(34, '', '', '', 'abc', '12345', '', '', ''),
(35, '', '', '', 'a.a@gmail.com', '12345', '', '', ''),
(36, '', '', '', 'aa.a@gmail.com', '12345', '', '', ''),
(37, '', '', '', '123@gmail.com', '12345', '', '', ''),
(38, '1', '', '', '', '', '', '', ''),
(39, '1', '', '', '', '', '', 'ewefwt', ''),
(40, 'Supun ', 'Ruchira', 'forggy', 'supun@gmail.com', '12345', '123/6,galewala', '0771122333', ''),
(41, 'chmika', 'pathiraja', 'chamika', 'chmika@gmail', '12345', 'dsfafs', '1234566789', ''),
(42, '', '', '', '', '', '', '', ''),
(43, '', '', '', '', '', '', '', ''),
(44, '', '', '', '', '', '', '', ''),
(45, '', '', '', '', '', '', '', ''),
(46, '', '', '', '', '', '', '', ''),
(47, '', '', '', '', '', '', '', ''),
(48, '', '', '', '', '', '', '', ''),
(49, '', '', '', '', '', '', '', ''),
(50, '', '', '', '', '', '', '', ''),
(51, '', '', '', '', '', '', '', ''),
(52, '', '', '', '', '', '', '', ''),
(53, '1651531', '', '', '', '', '', '', ''),
(54, '', '', '', '', '', '', '', ''),
(55, '', '', '', '', '', '', '', ''),
(56, '', '', '', '', '', '', '', ''),
(57, '', '', '', '', '', '', '', ''),
(58, '', '', '', '', '', '', '', ''),
(59, '', '', '', '', '', '', '', ''),
(60, '', '', '', '', '', '', '', ''),
(61, '', '', '', '', '', '', '', ''),
(62, '', '', '', '', '', '', '', ''),
(63, '', '', '', '', '', '', '', ''),
(64, '', '', '', '', '', '', '', ''),
(65, 'lnknln', 'lmlkn', 'kln', 'as', 'as', 'asdfa', 'sfdgs', ''),
(66, 'a', '', '', '', 'as', 'efwaf', '', ''),
(67, '', '', '', '', '', '', '', ''),
(68, 'FEJN', 'WJ', 'QWRJ', 'a@gmail.com', 'asd', 'sbdb', '0770261700', '59188967_586814255153644_2914481695153455104_n.jpg'),
(69, 'ashen', 'manilka', 'ashen', 'as@gmail.com', 'asd', 'wdfsg', '0770361700', 'article-ehmashmave-1462090712.jpeg'),
(70, 'sdh', 'zcj', 'adk', 'sAS@gmail.com', 'asd', 'asdfg', '0770261700', '36996913082_aab0dff572_b.jpg'),
(71, 'sdh', 'zcj', 'adk', 'sAS@gmail.com', 'asd', 'asdfg', '0770261700', '36996913082_aab0dff572_b.jpg'),
(72, 'ashen', 'manilka', 'ashen', 'as@gmail.com', 'asd', 'sadsfg', '0770261700', '1fc16e72e41fb2e1168f17496d51e1f7.jpg'),
(73, 'ashen', 'manilka', 'ashen', 'as@gmail.com', 'asd', 'sadsfg', '0770261700', '1fc16e72e41fb2e1168f17496d51e1f7.jpg'),
(74, 'ash', 'WDEFK', 'QWRJER', 'as@gmail.com', 'asf', 'asdafj', '0770261700', 'Cg9OGq4WMAAgQFe.jpg'),
(75, 'ash', 'WDEFK', 'QWRJER', 'as@gmail.com', 'asf', 'asdafj', '0770261700', 'Cg9OGq4WMAAgQFe.jpg'),
(76, 'ashen', 'Sfafj', 'abc', 'a@gmil.com', 'asd', 'sdsfsgk', '0770261700', '36996913082_aab0dff572_b.jpg'),
(77, 'ashen', 'Sfafj', 'abc', 'a@gmil.com', 'asd', 'sdsfsgk', '0770261700', '36996913082_aab0dff572_b.jpg'),
(78, 'ashen', 'ahen', 'ashen', 'a@gmail.com', 'asd', 'Sfzsfgzsdgk', '0770261700', '_downloadfiles_wallpapers_2560_1440_samantha_vijay_tamil_movie_16351.jpg'),
(79, 'ashenm', 'manilka', 'ashenBDWDKK', 'ashen9593@gmail.com', 'asdf', 'wefwefemw', '0770261700', '_downloadfiles_wallpapers_2560_1440_samantha_vijay_tamil_movie_16351.jpg'),
(80, '', '', '', '', '', '', '', ''),
(81, 'ashen', 'dfk', 'sdka', 'ashen@gmail.com', '1234', 'qrro', '0770261700', 'JBG3-JBG3.jpg'),
(82, 'ashen', 'manilka', 'ash', 'ashenmm@gmail.com', '1234', 'sdfg', '0770261700', ''),
(83, 'ashen', 'manilka', 'asd', 'abc@gmail.com', '1234', 'scdjs', '0770261700', '37362842_1698277366957704_4110761955470344192_n.jpg'),
(84, 'qejk', 'djk', 'dfjk', 'a@gmail.com', '1234', 'wekr', '0770261700', '12640253_881750665277049_2594209421349552192_o.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
