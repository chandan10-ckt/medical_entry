-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2018 at 06:26 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_entry`
--

-- --------------------------------------------------------

--
-- Table structure for table `Medical_Entry`
--

CREATE TABLE `Medical_Entry` (
  `Name` varchar(56) NOT NULL,
  `Roll_Number` int(10) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Date_of_Birth` varchar(20) NOT NULL,
  `Blood_Group` varchar(5) NOT NULL,
  `Height` int(10) NOT NULL,
  `Weight` int(10) NOT NULL,
  `Identification_Mark` text NOT NULL,
  `Vaccination_Record` text NOT NULL,
  `Disability` varchar(255) NOT NULL,
  `Hostel` varchar(10) NOT NULL,
  `Room_Number` varchar(10) NOT NULL,
  `Semester` int(6) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Contact_Number` int(11) NOT NULL,
  `Email_Id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Medical Entry of Freshers';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Medical_Entry`
--
ALTER TABLE `Medical_Entry`
  ADD PRIMARY KEY (`Roll_Number`),
  ADD UNIQUE KEY `Roll_Number` (`Roll_Number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
