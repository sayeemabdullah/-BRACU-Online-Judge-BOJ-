-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 07:00 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bracuonlinejudge(boj)`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `question_id` varchar(255) NOT NULL,
  `problem_name` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `test_case` varchar(10000) NOT NULL,
  `testcase_output` varchar(10000) NOT NULL,
  `difficulty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`question_id`, `problem_name`, `question`, `test_case`, `testcase_output`, `difficulty`) VALUES
('1', 'Printing Numbers 1', 'Write a program, which prints the following sequence of values in loops.\r\n\r\nInput :\r\n\r\nThere is no input for this problem.\r\n\r\nOutput :\r\n\r\n24 18 12 6 0 -6 \r\n\r\nN.B. There is a space after -6.\r\n', '', '24 18 12 6 0 -6 ', 'Easy'),
('10', 'Perfect or !Perfect', 'An integer number is said to be a perfect number if its factors, including 1 but not the number itself, sum to the number. \r\nFor example, 6 is a perfect number because factors of 6 are 1, 2, 3, 6 and if we add all factors except itself, 6 = 1 + 2 + 3. \r\nWrite a program, which  takes a number and tells if it is a perfect number or not.\r\n\r\n\r\nInput :\r\n\r\n2\r\n\r\nOutput :\r\n\r\n!Perfect\r\n\r\n\r\n\r\nInput :\r\n\r\n6\r\n\r\nOutput :\r\n\r\nPerfect\r\n\r\n\r\n\r\nN.B. Don\'t Use \"println\" / \"endl\" / \"\\n\"', '72', '!Perfect', 'Easy'),
('2', 'Printing Numbers 2', 'Write a program, which prints the following sequence of values in loops.\r\n\r\nInput :\r\n\r\nThere is no input for this problem.\r\n\r\nOutput :\r\n\r\n-10 -5 0 5 10 15 20  \r\n\r\nN.B. There is a space after 20.\r\n', '', '-10 -5 0 5 10 15 20 ', 'Easy'),
('3', 'Printing Numbers 3', 'Write a program, which prints the following sequence of values in loops.\r\n\r\nInput :\r\n\r\nThere is no input for this problem.\r\n\r\nOutput :\r\n\r\n18 27 36 45 54 63 \r\n\r\nN.B. There is a space after 63', '', '18 27 36 45 54 63 ', 'Easy'),
('4', 'Printing Numbers 4', 'Write a program, which prints the following sequence of values in loops.\r\n\r\nInput :\r\n\r\nThere is no input for this problem.\r\n\r\nOutput :\r\n\r\n18 -27 36 -45 54 -63 \r\n\r\nN.B. There is a space after -63', '', '18 -27 36 -45 54 -63 ', 'Easy'),
('5', 'Even or Odd 1', 'Write a program that asks the user for 1 number and prints if the number is odd or even.\r\n\r\nInput :\r\n\r\n11\r\n\r\nOutput :\r\n\r\nOdd\r\n\r\n\r\nN.B. Don\'t Use \"println\" / \"endl\" / \"\\n\"', '20', 'Even', 'Easy'),
('6', 'Sum 1', 'Write a program that asks the user for 2 numbers and prints their sum.\r\n\r\nInput :\r\n\r\n2 2\r\n\r\nOutput :\r\n\r\n4\r\n\r\n\r\nN.B. Don\'t Use \"println\" / \"endl\" / \"\\n\"', '2 2', '4', 'Easy'),
('7', '7 && 9', 'Write a program which adds all numbers that are multiples of both 7 and 9 up to 600.\r\n\r\nInput :\r\n\r\nThere is no input for this problem.\r\n\r\nOutput :\r\n\r\n2835\r\n\r\n\r\nN.B. Don\'t Use \"println\" / \"endl\" / \"\\n\"', '', '2835', 'Easy'),
('8', '7 || 9', 'Write a program which adds all numbers that are multiples of 7 or 9 up to 600.\r\n\r\nInput :\r\n\r\nThere is no input for this problem.\r\n\r\nOutput :\r\n\r\n42649\r\n\r\n\r\nN.B. Don\'t Use \"println\" / \"endl\" / \"\\n\"', '', '42649', 'Easy'),
('9', '!(7 && 9)', 'Write a program which adds all numbers that are multiples of either 7 or 9 but not both, up to 600.\r\n\r\nInput :\r\n\r\nThere is no input for this problem.\r\n\r\nOutput :\r\n\r\n39814\r\n\r\n\r\nN.B. Don\'t Use \"println\" / \"endl\" / \"\\n\"', '', '39814', 'Easy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `solved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sid`, `name`, `email`, `password`, `solved`) VALUES
('17101005', 'Byomkesh Bakshi', 'byomkesh_bakshi@yahoo.com', 'admin', 9),
('17101004', 'Prodosh Chandra Mitra', 'feluda@gmail.com', 'admin', 10),
('17101008', 'Lalmohan Ganguly', 'jatayu@hotmail.com', 'admin', 1),
('17101001', 'Misir Ali', 'misir@gmail.com', 'admin', 8),
('17101002', 'Himu', 'mohapurush@gmail.com', 'admin', 4),
('17101007', 'Neela', 'neela@gmail.com', 'admin', 6),
('17101006', 'Rupa', 'neel_rupa@gmail.com', 'admin', 4),
('17101009', 'Sayeem Md Abdullah', 'sayeem.mdabdullah@gmail.com', 'admin', 8),
('17101003', 'Shubro', 'shubro@gmail.com', 'admin', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `sid` (`sid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `sid_2` (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
