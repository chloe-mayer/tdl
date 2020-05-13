-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 13 mai 2020 à 15:26
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tdl`
--

-- --------------------------------------------------------

--
-- Structure de la table `liste`
--

DROP TABLE IF EXISTS `liste`;
CREATE TABLE IF NOT EXISTS `liste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `list` varchar(255) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  `date_creation` date NOT NULL,
  `date_fin` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `liste`
--

INSERT INTO `liste` (`id`, `list`, `id_utilisateurs`, `date_creation`, `date_fin`) VALUES
(4, 'dodo', 1, '2020-05-20', '2020-05-21'),
(3, 'Faire cuisine', 1, '2020-05-13', '2020-05-20'),
(5, 'bla', 1, '2020-05-13', '2020-05-13'),
(6, 'nouveau', 1, '2020-05-13', '2020-05-13'),
(7, 'nouveau', 1, '2020-05-13', '2020-05-13'),
(8, 'alleluia', 1, '2020-05-13', '2020-05-13'),
(9, '', 1, '2020-05-13', '2020-05-13'),
(10, 'test', 1, '2020-05-13', '2020-05-13'),
(11, 's', 1, '2020-05-13', '2020-05-13'),
(12, 'sss', 1, '2020-05-13', '2020-05-13'),
(13, 'sss', 1, '2020-05-13', '2020-05-13'),
(14, 'ds', 1, '2020-05-13', '2020-05-13'),
(15, 'r', 1, '2020-05-13', '2020-05-13'),
(16, 'pppp', 1, '2020-05-13', '2020-05-13'),
(17, 'pppps', 1, '2020-05-13', '2020-05-13'),
(18, 'truc', 1, '2020-05-13', '2020-05-13'),
(19, 'dodo', 1, '2020-05-13', '2020-05-13'),
(20, 'isaak', 1, '2020-05-13', '2020-05-13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
