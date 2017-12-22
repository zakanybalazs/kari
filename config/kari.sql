-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2017. Nov 29. 09:35
-- Kiszolgáló verziója: 10.1.21-MariaDB
-- PHP verzió: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `kari`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `nevek`
--

CREATE TABLE `nevek` (
  `nevek_id` int(11) NOT NULL,
  `nev` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `kirendeltseg` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `nevek`
--

INSERT INTO `nevek` (`nevek_id`, `nev`, `kirendeltseg`) VALUES
(1, 'Tassi Viktor JÃ¡nos', 'Budapest\r'),
(2, 'Asztalos Eszter', 'Zalaegerszeg\r'),
(3, 'Bajtai KornÃ©l', 'Szabadka, Szerbia\r'),
(4, 'ZsÃ³k GyÃ¶rgy', 'SzekszÃ¡rd\r'),
(5, 'Bakk Eszter', 'PÃ©cs\r'),
(6, 'Balaton Krisztina', 'KaposvÃ¡r\r'),
(7, 'Viapan Demo User', 'Budapest\r'),
(8, 'Bartis IstvÃ¡n', 'KaposvÃ¡r\r'),
(9, 'Jekisa Roland', 'KaposvÃ¡r\r'),
(10, 'ZÃ¡kÃ¡ny BalÃ¡zs', 'PÃ©cs\r'),
(11, 'VÃ¶rÃ¶s Nikoletta', 'KaposvÃ¡r\r'),
(12, 'Ãgh ZsÃ³fia', 'PÃ©cs\r'),
(13, 'BartÃ³ GyÃ¶ngyi', 'KaposvÃ¡r\r'),
(14, 'Bene Bettina', 'KaposvÃ¡r\r'),
(15, 'PintÃ©r JÃ¡nos', 'KaposvÃ¡r\r'),
(16, 'VirÃ¡g Petra', 'Marcali\r'),
(17, 'Berger TamÃ¡s', 'SzekszÃ¡rd\r'),
(18, 'Vincze DÃ³ra', 'Zalaegerszeg\r'),
(19, 'Kacs PÃ©ter', 'KaposvÃ¡r\r'),
(20, 'BÅ‘cs Fanni', 'SiÃ³fok\r'),
(21, 'Boros NÃ³ra', 'PÃ©cs\r'),
(22, 'Cseh Gabriella', 'KecskemÃ©t\r'),
(23, 'Vida PÃ©ter', 'KaposvÃ¡r\r'),
(24, 'Cserhalmi Elinor', 'Budapest\r'),
(25, 'Csire KrisztiÃ¡n', 'KaposvÃ¡r\r'),
(26, 'Csizmadia GÃ¡bor', 'KaposvÃ¡r\r'),
(27, 'Bozsoki BeÃ¡ta', 'KaposvÃ¡r\r'),
(28, 'Vida Judit', 'KaposvÃ¡r\r'),
(29, 'VÃ©ghelyi Erik', 'SzekszÃ¡rd\r'),
(30, 'Varga Vivien', 'KaposvÃ¡r\r'),
(31, 'Varga IstvÃ¡n', 'KecskemÃ©t\r'),
(32, 'Valcsics Alexandra', 'KaposvÃ¡r\r'),
(33, 'Vakulya Mariann', 'KecskemÃ©t\r'),
(34, 'TÃ³th Tibor', 'KaposvÃ¡r\r'),
(35, 'Vida Bence', 'PÃ©cs\r'),
(36, 'TÃ³th DiÃ¡na Evelin', 'Budapest\r'),
(37, 'Torondy Gitta', 'SiÃ³fok\r'),
(38, 'Tompos Fruzsina', 'DunaÃºjvÃ¡ros\r'),
(39, 'TÃ©nainÃ© SzaszÃ¡k Veronika', 'PÃ©cs\r'),
(40, 'TakÃ¡cs RÃ³bert', 'KaposvÃ¡r\r'),
(41, 'TakÃ¡cs Kitti', 'Budapest\r'),
(42, 'TakÃ¡cs Jada', 'Keszthely\r'),
(43, 'TakÃ¡cs Eszter', 'Marcali\r'),
(44, 'Szoboszlai Roland', 'Budapest\r'),
(45, 'Szoboszlai DÃ¡niel', 'KaposvÃ¡r\r'),
(46, 'SzÃ©nÃ¡si Anita', 'SiÃ³fok\r'),
(47, 'SzaniszlÃ³ Anna', 'Budapest\r'),
(48, 'Szaksz Mirella', 'SzekszÃ¡rd\r'),
(49, 'SzabÃ³ Odett', 'Baja\r'),
(50, 'StromÃ¡jer GÃ¡bor', 'KaposvÃ¡r\r'),
(51, 'Stettner MercÃ©desz', 'PÃ©cs\r'),
(52, 'SzakÃ¡llas Yvett', 'SzekszÃ¡rd\r'),
(53, 'Stankovics MÃ¡tyÃ¡s', 'KaposvÃ¡r\r'),
(54, 'Solti PÃ©ter', 'PÃ©cs\r'),
(55, 'SebÅ‘k Bernadett', 'KaposvÃ¡r\r'),
(56, 'Scheidl DiÃ¡na', 'DunaÃºjvÃ¡ros\r'),
(57, 'SchÃ¡dl Adrienn', 'KaposvÃ¡r\r'),
(58, 'SÃ³s Krisztina', 'KaposvÃ¡r\r'),
(59, 'Salfay Rita', 'Budapest\r'),
(60, 'RigÃ³ MÃ¡rk', 'Keszthely\r'),
(61, 'RadÃ³csai Ã‰va', 'KaposvÃ¡r\r'),
(62, 'RadÃ³csai DiÃ¡na', 'KaposvÃ¡r\r'),
(63, 'RÃ¡cz RÃ³bert', 'Budapest\r'),
(64, 'Putics RichÃ¡rd', 'NagyatÃ¡d\r'),
(65, 'PintÃ©r LÃ¡szlÃ³', 'KaposvÃ¡r\r'),
(66, 'PintÃ©r ErnÅ‘', 'KaposvÃ¡r\r'),
(67, 'PintÃ©r Erika', 'PÃ©cs\r'),
(68, 'PintÃ©r DÃ¡niel', 'SiÃ³fok\r'),
(69, 'PongrÃ¡cz TamÃ¡s', 'Keszthely\r'),
(70, 'PÃ©terfai Nikolett', 'KaposvÃ¡r\r'),
(71, 'Peller SÃ¡ndor', 'KecskemÃ©t\r'),
(72, 'NÃ©meth MÃ¡rton', 'Budapest\r'),
(73, 'PÃ¡lfi Anna', 'KecskemÃ©t\r'),
(74, 'Papp Szabolcs', 'KaposvÃ¡r\r'),
(75, 'Nemes BorbÃ¡la', 'PÃ©cs\r'),
(76, 'Nagy TamÃ¡s', 'KaposvÃ¡r\r'),
(77, 'MÃ³zer Anett', 'SzekszÃ¡rd\r'),
(78, 'Nagy Petra', 'KaposvÃ¡r\r'),
(79, 'MolnÃ¡r RichÃ¡rd', 'Budapest\r'),
(80, 'Nagy PÃ©ter', 'Budapest\r'),
(81, 'Morvai Nikolett', 'Keszthely\r'),
(82, 'OrbÃ¡n ViktÃ³ria', 'KaposvÃ¡r\r'),
(83, 'MolnÃ¡r Marcell', 'Zalaegerszeg\r'),
(84, 'Miseta-VillÃ¡nyi Netti', 'KaposvÃ¡r\r'),
(85, 'Miseta GÃ¡bor', 'KaposvÃ¡r\r'),
(86, 'MihÃ¡lyfalvi-Szukics MÃ³nika', 'Nagykanizsa\r'),
(87, 'MiklÃ³s Szandra', 'KaposvÃ¡r\r'),
(88, 'Mihalecz Orsolya', 'PÃ©cs\r'),
(89, 'MihÃ¡ldinecz TamÃ¡s', 'KaposvÃ¡r\r'),
(90, 'Mettner MÃ¡rta', 'KaposvÃ¡r\r'),
(91, 'Megyesi IstvÃ¡n', 'DunaÃºjvÃ¡ros\r'),
(92, 'MÃ¡thÃ© Barna', 'KaposvÃ¡r\r'),
(93, 'Masinka Kitti', 'DunaÃºjvÃ¡ros\r'),
(94, 'MiklÃ³s Ferenc', 'Zalaegerszeg\r'),
(95, 'MÃ¡nyoki JÃ³zsef', 'SiÃ³fok\r'),
(96, 'Magony AndrÃ¡s', 'KecskemÃ©t\r'),
(97, 'Lehoczki Dalma', 'PÃ©cs\r'),
(98, 'LÃ©ber NÃ³ra', 'SiÃ³fok\r'),
(99, 'LÃ¡szlÃ³ Linda', 'DunaÃºjvÃ¡ros\r'),
(100, 'LadÃ¡nyi Anna', 'KaposvÃ¡r\r'),
(101, 'Kuti Bettina', 'KecskemÃ©t\r'),
(102, 'Kustos Gabriella', 'KaposvÃ¡r\r'),
(103, 'Kurucz TamÃ¡s', 'KaposvÃ¡r\r'),
(104, 'KÃ¶vesi PÃ©ter', 'PÃ©cs\r'),
(105, 'KÅ‘vÃ¡ri Helga', 'PÃ©cs\r'),
(106, 'Kuthy KovÃ¡cs Katalin', 'KecskemÃ©t\r'),
(107, 'KovÃ¡cs Erika', 'KecskemÃ©t\r'),
(108, 'KÃ³sa Ãron', 'KaposvÃ¡r\r'),
(109, 'Koronczai Bence', 'Budapest\r'),
(110, 'KÃ¶rmendi Margit', 'KaposvÃ¡r\r'),
(111, 'KÃ³nya Alexa', 'Nagykanizsa\r'),
(112, 'KÅ‘hÃ¡zi-Kis Szilvia', 'KecskemÃ©t\r'),
(113, 'Kiss ViktÃ³ria', 'KaposvÃ¡r\r'),
(114, 'KishÃ¡zi Kitty', 'Nagykanizsa\r'),
(115, 'Kis LÃ¡szlÃ³', 'SiÃ³fok\r'),
(116, 'Kerkai Szilvia', 'SzigetvÃ¡r\r'),
(117, 'BoÃ¡r-Kereszti ZsÃ³fia', 'Budapest\r'),
(118, 'Kelemen Gabriella', 'Budapest\r'),
(119, 'Kelemen Anita', 'KaposvÃ¡r\r'),
(120, 'KecskÃ©s Vivien', 'PÃ©cs\r'),
(121, 'KÃ¡lovics Katalin', 'Nagykanizsa\r'),
(122, 'Kalocsai Tamara', 'KaposvÃ¡r\r'),
(123, 'KÃ¡lmÃ¡n DÃ³ra', 'PÃ©cs\r'),
(124, 'KalamÃ¡r RamÃ³na', 'Zalaegerszeg\r'),
(125, 'JoÃ³ Roland', 'SiÃ³fok\r'),
(126, 'Iveszics Inez', 'PÃ©cs\r'),
(127, 'Husi Bence', 'KaposvÃ¡r\r'),
(128, 'HorvÃ¡th Katalin', 'KaposvÃ¡r\r'),
(129, 'HorvÃ¡th DÃ³ra', 'PÃ©cs\r'),
(130, 'HorvÃ¡th DÃ¡niel', 'Keszthely\r'),
(131, 'HermÃ¡n RenÃ¡ta', 'Zalaegerszeg\r'),
(132, 'Hamarics Zita', 'KaposvÃ¡r\r'),
(133, 'HalÃ¡sz Rebeka', 'Baja\r'),
(134, 'Hajas Hajnalka', 'KaposvÃ¡r\r'),
(135, 'GyÃ³csi-Tobak Ã‰va', 'KaposvÃ¡r\r'),
(136, 'HegedÅ±s BÃ©ni', 'Budapest\r'),
(137, 'GyifkÃ³ Anita', 'KecskemÃ©t\r'),
(138, 'GulyÃ¡s-GÃ¡l Alexandra', 'KaposvÃ¡r\r'),
(139, 'Gubek Katalin', 'KaposvÃ¡r\r'),
(140, 'Gyovai-BodÃ¡k BenjÃ¡min', 'KecskemÃ©t\r'),
(141, 'GmÃ³ser GyÃ¶rgy', 'KecskemÃ©t\r'),
(142, 'GerendÃ¡s Szabolcs', 'Budapest\r'),
(143, 'GÃ¡rdonyvÃ¡ri Johanna', 'KaposvÃ¡r\r'),
(144, 'Gallai GÃ¡bor', 'KaposvÃ¡r\r'),
(145, 'GÃ¡ll AnikÃ³', 'Budapest\r'),
(146, 'FÃ¼lÃ¶p RichÃ¡rd', 'KaposvÃ¡r\r'),
(147, 'FÃ¼lÃ¶p KrisztiÃ¡n', 'KaposvÃ¡r\r'),
(148, 'GÃ¡ncsos JÃ¡nos', 'Ukrajna\r'),
(149, 'PÃ¡sztor - ForgÃ¡cs Zsuzsanna', 'SzekszÃ¡rd\r'),
(150, 'Fodor Zsolt', 'KaposvÃ¡r\r'),
(151, 'Ferencz TamÃ¡s', 'KecskemÃ©t\r'),
(152, 'Ferencz DÃ¡niel', 'SzekszÃ¡rd\r'),
(153, 'Farkas BalÃ¡zs', 'KaposvÃ¡r\r'),
(154, 'Egerszegi ZoltÃ¡n', 'PÃ©cs\r'),
(155, 'Drahos Barbara', 'KecskemÃ©t\r'),
(156, 'DicsÅ‘ DÃ¡vid', 'SzekszÃ¡rd\r'),
(157, 'Daoda Fanni', 'KaposvÃ¡r\r'),
(158, 'DakÃ³-PerÃ¡k Katalin', 'KaposvÃ¡r\r'),
(159, 'DakÃ³ Roland', 'KaposvÃ¡r\r'),
(160, 'Dajka DiÃ¡na', 'SzekszÃ¡rd\r'),
(161, 'CsonkÃ¡nÃ© Nagy ZsÃ³fia', 'KaposvÃ¡r\r'),
(162, 'Somogyi Ferenc', 'SzigetvÃ¡r\r'),
(163, 'Ambrus GyÃ¶rgyi', 'SzekszÃ¡rd\r'),
(164, 'NÃ©meth SÃ¡ra', 'SzekszÃ¡rd\r'),
(165, 'Mlinorics Bonita', 'SiÃ³fok\r'),
(166, 'PÃ¡sztor Nicolett', 'SiÃ³fok\r'),
(167, 'Visnyei ZoltÃ¡n', 'KaposvÃ¡r\r'),
(168, 'KÅ‘vÃ¡ri ZoltÃ¡n', 'PÃ©cs\r'),
(169, 'Teszt Elek Ãron', 'SzigetvÃ¡r\r'),
(170, 'Nemes LÃ¡szlÃ³', 'KecskemÃ©t\r'),
(171, 'Fejes MÃ³nika', 'KecskemÃ©t\r'),
(172, 'ForgÃ³ BoglÃ¡rka', 'KecskemÃ©t\r'),
(173, 'SzabÃ³ Ãgnes', 'SiÃ³fok\r'),
(174, 'Pucsli Cintia', 'SzigetvÃ¡r\r'),
(175, 'TamÃ¡s Nagy', 'KecskemÃ©t\r'),
(176, 'BÃ©rces Bence', 'KaposvÃ¡r\r'),
(177, 'LovÃ¡sz TamÃ¡s', 'SzekszÃ¡rd\r'),
(178, 'RogÃ¡csi Lujza', 'SiÃ³fok\r'),
(179, 'Csokona Liza', 'PÃ©cs\r'),
(180, 'Ezer KrisztiÃ¡n', 'PÃ©cs\r'),
(181, 'PÃ¡sztor Rebeka', 'SiÃ³fok\r'),
(182, 'BedÃ¡k MÃ¡tÃ©', 'DunaÃºjvÃ¡ros\r'),
(184, 'RohÃ¡cs Betti', 'KecskemÃ©t\r'),
(185, 'Mezei GÃ¡bor', 'KecskemÃ©t\r'),
(186, 'Visi BoglÃ¡rka', 'SzekszÃ¡rd\r'),
(187, 'Lovasi Bernadett', 'PÃ©cs\r'),
(188, 'GÃ¡spÃ¡r Mariann', 'Zalaegerszeg\r'),
(189, 'MolnÃ¡r LÃ¡szlÃ³', 'Zalaegerszeg\r'),
(190, 'Grassy DÃ³ra', 'SzekszÃ¡rd\r'),
(191, 'Csoboz Gabriella', 'SiÃ³fok\r'),
(192, 'Magyar LÃ­via', 'Szabadka, Szerbia\r'),
(193, 'Bor Edit', 'Budapest\r'),
(194, 'Fekete-PÃ¡ris Szilvia', 'KaposvÃ¡r\r'),
(195, 'Farkas Emese', 'Zalaegerszeg\r'),
(196, 'Udvardi DÃ³ra', 'PÃ©cs\r'),
(197, 'TÃ¶rÅ‘csik Szilvia', 'KecskemÃ©t\r'),
(198, 'TÃ³th Gabriella', 'PÃ©cs\r'),
(199, 'GÃ¡l Eszter', 'KaposvÃ¡r\r'),
(200, 'OlÃ¡h JÃ³zsef', 'DunaÃºjvÃ¡ros\r'),
(201, 'Gebei SÃ¡ndor', 'KecskemÃ©t\r'),
(202, 'Hrankai Regina', 'KaposvÃ¡r\r'),
(203, 'Lucza Gabriella', 'KaposvÃ¡r\r'),
(204, 'Braun ViktÃ³ria', 'KaposvÃ¡r\r'),
(205, 'OrsÃ³s Brigitta', 'SiÃ³fok\r'),
(206, 'Henczi NÃ³ra', 'Zalaegerszeg\r'),
(207, 'SzomolainÃ© Nagy ValÃ©ria', 'KecskemÃ©t\r'),
(208, 'Bendik Elizabet Hanna', 'KecskemÃ©t\r'),
(209, 'Hanzl Bence', 'Keszthely\r'),
(210, 'Rejzinger Andrea', 'PÃ©cs\r'),
(211, 'Hargitai Evelin', 'PÃ©cs\r'),
(212, 'Mokrai Ãkos', 'Budapest\r'),
(213, 'RÃ¡tkai Katalin', 'SzekszÃ¡rd\r'),
(214, 'Prekopp Judit', 'Budapest\r'),
(215, 'ZÃ¡dor ZalÃ¡n', 'KaposvÃ¡r\r'),
(216, 'GuÃ³th MÃ¡tÃ©', 'KecskemÃ©t\r'),
(217, 'JÃ¡nos Tivadar', 'Budapest\r'),
(218, 'NyÃ¡rÃ¡di SÃ¡ra', 'SiÃ³fok\r'),
(219, 'PÃ©ter Vida', 'KaposvÃ¡r\r'),
(221, 'Varga DÃ¡vid', 'KaposvÃ¡r\r');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `teszt`
--

CREATE TABLE `teszt` (
  `teszt_id` int(11) NOT NULL,
  `nev` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `tipus` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `adatok` text COLLATE utf8mb4_hungarian_ci NOT NULL,
  `time_log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `teszt`
--

INSERT INTO `teszt` (`teszt_id`, `nev`, `tipus`, `adatok`, `time_log`) VALUES
(2, 'ZÃ¡kÃ¡ny BalÃ¡zs', 'Florence', '[\"b\",\"c\",\"d\",\"d\",\"a\",\"d\",\"c\",\"b\",\"c\",\"d\",\"b\",\"a\",\"c\",\"a\",\"d\",\"c\",\"d\",\"d\",\"d\",\"a\",\"d\",\"a\",\"d\",\"c\",\"d\",\"d\",\"c\",\"d\",\"a\",\"a\",\"d\",\"c\",\"d\",\"a\",\"a\",\"d\",\"d\",\"d\",\"c\",\"d\",\"\",{\"a\":\"9\",\"b\":\"3\",\"c\":\"9\",\"d\":\"19\"}]', '2017-11-26 10:33:04'),
(4, 'Gengszter Mia', 'Florence', '[\"b\",\"c\",\"b\",\"a\",\"b\",\"b\",\"a\",\"d\",\"b\",\"a\",\"b\",\"d\",\"a\",\"b\",\"b\",\"b\",\"a\",\"d\",\"c\",\"b\",\"c\",\"b\",\"b\",\"a\",\"a\",\"b\",\"b\",\"a\",\"b\",\"a\",\"c\",\"b\",\"a\",\"b\",\"c\",\"b\",\"d\",\"a\",\"a\",\"a\",\"\",{\"a\":\"13\",\"b\":\"18\",\"c\":\"5\",\"d\":\"4\"}]', '2017-11-26 10:53:18');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vendegek`
--

CREATE TABLE `vendegek` (
  `nev_id` int(11) NOT NULL,
  `nevek` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `kirendeltseg` varchar(200) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `delutani_program` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `vendegek`
--

INSERT INTO `vendegek` (`nev_id`, `nevek`, `kirendeltseg`, `delutani_program`, `status`) VALUES
(2, 'OrbÃ¡n Mia', 'PÃ©cs', 'Cica simogatÃ¡s', 0),
(3, 'TakÃ¡cs RÃ©ka', 'PÃ©cs', 'Kutya sÃ©tÃ¡ltatÃ¡s', 0),
(4, 'TakÃ¡cs Ferenc', 'PÃ©cs', 'Kutya sÃ©tÃ¡ltatÃ¡s', 0),
(5, 'ZÃ¡kÃ¡ny BalÃ¡zs', 'HQ', 'HÃ¶rcsÃ¶g etetÃ©s', 0),
(13, 'Valcsics Alexandra', 'KaposvÃ¡r', 'Cica simogatÃ¡s', 0),
(14, 'TakÃ¡cs Kitti', 'Budapest', 'Cica simogatÃ¡s', 0);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `nevek`
--
ALTER TABLE `nevek`
  ADD PRIMARY KEY (`nevek_id`);

--
-- A tábla indexei `teszt`
--
ALTER TABLE `teszt`
  ADD PRIMARY KEY (`teszt_id`);

--
-- A tábla indexei `vendegek`
--
ALTER TABLE `vendegek`
  ADD PRIMARY KEY (`nev_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `nevek`
--
ALTER TABLE `nevek`
  MODIFY `nevek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;
--
-- AUTO_INCREMENT a táblához `teszt`
--
ALTER TABLE `teszt`
  MODIFY `teszt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT a táblához `vendegek`
--
ALTER TABLE `vendegek`
  MODIFY `nev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
