-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2016 at 04:21 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashionrepublic_g6`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `CID` varchar(10) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Postal_Code` varchar(10) DEFAULT NULL,
  `Gender` text NOT NULL,
  `Telephone` text NOT NULL,
  `Email_Address` varchar(20) NOT NULL,
  `NIC` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`CID`, `First_Name`, `Last_Name`, `DOB`, `Address`, `Postal_Code`, `Gender`, `Telephone`, `Email_Address`, `NIC`) VALUES
('C1534', 'Duthika', 'Paris', '1971-12-30', '12 Negombo St', '11500', 'female', '663302124', 'duthika@gmail.com', '44554544FG'),
('C2306', 'Ludowica', 'Fernando', '1997-01-09', '286 Negombo Rd', '15610', 'female', '5123002554', 'ludowica81@gmail.com', '97190557996V'),
('C2331', 'Devinda', 'Fernando', '1995-05-26', 'Kandy', '654123', 'male', '43240450450', 'devinde@outlook.com', '6541320.351V'),
('C2383', 'David', 'Ford', '1958-03-24', '6 Lawrence St', '11500', 'male', '4512368461', 'davidford@gmail.com', '5936665666N'),
('C3130', 'Cavindi', 'Fernando', '1997-01-09', '12 Kurunegala Rd', '', 'female', '01126596543', 'cavindi.j7@gmail.com', '384654512V'),
('C3247', 'Katie', 'Fernando', '1985-03-07', '99 Badulla Rd', '', 'female', '656598022', 'katie@gmail.com', '986534178V'),
('C4163', 'Ann', 'Beech', '1960-11-10', '63 Armours St', '', 'female', '0141357741', 'annbeech@outlook.com', '700214563V'),
('C4496', 'Lakmina', 'Perera', '1973-04-15', '12 Badulla Rd', '12500', 'male', '9000123654', 'lakmina11@gmail.com', '846531215V'),
('C4789', 'John', 'White', '1945-06-18', '16 Matale Rd', '11633', 'male', '0122486121', 'johnwhite@yahoo.com', '400365218V'),
('C4831', 'Tom', 'Black', '1989-04-16', '123 Negombo Rd', '1900', 'male', '0116325566', 'tomblack@yahoo.com', '945213678V'),
('C4908', 'Randika', 'Fernando', '1993-05-30', '65 Badulla Rd', '56500', 'male', '8654130205', 'randika@gmail.com', '4856120200V'),
('C4953', 'Jake', 'Potter', '1991-05-23', '49 Badulla Rd', '', 'male', '95865620112', 'jakepotter@gmail.com', '541531656V');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EmpID` varchar(10) NOT NULL,
  `fName` text NOT NULL,
  `lName` text NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `Position` text NOT NULL,
  `City` text NOT NULL,
  `Province` text NOT NULL,
  `Gender` text NOT NULL,
  `DOB` date NOT NULL,
  `retailshopID` varchar(10) NOT NULL,
  `warehouseID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EmpID`, `fName`, `lName`, `NIC`, `Position`, `City`, `Province`, `Gender`, `DOB`, `retailshopID`, `warehouseID`) VALUES
('EM1010', 'Lalith', 'Perera', '654123015V', 'W_manager', 'Ratnapura', 'sabaragamuwa', 'male', '1990-08-19', '', 'wsp1'),
('EM1040', 'Randika', 'Fernando', '4856120200V', 'W_worker', 'Badulla', 'uva', 'male', '1993-05-30', '', 'wup1'),
('EM1049', 'Stefan', 'Fernando', '846513215V', 'R_manager', 'Trinco', 'eastern', 'male', '1993-10-17', 'RE4544', 'wep1'),
('EM1343', 'Janaka', 'Adikari', '654312213V', 'W_worker', 'Colombo', 'western', 'male', '1996-05-16', '', 'wwp1'),
('EM1405', 'Jake', 'Potter', '541531656V', 'R_manager', 'Badulla', 'uva', 'male', '1991-05-23', 'RU4521', ''),
('EM1539', 'Dave', 'Perera', '123456789V', 'R_manager', 'Negombo', 'central', 'male', '1997-05-23', 'RU4521', 'f465'),
('EM1668', 'John', 'White', '400365218V', 'R_manager', 'Colombo', 'western', 'male', '1945-06-18', 'RW2912', ''),
('EM1684', 'Malinda', 'Fernando', '6458124546V', 'R_manager', 'Hikkaduwa', 'southern', 'male', '1990-04-16', 'RS2422', ''),
('EM1741', 'Jevin', 'Fernando', '9612540617V', 'R_manager', 'Nuwara Eliya', 'central', 'male', '1996-06-17', 'RC3810', ''),
('EM1914', 'Kavindu', 'Pathiraja', '9786451655V', 'W_worker', 'Nuwara Eliya', 'central', 'male', '1987-08-16', '', 'wcp1'),
('EM1948', 'Sineth', 'Randika', '845616555V', 'W_worker', 'Nuwara Eliya', 'central', 'male', '1996-07-02', '', 'wcp1'),
('EM1987', 'Sampath', 'Fernando', '6952366546V', 'W_worker', 'Anuradhapura', 'northCentral', 'male', '1993-07-15', '', 'wncp1'),
('EM1991', 'Annemarie', 'Peiris', '1230086599V', 'W_manager', 'Mannar', 'Northern', 'female', '1984-06-29', '', 'wnp1'),
('EM2029', 'Peter', 'Happuarachchi', '6854364546V', 'R_manager', 'Mannar', 'Northern', 'male', '1980-12-19', 'RN2364', ''),
('EM2171', 'Sanka', 'Perera', '561331555V', 'W_worker', 'Anuradhapura', 'northCentral', 'male', '1993-04-19', '', 'wncp1'),
('EM2204', 'Upul', 'Wijesingha', '564312001V', 'W_manager', 'Kurunegala', 'northWest', 'male', '1970-10-30', '', 'wnw1'),
('EM2210', 'Shehan', 'Adikara', '6520021654V', 'W_manager', 'Colombo', 'western', 'male', '1993-04-10', '', 'wwp1'),
('EM2455', 'Heshan', 'Perera', '1233564933V', 'W_manager', 'Trinco', 'eastern', 'male', '1982-01-19', '', 'wep1'),
('EM2490', 'Erandika', 'Samapath', '5005145456V', 'W_worker', 'Hikkaduwa', 'southern', 'male', '1983-08-01', '', 'wsp1'),
('EM2505', 'Shan', 'Fernando', '6451320024V', 'W_worker', 'Hikkaduwa', 'southern', 'male', '1989-07-15', '', 'wsp1'),
('EM2713', 'Shane', 'Jayawardene', '654321875V', 'R_manager', 'Anuradhapura', 'northCentral', 'male', '1994-06-15', 'RNC3031', ''),
('EM3280', 'Dineth', 'Pathiraja', '458610054V', 'W_worker', 'Kurunegala', 'northWest', 'male', '1980-10-29', '', 'wnwp1'),
('EM3303', 'Malinda', 'Perera', '485613200V', 'W_worker', 'Kurunegala', 'northWest', 'male', '1991-08-11', '', 'wnwp1'),
('EM3459', 'Eranga', 'Sampath', '9332416546V', 'W_manager', 'Badulla', 'uva', 'male', '1968-09-15', '', 'wup1'),
('EM3527', 'Hasitha', 'Fernando', '64851320015V', 'W_worker', 'Badulla', 'uva', 'male', '1993-08-11', '', 'wup1'),
('EM3705', 'Geetha', 'Peiris', '6513545485V', 'W_manager', 'Hikkaduwa', 'southern', 'female', '1972-08-12', '', 'wsp1'),
('EM3783', 'Upali', 'Alahakoon', '9856114558V', 'W_worker', 'Mannar', 'Northern', 'male', '1993-12-30', '', 'WCP1'),
('EM3943', 'Ruvin', 'Peiris', '684531515V', 'W_worker', 'Ratnapura', 'sabaragamuwa', 'male', '1996-03-05', '', 'WCP1'),
('EM4021', 'Sam', 'Smith', '444321286V', 'R_manager', 'Negombo', 'western', 'male', '1968-04-29', 'RW3485', ''),
('EM4146', 'Stefan', 'Perera', '968533465V', 'W_worker', 'Colombo', 'western', 'male', '1997-06-29', '', 'WCP1'),
('EM4404', 'Ruvin', 'Fernando', '9661520254V', 'R_manager', 'Ratnapura', 'sabaragamuwa', 'male', '1996-06-17', 'RSG4383', ''),
('EM4599', 'Marian', 'Bandara', '6511054656V', 'W_manager', 'Anuradhapura', 'northCentral', 'male', '1983-04-20', '', 'WCP1'),
('EM4624', 'Udara', 'Peiris', '8456122554V', 'W_worker', 'Trinco', 'eastern', 'male', '1990-04-18', '', 'WCP1'),
('EM4671', 'Lahiru', 'Perera', '2105165312V', 'W_worker', 'Mannar', 'Northern', 'male', '1993-08-19', '', 'WCP1'),
('EM4758', 'Shehani ', 'Tissera', '1630656353V', 'W_manager', 'Nuwara Eliya', 'central', 'female', '1973-09-21', '', 'WCP1'),
('EM4842', 'Janith', 'Perera', '651325100V', 'R_manager', 'Kurunegala', 'northWest', 'male', '1960-07-18', 'RNW3881', ''),
('EM4870', 'Ranjith', 'Perera', '955648155V', 'W_worker', 'Trinco', 'eastern', 'male', '1992-08-19', '', 'WCP1'),
('EM4981', 'Jevin', 'Alahakoon', '5864548500V', 'W_worker', 'Ratnapura', 'sabaragamuwa', 'male', '1993-08-22', '', 'WCP1'),
('ES1543', 'Sahan', 'Fonseka', '486523205V', 'salesperson', 'Hikkaduwa', 'southern', 'male', '1986-07-16', 'RS2422', ''),
('ES1604', 'Onega ', 'Alahakoon', '8456132154V', 'salesperson', 'Mannar', 'Northern', 'male', '1996-12-06', 'RN2364', ''),
('ES1621', 'James', 'Peiris', '976632515V', 'salesperson', 'Colombo', 'western', 'male', '1974-08-29', 'RW2912', ''),
('ES2009', 'Shavindrie', 'Tissera', '503054546V', 'salesperson', 'Kurunegala', 'northWest', 'female', '1992-08-13', 'RNW3881', ''),
('ES2151', 'Fedrico', 'Alahakoon', '8651322145V', 'salesperson', 'Mannar', 'Northern', 'male', '1990-11-15', 'RN2364', ''),
('ES2181', 'William', 'Fernando', '6486451512V', 'salesperson', 'Trinco', 'eastern', 'male', '1983-07-15', 'RE4544', ''),
('ES2306', 'Cavindi', 'Fernando', '9761651251V', 'salesperson', 'Trinco', 'eastern', 'female', '1997-01-09', 'RE4544', ''),
('ES2531', 'Samanthi', 'Jayasuriya', '963314545V', 'salesperson', 'Nuwara Eliya', 'central', 'female', '1989-05-09', 'RC3810', ''),
('ES2969', 'Rochelle', 'Fernando', '9846513215V', 'salesperson', 'Ratnapura', 'sabaragamuwa', 'female', '1988-03-15', 'RSG4383', ''),
('ES3034', 'Mary', 'Johnson', '87645846501V', 'salesperson', 'Negombo', 'western', 'female', '1983-05-26', 'RW3485', ''),
('ES3311', 'Jonathan', 'Clay', '452135455V', 'salesperson', 'Anuradhapura', 'northCentral', 'male', '1994-03-02', 'RNC3031', ''),
('ES3380', 'Charlotte', 'Fernando', '7444568925V', 'salesperson', 'Negombo', 'western', 'female', '1988-03-15', 'RW3485', ''),
('ES3552', 'Rashmi', 'Jayasekara', '465132211V', 'salesperson', 'Ratnapura', 'sabaragamuwa', 'female', '1978-02-28', 'RSG4383', ''),
('ES3799', 'Sarah', 'Williams', '565431216V', 'salesperson', 'Nuwara Eliya', 'central', 'female', '1966-08-12', 'RC3810', ''),
('ES3945', 'Krishanthi', 'Fernando', '6323244665V', 'salesperson', 'Hikkaduwa', 'southern', 'female', '1976-04-29', 'RS2422', ''),
('ES3965', 'Cavindi', 'Fernando', '384654512V', 'salesperson', 'Kurunegala', 'northWest', 'female', '1997-01-09', 'RNW3881', ''),
('ES4620', 'Peter', 'Fernando', '452236891V', 'salesperson', 'Colombo', 'western', 'male', '1978-03-15', 'RW2912', ''),
('ES4731', 'Lakmina', 'Perera', '846531215V', 'salesperson', 'Badulla', 'uva', 'male', '1973-04-15', 'RU4521', ''),
('ES4906', 'Kumara', 'Perera', '235685488V', 'salesperson', 'Anuradhapura', 'northCentral', 'male', '1975-06-18', 'RNC3031', ''),
('ES4932', 'Katie', 'Fernando', '986534178V', 'salesperson', 'Badulla', 'uva', 'female', '1985-03-07', 'RU4521', '');

-- --------------------------------------------------------

--
-- Table structure for table `itemcart`
--

CREATE TABLE `itemcart` (
  `itemid` varchar(10) NOT NULL,
  `billno` varchar(5) NOT NULL,
  `name` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(10) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `EmpID` varchar(10) NOT NULL,
  `Position` text NOT NULL,
  `City` text NOT NULL,
  `Province` text NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `retailshopID` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`EmpID`, `Position`, `City`, `Province`, `Username`, `Password`, `retailshopID`) VALUES
('EM1010', 'W_manager', 'Ratnapura', 'sabaragamuwa', 'warehouse', 'warehouse', ''),
('EM1040', 'W_worker', 'Badulla', 'uva', 'worker', 'worker', ''),
('EM1049', 'R_manager', 'Trinco', 'eastern', 'manager', 'manager123', 'RE4544'),
('EM1343', 'W_worker', 'Colombo', 'western', 'worker', 'worker', ''),
('EM1405', 'R_manager', 'Badulla', 'uva', 'manager', 'manager123', 'RU4521'),
('EM1539', 'R_manager', 'Negombo', 'central', 'manager', '4r', 'RU4521'),
('EM1668', 'R_manager', 'Colombo', 'western', 'manager', 'manager', 'RW2912'),
('EM1684', 'R_manager', 'Hikkaduwa', 'southern', 'manager', 'manager123', 'RS2422'),
('EM1741', 'R_manager', 'Nuwara Eliya', 'central', 'manager', 'manager', 'RC3810'),
('EM1914', 'W_worker', 'Nuwara Eliya', 'central', 'worker', 'worker', ''),
('EM1948', 'W_worker', 'Nuwara Eliya', 'central', 'worker', 'worker', ''),
('EM1987', 'W_worker', 'Anuradhapura', 'northCentral', 'worker', 'worker', ''),
('EM1991', 'W_manager', 'Mannar', 'Northern', 'warehouse', 'warehouse', ''),
('EM2029', 'R_manager', 'Mannar', 'Northern', 'manager', 'manager123', 'RN2364'),
('EM2171', 'W_worker', 'Anuradhapura', 'northCentral', 'worker', 'worker', ''),
('EM2204', 'W_manager', 'Kurunegala', 'northWest', 'warehouse', 'warehouse', ''),
('EM2210', 'W_manager', 'Colombo', 'western', 'warehouse', 'warehouse1', ''),
('EM2455', 'W_manager', 'Trinco', 'eastern', 'warehouse', 'warehouse', ''),
('EM2490', 'W_worker', 'Hikkaduwa', 'southern', 'worker', 'worker', ''),
('EM2505', 'W_worker', 'Hikkaduwa', 'southern', 'worker', 'worker', ''),
('EM2713', 'R_manager', 'Anuradhapura', 'northCentral', 'manager', 'manager123', 'RNC3031'),
('EM3280', 'W_worker', 'Kurunegala', 'northWest', 'worker', 'worker', ''),
('EM3303', 'W_worker', 'Kurunegala', 'northWest', 'worker', 'worker', ''),
('EM3459', 'W_manager', 'Badulla', 'uva', 'warehouse', 'warehouse', ''),
('EM3527', 'W_worker', 'Badulla', 'uva', 'worker', 'worker', ''),
('EM3705', 'W_manager', 'Hikkaduwa', 'southern', 'warehouse', 'warehouse', ''),
('EM3783', 'W_worker', 'Mannar', 'Northern', 'worker', 'worker', ''),
('EM3943', 'W_worker', 'Ratnapura', 'sabaragamuwa', 'worker', 'worker', ''),
('EM4021', 'R_manager', 'Negombo', 'western', 'manager', 'manager', 'RW3485'),
('EM4146', 'W_worker', 'Colombo', 'western', 'worker', 'worker', ''),
('EM4404', 'R_manager', 'Ratnapura', 'sabaragamuwa', 'manager', 'manager123', 'RSG4383'),
('EM4599', 'W_manager', 'Anuradhapura', 'northCentral', 'warehouse', 'warehouse', ''),
('EM4624', 'W_worker', 'Trinco', 'eastern', 'worker', 'worker', ''),
('EM4671', 'W_worker', 'Mannar', 'Northern', 'worker', 'worker', ''),
('EM4758', 'W_manager', 'Nuwara Eliya', 'central', 'warehouse', 'warehouse', ''),
('EM4842', 'R_manager', 'Kurunegala', 'northWest', 'manager', 'manager123', 'RNW3881'),
('EM4870', 'W_worker', 'Trinco', 'eastern', 'worker', 'worker', ''),
('EM4981', 'W_worker', 'Ratnapura', 'sabaragamuwa', 'worker', 'worker', ''),
('ES1543', 'salesperson', 'Hikkaduwa', 'southern', 'salesperson', 'salesperson123', 'RS2422'),
('ES1604', 'salesperson', 'Mannar', 'Northern', 'salesperson', 'salesperson123', 'RN2364'),
('ES1621', 'salesperson', 'Colombo', 'western', 'salesperson', 'salesperson', 'RW2912'),
('ES2009', 'salesperson', 'Kurunegala', 'northWest', 'salesperson', 'salesperson123', 'RNW3881'),
('ES2151', 'salesperson', 'Mannar', 'Northern', 'salesperson', 'salesperson', 'RN2364'),
('ES2181', 'salesperson', 'Trinco', 'eastern', 'salesperson', 'salesperson123', 'RE4544'),
('ES2306', 'salesperson', 'Trinco', 'eastern', 'salesperson', 'salesperson123', 'RE4544'),
('ES2531', 'salesperson', 'Nuwara Eliya', 'central', 'salesperson', 'salesperson', 'RC3810'),
('ES2969', 'salesperson', 'Ratnapura', 'sabaragamuwa', 'salesperson', 'salesperson123', 'RSG4383'),
('ES3034', 'salesperson', 'Negombo', 'western', 'salesperson', 'salesperson', 'RW3485'),
('ES3311', 'salesperson', 'Anuradhapura', 'northCentral', 'salesperson', 'salesperson123', 'RNC3031'),
('ES3380', 'salesperson', 'Negombo', 'western', 'salesperson', 'salesperson', 'RW3485'),
('ES3552', 'salesperson', 'Ratnapura', 'sabaragamuwa', 'salesperson', 'salesperson123', 'RSG4383'),
('ES3799', 'salesperson', 'Nuwara Eliya', 'central', 'salesperson', 'salesperson', 'RC3810'),
('ES3945', 'salesperson', 'Hikkaduwa', 'southern', 'salesperson', 'salesperson123', 'RS2422'),
('ES3965', 'salesperson', 'Kurunegala', 'northWest', 'salesperson', 'salesperson123', 'RNW3881'),
('ES4620', 'salesperson', 'Colombo', 'western', 'salesperson', 'salesperson123', 'RW2912'),
('ES4731', 'salesperson', 'Badulla', 'uva', 'salesperson', 'salesperson123', 'RU4521'),
('ES4906', 'salesperson', 'Anuradhapura', 'northCentral', 'salesperson', 'salesperson123', 'RNC3031'),
('ES4932', 'salesperson', 'Badulla', 'uva', 'salesperson', 'salesperson123', 'RU4521'),
('admin', 'admin', '', 'Western', '', 'admin123', 'RW2912');

-- --------------------------------------------------------

--
-- Table structure for table `rc3810`
--

CREATE TABLE `rc3810` (
  `itemid` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rc3810`
--

INSERT INTO `rc3810` (`itemid`, `name`, `price`, `quantity`, `discount`) VALUES
('M1', 'Mens T-Shirt', 100, 2500, 10),
('M2', 'Mens Short', 1700, 9999, 5),
('M3', 'White Formal Shirt', 1500, 457, 20),
('W1', 'Womens Top', 50, 462, 12),
('W2', 'Black Pants', 1600, 447, 8);

-- --------------------------------------------------------

--
-- Table structure for table `retailshopdetails2`
--

CREATE TABLE `retailshopdetails2` (
  `Retailid` varchar(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Address` varchar(35) NOT NULL,
  `Province` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Shopemail` varchar(25) NOT NULL,
  `DateJ` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailshopdetails2`
--

INSERT INTO `retailshopdetails2` (`Retailid`, `Name`, `Contact`, `Address`, `Province`, `City`, `Shopemail`, `DateJ`) VALUES
('RW2917', 'ABC Company', '0112651002', 'No 21 Duuwa Road', 'Western', 'Colombo', 'abccomp@gmail.com', '2016-09-15'),
('RW3485', 'Burgundy Boutique', '0113654122', 'No 06 Negombo Road', 'Western', 'Negombo', 'burgundy@jlcompany.com', '2016-09-12'),
('RN2364', 'Loire Valley', '0772485573', '67 Nadeekkara Road', 'Northern', 'Mannar', 'loirevalley@hotmail.com', '2016-09-10'),
('RNC3031', 'Classy Missy', '0116015228', '9/27 Jethawana Road', 'North Central', 'Anuradhapura', 'classym@tpnation.com', '2016-09-09'),
('RE4544', 'Poppy Petals', '0112962153', 'No 06 Paththini Road', 'Eastern', 'Trincomalee', 'poppypetals@gmail.com', '2016-09-12'),
('RC3810', 'Sleek Chic', '072567891', '197 Gunahena Lane', 'Central', 'Nuwara Eliya', 'sleekchic@yahoomail.com', '2016-09-07'),
('RSG4383', 'La Rosa', '0777745677', 'No 27/1 Rathnapura Road', 'Sabaragamuwa', 'Ratnapura', 'larosafashion@dp.lk', '2016-09-18'),
('RNW3881', 'Fashion Itsy', '0112950122', 'No 97 Temple Road', 'North Western', 'Kurunegala', 'fashionitsy@gmail.com', '2016-09-19'),
('RS2422', 'Valley Green', '0112891009', 'No 12 Galle Road', 'Southern', 'Hikkaduwa', 'valleygreen@gmail.com', '2016-09-20'),
('RU4521', 'Verona Fashion', '0776754321', 'No 86 Madakini Lane', 'Uva', 'Badulla', 'veronafashion@gmail.com', '2016-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `rnw3881`
--

CREATE TABLE `rnw3881` (
  `itemid` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rnw3881`
--

INSERT INTO `rnw3881` (`itemid`, `name`, `price`, `quantity`, `discount`) VALUES
('M1', 'Mens T-Shirt', 100, 56, 10),
('M2', 'Mens Short', 1700, 268, 5),
('M3', 'White Formal Shirt', 1500, 457, 20),
('W1', 'Womens Top', 50, 454, 12),
('W2', 'Black Pants', 1600, 445, 8);

-- --------------------------------------------------------

--
-- Table structure for table `rs2422`
--

CREATE TABLE `rs2422` (
  `itemid` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rs2422`
--

INSERT INTO `rs2422` (`itemid`, `name`, `price`, `quantity`, `discount`) VALUES
('M1', 'Mens T-Shirt', 100, 7763, 10),
('M2', 'Mens Short', 1700, 263, 5),
('M3', 'White Formal Shirt', 1500, 406, 20),
('W1', 'Womens Top', 50, 463, 12),
('W2', 'Black Pants', 1600, 448, 8);

-- --------------------------------------------------------

--
-- Table structure for table `rw3485`
--

CREATE TABLE `rw3485` (
  `itemid` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rw3485`
--

INSERT INTO `rw3485` (`itemid`, `name`, `price`, `quantity`, `discount`) VALUES
('M1', 'Mens T-Shirt', 100, 6789, 10),
('M2', 'Mens Short', 1700, 1000, 5),
('M3', 'White Formal Shirt', 1500, 55555, 20),
('W1', 'Womens Top', 50, 459, 12),
('W2', 'Black Pants', 1600, 439, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `billno` int(5) NOT NULL,
  `date` datetime NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `quantity` int(10) NOT NULL,
  `cid` varchar(20) NOT NULL DEFAULT 'normalCustomer',
  `salesPerson` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`billno`, `date`, `total`, `quantity`, `cid`, `salesPerson`) VALUES
(4, '2016-09-30 11:05:02', '150', 2, 'normalCustomer', 'es3965'),
(3, '2016-09-30 10:58:51', '150', 2, 'normalCustomer', 'es3799'),
(2, '2016-09-30 10:46:18', '1650', 2, 'normalCustomer', 'ES3380'),
(1, '2016-09-30 10:40:59', '150', 2, 'normalCustomer', 'es1543'),
(5, '2016-09-30 13:03:19', '1650', 2, 'C2331', 'es3965'),
(6, '2016-09-30 13:46:14', '1700', 2, 'C4831', 'es3965'),
(7, '2016-09-30 13:46:56', '150', 2, 'C1534', 'es3965'),
(8, '2016-09-30 13:47:25', '300', 6, 'C2306', 'es3965'),
(9, '2016-09-30 10:58:51', '555', 6, 'c4', 'sss'),
(10, '2016-10-02 06:03:51', '50', 1, '', 'ES3380'),
(11, '2016-10-02 06:14:26', '100', 1, 'normalCustomer', 'ES3380'),
(12, '2016-10-02 06:14:39', '1700', 2, 'normalCustomer', 'ES3380'),
(13, '2016-10-07 11:03:32', '76100', 61, 'C1534', 'EM1684'),
(14, '2016-10-07 11:05:21', '3400', 3, 'C2331', 'EM1684'),
(15, '2016-10-07 11:11:29', '100', 1, 'normalCustomer', 'EM1684'),
(16, '2016-10-09 13:55:47', '50', 1, '', 'EM1684'),
(17, '2016-10-10 09:32:03', '10100', 7, 'normalCustomer', 'EM1684');

-- --------------------------------------------------------

--
-- Table structure for table `wcp1`
--

CREATE TABLE `wcp1` (
  `ProductID` varchar(5) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wcp1`
--

INSERT INTO `wcp1` (`ProductID`, `Name`, `Quantity`) VALUES
('B001', 'Buttons', 600),
('T001', 'Threads', 100),
('D004', 'Die stuff', 1200),
('C005', 'Chemicals', 50);

-- --------------------------------------------------------

--
-- Table structure for table `wsp1`
--

CREATE TABLE `wsp1` (
  `ProductID` varchar(5) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wsp1`
--

INSERT INTO `wsp1` (`ProductID`, `Name`, `Quantity`) VALUES
('B001', 'Buttons', 1500),
('T001', 'Threads', 19),
('D004', 'Die stuff', 120),
('C005', 'Chemicals', 500);

-- --------------------------------------------------------

--
-- Table structure for table `wwp1`
--

CREATE TABLE `wwp1` (
  `ProductID` varchar(5) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wwp1`
--

INSERT INTO `wwp1` (`ProductID`, `Name`, `Quantity`) VALUES
('B001', 'Buttons', 1500),
('T001', 'Threads', 100),
('D004', 'Die stuff', 80),
('C005', 'Chemicals', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `CID` (`CID`,`NIC`),
  ADD KEY `NIC` (`NIC`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EmpID`);

--
-- Indexes for table `itemcart`
--
ALTER TABLE `itemcart`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`EmpID`);

--
-- Indexes for table `rc3810`
--
ALTER TABLE `rc3810`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `retailshopdetails2`
--
ALTER TABLE `retailshopdetails2`
  ADD PRIMARY KEY (`Retailid`);

--
-- Indexes for table `rnw3881`
--
ALTER TABLE `rnw3881`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `rs2422`
--
ALTER TABLE `rs2422`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `rw3485`
--
ALTER TABLE `rw3485`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`billno`);

--
-- Indexes for table `wcp1`
--
ALTER TABLE `wcp1`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `wsp1`
--
ALTER TABLE `wsp1`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `wwp1`
--
ALTER TABLE `wwp1`
  ADD PRIMARY KEY (`ProductID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
