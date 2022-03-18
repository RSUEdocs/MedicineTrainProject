-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 18 2022 г., 09:46
-- Версия сервера: 5.6.41-log
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `train`
--

-- --------------------------------------------------------

--
-- Структура таблицы `checkup`
--

CREATE TABLE `checkup` (
  `idCheckUp` int(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `text` varchar(255) NOT NULL,
  `oldPrice` int(6) NOT NULL,
  `newPrice` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `checkup`
--

INSERT INTO `checkup` (`idCheckUp`, `gender`, `text`, `oldPrice`, `newPrice`) VALUES
(1, 'мужчины', 'Скриннинг/nТестестерон/nГлобулин/nLorem', 5000, 500),
(2, 'женщины', 'Дофамин/nLorem/nВыпей этих мягких плюшек  да съешь чаю', 1000, 10000),
(4, 'мужчины', 'Amogus/nAmigus/nLorem/nЧто-то крутое и непонятное', 6000, 4000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `checkup`
--
ALTER TABLE `checkup`
  ADD PRIMARY KEY (`idCheckUp`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `checkup`
--
ALTER TABLE `checkup`
  MODIFY `idCheckUp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
