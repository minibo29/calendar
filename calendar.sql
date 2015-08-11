-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Сер 10 2015 р., 08:56
-- Версія сервера: 5.5.44-0ubuntu0.14.10.1
-- Версія PHP: 5.5.12-2ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `calendar`
--

-- --------------------------------------------------------

--
-- Структура таблиці `day`
--

CREATE TABLE IF NOT EXISTS `day` (
  `day` int(2) unsigned NOT NULL,
  `month` int(2) unsigned NOT NULL,
  `year` int(4) unsigned NOT NULL,
  `task_id` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `day`
--

INSERT INTO `day` (`day`, `month`, `year`, `task_id`) VALUES
(5, 8, 2015, 6),
(5, 8, 2015, 7),
(5, 8, 2015, 8),
(9, 9, 9, 9),
(6, 8, 2015, 12),
(7, 8, 2015, 13),
(7, 8, 2015, 14),
(7, 8, 2015, 15),
(8, 8, 2015, 16),
(9, 8, 2015, 17),
(10, 8, 2015, 18),
(11, 8, 2015, 19),
(12, 8, 2015, 20),
(13, 8, 2015, 21),
(14, 8, 2015, 22),
(15, 8, 2015, 23),
(16, 8, 2015, 24),
(24, 8, 2015, 25),
(25, 8, 2015, 26),
(26, 8, 2015, 27),
(27, 8, 2015, 28),
(28, 8, 2015, 29),
(29, 8, 2015, 30),
(30, 8, 2015, 31),
(31, 8, 2015, 32),
(32, 8, 2015, 33),
(33, 8, 2015, 34),
(34, 8, 2015, 35),
(35, 8, 2015, 36),
(36, 8, 2015, 37),
(37, 8, 2015, 38),
(38, 8, 2015, 39),
(39, 8, 2015, 40),
(40, 8, 2015, 41),
(41, 8, 2015, 42),
(42, 8, 2015, 43),
(43, 8, 2015, 44),
(9, 9, 2015, 45),
(10, 9, 2015, 46),
(11, 9, 2015, 47),
(12, 9, 2015, 48),
(13, 9, 2015, 49),
(14, 9, 2015, 50),
(15, 9, 2015, 51),
(16, 9, 2015, 52),
(17, 9, 2015, 53),
(18, 9, 2015, 54);

-- --------------------------------------------------------

--
-- Структура таблиці `task`
--

CREATE TABLE IF NOT EXISTS `task` (
`task_id` int(11) unsigned NOT NULL,
  `task` varchar(255) NOT NULL,
  `performance` text CHARACTER SET utf8mb4 NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `priority` int(1) unsigned NOT NULL,
  `date` int(11) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Дамп даних таблиці `task`
--

INSERT INTO `task` (`task_id`, `task`, `performance`, `deadline`, `priority`, `date`) VALUES
(6, 'qwerqwer', 'fasdf', 'dfgsdfgsdfgsdf', 3, 1438783044),
(7, 'qwerqwer', 'fasdf', 'dfgsdfgsdfgsdf', 3, 1438783227),
(8, 'asdfasdf', 'asdfasdf asdf', 'asdfasdfasdf', 4, 1438799072),
(9, 'werqwe', 'qerqwer', 'qwfqef', 1, 1438807224),
(12, 'sfdhg', 'dfgsdfg', 'fdgsdfg', 1, 1438854801),
(13, 'qerqwer', 'qwerqr', 'qwerqer', 1, 1438851755),
(14, 'dfgsdf', 'gsdfgsdf', 'gsdfgsdfg', 4, 1438852902),
(15, 'task', 'create calendar', '1 day', 4, 1438927853),
(16, 'task', 'create calendar', '1 day', 4, 1438927853),
(17, 'task', 'create calendar', '1 day', 4, 1438927853),
(18, 'task', 'create calendar', '1 day', 4, 1438927853),
(19, 'task', 'create calendar', '1 day', 4, 1438927853),
(20, 'task', 'create calendar', '1 day', 4, 1438927854),
(21, 'task', 'create calendar', '1 day', 4, 1438927854),
(22, 'task', 'create calendar', '1 day', 4, 1438927854),
(23, 'task', 'create calendar', '1 day', 4, 1438927854),
(24, 'task', 'create calendar', '1 day', 4, 1438927854),
(25, 'tas 2', 'створити таблицю', '30 вх', 2, 1438927974),
(26, 'tas 2', 'створити таблицю', '30 вх', 2, 1438927974),
(27, 'tas 2', 'створити таблицю', '30 вх', 2, 1438927974),
(28, 'tas 2', 'створити таблицю', '30 вх', 2, 1438927974),
(29, 'tas 2', 'створити таблицю', '30 вх', 2, 1438927974),
(30, 'tas 2', 'створити таблицю', '30 вх', 2, 1438927975),
(31, 'tas 2', 'створити таблицю', '30 вх', 2, 1438927975),
(32, 'tas 2', 'створити таблицю', '30 вх', 2, 1438927975),
(33, 'tas 2', 'створити таблицю', '30 вх', 2, 1438927975),
(34, 'tas 2', 'створити таблицю', '30 вх', 2, 1438927975),
(35, 'проснутись', 'зробити каву', '20 хв', 2, 1438928127),
(36, 'проснутись', 'зробити каву', '20 хв', 2, 1438928128),
(37, 'проснутись', 'зробити каву', '20 хв', 2, 1438928128),
(38, 'проснутись', 'зробити каву', '20 хв', 2, 1438928128),
(39, 'проснутись', 'зробити каву', '20 хв', 2, 1438928128),
(40, 'проснутись', 'зробити каву', '20 хв', 2, 1438928129),
(41, 'проснутись', 'зробити каву', '20 хв', 2, 1438928129),
(42, 'проснутись', 'зробити каву', '20 хв', 2, 1438928129),
(43, 'проснутись', 'зробити каву', '20 хв', 2, 1438928129),
(44, 'проснутись', 'зробити каву', '20 хв', 2, 1438928129),
(45, 'порснутись', 'зробити каву', '20 хв', 2, 1438928386),
(46, 'порснутись', 'зробити каву', '20 хв', 2, 1438928387),
(47, 'порснутись', 'зробити каву', '20 хв', 2, 1438928387),
(48, 'порснутись', 'зробити каву', '20 хв', 2, 1438928387),
(49, 'порснутись', 'зробити каву', '20 хв', 2, 1438928387),
(50, 'порснутись', 'зробити каву', '20 хв', 2, 1438928387),
(51, 'порснутись', 'зробити каву', '20 хв', 2, 1438928388),
(52, 'порснутись', 'зробити каву', '20 хв', 2, 1438928388),
(53, 'порснутись', 'зробити каву', '20 хв', 2, 1438928388),
(54, 'порснутись', 'зробити каву', '20 хв', 2, 1438928388);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
 ADD PRIMARY KEY (`task_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
MODIFY `task_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
