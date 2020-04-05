-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time:  5 апр 2020 в 13:05
-- Версия на сървъра: 10.1.36-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipes`
--

-- --------------------------------------------------------

--
-- Структура на таблица `meal_types`
--

CREATE TABLE `meal_types` (
  `meal_type_id` int(11) NOT NULL,
  `meal_type_name` varchar(150) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `meal_types`
--

INSERT INTO `meal_types` (`meal_type_id`, `meal_type_name`, `date_deleted`) VALUES
(1, 'нова супа', NULL),
(3, 'основни ястия', NULL),
(4, 'предястия', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `image` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `image`, `date_deleted`) VALUES
(1, 'кисело мляко', '', NULL),
(7, 'краставица', '', NULL),
(8, 'чесън', '', NULL),
(9, 'нахут', '', NULL),
(10, 'сусамов тахан', '', NULL),
(11, 'яйца', '', NULL),
(12, 'течна сметана', '', NULL),
(13, 'захар', '', NULL),
(14, 'ванилия', '', NULL),
(15, 'прясно мляко', '', NULL),
(16, 'копър\r\n', '', NULL),
(17, 'брашно', '', NULL),
(18, 'чушка', '../uploads/res_c0ac46ceb44b46add7895c18a9875b0d_full.jpg', NULL),
(20, 'зеле', '../uploads/unnamed.jpg', NULL),
(21, 'ягоди', '../uploads/0c46b677214175020b2ef07375dfd1b9.jpg', NULL),
(22, 'ягоди 2', '../uploads/0c46b677214175020b2ef07375dfd1b9.jpg', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `recipe_name` varchar(250) NOT NULL,
  `recipe_descr` text NOT NULL,
  `prep_time` int(11) NOT NULL,
  `meal_type_id` int(11) DEFAULT NULL,
  `date_added` date NOT NULL,
  `date_modified` datetime NOT NULL,
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `recipe_name`, `recipe_descr`, `prep_time`, `meal_type_id`, `date_added`, `date_modified`, `date_deleted`) VALUES
(3, 'снежанка', 'описание на таратор', 45, 1, '2020-03-11', '2020-03-29 14:50:12', NULL),
(4, 'палачинки', 'описание на таратор', 400, 1, '2020-03-12', '2020-03-29 14:49:26', NULL),
(5, 'таратор', 'описание на таратор', 15, 1, '2020-03-28', '2020-03-29 14:31:40', NULL),
(6, 'хумус', 'описание на хумус', 2, 1, '2020-03-28', '2020-03-29 14:51:43', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `recipes_products_queantities_units`
--

CREATE TABLE `recipes_products_queantities_units` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` float(10,3) NOT NULL,
  `unit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `recipes_products_queantities_units`
--

INSERT INTO `recipes_products_queantities_units` (`id`, `recipe_id`, `product_id`, `quantity`, `unit_id`) VALUES
(1, 1, 1, 2.000, 1),
(2, 1, 7, 1.000, 3),
(128, 4, 15, 1.000, 5),
(129, 4, 11, 3.000, 13),
(130, 4, 17, 400.000, 1),
(131, 4, 13, 200.000, 1),
(132, 4, 14, 2.000, 1),
(133, 3, 1, 2.000, 13),
(134, 3, 7, 2.000, 13),
(135, 3, 8, 20.000, 1);

-- --------------------------------------------------------

--
-- Структура на таблица `units`
--

CREATE TABLE `units` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(50) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `units`
--

INSERT INTO `units` (`unit_id`, `unit_name`, `date_deleted`) VALUES
(1, 'грам', NULL),
(3, 'килограм', NULL),
(4, 'милилитър', NULL),
(5, 'литър', NULL),
(7, 'ton', NULL),
(10, 'miligram', NULL),
(12, 'ounce', NULL),
(13, 'брой', NULL),
(14, 'домат', NULL),
(15, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meal_types`
--
ALTER TABLE `meal_types`
  ADD PRIMARY KEY (`meal_type_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`),
  ADD KEY `meal_type_id` (`meal_type_id`);

--
-- Indexes for table `recipes_products_queantities_units`
--
ALTER TABLE `recipes_products_queantities_units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meal_types`
--
ALTER TABLE `meal_types`
  MODIFY `meal_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recipes_products_queantities_units`
--
ALTER TABLE `recipes_products_queantities_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`meal_type_id`) REFERENCES `meal_types` (`meal_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
