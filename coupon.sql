-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 05 mai 2022 à 12:57
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `coupon`
--

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE `billet` (
  `reference` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `billet`
--

INSERT INTO `billet` (`reference`, `quantite`, `prix`) VALUES
(17, 2, 21),
(18, 12, 21),
(19, 454, 55);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `nom` varchar(155) NOT NULL,
  `prenom` varchar(155) NOT NULL,
  `Age` int(11) NOT NULL,
  `Adresse` text NOT NULL,
  `Quantiter` int(11) NOT NULL,
  `id_billet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `nom`, `prenom`, `Age`, `Adresse`, `Quantiter`, `id_billet`) VALUES
(13, 'Malek', 'oiefjfezodfsdf', 1, 'narecg@if.cim', 2, 17);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `billet`
--
ALTER TABLE `billet`
  ADD PRIMARY KEY (`reference`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_billet` (`id_billet`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `billet`
--
ALTER TABLE `billet`
  MODIFY `reference` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_billet`) REFERENCES `billet` (`reference`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
