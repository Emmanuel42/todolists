-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 25 Février 2019 à 16:22
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `todolists`
--

-- --------------------------------------------------------

--
-- Structure de la table `actions`
--

CREATE TABLE `actions` (
  `id_actions` int(11) NOT NULL,
  `nom_actions` varchar(50) COLLATE utf8_bin NOT NULL,
  `type_actions` varchar(50) COLLATE utf8_bin NOT NULL,
  `prio_actions` enum('Faible','Moyenne','Elevée') COLLATE utf8_bin NOT NULL DEFAULT 'Faible',
  `date_actions` date NOT NULL,
  `heure_actions` time NOT NULL,
  `lieu_actions` varchar(50) COLLATE utf8_bin NOT NULL,
  `descr_actions` varchar(255) COLLATE utf8_bin NOT NULL,
  `ajout_doc_actions` varbinary(50) NOT NULL,
  `fk_id_lists` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_coms` int(11) NOT NULL,
  `coms` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fk_id_actions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `join_userslists`
--

CREATE TABLE `join_userslists` (
  `id_join_userslists` int(11) NOT NULL,
  `fk_id_users` int(11) NOT NULL,
  `fk_id_lists` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `lists`
--

CREATE TABLE `lists` (
  `id_lists` int(11) NOT NULL,
  `nom_lists` varchar(50) COLLATE utf8_bin NOT NULL,
  `fk_id_actions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id_actions`),
  ADD KEY `fk_lists_id` (`fk_id_lists`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_coms`),
  ADD KEY `fk_id_actions` (`fk_id_actions`);

--
-- Index pour la table `join_userslists`
--
ALTER TABLE `join_userslists`
  ADD PRIMARY KEY (`id_join_userslists`),
  ADD KEY `fk_id_users` (`fk_id_users`),
  ADD KEY `fk_id_lists` (`fk_id_lists`);

--
-- Index pour la table `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`id_lists`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actions`
--
ALTER TABLE `actions`
  MODIFY `id_actions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_coms` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `lists`
--
ALTER TABLE `lists`
  MODIFY `id_lists` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `actions`
--
ALTER TABLE `actions`
  ADD CONSTRAINT `fk_lists_id` FOREIGN KEY (`fk_id_lists`) REFERENCES `lists` (`id_lists`);

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `fk_id_actions` FOREIGN KEY (`fk_id_actions`) REFERENCES `actions` (`id_actions`);

--
-- Contraintes pour la table `join_userslists`
--
ALTER TABLE `join_userslists`
  ADD CONSTRAINT `fk_id_lists` FOREIGN KEY (`fk_id_lists`) REFERENCES `lists` (`id_lists`),
  ADD CONSTRAINT `fk_id_users` FOREIGN KEY (`fk_id_users`) REFERENCES `users` (`id_users`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
