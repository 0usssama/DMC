-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 17 mai 2019 à 00:18
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
-- Base de données :  `dmc_2`
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `motpass_admin`, `email_admin`, `role_admin`, `code_recup_admin`, `etat_admin`) VALUES
(1, 'zaki', '$2y$10$k0m/fQiuGzzvTcQu72txJulalY1yCvozrUVqYtUGBAtrqR4LqXuUq', 'farizaki2015@gmail.com', 'normal', NULL, 'active'),
(2, 'zetchi', '$2y$10$vSS/Tjlg77K4B2IJMK5boeKgwzmuuV0FHPM72.nCzcKGlzSXoI1Zq', 'gfffffgfff@gfgf.com', 'superadmin', NULL, 'active'),
(3, 'oussama', '$2y$10$k0m/fQiuGzzvTcQu72txJulalY1yCvozrUVqYtUGBAtrqR4LqXuUq', 'oussama@benounnas.dz', 'superadmin', NULL, 'active');

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
  `tel_client` varchar(255) DEFAULT NULL,
  `adresse_client` varchar(45) DEFAULT NULL,
  `catego_client` varchar(45) DEFAULT NULL,
  `motpass_client` varchar(255) DEFAULT NULL,
  `raison_social_client` varchar(45) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_client`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `email_client`, `tel_client`, `adresse_client`, `catego_client`, `motpass_client`, `raison_social_client`, `id_admin`) VALUES
(13, 'Belhas', 'Zakaria', 'farizaki2015@gmail.com', '0661622523', 'cite 1000 logement eucalyptus', 'particulier', '$2y$10$BWLRu/TwoQMfeZE8XLlXTetGEPweyBm6eLfr1Nw0qhhTM8w.O23Au', '/', 1),
(15, 'zetchi', 'kheireddine', 'zetchifaf@gmail.com', NULL, 'dely brahim 16600 alger', 'professionnel', '$2y$10$jQyAnGS5agDvZJfK23lCROIqdnMak/tl03kMvXsG2zNSeNE9MxC0m', 'cosider', 1),
(16, 'oussama', 'benounnas', 'benounnas@oussama.com', NULL, 'ouled fayet', 'particulier', '$2y$10$6rYPcTz3Gnt77KikhnemhuNPtdPB/bNgTQoFcLnaoFN2TuOJcETNW', '', 2),
(17, 'tabiou', 'amira', 'tabiou@gmail.com', NULL, 'tebessa', 'particulier', '$2y$10$ltmXTaNCtC3n8VLQ/2BAqeGsV9vgvaIX4x13siuMXhejlt8UG6WiK', '', 2),
(18, 'oussama', 'benounnas', 'benounnas.oussama@gmail.com', '0558905764', 'ouled fayet', 'particulier', '$2y$10$bG.UTXFTb6f7exMfCG6u7eD6RsPOQFAUT7GM5CCwrXDfJjy9Z.E4S', '/', 2),
(19, 'oussamation', 'benounnasation', 'benounnas.oussama@gmail.com', NULL, 'ouled fayet', 'particulier', '$2y$10$jUBVKQsmIS2m5yVisRiTYOjGVChizruHp82fk0qXVhxiVJlwudP4m', '', 2),
(20, 'benounnas23', 'benounnas23', 'benounnas.oussama@gmail.com', NULL, 'ouled fayet', 'particulier', '$2y$10$KvpI8HiWmD7tYSJJYp41E.8r0GHdDheDHEY3eqQQg6VMcFJru.9QG', '', 2),
(21, 'benounnas23', 'benounnas23', 'benounnas.oussama@gmail.com', NULL, 'ouled fayet', 'particulier', '$2y$10$47I0IiLdU/x0vp1MGeGmA.21cxCnmyfuYlKInyqOEdRCt.lQD7sO.', '', 2),
(22, 'benounnas23', 'oussama4', 'benounnas.oussama@gmail.com', NULL, 'ouled fayet', 'particulier', '$2y$10$I/oUT1O/YCJ4EjMPsDmNt.Mcf3JBx1H9hCZ9DQik9YZmvufOXB.TO', '', 2),
(23, 'adjroud', 'amine', 'amine.adjroud@gmail.com', '0558905764', 'fort de l\'eau', 'particulier', '$2y$10$KoO6QmBh972xxOjI1iOdluoiHgvYxlMX6Gdg4DyJYPfRzIilcmLHW', '', 2),
(24, 'Mahrez', 'Ryad', 'ryadmahez@dmcondz.com', '0558905764', 'cite 220 logement batiment', 'particulier', '$2y$10$a.EicrRTXLBPZD1gL.y2MuzDVvSYVS9Vx20PN6v0Nahnhz7LAzdPi', '', 2);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_comd` int(11) NOT NULL AUTO_INCREMENT,
  `date_comd` varchar(255) DEFAULT NULL,
  `id_client` int(11) NOT NULL,
  `etat_comd` varchar(15) DEFAULT NULL,
  `elements_produit` text,
  `id_point_vente` int(11) NOT NULL DEFAULT '16',
  PRIMARY KEY (`id_comd`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_comd`, `date_comd`, `id_client`, `etat_comd`, `elements_produit`, `id_point_vente`) VALUES
(2, NULL, 11, NULL, '{\"listeid\":\"49/47/53/\", \"titreProduit47\":\"imprimante ticket\", \"qteProduit47\":\"1\", \"prixProduit47\":\"2000\", \"totalProduit47\":\"2000\", \"titreProduit53\":\"azerrtyyu\", \"qteProduit53\":\"1\", \"prixProduit53\":\"115\", \"totalProduit53\":\"115\", \"qteGeneral\":\"2\", \"totalGeneral\":\"2115\", \"idClient\":\"11\", \"nom\":\"oussama\", \"prenom\":\"oussama\", \"email\":\"oussama@benounnas.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"\" }', 16),
(3, NULL, 11, NULL, '{\"listeid\":\"49/47/53/\", \"titreProduit47\":\"imprimante ticket\", \"qteProduit47\":\"1\", \"prixProduit47\":\"2000\", \"totalProduit47\":\"2000\", \"titreProduit53\":\"azerrtyyu\", \"qteProduit53\":\"1\", \"prixProduit53\":\"115\", \"totalProduit53\":\"115\", \"qteGeneral\":\"2\", \"totalGeneral\":\"2115\", \"idClient\":\"11\", \"nom\":\"oussama\", \"prenom\":\"oussama\", \"email\":\"oussama@benounnas.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"\" }', 16),
(4, NULL, 11, NULL, '{\"listeid\":\"49/47/53/\", \"titreProduit47\":\"imprimante ticket\", \"qteProduit47\":\"1\", \"prixProduit47\":\"2000\", \"totalProduit47\":\"2000\", \"titreProduit53\":\"azerrtyyu\", \"qteProduit53\":\"1\", \"prixProduit53\":\"115\", \"totalProduit53\":\"115\", \"qteGeneral\":\"2\", \"totalGeneral\":\"2115\", \"idClient\":\"11\", \"nom\":\"oussama\", \"prenom\":\"oussama\", \"email\":\"oussama@benounnas.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"\" }', 16),
(5, NULL, 14, NULL, '{\"listeid\":\"55/55/\", \"titreProduit55\":\"dfsfdfs\", \"qteProduit55\":\"1\", \"prixProduit55\":\"22\", \"totalProduit55\":\"22\", \"qteGeneral\":\"1\", \"totalGeneral\":\"22\", \"idClient\":\"14\", \"nom\":\"adjroud\", \"prenom\":\"amine\", \"email\":\"fggddfgfg@gmail.com\", \"adresse\":\"lido boedj el kifan\", \"telephone\":\"\" }', 16),
(6, NULL, 13, NULL, '{\"listeid\":\"/\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"belhas\", \"prenom\":\"zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"\" }', 16),
(7, NULL, 13, NULL, '{\"listeid\":\"/59/57/\", \"titreProduit59\":\"MC67\", \"qteProduit59\":\"4\", \"prixProduit59\":\"12500\", \"totalProduit59\":\"50000\", \"titreProduit57\":\"ADTP1â„¢\", \"qteProduit57\":\"1\", \"prixProduit57\":\"70000\", \"totalProduit57\":\"70000\", \"qteGeneral\":\"5\", \"totalGeneral\":\"120000\", \"idClient\":\"13\", \"nom\":\"belhas\", \"prenom\":\"zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"\" }', 0),
(8, '04/29/2019 12:33:39', 13, 'valider', '{\"listeid\":\"/59/57/\", \"titreProduit59\":\"MC67\", \"qteProduit59\":\"2\", \"prixProduit59\":\"25000\", \"totalProduit59\":\"50000\", \"titreProduit57\":\"ADTP1â„¢\", \"qteProduit57\":\"2\", \"prixProduit57\":\"35000\", \"totalProduit57\":\"70000\", \"qteGeneral\":\"4\", \"totalGeneral\":\"240000\", \"idClient\":\"13\", \"nom\":\"krim\", \"prenom\":\"adel\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"05438855555\" }', 0),
(9, NULL, 13, NULL, '{\"listeid\":\"/59/57/\", \"titreProduit59\":\"MC67\", \"qteProduit59\":\"2\", \"prixProduit59\":\"25000\", \"totalProduit59\":\"50000\", \"titreProduit57\":\"ADTP1â„¢\", \"qteProduit57\":\"2\", \"prixProduit57\":\"35000\", \"totalProduit57\":\"70000\", \"qteGeneral\":\"4\", \"totalGeneral\":\"240000\", \"idClient\":\"13\", \"nom\":\"krim\", \"prenom\":\"adel\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"05438855555\" }', 0),
(10, NULL, 13, NULL, '{\"listeid\":\"/59/57/\", \"titreProduit59\":\"MC67\", \"qteProduit59\":\"2\", \"prixProduit59\":\"25000\", \"totalProduit59\":\"50000\", \"titreProduit57\":\"ADTP1â„¢\", \"qteProduit57\":\"2\", \"prixProduit57\":\"35000\", \"totalProduit57\":\"70000\", \"qteGeneral\":\"4\", \"totalGeneral\":\"240000\", \"idClient\":\"13\", \"nom\":\"krim\", \"prenom\":\"adel\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"05438855555\" }', 0),
(11, NULL, 13, NULL, '{\"listeid\":\"/59/57/\", \"titreProduit59\":\"MC67\", \"qteProduit59\":\"2\", \"prixProduit59\":\"25000\", \"totalProduit59\":\"50000\", \"titreProduit57\":\"ADTP1â„¢\", \"qteProduit57\":\"2\", \"prixProduit57\":\"35000\", \"totalProduit57\":\"70000\", \"qteGeneral\":\"4\", \"totalGeneral\":\"240000\", \"idClient\":\"13\", \"nom\":\"krim\", \"prenom\":\"adel\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"05438855555\" }', 0),
(12, NULL, 13, NULL, '{\"listeid\":\"/59/57/\", \"titreProduit59\":\"MC67\", \"qteProduit59\":\"2\", \"prixProduit59\":\"25000\", \"totalProduit59\":\"50000\", \"titreProduit57\":\"ADTP1â„¢\", \"qteProduit57\":\"2\", \"prixProduit57\":\"35000\", \"totalProduit57\":\"70000\", \"qteGeneral\":\"4\", \"totalGeneral\":\"240000\", \"idClient\":\"13\", \"nom\":\"krim\", \"prenom\":\"adel\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"05438855555\" }', 0),
(13, NULL, 13, NULL, '{\"listeid\":\"/59/57/\", \"titreProduit59\":\"MC67\", \"qteProduit59\":\"2\", \"prixProduit59\":\"25000\", \"totalProduit59\":\"50000\", \"titreProduit57\":\"ADTP1â„¢\", \"qteProduit57\":\"2\", \"prixProduit57\":\"35000\", \"totalProduit57\":\"70000\", \"qteGeneral\":\"4\", \"totalGeneral\":\"240000\", \"idClient\":\"13\", \"nom\":\"krim\", \"prenom\":\"adel\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"05438855555\" }', 0),
(14, NULL, 13, NULL, '{\"listeid\":\"/59/57/\", \"titreProduit59\":\"MC67\", \"qteProduit59\":\"2\", \"prixProduit59\":\"25000\", \"totalProduit59\":\"50000\", \"titreProduit57\":\"ADTP1â„¢\", \"qteProduit57\":\"2\", \"prixProduit57\":\"35000\", \"totalProduit57\":\"70000\", \"qteGeneral\":\"4\", \"totalGeneral\":\"240000\", \"idClient\":\"13\", \"nom\":\"krim\", \"prenom\":\"adel\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"05438855555\" }', 0),
(16, NULL, 13, NULL, '{\"listeid\":\"59/57/\", \"titreProduit57\":\"ADTP1â„¢\", \"qteProduit57\":\"1\", \"prixProduit57\":\"70000\", \"totalProduit57\":\"70000\", \"qteGeneral\":\"1\", \"totalGeneral\":\"70000\", \"idClient\":\"13\", \"nom\":\"krim\", \"prenom\":\"adel\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"05438855555\" }', 16),
(17, NULL, 13, NULL, '{\"listeid\":\"59/57/\", \"titreProduit57\":\"ADTP1â„¢\", \"qteProduit57\":\"1\", \"prixProduit57\":\"70000\", \"totalProduit57\":\"70000\", \"qteGeneral\":\"1\", \"totalGeneral\":\"70000\", \"idClient\":\"13\", \"nom\":\"krim\", \"prenom\":\"adel\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"05438855555\" }', 16),
(18, NULL, 13, NULL, '{\"listeid\":\"/59/57/\", \"titreProduit59\":\"MC67\", \"qteProduit59\":\"1\", \"prixProduit59\":\"50000\", \"totalProduit59\":\"50000\", \"titreProduit57\":\"ADTP1â„¢\", \"qteProduit57\":\"1\", \"prixProduit57\":\"70000\", \"totalProduit57\":\"70000\", \"qteGeneral\":\"2\", \"totalGeneral\":\"120000\", \"idClient\":\"13\", \"nom\":\"krim\", \"prenom\":\"adel\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"05438855555\" }', 16),
(19, NULL, 13, NULL, '{\"listeid\":\"/59/57/\", \"titreProduit59\":\"MC67\", \"qteProduit59\":\"2\", \"prixProduit59\":\"25000\", \"totalProduit59\":\"50000\", \"titreProduit57\":\"ADTP1â„¢\", \"qteProduit57\":\"2\", \"prixProduit57\":\"35000\", \"totalProduit57\":\"70000\", \"qteGeneral\":\"4\", \"totalGeneral\":\"120000\", \"idClient\":\"13\", \"nom\":\"krim\", \"prenom\":\"adel\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"05438855555\" }', 16),
(20, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"krim\", \"prenom\":\"adel\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"05438855555\" }', 16),
(21, NULL, 15, NULL, '{\"listeid\":\"/2/3/4/\", \"titreProduit2\":\"PM200\", \"qteProduit2\":\"1\", \"prixProduit2\":\"70000\", \"totalProduit2\":\"70000\", \"titreProduit3\":\"PM200\", \"qteProduit3\":\"1\", \"prixProduit3\":\"50000\", \"totalProduit3\":\"50000\", \"titreProduit4\":\"PM200\", \"qteProduit4\":\"1\", \"prixProduit4\":\"50000\", \"totalProduit4\":\"50000\", \"qteGeneral\":\"3\", \"totalGeneral\":\"170000\", \"idClient\":\"15\", \"nom\":\"zetchi\", \"prenom\":\"kheireddine\", \"email\":\"zetchifaf@gmail.com\", \"adresse\":\"dely brahim 16600 alger\", \"telephone\":\"\" }', 16),
(22, NULL, 15, NULL, '{\"listeid\":\"/2/3/4/\", \"titreProduit2\":\"PM200\", \"qteProduit2\":\"4\", \"prixProduit2\":\"17500\", \"totalProduit2\":\"70000\", \"titreProduit3\":\"PM200\", \"qteProduit3\":\"4\", \"prixProduit3\":\"50000\", \"totalProduit3\":\"200000\", \"titreProduit4\":\"PM200\", \"qteProduit4\":\"3\", \"prixProduit4\":\"16666.666666667\", \"totalProduit4\":\"50000\", \"qteGeneral\":\"11\", \"totalGeneral\":\"1230000\", \"idClient\":\"15\", \"nom\":\"zetchi\", \"prenom\":\"kheireddine\", \"email\":\"zetchifaf@gmail.com\", \"adresse\":\"dely brahim 16600 alger\", \"telephone\":\"\" }', 16),
(27, NULL, 16, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"16\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas@oussama.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"\" }', 16),
(32, NULL, 13, NULL, '{\"listeid\":\"015/15/\", \"titreProduit15\":\"LI4278\", \"qteProduit15\":\"5\", \"prixProduit15\":\"58000\", \"totalProduit15\":\"290000\", \"qteGeneral\":\"5\", \"totalGeneral\":\"1450000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(33, NULL, 13, NULL, '{\"listeid\":\"015/15/\", \"titreProduit15\":\"LI4278\", \"qteProduit15\":\"5\", \"prixProduit15\":\"58000\", \"totalProduit15\":\"290000\", \"qteGeneral\":\"5\", \"totalGeneral\":\"1450000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(34, NULL, 13, NULL, '{\"listeid\":\"015/15/\", \"titreProduit15\":\"LI4278\", \"qteProduit15\":\"5\", \"prixProduit15\":\"58000\", \"totalProduit15\":\"290000\", \"qteGeneral\":\"5\", \"totalGeneral\":\"1450000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(35, NULL, 13, NULL, '{\"listeid\":\"015/15/\", \"titreProduit15\":\"LI4278\", \"qteProduit15\":\"5\", \"prixProduit15\":\"58000\", \"totalProduit15\":\"290000\", \"qteGeneral\":\"5\", \"totalGeneral\":\"1450000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(36, NULL, 13, NULL, '{\"listeid\":\"015/15/\", \"titreProduit15\":\"LI4278\", \"qteProduit15\":\"5\", \"prixProduit15\":\"58000\", \"totalProduit15\":\"290000\", \"qteGeneral\":\"5\", \"totalGeneral\":\"1450000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 17),
(37, NULL, 13, NULL, '{\"listeid\":\"015/15/\", \"titreProduit15\":\"LI4278\", \"qteProduit15\":\"5\", \"prixProduit15\":\"58000\", \"totalProduit15\":\"290000\", \"qteGeneral\":\"5\", \"totalGeneral\":\"1450000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 17),
(38, NULL, 13, NULL, '{\"listeid\":\"015/15/\", \"titreProduit15\":\"LI4278\", \"qteProduit15\":\"5\", \"prixProduit15\":\"58000\", \"totalProduit15\":\"290000\", \"qteGeneral\":\"5\", \"totalGeneral\":\"1450000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 17),
(39, NULL, 13, NULL, '{\"listeid\":\"015/15/\", \"titreProduit15\":\"LI4278\", \"qteProduit15\":\"5\", \"prixProduit15\":\"58000\", \"totalProduit15\":\"290000\", \"qteGeneral\":\"5\", \"totalGeneral\":\"1450000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 22),
(40, NULL, 13, NULL, '{\"listeid\":\"015/15/\", \"titreProduit15\":\"LI4278\", \"qteProduit15\":\"5\", \"prixProduit15\":\"58000\", \"totalProduit15\":\"290000\", \"qteGeneral\":\"5\", \"totalGeneral\":\"1450000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(41, NULL, 13, NULL, '{\"listeid\":\"015/15/\", \"titreProduit15\":\"LI4278\", \"qteProduit15\":\"5\", \"prixProduit15\":\"58000\", \"totalProduit15\":\"290000\", \"qteGeneral\":\"5\", \"totalGeneral\":\"1450000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(49, NULL, 13, NULL, '{\"listeid\":\"4/4/17/11/\", \"titreProduit4\":\"PM200\", \"qteProduit4\":\"2\", \"prixProduit4\":\"50000\", \"totalProduit4\":\"100000\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"1\", \"prixProduit17\":\"40000\", \"totalProduit17\":\"40000\", \"titreProduit11\":\"ADTP1\", \"qteProduit11\":\"2\", \"prixProduit11\":\"80000\", \"totalProduit11\":\"160000\", \"qteGeneral\":\"5\", \"totalGeneral\":\"560000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(51, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"\", \"telephone\":\"0661622523\" }', 16),
(52, NULL, 13, NULL, '{\"listeid\":\"4/17/11/\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"1\", \"prixProduit17\":\"40000\", \"totalProduit17\":\"40000\", \"titreProduit11\":\"ADTP1\", \"qteProduit11\":\"1\", \"prixProduit11\":\"80000\", \"totalProduit11\":\"80000\", \"qteGeneral\":\"2\", \"totalGeneral\":\"120000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(54, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"\", \"telephone\":\"0661622523\" }', 16),
(55, NULL, 18, NULL, '{\"listeid\":\"/4/\", \"titreProduit4\":\"PM200\", \"qteProduit4\":\"2\", \"prixProduit4\":\"50000\", \"totalProduit4\":\"100000\", \"qteGeneral\":\"2\", \"totalGeneral\":\"200000\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"adresse\":\"benounnas.oussama@gmail.com\", \"telephone\":\"\" }', 16),
(56, NULL, 18, NULL, '{\"listeid\":\"17/17/\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"1\", \"prixProduit17\":\"40000\", \"totalProduit17\":\"40000\", \"qteGeneral\":\"1\", \"totalGeneral\":\"40000\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"adresse\":\"\", \"telephone\":\"\" }', 16),
(57, NULL, 18, NULL, '{\"listeid\":\"/17/\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"2\", \"prixProduit17\":\"40000\", \"totalProduit17\":\"80000\", \"qteGeneral\":\"2\", \"totalGeneral\":\"160000\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"adresse\":\"\", \"telephone\":\"\" }', 16),
(59, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(60, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"\", \"telephone\":\"0661622523\" }', 16),
(61, NULL, 17, NULL, '{\"listeid\":\"/17/4/11/\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"1\", \"prixProduit17\":\"40000\", \"totalProduit17\":\"40000\", \"titreProduit4\":\"PM200\", \"qteProduit4\":\"1\", \"prixProduit4\":\"50000\", \"totalProduit4\":\"50000\", \"titreProduit11\":\"ADTP1\", \"qteProduit11\":\"1\", \"prixProduit11\":\"80000\", \"totalProduit11\":\"80000\", \"qteGeneral\":\"3\", \"totalGeneral\":\"170000\", \"idClient\":\"17\", \"nom\":\"tabiou\", \"prenom\":\"amira\", \"email\":\"tabiou@gmail.com\", \"adresse\":\"tebessa\", \"telephone\":\"\" }', 16),
(62, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(64, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"\", \"telephone\":\"0661622523\" }', 16),
(65, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(66, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"\", \"telephone\":\"0661622523\" }', 16),
(67, NULL, 13, NULL, '{\"listeid\":\"/17/4/\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"3\", \"prixProduit17\":\"13333.333333333\", \"totalProduit17\":\"40000\", \"titreProduit4\":\"PM200\", \"qteProduit4\":\"5\", \"prixProduit4\":\"20000\", \"totalProduit4\":\"100000\", \"qteGeneral\":\"8\", \"totalGeneral\":\"140000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(68, NULL, 13, NULL, '{\"listeid\":\"4/17/11/\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"1\", \"prixProduit17\":\"40000\", \"totalProduit17\":\"40000\", \"titreProduit11\":\"ADTP1\", \"qteProduit11\":\"1\", \"prixProduit11\":\"80000\", \"totalProduit11\":\"80000\", \"qteGeneral\":\"2\", \"totalGeneral\":\"120000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"\", \"telephone\":\"0661622523\" }', 16),
(70, NULL, 13, NULL, '{\"listeid\":\"/4/17/11/\", \"titreProduit4\":\"PM200\", \"qteProduit4\":\"1\", \"prixProduit4\":\"50000\", \"totalProduit4\":\"50000\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"1\", \"prixProduit17\":\"40000\", \"totalProduit17\":\"40000\", \"titreProduit11\":\"ADTP1\", \"qteProduit11\":\"1\", \"prixProduit11\":\"80000\", \"totalProduit11\":\"80000\", \"qteGeneral\":\"3\", \"totalGeneral\":\"170000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"\", \"telephone\":\"0661622523\" }', 16),
(71, NULL, 13, NULL, '{\"listeid\":\"/23/24/27/\", \"titreProduit23\":\"TE200\", \"qteProduit23\":\"1\", \"prixProduit23\":\"90000\", \"totalProduit23\":\"90000\", \"titreProduit24\":\"ADTP2\", \"qteProduit24\":\"1\", \"prixProduit24\":\"90000\", \"totalProduit24\":\"90000\", \"titreProduit27\":\"LI4278\", \"qteProduit27\":\"1\", \"prixProduit27\":\"45000\", \"totalProduit27\":\"45000\", \"qteGeneral\":\"3\", \"totalGeneral\":\"225000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(72, NULL, 13, NULL, '{\"listeid\":\"/23/24/27/\", \"titreProduit23\":\"TE200\", \"qteProduit23\":\"1\", \"prixProduit23\":\"90000\", \"totalProduit23\":\"90000\", \"titreProduit24\":\"ADTP2\", \"qteProduit24\":\"1\", \"prixProduit24\":\"90000\", \"totalProduit24\":\"90000\", \"titreProduit27\":\"LI4278\", \"qteProduit27\":\"1\", \"prixProduit27\":\"45000\", \"totalProduit27\":\"45000\", \"qteGeneral\":\"3\", \"totalGeneral\":\"225000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 17),
(73, NULL, 18, NULL, '{\"listeid\":\"/23/24/\", \"titreProduit23\":\"TE200\", \"qteProduit23\":\"1\", \"prixProduit23\":\"90000\", \"totalProduit23\":\"90000\", \"titreProduit24\":\"ADTP2\", \"qteProduit24\":\"1\", \"prixProduit24\":\"90000\", \"totalProduit24\":\"90000\", \"qteGeneral\":\"2\", \"totalGeneral\":\"180000\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"0558905764\" }', 16),
(74, NULL, 18, NULL, '{\"listeid\":\"/24/23/\", \"titreProduit24\":\"ADTP2\", \"qteProduit24\":\"1\", \"prixProduit24\":\"90000\", \"totalProduit24\":\"90000\", \"titreProduit23\":\"TE200\", \"qteProduit23\":\"1\", \"prixProduit23\":\"90000\", \"totalProduit23\":\"90000\", \"qteGeneral\":\"2\", \"totalGeneral\":\"180000\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"0558905764\" }', 16),
(75, NULL, 18, NULL, '{\"listeid\":\"23/24/27/\", \"titreProduit24\":\"ADTP2\", \"qteProduit24\":\"1\", \"prixProduit24\":\"90000\", \"totalProduit24\":\"90000\", \"titreProduit27\":\"LI4278\", \"qteProduit27\":\"2\", \"prixProduit27\":\"45000\", \"totalProduit27\":\"90000\", \"qteGeneral\":\"3\", \"totalGeneral\":\"270000\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"adresse\":\"\", \"telephone\":\"0558905764\" }', 18),
(76, NULL, 18, NULL, '{\"listeid\":\"23/23/24/27/\", \"titreProduit23\":\"TE200\", \"qteProduit23\":\"1\", \"prixProduit23\":\"90000\", \"totalProduit23\":\"90000\", \"titreProduit24\":\"ADTP2\", \"qteProduit24\":\"2\", \"prixProduit24\":\"90000\", \"totalProduit24\":\"180000\", \"titreProduit27\":\"LI4278\", \"qteProduit27\":\"2\", \"prixProduit27\":\"45000\", \"totalProduit27\":\"90000\", \"qteGeneral\":\"5\", \"totalGeneral\":\"630000\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"adresse\":\"\", \"telephone\":\"0558905764\" }', 17),
(77, NULL, 18, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"\", \"totalGeneral\":\"\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"telephone\":\"0558905764\" }', 17),
(78, NULL, 18, NULL, '{\"listeid\":\"/24/23/\", \"titreProduit24\":\"ADTP2\", \"qteProduit24\":\"2\", \"prixProduit24\":\"90000\", \"totalProduit24\":\"180000\", \"titreProduit23\":\"TE200\", \"qteProduit23\":\"2\", \"prixProduit23\":\"90000\", \"totalProduit23\":\"180000\", \"qteGeneral\":\"4\", \"totalGeneral\":\"720000\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"telephone\":\"0558905764\" }', 17),
(79, NULL, 18, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"\", \"totalGeneral\":\"\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"telephone\":\"0558905764\" }', 17),
(80, NULL, 18, NULL, '{\"listeid\":\"/24/23/\", \"titreProduit24\":\"ADTP2\", \"qteProduit24\":\"2\", \"prixProduit24\":\"90000\", \"totalProduit24\":\"180000\", \"titreProduit23\":\"TE200\", \"qteProduit23\":\"2\", \"prixProduit23\":\"90000\", \"totalProduit23\":\"180000\", \"qteGeneral\":\"4\", \"totalGeneral\":\"720000\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"0558905764\" }', 18),
(83, '05/14/2019 10:50:43', 18, 'valider', '{\"listeid\":\"/23/24/\", \"titreProduit23\":\"TE200\", \"qteProduit23\":\"2\", \"prixProduit23\":\"90000\", \"totalProduit23\":\"180000\", \"titreProduit24\":\"ADTP2\", \"qteProduit24\":\"2\", \"prixProduit24\":\"90000\", \"totalProduit24\":\"180000\", \"qteGeneral\":\"4\", \"totalGeneral\":\"720000\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"0558905764\" }', 16),
(84, '05/15/2019 03:06:38', 13, 'valider', '{\"listeid\":\"/35/32/34/23/\", \"titreProduit35\":\"ROULEAUX PAPIER THERMIQUE\", \"qteProduit35\":\"1\", \"prixProduit35\":\"2000\", \"totalProduit35\":\"2000\", \"titreProduit32\":\"MG08\", \"qteProduit32\":\"1\", \"prixProduit32\":\"48000\", \"totalProduit32\":\"48000\", \"titreProduit34\":\"MC67\", \"qteProduit34\":\"1\", \"prixProduit34\":\"58000\", \"totalProduit34\":\"58000\", \"titreProduit23\":\"TE200\", \"qteProduit23\":\"1\", \"prixProduit23\":\"90000\", \"totalProduit23\":\"90000\", \"qteGeneral\":\"4\", \"totalGeneral\":\"198000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 17),
(85, '05/15/2019 04:16:38', 13, 'valider', '{\"listeid\":\"/27/28/37/24/36/39/40/34/38/\", \"titreProduit27\":\"LI4278\", \"qteProduit27\":\"1\", \"prixProduit27\":\"45000\", \"totalProduit27\":\"45000\", \"titreProduit28\":\"PM8300\", \"qteProduit28\":\"1\", \"prixProduit28\":\"65000\", \"totalProduit28\":\"65000\", \"titreProduit37\":\"Fieldbook-K80\", \"qteProduit37\":\"1\", \"prixProduit37\":\"65000\", \"totalProduit37\":\"65000\", \"titreProduit24\":\"ADTP2\", \"qteProduit24\":\"1\", \"prixProduit24\":\"90000\", \"totalProduit24\":\"90000\", \"titreProduit36\":\"T10\", \"qteProduit36\":\"1\", \"prixProduit36\":\"8000\", \"totalProduit36\":\"8000\", \"titreProduit39\":\"X-20\", \"qteProduit39\":\"1\", \"prixProduit39\":\"72000\", \"totalProduit39\":\"72000\", \"titreProduit40\":\"9906\", \"qteProduit40\":\"1\", \"prixProduit40\":\"67000\", \"totalProduit40\":\"67000\", \"titreProduit34\":\"MC67\", \"qteProduit34\":\"1\", \"prixProduit34\":\"58000\", \"totalProduit34\":\"58000\", \"titreProduit38\":\"W-156\", \"qteProduit38\":\"1\", \"prixProduit38\":\"130000\", \"totalProduit38\":\"130000\", \"qteGeneral\":\"9\", \"totalGeneral\":\"600000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"\", \"telephone\":\"0661622523\" }', 16),
(86, NULL, 13, NULL, '{\"listeid\":\"/\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(87, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"\", \"telephone\":\"0661622523\" }', 16),
(88, '05/15/2019 12:02:32', 13, 'valider', '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"\", \"telephone\":\"0661622523\" }', 16);

-- --------------------------------------------------------

--
-- Structure de la table `concerner`
--

DROP TABLE IF EXISTS `concerner`;
CREATE TABLE IF NOT EXISTS `concerner` (
  `qte_prod_comd` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_comd` int(11) NOT NULL,
  KEY `id_comd` (`id_comd`),
  KEY `id_prod` (`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `evaluer`
--

DROP TABLE IF EXISTS `evaluer`;
CREATE TABLE IF NOT EXISTS `evaluer` (
  `date_ev` datetime DEFAULT CURRENT_TIMESTAMP,
  `nbr_etoils_ev` int(11) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  KEY `id_client` (`id_client`),
  KEY `id_prod` (`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evaluer`
--

INSERT INTO `evaluer` (`date_ev`, `nbr_etoils_ev`, `id_prod`, `id_client`) VALUES
('2019-05-13 00:00:00', 4, 23, 13),
('2019-05-15 00:00:00', 5, 41, 13),
('2019-05-15 00:00:00', 4, 41, 13),
('2019-05-15 00:00:00', 5, 28, 13),
('2019-05-15 00:00:00', 4, 29, 13),
('2019-05-15 00:00:00', 2, 29, 13),
('2019-05-15 00:00:00', 5, 29, 13),
('2019-05-15 00:00:00', 3, 24, 13),
('2019-05-15 00:00:00', 3, 27, 13),
('2019-05-15 00:00:00', 3, 35, 13),
('2019-05-15 00:00:00', 2, 37, 13),
('2019-05-15 00:00:00', 4, 39, 13),
('2019-05-15 00:00:00', 5, 40, 13),
('2019-05-15 00:00:00', 3, 32, 13),
('2019-05-15 00:00:00', 3, 36, 13),
('2019-05-15 00:00:00', 5, 38, 13),
('2019-05-15 00:00:00', 5, 34, 13),
('2019-05-15 00:00:00', 3, 28, 15),
('2019-05-15 00:00:00', 4, 27, 15),
('2019-05-15 00:00:00', 5, 41, 15),
('2019-05-15 00:00:00', 1, 29, 15),
('2019-05-15 00:00:00', 1, 24, 15),
('2019-05-15 00:00:00', 2, 23, 15),
('2019-05-15 00:00:00', 2, 28, 15),
('2019-05-15 00:00:00', 5, 37, 15),
('2019-05-15 00:00:00', 5, 27, 15),
('2019-05-15 00:00:00', 2, 24, 15),
('2019-05-15 00:00:00', 4, 38, 15),
('2019-05-15 00:00:00', 3, 34, 15),
('2019-05-15 00:00:00', 5, 38, 15),
('2019-05-15 00:00:00', 5, 32, 15),
('2019-05-15 00:00:00', 3, 40, 15),
('2019-05-15 00:00:00', 1, 23, 15),
('2019-05-15 00:00:00', 3, 24, 15),
('2019-05-15 00:00:00', 1, 27, 17),
('2019-05-15 00:00:00', 1, 28, 17),
('2019-05-15 00:00:00', 5, 41, 17),
('2019-05-15 00:00:00', 5, 29, 17),
('2019-05-15 00:00:00', 3, 35, 17),
('2019-05-15 00:00:00', 5, 23, 17),
('2019-05-15 00:00:00', 5, 24, 17),
('2019-05-15 00:00:00', 4, 36, 17),
('2019-05-15 00:00:00', 5, 34, 17),
('2019-05-15 00:00:00', 4, 38, 17),
('2019-05-15 00:00:00', 5, 40, 17),
('2019-05-15 00:00:00', 3, 39, 17),
('2019-05-15 00:00:00', 5, 37, 17),
('2019-05-15 00:00:00', 3, 35, 17);

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`id_famille`, `titre_famille`, `image_famille`, `etat_famille`, `id_admin`) VALUES
(24, 'IMPRIMANTES CODE A BARRE', '../upload/img1cb5ac42222a5dd915238d5385e3a403zebra-140xi4.jpg', 'disponible', NULL),
(25, 'SCANNERS LECTEURS CODE A BARRE', '../upload/img0d274fccf8470484631b167891873e5atÃƒÂ©lÃƒÂ©chargement (1).jpg', 'disponible', NULL),
(26, 'CONSOMMABLES', '../upload/img2b5ebbac15f0ebe0a759f06617f0c27fetiquettes-adhesive.jpg', 'disponible', NULL),
(27, 'ACCESSOIRES', '../upload/img2ec2a044d13a00a43b43c3bc8029a1daimages (2).jpg', 'disponible', NULL),
(28, 'IMPRIMANTE A BADGE', '../upload/img0a3892b9cfa3b3198899b8b97cb0917a3m-cr100-document-reader (2).jpg', 'disponible', NULL),
(29, ' IMPRIMANTE REÃ‡UE', '../upload/img0ad454655749a9d3202b602a4140240cINTERMEC PB32  01.jpg', 'disponible', NULL),
(31, 'TERMINAUX MOBILES', '../upload/PM200-A.jpg', 'disponible', NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

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
(35, 'upload/img0ad454655749a9d3202b602a4140240cINTERMEC PB32  01.jpg', 'upload/img0b4e017124cab75825afecf96c036b191582225_67774861_medium_barcode-lezers-honeywell-solaris-7980g-7980g-2usbx-0.jpg', 'upload/img0d274fccf8470484631b167891873e5atÃƒÂ©lÃƒÂ©chargement (1).jpg', 'upload/img0bc62e4ed8df084bdc1503ee8d42ae90zebra-220xi4 (1).jpg', NULL, NULL),
(38, 'upload/img027914df1503d8fe6e155f12b2e7a887avery-monarch-adtp1-203-dpi.jpg', 'upload/adp.jpg', 'upload/Avery-adtp1-3.jpg', 'upload/Avery-head-64-04-TTX-674.jpg', NULL, NULL),
(39, 'upload/maxresdefault.jpg', 'upload/Avery-adtp1-3.jpg', 'upload/Avery-head-64-04-TTX-674.jpg', 'upload/adp.jpg', NULL, NULL),
(40, 'upload/PM200-A.jpg', 'upload/PM450_GUN_pers.png', 'upload/Point-Mobile-PM200-B-2D-Data-Collector-3.jpg', 'upload/productos40_2262.jpg', NULL, NULL),
(41, 'upload/PM200-A.jpg', 'upload/PM450_GUN_pers.png', 'upload/Point-Mobile-PM200-B-2D-Data-Collector-3.jpg', 'upload/productos40_2262.jpg', NULL, NULL),
(42, 'upload/PM200-A.jpg', 'upload/PM450_GUN_pers.png', 'upload/Point-Mobile-PM200-B-2D-Data-Collector-3.jpg', 'upload/productos40_2262.jpg', NULL, NULL),
(43, 'upload/PM200-A.jpg', 'upload/PM450_GUN_pers.png', 'upload/Point-Mobile-PM200-B-2D-Data-Collector-3.jpg', 'upload/productos40_2262.jpg', NULL, NULL),
(44, 'upload/PM200-A.jpg', 'upload/PM450_GUN_pers.png', 'upload/Point-Mobile-PM200-B-2D-Data-Collector-3.jpg', 'upload/productos40_2262.jpg', NULL, NULL),
(45, 'upload/DS_Datacard_SD260_SD360.pdf - Adobe Reader.bmp', 'upload/img1cad7167b8913b722dbb129a92de8c80PM 450  03.jpg', 'upload/img1af9ac264dc59e27036d6ba7b7a3bcd2t%82l%82chargement (3).jpg', 'upload/img1d3b215a70b658308071a278b93c2af8produit_409_image0.jpg', NULL, NULL),
(46, 'upload/img0b4e017124cab75825afecf96c036b191582225_67774861_medium_barcode-lezers-honeywell-solaris-7980g-7980g-2usbx-0.jpg', 'upload/img0f8acc604683b090ac18264930f154cf23844-00-00r (1).jpg', 'upload/img01d9eb73262b201043712b9ff422f6dbzebra-ref-gk42-102520-000 (1).jpg', 'upload/img0effe4b3b63405f4487f2d48236c208eintermec-pc23.jpg', NULL, NULL),
(47, 'upload/img1cb5ac42222a5dd915238d5385e3a403zebra-140xi4.jpg', 'upload/img1f8a69f05685a854307e455b130aa9d6datalogic-powerscan-pm8300-pm8300-d433rb-datalogic-adc-5052461754478.jpg', 'upload/img1d3b215a70b658308071a278b93c2af8produit_409_image0.jpg', 'upload/img1db7046fb59b9a5f3a30a45de5e81b86tÃƒÂ©lÃƒÂ©chargement (2).jpg', NULL, NULL),
(52, 'upload/ADTP2.jpg', 'upload/', 'upload/maxresdefault.jpg', 'upload/5861-13244803.jpg', NULL, NULL),
(55, 'upload/ADTP2.jpg', 'upload/ADTP1â„¢.jpg', 'upload/maxresdefault.jpg', 'upload/5861-10624928.jpg', NULL, NULL),
(56, 'upload/ADTP2.jpg', 'upload/maxresdefault.jpg', 'upload/ADTP1â„¢.jpg', 'upload/ADTP2.jpg', NULL, NULL),
(57, 'upload/5861-10624928.jpg', 'upload/ADTP1â„¢.jpg', 'upload/maxresdefault.jpg', 'upload/ADTP2.jpg', NULL, NULL),
(60, 'upload/li4278bklack.jpg', 'upload/LI4278-dstmeonine.jpg', 'upload/cr0078-sc10007wr.jpg', 'upload/38-209-058-03.jpg', NULL, NULL),
(61, 'upload/li4278bklack.jpg', 'upload/LI4278-dstmeonine.jpg', 'upload/cr0078-sc10007wr.jpg', 'upload/li4278bklack.jpg', NULL, NULL),
(66, 'upload/200_front.png', 'upload/459b1-zara.jpg', 'upload/', 'upload/', NULL, NULL),
(70, 'upload/TSC-TE200-Barcode-Printer_11748027_0b98c0c8f3231ae9f5bbaad8df72f8c8 (1).jpg', 'upload/TE200-3 (Copy).jpg', 'upload/TE200-1 (Copy).jpg', 'upload/TSC-TE200-Barcode-Printer_11748027_0b98c0c8f3231ae9f5bbaad8df72f8c8.jpg', 23, NULL),
(71, 'upload/ADTP2.jpg', 'upload/5861-10624928.jpg', 'upload/ADTP1â„¢.jpg', 'upload/adp.jpg', 24, NULL),
(72, 'upload/ADTP2.jpg', 'upload/5861-13244803.jpg', 'upload/adp.jpg', 'upload/ADTP1â„¢.jpg', NULL, NULL),
(73, 'upload/li4278bklack.jpg', 'upload/38-209-058-03.jpg', 'upload/cr0078-sc10007wr.jpg', 'upload/LI4278-dstmeonine.jpg', NULL, NULL),
(74, 'upload/Z-bre-anciennement-Motorola-symbole-LI4278-Scanner-de-LED-lin-aire-sans-fil-usage-g-n.jpg_640x640.jpg', 'upload/38-209-058-03.jpg', 'upload/LI4278-dstmeonine.jpg', 'upload/img0d274fccf8470484631b167891873e5atÃƒÂ©lÃƒÂ©chargement (1).jpg', 27, NULL),
(75, 'upload/PLP-POWERSCAN-PM9500DK-LEFT-FACING.jpg', 'upload/B76FD2C416C1F69DF252461D9622040B.jpg', 'upload/lecteur-sans-fil-pm8300-datalogic.jpg', 'upload/dlpd8330.gif', 28, NULL),
(76, 'upload/961943732_imprimante-zebra-zt410.jpg', 'upload/imprimante-etiquettes-zebra-zt220-td.jpg', 'upload/maxresdefault.jpg', 'upload/zt410-rear-IMG_0836-1200px.jpg', 29, NULL),
(77, 'upload/mg08.jpg', 'upload/41CCwIcnv8L.jpg', 'upload/I10438070.jpg', 'upload/photo_datalogic-magellan-800i-vonalkod-olvaso-mg0845014110_35572604.jpg', NULL, NULL),
(78, 'upload/mg08.jpg', 'upload/I10438070.jpg', 'upload/41CCwIcnv8L.jpg', 'upload/datalogic-magellan-800i-omnidirectional-presentation-barcode-scanner-1d-and-2d-with-usb-cable__41BDKZ0JMML.jpg', NULL, NULL),
(79, 'upload/mg08 (1).jpg', 'upload/I10438070.jpg', 'upload/41CCwIcnv8L.jpg', 'upload/photo_datalogic-magellan-800i-vonalkod-olvaso-mg0845014110_35572604.jpg', 32, NULL),
(80, 'upload/fond.jpg', 'upload/motorola-mc67-back.jpg', 'upload/strike-alpha-motorola-mc67-car-cradle-al-stk-mot-mc67-32d.jpg', 'upload/ae2409dwdsc_0241.jpg', NULL, NULL),
(81, 'upload/mc67.jpg', 'upload/strike-alpha-motorola-mc67-car-cradle-al-stk-mot-mc67-32d.jpg', 'upload/motorola-mc67-back.jpg', 'upload/cfb8c296-c8d7-4c1c-a75a-e116ce8dc3ee_1.a3b1ce71652ed6a77e197e493e5165e8.jpeg', 34, NULL),
(82, 'upload/etiquettes-vierges-en-rouleaux-pour-imprimantes-jet-d-encre-5341987 (1).jpg', 'upload/papier-thermique.jpg', 'upload/10-rouleaux-papier-thermique-80-x-80-x-12-de-caiss.jpg', 'upload/bobine-CB.png', 35, NULL),
(83, 'upload/0xWVJMSvpeo1tcY6SDsk_w.middle.png', 'upload/I5vTpOfS0DNw34DKJt_dkA.middle_400x.png', 'upload/SA0oX4luY2xIKqd0vCYxGQ.middle_400x.png', 'upload/EAAGr19z0mef8O0yrTmXrw.middle_400x.png', 36, NULL),
(84, 'upload/Fieldbook-K80.jpg', 'upload/20-Fieldbook-k80-rugged-professional-tablet-front-IO.jpg', 'upload/Fieldbook-M70-left-side.jpg', 'upload/Getac_F110_2.jpg', 37, NULL),
(85, 'upload/hw_w156_big_05.png', 'upload/zpos.png', 'upload/hw_w185_big_02.png', 'upload/hw_w156_big_05.png', 38, NULL),
(86, 'upload/61d+HiiflEL._SX466_.jpg', 'upload/Inateck-BCST-10-Bluetooth-Wireless-Cordless-USB-Handheld-Laser-Barcode-Scanner-Barcode-Reader.jpg', 'upload/41Hs9EMHsPL.jpg', 'upload/51m2aGv5hWL._SX466_.jpg', 39, NULL),
(87, 'upload/aaaaaaaaaaaaaa.jpg', 'upload/5861-10625042.jpg', 'upload/37608007.jpg', 'upload/tÃ©lÃ©chargement.jpg', 40, NULL),
(88, 'upload/423-thickbox_default.jpg', 'upload/Photo3.jpg', 'upload/423-thickbox_default.jpg', 'upload/N15 UNE FACE.jpg', 41, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id_marque`, `titre_marque`, `image_marque`, `etat_marque`, `id_admin`) VALUES
(23, 'Godex', 'upload/img2bef33c96ea3ced29c9663bd4b530219logo_godex.png', 'disponible', NULL),
(24, 'Zebra', 'upload/img9b558b7d16f54db426b5541bb2f26c71Zebra_tech_logo15.png', 'disponible', NULL),
(25, 'Fargo', 'upload/fargo.jpg', 'disponible', NULL),
(26, 'Honeywell', 'upload/img0b4a8fdea6d81690766df1f700e2d3702000px-Honeywell_logo.svg.png', 'disponible', NULL),
(27, 'Lexmark', 'upload/img8bb50ca0d95730034b9432d364ceee5atâ€šlâ€šchargement.png', 'disponible', NULL),
(28, 'Sbm', 'upload/img28b420293dfe5ed4619466ec0e72638cSBM.jpg', 'disponible', NULL),
(30, 'X Printer', 'upload/img6abc762d53675fbd5322b2898363aeeaxprinter-logo-png-transparent.png', 'disponible', NULL),
(31, 'Data-Logic', 'upload/img56c1469c57ffb7c52e8ff984eb7bcbbelkjment.png', '', NULL),
(33, 'Avery Dennison', 'upload/Avery-Dennison596c5d5c8ff32.jpg', 'disponible', NULL),
(34, 'Point-Mobile', 'upload/pointmobile_logo.png', 'disponible', NULL),
(35, 'Rio-Tech', 'upload/m9.jpg', 'disponible', NULL),
(36, 'Exacompta', 'upload/etiquettes-vierges-en-rouleaux-pour-imprimantes-jet-d-encre-5341987 (1).jpg', 'disponible', NULL);

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
  `mail_point_de_vente` text NOT NULL,
  PRIMARY KEY (`id_point_vente`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `point_de_vente`
--

INSERT INTO `point_de_vente` (`id_point_vente`, `titre_point_vente`, `presentation_point_vente`, `type_point_vente`, `info_point_vente`, `etat_point_vente`, `id_admin`, `mail_point_de_vente`) VALUES
(16, 'Alger', 'ce point de ventre trouver a el mouradia', 'gros', 'on est la', 'disponible', 1, ''),
(17, 'Oran', 'ce point de ventre trouver a Oran', 'detail', 'on est la', 'disponible', 1, ''),
(18, 'Constantine', 'ce point de ventre trouver a Constantine', 'detail', 'on est la', 'disponible', 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `date_prod` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nom_prod` varchar(45) NOT NULL,
  `description_prod` text NOT NULL,
  `id_marque` int(11) DEFAULT NULL,
  `id_famille` int(11) DEFAULT NULL,
  `prix_detail` decimal(11,0) DEFAULT NULL,
  `prix_gros` decimal(11,0) DEFAULT NULL,
  `qnt_detail` int(11) DEFAULT NULL,
  `qnt_gros` int(11) DEFAULT NULL,
  `caracteristiques_prod` text,
  `etat_prod` varchar(10) DEFAULT NULL,
  `ordre_produit` int(11) NOT NULL DEFAULT '16',
  `alaune_produit` int(1) NOT NULL DEFAULT '0',
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prod`),
  KEY `id_marque` (`id_marque`),
  KEY `id_famille` (`id_famille`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `date_prod`, `nom_prod`, `description_prod`, `id_marque`, `id_famille`, `prix_detail`, `prix_gros`, `qnt_detail`, `qnt_gros`, `caracteristiques_prod`, `etat_prod`, `ordre_produit`, `alaune_produit`, `id_admin`) VALUES
(23, '2019-05-13 13:33:52', 'TE200', ' bien que Ã©purÃ©e et Ã©conomique, est une solution fiable et performante. Elle peut imprimer sur une largeur dâ€™impression max. de 108 mm (4 pouces) et Ã  une vitesse max. de 152 mm/sec. Elle dispose de capacitÃ©s mÃ©moire confortables (8Mo de Flash et 16 Mo de SDRAM) et dâ€™un processeur RISC 32 bits Ã  400 MHz, garantissant une vitesse dâ€™impression et de traitement exceptionnelle. Dans sa configuration de base, TSC TE 200 est uniquement dotÃ©e de lâ€™interface de communication USB 2.0 et est compatible en natif avec les langages de programmation Zebra-Eltron et Datamax (EPL, ZPL, ZPL II et DPL), pour une intÃ©gration aisÃ©e aux parcs dâ€™imprimantes existants. Sa conception permet, en outre, lâ€™utilisation de rubans de diamÃ¨tre intÃ©rieur 12,7 mm ou 25,4 mm pour des longueurs pouvant atteindre respectivement 110 m ou 300 m.', 24, 24, '90000', '82000', 200, 100, 'TYPE D\'IMPRESSION:  Transfert Thermique & Thermique Direct\r\nLARGEUR D\'IMPRESSION (MM):  108 mm\r\nRÃ‰SOLUTION (DPI):  203dpi\r\nINTERFACE DE COMMUNICATION:  â€¢ USB 2.0 â€¢ Bluetooth interne 4.0 (option usine)\r\nGARANTIE:  1annÃ©e', 'disponible', 5, 1, NULL),
(24, '2019-05-13 13:40:26', 'ADTP2', 'Lâ€™imprimante de table MonarchÂ® ADTP2â„¢ dâ€™Avery DennisonÂ®\r\nest une solution dâ€™impression thermique et dâ€™encodage RFID haute performance prÃ©sentant des dimensions compactes.\r\nIl sâ€™agit dâ€™une solution idÃ©ale pour produire des Ã©tiquettes cartonnÃ©es et adhÃ©sives en magasin de commerce de dÃ©tail et des Ã©tiquettes cartonnÃ©es et adhÃ©sives dâ€™exception dans un centre de distribution ou pour toute application dâ€™impression qui nÃ©cessite des performances Ã©levÃ©es dans un espace restreint.', 33, 29, '90000', '80000', 100, 50, 'TYPE D\'IMPRESSION:  Transfert Thermique & Thermique Direct\r\nLARGEUR D\'IMPRESSION (MM):  108 mm\r\nRÃ‰SOLUTION (DPI):  203dpi\r\nINTERFACE DE COMMUNICATION:USB 2.0 â€¢ Bluetooth interne 4.0 (option usine)\r\nGARANTIE:  1annÃ©e', 'disponible', 4, 1, NULL),
(27, '2019-05-14 10:57:10', 'LI4278', 'Description', 24, 25, '45000', '40000', 100, 50, 'Caracteristiques', 'disponible', 3, 1, NULL),
(28, '2019-05-15 00:29:03', 'PM8300', 'Les scanners Laser sans-fil PowerScanâ„¢ PM8300 sont les lecteurs manuels durcis 1D Premium Line de Datalogic Scanning. Les PowerScan PM8300 existent en diffÃ©rents modÃ¨les afin de satisfaire tous les besoins des clients; le PM8300 est le modÃ¨le standard; le PM8300-D, modÃ¨le Â« intermÃ©diaire Â», est Ã©quipÃ© dâ€™un Ã©cran et dâ€™un clavier de 3 touches ; le PM8300-DK, modÃ¨le le plus complet, offre un Ã©cran et un clavier de 16 touches', 31, 25, '65000', '60000', 200, 400, 'TYPE DE LECTEURS:  SANS FIL\r\nTYPE DE CODES LUS:  1D\r\nTECHNOLOGIE DU LECTEUR:  Laser\r\nINTERFACES:  Kit USB (CÃ¢ble fourni)\r\nGARANTIE:  1annÃ©e\r\n', 'disponible', 2, 1, NULL),
(29, '2019-05-15 00:32:22', 'ZT 410', 'Vos opÃ©rations critiques resteront efficaces avec les solides imprimantes Zebra ZT400 Series qui ont Ã©tÃ© conÃ§ues pour Ãªtre performantes pendant de nombreuses annÃ©es et pour un large spectre dâ€™applications. La gamme ZT400 bÃ©nÃ©ficie non seulement de la fiabilitÃ© qui a fait la rÃ©putation de la gamme ZMâ„¢ Series, mais aussi des progrÃ¨s en matiÃ¨re de vitesse et de qualitÃ© dâ€™impression, et dâ€™options de connexion. Faciles Ã  utiliser, les imprimantes ZT400 Series offrent une interface utilisateur graphique LCD intuitive Ã  base dâ€™icÃ´nes, et des consommables simples Ã  charger. Elles proposent Ã©galement des connexions USB, Ehternet et BluetoothÂ® en standard. Ses capacitÃ©s RFID Ã©tendues amÃ©liorent les fonctions de suivi, la visibilitÃ© et la connaissance de lâ€™entreprise', 24, 24, '90000', '82000', 60, 30, 'Largeur d\'impression :   ZT 410: 104 mm/ ZT 420: 168 mm ;\r\nVitesse d\'impression maximale :   ZT 410:356 mm/s / ZT 420: 305 mm/s ;\r\nRÃ©solution :   ZT 410: 203, 300, 600 dpi / ZT 420: 203 et 300 dpi ;\r\nMÃ©thode dâ€™impression :   Transfert thermique/thermique directe ', 'disponible', 1, 1, NULL),
(32, '2019-05-15 02:37:42', 'MG08', 'Utilisant la derniÃ¨re technologie d\'imagerie numÃ©rique, le scanner de prÃ©sentation Magellan 800i permet une lecture intuitive et rapide des codes Ã  barres 1D et 2D tout en prenant en charge des fonctions avancÃ©es telles que la capture d\'image et la dÃ©sactivation des Ã©tiquettes EAS. Lorsque l\'espace est limitÃ© mais que des performances Ã©levÃ©es sont requises, l\'imageur Magellan 800i est idÃ©al avec sa taille compacte pour les environnements Ã  espace restreint.', 31, 25, '48000', '42000', 100, 120, 'TYPE DE LECTEURS:  FIXE\r\nTYPE DE CODES LUS:  1D AND 2D\r\nTECHNOLOGIE DU LECTEUR:  imageur\r\nINTERFACES:  RS-232; USB: OEM USB, USB COM, USB HID Keyboard, USB TEC\r\nGARANTIE:  1annÃ©e', '', 16, 1, NULL),
(34, '2019-05-15 02:49:14', 'MC67', 'Offrez Ã  vos Ã©quipes terrain tous les outils nÃ©cessaires pour travailler plus rapidement et plus efficacement avec le PDA robuste MC67 (Anciennement Motorola MC67) dotÃ© de la technologie 4G. GrÃ¢ce au MC67, vos employÃ©s sont en mesure de mener Ã  bien toutes leurs tÃ¢ches. Scannez pratiquement n\'importe quel code Ã  barres dans presque toutes les conditions. Appelez un client pour lui communiquer un dÃ©lai de livraison, le tout Ã  la vitesse 3.75G HSPA.', 24, 31, '58000', '50000', 220, 130, 'SYSTÃˆME D\'EXPLOITATION EMBARQUÃ‰:  Android/windows\r\nLECTEUR EMBARQUÃ‰:  Imageur 1D/2D Autofocus 8 mÃ©gapixels avec flash (selon modÃ¨le)\r\nINDICE DE PROTECTION:  IP67\r\nCONNECTIVITÃ‰ EMBARQUÃ‰E:  USB 2.0 OTG Slot microSD (jusquâ€™Ã  32 Go)\r\nGARANTIE:  1 annÃ©e', 'disponible', 17, 1, NULL),
(35, '2019-05-15 03:02:34', 'ROULEAUX PAPIER THERMIQUE', 'Descrcvxcviption', 36, 26, '2000', '1500', 800, 500, 'Caracteriscvcvtiques', 'disponible', 11, 1, NULL),
(36, '2019-05-15 03:21:02', 'T10', 'La rembobineuse T10 dispose d\'un bras de renvoi pouvant Ãªtre positionnÃ© pour rembobiner les Ã©tiquettes des deux cÃ´tÃ©s de l\'imprimante. Selon les besoins de l\'utilisateur, le T10 peut rembobiner les rouleaux d\'Ã©tiquettes \"Ã  l\'intÃ©rieur ou Ã  l\'extÃ©rieur\".', 23, 27, '8000', '6200', 2000, 80, 'Peut Ãªtre utilisÃ© avec toutes les imprimantes Godex.\r\nSupporte le rembobinage des Ã©tiquettes Ã  l\'intÃ©rieur et Ã  l\'extÃ©rieur.\r\nApparence Ã©lÃ©gante et design robuste pour une fiabilitÃ© Ã  long terme.\r\nUn indicateur Ã  LED de couleur indique l\'Ã©tat de fonctionnement de l\'enrouleur.\r\nSupporte trois tailles de noyau: 1 â€(25,2 mm - 25,6 mm), 1,5â€ (40 mm - 40,6 mm) et 3 \"(76 mm - 76,6 mm', 'disponible', 11, 1, NULL),
(37, '2019-05-15 03:35:10', 'Fieldbook-K80', 'Pour accompagner les entreprises dans leurs solutions de mobilitÃ©, Logic Instrument prÃ©sente la deuxiÃ¨me gÃ©nÃ©ration de la tablette robuste Fieldbook K80G2 fonctionnant sous Windows 10 Pro et Android 5.1\r\nLe K80G2 est dotÃ© dâ€™un Ã©cran 8â€ Dual-Mode lisible en plein soleil, qui peut Ãªtre utilisÃ© avec les doigts et un stylo numÃ©rique actif pour une saisie de donnÃ©es encore plus prÃ©cise. Ã‰galement intÃ©grÃ©s, WiFi, Bluetooth 4.0, un GPS prÃ©cis, les connexions 4G et un scanner de codes Ã  barres. En outre, le K80G2 rÃ©siste Ã  lâ€™eau et Ã  la poussiÃ¨re IP67 et est conforme Ã  la norme MIL-810G.\r\n', 34, 31, '65000', '58000', 50, 20, 'SYSTÃˆME D\'EXPLOITATION EMBARQUÃ‰:  Windows 10 Pro\r\nCAPACITÃ‰:  4GB Ram DDR3\r\nLECTEUR EMBARQUÃ‰:  NFC,1D /2D Barcode Reader\r\nINDICE DE PROTECTION:  IP 67\r\nCONNECTIVITÃ‰ EMBARQUÃ‰E:  3G/4G,Wifi(b/g/n/ac),BT4.0,GPS', 'disponible', 6, 1, NULL),
(38, '2019-05-15 03:44:11', 'W-156', 'Un design simple et Ã©lÃ©gant\r\nâ€¢ Haut de gamme (i3, i5 CPU) support\r\nâ€¢ 3 pouces imprimantes avec Ã©conomie intÃ©grÃ©e pour l\'espace\r\nâ€¢ lecteur avant IC pour la commoditÃ©\r\nâ€¢ grand Ã©cran lumineux et vif\r\nâ€¢ tactile capacitif Ã©quipÃ© pour toucher prÃ©cis', 35, 31, '130000', '115000', 20, 10, 'SYSTÃˆME D\'EXPLOITATION:  FenÃªtre POSReady7, Windows 10 IdO EntrÃ©e\r\nRÃ‰SOLUTION:  1366*768 (16: 9)\r\nINTERFACES:  6 x USB (Side: 4 x USB, avant: 2 x USB)\r\nDIMENSIONS:  15 pouces\r\nMÃ‰MOIRE:  DDR3 SODIMM 2 Go (jusqu\'Ã  8 Go, 1 slot)\r\nSTOCKAGE:  2,5 Â« SATA-â…¡ 64GB SSD\r\nIMPRIMANTE INTÃ‰GRÃ‰:  oui', 'disponible', 16, 1, NULL),
(39, '2019-05-15 03:51:45', 'X-20', 'Les scanners Laser sans-fil PowerScanâ„¢ X-20 sont les lecteurs manuels durcis 1D Premium Line de Datalogic Scanning. Les PowerScan X-20 existent en diffÃ©rents modÃ¨les afin de satisfaire tous les besoins des clients; le X-20 est le modÃ¨le standard; le X-20-D, modÃ¨le Â« intermÃ©diaire Â», est Ã©quipÃ© dâ€™un Ã©cran et dâ€™un clavier de 3 touches ; le X-20-DK, modÃ¨le le plus complet, offre un Ã©cran et un clavier de 16 touches', 25, 25, '72000', '67000', 150, 60, 'TYPE DE LECTEURS: SANS FIL TYPE DE CODES LUS: 1D TECHNOLOGIE DU LECTEUR: Laser INTERFACES: Kit USB (CÃ¢ble fourni) GARANTIE: 1annÃ©e', 'disponible', 11, 1, NULL),
(40, '2019-05-15 04:02:27', '9906', 'Compacte, Ã©lÃ©gante et silencieuse, lâ€™imprimante de table 9906 dâ€™Avery Dennison se prÃ©sente comme la solution idÃ©ale pour les dÃ©taillants et les centres de distribution qui impriment moins de 10 000 Ã©tiquettes cartonnÃ©es ou adhÃ©sives par semaine, quâ€™il sâ€™agisse dâ€™Ã©tiquettes dâ€™expÃ©dition, dâ€™Ã©tiquettes de remplacement ou dâ€™Ã©tiquettes de routage. Elle prÃ©sente des dimensions compactes avec un faible niveau sonore de production', 33, 24, '67000', '58000', 100, 30, 'TYPE D\'IMPRESSION:  Thermique Direct ou Transfert\r\n\r\nLARGEUR D\'IMPRESSION (MM):  4.09â€ (102mm / 812 dots)\r\n\r\nRÃ‰SOLUTION (DPI):  203 dpi (8 points / mm) ou 300 dpi (12 points / mm)\r\n\r\nINTERFACE DE COMMUNICATION:  RS-232C Serial (115, 200 BPS) USB 2.0 Host; USB 2.0 Device', 'disponible', 12, 1, NULL),
(41, '2019-05-15 04:12:04', 'N15 UNE FACE', 'Vos opÃ©rations critiques resteront efficaces avec les solides imprimantes Series qui ont Ã©tÃ© conÃ§ues pour Ãªtre performantes pendant de nombreuses annÃ©es et pour un large spectre dâ€™applications. La gamme bÃ©nÃ©ficie non seulement de la fiabilitÃ© qui a fait la rÃ©putation de la gammeSeries, mais aussi des progrÃ¨s en matiÃ¨re de vitesse et de qualitÃ© dâ€™impression, et dâ€™options de connexion. Faciles Ã  utiliser, les imprimantes Series offrent une interface utilisateur graphique LCD intuitive Ã  base dâ€™icÃ´nes, et des consommables simples Ã  charger.', 30, 28, '50000', '41000', 20, 5, 'TYPE D\'IMPRIMANTE:  une face\r\n\r\nRÃ‰SOLUTION:  300 dpi\r\n\r\nVITESSE D\'IMPRESSION:  impression couleur Un seul cÃ´tÃ© (YMCKO) 180 ~ 200 cartes / heure.\r\n\r\nINTERFACES:  USB 2.0 (haute vitesse), Ethernet 10/100 intÃ©grÃ©\r\n\r\nMÃ‰MOIRE:  128 Mo de RAM\r\n\r\nCAPACITÃ‰ D\'IMPRESSION:  CapacitÃ© d\'impression couleur et monochrome texte alphanumÃ©rique, logo', 'disponible', 1, 1, NULL);

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
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`id_marque`) REFERENCES `marque` (`id_marque`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_ibfk_3` FOREIGN KEY (`id_famille`) REFERENCES `famille` (`id_famille`) ON DELETE CASCADE ON UPDATE CASCADE;

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
