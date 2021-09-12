-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 04:35 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `cleaningservice_data`
--

CREATE TABLE `cleaningservice_data` (
  `Year` int(11) NOT NULL,
  `service_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cleaningservice_data`
--

INSERT INTO `cleaningservice_data` (`Year`, `service_amount`) VALUES
(2010, 12),
(2011, 12.5),
(2012, 16),
(2013, 13),
(2014, 25),
(2015, 39),
(2016, 35),
(2017, 56),
(2018, 70),
(2019, 77.5),
(2020, 90);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `number` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`firstName`, `lastName`, `gender`, `email`, `password`, `number`) VALUES
('New', 'User', 'm', 'newuser1@gmail.com', '1234', 2020),
('Rehnuma', 'Akhtar', 'f', '1730463@iub.edu.bd', '1234', 111111),
('Rehnuma', 'Akhtar', 'f', 'test@gmail.com', '1234', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'test@gmail.com', '1234'),
(2, 'admin@gmail.com', '1234'),
(3, 'rehnuma@gmail.com', '2341'),
(4, 'mashrur@gmail.com', '3245');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` enum('c','d','s','k','m','r') NOT NULL,
  `zip` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`email`, `address`, `contact`, `city`, `state`, `zip`) VALUES
('dipto@gmail.com', 'H-239, Road-1/A, Apt-Equity, Jessore, Khulna', '+8801122243598', 'Jessore', 'k', 2349),
('yakub@gmail.com', 'H-104, Road-Abdus Sobhan, Apt-Navana Centrium, Green Road, Dhaka', '+8801929188431', 'Dhaka', 'd', 2789),
('mahfuj@gmail.com', 'H-320, Road-c.more, Apt-sgAgro, Uttara, Dhaka', '01346799420', 'Dhaka', 's', 9090);

-- --------------------------------------------------------

--
-- Table structure for table `worker_details`
--

CREATE TABLE `worker_details` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `charge` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker_details`
--

INSERT INTO `worker_details` (`id`, `name`, `contact`, `exp`, `rating`, `charge`) VALUES
(1, 'Jacob Han', '+8801122243598', '4+ Years', '9.2/10', '10,000/-'),
(2, 'Robert K.', '+8801929188431', '3.5+ Years', '9/10', '9,800/-'),
(3, 'Jane Doe', '+88013577638171', '5 Years', '9.6/10', '25,000/-'),
(4, 'Alex Mulligan', '+8801647891311', '4.7+ Years', '8.6/10', '26,800/-'),
(5, 'Ragnar Will', '+8801144789737', '4.9+ Years', '9.2/10', '30,000/-'),
(6, 'Paul Diesel', '+8811336465789', '4.9+ Years', '8.6/10', '25,000/-'),
(7, 'Jordan Smith\r\n', '+8811476589713', '3.8+ Years', '8/10', '15,000/-'),
(8, 'Justin Timber', '+8813467894137', '3+ Years', '8.9/10', '23,000/-'),
(9, 'Ubbe Lothbrok', '+8811743697436', '4+ Years', '8.9/10', '23,000/-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker_details`
--
ALTER TABLE `worker_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `worker_details`
--
ALTER TABLE `worker_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
