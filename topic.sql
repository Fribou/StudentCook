-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 16 Mars 2017 à 17:56
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `td`
--

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

CREATE TABLE `topic` (
  `idtopic` int(3) NOT NULL,
  `sujet` varchar(25) NOT NULL,
  `description` varchar(200) NOT NULL,
  `createur` varchar(25) NOT NULL,
  `date_creation` date NOT NULL,
  `heure_creation` varchar(5) NOT NULL,
  `nb_msg` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `topic`
--

INSERT INTO `topic` (`idtopic`, `sujet`, `description`, `createur`, `date_creation`, `heure_creation`, `nb_msg`) VALUES
(1, 'test1', 'test1', 'pseudo1', '2017-03-16', '17h58', 50),
(2, 'test2', 'test2', 'pseudo2', '2017-01-15', '12h35', 68),
(3, 'test3', 'test3', 'pseudo3', '2017-05-14', '15h34', 32),
(4, 'test4', 'test4', 'pseudo4', '2017-02-13', '13h56', 25),
(5, 'test5', 'test5', 'pseudo5', '2015-03-16', '23h30', 255);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`idtopic`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
