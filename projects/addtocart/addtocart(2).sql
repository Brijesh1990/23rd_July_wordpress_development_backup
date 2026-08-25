-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2026 at 03:44 PM
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
-- Database: `addtocart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addcategory`
--

CREATE TABLE `tbl_addcategory` (
  `catid` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_addcategory`
--

INSERT INTO `tbl_addcategory` (`catid`, `categoryname`) VALUES
(1, 'electronics'),
(2, 'mens shirts'),
(3, 'womens watches');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addproducts`
--

CREATE TABLE `tbl_addproducts` (
  `pid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `oldprice` int(11) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `descriptions` text NOT NULL,
  `availability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_addproducts`
--

INSERT INTO `tbl_addproducts` (`pid`, `catid`, `photo`, `pname`, `oldprice`, `offerprice`, `qty`, `descriptions`, `availability`) VALUES
(1, 1, 'uploads/products/brijesh.jpg', 'philips owan', 8500, 6500, 1, 'good', 'yes'),
(2, 2, 'uploads/products/mens.webp', 'mesn shirts', 450, 350, 1, 'god', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminid`, `email`, `password`) VALUES
(1, 'superadmin@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `added_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartid`, `pid`, `customer_id`, `quantity`, `subtotal`, `added_date`, `status`) VALUES
(1, 2, 3, 1, 1, '29/05/2026 13:27:48 pm', 'pending'),
(2, 1, 3, 4, 26000, '29/05/2026 13:28:29 pm', 'pending'),
(3, 2, 2, 1, 1, '29/05/2026 14:02:22 pm', 'pending'),
(4, 2, 3, 1, 1, '29/05/2026 14:03:13 pm', 'pending'),
(5, 2, 2, 1, 350, '01/06/2026 13:35:52 pm', 'pending');

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
(1, 1, 'rajkot'),
(2, 1, 'ahemdabad'),
(3, 1, 'porbadar'),
(4, 1, 'surat'),
(5, 2, 'varansi'),
(6, 2, 'agra');

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
(2, 'usa'),
(3, 'srilanka'),
(4, 'china');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctid` int(11) NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `photo`, `username`, `email`, `password`, `phone`, `address`, `cid`, `sid`, `ctid`, `added_date`) VALUES
(1, 'uploads/customers/profile-2.png', 'brij', 'bkpandey.pandey@gmail.com', '$2y$10$e9hyuNQckYEk2AYDGXhWeOuyPEnOp.tOZnsNRpe4jcNtpVTOwilB.', 921121212, 'hi', 1, 2, 5, '25/05/2026 12:51:58 pm'),
(2, 'uploads/customers/profile-4.png', 'rij', 'brijesh@gmail.com', '$2y$10$2XdlVQNaYQ0mr3.CdyFnJ.oE0UirgXlSp4CBp8f29prU/x6H5bwu.', 912121212121, 'hi', 1, 2, 6, '25/05/2026 13:10:35 pm'),
(3, 'uploads/customers/icons.svg', 'sweta007', 'sweta007@gmail.com', '$2y$10$VsUfZJBTKxZ0FuZdKjnitOVz0bXr6gtusAXzisMHs5H4/.KspFb26', 9998003879, '150 feet ring road rajkot', 1, 2, 6, '29/05/2026 12:41:38 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_amount` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `customer_id`, `name`, `mobile`, `email`, `address`, `city`, `pincode`, `payment_id`, `order_amount`, `payment_status`, `order_date`) VALUES
(1, 2, 'Ravi Dhandhukiya', 9998003879, 'bkpandey.pandey@gmail.com', 'Amrut Nagar, Chakkar Gadh Road Street No-2, Block No.A/5', 'Amreli', 365601, 0, 1, 'Paid', '2026-06-01 13:33:03'),
(2, 2, 'brijesh', 9998003879, 'bkpandey.pandey@gmail.com', 'Amrut Nagar, Chakkar Gadh Road Street No-2, Block No.A/5', 'Amreli', 365601, 0, 1, 'Paid', '2026-06-01 13:36:48'),
(3, 2, 'brijesh', 9998003879, 'bkpandey.pandey@gmail.com', 'Amrut Nagar, Chakkar Gadh Road Street No-2, Block No.A/5', 'Amreli', 365601, 0, 1, 'Paid', '2026-06-01 13:49:03');

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
(2, 1, 'uttar pradesh'),
(3, 1, 'madhya pradesh'),
(4, 1, 'rajasthan'),
(5, 2, 'california'),
(6, 2, 'navada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addcategory`
--
ALTER TABLE `tbl_addcategory`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `tbl_addproducts`
--
ALTER TABLE `tbl_addproducts`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `catid` (`catid`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`ctid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `ctid` (`ctid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

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
-- AUTO_INCREMENT for table `tbl_addcategory`
--
ALTER TABLE `tbl_addcategory`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_addproducts`
--
ALTER TABLE `tbl_addproducts`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_addproducts`
--
ALTER TABLE `tbl_addproducts`
  ADD CONSTRAINT `catid` FOREIGN KEY (`catid`) REFERENCES `tbl_addcategory` (`catid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD CONSTRAINT `sid` FOREIGN KEY (`sid`) REFERENCES `tbl_state` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD CONSTRAINT `cid` FOREIGN KEY (`cid`) REFERENCES `tbl_country` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
