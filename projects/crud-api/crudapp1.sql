-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2026 at 08:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudapp1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addusers`
--

CREATE TABLE `tbl_addusers` (
  `user_id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `added_date_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_addusers`
--

INSERT INTO `tbl_addusers` (`user_id`, `rid`, `name`, `email`, `phone`, `added_date_time`) VALUES
(1, 1, 'vijay', 'vijay@gmail.com', 9998003879, '18/03/2026 12:27:02 pm'),
(2, 1, 'mitesh', 'mitesh007@gmail.com', 9173357218, '18/03/2026 12:27:15 pm'),
(3, 1, 'prakruti', 'prakruti@gmail.com', 9173357217, '18/03/2026 12:27:30 pm'),
(4, 1, 'sanket', 'sanket@gmail.com', 9412121212, '18/03/2026 12:33:54 pm'),
(5, 2, 'harmit', 'harmit007@gmail.com', 9173357217, '18/03/2026 12:35:25 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `ctid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`ctid`, `sid`, `ctname`) VALUES
(1, 1, 'Rajkot'),
(2, 1, 'Ahemdabad'),
(3, 1, 'Navsari'),
(4, 1, 'Surat'),
(5, 3, 'Mumbai'),
(6, 3, 'Nagpur'),
(7, 4, 'udaipur'),
(8, 4, 'Jaipur'),
(9, 4, 'Kota'),
(10, 2, 'Varansi'),
(11, 2, 'Mathura'),
(12, 2, 'Agra'),
(13, 5, 'san sansico'),
(14, 5, 'los Angeles');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`cid`, `cname`) VALUES
(1, 'india'),
(2, 'usa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `rid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctid` int(11) NOT NULL,
  `added_date_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`rid`, `photo`, `fullname`, `email`, `password`, `phone`, `cid`, `sid`, `ctid`, `added_date_time`) VALUES
(1, 'uploads/customers/brijesh.jpg', 'brijesh pandey', 'brijesh@gmail.com', 'YnJpaiQkMTIz', 9998003879, 1, 1, 3, '16/03/2026 12:58:20 pm'),
(2, 'uploads/customers/profile-2.png', 'govind', 'govind@gmail.com', 'MTIzNDU2', 9173357218, 1, 1, 1, '16/03/2026 13:05:38 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`sid`, `cid`, `sname`) VALUES
(1, 1, 'gujrat'),
(2, 1, 'Uttar pradesh'),
(3, 1, 'Mahrastra'),
(4, 1, 'Rajsthan'),
(5, 2, 'california'),
(6, 2, 'navada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addusers`
--
ALTER TABLE `tbl_addusers`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`ctid`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `ctid` (`ctid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addusers`
--
ALTER TABLE `tbl_addusers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
