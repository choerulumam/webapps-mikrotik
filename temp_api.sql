-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2017 at 01:05 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temp_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `temp_host`
--

CREATE TABLE `temp_host` (
  `host_id` int(10) NOT NULL,
  `host_ip` varchar(100) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_host`
--

INSERT INTO `temp_host` (`host_id`, `host_ip`, `user_id`) VALUES
(12, '192.168.2.1', 2),
(13, '192.168.2.1', 2),
(14, '192.168.2.1', 2),
(15, '192.168.2.1', 1),
(16, '192.168.2.1', 2),
(17, '192.168.2.1', 2),
(18, '192.168.2.1', 2),
(19, '192.168.2.1', 2),
(20, '192.168.2.1', 2),
(21, '192.168.2.1', 2),
(22, '192.168.2.1', 2),
(23, '192.168.2.1', 2),
(24, '192.168.2.1', 2),
(25, '192.168.2.1', 2),
(26, '192.168.2.1', 2),
(27, '192.168.2.1', 2),
(28, '192.168.2.1', 2),
(29, '192.168.2.1', 2),
(30, '192.168.2.1', 2),
(31, '192.168.2.1', 2),
(32, '192.168.2.1', 2),
(33, '192.168.2.1', 2),
(34, '192.168.2.1', 2),
(35, '192.168.2.1', 2),
(36, '192.168.2.1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `temp_user`
--

CREATE TABLE `temp_user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_user`
--

INSERT INTO `temp_user` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'd3tkens'),
(2, 'choerul', 'biska');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `temp_host`
--
ALTER TABLE `temp_host`
  ADD PRIMARY KEY (`host_id`),
  ADD KEY `session` (`user_id`);

--
-- Indexes for table `temp_user`
--
ALTER TABLE `temp_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `temp_host`
--
ALTER TABLE `temp_host`
  MODIFY `host_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `temp_user`
--
ALTER TABLE `temp_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `temp_host`
--
ALTER TABLE `temp_host`
  ADD CONSTRAINT `session` FOREIGN KEY (`user_id`) REFERENCES `temp_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
