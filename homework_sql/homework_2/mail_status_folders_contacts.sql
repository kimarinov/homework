-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2020 at 10:31 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email`
--

-- --------------------------------------------------------

--
-- Table structure for table `mail_status_folders_contacts`
--

CREATE TABLE `mail_status_folders_contacts` (
  `folder_id` int(11) NOT NULL,
  `mail_status_id` int(11) NOT NULL,
  `contact_status` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `e-mail_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mail_status_folders_contacts`
--
ALTER TABLE `mail_status_folders_contacts`
  ADD KEY `folder_id` (`folder_id`),
  ADD KEY `mail_status_id` (`mail_status_id`),
  ADD KEY `contact_status` (`contact_status`),
  ADD KEY `contact` (`contact`),
  ADD KEY `e-mail_id` (`e-mail_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mail_status_folders_contacts`
--
ALTER TABLE `mail_status_folders_contacts`
  ADD CONSTRAINT `mail_status_folders_contacts_ibfk_1` FOREIGN KEY (`contact`) REFERENCES `contacts` (`contact_id`),
  ADD CONSTRAINT `mail_status_folders_contacts_ibfk_2` FOREIGN KEY (`contact_status`) REFERENCES `contacts_status` (`contact_status_id`),
  ADD CONSTRAINT `mail_status_folders_contacts_ibfk_3` FOREIGN KEY (`e-mail_id`) REFERENCES `new_mails` (`new_mail_id,`),
  ADD CONSTRAINT `mail_status_folders_contacts_ibfk_4` FOREIGN KEY (`folder_id`) REFERENCES `folders` (`folder_id`),
  ADD CONSTRAINT `mail_status_folders_contacts_ibfk_5` FOREIGN KEY (`mail_status_id`) REFERENCES `mail_status` (`mail_status_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
