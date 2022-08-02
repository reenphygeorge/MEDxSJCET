-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 06:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medx`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `user_id` varchar(15) NOT NULL,
  `user_name` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`user_id`, `user_name`, `password`, `status`) VALUES
('35', 'Stephen Strange', 'time', 'doctor'),
('36', 'Wong', 'sorcerer', 'doctor'),
('admin1@medx', 'Rick Astley', 'admin1@123', 'admin'),
('admin2@medx', 'Jeff B', 'admin2@123', 'admin'),
('rec@medx', 'Mark Ronson', 'rec@123', 'reception');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `D_id` int(11) NOT NULL,
  `D_Name` varchar(24) NOT NULL,
  `Specialization` varchar(20) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` varchar(7) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone_No` varchar(15) NOT NULL,
  `Department` varchar(24) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Join_Date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `Leave_Req` int(11) NOT NULL DEFAULT 0,
  `Leave_From` date DEFAULT NULL,
  `Leave_To` date DEFAULT NULL,
  `Leave_Reason` varchar(200) DEFAULT NULL,
  `On_Leave` int(11) NOT NULL DEFAULT 0,
  `Leave_Rejected` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_id`, `D_Name`, `Specialization`, `DOB`, `Gender`, `Address`, `Phone_No`, `Department`, `Salary`, `Join_Date`, `start_time`, `end_time`, `Leave_Req`, `Leave_From`, `Leave_To`, `Leave_Reason`, `On_Leave`, `Leave_Rejected`) VALUES
(35, 'Stephen Strange', 'MD', '1985-06-13', 'male', 'Kamar-Taj', '9806354578', 'Neurology', 50000, '2022-07-31', '09:30:00', '12:30:00', 0, '2022-08-02', '2022-08-04', 'Heavy Rain', 1, 0),
(36, 'Wong', 'MBBS', '1975-06-13', 'male', 'Kamar-Taj', '9083645587', 'Cardiology', 50000, '2022-08-01', '10:00:00', '12:00:00', 0, NULL, NULL, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `N_id` int(11) NOT NULL,
  `N_name` varchar(24) NOT NULL,
  `N_phonenumber` varchar(15) NOT NULL,
  `N_gender` varchar(10) NOT NULL,
  `N_address` varchar(50) NOT NULL,
  `N_DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`N_id`, `N_name`, `N_phonenumber`, `N_gender`, `N_address`, `N_DOB`) VALUES
(7, 'Christine Palmer', '003987539694', 'female', 'New York City', '1985-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `P_id` int(11) NOT NULL,
  `P_name` varchar(24) NOT NULL,
  `P_phone` varchar(15) NOT NULL,
  `P_gender` varchar(15) NOT NULL,
  `P_Address` varchar(50) NOT NULL,
  `disease` varchar(24) DEFAULT NULL,
  `D_id` int(11) DEFAULT NULL,
  `prescription` varchar(200) DEFAULT NULL,
  `tests` varchar(200) DEFAULT NULL,
  `R_id` int(11) DEFAULT NULL,
  `Date_admitted` varchar(15) DEFAULT NULL,
  `Date_checkedout` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_id`, `P_name`, `P_phone`, `P_gender`, `P_Address`, `disease`, `D_id`, `prescription`, `tests`, `R_id`, `Date_admitted`, `Date_checkedout`) VALUES
(12, 'Peter Parker', '0130987532123', 'male', 'Queens', 'Cold', 35, 'blah blah blah', 'Nothing', NULL, '', '2022-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `R_id` int(11) NOT NULL,
  `R_Type` varchar(30) NOT NULL,
  `available` varchar(4) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`R_id`, `R_Type`, `available`) VALUES
(105, 'Operation Theater', 'yes'),
(114, 'Ward', 'no'),
(123, 'Ward', 'yes'),
(197, 'ward', 'yes'),
(202, 'Ward', 'no'),
(207, 'operation theat', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `ward_boy`
--

CREATE TABLE `ward_boy` (
  `WB_id` int(11) NOT NULL,
  `WB_name` varchar(24) NOT NULL,
  `WB_phone` varchar(15) NOT NULL,
  `WB_Address` varchar(50) NOT NULL,
  `WB_DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward_boy`
--

INSERT INTO `ward_boy` (`WB_id`, `WB_name`, `WB_phone`, `WB_Address`, `WB_DOB`) VALUES
(11, 'Ned Leeds', '0657895645', 'New York City', '1997-08-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`D_id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`N_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`R_id`);

--
-- Indexes for table `ward_boy`
--
ALTER TABLE `ward_boy`
  ADD PRIMARY KEY (`WB_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `D_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `N_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ward_boy`
--
ALTER TABLE `ward_boy`
  MODIFY `WB_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
