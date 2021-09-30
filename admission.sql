-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 12:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(10) NOT NULL,
  `u_reg_no` varchar(255) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_model` varchar(255) NOT NULL,
  `u_chassic` varchar(255) NOT NULL,
  `u_aadhar` varchar(12) NOT NULL,
  `u_engine` varchar(255) NOT NULL,
  `u_man` varchar(255) NOT NULL,
  `u_type` varchar(100) NOT NULL,
  `u_reg_exp_no` varchar(100) NOT NULL,
  `uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(8, 'secukpo1', '$2y$10$elIuf7x8r3RBmpSP4NIgZeeNs5rcGnQwl7v3NJ5g92yXhoZ1w/SGa', '2021-09-29 19:57:24'),
(9, 'matthew', '$2y$10$C3r7kZPMohxwVj3fUWsA3upRjoB9FdNyksSiyY2WGskxX9w9N02QO', '2021-09-29 20:40:44'),
(10, 'admin', '$2y$10$q/vsX0x/N6LM1QUigSydWOyatKfoQsetYyQOJwzYPo.MxDSFLX8Um', '2021-09-29 20:42:48'),
(11, 'doe', '$2y$10$MiHuKA7RmhcEKM3f1fAJgOGwTxFxWFjxy3opwnZ6N6f8Sc91M7DHu', '2021-09-29 21:31:23'),
(12, 'secukpo2', '$2y$10$sqJHxcdVDygxIQxs8gPh.urnSumfj5TIJyp1Iia6Ew2xzGjW5tR0q', '2021-09-29 22:57:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
