-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 jun 2017 om 18:01
-- Serverversie: 10.1.22-MariaDB
-- PHP-versie: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon20173006`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klacht`
--

CREATE TABLE `klacht` (
  `klachtID` int(100) NOT NULL,
  `kachtLocatie` varchar(255) NOT NULL,
  `klachtDesc` varchar(755) NOT NULL,
  `klachtIP` varchar(20) NOT NULL,
  `klachtEmail` varchar(255) NOT NULL,
  `klachtTijdstip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `klacht`
--
ALTER TABLE `klacht`
  ADD PRIMARY KEY (`klachtID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klacht`
--
ALTER TABLE `klacht`
  MODIFY `klachtID` int(100) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
