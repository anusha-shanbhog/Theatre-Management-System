-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 04:42 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shagg`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(200) NOT NULL,
  `seat_no` varchar(20) NOT NULL,
  `movie_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `seat_no`, `movie_name`) VALUES
(84, '1', 'inception'),
(85, '2', 'inception'),
(90, '5', 'Kirik party'),
(92, '4', 'inception'),
(94, '21', 'inception'),
(95, '22', 'inception');

-- --------------------------------------------------------

--
-- Table structure for table `movii`
--

CREATE TABLE `movii` (
  `id` int(3) NOT NULL,
  `movieimage` varchar(200) NOT NULL,
  `moviename` varchar(200) NOT NULL,
  `cast` varchar(200) NOT NULL,
  `timings` varchar(12) NOT NULL,
  `price` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movii`
--

INSERT INTO `movii` (`id`, `movieimage`, `moviename`, `cast`, `timings`, `price`) VALUES
(29, 'inception.jpg', 'inception', 'shaghil, arali', '6:am', 250),
(31, 'Kirik party.jpg', 'Kirik party', 'Rakshit Shetty Â· Rashmika Mandanna Â· Samyuktha Hegde', '2:00 pm', 250);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `phoneno`, `email`) VALUES
(7, 'bhargavi', '444444444444', '2147483647', 'qqqq'),
(8, 'uday', '4444444444', '2147483647', 'uday@gmail.com'),
(9, 'shaghil', '77777', '444444', 'shaghil@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seat_no` (`seat_no`);

--
-- Indexes for table `movii`
--
ALTER TABLE `movii`
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
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `movii`
--
ALTER TABLE `movii`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;