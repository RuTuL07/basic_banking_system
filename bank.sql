-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 12:41 PM
-- Server version: 8.0.25
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `sn` int NOT NULL,
  `sender` varchar(150) NOT NULL,
  `receiver` varchar(150) NOT NULL,
  `amount` int DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`sn`, `sender`, `receiver`, `amount`, `datetime`) VALUES
(1, 'Rutul Patel', 'Sudarshan Disale', 15000, '2021-07-12 11:54:27'),
(2, 'Minaxi Patel', 'Khushi Patel', 15000, '2021-07-13 12:48:40'),
(3, 'Sanket Berad', 'Rushikesh Sali', 32000, '2021-07-13 12:49:13'),
(4, 'Khushi Patel', 'Bhumi Patel', 12500, '2021-07-13 12:49:28'),
(5, 'Rutul Patel', 'Sanket Berad', 1500, '2021-07-13 12:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `balance` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Rutul Patel', 'rutul@yahoo.com', 18500),
(2, 'Khushi Patel', 'khushi@gmail.com', 32500),
(3, 'Rushikesh Sali', 'rushikesh@gmail.com', 65000),
(5, 'Sumedh Bansode', 'sumedh@yahoo.com', 35150),
(6, 'Bhumi Patel', 'bhumipatel@gmail.com', 37500),
(7, 'Minaxi Patel', 'minaxi@gmail.com', 83000),
(8, 'Mangesh Patil', 'mangesh@yahoo.com', 45000),
(9, 'Sanket Berad', 'beradsanket@yahoo.com', 29500),
(10, 'Sudarshan Disale', 'sudarshan@gmail.com', 35000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `sn` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
