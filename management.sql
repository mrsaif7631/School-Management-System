-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2016 at 11:01 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE IF NOT EXISTS `admin_log` (
  `admin_name` varchar(20) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`admin_name`, `admin_pass`) VALUES
('rabby', '12345'),
('shanto', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` int(11) NOT NULL,
  `notice_des` varchar(2000) NOT NULL,
  `notice_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `notice_des`, `notice_date`) VALUES
(1, 'Varsity off', '2016-02-06'),
(2, 'New teacher', '2016-02-07'),
(3, 'paymentt korum', '2016-02-02'),
(9, 'ok', '2016-02-10'),
(12, 'abcd', '2016-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `res_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `class` varchar(2) NOT NULL,
  `roll` varchar(5) NOT NULL,
  `bangla` varchar(3) NOT NULL,
  `english` varchar(3) NOT NULL,
  `math` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`res_id`, `name`, `class`, `roll`, `bangla`, `english`, `math`) VALUES
(1, 'Ahsan Habib', '1', '1', '80', '80', '80'),
(2, 'Touhidul Islam', '1', '2', '45', '40', '100'),
(3, 'Faysal Ahmed', '1', '3', '38', '80', '45'),
(4, 'Samiul Ahmed', '1', '4', '70', '46', '70'),
(5, 'Fayza Amrren', '2', '1', '100', '100', '95'),
(6, 'Faiaz Uddin', '2', '2', '56', '40', '90'),
(7, 'Papin Mia', '2', '3', '100', '95', '40'),
(8, 'Reza Khan', '2', '5', '80', '80', '40'),
(9, 'Ayesha', '1', '6', '70', '70', '70');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `teacher_id` int(11) NOT NULL,
  `teach_name` varchar(20) NOT NULL,
  `teach_sub` varchar(20) NOT NULL,
  `teach_degree` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `teach_name`, `teach_sub`, `teach_degree`) VALUES
(1, 'Abdur Rahim', 'Bangla', 'M.A(DU)'),
(2, 'Ayesha Aziz', 'English', 'M.A(CU)'),
(3, 'Malik Aman', 'ICT', 'Bsc.(AUST)'),
(4, 'Onadinath Mandal', 'Math', 'M.A(DU)'),
(5, 'Faiaz Uddin', 'History', 'M.A(Dhaka college)'),
(6, 'Rahin Mia', 'Islam Sikkha', 'M.A(DU)'),
(8, 'Karim', 'Bangla', 'B.A'),
(9, 'shanto', 'Math', 'Phd');

-- --------------------------------------------------------

--
-- Table structure for table `viewcounter`
--

CREATE TABLE IF NOT EXISTS `viewcounter` (
  `id` int(11) NOT NULL,
  `pagename` varchar(20) NOT NULL,
  `view` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `viewcounter`
--
ALTER TABLE `viewcounter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `viewcounter`
--
ALTER TABLE `viewcounter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
