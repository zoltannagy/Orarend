-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Hoszt: 127.0.0.1
-- Létrehozás ideje: 2012. nov. 26. 21:31
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
  `jelszo` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- A tábla adatainak kiíratása `admin`
--

INSERT INTO `admin` (`id`, `nev`, `felhasznalonev`, `jelszo`) VALUES
(1, 'Alapértelmezett Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Tábla szerkezet: `nap`
--

CREATE TABLE IF NOT EXISTS `nap` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `nev` varchar(9) CHARACTER SET latin2 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

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
  `ido` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- A tábla adatainak kiíratása `ora`
--

INSERT INTO `ora` (`id`, `ido`) VALUES
(1, '8:00-8:45'),
(2, '9:00-9:45'),
(3, '10:00-10:45'),
(4, '11:00-11:45'),
(5, '12:00-12:45'),
(6, '13:00-13:45'),
(7, '14:00-14:45'),
(8, '15:00-15:45');

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
  `oraid` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet: `osztaly`
--

CREATE TABLE IF NOT EXISTS `osztaly` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nev` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet: `tanar`
--

CREATE TABLE IF NOT EXISTS `tanar` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nev` varchar(75) NOT NULL,
  `felhasznalonev` varchar(50) NOT NULL,
  `jelszo` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- A tábla adatainak kiíratása `tanar`
--

INSERT INTO `tanar` (`id`, `nev`, `felhasznalonev`, `jelszo`) VALUES
(35, 'Alapértelmezett Tanár', 'tanar', 'd47b837e163f20c78e38a99467b90ccc');

-- --------------------------------------------------------

--
-- Tábla szerkezet: `tantargy`
--

CREATE TABLE IF NOT EXISTS `tantargy` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nev` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet: `tanterem`
--

CREATE TABLE IF NOT EXISTS `tanterem` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nev` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
