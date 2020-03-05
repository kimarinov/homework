-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 фев 2020 в 15:18
-- Версия на сървъра: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Homework BD Design Email`
--

-- --------------------------------------------------------

--
-- Структура на таблица `Email DB Design`
--

CREATE TABLE `email db design` (
  `Email_id` int(11) NOT NULL,
  `Email_name` varchar(150) NOT NULL,
  `User` varchar(100) NOT NULL,
  `Messege` varchar(100) NOT NULL,
  `Spam` varchar(100) NOT NULL,
  `Sended` varchar(100) NOT NULL,
  `Recieved` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Email DB Design`
--
ALTER TABLE `Email DB Design`
  ADD PRIMARY KEY (`Email_id`),
  ADD KEY `Email_name` (`Email_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Email DB Design`
--
ALTER TABLE `Email DB Design`
  MODIFY `Email_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
