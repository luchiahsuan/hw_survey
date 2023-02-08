-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-02-08 17:29:34
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
(17, 0, '::1', 6, 8, '2023-01-31 16:01:36'),
(18, 0, '::1', 2, 5, '2023-02-05 15:39:57'),
(19, 0, '::1', 45, 48, '2023-02-05 18:10:45'),
(20, 0, '::1', 45, 45, '2023-02-05 18:10:49'),
(21, 0, '::1', 45, 47, '2023-02-05 18:10:52'),
(22, 0, '::1', 45, 48, '2023-02-05 18:10:55'),
(23, 0, '::1', 6, 8, '2023-02-05 18:12:29'),
(24, 0, '::1', 6, 9, '2023-02-05 18:12:31'),
(25, 0, '::1', 2, 4, '2023-02-05 21:06:12'),
(26, 0, '::1', 2, 5, '2023-02-05 21:21:27'),
(27, 0, '::1', 6, 8, '2023-02-05 21:21:40');

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
(4, 2, '雨天', 6, '2023-01-30 16:50:30', '2023-02-05 18:14:57'),
(5, 2, '晴天', 6, '2023-01-30 16:50:30', '2023-01-30 16:50:30'),
(8, 6, '飯', 3, '2023-01-31 15:56:42', '2023-01-31 15:56:42'),
(9, 6, '麵', 1, '2023-01-31 16:09:30', '2023-02-05 14:01:44'),
(44, 45, '英國', 0, '2023-02-05 18:09:15', '2023-02-05 18:09:15'),
(45, 45, '日本', 1, '2023-02-05 18:09:15', '2023-02-05 18:09:15'),
(46, 45, '中國', 10, '2023-02-05 18:09:15', '2023-02-05 18:11:10'),
(47, 45, '葡萄牙', 5, '2023-02-05 18:09:15', '2023-02-05 18:11:07'),
(48, 45, '印度', 2, '2023-02-05 18:09:15', '2023-02-05 18:09:15'),
(49, 46, '123', 0, '2023-02-05 18:41:52', '2023-02-05 18:41:52'),
(50, 46, '456', 0, '2023-02-05 18:41:52', '2023-02-05 21:41:16'),
(51, 46, '789', 0, '2023-02-05 18:41:52', '2023-02-05 21:41:20'),
(53, 47, '測試', 0, '2023-02-07 13:13:57', '2023-02-07 13:13:57'),
(54, 47, '測試', 0, '2023-02-07 13:13:57', '2023-02-07 13:13:57'),
(55, 48, '看啊!', 0, '2023-02-07 14:36:29', '2023-02-07 14:36:29'),
(56, 48, '很愛看', 0, '2023-02-07 14:36:29', '2023-02-07 14:36:29'),
(57, 48, '當然看', 0, '2023-02-07 14:36:29', '2023-02-07 14:36:29'),
(58, 48, '怎麼能不看', 0, '2023-02-07 14:36:29', '2023-02-07 14:36:29'),
(59, 48, '你有什麼障礙', 0, '2023-02-07 14:36:29', '2023-02-07 14:36:29');

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
  `img_name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `end_time` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `survey_subject`
--

INSERT INTO `survey_subject` (`id`, `subject`, `type`, `active`, `vote`, `img_name`, `end_time`, `created_at`, `updated_at`) VALUES
(2, '今天天氣如何', 1, 1, 14, '2023-02-05-1135-55.jpg', '2023-02-18 23:59:59.000000', '2023-01-30 16:50:30', '2023-02-08 14:47:35'),
(6, '今天吃啥', 1, 1, 4, '2023-02-05-1156-28.jpg', '2023-02-22 23:59:59.000000', '2023-01-31 15:56:42', '2023-02-08 14:47:42'),
(45, '想飛去哪個國家', 1, 1, 18, '2023-02-05-1156-58.jpg', '2023-02-16 23:59:59.000000', '2023-02-05 18:09:15', '2023-02-08 14:47:18'),
(46, '明天天氣如何3', 1, 0, 0, '2023-02-06-0241-52.jpg', '2023-02-16 23:59:59.000000', '2023-02-05 18:41:52', '2023-02-08 14:46:02'),
(47, '測試', 1, 0, 0, '2023-02-07-0913-57.jpg', '2023-02-07 23:59:59.000000', '2023-02-07 13:13:57', '2023-02-08 14:47:04'),
(48, '你是看恐怖小說的人嗎?', 1, 1, 0, '2023-02-07-0913-58.jpg', '2023-03-15 23:59:59.000003', '2023-02-07 14:36:29', '2023-02-08 14:45:22');

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
(2, 'admin', '1234', 'admin', 'admin@yahoo.com.tw', '2023-01-30 16:53:36'),
(5, 'mimi', '123', 'mimi', 'mimi@yahoo.com.tw', '2023-02-05 14:00:08');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_options`
--
ALTER TABLE `survey_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_subject`
--
ALTER TABLE `survey_subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
