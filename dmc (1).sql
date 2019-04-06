-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 03, 2019 at 02:36 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(45) DEFAULT NULL,
  `motpass_admin` varchar(255) DEFAULT NULL,
  `email_admin` varchar(45) DEFAULT NULL,
  `role_admin` varchar(45) DEFAULT NULL,
  `code_recup_admin` varchar(255) DEFAULT NULL,
  `etat_admin` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `motpass_admin`, `email_admin`, `role_admin`, `code_recup_admin`, `etat_admin`) VALUES
(1, 'benounnas', '$2y$10$eZFmWHsf2AcasxZN.XnfNO6gVGTebqkyvzVzNiXv3H2Jy911n.0Zm', 'mail@mail.com', 'superadmin', NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(45) DEFAULT NULL,
  `prenom_client` varchar(45) DEFAULT NULL,
  `email_client` varchar(45) DEFAULT NULL,
  `adresse_client` varchar(45) DEFAULT NULL,
  `catego_client` varchar(45) DEFAULT NULL,
  `motpass_client` varchar(255) DEFAULT NULL,
  `raison_social_client` varchar(45) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commander`
--

CREATE TABLE `commander` (
  `date_comd` date DEFAULT NULL,
  `etat_comd` varchar(45) DEFAULT NULL,
  `qte_p_comd` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `evaluer`
--

CREATE TABLE `evaluer` (
  `date_ev` date DEFAULT NULL,
  `nbr_etoils_ev` int(11) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facture`
--

CREATE TABLE `facture` (
  `id_fact` int(11) NOT NULL,
  `date_fact` date NOT NULL,
  `contenu_fact` varchar(45) NOT NULL,
  `etat_fact` varchar(15) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `famille`
--

CREATE TABLE `famille` (
  `id_famille` int(11) NOT NULL,
  `titre_famille` varchar(45) DEFAULT NULL,
  `image_famille` varchar(255) DEFAULT NULL,
  `etat_famille` varchar(45) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id_imag` int(11) NOT NULL,
  `url_imag` varchar(45) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL,
  `id_point_vente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

CREATE TABLE `marque` (
  `id_marque` int(11) NOT NULL,
  `titre_marque` varchar(45) DEFAULT NULL,
  `image_marque` varchar(255) DEFAULT NULL,
  `etat_marque` varchar(45) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `point_de_vente`
--

CREATE TABLE `point_de_vente` (
  `id_point_vente` int(11) NOT NULL,
  `titre_point_vente` varchar(45) DEFAULT NULL,
  `presentation_point_vente` varchar(45) DEFAULT NULL,
  `type_point_vente` varchar(45) DEFAULT NULL,
  `info_point_vente` varchar(45) DEFAULT NULL,
  `etat_point_vente` varchar(45) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id_prod` int(11) NOT NULL,
  `nom_prod` varchar(45) NOT NULL,
  `desc_prod` varchar(255) DEFAULT NULL,
  `id_marque` int(11) DEFAULT NULL,
  `id_famille` int(11) DEFAULT NULL,
  `prix_detail_prod` int(11) DEFAULT NULL,
  `prix_gros_prod` int(11) DEFAULT NULL,
  `qnt_det_prod` int(11) DEFAULT NULL,
  `qnt_gros_prod` int(11) DEFAULT NULL,
  `caracteris_prod` varchar(255) DEFAULT NULL,
  `etat_prod` varchar(45) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id_promo` int(11) NOT NULL,
  `titre_promo` varchar(45) DEFAULT NULL,
  `image_promo` varchar(255) DEFAULT NULL,
  `date_deb_promo` date DEFAULT NULL,
  `date_fin_promo` date DEFAULT NULL,
  `etat_promo` varchar(45) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promovoir`
--

CREATE TABLE `promovoir` (
  `id_promo` int(11) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `id_pub` int(11) NOT NULL,
  `titre_pub` varchar(45) DEFAULT NULL,
  `categorie_pub` varchar(45) DEFAULT NULL,
  `contenu_pub` varchar(45) DEFAULT NULL,
  `etat_pub` varchar(45) DEFAULT NULL,
  `date_pub` date DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stocker`
--

CREATE TABLE `stocker` (
  `id_point_vente` int(11) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `commander`
--
ALTER TABLE `commander`
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Indexes for table `evaluer`
--
ALTER TABLE `evaluer`
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Indexes for table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id_fact`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_client` (`id_client`);

--
-- Indexes for table `famille`
--
ALTER TABLE `famille`
  ADD PRIMARY KEY (`id_famille`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_imag`),
  ADD KEY `id_point_vente` (`id_point_vente`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Indexes for table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id_marque`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `point_de_vente`
--
ALTER TABLE `point_de_vente`
  ADD PRIMARY KEY (`id_point_vente`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_marque` (`id_marque`),
  ADD KEY `id_famille` (`id_famille`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id_promo`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `promovoir`
--
ALTER TABLE `promovoir`
  ADD KEY `id_promo` (`id_promo`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id_pub`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `stocker`
--
ALTER TABLE `stocker`
  ADD KEY `id_point_vente` (`id_point_vente`),
  ADD KEY `id_prod` (`id_prod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `facture`
--
ALTER TABLE `facture`
  MODIFY `id_fact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `famille`
--
ALTER TABLE `famille`
  MODIFY `id_famille` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id_imag` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marque`
--
ALTER TABLE `marque`
  MODIFY `id_marque` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `point_de_vente`
--
ALTER TABLE `point_de_vente`
  MODIFY `id_point_vente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `commander`
--
ALTER TABLE `commander`
  ADD CONSTRAINT `commander_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commander_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `evaluer`
--
ALTER TABLE `evaluer`
  ADD CONSTRAINT `evaluer_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluer_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `facture_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `famille`
--
ALTER TABLE `famille`
  ADD CONSTRAINT `famille_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`id_point_vente`) REFERENCES `point_de_vente` (`id_point_vente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `image_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marque`
--
ALTER TABLE `marque`
  ADD CONSTRAINT `marque_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `point_de_vente`
--
ALTER TABLE `point_de_vente`
  ADD CONSTRAINT `point_de_vente_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`id_marque`) REFERENCES `marque` (`id_marque`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_ibfk_3` FOREIGN KEY (`id_famille`) REFERENCES `famille` (`id_famille`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promovoir`
--
ALTER TABLE `promovoir`
  ADD CONSTRAINT `promovoir_ibfk_1` FOREIGN KEY (`id_promo`) REFERENCES `promotion` (`id_promo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `promovoir_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stocker`
--
ALTER TABLE `stocker`
  ADD CONSTRAINT `stocker_ibfk_1` FOREIGN KEY (`id_point_vente`) REFERENCES `point_de_vente` (`id_point_vente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stocker_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
