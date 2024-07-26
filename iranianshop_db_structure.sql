-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2024 at 05:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'کد کالا',
  `name` varchar(200) NOT NULL COMMENT 'نام کالا',
  `qty` int(10) NOT NULL COMMENT 'موجودی کالا',
  `price` float NOT NULL COMMENT 'قیمت کالا',
  `image` varchar(80) NOT NULL COMMENT 'عکس کالا',
  `details` text NOT NULL COMMENT 'توضیحات کالا',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `realname` varchar(70) NOT NULL COMMENT 'نام واقعی',
  `username` varchar(30) NOT NULL COMMENT 'نام کاربری',
  `password` varchar(30) NOT NULL COMMENT 'رمز عبور',
  `email` varchar(50) NOT NULL COMMENT 'پست الکترونیک',
  `u_type` int(1) NOT NULL COMMENT 'نوع کاربر',
  PRIMARY KEY (`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
