-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `form`;
CREATE TABLE `form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firsty` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `member` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zone` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `partner` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `list_of_zones_and_churches`;
CREATE TABLE `list_of_zones_and_churches` (
  `COL 1` varchar(63) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2020-03-20 08:52:26
