-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `house_book_building`
--

-- --------------------------------------------------------

--
-- Структура на таблица `estates`
--

CREATE TABLE IF NOT EXISTS `estates` (
`estate_id` int(11) NOT NULL,
  `estate_purpose` varchar(100) NOT NULL,
  `area` float NOT NULL,
  `unit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `estates_type_inhabitants_list_units_fees`
--

CREATE TABLE IF NOT EXISTS `estates_type_inhabitants_list_units_fees` (
`id` int(11) NOT NULL,
  `inhabitant_list_id` int(11) DEFAULT NULL,
  `type_inhabitant_id` int(11) NOT NULL,
  `estate_id` int(11) NOT NULL,
  `unit_id` float NOT NULL,
  `fees_id` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `inhabitants_list`
--

CREATE TABLE IF NOT EXISTS `inhabitants_list` (
`inhabitant_id` int(11) NOT NULL,
  `inhabitant_name` varchar(100) NOT NULL,
  `type_inhabitant_id` int(11) NOT NULL,
  `EGN` int(11) NOT NULL,
  `EIK` int(11) NOT NULL,
  `Adress` text NOT NULL,
  `Phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `data_added` date NOT NULL,
  `data_modified` datetime NOT NULL,
  `data_delete` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `type_fees`
--

CREATE TABLE IF NOT EXISTS `type_fees` (
`fee_id` int(11) NOT NULL,
  `fee_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `type_inhabitants`
--

CREATE TABLE IF NOT EXISTS `type_inhabitants` (
`inhabitant_id` int(11) NOT NULL,
  `inhabitant_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `units`
--

CREATE TABLE IF NOT EXISTS `units` (
`unit_id` int(11) NOT NULL,
  `unit_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estates`
--
ALTER TABLE `estates`
 ADD PRIMARY KEY (`estate_id`), ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `estates_type_inhabitants_list_units_fees`
--
ALTER TABLE `estates_type_inhabitants_list_units_fees`
 ADD PRIMARY KEY (`id`), ADD KEY `inhabitant_list_id` (`inhabitant_list_id`,`type_inhabitant_id`,`estate_id`,`unit_id`,`fees_id`);

--
-- Indexes for table `inhabitants_list`
--
ALTER TABLE `inhabitants_list`
 ADD PRIMARY KEY (`inhabitant_id`), ADD KEY `type_inhabitant_id` (`type_inhabitant_id`);

--
-- Indexes for table `type_fees`
--
ALTER TABLE `type_fees`
 ADD PRIMARY KEY (`fee_id`);

--
-- Indexes for table `type_inhabitants`
--
ALTER TABLE `type_inhabitants`
 ADD PRIMARY KEY (`inhabitant_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
 ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estates`
--
ALTER TABLE `estates`
MODIFY `estate_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `estates_type_inhabitants_list_units_fees`
--
ALTER TABLE `estates_type_inhabitants_list_units_fees`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inhabitants_list`
--
ALTER TABLE `inhabitants_list`
MODIFY `inhabitant_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `type_fees`
--
ALTER TABLE `type_fees`
MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `type_inhabitants`
--
ALTER TABLE `type_inhabitants`
MODIFY `inhabitant_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
