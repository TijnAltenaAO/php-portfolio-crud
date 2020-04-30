-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 apr 2020 om 12:14
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmenu1`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `naam` varchar(20) NOT NULL,
  `image` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL,
  `gebruikersnaam` varchar(25) NOT NULL,
  `wachtwoord` varchar(25) NOT NULL,
  `profiel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `gebruikersnaam`, `wachtwoord`, `profiel`) VALUES
(1, 'TIJN', '123', 2),
(2, 'moos', '123', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `phpsqlmenu`
--

CREATE TABLE `phpsqlmenu` (
  `id` int(11) NOT NULL,
  `label` varchar(25) NOT NULL,
  `href` varchar(50) NOT NULL,
  `class` varchar(25) NOT NULL,
  `order` int(11) NOT NULL,
  `profiel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `phpsqlmenu`
--

INSERT INTO `phpsqlmenu` (`id`, `label`, `href`, `class`, `order`, `profiel`) VALUES
(0, 'default', 'index.php?action=default', '', 1, 0),
(1, 'gallery', 'index.php?action=gallery', '', 3, 0),
(2, 'article', 'index.php?action=article', '', 4, 0),
(3, 'login', 'index.php?action=login', 'rightAside', 5, 0),
(4, 'Profiel', 'index.php?action=profiel', '', 6, 1),
(5, 'Administratie', 'index.php?action=administratie', '', 7, 2),
(9, 'classes', 'index.php?action=classes', '', 2, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `phpsqlmenu`
--
ALTER TABLE `phpsqlmenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `phpsqlmenu`
--
ALTER TABLE `phpsqlmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
