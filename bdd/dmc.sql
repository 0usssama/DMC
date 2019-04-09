-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 09 avr. 2019 à 14:42
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dmc`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username_admin` varchar(45) DEFAULT NULL,
  `motpass_admin` varchar(255) DEFAULT NULL,
  `email_admin` varchar(45) DEFAULT NULL,
  `role_admin` varchar(45) DEFAULT NULL,
  `code_recup_admin` varchar(255) DEFAULT NULL,
  `etat_admin` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `motpass_admin`, `email_admin`, `role_admin`, `code_recup_admin`, `etat_admin`) VALUES
(1, 'oussama', NULL, NULL, NULL, NULL, NULL),
(2, 'zaki', '$2y$10$5owrry6y9nGuTEIy7pyWQOPmhHLIhF.QM2WyvkjxE2u2FJapyaxHq', 'farizaki2015@gmail.com', 'normal', NULL, 'active'),
(6, 'zetchi', '$2y$10$vSS/Tjlg77K4B2IJMK5boeKgwzmuuV0FHPM72.nCzcKGlzSXoI1Zq', 'gfffffgfff@gfgf.com', 'superadmin', NULL, 'active');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(45) DEFAULT NULL,
  `prenom_client` varchar(45) DEFAULT NULL,
  `email_client` varchar(45) DEFAULT NULL,
  `adresse_client` varchar(45) DEFAULT NULL,
  `catego_client` varchar(45) DEFAULT NULL,
  `motpass_client` varchar(255) DEFAULT NULL,
  `raison_social_client` varchar(45) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_client`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `email_client`, `adresse_client`, `catego_client`, `motpass_client`, `raison_social_client`, `id_admin`) VALUES
(2, 'amine', 'ladjroud', 'amine@gmail.com', 'fort de l\'eau', 'professionnel', '$2y$10$mnLCMJa3BSFMU4x2oSlE.etPahh3U4zJF0eHj9JGpmCH3PAdJ9HFy', 'amine SARL', 1),
(4, 'amine3', 'ladjroud', 'amine@gmail.com', 'fort de l\'eau', 'professionnel', '$2y$10$9yLVMYfiffZxmJzkaYg24Oiv6oWz4HxmRUGpG7SbSnh3Z1V9ZHZA6', 'amine SARL', 1),
(7, 'amine34', 'ladjroud', 'amine@gmail.com', 'fort de l\'eau', 'professionnel', '$2y$10$Q1xbMS3y7RTpbRwLL171OetDadb993RIp0aDmfxLIBTX/PA66H5DS', 'amine SARL', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commander`
--

DROP TABLE IF EXISTS `commander`;
CREATE TABLE IF NOT EXISTS `commander` (
  `date_comd` date DEFAULT NULL,
  `etat_comd` varchar(45) DEFAULT NULL,
  `qte_p_comd` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL,
  KEY `id_client` (`id_client`),
  KEY `id_prod` (`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evaluer`
--

DROP TABLE IF EXISTS `evaluer`;
CREATE TABLE IF NOT EXISTS `evaluer` (
  `date_ev` date DEFAULT NULL,
  `nbr_etoils_ev` int(11) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  KEY `id_client` (`id_client`),
  KEY `id_prod` (`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `id_fact` int(11) NOT NULL AUTO_INCREMENT,
  `date_fact` date NOT NULL,
  `contenu_fact` varchar(45) NOT NULL,
  `etat_fact` varchar(15) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_fact`),
  KEY `id_admin` (`id_admin`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

DROP TABLE IF EXISTS `famille`;
CREATE TABLE IF NOT EXISTS `famille` (
  `id_famille` int(11) NOT NULL AUTO_INCREMENT,
  `titre_famille` varchar(45) DEFAULT NULL,
  `image_famille` varchar(255) DEFAULT NULL,
  `etat_famille` varchar(45) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_famille`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`id_famille`, `titre_famille`, `image_famille`, `etat_famille`, `id_admin`) VALUES
(15, 'adjroud', '../upload/button.jpg', 'disponible', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_imag` int(11) NOT NULL AUTO_INCREMENT,
  `url_imag` text,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `id_prod` int(11) DEFAULT NULL,
  `id_point_vente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_imag`),
  KEY `id_point_vente` (`id_point_vente`),
  KEY `id_prod` (`id_prod`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_imag`, `url_imag`, `image1`, `image2`, `image3`, `id_prod`, `id_point_vente`) VALUES
(10, 'upload/4.jpg', 'upload/cam3.jpg', 'upload/4.jpg', 'upload/3.jpg', NULL, NULL),
(11, 'upload/amine.jpg', 'upload/', 'upload/', 'upload/', NULL, NULL),
(12, 'upload/4.jpg', 'upload/01_b_car.jpg', 'upload/02_o_car.jpg', 'upload/04_g_car.jpg', NULL, NULL),
(13, 'upload/04_g_car.jpg', 'upload/03_r_car.jpg', 'upload/01_b_car.jpg', 'upload/04_g_car.jpg', NULL, NULL),
(17, 'upload/1.jpg', 'upload/cam1.jpg', 'upload/cam2.jpg', 'upload/cam3.jpg', 32, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `id_marque` int(11) NOT NULL AUTO_INCREMENT,
  `titre_marque` varchar(45) DEFAULT NULL,
  `image_marque` varchar(255) DEFAULT NULL,
  `etat_marque` varchar(45) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_marque`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id_marque`, `titre_marque`, `image_marque`, `etat_marque`, `id_admin`) VALUES
(7, 'samsung', 'upload/samsung.jpg', 'disponible', NULL),
(13, 'amine', 'upload/03_r_car.jpg', 'disponible', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `point_de_vente`
--

DROP TABLE IF EXISTS `point_de_vente`;
CREATE TABLE IF NOT EXISTS `point_de_vente` (
  `id_point_vente` int(11) NOT NULL AUTO_INCREMENT,
  `titre_point_vente` varchar(45) DEFAULT NULL,
  `presentation_point_vente` varchar(45) DEFAULT NULL,
  `type_point_vente` varchar(45) DEFAULT NULL,
  `info_point_vente` varchar(45) DEFAULT NULL,
  `etat_point_vente` varchar(45) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_point_vente`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `date_prod` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nom_prod` varchar(45) NOT NULL,
  `description_prod` varchar(255) DEFAULT NULL,
  `id_marque` int(11) DEFAULT NULL,
  `id_famille` int(11) DEFAULT NULL,
  `prix_detail` decimal(11,0) DEFAULT NULL,
  `prix_gros` decimal(11,0) DEFAULT NULL,
  `qnt_detail` int(11) DEFAULT NULL,
  `qnt_gros` int(11) DEFAULT NULL,
  `caracteristiques_prod` varchar(255) DEFAULT NULL,
  `etat_prod` varchar(10) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prod`),
  KEY `id_client` (`id_client`),
  KEY `id_marque` (`id_marque`),
  KEY `id_famille` (`id_famille`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `date_prod`, `nom_prod`, `description_prod`, `id_marque`, `id_famille`, `prix_detail`, `prix_gros`, `qnt_detail`, `qnt_gros`, `caracteristiques_prod`, `etat_prod`, `id_admin`, `id_client`) VALUES
(32, '2019-04-09 14:47:10', 'sonia', '546565456Description', 13, 15, '54654', '654654654', 46546546, 4564654, '64654654Caracteristiques', 'disponible', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `id_promo` int(11) NOT NULL AUTO_INCREMENT,
  `titre_promo` varchar(45) DEFAULT NULL,
  `image_promo` varchar(255) DEFAULT NULL,
  `date_deb_promo` date DEFAULT NULL,
  `date_fin_promo` date DEFAULT NULL,
  `etat_promo` varchar(45) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_promo`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `promovoir`
--

DROP TABLE IF EXISTS `promovoir`;
CREATE TABLE IF NOT EXISTS `promovoir` (
  `id_promo` int(11) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL,
  KEY `id_promo` (`id_promo`),
  KEY `id_prod` (`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `id_pub` int(11) NOT NULL AUTO_INCREMENT,
  `titre_pub` varchar(45) DEFAULT NULL,
  `categorie_pub` varchar(45) DEFAULT NULL,
  `contenu_pub` varchar(45) DEFAULT NULL,
  `etat_pub` varchar(45) DEFAULT NULL,
  `date_pub` date DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pub`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `stocker`
--

DROP TABLE IF EXISTS `stocker`;
CREATE TABLE IF NOT EXISTS `stocker` (
  `id_point_vente` int(11) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL,
  KEY `id_point_vente` (`id_point_vente`),
  KEY `id_prod` (`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commander`
--
ALTER TABLE `commander`
  ADD CONSTRAINT `commander_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commander_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `evaluer`
--
ALTER TABLE `evaluer`
  ADD CONSTRAINT `evaluer_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluer_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `facture_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `famille`
--
ALTER TABLE `famille`
  ADD CONSTRAINT `famille_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`id_point_vente`) REFERENCES `point_de_vente` (`id_point_vente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `image_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `marque`
--
ALTER TABLE `marque`
  ADD CONSTRAINT `marque_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `point_de_vente`
--
ALTER TABLE `point_de_vente`
  ADD CONSTRAINT `point_de_vente_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`id_marque`) REFERENCES `marque` (`id_marque`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_ibfk_3` FOREIGN KEY (`id_famille`) REFERENCES `famille` (`id_famille`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `promovoir`
--
ALTER TABLE `promovoir`
  ADD CONSTRAINT `promovoir_ibfk_1` FOREIGN KEY (`id_promo`) REFERENCES `promotion` (`id_promo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `promovoir_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `stocker`
--
ALTER TABLE `stocker`
  ADD CONSTRAINT `stocker_ibfk_1` FOREIGN KEY (`id_point_vente`) REFERENCES `point_de_vente` (`id_point_vente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stocker_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
