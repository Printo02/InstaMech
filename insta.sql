-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2024 at 07:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insta`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `cvvno` int(11) NOT NULL,
  `expirmonth` varchar(50) NOT NULL,
  `expiryear` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `accnumber` varchar(30) NOT NULL,
  `cardno` varchar(30) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forget_password`
--

CREATE TABLE `forget_password` (
  `forgetpassword_id` int(11) NOT NULL,
  `email_id` varchar(70) NOT NULL,
  `random_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `forget_password`
--

INSERT INTO `forget_password` (`forgetpassword_id`, `email_id`, `random_number`) VALUES
(1, 'varghesejoshy50@gmail.com', 288271);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `user_type`, `status`) VALUES
('crane@gmail.com', '12345', 'crane', 'active'),
('deepu@gmail.com', '123456', 'customer', 'active'),
('joshy@gmail.com', '123456', 'customer', 'active'),
('mobin@gmail.com', '123456', 'mechanic', 'rejected'),
('subin@gmail.com', '123456', 'mechanic', 'active'),
('varghesejoshy50@gmail.com', 'admin@123', 'admin', 'active'),
('vishnu@gmail.com', '123456', 'carriage', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `reg_type` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `paystatus` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `name`, `email`, `phone`, `address`, `reg_type`, `state`, `city`, `district`, `paystatus`, `picture`) VALUES
(13, 'joshy', 'joshy@gmail.com', '9989765432', 'paruthickal', 'customer', 'kerala', 'thalavady', 'alappuzha', 'Inactive', 'WhatsApp Image 2024-04-23 at 1.10.33 PM.jpeg'),
(14, 'crane', 'crane@gmail.com', '9878098988', 'paruthickal', 'crane', 'kerala', 'thalavady', 'alappuzha', 'Inactive', 'WhatsApp Image 2024-04-23 at 1.10.34 PM (1).jpeg'),
(15, 'mobin', 'mobin@gmail.com', '9054343212', 'dhwdhiuhc', 'mechanic', 'kerala', 'thalavady', 'alappuzha', 'Inactive', 'Screenshot 2024-05-30 114548.png'),
(16, 'subin', 'subin@gmail.com', '9878098988', 'cheramkunnil', 'mechanic', 'kerala', 'edathua', 'alappuzha', 'Inactive', 'obj.jpg'),
(17, 'vishnu', 'vishnu@gmail.com', '9878098988', 'kalathilparambil', 'carriage', 'kerala', 'alapuzha', 'alappuzha', 'Inactive', 'WhatsApp Image 2024-04-23 at 1.10.34 PM (1).jpeg'),
(18, 'deepu', 'deepu@gmail.com', '9989765432', 'ottathengil', 'customer', 'kerala', 'thalavady', 'alappuzha', 'Inactive', 'work.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `servicedetails`
--

CREATE TABLE `servicedetails` (
  `service_id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_description` text NOT NULL,
  `s_rate` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `picture` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `servicedetails`
--

INSERT INTO `servicedetails` (`service_id`, `s_name`, `s_description`, `s_rate`, `email`, `comp_id`, `picture`, `status`) VALUES
(3, 'lifting', 'nefnnfrn', 29999, 'crane@gmail.com', 6, 'WhatsApp Image 2024-08-17 at 9.59.28 AM.jpeg', ''),
(4, 'carring', 'tj35oto5go5j', 2000, 'crane@gmail.com', 8, 'WhatsApp Image 2024-04-23 at 11.50.29 AM.jpeg', ''),
(5, 'judin', 'car mechanic', 10000, 'subin@gmail.com', 8, 'WhatsApp Image 2024-04-19 at 10.13.35 AM.jpeg', ''),
(6, 'storing', 'fnenflr', 5000, 'vishnu@gmail.com', 6, 'obj.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest`
--

CREATE TABLE `servicerequest` (
  `s_id` int(11) NOT NULL,
  `from_email` varchar(50) NOT NULL,
  `to_email` varchar(50) NOT NULL,
  `s_date` date NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `servicerequest`
--

INSERT INTO `servicerequest` (`s_id`, `from_email`, `to_email`, `s_date`, `description`, `date`, `status`) VALUES
(5, 'joshy@gmail.com', 'crane@gmail.com', '2024-08-22', 'kjbkjkhkh', '2024-08-21', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_msg`
--

CREATE TABLE `tbl_msg` (
  `msgid` int(11) NOT NULL,
  `send_from` varchar(50) NOT NULL,
  `send_to` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(100) NOT NULL,
  `response` varchar(20) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehiclecategory`
--

CREATE TABLE `vehiclecategory` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vehiclecategory`
--

INSERT INTO `vehiclecategory` (`cat_id`, `cat_name`) VALUES
(5, 'two wheeler'),
(6, 'three wheeler');

-- --------------------------------------------------------

--
-- Table structure for table `vehiclecompany`
--

CREATE TABLE `vehiclecompany` (
  `comp_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `comp_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vehiclecompany`
--

INSERT INTO `vehiclecompany` (`comp_id`, `cat_id`, `comp_name`) VALUES
(3, 3, 'bajaj'),
(6, 0, 'honda'),
(8, 5, 'bajaj'),
(9, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `forget_password`
--
ALTER TABLE `forget_password`
  ADD PRIMARY KEY (`forgetpassword_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `servicedetails`
--
ALTER TABLE `servicedetails`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tbl_msg`
--
ALTER TABLE `tbl_msg`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `vehiclecategory`
--
ALTER TABLE `vehiclecategory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `vehiclecompany`
--
ALTER TABLE `vehiclecompany`
  ADD PRIMARY KEY (`comp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forget_password`
--
ALTER TABLE `forget_password`
  MODIFY `forgetpassword_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `servicedetails`
--
ALTER TABLE `servicedetails`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `servicerequest`
--
ALTER TABLE `servicerequest`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_msg`
--
ALTER TABLE `tbl_msg`
  MODIFY `msgid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehiclecategory`
--
ALTER TABLE `vehiclecategory`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehiclecompany`
--
ALTER TABLE `vehiclecompany`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
