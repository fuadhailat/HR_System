-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 10:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
-- Table structure for table `attendance record`
--

CREATE TABLE `attendance record` (
  `FullName` varchar(150) NOT NULL,
  `Date` date NOT NULL,
  `TimeAttendance` varchar(100) NOT NULL,
  `TimeToLeave` varchar(100) NOT NULL,
  `Absence` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendancerecord`
--

CREATE TABLE `attendancerecord` (
  `FirstName` varchar(150) NOT NULL,
  `Date` date NOT NULL,
  `TimeAttendance` varchar(100) NOT NULL,
  `TimeToLeave` varchar(100) NOT NULL,
  `Absence` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `attendancerecord`
--

INSERT INTO `attendancerecord` (`FirstName`, `Date`, `TimeAttendance`, `TimeToLeave`, `Absence`) VALUES
('fuad', '0000-00-00', '1', '1', '1'),
('fuad', '0000-00-00', '1', '1', '1'),
('ahmad', '0000-00-00', '7', '4', '0'),
('eyad', '0000-00-00', '3', '3', '1'),
('salman', '0000-00-00', '4', '6', '2'),
('muna', '0000-00-00', '7', '6', '5'),
('hlam', '0000-00-00', '1', '2', '3'),
('ayah', '0000-00-00', '6', '5', '4'),
('saja', '0000-00-00', '3', '9', '2'),
('mohanad', '0000-00-00', '5', '6', '4'),
('mohammad', '0000-00-00', '1', '2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `FullName` varchar(150) NOT NULL,
  `JobTitle` varchar(150) NOT NULL,
  `EmployeeGrade` varchar(150) NOT NULL,
  `Occupation` varchar(150) NOT NULL,
  `Number_of_months_of_service_in_the_company` varchar(150) NOT NULL,
  `Number_of_months_of_experience` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`FullName`, `JobTitle`, `EmployeeGrade`, `Occupation`, `Number_of_months_of_service_in_the_company`, `Number_of_months_of_experience`) VALUES
('fuad', 'developer', 'One', 'programmer', '5', '20'),
('suliman', 'dr', '2', '10', '9', '30'),
('lilian', 'eng', 'three', 'eng', '3', '22'),
('salma', 'flutter', 'one', 'software engineer', '12', '43'),
('mira', 'software', 'two', 'software', '23', '64'),
('sewar', 'dr', 'one', 'dr', '12', '11'),
('miran', 'laravel', 'three', 'developer', '13', '14'),
('hala', 'QA', 'one', 'eng', '22', '11');

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
  `Ppassword` varchar(255) NOT NULL,
  `pp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conference_participant`
--

INSERT INTO `conference_participant` (`Pid`, `Pssn`, `Pfname`, `Plname`, `Pbod`, `P_project_name`, `Psex`, `Pemail`, `Ppassword`, `pp`) VALUES
(6, '0799433715', 'fuad', 'hailat', '2023-06-07', '2', 'Male', 'ksg@mail.com', '123', ''),
(7, '0792638164', 'eyad', 'hailat', '1981-06-24', '0', 'Male', 'eyad@gmail.com', '321', NULL),
(8, '0777325482', 'Lilian', 'Majed', '2010-10-28', '7', 'Female', 'lilian@gmail.com', '000', NULL),
(9, '0712417391', 'Salma', 'Eyad', '2014-10-14', '2', 'Female', 'salma@gmail.com', '543', NULL),
(10, '0797421093', 'zyad', 'majed', '1990-01-15', '1', 'Male', 'zyad@gmail.com', '543', NULL),
(11, '0788914122', 'Mira', 'Salem', '2016-12-16', '2', 'Female', 'mira@gmail.com', 'l980', NULL),
(12, '0783355119', 'mahmoud', 'osama', '2023-01-01', '2', 'Male', 'mahmoud@yahoo.com', '656', NULL),
(13, '0777123412', 'malak', 'salman', '2023-05-31', '1', 'Male', 'malak@yahoo.com', '987', NULL),
(16, '0783263241', 'emad', 'Majed', '2023-05-29', '0', 'Male', 'emad@gmail.com', '246', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penalties`
--

CREATE TABLE `penalties` (
  `FullName` varchar(150) NOT NULL,
  `reason_for_the_punishment` varchar(150) NOT NULL,
  `PunishmentDate` varchar(150) NOT NULL,
  `PunishmentName` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `penalties`
--

INSERT INTO `penalties` (`FullName`, `reason_for_the_punishment`, `PunishmentDate`, `PunishmentName`) VALUES
('fuad', 'Insults and verbal abuse', '6/7/2023', 'behavioral punishment'),
('sami', 'Being late', '20/2/2023', 'late'),
('sami', ' late', '22/9/2022', 'late'),
('zyad', 'Leaving work early', '20/10/2020', 'Leaving work early'),
('mahmoud', 'Leaving work early', '1/9/2023', 'Leaving work early'),
('salma', 'Being late', '22/9/2022', 'late');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `FullName` varchar(150) NOT NULL,
  `reason_for_the_reward` varchar(150) NOT NULL,
  `BonusDate` varchar(100) NOT NULL,
  `BonusValue` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`FullName`, `reason_for_the_reward`, `BonusDate`, `BonusValue`) VALUES
('Fuad', 'part time', '1/7/2023', '50 JD'),
('emad', 'Commitment to work', '9/3/2023', '60 jd'),
('mohammad', 'Commitment to work', '20/4/2023', '80 jd'),
('majed', 'Commitment to work', '9/3/2022', '20 jd'),
('eyad', 'part time', '3/3/2022', '60 jd'),
('ahmad', 'Commitment to work', '9/3/2023', '60 jd'),
('maha', 'Commitment to work', '1/3/2023', '40 jd'),
('zainab', 'part time', '3/3/2022', '60 jd'),
('fuad', 'part time', '9/3/2023', '100 JD'),
('emad', 'Commitment to work', '9/3/2022', '20 jd'),
('hala', 'part time', '3/3/2022', '20 jd');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `FullName` varchar(150) NOT NULL,
  `MonthlySalary` varchar(150) NOT NULL,
  `DiscountValue` varchar(100) NOT NULL,
  `DiscountType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`FullName`, `MonthlySalary`, `DiscountValue`, `DiscountType`) VALUES
('fuad', '600', '10 jd', 'Late for work'),
('zyad', '600', '10 jd', 'Late for work'),
('fuad', '600', '10 jd', 'Late for work'),
('suliman', '1000  jd', '15 jd', 'Late for work'),
('ahmad', '600 jd', '10 jd', 'late'),
('zyad', '800 jd', '10 jd', 'Commitment to work'),
('qammer', '2500 jd', '50 jd', 'Commitment to work'),
('salma', '600 jd', '15 jd', 'Commitment to work'),
('sami', '2500 jd', '10 jd', 'late'),
('emad', '600 jd', '50 jd', 'Late for work');

-- --------------------------------------------------------

--
-- Table structure for table `staffevaluation`
--

CREATE TABLE `staffevaluation` (
  `FullName` varchar(150) NOT NULL,
  `ProjectName` varchar(150) NOT NULL,
  `number_of_hours_required_to_work_on_the_project` varchar(100) NOT NULL,
  `number_of_hours_of_project_delivery_delay` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staffevaluation`
--

INSERT INTO `staffevaluation` (`FullName`, `ProjectName`, `number_of_hours_required_to_work_on_the_project`, `number_of_hours_of_project_delivery_delay`) VALUES
('', '', '', ''),
('fuad', 'pharmacy', '20', '2'),
('emad', 'clinic', '30', '9'),
('zyad', 'logo', '30', '4'),
('suliman', 'pharmacy', '50', '9'),
('eyad', 'software', '10', '22'),
('suliman', 'software', '20', '4'),
('mohammad', 'software', '9', '3'),
('majed', 'clinic', '9', 'non'),
('mahmoud', 'clinic', '21', '4'),
('qammer', 'pharmacy', '10', '2'),
('sami', 'software', '9', '22');

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
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
