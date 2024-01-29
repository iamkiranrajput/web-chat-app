-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2024 at 12:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbook1`
--

-- --------------------------------------------------------

--
-- Table structure for table `friendsrequest`
--

CREATE TABLE `friendsrequest` (
  `senderid` int(25) NOT NULL,
  `sendername` varchar(20) NOT NULL,
  `receivername` varchar(25) NOT NULL,
  `receiverid` int(25) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `friendsrequest`
--



-- --------------------------------------------------------

--
-- Table structure for table `msgtable`
--

CREATE TABLE `msgtable` (
  `msg_id` int(255) NOT NULL,
  `send_id` int(244) NOT NULL,
  `rec_id` int(233) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `msgtable`
--


-- --------------------------------------------------------

--
-- Table structure for table `mutual_friends`
--

CREATE TABLE `mutual_friends` (
  `friend_one_id` int(11) NOT NULL,
  `friend_two_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(33) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `users` (
  `users_id` int(23) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msgtable`
--
ALTER TABLE `msgtable`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `mutual_friends`
--
ALTER TABLE `mutual_friends`
  ADD PRIMARY KEY (`friend_one_id`,`friend_two_id`),
  ADD KEY `friend_two_id` (`friend_two_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msgtable`
--
ALTER TABLE `msgtable`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mutual_friends`
--
ALTER TABLE `mutual_friends`
  ADD CONSTRAINT `mutual_friends_ibfk_1` FOREIGN KEY (`friend_one_id`) REFERENCES `registration` (`id`),
  ADD CONSTRAINT `mutual_friends_ibfk_2` FOREIGN KEY (`friend_two_id`) REFERENCES `registration` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
