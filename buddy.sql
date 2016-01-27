-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 26 Janvier 2016 à 10:36
-- Version du serveur :  5.6.25
-- Version de PHP :  5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `buddy`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE IF NOT EXISTS `annonce` (
  `id` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `sous_categorie` varchar(255) DEFAULT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `region` varchar(255) DEFAULT NULL,
  `departement` varchar(255) DEFAULT NULL,
  `code_postal` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `photo_annonce` varchar(255) DEFAULT NULL,
  `id_bud` int(11) NOT NULL,
  `date_pub` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `buddy_connect`
--

CREATE TABLE IF NOT EXISTS `buddy_connect` (
  `id_profil` int(11) NOT NULL,
  `id_profil_buddy` int(11) NOT NULL,
  `date_mise_en_relation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `buddy_demande`
--

CREATE TABLE IF NOT EXISTS `buddy_demande` (
  `id_demandeur` int(11) NOT NULL,
  `id_cible` int(11) NOT NULL,
  `date` date NOT NULL,
  `statut` enum('accepte','en attente','refuse') NOT NULL DEFAULT 'en attente'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
(1, 'Arts Créatifs'),
(2, 'Audiovisuel'),
(3, 'Auto/moto'),
(4, 'Bénévolat'),
(5, 'Bricolage'),
(6, 'Collections'),
(7, 'Cuisine'),
(8, 'Danse'),
(9, 'Généalogie'),
(10, 'Graphisme'),
(11, 'Informatique'),
(12, 'Jardinage'),
(13, 'Jeux'),
(14, 'Lecture / Ecriture'),
(15, 'Mode/Shopping'),
(16, 'Modélisme'),
(17, 'Musique'),
(18, 'Nature'),
(19, 'Sorties'),
(20, 'Sports'),
(21, 'Théâtre'),
(22, 'Voyage');

-- --------------------------------------------------------

--
-- Structure de la table `hobby`
--

CREATE TABLE IF NOT EXISTS `hobby` (
  `id` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_ss_categorie` int(11) NOT NULL,
  `niveau` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mini_bio` text NOT NULL,
  `photo_profil` varchar(255) DEFAULT NULL,
  `id_wuser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `questions_public`
--

CREATE TABLE IF NOT EXISTS `questions_public` (
  `id_annonce` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `auteur_qp` int(11) NOT NULL,
  `text_qp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reponses_public`
--

CREATE TABLE IF NOT EXISTS `reponses_public` (
  `id_annonce` int(11) NOT NULL,
  `id_qp` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `auteur_rp` int(11) NOT NULL,
  `text_rp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ss_categorie`
--

CREATE TABLE IF NOT EXISTS `ss_categorie` (
  `id` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ss_categorie`
--

INSERT INTO `ss_categorie` (`id`, `id_categorie`, `libelle`) VALUES
(1, 1, 'Calligraphie'),
(2, 1, 'Cartonnage'),
(3, 1, 'Couture'),
(4, 1, 'Décoration'),
(5, 1, 'Dessin'),
(6, 1, 'Peinture'),
(7, 1, 'Perles / Bijoux'),
(8, 2, 'Bande Originale'),
(9, 2, 'Montage'),
(10, 2, 'Réaliser un film'),
(11, 2, 'Voir un film'),
(12, 3, 'événements / ballades'),
(13, 3, 'Réparation/restauration'),
(14, 6, 'Antiquités'),
(15, 6, 'Monnaie'),
(16, 6, 'Timbres'),
(17, 10, 'PAO'),
(18, 10, 'Photographie'),
(19, 13, 'Jeux de société '),
(20, 13, 'Jeux Grandeur Nature'),
(21, 13, 'Jeux vidéo'),
(22, 14, 'Calligraphie'),
(23, 14, 'Ecriture'),
(24, 14, 'Lecture'),
(25, 17, 'Bois'),
(26, 17, 'Chant'),
(27, 17, 'Claviers'),
(28, 17, 'Cordes'),
(29, 17, 'Cuivres'),
(30, 17, 'Musique Electronique'),
(31, 17, 'Percussions'),
(32, 18, 'Animaux'),
(33, 18, 'Astronomie'),
(34, 18, 'Camping'),
(35, 18, 'Chasse'),
(36, 18, 'Pêche'),
(37, 18, 'Pique-Nique'),
(38, 18, 'Randonnée'),
(39, 19, 'Sortie entre buddys'),
(40, 20, 'Arts Martiaux'),
(41, 20, 'Athlétisme'),
(42, 20, 'Cyclisme'),
(43, 20, 'Gym / Relaxation'),
(44, 20, 'Sport Collectif'),
(45, 20, 'Sports aériens'),
(46, 20, 'Sports avec animaux'),
(47, 20, 'Sports de cible'),
(48, 20, 'Sports de combat'),
(49, 20, 'Sports de glisse'),
(50, 20, 'Sports de raquette'),
(51, 20, 'Sports mécaniques'),
(52, 20, 'Sports nautiques');

-- --------------------------------------------------------

--
-- Structure de la table `wusers`
--

CREATE TABLE IF NOT EXISTS `wusers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `salt` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `questions_public`
--
ALTER TABLE `questions_public`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Index pour la table `reponses_public`
--
ALTER TABLE `reponses_public`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_rp_2` (`id`),
  ADD KEY `id_rp` (`id`);

--
-- Index pour la table `ss_categorie`
--
ALTER TABLE `ss_categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wusers`
--
ALTER TABLE `wusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `hobby`
--
ALTER TABLE `hobby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `questions_public`
--
ALTER TABLE `questions_public`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reponses_public`
--
ALTER TABLE `reponses_public`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ss_categorie`
--
ALTER TABLE `ss_categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT pour la table `wusers`
--
ALTER TABLE `wusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
