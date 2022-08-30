-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 05:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `search_movie` (IN `sname` VARCHAR(200))  SELECT * from movii
WHERE moviename = sname$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `search_user_name` (IN `user_name` VARCHAR(20))  SELECT *FROM users
WHERE username = user_name$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(200) NOT NULL,
  `seat_no` varchar(20) NOT NULL,
  `movie_name` varchar(200) NOT NULL,
  `usermail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `seat_no`, `movie_name`, `usermail`) VALUES
(21, '88', 'Spider-Man: No Way Home', ''),
(22, '2', 'Spider-Man: No Way Home', ''),
(23, '5', 'Pushpa', ''),
(24, '6', 'Pushpa', ''),
(25, '1', 'Sakath', ''),
(26, '17', 'Sakath', ''),
(27, '18', 'Sakath', '');

--
-- Triggers `book`
--
DELIMITER $$
CREATE TRIGGER `backup` AFTER INSERT ON `book` FOR EACH ROW BEGIN
INSERT INTO booking_backup VALUES(NEW.id,NEW.seat_no,NEW.movie_name,NOW());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `booking_backup`
--

CREATE TABLE `booking_backup` (
  `bk_id` int(200) NOT NULL,
  `seat_no` varchar(20) NOT NULL,
  `movie_name` varchar(200) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_backup`
--

INSERT INTO `booking_backup` (`bk_id`, `seat_no`, `movie_name`, `cdate`) VALUES
(21, '88', 'Spider-Man: No Way Home', '2022-01-17 17:54:51'),
(22, '2', 'Spider-Man: No Way Home', '2022-01-17 18:52:01'),
(23, '5', 'Pushpa', '2022-01-25 10:14:59'),
(24, '6', 'Pushpa', '2022-01-25 10:14:59'),
(25, '1', 'Sakath', '2022-01-25 10:15:10'),
(26, '17', 'Sakath', '2022-01-25 10:15:10'),
(27, '18', 'Sakath', '2022-01-25 10:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `movie_lang`
--

CREATE TABLE `movie_lang` (
  `id` int(20) NOT NULL,
  `moviename` varchar(200) NOT NULL,
  `cast` varchar(200) NOT NULL,
  `language` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_lang`
--

INSERT INTO `movie_lang` (`id`, `moviename`, `cast`, `language`) VALUES
(1, 'pushpa', 'allu arjun', 'Telgue'),
(2, 'Spiderman', 'Tom holland', 'English'),
(3, 'venom', 'Eddy', 'English'),
(5, '83', 'Ranveer Singh', 'Hindi'),
(6, 'Eternals', 'Kit Harington', 'English'),
(7, 'Mortal Kombat', '', 'English'),
(8, 'GGVV', 'Rishab shetty', 'Kannada'),
(9, 'sakath', 'Ganesh', 'Kannada');

-- --------------------------------------------------------

--
-- Table structure for table `movie_logs`
--

CREATE TABLE `movie_logs` (
  `log_id` int(3) NOT NULL,
  `moviename` varchar(200) NOT NULL,
  `timings` varchar(12) NOT NULL,
  `log` varchar(20) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_logs`
--

INSERT INTO `movie_logs` (`log_id`, `moviename`, `timings`, `log`, `cdate`) VALUES
(14, 'Venom: Let There Be Carnage', '9:30 AM', 'INSERTED', '2022-01-26 23:41:07');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movii`
--

INSERT INTO `movii` (`id`, `movieimage`, `moviename`, `cast`, `timings`, `price`) VALUES
(4, 'spiderman.jpg', 'Spider-Man: No Way Home', 'Tom Holland, Zendaya, Benedict Cumberbatch', '9:30 AM', 250),
(5, '83.jpg', '83', 'Ranveer Singh, Deepika Padukone, Pankaj Tripathi', '11:30 AM', 200),
(6, 'pushpa.jpg', 'Pushpa', 'Allu Arjun, Rashmika Mandanna, Dhananjaya', '2 PM', 200),
(7, 'eternals.jpeg', 'Eternals', 'Gemma Chan, Richard Madden, Angelina Jolie, Kit Harington', '5:30 PM', 250),
(8, 'sakath.jpg', 'Sakath', 'Ganesh, Surabhi, Sadhu Kokila', '8 PM', 200),
(10, 'Mortal.jpg', 'Mortal Kombat', 'Lewis Tan, Jessica McNamee, Josh Lawson', '10:30 PM', 250),
(11, 'GGVV.jpg', 'Garuda Gamana Vrishabha Vahana', 'Raj B. Shetty, Rishab Shetty', '2 PM', 150),
(14, 'venom.jpg', 'Venom: Let There Be Carnage', 'Gemma Chan, Richard Madden, Angelina Jolie, Kit Harington', '9:30 AM', 200);

--
-- Triggers `movii`
--
DELIMITER $$
CREATE TRIGGER `movii_logs` AFTER INSERT ON `movii` FOR EACH ROW BEGIN
INSERT INTO movie_logs VALUES(NEW.id,NEW.moviename,NEW.timings,'INSERTED',NOW());
END
$$
DELIMITER ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `phoneno`, `email`) VALUES
(2, 'solomon', '1234', '9886409959', 'solomondavid@gmail.com'),
(3, 'sujith', '1234', '7795224470', 'sujithachar@gmail.com'),
(4, 'uday', '1234', '7845821478', 'uday@gmail.com');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `user_after_deleted` BEFORE DELETE ON `users` FOR EACH ROW BEGIN
INSERT INTO user_backup_details VALUES(OLD.id,OLD.username,OLD.password,OLD.email,'DELETED');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_backup_details`
--

CREATE TABLE `user_backup_details` (
  `US_id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `log_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_backup_details`
--

INSERT INTO `user_backup_details` (`US_id`, `username`, `password`, `email`, `log_status`) VALUES
(6, 'sinchana', '1234', 'sinchana@gmail.com', 'DELETED');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `usermessage` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `usermail` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`usermessage`, `username`, `usermail`) VALUES
('Super', 'Solomon', 'solomondavid@gmail.com'),
('Well maintained', 'Ramya', 'Ramya_agarwal@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_backup`
--
ALTER TABLE `booking_backup`
  ADD PRIMARY KEY (`bk_id`);

--
-- Indexes for table `movie_lang`
--
ALTER TABLE `movie_lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_logs`
--
ALTER TABLE `movie_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `movii`
--
ALTER TABLE `movii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_backup_details`
--
ALTER TABLE `user_backup_details`
  ADD PRIMARY KEY (`US_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `movie_lang`
--
ALTER TABLE `movie_lang`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `movii`
--
ALTER TABLE `movii`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
