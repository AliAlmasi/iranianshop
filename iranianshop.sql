-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 28, 2024 at 07:46 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iranianshop`
--
CREATE DATABASE IF NOT EXISTS `iranianshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_persian_ci;
USE `iranianshop`;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'شماره سفارش',
  `username` varchar(30) COLLATE utf8_persian_ci NOT NULL COMMENT 'نام کاربری سفارش دهنده',
  `orderdate` date NOT NULL COMMENT 'تاریخ سفارش',
  `pro_id` int(10) NOT NULL COMMENT 'کد محصول',
  `pro_qty` int(10) NOT NULL COMMENT 'تعداد سفارش',
  `pro_price` float NOT NULL COMMENT 'قیمت پایه محصول',
  `number` varchar(11) COLLATE utf8_persian_ci NOT NULL COMMENT 'شماره تماس',
  `address` varchar(400) COLLATE utf8_persian_ci NOT NULL COMMENT 'آدرس',
  `trackcode` varchar(24) COLLATE utf8_persian_ci NOT NULL COMMENT 'کد مرسوله پستی',
  `state` int(1) NOT NULL COMMENT 'وضعیت سفارش',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci COMMENT='جدول سفارشات';

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `orderdate`, `pro_id`, `pro_qty`, `pro_price`, `number`, `address`, `trackcode`, `state`) VALUES
(1, 'alialmasi', '2024-07-28', 1107, 5, 17000, '09306178128', 'ØªÙ‡Ø±Ø§Ù†ØŒ Ø¨Ù„ÙˆØ§Ø± Ø¯Ø±ÛŒØ§ØŒ Ø®ÛŒØ§Ø¨Ø§Ù† Ù…Ø·Ù‡Ø±ÛŒ Ø´Ù…Ø§Ù„ÛŒØŒ Ø®ÛŒØ§Ø¨Ø§Ù† Ø³Ø§Ø­Ù„ Ø§ÙˆÙ„ØŒ Ù¾Ù„Ø§Ú© Ø³Ù‡ ÙˆØ§Ø­Ø¯ Ø³Ù‡', '338567453951856625222971', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'کد کالا',
  `name` varchar(200) COLLATE utf8_persian_ci NOT NULL COMMENT 'نام کالا',
  `qty` int(10) NOT NULL COMMENT 'موجودی کالا',
  `price` float NOT NULL COMMENT 'قیمت کالا',
  `image` varchar(80) COLLATE utf8_persian_ci NOT NULL COMMENT 'عکس کالا',
  `details` text COLLATE utf8_persian_ci NOT NULL COMMENT 'توضیحات کالا',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1118 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci COMMENT='جدول محصولات';

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `qty`, `price`, `image`, `details`) VALUES
(1100, 'ÙØ±Ø´ ØªØ¨Ø±ÛŒØ²ÛŒ', 1, 160000000, 'farsh-tabrizi.jpg', 'ÛŒÚ© ÙØ±Ø´ Ø§ØµÛŒÙ„ Ø§ÛŒØ±Ø§Ù†ÛŒØŒ Ù…Ø­ØµÙˆÙ„ Ø¨Ø§Ù†ÙˆØ§Ù† Ù†ÛŒÚ©ÙˆÛŒ ØªØ¨Ø±ÛŒØ²ÛŒ.  Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ Ù…Ø´ØºÙˆÙ„ Ø¨ÙˆØ¯Ù†Ø¯ Ø¨Ù‡ Ø¬Ø² Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ØŒ Ù‡ÛŒÚ†Ú©Ø³ Ø¨Ù‡ Ø§Ùˆ Ú©Ø§Ø± Ù†Ù…ÛŒØ¯Ø§Ø¯ØŒ Ù‡Ù…Ù‡ Ù…ÛŒÚ¯ÙØªÙ†Ø¯ : ØªÙˆ Ø¨Ù‡ Ù‡ÛŒÚ† Ø¯Ø±Ø¯ÛŒ Ù†Ù…ÛŒØ®ÙˆØ±ÛŒØŒ ÛŒÚ© Ø´Ø¨ Ú©Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ ØªÙˆ Ø³ÛŒØ§Ù‡ÛŒ Ø´Ø¨ Ú¯Ù… Ø´Ø¯Ù‡ Ø¨ÙˆØ¯Ù†Ø¯ØŒ Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ ØªØ§ ØµØ¨Ø­ Ù…Ø§Ù‡ Ú©Ø´ÛŒØ¯ Ù…Ù‡ØªØ§Ø¨ Ú©Ø´ÛŒØ¯ Ùˆ Ø§Ù†Ù‚Ø¯Ø± Ø³ØªØ§Ø±Ù‡ Ú©Ø´ÛŒØ¯ Ú©Ù‡ Ú©ÙˆÚ†Ú© Ùˆ Ú©ÙˆÚ†Ú©ØªØ± Ø´Ø¯ ØµØ¨Ø­ ØªÙˆÛŒ Ø¬Ø¹Ø¨Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ø¬Ø§ÛŒ Ø®Ø§Ù„ÛŒ Ø§Ùˆ Ø¨Ø§ Ù‡ÛŒÚ† Ø±Ù†Ú¯ÛŒ  Ù¾Ø± Ù†Ø´Ø¯ØŒ Ø¨Ù‡ ÛŒØ§Ø¯ Ù‡Ù… Ø¨Ø§Ø´ÛŒÙ… Ø´Ø§ÛŒØ¯ ÙØ±Ø¯Ø§ Ù…Ø§ Ù‡Ù… Ø¯Ø± Ú©Ù†Ø§Ø± Ù‡Ù… Ù†Ø¨Ø§Ø´ÛŒÙ…â€¦'),
(1101, 'Ø­Ù‚Ù‡ Ú†ÙˆØ¨ÛŒ', 1, 250000, 'hoghe-choobi.jpg', 'Ø§ÛŒÙ† Ø­Ù‚Ù‡ Ú†ÙˆØ¨ÛŒ Ø¨Ø§Ø± Ø¹Ø¸ÛŒÙ…ÛŒ Ø¨Ù‡ Ø¯ÙˆØ´ Ù…ÛŒÚ©Ø´Ø¯ØŒ Ù‡Ù†Ø± Ø§ØµÛŒÙ„ Ùˆ Ø¨Ø§Ø³ØªØ§Ù†ÛŒ Ø§ÛŒØ±Ø§Ù†ÛŒ.  Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ Ù…Ø´ØºÙˆÙ„ Ø¨ÙˆØ¯Ù†Ø¯ Ø¨Ù‡ Ø¬Ø² Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ØŒ Ù‡ÛŒÚ†Ú©Ø³ Ø¨Ù‡ Ø§Ùˆ Ú©Ø§Ø± Ù†Ù…ÛŒØ¯Ø§Ø¯ØŒ Ù‡Ù…Ù‡ Ù…ÛŒÚ¯ÙØªÙ†Ø¯ : ØªÙˆ Ø¨Ù‡ Ù‡ÛŒÚ† Ø¯Ø±Ø¯ÛŒ Ù†Ù…ÛŒØ®ÙˆØ±ÛŒØŒ ÛŒÚ© Ø´Ø¨ Ú©Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ ØªÙˆ Ø³ÛŒØ§Ù‡ÛŒ Ø´Ø¨ Ú¯Ù… Ø´Ø¯Ù‡ Ø¨ÙˆØ¯Ù†Ø¯ØŒ Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ ØªØ§ ØµØ¨Ø­ Ù…Ø§Ù‡ Ú©Ø´ÛŒØ¯ Ù…Ù‡ØªØ§Ø¨ Ú©Ø´ÛŒØ¯ Ùˆ Ø§Ù†Ù‚Ø¯Ø± Ø³ØªØ§Ø±Ù‡ Ú©Ø´ÛŒØ¯ Ú©Ù‡ Ú©ÙˆÚ†Ú© Ùˆ Ú©ÙˆÚ†Ú©ØªØ± Ø´Ø¯ ØµØ¨Ø­ ØªÙˆÛŒ Ø¬Ø¹Ø¨Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ø¬Ø§ÛŒ Ø®Ø§Ù„ÛŒ Ø§Ùˆ Ø¨Ø§ Ù‡ÛŒÚ† Ø±Ù†Ú¯ÛŒ  Ù¾Ø± Ù†Ø´Ø¯ØŒ Ø¨Ù‡ ÛŒØ§Ø¯ Ù‡Ù… Ø¨Ø§Ø´ÛŒÙ… Ø´Ø§ÛŒØ¯ ÙØ±Ø¯Ø§ Ù…Ø§ Ù‡Ù… Ø¯Ø± Ú©Ù†Ø§Ø± Ù‡Ù… Ù†Ø¨Ø§Ø´ÛŒÙ…â€¦'),
(1102, 'Ø­Ù‚Ù‡ Ø¬ÙˆÚ© Ú©Ø§Ø±ÛŒ', 1, 1650000, 'hoghe-jukkari.jpg', 'Ø§ÛŒÙ† Ø­Ù‚Ù‡ Ø­Ø§ÙˆÛŒ Ù‡Ù†Ø± Ø§ØµÛŒÙ„ Ø§ÛŒØ±Ø§Ù†ÛŒ Ø¨Ù‡ Ù†Ø§Ù… Ø¬ÙˆÚ© Ú©Ø§Ø±ÛŒ Ø§Ø³Øª. Ø§ÛŒÙ† Ù‡Ù†Ø± Ø§Ø² Ø³Ø®Øª ØªØ±ÛŒÙ† Ù‡Ù†Ø± Ù‡Ø§ÛŒ Ø§ÛŒØ±Ø§Ù†ÛŒ Ø§Ø³Øª.  Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ Ù…Ø´ØºÙˆÙ„ Ø¨ÙˆØ¯Ù†Ø¯ Ø¨Ù‡ Ø¬Ø² Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ØŒ Ù‡ÛŒÚ†Ú©Ø³ Ø¨Ù‡ Ø§Ùˆ Ú©Ø§Ø± Ù†Ù…ÛŒØ¯Ø§Ø¯ØŒ Ù‡Ù…Ù‡ Ù…ÛŒÚ¯ÙØªÙ†Ø¯ : ØªÙˆ Ø¨Ù‡ Ù‡ÛŒÚ† Ø¯Ø±Ø¯ÛŒ Ù†Ù…ÛŒØ®ÙˆØ±ÛŒØŒ ÛŒÚ© Ø´Ø¨ Ú©Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ ØªÙˆ Ø³ÛŒØ§Ù‡ÛŒ Ø´Ø¨ Ú¯Ù… Ø´Ø¯Ù‡ Ø¨ÙˆØ¯Ù†Ø¯ØŒ Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ ØªØ§ ØµØ¨Ø­ Ù…Ø§Ù‡ Ú©Ø´ÛŒØ¯ Ù…Ù‡ØªØ§Ø¨ Ú©Ø´ÛŒØ¯ Ùˆ Ø§Ù†Ù‚Ø¯Ø± Ø³ØªØ§Ø±Ù‡ Ú©Ø´ÛŒØ¯ Ú©Ù‡ Ú©ÙˆÚ†Ú© Ùˆ Ú©ÙˆÚ†Ú©ØªØ± Ø´Ø¯ ØµØ¨Ø­ ØªÙˆÛŒ Ø¬Ø¹Ø¨Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ø¬Ø§ÛŒ Ø®Ø§Ù„ÛŒ Ø§Ùˆ Ø¨Ø§ Ù‡ÛŒÚ† Ø±Ù†Ú¯ÛŒ  Ù¾Ø± Ù†Ø´Ø¯ØŒ Ø¨Ù‡ ÛŒØ§Ø¯ Ù‡Ù… Ø¨Ø§Ø´ÛŒÙ… Ø´Ø§ÛŒØ¯ ÙØ±Ø¯Ø§ Ù…Ø§ Ù‡Ù… Ø¯Ø± Ú©Ù†Ø§Ø± Ù‡Ù… Ù†Ø¨Ø§Ø´ÛŒÙ…â€¦'),
(1103, 'Ø­Ù‚Ù‡ Ø®Ø§ØªÙ… Ú©Ø§Ø±ÛŒ', 1, 450000, 'hoghe-khatamkari.jpg', 'Ø§ÛŒÙ† Ø­Ù‚Ù‡ Ø®Ø§ØªÙ… Ú©Ø§Ø±ÛŒ Ø´Ø¯Ù‡ Ø§Ø² Ù…Ø±ØºÙˆØ¨ ØªØ±ÛŒÙ† Ù†ÙˆØ¹ Ú†ÙˆØ¨ ØªÙ‡ÛŒÙ‡ Ø´Ø¯Ù‡ Ùˆ Ù…Ø­ØµÙˆÙ„ Ø³Ø§Ø¹Øª Ù‡Ø§ Ø²Ø­Ù…Øª Ùˆ Ø®Ø³ØªÚ¯ÛŒ Ø§Ø³Øª.  Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ Ù…Ø´ØºÙˆÙ„ Ø¨ÙˆØ¯Ù†Ø¯ Ø¨Ù‡ Ø¬Ø² Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ØŒ Ù‡ÛŒÚ†Ú©Ø³ Ø¨Ù‡ Ø§Ùˆ Ú©Ø§Ø± Ù†Ù…ÛŒØ¯Ø§Ø¯ØŒ Ù‡Ù…Ù‡ Ù…ÛŒÚ¯ÙØªÙ†Ø¯ : ØªÙˆ Ø¨Ù‡ Ù‡ÛŒÚ† Ø¯Ø±Ø¯ÛŒ Ù†Ù…ÛŒØ®ÙˆØ±ÛŒØŒ ÛŒÚ© Ø´Ø¨ Ú©Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ ØªÙˆ Ø³ÛŒØ§Ù‡ÛŒ Ø´Ø¨ Ú¯Ù… Ø´Ø¯Ù‡ Ø¨ÙˆØ¯Ù†Ø¯ØŒ Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ ØªØ§ ØµØ¨Ø­ Ù…Ø§Ù‡ Ú©Ø´ÛŒØ¯ Ù…Ù‡ØªØ§Ø¨ Ú©Ø´ÛŒØ¯ Ùˆ Ø§Ù†Ù‚Ø¯Ø± Ø³ØªØ§Ø±Ù‡ Ú©Ø´ÛŒØ¯ Ú©Ù‡ Ú©ÙˆÚ†Ú© Ùˆ Ú©ÙˆÚ†Ú©ØªØ± Ø´Ø¯ ØµØ¨Ø­ ØªÙˆÛŒ Ø¬Ø¹Ø¨Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ø¬Ø§ÛŒ Ø®Ø§Ù„ÛŒ Ø§Ùˆ Ø¨Ø§ Ù‡ÛŒÚ† Ø±Ù†Ú¯ÛŒ  Ù¾Ø± Ù†Ø´Ø¯ØŒ Ø¨Ù‡ ÛŒØ§Ø¯ Ù‡Ù… Ø¨Ø§Ø´ÛŒÙ… Ø´Ø§ÛŒØ¯ ÙØ±Ø¯Ø§ Ù…Ø§ Ù‡Ù… Ø¯Ø± Ú©Ù†Ø§Ø± Ù‡Ù… Ù†Ø¨Ø§Ø´ÛŒÙ…â€¦'),
(1104, 'Ú©Ù¾ÙˆÛŒ Ø´Ù…Ø§Ù„ÛŒ', 3, 450000, 'kapoo.jpg', 'Ú©Ù¾Ùˆ Ù†ÙˆØ¹ÛŒ Ø¸Ø±Ù Ù†Ú¯Ù‡Ø¯Ø§Ø±Ù†Ø¯Ù‡ Ø¨Ø§ÙØªÙ‡ Ø´Ø¯Ù‡ Ø§Ø³Øª Ú©Ù‡ ØªÙˆØ³Ø· Ù…Ø±Ø¯Ù… Ø¹Ø²ÛŒØ² Ø®Ø·Ù‡â€ŒÛŒ Ø´Ù…Ø§Ù„ Ø§ÛŒØ±Ø§Ù†â€ŒÙ…Ø§Ù† Ø¨Ø§ÙØªÙ‡ Ùˆ ØªÙ‡ÛŒÙ‡ Ù…ÛŒØ´ÙˆØ¯.  Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ Ù…Ø´ØºÙˆÙ„ Ø¨ÙˆØ¯Ù†Ø¯ Ø¨Ù‡ Ø¬Ø² Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ØŒ Ù‡ÛŒÚ†Ú©Ø³ Ø¨Ù‡ Ø§Ùˆ Ú©Ø§Ø± Ù†Ù…ÛŒØ¯Ø§Ø¯ØŒ Ù‡Ù…Ù‡ Ù…ÛŒÚ¯ÙØªÙ†Ø¯ : ØªÙˆ Ø¨Ù‡ Ù‡ÛŒÚ† Ø¯Ø±Ø¯ÛŒ Ù†Ù…ÛŒØ®ÙˆØ±ÛŒØŒ ÛŒÚ© Ø´Ø¨ Ú©Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ ØªÙˆ Ø³ÛŒØ§Ù‡ÛŒ Ø´Ø¨ Ú¯Ù… Ø´Ø¯Ù‡ Ø¨ÙˆØ¯Ù†Ø¯ØŒ Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ ØªØ§ ØµØ¨Ø­ Ù…Ø§Ù‡ Ú©Ø´ÛŒØ¯ Ù…Ù‡ØªØ§Ø¨ Ú©Ø´ÛŒØ¯ Ùˆ Ø§Ù†Ù‚Ø¯Ø± Ø³ØªØ§Ø±Ù‡ Ú©Ø´ÛŒØ¯ Ú©Ù‡ Ú©ÙˆÚ†Ú© Ùˆ Ú©ÙˆÚ†Ú©ØªØ± Ø´Ø¯ ØµØ¨Ø­ ØªÙˆÛŒ Ø¬Ø¹Ø¨Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ø¬Ø§ÛŒ Ø®Ø§Ù„ÛŒ Ø§Ùˆ Ø¨Ø§ Ù‡ÛŒÚ† Ø±Ù†Ú¯ÛŒ  Ù¾Ø± Ù†Ø´Ø¯ØŒ Ø¨Ù‡ ÛŒØ§Ø¯ Ù‡Ù… Ø¨Ø§Ø´ÛŒÙ… Ø´Ø§ÛŒØ¯ ÙØ±Ø¯Ø§ Ù…Ø§ Ù‡Ù… Ø¯Ø± Ú©Ù†Ø§Ø± Ù‡Ù… Ù†Ø¨Ø§Ø´ÛŒÙ…â€¦'),
(1105, 'Ú©Ø§Ø³Ù‡ Ù‚Ù„Ù… Ø²Ù†ÛŒ Ø´Ø¯Ù‡', 2, 3300000, 'kase-ghalamzani.jpg', 'Ú©Ø§Ø³Ù‡ Ù‚Ù„Ù… Ø²Ù†ÛŒ Ø´Ø¯Ù‡. Ø§Ø² ØµÙ†Ø§ÛŒØ¹ Ø¯Ø³ØªÛŒ Ø²ÛŒØ¨Ø§ÛŒ Ø§ÛŒØ±Ø§Ù†. Ø¯Ø§Ø±Ø§ÛŒ Ø²ÛŒØ¨Ø§ ØªØ±ÛŒÙ† Ø·Ø±Ø­ Ù‡Ø§ÛŒ Ø§ØµÛŒÙ„ Ø§ÛŒØ±Ø§Ù†ÛŒ.  Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ Ù…Ø´ØºÙˆÙ„ Ø¨ÙˆØ¯Ù†Ø¯ Ø¨Ù‡ Ø¬Ø² Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ØŒ Ù‡ÛŒÚ†Ú©Ø³ Ø¨Ù‡ Ø§Ùˆ Ú©Ø§Ø± Ù†Ù…ÛŒØ¯Ø§Ø¯ØŒ Ù‡Ù…Ù‡ Ù…ÛŒÚ¯ÙØªÙ†Ø¯ : ØªÙˆ Ø¨Ù‡ Ù‡ÛŒÚ† Ø¯Ø±Ø¯ÛŒ Ù†Ù…ÛŒØ®ÙˆØ±ÛŒØŒ ÛŒÚ© Ø´Ø¨ Ú©Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ ØªÙˆ Ø³ÛŒØ§Ù‡ÛŒ Ø´Ø¨ Ú¯Ù… Ø´Ø¯Ù‡ Ø¨ÙˆØ¯Ù†Ø¯ØŒ Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ ØªØ§ ØµØ¨Ø­ Ù…Ø§Ù‡ Ú©Ø´ÛŒØ¯ Ù…Ù‡ØªØ§Ø¨ Ú©Ø´ÛŒØ¯ Ùˆ Ø§Ù†Ù‚Ø¯Ø± Ø³ØªØ§Ø±Ù‡ Ú©Ø´ÛŒØ¯ Ú©Ù‡ Ú©ÙˆÚ†Ú© Ùˆ Ú©ÙˆÚ†Ú©ØªØ± Ø´Ø¯ ØµØ¨Ø­ ØªÙˆÛŒ Ø¬Ø¹Ø¨Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ø¬Ø§ÛŒ Ø®Ø§Ù„ÛŒ Ø§Ùˆ Ø¨Ø§ Ù‡ÛŒÚ† Ø±Ù†Ú¯ÛŒ  Ù¾Ø± Ù†Ø´Ø¯ØŒ Ø¨Ù‡ ÛŒØ§Ø¯ Ù‡Ù… Ø¨Ø§Ø´ÛŒÙ… Ø´Ø§ÛŒØ¯ ÙØ±Ø¯Ø§ Ù…Ø§ Ù‡Ù… Ø¯Ø± Ú©Ù†Ø§Ø± Ù‡Ù… Ù†Ø¨Ø§Ø´ÛŒÙ…â€¦'),
(1106, 'Ú©Ø§Ø³Ù‡ Ø³Ù†ØªÛŒ', 7, 140000, 'kase-sonati.jpg', 'Ú©Ø§Ø³Ù‡ Ù‡Ø§ÛŒ Ø³Ù†ØªÛŒ. Ø¨Ø±Ø§ÛŒ Ø¹Ø²ÛŒØ²Ø§Ù†ÛŒ Ú©Ù‡ Ù‡Ù†Ø± Ùˆ ÙØ±Ù‡Ù†Ú¯ Ø§ÛŒØ±Ø§Ù†ÛŒ Ø¨Ø±Ø§ÛŒØ´Ø§Ù† Ø§Ø±Ø²Ø´Ù…Ù†Ø¯ Ø§Ø³Øª. Ø§ÛŒÙ† Ú©Ø§Ø³Ù‡ Ù‡Ø§ Ù†ØªÛŒØ¬Ù‡ Ø³Ø§Ø¹ØªÙ‡Ø§ Ø²Ø­Ù…Øª Ø§Ø³Øª.  Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ Ù…Ø´ØºÙˆÙ„ Ø¨ÙˆØ¯Ù†Ø¯ Ø¨Ù‡ Ø¬Ø² Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ØŒ Ù‡ÛŒÚ†Ú©Ø³ Ø¨Ù‡ Ø§Ùˆ Ú©Ø§Ø± Ù†Ù…ÛŒØ¯Ø§Ø¯ØŒ Ù‡Ù…Ù‡ Ù…ÛŒÚ¯ÙØªÙ†Ø¯ : ØªÙˆ Ø¨Ù‡ Ù‡ÛŒÚ† Ø¯Ø±Ø¯ÛŒ Ù†Ù…ÛŒØ®ÙˆØ±ÛŒØŒ ÛŒÚ© Ø´Ø¨ Ú©Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ ØªÙˆ Ø³ÛŒØ§Ù‡ÛŒ Ø´Ø¨ Ú¯Ù… Ø´Ø¯Ù‡ Ø¨ÙˆØ¯Ù†Ø¯ØŒ Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ ØªØ§ ØµØ¨Ø­ Ù…Ø§Ù‡ Ú©Ø´ÛŒØ¯ Ù…Ù‡ØªØ§Ø¨ Ú©Ø´ÛŒØ¯ Ùˆ Ø§Ù†Ù‚Ø¯Ø± Ø³ØªØ§Ø±Ù‡ Ú©Ø´ÛŒØ¯ Ú©Ù‡ Ú©ÙˆÚ†Ú© Ùˆ Ú©ÙˆÚ†Ú©ØªØ± Ø´Ø¯ ØµØ¨Ø­ ØªÙˆÛŒ Ø¬Ø¹Ø¨Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ø¬Ø§ÛŒ Ø®Ø§Ù„ÛŒ Ø§Ùˆ Ø¨Ø§ Ù‡ÛŒÚ† Ø±Ù†Ú¯ÛŒ  Ù¾Ø± Ù†Ø´Ø¯ØŒ Ø¨Ù‡ ÛŒØ§Ø¯ Ù‡Ù… Ø¨Ø§Ø´ÛŒÙ… Ø´Ø§ÛŒØ¯ ÙØ±Ø¯Ø§ Ù…Ø§ Ù‡Ù… Ø¯Ø± Ú©Ù†Ø§Ø± Ù‡Ù… Ù†Ø¨Ø§Ø´ÛŒÙ…â€¦'),
(1107, 'Ú©Ø§Ø´ÛŒ Ú©Ø§Ø±ÛŒ Ù‡ÙØª Ø±Ù†Ú¯', 12, 17000, 'kashi-haft-rang.jpg', 'Ø§ÛŒÙ† Ú©Ø§Ø´ÛŒ Ù‡Ø§ Ù…ÛŒØªÙˆØ§Ù†Ù†Ø¯ Ø§Ù„Ù…Ø§Ù† Ø¨Ø¬Ø§ÛŒÛŒ Ø¨Ø±Ø§ÛŒ Ø·Ø±Ø§Ø­ÛŒ Ø®Ø§Ù†Ù‡â€ŒØªØ§Ù† Ø¨Ø§Ø´Ù†Ø¯. Ø§ÛŒÙ† Ú©Ø§Ø´ÛŒ Ù‡Ø§ Ø­Ø§ÙˆÛŒ Ø·Ø±Ø­ Ùˆ Ø±Ù†Ú¯ Ù‡Ø§ÛŒ Ø§ØµÛŒÙ„ Ø§ÛŒØ±Ø§Ù†ÛŒ Ù‡Ø³ØªÙ†Ø¯.  Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ Ù…Ø´ØºÙˆÙ„ Ø¨ÙˆØ¯Ù†Ø¯ Ø¨Ù‡ Ø¬Ø² Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ØŒ Ù‡ÛŒÚ†Ú©Ø³ Ø¨Ù‡ Ø§Ùˆ Ú©Ø§Ø± Ù†Ù…ÛŒØ¯Ø§Ø¯ØŒ Ù‡Ù…Ù‡ Ù…ÛŒÚ¯ÙØªÙ†Ø¯ : ØªÙˆ Ø¨Ù‡ Ù‡ÛŒÚ† Ø¯Ø±Ø¯ÛŒ Ù†Ù…ÛŒØ®ÙˆØ±ÛŒØŒ ÛŒÚ© Ø´Ø¨ Ú©Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ ØªÙˆ Ø³ÛŒØ§Ù‡ÛŒ Ø´Ø¨ Ú¯Ù… Ø´Ø¯Ù‡ Ø¨ÙˆØ¯Ù†Ø¯ØŒ Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ ØªØ§ ØµØ¨Ø­ Ù…Ø§Ù‡ Ú©Ø´ÛŒØ¯ Ù…Ù‡ØªØ§Ø¨ Ú©Ø´ÛŒØ¯ Ùˆ Ø§Ù†Ù‚Ø¯Ø± Ø³ØªØ§Ø±Ù‡ Ú©Ø´ÛŒØ¯ Ú©Ù‡ Ú©ÙˆÚ†Ú© Ùˆ Ú©ÙˆÚ†Ú©ØªØ± Ø´Ø¯ ØµØ¨Ø­ ØªÙˆÛŒ Ø¬Ø¹Ø¨Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ø¬Ø§ÛŒ Ø®Ø§Ù„ÛŒ Ø§Ùˆ Ø¨Ø§ Ù‡ÛŒÚ† Ø±Ù†Ú¯ÛŒ  Ù¾Ø± Ù†Ø´Ø¯ØŒ Ø¨Ù‡ ÛŒØ§Ø¯ Ù‡Ù… Ø¨Ø§Ø´ÛŒÙ… Ø´Ø§ÛŒØ¯ ÙØ±Ø¯Ø§ Ù…Ø§ Ù‡Ù… Ø¯Ø± Ú©Ù†Ø§Ø± Ù‡Ù… Ù†Ø¨Ø§Ø´ÛŒÙ…â€¦'),
(1108, 'Ú©ÙˆØ²Ù‡ Ù…ÛŒÙ†Ø§Ú©Ø§Ø±ÛŒ', 2, 780000, 'kooze-minakari.jpg', 'Ø§ÛŒÙ† Ú©ÙˆØ²Ù‡ Ù‡Ø§ Ø¨Ø§ Ø±Ù†Ú¯ Ù‡Ø§ Ùˆ Ø·Ø±Ø­ Ù‡Ø§ÛŒ Ø§ØµÛŒÙ„ Ø§ÛŒØ±Ø§Ù†ÛŒ ØªÙ‡ÛŒÙ‡ Ùˆ ØªÙˆÙ„ÛŒØ¯ Ù…ÛŒØ´ÙˆÙ†Ø¯. Ø§Ø² Ù¾Ø±Ø·Ø±ÙØ¯Ø§Ø± ØªØ±ÛŒÙ† Ù…Ø­ØµÙˆÙ„ ØµÙ†Ø§ÛŒØ¹ Ø¯Ø³ØªÛŒ Ø§ÛŒØ±Ø§Ù†ÛŒ Ù‡Ø³ØªÙ†Ø¯.  Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ Ù…Ø´ØºÙˆÙ„ Ø¨ÙˆØ¯Ù†Ø¯ Ø¨Ù‡ Ø¬Ø² Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ØŒ Ù‡ÛŒÚ†Ú©Ø³ Ø¨Ù‡ Ø§Ùˆ Ú©Ø§Ø± Ù†Ù…ÛŒØ¯Ø§Ø¯ØŒ Ù‡Ù…Ù‡ Ù…ÛŒÚ¯ÙØªÙ†Ø¯ : ØªÙˆ Ø¨Ù‡ Ù‡ÛŒÚ† Ø¯Ø±Ø¯ÛŒ Ù†Ù…ÛŒØ®ÙˆØ±ÛŒØŒ ÛŒÚ© Ø´Ø¨ Ú©Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ ØªÙˆ Ø³ÛŒØ§Ù‡ÛŒ Ø´Ø¨ Ú¯Ù… Ø´Ø¯Ù‡ Ø¨ÙˆØ¯Ù†Ø¯ØŒ Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ ØªØ§ ØµØ¨Ø­ Ù…Ø§Ù‡ Ú©Ø´ÛŒØ¯ Ù…Ù‡ØªØ§Ø¨ Ú©Ø´ÛŒØ¯ Ùˆ Ø§Ù†Ù‚Ø¯Ø± Ø³ØªØ§Ø±Ù‡ Ú©Ø´ÛŒØ¯ Ú©Ù‡ Ú©ÙˆÚ†Ú© Ùˆ Ú©ÙˆÚ†Ú©ØªØ± Ø´Ø¯ ØµØ¨Ø­ ØªÙˆÛŒ Ø¬Ø¹Ø¨Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ø¬Ø§ÛŒ Ø®Ø§Ù„ÛŒ Ø§Ùˆ Ø¨Ø§ Ù‡ÛŒÚ† Ø±Ù†Ú¯ÛŒ  Ù¾Ø± Ù†Ø´Ø¯ØŒ Ø¨Ù‡ ÛŒØ§Ø¯ Ù‡Ù… Ø¨Ø§Ø´ÛŒÙ… Ø´Ø§ÛŒØ¯ ÙØ±Ø¯Ø§ Ù…Ø§ Ù‡Ù… Ø¯Ø± Ú©Ù†Ø§Ø± Ù‡Ù… Ù†Ø¨Ø§Ø´ÛŒÙ…â€¦'),
(1109, 'Ú©ÙˆØ²Ù‡ Ø³ÙØ§Ù„ÛŒ (Ø®Ø§Ú© Ø³ÙÛŒØ¯)', 22, 120000, 'kooze-sofali-khaksefid.jpg', 'Ú©ÙˆØ²Ù‡ Ù‡Ø§ÛŒ Ø¯Ø³ØªÛŒ Ø³ÙØ§Ù„ÛŒ Ø®Ø§Ú© Ø³ÙÛŒØ¯ Ú©Ù‡ Ù…Ù…Ú©Ù† Ø§Ø³Øª ØªØ§Ø­Ø§Ù„Ø§ Ù‡Ø²Ø§Ø±Ø§Ù† Ø¨Ø§Ø± Ø¯ÛŒØ¯Ù‡ Ø¨Ø§Ø´ÛŒØ¯.  Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ Ù…Ø´ØºÙˆÙ„ Ø¨ÙˆØ¯Ù†Ø¯ Ø¨Ù‡ Ø¬Ø² Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ØŒ Ù‡ÛŒÚ†Ú©Ø³ Ø¨Ù‡ Ø§Ùˆ Ú©Ø§Ø± Ù†Ù…ÛŒØ¯Ø§Ø¯ØŒ Ù‡Ù…Ù‡ Ù…ÛŒÚ¯ÙØªÙ†Ø¯ : ØªÙˆ Ø¨Ù‡ Ù‡ÛŒÚ† Ø¯Ø±Ø¯ÛŒ Ù†Ù…ÛŒØ®ÙˆØ±ÛŒØŒ ÛŒÚ© Ø´Ø¨ Ú©Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ ØªÙˆ Ø³ÛŒØ§Ù‡ÛŒ Ø´Ø¨ Ú¯Ù… Ø´Ø¯Ù‡ Ø¨ÙˆØ¯Ù†Ø¯ØŒ Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ ØªØ§ ØµØ¨Ø­ Ù…Ø§Ù‡ Ú©Ø´ÛŒØ¯ Ù…Ù‡ØªØ§Ø¨ Ú©Ø´ÛŒØ¯ Ùˆ Ø§Ù†Ù‚Ø¯Ø± Ø³ØªØ§Ø±Ù‡ Ú©Ø´ÛŒØ¯ Ú©Ù‡ Ú©ÙˆÚ†Ú© Ùˆ Ú©ÙˆÚ†Ú©ØªØ± Ø´Ø¯ ØµØ¨Ø­ ØªÙˆÛŒ Ø¬Ø¹Ø¨Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ø¬Ø§ÛŒ Ø®Ø§Ù„ÛŒ Ø§Ùˆ Ø¨Ø§ Ù‡ÛŒÚ† Ø±Ù†Ú¯ÛŒ  Ù¾Ø± Ù†Ø´Ø¯ØŒ Ø¨Ù‡ ÛŒØ§Ø¯ Ù‡Ù… Ø¨Ø§Ø´ÛŒÙ… Ø´Ø§ÛŒØ¯ ÙØ±Ø¯Ø§ Ù…Ø§ Ù‡Ù… Ø¯Ø± Ú©Ù†Ø§Ø± Ù‡Ù… Ù†Ø¨Ø§Ø´ÛŒÙ…â€¦'),
(1110, 'Ù…Ø¬Ù…ÙˆØ¹Ù‡ Ú†Ø±Ù…ÛŒ Ø¯Ø³ØªÛŒ', 2, 890000, 'majmoe-charmi.jpg', 'Ù…Ø¬Ù…ÙˆØ¹Ù‡ Ú†Ø±Ù…ÛŒ Ø´Ø§Ù…Ù„ Ú©Ù…Ø±Ø¨Ù†Ø¯ØŒ Ú©ÛŒÙ Ùˆ ØªØ¹Ø¯Ø§Ø¯ÛŒ Ù‚Ø·Ø¹Ø§Øª Ú†Ø±Ù…ÛŒ Ø¯ÛŒÚ¯Ø±. ØªÙ‡ÛŒÙ‡ Ø´Ø¯Ù‡ Ø§Ø² Ú†Ø±Ù… Ú©Ø§Ù…Ù„Ø§ Ø·Ø¨ÛŒØ¹ÛŒ Ùˆ Ø¨Ø§ Ø´ÛŒÙˆÙ‡ Ù‡Ø§ÛŒ Ø³Ù†ØªÛŒ.  Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ Ù…Ø´ØºÙˆÙ„ Ø¨ÙˆØ¯Ù†Ø¯ Ø¨Ù‡ Ø¬Ø² Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ØŒ Ù‡ÛŒÚ†Ú©Ø³ Ø¨Ù‡ Ø§Ùˆ Ú©Ø§Ø± Ù†Ù…ÛŒØ¯Ø§Ø¯ØŒ Ù‡Ù…Ù‡ Ù…ÛŒÚ¯ÙØªÙ†Ø¯ : ØªÙˆ Ø¨Ù‡ Ù‡ÛŒÚ† Ø¯Ø±Ø¯ÛŒ Ù†Ù…ÛŒØ®ÙˆØ±ÛŒØŒ ÛŒÚ© Ø´Ø¨ Ú©Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ ØªÙˆ Ø³ÛŒØ§Ù‡ÛŒ Ø´Ø¨ Ú¯Ù… Ø´Ø¯Ù‡ Ø¨ÙˆØ¯Ù†Ø¯ØŒ Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ ØªØ§ ØµØ¨Ø­ Ù…Ø§Ù‡ Ú©Ø´ÛŒØ¯ Ù…Ù‡ØªØ§Ø¨ Ú©Ø´ÛŒØ¯ Ùˆ Ø§Ù†Ù‚Ø¯Ø± Ø³ØªØ§Ø±Ù‡ Ú©Ø´ÛŒØ¯ Ú©Ù‡ Ú©ÙˆÚ†Ú© Ùˆ Ú©ÙˆÚ†Ú©ØªØ± Ø´Ø¯ ØµØ¨Ø­ ØªÙˆÛŒ Ø¬Ø¹Ø¨Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ø¬Ø§ÛŒ Ø®Ø§Ù„ÛŒ Ø§Ùˆ Ø¨Ø§ Ù‡ÛŒÚ† Ø±Ù†Ú¯ÛŒ  Ù¾Ø± Ù†Ø´Ø¯ØŒ Ø¨Ù‡ ÛŒØ§Ø¯ Ù‡Ù… Ø¨Ø§Ø´ÛŒÙ… Ø´Ø§ÛŒØ¯ ÙØ±Ø¯Ø§ Ù…Ø§ Ù‡Ù… Ø¯Ø± Ú©Ù†Ø§Ø± Ù‡Ù… Ù†Ø¨Ø§Ø´ÛŒÙ…â€¦'),
(1111, 'Ù…Ø¬Ù…ÙˆØ¹Ù‡ Ú©ÙˆØ²Ù‡ Ø³ÙØ§Ù„ÛŒ', 4, 1950000, 'majmoe-kooze-sofali.jpg', 'Ù…Ø¬Ù…ÙˆØ¹Ù‡ Ú©ÙˆØ²Ù‡ Ù‡Ø§ÛŒ Ø³ÙØ§Ù„ÛŒØŒ Ù…Ù†Ø§Ø³Ø¨ Ø¨Ø±Ø§ÛŒ Ø·Ø±Ø§Ø­ÛŒ Ø¯Ø§Ø®Ù„ÛŒ Ù…Ú©Ø§Ù† Ù‡Ø§ÛŒ Ù…Ø®ØªÙ„Ù.  Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ Ù…Ø´ØºÙˆÙ„ Ø¨ÙˆØ¯Ù†Ø¯ Ø¨Ù‡ Ø¬Ø² Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ØŒ Ù‡ÛŒÚ†Ú©Ø³ Ø¨Ù‡ Ø§Ùˆ Ú©Ø§Ø± Ù†Ù…ÛŒØ¯Ø§Ø¯ØŒ Ù‡Ù…Ù‡ Ù…ÛŒÚ¯ÙØªÙ†Ø¯ : ØªÙˆ Ø¨Ù‡ Ù‡ÛŒÚ† Ø¯Ø±Ø¯ÛŒ Ù†Ù…ÛŒØ®ÙˆØ±ÛŒØŒ ÛŒÚ© Ø´Ø¨ Ú©Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ ØªÙˆ Ø³ÛŒØ§Ù‡ÛŒ Ø´Ø¨ Ú¯Ù… Ø´Ø¯Ù‡ Ø¨ÙˆØ¯Ù†Ø¯ØŒ Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ ØªØ§ ØµØ¨Ø­ Ù…Ø§Ù‡ Ú©Ø´ÛŒØ¯ Ù…Ù‡ØªØ§Ø¨ Ú©Ø´ÛŒØ¯ Ùˆ Ø§Ù†Ù‚Ø¯Ø± Ø³ØªØ§Ø±Ù‡ Ú©Ø´ÛŒØ¯ Ú©Ù‡ Ú©ÙˆÚ†Ú© Ùˆ Ú©ÙˆÚ†Ú©ØªØ± Ø´Ø¯ ØµØ¨Ø­ ØªÙˆÛŒ Ø¬Ø¹Ø¨Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ø¬Ø§ÛŒ Ø®Ø§Ù„ÛŒ Ø§Ùˆ Ø¨Ø§ Ù‡ÛŒÚ† Ø±Ù†Ú¯ÛŒ  Ù¾Ø± Ù†Ø´Ø¯ØŒ Ø¨Ù‡ ÛŒØ§Ø¯ Ù‡Ù… Ø¨Ø§Ø´ÛŒÙ… Ø´Ø§ÛŒØ¯ ÙØ±Ø¯Ø§ Ù…Ø§ Ù‡Ù… Ø¯Ø± Ú©Ù†Ø§Ø± Ù‡Ù… Ù†Ø¨Ø§Ø´ÛŒÙ…â€¦'),
(1112, 'Ù…Ø¬Ù…ÙˆØ¹Ù‡ Ø¸Ø±ÙˆÙ Ù…Ø³ÛŒ', 3, 560000, 'majmoe-zoroof-mesi.jpg', 'Ù…Ø¬Ù…ÙˆØ¹Ù‡ Ø·Ø±ÙˆÙ Ù…Ø³ÛŒ Ø§ØµÛŒÙ„ Ø§Ø³Ø±Ø§Ù†ÛŒ Ø¨Ø§ Ù„Ø§ÛŒÙ‡ Ø±ÙˆÚ©Ø´ Ù‚Ù„Ø¹ Ø¨Ø±Ø§ÛŒ Ø³Ù„Ø§Ù…ØªÛŒ Ø´Ù…Ø§ Ø¬Ù‡Øª Ø¬Ù„ÙˆÚ¯ÛŒØ±ÛŒ Ø§Ø² Ù…Ø³Ù…ÙˆÙ…ÛŒØª Ø¨Ø§ Ù…Ø³.  Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ Ù…Ø´ØºÙˆÙ„ Ø¨ÙˆØ¯Ù†Ø¯ Ø¨Ù‡ Ø¬Ø² Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ØŒ Ù‡ÛŒÚ†Ú©Ø³ Ø¨Ù‡ Ø§Ùˆ Ú©Ø§Ø± Ù†Ù…ÛŒØ¯Ø§Ø¯ØŒ Ù‡Ù…Ù‡ Ù…ÛŒÚ¯ÙØªÙ†Ø¯ : ØªÙˆ Ø¨Ù‡ Ù‡ÛŒÚ† Ø¯Ø±Ø¯ÛŒ Ù†Ù…ÛŒØ®ÙˆØ±ÛŒØŒ ÛŒÚ© Ø´Ø¨ Ú©Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ ØªÙˆ Ø³ÛŒØ§Ù‡ÛŒ Ø´Ø¨ Ú¯Ù… Ø´Ø¯Ù‡ Ø¨ÙˆØ¯Ù†Ø¯ØŒ Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ ØªØ§ ØµØ¨Ø­ Ù…Ø§Ù‡ Ú©Ø´ÛŒØ¯ Ù…Ù‡ØªØ§Ø¨ Ú©Ø´ÛŒØ¯ Ùˆ Ø§Ù†Ù‚Ø¯Ø± Ø³ØªØ§Ø±Ù‡ Ú©Ø´ÛŒØ¯ Ú©Ù‡ Ú©ÙˆÚ†Ú© Ùˆ Ú©ÙˆÚ†Ú©ØªØ± Ø´Ø¯ ØµØ¨Ø­ ØªÙˆÛŒ Ø¬Ø¹Ø¨Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ø¬Ø§ÛŒ Ø®Ø§Ù„ÛŒ Ø§Ùˆ Ø¨Ø§ Ù‡ÛŒÚ† Ø±Ù†Ú¯ÛŒ  Ù¾Ø± Ù†Ø´Ø¯ØŒ Ø¨Ù‡ ÛŒØ§Ø¯ Ù‡Ù… Ø¨Ø§Ø´ÛŒÙ… Ø´Ø§ÛŒØ¯ ÙØ±Ø¯Ø§ Ù…Ø§ Ù‡Ù… Ø¯Ø± Ú©Ù†Ø§Ø± Ù‡Ù… Ù†Ø¨Ø§Ø´ÛŒÙ…â€¦'),
(1113, 'Ù¾Ø§Ø±Ú†Ù‡ Ù‚Ù„Ù…Ú©Ø§Ø±ÛŒ Ø´Ø¯Ù‡', 8, 4500000, 'parche-ghalamkari.jpg', 'Ù¾Ø§Ø±Ú†Ù‡ Ù‡Ø§ÛŒ Ù‚Ù„Ù…Ú©Ø§Ø±ÛŒ Ø´Ø¯Ù‡. Ø§Ø² Ø²ÛŒØ¨Ø§ØªØ±ÛŒÙ† Ù…Ø­ØµÙˆÙ„Ø§Øª ØµÙ†Ø§ÛŒØ¹ Ø¯Ø³ØªÛŒ Ø§ÛŒØ±Ø§Ù†ÛŒ Ù‡Ø³ØªÙ†Ø¯ Ùˆ Ø·Ø±ÙØ¯Ø§Ø± Ù‡Ø§ÛŒ Ø²ÛŒØ§Ø¯ÛŒ Ø¯Ø± Ø¯Ø§Ø®Ù„ Ùˆ Ø®Ø§Ø±Ø¬ Ø§Ø² Ø§ÛŒØ±Ø§Ù† Ø¯Ø§Ø±Ù†Ø¯.  Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ Ù…Ø´ØºÙˆÙ„ Ø¨ÙˆØ¯Ù†Ø¯ Ø¨Ù‡ Ø¬Ø² Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ØŒ Ù‡ÛŒÚ†Ú©Ø³ Ø¨Ù‡ Ø§Ùˆ Ú©Ø§Ø± Ù†Ù…ÛŒØ¯Ø§Ø¯ØŒ Ù‡Ù…Ù‡ Ù…ÛŒÚ¯ÙØªÙ†Ø¯ : ØªÙˆ Ø¨Ù‡ Ù‡ÛŒÚ† Ø¯Ø±Ø¯ÛŒ Ù†Ù…ÛŒØ®ÙˆØ±ÛŒØŒ ÛŒÚ© Ø´Ø¨ Ú©Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ù‡Ø§ ØªÙˆ Ø³ÛŒØ§Ù‡ÛŒ Ø´Ø¨ Ú¯Ù… Ø´Ø¯Ù‡ Ø¨ÙˆØ¯Ù†Ø¯ØŒ Ù…Ø¯Ø§Ø¯ Ø³ÙÛŒØ¯ ØªØ§ ØµØ¨Ø­ Ù…Ø§Ù‡ Ú©Ø´ÛŒØ¯ Ù…Ù‡ØªØ§Ø¨ Ú©Ø´ÛŒØ¯ Ùˆ Ø§Ù†Ù‚Ø¯Ø± Ø³ØªØ§Ø±Ù‡ Ú©Ø´ÛŒØ¯ Ú©Ù‡ Ú©ÙˆÚ†Ú© Ùˆ Ú©ÙˆÚ†Ú©ØªØ± Ø´Ø¯ ØµØ¨Ø­ ØªÙˆÛŒ Ø¬Ø¹Ø¨Ù‡ Ù…Ø¯Ø§Ø¯ Ø±Ù†Ú¯ÛŒ Ø¬Ø§ÛŒ Ø®Ø§Ù„ÛŒ Ø§Ùˆ Ø¨Ø§ Ù‡ÛŒÚ† Ø±Ù†Ú¯ÛŒ  Ù¾Ø± Ù†Ø´Ø¯ØŒ Ø¨Ù‡ ÛŒØ§Ø¯ Ù‡Ù… Ø¨Ø§Ø´ÛŒÙ… Ø´Ø§ÛŒØ¯ ÙØ±Ø¯Ø§ Ù…Ø§ Ù‡Ù… Ø¯Ø± Ú©Ù†Ø§Ø± Ù‡Ù… Ù†Ø¨Ø§Ø´ÛŒÙ…â€¦'),
(1114, 'Ù†Ù…Ø¯ Ø¨Ø§ÙØªÙ‡ Ø´Ø¯Ù‡', 7, 660000, 'parche-namad-bafi.jpg', 'Ù†Ù…Ø¯ Ø¨Ø§ÙØªÙ‡ Ø´Ø¯Ù‡. ÙˆÙ‚ØªÛŒ Ø«Ø±ÙˆØªâ€Œ Ù‡Ø§ÛŒ Ø¨Ø²Ø±Ú¯ Ø¨Ù‡ Ø¯Ø³Øª Ø¨Ø±Ø®ÛŒ Ù…Ø±Ø¯Ù… Ù…ÛŒâ€ŒØ§ÙØªØ¯ Ø¯Ø± Ù¾Ø±ØªÙˆ Ø¢Ù† Ù†ÛŒØ±ÙˆÙ…Ù†Ø¯ Ù…ÛŒâ€ŒØ´ÙˆÙ†Ø¯ Ùˆ Ø¯Ø± Ø³Ø§ÛŒÙ‡Ù” Ù†ÛŒØ±ÙˆÙ…Ù†Ø¯ÛŒ Ùˆ Ø«Ø±ÙˆØª Ø®ÛŒØ§Ù„ Ù…ÛŒâ€Œ Ú©Ù†Ù†Ø¯ Ú©Ù‡ Ù…ÛŒâ€ŒØªÙˆØ§Ù†Ù†Ø¯ Ø¯Ø± Ø®Ø§Ø±Ø¬ Ø§Ø² ÙˆØ·Ù† Ø®ÙˆØ¯ Ø²Ù†Ø¯Ú¯ÛŒ Ù†Ù…Ø§ÛŒÙ†Ø¯ Ùˆ Ø®ÙˆØ´Ø¨Ø®Øª Ùˆ Ø³Ø±Ø§ÙØ±Ø§Ø² Ø¨Ø§Ø´Ù†Ø¯ ÙˆÙ„ÛŒ Ø¨Ù‡ Ø²ÙˆØ¯ÛŒ Ù…ÛŒâ€Œ ÙÙ‡Ù…Ù†Ø¯ Ú©Ù‡ Ø§Ø´ØªØ¨Ø§Ù‡ Ú©Ø±Ø¯Ù‡â€Œ Ø§Ù†Ø¯ Ùˆ Ø¹Ø¸Ù…Øª Ù‡Ø± Ù…Ù„ØªÛŒ Ø¨Ø± Ø±ÙˆÛŒ Ø®Ø±Ø§Ø¨Ù‡â€Œ Ù‡Ø§ÛŒ ÙˆØ·Ù† Ø®ÙˆØ¯Ø´ Ù…ÛŒâ€ŒØ¨Ø§Ø´Ø¯ Ùˆ Ø¨Ø³!\r\n'),
(1115, 'Ù¾Ø§Ø±Ú†Ù‡ Ø³ÙˆØ²Ù† Ø¯ÙˆØ²ÛŒ', 5, 5500000, 'parche-soozandozi.jpg', 'Ø³ÙˆØ²Ù† Ø¯ÙˆØ²ÛŒ Ø§Ø² Ù…Ù‡Ù… ØªØ±ÛŒÙ† Ùˆ Ø²ÛŒØ¨Ø§ØªØ±ÛŒÙ† ØµÙ†Ø§ÛŒØ¹ Ø¯Ø³ØªÛŒ Ø§ÛŒØ±Ø§Ù†ÛŒ Ø§Ø³Øª. ÙˆÙ‚ØªÛŒ Ø«Ø±ÙˆØªâ€Œ Ù‡Ø§ÛŒ Ø¨Ø²Ø±Ú¯ Ø¨Ù‡ Ø¯Ø³Øª Ø¨Ø±Ø®ÛŒ Ù…Ø±Ø¯Ù… Ù…ÛŒâ€ŒØ§ÙØªØ¯ Ø¯Ø± Ù¾Ø±ØªÙˆ Ø¢Ù† Ù†ÛŒØ±ÙˆÙ…Ù†Ø¯ Ù…ÛŒâ€ŒØ´ÙˆÙ†Ø¯ Ùˆ Ø¯Ø± Ø³Ø§ÛŒÙ‡Ù” Ù†ÛŒØ±ÙˆÙ…Ù†Ø¯ÛŒ Ùˆ Ø«Ø±ÙˆØª Ø®ÛŒØ§Ù„ Ù…ÛŒâ€Œ Ú©Ù†Ù†Ø¯ Ú©Ù‡ Ù…ÛŒâ€ŒØªÙˆØ§Ù†Ù†Ø¯ Ø¯Ø± Ø®Ø§Ø±Ø¬ Ø§Ø² ÙˆØ·Ù† Ø®ÙˆØ¯ Ø²Ù†Ø¯Ú¯ÛŒ Ù†Ù…Ø§ÛŒÙ†Ø¯ Ùˆ Ø®ÙˆØ´Ø¨Ø®Øª Ùˆ Ø³Ø±Ø§ÙØ±Ø§Ø² Ø¨Ø§Ø´Ù†Ø¯ ÙˆÙ„ÛŒ Ø¨Ù‡ Ø²ÙˆØ¯ÛŒ Ù…ÛŒâ€Œ ÙÙ‡Ù…Ù†Ø¯ Ú©Ù‡ Ø§Ø´ØªØ¨Ø§Ù‡ Ú©Ø±Ø¯Ù‡â€Œ Ø§Ù†Ø¯ Ùˆ Ø¹Ø¸Ù…Øª Ù‡Ø± Ù…Ù„ØªÛŒ Ø¨Ø± Ø±ÙˆÛŒ Ø®Ø±Ø§Ø¨Ù‡â€Œ Ù‡Ø§ÛŒ ÙˆØ·Ù† Ø®ÙˆØ¯Ø´ Ù…ÛŒâ€ŒØ¨Ø§Ø´Ø¯ Ùˆ Ø¨Ø³!\r\n'),
(1116, 'Ù¾Ø§Ø±Ú†Ù‡ Ø³Ø±Ù…Ù‡â€ŒØ¯ÙˆØ²ÛŒ Ø´Ø¯Ù‡', 3, 1450000, 'parche-sormedoozi.jpg', 'Ù¾Ø§Ø±Ú†Ù‡ Ø³Ø±Ù…Ù‡â€ŒØ¯ÙˆØ²ÛŒ Ø´Ø¯Ù‡ Ø§Ø² Ø®Ø·Ù‡â€ŒÛŒ Ø³ÛŒØ³ØªØ§Ù† Ùˆ Ø¨Ù„ÙˆÚ†Ø³ØªØ§Ù† Ú©Ø´ÙˆØ± Ø¹Ø²ÛŒØ²Ù…Ø§Ù† Ø§ÛŒØ±Ø§Ù†. Ø¨Ù‡ Ù‡Ù…Ø±Ø§Ù‡ Ø·Ø±Ø­ Ù‡Ø§ Ùˆ Ø±Ù†Ú¯ Ù‡Ø§ÛŒ Ø§ØµÛŒÙ„ Ø§ÛŒØ±Ø§Ù†ÛŒ. Ø®Ø§Ù„Ø¯ Ø­Ø³ÛŒÙ†ÛŒ ØªÙˆ Ø±Ù…Ø§Ù† Ø¨Ø§Ø¯ Ø¨Ø§Ø¯Ú© Ø¨Ø§Ø² Ù…ÛŒÙ†ÙˆÛŒØ³Ù‡ : ï»£ïº®ïº© ïºï»«ïº´ïº˜ï»ª ïº©ïº­ ï®”ï»®ïºµ ï»“ïº®ïº¯ï»§ïºª ïº—ïºŽïº¯ï»© ïº‘ï»ª ïº‘ï» ï»®ï» ïº­ïº³ï¯¿ïºªï»© ïºïºµ ïº‘ïº®ïºï¯¼ ï­˜ï»¨ïºª ï­¼ï»¨ï¯¿ï»¦ ï»§ïº ï»®ïº ï®ïº®ïº© : â€ ï­˜ïº´ïº®ï»¡ ïº©ïº­ ïº¯ï»§ïºªï®”ï¯½ ï»«ïº®ï®”ïº° ïº©ïº¯ïº©ï¯¼ ï»§ï®‘ï»¦ â€ ï­˜ïº´ïº® ï»£ïº˜ï»Œïº ïº ï»­ ï»£ïº’ï»¬ï»®ïº• ïº‘ï»ª ï­˜ïºªïº­ ï»§ï®•ïºŽï»© ï®ïº®ïº© ïº‘ïºªï¯¾ï»¦ ï»£ï»Œï»¨ïºŽ ï®ï»ª ïºï»­ ï»«ïº®ï®”ïº° ïº©ïº³ïº– ï®ïºž ï»§ïºªïºïº·ïº˜ï»ª ï­˜ïºªïº­ ïº‘ï»ª ï»§ï®•ïºŽï»© ï»£ïº˜ï»Œïº ïº ï»“ïº®ïº¯ï»§ïºª ï»Ÿïº’ïº¨ï»¨ïºªï¯¼ ïº¯ïº© ï»­ ïºïº©ïºï»£ï»ª ïº©ïºïº© : ïº©ïº­ ïº¯ï»§ïºªï®”ï¯½ ïº©ïº­ï»­ï» ï»§ï®•ï»® ï­¼ïº®ïº ï®ï»ª ïºï®”ïº® ï®”ï»”ïº˜ï¯½ ïº»ïºªïºï»—ïº– ïº­ïº ïº©ïº¯ïº©ï¯¾ïºªï»© ïºï¯¼ØŒ ïº§ï¯¿ïºŽï»§ïº– ï»§ï®‘ï»¦ ï®ï»ª ïºï®”ïº® ï®ïº®ïº©ï¯¼ ï»‹ïº¸ï»– ïº­ïº ïº©ïº¯ïº©ï¯¾ïºªï»© ïºï¯¼ØŒ ïº§ïº¸ï»®ï»§ïº– ï»§ï®‘ï»¦ ïºï®”ïº® ï®ïº®ïº©ï¯¼ ï»£ïº¤ïº’ïº– ïº­ïº ïº©ïº¯ïº©ï¯¾ïºªï»© ïºï¯¼ØŒ ï»§ïºŽ ïº£ï»– ï»§ï®•ï»® ïºï®”ïº® ï®”ï»”ïº˜ï¯½ ïº£ï»– ïº­ïº ïº©ïº¯ïº©ï¯¾ïºªï»© ïºï¯¼ØŒ ïº‘ï¯½ ïº£ï¯¿ïºŽï¯¾ï¯½ ï»§ï®‘ï»¦ ïºï®”ïº® ï®ïº®ïº©ï¯¼ ïº·ïº®ïºï»“ïº– ïº­ïº ïº©ïº¯ïº©ï¯¾ïºªï»© ïºÛŒ... ï­˜ïº² ïº©ïº­ ïº¯ï»§ïºªï®”ï¯½ ï»“ï»˜ï»‚ ïº©ïº¯ïº©ï¯¼ Ù†Ú©Ù† !\r\n\r\n'),
(1117, 'Ø¸Ø±Ù ÙÛŒØ±ÙˆØ²Ù‡ Ú©ÙˆØ¨ÛŒ Ø´Ø¯Ù‡', 2, 1510000, 'zarf-firozekoobi.jpg', 'Ø§Ú¯Ø± Ø¯Ù†Ø¨Ø§Ù„ Ø§Ù„Ù…Ø§Ù† Ø®Ø§ØµÛŒ Ø¨Ø±Ø§ÛŒ Ø¯Ú©ÙˆØ± ÛŒØ§ Ø·Ø±Ø§Ø­ÛŒ Ø¯Ø§Ø®Ù„ÛŒ Ø®Ø§Ù†Ù‡â€ŒØªØ§Ù† Ù‡Ø³ØªÛŒØ¯ØŒ Ø§ÛŒÙ† Ù…Ø­ØµÙˆÙ„ Ù…ÛŒØªÙˆØ§Ù†Ø¯ Ø¨Ø®ÙˆØ¨ÛŒ Ø¨Ø±Ø§ÛŒ Ø´Ù…Ø§ Ø§ÛŒÙ† Ú©Ø§Ø± Ø±Ø§ Ø§Ù†Ø¬Ø§Ù… Ø¯Ù‡Ø¯. Ø®Ø§Ù„Ø¯ Ø­Ø³ÛŒÙ†ÛŒ ØªÙˆ Ø±Ù…Ø§Ù† Ø¨Ø§Ø¯ Ø¨Ø§Ø¯Ú© Ø¨Ø§Ø² Ù…ÛŒÙ†ÙˆÛŒØ³Ù‡ : ï»£ïº®ïº© ïºï»«ïº´ïº˜ï»ª ïº©ïº­ ï®”ï»®ïºµ ï»“ïº®ïº¯ï»§ïºª ïº—ïºŽïº¯ï»© ïº‘ï»ª ïº‘ï» ï»®ï» ïº­ïº³ï¯¿ïºªï»© ïºïºµ ïº‘ïº®ïºï¯¼ ï­˜ï»¨ïºª ï­¼ï»¨ï¯¿ï»¦ ï»§ïº ï»®ïº ï®ïº®ïº© : â€ ï­˜ïº´ïº®ï»¡ ïº©ïº­ ïº¯ï»§ïºªï®”ï¯½ ï»«ïº®ï®”ïº° ïº©ïº¯ïº©ï¯¼ ï»§ï®‘ï»¦ â€ ï­˜ïº´ïº® ï»£ïº˜ï»Œïº ïº ï»­ ï»£ïº’ï»¬ï»®ïº• ïº‘ï»ª ï­˜ïºªïº­ ï»§ï®•ïºŽï»© ï®ïº®ïº© ïº‘ïºªï¯¾ï»¦ ï»£ï»Œï»¨ïºŽ ï®ï»ª ïºï»­ ï»«ïº®ï®”ïº° ïº©ïº³ïº– ï®ïºž ï»§ïºªïºïº·ïº˜ï»ª ï­˜ïºªïº­ ïº‘ï»ª ï»§ï®•ïºŽï»© ï»£ïº˜ï»Œïº ïº ï»“ïº®ïº¯ï»§ïºª ï»Ÿïº’ïº¨ï»¨ïºªï¯¼ ïº¯ïº© ï»­ ïºïº©ïºï»£ï»ª ïº©ïºïº© : ïº©ïº­ ïº¯ï»§ïºªï®”ï¯½ ïº©ïº­ï»­ï» ï»§ï®•ï»® ï­¼ïº®ïº ï®ï»ª ïºï®”ïº® ï®”ï»”ïº˜ï¯½ ïº»ïºªïºï»—ïº– ïº­ïº ïº©ïº¯ïº©ï¯¾ïºªï»© ïºï¯¼ØŒ ïº§ï¯¿ïºŽï»§ïº– ï»§ï®‘ï»¦ ï®ï»ª ïºï®”ïº® ï®ïº®ïº©ï¯¼ ï»‹ïº¸ï»– ïº­ïº ïº©ïº¯ïº©ï¯¾ïºªï»© ïºï¯¼ØŒ ïº§ïº¸ï»®ï»§ïº– ï»§ï®‘ï»¦ ïºï®”ïº® ï®ïº®ïº©ï¯¼ ï»£ïº¤ïº’ïº– ïº­ïº ïº©ïº¯ïº©ï¯¾ïºªï»© ïºï¯¼ØŒ ï»§ïºŽ ïº£ï»– ï»§ï®•ï»® ïºï®”ïº® ï®”ï»”ïº˜ï¯½ ïº£ï»– ïº­ïº ïº©ïº¯ïº©ï¯¾ïºªï»© ïºï¯¼ØŒ ïº‘ï¯½ ïº£ï¯¿ïºŽï¯¾ï¯½ ï»§ï®‘ï»¦ ïºï®”ïº® ï®ïº®ïº©ï¯¼ ïº·ïº®ïºï»“ïº– ïº­ïº ïº©ïº¯ïº©ï¯¾ïºªï»© ïºÛŒ... ï­˜ïº² ïº©ïº­ ïº¯ï»§ïºªï®”ï¯½ ï»“ï»˜ï»‚ ïº©ïº¯ïº©ï¯¼ Ù†Ú©Ù† !\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `realname` varchar(70) COLLATE utf8_persian_ci NOT NULL COMMENT 'نام واقعی',
  `username` varchar(30) COLLATE utf8_persian_ci NOT NULL COMMENT 'نام کاربری',
  `password` varchar(30) COLLATE utf8_persian_ci NOT NULL COMMENT 'رمز عبور',
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL COMMENT 'پست الکترونیک',
  `u_type` int(1) NOT NULL COMMENT 'نوع کاربر',
  PRIMARY KEY (`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci COMMENT='جدول کاربران';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`realname`, `username`, `password`, `email`, `u_type`) VALUES
('admin', 'admin', 'admin', 'admin@iranianshop.ir', 1),
('Ø¹Ù„ÛŒ Ø§Ù„Ù…Ø§Ø³ÛŒ', 'alialmasi', 'almasi', 'a710almasi@gmail.com', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
