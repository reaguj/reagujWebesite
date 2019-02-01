-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Paź 2018, 18:19
-- Wersja serwera: 10.1.35-MariaDB
-- Wersja PHP: 7.2.9

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
-- Struktura tabeli dla tabeli `howtohelp`
--

CREATE TABLE `howtohelp` (
  `id` int(11) NOT NULL,
  `title` tinytext COLLATE utf8_polish_ci NOT NULL,
  `shortDesc` text COLLATE utf8_polish_ci NOT NULL,
  `longDesc` text COLLATE utf8_polish_ci NOT NULL,
  `img` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` tinytext COLLATE utf8_polish_ci NOT NULL,
  `password` tinytext COLLATE utf8_polish_ci NOT NULL,
  `firstName` tinytext COLLATE utf8_polish_ci NOT NULL,
  `surname` tinytext COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `howtohelp`
--
ALTER TABLE `howtohelp`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `posty`
--
ALTER TABLE `posty`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `howtohelp`
--
ALTER TABLE `howtohelp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `posty`
--
ALTER TABLE `posty`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
