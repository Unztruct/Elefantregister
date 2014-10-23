-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 23 okt 2014 kl 14:42
-- Serverversion: 5.6.20
-- PHP-version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `elefanter`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `elefanter`
--

CREATE TABLE IF NOT EXISTS `elefanter` (
`id` int(11) NOT NULL,
  `namn` varchar(10) NOT NULL,
  `betar` tinyint(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumpning av Data i tabell `elefanter`
--

INSERT INTO `elefanter` (`id`, `namn`, `betar`) VALUES
(1, 'Dumbo', 1),
(2, 'Trumpa', 0),
(17, 'Benno', 1),
(18, 'Matson', 0);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
