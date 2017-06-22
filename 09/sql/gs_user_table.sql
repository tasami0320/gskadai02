-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017 年 6 月 22 日 07:32
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db02`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE IF NOT EXISTS `gs_user_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL,
  `登録日時` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`, `登録日時`) VALUES
(1, 'テスト１管理者', 'test1', 'test1', 1, 0, '0000-00-00 00:00:00'),
(2, 'テスト2一般', 'test2', 'test2', 0, 0, '0000-00-00 00:00:00'),
(3, 'asami', 'asami', 'asami', 0, 0, '2017-06-18 16:38:44'),
(10, 'asamisan', 'asamisan', 'asamisan', 0, 0, '2017-06-18 23:02:23'),
(12, '上田孝俊', 'うえだくん', 'uedakun', 0, 0, '2017-06-19 09:47:58'),
(13, 'oosuge hiroshi', 'hiroshi', 'hiroshi', 0, 0, '2017-06-19 14:10:38'),
(14, 'takeda tunehiro', '組長', 'kumichou', 0, 0, '2017-06-19 14:20:05'),
(15, 'test3', 'test3', 'test3', 0, 0, '2017-06-19 15:55:42'),
(17, 'sakai', 'sakai', 'sakai', 0, 0, '2017-06-19 16:40:22'),
(18, 'takeuchi', 'takeuchi', 'takeuchi', 0, 0, '2017-06-19 16:41:54'),
(19, 'katayama', 'katayama', 'katayama', 0, 0, '2017-06-19 16:45:43'),
(20, 'iida', 'iida', 'iida', 0, 0, '2017-06-19 21:14:15'),
(21, 'matui', 'matui', 'matui', 0, 0, '2017-06-19 21:40:02'),
(22, 'takeshi', 'takeshi', 'takeshi', 0, 0, '2017-06-20 22:28:37'),
(23, 'hasegawa', 'hasegawa', 'hasegawa', 0, 0, '2017-06-22 14:24:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
