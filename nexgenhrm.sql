-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 04:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nexgenhrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EID` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `NIC` varchar(10) DEFAULT NULL,
  `Tpno` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hrmanager`
--

CREATE TABLE `hrmanager` (
  `HRID` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sessionemployee`
--

CREATE TABLE `sessionemployee` (
  `sessionID` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  `attendence` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trainingsession`
--

CREATE TABLE `trainingsession` (
  `sessionID` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `venue` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EID`);

--
-- Indexes for table `hrmanager`
--
ALTER TABLE `hrmanager`
  ADD PRIMARY KEY (`HRID`);

--
-- Indexes for table `sessionemployee`
--
ALTER TABLE `sessionemployee`
  ADD PRIMARY KEY (`sessionID`,`employeeID`),
  ADD KEY `employeeID` (`employeeID`);

--
-- Indexes for table `trainingsession`
--
ALTER TABLE `trainingsession`
  ADD PRIMARY KEY (`sessionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hrmanager`
--
ALTER TABLE `hrmanager`
  MODIFY `HRID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainingsession`
--
ALTER TABLE `trainingsession`
  MODIFY `sessionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sessionemployee`
--
ALTER TABLE `sessionemployee`
  ADD CONSTRAINT `sessionemployee_ibfk_1` FOREIGN KEY (`employeeID`) REFERENCES `employee` (`EID`),
  ADD CONSTRAINT `sessionemployee_ibfk_2` FOREIGN KEY (`sessionID`) REFERENCES `trainingsession` (`sessionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
