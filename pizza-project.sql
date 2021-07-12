-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 12 2021 г., 12:13
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pizza-project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pizza_size`
--

CREATE TABLE `pizza_size` (
  `id` int NOT NULL,
  `size` int NOT NULL,
  `coefficient` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `pizza_size`
--

INSERT INTO `pizza_size` (`id`, `size`, `coefficient`) VALUES
(1, 21, 1),
(2, 26, 1.2),
(3, 31, 1.4),
(4, 45, 1.6);

-- --------------------------------------------------------

--
-- Структура таблицы `pizza_type`
--

CREATE TABLE `pizza_type` (
  `id` int NOT NULL,
  `title` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `pizza_type`
--

INSERT INTO `pizza_type` (`id`, `title`, `price`) VALUES
(1, 'Пепперони', 20),
(2, 'Деревенская', 21),
(3, 'Гавайская', 22),
(4, 'Грибная', 23);

-- --------------------------------------------------------

--
-- Структура таблицы `sauce`
--

CREATE TABLE `sauce` (
  `id` int NOT NULL,
  `title` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `sauce`
--

INSERT INTO `sauce` (`id`, `title`, `price`) VALUES
(1, 'Сырный', 2),
(2, 'Кисло-сладкий', 3),
(3, 'Чесночный', 4),
(4, 'Барбекю', 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pizza_size`
--
ALTER TABLE `pizza_size`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pizza_type`
--
ALTER TABLE `pizza_type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sauce`
--
ALTER TABLE `sauce`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pizza_size`
--
ALTER TABLE `pizza_size`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `pizza_type`
--
ALTER TABLE `pizza_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `sauce`
--
ALTER TABLE `sauce`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
