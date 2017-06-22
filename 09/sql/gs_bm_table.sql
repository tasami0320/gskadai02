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
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(12) NOT NULL,
  `ユーザID` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `書籍名` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `作者` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `書籍URL` text COLLATE utf8_unicode_ci,
  `評価` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `書籍コメント` text COLLATE utf8_unicode_ci,
  `登録日時` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `ユーザID`, `書籍名`, `作者`, `書籍URL`, `評価`, `書籍コメント`, `登録日時`) VALUES
(23, 'うえだくん', 'うえだくんの本', 'うえだくん', 'uedaueda@ueda', '◎', '素晴らしい。', '2017-06-19 10:41:46'),
(24, 'asami', 'キングダム', 'asami', 'kingdom@kingdom', '◎', '素晴らしい。', '2017-06-19 10:45:18'),
(27, 'asamisan', 'あさみさん', 'asamisan', 'asamisan@asamisan', '△', 'asamisandesu', '2017-06-19 13:02:33'),
(28, 'hiroshi', 'hiroshi', 'hiroshi', 'hiroshi', '×', '読んでいない', '2017-06-19 14:11:13'),
(29, 'hiroshi', 'hiroshi2', 'hiroshi', 'hiroshi2', '△', 'あまり読んでいない', '2017-06-19 14:12:08'),
(30, 'hiroshi', 'hiroshi3', 'hiroshi', 'hiroshi3', '◯', 'ちょっと読んだかも。', '2017-06-19 14:12:51'),
(31, 'hiroshi', 'hiroshi4', 'hiroshi', 'hiroshi4', '◎', 'ひろし', '2017-06-19 14:13:13'),
(32, 'asami', 'asami', 'asami', 'asami', '×', 'YEAH!', '2017-06-19 14:14:18'),
(33, 'asami', 'asami2', 'asami', 'asami2', '△', 'YEAH,YEAH!', '2017-06-19 14:14:52'),
(34, 'asami', 'asami3', 'asami', 'asami3', '◎', 'YEAH,YEAH,YEAH!', '2017-06-19 14:15:26'),
(35, '組長', '組長', 'kumi', 'kumi', '×', 'kumi', '2017-06-19 14:21:21'),
(36, '組長', '組長１', 'kumi', 'kumi', '△', 'kumi,kumi', '2017-06-19 14:21:50'),
(37, '組長', '組長２', 'kumi', 'kumi', '◎', 'kumi,kumi,kumi', '2017-06-19 14:22:18'),
(38, 'sakai', 'sakai', 'sakai', 'sakai', '×', 'sakai', '2017-06-19 16:40:55'),
(39, 'iida', 'iida', 'iida', 'iida', '△', 'iida', '2017-06-19 21:14:36'),
(40, 'hasegawa', 'hasegawa', 'hasegawa', 'hasegawa', '◯', 'hasegawa', '2017-06-22 14:25:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
