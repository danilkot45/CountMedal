-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 20 2023 г., 07:30
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `TaskTest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `CountMedal`
--

CREATE TABLE `CountMedal` (
  `id` int(15) NOT NULL,
  `countryId` int(15) NOT NULL,
  `sportsmanId` int(15) NOT NULL,
  `typeSportId` int(15) NOT NULL,
  `gold` int(15) NOT NULL,
  `silver` int(255) NOT NULL,
  `bronze` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `CountMedal`
--

INSERT INTO `CountMedal` (`id`, `countryId`, `sportsmanId`, `typeSportId`, `gold`, `silver`, `bronze`) VALUES
(46, 19, 20, 9, 1, 0, 0),
(47, 22, 19, 10, 0, 1, 0),
(48, 22, 20, 10, 0, 1, 0),
(49, 22, 22, 10, 0, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `CountMedalSportsman`
--

CREATE TABLE `CountMedalSportsman` (
  `id` int(15) NOT NULL,
  `sportsmanId` int(15) NOT NULL,
  `gold` int(255) NOT NULL,
  `silver` int(255) NOT NULL,
  `bronze` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Country`
--

CREATE TABLE `Country` (
  `id` int(15) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Country`
--

INSERT INTO `Country` (`id`, `country`) VALUES
(19, 'Россия'),
(22, 'Норвегия'),
(23, 'Япония'),
(24, 'США'),
(25, 'кения');

-- --------------------------------------------------------

--
-- Структура таблицы `Sportsman`
--

CREATE TABLE `Sportsman` (
  `id` int(15) NOT NULL,
  `sportsman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Sportsman`
--

INSERT INTO `Sportsman` (`id`, `sportsman`) VALUES
(19, 'Андреев Андрей Андреевич'),
(20, 'Смолькин Кирилл D'),
(22, 'Иванов Иван Иванович'),
(23, 'Николаев Николай Николаевич'),
(24, 'Александров Александр Олегович'),
(25, 'Васильев Василий Васильевич');

-- --------------------------------------------------------

--
-- Структура таблицы `typeSport`
--

CREATE TABLE `typeSport` (
  `id` int(15) NOT NULL,
  `typeSport` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `typeSport`
--

INSERT INTO `typeSport` (`id`, `typeSport`) VALUES
(7, 'Лыжи'),
(9, 'Плаванье'),
(10, 'Велоспорт');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `CountMedal`
--
ALTER TABLE `CountMedal`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `CountMedalSportsman`
--
ALTER TABLE `CountMedalSportsman`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Country`
--
ALTER TABLE `Country`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Sportsman`
--
ALTER TABLE `Sportsman`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `typeSport`
--
ALTER TABLE `typeSport`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `CountMedal`
--
ALTER TABLE `CountMedal`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `CountMedalSportsman`
--
ALTER TABLE `CountMedalSportsman`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Country`
--
ALTER TABLE `Country`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `Sportsman`
--
ALTER TABLE `Sportsman`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `typeSport`
--
ALTER TABLE `typeSport`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
