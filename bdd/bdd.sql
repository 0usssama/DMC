-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 22 avr. 2019 à 13:26
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
-- Structure de la table `commander`
--

DROP TABLE IF EXISTS `commander`;
CREATE TABLE IF NOT EXISTS `commander` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `date_comd` datetime DEFAULT CURRENT_TIMESTAMP,
  `etat_comd` varchar(45) DEFAULT 'en cours',
  `qte_p_comd` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL,
  `elements_produit` text NOT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `id_client` (`id_client`),
  KEY `id_prod` (`id_prod`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commander`
--

INSERT INTO `commander` (`id_commande`, `date_comd`, `etat_comd`, `qte_p_comd`, `id_client`, `id_prod`, `elements_produit`) VALUES
(1, '2019-04-21 00:00:00', 'en cours', 1, 10, 47, ''),
(2, '2019-04-21 00:00:00', 'en cours', 1, 10, 49, ''),
(3, '2019-04-22 00:00:00', 'en cours', 1, 10, 49, ''),
(4, '2019-04-22 00:00:00', 'en cours', 1, 10, 47, ''),
(5, '2019-04-17 00:00:00', NULL, 3650, NULL, NULL, '{\"listeid\":\"47/47/49/\", \"titreProduit47\":\"imprimante ticket\", \"qteProduit47\":\"4\", \"prixProduit47\":\"1500\", \"totalProduit47\":\"6000\", \"titreProduit49\":\"tablette samsung\", \"qteProduit49\":\"6\", \"prixProduit49\":\"2150\", \"totalProduit49\":\"12900\", \"qteGeneral49\":\"10\", \"totalGeneral49\":\"18900\", \"idClient\":\"10\", \"nom\":\"hafsi\", \"prenom\":\"karim\", \"email\":\"\", \"adresse\":\"\", \"telephone\":\"\" }');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commander`
--
ALTER TABLE `commander`
  ADD CONSTRAINT `commander_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commander_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
