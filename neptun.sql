-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Hoszt: 127.0.0.1
-- Létrehozás ideje: 2012. nov. 07. 20:25
-- Szerver verzió: 5.5.27
-- PHP verzió: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `neptun`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet: `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nev` varchar(50) DEFAULT NULL,
  `felhasznalonev` varchar(30) DEFAULT NULL,
  `jelszo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet: `nap`
--

CREATE TABLE IF NOT EXISTS `nap` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `nev` varchar(9) CHARACTER SET latin2 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=6 ;

--
-- A tábla adatainak kiíratása `nap`
--

INSERT INTO `nap` (`id`, `nev`) VALUES
(1, 'Hétfő'),
(2, 'Kedd'),
(3, 'Szerda'),
(4, 'Csütörtök'),
(5, 'Péntek');

-- --------------------------------------------------------

--
-- Tábla szerkezet: `ora`
--

CREATE TABLE IF NOT EXISTS `ora` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `kezdes` time NOT NULL,
  `befejezes` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=9 ;

--
-- A tábla adatainak kiíratása `ora`
--

INSERT INTO `ora` (`id`, `kezdes`, `befejezes`) VALUES
(1, '08:00:00', '08:45:00'),
(2, '09:00:00', '09:45:00'),
(3, '10:00:00', '10:45:00'),
(4, '11:00:00', '11:45:00'),
(5, '12:00:00', '12:45:00'),
(6, '13:00:00', '13:45:00'),
(7, '14:00:00', '14:45:00'),
(8, '15:00:00', '15:45:00');

-- --------------------------------------------------------

--
-- Tábla szerkezet: `orarend`
--

CREATE TABLE IF NOT EXISTS `orarend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanarid` int(2) NOT NULL,
  `osztalyid` int(2) NOT NULL,
  `tantargyid` int(3) NOT NULL,
  `tanteremid` int(2) NOT NULL,
  `napid` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet: `osztaly`
--

CREATE TABLE IF NOT EXISTS `osztaly` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nev` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet: `tanar`
--

CREATE TABLE IF NOT EXISTS `tanar` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nev_elotag` varchar(10) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `vezeteknev` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  `keresztnev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `felhasznalonev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `jelszo` varchar(12) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=2 ;

--
-- A tábla adatainak kiíratása `tanar`
--

INSERT INTO `tanar` (`id`, `nev_elotag`, `vezeteknev`, `keresztnev`, `felhasznalonev`, `jelszo`) VALUES
(1, '', 'LiterÃ¡ti', '', 'pal.literati', 'aaaa');

-- --------------------------------------------------------

--
-- Tábla szerkezet: `tantargy`
--

CREATE TABLE IF NOT EXISTS `tantargy` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet: `tanterem`
--

CREATE TABLE IF NOT EXISTS `tanterem` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nev` varchar(12) CHARACTER SET utf8 COLLATE utf8_hungarian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- A tábla adatainak kiíratása `tanterem`
--

INSERT INTO `tanterem` (`id`, `nev`) VALUES
(1, '---'),
(2, 'InfÃ³ 1.(PC)'),
(3, 'Grafikus'),
(4, 'Angol(4.)'),
(5, 'InfÃ³ 2.(Mac'),
(6, '5. terem'),
(7, '7. terem'),
(8, 'StÃºdiÃ³'),
(9, 'Nagy-elÅ‘adÃ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
