-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 03:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyers_query`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `lname` varchar(256) NOT NULL,
  `cname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `loc` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`lname`, `cname`, `email`, `loc`, `date`, `time`) VALUES
('', 'Nandhu', 'anandhubiju2024@mca.ajce.in', '', '2022-10-15', '22:30:00'),
('', 'Nandhu', 'anandhubiju2024@mca.ajce.in', '', '2022-10-15', '22:30:00'),
('', 'Nandhu', 'anandhubiju2024@mca.ajce.in', '', '2022-10-15', '22:30:00'),
('1', 'Amal Raj', 'anandhubiju2024@mca.ajce.in', '1', '2022-10-06', '08:41:00'),
('1', 'Nandhu', 'anandhubiju2024@mca.ajce.in', '2', '2022-10-06', '13:57:00'),
('1', 'Amal Raj', 'anandhubiju2024@mca.ajce.in', '1', '2022-10-22', '15:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `loc` varchar(256) NOT NULL,
  `dept` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `name`, `loc`, `dept`) VALUES
(1, 'Advocate Ravi Jadhav', 'Swej Farm, Sodala, Jaipur', 'Criminal Lawyer'),
(2, 'Advocate Ananth K S', 'Koregaon Park, Pune', 'Family Lawyer');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fname` varchar(256) NOT NULL,
  `uname` varchar(256) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user',
  `email` varchar(256) NOT NULL,
  `phone` bigint(111) NOT NULL,
  `pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fname`, `uname`, `usertype`, `email`, `phone`, `pwd`) VALUES
('Anandhu Biju', 'Anandhu', 'user', 'anandhubiju2024@mca.ajce.in', 6268505831, 'Anandhu@987'),
('Anandhu', 'Nandhu', 'admin', 'nandhu@gmail.com', 8113825461, 'Nandhu@987');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`uname`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
