-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 21 Mars 2017 à 11:32
-- Version du serveur :  5.5.52-MariaDB
-- Version de PHP :  5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `p1501578`
--

-- --------------------------------------------------------

--
-- Structure de la table `Topic`
--

CREATE TABLE IF NOT EXISTS `Topic` (
  `idtopic` int(11) NOT NULL,
  `sujet` varchar(360) NOT NULL,
  `description` varchar(360) NOT NULL,
  `createur` varchar(360) NOT NULL,
  `date_creation` date NOT NULL,
  `heure_creation` time NOT NULL,
  `nb_msg` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Topic`
--

INSERT INTO `Topic` (`idtopic`, `sujet`, `description`, `createur`, `date_creation`, `heure_creation`, `nb_msg`) VALUES
(1, 'Cuisine', 'Parle de recette et etc', 'Titeuf', '2017-03-21', '00:00:09', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Topic`
--
ALTER TABLE `Topic`
  ADD PRIMARY KEY (`idtopic`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Topic`
--
ALTER TABLE `Topic`
  MODIFY `idtopic` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
