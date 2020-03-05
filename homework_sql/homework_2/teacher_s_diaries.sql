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
-- Database: `teacher's_diaries`
--

-- --------------------------------------------------------

--
-- Структура на таблица `school_subjects`
--

CREATE TABLE IF NOT EXISTS `school_subjects` (
`subjects_id` int(11) NOT NULL,
  `subjects_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `students_list`
--

CREATE TABLE IF NOT EXISTS `students_list` (
`student_id` int(11) NOT NULL,
  `student_name` varchar(60) NOT NULL,
  `EGN` int(11) NOT NULL,
  `Adress` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `subjects_rating`
--

CREATE TABLE IF NOT EXISTS `subjects_rating` (
`rating_id` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school_subjects`
--
ALTER TABLE `school_subjects`
 ADD PRIMARY KEY (`subjects_id`);

--
-- Indexes for table `students_list`
--
ALTER TABLE `students_list`
 ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subjects_rating`
--
ALTER TABLE `subjects_rating`
 ADD PRIMARY KEY (`rating_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school_subjects`
--
ALTER TABLE `school_subjects`
MODIFY `subjects_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students_list`
--
ALTER TABLE `students_list`
MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjects_rating`
--
ALTER TABLE `subjects_rating`
MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
