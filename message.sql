-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 12:39 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_practices`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `msg_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `user_id`, `message`, `msg_time`) VALUES
(1, 3, 'hi all', '2019-05-20 11:38:57'),
(2, 3, 'hi all', '2019-05-20 11:55:56'),
(3, 3, 'hi all', '2019-05-20 11:59:58'),
(4, 3, 'hi all', '2019-05-20 12:01:25'),
(5, 3, 'hi all', '2019-05-20 12:04:01'),
(6, 3, 'hi all', '2019-05-20 12:07:16'),
(7, 3, 'hi all', '2019-05-20 12:08:13'),
(8, 3, 'hi all', '2019-05-20 12:09:26'),
(9, 3, 'hi all', '2019-05-20 12:09:51'),
(10, 1, 'hello', '2019-05-20 12:29:38'),
(11, 5, 'hello guys', '2019-05-20 12:31:11'),
(12, 5, 'how was the assignment', '2019-05-20 12:31:33'),
(13, 5, 'Napo please do and send give wae', '2019-05-20 12:33:43'),
(14, 3, 'hi', '2019-05-21 21:17:15'),
(15, 3, 'hello', '2019-05-29 20:11:14'),
(16, 13, 'me too i chatt some', '2019-05-30 08:33:50'),
(17, 13, 'me too i chatt some', '2019-05-30 08:34:54'),
(18, 13, 'me too i chatt some', '2019-05-30 08:36:42'),
(19, 13, 'me too i chatt some', '2019-05-30 08:37:52'),
(20, 16, 'hi guys', '2019-05-30 10:38:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
