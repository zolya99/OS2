-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2020. Máj 07. 11:35
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

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
(17, '3165-calendar.png');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `song_name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `artist` varchar(250) CHARACTER SET utf8 NOT NULL,
  `album` varchar(64) CHARACTER SET utf8 NOT NULL,
  `length` time DEFAULT NULL,
  `mp3` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `songs`
--

INSERT INTO `songs` (`id`, `song_name`, `artist`, `album`, `length`, `mp3`) VALUES
(10, 'Oci Meduze', 'Andrija Jo', 'Oci meduze', '03:06:00', 0x416e6472696a61204a6f205f204f6369206d6564757a652e6d7033);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` int(1) NOT NULL,
  `nationality` varchar(64) NOT NULL DEFAULT 'Undefined',
  `permission` int(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `nationality`, `permission`) VALUES
(1, 'Zoltán', 'Nagy', 'zolya1999@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 0, 'Magyarország', 1),
(2, 'Elek', 'Teszt', 'Elek@teszt.com', 'c7b6b845668130956f8768d3f1ce3d391ca881d6', 2, 'svéd', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
