-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 11 2019 г., 18:42
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `subject`, `content`, `img`) VALUES
(22, '123', '3121', 'images/5fd6c8ebb9f0a72b89701f9f569a93f1.jpg'),
(23, 'sdfsd', 'sdfsd', 'images/aa8ea386b3cb8a7ccf9c08b8c824bfa6.jpg'),
(24, 'sdfsd', 'sdfsdfs', 'images/9002feefc34a9803b50d9d3500b23616.jpg'),
(25, 'sdfsdf', 'sdfsdf', 'images/a863bcb9db03df831ca3e08e8639604b.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `subject` text NOT NULL,
  `information` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `count`, `subject`, `information`, `price`) VALUES
(1, 13000, 'Лирический концерт', 'В этот вечер Вы услышите лучшие песни С. Любавина, давно полюбившиеся, а также совсем новые. Это авторские произведения разного жанра, разного характера.', 31),
(2, 66, 'Творческий вечер', '13 декабря в 19-00 на сцене Центра культуры ТГУ состоится творческий вечер посвященный юбилею Народного артиста России Александра Яковлевича Михайлова.\r\n', 1123234),
(3, 345, 'Рок концерт', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eligendi esse ex fugiat inventore nihil nostrum,\r\n', 3143),
(8, 31, 'Лирический концерт', 'В этот вечер Вы услышите лучшие песни С. Любавина, давно полюбившиеся, а также совсем новые. Это авторские произведения разного жанра, разного характера. ', 13000);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `full_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `full_name`) VALUES
(12, '1', '$2y$13$R2zjfAMM3O74us0wbHLgpOLKEKxeTzecrQx5uEaSHOT3VpXHyMFzq', '324435231231231'),
(13, '435', '$2y$13$VWdh3016Fn6b7VR5thmW5OMByq2nGYI5bADQuqxNwK.qg1zmJdrcq', '43534234324');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
