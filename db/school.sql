-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-01-31 18:26:46
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `school`
--

-- --------------------------------------------------------

--
-- 資料表結構 `survey_log`
--

CREATE TABLE `survey_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` int(11) NOT NULL,
  `ip` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `subject_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `survey_log`
--

INSERT INTO `survey_log` (`id`, `user`, `ip`, `subject_id`, `option_id`, `created_at`) VALUES
(1, 0, '::1', 1, 2, '2023-01-30 17:00:41'),
(2, 0, '::1', 1, 2, '2023-01-30 17:01:08'),
(3, 0, '::1', 1, 2, '2023-01-30 17:01:13'),
(4, 0, '::1', 2, 5, '2023-01-30 17:01:18'),
(5, 0, '::1', 2, 3, '2023-01-30 17:01:21'),
(6, 0, '::1', 2, 5, '2023-01-30 17:01:24'),
(7, 0, '::1', 2, 6, '2023-01-30 17:01:52'),
(8, 0, '::1', 1, 2, '2023-01-30 17:01:57'),
(9, 0, '::1', 2, 6, '2023-01-31 13:04:28'),
(10, 0, '::1', 2, 6, '2023-01-31 13:06:24'),
(11, 0, '::1', 2, 6, '2023-01-31 13:08:23'),
(12, 0, '::1', 2, 6, '2023-01-31 13:08:38'),
(13, 0, '::1', 2, 5, '2023-01-31 13:08:58'),
(14, 0, '::1', 2, 3, '2023-01-31 13:25:19'),
(15, 0, '::1', 4, 7, '2023-01-31 15:20:55'),
(16, 0, '::1', 2, 5, '2023-01-31 16:01:26'),
(17, 0, '::1', 6, 8, '2023-01-31 16:01:36');

-- --------------------------------------------------------

--
-- 資料表結構 `survey_options`
--

CREATE TABLE `survey_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `opt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `vote` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `survey_options`
--

INSERT INTO `survey_options` (`id`, `subject_id`, `opt`, `vote`, `created_at`, `updated_at`) VALUES
(3, 2, '陰天', 2, '2023-01-30 16:50:30', '2023-01-30 16:50:30'),
(4, 2, '雨天', 0, '2023-01-30 16:50:30', '2023-01-30 16:50:30'),
(5, 2, '晴天', 4, '2023-01-30 16:50:30', '2023-01-30 16:50:30'),
(6, 2, '大晴天', 5, '2023-01-30 16:50:30', '2023-01-30 16:50:30'),
(8, 6, '飯', 1, '2023-01-31 15:56:42', '2023-01-31 15:56:42'),
(9, 6, '飯', 0, '2023-01-31 16:09:30', '2023-01-31 16:09:30'),
(10, 6, '飯', 0, '2023-01-31 16:39:02', '2023-01-31 16:39:02'),
(11, 6, '飯', 0, '2023-01-31 16:55:01', '2023-01-31 16:55:01'),
(12, 6, '飯', 0, '2023-01-31 16:58:08', '2023-01-31 16:58:08'),
(13, 6, '陰天', 0, '2023-01-31 17:04:08', '2023-01-31 17:04:08'),
(15, 6, '陰天', 0, '2023-01-31 17:07:06', '2023-01-31 17:07:06'),
(16, 6, '飯', 0, '2023-01-31 17:07:45', '2023-01-31 17:07:45'),
(17, 6, '飯', 0, '2023-01-31 17:09:23', '2023-01-31 17:09:23');

-- --------------------------------------------------------

--
-- 資料表結構 `survey_subject`
--

CREATE TABLE `survey_subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `type` tinyint(1) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL,
  `vote` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `survey_subject`
--

INSERT INTO `survey_subject` (`id`, `subject`, `type`, `active`, `vote`, `img`, `created_at`, `updated_at`) VALUES
(2, '今天天氣如何', 1, 1, 11, NULL, '2023-01-30 16:50:30', '2023-01-31 15:59:51'),
(6, '今天吃啥', 1, 1, 1, NULL, '2023-01-31 15:56:42', '2023-01-31 15:59:56');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `acc` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `acc`, `pw`, `name`, `email`, `last_login`) VALUES
(1, 'lulu', '123', 'lulu', 'lulu@yahoo.com.tw', '2023-01-30 16:06:05'),
(2, 'admin', '1234', 'admin', 'admin@yahoo.com.tw', '2023-01-30 16:53:36');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `survey_log`
--
ALTER TABLE `survey_log`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `survey_options`
--
ALTER TABLE `survey_options`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `survey_subject`
--
ALTER TABLE `survey_subject`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_log`
--
ALTER TABLE `survey_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_options`
--
ALTER TABLE `survey_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_subject`
--
ALTER TABLE `survey_subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
