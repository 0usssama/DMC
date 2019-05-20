-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 12 mai 2019 à 20:34
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `motpass_admin`, `email_admin`, `role_admin`, `code_recup_admin`, `etat_admin`) VALUES
(1, 'zaki', '$2y$10$5owrry6y9nGuTEIy7pyWQOPmhHLIhF.QM2WyvkjxE2u2FJapyaxHq', 'farizaki2015@gmail.com', 'normal', NULL, 'active'),
(2, 'zetchi', '$2y$10$vSS/Tjlg77K4B2IJMK5boeKgwzmuuV0FHPM72.nCzcKGlzSXoI1Zq', 'gfffffgfff@gfgf.com', 'superadmin', NULL, 'active');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `email_client`, `tel_client`, `adresse_client`, `catego_client`, `motpass_client`, `raison_social_client`, `id_admin`) VALUES
(13, 'Belhas', 'Zakaria', 'farizaki2015@gmail.com', '0661622523', 'cite 1000 logement eucalyptus', 'particulier', '$2y$10$BWLRu/TwoQMfeZE8XLlXTetGEPweyBm6eLfr1Nw0qhhTM8w.O23Au', '/', 1),
(14, 'kaci', 'kamel', 'fggddfgfg@gmail.com', '06615644564', 'ouled fayet', 'particulier', '$2y$10$q86Qjl30PPiWe6z6EdQRLetkOBds3DkszAFhir.kw5MJDOZi.Tn3q', '/', 1),
(15, 'zetchi', 'kheireddine', 'zetchifaf@gmail.com', NULL, 'dely brahim 16600 alger', 'professionnel', '$2y$10$jQyAnGS5agDvZJfK23lCROIqdnMak/tl03kMvXsG2zNSeNE9MxC0m', 'cosider', 1),
(16, 'oussama', 'benounnas', 'benounnas@oussama.com', NULL, 'ouled fayet', 'particulier', '$2y$10$6rYPcTz3Gnt77KikhnemhuNPtdPB/bNgTQoFcLnaoFN2TuOJcETNW', '', 2),
(17, 'tabiou', 'amira', 'tabiou@gmail.com', NULL, 'tebessa', 'particulier', '$2y$10$ltmXTaNCtC3n8VLQ/2BAqeGsV9vgvaIX4x13siuMXhejlt8UG6WiK', '', 2),
(18, 'oussama', 'benounnas', 'benounnas.oussama@gmail.com', '0558905764', 'ouled fayet', 'particulier', '$2y$10$bG.UTXFTb6f7exMfCG6u7eD6RsPOQFAUT7GM5CCwrXDfJjy9Z.E4S', '/', 2);

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
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_comd`, `date_comd`, `id_client`, `etat_comd`, `elements_produit`, `id_point_vente`) VALUES
(1, NULL, 11, NULL, '{\"listeid\":\"49/47/53/\", \"titreProduit47\":\"imprimante ticket\", \"qteProduit47\":\"1\", \"prixProduit47\":\"2000\", \"totalProduit47\":\"2000\", \"titreProduit53\":\"azerrtyyu\", \"qteProduit53\":\"1\", \"prixProduit53\":\"115\", \"totalProduit53\":\"115\", \"qteGeneral\":\"2\", \"totalGeneral\":\"2115\", \"idClient\":\"11\", \"nom\":\"oussama\", \"prenom\":\"oussama\", \"email\":\"oussama@benounnas.com\", \"adresse\":\"ouled fayet\", \"telephone\":\"\" }', 16),
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
(53, '05/10/2019 08:57:10', 13, 'valider', '{\"listeid\":\"4/21/17/11/4/\", \"titreProduit21\":\"L500g\", \"qteProduit21\":\"3\", \"prixProduit21\":\"21100\", \"totalProduit21\":\"63300\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"1\", \"prixProduit17\":\"40000\", \"totalProduit17\":\"40000\", \"titreProduit11\":\"ADTP1\", \"qteProduit11\":\"1\", \"prixProduit11\":\"80000\", \"totalProduit11\":\"80000\", \"titreProduit4\":\"PM200\", \"qteProduit4\":\"2\", \"prixProduit4\":\"50000\", \"totalProduit4\":\"100000\", \"qteGeneral\":\"7\", \"totalGeneral\":\"509900\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 18),
(54, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"\", \"telephone\":\"0661622523\" }', 16),
(55, NULL, 18, NULL, '{\"listeid\":\"/4/\", \"titreProduit4\":\"PM200\", \"qteProduit4\":\"2\", \"prixProduit4\":\"50000\", \"totalProduit4\":\"100000\", \"qteGeneral\":\"2\", \"totalGeneral\":\"200000\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"adresse\":\"benounnas.oussama@gmail.com\", \"telephone\":\"\" }', 16),
(56, NULL, 18, NULL, '{\"listeid\":\"17/17/\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"1\", \"prixProduit17\":\"40000\", \"totalProduit17\":\"40000\", \"qteGeneral\":\"1\", \"totalGeneral\":\"40000\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"adresse\":\"\", \"telephone\":\"\" }', 16),
(57, NULL, 18, NULL, '{\"listeid\":\"/17/\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"2\", \"prixProduit17\":\"40000\", \"totalProduit17\":\"80000\", \"qteGeneral\":\"2\", \"totalGeneral\":\"160000\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"adresse\":\"\", \"telephone\":\"\" }', 16),
(58, '05/10/2019 11:49:52', 18, 'en cours', '{\"listeid\":\"/4/17/11/\", \"titreProduit4\":\"PM200\", \"qteProduit4\":\"2\", \"prixProduit4\":\"50000\", \"totalProduit4\":\"100000\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"2\", \"prixProduit17\":\"40000\", \"totalProduit17\":\"80000\", \"titreProduit11\":\"ADTP1\", \"qteProduit11\":\"2\", \"prixProduit11\":\"80000\", \"totalProduit11\":\"160000\", \"qteGeneral\":\"6\", \"totalGeneral\":\"680000\", \"idClient\":\"18\", \"nom\":\"oussama\", \"prenom\":\"benounnas\", \"email\":\"benounnas.oussama@gmail.com\", \"adresse\":\"\", \"telephone\":\"\" }', 16),
(59, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(60, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"\", \"telephone\":\"0661622523\" }', 16),
(61, NULL, 17, NULL, '{\"listeid\":\"/17/4/11/\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"1\", \"prixProduit17\":\"40000\", \"totalProduit17\":\"40000\", \"titreProduit4\":\"PM200\", \"qteProduit4\":\"1\", \"prixProduit4\":\"50000\", \"totalProduit4\":\"50000\", \"titreProduit11\":\"ADTP1\", \"qteProduit11\":\"1\", \"prixProduit11\":\"80000\", \"totalProduit11\":\"80000\", \"qteGeneral\":\"3\", \"totalGeneral\":\"170000\", \"idClient\":\"17\", \"nom\":\"tabiou\", \"prenom\":\"amira\", \"email\":\"tabiou@gmail.com\", \"adresse\":\"tebessa\", \"telephone\":\"\" }', 16),
(62, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(63, '05/12/2019 12:19:37', 13, 'en cours', '{\"listeid\":\"4/17/11/4/\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"0\", \"prixProduit17\":\"INF\", \"totalProduit17\":\"80000\", \"titreProduit11\":\"ADTP1\", \"qteProduit11\":\"1\", \"prixProduit11\":\"160000\", \"totalProduit11\":\"160000\", \"titreProduit4\":\"PM200\", \"qteProduit4\":\"1\", \"prixProduit4\":\"50000\", \"totalProduit4\":\"50000\", \"qteGeneral\":\"2\", \"totalGeneral\":\"290000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(64, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"\", \"telephone\":\"0661622523\" }', 16),
(65, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(66, NULL, 13, NULL, '{\"listeid\":\"\", \"qteGeneral\":\"0\", \"totalGeneral\":\"0\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"\", \"telephone\":\"0661622523\" }', 16),
(67, NULL, 13, NULL, '{\"listeid\":\"/17/4/\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"3\", \"prixProduit17\":\"13333.333333333\", \"totalProduit17\":\"40000\", \"titreProduit4\":\"PM200\", \"qteProduit4\":\"5\", \"prixProduit4\":\"20000\", \"totalProduit4\":\"100000\", \"qteGeneral\":\"8\", \"totalGeneral\":\"140000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"cite 1000 logement eucalyptus\", \"telephone\":\"0661622523\" }', 16),
(68, NULL, 13, NULL, '{\"listeid\":\"4/17/11/\", \"titreProduit17\":\"OM7220L\", \"qteProduit17\":\"1\", \"prixProduit17\":\"40000\", \"totalProduit17\":\"40000\", \"titreProduit11\":\"ADTP1\", \"qteProduit11\":\"1\", \"prixProduit11\":\"80000\", \"totalProduit11\":\"80000\", \"qteGeneral\":\"2\", \"totalGeneral\":\"120000\", \"idClient\":\"13\", \"nom\":\"Belhas\", \"prenom\":\"Zakaria\", \"email\":\"farizaki2015@gmail.com\", \"adresse\":\"\", \"telephone\":\"0661622523\" }', 16);

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
('2019-05-07 15:15:52', 0, 11, 13),
('2019-05-07 15:18:17', 0, 11, 13),
('2019-05-07 15:20:04', 5, 11, 13),
('2019-05-07 15:38:16', 3, 17, 13),
('2019-05-07 15:38:58', 1, 4, 13),
('2019-05-07 15:39:53', 4, 17, 13),
('2019-05-07 22:16:35', 5, 11, 13),
('2019-05-07 23:36:29', 5, 11, 13),
('2019-05-07 23:43:30', 5, 11, NULL),
('2019-05-08 02:08:05', 5, 4, 17),
('2019-05-08 12:49:01', 5, 11, NULL),
('2019-05-08 12:49:26', 4, 17, NULL),
('2019-05-09 02:19:33', 3, 11, 16),
('2019-05-09 12:02:11', 4, 17, 13),
('2019-05-09 12:03:16', 5, 17, 13),
('2019-05-09 12:03:23', 4, 17, 13),
('2019-05-09 12:03:25', 4, 17, 13),
('2019-05-09 12:03:26', 4, 17, 13),
('2019-05-09 22:14:14', 4, 17, 13),
('2019-05-09 22:14:24', 3, 11, 13),
('2019-05-09 22:14:31', 3, 4, 13),
('2019-05-09 22:14:39', 5, 4, 13),
('2019-05-11 00:19:22', 4, 4, 13),
('2019-05-11 00:19:29', 4, 21, 13),
('2019-05-11 00:19:42', 5, 17, 13),
('2019-05-11 00:19:49', 5, 11, 13),
('2019-05-11 00:20:01', 2, 11, 13),
('2019-05-11 00:20:09', 1, 11, 13),
('2019-05-11 21:28:04', 5, 17, 13),
('2019-05-12 11:43:08', 4, 17, 13),
('2019-05-12 12:17:13', 4, 17, 13),
('2019-05-12 12:17:23', 4, 4, 13),
('2019-05-12 12:17:28', 5, 4, 13),
('2019-05-12 12:17:32', 1, 4, 13);

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
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

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
(51, 'upload/200_front.png', 'upload/PM450_GUN_pers.png', 'upload/Point-Mobile-PM200-B-2D-Data-Collector-3.jpg', 'upload/productos40_2262.jpg', 4, NULL),
(52, 'upload/ADTP2.jpg', 'upload/', 'upload/maxresdefault.jpg', 'upload/5861-13244803.jpg', NULL, NULL),
(55, 'upload/ADTP2.jpg', 'upload/ADTP1â„¢.jpg', 'upload/maxresdefault.jpg', 'upload/5861-10624928.jpg', NULL, NULL),
(56, 'upload/ADTP2.jpg', 'upload/maxresdefault.jpg', 'upload/ADTP1â„¢.jpg', 'upload/ADTP2.jpg', NULL, NULL),
(57, 'upload/5861-10624928.jpg', 'upload/ADTP1â„¢.jpg', 'upload/maxresdefault.jpg', 'upload/ADTP2.jpg', NULL, NULL),
(58, 'upload/5861-13244803.jpg', 'upload/ADTP1â„¢.jpg', 'upload/maxresdefault.jpg', 'upload/ADTP2.jpg', 11, NULL),
(60, 'upload/li4278bklack.jpg', 'upload/LI4278-dstmeonine.jpg', 'upload/cr0078-sc10007wr.jpg', 'upload/38-209-058-03.jpg', NULL, NULL),
(61, 'upload/li4278bklack.jpg', 'upload/LI4278-dstmeonine.jpg', 'upload/cr0078-sc10007wr.jpg', 'upload/li4278bklack.jpg', NULL, NULL),
(64, 'upload/pcpos-shop_om7220l.jpg', 'upload/307-home_default.jpg', 'upload/min_large_7.jpg', 'upload/sim.jpg', 17, NULL),
(66, 'upload/200_front.png', 'upload/459b1-zara.jpg', 'upload/', 'upload/', NULL, NULL),
(68, 'upload/img0e1ae8fb56d1a70549c0d5546ab1ed77Honeywell-Eclipse-5145-1.jpg', 'upload/img0a04cee8c6414585acb21ae4745b110fINTERMEC PD43  03.jpg', 'upload/img0a85c032911538043aeb2781c6f517fbScanpal-EDA50-image1.jpg', 'upload/img0a3892b9cfa3b3198899b8b97cb0917a3m-cr100-document-reader (2).jpg', 21, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

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
(35, 'Rio-Tech', 'upload/m9.jpg', 'disponible', NULL);

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
  `vote1` int(11) DEFAULT '0',
  `vote2` int(11) DEFAULT '0',
  `vote3` int(11) DEFAULT '0',
  `vote4` int(11) DEFAULT '0',
  `vote5` int(11) DEFAULT '0',
  PRIMARY KEY (`id_prod`),
  KEY `id_marque` (`id_marque`),
  KEY `id_famille` (`id_famille`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `date_prod`, `nom_prod`, `description_prod`, `id_marque`, `id_famille`, `prix_detail`, `prix_gros`, `qnt_detail`, `qnt_gros`, `caracteristiques_prod`, `etat_prod`, `ordre_produit`, `alaune_produit`, `id_admin`, `vote1`, `vote2`, `vote3`, `vote4`, `vote5`) VALUES
(4, '2019-04-30 11:48:58', 'PM200', 'Descrfsfdfdsfption', 34, 31, '50000', '42455', 45, 45, 'Caractdffdsferistiques', 'disponible', 4, 1, NULL, 2, 0, 1, 2, 3),
(11, '2019-05-04 01:04:04', 'ADTP1', 'Descriptiongfdgfdgdfgfgdfgdgdgfdgfgdfgfdggdgdfgdf', 33, 24, '80000', '70000', 50, 40, 'Caracteristiques', 'disponible', 1, 1, NULL, 1, 1, 2, 0, 12),
(17, '2019-05-04 01:31:48', 'OM7220L', 'Scanner de codes Ã  barres Omni-Directional\r\nË™ Peut lire le code Ã  barres 1D /2D rapidement\r\nË™ Conception de boÃ®tier robuste\r\nË™ AppropriÃ© au magasin commode, utilisation de supermarchÃ©', 35, 25, '40000', '32000', 40, 20, 'TYPE DE LECTEURS:  FIXE\r\n\r\nTYPE DE CODES LUS:  1D AND 2D\r\n\r\nTECHNOLOGIE DU LECTEUR:  imageur\r\n\r\nINTERFACES:  USB HID,USB Serial (by request) , RS232(by request)\r\n\r\nGARANTIE:  1annÃ©e', 'disponible', 2, 1, NULL, 0, 0, 1, 9, 3),
(21, '2019-05-09 14:42:36', 'L500g', '11212Description', 23, 24, '21100', '11212', 12121, 1212, '1212Caracteristiques', 'disponible', 8, 0, NULL, 0, 0, 0, 1, 0);

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
