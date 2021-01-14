-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 03:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user` varchar(15) NOT NULL,
  `userid` int(4) NOT NULL,
  `email id` varchar(30) NOT NULL,
  `balance` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user`, `userid`, `email id`, `balance`) VALUES
('ashish', 1001, 'ashish@gmail.com', 3778359),
('akash', 1002, 'akash@gmail.com', 171909),
('vinay', 1003, 'vinay@gmail.com', 132716),
('Rahul', 1004, 'rahul@gmail.com', 153666),
('rakesh', 1005, 'rakesh123@gmail.com', 124183),
('mohan', 1006, 'mohan56@gmail.com', 148896),
('lala', 1007, 'lalarocks@gmail.com', 148666),
('rocky', 1008, 'rocky34@gmail.com', 160138),
('paridhi', 1009, 'pari3409@gmail.com', 147166),
('riya', 1010, 'riya23@gmail.com', 124166),
('madan', 1011, 'madanlal@gmail.com', 217066),
('mohan', 1012, 'mohanlal@gmail.com', 149666);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `srno` int(5) NOT NULL,
  `userid` int(4) NOT NULL,
  `user` varchar(15) NOT NULL,
  `ruserid` int(4) NOT NULL,
  `ruser` varchar(11) NOT NULL,
  `amount` int(15) NOT NULL,
  `comment` varchar(40) NOT NULL,
  `updated` int(25) NOT NULL,
  `rupdate` int(25) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`srno`, `userid`, `user`, `ruserid`, `ruser`, `amount`, `comment`, `updated`, `rupdate`, `timestamp`) VALUES
(1, 1002, 'akash', 1001, 'ashish', 5000, 'Transfer', 171909, 3783359, '2021-01-14 19:28:53'),
(2, 1003, 'vinay', 1006, 'mohan', 500, 'Atm charges', 132716, 149396, '2021-01-14 19:30:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `userid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `srno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
