-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 08:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conference_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `conference_participant`
--

CREATE TABLE `conference_participant` (
  `Pid` int(11) NOT NULL,
  `Pssn` varchar(15) NOT NULL,
  `Pfname` varchar(50) NOT NULL,
  `Plname` varchar(50) NOT NULL,
  `Pbod` date NOT NULL,
  `P_project_name` varchar(100) NOT NULL,
  `Psex` varchar(10) NOT NULL,
  `Pemail` varchar(255) NOT NULL,
  `Ppassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conference_participant`
--

INSERT INTO `conference_participant` (`Pid`, `Pssn`, `Pfname`, `Plname`, `Pbod`, `P_project_name`, `Psex`, `Pemail`, `Ppassword`) VALUES
(1, '3232', 'ASDCAS', 'SADAS', '2023-05-04', 'ASDSAD', 'Female', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conference_participant`
--
ALTER TABLE `conference_participant`
  ADD PRIMARY KEY (`Pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conference_participant`
--
ALTER TABLE `conference_participant`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
