-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 29. 09 2023 kl. 11:56:03
-- Serverversion: 8.0.31
-- PHP-version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `produkter`
--

DROP TABLE IF EXISTS `produkter`;
CREATE TABLE IF NOT EXISTS `produkter` (
  `prodId` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `prodTitle` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_danish_ci NOT NULL,
  `prodDescription` text COLLATE utf8mb3_danish_ci,
  `prodPrice` decimal(9,2) NOT NULL,
  `prodDate` date NOT NULL,
  `prodAuthor` varchar(100) COLLATE utf8mb3_danish_ci NOT NULL,
  `prodPages` int UNSIGNED NOT NULL,
  `prodLanguage` varchar(50) COLLATE utf8mb3_danish_ci NOT NULL,
  `prodPublisher` varchar(50) COLLATE utf8mb3_danish_ci NOT NULL,
  `prodISBN` int UNSIGNED NOT NULL,
  `prodGenre` varchar(50) COLLATE utf8mb3_danish_ci NOT NULL,
  PRIMARY KEY (`prodId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_danish_ci;

--
-- Data dump for tabellen `produkter`
--

INSERT INTO `produkter` (`prodId`, `prodTitle`, `prodDescription`, `prodPrice`, `prodDate`, `prodAuthor`, `prodPages`, `prodLanguage`, `prodPublisher`, `prodISBN`, `prodGenre`) VALUES
(2, 'Harry Potter og De Vises Sten', '<p>Da Harry er 11 &aring;r, f&aring;r han at vide, at hans far var en ber&oslash;mt og respekteret troldmand, og hans mor en overordentlig dygtig heks. Harry er ogs&aring; selv troldmand og skal starte p&aring; Hogwarts skole for heksekunster og troldmandsskab. Han skal bl.a. medbringe tryllestav, troldmandshat og enten en kat, en ugle eller en tudse - og s&aring; starter et eventyrligt liv for Harry, der skal l&aelig;re et hav af magiske tricks og desuden m&aring; tage kampen op mod den onde troldmand, der dr&aelig;bte hans for&aelig;ldre.</p>', '249.90', '2015-10-09', 'J.K. Rowling', 360, 'Dansk', 'Gyldendal', 4294967295, 'Fantasy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
