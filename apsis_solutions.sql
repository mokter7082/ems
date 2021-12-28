-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 04:33 AM
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
-- Database: `apsis_solutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `id` int(11) NOT NULL,
  `e_id` varchar(15) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `father_name` varchar(20) DEFAULT NULL,
  `mother_name` varchar(20) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `photo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`id`, `e_id`, `name`, `email`, `father_name`, `mother_name`, `city`, `designation`, `contact`, `date`, `photo`) VALUES
(1, 'A001', 'mokter hossain', 'mokkter@gmail.com', 'bacchuu molla', 'moynaa begom', 'dhakaa', 'Software Engineer', '01996537082', '2020-06-26', 'A001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `date` date NOT NULL,
  `photo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_name`, `password`, `date`, `photo`) VALUES
(1, 'Mokter hossain', 'mokter7082@gmail.com', 'mokter7082', '112233', '2020-06-01', 'mokter7082.jpg'),
(2, 'Shazduz_zaman', 'shazzid@gmail.com', 'shaziduzzaman', '123456', '2020-08-07', 'shaziduzzaman.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
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
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
