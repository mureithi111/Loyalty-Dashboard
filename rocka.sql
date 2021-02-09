-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 04:03 PM
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
-- Database: `loyalty`
--

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
(4, '+254711900900', 'Alex', 'doe', 'marcus', 'Male', '223344', 'alexmurii50@gmail.com', '3b712de48137572f3849aabd5666a4e3', '2020-12-02 05:15:09'),
(5, '+254711800800', 'mary', 'jane', 'doe', 'female', '223345', 'mary@gmail.com', '3083202a936b7d0ef8b680d7ae73fa1a', '2020-12-02 05:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(11) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `casheerId` int(15) NOT NULL,
  `points` varchar(75) NOT NULL,
  `referenceNumber` varchar(150) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `phonenumber`, `casheerId`, `points`, `referenceNumber`, `dateTime`) VALUES
(4, '+254711800800', 2, '150', 'UYT0XAAC1QQ', '0000-00-00 00:00:00'),
(5, '+254711900900', 2, '200', 'PTY0FJGZW1D', '2020-12-17 04:20:47');

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
(2, '+254711900900', '20', 'PIWV9LU8JT', '2020-12-20 04:15:53'),
(3, '+254711900900', '5', 'PIWC2V5IJ1', '2020-12-20 05:12:23'),
(4, '+254711900900', '10', 'PIWOC56VQU', '2020-12-20 05:22:55'),
(5, '+254711900900', '5', 'PIWD5MOZ9L', '2020-12-20 05:30:57'),
(6, '+254711900900', '10', 'PIWDRISZFC', '2020-12-21 05:42:12'),
(7, '+254711900900', '10', 'PIWF68U073', '2020-12-21 05:55:39');

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
(2, '+254711800800', '+254711900900', '20', 'TPLS7YUA2PNW', '2020-12-02 05:25:16'),
(3, '+254711900900', '+254711800800', '10', 'TPLD6PK0YCGO', '2020-12-21 05:54:37');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `transferpoints`
--
ALTER TABLE `transferpoints`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchaseitem`
--
ALTER TABLE `purchaseitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transferpoints`
--
ALTER TABLE `transferpoints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
