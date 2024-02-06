-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3307
-- Généré le : mar. 16 jan. 2024 à 17:46
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
-- Base de données : `departement_informatique`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `idEtudiant` int(11) NOT NULL,
  `CIN` varchar(20) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(50) NOT NULL,
  `filiere` varchar(50) NOT NULL,
  `code_massar` varchar(30) NOT NULL,
  `Email_personnel` varchar(50) NOT NULL,
  `Email_institutionnel` varchar(50) NOT NULL,
  `code_apogée` varchar(30) NOT NULL,
  `Mot_de_passe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idEtudiant`, `CIN`, `Nom`, `Prenom`, `date_naissance`, `lieu_naissance`, `filiere`, `code_massar`, `Email_personnel`, `Email_institutionnel`, `code_apogée`, `Mot_de_passe`) VALUES
(1, 'LF55283', 'TOUAHRI', 'GHIZLANE', '2002-09-03', 'Cartagena ', 'TMW', 'H133456789000', 'ghizlanetouahri98@gmail.com', 'ghizlanetouahri2@um5.ac.ma', '1111', 'ghizlane'),
(2, 'H1234', 'ALAOUI', 'CHAIMAE', '2003-01-03', 'Meknes', 'TMW', 'M123456789', 'chaimaealaloui@gmail.com', 'chaimaealaloui@um5.ac.ma', '22222', 'chaimae'),
(3, 'FHHIIL', 'RAMDI', 'SALMA', '2003-01-02', 'ERRICH', 'TMW', 'H13555555555555', 'ramdisalma@gmail.com', 'ramdisalma@um5.ac.ma', '33333', 'salma'),
(4, 'LF7777', 'ECHCHERQAOUI', 'SALMA', '2002-05-25', 'KHRIBGA', 'TMW', 'H13555555555', 'salmaech@gmail.com', 'salmaech@um5.ac.ma', '444444', 'salmaech'),
(5, 'H55555', 'KAWTAR', 'ISMAGANE', '2004-03-02', 'RABAT', 'TMW', 'M136666666666', 'kawtarismagane@gmail.com', 'kawtarismagane@um5.ac.ma', '555555', 'kawtar'),
(6, 'M8999', 'TOUAHRI', 'GHIZLANE', '2002-09-03', 'Cartagena ', 'TMW', 'H133456789000', 'ghizlanetouahr@gmail.com', 'ghizlane@um5.ac.ma', '66666', 'ghizlane12'),
(7, 'LH77777', 'ALAOUI', 'CHAIMAE', '2003-01-03', 'Meknes', 'TMW', 'M123456789', 'chaimaealaloui@gmail.com', 'chaimaea@um5.ac.ma', '7777', 'chaimae34'),
(8, 'PH99999', 'RAMDI', 'SALMA', '2003-01-02', 'ERRICH', 'TMW', 'H13555555555555', 'ramdisalma@gmail.com', 'ramdi@um5.ac.ma', '8888', 'salma56'),
(9, 'LF7777', 'ECHCHERQAOUI', 'SALMA', '2002-05-25', 'KHRIBGA', 'TMW', 'H13555555555', 'salmaech@gmail.com', 'salmae@um5.ac.ma', '9999', 'salmaech78'),
(10, 'H7890', 'KAWTAR', 'ISMAGANE', '2004-03-02', 'RABAT', 'TMW', 'M136666666666', 'kawtarismagane@gmail.com', 'kawtar@um5.ac.ma', '1010', 'kawtar9');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `idModule` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Note de module` float NOT NULL,
  `nom_Module` varchar(30) NOT NULL,
  `Nom_professeur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`idModule`, `id_etudiant`, `Email`, `Note de module`, `nom_Module`, `Nom_professeur`) VALUES
(1, 1, 'ghizlanetouahri2@um5.ac.ma', 15.5, 'Base de données', 'RAHMOUNI MOHAMED'),
(2, 2, 'chaimaealaloui@um5.ac.ma', 15, 'Didactique générale', 'RAHMOUNI MOHAMED'),
(3, 2, 'chaimaealaloui@um5.ac.ma', 20, 'Base de données', 'RAHMOUNI MOHAMED'),
(4, 2, 'chaimaealaloui@um5.ac.ma', 19, 'Structure de données', 'ABDELALI ELMOUNADI'),
(5, 2, 'chaimaealaloui@um5.ac.ma', 15, 'Introduuction à web', 'BARKIA HASSAN');

-- --------------------------------------------------------

--
-- Structure de la table `pdf_documents`
--

CREATE TABLE `pdf_documents` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` mediumblob DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pdf_documents`
--

INSERT INTO `pdf_documents` (`id`, `title`, `content`, `created_at`, `image`) VALUES

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `idProfesseur` int(11) NOT NULL,
  `CIN` varchar(20) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `mot_de_passe` varchar(50) NOT NULL,
  `Modules` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`idProfesseur`, `CIN`, `Nom`, `Prenom`, `date_naissance`, `lieu_naissance`, `Email`, `mot_de_passe`, `Modules`) VALUES
(1, 'H12345', 'RAHMOUNI', 'MOHAMED', '1975-01-10', 'RABAT', 'rahmounimohamed@gmail.com', '12345', 'Base de données'),
(2, 'LF55283', 'TOUAHRI', 'GHIZLANE', '0000-00-00', 'JERADA', 'ghizlanetouahri@gmail.com', 'ghizlane123', 'Réseau Informatique');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`idEtudiant`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`idModule`);

--
-- Index pour la table `pdf_documents`
--
ALTER TABLE `pdf_documents`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`idProfesseur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `idEtudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `idModule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `pdf_documents`
--
ALTER TABLE `pdf_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `idProfesseur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;