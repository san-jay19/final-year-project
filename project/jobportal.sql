-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 11:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`name`, `username`, `email`, `password`, `category`) VALUES
('jobseeker', 'jobseeker', 'jobseeker@gmail.com', 'sanjay', 'job_seeker'),
('sanjay', 'sanjay', 'sanjay@gmail.ocm', 'sanjay', 'job_seeker'),
('sanjay', 'sanjay1904', 'sanjay@gmail.com', 'sanjay', 'job_seeker');

-- --------------------------------------------------------

--
-- Table structure for table `jobseekerdetails`
--

CREATE TABLE `jobseekerdetails` (
  `username` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `experience` mediumtext NOT NULL,
  `education` mediumtext NOT NULL,
  `certifications` mediumtext NOT NULL,
  `skills` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseekerdetails`
--

INSERT INTO `jobseekerdetails` (`username`, `name`, `phoneno`, `email`, `address`, `experience`, `education`, `certifications`, `skills`) VALUES
('sanjay', 'sanjay', 919292292, 'sanjay@gmail.com', 'djfhjdgbdfjhbgdhfb', 'sdhjfbsdjhgbfdjhgbfdjghdfbg', 'hjdsgfbfdjhgbfdjhgbjdhfbgjfdhbgdfjhgbdfjhgbfdj', 'hfgbdfjhgbdfjhgbfdjghbdfjgbfdjghbfd', 'jdfhbgjfdhbgfdjhg');

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

CREATE TABLE `recruiter` (
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`name`, `username`, `email`, `password`, `category`) VALUES
('recruiter', 'recruiter', 'recruiter@gmail.com', 'sanjay', 'recruiter');

-- --------------------------------------------------------

--
-- Table structure for table `recruiterdetails`
--

CREATE TABLE `recruiterdetails` (
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` int(100) NOT NULL,
  `address` mediumtext NOT NULL,
  `about` mediumtext NOT NULL,
  `ccv` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `jobseekerdetails`
--
ALTER TABLE `jobseekerdetails`
  ADD KEY `username` (`username`);

--
-- Indexes for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `recruiterdetails`
--
ALTER TABLE `recruiterdetails`
  ADD KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobseekerdetails`
--
ALTER TABLE `jobseekerdetails`
  ADD CONSTRAINT `jobseekerdetails_ibfk_1` FOREIGN KEY (`username`) REFERENCES `jobseeker` (`username`);

--
-- Constraints for table `recruiterdetails`
--
ALTER TABLE `recruiterdetails`
  ADD CONSTRAINT `recruiterdetails_ibfk_1` FOREIGN KEY (`username`) REFERENCES `recruiter` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
