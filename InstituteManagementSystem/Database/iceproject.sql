-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 02:23 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iceproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `ID` int(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`ID`, `Email`, `Password`) VALUES
(1, 'adminanshu@gmail.com', 'sharma525'),
(3, 'adminmayank@gmail.com', 'mayank525');

-- --------------------------------------------------------

--
-- Table structure for table `adminupload`
--

CREATE TABLE `adminupload` (
  `ID` int(11) NOT NULL,
  `File Name` varchar(25) NOT NULL,
  `File Type` varchar(25) NOT NULL,
  `File Size` int(25) NOT NULL,
  `Date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminupload`
--

INSERT INTO `adminupload` (`ID`, `File Name`, `File Type`, `File Size`, `Date`) VALUES
(6, '', 'application/vnd.openxmlfo', 595113, '2018-04-04'),
(7, 'Application.docx', 'application/vnd.openxmlfo', 595113, '2018-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `alevelsem1`
--

CREATE TABLE `alevelsem1` (
  `ID` int(11) NOT NULL,
  `Roll` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Sub1` varchar(30) NOT NULL,
  `Sub2` varchar(30) NOT NULL,
  `Sub3` varchar(30) NOT NULL,
  `Sub4` varchar(30) NOT NULL,
  `Sub5` varchar(30) NOT NULL,
  `Sub6` varchar(30) NOT NULL,
  `Marks1` int(11) NOT NULL,
  `Marks2` int(11) NOT NULL,
  `Marks3` int(11) NOT NULL,
  `Marks4` int(11) NOT NULL,
  `Marks5` int(11) NOT NULL,
  `Marks6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alevelsem1`
--

INSERT INTO `alevelsem1` (`ID`, `Roll`, `Name`, `Sub1`, `Sub2`, `Sub3`, `Sub4`, `Sub5`, `Sub6`, `Marks1`, `Marks2`, `Marks3`, `Marks4`, `Marks5`, `Marks6`) VALUES
(1, '1', 'Anshu', 'IT Tools and Business System', 'C Programming', 'Internet and Web Designing', 'DBMS', 'Account', 'Mini  Project', 80, 85, 75, 75, 85, 75);

-- --------------------------------------------------------

--
-- Table structure for table `alevelsem2`
--

CREATE TABLE `alevelsem2` (
  `ID` int(11) NOT NULL,
  `Roll` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Sub1` varchar(30) NOT NULL,
  `Sub2` varchar(30) NOT NULL,
  `Sub3` varchar(30) NOT NULL,
  `Sub4` varchar(30) NOT NULL,
  `Sub5` varchar(30) NOT NULL,
  `Sub6` varchar(30) NOT NULL,
  `Marks1` int(11) NOT NULL,
  `Marks2` int(11) NOT NULL,
  `Marks3` int(11) NOT NULL,
  `Marks4` int(11) NOT NULL,
  `Marks5` int(11) NOT NULL,
  `Marks6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `ID` int(11) NOT NULL,
  `Course` varchar(25) NOT NULL,
  `Roll` int(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Subject` varchar(40) NOT NULL,
  `date` varchar(12) NOT NULL,
  `Attendence` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`ID`, `Course`, `Roll`, `Name`, `Subject`, `date`, `Attendence`) VALUES
(1, 'BCA', 101, 'Anshu Sharma', 'Mathematics', '2018-04-18', 'P'),
(2, 'A Level', 1000, 'Rahul Sharma', 'C language', '2018-04-11', 'P'),
(3, 'BCA', 101, 'Anshu Sharma', 'C Language', '2018-04-12', 'P'),
(4, 'BCA', 101, 'Anshu Sharma', 'Mathematics', '2018-04-12', 'A'),
(5, 'BCA', 101, '', '', '', ''),
(6, 'A Level', 1000, 'Rahul Sharma', 'C language', '2018-04-11', 'P'),
(7, 'BCA', 1, 'Anshu Sharma', 'Mathematics', '2018-04-17', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `bcasem1`
--

CREATE TABLE `bcasem1` (
  `ID` int(11) NOT NULL,
  `Roll` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Sub1` varchar(30) NOT NULL,
  `Sub2` varchar(30) NOT NULL,
  `Sub3` varchar(30) NOT NULL,
  `Sub4` varchar(30) NOT NULL,
  `Sub5` varchar(30) NOT NULL,
  `Sub6` varchar(30) NOT NULL,
  `Sub7` varchar(30) NOT NULL,
  `Sub8` varchar(30) NOT NULL,
  `Marks1` int(11) NOT NULL,
  `Marks2` int(11) NOT NULL,
  `Marks3` int(11) NOT NULL,
  `Marks4` int(11) NOT NULL,
  `Marks5` int(11) NOT NULL,
  `Marks6` int(11) NOT NULL,
  `Marks7` int(11) NOT NULL,
  `Marks8` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bcasem1`
--

INSERT INTO `bcasem1` (`ID`, `Roll`, `Name`, `Sub1`, `Sub2`, `Sub3`, `Sub4`, `Sub5`, `Sub6`, `Sub7`, `Sub8`, `Marks1`, `Marks2`, `Marks3`, `Marks4`, `Marks5`, `Marks6`, `Marks7`, `Marks8`) VALUES
(5, 12, 'Anshu', 'IT Tools and Business System', 'C Programming', 'Internet and Web Designing', 'DBMS', 'Account', 'Data Structure through C Lab', 'Computer Organization Lab', 'Prof. Comunication Lab', 80, 85, 75, 75, 85, 75, 85, 85);

-- --------------------------------------------------------

--
-- Table structure for table `bcasem2`
--

CREATE TABLE `bcasem2` (
  `ID` int(11) NOT NULL,
  `Roll` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Sub1` varchar(30) NOT NULL,
  `Sub2` varchar(30) NOT NULL,
  `Sub3` varchar(30) NOT NULL,
  `Sub4` varchar(30) NOT NULL,
  `Sub5` varchar(30) NOT NULL,
  `Sub6` varchar(30) NOT NULL,
  `Sub7` varchar(30) NOT NULL,
  `Sub8` varchar(30) NOT NULL,
  `Marks1` int(11) NOT NULL,
  `Marks2` int(11) NOT NULL,
  `Marks3` int(11) NOT NULL,
  `Marks4` int(11) NOT NULL,
  `Marks5` int(11) NOT NULL,
  `Marks6` int(11) NOT NULL,
  `Marks7` int(11) NOT NULL,
  `Marks8` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bcasem3`
--

CREATE TABLE `bcasem3` (
  `ID` int(11) NOT NULL,
  `Roll` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Sub1` varchar(30) NOT NULL,
  `Sub2` varchar(30) NOT NULL,
  `Sub3` varchar(30) NOT NULL,
  `Sub4` varchar(30) NOT NULL,
  `Sub5` varchar(30) NOT NULL,
  `Sub6` varchar(30) NOT NULL,
  `Sub7` varchar(30) NOT NULL,
  `Sub8` varchar(30) NOT NULL,
  `Marks1` int(11) NOT NULL,
  `Marks2` int(11) NOT NULL,
  `Marks3` int(11) NOT NULL,
  `Marks4` int(11) NOT NULL,
  `Marks5` int(11) NOT NULL,
  `Marks6` int(11) NOT NULL,
  `Marks7` int(11) NOT NULL,
  `Marks8` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bcasem4`
--

CREATE TABLE `bcasem4` (
  `ID` int(11) NOT NULL,
  `Roll` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Sub1` varchar(30) NOT NULL,
  `Sub2` varchar(30) NOT NULL,
  `Sub3` varchar(30) NOT NULL,
  `Sub4` varchar(30) NOT NULL,
  `Sub5` varchar(30) NOT NULL,
  `Sub6` varchar(30) NOT NULL,
  `Sub7` varchar(30) NOT NULL,
  `Sub8` varchar(30) NOT NULL,
  `Marks1` int(11) NOT NULL,
  `Marks2` int(11) NOT NULL,
  `Marks3` int(11) NOT NULL,
  `Marks4` int(11) NOT NULL,
  `Marks5` int(11) NOT NULL,
  `Marks6` int(11) NOT NULL,
  `Marks7` int(11) NOT NULL,
  `Marks8` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bcasem5`
--

CREATE TABLE `bcasem5` (
  `ID` int(11) NOT NULL,
  `Roll` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Sub1` varchar(30) NOT NULL,
  `Sub2` varchar(30) NOT NULL,
  `Sub3` varchar(30) NOT NULL,
  `Sub4` varchar(30) NOT NULL,
  `Sub5` varchar(30) NOT NULL,
  `Sub6` varchar(30) NOT NULL,
  `Sub7` varchar(30) NOT NULL,
  `Sub8` varchar(30) NOT NULL,
  `Marks1` int(11) NOT NULL,
  `Marks2` int(11) NOT NULL,
  `Marks3` int(11) NOT NULL,
  `Marks4` int(11) NOT NULL,
  `Marks5` int(11) NOT NULL,
  `Marks6` int(11) NOT NULL,
  `Marks7` int(11) NOT NULL,
  `Marks8` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bcasem6`
--

CREATE TABLE `bcasem6` (
  `ID` int(11) NOT NULL,
  `Roll` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Sub1` varchar(30) NOT NULL,
  `Sub2` varchar(30) NOT NULL,
  `Sub3` varchar(30) NOT NULL,
  `Sub4` varchar(30) NOT NULL,
  `Sub5` varchar(30) NOT NULL,
  `Sub6` varchar(30) NOT NULL,
  `Sub7` varchar(30) NOT NULL,
  `Marks1` int(11) NOT NULL,
  `Marks2` int(11) NOT NULL,
  `Marks3` int(11) NOT NULL,
  `Marks4` int(11) NOT NULL,
  `Marks5` int(11) NOT NULL,
  `Marks6` int(11) NOT NULL,
  `Marks7` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classschedule`
--

CREATE TABLE `classschedule` (
  `ID` int(11) NOT NULL,
  `Session` varchar(20) NOT NULL,
  `Course` varchar(25) NOT NULL,
  `Subject` varchar(25) NOT NULL,
  `Teacher` varchar(25) NOT NULL,
  `Time` varchar(25) NOT NULL,
  `Days` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classschedule`
--

INSERT INTO `classschedule` (`ID`, `Session`, `Course`, `Subject`, `Teacher`, `Time`, `Days`) VALUES
(1, '', 'BCA', 'Mathematics', 'R K Sharma', '7:30 to ', ''),
(2, '', 'BCA', 'Mathematics', 'R K Sharma', '7:30 to ', ''),
(3, '', 'A Level', 'Unix and Shell Programmin', 'Sandeep', '9:30 to ', ''),
(4, '', 'O Level', 'C', 'Manpreet', '9:30 to 11:30', ''),
(5, '', 'BCA', '', '', '', ''),
(6, '', 'BCA', 'C', 'Manpreet', '7:30 to 9:30', 'Mon,Tue,Wed,'),
(7, '2018-19', 'PHP with MYSQL', 'PHP with MYSQL', 'Anshu Sharma', '9:30 to 11:30', 'Tue,Wed,Thu,'),
(8, '2018-19', 'Web Designing', 'web designing', 'R K Sharma', '7:30 to 9:30', 'Mon,Tue,'),
(9, '2018-19', 'BCA', 'C', 'Manpreet', '940', ''),
(10, '2018-19', 'BCA', 'C', 'Manpreet', '940', 'Mon,Tue,Wed,'),
(11, '2018-19', 'BCA', 'C', 'Manpreet', '940', 'Mon,Tue,Wed,'),
(12, '2018-19', 'BCA', 'Mathematics', 'R K Sharma', '7:30 to 9:30', 'Tue,Wed,Thu,');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact` bigint(12) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `Contact`, `Message`) VALUES
(1, 'Anshu', 'anhucoc65@gemail.com', 8604939407, 'hhhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `enquerytable`
--

CREATE TABLE `enquerytable` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Date` varchar(11) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquerytable`
--

INSERT INTO `enquerytable` (`ID`, `Name`, `Email`, `Contact`, `Date`, `Message`) VALUES
(1, 'tanu singh', '', '693254187', '0012-12-12', 'i want to query about php and its fees.'),
(2, 'saida', 'saida@gmail.com', '0522 4037562', '2018-04-09', 'want to know about fees'),
(3, 'CCC', 'anhucoc65@gemail.com', '8604939407', '2018-05-16', 'adfvasdfvvasddfv');

-- --------------------------------------------------------

--
-- Table structure for table `formalcourse`
--

CREATE TABLE `formalcourse` (
  `ID` int(11) NOT NULL,
  `Name` varchar(12) NOT NULL,
  `Fee` int(8) NOT NULL,
  `Security` int(8) NOT NULL,
  `Total` varchar(11) NOT NULL,
  `Duration` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formalcourse`
--

INSERT INTO `formalcourse` (`ID`, `Name`, `Fee`, `Security`, `Total`, `Duration`) VALUES
(4, 'BCA', 139027, 5000, '', ' 3 years'),
(5, '', 0, 0, '', ''),
(6, 'MCA', 107000, 5000, '', '3');

-- --------------------------------------------------------

--
-- Table structure for table `nonformalcourse`
--

CREATE TABLE `nonformalcourse` (
  `ID` int(11) NOT NULL,
  `Name` varchar(12) DEFAULT NULL,
  `Fee` varchar(8) DEFAULT NULL,
  `Security` varchar(8) DEFAULT NULL,
  `Duration` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nonformalcourse`
--

INSERT INTO `nonformalcourse` (`ID`, `Name`, `Fee`, `Security`, `Duration`) VALUES
(7, 'A Level', '45000', '5000', '1 Year'),
(8, 'O Level', '25200', '5000', '1 Year'),
(9, 'B Level', '107000', '5000', '3');

-- --------------------------------------------------------

--
-- Table structure for table `olevelsem1`
--

CREATE TABLE `olevelsem1` (
  `ID` int(11) NOT NULL,
  `Roll` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Sub1` varchar(35) NOT NULL,
  `Sub2` varchar(35) NOT NULL,
  `Sub3` varchar(35) NOT NULL,
  `Marks1` int(11) NOT NULL,
  `Marks2` int(11) NOT NULL,
  `Marks3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `olevelsem1`
--

INSERT INTO `olevelsem1` (`ID`, `Roll`, `Name`, `Sub1`, `Sub2`, `Sub3`, `Marks1`, `Marks2`, `Marks3`) VALUES
(1, '1000', 'Anshu', 'IT Tools and Business System', 'C Programming', 'Internet and Web Designing', 80, 85, 75);

-- --------------------------------------------------------

--
-- Table structure for table `olevelsem2`
--

CREATE TABLE `olevelsem2` (
  `ID` int(11) NOT NULL,
  `Roll` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Sub1` varchar(35) NOT NULL,
  `Sub2` varchar(35) NOT NULL,
  `Sub3` varchar(35) NOT NULL,
  `Marks1` int(11) NOT NULL,
  `Marks2` int(11) NOT NULL,
  `Marks3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registertable`
--

CREATE TABLE `registertable` (
  `ID` int(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registertable`
--

INSERT INTO `registertable` (`ID`, `Email`, `Password`) VALUES
(2, 'loginforhome@gmail.com', 'ICE123@');

-- --------------------------------------------------------

--
-- Table structure for table `shorttermcourse`
--

CREATE TABLE `shorttermcourse` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Fees` varchar(8) DEFAULT NULL,
  `Security` varchar(10) NOT NULL,
  `Total` int(11) NOT NULL,
  `Duration` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shorttermcourse`
--

INSERT INTO `shorttermcourse` (`ID`, `Name`, `Fees`, `Security`, `Total`, `Duration`) VALUES
(13, 'PHP with MYSQL', '6000', '1000', 7000, '45 days'),
(14, 'ASP.NET With C#', '6000', '1000', 7000, '45 days'),
(15, 'Web Designing', '6000', '1000', 7000, '45 days'),
(16, 'C ', '6000', '1000', 7000, '45 days'),
(17, 'C++', '7000', '1000', 8000, '45 days'),
(18, 'Java', '10000', '1000', 11000, '3 months'),
(19, 'Python', '8000', '1000', 9000, '45 days'),
(20, 'Hardware', '16000', '3000', 19000, '6 Months'),
(21, 'Networking', '24000', '4000', 28000, '1 Year'),
(22, 'Summer Training', '6000', '1000', 0, '45');

-- --------------------------------------------------------

--
-- Table structure for table `shstudentfrom`
--

CREATE TABLE `shstudentfrom` (
  `ID` int(11) NOT NULL,
  `Date` varchar(25) NOT NULL,
  `Course` varchar(25) NOT NULL,
  `First Name` varchar(25) NOT NULL,
  `Last Name` varchar(25) NOT NULL,
  `DOB` varchar(25) NOT NULL,
  `Gender` varchar(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Father Name` varchar(25) NOT NULL,
  `Father Contact` bigint(10) NOT NULL,
  `I Stream` varchar(25) NOT NULL,
  `I Board` varchar(25) NOT NULL,
  `I Year` int(8) NOT NULL,
  `I Percentage` int(8) NOT NULL,
  `H Stream` varchar(25) NOT NULL,
  `H Board` varchar(25) NOT NULL,
  `H Year` int(8) NOT NULL,
  `H Percentage` int(8) NOT NULL,
  `Short Student Adhar` varchar(25) NOT NULL,
  `Short Student Image` varchar(25) NOT NULL,
  `Fees` int(11) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shstudentfrom`
--

INSERT INTO `shstudentfrom` (`ID`, `Date`, `Course`, `First Name`, `Last Name`, `DOB`, `Gender`, `Email`, `Contact`, `Address`, `Father Name`, `Father Contact`, `I Stream`, `I Board`, `I Year`, `I Percentage`, `H Stream`, `H Board`, `H Year`, `H Percentage`, `Short Student Adhar`, `Short Student Image`, `Fees`, `Password`) VALUES
(1002, '2018-04-11', 'PHP with MYSQL', 'Anshu', 'sharma', '2018-04-26', 'Male', 'mynewmail@gmail.com', 8604939407, 'Lucknow 123', 'V K Sharma', 9336417072, 'MCA', 'Ramswaroop', 2009, 81, 'BCA', 'Integral', 2014, 81, 'Admin.png', 'Admin.png', 0, 'lo53hd'),
(1003, '2018-04-11', 'PHP with MYSQL', 'Anshu', 'sharma', '2018-04-26', 'Male', 'mynewmail@gmail.com', 8604939407, 'Lucknow 123', 'V K Sharma', 9336417072, 'MCA', 'Ramswaroop', 2009, 81, 'BCA', 'Integral', 2014, 81, 'Admin.png', 'Admin.png', 0, 'lo53hd'),
(1004, '2018-04-12', 'Web Designing', 'Soonu', 'sharma', '2018-04-18', 'Male', 'soonu@gmail.com', 8604939407, 'Lucknow', 'sunnn', 9336417072, 'MCA', 'Ramswaroop', 2015, 81, 'BCA', 'Integral', 2013, 81, 'Admin.png', 'Admin.png', 12000, 'Vq38La'),
(1005, '2018-04-04', 'A Level', 'Anshu', 'sharma', '2018-04-27', 'Male', 'Anshu@gmail.com', 8604939407, 'Lucknow', 'manu', 9336417072, 'Commerce', 'UPBoard', 2009, 81, 'Commerce', 'Integral', 2009, 81, 'Admin.png', 'Admin.png', 50000, 'dwfsli');

-- --------------------------------------------------------

--
-- Table structure for table `shstudentregister`
--

CREATE TABLE `shstudentregister` (
  `ID` int(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shstudentregister`
--

INSERT INTO `shstudentregister` (`ID`, `Email`, `Password`) VALUES
(5, 'anshucoc65@gmail.com', 'Anshu123');

-- --------------------------------------------------------

--
-- Table structure for table `shsubmitfees`
--

CREATE TABLE `shsubmitfees` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Course` varchar(25) NOT NULL,
  `Fees` varchar(25) NOT NULL,
  `Date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shsubmitfees`
--

INSERT INTO `shsubmitfees` (`ID`, `Name`, `Course`, `Fees`, `Date`) VALUES
(1, 'Rahul', 'PHP with MYSQL', '12000', '2018-03-30'),
(2, 'Anshu', 'PHP with MYSQL', '12000', '2018-03-28'),
(3, 'Anshu', 'PHP with MYSQL', '12000', '2018-03-22'),
(4, 'Anshu', '', '12000', '2018-03-29'),
(5, 'Mayank', '', '12000', '2018-03-21'),
(6, 'Roshni Sharma', 'Web Designing (HTML, CSS,', '50000', '2018-03-23'),
(7, 'Anshu', 'PHP with MYSQL', '50000', '2018-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `studentupload`
--

CREATE TABLE `studentupload` (
  `ID` int(11) NOT NULL,
  `Course` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Roll` int(11) NOT NULL,
  `Date` varchar(25) NOT NULL,
  `File` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacherform`
--

CREATE TABLE `teacherform` (
  `ID` int(11) NOT NULL,
  `Date` varchar(12) NOT NULL,
  `First Name` varchar(25) NOT NULL,
  `Last Name` varchar(25) NOT NULL,
  `Gender` varchar(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `M Stream` varchar(25) NOT NULL,
  `M University` varchar(25) NOT NULL,
  `M Year` int(8) NOT NULL,
  `M Percentage` int(8) NOT NULL,
  `B Stream` varchar(25) NOT NULL,
  `B University` varchar(25) NOT NULL,
  `B Year` int(8) NOT NULL,
  `B Percentage` int(8) NOT NULL,
  `Specilization` varchar(25) NOT NULL,
  `Adhar` varchar(25) NOT NULL,
  `Image` varchar(25) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherform`
--

INSERT INTO `teacherform` (`ID`, `Date`, `First Name`, `Last Name`, `Gender`, `Email`, `Contact`, `Address`, `M Stream`, `M University`, `M Year`, `M Percentage`, `B Stream`, `B University`, `B Year`, `B Percentage`, `Specilization`, `Adhar`, `Image`, `Salary`, `Password`) VALUES
(126, '2019-11-25', 'Anshu', 'Sharma', 'Male', 'anshusharma1298@gmail.com', 7007976332, 'LKO', 'MCA', 'SRMU', 2011, 81, 'BCA', 'Integral', 2008, 81, '', 'Admin.png', 'Admin.png', 12000, 'Vn85WE'),
(127, '2019-11-26', 'Anshu', 'Sharma', 'Male', 'anshucoc65@gmail.com', 7007976332, 'LKO', 'MCA', 'SRMU', 2020, 81, 'BCA', 'Integral', 2018, 81, '', 'Admin.png', 'Admin.png', 12000, 'Anshu123@');

-- --------------------------------------------------------

--
-- Table structure for table `teacherregister`
--

CREATE TABLE `teacherregister` (
  `ID` int(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teachersalary`
--

CREATE TABLE `teachersalary` (
  `ID` int(11) NOT NULL,
  `First Name` varchar(25) NOT NULL,
  `Last Name` varchar(25) NOT NULL,
  `Post` varchar(25) NOT NULL,
  `Salary` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachersalary`
--

INSERT INTO `teachersalary` (`ID`, `First Name`, `Last Name`, `Post`, `Salary`) VALUES
(4, 'Anshu', 'sharma', 'Teacher', '15000'),
(5, 'Anshu', 'sharma', 'Teacher', '12000'),
(6, 'Anshu', 'sharma', 'Teacher', '15000'),
(7, 'Anshu', 'sharma', 'Teacher', '250000'),
(8, 'Anshu', 'sharma', 'Teacher', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `teacheruploadclassass`
--

CREATE TABLE `teacheruploadclassass` (
  `ID` int(11) NOT NULL,
  `Course` varchar(25) NOT NULL,
  `Teacher` varchar(25) NOT NULL,
  `Subject` varchar(25) NOT NULL,
  `Assignment` varchar(100) NOT NULL,
  `Date` varchar(12) NOT NULL,
  `Completion Date` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacheruploadclassass`
--

INSERT INTO `teacheruploadclassass` (`ID`, `Course`, `Teacher`, `Subject`, `Assignment`, `Date`, `Completion Date`) VALUES
(1, 'BCA', 'Sandeep', 'Unix', 'Complete Remaining Portion of Array', '2018-03-20', ''),
(2, 'BCA', 'Anshu', 'Unix', 'Complete Excercise 2.4', '2018-03-28', ''),
(3, 'A level', 'Anshu', 'Unix', 'Array', '12/12/12', '12/12/12'),
(4, 'A Level', 'Rahul', 'Mathematics', 'Complete Remaining Portion of Array', '2018-03-27', '2018-03-29'),
(5, 'BCA', 'Anshu', 'C', 'Complete Remaining Portion of Array', '2018-03-28', '2018-03-29'),
(6, 'Java', 'Sandeep', 'java', 'Complete Remaining Portion of Array', '2018-03-28', '2018-03-29'),
(7, 'BCA', 'Rahul', 'Unix', 'Complete Remaining Portion of Array', '2018-04-18', '2018-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `teacheruploadnotice`
--

CREATE TABLE `teacheruploadnotice` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Date` varchar(25) NOT NULL,
  `File Name` varchar(25) NOT NULL,
  `File Type` varchar(25) NOT NULL,
  `File Size` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacheruploadnotice`
--

INSERT INTO `teacheruploadnotice` (`ID`, `Name`, `Date`, `File Name`, `File Type`, `File Size`) VALUES
(1, '', '', 'MINI project.docx', '797502', 0),
(2, '', '', 'Project Synopsis.docx', 'application/vnd.openxmlfo', 53700),
(3, 'Anshu', '', 'Project Synopsis.docx', 'application/vnd.openxmlfo', 53700),
(4, 'Anshu', '2018-02-27', 'Project Synopsis.docx', 'application/vnd.openxmlfo', 53700),
(5, 'Anshu', '2018-03-01', 'Basic of E Commerce.docx', 'application/vnd.openxmlfo', 98769),
(6, 'Anshu', '2018-03-01', 'Lighthouse.jpg', 'image/jpeg', 561276),
(7, 'Anshu', '2018-03-06', 'Basic of E Commerce.docx', 'application/vnd.openxmlfo', 98769),
(8, 'Anshu sharma', '2018-04-18', 'Application.docx', 'application/vnd.openxmlfo', 595113);

-- --------------------------------------------------------

--
-- Table structure for table `ugstudentform`
--

CREATE TABLE `ugstudentform` (
  `ID` int(11) NOT NULL,
  `Date` varchar(25) NOT NULL,
  `Course` varchar(25) NOT NULL,
  `First Name` varchar(25) NOT NULL,
  `Last Name` varchar(25) NOT NULL,
  `DOB` varchar(25) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Contact` bigint(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Father Name` varchar(25) NOT NULL,
  `Father Contact` bigint(10) NOT NULL,
  `I Stream` varchar(25) NOT NULL,
  `I Board` varchar(25) NOT NULL,
  `I Year` int(8) NOT NULL,
  `I Percentage` int(8) NOT NULL,
  `H Stream` varchar(25) NOT NULL,
  `H Board` varchar(25) NOT NULL,
  `H Year` int(8) NOT NULL,
  `H Percentage` int(8) NOT NULL,
  `UG Student Adhar` varchar(25) NOT NULL,
  `UG Student Image` varchar(25) NOT NULL,
  `Fees` int(11) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugstudentform`
--

INSERT INTO `ugstudentform` (`ID`, `Date`, `Course`, `First Name`, `Last Name`, `DOB`, `Gender`, `Email`, `Contact`, `Address`, `Father Name`, `Father Contact`, `I Stream`, `I Board`, `I Year`, `I Percentage`, `H Stream`, `H Board`, `H Year`, `H Percentage`, `UG Student Adhar`, `UG Student Image`, `Fees`, `Password`) VALUES
(133, '2018-04-05', 'BCA', 'Anshu', 'sharma', '2018-04-15', 'Male', 'anshucoc65@gmail.com', 8604939407, 'Lucknow', 'manu', 9336417072, 'science', 'Ramswaroop', 2006, 81, 'Commerce', 'UP Board', 2007, 81, 'Admin.png', 'Admin.png', 12000, 'Anshu123'),
(134, '2018-04-04', 'BCA', 'Anshu', 'sharma', '2018-04-18', 'Male', 'vk12@gmail.com', 8604939407, 'Lucknow', 'V K Sharma', 9336417072, 'Commerce', 'Ramswaroop', 2008, 81, 'BCA', 'Integral', 2009, 81, 'Admin.png', 'Admin.png', 12000, 'dwfsli');

-- --------------------------------------------------------

--
-- Table structure for table `ugstudentregister`
--

CREATE TABLE `ugstudentregister` (
  `ID` int(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugstudentregister`
--

INSERT INTO `ugstudentregister` (`ID`, `Email`, `Password`) VALUES
(1, 'anhucoc65@gemail.com', 'asas'),
(2, 'anshucoc65@gmail.com', 'sandeep123'),
(3, 'anshucoc65@gmail.com', 'Anshu123'),
(4, 'anhucoc65@gemail.com', 'Anshu123'),
(5, 'anhucoc65@gemail.com', 'Anshu123');

-- --------------------------------------------------------

--
-- Table structure for table `ugsubmifees`
--

CREATE TABLE `ugsubmifees` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Course` varchar(25) NOT NULL,
  `Fees` varchar(12) NOT NULL,
  `Date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugsubmifees`
--

INSERT INTO `ugsubmifees` (`ID`, `Name`, `Course`, `Fees`, `Date`) VALUES
(4, 'Anshu', 'BCA', '12000', '2018-03-29'),
(5, 'Anshu', 'BCA', '12000', '2018-03-21'),
(6, 'Anshu', 'BCA', '12000', '2018-03-28'),
(7, 'Anshu', 'BCA', '12000', '2018-03-01'),
(8, 'Anshu', 'BCA', '12000', '2018-03-21'),
(10, 'Mayank', 'BCA', '50000', '2018-03-29'),
(11, 'Anshu', 'BCA', '50000', '2018-03-28'),
(12, 'Anshu', 'BCA', '50000', '2018-03-22'),
(13, 'Anshu', 'BCA', '50000', '2018-03-28'),
(14, 'Anshu', 'BCA', '50000', '2018-03-29'),
(15, 'Anshu', 'BCA', '50000', '2018-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `uploadresume`
--

CREATE TABLE `uploadresume` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Date` varchar(25) NOT NULL,
  `File` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `adminupload`
--
ALTER TABLE `adminupload`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `alevelsem1`
--
ALTER TABLE `alevelsem1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `alevelsem2`
--
ALTER TABLE `alevelsem2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bcasem1`
--
ALTER TABLE `bcasem1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bcasem2`
--
ALTER TABLE `bcasem2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bcasem3`
--
ALTER TABLE `bcasem3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bcasem4`
--
ALTER TABLE `bcasem4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bcasem5`
--
ALTER TABLE `bcasem5`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bcasem6`
--
ALTER TABLE `bcasem6`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `classschedule`
--
ALTER TABLE `classschedule`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `enquerytable`
--
ALTER TABLE `enquerytable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `formalcourse`
--
ALTER TABLE `formalcourse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nonformalcourse`
--
ALTER TABLE `nonformalcourse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `olevelsem1`
--
ALTER TABLE `olevelsem1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `olevelsem2`
--
ALTER TABLE `olevelsem2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registertable`
--
ALTER TABLE `registertable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shorttermcourse`
--
ALTER TABLE `shorttermcourse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shstudentfrom`
--
ALTER TABLE `shstudentfrom`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shstudentregister`
--
ALTER TABLE `shstudentregister`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shsubmitfees`
--
ALTER TABLE `shsubmitfees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentupload`
--
ALTER TABLE `studentupload`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacherform`
--
ALTER TABLE `teacherform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacherregister`
--
ALTER TABLE `teacherregister`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teachersalary`
--
ALTER TABLE `teachersalary`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacheruploadclassass`
--
ALTER TABLE `teacheruploadclassass`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacheruploadnotice`
--
ALTER TABLE `teacheruploadnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ugstudentform`
--
ALTER TABLE `ugstudentform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ugstudentregister`
--
ALTER TABLE `ugstudentregister`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ugsubmifees`
--
ALTER TABLE `ugsubmifees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `uploadresume`
--
ALTER TABLE `uploadresume`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `adminupload`
--
ALTER TABLE `adminupload`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alevelsem1`
--
ALTER TABLE `alevelsem1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alevelsem2`
--
ALTER TABLE `alevelsem2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bcasem1`
--
ALTER TABLE `bcasem1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bcasem2`
--
ALTER TABLE `bcasem2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bcasem3`
--
ALTER TABLE `bcasem3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bcasem4`
--
ALTER TABLE `bcasem4`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bcasem5`
--
ALTER TABLE `bcasem5`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bcasem6`
--
ALTER TABLE `bcasem6`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classschedule`
--
ALTER TABLE `classschedule`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquerytable`
--
ALTER TABLE `enquerytable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `formalcourse`
--
ALTER TABLE `formalcourse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nonformalcourse`
--
ALTER TABLE `nonformalcourse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `olevelsem1`
--
ALTER TABLE `olevelsem1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `olevelsem2`
--
ALTER TABLE `olevelsem2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registertable`
--
ALTER TABLE `registertable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shorttermcourse`
--
ALTER TABLE `shorttermcourse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `shstudentfrom`
--
ALTER TABLE `shstudentfrom`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `shstudentregister`
--
ALTER TABLE `shstudentregister`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shsubmitfees`
--
ALTER TABLE `shsubmitfees`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `studentupload`
--
ALTER TABLE `studentupload`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacherform`
--
ALTER TABLE `teacherform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `teacherregister`
--
ALTER TABLE `teacherregister`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachersalary`
--
ALTER TABLE `teachersalary`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacheruploadclassass`
--
ALTER TABLE `teacheruploadclassass`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teacheruploadnotice`
--
ALTER TABLE `teacheruploadnotice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ugstudentform`
--
ALTER TABLE `ugstudentform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `ugstudentregister`
--
ALTER TABLE `ugstudentregister`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ugsubmifees`
--
ALTER TABLE `ugsubmifees`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `uploadresume`
--
ALTER TABLE `uploadresume`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
