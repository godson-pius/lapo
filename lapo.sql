-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2022 at 01:35 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `date`) VALUES
(1, 'admin@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', '2022-02-21 12:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `loan_requests`
--

CREATE TABLE `loan_requests` (
  `loan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `garantor1` varchar(15) DEFAULT NULL,
  `garantor2` varchar(15) DEFAULT NULL,
  `amount` decimal(8,4) DEFAULT NULL,
  `loan_type` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `approve` int(11) NOT NULL DEFAULT 0,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_requests`
--

INSERT INTO `loan_requests` (`loan_id`, `user_id`, `fullname`, `phone_number`, `garantor1`, `garantor2`, `amount`, `loan_type`, `location`, `approve`, `Date`) VALUES
(1, 1, 'John Cowell', '', '64736473647', 'nin2', '0.0000', 'ltype', 'nigeria', 1, '2022-02-15 01:10:15'),
(2, 1, 'John Cowell', '', '64736473647', '64736473647', '50.0000', 'Home Loan', 'nigeria', 1, '2022-02-15 01:10:15'),
(3, 1, 'John Cowell', '', '64736473647', '64736473647', '50.0000', 'Home Loan', 'nigeria', 0, '2022-02-15 01:10:15'),
(4, 1, 'John Cowell', '56789087', '76767676767', '78787878788', '50.0000', 'Home Loan', 'nigeria', 0, '2022-02-15 01:10:15'),
(5, 1, 'John Cowell', '+4465434567', '67666555557', '67676767677', '50.0000', 'Home Loan', 'nigeria', 1, '2022-02-15 01:10:15'),
(6, 1, 'John Cowell', '928393893', '63635367363', '73737373737', '50.0000', 'Home Loan', 'Nigeria', 1, '2022-02-15 01:10:15'),
(8, 1, 'James Helen', '+449009993', '23234543454', '56545656565', '1000.0000', 'Loan Against Property', 'Nigeria', 1, '2022-02-15 01:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `phone`, `address`, `email`, `password`, `date`) VALUES
(1, 'John Wells', '08145635363', 'Enugu, Nigeria', 'user1@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', '2022-02-21 12:38:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_requests`
--
ALTER TABLE `loan_requests`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loan_requests`
--
ALTER TABLE `loan_requests`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
