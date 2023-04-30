-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 03:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fname` varchar(15) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `pwd` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fname`, `uname`, `email`, `phone`, `pwd`) VALUES
('admin', 'admin', 'admin@gmail.com', '8281356618', 'Admin@1'),
('amal K shani', 'amal', 'juvalkondattuk2@gmail.com', '7560829255', 'Amal@123'),
('Juval Varkey To', 'juval', 'juvalkondattukunnel2@gmail.com', '8330859255', 'Jhg@5'),
('Juval Varkey To', 'Juvaldfsd', 'juvalkondattukundfnel2@gmail.com', '9330859255', 'Jhg@5'),
('Juval Varkey To', 'juvall', 'juvalkondattfukunnel2@gmail.com', '6238339270', 'Juv@5');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `model` varchar(30) NOT NULL,
  `fuel type` varchar(10) NOT NULL,
  `capacity` int(1) NOT NULL DEFAULT 5,
  `transmission` varchar(15) NOT NULL,
  `rent` int(5) NOT NULL DEFAULT 500,
  `statusw` varchar(15) NOT NULL DEFAULT 'available',
  `trnid` varchar(30) NOT NULL DEFAULT '0000000000',
  `image` varchar(30) NOT NULL,
  `v_id` varchar(8) NOT NULL,
  `type` varchar(15) NOT NULL,
  `uname` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`model`, `fuel type`, `capacity`, `transmission`, `rent`, `statusw`, `trnid`, `image`, `v_id`, `type`, `uname`) VALUES
('Volkswagen Polo Petrol ', 'petrol', 5, 'manual', 1000, 'AVAILABLE', 'hj', 'polo1.jpg', 'HB001', 'HATCHBACK', 'admin'),
('Volkswagen Polo GTTsi', 'petrol', 5, 'manual', 1500, 'AVAILABLE', 'sdfcvgbhnjmk,.', 'polo GT.jpeg', 'HB002', 'HATCHBACK', 'admin'),
('Maruti Suzuki Swift', 'Petrol', 5, 'Manual', 1000, 'AVAILABLE', '00000', 'Swift2.jpg', 'HB003', 'HATCHBACK', 'admin'),
('Maruti Suzuki Swift', 'Diesel', 5, 'Automatic', 1000, 'AVAILABLE', '00000', 'swift.jpg', 'HB004', 'HATCHBACK', 'admin'),
('Tata Altroz', 'Diesel', 5, 'Manual', 1100, 'AVAILABLE', 'gdcdhskdc', 'altroz.jpg', 'HB005', 'HATCHBACK', 'admin'),
('Maruti Suzuki Wagon R', 'Diesel', 5, 'Manual', 750, 'AVAILABLE', 'fhfh', 'WagonR.png', 'HB006', 'HATCHBACK', 'admin'),
('Datsun Go', 'Diesel', 5, 'Manual', 750, 'AVAILABLE', 'fh', 'datsungo.png', 'HB007', 'HATCHBACK', 'admin'),
('Nissan Micra Petrol', 'Petrol', 5, 'Automatic', 600, 'AVAILABLE', '00000', 'micra.png', 'HB008', 'HATCHBACK', 'admin'),
('Volkswagen Vento Highline Plus', 'Petrol', 5, 'Automatic', 1750, 'BOOKED', 'dfdasf', 'vento1.png', 'SD001', 'SEDAN', 'admin'),
('Nissan Sunny', 'Diesel', 5, 'Manual', 1500, 'BOOKED', '545646464', 'sunny.jpeg', 'SD002', 'SEDAN', 'admin'),
('Volkswagen Ameo', 'Petrol', 5, 'Manual', 1500, 'BOOKED', '', 'AMEO.jpg', 'SD003', 'SEDAN', 'admin'),
('Volkswagen Ameo', 'Diesel', 5, 'Automatic', 1500, 'BOOKED', '', 'AMEO2.jpg', 'SD004', 'SEDAN', 'admin'),
('Volkswagen Vento', 'petrol', 5, 'Automatic', 1800, 'BOOKED', '', 'vento2.png', 'SD005', 'SEDAN', 'admin'),
('Volkswagen Vento', 'diesel', 5, 'Manual', 1500, 'BOOKED', '', 'vento3.png', 'SD006', 'SEDAN', 'admin'),
('Skoda Rapid', 'petrol', 5, 'Automatic', 1800, 'BOOKED', '', 'rapid.png', 'SD007', 'SEDAN', 'admin'),
('Skoda Rapid', 'Diesel', 5, 'Manual', 1500, 'BOOKED', '', 'rapid1.png', 'SD008', 'SEDAN', 'admin'),
('Isuzu mu-X', 'Diesel', 7, 'Automatic', 2500, 'AVAILABLE', 'vsdd', 'isuzu.jpg', 'SV001', 'SUV', 'admin'),
('MG Hector', 'Petrol', 5, 'Automatic', 3000, 'AVAILABLE', '00000', 'hector.jpeg', 'SV002', 'SUV', 'admin'),
('Nissan Terrano', 'Diesel', 5, 'Manual', 2000, 'AVAILABLE', '00000', 'terrano.png', 'SV003', 'SUV', 'admin'),
('Volkswagen Taigun', 'Petrol', 5, 'Manual', 3000, 'AVAILABLE', '00000', 'Taigun.jpg', 'SV004', 'SUV', 'admin'),
('Nissan Kicks', 'Petrol', 5, 'Manual', 3000, 'AVAILABLE', '00000', 'kicks.jpg', 'SV005', 'SUV', 'admin'),
('Hyundai Creta', 'Petrol', 5, 'Manual', 3000, 'AVAILABLE', '00000', 'creta.jpg', 'SV006', 'SUV', 'admin'),
('Skoda Kushaq', 'Petrol', 5, 'Automatic', 2500, 'AVAILABLE', '00000', 'kushaq.jpg', 'SV007', 'SUV', 'admin'),
('Skoda Kushaq', 'Diesel', 5, 'Manual', 2000, 'AVAILABLE', '00000', 'kushaq1.jpg', 'SV008', 'SUV', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`uname`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `uname` (`uname`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`uname`) REFERENCES `registration` (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
