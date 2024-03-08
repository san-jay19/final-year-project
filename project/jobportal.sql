-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 10:44 AM
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
-- Table structure for table `jobdetails`
--

CREATE TABLE `jobdetails` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `location` mediumtext NOT NULL,
  `requirements` mediumtext NOT NULL,
  `salary` int(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('Anto', 'anto', 'anto@gmail.com', 'anto', 'job_seeker'),
('jobseeker', 'jobseeker', 'jobseeker@gmail.com', 'sanjay', 'job_seeker'),
('Niranjan', 'nirai', 'nirai@gmailcom', 'nirai', 'job_seeker'),
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
('sanjay', 'sanjay', 919292292, 'sanjay@gmail.com', 'djfhjdgbdfjhbgdhfb', 'sdhjfbsdjhgbfdjhgbfdjghdfbg', 'hjdsgfbfdjhgbfdjhgbjdhfbgjfdhbgdfjhgbdfjhgbfdj', 'hfgbdfjhgbdfjhgbfdjghbdfjgbfdjghbfd', 'jdfhbgjfdhbgfdjhg'),
('jobseeker', 'Sanjay.S', 919293949, 'sanjay@gmail.com', 'MettuKalani Street', 'Fresher', 'BCA', 'Oracle Academy', 'Java'),
('nirai', 'Niranjan', 12345678, 'nirai@gmailcom', 'neyveli', 'fresher', 'bca', 'oracle', 'java');

-- --------------------------------------------------------

--
-- Table structure for table `job_listings`
--

CREATE TABLE `job_listings` (
  `username` varchar(100) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `job_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_listings`
--

INSERT INTO `job_listings` (`username`, `companyname`, `job`, `location`, `job_id`) VALUES
('recruiter', 'Company', 'Financial Officer', 'Chennai', 7);

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
('recruiter', 'recruiter', 'recruiter@gmail.com', 'sanjay', 'recruiter'),
('DE Shaw', 'recruiter2', 'recruiter2@gmail.com', 'sanjay', 'recruiter');

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
-- Dumping data for table `recruiterdetails`
--

INSERT INTO `recruiterdetails` (`name`, `username`, `email`, `phoneno`, `address`, `about`, `ccv`) VALUES
('Company', 'recruiter', 'company@gmail.com', 919293949, 'Company address', 'Created at 1977', 'We practice thorough safety measures'),
('DE Shaw', 'recruiter2', 'recruiter2@gmail.com', 2147483647, 'no1', 'no2', 'no3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobdetails`
--
ALTER TABLE `jobdetails`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `job_listings`
--
ALTER TABLE `job_listings`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `job_listings_ibfk_1` (`username`);

--
-- Indexes for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `recruiterdetails`
--
ALTER TABLE `recruiterdetails`
  ADD KEY `recruiterdetails_ibfk_1` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobdetails`
--
ALTER TABLE `jobdetails`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_listings`
--
ALTER TABLE `job_listings`
  MODIFY `job_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobdetails`
--
ALTER TABLE `jobdetails`
  ADD CONSTRAINT `jobdetails_ibfk_1` FOREIGN KEY (`id`) REFERENCES `job_listings` (`job_id`);

--
-- Constraints for table `jobseekerdetails`
--
ALTER TABLE `jobseekerdetails`
  ADD CONSTRAINT `jobseekerdetails_ibfk_1` FOREIGN KEY (`username`) REFERENCES `jobseeker` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_listings`
--
ALTER TABLE `job_listings`
  ADD CONSTRAINT `job_listings_ibfk_1` FOREIGN KEY (`username`) REFERENCES `recruiter` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recruiterdetails`
--
ALTER TABLE `recruiterdetails`
  ADD CONSTRAINT `recruiterdetails_ibfk_1` FOREIGN KEY (`username`) REFERENCES `recruiter` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
