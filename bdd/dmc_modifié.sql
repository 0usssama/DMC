-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 21 avr. 2019 à 13:31
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `email_client`, `adresse_client`, `catego_client`, `motpass_client`, `raison_social_client`, `id_admin`) VALUES
(9, 'adjroud', 'mohamed amine', 'adjroudamine2008@gmail.com', 'redjas/mila', 'particulier', '$2y$10$EOTzT/j5k6nTFF5KqWu2a.wD4h7g2kFD76bjPOhaEwGHqNZkxsXVO', '', 2),
(10, 'hafsi', 'karim', 'fggddfgfg@gmail.com', 'fgdfggffdgf', 'particulier', '$2y$10$r4tA8jsE6y84vePVCKTIx.MgyS/w44dqcQkRSNuMMI3EXua6F1ATy', '', 2);

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

--
-- Déchargement des données de la table `commander`
--

INSERT INTO `commander` (`date_comd`, `etat_comd`, `qte_p_comd`, `id_client`, `id_prod`) VALUES
('2019-04-21', 'en cours', 2, 10, 54),
('2019-04-21', 'en cours', 1, 10, 47),
('2019-04-21', 'en cours', 1, 10, 49);

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

DROP TABLE IF EXISTS `date`;
CREATE TABLE IF NOT EXISTS `date` (
  `id_date` int(11) NOT NULL AUTO_INCREMENT,
  `date_deb_prom` date DEFAULT NULL,
  `date_fin_prom` date DEFAULT NULL,
  PRIMARY KEY (`id_date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`id_famille`, `titre_famille`, `image_famille`, `etat_famille`, `id_admin`) VALUES
(16, 'imprimantes code Ã  barre', '../upload/imgff34382d7dc7403db09f12f45aa3f910pSI.jpg', 'disponible', NULL),
(17, 'scanner lecteurs code a barre', '../upload/kisspng-barcode-scanners-computer-icons-image-scanner-qr-c-barcode-vector-5adea261adbdf7.3380228115245400017117.jpg', 'disponible', NULL),
(18, 'Terminaux portables', '../upload/30314.png', 'disponible', NULL),
(19, 'Consommables ', '../upload/662055_paper_512x512.png', 'disponible', NULL),
(20, 'Terminaux point de vente', '../upload/44388.png', 'disponible', NULL),
(22, 'Imprimante a badge', '../upload/662055_paper_512x512.png', 'disponible', NULL),
(23, 'Imprimantes reÃ§ue', '../upload/662055_paper_512x512.png', 'disponible', NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_imag`, `url_imag`, `image1`, `image2`, `image3`, `id_prod`, `id_point_vente`) VALUES
(10, 'upload/4.jpg', 'upload/cam3.jpg', 'upload/4.jpg', 'upload/3.jpg', NULL, NULL),
(11, 'upload/amine.jpg', 'upload/', 'upload/', 'upload/', NULL, NULL),
(12, 'upload/4.jpg', 'upload/01_b_car.jpg', 'upload/02_o_car.jpg', 'upload/04_g_car.jpg', NULL, NULL),
(13, 'upload/04_g_car.jpg', 'upload/03_r_car.jpg', 'upload/01_b_car.jpg', 'upload/04_g_car.jpg', NULL, NULL),
(19, 'upload/imga7ae88cd429c0999d286fc2f25f6b52cavery-monarch-adtp1-203-dpi.jpg', 'upload/imga7ae88cd429c0999d286fc2f25f6b52cavery-monarch-adtp1-203-dpi.jpg', 'upload/imga7ae88cd429c0999d286fc2f25f6b52cavery-monarch-adtp1-203-dpi.jpg', 'upload/imga7ae88cd429c0999d286fc2f25f6b52cavery-monarch-adtp1-203-dpi.jpg', NULL, NULL),
(20, 'upload/imga7ae88cd429c0999d286fc2f25f6b52cavery-monarch-adtp1-203-dpi.jpg', 'upload/img0a04cee8c6414585acb21ae4745b110fINTERMEC PD43  03.jpg', 'upload/img3b5b4808e20a74a7fca258ced56d19d1Godex G500 2.png', 'upload/img30c9db6b9271d2fbeede19fd780e3267Smart-pos-S3120.png', NULL, NULL),
(27, 'upload/cam2.jpg', 'upload/4.jpg', 'upload/cam3.jpg', 'upload/cam1.jpg', 47, NULL),
(29, 'upload/img0e1ae8fb56d1a70549c0d5546ab1ed77Honeywell-Eclipse-5145-1.jpg', 'upload/imga88543a2b7f772b8ebbf815fe4895b05zebra-zt200.jpg', 'upload/imga32253b7a70044ffd84be0fb0b5ab9d2t%82l%82chargement (1).jpg', 'upload/imga996c02e334d9e453d9b0db22722997781WWb-4SCSL._SY606_.jpg', 49, NULL),
(31, 'upload/img0ad454655749a9d3202b602a4140240cINTERMEC PB32  01.jpg', 'upload/img0a3892b9cfa3b3198899b8b97cb0917a3m-cr100-document-reader (2).jpg', 'upload/img0a8dde9efbdd31c8446143776aca7c49GODEX DT2X.jpg', 'upload/img0a04cee8c6414585acb21ae4745b110fINTERMEC PD43  03.jpg', 51, NULL),
(32, 'upload/img00b7ebb727339ad3448c1b6e485b1d31310EE757-38B1-44E8-8621-3B0829ADB2BE.jpg', 'upload/img0b4e017124cab75825afecf96c036b191582225_67774861_medium_barcode-lezers-honeywell-solaris-7980g-7980g-2usbx-0.jpg', 'upload/img0b4e017124cab75825afecf96c036b191582225_67774861_medium_barcode-lezers-honeywell-solaris-7980g-7980g-2usbx-0.jpg', 'upload/img0b4e017124cab75825afecf96c036b191582225_67774861_medium_barcode-lezers-honeywell-solaris-7980g-7980g-2usbx-0.jpg', 52, NULL),
(33, 'upload/img0c7500ed8bd954753f1d64b1951b316d6_2 (1).jpg', 'upload/img0d2d680bb0b89d812582a85345c220c01041965892_Alternate-Image2.JPG', 'upload/img0d338cae2bc04f3852afcd383a0e85cdt%82l%82chargement.jpg', 'upload/img0bc62e4ed8df084bdc1503ee8d42ae90zebra-220xi4 (1).jpg', 53, NULL),
(34, 'upload/img0a8dde9efbdd31c8446143776aca7c49GODEX DT2X.jpg', 'upload/img0b4e017124cab75825afecf96c036b191582225_67774861_medium_barcode-lezers-honeywell-solaris-7980g-7980g-2usbx-0.jpg', 'upload/img0bc62e4ed8df084bdc1503ee8d42ae90zebra-220xi4 (1).jpg', 'upload/img0a3892b9cfa3b3198899b8b97cb0917a3m-cr100-document-reader (2).jpg', 54, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id_marque`, `titre_marque`, `image_marque`, `etat_marque`, `id_admin`) VALUES
(14, 'Fargo', 'upload/fargo.jpg', 'disponible', NULL),
(15, 'PointMan', 'upload/img00e33a077e6c28a476cbcafe71dd10c1pointman-logo-wht-background-2-jpeg-1024x439 (1).jpg', 'disponible', NULL),
(16, 'Honeywell', 'upload/img0b4a8fdea6d81690766df1f700e2d3702000px-Honeywell_logo.svg.png', 'disponible', NULL),
(17, 'TSC', 'upload/img1b8564ef80a3b9f8342556bb75a77912tsc.jpg', 'disponible', NULL),
(18, 'Godex', 'upload/img2bef33c96ea3ced29c9663bd4b530219logo_godex.png', 'disponible', NULL),
(19, 'X Printer', 'upload/img6abc762d53675fbd5322b2898363aeeaxprinter-logo-png-transparent.png', 'disponible', NULL),
(20, 'Lexmark', 'upload/img8bb50ca0d95730034b9432d364ceee5atâ€šlâ€šchargement.png', 'disponible', NULL),
(21, 'zebra', 'upload/img9b558b7d16f54db426b5541bb2f26c71Zebra_tech_logo15.png', 'disponible', NULL),
(22, 'Avery Dennison', 'upload/img29dc4e7be2e65da9eedd7a429d36c7e9LOSQXL_MI2_AVeRY_DennISOn_00_02012012.jpg', 'disponible', NULL),
(23, 'moul el site', 'upload/zaki.jpg', 'disponible', NULL),
(24, 'na9iss arba3a', 'upload/amine.jpg', 'disponible', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `ordre_produit` int(11) NOT NULL DEFAULT '16',
  `alaune_produit` int(1) NOT NULL DEFAULT '0',
  `id_admin` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prod`),
  KEY `id_client` (`id_client`),
  KEY `id_marque` (`id_marque`),
  KEY `id_famille` (`id_famille`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `date_prod`, `nom_prod`, `description_prod`, `id_marque`, `id_famille`, `prix_detail`, `prix_gros`, `qnt_detail`, `qnt_gros`, `caracteristiques_prod`, `etat_prod`, `ordre_produit`, `alaune_produit`, `id_admin`, `id_client`) VALUES
(47, '2019-04-15 13:13:33', 'imprimante ticket', 'Descriptiondsfsdfsdfsdf', 18, 20, '2000', '2', 1, 45, 'Caracteristiquefgfdgdsgs', 'disponible', 15, 1, NULL, NULL),
(49, '2019-04-17 21:35:44', 'tablette samsung', 'feifhzeiofhzoiehfoiz', 18, 16, '4300', '4200', 42, 41, 'ifzoiehfozehoih', 'disponible', 16, 1, NULL, NULL),
(51, '2019-04-18 13:06:30', 'zaki2', 'Descriptionezrzerzr', 21, 17, '2000', '1', 3, 5, 'Caracteristiquesrsggre', 'disponible', 16, 0, NULL, NULL),
(52, '2019-04-18 13:07:25', 'fdsfdfsfsfdf', 'Description555', 20, 20, '4000', '55', 55, 55, 'Caracteristiques55555', 'disponible', 16, 0, NULL, NULL),
(53, '2019-04-18 13:08:16', 'azerrtyyu', 'Description546456456', 22, 23, '115', '5875', 75, 55, 'Caracteristiques575', 'disponible', 16, 0, NULL, NULL),
(54, '2019-04-21 11:21:47', 'scanner', 'Descriptiongfdgfgdfgdfgdfgdfgdf', 20, 18, '25000', '500', 50, 50, 'Caracteristiquesgfdgdgdfgdfg', 'disponible', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `promouvoir`
--

DROP TABLE IF EXISTS `promouvoir`;
CREATE TABLE IF NOT EXISTS `promouvoir` (
  `titre_promo` text,
  `etat_promo` text,
  `image_promo` text,
  `id_prod` int(11) DEFAULT NULL,
  `id_date` date DEFAULT NULL,
  `pourcentage` int(11) DEFAULT NULL,
  KEY `id_date` (`id_date`),
  KEY `id_prod` (`id_prod`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
