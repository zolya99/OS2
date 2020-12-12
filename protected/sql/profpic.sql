-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2020. Máj 12. 13:02
-- Kiszolgáló verziója: 10.4.10-MariaDB
-- PHP verzió: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `postify`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `profpic`
--

DROP TABLE IF EXISTS `profpic`;
CREATE TABLE IF NOT EXISTS `profpic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `profpic`
--

INSERT INTO `profpic` (`id`, `image`) VALUES
(5, '1274-Snapchat-1797437507.jpg'),
(6, '3360-Snapchat-333711477.jpg'),
(7, ''),
(8, '1271-Snapchat-1908142970.jpg'),
(9, '6672-Snapchat-1908142970.jpg'),
(10, '8263-Snapchat-259897561.jpg'),
(11, '2976-Snapchat-1908142970.jpg'),
(12, '8942-24-248325_profile-picture-circle-png-transparent-png.png'),
(13, '4990-calendar1.jpg'),
(14, ''),
(15, ''),
(16, ''),
(17, '3165-calendar.png'),
(18, '4495-dolgozat_01.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
