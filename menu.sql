-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2019 年 01 月 01 日 05:40
-- 伺服器版本: 5.6.13
-- PHP 版本: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `ncue`
--

-- --------------------------------------------------------

--
-- 表的結構 `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `item` varchar(15) NOT NULL,
  `price` varchar(80) NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`item`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 轉存資料表中的資料 `menu`
--

INSERT INTO `menu` (`item`, `price`, `number`) VALUES
(' 竹姬壽司海鮮海膽', '$40 元', 0),
('七味粉醃漬生鮮蝦', '$40 元', 0),
('七味粉醃漬鮪魚', '$40 元', 0),
('北寄貝', '$40 元', 0),
('北海道大帆立貝', '$80 元', 0),
('厚切燒炙鰹魚', '$80 元', 0),
('厚切鯖魚', '$40 元', 0),
('大生鮮蝦(一貫)', '$40 元', 0),
('奶油乳酪鮭魚', '$40 元', 0),
('奶油乳酪鮮蝦', '$40 元\r\n', 0),
('星鰻', '$40 元', 0),
('松葉蟹(一貫)', '$80 元', 0),
('柚子胡椒醃漬長鰭鮪魚', '$40 元', 0),
('柚香稻荷壽司', '$40 元', 0),
('槍烏賊', '$40 元', 0),
('洋蔥鮭魚', '$40 元', 0),
('炙烤照燒豬', '$40 元', 0),
('炙烤照燒鮭魚', '$40 元', 0),
('炙烤照燒鮮蝦', '$40 元', 0),
('炙烤蒜香豬', '$40 元\r\n', 0),
('炙烤蒜香鮭魚', '$40 元', 0),
('炙烤起司鮭魚', '$40 元', 0),
('炙烤起司鮮蝦', '$40 元', 0),
('烤鯖魚押壽司', '$40 元', 0),
('熟成鮪魚', '$40 元', 0),
('燒炙鮭魚肚', '$40 元', 0),
('特選長鰭鮪魚', '$80 元', 0),
('玉子燒', '$40 元\r\n', 0),
('玉子燒天婦羅', '$40 元', 0),
('甜蝦', '$40 元', 0),
('生鮭魚(一貫)', '$40 元', 0),
('秋刀魚', '$40 元', 0),
('稻荷壽司', '$40 元', 0),
('究極蟹肉棒', '$40 元', 0),
('竹姬壽司青森扇貝', '$40 元', 0),
('竹姬壽司鮮蝦沙拉', '$40 元', 0),
('竹姬壽司鹽味半熟蛋鮪魚', '$40 元', 0),
('花枝', '$40 元', 0),
('蒲燒鮭魚(一貫)', '$40 元', 0),
('蒲燒鰻魚(一貫)', '$40 元', 0),
('豬肉鹽味蔥花', '$40 元', 0),
('酪梨長鰭鮪魚', '$40 元', 0),
('酪梨鮮蝦', '$40 元', 0),
('青森扇貝', '$40 元', 0),
('香烤鯖魚', '$40 元\r\n', 0),
('香煎芝麻扇貝', '$40 元', 0),
('鮭魚肚', '$40 元', 0),
('鮮蝦', '$40 元', 0),
('鰈魚緣側', '$40 元', 0),
('黑胡椒燒霜鮪魚', '$40 元', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
