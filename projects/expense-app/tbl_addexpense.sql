-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2026 at 10:05 AM
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
-- Database: `expapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addexpense`
--

CREATE TABLE `tbl_addexpense` (
  `expid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `catid` int(11) NOT NULL,
  `descriptions` text NOT NULL,
  `ammount` int(11) NOT NULL,
  `added_date_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_addexpense`
--

INSERT INTO `tbl_addexpense` (`expid`, `name`, `catid`, `descriptions`, `ammount`, `added_date_time`) VALUES
(2, 'innovative schools fees', 3, 'fees on every 1st of date', 95000, '2026-04-10'),
(4, 'child fees', 3, 'good', 52500, '2026-04-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addexpense`
--
ALTER TABLE `tbl_addexpense`
  ADD PRIMARY KEY (`expid`),
  ADD KEY `catid` (`catid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addexpense`
--
ALTER TABLE `tbl_addexpense`
  MODIFY `expid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
