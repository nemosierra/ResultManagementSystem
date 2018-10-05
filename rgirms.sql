-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 12:04 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgirms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Admin', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `cn`
--

CREATE TABLE `cn` (
  `Roll` varchar(20) NOT NULL,
  `TAE1` varchar(2) DEFAULT NULL,
  `TAE2` varchar(2) DEFAULT NULL,
  `TAE3` varchar(2) DEFAULT NULL,
  `TAE4` varchar(2) DEFAULT NULL,
  `TAE5` varchar(2) DEFAULT NULL,
  `TAE6` varchar(2) DEFAULT NULL,
  `TAE7` varchar(2) DEFAULT NULL,
  `CAE1` varchar(2) DEFAULT NULL,
  `CAE2` varchar(2) DEFAULT NULL,
  `CAE3` varchar(2) DEFAULT NULL,
  `CAE4` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cn`
--

INSERT INTO `cn` (`Roll`, `TAE1`, `TAE2`, `TAE3`, `TAE4`, `TAE5`, `TAE6`, `TAE7`, `CAE1`, `CAE2`, `CAE3`, `CAE4`) VALUES
('TYCOMPA19', '4', '4', '2', '3', '4', '4', '3', '18', '19', '11', '0');

-- --------------------------------------------------------

--
-- Table structure for table `dbms`
--

CREATE TABLE `dbms` (
  `Roll` varchar(20) NOT NULL,
  `TAE1` varchar(2) DEFAULT NULL,
  `TAE2` varchar(2) DEFAULT NULL,
  `TAE3` varchar(2) DEFAULT NULL,
  `TAE4` varchar(2) DEFAULT NULL,
  `TAE5` varchar(2) DEFAULT NULL,
  `TAE6` varchar(2) DEFAULT NULL,
  `TAE7` varchar(2) DEFAULT NULL,
  `CAE1` varchar(2) DEFAULT NULL,
  `CAE2` varchar(2) DEFAULT NULL,
  `CAE3` varchar(2) DEFAULT NULL,
  `CAE4` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbms`
--

INSERT INTO `dbms` (`Roll`, `TAE1`, `TAE2`, `TAE3`, `TAE4`, `TAE5`, `TAE6`, `TAE7`, `CAE1`, `CAE2`, `CAE3`, `CAE4`) VALUES
('TYCOMPA49', '4', '3', '4', '4', '4', '2', '4', '18', '17', '19', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sepm`
--

CREATE TABLE `sepm` (
  `Roll` varchar(20) NOT NULL,
  `TAE1` varchar(2) DEFAULT NULL,
  `TAE2` varchar(2) DEFAULT NULL,
  `TAE3` varchar(2) DEFAULT NULL,
  `TAE4` varchar(2) DEFAULT NULL,
  `TAE5` varchar(2) DEFAULT NULL,
  `TAE6` varchar(2) DEFAULT NULL,
  `TAE7` varchar(2) DEFAULT NULL,
  `CAE1` varchar(2) DEFAULT NULL,
  `CAE2` varchar(2) DEFAULT NULL,
  `CAE3` varchar(2) DEFAULT NULL,
  `CAE4` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sepm`
--

INSERT INTO `sepm` (`Roll`, `TAE1`, `TAE2`, `TAE3`, `TAE4`, `TAE5`, `TAE6`, `TAE7`, `CAE1`, `CAE2`, `CAE3`, `CAE4`) VALUES
('TYCOMPA49', '3', '3', '2', '4', '4', '4', '3', '11', '8', '12', '0'),
('TYCOMPB18', '4', '4', '2', '3', '4', '4', '3', '12', '15', '11', '0');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Roll` varchar(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `department` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `division` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Roll`, `fname`, `lname`, `dob`, `gender`, `username`, `password`, `department`, `class`, `division`) VALUES
('TYCOMPA19', 'Aniket', 'Ichake', '1998-09-27', 'Male', 'aniketichake00@gmail.com', '12345678', 'CS', 'TY', 'A'),
('TYCOMPA49', 'Niraj', 'Singh', '1999-02-07', 'Male', 'nirajstomar@gmail.com', 'asdasdasd', 'CS', 'TY', 'A'),
('TYCOMPA81', 'Abhishek', 'Jagnade', '1998-12-05', 'Male', 'jagnadeabhi@gmail.com', 'asdasdqwe', 'CS', 'TY', 'A'),
('TYCOMPB18', 'Kratika', 'Sharma', '1996-11-27', 'Female', 'kratikasharma@gmail.com', 'Hellotomar', 'CS', 'TY', 'B'),
('TYMECHA09', 'Manish ', 'Wamanw', '1997-05-08', 'Male', 'manish.wamane@raisoni.net', '123', 'ME', 'TY', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherid` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pasword` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherid`, `fname`, `lname`, `dob`, `gender`, `department`, `username`, `pasword`, `contact`) VALUES
('1', 'Suvarna', 'Satkar', '1982-05-08', 'Female', 'CS', 'suvarna.satkar@raisoni.net', 'root', '9011427208'),
('2', 'Hansraj', 'Wankhede', '1978-07-07', 'female', 'CS', 'hansaraj.wankhede@raisoni.net', 'root', '9970285309');

-- --------------------------------------------------------

--
-- Table structure for table `toc`
--

CREATE TABLE `toc` (
  `Roll` varchar(20) NOT NULL,
  `TAE1` varchar(2) DEFAULT NULL,
  `TAE2` varchar(2) DEFAULT NULL,
  `TAE3` varchar(2) DEFAULT NULL,
  `TAE4` varchar(2) DEFAULT NULL,
  `TAE5` varchar(2) DEFAULT NULL,
  `TAE6` varchar(2) DEFAULT NULL,
  `TAE7` varchar(2) DEFAULT NULL,
  `CAE1` varchar(2) DEFAULT NULL,
  `CAE2` varchar(2) DEFAULT NULL,
  `CAE3` varchar(2) DEFAULT NULL,
  `CAE4` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toc`
--

INSERT INTO `toc` (`Roll`, `TAE1`, `TAE2`, `TAE3`, `TAE4`, `TAE5`, `TAE6`, `TAE7`, `CAE1`, `CAE2`, `CAE3`, `CAE4`) VALUES
('TYCOMPB18', '4', '4', '4', '2', '3', '4', '3', '18', '19', '15', '0');

-- --------------------------------------------------------

--
-- Table structure for table `wt`
--

CREATE TABLE `wt` (
  `Roll` varchar(20) NOT NULL,
  `TAE1` varchar(2) DEFAULT NULL,
  `TAE2` varchar(2) DEFAULT NULL,
  `TAE3` varchar(2) DEFAULT NULL,
  `TAE4` varchar(2) DEFAULT NULL,
  `TAE5` varchar(2) DEFAULT NULL,
  `TAE6` varchar(2) DEFAULT NULL,
  `TAE7` varchar(2) DEFAULT NULL,
  `CAE1` varchar(2) DEFAULT NULL,
  `CAE2` varchar(2) DEFAULT NULL,
  `CAE3` varchar(2) DEFAULT NULL,
  `CAE4` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wt`
--

INSERT INTO `wt` (`Roll`, `TAE1`, `TAE2`, `TAE3`, `TAE4`, `TAE5`, `TAE6`, `TAE7`, `CAE1`, `CAE2`, `CAE3`, `CAE4`) VALUES
('TYCOMPA49', '4', '4', '3', '4', '2', '4', '3', '18', '19', '18', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cn`
--
ALTER TABLE `cn`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `dbms`
--
ALTER TABLE `dbms`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `sepm`
--
ALTER TABLE `sepm`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherid`);

--
-- Indexes for table `toc`
--
ALTER TABLE `toc`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `wt`
--
ALTER TABLE `wt`
  ADD PRIMARY KEY (`Roll`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
