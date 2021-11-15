-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 03:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel_reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutpage`
--

CREATE TABLE `aboutpage` (
  `aboutId` int(1) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `content1` varchar(300) NOT NULL,
  `content2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutpage`
--

INSERT INTO `aboutpage` (`aboutId`, `heading`, `content1`, `content2`) VALUES
(1, 'hello world', 'hello', 'heeloo');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` varchar(10) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `emailId` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `wardenOf` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `fullName`, `emailId`, `password`, `wardenOf`) VALUES
('admin001', 'Shrikant Sharma', 'shrikant@admin.com', 'admin1234', 'P-Block');

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `blockName` varchar(20) NOT NULL,
  `noOfRooms` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`blockName`, `noOfRooms`) VALUES
('A-Block', 20),
('B-Block', 20),
('C-Block', 20),
('D-Block', 20),
('E-Block', 20),
('F-Block', 20),
('G-Block', 20),
('H-Block', 20),
('I-Block', 20),
('J-Block', 20),
('K-Block', 20),
('L-Block', 20),
('M-Block', 20),
('N-Block', 20),
('O-Block', 20),
('P-Block', 20),
('Q-Block', 20);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `regId` int(4) NOT NULL,
  `regNo` varchar(10) NOT NULL,
  `roomType` varchar(20) NOT NULL,
  `block` varchar(10) NOT NULL,
  `yearFrom` int(4) NOT NULL,
  `yearTo` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regId`, `regNo`, `roomType`, `block`, `yearFrom`, `yearTo`) VALUES
(32, '19BCE0560', '1-BED A/C', 'A-Block', 2020, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomId` int(7) NOT NULL,
  `blockName` varchar(20) NOT NULL,
  `roomType` varchar(15) NOT NULL,
  `availableBeds` int(1) NOT NULL,
  `roomFee` int(6) NOT NULL,
  `messFee` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomId`, `blockName`, `roomType`, `availableBeds`, `roomFee`, `messFee`) VALUES
(1, 'A-Block', '1-BED A/C', 0, 65000, 30000),
(2, 'A-Block', '1-BED A/C', 1, 65000, 30000),
(3, 'A-Block', '2-BED A/C', 2, 60000, 30000),
(4, 'A-Block', '2-BED A/C', 2, 60000, 30000),
(5, 'A-Block', '3-BED A/C', 3, 55000, 30000),
(6, 'A-Block', '3-BED A/C', 3, 55000, 30000),
(7, 'A-Block', '4-BED A/C', 4, 50000, 30000),
(8, 'A-Block', '4-BED A/C', 4, 50000, 30000),
(9, 'A-Block', '4-BED A/C', 4, 50000, 30000),
(10, 'A-Block', '6-BED A/C', 6, 45000, 30000),
(11, 'A-Block', '6-BED A/C', 6, 45000, 30000),
(12, 'A-Block', '6-BED A/C', 6, 45000, 30000),
(13, 'A-Block', '2-BED Non A/C', 2, 40000, 30000),
(14, 'A-Block', '2-BED Non A/C', 2, 40000, 30000),
(15, 'A-Block', '4-BED Non A/C', 4, 35000, 30000),
(16, 'A-Block', '4-BED Non A/C', 4, 35000, 30000),
(17, 'A-Block', '4-BED Non A/C', 4, 35000, 30000),
(18, 'A-Block', '6-BED Non A/C', 6, 30000, 30000),
(19, 'A-Block', '6-BED Non A/C', 6, 30000, 30000),
(20, 'A-Block', '6-BED Non A/C', 6, 30000, 30000),
(21, 'B-Block', '1-BED A/C', 1, 65000, 30000),
(22, 'B-Block', '1-BED A/C', 1, 65000, 30000),
(23, 'B-Block', '2-BED A/C', 0, 60000, 30000),
(24, 'B-Block', '2-BED A/C', 2, 60000, 30000),
(25, 'B-Block', '3-BED A/C', 3, 55000, 30000),
(26, 'B-Block', '3-BED A/C', 3, 55000, 30000),
(27, 'B-Block', '4-BED A/C', 4, 50000, 30000),
(28, 'B-Block', '4-BED A/C', 4, 50000, 30000),
(29, 'B-Block', '4-BED A/C', 4, 50000, 30000),
(30, 'B-Block', '6-BED A/C', 6, 45000, 30000),
(31, 'B-Block', '6-BED A/C', 6, 45000, 30000),
(32, 'B-Block', '6-BED A/C', 6, 45000, 30000),
(33, 'B-Block', '2-BED Non A/C', 2, 40000, 30000),
(34, 'B-Block', '2-BED Non A/C', 2, 40000, 30000),
(35, 'B-Block', '4-BED Non A/C', 4, 35000, 30000),
(36, 'B-Block', '4-BED Non A/C', 4, 35000, 30000),
(37, 'B-Block', '4-BED Non A/C', 4, 35000, 30000),
(38, 'B-Block', '6-BED Non A/C', 6, 30000, 30000),
(39, 'B-Block', '6-BED Non A/C', 6, 30000, 30000),
(40, 'B-Block', '6-BED Non A/C', 6, 30000, 30000),
(41, 'C-Block', '1-BED A/C', 1, 65000, 30000),
(42, 'C-Block', '1-BED A/C', 1, 65000, 30000),
(43, 'C-Block', '2-BED A/C', 2, 60000, 30000),
(44, 'C-Block', '2-BED A/C', 2, 60000, 30000),
(45, 'C-Block', '3-BED A/C', 3, 55000, 30000),
(46, 'C-Block', '3-BED A/C', 3, 55000, 30000),
(47, 'C-Block', '4-BED A/C', 4, 50000, 30000),
(48, 'C-Block', '4-BED A/C', 4, 50000, 30000),
(49, 'C-Block', '4-BED A/C', 4, 50000, 30000),
(50, 'C-Block', '6-BED A/C', 6, 45000, 30000),
(51, 'C-Block', '6-BED A/C', 6, 45000, 30000),
(52, 'C-Block', '6-BED A/C', 6, 45000, 30000),
(53, 'C-Block', '2-BED Non A/C', 2, 40000, 30000),
(54, 'C-Block', '2-BED Non A/C', 2, 40000, 30000),
(55, 'C-Block', '4-BED Non A/C', 4, 35000, 30000),
(56, 'C-Block', '4-BED Non A/C', 4, 35000, 30000),
(57, 'C-Block', '4-BED Non A/C', 4, 35000, 30000),
(58, 'C-Block', '6-BED Non A/C', 6, 30000, 30000),
(59, 'C-Block', '6-BED Non A/C', 6, 30000, 30000),
(60, 'C-Block', '6-BED Non A/C', 6, 30000, 30000),
(61, 'D-Block', '1-BED A/C', 1, 65000, 30000),
(62, 'D-Block', '1-BED A/C', 1, 65000, 30000),
(63, 'D-Block', '2-BED A/C', 2, 60000, 30000),
(64, 'D-Block', '2-BED A/C', 2, 60000, 30000),
(65, 'D-Block', '3-BED A/C', 3, 55000, 30000),
(66, 'D-Block', '3-BED A/C', 3, 55000, 30000),
(67, 'D-Block', '4-BED A/C', 4, 50000, 30000),
(68, 'D-Block', '4-BED A/C', 4, 50000, 30000),
(69, 'D-Block', '4-BED A/C', 4, 50000, 30000),
(70, 'D-Block', '6-BED A/C', 6, 45000, 30000),
(71, 'D-Block', '6-BED A/C', 6, 45000, 30000),
(72, 'D-Block', '6-BED A/C', 6, 45000, 30000),
(73, 'D-Block', '2-BED Non A/C', 2, 40000, 30000),
(74, 'D-Block', '2-BED Non A/C', 2, 40000, 30000),
(75, 'D-Block', '4-BED Non A/C', 4, 35000, 30000),
(76, 'D-Block', '4-BED Non A/C', 4, 35000, 30000),
(77, 'D-Block', '4-BED Non A/C', 4, 35000, 30000),
(78, 'D-Block', '6-BED Non A/C', 6, 30000, 30000),
(79, 'D-Block', '6-BED Non A/C', 6, 30000, 30000),
(80, 'D-Block', '6-BED Non A/C', 6, 30000, 30000),
(81, 'E-Block', '1-BED A/C', 1, 65000, 30000),
(82, 'E-Block', '1-BED A/C', 1, 65000, 30000),
(83, 'E-Block', '2-BED A/C', 2, 60000, 30000),
(84, 'E-Block', '2-BED A/C', 2, 60000, 30000),
(85, 'E-Block', '3-BED A/C', 3, 55000, 30000),
(86, 'E-Block', '3-BED A/C', 3, 55000, 30000),
(87, 'E-Block', '4-BED A/C', 4, 50000, 30000),
(88, 'E-Block', '4-BED A/C', 4, 50000, 30000),
(89, 'E-Block', '4-BED A/C', 4, 50000, 30000),
(90, 'E-Block', '6-BED A/C', 6, 45000, 30000),
(91, 'E-Block', '6-BED A/C', 6, 45000, 30000),
(92, 'E-Block', '6-BED A/C', 6, 45000, 30000),
(93, 'E-Block', '2-BED Non A/C', 2, 40000, 30000),
(94, 'E-Block', '2-BED Non A/C', 2, 40000, 30000),
(95, 'E-Block', '4-BED Non A/C', 4, 35000, 30000),
(96, 'E-Block', '4-BED Non A/C', 4, 35000, 30000),
(97, 'E-Block', '4-BED Non A/C', 4, 35000, 30000),
(98, 'E-Block', '6-BED Non A/C', 6, 30000, 30000),
(99, 'E-Block', '6-BED Non A/C', 6, 30000, 30000),
(100, 'E-Block', '6-BED Non A/C', 6, 30000, 30000),
(101, 'F-Block', '1-BED A/C', 1, 65000, 30000),
(102, 'F-Block', '1-BED A/C', 1, 65000, 30000),
(103, 'F-Block', '2-BED A/C', 2, 60000, 30000),
(104, 'F-Block', '2-BED A/C', 2, 60000, 30000),
(105, 'F-Block', '3-BED A/C', 3, 55000, 30000),
(106, 'F-Block', '3-BED A/C', 3, 55000, 30000),
(107, 'F-Block', '4-BED A/C', 4, 50000, 30000),
(108, 'F-Block', '4-BED A/C', 4, 50000, 30000),
(109, 'F-Block', '4-BED A/C', 4, 50000, 30000),
(110, 'F-Block', '6-BED A/C', 6, 45000, 30000),
(111, 'F-Block', '6-BED A/C', 6, 45000, 30000),
(112, 'F-Block', '6-BED A/C', 6, 45000, 30000),
(113, 'F-Block', '2-BED Non A/C', 2, 40000, 30000),
(114, 'F-Block', '2-BED Non A/C', 2, 40000, 30000),
(115, 'F-Block', '4-BED Non A/C', 4, 35000, 30000),
(116, 'F-Block', '4-BED Non A/C', 4, 35000, 30000),
(117, 'F-Block', '4-BED Non A/C', 4, 35000, 30000),
(118, 'F-Block', '6-BED Non A/C', 6, 30000, 30000),
(119, 'F-Block', '6-BED Non A/C', 6, 30000, 30000),
(120, 'F-Block', '6-BED Non A/C', 6, 30000, 30000),
(121, 'G-Block', '1-BED A/C', 1, 65000, 30000),
(122, 'G-Block', '1-BED A/C', 1, 65000, 30000),
(123, 'G-Block', '2-BED A/C', 2, 60000, 30000),
(124, 'G-Block', '2-BED A/C', 2, 60000, 30000),
(125, 'G-Block', '3-BED A/C', 3, 55000, 30000),
(126, 'G-Block', '3-BED A/C', 3, 55000, 30000),
(127, 'G-Block', '4-BED A/C', 4, 50000, 30000),
(128, 'G-Block', '4-BED A/C', 4, 50000, 30000),
(129, 'G-Block', '4-BED A/C', 4, 50000, 30000),
(130, 'G-Block', '6-BED A/C', 6, 45000, 30000),
(131, 'G-Block', '6-BED A/C', 6, 45000, 30000),
(132, 'G-Block', '6-BED A/C', 6, 45000, 30000),
(133, 'G-Block', '2-BED Non A/C', 2, 40000, 30000),
(134, 'G-Block', '2-BED Non A/C', 2, 40000, 30000),
(135, 'G-Block', '4-BED Non A/C', 4, 35000, 30000),
(136, 'G-Block', '4-BED Non A/C', 4, 35000, 30000),
(137, 'G-Block', '4-BED Non A/C', 4, 35000, 30000),
(138, 'G-Block', '6-BED Non A/C', 6, 30000, 30000),
(139, 'G-Block', '6-BED Non A/C', 6, 30000, 30000),
(140, 'G-Block', '6-BED Non A/C', 6, 30000, 30000),
(141, 'G-Block', '1-BED A/C', 1, 65000, 30000),
(142, 'H-Block', '1-BED A/C', 1, 65000, 30000),
(143, 'H-Block', '2-BED A/C', 2, 60000, 30000),
(144, 'H-Block', '2-BED A/C', 2, 60000, 30000),
(145, 'H-Block', '3-BED A/C', 3, 55000, 30000),
(146, 'H-Block', '3-BED A/C', 3, 55000, 30000),
(147, 'H-Block', '4-BED A/C', 4, 50000, 30000),
(148, 'H-Block', '4-BED A/C', 4, 50000, 30000),
(149, 'H-Block', '4-BED A/C', 4, 50000, 30000),
(150, 'H-Block', '6-BED A/C', 6, 45000, 30000),
(151, 'H-Block', '6-BED A/C', 6, 45000, 30000),
(152, 'H-Block', '6-BED A/C', 6, 45000, 30000),
(153, 'H-Block', '2-BED Non A/C', 2, 40000, 30000),
(154, 'H-Block', '2-BED Non A/C', 2, 40000, 30000),
(155, 'H-Block', '4-BED Non A/C', 4, 35000, 30000),
(156, 'H-Block', '4-BED Non A/C', 4, 35000, 30000),
(157, 'H-Block', '4-BED Non A/C', 4, 35000, 30000),
(158, 'H-Block', '6-BED Non A/C', 6, 30000, 30000),
(159, 'H-Block', '6-BED Non A/C', 6, 30000, 30000),
(160, 'H-Block', '6-BED Non A/C', 6, 30000, 30000),
(161, 'I-Block', '1-BED A/C', 1, 65000, 30000),
(162, 'I-Block', '1-BED A/C', 1, 65000, 30000),
(163, 'I-Block', '2-BED A/C', 2, 60000, 30000),
(164, 'I-Block', '2-BED A/C', 2, 60000, 30000),
(165, 'I-Block', '3-BED A/C', 3, 55000, 30000),
(166, 'I-Block', '3-BED A/C', 3, 55000, 30000),
(167, 'I-Block', '4-BED A/C', 4, 50000, 30000),
(168, 'I-Block', '4-BED A/C', 4, 50000, 30000),
(169, 'I-Block', '4-BED A/C', 4, 50000, 30000),
(170, 'I-Block', '6-BED A/C', 6, 45000, 30000),
(171, 'I-Block', '6-BED A/C', 6, 45000, 30000),
(172, 'I-Block', '6-BED A/C', 6, 45000, 30000),
(173, 'I-Block', '2-BED Non A/C', 2, 40000, 30000),
(174, 'I-Block', '2-BED Non A/C', 2, 40000, 30000),
(175, 'I-Block', '4-BED Non A/C', 4, 35000, 30000),
(176, 'I-Block', '4-BED Non A/C', 4, 35000, 30000),
(177, 'I-Block', '4-BED Non A/C', 4, 35000, 30000),
(178, 'I-Block', '6-BED Non A/C', 6, 30000, 30000),
(179, 'I-Block', '6-BED Non A/C', 6, 30000, 30000),
(180, 'I-Block', '6-BED Non A/C', 6, 30000, 30000),
(181, 'J-Block', '1-BED A/C', 1, 65000, 30000),
(182, 'J-Block', '1-BED A/C', 1, 65000, 30000),
(183, 'J-Block', '2-BED A/C', 2, 60000, 30000),
(184, 'J-Block', '2-BED A/C', 2, 60000, 30000),
(185, 'J-Block', '3-BED A/C', 3, 55000, 30000),
(186, 'J-Block', '3-BED A/C', 3, 55000, 30000),
(187, 'J-Block', '4-BED A/C', 4, 50000, 30000),
(188, 'J-Block', '4-BED A/C', 4, 50000, 30000),
(189, 'J-Block', '4-BED A/C', 4, 50000, 30000),
(190, 'J-Block', '6-BED A/C', 6, 45000, 30000),
(191, 'J-Block', '6-BED A/C', 6, 45000, 30000),
(192, 'J-Block', '6-BED A/C', 6, 45000, 30000),
(193, 'J-Block', '2-BED Non A/C', 2, 40000, 30000),
(194, 'J-Block', '2-BED Non A/C', 2, 40000, 30000),
(195, 'J-Block', '4-BED Non A/C', 4, 35000, 30000),
(196, 'J-Block', '4-BED Non A/C', 4, 35000, 30000),
(197, 'J-Block', '4-BED Non A/C', 4, 35000, 30000),
(198, 'J-Block', '6-BED Non A/C', 6, 30000, 30000),
(199, 'J-Block', '6-BED Non A/C', 6, 30000, 30000),
(200, 'J-Block', '6-BED Non A/C', 6, 30000, 30000),
(201, 'K-Block', '1-BED A/C', 1, 65000, 30000),
(202, 'K-Block', '1-BED A/C', 1, 65000, 30000),
(203, 'K-Block', '2-BED A/C', 2, 60000, 30000),
(204, 'K-Block', '2-BED A/C', 2, 60000, 30000),
(205, 'K-Block', '3-BED A/C', 3, 55000, 30000),
(206, 'K-Block', '3-BED A/C', 3, 55000, 30000),
(207, 'K-Block', '4-BED A/C', 4, 50000, 30000),
(208, 'K-Block', '4-BED A/C', 4, 50000, 30000),
(209, 'K-Block', '4-BED A/C', 4, 50000, 30000),
(210, 'K-Block', '6-BED A/C', 6, 45000, 30000),
(211, 'K-Block', '6-BED A/C', 6, 45000, 30000),
(212, 'K-Block', '6-BED A/C', 6, 45000, 30000),
(213, 'K-Block', '2-BED Non A/C', 2, 40000, 30000),
(214, 'K-Block', '2-BED Non A/C', 2, 40000, 30000),
(215, 'K-Block', '4-BED Non A/C', 4, 35000, 30000),
(216, 'K-Block', '4-BED Non A/C', 4, 35000, 30000),
(217, 'K-Block', '4-BED Non A/C', 4, 35000, 30000),
(218, 'K-Block', '6-BED Non A/C', 6, 30000, 30000),
(219, 'K-Block', '6-BED Non A/C', 6, 30000, 30000),
(220, 'K-Block', '6-BED Non A/C', 6, 30000, 30000),
(221, 'L-Block', '1-BED A/C', 1, 65000, 30000),
(222, 'L-Block', '1-BED A/C', 1, 65000, 30000),
(223, 'L-Block', '2-BED A/C', 2, 60000, 30000),
(224, 'L-Block', '2-BED A/C', 2, 60000, 30000),
(225, 'L-Block', '3-BED A/C', 3, 55000, 30000),
(226, 'L-Block', '3-BED A/C', 3, 55000, 30000),
(227, 'L-Block', '4-BED A/C', 4, 50000, 30000),
(228, 'L-Block', '4-BED A/C', 4, 50000, 30000),
(229, 'L-Block', '4-BED A/C', 4, 50000, 30000),
(230, 'L-Block', '6-BED A/C', 6, 45000, 30000),
(231, 'L-Block', '6-BED A/C', 6, 45000, 30000),
(232, 'L-Block', '6-BED A/C', 6, 45000, 30000),
(233, 'L-Block', '2-BED Non A/C', 2, 40000, 30000),
(234, 'L-Block', '2-BED Non A/C', 2, 40000, 30000),
(235, 'L-Block', '4-BED Non A/C', 4, 35000, 30000),
(236, 'L-Block', '4-BED Non A/C', 4, 35000, 30000),
(237, 'L-Block', '4-BED Non A/C', 4, 35000, 30000),
(238, 'L-Block', '6-BED Non A/C', 6, 30000, 30000),
(239, 'L-Block', '6-BED Non A/C', 6, 30000, 30000),
(240, 'L-Block', '6-BED Non A/C', 6, 30000, 30000),
(241, 'M-Block', '1-BED A/C', 1, 65000, 30000),
(242, 'M-Block', '1-BED A/C', 1, 65000, 30000),
(243, 'M-Block', '2-BED A/C', 2, 60000, 30000),
(244, 'M-Block', '2-BED A/C', 2, 60000, 30000),
(245, 'M-Block', '3-BED A/C', 3, 55000, 30000),
(246, 'M-Block', '3-BED A/C', 3, 55000, 30000),
(247, 'M-Block', '4-BED A/C', 4, 50000, 30000),
(248, 'M-Block', '4-BED A/C', 4, 50000, 30000),
(249, 'M-Block', '4-BED A/C', 4, 50000, 30000),
(250, 'M-Block', '6-BED A/C', 6, 45000, 30000),
(251, 'M-Block', '6-BED A/C', 6, 45000, 30000),
(252, 'M-Block', '6-BED A/C', 6, 45000, 30000),
(253, 'M-Block', '2-BED Non A/C', 2, 40000, 30000),
(254, 'M-Block', '2-BED Non A/C', 2, 40000, 30000),
(255, 'M-Block', '4-BED Non A/C', 4, 35000, 30000),
(256, 'M-Block', '4-BED Non A/C', 4, 35000, 30000),
(257, 'M-Block', '4-BED Non A/C', 4, 35000, 30000),
(258, 'M-Block', '6-BED Non A/C', 6, 30000, 30000),
(259, 'M-Block', '6-BED Non A/C', 6, 30000, 30000),
(260, 'M-Block', '6-BED Non A/C', 6, 30000, 30000),
(261, 'N-Block', '1-BED A/C', 1, 65000, 30000),
(262, 'N-Block', '1-BED A/C', 1, 65000, 30000),
(263, 'N-Block', '2-BED A/C', 2, 60000, 30000),
(264, 'N-Block', '2-BED A/C', 2, 60000, 30000),
(265, 'N-Block', '3-BED A/C', 3, 55000, 30000),
(266, 'N-Block', '3-BED A/C', 3, 55000, 30000),
(267, 'N-Block', '4-BED A/C', 4, 50000, 30000),
(268, 'N-Block', '4-BED A/C', 4, 50000, 30000),
(269, 'N-Block', '4-BED A/C', 4, 50000, 30000),
(270, 'N-Block', '6-BED A/C', 6, 45000, 30000),
(271, 'N-Block', '6-BED A/C', 6, 45000, 30000),
(272, 'N-Block', '6-BED A/C', 6, 45000, 30000),
(273, 'N-Block', '2-BED Non A/C', 2, 40000, 30000),
(274, 'N-Block', '2-BED Non A/C', 2, 40000, 30000),
(275, 'N-Block', '4-BED Non A/C', 4, 35000, 30000),
(276, 'N-Block', '4-BED Non A/C', 4, 35000, 30000),
(277, 'N-Block', '4-BED Non A/C', 4, 35000, 30000),
(278, 'N-Block', '6-BED Non A/C', 6, 30000, 30000),
(279, 'N-Block', '6-BED Non A/C', 6, 30000, 30000),
(280, 'N-Block', '6-BED Non A/C', 6, 30000, 30000),
(281, 'O-Block', '1-BED A/C', 1, 65000, 30000),
(282, 'O-Block', '1-BED A/C', 1, 65000, 30000),
(283, 'O-Block', '2-BED A/C', 2, 60000, 30000),
(284, 'O-Block', '2-BED A/C', 2, 60000, 30000),
(285, 'O-Block', '3-BED A/C', 3, 55000, 30000),
(286, 'O-Block', '3-BED A/C', 3, 55000, 30000),
(287, 'O-Block', '4-BED A/C', 4, 50000, 30000),
(288, 'O-Block', '4-BED A/C', 4, 50000, 30000),
(289, 'O-Block', '4-BED A/C', 4, 50000, 30000),
(290, 'O-Block', '6-BED A/C', 6, 45000, 30000),
(291, 'O-Block', '6-BED A/C', 6, 45000, 30000),
(292, 'O-Block', '6-BED A/C', 6, 45000, 30000),
(293, 'O-Block', '2-BED Non A/C', 2, 40000, 30000),
(294, 'O-Block', '2-BED Non A/C', 2, 40000, 30000),
(295, 'O-Block', '4-BED Non A/C', 4, 35000, 30000),
(296, 'O-Block', '4-BED Non A/C', 4, 35000, 30000),
(297, 'O-Block', '4-BED Non A/C', 4, 35000, 30000),
(298, 'O-Block', '6-BED Non A/C', 6, 30000, 30000),
(299, 'O-Block', '6-BED Non A/C', 6, 30000, 30000),
(300, 'O-Block', '6-BED Non A/C', 6, 30000, 30000),
(301, 'P-Block', '1-BED A/C', 1, 65000, 30000),
(302, 'P-Block', '1-BED A/C', 1, 65000, 30000),
(303, 'P-Block', '2-BED A/C', 2, 60000, 30000),
(304, 'P-Block', '2-BED A/C', 2, 60000, 30000),
(305, 'P-Block', '3-BED A/C', 3, 55000, 30000),
(306, 'P-Block', '3-BED A/C', 3, 55000, 30000),
(307, 'P-Block', '4-BED A/C', 4, 50000, 30000),
(308, 'P-Block', '4-BED A/C', 4, 50000, 30000),
(309, 'P-Block', '4-BED A/C', 4, 50000, 30000),
(310, 'P-Block', '6-BED A/C', 6, 45000, 30000),
(311, 'P-Block', '6-BED A/C', 6, 45000, 30000),
(312, 'P-Block', '6-BED A/C', 6, 45000, 30000),
(313, 'P-Block', '2-BED Non A/C', 2, 40000, 30000),
(314, 'P-Block', '2-BED Non A/C', 2, 40000, 30000),
(315, 'P-Block', '4-BED Non A/C', 4, 35000, 30000),
(316, 'P-Block', '4-BED Non A/C', 4, 35000, 30000),
(317, 'P-Block', '4-BED Non A/C', 4, 35000, 30000),
(318, 'P-Block', '6-BED Non A/C', 6, 30000, 30000),
(319, 'P-Block', '6-BED Non A/C', 6, 30000, 30000),
(320, 'P-Block', '6-BED Non A/C', 6, 30000, 30000),
(321, 'Q-Block', '1-BED A/C', 1, 65000, 30000),
(322, 'Q-Block', '1-BED A/C', 1, 65000, 30000),
(323, 'Q-Block', '2-BED A/C', 2, 60000, 30000),
(324, 'Q-Block', '2-BED A/C', 2, 60000, 30000),
(325, 'Q-Block', '3-BED A/C', 3, 55000, 30000),
(326, 'Q-Block', '3-BED A/C', 3, 55000, 30000),
(327, 'Q-Block', '4-BED A/C', 4, 50000, 30000),
(328, 'Q-Block', '4-BED A/C', 4, 50000, 30000),
(329, 'Q-Block', '4-BED A/C', 4, 50000, 30000),
(330, 'Q-Block', '6-BED A/C', 6, 45000, 30000),
(331, 'Q-Block', '6-BED A/C', 6, 45000, 30000),
(332, 'Q-Block', '6-BED A/C', 6, 45000, 30000),
(333, 'Q-Block', '2-BED Non A/C', 2, 40000, 30000),
(334, 'Q-Block', '2-BED Non A/C', 2, 40000, 30000),
(335, 'Q-Block', '4-BED Non A/C', 4, 35000, 30000),
(336, 'Q-Block', '4-BED Non A/C', 4, 35000, 30000),
(337, 'Q-Block', '4-BED Non A/C', 4, 35000, 30000),
(338, 'Q-Block', '6-BED Non A/C', 6, 30000, 30000),
(339, 'Q-Block', '6-BED Non A/C', 6, 30000, 30000),
(340, 'Q-Block', '6-BED Non A/C', 6, 30000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `updateId` int(1) NOT NULL,
  `update1` varchar(40) NOT NULL,
  `update2` varchar(40) NOT NULL,
  `update3` varchar(40) NOT NULL,
  `update4` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`updateId`, `update1`, `update2`, `update3`, `update4`) VALUES
(1, 'afadf', 'afdagaefga', 'agragra', 'anfjsj');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_reg_id` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dept` varchar(40) NOT NULL,
  `degree` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_reg_id`, `email`, `password`, `dept`, `degree`) VALUES
('', '', '', 'default', ''),
('19BCE0560', 'aman@student.com', '123456', 'Computer Science and Engineering', 'B.Tech'),
('19BCE2087', 'piyush@student.com', 'piyush2001', 'Computer Science and Engineering', 'B.Tech');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `user_reg_id` varchar(10) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `guardianName` varchar(30) NOT NULL,
  `guardianRelation` varchar(30) NOT NULL,
  `guardianContact` varchar(10) NOT NULL,
  `roomNo` int(10) DEFAULT NULL,
  `block` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`user_reg_id`, `userName`, `phoneNumber`, `gender`, `address`, `guardianName`, `guardianRelation`, `guardianContact`, `roomNo`, `block`) VALUES
('19BCE0560', 'Aman Kumar', '9080754795', 'Male', 'C-202, Srininvasa Towers, Azeez Nagar, Reddiyarpalayam, Puducherry', 'Manoj Kumar', 'Father', '9500999028', 1, 'A-Block'),
('19BCE2087', 'Piyush Gupta', '9513874589', 'male', 'Surat, Gujarat', 'Raj Gupta', 'Father', '9876543210', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`blockName`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`regId`),
  ADD UNIQUE KEY `regNo` (`regNo`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_reg_id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`user_reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `regId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `roomId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
