-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 21 juin 2018 à 14:08
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cobeff`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `idNews` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `contenu` text COLLATE utf8mb4_bin NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`idNews`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `description` text COLLATE utf8mb4_bin NOT NULL,
  `programme` text COLLATE utf8mb4_bin NOT NULL,
  `inscription` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `idLogin` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `permission` tinyint(3) UNSIGNED NOT NULL,
  `filiere` tinyint(6) UNSIGNED NOT NULL,
  PRIMARY KEY (`idLogin`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`idLogin`, `username`, `password`, `permission`, `filiere`) VALUES
(1, 'admin', 'ok', 1, 0),
(2, 'stagiaire2', 'ok', 3, 2),
(3, 'stagiaire1', 'ok', 3, 1),
(4, 'stagiaire3', 'ok', 3, 3),
(5, 'stagiaire4', 'ok', 3, 4),
(6, 'stagiaire5', 'ok', 3, 5),
(7, 'stagiaire6', 'ok', 3, 6),
(8, 'stagiaire7', 'ok', 3, 7),
(9, 'formateur1', 'ok', 2, 1),
(10, 'formateur2', 'ok', 2, 2),
(11, 'formateur3', 'ok', 2, 3),
(12, 'formateur4', 'ok', 2, 4),
(13, 'formateur5', 'ok', 2, 5),
(14, 'formateur6', 'ok', 2, 6),
(15, 'formateur7', 'ok', 2, 7);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `titre` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `contenu` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `filiere` tinyint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`titre`, `contenu`, `filiere`) VALUES
('Vendeuse Polyvalente', 'Le contenu', 1),
('Cuisine et service en salle', 'Le contenu', 2),
('Service aux personnes<br>Aide soignant(e)', 'Le contenu', 3),
('Auxiliaire de l\'enfance', 'Le contenu', 4),
('Agent d\'entretien<br>en milieu hospitalier', 'Le contenu', 5),
('Préparation au jury central<br>2ème degré de l\'enseignement professionel,<br>secteur service aux personnes,<br>options services sociaux', 'Le contenu', 6),
('Complément de formation générale en<br>vue de l\'obtention du certificat<br>correspondant au CESS', 'Le contenu', 7);

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `idMenu` int(11) NOT NULL AUTO_INCREMENT,
  `thedate` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`idMenu`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `restaurant`
--

INSERT INTO `restaurant` (`idMenu`, `thedate`, `description`) VALUES
(1, 'Mardi 29 Mai', 'Entrée : Tajine au fromage<br> \r\nPlat : Poulet à la canelle et aux légumes<br>\r\nDessert : Semoule à la fleur d\'oranger'),
(2, 'Mercredi 30 juin', 'Potage : tomate et basilic<br> \r\nEntrée : Mousse de poisson<br> \r\nPlat : Dorade au four, légumes méditerranéen<br>\r\nDessert : Crêpe Suzette'),
(3, '​​​​​Mardi 05 juin', 'Entrée : Salsa aux concombres<br>\r\nPlat : Fajitas au poulet<br>\r\nDessert : Crème au caramel aux saveur du mexique'),
(4, 'Mercredi 06 juin', 'Potage : Soupe au lait de coco et poulet<br> \r\nEntrée : Rouleaux de printemps<br>\r\nPlat : Riz sauté au canard<br>\r\nDessert : Glace<br>'),
(5, 'Mardi 12 juin', 'Entrée : Pastilla aux fruits de mer<br>\r\nPlat : Tajine de viande et dattes farcies<br> \r\nDessert : Cigares aux amandes'),
(6, 'Mercredi 13 juin', 'Potage : Gaspacho andalou<br>\r\nEntrée : Beignets de courgettes<br>\r\nPlat : Escalope de veau, tomate grillée<br>\r\nDessert : Tiramisu aux fraises');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
