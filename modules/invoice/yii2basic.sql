-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 14 2017 г., 08:30
-- Версия сервера: 5.7.14
-- Версия PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2basic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `Date` text,
  `Summa` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `hesh_invoice` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `invoice`
--

INSERT INTO `invoice` (`id`, `Date`, `Summa`, `id_user`, `hesh_invoice`) VALUES
(1, '13 08 2017', 25000, 1, NULL),
(2, '13 08 2017', 550000, 1, NULL),
(3, '13 08 2017', 3560000, 1, NULL),
(4, '14 08 2017', 3564746, 1, 256514082017),
(5, '14 08 2017', 52000, 1, 2147483647),
(6, '14 08 2017', 56000, 1, 687514082017),
(7, '14 08 2017', 25000, 1, 970214082017),
(8, '14 08 2017', 25000, 1, 420114082017),
(9, '14 08 2017', 25000, 1, 287514082017),
(10, '14 08 2017', 35250, 1, 210114082017);

-- --------------------------------------------------------

--
-- Структура таблицы `payrequser`
--

CREATE TABLE `payrequser` (
  `id` int(11) NOT NULL,
  `Name` text,
  `INN` int(11) DEFAULT NULL,
  `Adress` text,
  `KPP` int(11) DEFAULT NULL,
  `PayInv` int(26) DEFAULT NULL,
  `KorInv` int(26) DEFAULT NULL,
  `BIC` int(9) DEFAULT NULL,
  `Bank` text,
  `id_user` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `payrequser`
--

INSERT INTO `payrequser` (`id`, `Name`, `INN`, `Adress`, `KPP`, `PayInv`, `KorInv`, `BIC`, `Bank`, `id_user`) VALUES
(1, 'ООО Контакт Сервис', 213001001, 'г. Чебоксары', 213001001, 460040404, 445543222, 40902254, 'Альфа Банк', NULL),
(2, 'ООО Контакт Сервис', 21300101, 'Чебоксары,', 2130, 406952, 533544, 40905, 'Альфа Банк', NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, 21300000, 'Чебоксары', 2130000, 4567777, 67788, 409025, 'АльфаБанк', NULL),
(11, 'Контакт Сервис', 21300000, 'Чебоксары, Пирогова, 14', 213001001, 4567777, 67788, 409025, 'АльфаБанк', NULL),
(12, 'ООО Контакт Сервис', 21300000, 'Чебоксары, Пирогова, 14', 2130000, 4567777, 67788, 409025, 'КБ АльфаБанк', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `payrequser`
--
ALTER TABLE `payrequser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `payrequser`
--
ALTER TABLE `payrequser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
