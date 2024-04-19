-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 12:24 PM
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
-- Database: `mvcmyappdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addchef`
--

CREATE TABLE `tbl_addchef` (
  `chefid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `positionid` int(11) NOT NULL,
  `descriptions` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_addchef`
--

INSERT INTO `tbl_addchef` (`chefid`, `photo`, `name`, `positionid`, `descriptions`, `address`) VALUES
(1, 'uploads/chefs/chef1.jpg', 'Master chef Munir ahemad', 1, 'good in cooking best warded from bharat sarkar in 2020', '150 feet ring road rajkot'),
(2, 'uploads/chefs/chef2.jpg', 'assistant chef uttam', 3, 'Best chef awarded in bharat sarkar and get visa of usa', 'ahemdabad cg road '),
(3, 'uploads/chefs/chef3.jpg', 'Mrs. Kavita desai', 2, 'Best chef awarded in bharat sarkar and get visa of usa', 'behind kalawad road rajkot'),
(4, 'uploads/chefs/chefs4.webp', 'Brijesh kumar pandey', 1, 'good to cook bati choka famous in usa', 'usa wenborn'),
(5, 'uploads/chefs/chef5.jpg', 'Mansi', 2, 'good in Gujrat kathiyawadi cokking', 'melborn behind  usa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addfoodcategory`
--

CREATE TABLE `tbl_addfoodcategory` (
  `foodcatid` int(11) NOT NULL,
  `foodcategoryname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_addfoodcategory`
--

INSERT INTO `tbl_addfoodcategory` (`foodcatid`, `foodcategoryname`) VALUES
(1, 'starter'),
(2, 'BreakFast'),
(3, 'Lunch'),
(4, 'Dinner');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminid`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin@12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chefposition`
--

CREATE TABLE `tbl_chefposition` (
  `positionid` int(11) NOT NULL,
  `positions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_chefposition`
--

INSERT INTO `tbl_chefposition` (`positionid`, `positions`) VALUES
(1, 'Master chef'),
(2, 'Chef'),
(3, 'Asistent Cook'),
(4, 'Cook'),
(5, 'Trainee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customerid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `register_date_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customerid`, `photo`, `name`, `email`, `password`, `phone`, `address`, `register_date_time`) VALUES
(1, 'uploads/customers/chef1.jpg', 'brijesh', 'bkpandey.pandey@gmail.com', 'MTIzNDU2', 9998003879, 'rajkot', '07/10/2023 15:20:11 pm'),
(2, 'uploads/customers/chef2.jpg', 'fenil', 'fenil@gmail.com', 'MTIzNA==', 9998003879, 'ahemdabad', '07/10/2023 15:39:34 pm'),
(3, 'uploads/customers/chef3.jpg', 'chirag', 'chirag007@gmail.com', 'MTIzNDU2', 856454545454, '150 feet ring road rajkot', '07/10/2023 15:46:00 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addchef`
--
ALTER TABLE `tbl_addchef`
  ADD PRIMARY KEY (`chefid`),
  ADD KEY `positionid` (`positionid`);

--
-- Indexes for table `tbl_addfoodcategory`
--
ALTER TABLE `tbl_addfoodcategory`
  ADD PRIMARY KEY (`foodcatid`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `tbl_chefposition`
--
ALTER TABLE `tbl_chefposition`
  ADD PRIMARY KEY (`positionid`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addchef`
--
ALTER TABLE `tbl_addchef`
  MODIFY `chefid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_addfoodcategory`
--
ALTER TABLE `tbl_addfoodcategory`
  MODIFY `foodcatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_chefposition`
--
ALTER TABLE `tbl_chefposition`
  MODIFY `positionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
