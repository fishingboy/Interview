-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2019 年 01 月 17 日 14:25
-- 伺服器版本: 10.0.29-MariaDB-0ubuntu0.16.04.1
-- PHP 版本： 5.6.30-11+deb.sury.org~xenial+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `interview`
--

-- --------------------------------------------------------

--
-- 資料表結構 `courses`
--

CREATE TABLE `courses` (
  `course_no` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `courses`
--

INSERT INTO `courses` (`course_no`, `name`, `teacher_no`) VALUES
(1072342, '基礎程式設計', '1');

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(11) NOT NULL,
  `version` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `run` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `file`, `run`) VALUES
(1, '20190117134300', '/home/vagrant/Code/www_interview/application/migrations/20190117134300_create_tables.php', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `scores`
--

CREATE TABLE `scores` (
  `student_no` int(11) NOT NULL,
  `course_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `scores`
--

INSERT INTO `scores` (`student_no`, `course_no`, `score`) VALUES
(1, '1072342', 88);

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `student_no` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `students`
--

INSERT INTO `students` (`student_no`, `name`, `sex`, `age`) VALUES
(1, '陳同學', '男', 21);

-- --------------------------------------------------------

--
-- 資料表結構 `teachers`
--

CREATE TABLE `teachers` (
  `teacher_no` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `teachers`
--

INSERT INTO `teachers` (`teacher_no`, `name`) VALUES
(1, '王老師');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_no`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`student_no`);

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_no`);

--
-- 資料表索引 `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_no`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `courses`
--
ALTER TABLE `courses`
  MODIFY `course_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1072343;
--
-- 使用資料表 AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `scores`
--
ALTER TABLE `scores`
  MODIFY `student_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `students`
--
ALTER TABLE `students`
  MODIFY `student_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
