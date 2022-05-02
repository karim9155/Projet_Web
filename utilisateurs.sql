-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 26 avr. 2022 à 05:17
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `festival`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL,
  `nomUtilisateur` varchar(20) NOT NULL,
  `prenomUtilisateur` varchar(20) NOT NULL,
  `mdpUtilisateur` varchar(200) NOT NULL,
  `admin` tinyint(4) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `etat` tinyint(4) NOT NULL DEFAULT 1,
  `username` varchar(20) NOT NULL,
  `dateCreationUtilisateur` int(11) NOT NULL DEFAULT current_timestamp(),
  `sexe` tinyint(4) NOT NULL,
  `resetPassHash` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `mdpUtilisateur`, `admin`, `Email`, `etat`, `username`, `dateCreationUtilisateur`, `sexe`, `resetPassHash`) VALUES
(1, 'Farah', 'Torkhani', '$2y$10$A3nz4eALcJb0EZWMvgMuzeo/rncafLJMI/eQ5NG2zuFfkMoqaUely', NULL, 'farah.torkhani@esprit.tn', 1, 'fafa', 2147483647, 0, ''),
(3, 'jridi', 'zied', '$2y$10$TZXvq3Uv1Vk1/EMTmqyAaO56mW7AP2isG4xx5jfV8/Bve88Dketz6', NULL, 'zied.jridi@esprit.tn', 1, 'zaydouna', 2147483647, 0, ''),
(4, 'gofofo', 'fifii', '$2y$10$3AwRiHQHF.Qp3ckl4SbVSe5wkZ7jjNrrxnRk6G44Lf/XnKa3O6/Qu', NULL, 'taha.tihi@esprit.tn', 1, 'taha', 2147483647, 0, ''),
(5, 'jo', 'joooo', '$2y$10$JIh3FBJ3vZc4hqvKSBzvrOpQ8OBKL2JkglpFI7/uFDpXsWQc.sX3.', NULL, 'jrhejka@nban.com', 1, 'jojo', 2147483647, 0, ''),
(6, 'hhhhhhhhh', 'hhhhhhhhhhhh', '$2y$10$yGC/bVU1txYa7WF7TythN.a7jhYjAL6aMghLXc828WX4aE7qIbNSC', NULL, 'hhh@hhh.hh', 1, 'h', 2147483647, 0, ''),
(7, 'ta', 'ta', '$2y$10$mOKyActU8IvXwDoAahYOY.7Ze.xAdCdnz4iA0CnWXxICSDIAEtfmq', NULL, 'ta@ta.com', 1, 'ta', 2147483647, 0, ''),
(8, 'hiuuu', 'hiuuu', 'su1', NULL, 'ha@ha.com', 1, 'ha', 2147483647, 0, ''),
(11, 'g', 'g', '$2y$10$oBhGJ8NIVI3hEU.QXvT0TOrkcixNItINtXkrKhLU9qY5b5/HF8nei', NULL, 'g@g.com', 1, 'g', 2147483647, 0, ''),
(12, 'oooooo', 'ooo', '$2y$10$Oe8Pxi3DP3N.kW6iOyG8f.B4qlJqfqp2bKFUu019XeGVjP4sdKZv2', NULL, 'lili.tn@esprit.tn', 1, 'lili', 2147483647, 0, ''),
(13, 'lol', 'lalalaalala', '$2y$10$j/OjE5WlVi6bz02GFBHck.lGexTPCoqrou0Q3MioxUdIJfpEtAqcC', NULL, 'jiji@esprit.tn', 1, 'olooolo', 2147483647, 0, ''),
(14, 'sasa', 'salim', '$2y$10$bPBRE.OTu9tmZURMowL5/exCw3ZqWUhY/iiFM/uBB6PyG/dPlhFOy', NULL, 'salim.s@esprit.tn', 1, 'soso', 2147483647, 0, ''),
(15, 'prenom', 'omar', '$2y$10$Dbr2j1codfejNfugRR6my.zxHFsTN4q516OdeJbUqGSU9vTDjRYBa', NULL, 'omarhajjouji@gmail.com', 1, 'omarhajjouji', 2147483647, 0, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
