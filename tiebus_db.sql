-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2017 at 11:32 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiebus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `busprofile`
--

CREATE TABLE `busprofile` (
  `busname` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `contacts` text NOT NULL,
  `done` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bus_info`
--

CREATE TABLE `bus_info` (
  `ID` int(50) NOT NULL,
  `bName` varchar(30) NOT NULL,
  `bFrom` varchar(20) NOT NULL,
  `bTo` varchar(20) NOT NULL,
  `price` varchar(30) NOT NULL,
  `aTime` varchar(20) NOT NULL,
  `dTime` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `ratings` int(10) NOT NULL,
  `done` varchar(10) NOT NULL DEFAULT 'not-done',
  `contact_info` text NOT NULL,
  `about_bus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_info`
--

INSERT INTO `bus_info` (`ID`, `bName`, `bFrom`, `bTo`, `price`, `aTime`, `dTime`, `description`, `ratings`, `done`, `contact_info`, `about_bus`) VALUES
(2, 'Abood', 'Dar es salaam', 'Morogoro', '7000', '10:00', '10:30', 'Semi Luxary Bus', 3, 'not-done', '', ''),
(4, 'Bm', 'Dar es salaam', 'Morogoro', '7000', '12:20', '12:30', 'Luxury Bus', 4, 'not-done', '', ''),
(5, 'KIMAKO', 'Tanga', 'Dar es salaam', '5000', '12:000', '12:30', 'Luxury', 0, 'not-done', '', ''),
(6, 'NEW FORCE ', 'Dar Es Salaam', 'Tunduma', '40000', '05:30', '06:00', 'SEMI LUXURY', 3, 'not-done', '', ''),
(7, 'Master city', 'Dar es salaam', 'Musoma', '55000', '05:20', '05:45', 'ORDINARY', 0, 'not-done', '', ''),
(8, 'MASTER CITY', 'Dar Es Salaam', 'Kigoma', '60000', '05:15', '05:45', 'ORDINARY', 0, 'not-done', '', ''),
(9, 'KIMOTCO', 'DAR ES SALAAM', 'ARUSHA', '32000', '12:00', '12:30', 'Luxuary  Bus', 0, 'not-done', '', ''),
(10, 'MArangu COACH', 'DAR ES SALAAM', 'ARUSHA', '32000', '12:00', '12:30', 'Semi Luxaury', 0, 'not-done', '', ''),
(11, 'Dar lux', 'Dar es salaam ', 'Mwanza ', '40000', '05:20', '05:55', 'SEMI LUXURY', 0, 'not-done', '', ''),
(12, 'Dar lux ', 'Dar es salaam', 'Mbeya ', '40000', '05:25', '05:55', 'LUXURY', 3, 'not-done', '', ''),
(13, 'Jm bus ', 'Mwanza', 'Dar es salaam', '45000', '05:25', '06:00', 'LUXURY', 0, 'not-done', '', ''),
(14, 'Saibaba ', 'Dar es salaam ', 'Nairobi', '60000', '05:25', '06:00', 'SEMI LUXURY', 3, 'not-done', '', ''),
(15, 'JM BUS ', 'DAR ES SALAAM ', 'MUSOMA', '50000', '05:30AM ', '06:00AM', 'SEMI LUXURY', 2, 'not-done', '', ''),
(16, 'JM BUS ', 'MBEYA', 'DAR ES SALAAM', '40000', '05:30AM', '06:00AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(17, 'FM BUS ', 'MBEYA ', 'DAR ES SALAAM ', '35000', '05:30AM', '06:00AM', '', 0, 'not-done', '', ''),
(18, 'SUPER SAMI ', 'DAR ES SALAAM', 'MWANZA', '40000', '05:00AM', '06:00AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(19, 'SIMBA MTOTO', 'TANGA ', 'DAR ES SALAAM', '13000', '06:10 AM', '07:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(20, 'MUNGU MKUBWA ', 'DAR ES SALAAM ', 'IFAKARA ', '16000', '05:30AM', '06:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(21, 'WADIDI', 'DAR ES SALAAM', 'TURIANI', '12000', '06:00AM', '07:30AM', 'ORDINARY', 0, 'not-done', '', ''),
(22, 'MKWANJA', 'TURIANI', 'DAR ES SALAAM', '12000', '06:10AM', '07:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(23, 'BM ', 'DAR ES SALAAM', 'TURIANI', '12000', '05:30AM', '06:00AM', 'ORDINARY\r\n', 3, 'not-done', '', ''),
(24, 'KVC  ', 'TURIANI', 'DAR ES SALAAM', '12000', '06:20AM', '07:10AM', 'ORDINARY', 3, 'not-done', '', ''),
(25, 'ISAMILO', 'MWANZA', 'DAR ES SALAAM', '40000', '05:00AM ', '06:00AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(26, 'EXTRA ', 'ARUSHA ', 'DAR ES SALAAM', '29000', '05:00AM', '06:00AM', 'LUXURY', 0, 'not-done', '', ''),
(27, 'MERIDIAN', 'DAR ES SALAAM', 'ROMBO', '28000', '05:00AM ', '06:00AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(28, 'METRO', 'DAR ES SALAAM', 'ROMBO', '28000', '05:10AM', '06:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(29, 'MBAZI ', 'DAR ES SALAAM ', 'ARUSHA ', '32000', '05:10AM', '06:00AM', 'LUXURY', 0, 'not-done', '', ''),
(30, 'BUTI LA ZUNGU', 'DAR ES SALAAM', 'MTWARA', '22000', '05:20AM', '06:00AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(31, 'POLE POLE', 'DAR ES SALAAM ', 'MANYARA', '30000', '05:00AM', '06:00AM', '', 0, 'not-done', '', ''),
(32, 'PRINCESS MUNAA', 'DAR ES SALAAM ', 'SINGIDA ', '30000', '05:20AM', '06:00AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(33, 'Princess munaa ', 'Dar es salaam', 'Mwanza', '45000', '05:02 AM ', '06:00AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(34, 'TSK', 'DAR ES SALAAM ', 'MBEYA', '35000', '05:30AM', '06:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(35, 'TSK ', 'DAR ES SALAAM ', 'TUNDUMA', '44000', '05:00AM', '06:00AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(36, 'LEINA TOURS', 'DAR ES SALAAM ', 'SINGIDA', '30000', '05:00AM', '06:00AM', 'SEMI LUXURY\r\n', 0, 'not-done', '', ''),
(37, 'LEINA TOURS', 'DAR ES SALAAM', 'MWANZA', '42000', '05:06AM', '06:00AM', '', 0, 'not-done', '', ''),
(38, 'WADIDI', 'TURIANI', 'DAR ES SALAAM', '12000', '05:02AM', '06:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(39, 'BM', 'TURIANI', 'DAR ES SALAAM', '12000', '05:02AM', '06:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(40, 'KVC', 'DAR ES SALAAM', 'TURIANI', '12000', '05:10AM', '06:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(41, 'MKWANJA', 'DAR ES SALAAM', 'TURIANI', '12000', '05:30AM', '06:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(42, 'MUSOMA ', 'DAR ES SALAAM ', 'MWANZA', '45000', '05:00AM ', '06:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(43, 'MUSOMA EXPRESS', 'MWANZA ', 'DAR ES SALAAM', '45000', '05:20AM', '06:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(44, 'RED BELT', 'DAR ES SALAAM', 'MWANZA', '42000', '05:20AM', '06:00AM', 'SEMI LUXURY', 2, 'not-done', '', ''),
(45, 'RED BELT', 'MWANZA', 'DAR ES SALAAM', '42000', '05:00AM', '06:00AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(46, 'SIMIYU', 'DAR ES SALAAM', 'MWANZA', '42000', '05:00AM', '06:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(47, 'SIMIYU ', 'MWANZA', 'DAR ES SALAAM', '42000', '05:06AM', '06:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(48, 'SHENG ZHOU', 'DAR ES SALAAM ', 'TUNDUMA', '40000', '05:20AM', '06:00AM', 'LUXURY', 0, 'not-done', '', ''),
(49, 'SHENG ZHOU', 'TUNDUMA', 'DAR ES SALAAM', '40000', '05:20AM', '06:00AM', 'LUXURY', 0, 'not-done', '', ''),
(50, 'KANDAHAR', 'DAR ES SALAAM  ', 'MWANZA', '42000', '05:10AM', '06:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(51, 'KIDIA ONE', 'DAR ES SALAAM ', 'MWANZA', '45000', '05:00AM', '06:00AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(52, 'KIDIA ONE', 'MWANZA ', 'DAR ES SALAAM', '45000', '05:20AM', '06:00AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(53, 'PRINCESS ANAAM ', 'MWANZA', 'DAR ES SALAAM', '40000', '05:00AM ', '06:00AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(54, 'PRINCESS ANAAM ', 'DAR ES SALAAM', 'MWANZA', '40000', '05:00AM', '06:00AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(55, 'MOHAMED TRANS', 'MWANZA', 'DAR ES SALAAM', '40000', '05:10AM', '06:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(56, 'MOHAMED TRANS ', 'DAR ES SALAAM', 'MWANZA', '40000', '05:00AM', '06:00AM', 'ORDINARY', 0, 'not-done', '', ''),
(57, 'KISESA', 'DAR ES SALAAM', 'MWANZA', '40000', '05:00AM', '06:00AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(58, 'KISESA', 'MWANZA', 'DAR ES SALAAM4', '40000', '05:06AM', '06:00AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(59, 'DAR LUX', 'DAR ES SALAAM', 'MWANZA', '45000', '05:00AM', '06:00AM', 'LUXURY', 2, 'not-done', '', ''),
(60, 'MSIMBATI ', 'DAR ES SALAAM', 'MTWARA', '25000', '07:00AM', '07:30AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(61, 'Msimbati', 'Mtwara', 'Dar es salaam', '25000', '07:00AM', '07:30AM', 'SEMI LUXURY', 0, 'not-done', '', ''),
(62, 'MINING NICE', 'DAR ES SALAAM', 'MTWARA', '26000', '07:00AM ', '08:00AM', 'LUXURY', 2, 'not-done', '', ''),
(63, 'MINING NICE', 'MTWARA', 'DAR ES SALAAM', '26000', '07:00AM', '08:00AM', 'LUXURY', 0, 'not-done', '', ''),
(64, 'NATIONAL EXPRESS ', 'DAR ES SALAAM', 'SINGIDA', '30000', '05:20AM', '06:00AM', 'Semi luxury ', 1, 'not-done', '', ''),
(65, 'NATIONAL EXPRESS ', 'SINGIDA', 'DAR ES SALAAM', '30000', '05:20AM', '06:00AM', 'Semi luxury ', 1, 'not-done', '', ''),
(66, 'JMC EXPRESS ', 'DAR ES SALAAM', 'SINGIDA', '30000', '05:30AM', '06:00AM', 'Semi luxury ', 0, 'not-done', '', ''),
(67, 'IMO SAFARI', 'Dar es Salaam ', 'Singida ', '45000', '05:00AM', '06:00AM', 'Luxury ', 0, 'not-done', '', ''),
(68, 'KAPRICON', 'Dar es Salaam', 'Singida', '30000', '05:00AM', '06:00AM', 'Semi luxury ', 0, 'not-done', '', ''),
(69, 'ABC', 'Dar es Salaam', 'SINGIDA', '32000', '05:00AM', '06:00AM', 'Semi luxury ', 2, 'not-done', '', ''),
(70, 'ESTER', 'Dar es Salaam', 'Singida', '30000', '05:30AM', '06:00AM', 'Semi luxury ', 0, 'not-done', '', ''),
(72, 'IMO', 'Dar es salaam', 'Singida', '30000', 'O5:00AM', '06:00AM', 'Semi luxury ', 2, 'not-done', '', ''),
(73, 'Ester', 'Singida', 'Dar es salaam', '30000', '05:30AM', '06:00AM', 'Semi luxury ', 0, 'not-done', '', ''),
(74, 'IMO', 'Singida', 'Dar es Salaam', '45000', '05:00AM', '06:00AM', 'Luxury ', 0, 'not-done', '', ''),
(75, 'AMANI EXPRESS', 'Singida', 'Dar es Salaam', '30000', '05:00AM', '06:00Am', 'Semi luxury ', 0, 'not-done', '', ''),
(76, 'AMANI', 'Dar es Salaam', 'Singida', '30000', '05:00AM', '06:00AM', 'Semi luxury ', 0, 'not-done', '', ''),
(77, 'Tahmeed', 'Dar es Salaam', 'Arusha', '32800', '08:30Am', '09:00Am', 'Luxury ', 0, 'not-done', '', ''),
(78, 'Tahmeed', 'Arusha', 'Dar es Salaam', '32800', '08:30Am', '09:00Am', 'Luxury ', 0, 'not-done', '', ''),
(79, 'Saibaba', 'Dar es Salaam', 'Arusha', '22800', '07:00Am', '08:00Am', 'Ordinary ', 2, 'not-done', '', ''),
(80, 'Saibaba', 'Arusha', 'DAR ES SALAAM', '22800', '07:00Am', '08:00Am', 'Ordinary ', 0, 'not-done', '', ''),
(81, 'IBRAHIM LINE', 'Arusha', 'Dar es Salaam', '32000', '07:00Am', '08:00Am', 'Ordinary ', 0, 'not-done', '', ''),
(82, 'IBRA LINE', 'Dar es Salaam', 'Arusha', '32000', '07:00Am', '08:00Am', 'Luxury ', 0, 'not-done', '', ''),
(83, 'Lakrome', 'Dar es Salaam', 'Arusha', '22000', '06:00Am', '07:00Am', 'Ordinary ', 0, 'not-done', '', ''),
(84, 'Lakrome', 'Arusha', 'Dar es Salaam', '22000', '06:00Am', '07:00Am', 'Luxury ', 0, 'not-done', '', ''),
(85, 'Harambee Safari', 'Dar es Salaam', 'Arusha', '22000', '06:00Am', '07:00Am', 'Ordinary ', 0, 'not-done', '', ''),
(86, 'Safari Luxury', 'Dar es Salaam', 'Arusha', '19000', '05:30 Am', '06:00Am', 'Ordinary ', 0, 'not-done', '', ''),
(87, 'Safari Luxury', 'Arusha', 'Dar es Salaam', '19000', '05:00Am', '06:00Am', 'Ordinary ', 0, 'not-done', '', ''),
(88, 'Hai EXPRESS', 'Dar es Salaam', 'Arusha', '22800', '05:30Am', '06:00Am', 'Semi luxury ', 0, 'not-done', '', ''),
(89, 'Hai EXPRESS', 'Arusha', 'Dar es Salaam', '22800', '05:30Am', '06:00Am', 'Semi luxury ', 0, 'not-done', '', ''),
(90, 'Osaka royal class', 'Dar es Salaam', 'Arusha', '22700', '05:00Am', '06:00Am', 'Ordinary ', 0, 'not-done', '', ''),
(91, 'Osaka royal class', 'Arusha', 'Dar es Salaam', '22700', '05:30Am', '06:00Am', 'Ordinary ', 0, 'not-done', '', ''),
(92, 'Tsk', 'Dar es Salaam', 'Mbeya', '35000', '05:00Am', '06:00Am', 'Ordinary ', 0, 'not-done', '', ''),
(93, 'Tsk', 'Mbeya', 'Dar es Salaam', '35000', '05:00Am', '06:00A', 'Ordinary ', 0, 'not-done', '', ''),
(94, 'Ngomuo', 'Dar es Salaam', 'Mbeya', '45000', '05:00Am', '06:00Am', 'Semi luxury ', 0, 'not-done', '', ''),
(95, 'Ngomuo', 'Mbeya', 'Dar es Salaam', '45000', '05:00Am', '06:00Am', 'Semi luxury ', 0, 'not-done', '', ''),
(96, 'Sheng Zhou', 'Dar es Salaam', 'Mbeya', '45000', '05:00Am', '06:00Am', 'Semi luxury ', 2, 'not-done', '', ''),
(97, 'Shegh zhou', 'Mbeya', 'Dar es salaam', '40000', '05:00Am', '06:00Am', 'Semi luxury ', 0, 'not-done', '', ''),
(98, 'Ndenjela Coach', 'Dar es Salaam', 'Mbeya', '40000', '05:00Am', '06:00Am', 'Semi luxury ', 0, 'not-done', '', ''),
(99, 'Ndenjela Coach', 'Mbeya', 'Dar es Salaam', '40000', '05:00Am', '06:00Am', 'Semi luxury ', 0, 'not-done', '', ''),
(100, 'Sumry EXPRESS', 'Dar es Salaam', 'Mbeya', '40000', '05:00Am', '06:00Am', ' Semi luxury ', 0, 'not-done', '', ''),
(101, 'Sumry EXPRESS', 'Mbeya', 'Dar es Salaam', '40000', '05:00Am', '06:00Am', 'Semi luxury ', 0, 'not-done', '', ''),
(102, 'Abood', 'Dar es Salaam', 'Mbeya', '38000', '05:00Am', '06:00Am', 'Semi luxury ', 3, 'not-done', '', ''),
(103, 'Abood', 'Mbeya', 'Dar es Salaam', '38000', '05:00Am', '06:00Am', ' Semi luxury ', 4, 'not-done', '', ''),
(104, 'New Force', 'Dar es Salaam', 'Mbeya', '40000', '05:00Am', '06:00Am', ' Semi luxury ', 3, 'not-done', '', ''),
(105, 'NEW FORCE', 'Mbeya', 'Dar es Salaam', '40000', '05:00Am', '06:00Am', 'Semi luxury ', 0, 'not-done', '', ''),
(106, 'Majinja', 'Dar es Salaam', 'Mbeya', '40000', '05:00Am', '06:00Am', 'Semi luxury ', 2, 'not-done', '', ''),
(107, 'Majinja', 'Mbeya', 'Dar es Salaam', '40000', '05:00Am', '06:00Am', 'Semi luxury ', 2, 'not-done', '', ''),
(108, 'Dar rex', 'Dar es Salaam', 'Mbeya', '40000', '05:10Am', '06:00Am', 'Semi luxury ', 2, 'not-done', '', ''),
(109, 'Dar rex', 'Mbeya', 'Dar es Salaam', '40000', '05:10 Am', '06:00Am', 'Semi luxury ', 0, 'not-done', '', ''),
(110, 'Al-saedy', 'Dar es salaam', 'Mbeya', '40000', '05:00Am', '06:00Am', 'Semi luxury ', 0, 'not-done', '', ''),
(111, 'NYEHUNGE', 'MOROGORO', 'MWANZA', '100000', '12:00', '12:00', 'NORMAL BUS', 2, 'not-done', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lg_info`
--

CREATE TABLE `lg_info` (
  `ID` int(255) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL DEFAULT 'Normal',
  `Active` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lg_info`
--

INSERT INTO `lg_info` (`ID`, `uname`, `password`, `user_type`, `Active`) VALUES
(1, 'admin', 'tiebooking', 'Admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `name` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`name`, `message`, `time`) VALUES
('Admin', 'Have a Nice Work Day!', '2017-09-24 20:45:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `busprofile`
--
ALTER TABLE `busprofile`
  ADD UNIQUE KEY `busname` (`busname`);

--
-- Indexes for table `bus_info`
--
ALTER TABLE `bus_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lg_info`
--
ALTER TABLE `lg_info`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_info`
--
ALTER TABLE `bus_info`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `lg_info`
--
ALTER TABLE `lg_info`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
