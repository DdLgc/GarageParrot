-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 21 nov. 2023 à 20:43
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `garageparrot`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20231031103030', '2023-10-31 15:37:11', 32),
('DoctrineMigrations\\Version20231109172357', '2023-11-09 17:26:29', 480),
('DoctrineMigrations\\Version20231116122317', '2023-11-16 12:23:52', 159),
('DoctrineMigrations\\Version20231117154206', '2023-11-17 15:43:22', 217),
('DoctrineMigrations\\Version20231117163156', '2023-11-17 16:32:29', 123),
('DoctrineMigrations\\Version20231118170714', '2023-11-18 17:09:39', 190),
('DoctrineMigrations\\Version20231119231400', '2023-11-19 23:15:35', 211),
('DoctrineMigrations\\Version20231119232502', '2023-11-19 23:25:10', 362),
('DoctrineMigrations\\Version20231119232645', '2023-11-19 23:27:35', 188),
('DoctrineMigrations\\Version20231120201910', '2023-11-20 20:19:41', 280);

-- --------------------------------------------------------

--
-- Structure de la table `garage`
--

DROP TABLE IF EXISTS `garage`;
CREATE TABLE IF NOT EXISTS `garage` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `hours`
--

DROP TABLE IF EXISTS `hours`;
CREATE TABLE IF NOT EXISTS `hours` (
  `id` int NOT NULL AUTO_INCREMENT,
  `garage_id` int DEFAULT NULL,
  `day_of_week` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_hours_am` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_hours_pm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `closing_hours_am` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `closing_hours_pm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8A1ABD8DC4FFF555` (`garage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int NOT NULL AUTO_INCREMENT,
  `garage_id` int DEFAULT NULL,
  `user_name` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` smallint NOT NULL,
  `moderation` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E6BDCDF7C4FFF555` (`garage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `garage_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  KEY `IDX_8D93D649C4FFF555` (`garage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `roles`, `garage_id`) VALUES
(1, 'foo', 'foooooo', 'foo@foo.com', '$2y$13$YeNS40WIRTr4cERDRXv.uOELFafu1fo4uBBHqAXLu3mqP1k7AbHju', '[]', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `id` int NOT NULL AUTO_INCREMENT,
  `garage_id` int DEFAULT NULL,
  `price` int NOT NULL,
  `model` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mileage` int NOT NULL,
  `year_of_registration` datetime NOT NULL,
  `equipment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_pic` json NOT NULL,
  `pics` json DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1B80E486C4FFF555` (`garage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vehicle`
--

INSERT INTO `vehicle` (`id`, `garage_id`, `price`, `model`, `mileage`, `year_of_registration`, `equipment`, `front_pic`, `pics`) VALUES
(4, NULL, 12000, '208', 10890, '2020-12-12 00:00:00', 'Système de sécurité : Assistance au freinage d\'urgence, ABS, ESP, et airbags.\n        Confort intérieur : Climatisation manuelle, système audio de base, sièges réglables en hauteur.\n        Connectivité : Écran tactile, connectivité Bluetooth, éventuellem', '[]', NULL),
(5, NULL, 6000, 'Golf 4', 50600, '2010-12-12 00:00:00', 'Système de sécurité : Assistance au freinage d\'urgence, ABS, ESP, et airbags.\n        Confort intérieur : Climatisation manuelle, système audio de base, sièges réglables en hauteur.\n        Connectivité : Écran tactile, connectivité Bluetooth, éventuellem', '[]', NULL),
(6, NULL, 22000, '4.30', 1090, '2018-12-12 00:00:00', 'Système de sécurité : Assistance au freinage d\'urgence, ABS, ESP, et airbags.\n        Confort intérieur : Climatisation manuelle, système audio de base, sièges réglables en hauteur.\n        Connectivité : Écran tactile, connectivité Bluetooth, éventuellem', '[]', NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `hours`
--
ALTER TABLE `hours`
  ADD CONSTRAINT `FK_8A1ABD8DC4FFF555` FOREIGN KEY (`garage_id`) REFERENCES `garage` (`id`);

--
-- Contraintes pour la table `testimonial`
--
ALTER TABLE `testimonial`
  ADD CONSTRAINT `FK_E6BDCDF7C4FFF555` FOREIGN KEY (`garage_id`) REFERENCES `garage` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D649C4FFF555` FOREIGN KEY (`garage_id`) REFERENCES `garage` (`id`);

--
-- Contraintes pour la table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `FK_1B80E486C4FFF555` FOREIGN KEY (`garage_id`) REFERENCES `garage` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
