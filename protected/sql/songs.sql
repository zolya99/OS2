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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
