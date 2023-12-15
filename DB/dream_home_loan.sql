-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 09:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dream_home_loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(191) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'sajjad dogar', 'asif@gmail.com', 'good working', 'We know how important it is for you to be able to trust the advice you are receiving from our experts.'),
(2, 'Muhammad Nasir', 'rajpootd@gmail.com', 'Testing', 'We know how important it is for you to be able to trust the advice you are receiving from our experts.');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fathar_name` varchar(100) NOT NULL,
  `cnic` varchar(100) NOT NULL,
  `loan_price` varchar(255) NOT NULL,
  `tier_name` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `name`, `fathar_name`, `cnic`, `loan_price`, `tier_name`, `contact`, `date`, `status`) VALUES
(1, 'Muhammad Nasir', 'Ghulam Muhammad', '3230498765432', '10000', 'T1', '03039876543', '12/02/2023', 'Pending'),
(2, 'Haviva Mcmahon', 'Javeed Iqbal', '32304987658756', '100000', 'T1', '03038765432', '12/09/2022', 'Approved'),
(3, 'Adria Graham', 'Mallory Arnold', '3230498767866', '50000', 'T3', '03087645876', '09/11/2011', 'Verifying'),
(4, 'Mr. Aamin', 'taimoor Khan', '323049876511223', '50000', 'T3', '03238756443', '03/07/2022', 'Pending'),
(5, 'Sana Khan', 'Tamim Iqbal', '67453232304987', '50000', 'T1', '03338711223', '29/11/2023', 'Approved'),
(6, 'Umar Khan', 'Jutt Adnan', '898328382823', '10000', 'T1', '0303097976', '12/02/2020', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(255) NOT NULL,
  `user_name` text NOT NULL,
  `last_name` text NOT NULL,
  `NIC` text NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `gender` text NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `last_name`, `NIC`, `contact`, `address`, `gender`, `user_email`, `user_password`, `user_type`) VALUES
(1, 'admin', 'admin', '', '123654789', 'abc', '', 'admin@admin.com', 'pass', 'admin'),
(2, 'user', 'hanif', '35202-531485-5', '12345679125', 'kaskldjfs', 'Male', 'user@gmail.com', 'pass', 'user'),
(3, 'officer', 'hanif', '35202-531485-5', '12345679125', 'sdff', 'Male', 'officer@gmail.com', 'pass', 'officer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
