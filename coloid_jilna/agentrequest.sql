-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 08:31 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coloid`
--

-- --------------------------------------------------------

--
-- Table structure for table `agentrequest`
--

CREATE TABLE `agentrequest` (
  `Id` int(11) NOT NULL,
  `agent_name` varchar(50) NOT NULL,
  `phone_number` bigint(30) NOT NULL,
  `place` varchar(40) NOT NULL,
  `age` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL DEFAULT 'yrettol@#123'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agentrequest`
--

INSERT INTO `agentrequest` (`Id`, `agent_name`, `phone_number`, `place`, `age`, `email`, `password`) VALUES
(1, 'Arun', 993718280927, 'kozhikode', 30, 'arun@gmail.com', 'yrettol@#123'),
(2, 'sam', 8937192045, 'kollam', 27, 'sam@gmail.com', 'yrettol@#123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agentrequest`
--
ALTER TABLE `agentrequest`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agentrequest`
--
ALTER TABLE `agentrequest`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
