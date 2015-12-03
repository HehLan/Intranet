-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 10 Décembre 2014 à 11:00
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `hehlanbd`
--

-- --------------------------------------------------------

--
-- Structure de la table `emplacement`
--

CREATE TABLE IF NOT EXISTS `emplacement` (
  `id_emplacement` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(255) NOT NULL,
  `top` float DEFAULT NULL,
  `xy_left` float DEFAULT NULL,
  `width` float DEFAULT NULL,
  `height` float DEFAULT NULL,
  PRIMARY KEY (`id_emplacement`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=129 ;

--
-- Contenu de la table `emplacement`
--

INSERT INTO `emplacement` (`id_emplacement`, `numero`, `top`, `xy_left`, `width`, `height`) VALUES
(1, 'A1', 3, 12, 4.5, 3),
(2, 'A2', 3, 16.5, 4.5, 3),
(3, 'A3', 3, 21, 4.5, 3),
(4, 'A4', 3, 25.5, 4.5, 3),
(5, 'A5', 3, 30, 4.5, 3),
(6, 'A6', 8, 12, 2.5, 7.5),
(7, 'A7', 15.5, 12, 2.5, 7.5),
(8, 'A8', 23, 12, 2.5, 7.5),
(9, 'A9', 33.5, 12, 4.5, 3),
(10, 'A10', 33.5, 16.5, 4.5, 3),
(11, 'A11', 15.5, 21, 4.5, 3),
(12, 'A12', 15.5, 25.5, 4.5, 3),
(13, 'A13', 15.5, 30, 4.5, 3),
(14, 'A14', 18.5, 21, 4.5, 3),
(15, 'A15', 18.5, 25.5, 4.5, 3),
(16, 'A16', 18.5, 30, 4.5, 3),
(17, 'B1', 5, 37, 4.5, 3),
(18, 'B2', 5, 41.5, 4.5, 3),
(19, 'B3', 5, 46, 4.5, 3),
(20, 'B4', 5, 50.5, 4.5, 3),
(21, 'B5', 5, 55, 4.5, 3),
(22, 'B6', 8, 37, 4.5, 3),
(23, 'B7', 8, 41.5, 4.5, 3),
(24, 'B8', 8, 46, 4.5, 3),
(25, 'B9', 8, 50.5, 4.5, 3),
(26, 'B10', 8, 55, 4.5, 3),
(27, 'C1', 5, 64, 4.5, 3),
(28, 'C2', 5, 68.5, 4.5, 3),
(29, 'C3', 5, 73, 4.5, 3),
(30, 'C4', 5, 77.5, 4.5, 3),
(31, 'C5', 5, 82, 4.5, 3),
(32, 'C6', 8, 64, 4.5, 3),
(33, 'C7', 8, 68.5, 4.5, 3),
(34, 'C8', 8, 73, 4.5, 3),
(35, 'C9', 8, 77.5, 4.5, 3),
(36, 'C10', 8, 82, 4.5, 3),
(37, 'D1', 18, 37, 4.5, 3),
(38, 'D2', 18, 41.5, 4.5, 3),
(39, 'D3', 18, 46, 4.5, 3),
(40, 'D4', 18, 50.5, 4.5, 3),
(41, 'D5', 18, 55, 4.5, 3),
(42, 'D6', 21, 37, 4.5, 3),
(43, 'D7', 21, 41.5, 4.5, 3),
(44, 'D8', 21, 46, 4.5, 3),
(45, 'D9', 21, 50.5, 4.5, 3),
(46, 'D10', 21, 55, 4.5, 3),
(47, 'E1', 18, 64, 4.5, 3),
(48, 'E2', 18, 68.5, 4.5, 3),
(49, 'E3', 18, 73, 4.5, 3),
(50, 'E4', 18, 77.5, 4.5, 3),
(51, 'E5', 18, 82, 4.5, 3),
(52, 'E6', 21, 64, 4.5, 3),
(53, 'E7', 21, 68.5, 4.5, 3),
(54, 'E8', 21, 73, 4.5, 3),
(55, 'E9', 21, 77.5, 4.5, 3),
(56, 'E10', 21, 82, 4.5, 3),
(57, 'F1', 32, 37, 4.5, 3),
(58, 'F2', 32, 41.5, 4.5, 3),
(59, 'F3', 32, 46, 4.5, 3),
(60, 'F4', 32, 50.5, 4.5, 3),
(61, 'F5', 32, 55, 4.5, 3),
(62, 'F6', 35, 37, 4.5, 3),
(63, 'F7', 35, 41.5, 4.5, 3),
(64, 'F8', 35, 46, 4.5, 3),
(65, 'F9', 35, 50.5, 4.5, 3),
(66, 'F10', 35, 55, 4.5, 3),
(67, 'G1', 32, 64, 4.5, 3),
(68, 'G2', 32, 68.5, 4.5, 3),
(69, 'G3', 32, 73, 4.5, 3),
(70, 'G4', 32, 77.5, 4.5, 3),
(71, 'G5', 32, 82, 4.5, 3),
(72, 'G6', 35, 64, 4.5, 3),
(73, 'G7', 35, 68.5, 4.5, 3),
(74, 'G8', 35, 73, 4.5, 3),
(75, 'G9', 35, 77.5, 4.5, 3),
(76, 'G10', 35, 82, 4.5, 3),
(77, 'H1', 50, 28, 4.5, 3),
(78, 'H2', 50, 32.5, 4.5, 3),
(79, 'H3', 50, 37, 4.5, 3),
(80, 'H4', 50, 41.5, 4.5, 3),
(81, 'H5', 50, 46, 4.5, 3),
(82, 'H6', 50, 50.5, 4.5, 3),
(83, 'H7', 50, 55, 4.5, 3),
(84, 'H8', 50, 59.5, 4.5, 3),
(85, 'H9', 50, 64, 4.5, 3),
(86, 'H10', 50, 68.5, 4.5, 3),
(87, 'I1', 59, 28, 4.5, 3),
(88, 'I2', 59, 32.5, 4.5, 3),
(89, 'I3', 59, 37, 4.5, 3),
(90, 'I4', 59, 41.5, 4.5, 3),
(91, 'I5', 59, 46, 4.5, 3),
(92, 'I6', 59, 50.5, 4.5, 3),
(93, 'I7', 59, 55, 4.5, 3),
(94, 'I8', 59, 59.5, 4.5, 3),
(95, 'I9', 59, 64, 4.5, 3),
(96, 'I10', 59, 68.5, 4.5, 3),
(97, 'I11', 62, 28, 4.5, 3),
(98, 'I12', 62, 32.5, 4.5, 3),
(99, 'I13', 62, 37, 4.5, 3),
(100, 'I14', 62, 41.5, 4.5, 3),
(101, 'I15', 62, 46, 4.5, 3),
(102, 'I16', 62, 50.5, 4.5, 3),
(103, 'I17', 62, 55, 4.5, 3),
(104, 'I18', 62, 59.5, 4.5, 3),
(105, 'I19', 62, 64, 4.5, 3),
(106, 'I20', 62, 68.5, 4.5, 3),
(107, 'J1', 85, 28, 4.5, 3),
(108, 'J2', 85, 32.5, 4.5, 3),
(109, 'J3', 85, 37, 4.5, 3),
(110, 'J4', 85, 41.5, 4.5, 3),
(111, 'J5', 85, 46, 4.5, 3),
(112, 'J6', 85, 50.5, 4.5, 3),
(113, 'J7', 85, 55, 4.5, 3),
(114, 'J8', 85, 59.5, 4.5, 3),
(115, 'J9', 85, 64, 4.5, 3),
(116, 'J10', 85, 68.5, 4.5, 3),
(117, 'J11', 88, 28, 4.5, 3),
(118, 'J12', 88, 32.5, 4.5, 3),
(119, 'J13', 88, 37, 4.5, 3),
(120, 'J14', 88, 41.5, 4.5, 3),
(121, 'J15', 88, 46, 4.5, 3),
(122, 'J16', 88, 50.5, 4.5, 3),
(123, 'J17', 88, 55, 4.5, 3),
(124, 'J18', 88, 59.5, 4.5, 3),
(125, 'J19', 88, 64, 4.5, 3),
(126, 'J20', 88, 68.5, 4.5, 3),
(127, '', NULL, NULL, NULL, NULL),
(128, 'A17', 15.5, 18.5, 2.5, 6);

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

CREATE TABLE IF NOT EXISTS `equipes` (
  `id_equipes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mot_de_passe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_equipes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=72 ;

--
-- Contenu de la table `equipes`
--

INSERT INTO `equipes` (`id_equipes`, `nom`, `mot_de_passe`, `tag`) VALUES
(1, 'HeHLan', '71255f05f1e1c850e9ce9444c4df6ef19de94bf3', ''),
(2, 'MABITE', '9e526f31fe73de15917042edb4ffe0e784964911', ''),
(3, 'Belgian Inoffensive Team', 'b7abd917d9ce7f673118c0b91c1f89fd1826ae0e', 'BIT'),
(6, 'Inception eSport', 'bf5ee40f79d5ef93846203f8765fe1e93d757427', 'INC'),
(7, 'Les Tites Fioles', 'efeebd0dca1721a7e9957e49f1bf7c2397f411ec', 'LTF'),
(8, 'Gitan', '9ef65378b90a121f4afd568ccf6ba8211b70ec73', 'GTN'),
(9, 'Olaf Alope', 'e14fb54d109c802ace582107d5df92380c2fac2c', 'Falope'),
(10, 'The Bleeding Rocks', '8875887946c1337a8f53f6be42487a6e805f2570', 'TBgRs'),
(11, 'WeAreVincent', '8b0cf21fdf66586ef141e86c3648a08cb3ae53da', 'WAV'),
(12, 'The LuckyTeam', '7c222fb2927d828af22f592134e8932480637c0d', 'TLuckT'),
(13, 'God Sake', 'a6fe3e3abd90f92175b02011c4a09d8cb1f46ba7', 'GdS'),
(14, 'Les Bifflettes Maison', 'a9abbc7c4c74eb9134aa8113dcc7c6b08d4d404d', 'BIFFLEURS'),
(15, 'Nothing', 'e663ee0bf58f1444cf97a4d74e2ab3fc946acf65', 'NTHG'),
(16, 'NoneEsCape', 'b20b718dfc99003ce86bcfcc211a060a44da9722', 'Noec'),
(17, 'Midget Pineapple Wolverine', '7297448cffbc5d870bb4a89ff7f6aaa527b0d57a', 'MPW'),
(18, 'Les Michel Forever', 'dd69e4459710962f6f4e933c5ef0937e726f9ba1', 'LMF'),
(19, 'Mid Or Feed', '0133c6dd753b8a206c579b9b94614458f125a3aa', 'MOF'),
(20, 'Doctors X', 'c20a8cc2829ee913cc7d2b3db29e4d9891d13ae4', 'Drs x'),
(21, 'JokS', '45a8f00100be17363741702a0215ce0bfb6e5a5d', 'JokS'),
(22, 'Caedem Dominatur', '652598819b4094342c21e49600b56f4650c5e1b7', 'CD'),
(23, 'Belgian Rape Squad', 'b4f93b190692636f9bda2576164f4ade770b272b', 'BRS'),
(24, 'Don''t feed the ginger', 'f07693bf75c21979a43bcde04fefa398fcf0ec0e', 'DFG'),
(25, 'FPMs', 'b7f69ccf5ad23d060863f857eacd2e0619f104d2', 'FPMs'),
(26, 'Dofusian GAMING', '45a8f00100be17363741702a0215ce0bfb6e5a5d', 'ToTard'),
(27, 'The Legion of Nether', '8db45068f4f04c0c40f15fd92c07b1ba2c3b3c34', 'TLegoN'),
(28, 'Tish-cake KaWaii', 'b590407101042440c72b6051dd198c19aeac9d9a', 'TcK'),
(29, 'Gods of Chocolate', '45b781e6ab741ab8373393166098d430a752ddd5', 'GoC'),
(30, 'Murderous Insanity in ET', '0d16eaeea49c14b90703352e0a5c502695ff133f', 'MIIET'),
(31, 'Petits Lézards Tous Nus', '81b519e802e852e62068dd41c9f580453d1bcc0c', 'oPLTNo'),
(32, 'iNPhase', '7644b350aa83c47a1c362949429d7fc1567de0e3', 'iNPh4'),
(33, 'First', 'fc4c86a4a142618066924fd2523e7756d77e2764', '1ST'),
(34, 'Petits Kebabs Volant', 'f6855087b8532477e6328cca23e1382d0435bec8', 'PKV'),
(35, 'Lamastruche Gaming', '876f016e1b27e842647623a2d851df6d3c54d2a0', 'LSG'),
(36, 'La Dream Team', '959b3f6b9b03e7ef1a871bcd289ec968a3ceccfe', 'DTC'),
(37, 'La Nouvelle Génération', '68cfeafceec089fe057bb5e43c7f8baaa2046904', 'LnG Y'),
(38, 'Bloodytearz', 'c7344ca456241be1fa0d720af346fa28bc2bfcb2', 'BDTZ'),
(39, 'Skillshout', 'a24a3b9709ec46f7feb935ca45e1efc5690ae8c7', 'Sks'),
(40, 'Annie''s Firstblood', 'f8d1dca891a29a1da1fb6f77f77da81f4d168ab5', 'AFB'),
(41, 'Reflex Belgium', 'ab895517e48201893f8d17692a5a48b83e545f78', 'RFBE'),
(42, 'Phoenix Team', '12cda3ea3737559dbd7198a4e10dfc2e8b8c175e', 'PT'),
(43, 'ISWEARSHEWAS18', '433b02a5ed76eaed33ae0a65693bc41f3bcb0e69', '+18'),
(44, 'On suce des Schtroumphs', '310613a9c349470b766ada21de64ae5b1b254e4c', 'OSDS'),
(45, 'Je mange des shtroumpfs', '515be7c24076ab0b404081b49ded173792893eae', 'WOOT'),
(46, 'Stupid-Move', '49b804f6ce0e71cd713c8b303dee749d12560447', 'IDCare'),
(47, 'Stupid Move', '49b804f6ce0e71cd713c8b303dee749d12560447', 'SMOve'),
(48, 'Crêpière Tefal', '0265b0abdc8bdb8056f962401d8979d5718cf1f0', 'Tefal'),
(49, 'NIP TA MERE', '7c222fb2927d828af22f592134e8932480637c0d', 'NIPTM'),
(50, 'Go Nerf Karma', '5785776f0c5e4a761aba21577f575362380fb3ea', 'GNK'),
(51, 'C''était une mauvaise idée', '1ffcada64ae82d857561e955867c8e9e2a89048d', 'CeMUI'),
(52, 'Ma grosse bite en plâtre', '3eff9fcc2fb2153f70ffbbd8951fc7e1dbeaf15b', '[MGBEP]'),
(53, 'GoldTeam', '65095b2e79b2523f9a61152c6f8db4a6d27f00d4', 'GDT'),
(56, 'BIT1', 'fistfucking', 'BIT1'),
(57, 'BIT2', 'fistfucking', 'BIT2'),
(58, 'Lambox #2917', '', ''),
(59, 'Unexard #2460', '', ''),
(60, 'Nedria #2996', '', ''),
(61, 'Echofox #2924', '', ''),
(62, 'Touza #2628', '', ''),
(63, 'Droledami #2473', '', ''),
(64, 'Rayalok #2449', '', ''),
(65, 'Delikan57 #2256', '', ''),
(66, 'Ebaral #2123', '', ''),
(67, 'Alfatta #2772', '', ''),
(68, 'Guerrier666 #2345', '', ''),
(69, 'Witch Doctor #2256', '', ''),
(70, 'Pinguiz #2232', '', ''),
(71, 'Alcyol #2207', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `equipes_groupes`
--

CREATE TABLE IF NOT EXISTS `equipes_groupes` (
  `id_equipe` int(10) unsigned NOT NULL,
  `id_groupe` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_equipe`,`id_groupe`),
  KEY `id_groupe` (`id_groupe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `equipes_groupes`
--

INSERT INTO `equipes_groupes` (`id_equipe`, `id_groupe`) VALUES
(23, 56),
(26, 56),
(40, 56),
(48, 56),
(56, 56),
(57, 56),
(13, 57),
(24, 57),
(25, 57),
(43, 57),
(50, 57),
(53, 57),
(7, 58),
(14, 58),
(18, 58),
(19, 58),
(30, 58),
(52, 58),
(10, 59),
(31, 59),
(39, 59),
(44, 59),
(47, 59),
(49, 59),
(63, 72),
(65, 72),
(67, 72),
(71, 72),
(58, 73),
(60, 73),
(61, 73),
(66, 73),
(68, 73),
(59, 74),
(62, 74),
(64, 74),
(69, 74),
(70, 74),
(23, 75),
(56, 75),
(57, 75),
(24, 76),
(49, 76),
(50, 76);

-- --------------------------------------------------------

--
-- Structure de la table `equipes_joueur`
--

CREATE TABLE IF NOT EXISTS `equipes_joueur` (
  `id_joueur_equipes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_joueur` int(10) unsigned NOT NULL,
  `id_equipes` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_joueur_equipes`),
  KEY `id_equipes` (`id_equipes`),
  KEY `id_joueur` (`id_joueur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=323 ;

--
-- Contenu de la table `equipes_joueur`
--

INSERT INTO `equipes_joueur` (`id_joueur_equipes`, `id_joueur`, `id_equipes`) VALUES
(2, 4, 1),
(3, 5, 1),
(5, 7, 3),
(6, 8, 3),
(7, 10, 3),
(9, 12, 3),
(10, 13, 1),
(11, 14, 3),
(15, 18, 3),
(17, 19, 6),
(18, 21, 1),
(20, 26, 7),
(21, 29, 8),
(23, 31, 9),
(24, 32, 3),
(26, 36, 10),
(29, 40, 11),
(30, 41, 11),
(31, 42, 11),
(32, 43, 11),
(33, 17, 10),
(34, 45, 12),
(37, 48, 13),
(38, 49, 13),
(39, 50, 13),
(41, 53, 14),
(42, 54, 14),
(43, 55, 14),
(44, 56, 14),
(47, 59, 3),
(48, 60, 3),
(49, 61, 3),
(50, 62, 40),
(51, 63, 17),
(52, 64, 17),
(53, 65, 17),
(54, 66, 18),
(55, 67, 18),
(56, 68, 18),
(57, 69, 17),
(58, 70, 18),
(59, 71, 18),
(61, 72, 19),
(62, 73, 19),
(63, 75, 19),
(64, 58, 20),
(65, 76, 20),
(67, 74, 21),
(68, 81, 22),
(69, 82, 23),
(71, 80, 14),
(72, 85, 24),
(73, 86, 24),
(75, 88, 24),
(76, 89, 24),
(77, 90, 3),
(78, 91, 3),
(80, 92, 13),
(81, 94, 25),
(82, 96, 25),
(83, 98, 19),
(84, 99, 25),
(85, 28, 26),
(86, 101, 26),
(87, 100, 26),
(88, 102, 26),
(89, 103, 27),
(90, 104, 28),
(91, 105, 28),
(92, 107, 29),
(93, 108, 29),
(95, 112, 30),
(97, 116, 29),
(98, 109, 29),
(99, 120, 31),
(100, 51, 31),
(101, 121, 31),
(102, 122, 30),
(103, 123, 30),
(104, 131, 23),
(105, 110, 31),
(106, 133, 26),
(107, 137, 32),
(109, 132, 13),
(110, 140, 28),
(111, 141, 28),
(113, 145, 35),
(114, 146, 35),
(116, 147, 35),
(117, 148, 36),
(119, 151, 25),
(123, 154, 38),
(124, 35, 38),
(125, 152, 38),
(126, 153, 38),
(127, 155, 25),
(128, 157, 39),
(130, 158, 39),
(132, 162, 39),
(133, 166, 40),
(134, 167, 40),
(135, 170, 40),
(136, 165, 7),
(137, 173, 7),
(138, 171, 40),
(139, 175, 41),
(140, 25, 7),
(141, 176, 42),
(142, 177, 43),
(143, 163, 43),
(144, 38, 43),
(145, 172, 44),
(146, 180, 44),
(148, 181, 47),
(149, 182, 47),
(150, 183, 47),
(152, 57, 44),
(153, 164, 43),
(154, 37, 43),
(155, 188, 48),
(156, 189, 48),
(157, 190, 48),
(158, 191, 48),
(159, 156, 44),
(160, 193, 48),
(161, 194, 28),
(162, 178, 44),
(163, 196, 49),
(164, 168, 50),
(165, 197, 50),
(166, 198, 49),
(167, 30, 49),
(168, 199, 49),
(169, 200, 50),
(170, 192, 24),
(171, 201, 50),
(172, 203, 50),
(173, 204, 49),
(174, 205, 30),
(175, 206, 38),
(176, 150, 51),
(177, 46, 51),
(178, 202, 51),
(179, 27, 51),
(180, 207, 30),
(181, 33, 10),
(182, 124, 10),
(183, 209, 3),
(184, 77, 52),
(185, 210, 52),
(186, 169, 39),
(187, 174, 7),
(193, 3, 1),
(195, 95, 1),
(198, 130, 52),
(202, 179, 52),
(207, 136, 53),
(209, 135, 53),
(211, 134, 53),
(215, 125, 10),
(220, 187, 23),
(232, 111, 31),
(237, 186, 23),
(242, 195, 23),
(244, 211, 47),
(257, 7, 56),
(258, 8, 56),
(259, 12, 56),
(260, 32, 56),
(261, 59, 56),
(262, 60, 56),
(263, 209, 56),
(264, 12, 57),
(265, 14, 57),
(266, 18, 57),
(267, 32, 57),
(268, 90, 57),
(269, 91, 57),
(270, 10, 57),
(282, 144, 47),
(290, 83, 53),
(294, 23, 53),
(298, 126, 23),
(302, 128, 23),
(306, 84, 19),
(310, 78, 31),
(314, 6, 52),
(321, 47, 39),
(322, 47, 23);

-- --------------------------------------------------------

--
-- Structure de la table `equipes_tournoi`
--

CREATE TABLE IF NOT EXISTS `equipes_tournoi` (
  `id_equipe` int(10) unsigned NOT NULL,
  `id_tournoi` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_equipe`,`id_tournoi`),
  KEY `id_team` (`id_tournoi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `equipes_tournoi`
--

INSERT INTO `equipes_tournoi` (`id_equipe`, `id_tournoi`) VALUES
(7, 1),
(10, 1),
(13, 1),
(14, 1),
(18, 1),
(19, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(30, 1),
(31, 1),
(39, 1),
(40, 1),
(43, 1),
(44, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(52, 1),
(53, 1),
(56, 1),
(57, 1),
(23, 2),
(24, 2),
(49, 2),
(50, 2),
(56, 2),
(57, 2),
(58, 5),
(59, 5),
(60, 5),
(61, 5),
(62, 5),
(63, 5),
(64, 5),
(65, 5),
(66, 5),
(67, 5),
(68, 5),
(69, 5),
(70, 5),
(71, 5);

-- --------------------------------------------------------

--
-- Structure de la table `groupes_pool`
--

CREATE TABLE IF NOT EXISTS `groupes_pool` (
  `id_groupe` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tournoi` int(10) unsigned NOT NULL,
  `nom_groupe` varchar(255) NOT NULL,
  PRIMARY KEY (`id_groupe`),
  KEY `id_tournoi` (`id_tournoi`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=77 ;

--
-- Contenu de la table `groupes_pool`
--

INSERT INTO `groupes_pool` (`id_groupe`, `id_tournoi`, `nom_groupe`) VALUES
(56, 1, 'Groupe 1'),
(57, 1, 'Groupe 2'),
(58, 1, 'Groupe 3'),
(59, 1, 'Groupe 4'),
(60, 3, 'Groupe 1'),
(61, 3, 'Groupe 2'),
(62, 3, 'Groupe 3'),
(63, 3, 'Groupe 4'),
(72, 5, 'Groupe 1'),
(73, 5, 'Groupe 2'),
(74, 5, 'Groupe 3'),
(75, 2, 'Groupe 1'),
(76, 2, 'Groupe 2');

-- --------------------------------------------------------

--
-- Structure de la table `joueurs`
--

CREATE TABLE IF NOT EXISTS `joueurs` (
  `id_joueur` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_emplacement` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gsm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paye` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` blob,
  `ecole` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_de_naissance` date DEFAULT NULL,
  `level` smallint(6) NOT NULL DEFAULT '5',
  PRIMARY KEY (`id_joueur`),
  KEY `id_emplacement` (`id_emplacement`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=215 ;

--
-- Contenu de la table `joueurs`
--

INSERT INTO `joueurs` (`id_joueur`, `pseudo`, `password`, `id_emplacement`, `nom`, `prenom`, `email`, `sexe`, `gsm`, `paye`, `avatar`, `ecole`, `date_de_naissance`, `level`) VALUES
(3, 'fliwdeir', '958fed79fb78fcffd227d19c0eb417315d6eaf6b', NULL, 'Granger', 'Wilfried', 'fliwdeir@gmail.com', 'h', '', 0, NULL, NULL, '1991-06-04', 1),
(4, 'Zelof', '17cab9607e341778e9e846eef9716f9798f4a0df', NULL, 'Tollet', 'Morison', 'morisontollet@gmail.com', 'h', '0499203761', 0, NULL, NULL, '1990-01-08', 1),
(5, 'lion24', '9774ccfbfb39c640217d4b97a3eb479ea5525b37', NULL, 'Hubaut', 'Lionel', 'lionel_dell24@hotmail.com', 'h', '', 0, NULL, NULL, '1991-07-24', 1),
(6, 'Canon6etoiles', '60c7c638246d60c1c33bd044c5184f205b40746e', 93, 'Canon', 'Geoffrey', 'geoffreycanon@hotmail.com', 'h', 'tg', 1, NULL, NULL, '1989-10-05', 5),
(7, 'LittleS4T4N', '1c5f737b3f3b43502078b0f2fd83d5aa1997bb34', 12, 'Cremer', 'Samuel', 'samuel.cremer@heh.be', 'h', '', 1, NULL, NULL, '1982-06-09', 1),
(8, 'Krogoh', '46cf9fd0936eb2472655e3ea3c7c0e2db9d2bbfc', 11, 'Miller', 'Ivan', 'ivan.miller@heh.be', 'h', '', 1, NULL, NULL, '1982-07-11', 5),
(10, 'Psychopaf', '5d4312fbeac4d44ba48f2fe8d0c0e8dd5542ccbc', 1, 'De Pauw', 'Jérémy', 'jeremy.dpw@gmail.com', 'h', '0498283744', 1, NULL, NULL, '1979-10-29', 5),
(12, 'Rawnur', '2b82e6f6e20ccc2643b037e91fbd51dcd0950317', 14, 'Petein', 'Thomas', 'peteinthomas@gmail.com', 'h', '', 1, NULL, NULL, '1984-09-04', 5),
(13, 'Guerrier666', '565d33c5262b552c24b56ce2c639ff2fc9b1df8c', NULL, 'Soumoy', 'Julien', 'julien.soumoy@gmail.com', 'h', '', 0, NULL, NULL, '1990-08-26', 1),
(14, 'Luke', '9675c921dab2fdcad590bdfcd3125d76635cec13', 2, 'Van Driessche', 'Stéphane', 'svd.isep@gmail.com', 'h', '0491251194', 1, NULL, NULL, '1981-02-19', 5),
(17, 'Spytte is Coming', 'a8514e391757d7816870f321430b426c6a658591', NULL, 'Ramirez Gallardo', 'Mathias', 'mathias.ramirez.gallardo@hotmail.com', 'h', '0479580915', 1, NULL, NULL, '1994-03-17', 5),
(18, 'Desert', '786ae7642f057f33c52817c046ad104ae8c2c804', 5, 'Guelette', 'joel', 'joel.guelette@skynet.be', 'h', '0470173888', 1, NULL, NULL, '1965-11-22', 5),
(19, 'zarbisi', '44dcc71a5642b6ddcfc7f962a4c522cdfd459a16', NULL, 'Palmeri', 'Raphael', 'raphaelpalmeri3@gmail.com', 'h', '0497317326', 0, NULL, NULL, '1993-11-28', 5),
(20, 'Métronic', 'b38bb37c2b37634875a7bb9f93ea268754ad6b35', NULL, 'De Meyer', 'Lucas ', 'metronic@hotmail.be', 'h', '0493564646', 0, NULL, NULL, '1990-01-13', 5),
(21, 'koekjes', 'e972a6963cc37eb87bb5f7144a51feaa0597c8fc', 127, 'De wit', 'Marc', 'marcsolid@hotmail.com', 'h', '/', 0, NULL, NULL, '1988-01-27', 1),
(22, 'Fogz', '0991e2c0bf5f4b16cea885a72a94b390afb8e02f', NULL, 'Lefevre', 'Guillaume', 'guillaume_lefevre@msn.com', 'h', '0484/18.33.15', 0, NULL, NULL, '1992-10-29', 5),
(23, 'Thaerith', '45de2892440ab98fb0ffd1af04eaea76e5435583', NULL, 'Malengreau', 'Benjamin', 'beanprod@gmail.com', 'h', '0486585506', 1, NULL, NULL, '1992-01-27', 5),
(24, 'Winblast', '09b8b2d4ece1b22590aea2ce6939c97913c45dfd', NULL, 'Meyers', 'Maxime', 'maxime.meyers@gmail.com', 'h', '0498536044', 1, NULL, NULL, '1991-12-18', 5),
(25, 'RectoO', 'a8651d04b7d72addea9287f7aa68049b244e6a86', NULL, 'Vrielynck', 'Nicolas', 'nicosvrielynck@hotmail.com', 'h', '0032472769282', 1, NULL, NULL, '1992-06-10', 5),
(26, 'ioni', '8bb04785b7904ddeeb52f8697f2c3ce4b844beca', NULL, 'Lambert', 'Maximilien', 'apak9544@gmail.com', 'h', '0479060781', 1, NULL, NULL, '1995-10-02', 5),
(27, 'xemnas192', 'f77f1d16b16e01a994d1cca27505517b00823ec1', NULL, 'Moreau', 'Benoît', 'moreaubenoit7@gmail.com', 'h', '0478495279', 0, NULL, NULL, '1992-04-08', 5),
(28, 'Witchh Doctor', 'd6c1095407fdbe4997d5fc2bf57a1a5c5f8c10ec', 33, 'Cortisse', 'Jérôme', 'jer.cortisse@gmail.com', 'h', '0475461761', 1, NULL, NULL, '1994-04-08', 5),
(29, 'Boulvay', '9ef65378b90a121f4afd568ccf6ba8211b70ec73', NULL, 'MOUTIER', 'Sébastien', 'sebastienmoutier@msn.com', 'h', '0627931706', 0, NULL, NULL, '1985-06-06', 5),
(30, 'Sponos', 'c850058f4dde2e4729d0cfb05abfbfb03af91dcd', 56, 'Marin', 'Tanguy', 'tch4ng@msn.com', 'h', '', 1, NULL, NULL, '1992-01-04', 5),
(31, 'DestroyedParadis', 'e1c31d17ac5a4d25fa5048a05568ba1e8b488dd1', NULL, 'Juzen', 'Théo', 'radis1@live.be', 'h', '0474710841', 0, NULL, NULL, '1990-12-05', 5),
(32, 'Sl33p3r', 'c08c1d502b6b40a04a8575ceff5bdf54e5c2b1e6', 128, 'De Veseleer', 'Mehdi', 'thesleeper3@hotmail.com', 'h', '0477729680', 1, NULL, NULL, '1980-09-06', 5),
(33, 'Artanis Pirgis', 'f198b35a4ab52fbd21ff03413b98949467a6ad65', NULL, 'Simon', 'Jürgen', 'spyder6@live.be', 'h', '0474265953', 1, NULL, NULL, '1992-09-18', 5),
(34, 'Tøxigrinta', 'dacb7244a8273cd82622f37ed104904e774066ac', NULL, 'Mele', 'Santino', 'santino_1313@hotmail.com', 'h', '0495833002', 0, NULL, NULL, '1992-03-20', 5),
(35, 'brasix', '452b856238b607e8258031128240f4fac2be94ef', NULL, 'navarra', 'giacomo', 'giacomoo@live.be', 'h', '0474546448', 0, NULL, NULL, '1993-09-16', 5),
(36, 'Téflon', 'f29e3a08b28609b34bae86b70e321b1d90a229ce', NULL, 'Taverna', 'Nicolas', 'nicolas.taverna@live.be', 'h', '0475476645', 1, NULL, NULL, '1991-01-23', 5),
(37, 'Nydda', 'b3f50bf9dd306f088f6430eaae8d719855dc8ed9', 71, 'Bastien', 'Florine', 'alexuelle@gmail.com', 'f', '0491247176', 1, NULL, NULL, '1994-04-25', 5),
(38, 'Katax', '56541a58d16d9f42ded54a8f07b7cd43ed736449', 68, 'Bastien', 'Adrien', 'katalistix@hotmail.com', 'h', '0495141980', 1, NULL, NULL, '1991-09-11', 5),
(39, 'Nyuw', '66c3af0ca529fbd89d4577e563abfbf75c5d8732', NULL, 'Ehrlich', 'Fabien', 'admin@nyuw.fr', 'h', '+33626875297', 0, NULL, NULL, '1988-12-26', 5),
(40, 'Rothesse', '74db780899088774c45b84a9829cc9099a5b9412', NULL, 'Van Damme', 'Diego', 'diegovd18@msn.com', 'h', '0499267340', 0, NULL, NULL, '1993-07-17', 5),
(41, 'Hamsterguys', '8b0cf21fdf66586ef141e86c3648a08cb3ae53da', NULL, 'Dauchot', 'César', 'dauchotcesar@gmail.com', 'h', '', 0, NULL, NULL, '1994-09-02', 5),
(42, 'rod0511', '98cb8e5d0207c75d727a0c20547cc123cc8a42fc', NULL, 'Verstraeten', 'Adrien', 'adrienverstraeten@gmail.com', 'h', '0483037489', 0, NULL, NULL, '1991-12-18', 5),
(43, 'Skullhards', '0eea4f77f607a20d6ab9911ae092715bbada363f', NULL, 'Tricoux', 'Alexandre', 'golgothuz@hotmail.com', 'h', '0499621090', 0, NULL, NULL, '1990-01-06', 5),
(44, 'ximunou', '86cc3ef0ff078e37b1bb5ac8b629232eb5483e5d', NULL, 'Venant', 'Christian RJ', 'vntchris@gmail.com', 'h', '0488237507', 0, NULL, NULL, '1993-04-07', 5),
(45, 'ousermont', '526dd707123e19245d7152935a79c2c1fda63441', NULL, 'monfort', 'julien', 'julien-monfort@hotmail.be', 'h', '', 0, NULL, NULL, '1992-04-03', 5),
(46, 'Skynyx', '7964902d6c3b80a7b014182c771cdd6c17bc5fc7', NULL, 'Coart', 'Jonathan', 'sentinel1988@hotmail.fr', 'h', '0471394369', 0, NULL, NULL, '1988-09-22', 5),
(47, 'LamboX', 'adf2276bfcb02d2fc9ce0eaa24080b5f2747a9b6', NULL, 'Valet', 'Quentin', 'valet.quentin@gmail.com', 'h', '0473/39.30.78', 1, NULL, NULL, '1993-10-26', 5),
(48, 'Hexceed', '6b88c2da36027373b39ae95367a0882c0377f68e', 39, 'Brigode', 'Raphael', 'raphael.brigode@gmail.com', 'h', '0498563594', 1, NULL, NULL, '1995-04-02', 5),
(49, 'Happy Nems', 'ba0e05f272e10b61c0ea36e11586b77352d4cbc3', 37, 'Dujardin', 'Quentin', 'duj.quentin@gmail.com', 'h', '0471080325', 1, NULL, NULL, '1995-02-18', 5),
(50, 'NamaTroX', '46e9dc939b03d13b0a9389579ad849c0c53a4ae8', 38, 'justin', 'theisman', 'justin.theisman@gmail.com', 'h', '32479827341', 1, NULL, NULL, '1994-06-12', 5),
(51, 'gosh101', 'f539a227e5323072293b6cb8cbe0e845620d578b', NULL, 'Macha', 'Hugo', 'banane@live.be', 'h', '', 1, NULL, NULL, '1991-04-01', 5),
(52, 'Horokrist', '820403a832a5362d909c5c87e8744cb1eb4f6634', NULL, 'Verhamme', 'Maxance', 'maxanceverhamme@gmail.com', 'h', '', 0, NULL, NULL, '1990-12-24', 5),
(53, 'iGlooW', '786352c499c5c84f45e49690fa0e4244b9c296f1', NULL, 'Desprets', 'Rupert', 'kallallisut@gmail.com', 'h', '', 1, NULL, NULL, '1993-08-05', 5),
(54, 'bou', 'f385f0c916203be6e50817b820b4e750b133ad44', NULL, 'Florian', 'Sprimont', 'florian_05@live.be', 'h', 'Tacru', 1, NULL, NULL, '1994-05-20', 5),
(55, 'Zarak', 'e743d1e8fa4ca6410e0443effe25934b2a7de4db', NULL, 'Alami', 'Mehdi', 'face.alami@hotmail.com', 'h', '0472608/841', 1, NULL, NULL, '1994-06-14', 5),
(56, 'Salcatin', 'cf3bf811d3dc32ccc81ec5f3b33cda7b8c8f7fff', NULL, 'Vray', 'Terry', 'neurodubbass@gmail.com', 'h', '0474341293', 1, NULL, NULL, '1993-07-24', 5),
(57, 'Belgium Flag Zeytenh', 'a5abbf90f26b2b67871be448426322e27644b3ff', 31, 'Bouquieaux', 'jimmy', 'ultrasstorm@hotmail.be', 'h', '0470074235', 1, NULL, NULL, '1994-09-10', 5),
(58, 'Tartines', '53fa9ad5828529ca0632674032a4a4bd2d26f831', NULL, 'Maxime', 'compère', 'maxime.compere63@gmail.com', 'h', '33488178851', 0, NULL, NULL, '1995-01-09', 5),
(59, 'Eklatpif', '2ca83a098fb8a4cd7ef7077cb2e6762edc4664b8', 15, 'pringels', 'raphael', 'rpringels@hotmail.com', 'h', '0478/29.13.14', 1, NULL, NULL, '1988-01-20', 5),
(60, 'Entamoeba', '5c683a3d42b5442d0e9430de1110b37ebce95842', 16, 'Monnoye', 'Sarah', 'saralise2@hotmail.com', 'f', '0477 54 13 13', 1, NULL, NULL, '1990-03-08', 5),
(61, 'Eklatburnes', '9f59729c66a3833f17d32a0a4df9d4c29ba6d9c0', NULL, 'Victoor', 'Jack', 'jackv22@live.fr', 'h', '0474127628', 0, NULL, NULL, '1988-06-22', 5),
(62, 'JankulaseK', '1e7a4aa6ca49dc6477d7077bb281eba6f224fb90', NULL, 'Monaux', 'Martin', 'martin.monaux@gmail.com', 'h', '0498 73 16 80', 1, NULL, NULL, '1991-11-04', 5),
(63, 'Lee Sin', 'e3e08675ff2b4b95d09ebd6772a568a3e616edb2', NULL, 'Ingrao', 'Giovanni', 'ingrao.giovanni@gmail.com', 'h', '0479360546', 0, NULL, NULL, '1993-01-04', 5),
(64, 'Suyken', '420837d813a22774b4805f2b0351235e497e9126', NULL, 'Oresti', 'Antoine', 'oresti93@gmail.com', 'h', '071761482', 0, NULL, NULL, '1993-05-03', 5),
(65, 'Seyfur', 'c96c000270dba1cac017f75ea91257f713c48544', NULL, 'kontomanolis', 'Nico', 'nico-zebest@hotmail.com', 'h', '', 0, NULL, NULL, '1990-01-13', 5),
(66, 'Delikan57', 'cff1479ce8614dd9c9a4501d9bca179ac7eb6e5f', 100, 'Ozturk', 'Koray', 'ozturk.koray@hotmail.be', 'h', '0498014471', 1, NULL, NULL, '1993-12-04', 5),
(67, 'Touza', 'c4e88bbddb7a315527aa982b8a3c18a2cb0d01e1', 97, 'Depreter', 'Johan', 'depreter.johan@gmail.com', 'h', '0476512528', 1, NULL, NULL, '1993-02-22', 5),
(68, 'Rayalok', 'd3526987d2ad94e11c0eccb351ec518f9d8b3296', 101, 'Gava', 'Andrea', 'gavatoni@hotmail.com', 'h', '0496/78.39.84', 1, NULL, NULL, '1994-08-30', 5),
(69, 'Monkey D Allan', '6aa414be8ed2c9a0273625a94ac70dd942b54149', NULL, 'Piette', 'Allan', 'piette.allan@gmail.com', 'h', '', 0, NULL, NULL, '1991-10-06', 5),
(70, 'Echofox', '73e1ce75307bd6179bc3d691e30d56d9084687d6', 99, 'Gilian', 'Maxime', 'maxime.gilian@gmail.com', 'h', '0474326469', 1, NULL, NULL, '1995-09-14', 5),
(71, 'Droledami', '47dedc053c566d2a2ee0f5a61cd4a425b919260e', 98, 'Michaux', 'Justin', 'just_a_mich@hotmail.com', 'h', '0484295556', 1, NULL, NULL, '1993-10-05', 5),
(72, 'Playas', 'a1d3ec8a1ca91bcbd57e8a21d17c4c365046f1bd', 103, 'Vercammen', 'Damien', 'damvercam@gmail.com', 'h', '0494/14.43.92', 1, NULL, NULL, '1994-12-05', 5),
(73, 'Origamie', 'e27a0159d29168a1622db0af33b08e5394db2dd7', 102, 'Tamiset', 'quentin', 'quentin.tamiset@gmail.com', 'h', '0477/19 73 41', 1, NULL, NULL, '1993-12-23', 5),
(74, 'Worst fiddle EUW', '85adbd0ee8c89bdb7cc320e7a9f78833f741492d', NULL, 'cortisse', 'sebastien', 'creativenatsu.co@gmail.com', 'h', '', 0, NULL, NULL, '1996-11-05', 5),
(75, 'dodop', 'aa2815745e52bfb0cfbf09ef04169dba2468bbb4', 105, 'adam', 'dorian', 'dodo-nageur@hotmail.com', 'h', '0479120902', 1, NULL, NULL, '1995-01-19', 5),
(76, 'Dr Miika', 'fc6934c3317410b83082d90e0654877b9a01daed', NULL, 'Carton', 'Mickaël', 'mic-carton@hotmail.fr', 'h', '0650399307', 0, NULL, NULL, '1994-08-12', 5),
(77, 'Narco', '24dfa4a1fb464435a3184049030cd61c1f77195e', 96, 'Deschamps', 'Arnaud', 'arnaud.d91@hotmail.com', 'h', '33479271285', 1, NULL, NULL, '1991-04-12', 5),
(78, 'Helmanath', 'dc6d2840c26fbb184b2fbc19019f1c5d80f543f5', NULL, 'Delsarte', 'Samy', 'samynicolat@hotmail.com', 'h', '', 1, NULL, NULL, '1990-06-01', 5),
(79, 'Multidoting', '902142823f4773b946292aa9f03065090e270b05', NULL, 'Clavie', 'Bryan', 'claviebryan@hotmail.be', 'h', '0476052684', 0, NULL, NULL, '1992-03-10', 5),
(80, 'malu7800', '3e5f1697fe028dbecd560cb4b395cc8ac266b6af', NULL, 'Noëson', 'Guillaume', 'guill-aume@hotmail.com', 'h', '0479641558', 1, NULL, NULL, '1994-04-20', 5),
(81, 'Tomirock', 'fd1f796830450ff3f9400633b020bd32882939ef', NULL, 'Van Frausum', 'Tom', 'tomvf@hotmail.com', 'h', '0471205970', 0, NULL, NULL, '1992-10-30', 5),
(82, 'satanasth250', '370900fe9b079889aa87ca7dc6ac7e1d7479bb29', NULL, 'peteau', 'thomas', 'satanasth250@hotmail.fr', 'h', '42424242424242', 1, NULL, NULL, '1993-11-19', 5),
(83, 'Wadosh', 'db4c335a75016e950790b3221ffc119781578c93', NULL, 'Noël', 'Mike', 'mike.isims@hotmail.com', 'h', '0485100419', 1, NULL, NULL, '1993-07-14', 5),
(84, 'Ander BloodEyes', '71cbcb9012cfa82e888dc3fa30c3de203ffebb49', 6, 'Divoto', 'Andrea', 'divoto.ander.andrea@gmail.com', 'h', '0493165094', 1, NULL, NULL, '1990-08-26', 5),
(85, 'Thorgrim', 'ad205eba3c965d4370f0c5c84aa0292059815d2b', 47, 'Vandries', 'Thomas', 'tho1110mas@hotmail.com', 'h', '0471685399', 1, NULL, NULL, '1993-10-11', 5),
(86, 'Angerfirst', 'b558ffecc699fd4a57108cd93f43f440c999a3d6', 51, 'Debay', 'Günther', 'gunther1st@hotmail.com', 'h', '0496799878', 1, NULL, NULL, '1993-07-29', 5),
(87, 'Kovers', '9a4ce1cbd1b27f4c5f514edfd852d71f4104a77f', NULL, 'Vandries', 'Thibauld', 'uhKovers@hotmail.com', 'h', '0477376476', 0, NULL, NULL, '1997-07-17', 5),
(88, 'benauto', '026a43fdbcaa4f8790329e4b44d97ec07d228696', 50, 'Severijns', 'Benjamin', 'benauto8@hotmail.com', 'h', '0473943875', 1, NULL, NULL, '1993-12-13', 5),
(89, 'Nucleaz', '3b4b496a1cb92615ec0fc16f3af05416ecb4070a', 49, 'Fernandez', 'Fabian', 'fernandez.fabian@outlook.com', 'h', '', 1, NULL, NULL, '1993-04-29', 5),
(90, 'roden164', '3f12d5d8c6fc8765a28c815517407144dca856e7', 3, 'Paulet', 'Gaetan', 'gaetanpaulet@hotmail.com', 'h', '0494/709232', 1, NULL, NULL, '1984-08-06', 5),
(91, 'landre164', 'b972a45559944725da74a9e243f434139715b9b2', 4, 'André', 'François', 'andrefra1@hotmail.com', 'h', '0498743803', 1, NULL, NULL, '1985-02-08', 5),
(92, 'Webolivieri', '0cd5fcf0a4169ce886f7c1ba698aa0cd7e1d72b7', 40, 'Olivieri', 'Dimitrio', 'thewebolivieri@gmail.com', 'h', '', 1, NULL, NULL, '1995-01-20', 5),
(93, 'Codu', '45d05a2c9d7fcbbddc4b1509e8f05b2946af9ec6', NULL, 'Dumont', 'Corentin', 'corentindumont@hotmail.com', 'h', '32477540938', 0, NULL, NULL, '1992-01-10', 5),
(94, 'Fluffy', 'ff1f7ac4be3435b710cb4f5c040d8eab0b1d8d49', 45, 'Cayphas', 'Thibault', 'thibault.cayphas@gmail.com', 'h', '0498842307', 1, NULL, NULL, '1992-08-26', 5),
(95, 'Hextia', '30a9857593c3c39bb4399987c33695d2447481b0', NULL, 'de Munck', 'Damien', 'dm_dam@hotmail.com', 'h', '0497193731', 0, NULL, NULL, '1990-10-19', 1),
(96, 'Abysses', '9ed7ac057c79d04573546736614936ae8919941d', 43, 'Pierard', 'Arnaud', 'arnaud.pierard@gmail.com', 'h', '0497 74 95 38', 1, NULL, NULL, '1992-04-30', 5),
(97, 'gwennytoux', '0d50174f3c4b9881853e69dfe11965fd0ecdd62d', NULL, 'Mathieu', 'Gwenel', 'gwenel.mat@gmail.com', 'h', '0474810661', 0, NULL, NULL, '1993-01-08', 5),
(98, 'Gaudryk', 'a34d9f4517a9e57014b309c4271490ae428ea898', 104, 'Audry', 'Tytgat', 'audry.tgt@hotmail.com', 'h', '0478369225', 1, NULL, NULL, '1995-12-22', 5),
(99, 'Anga', 'a3ab7b449714c08b6ab990d516c5d93be6dc1ddc', 44, 'Guillaume', 'Dequenne', 'guillaume_dequenne@hotmail.com', 'h', '', 1, NULL, NULL, '1992-12-29', 5),
(100, 'MrNedria', '8be1547f0275a5676e5edcc7f45cdb626943df69', 32, 'Questiaux', 'Adrien', 'nedria3638@gmail.com', 'h', '0474638907', 1, NULL, NULL, '1994-10-11', 5),
(101, 'Alfattarte', '16ef0c098cbf35632f79b7494f02c78197888809', 35, 'Dachy', 'Corentin', 'alfatta_@hotmail.com', 'h', '0496088330', 1, NULL, NULL, '1995-01-11', 5),
(102, 'Alfatta', '6cb5e590d19e9e1808b5f9909ce4336e2f4d1189', 36, 'Mehdi', 'Raynal', 'mehdi.raynal@hotmail.fr', 'h', '0478322360', 1, NULL, NULL, '1994-06-29', 5),
(103, 'lukasobito', 'cd247aa2b5b3f0b54288ba0cb8e23842104b5d77', NULL, 'kordupel', 'Lukas', 'sakulvador@hotmail.com', 'h', '0494042752', 0, NULL, NULL, '1997-02-19', 5),
(104, 'craywyn', 'b832ccb4dd22b1b08491c7ba9df74d323a7a38f1', NULL, 'Dylan', 'De Schreyer', 'dyl26des@gmail.com', 'h', '0493547042', 0, NULL, NULL, '1993-03-26', 5),
(105, 'Kaethuseth', 'c9379bcb80d6c8bb8617d1e1c96b6d5b4cab577e', NULL, 'Hvan', 'Igor', 'gdigor@live.be', 'h', '0489004304', 0, NULL, NULL, '1993-10-02', 5),
(106, 'Ash', 'cc25a0b96733cf084ced1b2bc8f706c4b05c8585', NULL, 'Galimberti', 'Henri', 'henri.galimberti@gmail.com', 'h', '0496476677', 0, NULL, NULL, '1979-08-24', 5),
(107, 'Siena', '47084ac01011c835baa23e9e109b2ed63176d682', NULL, 'Lebrun', 'Elodie', 'elodielebrun@hotmail.com', 'f', '0496/397268', 0, NULL, NULL, '1992-01-16', 5),
(108, 'Skayard', '4502852e041288be42e20c0217f0e2f9f6fe8b09', NULL, 'Thomas', 'Depièreux', 'thomasdepiereux@gmail.com', 'h', '0497889380', 0, NULL, NULL, '1993-03-14', 5),
(109, 'TheBlackDiamond', 'd83dd0ef9c5eaf6c35b247e45b4d445705ab539d', NULL, 'Frère', 'Arthur', 'deed_jsaipo@hotmail.com', 'h', '0473666167', 0, NULL, NULL, '1994-09-30', 5),
(110, 'XUltiX', 'e2c678a0b2068910f4ab452924125ea59c1ffe80', NULL, 'Urbain', 'Arnaud', 'arnaud-3@outlook.com', 'h', '0494489087', 1, NULL, NULL, '1991-04-06', 5),
(111, 'Danilus', '742075f51e9c941c351e1df8151ed4fd079218d0', NULL, 'De Maio', 'Danilo', 'adndan2012@hotmail.fr', 'h', '0477/39/73/80', 1, NULL, NULL, '1992-12-20', 5),
(112, 'Soccielo', '1ff18dda5930325ef11e2ed1c811cea4a90262bc', 66, 'Leclercq', 'Kévin', 'leclercqk@hotmail.fr', 'h', '0471 08 46 48', 1, NULL, NULL, '1993-06-11', 5),
(113, 'Gahkin', 'd630ccfdac7e938041a3551518c328fad86f4ae2', NULL, 'STIEVET', 'Maxime', 'maximetidus@msn.com', 'h', '0646465081', 0, NULL, NULL, '1992-01-14', 5),
(114, 'Popol au Cirque', 'fc84308ba3fc5110154a228c90a9f8562a1c6e7a', NULL, 'Cely ', 'Juan', 'cely.juan@live.be', 'h', '0485152426', 0, NULL, NULL, '1992-05-11', 5),
(115, 'kazuhya', 'addb457b18832a77d164a47598b56978a12f43e0', NULL, 'latteur', 'arnaud', 'arnaud.latteur@live.be', 'h', '0479729324', 0, NULL, NULL, '1990-01-03', 5),
(116, 'trogalt', '80121f3ff41c433d2e8ae35ff2acb854de890e6c', NULL, 'dechamps', 'anthony', 'anthony.dechamps@student.uclouvain.be', 'h', '0498/14/73/51', 0, NULL, NULL, '1993-10-27', 5),
(117, 'crisedefoi', 'b95a1096369f8bd7a2c42916f9fd8a88d2623d4e', NULL, 'blairon', 'gael', 'blairongael@hotmail.be', 'h', '0476021740', 0, NULL, NULL, '1981-07-09', 5),
(118, 'Er3az', 'fa9c766b22decde409c657f66265a23a941f2afe', NULL, 'Roald', 'Targé', 'roald.t@live.be', 'h', '32474919501', 0, NULL, NULL, '1990-01-11', 5),
(119, 'Chat Ringan', '2461c62128932c4a3ce8d43eec80bbd58ec88db0', NULL, 'Neybergh', 'Christopher', 'chris0075@live.fr', 'h', '0470023864', 0, NULL, NULL, '1993-06-08', 5),
(120, 'machabastien', 'e004d93c8dd3052e8708f6df13ab69ff133ca818', NULL, 'Macha', 'Bastien', 'machabastien@hotmail.com', 'h', '047422282', 1, NULL, NULL, '1993-08-11', 5),
(121, 'Galdesh', 'cdb48df21c7f75560ab7431d864a0fbedb61bba4', NULL, 'Bael', 'Boris', 'boris.bael@hotmail.fr', 'h', '0475/241462', 1, NULL, NULL, '1991-07-12', 5),
(122, 'fox2903', '8f76ccc97fffc0fbbf25ddfe9674968b2d3e404f', 62, 'Pagnanini', 'Morgan', 'morgan.pagnanini@gmail.com', 'h', '0495352686', 1, NULL, NULL, '1996-08-20', 5),
(123, 'Greybak', 'df8990cec39dee35e4a8fcacc416da958127923d', 65, 'timmy', 'puffet', 'timmypuffet@hotmail.com', 'h', '0495943148', 1, NULL, NULL, '1993-01-30', 5),
(124, 'Banksyz', '68f23ce207f10a096c7d5429e5b76ff09429383f', NULL, 'Bernard', 'Gil', 'bernard_gil@hotmail.fr', 'h', '0495137118', 1, NULL, NULL, '1992-08-14', 5),
(125, 'Shethan', '628e093f170443614442b86ad645216582c8a5df', NULL, 'Tihon', 'Jordy', 'supermegagilou@hotmail.com', 'h', '0495137118', 1, NULL, NULL, '1992-12-19', 5),
(126, 'Shyrøw', '414a4681398bf5be14bd84bf127c5d08c3c214dc', 10, 'La Valle', 'Anthony', 'antho001@hotmail.com', 'f', '0472/94.21.65', 1, NULL, NULL, '1991-07-26', 5),
(127, 'rougetta', '18850153f825f7c2f7408b1a79c88dcf221ae1b7', NULL, 'anthony', 'ravanelli', 'axythony@hotmail.com', 'h', '0498/32.95.26', 0, NULL, NULL, '1992-09-02', 5),
(128, 'thotwith', '2a0c6617509aeb3f06ea3e050f49e8d0f80d3d3f', NULL, 'Renaud', 'Pochet', 'pochetr28@hotmail.be', 'f', '0494767723', 0, NULL, NULL, '1992-02-28', 5),
(129, 'skuyz', 'f6871b4dab158a11e44fe4fbc16d1da48d6ca874', NULL, 'Lentz', 'Baptiste', 'bat.lentz@facebook.com', 'f', '0498018398', 0, NULL, NULL, '1991-04-12', 5),
(130, 'Alcyoal', '2c4af14c5c07c5a0d254f95f5c9e6a3d19d027d4', 92, 'Chaussier', 'Stéphane', 'stephane.chaussier@hotmail.com', 'h', '071216964', 1, NULL, NULL, '1993-05-26', 5),
(131, 'Anus42', '9d57fc7f34449f9f63f0fbbd8848bf2f37ab1ec5', NULL, 'Antoine', 'Dauwe', 'antoine.dauwe@gmail.com', 'h', '', 1, NULL, NULL, '1993-12-11', 5),
(132, 'Zayzo', '9841c9d325cd3bceec4360869b48acfe690c5522', 41, 'Di marco', 'Alessio', 'raphael.brigode@gmail.com', 'h', '0498563594', 1, NULL, NULL, '1995-01-03', 5),
(133, 'waelan', 'f9104555491a049f77eef68a388040f80ecff87d', 34, 'chafaï', 'Souhaïl', 'sail.waelan@gmail.com', 'h', '0485773328', 1, NULL, NULL, '1994-06-09', 5),
(134, 'ATMbigslick', '3795af6cefd229bba14c39280a902adff138dee7', 7, 'Ost', 'Victorien', 'victorienost@hotmail.com', 'h', '0497/814008', 1, NULL, NULL, '1995-09-27', 5),
(135, 'VeryBadLegend', '55493d328c62fa23f322f483d2b8c1c482ee405e', 9, 'Rosi', 'Thomas', 'thomas.rosi@skynet.be', 'h', '0491614140', 1, NULL, NULL, '1994-08-13', 5),
(136, 'Dekama', '3b68536c8b5f7e8235d91598d9e5f0cfe6ce9b53', 8, 'Barat', 'Kevin', 'ptafix@live.be', 'h', '0493671515', 1, NULL, NULL, '1995-01-31', 5),
(137, 'Lordftw', 'a25c092746b3a8bbaa0eff9bd5160be6a8a1275f', NULL, 'Jonas', 'Bogucki', 'fmc-lord@hotmail.com', 'h', '32494860243', 0, NULL, NULL, '1993-07-27', 5),
(138, '1ST_Tr45HxC', 'adededb4485978d3dd42505f5bfea417fbfdcd07', NULL, 'Rapaille', 'Fred', 'rapaille.fred@hotmail.com', 'h', '', 0, NULL, NULL, '1981-04-08', 5),
(139, 'DottyLloyd', '5015520d18ee0fa846117af908251745f2f9d842', NULL, 'Leclercq', 'Lloyd', 'leclercqlloyd@hotmail.com', 'h', '0495734210', 1, NULL, NULL, '1993-12-15', 5),
(140, 'Atariks', '2048a75dc925fc9da7b8afe20e6d3d6b2d11ac21', NULL, 'Vander Beken', 'Kévin', 'kvinvdb@gmail.com', 'h', '0496802499', 0, NULL, NULL, '1993-12-01', 5),
(141, 'Ohgreat', '94829839acf8dcae22af870985b93c3465c7cdcc', NULL, 'Ersoy', 'Semih', 'ohgreat92@gmail.com', 'h', '0485611025', 0, NULL, NULL, '1992-12-29', 5),
(142, 'shasha07', '91e68ff1da9f073d30ae7bf75e5aa2811a83205d', NULL, 'Vandendriessche', 'Frédéric', 'frederic.vandd@gmail.com', 'h', '0494811164', 0, NULL, NULL, '1992-09-13', 5),
(143, 'Sman3133', '108112f3eeadae1c0ec30b3b2cb6356dd9311edb', 106, 'Vicca', 'Manuel', 'sman3133@gmail.com', 'h', '0471/21.49.25', 1, NULL, NULL, '1993-05-30', 5),
(144, 'igor mono', 'fc422bd62ec3dc70c5528382dd310391ae4cfaf8', 79, 'Jeanmotte', 'Andy', 'andy.jeanmotte@gmail.com', 'h', '0483223282', 1, NULL, NULL, '1997-08-22', 5),
(145, 'MetaxLight', '478815f3115a46d25e77053eb9d37ec120c68e01', NULL, 'Vanaubel', 'Kévin', 'sglight@hotmail.com', 'h', '0478/79.71.75', 0, NULL, NULL, '1990-01-02', 5),
(146, 'buenoC6', '3879f435ec7e634eb027895482dcc89d563ec38e', NULL, 'Moins', 'Alexian', 'alexian.moins@outlook.com', 'h', '0478797496', 0, NULL, NULL, '1997-05-16', 5),
(147, 'OPMaRSs', '52e83d3d3391ff79f57764a2867f10b745c08604', NULL, 'Dupont', 'Arthur', 'DarK_MaRSs@live.be', 'h', '', 0, NULL, NULL, '1997-06-09', 5),
(148, 'Mikeman', 'd275138c68a8f993d16c82eaf8364cb602ad95b5', NULL, 'Demeulder', 'Mike', 'demeuldermike@hotmail.com', 'h', '0473368286', 0, NULL, NULL, '1993-07-07', 5),
(149, 'Katnus', 'd7151d0e8080f25ff13ea0493410187e603bae23', NULL, 'Seb', 'Daubresse', 'priamsc2@gmail.com', 'h', '0478709261', 0, NULL, NULL, '1996-01-03', 5),
(150, 'wooligan', '1ffcada64ae82d857561e955867c8e9e2a89048d', NULL, 'Dufour', 'Laurent', 'thebigredonelau@gmail.com', 'h', '0493111566', 0, NULL, NULL, '1993-06-24', 5),
(151, 'ducoman', '4d0fb475b242228032cbdf6d53924d2538df037b', 46, 'dubois', 'corentin', 'corentindubois575@gmail.com', 'h', '0495736691', 1, NULL, NULL, '1991-07-01', 5),
(152, 'RageManSenior', 'b95a5917d9fc8bea2955d70bdd2d1d2214c89e3a', NULL, 'spruyt', 'gabriel', 'gabrieldu7000@hotmail.com', 'h', '0486545338', 0, NULL, NULL, '1992-12-04', 5),
(153, 'xxroroxx', '9fa04a48d15f53b8cfbf0f23ccf36681a9ecca76', NULL, 'Crombez', 'Rodrigue', 'rodrigue_crombez@hotmail.com', 'h', '0479267818', 0, NULL, NULL, '1995-07-08', 5),
(154, 'AsylumCoven', '95bae0103bf8391bcd93bb57708571d98b390a0e', NULL, 'Mele', 'Santino', 'Happythaiboat@gmail.com', 'h', '0495833002', 0, NULL, NULL, '1992-03-20', 5),
(155, 'Fyren', '05486b379c5df02c85b765d38be335726c4aaeda', 42, 'Wouters', 'Nicolas', 'nicolas_wouters@hotmail.com', 'h', '0478/181908', 1, NULL, NULL, '1987-07-07', 5),
(156, 'handsome smurf', '3af2ff48031be9490da2b770ebd30dff7d35d685', 29, 'Vanlerberghe', 'Seppe', 'sepke_0016@hotmail.com', 'h', '', 1, NULL, NULL, '1992-04-19', 5),
(157, 'Beno50', '2836c0a2497a7e57ddf427d52f1b1c846bf6e022', NULL, 'Wattiez', 'Benoit', 'benwatter@hotmail.com', 'h', '0498153265', 1, NULL, NULL, '1993-05-22', 5),
(158, 'Shoutmog', '49a1609142e500aaa7636caafc413666dfd9de56', NULL, 'Surin', 'Thierry', 'Bestt_061106@live.be', 'h', '0471855463', 1, NULL, NULL, '1992-08-11', 5),
(159, 'Gs DeadLine56', '3e2cc79db5c1a4509f2e21f098fb6e5f33314667', NULL, 'Gallopyn', 'Romain', 'mydeadline56@gmail.com', 'h', '0492852451', 0, NULL, NULL, '1993-06-09', 5),
(160, 'THEDEVASTATOR', '3a78b1105b42837bd46eb7469f1b27aefde1824a', NULL, 'Boulahya', 'Saad', 'Boulahya24@gmail.com', 'h', '0498619199', 0, NULL, NULL, '1999-04-24', 5),
(161, 'ToSu91', '69e8638bac694881baa97585f7f235e7a7f1caec', NULL, 'surin', 'thomas', 'ythomass123@hotmail.com', 'h', '0493739870', 1, NULL, NULL, '1991-07-25', 5),
(162, 'deadlive', '38f0ecbcf15531f3da1c6df72ebcd3d0decd8ceb', NULL, 'salaris', 'flavio', 'flavio4_3_0@hotmail.com', 'h', '0473663901', 1, NULL, NULL, '1987-10-23', 5),
(163, 'Loraline', '8e362f42715ee7b0a3c7ce4f8319b30b4ce6f17a', 70, 'Schils', 'Céline', 'celine.schils@live.fr', 'f', '', 1, NULL, NULL, '1996-08-27', 5),
(164, 'Liytøse', 'ee0a39aae1f45f82e3b41a985f5c2a9c18ac433d', 67, 'Cellières', 'Benjamin', 'benjamincellieres@hotmail.com', 'h', '3271712056', 1, NULL, NULL, '1994-07-22', 5),
(165, 'samarïtan', '4639ae317599466f19b8e12e6d727ca939dddcc9', NULL, 'nederlandt', 'nicolas', 'nederlandtnicolas@hotmail.com', 'h', '0471281191', 1, NULL, NULL, '1995-07-20', 5),
(166, 'PuLse Olen', 'e5ef38eab0cde28164d1980dccd1a82c906509ea', NULL, 'Uytterhaegen', 'Louis', 'louis_uyt@hotmail.com', 'h', '0477/697332', 1, NULL, NULL, '1992-07-30', 5),
(167, 'Torakh', 'f3173fce1f495be99b80d0cffa5caf4c367e3f86', NULL, 'Salvaggio', 'Samuel', 'samuelsalvaggio@ymail.com', 'h', '0478699111', 1, NULL, NULL, '1991-09-02', 5),
(168, 'giovanbaba', 'ef83f6d61000e73b857be1c7bf939e71f93e7aec', 19, 'Fragapane', 'giovanni', 'giovanni.fragapane@gmail.com', 'h', '0479515692', 1, NULL, NULL, '1989-10-28', 5),
(169, 'Yasukiro', '2094f1f5b7e29ab881e6c9709f1bc818894751b9', NULL, 'Mazzuca', 'Michaël', 'mazzuca.michael@live.be', 'h', '0499180270', 1, NULL, NULL, '1991-07-04', 5),
(170, 'RaKyora', '2a204a66645c1d065546fa5fea5d3ad060108329', NULL, 'DAscanio', 'Julien', 'goup_x@hotmail.com', 'h', '0494218783', 1, NULL, NULL, '1991-06-21', 5),
(171, 'cloud1213', '76de4f6d78f65c5ce0f93daeecb3b8c2afff9b75', NULL, 'Duhain', 'Antoine', 'antoine_duhain2@hotmail.be', 'h', '0496473370', 1, NULL, NULL, '1991-11-22', 5),
(172, 'Belgium Flag DzX', '2ffb2b8126d5fda09f44c70c4cd5155674b58bd1', 30, 'Rucquoy', 'Randy', 'drazixx.gamer@hotmail.fr', 'h', '0484/75.94.38', 1, NULL, NULL, '1995-07-02', 5),
(173, 'China', 'dd51f774ce9fc77e0bdc3d29fb77f3a12a85e50f', NULL, 'degreve', 'olivier', 'degreveolivier@hotmail.com', 'h', '', 1, NULL, NULL, '1993-11-15', 5),
(174, 'qodex', '24286501eaaf918d5b923a4d8adeede02fab008a', NULL, 'Boels', 'Diego', 'diego.boels@hotmail.com', 'h', '0479355441', 1, NULL, NULL, '1991-06-03', 5),
(175, 'hfkill', '5702fda9f34fa0888c70bd008b6deb797aeaeec6', NULL, 'hero', 'florent', 'heroflorent@hotmail.fr', 'h', '0497393611', 0, NULL, NULL, '1997-01-08', 5),
(176, 'Blakcat', '5104b19a4475d5e982b4c4189f37e1d91e3c1ad1', NULL, 'El kaouri', 'Hamza', 'hamza_el_kaouri@hotmail.fr', 'h', '0486855775', 0, NULL, NULL, '1993-06-22', 5),
(177, 'Chillsforyou', '9b96e46274414df983f0540197d3db79b92f1de0', 69, 'Aurélien', 'Cancilleri', 'cansi4u@gmail.com', 'h', '33652946663', 1, NULL, NULL, '1989-01-18', 5),
(178, 'Morgasme', 'eedf49027ad38932e0db9030bcf175bd9cedc33e', 27, 'tollet', 'morgan', 'morgantollet@gmail.com', 'h', '0477065989', 1, NULL, NULL, '1992-08-20', 5),
(179, 'Unexard', 'ecb7b1894138c389e7c4726ca000966846ffc06c', 95, 'Roman', 'Renaud', 'Unexard@hotmail.com', 'h', '0499335118', 1, NULL, NULL, '1992-03-06', 5),
(180, 'Madixti', 'd57500c85159de7fd839172914114530e7f5b3d4', 28, 'De Geynst', 'Rodolphe', 'rodolphe.degeynst@gmail.com', 'h', '0032478130320', 1, NULL, NULL, '1991-04-30', 5),
(181, 'Florentcle', 'ce350673627e5625ecaed7dae581b4856f44c94f', NULL, 'Fritsche', 'Florent', 'sangoku1998@hotmail.com', 'h', '', 1, NULL, NULL, '1998-01-27', 5),
(182, 'bryan6mepu', 'ab9ae1a61dcb520b0e56ecb71eab3a5878c83379', NULL, 'bryan', 'joly', 'leroibryan@hotmail.com', 'h', '0497550037', 1, NULL, NULL, '1997-12-02', 5),
(183, 'batllegame', '9a4a45bcec1784db74e79bee7c65145f14ed9bc4', NULL, 'steven', 'joly', 'batllegame@gmail.com', 'h', '0472505802', 1, NULL, NULL, '1992-08-28', 5),
(184, 'Lasti', '754017bf14cca6216f93c624f95aa6a961a961df', NULL, 'Tyck', 'Geoffrey', 'tyckgeoffrey@gmail.com', 'h', '', 0, NULL, NULL, '1997-01-03', 5),
(185, 'FroZen', '7adfd1322b1064318a21cef44e283c7840d034fe', NULL, 'Dormal', 'Maxime', 'maxime--44088@hotmail.com', 'h', '', 0, NULL, NULL, '1998-05-03', 5),
(186, 'Artikthor', '8d5d425b86ec32c9fff9a2ba8aa8054a0c2e2637', NULL, 'Faes', 'Sébatsien', 'thesebiseb@gmail.com', 'h', '0475 53 79 60', 1, NULL, NULL, '1993-07-04', 5),
(187, 'Orceus', '5fb3947a146c172a8e5d0d72955147ea7336a866', NULL, 'Chaidron', 'Sébastien', 'legendaris@hotmail.be', 'h', '0487362972', 1, NULL, NULL, '1992-12-22', 5),
(188, 'vindoze', '3b2c90032b553a683314b614b871961e8e2f4546', 26, 'Tristan', 'Ledru', 'tristan.ledru@gmail.com', 'h', '0496850169', 1, NULL, NULL, '1990-03-12', 5),
(189, 'wiwi0123', '244de1d23db221f7012ccbb2593c2b923284615b', 22, 'erwan', 'dufour', 'erwandufour@gmail.com', 'h', '0475454533', 1, NULL, NULL, '1990-01-14', 5),
(190, 'Drêdack', '2656c2885316f9a68d43f45151d8e201519eeb33', 24, 'Dubois', 'Sébastien', 'seb-.dubois@hotmail.com', 'h', '0498145440', 1, NULL, NULL, '1991-11-11', 5),
(191, 'Macphalin', 'c5b8daa1764d4405b304f663e00660f11c678d12', 25, 'VR', 'Jimmy', 'J.vanrotthem@gmail.com', 'h', '0498287741', 1, NULL, NULL, '1992-03-28', 5),
(192, 'Kr0usty', '735461cde7b319aa97156d200a32d2f038848cea', 48, 'Cambier', 'Guillaume', 'Cambier.Guillaume@hotmail.com', 'h', '0474399161', 1, NULL, NULL, '1993-01-11', 5),
(193, 'adri0413', 'a01c718b7823e1727ae12820564e5223983ed836', 23, 'pottiez', 'adrien', 'adrien.pot@hotmail.com', 'h', '0476 88 33 04', 1, NULL, NULL, '1991-12-20', 5),
(194, 'Guirlande', '3c29eb6613021783ceb81bbb2bec9e0381ba9619', NULL, 'Poulain', 'Damien', 'damienpoulain@gmail.com', 'h', '0477048835', 0, NULL, NULL, '1991-08-02', 5),
(195, 'Navarro', 'b89ae8d33640f08ae79e5e9b877e7ad6d5b89dd6', NULL, 'Cerca Mota', 'François', 'francois.cercamota@gmail.com', 'h', '0479177676', 1, NULL, NULL, '1991-10-14', 5),
(196, 'sleve', '044e761c217b6066696f5d7cc194b8f729c82f94', 52, 'thomaere', 'maxime', 'sleve01@msn.com', 'h', '069228663', 1, NULL, NULL, '1990-01-26', 5),
(197, 'eystornt', '8ed1bb94cbba32682e6429aefdae11f7f5e30bec', 21, 'Govaert', 'Simon', 'eystornt@hotmail.com', 'h', '0474224507', 1, NULL, NULL, '1990-02-07', 5),
(198, 'supertinez', '730f62222133f7fec80dc1cd55b51d2e3467e5d8', 54, 'thomaere', 'martin', 'martinthomaere@hotmail.fr', 'h', '0478595536', 1, NULL, NULL, '1992-04-29', 5),
(199, 'Broflovsky', '4b4b04529d87b5c318702bc1d7689f70b15ef4fc', 53, 'Vandeputte', 'Sébastien', 'seeb@live.be', 'h', '0497029191', 1, NULL, NULL, '1992-09-17', 5),
(200, 'Mizark', 'c289510899883412b7720eb989c1586d4a554263', 20, 'Clocquet', 'Xavier', 'xavier.clocquet@gmail.com', 'h', '0483/600.526', 1, NULL, NULL, '1991-01-27', 5),
(201, 'Volgrim', 'c263dea0276f040247ca660fa50fd042ed844482', 18, 'Sosson', 'Thomas', 'thomas.sosson@gmail.com', 'h', '0494038740', 1, NULL, NULL, '1990-10-21', 5),
(202, 'subbyy', '8f50afa605ae31c9fcb4f6a51dee2bd2a17cea5b', NULL, 'Lefevre', 'Julien', 'julien.lefevre92@gmail.com', 'h', '', 0, NULL, NULL, '1992-11-10', 5),
(203, 'mrtoshio', '3ae91d246856ac122f4c9f38f231b6f8b23f246b', 17, 'zorai', 'Abdllatif', 'shazroth@gmail.com', 'h', '0498254327', 1, NULL, NULL, '1990-12-06', 5),
(204, 'Louza', 'c850058f4dde2e4729d0cfb05abfbfb03af91dcd', 55, 'Pauwels', 'David', 'jeantuiles19@hotmail.fr', 'h', '', 1, NULL, NULL, '1990-01-17', 5),
(205, 'Soyo', '9f3cbd198f530cb43139dc0a533a51b62f21e495', 64, 'VAN NEROM', 'Yohan', 'barbebleu464@gmail.com', 'h', '0477262250', 1, NULL, NULL, '1994-02-13', 5),
(206, 'Bumblebee', 'a9c323161628887f5fdfb06f6d62706329ade520', NULL, 'Ouafik', 'Youness', 'nessyou22@live.be', 'h', '0472073229', 0, NULL, NULL, '1993-11-22', 5),
(207, 'HyzoWeed', 'a8fbbf6b4535999fc9fed4f65e8275b79a1ad26a', 63, 'Rigaux', 'Cantin', 'cantin1400@gmail.com', 'h', '0478/54.77.28', 1, NULL, NULL, '1994-08-11', 5),
(208, 'Yellowpit', 'f04406f524dbd2d8c12fc4006e69f08d68fc15ea', NULL, 'torreele', 'peter', 'peter.torreele@gmail.com', 'h', '33478184237', 0, NULL, NULL, '1988-09-12', 5),
(209, 'KaMoKyu', 'fd7826eedd1a09eafedd3911a301a171ade737f8', 13, 'Vanden Dries', 'Virginie', 'vvdries@hotmail.com', 'f', '', 1, NULL, NULL, '1982-03-23', 5),
(210, 'GRAPHH', '2526949983381e3b2711dd9f728233d536694ada', 94, 'Daras', 'Johan', 'johan.daras@gmail.com', 'h', '32471870031', 1, NULL, NULL, '1988-10-02', 5),
(211, 'luffy0612', '2ea347c6196bdd8072c85b1cd7094b493d559347', NULL, 'Deweweire', 'Julien', 'joly.steven@outlook.com', 'h', '0032498050160', 0, NULL, NULL, '1992-07-20', 5),
(212, 'oculus', 'f2a143eb7ea19980f8276345de088aeab74d75ed', NULL, 'kevin', 'flamant', '', '', '', 1, NULL, NULL, NULL, 5),
(213, 'xxbitter', '13dedef8b119d9f0ce7a8b806904a64e5f3561ee', NULL, 'demeulenaere', 'jonas', '', '', '', 1, NULL, NULL, NULL, 1),
(214, 'Brenda', 'e156bbc5ceceeb6fda9be0b72d4a265ea1b40f79', NULL, 'Bakhtaoui', 'Alessia', 'bakhtaoui.alessia@gmail.com', 'f', '0496913155', 1, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `joueurs_groupes`
--

CREATE TABLE IF NOT EXISTS `joueurs_groupes` (
  `id_joueur` int(10) unsigned NOT NULL,
  `id_groupe` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_joueur`,`id_groupe`),
  KEY `id_groupe` (`id_groupe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `joueurs_groupes`
--

INSERT INTO `joueurs_groupes` (`id_joueur`, `id_groupe`) VALUES
(6, 60),
(29, 60),
(51, 60),
(97, 60),
(106, 60),
(111, 60),
(138, 60),
(171, 60),
(199, 60),
(47, 61),
(49, 61),
(50, 61),
(53, 61),
(62, 61),
(91, 61),
(148, 61),
(163, 61),
(195, 61),
(25, 62),
(56, 62),
(82, 62),
(90, 62),
(126, 62),
(127, 62),
(129, 62),
(166, 62),
(170, 62),
(23, 63),
(30, 63),
(44, 63),
(46, 63),
(55, 63),
(83, 63),
(128, 63),
(196, 63),
(198, 63);

-- --------------------------------------------------------

--
-- Structure de la table `joueurtournoi`
--

CREATE TABLE IF NOT EXISTS `joueurtournoi` (
  `id_JT` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_joueur` int(10) unsigned NOT NULL,
  `id_tournoi` int(10) unsigned NOT NULL,
  `pseudoJeux` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_JT`),
  KEY `id_tournoi` (`id_tournoi`),
  KEY `id_joueur` (`id_joueur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1008 ;

--
-- Contenu de la table `joueurtournoi`
--

INSERT INTO `joueurtournoi` (`id_JT`, `id_joueur`, `id_tournoi`, `pseudoJeux`) VALUES
(3, 7, 1, 'LittleS4T4N'),
(4, 7, 2, ''),
(5, 7, 4, ''),
(6, 8, 1, 'Krogoh'),
(7, 8, 2, ''),
(8, 8, 4, ''),
(9, 10, 2, ''),
(10, 10, 4, ''),
(12, 12, 1, 'Rawnur'),
(13, 14, 1, 'Luke'),
(14, 14, 4, ''),
(15, 17, 1, 'Spytte is Coming'),
(23, 18, 1, 'Mumbly'),
(24, 19, 1, 'Zarbisi69'),
(25, 20, 1, 'Métronic'),
(26, 22, 1, 'lamasticoFogzyyy'),
(34, 26, 1, 'Ionï'),
(35, 27, 1, 'xemnas192'),
(36, 27, 2, ''),
(37, 27, 4, ''),
(39, 29, 1, 'Bùliwààyf'),
(42, 31, 1, 'DestroyedParadis'),
(43, 32, 1, 'Sl33p3r012'),
(44, 32, 2, ''),
(45, 32, 4, ''),
(48, 34, 1, 'Tøxigrinta'),
(49, 35, 1, 'brasix'),
(52, 37, 1, 'Nydda'),
(53, 38, 1, 'Wylénia'),
(54, 39, 1, 'Nyùw'),
(55, 40, 1, 'Rothesse'),
(56, 41, 1, 'Hamsterguys'),
(57, 42, 1, 'rodskilzz'),
(58, 43, 1, 'ImSoTrick'),
(59, 44, 3, ''),
(60, 45, 1, 'ousermont'),
(61, 45, 2, ''),
(62, 45, 4, ''),
(63, 46, 1, 'Skynÿx'),
(64, 46, 2, ''),
(65, 46, 3, ''),
(66, 46, 4, ''),
(71, 48, 1, 'HexceedXIV'),
(78, 52, 1, 'Horokrist'),
(81, 54, 1, 'b0u'),
(86, 57, 1, 'BelgiumFlag Zey'),
(87, 58, 1, 'Thedarktartines'),
(88, 59, 1, 'Eklatpif'),
(89, 59, 2, ''),
(90, 59, 4, ''),
(92, 61, 1, 'Eklatburnes'),
(93, 61, 2, ''),
(95, 63, 1, 'Łee Şin'),
(96, 64, 1, '404NameNotFound'),
(97, 65, 1, 'Seyfur'),
(101, 69, 1, 'Monkey D Allan'),
(103, 61, 4, ''),
(105, 72, 1, 'Playas6150'),
(106, 73, 1, 'Origamie'),
(107, 74, 1, 'Worst Fiddle EUW'),
(108, 75, 1, 'SCARY95'),
(109, 76, 1, 'Dr Miika'),
(110, 77, 1, 'Lyktos'),
(111, 78, 2, ''),
(112, 78, 4, ''),
(113, 79, 1, 'Multidoting'),
(114, 14, 2, ''),
(115, 80, 1, 'Maluuuu'),
(116, 81, 1, 'Tomirock'),
(122, 84, 1, 'Ander BloodEyes'),
(123, 84, 2, ''),
(124, 84, 4, ''),
(127, 87, 1, 'LesG Kovers'),
(134, 92, 1, 'Webolivieri'),
(135, 93, 1, 'Codu'),
(136, 94, 1, 'Cpt xFluffy'),
(137, 96, 1, 'Hortator'),
(138, 97, 2, ''),
(139, 97, 3, ''),
(140, 97, 4, ''),
(141, 98, 1, 'Zankisen'),
(142, 99, 1, 'Angakuit'),
(146, 103, 1, 'lukasobito'),
(147, 104, 1, 'craywyn'),
(148, 105, 1, 'Kaethuseth'),
(149, 106, 4, ''),
(150, 107, 1, 'Great Siena'),
(151, 108, 1, 'Skayard'),
(152, 109, 1, 'BEL BlackDiamond'),
(153, 110, 1, 'XUltiX'),
(157, 112, 1, 'Soccielo'),
(158, 113, 1, 'gahkin'),
(159, 114, 1, 'Popol au Cirque'),
(160, 115, 1, 'kazuhya'),
(161, 116, 1, 'trogalt'),
(162, 117, 1, 'crisedefoi'),
(163, 118, 1, 'Er3az'),
(164, 106, 2, ''),
(165, 106, 3, ''),
(166, 119, 1, 'Chat Ringan'),
(167, 120, 1, 'machabastien'),
(168, 120, 2, ''),
(169, 120, 4, ''),
(170, 121, 1, 'Galdesh'),
(171, 122, 1, 'fox2903'),
(172, 123, 1, 'Greybak'),
(173, 124, 1, 'Banksyz'),
(174, 125, 1, 'Shethan'),
(177, 127, 1, 'axythony'),
(178, 127, 3, ''),
(181, 129, 1, 'skuyz'),
(182, 129, 3, ''),
(184, 131, 2, ''),
(185, 132, 1, 'Zayzo'),
(186, 133, 1, 'Waelan'),
(187, 134, 1, 'ATMbigslick'),
(188, 135, 1, 'VeryBadLegend'),
(189, 136, 1, 'Dekama'),
(190, 137, 1, 'I MET FNATIC IRL'),
(191, 138, 3, ''),
(192, 138, 4, ''),
(193, 29, 3, ''),
(194, 139, 4, ''),
(195, 140, 1, 'Vueiv'),
(196, 141, 1, 'Ohgreat'),
(197, 142, 1, 'shasha07'),
(198, 143, 1, 'sman3133'),
(199, 144, 1, 'igor mono'),
(200, 145, 1, 'MetaxLight'),
(201, 146, 1, 'buenoC6'),
(202, 147, 1, 'OPMaRSs'),
(203, 148, 3, ''),
(205, 148, 1, 'Dieumeulder'),
(206, 149, 1, 'Katnus'),
(207, 150, 2, ''),
(208, 150, 4, ''),
(209, 151, 1, 'Hi I Support'),
(210, 152, 1, 'RageManSenior'),
(211, 153, 1, 'XxroroxX'),
(212, 154, 1, 'AsylumCoven'),
(213, 155, 1, 'Fyren87'),
(214, 156, 1, 'handsome smurf'),
(215, 157, 1, 'Beno50'),
(216, 158, 1, 'Shoutmog'),
(217, 159, 1, 'DeadLine56'),
(218, 160, 1, 'THEDEVASTATOR24'),
(219, 161, 1, 'ToSu91'),
(220, 162, 1, 'deadlive'),
(222, 164, 1, 'Dks liytøse'),
(223, 165, 1, 'samarïtan'),
(225, 167, 1, 'Torakh'),
(227, 169, 1, 'Yasukiro'),
(230, 172, 1, 'Belgium Flag DzX'),
(231, 173, 1, 'MSX Chiną'),
(232, 174, 1, 'qodeX'),
(233, 175, 2, ''),
(234, 12, 2, ''),
(236, 24, 4, ''),
(237, 176, 1, 'Blakcat'),
(238, 177, 1, 'Chills4u'),
(239, 178, 1, 'Morgasmique'),
(241, 180, 1, 'Madixti'),
(242, 181, 1, 'Florentcle'),
(243, 182, 1, 'bryan6mepu'),
(244, 183, 1, 'batllegame'),
(245, 184, 1, 'lTheTrito0nl'),
(246, 185, 2, ''),
(247, 186, 1, 'Artikthor'),
(248, 187, 1, 'ORCEUS'),
(249, 188, 1, 'WindowsBreaker'),
(250, 189, 1, 'wiwi'),
(251, 190, 1, 'dredack'),
(252, 191, 1, 'Macphalin'),
(254, 193, 1, 'Professor Shen'),
(255, 194, 1, 'Guirlande'),
(264, 202, 1, 'subways'),
(267, 205, 1, 'Soyo'),
(268, 206, 1, 'Bùmblebëe'),
(269, 207, 1, 'HyzoWeed'),
(270, 208, 1, 'yellowpit'),
(271, 209, 1, 'KaMoKyu'),
(272, 210, 1, 'beheadedbyme'),
(273, 211, 1, 'luffy0612'),
(321, 6, 1, 'MyBallzAreEmpty'),
(322, 6, 2, ''),
(323, 6, 3, ''),
(363, 47, 1, 'lamborginiss'),
(364, 47, 2, ''),
(365, 47, 3, ''),
(366, 47, 4, ''),
(367, 47, 5, 'Lambox #2917'),
(374, 179, 1, 'Unexard'),
(375, 179, 5, 'Unexard #2460'),
(382, 100, 1, 'MrNedria'),
(383, 100, 5, 'Nedria #2996'),
(390, 70, 1, 'Echofox'),
(391, 70, 5, 'Echofox #2924'),
(398, 67, 1, 'Touzamis'),
(399, 67, 5, 'Touza #2628'),
(406, 71, 1, 'Droledami'),
(407, 71, 5, 'Droledami #2473'),
(414, 68, 1, 'Rayalok'),
(415, 68, 5, 'Rayalok #2449'),
(422, 66, 1, 'Delikan57'),
(423, 66, 5, 'Delikan57 #2256'),
(430, 102, 1, 'Alfatta'),
(431, 102, 5, 'Ebaral #2123'),
(438, 101, 1, 'Alfattarte'),
(439, 101, 5, 'Alfatta #2772'),
(443, 13, 5, 'Guerrier666 #2345'),
(450, 28, 1, 'witchh doctor'),
(451, 28, 5, 'Witch Doctor #2256'),
(471, 95, 5, 'Pinguinz #2232'),
(564, 49, 1, 'Happy Nems'),
(565, 49, 2, ''),
(566, 49, 3, ''),
(567, 49, 4, ''),
(574, 86, 1, 'Sephïres'),
(575, 86, 2, ''),
(582, 85, 1, 'Niñian'),
(583, 85, 2, ''),
(590, 192, 1, 'LR Kr0usty'),
(591, 192, 2, ''),
(598, 89, 1, 'Nucleaz'),
(599, 89, 2, ''),
(606, 88, 1, 'benauto'),
(607, 88, 2, ''),
(617, 203, 1, 'i have big hook'),
(618, 203, 2, ''),
(619, 203, 4, ''),
(629, 201, 1, 'o Volgrim o'),
(630, 201, 2, ''),
(631, 201, 4, ''),
(641, 200, 1, 'nsa mizark'),
(642, 200, 2, ''),
(643, 200, 4, ''),
(653, 168, 1, 'Giovanbaba'),
(654, 168, 2, ''),
(655, 168, 4, ''),
(665, 197, 1, 'symonstornt'),
(666, 197, 2, ''),
(667, 197, 4, ''),
(674, 130, 1, 'Alcyoal'),
(675, 130, 5, 'Alcyol #2207'),
(682, 60, 1, 'Entamoeba'),
(683, 60, 2, ''),
(687, 36, 1, 'Téflon'),
(691, 33, 1, 'Artanis Pirgis'),
(698, 195, 1, 'Souloxx'),
(699, 195, 3, ''),
(706, 126, 1, 'Shyrøw'),
(707, 126, 3, ''),
(714, 171, 1, 'gorgzilla'),
(715, 171, 3, ''),
(722, 170, 1, 'RaKyora'),
(723, 170, 3, ''),
(730, 62, 1, 'SGi JankulaseK'),
(731, 62, 3, ''),
(738, 166, 1, 'PuLse Olen'),
(739, 166, 3, ''),
(746, 91, 2, ''),
(747, 91, 3, ''),
(754, 90, 2, ''),
(755, 90, 3, ''),
(765, 23, 1, 'Thaerith'),
(766, 23, 2, ''),
(767, 23, 3, ''),
(780, 83, 1, 'Wadosh'),
(781, 83, 2, ''),
(782, 83, 3, ''),
(783, 83, 4, ''),
(790, 82, 2, ''),
(791, 82, 3, ''),
(804, 50, 1, 'NamaTrøX'),
(805, 50, 2, ''),
(806, 50, 3, ''),
(807, 50, 4, ''),
(814, 163, 1, 'Loralineee'),
(815, 163, 3, ''),
(822, 55, 1, 'zarak'),
(823, 55, 3, ''),
(830, 53, 1, 'iGlooW'),
(831, 53, 3, ''),
(838, 56, 1, 'Salcatin'),
(839, 56, 3, ''),
(846, 25, 1, 'RectoO'),
(847, 25, 3, ''),
(908, 51, 1, 'gosh101'),
(909, 51, 2, ''),
(910, 51, 3, ''),
(911, 51, 4, ''),
(921, 111, 1, 'Ditan'),
(922, 111, 3, ''),
(923, 111, 4, ''),
(930, 128, 1, 'thotwith'),
(931, 128, 3, ''),
(941, 204, 1, 'Louza'),
(942, 204, 2, ''),
(943, 204, 4, ''),
(956, 199, 1, 'Broflovsky'),
(957, 199, 2, ''),
(958, 199, 3, ''),
(959, 199, 4, ''),
(972, 198, 1, 'supertinez'),
(973, 198, 2, ''),
(974, 198, 3, ''),
(975, 198, 4, ''),
(988, 196, 1, 'SLEVEJOHNSON'),
(989, 196, 2, ''),
(990, 196, 3, ''),
(991, 196, 4, ''),
(1004, 30, 1, 'Sponos'),
(1005, 30, 2, ''),
(1006, 30, 3, ''),
(1007, 30, 4, '');

-- --------------------------------------------------------

--
-- Structure de la table `manches_equipes`
--

CREATE TABLE IF NOT EXISTS `manches_equipes` (
  `id_match` int(10) unsigned NOT NULL,
  `numero_manche` int(10) unsigned NOT NULL,
  `id_equipe` int(11) unsigned NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_match`,`numero_manche`,`id_equipe`),
  KEY `id_equipe` (`id_equipe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `manches_equipes`
--

INSERT INTO `manches_equipes` (`id_match`, `numero_manche`, `id_equipe`, `score`) VALUES
(922, 1, 23, 1),
(922, 1, 26, 0),
(998, 1, 63, 0),
(998, 1, 65, 1);

-- --------------------------------------------------------

--
-- Structure de la table `manches_joueurs`
--

CREATE TABLE IF NOT EXISTS `manches_joueurs` (
  `id_match` int(10) unsigned NOT NULL,
  `numero_manche` int(10) unsigned NOT NULL,
  `id_joueur` int(11) unsigned NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_match`,`numero_manche`,`id_joueur`),
  KEY `manches_joueurs_ibfk_2` (`id_joueur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `manches_joueurs`
--

INSERT INTO `manches_joueurs` (`id_match`, `numero_manche`, `id_joueur`, `score`) VALUES
(994, 1, 6, 10);

-- --------------------------------------------------------

--
-- Structure de la table `matchs`
--

CREATE TABLE IF NOT EXISTS `matchs` (
  `id_match` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tournoi` int(10) unsigned NOT NULL,
  `nbr_manche` int(11) NOT NULL DEFAULT '1',
  `teamParMatch` int(10) unsigned NOT NULL DEFAULT '2',
  `nom_match` varchar(255) DEFAULT NULL,
  `looser_bracket` int(11) NOT NULL DEFAULT '0',
  `heure` datetime DEFAULT NULL,
  `id_parent` int(10) unsigned DEFAULT NULL,
  `id_enfant1` int(10) unsigned DEFAULT NULL,
  `id_enfant2` int(10) unsigned DEFAULT NULL,
  `id_groupe` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_match`),
  KEY `id_tournoi` (`id_tournoi`,`id_parent`),
  KEY `id_parent` (`id_parent`),
  KEY `id_groupe` (`id_groupe`),
  KEY `id_match_arrivee1` (`id_enfant1`),
  KEY `id_match_arrivee2` (`id_enfant2`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1030 ;

--
-- Contenu de la table `matchs`
--

INSERT INTO `matchs` (`id_match`, `id_tournoi`, `nbr_manche`, `teamParMatch`, `nom_match`, `looser_bracket`, `heure`, `id_parent`, `id_enfant1`, `id_enfant2`, `id_groupe`) VALUES
(922, 1, 1, 2, NULL, 0, '2014-04-05 09:00:00', NULL, NULL, NULL, 56),
(923, 1, 1, 2, NULL, 0, '2014-04-05 09:00:00', NULL, NULL, NULL, 56),
(924, 1, 1, 2, NULL, 0, '2014-04-05 09:00:00', NULL, NULL, NULL, 56),
(925, 1, 1, 2, NULL, 0, '2014-04-05 11:00:00', NULL, NULL, NULL, 56),
(926, 1, 1, 2, NULL, 0, '2014-04-05 11:00:00', NULL, NULL, NULL, 56),
(927, 1, 1, 2, NULL, 0, '2014-04-05 11:00:00', NULL, NULL, NULL, 56),
(928, 1, 1, 2, NULL, 0, '2014-04-05 13:00:00', NULL, NULL, NULL, 56),
(929, 1, 1, 2, NULL, 0, '2014-04-05 13:00:00', NULL, NULL, NULL, 56),
(930, 1, 1, 2, NULL, 0, '2014-04-05 13:00:00', NULL, NULL, NULL, 56),
(931, 1, 1, 2, NULL, 0, '2014-04-05 15:00:00', NULL, NULL, NULL, 56),
(932, 1, 1, 2, NULL, 0, '2014-04-05 15:00:00', NULL, NULL, NULL, 56),
(933, 1, 1, 2, NULL, 0, '2014-04-05 15:00:00', NULL, NULL, NULL, 56),
(934, 1, 1, 2, NULL, 0, '2014-04-05 17:00:00', NULL, NULL, NULL, 56),
(935, 1, 1, 2, NULL, 0, '2014-04-05 17:00:00', NULL, NULL, NULL, 56),
(936, 1, 1, 2, NULL, 0, '2014-04-05 17:00:00', NULL, NULL, NULL, 56),
(937, 1, 1, 2, NULL, 0, '2014-04-05 09:00:00', NULL, NULL, NULL, 57),
(938, 1, 1, 2, NULL, 0, '2014-04-05 09:00:00', NULL, NULL, NULL, 57),
(939, 1, 1, 2, NULL, 0, '2014-04-05 09:00:00', NULL, NULL, NULL, 57),
(940, 1, 1, 2, NULL, 0, '2014-04-05 11:00:00', NULL, NULL, NULL, 57),
(941, 1, 1, 2, NULL, 0, '2014-04-05 11:00:00', NULL, NULL, NULL, 57),
(942, 1, 1, 2, NULL, 0, '2014-04-05 11:00:00', NULL, NULL, NULL, 57),
(943, 1, 1, 2, NULL, 0, '2014-04-05 13:00:00', NULL, NULL, NULL, 57),
(944, 1, 1, 2, NULL, 0, '2014-04-05 13:00:00', NULL, NULL, NULL, 57),
(945, 1, 1, 2, NULL, 0, '2014-04-05 13:00:00', NULL, NULL, NULL, 57),
(946, 1, 1, 2, NULL, 0, '2014-04-05 15:00:00', NULL, NULL, NULL, 57),
(947, 1, 1, 2, NULL, 0, '2014-04-05 15:00:00', NULL, NULL, NULL, 57),
(948, 1, 1, 2, NULL, 0, '2014-04-05 15:00:00', NULL, NULL, NULL, 57),
(949, 1, 1, 2, NULL, 0, '2014-04-05 17:00:00', NULL, NULL, NULL, 57),
(950, 1, 1, 2, NULL, 0, '2014-04-05 17:00:00', NULL, NULL, NULL, 57),
(951, 1, 1, 2, NULL, 0, '2014-04-05 17:00:00', NULL, NULL, NULL, 57),
(952, 1, 1, 2, NULL, 0, '2014-04-05 09:00:00', NULL, NULL, NULL, 58),
(953, 1, 1, 2, NULL, 0, '2014-04-05 09:00:00', NULL, NULL, NULL, 58),
(954, 1, 1, 2, NULL, 0, '2014-04-05 09:00:00', NULL, NULL, NULL, 58),
(955, 1, 1, 2, NULL, 0, '2014-04-05 11:00:00', NULL, NULL, NULL, 58),
(956, 1, 1, 2, NULL, 0, '2014-04-05 11:00:00', NULL, NULL, NULL, 58),
(957, 1, 1, 2, NULL, 0, '2014-04-05 11:00:00', NULL, NULL, NULL, 58),
(958, 1, 1, 2, NULL, 0, '2014-04-05 13:00:00', NULL, NULL, NULL, 58),
(959, 1, 1, 2, NULL, 0, '2014-04-05 13:00:00', NULL, NULL, NULL, 58),
(960, 1, 1, 2, NULL, 0, '2014-04-05 13:00:00', NULL, NULL, NULL, 58),
(961, 1, 1, 2, NULL, 0, '2014-04-05 15:00:00', NULL, NULL, NULL, 58),
(962, 1, 1, 2, NULL, 0, '2014-04-05 15:00:00', NULL, NULL, NULL, 58),
(963, 1, 1, 2, NULL, 0, '2014-04-05 15:00:00', NULL, NULL, NULL, 58),
(964, 1, 1, 2, NULL, 0, '2014-04-05 17:00:00', NULL, NULL, NULL, 58),
(965, 1, 1, 2, NULL, 0, '2014-04-05 17:00:00', NULL, NULL, NULL, 58),
(966, 1, 1, 2, NULL, 0, '2014-04-05 17:00:00', NULL, NULL, NULL, 58),
(967, 1, 1, 2, NULL, 0, '2014-04-05 09:00:00', NULL, NULL, NULL, 59),
(968, 1, 1, 2, NULL, 0, '2014-04-05 09:00:00', NULL, NULL, NULL, 59),
(969, 1, 1, 2, NULL, 0, '2014-04-05 09:00:00', NULL, NULL, NULL, 59),
(970, 1, 1, 2, NULL, 0, '2014-04-05 11:00:00', NULL, NULL, NULL, 59),
(971, 1, 1, 2, NULL, 0, '2014-04-05 11:00:00', NULL, NULL, NULL, 59),
(972, 1, 1, 2, NULL, 0, '2014-04-05 11:00:00', NULL, NULL, NULL, 59),
(973, 1, 1, 2, NULL, 0, '2014-04-05 13:00:00', NULL, NULL, NULL, 59),
(974, 1, 1, 2, NULL, 0, '2014-04-05 13:00:00', NULL, NULL, NULL, 59),
(975, 1, 1, 2, NULL, 0, '2014-04-05 13:00:00', NULL, NULL, NULL, 59),
(976, 1, 1, 2, NULL, 0, '2014-04-05 15:00:00', NULL, NULL, NULL, 59),
(977, 1, 1, 2, NULL, 0, '2014-04-05 15:00:00', NULL, NULL, NULL, 59),
(978, 1, 1, 2, NULL, 0, '2014-04-05 15:00:00', NULL, NULL, NULL, 59),
(979, 1, 1, 2, NULL, 0, '2014-04-05 17:00:00', NULL, NULL, NULL, 59),
(980, 1, 1, 2, NULL, 0, '2014-04-05 17:00:00', NULL, NULL, NULL, 59),
(981, 1, 1, 2, NULL, 0, '2014-04-05 17:00:00', NULL, NULL, NULL, 59),
(982, 1, 1, 2, NULL, 0, '2014-04-05 21:00:00', 986, NULL, NULL, NULL),
(983, 1, 1, 2, NULL, 0, '2014-04-05 21:00:00', 987, NULL, NULL, NULL),
(984, 1, 1, 2, NULL, 0, '2014-04-05 21:00:00', 988, NULL, NULL, NULL),
(985, 1, 1, 2, NULL, 0, '2014-04-05 21:00:00', 989, NULL, NULL, NULL),
(986, 1, 1, 2, NULL, 0, '2014-04-05 23:00:00', 990, NULL, 982, NULL),
(987, 1, 1, 2, NULL, 0, '2014-04-05 23:00:00', 990, NULL, 983, NULL),
(988, 1, 1, 2, NULL, 0, '2014-04-05 23:00:00', 991, NULL, 984, NULL),
(989, 1, 1, 2, NULL, 0, '2014-04-05 23:00:00', 991, NULL, 985, NULL),
(990, 1, 1, 2, NULL, 0, '2014-04-06 01:00:00', 992, 986, 987, NULL),
(991, 1, 1, 2, NULL, 0, '2014-04-06 01:00:00', 992, 988, 989, NULL),
(992, 1, 1, 2, NULL, 0, '2014-04-06 03:00:00', NULL, 990, 991, NULL),
(993, 1, 1, 2, NULL, 0, '2014-04-06 03:00:00', NULL, NULL, NULL, NULL),
(994, 3, 7, 10, NULL, 0, '2014-04-05 18:00:00', NULL, NULL, NULL, 60),
(995, 3, 7, 10, NULL, 0, '2014-04-05 18:00:00', NULL, NULL, NULL, 61),
(996, 3, 7, 10, NULL, 0, '2014-04-05 18:00:00', NULL, NULL, NULL, 62),
(997, 3, 7, 10, NULL, 0, '2014-04-05 18:00:00', NULL, NULL, NULL, 63),
(998, 5, 1, 2, NULL, 0, '2014-04-04 22:10:00', NULL, NULL, NULL, 72),
(999, 5, 1, 2, NULL, 0, '2014-04-04 22:10:00', NULL, NULL, NULL, 72),
(1000, 5, 1, 2, NULL, 0, '2014-04-04 22:40:00', NULL, NULL, NULL, 72),
(1001, 5, 1, 2, NULL, 0, '2014-04-04 22:40:00', NULL, NULL, NULL, 72),
(1002, 5, 1, 2, NULL, 0, '2014-04-04 23:10:00', NULL, NULL, NULL, 72),
(1003, 5, 1, 2, NULL, 0, '2014-04-04 23:10:00', NULL, NULL, NULL, 72),
(1004, 5, 1, 2, NULL, 0, '2014-04-04 22:10:00', NULL, NULL, NULL, 73),
(1005, 5, 1, 2, NULL, 0, '2014-04-04 22:10:00', NULL, NULL, NULL, 73),
(1006, 5, 1, 2, NULL, 0, '2014-04-04 22:40:00', NULL, NULL, NULL, 73),
(1007, 5, 1, 2, NULL, 0, '2014-04-04 22:40:00', NULL, NULL, NULL, 73),
(1008, 5, 1, 2, NULL, 0, '2014-04-04 23:10:00', NULL, NULL, NULL, 73),
(1009, 5, 1, 2, NULL, 0, '2014-04-04 23:10:00', NULL, NULL, NULL, 73),
(1010, 5, 1, 2, NULL, 0, '2014-04-04 23:40:00', NULL, NULL, NULL, 73),
(1011, 5, 1, 2, NULL, 0, '2014-04-04 23:40:00', NULL, NULL, NULL, 73),
(1012, 5, 1, 2, NULL, 0, '2014-04-05 00:10:00', NULL, NULL, NULL, 73),
(1013, 5, 1, 2, NULL, 0, '2014-04-05 00:10:00', NULL, NULL, NULL, 73),
(1014, 5, 1, 2, NULL, 0, '2014-04-04 22:10:00', NULL, NULL, NULL, 74),
(1015, 5, 1, 2, NULL, 0, '2014-04-04 22:10:00', NULL, NULL, NULL, 74),
(1016, 5, 1, 2, NULL, 0, '2014-04-04 22:40:00', NULL, NULL, NULL, 74),
(1017, 5, 1, 2, NULL, 0, '2014-04-04 22:40:00', NULL, NULL, NULL, 74),
(1018, 5, 1, 2, NULL, 0, '2014-04-04 23:10:00', NULL, NULL, NULL, 74),
(1019, 5, 1, 2, NULL, 0, '2014-04-04 23:10:00', NULL, NULL, NULL, 74),
(1020, 5, 1, 2, NULL, 0, '2014-04-04 23:40:00', NULL, NULL, NULL, 74),
(1021, 5, 1, 2, NULL, 0, '2014-04-04 23:40:00', NULL, NULL, NULL, 74),
(1022, 5, 1, 2, NULL, 0, '2014-04-05 00:10:00', NULL, NULL, NULL, 74),
(1023, 5, 1, 2, NULL, 0, '2014-04-05 00:10:00', NULL, NULL, NULL, 74),
(1024, 2, 3, 2, NULL, 0, '2014-04-05 10:00:00', NULL, NULL, NULL, 75),
(1025, 2, 3, 2, NULL, 0, '2014-04-05 12:00:00', NULL, NULL, NULL, 75),
(1026, 2, 3, 2, NULL, 0, '2014-04-05 14:00:00', NULL, NULL, NULL, 75),
(1027, 2, 3, 2, NULL, 0, '2014-04-05 10:00:00', NULL, NULL, NULL, 76),
(1028, 2, 3, 2, NULL, 0, '2014-04-05 12:00:00', NULL, NULL, NULL, 76),
(1029, 2, 3, 2, NULL, 0, '2014-04-05 14:00:00', NULL, NULL, NULL, 76);

-- --------------------------------------------------------

--
-- Structure de la table `matchs_equipes`
--

CREATE TABLE IF NOT EXISTS `matchs_equipes` (
  `id_match` int(10) unsigned NOT NULL,
  `id_equipe` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_match`,`id_equipe`),
  KEY `id_equipe` (`id_equipe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `matchs_equipes`
--

INSERT INTO `matchs_equipes` (`id_match`, `id_equipe`) VALUES
(952, 7),
(957, 7),
(960, 7),
(962, 7),
(966, 7),
(967, 10),
(972, 10),
(975, 10),
(977, 10),
(981, 10),
(937, 13),
(942, 13),
(945, 13),
(947, 13),
(951, 13),
(985, 13),
(952, 14),
(955, 14),
(959, 14),
(963, 14),
(965, 14),
(984, 14),
(953, 18),
(955, 18),
(960, 18),
(961, 18),
(964, 18),
(953, 19),
(956, 19),
(958, 19),
(963, 19),
(966, 19),
(987, 19),
(922, 23),
(927, 23),
(930, 23),
(932, 23),
(936, 23),
(982, 23),
(1024, 23),
(1025, 23),
(937, 24),
(940, 24),
(944, 24),
(948, 24),
(950, 24),
(1027, 24),
(1028, 24),
(938, 25),
(940, 25),
(945, 25),
(946, 25),
(949, 25),
(983, 25),
(986, 25),
(922, 26),
(925, 26),
(929, 26),
(933, 26),
(935, 26),
(954, 30),
(956, 30),
(959, 30),
(962, 30),
(964, 30),
(988, 30),
(967, 31),
(970, 31),
(974, 31),
(978, 31),
(980, 31),
(968, 39),
(970, 39),
(975, 39),
(976, 39),
(979, 39),
(923, 40),
(925, 40),
(930, 40),
(931, 40),
(934, 40),
(982, 40),
(938, 43),
(941, 43),
(943, 43),
(948, 43),
(951, 43),
(968, 44),
(971, 44),
(973, 44),
(978, 44),
(981, 44),
(969, 47),
(971, 47),
(974, 47),
(977, 47),
(979, 47),
(923, 48),
(926, 48),
(928, 48),
(933, 48),
(936, 48),
(989, 48),
(969, 49),
(972, 49),
(973, 49),
(976, 49),
(980, 49),
(984, 49),
(1027, 49),
(1029, 49),
(939, 50),
(941, 50),
(944, 50),
(947, 50),
(949, 50),
(1028, 50),
(1029, 50),
(954, 52),
(957, 52),
(958, 52),
(961, 52),
(965, 52),
(985, 52),
(939, 53),
(942, 53),
(943, 53),
(946, 53),
(950, 53),
(924, 56),
(926, 56),
(929, 56),
(932, 56),
(934, 56),
(1024, 56),
(1026, 56),
(924, 57),
(927, 57),
(928, 57),
(931, 57),
(935, 57),
(983, 57),
(1025, 57),
(1026, 57),
(1004, 58),
(1009, 58),
(1010, 58),
(1012, 58),
(1014, 59),
(1019, 59),
(1020, 59),
(1022, 59),
(1004, 60),
(1006, 60),
(1011, 60),
(1013, 60),
(1005, 61),
(1006, 61),
(1008, 61),
(1012, 61),
(1014, 62),
(1016, 62),
(1021, 62),
(1023, 62),
(998, 63),
(1000, 63),
(1002, 63),
(1015, 64),
(1016, 64),
(1018, 64),
(1022, 64),
(998, 65),
(1001, 65),
(1003, 65),
(1005, 66),
(1007, 66),
(1009, 66),
(1011, 66),
(999, 67),
(1000, 67),
(1003, 67),
(1007, 68),
(1008, 68),
(1010, 68),
(1013, 68),
(1015, 69),
(1017, 69),
(1019, 69),
(1021, 69),
(1017, 70),
(1018, 70),
(1020, 70),
(1023, 70),
(999, 71),
(1001, 71),
(1002, 71);

-- --------------------------------------------------------

--
-- Structure de la table `matchs_joueurs`
--

CREATE TABLE IF NOT EXISTS `matchs_joueurs` (
  `id_match` int(10) unsigned NOT NULL,
  `id_joueur` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_match`,`id_joueur`),
  KEY `id_joueur` (`id_joueur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `matchs_joueurs`
--

INSERT INTO `matchs_joueurs` (`id_match`, `id_joueur`) VALUES
(994, 6),
(997, 23),
(996, 25),
(994, 29),
(997, 30),
(997, 44),
(997, 46),
(995, 47),
(995, 49),
(995, 50),
(994, 51),
(995, 53),
(997, 55),
(996, 56),
(995, 62),
(996, 82),
(997, 83),
(996, 90),
(995, 91),
(994, 97),
(994, 106),
(994, 111),
(996, 126),
(996, 127),
(997, 128),
(996, 129),
(994, 138),
(995, 148),
(995, 163),
(996, 166),
(996, 170),
(994, 171),
(995, 195),
(997, 196),
(997, 198),
(994, 199);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `quand` datetime NOT NULL,
  `invisible` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id_news`, `titre`, `texte`, `quand`, `invisible`) VALUES
(1, 'Serveur fun en ligne', '<H3>COD4 : </H3>\r\nIP : 192.168.10.210\r\n<h3>Unreal Tournament 3 :</h3>\r\nOpérationnel (afficher dans le jeu multijoueur -> LAN)\r\n<h3>Trackamnia :</h3>\r\nOpérationnel', '2014-04-04 22:44:47', 0),
(2, 'Gagnant de Hearthstone', 'Félicitation à Echofox pour sa victoire ! Il a gagné un déjeuner gratuit ce samedi matin !  ', '2014-04-05 04:38:15', 0),
(3, 'Téléchargement COD4', '<a href="cod4.rar">COD4</a>', '2014-04-05 05:08:18', 1),
(4, 'Horaire début des tournois', '<u>League Of legend :</u> 9h00\r\n<u>Call Of duty 4 :</u> 10h00\r\n<u>Unreal Tournament 3 :</u> 12h00\r\n<u>Trackmania :</u> 18h00', '2014-04-05 05:15:23', 0),
(5, 'Un peu de pub', 'Tu aimes le heavy metal et tu as l''humour lourd?\r\n\r\n\r\nhttps://www.facebook.com/pages/Tr%C3%BCe-Funny-Mayhem/261538330566866\r\n\r\nCette page est pour toi ;-)', '2014-04-05 14:07:51', 0),
(6, 'Horaire soirée de samedi', '22H00 :\r\nTournoi Trackmania\r\n23h00 : \r\nTournoi COD4\r\n\r\nServeur tournoi 1(IP : 192.168.10.211) -> BIT2 vs Belgian Rape Squad\r\nServeur tournoi 2 (IP : 192.168.10.212) -> Don''t feed the ginger vs BIT1\r\nServeur tournoi 3 (IP : 192.168.10.213) -> Go Nerf Karma vs NIP TA MERE\r\n\r\n00h00 :\r\n- Tournoi UT3 \r\n- BO3 de League Of Legend\r\n', '2014-04-05 22:49:23', 0),
(7, 'Clé Unreal Tournament 3', 'CD KEY LIST:\r\nZJ3P-TUDF-LHKT-4GK2\r\nE8ML-6ZA7-ZZA4-DW4D\r\nPHM3-QYC3-LEWY-VCC4\r\nHPAP-4AUU-BBTD-YE6R\r\nM3YX-UPD2-JGZK-7TAB\r\nCLAG-WAJD-NWDA-GLCQ\r\n4X7Y-M5KD-TS99-JECJ\r\nW8EL-7KJZ-52JL-EQ6U\r\nWMEM-ZJUT-992A-WQTC\r\nVKJF-VSL8-WE5B-CB95\r\nFBGK-CNU3-SMSF-FHM2\r\nT64B-3XVJ-CLLM-5XKQ\r\nZ8NN-73SC-QEKL-ACBK\r\nFARK-A8US-CAAX-BAKS\r\nYX6Q-M3T3-M33R-J8W7\r\nV23F-TVVW-GLM3-4QUH\r\n2BWV-DJVM-P28F-6HVQ\r\nN54Q-UZJJ-A5KU-LRFX\r\nPGT3-NCVV-QLEY-QB77\r\nNJP4-S42S-RXET-SA2D\r\nDF5E-LY33-KKVZ-MTW2\r\nXDCJ-HESN-4K2E-ZZXR\r\n9RE7-9JUV-EK7C-W76Z\r\nBTQB-C7UT-KNUP-T96A\r\nXGBJ-PCSW-BEJY-G5J3\r\nXMNJ-Z2JM-PF2A-A922\r\nKYXP-NMVZ-UGG8-N7SE\r\nFT3J-CV3P-9QS7-LFPQ\r\nFNZJ-2Q3K-URAV-7U36\r\n6QQ5-76LD-SXNC-B475\r\nUS3G-HUTN-HV5W-44T5\r\nFRXJ-8LTQ-6KSU-6BPZ\r\n2NEV-3JUN-l3QD-ENNT\r\nXTHJ-DR2A-BQ27-F9JD', '2014-04-05 21:39:31', 0),
(8, '', '', '2014-04-05 21:45:50', 1),
(9, 'Gagnants COD', '1. BIT1\r\n2. NIP TA MERE\r\n3. Don''t feed the ginger', '2014-04-06 02:33:19', 0),
(10, 'Résultat Trackmania', '<IMG SRC="resultTM.png" WIDTH=100%>', '2014-04-06 02:46:21', 0);

-- --------------------------------------------------------

--
-- Structure de la table `sponsors`
--

CREATE TABLE IF NOT EXISTS `sponsors` (
  `id_sponsor` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `siteWeb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_sponsor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `sponsors`
--

INSERT INTO `sponsors` (`id_sponsor`, `logo`, `siteWeb`, `description`) VALUES
(1, 'isims.jpg', 'http://www.isims.be', 'La diversité des voies de formation proposées aux jeunes constitue une richesse qu''il importe de préserver. La finalité propre de l''enseignement supérieur en Communauté française est de préparer les futurs diplômés à s''insérer dans une vie professionnelle où ils seront cadres supérieurs voire indépendants.'),
(2, 'HEH.png', 'http://www.heh.be', 'La Haute Ecole en Hainaut, organisée par la Fédération Wallonie-Bruxelles, offre un enseignement de proximité et dispensé par des enseignants motivés sur nos campus de Mons et Tournai.'),
(3, 'technique.png', '', 'équivalent d''isims'),
(4, 'logo-corsaire.jpg', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tchat`
--

CREATE TABLE IF NOT EXISTS `tchat` (
  `id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `id_joueur` int(11) NOT NULL,
  `pseudo` char(80) NOT NULL,
  `quand` datetime NOT NULL,
  `message` char(255) NOT NULL,
  PRIMARY KEY (`id_chat`),
  KEY `quand` (`quand`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tchat_users`
--

CREATE TABLE IF NOT EXISTS `tchat_users` (
  `id_joueur` int(11) NOT NULL,
  `pseudo` char(80) NOT NULL,
  `lastcon` datetime NOT NULL,
  PRIMARY KEY (`id_joueur`),
  UNIQUE KEY `id_joueur` (`id_joueur`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tchat_users`
--

INSERT INTO `tchat_users` (`id_joueur`, `pseudo`, `lastcon`) VALUES
(214, 'Brenda', '2014-12-10 10:53:07');

-- --------------------------------------------------------

--
-- Structure de la table `tournoi`
--

CREATE TABLE IF NOT EXISTS `tournoi` (
  `id_tournoi` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomTournoi` varchar(255) NOT NULL,
  `joueurParTeam` int(11) NOT NULL,
  `reglement` text NOT NULL,
  `teamParMatch` int(11) NOT NULL,
  `nombreManche` int(11) NOT NULL,
  `nombre_joueurs_qualifies` int(11) NOT NULL DEFAULT '1',
  `heure_groupe_start` datetime DEFAULT NULL,
  `heure_finale_start` datetime DEFAULT NULL,
  `duree_inter_match` time DEFAULT NULL,
  PRIMARY KEY (`id_tournoi`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `tournoi`
--

INSERT INTO `tournoi` (`id_tournoi`, `nomTournoi`, `joueurParTeam`, `reglement`, `teamParMatch`, `nombreManche`, `nombre_joueurs_qualifies`, `heure_groupe_start`, `heure_finale_start`, `duree_inter_match`) VALUES
(1, 'League of Legends', 5, 'crush nexus to win da game', 2, 1, 1, '2014-04-05 09:00:00', '2014-04-05 21:00:00', '02:00:00'),
(2, 'COD4', 5, 'Camp to win', 2, 3, 1, '2014-04-05 10:00:00', '2014-04-05 22:00:00', '02:00:00'),
(3, 'Trackmania', 1, 'Run bitch, run', 10, 7, 5, '2014-04-05 18:00:00', '2014-04-05 23:59:00', '02:00:00'),
(4, 'UT3', 1, 'beat them all', 10, 3, 5, '2014-04-06 12:00:00', '2014-04-05 23:00:00', '02:00:00'),
(5, 'Hearthstone', 2, '', 2, 1, 1, '2014-04-04 22:10:00', '2014-04-04 23:55:00', '00:30:00');

-- --------------------------------------------------------

--
-- Structure de la table `variables`
--

CREATE TABLE IF NOT EXISTS `variables` (
  `nom` varchar(255) NOT NULL,
  `valeur` varchar(255) NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `variables`
--

INSERT INTO `variables` (`nom`, `valeur`) VALUES
('chat_on', '1'),
('dimanche', '2014-04-06'),
('duree_chat', '2000'),
('duree_chat_users', '20000'),
('samedi', '2014-04-05'),
('vendredi', '2014-04-04');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `equipes_groupes`
--
ALTER TABLE `equipes_groupes`
  ADD CONSTRAINT `equipes_groupes_ibfk_1` FOREIGN KEY (`id_equipe`) REFERENCES `equipes` (`id_equipes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `equipes_groupes_ibfk_2` FOREIGN KEY (`id_groupe`) REFERENCES `groupes_pool` (`id_groupe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `equipes_joueur`
--
ALTER TABLE `equipes_joueur`
  ADD CONSTRAINT `equipes_joueur_ibfk_1` FOREIGN KEY (`id_joueur`) REFERENCES `joueurs` (`id_joueur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `equipes_joueur_ibfk_2` FOREIGN KEY (`id_equipes`) REFERENCES `equipes` (`id_equipes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `equipes_tournoi`
--
ALTER TABLE `equipes_tournoi`
  ADD CONSTRAINT `equipes_tournoi_ibfk_2` FOREIGN KEY (`id_tournoi`) REFERENCES `tournoi` (`id_tournoi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `equipes_tournoi_ibfk_3` FOREIGN KEY (`id_equipe`) REFERENCES `equipes` (`id_equipes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `groupes_pool`
--
ALTER TABLE `groupes_pool`
  ADD CONSTRAINT `groupes_pool_ibfk_1` FOREIGN KEY (`id_tournoi`) REFERENCES `tournoi` (`id_tournoi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `joueurs`
--
ALTER TABLE `joueurs`
  ADD CONSTRAINT `joueurs_ibfk_1` FOREIGN KEY (`id_emplacement`) REFERENCES `emplacement` (`id_emplacement`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `joueurs_groupes`
--
ALTER TABLE `joueurs_groupes`
  ADD CONSTRAINT `joueurs_groupes_ibfk_1` FOREIGN KEY (`id_joueur`) REFERENCES `joueurs` (`id_joueur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `joueurs_groupes_ibfk_2` FOREIGN KEY (`id_groupe`) REFERENCES `groupes_pool` (`id_groupe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `joueurtournoi`
--
ALTER TABLE `joueurtournoi`
  ADD CONSTRAINT `joueurtournoi_ibfk_5` FOREIGN KEY (`id_tournoi`) REFERENCES `tournoi` (`id_tournoi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `joueurtournoi_ibfk_6` FOREIGN KEY (`id_joueur`) REFERENCES `joueurs` (`id_joueur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `manches_equipes`
--
ALTER TABLE `manches_equipes`
  ADD CONSTRAINT `manches_equipes_ibfk_1` FOREIGN KEY (`id_match`) REFERENCES `matchs` (`id_match`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manches_equipes_ibfk_2` FOREIGN KEY (`id_equipe`) REFERENCES `equipes` (`id_equipes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `manches_joueurs`
--
ALTER TABLE `manches_joueurs`
  ADD CONSTRAINT `manches_joueurs_ibfk_1` FOREIGN KEY (`id_match`) REFERENCES `matchs` (`id_match`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manches_joueurs_ibfk_2` FOREIGN KEY (`id_joueur`) REFERENCES `joueurs` (`id_joueur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `matchs`
--
ALTER TABLE `matchs`
  ADD CONSTRAINT `matchs_ibfk_1` FOREIGN KEY (`id_tournoi`) REFERENCES `tournoi` (`id_tournoi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matchs_ibfk_7` FOREIGN KEY (`id_parent`) REFERENCES `matchs` (`id_match`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matchs_ibfk_8` FOREIGN KEY (`id_enfant1`) REFERENCES `matchs` (`id_match`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matchs_ibfk_9` FOREIGN KEY (`id_enfant2`) REFERENCES `matchs` (`id_match`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `matchs_equipes`
--
ALTER TABLE `matchs_equipes`
  ADD CONSTRAINT `matchs_equipes_ibfk_3` FOREIGN KEY (`id_match`) REFERENCES `matchs` (`id_match`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matchs_equipes_ibfk_4` FOREIGN KEY (`id_equipe`) REFERENCES `equipes` (`id_equipes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `matchs_joueurs`
--
ALTER TABLE `matchs_joueurs`
  ADD CONSTRAINT `matchs_joueurs_ibfk_1` FOREIGN KEY (`id_match`) REFERENCES `matchs` (`id_match`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matchs_joueurs_ibfk_2` FOREIGN KEY (`id_joueur`) REFERENCES `joueurs` (`id_joueur`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
