-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 20 juin 2018 à 09:52
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

--
-- Déchargement des données de la table `restaurant`
--

INSERT INTO `restaurant` (`idMenu`, `date`, `descritpion`) VALUES
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
