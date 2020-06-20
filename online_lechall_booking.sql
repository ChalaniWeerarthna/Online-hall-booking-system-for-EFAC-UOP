-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 05:33 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_lechall_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `Username`, `Password`) VALUES
(1, 'chalani', 'chalaniadmin'),
(2, 'nipuni', 'nipiniadmin'),
(3, 'kithma', 'kithmaadmin');

-- --------------------------------------------------------

--
-- Table structure for table `booked_lecture_hall`
--

CREATE TABLE `booked_lecture_hall` (
  `booking_id` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `Hall_name` varchar(30) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `Check_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_lecture_hall`
--

INSERT INTO `booked_lecture_hall` (`booking_id`, `Username`, `purpose`, `Hall_name`, `startTime`, `endTime`, `Check_date`) VALUES
(2, 'CHALANI', 'KUPPI', 'EOE Theater', '14:05:00', '16:05:00', '2020-06-25'),
(3, 'CHALANI', 'KUPPI', 'Seminar Room 2', '07:50:00', '08:51:00', '2020-06-17'),
(4, 'kithma', 'lecture', 'Seminar Room 2', '10:20:00', '12:20:00', '2020-06-25'),
(5, 'kithma', 'lecture', 'Seminar Room 1', '10:30:00', '12:30:00', '2020-06-30'),
(6, 'kithma', 'lecture', 'Seminar Room 3', '10:30:00', '12:30:00', '2020-06-29'),
(7, 'kithma', 'lecture', 'Lecture Room 1', '12:40:00', '14:40:00', '2020-06-28'),
(8, 'kithma', 'lecture', 'EOE Theater', '12:40:00', '14:40:00', '2020-06-28'),
(9, 'kithma', 'kuppi', 'EOE Theater', '08:09:00', '10:09:00', '2020-06-03'),
(10, 'kithma', 'checking', 'Lecture Room 1', '01:00:00', '02:00:00', '2020-06-25'),
(11, 'kithma', 'lecture', 'EOE Theater', '14:00:00', '16:00:00', '2020-07-03'),
(12, 'kithma', 'lecture', 'EOE Theater', '14:00:00', '16:00:00', '2020-07-03'),
(13, 'kithma', 'lecture', 'EOE Theater', '14:00:00', '16:00:00', '2020-07-03'),
(15, 'CHALANI', 'KUPPI', 'EOE Theater', '15:05:00', '16:00:00', '2020-07-04'),
(16, 'kithma', 'guest lecture', 'EOE Theater', '01:00:00', '03:00:00', '2020-06-24'),
(17, 'kithma', 'pupose', 'EOE Theater', '17:30:00', '19:30:00', '2020-06-24'),
(18, 'kithma', 'KUPPI', 'EOE Theater', '14:30:00', '15:00:00', '2020-07-25'),
(19, 'kithma', 'guest lecture', 'Lecture Room 1', '15:00:00', '16:00:00', '2020-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `check_availability`
--

CREATE TABLE `check_availability` (
  `ID` int(50) NOT NULL,
  `check_date` date NOT NULL,
  `Hall_name` varchar(50) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_availability`
--

INSERT INTO `check_availability` (`ID`, `check_date`, `Hall_name`, `startTime`, `endTime`) VALUES
(1, '2020-06-18', 'EOE Theater', '00:00:00', '00:30:00'),
(2, '2020-06-18', 'EOE Theater', '00:00:00', '00:30:00'),
(3, '2020-06-18', 'EOE Theater', '00:00:00', '00:07:00'),
(4, '2020-06-18', 'EOE Theater', '15:25:00', '16:25:00'),
(5, '2020-06-18', 'EOE Theater', '03:25:00', '04:25:00'),
(6, '2020-06-25', 'EOE Theater', '14:04:00', '16:04:00'),
(7, '2020-06-25', 'EOE Theater', '04:30:00', '05:30:00'),
(8, '2020-06-25', 'EOE Theater', '04:30:00', '05:30:00'),
(9, '2020-06-25', 'EOE Theater', '04:30:00', '05:30:00'),
(10, '2020-06-25', 'EOE Theater', '14:04:00', '16:04:00'),
(11, '2020-06-28', 'EOE Theater', '14:04:00', '16:04:00'),
(12, '2020-06-03', 'EOE Theater', '06:55:00', '07:55:00'),
(13, '2020-06-25', 'EOE Theater', '05:57:00', '06:58:00'),
(14, '2020-06-18', 'EOE Theater', '03:57:00', '04:58:00'),
(15, '2020-06-04', 'EOE Theater', '08:11:00', '09:11:00'),
(16, '2020-06-04', 'EOE Theater', '08:11:00', '09:11:00'),
(17, '2020-06-04', 'EOE Theater', '08:11:00', '09:11:00'),
(18, '2020-06-04', 'EOE Theater', '08:11:00', '09:11:00'),
(19, '2020-06-25', 'Seminar Room 1', '10:20:00', '12:20:00'),
(20, '2020-06-30', 'Seminar Room 2', '10:20:00', '12:20:00'),
(21, '2020-06-30', 'Seminar Room 2', '10:20:00', '12:20:00'),
(22, '2020-06-30', 'Seminar Room 2', '10:20:00', '12:20:00'),
(23, '2020-06-10', 'EOE Theater', '09:30:00', '09:59:00'),
(24, '2020-06-03', 'EOE Theater', '08:09:00', '10:09:00'),
(25, '2020-06-25', 'EOE Theater', '14:05:00', '16:05:00'),
(26, '2020-06-25', 'EOE Theater', '02:27:00', '03:27:00'),
(27, '2020-06-25', 'EOE Theater', '14:24:00', '16:24:00'),
(28, '2020-06-25', 'EOE Theater', '02:01:00', '04:02:00'),
(29, '2020-06-25', 'EOE Theater', '14:45:00', '15:45:00'),
(30, '2020-06-25', 'EOE Theater', '14:45:00', '15:45:00'),
(31, '2020-06-25', 'EOE Theater', '14:45:00', '15:45:00'),
(32, '2020-06-25', 'EOE Theater', '14:45:00', '15:45:00'),
(33, '2020-06-25', 'Lecture Room 1', '14:45:00', '15:45:00'),
(34, '2020-06-25', 'Seminar Room 1', '01:00:00', '02:00:00'),
(35, '2020-07-03', 'EOE Theater', '14:00:00', '16:00:00'),
(36, '2020-07-04', 'EOE Theater', '15:00:00', '16:00:00'),
(37, '2020-06-30', 'Seminar Room 1', '10:30:00', '12:30:00'),
(38, '2020-06-30', 'Seminar Room 1', '10:30:00', '12:30:00'),
(39, '2020-06-30', 'Seminar Room 1', '10:30:00', '00:00:00'),
(40, '2020-06-30', 'Seminar Room 1', '10:30:00', '00:00:00'),
(41, '2020-06-30', 'Seminar Room 1', '10:20:00', '13:20:00'),
(42, '2020-06-30', 'Seminar Room 1', '10:20:00', '13:20:00'),
(43, '2020-06-30', 'EOE Theater', '10:20:00', '13:20:00'),
(44, '2020-06-30', 'Seminar Room 1', '10:20:00', '13:20:00'),
(45, '2020-06-30', 'Seminar Room 1', '10:20:00', '13:20:00'),
(46, '2020-06-30', 'Seminar Room 1', '10:20:00', '13:20:00'),
(47, '2020-06-24', 'EOE Theater', '13:00:00', '15:20:00'),
(48, '2020-06-24', 'EOE Theater', '01:00:00', '03:20:00'),
(49, '2020-06-25', 'EOE Theater', '14:30:00', '16:30:00'),
(50, '2020-06-24', 'EOE Theater', '14:30:00', '15:30:00'),
(51, '2020-06-24', 'EOE Theater', '17:30:00', '19:30:00'),
(52, '2020-06-25', 'EOE Theater', '14:30:00', '15:00:00'),
(53, '2020-07-25', 'EOE Theater', '14:30:00', '15:00:00'),
(54, '2020-06-28', 'Lecture Room 1', '15:00:00', '16:00:00'),
(55, '2020-07-07', 'EOE Theater', '13:05:00', '15:05:00'),
(56, '2020-06-16', 'EOE Theater', '13:00:00', '14:09:00'),
(57, '2020-06-21', 'EOE Theater', '15:00:00', '16:00:00'),
(58, '2020-07-06', 'EOE Theater', '13:02:00', '14:03:00'),
(59, '2020-07-11', 'EOE Theater', '13:16:00', '16:16:00'),
(60, '2020-07-11', 'EOE Theater', '15:13:00', '18:13:00'),
(61, '2020-06-24', 'EOE Theater', '15:13:00', '18:13:00'),
(62, '2020-07-11', 'EOE Theater', '13:21:00', '15:21:00'),
(63, '2020-07-12', 'EOE Theater', '13:21:00', '15:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `lecture_hall_info`
--

CREATE TABLE `lecture_hall_info` (
  `Room_no` int(4) NOT NULL,
  `Type` text NOT NULL,
  `Hall_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendings`
--

CREATE TABLE `pendings` (
  `pending_id` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `Hall_name` varchar(30) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `check_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendings`
--

INSERT INTO `pendings` (`pending_id`, `Username`, `purpose`, `Hall_name`, `startTime`, `endTime`, `check_date`) VALUES
(1, 'pamitha', 'lecture', 'EOE Theater', '13:00:00', '15:00:00', '2020-06-24'),
(2, 'namal', 'guest lecture', 'EOE Theater', '15:00:00', '17:00:00', '2020-06-25'),
(7, '', '', 'EOE Theater', '17:30:00', '19:30:00', '2020-06-24'),
(11, 'kithma', 'guest lecture', 'EOE Theater', '13:05:00', '15:05:00', '2020-07-07'),
(12, 'kithma', 'guest lecture', 'EOE Theater', '13:05:00', '15:05:00', '2020-07-07'),
(13, 'CHALANI', 'KUPPI', 'EOE Theater', '13:05:00', '15:05:00', '2020-07-07'),
(14, 'CHALANI', 'lecture', 'EOE Theater', '13:00:00', '14:09:00', '2020-06-16'),
(15, 'kithma', 'checking', 'EOE Theater', '13:00:00', '14:09:00', '2020-07-16'),
(16, 'kithma', 'lecture', 'EOE Theater', '15:00:00', '16:00:00', '2020-06-21'),
(17, 'kithma', 'lecture', 'EOE Theater', '15:00:00', '16:00:00', '2020-06-21'),
(18, 'kithma', 'lecture', 'EOE Theater', '15:00:00', '16:00:00', '2020-06-21'),
(19, 'kithma', 'lecture', 'EOE Theater', '15:00:00', '16:00:00', '2020-06-21'),
(20, 'kithma', 'lecture', 'EOE Theater', '15:00:00', '16:00:00', '2020-06-21'),
(21, 'kithma', 'lecture', 'EOE Theater', '15:00:00', '16:00:00', '2020-06-21'),
(22, 'kithma', 'lecture', 'EOE Theater', '15:00:00', '16:00:00', '2020-06-21'),
(23, 'kithma', 'lecture', 'EOE Theater', '15:00:00', '16:00:00', '2020-06-03'),
(24, 'kithma', 'lecture', 'EOE Theater', '15:00:00', '16:00:00', '2020-06-21'),
(25, 'kithma', 'pupose', 'EOE Theater', '13:02:00', '14:03:00', '2020-07-06'),
(26, '', '', 'EOE Theater', '13:16:00', '16:16:00', '2020-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(10) NOT NULL,
  `First_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `UserName` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `First_name`, `Last_name`, `email`, `Phone`, `status`, `UserName`, `Password`) VALUES
(4, 'chalani', 'weerarathna', 'chalanisweerarathna@gmail.com', '0712097332', NULL, 'chalani', 'chalani123'),
(12, 'KITHMA', 'MADHU', 'kithmamadushani1@gmail.com', '0772343121', 'Student', 'kithma', '5114fec836a72dfd545b2ae7f5cb38fc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `admin_index` (`Username`);

--
-- Indexes for table `booked_lecture_hall`
--
ALTER TABLE `booked_lecture_hall`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `t_order_myrsv` (`Check_date`,`startTime`);

--
-- Indexes for table `check_availability`
--
ALTER TABLE `check_availability`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lecture_hall_info`
--
ALTER TABLE `lecture_hall_info`
  ADD PRIMARY KEY (`Room_no`);

--
-- Indexes for table `pendings`
--
ALTER TABLE `pendings`
  ADD PRIMARY KEY (`pending_id`),
  ADD KEY `index_pending` (`check_date`,`startTime`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `usr_name` (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `booked_lecture_hall`
--
ALTER TABLE `booked_lecture_hall`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `check_availability`
--
ALTER TABLE `check_availability`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `pendings`
--
ALTER TABLE `pendings`
  MODIFY `pending_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
