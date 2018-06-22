-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 04:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cps`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry_records`
--

CREATE TABLE `entry_records` (
  `plotno` varchar(30) NOT NULL,
  `carid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `vehicle_type` varchar(30) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `entry_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry_records`
--

INSERT INTO `entry_records` (`plotno`, `carid`, `name`, `vehicle_type`, `user_type`, `entry_time`) VALUES
('c2', '123', 'amit', '4 - Wheeler', 'Visitor', '2018-06-22 07:27:39'),
('c3', '1234', 'Rohit', '4 - Wheeler', 'Employee', '2018-06-22 07:28:17'),
('c3', '213', 'rakesh', '2 - Wheeler', 'Visitor', '2018-06-22 16:39:57'),
('c4', '5010', 'Jay', '2 - Wheeler', 'Visitor', '2018-06-22 16:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `exit_records`
--

CREATE TABLE `exit_records` (
  `plotno` varchar(30) NOT NULL,
  `carid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `vehicle_type` varchar(30) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `exit_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exit_records`
--

INSERT INTO `exit_records` (`plotno`, `carid`, `name`, `vehicle_type`, `user_type`, `exit_time`) VALUES
('c3', '4356', 'Amit', '2 - Wheeler', 'Visitor', '2018-06-22 07:22:45'),
('c2', '444', 'Atul', '2 - Wheeler', 'Employee', '2018-06-22 07:20:23'),
('c4', '5010', 'Jay', '2 - Wheeler', 'Visitor', '2018-06-22 16:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `carid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `plotno` varchar(30) NOT NULL,
  `available` varchar(30) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `vehicle_type` varchar(30) NOT NULL,
  `user_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`carid`, `name`, `plotno`, `available`, `time`, `vehicle_type`, `user_type`) VALUES
('1234', 'Rohit', 'c1', 'No', '2018-06-21 06:58:34.825594', '4 - Wheeler', 'Employee'),
('123', 'amit', 'c2', 'No', '2018-06-21 06:58:34.825594', '4 - Wheeler', 'Visitor'),
('', '', 'c3', 'Yes', '2018-06-21 06:58:34.825594', '', ''),
('', '', 'c4', 'Yes', '0000-00-00 00:00:00.000000', '', ''),
('', '', 'c5', 'Yes', '2018-06-21 06:58:34.825594', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'amit', '123'),
(2, 'Rohit', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entry_records`
--
ALTER TABLE `entry_records`
  ADD UNIQUE KEY `carid` (`carid`);

--
-- Indexes for table `exit_records`
--
ALTER TABLE `exit_records`
  ADD UNIQUE KEY `carid` (`carid`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD UNIQUE KEY `plotno` (`plotno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
