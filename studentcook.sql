-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 30 Décembre 2016 à 00:34
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `studentcook`
--

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE `ingredient` (
  `IDINGREDIENT` int(3) NOT NULL,
  `NOMINGREDIENT` varchar(20) NOT NULL,
  `APPORTCAL` int(3) NOT NULL,
  `PRIX` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ingredient`
--

INSERT INTO `ingredient` (`IDINGREDIENT`, `NOMINGREDIENT`, `APPORTCAL`, `PRIX`) VALUES
(1, 'PATE', 100, 1),
(2, 'STEAK HACHE', 204, 3),
(3, 'SAUCE TOMATE', 29, 1),
(4, 'EMMENTAL', 380, 2),
(5, 'THON', 118, 4),
(6, 'OEUF', 155, 3),
(7, 'LAIT', 42, 2),
(8, 'CHAPELURE', 395, 2),
(9, 'FARINE', 364, 1),
(10, 'JAMBON', 135, 5),
(11, 'FETA', 264, 3),
(12, 'TOMATE', 18, 1),
(13, 'CREVETTE', 94, 4),
(14, 'AVOCAT', 220, 4),
(15, 'YAOURT', 59, 1),
(16, 'OIGNON', 40, 2),
(17, 'PIMENT', 40, 2),
(18, 'POMME DE TERRE', 77, 2),
(19, 'CHEVRE', 364, 2),
(20, 'POIVRE', 251, 2),
(21, 'SEL', 0, 2),
(22, 'BRIOCHE', 375, 2),
(23, 'LARDON', 287, 2);

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `IDRECETTE` int(3) NOT NULL,
  `NOMRECETTE` varchar(30) DEFAULT NULL,
  `INGREDIENT1` varchar(20) DEFAULT NULL,
  `INGREDIENT2` varchar(20) DEFAULT NULL,
  `INGREDIENT3` varchar(20) DEFAULT NULL,
  `INGREDIENT4` varchar(20) DEFAULT NULL,
  `INGREDIENT5` varchar(20) DEFAULT NULL,
  `DEFINITION` text NOT NULL,
  `DUREE` int(3) NOT NULL,
  `ORIGINE` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `recette`
--

INSERT INTO `recette` (`IDRECETTE`, `NOMRECETTE`, `INGREDIENT1`, `INGREDIENT2`, `INGREDIENT3`, `INGREDIENT4`, `INGREDIENT5`, `DEFINITION`, `DUREE`, `ORIGINE`) VALUES
(1, 'PATE BOLOGNAISE', 'PATE', 'STEAK HACHE', 'SAUCE TOMATE', 'EMMENTAL', NULL, 'La recette repose sur une sauce tomate à la viande servie sur un lit de spaghettis avec une couche d\'emmental rapé.', 20, 'ITALIE'),
(2, 'CAKE AU THON', 'THON', 'OEUF', 'LAIT', 'CHAPELURE', NULL, '1 boite de thon\r\n3 œufs\r\n240 ml de lait\r\n80 g de chapelure\r\n\r\nÉmietter le thon dans un saladier. Ajouter les 3 œufs, la chapelure et mélanger.\r\nAjouter le lait et mélanger. Saler et poivrer selon votre goût. On peut aussi ajouter des herbes si on le désire.\r\nPlacer le tout dans un moule à cake non beurré et \r\ncuire au four à 175°C pendant 45 min\r\n', 50, 'EUROPE'),
(3, 'QUICHE SANS FOND', 'OEUF', 'LAIT', 'FARINE', 'EMMENTAL', 'JAMBON', 'Mélanger tous les ingrédients.\r\nVerser dans un moule à cake.\r\nCuire 40 mn au four, à thermostat 6 ou 7 (200°C).\r\n', 45, 'FRANCE'),
(4, 'CREVETTE A LA FETA', 'TOMATES', 'FETA', 'CREVETTES', NULL, NULL, '240 g de tomates pelées \r\n1 tranche de feta\r\n100 g de crevettes cuites décortiquées\r\nherbes de Provence\r\n\r\nCoupez la feta en petits carrés, mélanger le tout dans un plat et mettez au four durant 20 minutes environ à environ 200°C.\r\nEt voilà, c\'est déjà prêt! Servir avec du riz ou des pâtes.\r\n', 25, 'GRECE'),
(5, 'GUACAMOLE AU YAOURT', 'AVOCAT', 'YAOURT', 'OIGNON', 'PIMENT', NULL, '1 avocat\r\n1 yaourt\r\n1 oignon\r\n1 piment rouge\r\n\r\nEplucher un avocat bien mur, le découper en petits morceaux et l\'écraser dans un bol. \r\nAjouter le yaourt nature et bien mélanger.\r\nCouper la tomate en tout petits dés et mélanger avec l\'avocat.\r\nCouper finement un oignon et mélanger.\r\nSelon votre goût, vous pouvez rajouter des tout petits morceaux de piments rouges (attention pas trop quand-même !!!).\r\nAssaisonner selon votre goût de poivre et sel.\r\nA servir avec des chips mexicaines.', 10, 'MEXIQUE'),
(6, 'TORTILLA', 'POMME DE TERRE', 'OEUF', 'OIGNON', NULL, NULL, '1 kg de pommes de terre\r\n8 œufs\r\nun gros oignon\r\n\r\nEplucher et découper les pommes de terre en rondelle de 1/2 cm d\'épaisseur environ.\r\nEplucher l\'oignon et le couper en petits morceaux.\r\nMettre tous ces ingrédients dans la poêle. Celle-ci doit être remplie jusqu\'à mi-hauteur.\r\nCouvrir d\'huile d\'olive (il faut que toutes les pommes de terre baignent dans l\'huile). Couvrir la poêle d\'un couvert (important : il faut que les pommes de terre cuisent à la fois dans l\'huile et à la vapeur).\r\nUne fois les pommes de terre bien cuites (il faut que la pointe d\'un couteau puisse s\'y enfoncer sans peine), vider l\'huile d\'olive dans un récipient. \r\nVerser les pommes de terre et oignon dans un saladier. Ajouter les œufs battus, salés et poivrés. Il faut qu\'il y ait suffisamment d\'œufs pour que la tortilla soit bien liée. \r\nMélanger doucement (ne pas faire de la purée de pommes de terre !) \r\nRemettre dans la poêle 2 - 3 mm d\'huile d\'olive et y verser le mélange. Faire cuire à feu doux un côté de la tortilla.\r\nUne fois le fond bien doré, retourner la tortilla sur une assiette. Cette opération est délicate car les œufs sur le dessus ne sont pas cuits et l\'huile dans le fond est très chaude.\r\nRemettre un peu d\'huile dans la poêle si nécessaire et y faire glisser la tortilla, afin de faire dorer l\'autre côté.\r\nUne fois les deux côtés dorés, glisser la tortilla dans une assiette.\r\n\r\n', 20, 'MEXIQUE'),
(7, 'TOMATES AU CHEVRE FRAIS', 'TOMATES', 'CHEVRE', 'POIVRE', NULL, NULL, '4 grosses tomates à chair ferme\r\n2 petits chèvres frais\r\nPoivre\r\n\r\nEvider les tomates et conserver le chapeau. les remplir de chèvre, fermer avec le chapeau de la tomate.\r\nMettre à four moyen une vingtaine de minutes.\r\nServir avec une salade.\r\n\r\n', 25, 'FRANCE'),
(8, 'OEUFS SOUFFLES AU GRUYERE', 'OEUF', 'GRUYERE', 'SEL', 'POIVRE', NULL, '1 œuf \r\n15 g de gruyère\r\nsel, poivre\r\n\r\nSéparer le blanc et le jaune de l\'œuf. \r\nMettre le blanc dans un bol, ajouter une pincée de sel, et le monter en neige. \r\nUne fois monté, creuser un puits dans le blanc, et glisser le jaune dedans. \r\nRâper le gruyère, et en saupoudrer le tout. Ajouter un peu de poivre moulu. \r\nFaire chauffer au four à 180°C (thermostat 6), jusqu\'à ce que l\'œuf ait quasiment gonflé jusqu\'au bord du bol.\r\n', 15, 'FRANCE'),
(9, 'OEUF EN BRIOCHE', 'BRIOCHE', 'OEUF', 'LARDON', 'OIGNON', NULL, '1 brioche à tête évidée\r\n1 œuf\r\ngarniture au choix\r\n\r\nPréchauffer le four à 210°C (th 7).\r\nEvider la brioche, réserver la tête. \r\nMettre un peu de garniture au fond : oignons et lardons par exemple. \r\nCasser l\'œuf  dans la brioche, saler et poivrer.\r\nRemettre le chapeau.\r\nMettre au four 15 minutes environ, jusqu\'à ce que l\'œuf soit cuit.', 19, 'FRANCE');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`IDRECETTE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
