-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 29 sep. 2021 à 16:20
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `members_space`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `connect_auto` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `email`, `date`, `connect_auto`) VALUES
(1, 'Loris', '$2y$10$fMtsDIo9VHE6ctAnbYyrpOj1KgpH0fTaCmg65W3ES9v8w3S3vu3Vq', 'pcacerloris@gmail.com', 'Wednesday 29th of September 2021 12:48:45 PM', 0),
(2, 'Rémi', '$2y$10$oLZUUaxjssJKO3XPPPDpguNiEOljifmgcIbd3bE/URVZ1T0zKDuGy', 'loris.poilly.2nd8@gmail.com', 'Wednesday 29th of September 2021 03:32:18 PM', 0),
(3, 'Tovard', '$2y$10$Yz8IwONF0xAytVWZx2.2IuApsritzkdEuLCwLylRjuEFW6JbC6lWS', 'spotifyptutuap@gmail.com', 'Wednesday 29th of September 2021 03:46:00 PM', 0),
(4, 'Loris', '$2y$10$VRbeiT8RoPGEQcRV70C2pevyFlfMOA1cTpyBZ2hKzErNJRARTZiwS', 'clippy29shop@gmail.com', 'Wednesday 29th of September 2021 03:46:22 PM', 0),
(5, 'Dylan', '$2y$10$mfOY9Dx7W.9HOdIEVsCUyufsGuT7j4.ghj0c4/sGT8ewyZf0YhpV2', 'toutcommevideo@gmail.com', 'Wednesday 29th of September 2021 03:46:57 PM', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
