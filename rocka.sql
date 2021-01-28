-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 01:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rocka`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `id` int(11) NOT NULL,
  `firstname` varchar(70) NOT NULL,
  `middlename` varchar(75) NOT NULL,
  `lastname` varchar(85) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `nationalId` varchar(15) NOT NULL,
  `phonenumber` varchar(125) NOT NULL,
  `email` varchar(115) NOT NULL,
  `cashierRole` varchar(185) NOT NULL,
  `password` varchar(254) NOT NULL,
  `dateRegistered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `nationalId`, `phonenumber`, `email`, `cashierRole`, `password`, `dateRegistered`) VALUES
(2, 'alex', 'marcus', 'doe', 'male', '88997865', '+254711750934', 'alex@gmail.com', 'manager', '22a10b04a781fc0575f18870fa6f9f1c', '2021-01-02 16:09:07'),
(3, 'mary', 'jane', 'doe', 'female', '98123456', '+254722910910', 'mary@gmail.com', 'manager', '5903c3b17afcc5d2850ccd0cb6cd7b9d', '2021-01-02 16:10:57'),
(4, 'helen', 'doris', 'hugo', 'female', '10445566', '+254722880997', 'helen@gmail.com', 'cashier', '87223194fbf4a6752e29783d7ffd6582', '2021-01-02 16:51:56'),
(5, 'alixis', 'jogan', 'nohan', 'male', '22334455', '+254711800900', 'alex25@gmail.com', 'cashier', '09fe57d00a208096716fcd522aced9a1', '2021-01-02 19:00:08');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `firstname` varchar(120) NOT NULL,
  `middlename` varchar(125) NOT NULL,
  `lastname` varchar(130) NOT NULL,
  `gender` varchar(75) NOT NULL,
  `idNumber` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(150) NOT NULL,
  `registerDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `phoneNumber`, `firstname`, `middlename`, `lastname`, `gender`, `idNumber`, `email`, `password`, `registerDate`) VALUES
(4, '254711900900', 'Alex', 'doe', 'marcus', 'Male', '223344', 'alexmurii50@gmail.com', '2211', '2020-12-02 05:15:09'),
(5, '254711800800', 'mary', 'jane', 'doe', 'female', '223345', 'mary@gmail.com', '3322', '2020-12-02 05:21:48'),
(6, '254711700700', 'ann', 'stella', 'nbxbz', 'female', '66778899', 'annstella@gmail.com', '7788', '2021-01-09 06:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(11) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `casheirId` int(15) NOT NULL,
  `points` varchar(75) NOT NULL,
  `referenceNumber` varchar(150) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `phonenumber`, `casheirId`, `points`, `referenceNumber`, `dateTime`) VALUES
(4, '254711800800', 2, '150', 'UYT0XAAC1QQ', '0000-00-00 00:00:00'),
(5, '254711900900', 2, '200', 'PTY0FJGZW1D', '2020-12-17 04:20:47'),
(6, '254711900900', 2, '6.6666666666667', '45A0XFZTHU62', '2021-01-08 16:06:10'),
(7, '254711900900', 3, '1', 'DSK1MVBTAPC6', '2021-01-08 16:20:50'),
(8, '254711900900', 3, '1', 'INJD1UXWAEYB', '2021-01-08 16:21:22'),
(9, '254711900900', 3, '6.6666666666667', 'S71XTHFKPWV8', '2021-01-08 16:22:46'),
(10, '254711900900', 2, '1.3333333333333', 'G839IE1SOXMV', '2021-01-08 17:03:37'),
(11, '254711900900', 2, '5', 'OTXVM1GD2PIU', '2021-01-16 05:38:47'),
(12, '254711800800', 2, '1', 'LAVMYSJT56EH', '2021-01-16 06:19:26'),
(13, '254711900900', 2, '1', '8WPZOY6X7290', '2021-01-16 06:20:41'),
(14, '254711700700', 2, '1', 'MGXZW5BE9UN7', '2021-01-16 06:21:03'),
(15, '254711800800', 2, '5', 'FPRVSXE1Q7CZ', '2021-01-17 18:45:51'),
(16, '254711900900', 2, '1', 'NBQFA5RY7CVE', '2021-01-17 20:44:44'),
(17, '254711800800', 2, '8.8333333333333', '7KEOUZIRD1NH', '2021-01-21 06:21:28'),
(18, '254711900900', 5, '16.666666666667', 'NMCKHFXREAQ8', '2021-01-21 09:18:18'),
(19, '254711800800', 5, '8.8333333333333', 'M5KAS89W6P2U', '2021-01-22 04:57:14'),
(20, '254711800800', 5, '6.6666666666667', 'ZW2UTD4V81RL', '2021-01-22 05:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `purchaseitem`
--

CREATE TABLE `purchaseitem` (
  `id` int(11) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `points` varchar(50) NOT NULL,
  `referenceNumber` varchar(150) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchaseitem`
--

INSERT INTO `purchaseitem` (`id`, `phonenumber`, `points`, `referenceNumber`, `dateTime`) VALUES
(2, '254711900900', '20', 'PIWV9LU8JT', '2020-12-20 04:15:53'),
(3, '254711900900', '5', 'PIWC2V5IJ1', '2020-12-20 05:12:23'),
(4, '254711900900', '10', 'PIWOC56VQU', '2020-12-20 05:22:55'),
(5, '254711900900', '5', 'PIWD5MOZ9L', '2020-12-20 05:30:57'),
(6, '254711900900', '10', 'PIWDRISZFC', '2020-12-21 05:42:12'),
(7, '254711900900', '10', 'PIWF68U073', '2020-12-21 05:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `rewardlimit`
--

CREATE TABLE `rewardlimit` (
  `id` int(11) NOT NULL,
  `reward_Limit` int(15) NOT NULL,
  `dateUpdated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rewardlimit`
--

INSERT INTO `rewardlimit` (`id`, `reward_Limit`, `dateUpdated`) VALUES
(1, 150, '2021-01-01 18:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `transferpoints`
--

CREATE TABLE `transferpoints` (
  `id` int(11) NOT NULL,
  `fromPhonenumber` varchar(100) NOT NULL,
  `toPhonenumber` varchar(110) NOT NULL,
  `points` varchar(10) NOT NULL,
  `referenceNumber` varchar(170) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transferpoints`
--

INSERT INTO `transferpoints` (`id`, `fromPhonenumber`, `toPhonenumber`, `points`, `referenceNumber`, `dateTime`) VALUES
(2, '254711800800', '+254711900900', '20', 'TPLS7YUA2PNW', '2020-12-02 05:25:16'),
(3, '254711900900', '+254711800800', '10', 'TPLD6PK0YCGO', '2020-12-21 05:54:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchaseitem`
--
ALTER TABLE `purchaseitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rewardlimit`
--
ALTER TABLE `rewardlimit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transferpoints`
--
ALTER TABLE `transferpoints`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `purchaseitem`
--
ALTER TABLE `purchaseitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rewardlimit`
--
ALTER TABLE `rewardlimit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transferpoints`
--
ALTER TABLE `transferpoints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
