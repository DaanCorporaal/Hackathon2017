-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 jun 2017 om 23:12
-- Serverversie: 10.1.13-MariaDB
-- PHP-versie: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `event`
--

CREATE TABLE `event` (
  `id` int(20) NOT NULL,
  `naam` varchar(40) NOT NULL,
  `X` double NOT NULL,
  `Y` double NOT NULL,
  `des` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `event`
--

INSERT INTO `event` (`id`, `naam`, `X`, `Y`, `des`) VALUES
(1, 'The Challenge', 51.8993857, 4.5488394999999855, 'http://www.evenementkalender.nl/Hoogvliet/Compus-Hoogvliet/2017-07-01/The-Challenge-31814'),
(2, 'Arnhem Fashion Night 2017', 51.9791776, 5.909228799999937, 'http://www.evenementkalender.nl/Arnhem/esebiuskerk/2017-07-01/Arnhem-Fashion-Night-2017-33386'),
(3, 'Paardenmarkt oud ijsselmonde', 51.8993857, 4.5488394999999855, 'http://www.evenementkalender.nl/Rotterdam/oud-ijsselmonde-gouden-leeuw/2017-07-01/paardenmarkt-oud-ijsselmonde-33567'),
(4, 'Braderie Boulevard Zuid', 51.8954719, 4.510546999999974, 'http://www.evenementkalender.nl/Rotterdam/Boulevard-Zuid/2017-07-01/Braderie-Boulevard-Zuid-33604'),
(5, 'Jazzfestival Kasteel van Rhoon', 51.8596516, 4.417897900000071, 'http://www.evenementkalender.nl/Rhoon/Kasteel-van-Rhoon/2017-07-01/Jazzfestival-Kasteel-van-Rhoon-34232'),
(6, 'Comedy & Concert', 51.8934878, 4.525462500000003, 'http://www.evenementkalender.nl/Rotterdam/Stadion-Feijenoord-(De-Kuip)/2017-07-01/Comedy-en-Concert-Najib-en-Jandino-Live-in-De-Kuip-34627'),
(8, 'Muzemarkt Hall', 52.1122249, 6.102130799999941, 'http://www.evenementkalender.nl/Hall/pastorietuin/2017-07-01/Muzemarkt-Hall-34676'),
(9, 'Ladiesnight Treslinghuis', 53.2262563, 6.581591399999979, 'http://www.evenementkalender.nl/Groningen/Treslinghuis/2017-07-01/Ladiesnight-Treslinghuis-34830'),
(10, 'Proeverij Bottle Distillery', 51.4352272, 5.483856699999933, 'http://www.evenementkalender.nl/Eindhoven/Bottle-Distillery/2017-07-01/Proeverij-Bottle-Distillery-34972'),
(11, '30+ Dance', 51.8830651, 5.9485720999999785, 'http://www.evenementkalender.nl/Zandvoort/De-Haven-van-Zandvoort/2017-07-01/30+-dance-en-tropical-Strandfeest-Letz-Party-35095'),
(12, 'Summer Festival', 51.9726194, 6.333434099999977, 'http://www.evenementkalender.nl/Doetinchem/Turweg-/2017-07-01/Summer-Festival-35189'),
(13, 'Sfeermarkt Oostendorpdagen', 52.44350319999999, 5.8516612999999325, 'http://www.evenementkalender.nl/Oostendorp/Terrein-achter-Prins-Willem-Alexanderschool/2017-07-01/Sfeermarkt-Oostendorpdagen-2017-35213'),
(14, 'Zomerconcert', 52.3651451, 4.896935399999961, 'http://www.evenementkalender.nl/Amsterdam/Tassenmuseum-Hendrikje/2017-07-01/Zomerconcert-35214'),
(15, 'Expeditie Robinson Survival ', 52.3722842, 4.554488399999968, 'http://www.evenementkalender.nl/Zandvoort/De-Haven-van-Zandvoort/2017-07-01/30up-Expeditie-Robinson-Survival-van-Appelman-Events-35258'),
(16, 'Wolfslaar Akoestishe', 51.5597275, 4.800698000000011, 'http://www.evenementkalender.nl/Breda/natuurtuin-wolfslaar/2017-07-01/Wolfslaar-Akoestisch-zomer-2017-editie:-1-juli-met-Henk-en-Melle-+-Broazinha-35286'),
(17, 'Moers, Thee', 52.1581454, 4.489126199999987, 'http://www.evenementkalender.nl/Leiden/Moers-Thee-en-Meer/2017-07-01/Moers-Thee-en-Meer:-Chinese-theeproeverij--35361'),
(18, 'Van Laarhoven', 51.4810895, 5.455609200000026, 'http://www.evenementkalender.nl/Eindhoven/Van-Laarhoven-BMW/2017-07-01/Van-Laarhoven-BMW-Foodtruck-Festival-35419'),
(19, 'Hostadagen bij de kleine Plantage', 53.3702079, 6.468317500000012, 'http://www.evenementkalender.nl/Eenrum/De-Kleine-Plantage/2017-07-01/Hostadagen-bij-De-Kleine-Plantage-32611'),
(20, 'Open tuin Hindersteyn', 52.0164147, 5.306893400000035, 'http://www.evenementkalender.nl/Langbroek/Ridderhofstad-Hindersteyn/2017-07-01/Open-tuin-Hindersteyn-32992'),
(21, 'Soul City Zwolle', 52.517132, 6.119905900000049, 'http://www.evenementkalender.nl/Zwolle/Ijsseldelta-Center/2017-07-01/Soul-City-Zwolle-34738'),
(22, 'Dollemansdagen', 51.6922823, 4.895970000000034, 'http://www.evenementkalender.nl/Raamsdonk/Festivalterrein-Kerklaan/2017-07-01/Dollemansdagen-34917'),
(23, 'Runerheater', 51.82312599999999, 5.632855599999971, 'http://www.evenementkalender.nl/Batenburg/Kasteelru%C3%AFne/2017-07-01/Ru%C3%AFnetheater-Batenburg-speelt-Kamperikelen-35034'),
(24, 'Vidanza', 51.8174473, 4.700538300000062, 'http://www.evenementkalender.nl/Dordrecht/Podium-N3/2017-07-01/Vidanza-dansavond--35411'),
(25, 'SummerNights 2017', 52.3556111, 4.878237200000058, 'http://www.evenementkalender.nl/Amsterdam/Het-Concertgebouw/2017-07-01/Robeco-SummerNights-2017-32841'),
(26, 'sculptuurland', 52.053616, 5.565772000000038, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klacht`
--

CREATE TABLE `klacht` (
  `KlachtId` int(30) NOT NULL,
  `Groep` varchar(50) NOT NULL,
  `X` double NOT NULL,
  `Y` double NOT NULL,
  `VoteUp` int(100) NOT NULL,
  `VoteDown` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `klacht`
--
ALTER TABLE `klacht`
  ADD PRIMARY KEY (`KlachtId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT voor een tabel `klacht`
--
ALTER TABLE `klacht`
  MODIFY `KlachtId` int(30) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
