-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2020 at 01:39 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company maintenance system`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_leave`
--

DROP TABLE IF EXISTS `apply_leave`;
CREATE TABLE IF NOT EXISTS `apply_leave` (
  `Employee_Id` int(11) NOT NULL,
  `Employee_Name` varchar(60) NOT NULL,
  `Leave_Type` varchar(20) NOT NULL,
  `Reason` varchar(200) NOT NULL,
  `Date_From` date NOT NULL,
  `Date_To` date NOT NULL,
  `Status` varchar(60) NOT NULL DEFAULT 'Pending',
  `comments` varchar(300) DEFAULT 'Dosen''t View',
  PRIMARY KEY (`Employee_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_leave`
--

INSERT INTO `apply_leave` (`Employee_Id`, `Employee_Name`, `Leave_Type`, `Reason`, `Date_From`, `Date_To`, `Status`, `comments`) VALUES
(1, 'Sharmini', 'casual', 'fever', '2018-11-15', '2018-12-29', 'approve', 'Take care'),
(77, 'ghfxbgsngfs', 'Persernal Leave', 'dghjrtshnzetndzfnbxgs', '2018-12-26', '2018-12-24', 'Pending', 'Dosen\'t View'),
(20, 'thjkl', 'sick', 'casual', '2018-12-11', '2018-12-25', 'Pending', 'Dosen\'t View'),
(11, 'dfghgffgh', 'NoPay', 'xcvbk', '2018-12-25', '2018-12-28', 'Pending', 'Dosen\'t View'),
(5, 'thano', 'sick', 'sick', '2018-12-10', '2018-12-12', 'approve', 'Dosen\'t View');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Client_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Client_Fname` varchar(50) NOT NULL,
  `Client_Lname` varchar(50) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Phone_No` varchar(30) NOT NULL,
  PRIMARY KEY (`Client_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Client_Id`, `Client_Fname`, `Client_Lname`, `Email`, `Phone_No`) VALUES
(1, 'Ron', 'Wesly', 'ron1978@yahoo.com', '0775739641'),
(2, 'Hemoyini', 'Grenger', 'hemoqueen87@live.con', '0712743946'),
(3, 'Herath', 'Veerasinghe', 'herathveera@yahoo.com', '0725739428'),
(4, 'Harry', 'James', 'harryjam@gmail.com', '0773648254'),
(5, 'Shakshi', 'Varatharajan', 'Shakshi95@gmail.com', '011-8937465'),
(6, 'ydd', 'fiy', 'sachin@gmail.com', 'udtt'),
(7, 'ydd', 'fiy', 'sachin@gmail.com', 'udtt'),
(8, 'dcdc', 'cd', 'sachin@gmail.com', 'sa'),
(9, 'sachin', 'sachin', 'sachin@gmail.com', 'cdesd'),
(10, 'sachin', 'nagendran', 'test@gmail.com', '1000000'),
(11, 'ertyj', 'h', 'sachin@gmail.com', 'xaxax'),
(12, 'thu', 'thu', 'thulasi@gmail.com', '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `clienttask`
--

DROP TABLE IF EXISTS `clienttask`;
CREATE TABLE IF NOT EXISTS `clienttask` (
  `ClientTaskId` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `TaskName` varchar(100) NOT NULL,
  `TaskDescription` varchar(500) NOT NULL,
  `DeadLine` date NOT NULL,
  `Approve_Status` varchar(30) DEFAULT 'Yet Not Approve',
  PRIMARY KEY (`ClientTaskId`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clienttask`
--

INSERT INTO `clienttask` (`ClientTaskId`, `Email`, `TaskName`, `TaskDescription`, `DeadLine`, `Approve_Status`) VALUES
(1, 'gfmdtyujt', 'gfg mdtjuwrsh', 'nsrtyjtymydx', '2019-08-09', 'Approve'),
(2, 'gfmdtyujt', 'gfg mdtjuwrsh', 'nsrtyjtymydx', '2016-09-09', NULL),
(3, 'fgngrye', 'fgnhrey', 'fgfnsyr', '2019-04-23', NULL),
(4, 'fgngrye', 'fgnhrey', 'fgfnsyr', '2020-09-09', NULL),
(5, 'fsnyrj', 'gndyjw', 'fdnhdytj', '2019-04-23', NULL),
(6, 'sntrsym', 'snymrwewE', 'SDBRYSM', '2019-07-12', NULL),
(7, 'sdfgh', 'sdfghj', 'dfgh', '2019-08-09', NULL),
(8, 'sdfgh@gmail.com', 'xcvbnm,mnbvcx', 'zxcvbnbvcxzzxcvbn', '2018-12-11', NULL),
(9, 'sdff@gmail.com', 'sdgjhfed', 'sdfgfdsdfgfdssdffd', '2018-12-25', NULL),
(10, 'sdfgh@gmail.com', 'opel', 'sdfghnbvcxxcvbnbvc', '2018-12-26', NULL),
(14, 'sdfg@gmail.com', 'volvo', 'sdfgfddhngfgfdfsgdg', '2019-01-01', NULL),
(15, 'sdfg@gmail.com', 'volvo', 'sdfgfddhngfgfdfsgdg', '2019-01-01', NULL),
(16, 'sdff@gmail.com', 'audi', 'sdssrhawAASDSDFBGBGRQ234TDCSXAZAXZCCSA', '2019-01-05', NULL),
(19, 'grehehta@gmail.com', 'Banner', 'wegREGREBAwefeagvbs', '2018-12-12', NULL),
(21, 'dfghjk@gmail.com', 'Banner', 'sdfghjhgfds', '2018-12-12', 'Yet Not Approve');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `Emp_Id` int(15) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(30) DEFAULT NULL,
  `Lname` varchar(30) DEFAULT NULL,
  `Street` varchar(50) DEFAULT NULL,
  `Number` varchar(10) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `Phone_No` int(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Age` int(5) DEFAULT NULL,
  `Qualification` varchar(128) DEFAULT NULL,
  `Designation` varchar(512) DEFAULT NULL,
  `Experience` varchar(512) DEFAULT NULL,
  `Join_Date` date DEFAULT NULL,
  PRIMARY KEY (`Emp_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_Id`, `Fname`, `Lname`, `Street`, `Number`, `City`, `Phone_No`, `Email`, `DOB`, `Age`, `Qualification`, `Designation`, `Experience`, `Join_Date`) VALUES
(1, 'Vishan', 'Fernando', '', '3/95', 'Colombo', 724839574, 'vishannando80@gmail.com', '1980-01-17', 38, 'Chief Director of the Company(Admin)', 'M.sc in Computer ScienceHR, Marketing & Finance', '5 years worked at virtusa as Designing Engineer ', '2015-05-06'),
(2, 'Kelvin', 'Alexander', 'St Lorence Road', '113/9', 'Colombo', 776375827, 'kelvinalex@gmail.com', '1985-09-12', 33, 'B.sc in Graphical Design\r\nDiploma in Computer Science', 'Chief Photoshop Designer', '2 years ', '2014-07-16'),
(3, 'Martin', 'Cristopher', 'Rudra Mawatta', '23', 'Trincomalee', 712894375, 'martin78@gmail.com', '1978-12-11', 40, 'Chief Marketing Manager', 'SLIM\r\nB.sc in Marketing\r\nCIMA\r\n', '7 years', '2011-08-09'),
(4, 'Charitha', 'Wimalatharma', '', '73/1', 'Galle', 712945836, 'charithatharma@gmail.com', '1988-12-10', 30, 'B.sc in Computer ScienceDiploma in Graphic Designing', 'Designing Engineer', '2 year as a banking assistant2 years as designing engineer', '2017-04-18'),
(76, 'sharmini', 'sivarjah', 'jaffna', '45', 'jaffna', 776665624, 'abc123@gmail.com', '2018-12-05', 23, 'dfghj', 'wasedrftghj', 'fghbnjm', '2018-12-11'),
(77, 'asdfghjkkjhgfds', 'sdfgfggfed', 'zfvsdbnsfnzb', '23', 'zvgsfhndfnfd', 2345678, 'sdgfse@yahoo.com', '2018-12-12', 23, 'bgsrhrhsf', 'sdfghjhgfdsdfgh', 'btjxdthbdfvd', '2018-12-19'),
(78, 'jjhgfghjk', 'gffjy', 'gdhnytj', '32', 'gdhjtj', 2345678, 'dhtfjh@gmail.com', '2018-12-12', 23, 'gfjnfjy', 'vhmjgkj', 'fhgj', '2018-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `Feedback_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Task_Name` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Feedback_Date` date NOT NULL,
  `Client_Sub_Rate` varchar(1) NOT NULL,
  `Comment` varchar(500) DEFAULT NULL,
  `Service_Status` varchar(30) NOT NULL,
  `Client_Id` int(11) NOT NULL,
  PRIMARY KEY (`Feedback_Id`),
  KEY `Client_Id` (`Client_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

DROP TABLE IF EXISTS `leave`;
CREATE TABLE IF NOT EXISTS `leave` (
  `Leave_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Leave_Type` varchar(128) NOT NULL,
  `Leave_From` date NOT NULL,
  `Leave_To` date NOT NULL,
  `No_Of_Days` int(11) NOT NULL,
  `Decision` varchar(128) NOT NULL,
  `Leave_Status` varchar(128) NOT NULL,
  `Comment` varchar(512) NOT NULL,
  PRIMARY KEY (`Leave_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `leavestatus`
--

DROP TABLE IF EXISTS `leavestatus`;
CREATE TABLE IF NOT EXISTS `leavestatus` (
  `Leave_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Leave_Type` varchar(128) NOT NULL,
  `Leave_From` date NOT NULL,
  `Leave_To` date NOT NULL,
  `No_Of_Days` int(11) NOT NULL,
  `Leave_Status` varchar(128) DEFAULT NULL,
  `Emp_Id` int(11) DEFAULT NULL,
  `Emp_Name` varchar(255) NOT NULL,
  `Reason` varchar(255) NOT NULL,
  PRIMARY KEY (`Leave_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `leavestatus`
--

INSERT INTO `leavestatus` (`Leave_Id`, `Leave_Type`, `Leave_From`, `Leave_To`, `No_Of_Days`, `Leave_Status`, `Emp_Id`, `Emp_Name`, `Reason`) VALUES
(22, 'sick', '2012-02-20', '2013-02-20', 5, NULL, 1, 'Thanogika', 'sick'),
(23, 'sick', '2012-02-20', '2013-02-20', 3, NULL, 1, 'Thanogika', 'sick'),
(24, 'sick', '2012-10-20', '2013-10-20', 1, NULL, 2, 'thulasika', 'sick'),
(25, 'sick', '2012-10-20', '2013-10-20', 1, NULL, 2, 'thulasika', 'sick'),
(26, 'sick', '2012-10-20', '2013-10-20', 1, NULL, 2, '', 'sick'),
(27, 'sick', '2012-02-20', '2013-02-20', 2, NULL, 1, 'th', 'ddfdf'),
(28, 'sick', '2012-02-20', '2013-02-20', 1, NULL, 1, 'nnmm', 'yuhoi'),
(29, 'sick', '2012-02-20', '2013-02-20', 3, NULL, 1, '01', './'),
(30, 'sick', '2012-02-20', '2013-02-20', 1, NULL, 1, 'Thanogika', 'nm./'),
(31, 'sick', '2018-12-18', '2018-12-24', 6, NULL, 2, 'xcvb', 'sdfghjklkjhgfdsdfghj');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `Login_Id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `User_Type` varchar(10) NOT NULL,
  `Activated` varchar(10) NOT NULL DEFAULT 'No',
  PRIMARY KEY (`Login_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Login_Id`, `User_Name`, `Password`, `User_Type`, `Activated`) VALUES
(2, 'Kelvin', '#$kelvin$', 'Employee', 'yes'),
(3, 'Martin', 'Martin6', 'Employee', 'yes'),
(4, 'Meera', '12Meera', 'Employee', 'yes'),
(5, 'Vinujah', 'vinu87', 'Employee', 'yes'),
(6, 'Ron', '@ron#', 'Client', 'yes'),
(7, 'Harry', 'harry5', 'Client', 'yes'),
(8, 'Hemoyini', 'hemo24', 'Client', 'yes'),
(9, 'Shakshi', '@shakshi$', 'Client', 'yes'),
(70, 'Sharmini', 'sharmi', 'Admin', 'Yes'),
(71, 'Thano', 'thano', 'Employee', 'Yes'),
(72, 'Thulasi', 'thulasi', 'Client', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `Message_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Message_Subject` varchar(512) NOT NULL,
  `Message_Date` date NOT NULL,
  `Towhom` varchar(128) NOT NULL,
  PRIMARY KEY (`Message_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `Salary_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Month_Salary` double NOT NULL,
  `Basic_Salary` double NOT NULL,
  `Total_Submission` double NOT NULL,
  `Total_Rate` double NOT NULL,
  `Total_Submission_Amount` double NOT NULL,
  `Loan` double NOT NULL,
  `Allowance` double NOT NULL,
  `E.P.F` double NOT NULL,
  `Total_Deductions` double NOT NULL,
  `Net_Salary` double NOT NULL,
  `Sub_Rate_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Salary_Id`),
  KEY `Sub_Rate_Id` (`Sub_Rate_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `submission_rate`
--

DROP TABLE IF EXISTS `submission_rate`;
CREATE TABLE IF NOT EXISTS `submission_rate` (
  `Sub_Rate_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Sub_Client_Persentage` double NOT NULL,
  `Sub_Rate_Status` varchar(128) NOT NULL,
  `Task_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Sub_Rate_Id`),
  KEY `Task_Id` (`Task_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `Task_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Task_Name` varchar(128) DEFAULT NULL,
  `Task_Date` date DEFAULT NULL,
  `Task_Description` varchar(512) DEFAULT NULL,
  `Dead_Line` date DEFAULT NULL,
  `Sub_Subject` varchar(255) DEFAULT NULL,
  `Uploaded_On` datetime DEFAULT NULL,
  `Status` enum('1','0') DEFAULT NULL,
  `File_Name` varchar(255) DEFAULT NULL,
  `Emp_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Task_Id`),
  KEY `Emp_Id` (`Emp_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`Task_Id`, `Task_Name`, `Task_Date`, `Task_Description`, `Dead_Line`, `Sub_Subject`, `Uploaded_On`, `Status`, `File_Name`, `Emp_Id`) VALUES
(1, 'Banner Design', '2016-09-13', 'Banner Design for My small company website. I want to HD quality banner.\r\nCompany name - PenixTatu.\r\nService - Apply a Tattoo\r\nContact No - 0775739641\r\nAny quotes for your choice', '2016-10-01', NULL, NULL, NULL, NULL, NULL),
(2, 'Banner Design', '2017-05-10', 'Banner Design for a Car company website Company name - MAZDA\r\nNew creativity design for my company website', '2017-05-30', NULL, NULL, NULL, NULL, NULL),
(3, 'Christmas Card', '2018-11-04', 'A newly design card for Christmas\r\nI wish to want new design with lovely quotes', '2018-11-08', NULL, NULL, NULL, NULL, NULL),
(4, 'Invitation', '2019-01-02', 'Birthday Party Invitation\r\ndate - 17/04/2019\r\nvenue - No 12,33rd Lane, Wellawatte\r\nIt\'s 1st birthday celebration for my child \r\nI wish to want to a wonderful card with lovely quotes', '2019-02-20', NULL, NULL, NULL, NULL, NULL),
(5, 'Banner Design', '2018-12-02', 'Banner design for delivery cakes \r\nIts home make cakes by Shaksi Varathan\r\nContact No - 0118937456\r\nPlz add suitable Attractive words for the Banner', '2019-01-08', NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
