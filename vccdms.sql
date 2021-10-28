-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 06:22 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vccdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `change_location`
--

CREATE TABLE `change_location` (
  `change_id` int(25) NOT NULL,
  `tenant_id` int(25) NOT NULL,
  `previous_stall` varchar(25) NOT NULL,
  `current_stall` varchar(25) NOT NULL,
  `date` varchar(50) NOT NULL,
  `stall_rate1` int(50) NOT NULL,
  `previous_stall_floor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `change_location`
--

INSERT INTO `change_location` (`change_id`, `tenant_id`, `previous_stall`, `current_stall`, `date`, `stall_rate1`, `previous_stall_floor`) VALUES
(34, 37, '1', '14', 'January 13, 2017', 8000, 'Second Floor'),
(35, 37, '22', '123', 'January 13, 2017', 15000, 'Ground Floor'),
(36, 37, '1', '14', 'January 13, 2017', 8000, 'Second Floor'),
(37, 37, '22', '123', 'January 13, 2017', 15000, 'Ground Floor'),
(38, 37, '1', '40', 'January 13, 2017', 8000, 'Second Floor'),
(39, 37, '48', '123', 'January 13, 2017', 123, 'Ground Floor'),
(40, 37, '1', '14', 'January 13, 2017', 8000, 'Second Floor'),
(41, 54, '39', '123', 'January 13, 2017', 123, 'Ground Floor'),
(42, 52, '37', '333', 'January 14, 2017', 12000, 'Ground Floor'),
(43, 63, '70', '393', 'January 14, 2017', 8000, 'Second Floor'),
(44, 37, '22', '42', 'January 14, 2017', 15000, 'Ground Floor'),
(45, 37, '50', '284', 'January 14, 2017', 12000, 'Ground Floor'),
(46, 27, '13', '45', 'January 22, 2017', 15000, 'Ground Floor'),
(47, 64, '13', '5', 'January 22, 2017', 8000, 'Second Floor'),
(48, 19, '9', '121', 'January 25, 2017', 13000, 'Ground Floor'),
(49, 66, '25', '143', 'January 25, 2017', 15000, 'Ground Floor');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logs_id` int(15) NOT NULL,
  `tenant_id` int(15) NOT NULL,
  `stall_id` int(15) NOT NULL,
  `action` varchar(25) NOT NULL,
  `payment` int(25) NOT NULL,
  `result` int(25) NOT NULL,
  `rate` decimal(8,2) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logs_id`, `tenant_id`, `stall_id`, `action`, `payment`, `result`, `rate`, `date`) VALUES
(1, 17, 0, '3', 0, 0, '0.00', 'December 20, 2016'),
(2, 0, 1, '4', 0, 0, '0.00', 'December 20, 2016'),
(3, 18, 0, '5', 10000, 0, '0.00', 'December 20, 2016'),
(4, 18, 0, '6', 0, 113700, '0.00', 'December 20, 2016'),
(5, 18, 1, '2', 0, 0, '0.00', 'January 02, 2017'),
(6, 0, 0, '7', 0, 0, '0.00', 'January 02, 2017'),
(7, 0, 0, '7', 0, 0, '0.00', 'January 02, 2017'),
(8, 0, 0, '7', 0, 0, '0.00', 'January 02, 2017'),
(9, 0, 0, '7', 0, 0, '12.00', 'January 02, 2017'),
(10, 0, 0, '7', 0, 0, '11.80', 'January 02, 2017'),
(11, 18, 2, '2', 0, 0, '0.00', 'January 03, 2017'),
(12, 18, 3, '2', 0, 0, '0.00', 'January 03, 2017'),
(13, 18, 4, '2', 0, 0, '0.00', 'January 04, 2017'),
(14, 18, 5, '2', 0, 0, '0.00', 'January 04, 2017'),
(15, 18, 30, '2', 0, 0, '0.00', 'January 04, 2017'),
(16, 18, 78, '2', 0, 0, '0.00', 'January 04, 2017'),
(17, 18, 78, '2', 0, 0, '0.00', 'January 05, 2017'),
(18, 18, 78, '2', 0, 0, '0.00', 'January 05, 2017'),
(19, 18, 1, '2', 0, 0, '0.00', 'January 05, 2017'),
(20, 18, 78, '2', 0, 0, '0.00', 'January 05, 2017'),
(40, 19, 1, '1', 0, 0, '0.00', 'January 05, 2017'),
(41, 0, 0, '7', 0, 0, '11.89', 'January 06, 2017'),
(42, 18, 0, '6', 0, 11890, '0.00', 'January 06, 2017'),
(43, 19, 0, '6', 0, 2378, '0.00', 'January 06, 2017'),
(44, 19, 0, '6', 0, 1189, '0.00', 'January 06, 2017'),
(45, 18, 0, '6', 0, 11890, '0.00', 'January 07, 2017'),
(46, 19, 0, '5', 13000, 0, '0.00', 'January 07, 2017'),
(47, 20, 2, '1', 0, 0, '0.00', 'January 07, 2017'),
(48, 21, 1, '1', 0, 0, '0.00', 'January 07, 2017'),
(49, 20, 0, '3', 0, 0, '0.00', 'January 07, 2017'),
(50, 0, 2, '4', 0, 0, '0.00', 'January 08, 2017'),
(51, 0, 6, '4', 0, 0, '0.00', 'January 08, 2017'),
(52, 21, 0, '6', 0, 3567, '0.00', 'January 08, 2017'),
(53, 21, 0, '3', 0, 0, '0.00', 'January 09, 2017'),
(54, 19, 0, '5', 13000, 0, '0.00', 'January 09, 2017'),
(55, 19, 0, '5', 12000, 0, '0.00', 'January 09, 2017'),
(56, 22, 2, '1', 0, 0, '0.00', 'January 10, 2017'),
(57, 22, 0, '6', 0, 1462, '0.00', 'January 10, 2017'),
(58, 23, 4, '1', 0, 0, '0.00', 'January 10, 2017'),
(59, 23, 0, '3', 0, 0, '0.00', 'January 10, 2017'),
(60, 24, 109, '1', 0, 0, '0.00', 'January 10, 2017'),
(61, 19, 1, '2', 0, 0, '0.00', 'January 12, 2017'),
(62, 19, 1, '2', 0, 0, '0.00', 'January 12, 2017'),
(63, 22, 2, '2', 0, 0, '0.00', 'January 12, 2017'),
(64, 25, 3, '1', 0, 0, '0.00', 'January 12, 2017'),
(65, 26, 4, '1', 0, 0, '0.00', 'January 12, 2017'),
(66, 27, 5, '1', 0, 0, '0.00', 'January 12, 2017'),
(67, 28, 6, '1', 0, 0, '0.00', 'January 12, 2017'),
(68, 29, 7, '1', 0, 0, '0.00', 'January 12, 2017'),
(69, 30, 7, '1', 0, 0, '0.00', 'January 12, 2017'),
(70, 31, 8, '1', 0, 0, '0.00', 'January 12, 2017'),
(71, 32, 9, '1', 0, 0, '0.00', 'January 12, 2017'),
(72, 33, 10, '1', 0, 0, '0.00', 'January 12, 2017'),
(73, 34, 11, '1', 0, 0, '0.00', 'January 12, 2017'),
(74, 35, 12, '1', 0, 0, '0.00', 'January 12, 2017'),
(75, 36, 13, '1', 0, 0, '0.00', 'January 12, 2017'),
(76, 37, 14, '1', 0, 0, '0.00', 'January 12, 2017'),
(77, 38, 15, '1', 0, 0, '0.00', 'January 12, 2017'),
(78, 39, 16, '1', 0, 0, '0.00', 'January 12, 2017'),
(79, 40, 17, '1', 0, 0, '0.00', 'January 12, 2017'),
(80, 41, 18, '1', 0, 0, '0.00', 'January 12, 2017'),
(81, 42, 19, '1', 0, 0, '0.00', 'January 12, 2017'),
(82, 43, 20, '1', 0, 0, '0.00', 'January 12, 2017'),
(83, 44, 21, '1', 0, 0, '0.00', 'January 12, 2017'),
(84, 45, 22, '1', 0, 0, '0.00', 'January 12, 2017'),
(85, 46, 23, '1', 0, 0, '0.00', 'January 12, 2017'),
(86, 47, 24, '1', 0, 0, '0.00', 'January 12, 2017'),
(87, 48, 25, '1', 0, 0, '0.00', 'January 12, 2017'),
(88, 49, 26, '1', 0, 0, '0.00', 'January 12, 2017'),
(89, 50, 27, '1', 0, 0, '0.00', 'January 12, 2017'),
(90, 51, 28, '1', 0, 0, '0.00', 'January 12, 2017'),
(91, 52, 29, '1', 0, 0, '0.00', 'January 12, 2017'),
(92, 53, 30, '1', 0, 0, '0.00', 'January 12, 2017'),
(93, 54, 31, '1', 0, 0, '0.00', 'January 12, 2017'),
(94, 55, 32, '1', 0, 0, '0.00', 'January 12, 2017'),
(95, 56, 33, '1', 0, 0, '0.00', 'January 12, 2017'),
(96, 57, 34, '1', 0, 0, '0.00', 'January 12, 2017'),
(97, 58, 35, '1', 0, 0, '0.00', 'January 12, 2017'),
(98, 59, 36, '1', 0, 0, '0.00', 'January 12, 2017'),
(99, 60, 37, '1', 0, 0, '0.00', 'January 12, 2017'),
(100, 61, 38, '1', 0, 0, '0.00', 'January 12, 2017'),
(101, 62, 39, '1', 0, 0, '0.00', 'January 12, 2017'),
(102, 63, 192, '1', 0, 0, '0.00', 'January 12, 2017'),
(103, 0, 2, '4', 0, 0, '0.00', 'January 14, 2017'),
(104, 54, 0, '3', 0, 0, '0.00', 'January 14, 2017'),
(105, 57, 0, '3', 0, 0, '0.00', 'January 14, 2017'),
(106, 40, 0, '3', 0, 0, '0.00', 'January 14, 2017'),
(107, 55, 0, '3', 0, 0, '0.00', 'January 14, 2017'),
(108, 64, 135, '1', 0, 0, '0.00', 'January 14, 2017'),
(109, 58, 0, '5', 10000, 0, '0.00', 'January 14, 2017'),
(110, 24, 0, '6', 0, 2378, '0.00', 'January 14, 2017'),
(111, 37, 0, '6', 0, 2378, '0.00', 'January 14, 2017'),
(112, 0, 123, '4', 0, 0, '0.00', 'January 14, 2017'),
(113, 65, 14, '1', 0, 0, '0.00', 'January 14, 2017'),
(114, 66, 17, '1', 0, 0, '0.00', 'January 14, 2017'),
(115, 67, 29, '1', 0, 0, '0.00', 'January 14, 2017'),
(116, 68, 388, '1', 0, 0, '0.00', 'January 14, 2017'),
(117, 66, 0, '5', 15000, 0, '0.00', 'January 14, 2017'),
(118, 66, 0, '5', 14000, 0, '0.00', 'January 20, 2017'),
(119, 66, 0, '5', 13000, 0, '0.00', 'January 20, 2017'),
(120, 64, 5, '2', 0, 0, '0.00', 'January 22, 2017'),
(121, 0, 5, '4', 0, 0, '0.00', 'January 22, 2017');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `payment` varchar(13) NOT NULL,
  `month_first` text NOT NULL,
  `month_second` text NOT NULL,
  `date` text NOT NULL,
  `or_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `tenant_id`, `payment`, `month_first`, `month_second`, `date`, `or_number`) VALUES
(16, 19, '13000', '01/04/2017', '01/01/2017', 'January 19, 2017', 'eqe123123'),
(17, 19, '12000', '01/05/2017', '01/03/2017', 'January 10, 2017', '41238990'),
(18, 58, '10000', '01/10/2017', '01/10/2017', 'January 13, 2017', '98908908'),
(19, 66, '15000', '01/04/2017', '02/04/2017', 'January 15, 2017', 'no123oi423'),
(20, 66, '14000', '01/20/2017', '02/20/2017', 'January 20, 2017', 'e-123-w1242'),
(21, 66, '13000', '01/01/2017', '02/01/2017', 'January 20, 2017', 'e-123-w123');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `rate_id` int(11) NOT NULL,
  `elec_rate` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`rate_id`, `elec_rate`) VALUES
(1, '11.89');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `charges` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`id`, `tenant_id`, `charges`, `status`) VALUES
(1, 1, 230, 0),
(2, 2, 250, 0),
(3, 3, 0, 0),
(4, 4, 0, 0),
(5, 5, 0, 0),
(6, 6, 0, 0),
(7, 7, 0, 0),
(8, 8, 0, 0),
(9, 9, 0, 0),
(10, 10, 0, 0),
(11, 11, 0, 0),
(12, 12, 0, 0),
(13, 13, 0, 0),
(14, 14, 123, 0),
(15, 15, 543, 0),
(16, 16, 0, 0),
(17, 17, 6666, 0),
(18, 18, 12000, 0),
(19, 19, 300, 0),
(20, 20, 0, 0),
(21, 21, 300, 0),
(22, 22, 123, 0),
(23, 23, 0, 0),
(24, 24, 200, 0),
(25, 25, 0, 0),
(26, 26, 0, 0),
(27, 27, 0, 0),
(28, 28, 0, 0),
(29, 29, 0, 0),
(30, 30, 0, 0),
(31, 31, 0, 0),
(32, 32, 0, 0),
(33, 33, 0, 0),
(34, 34, 0, 0),
(35, 35, 0, 0),
(36, 36, 0, 0),
(37, 37, 200, 0),
(38, 38, 0, 0),
(39, 39, 0, 0),
(40, 40, 0, 0),
(41, 41, 0, 0),
(42, 42, 0, 0),
(43, 43, 0, 0),
(44, 44, 0, 0),
(45, 45, 0, 0),
(46, 46, 0, 0),
(47, 47, 0, 0),
(48, 48, 0, 0),
(49, 49, 0, 0),
(50, 50, 0, 0),
(51, 51, 0, 0),
(52, 52, 0, 0),
(53, 53, 0, 0),
(54, 54, 0, 0),
(55, 55, 0, 0),
(56, 56, 0, 0),
(57, 57, 0, 0),
(58, 58, 0, 0),
(59, 59, 0, 0),
(60, 60, 0, 0),
(61, 61, 0, 0),
(62, 62, 0, 0),
(63, 63, 0, 0),
(64, 64, 0, 0),
(65, 65, 0, 0),
(66, 66, 0, 0),
(67, 67, 0, 0),
(68, 68, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `receipt_date`
--

CREATE TABLE `receipt_date` (
  `receipt_date_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `previous_amount` int(25) NOT NULL,
  `receipt_charges` int(11) NOT NULL,
  `result` int(25) NOT NULL,
  `date` text NOT NULL,
  `or_number` varchar(30) NOT NULL,
  `consumption` varchar(50) NOT NULL,
  `r_month` varchar(20) NOT NULL,
  `r_year` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt_date`
--

INSERT INTO `receipt_date` (`receipt_date_id`, `id`, `tenant_id`, `previous_amount`, `receipt_charges`, `result`, `date`, `or_number`, `consumption`, `r_month`, `r_year`) VALUES
(41, 19, 19, 0, 200, 2378, 'January 06, 2017', '9878979', '200', 'January', '2017'),
(42, 19, 19, 200, 300, 1189, 'January 06, 2017', '1243124', '100', 'February', '2017'),
(43, 19, 18, 11000, 12000, 11890, 'January 07, 2017', '2412412', '1000', 'January', '2018'),
(44, 21, 21, 0, 300, 3567, 'January 08, 2017', '9878978', '300', 'March', '2017'),
(45, 22, 22, 0, 123, 1462, 'January 10, 2017', '12312321', '123', 'January', '2017'),
(46, 64, 24, 0, 200, 2378, 'January 14, 2017', '1029019', '200', 'January', '2017'),
(47, 64, 37, 0, 200, 2378, 'January 14, 2017', '100090', '200', 'January', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rent_id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `stall_id` int(11) NOT NULL,
  `rent_status` int(11) NOT NULL COMMENT '0 = previous, 1 = current'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_id`, `tenant_id`, `stall_id`, `rent_status`) VALUES
(1, 1, 1, 0),
(2, 2, 2, 0),
(3, 3, 1, 0),
(4, 4, 1, 0),
(5, 5, 3, 0),
(6, 6, 1, 0),
(7, 7, 3, 0),
(8, 8, 3, 0),
(9, 2, 1, 0),
(10, 9, 2, 0),
(11, 2, 3, 0),
(12, 10, 1, 0),
(13, 11, 1, 0),
(14, 11, 2, 0),
(15, 12, 1, 0),
(16, 13, 2, 0),
(17, 13, 1, 0),
(18, 13, 3, 0),
(19, 14, 1, 0),
(20, 14, 3, 0),
(21, 14, 2, 0),
(22, 15, 1, 0),
(23, 15, 1, 0),
(24, 14, 2, 0),
(25, 15, 1, 0),
(26, 15, 3, 0),
(27, 14, 2, 0),
(28, 14, 2, 0),
(29, 14, 2, 0),
(30, 16, 1, 0),
(32, 17, 1, 0),
(37, 18, 2, 0),
(39, 17, 3, 0),
(40, 18, 1, 0),
(41, 18, 2, 0),
(42, 18, 3, 0),
(43, 18, 4, 0),
(44, 18, 5, 0),
(45, 18, 30, 0),
(46, 18, 78, 0),
(47, 18, 78, 0),
(48, 18, 78, 0),
(49, 18, 1, 0),
(50, 18, 78, 0),
(51, 18, 1, 0),
(52, 18, 78, 0),
(53, 18, 1, 0),
(54, 18, 78, 0),
(55, 18, 1, 0),
(56, 18, 78, 0),
(57, 18, 2, 0),
(58, 18, 78, 0),
(59, 18, 1, 0),
(60, 18, 2, 0),
(61, 18, 1, 0),
(62, 18, 2, 0),
(63, 18, 1, 0),
(64, 18, 2, 0),
(65, 18, 3, 0),
(66, 18, 1, 0),
(67, 18, 2, 0),
(68, 18, 1, 0),
(69, 18, 2, 0),
(70, 19, 1, 0),
(71, 19, 3, 0),
(72, 18, 1, 0),
(73, 19, 2, 0),
(74, 19, 3, 0),
(75, 18, 2, 0),
(76, 18, 1, 0),
(77, 19, 2, 0),
(78, 18, 3, 0),
(79, 19, 1, 0),
(80, 19, 4, 0),
(81, 19, 68, 0),
(82, 18, 5, 0),
(83, 20, 2, 0),
(84, 19, 4, 0),
(85, 21, 1, 0),
(86, 21, 3, 0),
(87, 21, 5, 0),
(88, 21, 2, 0),
(89, 19, 1, 0),
(90, 21, 3, 0),
(91, 22, 2, 0),
(92, 23, 4, 0),
(93, 23, 8, 0),
(94, 24, 109, 1),
(95, 19, 1, 0),
(96, 19, 1, 0),
(97, 22, 2, 1),
(98, 25, 3, 1),
(99, 26, 4, 1),
(100, 27, 5, 0),
(101, 28, 6, 1),
(102, 29, 7, 1),
(103, 30, 7, 1),
(104, 31, 8, 1),
(105, 32, 9, 1),
(106, 33, 10, 1),
(107, 34, 11, 1),
(108, 35, 12, 1),
(109, 36, 13, 1),
(110, 37, 14, 0),
(111, 38, 15, 1),
(112, 39, 16, 1),
(113, 40, 17, 0),
(114, 41, 18, 1),
(115, 42, 19, 1),
(116, 43, 20, 1),
(117, 44, 21, 1),
(118, 45, 22, 1),
(119, 46, 23, 1),
(120, 47, 24, 1),
(121, 48, 25, 1),
(122, 49, 26, 1),
(123, 50, 27, 1),
(124, 51, 28, 1),
(125, 52, 29, 0),
(126, 53, 30, 1),
(127, 54, 31, 0),
(128, 55, 32, 0),
(129, 56, 33, 1),
(130, 57, 34, 0),
(131, 58, 35, 1),
(132, 59, 36, 1),
(133, 60, 37, 1),
(134, 61, 38, 1),
(135, 62, 39, 1),
(136, 63, 192, 0),
(137, 37, 123, 0),
(138, 37, 14, 0),
(139, 37, 123, 0),
(140, 37, 14, 0),
(141, 37, 123, 0),
(142, 37, 40, 0),
(143, 37, 123, 0),
(144, 37, 14, 0),
(145, 54, 123, 0),
(146, 64, 135, 0),
(147, 52, 333, 1),
(148, 63, 393, 1),
(149, 37, 42, 0),
(150, 37, 284, 1),
(151, 65, 14, 1),
(152, 66, 17, 0),
(153, 67, 29, 1),
(154, 68, 388, 1),
(155, 27, 45, 1),
(156, 64, 5, 0),
(157, 64, 5, 1),
(158, 19, 121, 1),
(159, 66, 143, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stall`
--

CREATE TABLE `stall` (
  `stall_id` int(11) NOT NULL,
  `stall_number` varchar(11) NOT NULL,
  `stall_floor` varchar(18) NOT NULL,
  `stall_rate` varchar(11) NOT NULL,
  `stall_elec_read` varchar(35) NOT NULL,
  `stall_size` varchar(25) NOT NULL,
  `file` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stall`
--

INSERT INTO `stall` (`stall_id`, `stall_number`, `stall_floor`, `stall_rate`, `stall_elec_read`, `stall_size`, `file`) VALUES
(1, '9', 'Ground Floor', '13000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(2, '10', 'Ground Floor', '10000', 'Carl Francis Villanuevaa', '15 sq.meters', 'stall1.jpg'),
(3, '11', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(4, '12', 'Ground Floor', '13000', 'Carl Francis Villanueva', '15 sq.meters', 'lm.jpg'),
(5, '13', 'Ground Floor', '15000', 'Jade Amelia Thirlwall', '13x8 sq.meters', 'lm.jpg'),
(6, '14', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(7, '15', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(8, '16', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(9, '17', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(10, '18', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(11, '19', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(12, '20', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(13, '21', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(14, '22', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(15, '23', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(16, '24', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(17, '25', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(18, '26', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(19, '27', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(20, '28', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(21, '29', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(22, '30', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(23, '31', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(24, '32', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(25, '33', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(26, '34', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(27, '35', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(28, '36', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(29, '37', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(30, '38', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(31, '39', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(32, '40', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(33, '41', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(34, '42', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(35, '43', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(36, '44', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(37, '45', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(38, '46', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(39, '47', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(40, '48', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(41, '49', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(42, '50', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(43, '51', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(44, '52', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(45, '53', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(46, '54', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(47, '55', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(48, '56', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(49, '57', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(50, '58', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(51, '59', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(52, '60', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(53, '61', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(54, '62', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(55, '63', 'Ground Floor', '12000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(56, '64', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(57, '65', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(58, '66', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(59, '67', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(60, '68', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(61, '69', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(62, '70', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(63, '71', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(64, '72', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(65, '73', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(66, '74', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(67, '75', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(68, '76', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(69, '77', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(70, '78', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(71, '79', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(72, '80', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(73, '81', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(74, '82', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(75, '83', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(76, '84', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(77, '85', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(78, '86', 'Ground Floor', '15000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(79, 'A1', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(80, 'A2', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(81, 'A3', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(82, 'A4', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(83, 'A5', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(84, 'A6', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(85, 'B1', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(86, 'B2', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(87, 'B3', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(88, 'B4', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(89, 'B5', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(90, 'B6', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(91, 'C1', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(92, 'C2', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(93, 'C3', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(94, 'C4', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(95, 'C5', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(96, 'C6', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(97, 'C7', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(98, 'C8', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(99, 'C9', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(100, 'C10', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(101, 'C11', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(102, 'C12', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(103, 'RS1', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(104, 'RS2', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(105, 'RS3', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(106, 'RS4', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(107, 'RS5', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(108, 'RS6', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(109, 'RS7', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(110, 'RS8', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(111, 'RS9', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(112, 'RS10', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(113, 'RS11', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(114, 'RS12', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(115, 'RS13', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(116, 'RS14', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(117, 'RS15', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(118, 'RS16', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(119, 'RS17', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(120, 'RS18', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(121, 'RS19', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(122, 'RS20', 'Ground Floor', '10000', 'Carl Francis Villanueva', '15 sq.meters', 'stall1.jpg'),
(123, '1', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15x15 sq.meters', 'stall1.jpg'),
(124, '2', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(125, '3', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(126, '4', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(127, '5', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(128, '6', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(129, '7', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(130, '8', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(131, '9', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(132, '10', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(133, '11', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(134, '12', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(135, '13', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(136, '14', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(137, '15', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(138, '16', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(139, '17', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(140, '18', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(141, '19', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(142, '20', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(143, '21', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(144, '22', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(145, '23', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(146, '24', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(147, '25', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(148, '26', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(149, '27', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(150, '28', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(151, '29', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(152, '30', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(153, '31', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(154, '32', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(155, '33', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(156, '34', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(157, '35', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(158, '36', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(159, '37', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(160, '38', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(161, '39', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(162, '40', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(163, '41', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(164, '42', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(165, '43', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(166, '44', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(167, '45', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(168, '46', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(169, '47', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(170, '48', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(171, '49', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(172, '50', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(173, '51', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(174, '52', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(175, '53', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(176, '54', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(177, '55', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(178, '56', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(179, '57', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(180, '58', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(181, '59', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(182, '60', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(183, '61', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(184, '62', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(185, '63', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(186, '64', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(187, '65', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(188, '66', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(189, '67', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(190, '68', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(191, '69', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(192, '70', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(193, '71', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(194, 'A1', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(195, 'A2', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(196, 'A3', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(197, 'A4', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(198, 'A5', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(199, 'A6', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(200, 'A7', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(201, 'A8', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(202, 'A9', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(203, 'A10', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(204, 'A11', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(205, 'A12', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(206, 'A13', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(207, 'A14', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(208, 'A15', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(209, 'A16', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(210, 'A17', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(211, 'A18', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(212, 'A19', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(213, 'A20', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(214, 'A21', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(215, 'A22', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(216, 'A23', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(217, 'A24', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(218, 'A25', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(219, 'A26', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(220, 'A27', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(221, 'A28', 'Second Floor', '8000', 'Donard Malasibas Ytienza', '15 sq.meters', 'stall1.jpg'),
(222, 'A1', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(223, 'A2', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(224, 'A3', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(225, 'A4', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(226, 'A5', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(227, 'A6', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(228, 'A7', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(229, 'A8', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(230, 'A9', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(231, 'A10', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(232, 'A11', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(233, 'A12', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(234, 'A13', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(235, 'A14', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(236, 'A15', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(237, 'A16', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(238, 'A17', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(239, 'A18', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(240, 'A19', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(241, 'A20', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(242, 'A21', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(243, 'A22', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(244, 'A23', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(245, 'A24', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(246, 'A25', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(247, 'A26', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(248, 'A27', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(249, 'A28', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(250, 'A29', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(251, 'A30', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(252, 'A31', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(253, 'A32', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(254, 'A33', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(255, 'A34', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(256, 'A35', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(257, 'A36', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(258, 'A37', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(259, 'A38', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(260, 'A39', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(261, 'A40', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(262, 'A41', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(263, 'A42', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(264, 'A43', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(265, 'A44', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(266, 'A45', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(267, 'A46', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(268, 'A47', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(269, 'A48', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(270, 'A49', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(271, 'A50', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(272, 'B1', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(273, 'B2', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(274, 'B3', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(275, 'B4', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(276, 'B5', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(277, 'B6', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(278, 'B7', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(279, 'B8', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(280, 'B9', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(281, 'B10', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(282, 'B11', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(283, 'B12', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(284, 'B13', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(285, 'B14', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(286, 'B15', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(287, 'B16', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(288, 'B17', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(289, 'B18', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(290, 'B19', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(291, 'B20', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(292, 'B21', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters.', 'stall.jpg'),
(293, 'B22', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(294, 'B23', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(295, 'B24', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(296, 'B25', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(297, 'B26', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(298, 'B27', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(299, 'B28', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(300, 'B29', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(301, 'B30', 'Wet Market.', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(302, 'B31', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(303, 'B32', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(304, 'B33', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(305, 'B34', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(306, 'B35', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(307, 'B36', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(308, 'B37', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(309, 'B38', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(310, 'B39', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(311, 'B40', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(312, 'B41', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(313, 'B42', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(314, 'B43', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(315, 'B44', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(316, 'B45', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(317, 'B46', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(318, 'B47', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(319, 'B48', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(320, 'B49', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(321, 'B50', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(322, 'C1', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(323, 'C2', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(324, 'C3', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(325, 'C4', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(326, 'C5', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(327, 'C6', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(328, 'C7', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(329, 'C8', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(330, 'C9', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(331, 'C10', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(332, 'C11', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(333, 'C12', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(334, 'C13', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(335, 'C14', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(336, 'C15', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(337, 'C16', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(338, 'C17', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(339, 'C18', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(340, 'C19', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(341, 'C20', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(342, 'C21', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(343, 'C22', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(344, 'D1', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(345, 'D2', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(346, 'D3', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(347, 'D4', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(348, 'D5', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(349, 'D6', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(350, 'D7', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(351, 'D8', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(352, 'D9', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(353, 'D10', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(354, 'D11', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(355, 'D12', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(356, 'D13', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(357, 'D14', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(358, 'D15', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(359, 'D16', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(360, 'D17', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(361, 'D18', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(362, 'D19', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(363, 'D20', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(364, 'D21', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(365, 'D22', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(366, 'D23', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(367, 'D24', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(368, 'D25', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(369, 'D26', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(370, 'D27', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(371, 'D28', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(372, 'D29', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(373, 'D30', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(374, 'D31', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(375, 'D32', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(376, 'D33', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(377, 'D34', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(378, 'D35', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(379, 'D36', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(380, 'D37', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(381, 'D38', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(382, 'D39', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(383, 'D40', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(384, 'D41', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(385, 'D42', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(386, 'D43', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(387, 'D44', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(388, 'D45', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(389, 'D46', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(390, 'D47', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(391, 'D48', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(392, 'D49', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg'),
(393, 'D50', 'Wet Market', '6000', 'Arian Cantong Baldostamon', '10 sq.meters', 'stall.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `tenant_id` int(11) NOT NULL,
  `tenant_fname` varchar(50) NOT NULL,
  `tenant_mname` varchar(50) NOT NULL,
  `tenant_lname` varchar(50) NOT NULL,
  `tenant_address` varchar(300) NOT NULL,
  `tenant_contact` varchar(50) NOT NULL,
  `stall_id` int(11) NOT NULL,
  `stall_name` varchar(50) NOT NULL,
  `stall_category` varchar(50) NOT NULL,
  `meter_number` int(50) NOT NULL,
  `rate_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`tenant_id`, `tenant_fname`, `tenant_mname`, `tenant_lname`, `tenant_address`, `tenant_contact`, `stall_id`, `stall_name`, `stall_category`, `meter_number`, `rate_id`) VALUES
(2, 'Eve', 'Talanquines', 'Villoso', 'Prk. Mahimaya-on, Brgy. Bata, Bacolod City', '09074831719', 3, 'Aye Store', 'Dry Goods', 0, 1),
(18, 'Ronnel', 'Johns', 'de la Torre', 'Prk. Mahimaya-on, Brgy. Bata, Bacolod City', '09074831719', 5, 'Ronnel''s Store', 'Wet Market', 423298123, 1),
(19, 'Kearl Joy', 'Articulo', 'Bartolome', 'E.B Magalona Neg. Occ', '09876795640', 121, 'Kearl Joy''s Store', 'Sari-sari ', 1234123, 1),
(20, 'Ayeisha', 'Raine', 'de la Torre', 'Prk. Mahimaya-on, Brgy. Bata, Bacolod City', '09084754816', 2, 'aye store', 'Wet Market', 3238923, 1),
(22, 'Marie', 'Fernandez', 'Rojo', 'Post number 1 Victorias City', '09845367823', 2, 'Marie''s  Sari-sari Store', 'Sari-sari', 12312321, 1),
(23, 'Perrie', 'Louise', 'Edwards', 'Victorias City', '09959518781', 8, 'LM Store', 'Dry Goods', 5, 1),
(24, 'Jessica', 'Louise', 'Nelson', 'Nanca', '09186344366', 109, 'Betsy Betsy', 'Grocery', 1029032, 1),
(25, 'Arian ', 'Cantong', 'Baldostamon', 'Manapla City Neg Occ', '09136725438', 3, 'Arian''s RTW', 'Dry Goods', 12356, 1),
(26, 'Angelo Jei', 'Amaro', 'Pereyra', 'Silay City Neg Occ', '09675432678', 4, 'Angelo''Carenderia', 'Carenderia', 34257, 1),
(27, 'Lynie', 'Bass', 'Gamboa', 'E.B Magalona Neg Occ', '09786565434', 45, 'Lynie''s Parlor', 'Parlor', 90874, 1),
(28, 'Darvin', 'Tan', 'Dacillo', 'Bacayan Victorias City Neg Occ ', '09785435678', 6, 'Darvin''s Store', 'Sari-sari', 67547, 1),
(29, 'Emgie', 'Geronimo', 'Mejica', 'Victorias City Neg Occ', '09564652341', 7, 'Emgie''s Store', 'Sari-sari', 89675, 1),
(30, 'Emgie', 'Geronimo', 'Mejica', 'Victorias City Neg Occ', '09564652341', 7, 'Emgie''s Store', 'Sari-sari', 89675, 1),
(31, 'Shayne', 'Geronimo', 'Mangaba', 'Victorias City Neg Occ', '09675453453', 8, 'Shayne''s Store', 'SAri-sari', 67545, 1),
(32, 'Meidy', 'Mejica', 'Tan', 'Victorias City Neg Occ', '09678956471', 9, 'Meidy''s Carenderia', 'Carenderia', 89756, 1),
(33, 'Vergie', 'Ticao', 'Forton', 'Victorias City Neg Occ', '09786754345', 10, 'Vergie''s Dry Goods', 'Dry Goods', 67578, 1),
(34, 'Kent', 'Ortega', 'Cordero', 'Victorias City Neg Occ', '09783434215', 11, 'Kent''s Barber Shop', 'Barber Shop', 86567, 1),
(35, 'Trixy', 'Olegna', 'Lescano', 'Victorias City Neg Occ', '09456357865', 12, 'Trixy''s Store', 'Sari-sari', 72865, 1),
(36, 'Kim', '', 'Allandre', 'Victorias City Neg Occ', '09267745334', 13, 'Kim''s Dry Goods', 'Dry Goods', 67524, 1),
(37, 'Allysa', '', 'Libres', 'Victorias City Neg Occ', '09256451725', 284, 'Allysa''s Dry Goods', 'Dry Goods', 56145, 1),
(38, 'Syvil', '', 'Bunda', 'Victorias City Neg Occ', '09156432415', 15, 'Syvil''s Carenderia', 'Carenderia', 78145, 1),
(39, 'Annalyn', 'Olegna', 'Benitez', 'Victorias City Neg Occ', '09785425364', 16, 'Annalyn''s Dry Good', 'Dry Goods', 72864, 1),
(40, 'Shen Lee', 'Mari', 'Aguirre', 'Victorias City Neg Occ', '09142564253', 17, 'Shen Lee''s Apparel', 'Dry Goods', 81925, 1),
(41, 'Jelo', '', 'Isidro', 'Victorias City Neg Occ', '09152634517', 18, 'Jelo''s Store', 'Sari-sari', 14527, 1),
(42, 'Justine', 'Jacob', 'Amaro', 'Victorias City Neg Occ', '09167256279', 19, 'Justine''s Eatery', 'Carenderia', 82925, 1),
(43, 'Grace', '', 'Jinon', 'Victorias City Neg Occ', '092561725367', 20, 'G''s Eatery', 'Carenderia', 89245, 1),
(44, 'Mark', '', 'Allandre', 'Victorias City Neg Occ', '09267152436', 21, 'Mark''s Dry Goods', 'Dry Goods', 15628, 1),
(45, 'Stephen', '', 'Borja', 'Victorias City Neg Occ', '09152627272', 22, 'Stephen''s Barber Shop', 'Barber Shop', 82925, 1),
(46, 'kobe', '', 'Duenas', 'Victorias City Neg Occ', '09152673865', 23, 'Kobe''s Kapehan and Eatery', 'Carenderia', 72825, 1),
(47, 'Jonas', '', 'Magbanua', 'Victorias City Neg Occ', '09256152436', 24, 'J''s Shop', 'Dry Goods', 90263, 1),
(48, 'Joshua Rigel', 'Baridiano', 'Ilisan', 'Victorias City Neg Occ', '09253738259', 25, 'Joshua''s Store', 'Sari-sari', 92724, 1),
(49, 'Kenneth', 'Secosa', 'Makinano', 'Victorias City Neg Occ', '09152628158', 26, 'K''s Dress Shop', 'Dry Goods', 52725, 1),
(50, 'Kent', '', 'Espeleta', 'Victorias City Neg Occ', '09241527256', 27, 'Kent''s Eatery', 'Carenderia', 57842, 1),
(51, 'Lorena', '', 'Jopson', 'Victorias City Neg Occ', '09263728864', 28, 'Lorena''s Eatery', 'Carenderia', 52727, 1),
(52, 'Christian', '', 'Jimenea', 'Victorias City Neg Occ', '09253647536', 333, 'C''s Eatery', 'Carenderia', 92937, 1),
(53, 'Eloisa', '', 'Pareno', 'VictoriasCity Neg Occ', '09253647482', 30, 'Eloisa''s Dress Shop', 'Dry Goods', 72357, 1),
(54, 'Angel', 'Aldeguer', 'Palermo', 'Victorias City Neg Occ', '09126283653', 123, 'Angel''s Burger Stop', 'Eatery', 62863, 1),
(55, 'Ed', 'Sheer', 'An', 'Victorias City Neg Occ', '09481638525', 32, 'Ed''s Shop', 'Dry Goods', 62782, 1),
(56, 'Phillen', 'Jamandre', 'Aldeguer', 'Victorias City Neg Occ', '09253627243', 33, 'Phillen''s Dress Shop', 'Dry Goods', 72927, 1),
(57, 'Karen ', 'Kaye', 'Militante', 'Victorias City Neg OCc', '09278482323', 34, 'Karen''s Eatery', 'Eatery', 72927, 1),
(58, 'Daisy', 'Ogawa', 'Jaen', 'Victorias City Neg Occ', '09352725373', 35, 'Daisy''s Eatery', 'Eatery', 72826, 1),
(59, 'Sheila', 'Locsin', 'Sorillo', 'Victorias City Neg Occ', '09273936382', 36, 'Sheila''s Eatery', 'Eatery', 36827, 1),
(60, 'Janica', 'Magbanua', 'Palas', 'Victorias City Neg Occ', '09362753640', 37, 'Janica''s RTW', 'Dry Goods', 73825, 1),
(61, 'Remia', '', 'Sumagaysay', 'Victorias City Neg OCc', '09273816182', 38, 'Remia''s Eatery', 'Eatery', 25617, 1),
(62, 'Mark John', 'Leuterio', 'Perez', 'Victorias City Neg Occ', '09273868272', 39, 'MJ''s Dress Shop', 'Dry Goods', 67247, 1),
(63, 'Ronnel John', 'Pelagio', 'de la Torre', 'Prk. Mahimaya-on, Brgy. Bata, Bacolod City', '09074831719', 393, 'Ronnel''s Store', 'Sari Sari Store', 45789, 1),
(64, 'Perrie', 'Louise', 'Edwards', 'South Shields, United Kingdom', '09959518781', 5, 'Little Mix', 'Restaurant', 183888310, 1),
(65, 'qwe', 'qwe', 'qwe', 'qwe', '123', 14, 'qwe', 'qwe', 123, 1),
(66, '121', '123', '123', '123', '123', 143, '123', '123', 123, 1),
(67, '123', '123', '123', '123', '123', 29, '123', '123', 123, 1),
(68, '123', '123', '123', '123', '123', 388, '123', '123', 123, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tenant_status`
--

CREATE TABLE `tenant_status` (
  `tenant_status_id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `date_started` text NOT NULL,
  `date_ended` text NOT NULL,
  `tenant_status` int(11) NOT NULL COMMENT '0 = not renting, 1 = currently renting'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant_status`
--

INSERT INTO `tenant_status` (`tenant_status_id`, `tenant_id`, `date_started`, `date_ended`, `tenant_status`) VALUES
(1, 1, 'November 04, 2016', 'December 11, 2016', 0),
(2, 2, 'December 08, 2016', 'December 11, 2016', 0),
(3, 3, 'December 11, 2016', 'December 11, 2016', 0),
(4, 4, 'December 11, 2016', 'December 11, 2016', 0),
(5, 5, 'December 11, 2016', 'December 11, 2016', 0),
(6, 6, 'December 11, 2016', 'December 11, 2016', 0),
(7, 7, 'December 11, 2016', 'December 11, 2016', 0),
(8, 8, 'December 11, 2016', 'December 11, 2016', 0),
(9, 9, 'December 11, 2016', 'December 11, 2016', 0),
(10, 10, 'December 11, 2016', 'December 11, 2016', 0),
(11, 11, 'December 11, 2016', 'December 11, 2016', 0),
(12, 12, 'December 11, 2016', 'December 11, 2016', 0),
(13, 13, 'December 11, 2016', 'December 11, 2016', 0),
(14, 14, 'December 11, 2016', 'December 15, 2016', 0),
(15, 15, 'December 12, 2016', 'December 15, 2016', 0),
(16, 16, 'December 15, 2016', 'December 15, 2016', 0),
(17, 17, 'December 15, 2016', 'December 20, 2016', 0),
(18, 18, 'December 20, 2016', 'December 20, 2016', 0),
(19, 19, 'January 05, 2017', '0', 1),
(20, 20, 'January 07, 2017', 'January 07, 2017', 0),
(21, 21, 'January 07, 2017', 'January 09, 2017', 0),
(22, 22, 'January 10, 2017', '0', 1),
(23, 23, 'January 10, 2017', 'January 10, 2017', 0),
(24, 24, 'January 10, 2017', '0', 1),
(25, 25, 'January 12, 2017', '0', 1),
(26, 26, 'January 12, 2017', '0', 1),
(27, 27, 'January 12, 2017', '0', 1),
(28, 28, 'January 12, 2017', '0', 1),
(29, 29, 'January 12, 2017', '0', 1),
(30, 30, 'January 12, 2017', '0', 1),
(31, 31, 'January 12, 2017', '0', 1),
(32, 32, 'January 12, 2017', '0', 1),
(33, 33, 'January 12, 2017', '0', 1),
(34, 34, 'January 12, 2017', '0', 1),
(35, 35, 'January 12, 2017', '0', 1),
(36, 36, 'January 12, 2017', '0', 1),
(37, 37, 'January 12, 2017', '0', 1),
(38, 38, 'January 12, 2017', '0', 1),
(39, 39, 'January 12, 2017', '0', 1),
(40, 40, 'January 12, 2017', 'January 14, 2017', 0),
(41, 41, 'January 12, 2017', '0', 1),
(42, 42, 'January 12, 2017', '0', 1),
(43, 43, 'January 12, 2017', '0', 1),
(44, 44, 'January 12, 2017', '0', 1),
(45, 45, 'January 12, 2017', '0', 1),
(46, 46, 'January 12, 2017', '0', 1),
(47, 47, 'January 12, 2017', '0', 1),
(48, 48, 'January 12, 2017', '0', 1),
(49, 49, 'January 12, 2017', '0', 1),
(50, 50, 'January 12, 2017', '0', 1),
(51, 51, 'January 12, 2017', '0', 1),
(52, 52, 'January 12, 2017', '0', 1),
(53, 53, 'January 12, 2017', '0', 1),
(54, 54, 'January 12, 2017', 'January 14, 2017', 0),
(55, 55, 'January 12, 2017', 'January 14, 2017', 0),
(56, 56, 'January 12, 2017', '0', 1),
(57, 57, 'January 12, 2017', 'January 14, 2017', 0),
(58, 58, 'January 12, 2017', '0', 1),
(59, 59, 'January 12, 2017', '0', 1),
(60, 60, 'January 12, 2017', '0', 1),
(61, 61, 'January 12, 2017', '0', 1),
(62, 62, 'January 12, 2017', '0', 1),
(63, 63, 'January 12, 2017', '0', 1),
(64, 64, 'January 14, 2017', '0', 1),
(65, 65, 'January 14, 2017', '0', 1),
(66, 66, 'January 14, 2017', '0', 1),
(67, 67, 'January 14, 2017', '0', 1),
(68, 68, 'January 14, 2017', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `user_type`) VALUES
(1, 'admin', 'admin', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `change_location`
--
ALTER TABLE `change_location`
  ADD PRIMARY KEY (`change_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logs_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt_date`
--
ALTER TABLE `receipt_date`
  ADD PRIMARY KEY (`receipt_date_id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rent_id`),
  ADD KEY `stall_id` (`stall_id`),
  ADD KEY `tenant_id` (`tenant_id`);

--
-- Indexes for table `stall`
--
ALTER TABLE `stall`
  ADD PRIMARY KEY (`stall_id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`tenant_id`),
  ADD KEY `stall_id` (`stall_id`);

--
-- Indexes for table `tenant_status`
--
ALTER TABLE `tenant_status`
  ADD PRIMARY KEY (`tenant_status_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `change_location`
--
ALTER TABLE `change_location`
  MODIFY `change_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logs_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `receipt_date`
--
ALTER TABLE `receipt_date`
  MODIFY `receipt_date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
--
-- AUTO_INCREMENT for table `stall`
--
ALTER TABLE `stall`
  MODIFY `stall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=394;
--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `tenant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `tenant_status`
--
ALTER TABLE `tenant_status`
  MODIFY `tenant_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
