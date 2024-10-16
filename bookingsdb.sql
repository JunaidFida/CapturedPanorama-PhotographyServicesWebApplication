-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 08:06 AM
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
-- Database: `bookingsdb`
--
CREATE DATABASE IF NOT EXISTS `bookingsdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bookingsdb`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `date`) VALUES
(2, 'Jane Smith', 'jane@example.com', '9876543210', '2024-04-21'),
(6, 'Muhammad Junaid Fida', 'junaidfida03@gmail.com', '5707273', '2024-05-08'),
(7, 'Muhammad Junaid Fida', 'junaidfida03@gmail.com', '03135707273', '0023-02-23'),
(8, 'Muhammad Junaid Fida', 'junaidfida03@gmail.com', '03135707273', '0023-02-23'),
(9, 'Muhammad Junaid Fida', 'junaidfida03@gmail.com', '03135707273', '0023-02-23'),
(10, 'Muhammad Junaid Fida', 'junaidfida03@gmail.com', '03135707273', '0023-02-23'),
(11, 'Muhammad Junaid Fida', 'junaidfida03@gmail.com', '03135707273', '0023-02-23'),
(12, 'Muhammad Junaid Fida', 'junaidfida03@gmail.com', '03135707273', '0023-02-23'),
(13, 'Muhammad Junaid Fida', 'junaidfida03@gmail.com', '03135707273', '0023-02-23'),
(14, 'Muhammad Junaid Fida', 'junaidfida03@gmail.com', '03135707273', '0023-02-23'),
(15, 'Muhammad Junaid Fida', 'junaidfida03@gmail.com', '03135707273', '0023-02-23'),
(16, 'sdd', 'saassa@gmail.com', '03135629992', '0003-03-23'),
(17, 'sdd', 'saassa@gmail.com', '03135629992', '0003-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('user123', 'pass123'),
('user123', 'pass123'),
('user1234', 'pass123'),
('shoaib', 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
