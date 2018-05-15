-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2017 at 09:52 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `BookID` int(11) DEFAULT NULL,
  `BookName` varchar(30) DEFAULT NULL,
  `BookAuthor` varchar(30) DEFAULT NULL,
  `DatePublished` date DEFAULT NULL,
  `Quantity` int(5) DEFAULT NULL,
  `Remarks` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BookID`, `BookName`, `BookAuthor`, `DatePublished`, `Quantity`, `Remarks`) VALUES
(1, 'Pokemon Alpha Sapphire Guide', 'Von de Dote', '2017-01-09', 3, ''),
(2, 'The Pillow Brothers', 'Aaron Pillo', '2017-01-09', 10, 'Limited Edition');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `EmployeeID` int(11) DEFAULT NULL,
  `EmpLName` varchar(20) DEFAULT NULL,
  `EmpFName` varchar(30) DEFAULT NULL,
  `EmpMName` varchar(20) DEFAULT NULL,
  `Gender` varchar(7) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Age` int(3) DEFAULT NULL,
  `Position` varchar(40) DEFAULT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `Username` varchar(15) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `ApprovedBy` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EmployeeID`, `EmpLName`, `EmpFName`, `EmpMName`, `Gender`, `Birthday`, `Age`, `Position`, `Address`, `Username`, `Password`, `ApprovedBy`) VALUES
(1, 'admin', 'admin', 'admin', 'Male', '1998-05-03', 0, 'Librarian', 'admin', 'admin', 'admin', 'Creator'),
(2, 'Wong', 'Ada', 'dont', 'Female', '1994-02-08', 22, 'Library Clerk', 'Umbrella Coorps', 'wong', 'adawong', 'Creator'),
(3, 'Morales', 'Jhervy', 'Labrador', 'Male', '1999-05-22', 17, 'Library Clerk', 'Florida Pampanga''', 'jhervy', 'jhervy12', 'admin admin'),
(4, 'Ocampo', 'Mara Theresa', 'Morales', 'Female', '1993-02-04', 23, 'Teacher', '', 'Maraxdino', 'Maraxdino', 'admin admin');

-- --------------------------------------------------------

--
-- Table structure for table `loghistory`
--

CREATE TABLE IF NOT EXISTS `loghistory` (
  `HistoryId` int(11) NOT NULL AUTO_INCREMENT,
  `Employeeid` int(9) DEFAULT NULL,
  `Position` varchar(20) DEFAULT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `LogIn` datetime DEFAULT NULL,
  `LogOut` datetime DEFAULT NULL,
  PRIMARY KEY (`HistoryId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `loghistory`
--

INSERT INTO `loghistory` (`HistoryId`, `Employeeid`, `Position`, `Username`, `LogIn`, `LogOut`) VALUES
(1, 1, 'Librarian', 'admin', '2016-12-04 19:45:04', '2017-01-04 17:00:17'),
(2, 201600001, 'Student', 'vdedote', '2016-12-04 19:47:13', '2017-01-04 17:08:33'),
(3, 1, 'Librarian', 'admin', '2016-12-04 20:36:45', '2017-01-04 17:00:17'),
(4, 201600001, 'Student', 'vdedote', '2016-12-04 20:37:25', '2017-01-04 17:08:33'),
(5, 1, 'Librarian', 'admin', '2016-12-04 21:18:43', '2017-01-04 17:00:17'),
(6, 2, 'Library Clerk', 'wong', '2016-12-04 21:21:54', '2017-01-04 16:47:06'),
(7, 1, 'Librarian', 'admin', '2016-12-04 21:23:21', '2017-01-04 17:00:17'),
(8, 201600001, 'Student', 'vdedote', '2016-12-05 12:33:23', '2017-01-04 17:08:33'),
(9, 1, 'Librarian', 'admin', '2016-12-05 12:33:53', '2017-01-04 17:00:17'),
(10, 1, 'Librarian', 'admin', '2016-12-05 13:22:19', '2017-01-04 17:00:17'),
(11, 201600001, 'Student', 'vdedote', '2016-12-08 18:35:27', '2017-01-04 17:08:33'),
(12, 1, 'Librarian', 'admin', '2016-12-08 18:38:06', '2017-01-04 17:00:17'),
(13, 2, 'Library Clerk', 'wong', '2016-12-08 18:39:32', '2017-01-04 16:47:06'),
(14, 201600001, 'Student', 'vdedote', '2016-12-08 18:45:22', '2017-01-04 17:08:33'),
(15, 201600001, 'Student', 'vdedote', '2016-12-10 10:41:43', '2017-01-04 17:08:33'),
(16, 1, 'Librarian', 'admin', '2016-12-10 10:57:03', '2017-01-04 17:00:17'),
(17, 201600001, 'Student', 'vdedote', '2016-12-10 10:57:57', '2017-01-04 17:08:33'),
(18, 201600001, 'Student', 'vdedote', '2017-01-04 16:26:35', '2017-01-04 17:08:33'),
(19, 1, 'Librarian', 'admin', '2017-01-04 16:32:33', '2017-01-04 17:00:17'),
(20, 201600001, 'Student', 'vdedote', '2017-01-04 16:41:23', '2017-01-04 17:08:33'),
(21, 2, 'Library Clerk', 'wong', '2017-01-04 16:44:46', '2017-01-04 16:47:06'),
(22, 1, 'Librarian', 'admin', '2017-01-04 16:47:16', '2017-01-04 17:00:17'),
(23, 201600001, 'Student', 'vdedote', '2017-01-04 16:51:44', '2017-01-04 17:08:33'),
(24, 1, 'Librarian', 'admin', '2017-01-04 16:51:51', '2017-01-04 17:00:17'),
(25, 201600001, 'Student', 'vdedote', '2017-01-04 17:00:29', '2017-01-04 17:08:33'),
(26, 201600001, 'Student', 'vdedote', '2017-01-04 17:08:21', '2017-01-04 17:08:33'),
(27, 201600001, 'Student', 'vdedote', '2017-01-04 17:10:18', '2017-01-04 17:10:41'),
(28, 1, 'Librarian', 'admin', '2017-01-04 17:13:51', '2017-01-04 17:15:43'),
(29, 201600004, 'Student', 'ivanlapid1', '2017-01-04 17:15:59', '2017-01-04 17:20:50'),
(30, 2, 'Library Clerk', 'wong', '2017-01-04 17:21:20', '2017-01-04 17:21:22'),
(31, 1, 'Librarian', 'admin', '2017-01-04 17:23:28', '2017-01-04 17:26:39'),
(32, 201600005, 'Student', 'maramorales12', '2017-01-04 17:26:50', '2017-01-04 17:26:56'),
(33, 1, 'Librarian', 'admin', '2017-01-04 17:30:47', '2017-01-04 17:41:53'),
(34, 3, 'Library Clerk', 'jhervy', '2017-01-04 17:42:02', '2017-01-04 17:46:54'),
(35, 201600001, 'Student', 'vdedote', '2017-01-07 09:10:42', '2017-01-07 09:15:03'),
(36, 1, 'Librarian', 'admin', '2017-01-07 09:17:41', '2017-01-11 17:43:15'),
(37, 1, 'Librarian', 'admin', '2017-01-09 16:24:04', '2017-01-11 17:43:15'),
(38, 1, 'Librarian', 'admin', '2017-01-11 16:25:42', '2017-01-11 17:43:15'),
(39, 2, 'Library Clerk', 'wong', '2017-01-11 17:43:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `studentprofiles`
--

CREATE TABLE IF NOT EXISTS `studentprofiles` (
  `ID` int(11) DEFAULT NULL,
  `LasttName` varchar(20) DEFAULT NULL,
  `FirstName` varchar(30) DEFAULT NULL,
  `MiddleName` varchar(20) DEFAULT NULL,
  `Course` varchar(50) DEFAULT NULL,
  `Year` varchar(20) DEFAULT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `DateIssued` date DEFAULT NULL,
  `ValidUpTp` date DEFAULT NULL,
  `Username` varchar(15) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Creator` varchar(30) NOT NULL,
  `Position` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentprofiles`
--

INSERT INTO `studentprofiles` (`ID`, `LasttName`, `FirstName`, `MiddleName`, `Course`, `Year`, `Address`, `DateIssued`, `ValidUpTp`, `Username`, `Password`, `Creator`, `Position`) VALUES
(201600001, 'de Dote', 'Gwendel Von', 'Capa', 'BS Computer Science', 'Second Year', 'San Roque Dau, 1st Lubao, Pampanga', '2016-11-27', '2016-01-10', 'vdedote', '211431', 'Creator', 'Student'),
(201600002, 'Zapanta Iv', 'Agustin', 'Alfonso', 'BS Computer Science', 'Second Year', 'Sta. Filomena, Guagua, Pampanga', '2016-11-28', '2016-11-30', 'Bongbong699', 'Daddylovesyou67', '', 'Student'),
(201600003, 'de Dote', 'Danil Felippe', 'Capa', 'BS Computer Engineeriing', 'First Year', 'San Roque Dau, 1st Lubao, Pampanga', '2016-11-29', '2017-01-02', 'danil', 'danil', 'Ada Wong', 'Student'),
(201600004, 'Lapid', 'Ivan', 'Aquino', 'BS Computer Science', 'Second Year', 'LM Subdivision Guagua Pampanga', '2017-01-04', '0000-00-00', 'ivanlapid1', 'lapidivan1', 'admin admin', 'Student'),
(201600005, 'Morales', 'Mara Theresa', 'Guiao', 'BS Computer Science', 'Second Year', 'San Agustin Betis Guagua, Pampanga', '2017-01-04', '0000-00-00', 'maramorales12', 'maramorales12', 'admin admin', 'Student'),
(201600006, 'Morales', 'Jhervy Chester', 'Labrador', 'BS Computer Science', 'Second Year', 'Mabical ', '2017-01-09', '2017-01-17', 'Jhervy', 'Jherv', 'admin admin', 'Student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
