-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2016 at 05:44 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `usr_tbl`
--

CREATE TABLE `usr_tbl` (
  `usr_id` int(16) NOT NULL,
  `usr_userName` varchar(255) NOT NULL,
  `usr_name` varchar(255) CHARACTER SET latin5 NOT NULL,
  `usr_lastName` varchar(255) CHARACTER SET latin5 NOT NULL,
  `usr_phone` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `usr_password` varchar(255) NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_city` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `usr_zipCode` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `usr_country` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `usr_eligibility` varchar(100) NOT NULL,
  `usr_resume` longtext CHARACTER SET utf8mb4 NOT NULL,
  `usr_activationCode` varchar(255) NOT NULL,
  `usr_activated` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_tbl`
--

INSERT INTO `usr_tbl` (`usr_id`, `usr_userName`, `usr_name`, `usr_lastName`, `usr_phone`, `usr_password`, `usr_email`, `usr_city`, `usr_zipCode`, `usr_country`, `usr_eligibility`, `usr_resume`, `usr_activationCode`, `usr_activated`) VALUES
(30, '', 'ibrahim orakli', 'orakli', '2672657849', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'test@test.com', 'Bedford', '76022', 'US', 'Authorized to work in US for any employer', 'test ', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usr_tbl`
--
ALTER TABLE `usr_tbl`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usr_tbl`
--
ALTER TABLE `usr_tbl`
  MODIFY `usr_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
