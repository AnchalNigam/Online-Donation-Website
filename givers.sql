-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2017 at 07:06 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `givers`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `NGO` varchar(50) NOT NULL,
  `Mobile` text NOT NULL,
  `Aadhar` text NOT NULL,
  `Amount` text NOT NULL,
  `Date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `Name`, `NGO`, `Mobile`, `Aadhar`, `Amount`, `Date`) VALUES
(3, 'shinchan@gmail.com', 'Sarthak Foundation', '2147483647', '2147483647', '10000', 'August,05 2017'),
(4, 'shinchan@gmail.com', 'Sarthak Foundation', '2147483647', '2147483647', '10000', 'August,05 2017'),
(5, 'shinchan@gmail.com', 'Sarthak Foundation', '9415367430', '123456789012', '10000', 'August,05 2017'),
(6, 'shinchan@gmail.com', 'Sarthak Foundation', '9026224948', '123456789012', '100', 'August,05 2017');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Occupation` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Birthday` text NOT NULL,
  `Reg_date` text NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Password`, `Occupation`, `Gender`, `Birthday`, `Reg_date`, `hash`, `active`) VALUES
(46, 'shinchan', 'shinchan@gmail.com', '7c9515c20d806973c6b7431bc8ffe070', 'web developer', 'M', '06/12/1996', 'August,05 2017', 'f0adc8838f4bdedde4ec2cfad0515589', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
