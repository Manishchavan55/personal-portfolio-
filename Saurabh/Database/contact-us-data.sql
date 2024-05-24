-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 12:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact-us-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact-data`
--

CREATE TABLE `contact-data` (
  `Id` int(11) NOT NULL,
  `Full_name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact_no` bigint(10) NOT NULL,
  `Email_sub` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact-data`
--

INSERT INTO `contact-data` (`Id`, `Full_name`, `Email`, `Contact_no`, `Email_sub`, `Message`) VALUES
(1, 'SAURABH CHAVAN', 'manishff87@gmail.com', 8208136708, 'for a meeting ', 'hello'),
(2, 'sachin', 'sachintt@gmail.com', 1234567890, 'for a meeting ', 'hello'),
(3, 'manish chavan', 'manish@gmail.com', 1234567890, 'for a meeting ', 'hello'),
(5, 'manish chavan', 'saurabh@gmail.com', 1234567890, 'HELLO', 'hii'),
(9, 'Ram chavan', 'Ram@gmail.com', 1234567890, 'test', 'hey....!'),
(10, 'Dipak', 'dipak@gmai.com', 8208136708, 'DEEP', 'hey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact-data`
--
ALTER TABLE `contact-data`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact-data`
--
ALTER TABLE `contact-data`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
