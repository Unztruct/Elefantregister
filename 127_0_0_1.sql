-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 24 okt 2014 kl 14:44
-- Serverversion: 5.6.20
-- PHP-version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Tabellstruktur `elefanter`
--

CREATE TABLE IF NOT EXISTS `elefanter` (
`id` int(11) NOT NULL,
  `namn` varchar(10) NOT NULL,
  `betar` tinyint(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumpning av Data i tabell `elefanter`
--

INSERT INTO `elefanter` (`id`, `namn`, `betar`) VALUES
(2, 'Trumpa', 0),
(18, 'Matson', 0),
(19, 'Sejmyr', 1),
(20, 'Sejmyr', 1),
(21, 'Dumbo', 1),
(22, 'Trumpa', 0);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `elefanter`
--
ALTER TABLE `elefanter`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `elefanter`
--
ALTER TABLE `elefanter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;--
-- Databas: `elefantlovisa`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `tabellhundar`
--

CREATE TABLE IF NOT EXISTS `tabellhundar` (
`id` int(11) NOT NULL,
  `namn` varchar(20) NOT NULL,
  `ras` varchar(10) NOT NULL,
  `kastrerad` tinyint(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumpning av Data i tabell `tabellhundar`
--

INSERT INTO `tabellhundar` (`id`, `namn`, `ras`, `kastrerad`) VALUES
(1, 'Sven', 'Golden', 0),
(3, 'Lars', 'Retriver', 1);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `tabellhundar`
--
ALTER TABLE `tabellhundar`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `tabellhundar`
--
ALTER TABLE `tabellhundar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;--
-- Databas: `phpmyadmin`
--

-- --------------------------------------------------------
