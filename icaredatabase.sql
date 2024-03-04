-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 11:28 PM
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
-- Database: `icare`
--

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `amountCovered` int(50) NOT NULL,
  `accountID` int(50) NOT NULL,
  `cost` int(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`id`, `username`, `amountCovered`, `accountID`, `cost`, `create_datetime`) VALUES
(1, 'Test', 1, 1, 1, '2024-03-04 23:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `internet`
--

CREATE TABLE `internet` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `internetSpeed` int(50) NOT NULL,
  `accountID` varchar(50) NOT NULL,
  `cost` int(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internet`
--

INSERT INTO `internet` (`id`, `username`, `internetSpeed`, `accountID`, `cost`, `create_datetime`) VALUES
(1, 'Test', 1, '1', 1, '2024-03-04 23:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `lawn`
--

CREATE TABLE `lawn` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `lawnSize` int(50) NOT NULL,
  `numberObstacle` int(50) NOT NULL,
  `cost` int(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawn`
--

INSERT INTO `lawn` (`id`, `username`, `lawnSize`, `numberObstacle`, `cost`, `create_datetime`) VALUES
(1, 'Test', 1, 1, 1, '2024-03-04 23:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `planID` varchar(50) NOT NULL,
  `cost` int(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`id`, `username`, `phoneNumber`, `planID`, `cost`, `create_datetime`) VALUES
(1, 'Test', '1', '1', 1, '2024-03-04 23:01:47');

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `income` int(50) NOT NULL,
  `hasphone` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `username`, `email`, `password`, `fname`, `lname`, `age`, `income`, `hasphone`, `create_datetime`) VALUES
(2, 'Test', 'Test', '0cbc6611f5540bd0809a388dc95a615b', 'Test', 'Test', 1, 1, 'on', '2024-03-04 22:02:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internet`
--
ALTER TABLE `internet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawn`
--
ALTER TABLE `lawn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `internet`
--
ALTER TABLE `internet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lawn`
--
ALTER TABLE `lawn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
