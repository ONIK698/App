-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 25 2018 г., 05:57
-- Версия сервера: 10.1.29-MariaDB
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `appdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories_id` int(11) NOT NULL DEFAULT '0',
  `feedback_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `short_text`, `full_text`, `author`, `categories_id`, `feedback_id`, `created_at`, `updated_at`) VALUES
(9, 'Optima', 'Еще более захватывающий дизайн.', 'Инновации, стиль и комфорт делают KIA Optima идеальным автомобилем для любого путешествия.', '8-000-212-32-35', 1, 0, '2018-12-22 04:49:00', '2018-12-22 04:49:00'),
(10, 'ceed', 'Если Вы любите открывать новые горизонты, Вы оказались в нужном месте.', 'Новый KIA Ceed оснащается двигателями, которые не могут не понравиться. Выберите один из трех бензиновых агрегатов мощностью от 100 до 140 л.с., работающих в паре с механической коробкой передач, 6-ступенчатым автоматом или 7-ступенчатой роботизированной трансмиссией с двумя сцеплениями для большей точности при переключении и повышения экономичности.', '8-000-212-32-35', 2, 0, '2018-12-22 04:54:18', '2018-12-22 04:54:18'),
(13, 'KIA Sportage', 'KIA Sportage выделяется на любом фоне.', 'Неважно, протискиваетесь ли вы сквозь городские пробки или неспешно двигаетесь по грунтовке, гоните по автобану или паркуетесь у дома – в любых обстоятельствах Sportage остается притягивающим взгляды сочетанием спортивности и стиля.', 'https://www.kia.ru/models/ceed_sw/desc/', 4, 0, '2018-12-23 18:32:50', '2018-12-23 18:32:50'),
(14, 'KIA Ceed Sportswagon', 'Новый KIA Ceed Sportswagon не просто дарит еще больше пространства своим пассажирам.', 'Задний ряд сидений можно сложить одним касанием, ниши для мелочи отличаются удачным расположением, а открыть дверцу багажника можно без помощи рук. Словом, KIA Ceed SW полон решений, облегчающих Вашу жизнь.', '8-000-212-32-35', 3, 0, '2018-12-23 18:46:07', '2018-12-23 18:46:07'),
(15, 'Rio', 'Новый взгляд на интерьер', 'Ультрасовременный и уютный салон Kia Rio 2017 – это сочетание привлекательного дизайна и тщательно подобранных материалов. Набор опций приятно удивит Вас.', 'https://www.kia.ru/models/rio/desc/', 1, 0, '2018-12-23 18:54:48', '2018-12-23 18:54:48');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Седан', 'Седан – тип закрытого кузова легкового автомобиля с багажником, структурно отделённым от пассажирского салона и без подъёмной двери в задней стенке.', '2018-12-22 04:10:28', '2018-12-22 04:10:28'),
(2, 'Хэтчбек', 'Хэтчбек – тип закрытого кузова легкового автомобиля с дверью в задней стенке и укороченным задним свесом.', '2018-12-22 04:10:46', '2018-12-22 04:10:46'),
(3, 'Универсал', 'Универсал – тип закрытого кузова легкового автомобиля с дверью в задней стенке, багажником, объединенным с салоном, и крышей багажника продленной до заднего габарита.', '2018-12-22 04:11:06', '2018-12-22 04:11:06'),
(4, 'Кроссовер', 'Кроссовер - тип закрытого кузова автомобиля, сочетающий в себе свойства внедорожника и универсала или хетчбека.', '2018-12-22 04:11:43', '2018-12-22 04:11:43');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_12_182337_create_categories_table', 1),
(4, '2018_12_12_182557_create_articles_table', 1),
(5, '2018_12_12_183222_create_feedback_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user@user.com', NULL, '$2y$10$qqVfiDNw744K6byyTjqfluapGrrADj2QrKjZ4EqYzw.AyXmjHC216', 0, 'G8rEmHwlCL5ntBfzK0zGyGafuliWZOGKailqmq08Oqs7Jq4daXDabr9CRd6a', '2018-12-22 04:06:49', '2018-12-22 04:06:49'),
(2, 'admin@admin.com', NULL, '$2y$10$Kgiwz/9nQJxibFsK/nPMA.0KcQkNA8NluU80xUuvBPnAok9qENemK', 1, 'yle27peIPGhZUPdUnPMFNGIbPcJxUuvKDPjOL0BEOUrG6eoQuez2MZwPLozh', '2018-12-22 04:09:06', '2018-12-22 04:09:06');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
