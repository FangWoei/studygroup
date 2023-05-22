-- Adminer 4.8.0 MySQL 5.5.5-10.5.17-MariaDB-1:10.5.17+maria~ubu2004 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `tables`;
CREATE TABLE `tables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tables` (`id`, `name`, `email`, `message`, `added_on`) VALUES
(1,	'Foo Fang Woei',	'foofangwoei@gmail.com',	'1234567890',	'2023-05-22 06:17:35'),
(2,	'John',	'john@gmail.com',	'abcdefghijklmnopqrstuvwxyz',	'2023-05-22 06:21:32'),
(4,	'rabbit',	'rabbit@gmail.com',	'1234567890',	'2023-05-22 06:27:42'),
(5,	'Jane',	'jane@gmail.com',	'1234567890',	'2023-05-22 06:29:35');

-- 2023-05-22 06:31:50
