-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Wrz 2018, 19:18
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `reagujposty`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posty`
--

CREATE TABLE `posty` (
  `ID` int(11) NOT NULL,
  `Title` tinytext COLLATE utf8_polish_ci NOT NULL,
  `Content` text COLLATE utf8_polish_ci NOT NULL,
  `Date` datetime NOT NULL,
  `Autor` tinytext COLLATE utf8_polish_ci NOT NULL,
  `imgFileName` tinytext COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `posty`
--

INSERT INTO `posty` (`ID`, `Title`, `Content`, `Date`, `Autor`, `imgFileName`) VALUES
(1, 'Prelekcja w zadupiu małym', 'Tak było :p', '2018-04-15 15:34:36', 'Ja', 'test.jpg'),
(2, 'drugi post xD', 'Znowu tak było lol', '2018-04-15 15:34:36', 'Też ja', 'test2.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `posty`
--
ALTER TABLE `posty`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `posty`
--
ALTER TABLE `posty`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
