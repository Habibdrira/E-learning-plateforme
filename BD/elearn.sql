-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 29 mai 2024 à 13:02
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `elearn`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin123', 'admin@example.com'),
(2, 'habib', 'habib', 'habib@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `class`
--

CREATE TABLE `class` (
  `id` int(20) NOT NULL,
  `classname` varchar(20) DEFAULT NULL,
  `section` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `class`
--

INSERT INTO `class` (`id`, `classname`, `section`) VALUES
(2, '1er ING 1-2', 'info');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id_et` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `annee` int(4) NOT NULL,
  `classe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_f` int(11) NOT NULL,
  `date-d` date NOT NULL,
  `durre` varchar(25) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_f`, `date-d`, `durre`, `prix`) VALUES
(1, '2024-05-01', '1 ans ', 15);

-- --------------------------------------------------------

--
-- Structure de la table `former`
--

CREATE TABLE `former` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `specialite` varchar(50) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `cv` varchar(100) DEFAULT NULL,
  `is_Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `former`
--

INSERT INTO `former` (`id_user`, `username`, `password`, `email`, `specialite`, `experience`, `cv`, `is_Active`) VALUES
(1, 'habib', 'habib', 'habib@gmail.com', 'informatique', '2 ans ', 'ok', 1),
(2, 'former', 'former', 'former@gmail.com', 'maths', '2 ans ', 'ok', 1),
(27, 'donia', 'donia', 'donia@gmail.com', 'maths', '2 ans', 'b2cd7ff711cc1de40a8773a5eb2362c7.pdf', 1);

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `classe` varchar(50) DEFAULT NULL,
  `Gender` varchar(25) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `Date of Birth` date NOT NULL,
  `Student Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`id_user`, `username`, `password`, `email`, `classe`, `Gender`, `image`, `Date of Birth`, `Student Name`) VALUES
(4, 'donia zahaf', '3e89fe3751d90725d2a5458411cf472a', 'donia@gmail.com', '2', 'Female', '568bf362450b433a49c84e82868a1138.jpeg', '2001-01-26', 'donia'),
(5, 'faresdrira', 'drira', 'drirafares28@gmail.com', '1', 'Male', '80a24996ffb7630cf9b9a16f1d8d6853.png', '2003-01-18', 'fares'),
(6, 'habibbb', 'driria', 'habibdrira6@gmail.com', '2', 'Male', '1573aedecd9f356eff631c909c4be3a7.jpeg', '2000-10-30', 'habib'),
(8, 'iheb', '$2y$10$SjNkIlhZQdDjppI.IKDpiuO7MXSMgH7tjpAxxSQu73a7QEicnFSZC', 'iheb@gmail.com', 'ing', 'male ', 'student.sql', '2005-10-20', 'iheb'),
(9, 'habib', '$2y$10$znWonWkMbflwPBnpTYdOJOpkdSZ6VKGBq0SgYilYVv6hv2SwG9yyK', 'habibdrira6@gmail.com', 'ok', 'ok', 'image00011.jpeg', '2000-12-28', 'habib'),
(10, 'iheb', 'iehb', 'iheb@gmail.com', 'ok', 'male', 'image00013.jpeg', '2000-10-20', 'iheb'),
(11, 'habib', 'habib', 'habibdrira6@gmail.com', '1 er ', 'male', 'Bulletin_015303001094_.pdf', '2000-10-30', 'habibb');

-- --------------------------------------------------------

--
-- Structure de la table `teacher`
--

CREATE TABLE `teacher` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matiere` varchar(100) DEFAULT NULL,
  `classe` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `teacher`
--

INSERT INTO `teacher` (`id_user`, `username`, `password`, `email`, `matiere`, `classe`) VALUES
(1, 'safa', 'safa', 'safa@gmail.com', 'chimie', '1'),
(2, 'ahmed', 'ahmed', 'ahmed', 'ahmed', '2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `class`
--
ALTER TABLE `class`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_et`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_f`);

--
-- Index pour la table `former`
--
ALTER TABLE `former`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_et` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `former`
--
ALTER TABLE `former`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
