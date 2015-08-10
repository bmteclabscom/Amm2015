-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Lug 14, 2015 alle 11:38
-- Versione del server: 5.5.43-0ubuntu0.14.04.1
-- Versione PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database1`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `articoli`
--

CREATE TABLE IF NOT EXISTS `articoli` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(128) NOT NULL,
  `descrizione` varchar(128) NOT NULL,
  `prezzo` int(11) NOT NULL,
  `categoria` varchar(128) NOT NULL,
  `url_immagine` varchar(128) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dump dei dati per la tabella `articoli`
--

INSERT INTO `articoli` (`id`, `nome`, `descrizione`, `prezzo`, `categoria`, `url_immagine`) VALUES
(1, 'asd', 'asd', 12, 'asd', 'null');

-- --------------------------------------------------------

--
-- Struttura della tabella `audioVideo`
--

CREATE TABLE IF NOT EXISTS `audioVideo` (
  `artisti` varchar(128) NOT NULL,
  `genere` varchar(128) NOT NULL,
  `durata` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `elettronica`
--

CREATE TABLE IF NOT EXISTS `elettronica` (
  `memoria1` varchar(128) NOT NULL,
  `memoria2` varchar(128) NOT NULL,
  `voltaggio` varchar(128) NOT NULL,
  `marca` varchar(128) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `libri`
--

CREATE TABLE IF NOT EXISTS `libri` (
  `id` int(11) NOT NULL,
  `autore` varchar(128) NOT NULL,
  `genere` varchar(128) NOT NULL,
  `pagine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` bigint(20) unsigned AUTO_INCREMENT,
  `user` varchar(128) NOT NULL,
  `password` varchar(238) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `login`
--

INSERT INTO `login` (`id`, `user`, `password`) VALUES
(1, 'root', 'admin'),
(2, 'davide', 'spano');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `ruolo` varchar(128) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`username`, `email`, `ruolo`, `id`) VALUES
('root', 'root@localhost.com', 'admin', 1),
('davide', 'davide.spano@unica.it', 'user', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
