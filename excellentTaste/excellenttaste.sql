-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 03:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `excellenttaste`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestelling`
--

CREATE TABLE `bestelling` (
  `bestelling_id` int(11) NOT NULL,
  `reservering_id` int(11) NOT NULL,
  `tafel` int(11) NOT NULL,
  `datum` date NOT NULL,
  `tijd` time NOT NULL,
  `menuitemcode` varchar(4) NOT NULL,
  `aantal` int(11) NOT NULL DEFAULT 1,
  `prijs` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bestelling`
--

INSERT INTO `bestelling` (`bestelling_id`, `reservering_id`, `tafel`, `datum`, `tijd`, `menuitemcode`, `aantal`, `prijs`) VALUES
(11, 10, 0, '0000-00-00', '00:00:00', 'vl2', 3, 9.95),
(12, 10, 0, '0000-00-00', '00:00:00', 'ij2', 3, 2.95),
(13, 10, 0, '0000-00-00', '00:00:00', 'kv2', 2, 5.95),
(14, 10, 0, '0000-00-00', '00:00:00', 'wv3', 5, 4.95),
(15, 10, 0, '0000-00-00', '00:00:00', 'fi5', 4, 2.75),
(19, 14, 0, '0000-00-00', '00:00:00', 'wa3', 2, 5.00),
(20, 14, 0, '0000-00-00', '00:00:00', 'vl1', 2, 11.95),
(21, 14, 0, '0000-00-00', '00:00:00', 'mo1', 3, 4.95),
(23, 14, 0, '0000-00-00', '00:00:00', 'wv2', 1, 3.95),
(24, 14, 0, '0000-00-00', '00:00:00', 'wv3', 3, 4.95),
(30, 5, 0, '0000-00-00', '00:00:00', 'wd3', 3, 2.95),
(32, 12, 0, '0000-00-00', '00:00:00', 'bi1', 1, 2.95),
(38, 3, 0, '0000-00-00', '00:00:00', 'bi3', 2, 2.95),
(39, 3, 0, '0000-00-00', '00:00:00', 'ko1', 3, 4.00),
(41, 2, 0, '0000-00-00', '00:00:00', 'wi2', 1, 17.95),
(43, 15, 0, '0000-00-00', '00:00:00', 'wi3', 5, 3.95),
(54, 2, 0, '0000-00-00', '00:00:00', 'wd6', 3, 2.95),
(55, 2, 0, '0000-00-00', '00:00:00', 'wi4', 1, 3.60),
(56, 15, 0, '0000-00-00', '00:00:00', 'bi3', 3, 2.95),
(60, 19, 0, '0000-00-00', '00:00:00', 'fi5', 3, 2.75),
(62, 24, 0, '0000-00-00', '00:00:00', 'bi2', 1, 3.95),
(69, 2, 0, '0000-00-00', '00:00:00', 'fi4', 1, 2.75),
(70, 2, 0, '0000-00-00', '00:00:00', 'wd7', 1, 3.95),
(71, 2, 0, '0000-00-00', '00:00:00', 'wd6', 1, 2.95),
(72, 2, 0, '0000-00-00', '00:00:00', 'wd4', 1, 2.45),
(73, 2, 0, '0000-00-00', '00:00:00', 'wd4', 1, 2.45),
(74, 14, 0, '0000-00-00', '00:00:00', 've1', 1, 11.95),
(77, 14, 5, '2017-12-21', '22:01:48', 'wi1', 1, 3.95),
(78, 14, 5, '2017-12-21', '22:05:10', 'wd6', 3, 2.95),
(79, 14, 5, '2017-12-21', '22:15:12', 'ko1', 1, 4.00),
(81, 20, 8, '2017-12-22', '01:11:48', 'wd1', 1, 2.55),
(82, 38, 1, '2024-05-29', '00:00:19', 'Pils', 1, 0.00),
(83, 38, 1, '2024-05-29', '00:00:19', 'Weiz', 1, 0.00),
(84, 38, 1, '2024-05-29', '00:00:19', 'Sten', 1, 0.00),
(85, 38, 1, '2024-05-29', '00:00:19', 'Pils', 1, 0.00),
(86, 38, 1, '2024-05-29', '00:00:19', 'Weiz', 1, 0.00),
(87, 38, 1, '2024-05-29', '00:00:19', 'Sten', 1, 0.00),
(88, 38, 1, '2024-05-29', '00:00:19', 'Pils', 1, 0.00),
(89, 38, 1, '2024-05-29', '00:00:19', 'Weiz', 1, 0.00),
(90, 38, 1, '2024-05-29', '00:00:19', 'Sten', 1, 0.00),
(91, 38, 1, '2024-05-29', '00:00:19', 'Pils', 1, 0.00),
(92, 38, 1, '2024-05-29', '00:00:19', 'Weiz', 1, 0.00),
(93, 38, 1, '2024-05-29', '00:00:19', 'Sten', 1, 0.00),
(94, 38, 1, '2024-05-29', '00:00:19', 'Pils', 1, 0.00),
(95, 38, 1, '2024-05-29', '00:00:19', 'Weiz', 1, 0.00),
(96, 38, 1, '2024-05-29', '00:00:19', 'Sten', 1, 0.00),
(97, 38, 1, '2024-05-29', '00:00:19', 'Pils', 1, 0.00),
(98, 38, 1, '2024-05-29', '00:00:19', 'Weiz', 1, 0.00),
(99, 38, 1, '2024-05-29', '00:00:19', 'Sten', 1, 0.00),
(100, 38, 1, '2024-05-29', '00:00:19', 'Pils', 1, 0.00),
(101, 38, 1, '2024-05-29', '00:00:19', 'Weiz', 1, 0.00),
(102, 38, 1, '2024-05-29', '00:00:19', 'Sten', 1, 0.00),
(103, 38, 1, '2024-05-29', '00:00:19', 'Pils', 1, 0.00),
(104, 38, 1, '2024-05-29', '00:00:19', 'Weiz', 1, 0.00),
(105, 38, 1, '2024-05-29', '00:00:19', 'Sten', 1, 0.00),
(106, 38, 1, '2024-05-29', '00:00:19', 'Pils', 1, 0.00),
(107, 38, 1, '2024-05-29', '00:00:19', 'Weiz', 1, 0.00),
(108, 38, 1, '2024-05-29', '00:00:19', 'Sten', 1, 0.00),
(109, 38, 1, '2024-05-29', '00:00:19', 'Pils', 1, 0.00),
(110, 38, 1, '2024-05-29', '00:00:19', 'Weiz', 1, 0.00),
(111, 38, 1, '2024-05-29', '00:00:19', 'Sten', 1, 0.00),
(112, 0, 1, '0000-00-00', '00:00:00', 'Pils', 1, 0.00),
(113, 0, 1, '0000-00-00', '00:00:00', 'Weiz', 1, 0.00),
(114, 0, 1, '0000-00-00', '00:00:00', 'Sten', 1, 0.00),
(115, 0, 1, '0000-00-00', '00:00:00', 'Pils', 1, 0.00),
(116, 0, 1, '0000-00-00', '00:00:00', 'Weiz', 1, 0.00),
(117, 0, 1, '0000-00-00', '00:00:00', 'Sten', 1, 0.00),
(118, 38, 1, '2024-05-29', '00:00:19', 'Pils', 1, 0.00),
(119, 38, 1, '2024-05-29', '00:00:19', 'Weiz', 1, 0.00),
(120, 38, 1, '2024-05-29', '00:00:19', 'Sten', 1, 0.00),
(121, 38, 1, '2024-05-29', '00:00:19', 'Pils', 1, 0.00),
(122, 38, 1, '2024-05-29', '00:00:19', 'Weiz', 1, 0.00),
(123, 38, 1, '2024-05-29', '00:00:19', 'Sten', 1, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `gerecht`
--

CREATE TABLE `gerecht` (
  `gerechtcode` varchar(3) NOT NULL,
  `gerechtnaam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `gerecht`
--

INSERT INTO `gerecht` (`gerechtcode`, `gerechtnaam`) VALUES
('drk', 'Dranken'),
('hap', 'Hapjes'),
('hog', 'Hoofdgerechten'),
('nag', 'Nagerechten'),
('vog', 'Voorgerechten');

-- --------------------------------------------------------

--
-- Table structure for table `klant`
--

CREATE TABLE `klant` (
  `klant_id` int(11) NOT NULL,
  `klantnaam` varchar(30) NOT NULL,
  `telefoon` varchar(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `klant`
--

INSERT INTO `klant` (`klant_id`, `klantnaam`, `telefoon`, `email`, `status`) VALUES
(1, 'Piet Hein', '0616243524', 'piet.hein@gmail.com', 1),
(2, 'Yolanthe Snijder', '0633442188', 'yolo@hotmail.nl', 1),
(3, 'Mata Hari', '0676453212', 'matahari@gmail.com', 1),
(4, 'Piet Mondriaan', '06989898877', 'piet@mondriaan.nl', 1),
(5, 'Johnny Jordaan', '0678453425', 'john@jordaan.nl', 1),
(6, 'Linda de Mol', '0699889988', 'lindademol@demol.com', 1),
(7, 'Louis Couperus', '0600110023', 'l.couperus@obscura', 1),
(8, 'Freddy Heineken', '0612123232', 'f.heinenken@heineken.eu', 1),
(9, 'Jeroen Krabbe', '0699998811', 'jeroenkrabbe@hotmail.com', 1),
(16, 'Lies Fuik', '06 89348348', 'liesfuik@gmail.com', 1),
(17, 'Lotte Hermans', '06 89348348', 'Lottehermans@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menuitem`
--

CREATE TABLE `menuitem` (
  `subgerechtcode` varchar(4) NOT NULL,
  `menuitemcode` varchar(4) NOT NULL,
  `menuitemnaam` varchar(30) NOT NULL,
  `prijs` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `menuitem`
--

INSERT INTO `menuitem` (`subgerechtcode`, `menuitemcode`, `menuitemnaam`, `prijs`) VALUES
('kdk', 'bi1', 'Pilsner', 2.95),
('kdk', 'bi2', 'Weizen', 3.95),
('kdk', 'bi3', 'Stender', 2.95),
('kdk', 'bi4', 'Palm', 3.60),
('kdk', 'bi5', 'Kasteel donker', 4.85),
('kdk', 'bi6', 'Brugse Zot', 3.55),
('kdk', 'bi7', 'Grimbergen dubbel', 3.95),
('kdk', 'fi1', 'Tonic', 2.95),
('kdk', 'fi2', 'Seven Up', 2.95),
('kdk', 'fi3', 'Verse Jus', 3.95),
('wik', 'fi4', 'Chaudfontaine rood', 2.75),
('wik', 'fi5', 'Chaudfontaine blauw', 2.75),
('kdk', 'ij1', 'Black Lady', 4.95),
('ijn', 'ij2', 'Vruchtenijs', 2.95),
('koh', 'ko1', 'Portie kaas met mosterd', 4.00),
('koh', 'ko2', 'Brood met kruidenboter', 5.00),
('koh', 'ko3', 'Portie salami worst', 4.00),
('kov', 'kv1', 'Salade met geitenkaas', 4.95),
('kov', 'kv2', 'Tonijnsalade', 5.95),
('kov', 'kv3', 'Zalmsalade', 5.95),
('mon', 'mo1', 'Chocolademousse', 4.95),
('mon', 'mo2', 'Vanillemousse', 3.95),
('veh', 've1', 'Bonengerecht met diverse groen', 11.95),
('veh', 've2', 'Gebakken banana', 10.95),
('vih', 'vi1', 'Gebakken makreel', 8.95),
('vih', 'vi2', 'Mosselen uit pan', 9.95),
('vlh', 'vl1', 'Biefstuk in champignonsaus', 11.95),
('vlh', 'vl2', 'Wienerschnitzel', 9.95),
('wah', 'wa1', 'Bitterballetjes met mosterd', 4.25),
('wdk', 'wd1', 'Koffie', 2.55),
('wdk', 'wd2', 'Thee', 2.45),
('wdk', 'wd3', 'Chocolademelk', 2.95),
('wdk', 'wd4', 'Espresso', 2.45),
('wdk', 'wd5', 'Cappucino', 2.75),
('wdk', 'wd6', 'Koffie verkeerd', 2.95),
('wdk', 'wd7', 'Latte Macchiato', 3.95),
('wik', 'wi1', 'Per glas', 3.95),
('wik', 'wi2', 'Per fles', 17.95),
('wik', 'wi3', 'Seizoenswijn', 3.95),
('wik', 'wi4', 'Rode port', 3.60),
('wav', 'wv1', 'Tomatensoep', 4.95),
('wav', 'wv2', 'Groentesoep', 3.95),
('wav', 'wv3', 'Aspergesoep', 4.95),
('wav', 'wv4', 'Uiensoep', 3.95),
('wav', 'wv5', 'PindaSoep', 3.95),
('wav', 'wv6', 'PastaSoep', 3.95),
('wav', 'wv7', 'AuspergesSoep', 4.95);

-- --------------------------------------------------------

--
-- Table structure for table `reservering`
--

CREATE TABLE `reservering` (
  `reservering_id` int(11) NOT NULL,
  `tafel` int(11) NOT NULL,
  `datum` date NOT NULL,
  `tijd` time NOT NULL,
  `klant_id` int(11) NOT NULL,
  `aantal` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `datum_toegevoegd` timestamp NOT NULL DEFAULT current_timestamp(),
  `aantal_k` int(11) NOT NULL DEFAULT 0,
  `allergieen` text DEFAULT NULL,
  `opmerkingen` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reservering`
--

INSERT INTO `reservering` (`reservering_id`, `tafel`, `datum`, `tijd`, `klant_id`, `aantal`, `status`, `datum_toegevoegd`, `aantal_k`, `allergieen`, `opmerkingen`) VALUES
(1, 1, '2017-12-21', '17:15:00', 1, 5, 1, '2017-01-25 00:05:17', 0, NULL, NULL),
(2, 6, '2017-12-21', '17:00:00', 3, 4, 1, '2017-01-25 00:05:17', 0, NULL, NULL),
(3, 6, '2017-12-21', '17:15:00', 4, 8, 1, '2017-01-25 00:05:17', 0, NULL, NULL),
(4, 2, '2017-12-21', '21:30:00', 5, 2, 1, '2017-01-25 00:05:17', 0, NULL, NULL),
(5, 7, '2017-12-21', '19:00:00', 2, 6, 1, '2017-01-25 00:15:56', 0, NULL, NULL),
(6, 2, '2017-12-15', '19:00:00', 6, 4, 1, '2017-01-25 02:47:58', 0, NULL, NULL),
(7, 4, '2017-12-15', '21:30:00', 7, 8, 1, '2017-01-25 04:59:51', 0, NULL, NULL),
(10, 7, '2017-12-15', '21:00:00', 9, 5, 1, '2017-01-25 05:40:32', 0, NULL, NULL),
(12, 4, '2017-12-15', '22:00:00', 5, 2, 1, '2017-01-26 05:12:02', 0, NULL, NULL),
(14, 6, '2017-12-15', '16:00:00', 9, 55, 1, '2017-01-26 17:11:34', 0, NULL, NULL),
(15, 2, '2017-12-15', '20:18:00', 1, 5, 1, '2017-09-25 20:00:04', 0, NULL, NULL),
(16, 4, '2017-12-15', '20:00:00', 2, 4, 1, '2017-10-23 19:08:25', 0, NULL, NULL),
(19, 8, '2017-12-15', '20:18:00', 1, 8, 1, '2017-11-17 00:23:38', 0, NULL, NULL),
(20, 8, '2017-12-15', '17:00:00', 1, 8, 1, '2017-11-17 00:24:05', 0, NULL, NULL),
(24, 2, '2017-12-15', '17:30:00', 1, 5, 1, '2017-11-17 00:28:53', 0, NULL, NULL),
(25, 4, '2017-12-15', '19:00:00', 1, 1, 1, '2017-11-17 00:29:03', 0, NULL, NULL),
(26, 2, '2017-12-25', '17:00:00', 1, 3, 1, '2017-11-17 00:29:33', 0, NULL, NULL),
(29, 6, '2017-12-25', '19:00:00', 8, 1, 1, '2017-12-13 18:28:52', 0, NULL, NULL),
(32, 4, '2017-12-25', '13:30:00', 3, 4, 1, '2017-12-15 23:36:36', 0, NULL, NULL),
(33, 7, '2017-12-25', '17:00:00', 5, 2, 1, '2017-12-16 06:28:23', 0, NULL, NULL),
(37, 6, '2017-12-25', '15:00:00', 1, 6, 1, '2017-12-16 08:00:22', 0, NULL, NULL),
(38, 1, '2024-05-29', '00:00:19', 1, 2, 1, '2024-05-29 07:56:40', 0, 'geen', '');

-- --------------------------------------------------------

--
-- Table structure for table `subgerecht`
--

CREATE TABLE `subgerecht` (
  `gerechtcode` varchar(3) NOT NULL,
  `subgerechtcode` varchar(4) NOT NULL,
  `subgerechtnaam` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subgerecht`
--

INSERT INTO `subgerecht` (`gerechtcode`, `subgerechtcode`, `subgerechtnaam`) VALUES
('nag', 'ijn', 'Ijs'),
('drk', 'kdk', 'Koude dranken'),
('hap', 'koh', 'Koude hapjes'),
('vog', 'kov', 'Koude voorgerechten'),
('nag', 'mon', 'Mousse'),
('hog', 'veh', 'Vegetarische gerechten'),
('hog', 'vih', 'Visgerechten'),
('hog', 'vlh', 'Vleesgerechten'),
('hap', 'wah', 'Warme hapjes'),
('vog', 'wav', 'Warme voorgerechten'),
('drk', 'wdk', 'Warme dranken'),
('drk', 'wik', 'Wijnen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestelling`
--
ALTER TABLE `bestelling`
  ADD PRIMARY KEY (`bestelling_id`,`tafel`,`datum`,`tijd`) USING BTREE,
  ADD KEY `menuitemcode` (`menuitemcode`);

--
-- Indexes for table `gerecht`
--
ALTER TABLE `gerecht`
  ADD PRIMARY KEY (`gerechtcode`);

--
-- Indexes for table `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`klant_id`);

--
-- Indexes for table `menuitem`
--
ALTER TABLE `menuitem`
  ADD PRIMARY KEY (`menuitemcode`),
  ADD KEY `subgerechtcode` (`subgerechtcode`);

--
-- Indexes for table `reservering`
--
ALTER TABLE `reservering`
  ADD PRIMARY KEY (`reservering_id`,`klant_id`,`tafel`,`datum`,`tijd`) USING BTREE,
  ADD KEY `klant_id` (`klant_id`);

--
-- Indexes for table `subgerecht`
--
ALTER TABLE `subgerecht`
  ADD PRIMARY KEY (`subgerechtcode`),
  ADD KEY `gerechtcode` (`gerechtcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bestelling`
--
ALTER TABLE `bestelling`
  MODIFY `bestelling_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `klant`
--
ALTER TABLE `klant`
  MODIFY `klant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reservering`
--
ALTER TABLE `reservering`
  MODIFY `reservering_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menuitem`
--
ALTER TABLE `menuitem`
  ADD CONSTRAINT `menuitem_ibfk_1` FOREIGN KEY (`subgerechtcode`) REFERENCES `subgerecht` (`subgerechtcode`);

--
-- Constraints for table `reservering`
--
ALTER TABLE `reservering`
  ADD CONSTRAINT `reservering_ibfk_1` FOREIGN KEY (`klant_id`) REFERENCES `klant` (`klant_id`);

--
-- Constraints for table `subgerecht`
--
ALTER TABLE `subgerecht`
  ADD CONSTRAINT `subgerecht_ibfk_1` FOREIGN KEY (`gerechtcode`) REFERENCES `gerecht` (`gerechtcode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
