-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 11, 2022 at 02:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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
-- Table structure for table `loan_requests`
--

CREATE TABLE `loan_requests` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `garantor1` varchar(15) DEFAULT NULL,
  `garantor2` varchar(15) DEFAULT NULL,
  `amount` decimal(8,4) DEFAULT NULL,
  `loan_type` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_requests`
--

INSERT INTO `loan_requests` (`id`, `fullname`, `phone_number`, `garantor1`, `garantor2`, `amount`, `loan_type`, `location`) VALUES
(1, 'John Cowell', '', '64736473647', 'nin2', '0.0000', 'ltype', 'nigeria'),
(2, 'John Cowell', '', '64736473647', '64736473647', '50.0000', 'Home Loan', 'nigeria'),
(3, 'John Cowell', '', '64736473647', '64736473647', '50.0000', 'Home Loan', 'nigeria'),
(4, 'John Cowell', '56789087', '76767676767', '78787878788', '50.0000', 'Home Loan', 'nigeria'),
(5, 'John Cowell', '+4465434567', '67666555557', '67676767677', '50.0000', 'Home Loan', 'nigeria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loan_requests`
--
ALTER TABLE `loan_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loan_requests`
--
ALTER TABLE `loan_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
