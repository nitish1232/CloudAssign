-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2017 at 08:29 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `aa`
--

CREATE TABLE `aa` (
  `uid` varchar(100) NOT NULL,
  `marks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aa`
--

INSERT INTO `aa` (`uid`, `marks`) VALUES
('1RV16SCS01', '13'),
('1RV16SCS02', '56'),
('1RV16SCS03', ''),
('1RV16SCS04', ''),
('1RV16SCS05', ''),
('1RV16SCS06', ''),
('1RV16SCS07', ''),
('1RV16SCS08', ''),
('1RV16SCS09', ''),
('1RV16SCS10', '');

-- --------------------------------------------------------

--
-- Table structure for table `cc`
--

CREATE TABLE `cc` (
  `uid` varchar(100) NOT NULL,
  `marks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cc`
--

INSERT INTO `cc` (`uid`, `marks`) VALUES
('1RV16SCS01', ''),
('1RV16SCS02', ''),
('1RV16SCS03', ''),
('1RV16SCS04', ''),
('1RV16SCS05', ''),
('1RV16SCS06', ''),
('1RV16SCS07', ''),
('1RV16SCS08', ''),
('1RV16SCS09', ''),
('1RV16SCS10', '');

-- --------------------------------------------------------

--
-- Table structure for table `ir`
--

CREATE TABLE `ir` (
  `uid` varchar(100) NOT NULL,
  `marks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ir`
--

INSERT INTO `ir` (`uid`, `marks`) VALUES
('1RV16SCS01', ''),
('1RV16SCS02', ''),
('1RV16SCS03', ''),
('1RV16SCS04', ''),
('1RV16SCS05', ''),
('1RV16SCS06', ''),
('1RV16SCS07', ''),
('1RV16SCS08', ''),
('1RV16SCS09', ''),
('1RV16SCS10', '');

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

CREATE TABLE `pm` (
  `uid` varchar(100) NOT NULL,
  `marks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm`
--

INSERT INTO `pm` (`uid`, `marks`) VALUES
('1RV16SCS01', ''),
('1RV16SCS02', ''),
('1RV16SCS03', ''),
('1RV16SCS04', ''),
('1RV16SCS05', ''),
('1RV16SCS06', ''),
('1RV16SCS07', ''),
('1RV16SCS08', ''),
('1RV16SCS09', ''),
('1RV16SCS10', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` varchar(100) NOT NULL,
  `subjects` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `subjects`) VALUES
('1234', 'aa'),
('1234', 'cc'),
('12345', 'ir'),
('12345', 'pm');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `uid` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`uid`, `fname`, `lname`, `email`, `phone`) VALUES
('1RV16SCS01', 'Akkasali', 'Neelkanth', 'neelkanth123@gmail.com', '9876543210'),
('1RV16SCS02', 'Amrutha', 'Kulkarni', 'amrutha123@gmail.com', '9876543210'),
('1RV16SCS03', 'Apoorva', '', 'apoorva123@gmail.com', '9876543210'),
('1RV16SCS04', 'Athri', 'Rao', 'athri123@gmail.com', '9876543210'),
('1RV16SCS05', 'Deepa', 'Kalburgi', 'deepa123@gmail.com', '9876543210'),
('1RV16SCS06', 'Deepak', 'Nandihal', 'deepak123@gmail.com', '9876543210'),
('1RV16SCS07', 'Deepika', 'Ravi', 'deepika123@gmail.com', '9876543210'),
('1RV16SCS08', 'NItish', 'Ugru', 'nitish1232@gmail.com', '7411247525'),
('1RV16SCS09', 'Poornanand', 'Naik', 'poornanand123@gmail.com', '9876543210'),
('1RV16SCS10', 'Prashant', 'Biradar', 'prashant123@gmail.com', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `isAssigned` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject`, `sname`, `isAssigned`) VALUES
('aa', 'Advanced Algorithms', '1'),
('pm', 'Project Management', '1'),
('cc', 'Cloud Computing', '1'),
('ir', 'Information Retrieval', '1'),
('ws', 'Web Services', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` varchar(15) NOT NULL,
  `uname` varchar(500) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `profile` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `password`, `profile`) VALUES
('123', 'Admin User', 'hi', 'a'),
('1234', 'Staff One', 'hi', 'st'),
('12345', 'Staff Two', 'hi', 'st'),
('1RV16SCS01', 'Neelkanth', 'hi', 's'),
('1RV16SCS02', 'Amrutha', 'hi', 's'),
('1RV16SCS03', 'Apoorva', 'hi', 's'),
('1RV16SCS04', 'Athri', 'hi', 's'),
('1RV16SCS05', 'Deapa', 'hi', 's'),
('1RV16SCS06', 'Deepak', 'hi', 's'),
('1RV16SCS07', 'Deepika', 'hi', 's'),
('1RV16SCS08', 'Nitish', 'hi', 's'),
('1RV16SCS09', 'Poornanand', 'hi', 's'),
('1RV16SCS10', 'Prashant', 'hi', 's');

-- --------------------------------------------------------

--
-- Table structure for table `ws`
--

CREATE TABLE `ws` (
  `uid` varchar(100) NOT NULL,
  `marks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ws`
--

INSERT INTO `ws` (`uid`, `marks`) VALUES
('1RV16SCS01', ''),
('1RV16SCS02', ''),
('1RV16SCS03', ''),
('1RV16SCS04', ''),
('1RV16SCS05', ''),
('1RV16SCS06', ''),
('1RV16SCS07', ''),
('1RV16SCS08', ''),
('1RV16SCS09', ''),
('1RV16SCS10', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aa`
--
ALTER TABLE `aa`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `cc`
--
ALTER TABLE `cc`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `ir`
--
ALTER TABLE `ir`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `pm`
--
ALTER TABLE `pm`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sid`,`subjects`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `ws`
--
ALTER TABLE `ws`
  ADD KEY `uid` (`uid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aa`
--
ALTER TABLE `aa`
  ADD CONSTRAINT `aa_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `cc`
--
ALTER TABLE `cc`
  ADD CONSTRAINT `cc_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `ir`
--
ALTER TABLE `ir`
  ADD CONSTRAINT `ir_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `pm`
--
ALTER TABLE `pm`
  ADD CONSTRAINT `pm_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `ws`
--
ALTER TABLE `ws`
  ADD CONSTRAINT `ws_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
