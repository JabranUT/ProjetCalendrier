-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 09 mai 2023 à 19:44
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_calendrier`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id_appointment` int NOT NULL AUTO_INCREMENT,
  `last_name` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `date` date NOT NULL,
  `hour` time NOT NULL,
  PRIMARY KEY (`id_appointment`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `appointments`
--

INSERT INTO `appointments` (`id_appointment`, `last_name`, `first_name`, `email`, `password`, `address`, `phone`, `date`, `hour`) VALUES
(31, 'test test', 'test test', 'teddst@test.be', '', 'test test', 0, '1970-01-01', '09:00:00'),
(29, 'test test', 'test test', 'teddst@test.be', '', 'test test', 0, '1970-01-01', '09:00:00'),
(25, 'FRD0805', 'FRD0805', 'test@test.be', '', 'FRD0805', 111111, '2023-05-10', '10:00:00'),
(26, 'test', 'test', 'test@test.be', '', 'test', 0, '2023-01-01', '09:00:00'),
(24, 'lala lala', 'lala lala', 'lala@lala.be', '', 'lala lala', 111115555, '2023-05-19', '14:00:00'),
(27, 'test test', 'test test', 'teddst@test.be', '', 'test test', 0, '1970-01-01', '09:00:00'),
(21, 'test test ', 'test test ', 'testtest@test.be', 'test test ', 'test test ', 6666, '2023-05-10', '09:00:00'),
(32, 'test test', 'test test', 'teddst@test.be', '', 'test test', 0, '1970-01-01', '09:00:00'),
(35, 'Aboumerouane', 'Jabran', 'jabran.aboumerouane@outlook.com', '', '5, Rue Dourlet', 486239341, '2023-05-18', '10:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `last_name` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `last_name`, `first_name`, `email`, `password`, `address`, `phone`) VALUES
(11, 'admin', 'admin', 'admin@admin.be', '', 'dzdaz', 0),
(7, 'test', 'test', 'test@test.be', '', 'test', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
