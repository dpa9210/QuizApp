-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 02:36 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(45) DEFAULT NULL,
  `admin_email` varchar(45) DEFAULT NULL,
  `admin_password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Admin', 'rmps@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `question_table`
--

CREATE TABLE `question_table` (
  `question_id` int(11) NOT NULL,
  `question_body` varchar(1000) DEFAULT NULL,
  `question_status` enum('1','0') DEFAULT '1',
  `optiona` varchar(500) DEFAULT NULL,
  `optionb` varchar(500) DEFAULT NULL,
  `optionc` varchar(500) DEFAULT NULL,
  `optiond` varchar(500) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question_table`
--

INSERT INTO `question_table` (`question_id`, `question_body`, `question_status`, `optiona`, `optionb`, `optionc`, `optiond`, `answer`) VALUES
(1, '<p>&lt;p&gt;2&lt;sup&gt;1&lt;/sup&gt;/&lt;sub&gt;2&lt;/sub&gt;&lt;/p&gt;</p>\r\n', '0', '<p>2<sup>1</sup>/<sub>2</sub></p>', '<p>2<sup>1</sup>/<sub>2</sub></p>', '<p>2<sup>1</sup>/<sub>2</sub></p>', '<p>2<sup>1</sup>/<sub>2</sub></p>', '<p>2<sup>1</sup>/<sub>2</sub></p>'),
(2, '<p>ghhgfhgfhgfr</p>\r\n', '1', 'fhfhhfhfhhfhfhhfhfhhfhfhhfhfhhfhfhhfhfhhfhfhhfhfhhfhfhhf', 'fhfhhfhfhhfhfhhfhfhh', 'fhgfhgffhfhhfhfhhfhfhhfhfhhfhfhh', 'fhfhhfhfhhfhfhhfhfhhfhfhh', 'fhfhhfhfhhfhfhhfhfhh'),
(3, '<p>fghfhfg</p>\r\n', '1', 'fhgfhfgfh', 'ffghgfhgf', 'fhfgh', 'fhgfhfghgf', 'hfhfhfghgfhgf'),
(4, '<p>fbfgbgfbf</p>\r\n', '1', 'fbfgbfg', 'fbgfbgfbf', 'fbbf', 'fbfbfbf', 'fbfgbgf'),
(5, '<p>fbfgbgfbfb</p>\r\n', '1', 'fbgfbgfbfgb', 'fbfgbfgbf', 'fbfgbfgb', 'fbgfbfbf', 'fbgfbgfbf'),
(6, '<p>hmhjmjm</p>\r\n', '1', 'hmjhmjhmhj', 'hmhjhjm', 'hmhjmhj', 'hjmhjmhj', 'hmhjmhjmhj'),
(7, '<p>hjmhjmhhhj</p>\r\n', '1', 'hjmjhmhj', 'hjmjhmhj', 'hjmjhjh', 'hmhjmhj', 'hjmjhmhjm'),
(8, '<p>jhjmmjhjhhj</p>\r\n', '1', 'hmhmjm', 'hmhjmjhmh', 'hmhjmhj', 'hmhjmhjjm', 'hjmhjmjh'),
(9, '<p>dgfdgdf</p>\r\n', '0', 'dfgfdgfd', 'dfgdfgdf', 'dfgdfgdf', 'dfgdfgfd', 'dgdfgfdgd'),
(10, '<p>dfgfdgfd</p>\r\n', '1', 'dfgfdgfd', 'dfgdfgfd', 'dgdfgfgd', 'dfgfd', 'dfgdfgdf'),
(11, '<p>gdfgdfddf</p>\r\n', '1', 'dfgdfgfd', 'fgdfgdf', 'dgdfgfd', 'dfgfdgfd', 'dfgdfgdf'),
(12, '<p>fgdgdfgdf</p>\r\n', '1', 'dfgfdgfd', 'dfgfdgfd', 'gdfgdfgdf', 'dfgfdgdf', 'dfgfdgfgdf'),
(13, '<p>dfgdfdfdf</p>\r\n', '1', 'dfgfdgfd', 'dfgdfgfd', 'dfgfdgfd', 'gdfgfdgfd', 'dfgfdgfd'),
(14, '', '1', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `question_table`
--
ALTER TABLE `question_table`
  ADD PRIMARY KEY (`question_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question_table`
--
ALTER TABLE `question_table`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
