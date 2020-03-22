-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: www.piustien.net
-- Gegenereerd op: 22 mrt 2020 om 16:18
-- Serverversie: 5.5.62-0+deb8u1
-- PHP-versie: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bin14`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Lessenrooster`
--

CREATE TABLE `Lessenrooster` (
  `Naam` varchar(65) NOT NULL,
  `LesvakID` int(11) NOT NULL,
  `Schooldag` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Lessenrooster`
--

INSERT INTO `Lessenrooster` (`Naam`, `LesvakID`, `Schooldag`) VALUES
('Joske Vermeulen', 1, '2020-03-23'),
('Joske Vermeulen', 2, '2020-03-23'),
('Joske Vermeulen', 3, '2020-03-23'),
('Joske Vermeulen', 4, '2020-03-23'),
('Joske Vermeulen', 5, '2020-03-23'),
('Joske Vermeulen', 6, '2020-03-23'),
('Joske Vermeulen', 7, '2020-03-23'),
('Joske Vermeulen', 8, '2020-03-23'),
('Joske Vermeulen', 9, '2020-03-24'),
('Joske Vermeulen', 10, '2020-03-24'),
('Joske Vermeulen', 11, '2020-03-24'),
('Joske Vermeulen', 12, '2020-03-24'),
('Joske Vermeulen', 13, '2020-03-24'),
('Joske Vermeulen', 14, '2020-03-24'),
('Joske Vermeulen', 15, '2020-03-24'),
('Joske Vermeulen', 16, '2020-03-24'),
('Joske Vermeulen', 17, '2020-03-25'),
('Joske Vermeulen', 18, '2020-03-25'),
('Joske Vermeulen', 19, '2020-03-25'),
('Joske Vermeulen', 20, '2020-03-25'),
('Joske Vermeulen', 21, '2020-03-26'),
('Joske Vermeulen', 22, '2020-03-26'),
('Joske Vermeulen', 23, '2020-03-26'),
('Joske Vermeulen', 24, '2020-03-26'),
('Joske Vermeulen', 25, '2020-03-26'),
('Joske Vermeulen', 26, '2020-03-26'),
('Joske Vermeulen', 27, '2020-03-26'),
('Joske Vermeulen', 28, '2020-03-26'),
('Joske Vermeulen', 29, '2020-03-27'),
('Joske Vermeulen', 30, '2020-03-27'),
('Joske Vermeulen', 31, '2020-03-27'),
('Joske Vermeulen', 32, '2020-03-27'),
('Joske Vermeulen', 33, '2020-03-27'),
('Joske Vermeulen', 34, '2020-03-27'),
('Joske Vermeulen', 35, '2020-03-27'),
('Joske Vermeulen', 36, '2020-03-27');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Lestitel`
--

CREATE TABLE `Lestitel` (
  `LesvakID` int(36) NOT NULL,
  `Lokaal` varchar(5) NOT NULL,
  `Vak` varchar(19) NOT NULL,
  `Leraar` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Lestitel`
--

INSERT INTO `Lestitel` (`LesvakID`, `Lokaal`, `Vak`, `Leraar`) VALUES
(1, 'A053', 'Nederlands', 'Gerrit Vosters'),
(2, 'A159', 'Godsdienst', 'Ellen Vandepitte');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Lesvak`
--

CREATE TABLE `Lesvak` (
  `LesvakID` int(36) NOT NULL,
  `Lesonderwerp` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Lesvak`
--

INSERT INTO `Lesvak` (`LesvakID`, `Lesonderwerp`) VALUES
(1, 'Film & Beeld 6: Montage (slot)'),
(2, 'Voorbereiding perspectiefdag.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Schoolweek`
--

CREATE TABLE `Schoolweek` (
  `Schooldag` date NOT NULL,
  `Weekdag` varchar(9) NOT NULL,
  `Start` time NOT NULL,
  `Einde` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Schoolweek`
--

INSERT INTO `Schoolweek` (`Schooldag`, `Weekdag`, `Start`, `Einde`) VALUES
('2020-03-23', 'Maandag', '08:30:00', '16:45:00'),
('2020-03-24', 'Dinsdag', '08:30:00', '16:45:00'),
('2020-03-25', 'Woensdag', '08:30:00', '12:10:00'),
('2020-03-26', 'Donderdag', '08:30:00', '16:45:00'),
('2020-03-27', 'Vrijdag', '08:30:00', '16:45:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Taak`
--

CREATE TABLE `Taak` (
  `LesvakID` int(36) NOT NULL,
  `SoortTaak` varchar(17) NOT NULL,
  `Commentaar` varchar(65) NOT NULL,
  `Datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Taak`
--

INSERT INTO `Taak` (`LesvakID`, `SoortTaak`, `Commentaar`, `Datum`) VALUES
(1, 'Lang lopende taak', 'Opdracht 2 taalvariatie beroepen', '2020-03-30'),
(2, 'Lang lopende taak', 'GiP godsdienst indienen', '2020-03-30');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Test`
--

CREATE TABLE `Test` (
  `LesvakID` int(36) NOT NULL,
  `SoortTest` varchar(20) NOT NULL,
  `Commentaar` varchar(65) NOT NULL,
  `Datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Test`
--

INSERT INTO `Test` (`LesvakID`, `SoortTest`, `Commentaar`, `Datum`) VALUES
(5, 'Grote overhoring', 'overh. vennootschapsbelasting', '2020-03-23'),
(9, 'Grote overhoring', 'Test Courant 2', '2020-03-24');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Lessenrooster`
--
ALTER TABLE `Lessenrooster`
  ADD PRIMARY KEY (`Naam`,`LesvakID`);

--
-- Indexen voor tabel `Lestitel`
--
ALTER TABLE `Lestitel`
  ADD PRIMARY KEY (`LesvakID`);

--
-- Indexen voor tabel `Lesvak`
--
ALTER TABLE `Lesvak`
  ADD PRIMARY KEY (`LesvakID`);

--
-- Indexen voor tabel `Schoolweek`
--
ALTER TABLE `Schoolweek`
  ADD PRIMARY KEY (`Schooldag`);

--
-- Indexen voor tabel `Taak`
--
ALTER TABLE `Taak`
  ADD PRIMARY KEY (`LesvakID`);

--
-- Indexen voor tabel `Test`
--
ALTER TABLE `Test`
  ADD PRIMARY KEY (`LesvakID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Lestitel`
--
ALTER TABLE `Lestitel`
  MODIFY `LesvakID` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `Lesvak`
--
ALTER TABLE `Lesvak`
  MODIFY `LesvakID` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `Test`
--
ALTER TABLE `Test`
  MODIFY `LesvakID` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
