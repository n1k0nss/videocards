-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 07 2021 г., 19:36
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `videocards`
--

-- --------------------------------------------------------

--
-- Структура таблицы `founders`
--

CREATE TABLE `founders` (
  `id` int(11) NOT NULL,
  `founders_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `founders`
--

INSERT INTO `founders` (`id`, `founders_name`) VALUES
(1, 'Pei-Chen Ye'),
(2, 'Joseph Hsu'),
(3, 'Ted Hsu');

-- --------------------------------------------------------

--
-- Структура таблицы `graphics_chips`
--

CREATE TABLE `graphics_chips` (
  `id` int(11) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `graphics_chips`
--

INSERT INTO `graphics_chips` (`id`, `Name`, `Manufacturer_id`) VALUES
(1, 'GT 710', 1),
(2, 'GT 1030', 3),
(3, 'RTX 2080', 2),
(4, 'GTX 1660 S', 1),
(5, 'GTX 1050', 2),
(6, 'GT 630', 3),
(8, 'GTX 1070Ti', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `manufacturer_name` varchar(30) NOT NULL,
  `Founder_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `manufacturer_name`, `Founder_id`) VALUES
(1, 'GIGABYTE', 1),
(2, 'MSI', 2),
(3, 'ASUS', 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `founders`
--
ALTER TABLE `founders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `graphics_chips`
--
ALTER TABLE `graphics_chips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Manufacturer_id` (`Manufacturer_id`);

--
-- Индексы таблицы `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Founder_id` (`Founder_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `founders`
--
ALTER TABLE `founders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `graphics_chips`
--
ALTER TABLE `graphics_chips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `graphics_chips`
--
ALTER TABLE `graphics_chips`
  ADD CONSTRAINT `graphics_chips_ibfk_1` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`id`);

--
-- Ограничения внешнего ключа таблицы `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD CONSTRAINT `manufacturer_ibfk_1` FOREIGN KEY (`Founder_id`) REFERENCES `founders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
