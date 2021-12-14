-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 déc. 2021 à 16:17
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `emplois`
--

CREATE TABLE `emplois` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `color` varchar(7) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `emplois`
--

INSERT INTO `emplois` (`id`, `title`, `description`, `color`, `start`, `end`) VALUES
(9, 'Ahmed Salah', 'registration', '#40E0D0', '2021-12-17 19:00:00', '2021-12-17 20:00:00'),
(11, 'Yahya Samet', 'Animals care', '#FF0000', '2021-12-16 08:00:00', '2021-12-16 09:00:00'),
(12, 'Ramy Ouinet', 'speak event', '#008000', '2021-12-16 09:00:00', '2021-12-16 10:00:00'),
(13, 'Rayan', 'speaker adoptation', '#FF0000', '2021-12-17 10:00:00', '2021-12-17 11:00:00'),
(15, 'Ines', 'speak event', '#FFD700', '2021-12-14 10:00:00', '2021-12-14 11:30:00'),
(16, 'ALA', 'HAHAHHAHA', '#008000', '2021-12-08 13:00:00', '2021-12-08 14:30:00'),
(17, 'prof', 'event care', '#FF8C00', '2021-12-15 00:00:00', '2021-12-16 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id_ev` int(100) NOT NULL,
  `nom_ev` varchar(100) NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `descrip_lieu` text NOT NULL,
  `date_ev` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `nb_p` varchar(1000) NOT NULL,
  `descrip_ev` text NOT NULL,
  `spot` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id_ev`, `nom_ev`, `lieu`, `descrip_lieu`, `date_ev`, `date_fin`, `nb_p`, `descrip_ev`, `spot`) VALUES
(22, 'OneAdoption', 'Movenpick', 'Situé sur la plageMarsa', '2021-12-15 14:25:00', '2021-12-17 14:25:00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12764.210114593101!2d10.317895282740988!3d36.88909161370112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2b459245b1173%3A0x968b4c7655688528!2sMovenpick%20Hotel%20Gammarth%20Tunis!5e0!3m2!1sfr!2stn!4v1638698982156!5m2!1sfr!2stn\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'In order to start', 2),
(27, 'Yahya', 'Yahya', 'azeezz', '2021-12-14 17:25:00', '2021-12-16 14:23:00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99893.45105858294!2d10.463524373666232!3d36.358495708787814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd637ff191e839%3A0x38eded302e99d578!2sTUI%20MAGIC%20LIFE%20Africana!5e0!3m2!1sfr!2stn!4v1638961207577!5m2!1sfr!2stn\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'zedfs', 1),
(28, 'AAAAAAAAAA', 'AAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAAA', '2021-12-30 16:36:00', '2021-12-31 12:40:00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51168.94075756179!2d10.304901!3d36.721149100000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd49a5b36001d9%3A0x2a0fb8cd4cd328a9!2zMzbCsDQ0JzA2LjIiTiAxMMKwMTcnNTEuMSJF!5e0!3m2!1sfr!2stn!4v1639481840690!5m2!1sfr!2stn\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'azert', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reactions`
--

CREATE TABLE `reactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reaction` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reactions`
--

INSERT INTO `reactions` (`id`, `user_id`, `reaction`) VALUES
(22, 1, -1),
(22, 2, 1),
(22, 3, 1),
(22, 4, -1),
(22, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `sponsors`
--

CREATE TABLE `sponsors` (
  `id_sp` int(100) NOT NULL,
  `name_sp` varchar(100) NOT NULL,
  `type_sp` varchar(100) NOT NULL,
  `numtel_sp` int(100) NOT NULL,
  `mail_sp` varchar(100) NOT NULL,
  `inves_sp` int(100) NOT NULL,
  `image_sp` varchar(100) NOT NULL,
  `descrip_sp` text NOT NULL,
  `id2_ev` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sponsors`
--

INSERT INTO `sponsors` (`id_sp`, `name_sp`, `type_sp`, `numtel_sp`, `mail_sp`, `inves_sp`, `image_sp`, `descrip_sp`, `id2_ev`) VALUES
(21, 'Yahya', 'Platinum', 21, 'yahyasmt@esprit.tn', 12, '1.png', '122', 22),
(22, 'AAE', 'Platinum', 21, 'yahyasmt@esprit.tn', 9, '2.png', '1342', 22),
(23, 'AA', 'Gold', 11, 'yahyasmt@esprit.tn', 12, '3.png', 'AAA', 22),
(24, 'Yahya', 'Platinum', 12, 'yahyasmt@esprit.tn', 21, '4.png', '21', 22),
(25, 'AAA', 'Standard', 12, 'yahyasmt@esprit.tn', 12, '5.png', 'ZAE', 22);

-- --------------------------------------------------------

--
-- Structure de la table `ticktes`
--

CREATE TABLE `ticktes` (
  `id_tk` int(11) NOT NULL,
  `name_tk` varchar(100) NOT NULL,
  `mail_tk` varchar(100) NOT NULL,
  `type_tk` varchar(100) NOT NULL,
  `id3_ev` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ticktes`
--

INSERT INTO `ticktes` (`id_tk`, `name_tk`, `mail_tk`, `type_tk`, `id3_ev`) VALUES
(3, 'Yahya Samet', 'pro-access', 'yahyasmt@gmail.com', 22),
(5, 'lalal', 'pro-access', 'yahyasmt@gmail.com', 22),
(7, 'hama', 'premium-access', 'hamaregaya@gmail.com', 22),
(8, 'hama', 'premium-access', 'hamaregaya@gmail.com', 22),
(9, 'hama', 'premium-access', 'yahyasmt@gmail.com', 22),
(10, 'hama', 'premium-access', 'yahyasmt@gmail.com', 22),
(11, 'Mohamed Regaya', 'premium-access', 'hamaregaya@gmail.com', 22),
(12, 'Yahya Samet', 'pro-access', 'yahyasmt@gmail.com', 22),
(14, 'yahya', 'pro-access', 'yahyasmt@gmail.com', 22),
(15, 'Mohamed Regaya', 'premium-access', 'hamaregaya@gmail.com', 22),
(16, 'Yahya Samet', 'pro-access', 'yahyasmt@gmail.com', 22),
(17, 'Mohamed Regaya', 'pro-access', 'hamaregaya@gmail.com', 22),
(18, 'Yahya Samet', 'pro-access', 'hamaregaya@gmail.com', 22),
(19, 'Salah123', 'pro-access', 'yahyasmt@gmail.com', 22),
(20, 'AMIRA', 'pro-access', 'amira.benmbarek@esprit.tn', 22),
(21, 'INES', 'pro-access', 'inesmeddeb05@gmail.com', 22),
(22, 'yahyasamet', 'pro-access', 'gcinter.zaineb@gmail.com', 22),
(23, 'Yahya Samet', 'pro-access', 'yahyasmt@gmail.com', 22),
(24, 'AAAA', 'standard-access', 'yahyasmt@gmail.com', 22),
(25, 'Yahya Samet', 'pro-access', 'yahyasmt@gmail.com', 22);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `emplois`
--
ALTER TABLE `emplois`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_ev`);

--
-- Index pour la table `reactions`
--
ALTER TABLE `reactions`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `cle_etrng` (`id2_ev`);

--
-- Index pour la table `ticktes`
--
ALTER TABLE `ticktes`
  ADD PRIMARY KEY (`id_tk`),
  ADD KEY `cle_etrng1` (`id3_ev`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `emplois`
--
ALTER TABLE `emplois`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id_ev` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id_sp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `ticktes`
--
ALTER TABLE `ticktes`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `sponsors`
--
ALTER TABLE `sponsors`
  ADD CONSTRAINT `cle_etrng` FOREIGN KEY (`id2_ev`) REFERENCES `events` (`id_ev`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ticktes`
--
ALTER TABLE `ticktes`
  ADD CONSTRAINT `cle_etrng1` FOREIGN KEY (`id3_ev`) REFERENCES `events` (`id_ev`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
