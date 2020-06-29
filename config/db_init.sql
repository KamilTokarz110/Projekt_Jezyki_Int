-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 29 Cze 2020, 21:41
-- Wersja serwera: 5.5.62-0+deb8u1
-- Wersja PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `kamil_cv`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ABOUT`
--

CREATE TABLE IF NOT EXISTS `ABOUT` (
`ID` int(11) NOT NULL,
  `CODE` varchar(100) DEFAULT NULL,
  `VALUE` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ITEMS`
--

CREATE TABLE IF NOT EXISTS `ITEMS` (
`ID` int(11) NOT NULL,
  `TITLE` varchar(300) DEFAULT NULL,
  `YEARS` varchar(40) DEFAULT NULL,
  `TEXT` text,
  `TYPE` enum('HOBBY','WORK','JOB') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `USERS`
--

CREATE TABLE IF NOT EXISTS `USERS` (
`ID` int(11) NOT NULL,
  `LOGIN` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(200) DEFAULT NULL,
  `LAST_LOGIN` datetime DEFAULT NULL,
  `STATUS` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `USERS`
--

INSERT INTO `USERS` (`ID`, `LOGIN`, `PASSWORD`, `LAST_LOGIN`, `STATUS`) VALUES
(1, '1', '1', NULL, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `ABOUT`
--
ALTER TABLE `ABOUT`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `UNIQUE_ABOUT` (`CODE`);

--
-- Indexes for table `ITEMS`
--
ALTER TABLE `ITEMS`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ABOUT`
--
ALTER TABLE `ABOUT`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `ITEMS`
--
ALTER TABLE `ITEMS`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `USERS`
--
ALTER TABLE `USERS`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
