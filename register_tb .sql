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
-- Table structure for table `register_tb`
--

CREATE TABLE `register_tb` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) DEFAULT NULL,
  `lname` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `home_town` varchar(250) NOT NULL,
  `school` varchar(250) NOT NULL,
  `level_education` varchar(250) NOT NULL,
  `picture` blob NOT NULL,
  `password` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_tb`
--

INSERT INTO `register_tb` (`user_id`, `fname`, `mname`, `lname`, `dob`, `home_town`, `school`, `level_education`, `picture`, `password`, `username`, `status`) VALUES
(1, 'Napoleon', '', 'Sam', '2009-03-03', 'Takoradi', 'Takoradi senior high', 'SHS', '', 'sam', 'sam', '0000-00-00'),
(2, 'Joseph', 'Mensah', 'Cobinnah', '1986-02-02', 'Suame', 'Kumasi High', 'SHS', '', '123', 'jos', '0000-00-00'),
(3, 'Napoleon', 'kumi', 'Sam', '2008-02-13', 'Takoradi', 'UEW', 'UNIVERSIITY', 0x73616d40676d61696c2e636f6d, '1234', 'napo', '0000-00-00'),
(4, 'Napoleon', 'kumi', 'Sam', '2019-05-22', 'Takoradi', 'UEW', '400', 0x73616d40676d61696c2e636f6d, '1234', 'NAPO', '0000-00-00'),
(5, 'Emmanuel', 'Kofi', 'Frimpong', '2003-02-02', 'Takoradi', 'UEW', 'PRIMARY', 0x656d6d616e75656c6672696d706f6e67303940676d61696c2e636f6d, '123', 'emmasco', '0000-00-00'),
(6, 'Sister', 'Ama', 'Akosua', '1998-02-03', 'Kumasi', 'UEW', 'UNIVERSIITY', 0x656d6d616e75656c6672696d706f6e6740676d61696c2e636f6d, '1234', 'emmasco', '0000-00-00'),
(7, 'tuffour', 'Akwasi', 'tuffour', '2019-05-11', 'aduss', 'adass', '', 0x6a617940676d61696c2e636f6d, 'root', 'jay', '0000-00-00'),
(8, 'Emmanuel', 'akwasi', 'Emmanuel', '2019-05-20', 'waa', 'adass', 'J.H.S', 0x6b617940676d61696c2e636f6d, 'root', 'kay', '0000-00-00'),
(9, 'Kwame', '', 'Kofi', '1999-02-02', 'Takoradi', 'Tadi high', 'TERTIARY', 0x6b756d6940676d61696c2e636f6d, '123', 'kumi', '0000-00-00'),
(10, 'Kwame', 'Akwasi', 'Boahen', '1992-02-02', 'Axim', 'UEW', 'TERTIARY', '', '1234', 'kwameboahen', ''),
(11, 'sam', 'napo', 'kwam', '0000-00-00', 'Winneba', 'UCC', '200', '', '', 'kumisam', ''),
(12, 'Stephen', '', 'Nkunjambe', '1986-01-01', 'Macheri', 'UCC', 'TERTIARY', '', '1234', 'stevo', ''),
(13, 'Stephen', '', 'Nkunjambe', '1986-01-01', 'Macheri', 'UEW', 'TERTIARY', 0x494d475f333331312e4a5047, '12345', 'Kwaku', ''),
(14, 'kwasi', '', 'Napoleon', '1986-02-02', 'Takoradi', 'ucc', 'TERTIARY', '', '12345', 'napo1', ''),
(15, 'Napoleon', '', 'Mensah', '1997-02-02', 'Takoradi', 'ucc', 'TERTIARY', 0x494d475f333331312e4a5047, '1234', 'kwasi2', ''),
(16, 'Ama', '', 'Sam', '1988-02-02', 'Takoradi', 'UCC', 'TERTIARY', 0x612e6a7067, '12345', 'mensa', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_tb`
--
ALTER TABLE `register_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_tb`
--
ALTER TABLE `register_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
