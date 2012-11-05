-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Hoszt: 127.0.0.1
-- Létrehozás ideje: 2012. nov. 01. 13:39
-- Szerver verzió: 5.5.27
-- PHP verzió: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `mydb`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet: `nap`
--

CREATE TABLE IF NOT EXISTS `nap` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `nev` varchar(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet: `ora`
--

CREATE TABLE IF NOT EXISTS `ora` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `kezdes` time NOT NULL,
  `befejezes` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet: `osztaly`
--

CREATE TABLE IF NOT EXISTS `osztaly` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nev` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet: `tanar`
--

CREATE TABLE IF NOT EXISTS `tanar` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nev_elotag` varchar(10) NOT NULL,
  `vezeteknev` varchar(20) NOT NULL,
  `keresztnev` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `jelszo` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet: `tantargy`
--

CREATE TABLE IF NOT EXISTS `tantargy` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nev` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet: `tanterem`
--

CREATE TABLE IF NOT EXISTS `tanterem` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nev` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
