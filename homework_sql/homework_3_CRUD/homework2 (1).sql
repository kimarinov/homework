-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 02:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homework2`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`, `date_deleted`) VALUES
(1, 'ROCK', NULL),
(2, ' HUMER1', NULL),
(3, 'LIST', NULL),
(4, 'CASTLE', '2020-03-12'),
(5, 'ZENBOOK', '2020-03-12'),
(6, 'TESTOSTERON', NULL),
(7, 'IBAN', NULL),
(8, 'one', NULL),
(9, 'two', NULL),
(11, 'terter', NULL),
(12, 'SECOND WORLD WAR', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tests_2`
--

CREATE TABLE `tests_2` (
  `test_2_id` int(11) NOT NULL,
  `test_2_name` varchar(150) NOT NULL,
  `test_2_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests_2`
--

INSERT INTO `tests_2` (`test_2_id`, `test_2_name`, `test_2_deleted`) VALUES
(1, 'GodjyBary', NULL),
(2, 'Mike Tyson', NULL),
(3, 'KZNPP', NULL),
(4, 'MMA', NULL),
(5, 'XAMPP Control', NULL),
(6, 'fefe', NULL),
(7, 'fefe', NULL),
(8, 'AUDI ', NULL),
(9, 'eg65', NULL),
(10, 'fe', NULL),
(13, 'EDT', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`) USING BTREE;

--
-- Indexes for table `tests_2`
--
ALTER TABLE `tests_2`
  ADD PRIMARY KEY (`test_2_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tests_2`
--
ALTER TABLE `tests_2`
  MODIFY `test_2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
