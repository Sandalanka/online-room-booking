-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2019 at 05:46 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `room_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `idcard` int(11) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `idcard`, `gmail`, `password`, `date`, `is_delete`) VALUES
(1, '', 0, 'admin@gmail.com', 'password', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `idcard` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `categary` varchar(100) NOT NULL,
  `room` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `idcard`, `email`, `categary`, `room`, `is_delete`) VALUES
(1, 'amal', 4567898, 'amal@gmai.com', 'family', 4, 1),
(2, 'mk', 12345678, 'admin@gmail.com', 'nomal', 5, 2),
(3, 'mk', 12345678, 'kalana@gmail.com', 'nomal', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `manger`
--

CREATE TABLE `manger` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `idcard` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manger`
--

INSERT INTO `manger` (`id`, `name`, `idcard`, `email`, `password`, `lastlogin`, `is_deleted`) VALUES
(1, 'sandalanka', 4567898, '1415sandalanka@gmail.com', '00000', '2019-02-08 10:11:38', 0),
(2, 'kalana', 4567898, 'admin@gmail.com', 'password', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `idcard` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `categary` varchar(100) NOT NULL,
  `room` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reception_details`
--

CREATE TABLE `reception_details` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `idcard` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reception_details`
--

INSERT INTO `reception_details` (`id`, `name`, `idcard`, `email`, `password`, `lastlogin`, `is_delete`) VALUES
(1, 'kamal', 12345678, 'kamal@gmail.com', '00000', '0000-00-00 00:00:00', 1),
(2, 'amal', 4567898, 'kamal@gmail.com', '00000', '0000-00-00 00:00:00', 1),
(3, 'kalana', 0, 'kamal@gmail.com', '00000', '0000-00-00 00:00:00', 1),
(4, 'kalana', 4567898, 'kalana@gmail.com', 'password', '2019-02-08 10:12:39', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `categary` varchar(100) NOT NULL,
  `charge` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `categary`, `charge`, `is_delete`) VALUES
(1, '', 0, 1),
(2, 'family', 4500, 1),
(3, 'nomal', 2500, 1),
(4, 'nomal', 3200, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manger`
--
ALTER TABLE `manger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reception_details`
--
ALTER TABLE `reception_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manger`
--
ALTER TABLE `manger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reception_details`
--
ALTER TABLE `reception_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
