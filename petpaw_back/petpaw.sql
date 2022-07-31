-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 12:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petpaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '4a7d1ed414474e4033ac29ccb8653d9b');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_cmt` int(100) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `ID_Pr` int(100) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_cmt`, `userName`, `comments`, `ID_Pr`, `id_user`) VALUES
(7, 'steven', 'nice product', 3, 20),
(8, 'steven', 'I recommend it', 3, 20),
(9, 'steven', 'nice product', 7, 20),
(10, 'steven', 'hi', 3, 20),
(11, 'steven', 'fun to play with', 7, 20);

-- --------------------------------------------------------

--
-- Table structure for table `emplois`
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
-- Dumping data for table `emplois`
--

INSERT INTO `emplois` (`id`, `title`, `description`, `color`, `start`, `end`) VALUES
(9, 'Ahmed Salah', 'registration', '#40E0D0', '2021-12-08 06:00:00', '2021-12-08 07:00:00'),
(10, 'Mohamed chi5', 'presentation', '#0071c5', '2021-12-08 19:30:00', '2021-12-08 20:30:00'),
(11, 'Yahya Samet', 'Animals care', '#FF0000', '2021-12-08 08:00:00', '2021-12-08 09:00:00'),
(12, 'Ramy Ouinet', 'speak event', '#008000', '2021-12-14 09:00:00', '2021-12-14 10:00:00'),
(13, 'Rayan', 'speaker adoptation', '#FF0000', '2021-12-16 10:00:00', '2021-12-16 11:00:00'),
(14, 'Salah', 'speaking about animals', '#FF8C00', '2021-12-08 09:00:00', '2021-12-08 11:00:00'),
(15, 'yahya', '12', '#FFD700', '2021-12-08 21:00:00', '2021-12-08 22:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `enclos`
--

CREATE TABLE `enclos` (
  `id` int(11) NOT NULL,
  `superficie` int(255) NOT NULL,
  `dure` date NOT NULL,
  `image` text NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_admin` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enclos`
--

INSERT INTO `enclos` (`id`, `superficie`, `dure`, `image`, `id_type`, `id_admin`) VALUES
(21, 8, '2021-11-30', '1.jpeg', 5, 1),
(24, 77, '2021-11-30', 'enclos2.jpg', 5, 1),
(25, 5, '2021-12-02', '2.jpg', 5, 1),
(26, 6, '2021-11-29', '3.jpg', 5, 1),
(27, 21, '2021-12-30', '4.jpg', 6, 1),
(28, 78, '2021-12-23', '2.jpg', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
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
  `spot` int(20) NOT NULL,
  `id_admin` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_ev`, `nom_ev`, `lieu`, `descrip_lieu`, `date_ev`, `date_fin`, `nb_p`, `descrip_ev`, `spot`, `id_admin`) VALUES
(22, 'OneAdoption', 'Movenpick', 'Situé sur la plageMarsa', '2021-12-08 19:14:00', '2021-12-09 19:13:00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12764.210114593101!2d10.317895282740988!3d36.88909161370112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2b459245b1173%3A0x968b4c7655688528!2sMovenpick%20Hotel%20Gammarth%20Tunis!5e0!3m2!1sfr!2stn!4v1638698982156!5m2!1sfr!2stn\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'In order to start', 2, 1),
(25, 'AA', 'AA', 'AA', '2029-06-23 16:36:00', '2032-12-02 16:34:00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.66695017975!2d10.186356426675559!3d36.898180081246984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb75abbb1733%3A0x557a99cdf6c13b7b!2sesprit%20ecole%20d\'ing%C3%A9nieurs!5e0!3m2!1sfr!2stn!4v1638697384860!5m2!1sfr!2stn\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'AA', 1, 1),
(27, 'Yahya', 'Yahya', 'azeezz', '2021-12-16 12:00:00', '2021-12-24 12:00:00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99893.45105858294!2d10.463524373666232!3d36.358495708787814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd637ff191e839%3A0x38eded302e99d578!2sTUI%20MAGIC%20LIFE%20Africana!5e0!3m2!1sfr!2stn!4v1638961207577!5m2!1sfr!2stn\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'zedfs', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gestion_animaux`
--

CREATE TABLE `gestion_animaux` (
  `id` int(255) NOT NULL,
  `nom_Animal` varchar(100) NOT NULL,
  `race` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `poid` int(100) NOT NULL,
  `date_recuperation` date NOT NULL,
  `endroit_recuperation` varchar(100) NOT NULL,
  `idrg` int(255) NOT NULL,
  `img_animal` varchar(100) NOT NULL,
  `id_admin` int(255) NOT NULL,
  `id_enclos` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gestion_animaux`
--

INSERT INTO `gestion_animaux` (`id`, `nom_Animal`, `race`, `genre`, `poid`, `date_recuperation`, `endroit_recuperation`, `idrg`, `img_animal`, `id_admin`, `id_enclos`) VALUES
(26, 'Mimou', 'chat', 'chat', 5, '2021-11-16', 'ariana', 2, '1.jpg', 1, 21),
(29, 'Toutou', 'chat', 'chat', 55, '2021-11-17', 'ariana', 7, '3.jpg', 1, 21),
(30, 'Loulou', 'chien', 'chien', 10, '2021-11-14', 'tunis', 7, '4.jpg', 1, 21),
(33, 'Titi', 'oiseau', 'oiseau', 1, '2021-12-05', 'tunis', 2, '5.jpg', 1, 21),
(34, 'KOUKOU', 'oiseau', 'oiseau', 1, '2021-12-07', 'tunis', 2, '6.jpg', 1, 21),
(35, 'Sousou', 'crevette', 'crevette', 1, '2021-12-08', 'tunis', 4, '7.jpg', 1, 21),
(36, 'J', 'chat', 'chat', 5, '2021-12-08', 'tunis', 2, '8.jpg', 1, 21),
(37, 'Web', 'WEB', 'WEB', 2, '2021-12-15', 'WEB', 2, '2.jpg', 1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID_ord` int(100) NOT NULL,
  `Date_ord` date NOT NULL,
  `Quantity_ord` int(100) NOT NULL,
  `Price_ord` int(100) NOT NULL,
  `ID_Pr` int(100) NOT NULL,
  `id_panier` int(255) NOT NULL,
  `id_client` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID_ord`, `Date_ord`, `Quantity_ord`, `Price_ord`, `ID_Pr`, `id_panier`, `id_client`) VALUES
(375, '2021-12-17', 1, 8, 4, 75, 23),
(376, '2021-12-17', 1, 10, 3, 76, 23),
(377, '2021-12-17', 1, 12, 5, 77, 23),
(378, '2021-12-17', 1, 22, 9, 78, 23);

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(255) NOT NULL,
  `nom_panier` varchar(255) NOT NULL,
  `qte_panier` int(255) NOT NULL,
  `prix_total` int(255) NOT NULL,
  `ID_Pr` int(255) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panier`
--

INSERT INTO `panier` (`id_panier`, `nom_panier`, `qte_panier`, `prix_total`, `ID_Pr`, `id_user`) VALUES
(59, 'Tree house', 1, 30, 6, 21),
(60, 'Spiral spring', 1, 12, 5, 21),
(61, 'Harness', 1, 16, 8, 21),
(62, 'Test', 1, 10, 3, 21),
(75, 'Chewing ball', 1, 8, 4, 23),
(76, 'Test', 1, 10, 3, 23),
(77, 'Spiral spring', 1, 12, 5, 23),
(78, 'Bed', 1, 22, 9, 23);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID_Pr` int(100) NOT NULL,
  `Name_Pr` varchar(255) NOT NULL,
  `Price_Pr` int(100) NOT NULL,
  `Quantity_Pr` int(100) NOT NULL,
  `Image_Pr` varchar(255) NOT NULL,
  `Description_Pr` varchar(255) NOT NULL,
  `Type_Pr` varchar(255) NOT NULL,
  `Category_Pr` varchar(255) NOT NULL,
  `id_admin` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID_Pr`, `Name_Pr`, `Price_Pr`, `Quantity_Pr`, `Image_Pr`, `Description_Pr`, `Type_Pr`, `Category_Pr`, `id_admin`) VALUES
(2, 'Biscuits', 16, 7, 'unnamed.jpg', 'Dog treats', 'Food', 'Dogs', 1),
(3, 'Test', 10, 5, '51e21aBzDxL.jpg', 'Desc', 'Food', 'Dogs', 1),
(4, 'Chewing ball', 8, 5, 'indoor-dog-toys-1587002073.jpg', 'Dog chewing toy', 'Toys', 'Dogs', 1),
(5, 'Spiral spring', 12, 12, '71bNP5QUiJS._SS400_.jpg', 'Cat spiral spring', 'Toys', 'Cats', 1),
(6, 'Tree house', 30, 10, '71fTabRzL2L._AC_SL1500_.jpg', 'Cat tree house', 'Toys', 'Cats', 1),
(7, 'Play balls', 45, 24, '81BR5S9WhcL._AC_SL1500_.jpg', 'Rabbits play balls', 'Toys', 'Rabbits', 1),
(8, 'Harness', 16, 7, 'ezgif.com-gif-maker (2).png', 'Cat harness', 'Clothes', 'Cats', 1),
(9, 'Bed', 22, 7, 'ezgif.com-gif-maker (3).png', 'Cat bed', 'More', 'Cats', 1),
(11, 'Cape', 30, 5, 'Untitled-1.png', 'Christmas cape for cats', 'Clothes', 'Cats', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rdv`
--

CREATE TABLE `rdv` (
  `id_rdv` int(200) NOT NULL,
  `id_animal` int(200) NOT NULL,
  `names` varchar(200) NOT NULL,
  `dates` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rdv`
--

INSERT INTO `rdv` (`id_rdv`, `id_animal`, `names`, `dates`, `email`, `phone`) VALUES
(1, 34, 'amira', '2021-12-02', 'ramy.aouinet@esprit.tn', 12345678),
(2, 34, 'amira', '2021-12-10', 'ramy.aouinet@esprit.tn', 12345678),
(3, 34, 'amira', '2021-12-03', 'ramy.aouinet@esprit.tn', 1),
(4, 33, 'amira', '2021-12-04', 'ramy.aouinet@esprit.tn', 1),
(5, 34, 'one', '2021-12-02', 'ramyaouinet@hotmail.fr', 5555),
(6, 34, 'one', '2021-12-01', 'ramyaouinet@hotmail.fr', 11111),
(7, 34, 'one', '2021-12-08', 'ramyaouinet@hotmail.fr', 55522220),
(8, 34, 'one', '2021-12-08', 'one@one', 253333),
(9, 34, 'one', '2021-11-30', 'one@one', 1),
(10, 34, 'one', '2021-12-08', 'one@one', 111),
(11, 34, 'ramt', '2021-12-04', 'one@one', 1),
(12, 34, 'amira', '2021-12-08', 'ramyaouinet@hotmail.fr', 4),
(13, 34, 'ramt', '2021-12-18', 'ramyaouinet@hotmail.fr', 1),
(14, 35, 'ramy', '2021-12-11', 'ramyaouinet@hotmail.fr', 555555);

-- --------------------------------------------------------

--
-- Table structure for table `reactions`
--

CREATE TABLE `reactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reaction` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reactions`
--

INSERT INTO `reactions` (`id`, `user_id`, `reaction`) VALUES
(22, 1, -1),
(22, 2, 1),
(22, 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `regime_animaux`
--

CREATE TABLE `regime_animaux` (
  `id_regime` int(255) NOT NULL,
  `nom_regime` varchar(255) NOT NULL,
  `type_nourriture` varchar(255) NOT NULL,
  `nbr_repas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regime_animaux`
--

INSERT INTO `regime_animaux` (`id_regime`, `nom_regime`, `type_nourriture`, `nbr_repas`) VALUES
(2, 'Oni', 'yyy', 3),
(3, 'Toni', 'in', 4),
(4, 'Mani', 'oni', 2),
(5, 'H', 'H', 8),
(6, 'G', 'H', 10),
(7, 'TEST', 'TEST', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `id` int(100) NOT NULL,
  `email_from` varchar(100) NOT NULL,
  `email_from_alias` varchar(100) NOT NULL,
  `objects` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `race` varchar(200) NOT NULL,
  `endroit_recuperation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`id`, `email_from`, `email_from_alias`, `objects`, `body`, `race`, `endroit_recuperation`) VALUES
(3, 'ramyaouinet@hotmail.fr', 'ramy', 'test', '  \r\n  test         ', '', '0'),
(4, 'ramyaouinet@hotmail.fr', 'saif', 'test', 'test test test', 'oiseau', 'tunis'),
(5, 'amine@gmail.com', 'amine', 'report', 'test', 'crevette', 'tunis'),
(6, 'ramyaouinet@hotmail.fr', 'ramy', 'animal perdu', 'test', 'chat', 'tunis');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
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
  `id2_ev` int(11) NOT NULL,
  `id_admin` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id_sp`, `name_sp`, `type_sp`, `numtel_sp`, `mail_sp`, `inves_sp`, `image_sp`, `descrip_sp`, `id2_ev`, `id_admin`) VALUES
(21, 'Yahya', 'Platinum', 21, 'yahyasmt@esprit.tn', 12, '1.png', '122', 22, 1),
(22, 'AAE', 'Platinum', 21, 'yahyasmt@esprit.tn', 9, '2.png', '1342', 22, 1),
(23, 'AA', 'Gold', 11, 'yahyasmt@esprit.tn', 12, '3.png', 'AAA', 22, 1),
(24, 'Yahya', 'Platinum', 12, 'yahyasmt@esprit.tn', 21, '4.png', '21', 22, 1),
(25, 'AAA', 'Standard', 12, 'yahyasmt@esprit.tn', 12, '5.png', 'ZAE', 22, 1),
(27, 'ZZ', 'Platinum', 5678, 'yzhy@esprit.tn', 12, '3.png', 'CGHVJKK', 22, 1),
(29, 'SP', 'Platinum', 1, 'amirabm@esprit.tn', 1, '7.png', 'sdfsdf', 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ticktes`
--

CREATE TABLE `ticktes` (
  `id_tk` int(11) NOT NULL,
  `name_tk` varchar(100) NOT NULL,
  `mail_tk` varchar(100) NOT NULL,
  `type_tk` varchar(100) NOT NULL,
  `id3_ev` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticktes`
--

INSERT INTO `ticktes` (`id_tk`, `name_tk`, `mail_tk`, `type_tk`, `id3_ev`) VALUES
(6, 'samet', 'pro-access', 'yahyasmt@gmail.com', 22),
(7, 'hama', 'premium-access', 'hamaregaya@gmail.com', 22),
(8, 'hama', 'premium-access', 'hamaregaya@gmail.com', 22),
(9, 'hama', 'premium-access', 'yahyasmt@gmail.com', 22),
(10, 'hama', 'premium-access', 'yahyasmt@gmail.com', 22),
(11, 'Mohamed Regaya', 'premium-access', 'hamaregaya@gmail.com', 22),
(14, 'yahya', 'pro-access', 'yahyasmt@gmail.com', 22),
(15, 'Mohamed Regaya', 'premium-access', 'hamaregaya@gmail.com', 22),
(16, 'Yahya Samet', 'pro-access', 'yahyasmt@gmail.com', 22),
(17, 'Mohamed Regaya', 'pro-access', 'hamaregaya@gmail.com', 22),
(19, 'Salah123', 'pro-access', 'yahyasmt@gmail.com', 22),
(20, 'AMIRA', 'pro-access', 'amira.benmbarek@esprit.tn', 22),
(21, 'amira', 'pro-access', 'amira.benmbarek@esprit.tn', 22),
(23, 'amira', 'premium-access', 'amira.benmbarek@esprit.tn', 22),
(25, 'YAHYA', 'pro-access', 'amira.benmbarek@esprit.tn', 22),
(26, 'amira', 'pro-access', 'amira.benmbarek@esprit.tn', 22);

-- --------------------------------------------------------

--
-- Table structure for table `typee`
--

CREATE TABLE `typee` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `typee`
--

INSERT INTO `typee` (`id`, `nom`) VALUES
(5, 'test4'),
(6, 'chien'),
(7, 'ter'),
(8, 'web');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `mobile`, `designation`, `image`, `status`) VALUES
(20, 'steven', 'qsd@qsd', '81dc9bdb52d04dc20036dbd8313ed055', 'Female', '12345678', 'hi', 'thumb-1920-1141913.jpg', 1),
(21, 'ronny', 'qsd@qsd', '202cb962ac59075b964b07152d234b70', 'Female', '12345678', 'hiiii', 'thumb-1920-1101641.jpg', 1),
(23, 'Amira', 'amira.benmbarek@esprit.tn', '4a7d1ed414474e4033ac29ccb8653d9b', 'Female', '12345678', '123', '80d364e09d31fcba8af274926d4332ff.jpg', 1),
(26, 'Validation web', 'amira.benmbarek@esprit.tn', '4a7d1ed414474e4033ac29ccb8653d9b', 'Female', '123456', '123', '80d364e09d31fcba8af274926d4332ff.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` int(255) NOT NULL,
  `id_pr` int(255) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_cmt`),
  ADD KEY `ID_Pr` (`ID_Pr`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `emplois`
--
ALTER TABLE `emplois`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enclos`
--
ALTER TABLE `enclos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_ev`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `gestion_animaux`
--
ALTER TABLE `gestion_animaux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cle_etr` (`idrg`),
  ADD KEY `gestion_animaux_ibfk_2` (`id_enclos`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID_ord`),
  ADD KEY `ID_Pr` (`ID_Pr`),
  ADD KEY `id_panier` (`id_panier`),
  ADD KEY `orders_ibfk_3` (`id_client`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`),
  ADD KEY `ID_Pr` (`ID_Pr`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID_Pr`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`id_rdv`),
  ADD KEY `cle etrangere` (`id_animal`);

--
-- Indexes for table `reactions`
--
ALTER TABLE `reactions`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `regime_animaux`
--
ALTER TABLE `regime_animaux`
  ADD PRIMARY KEY (`id_regime`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `cle_etrng` (`id2_ev`),
  ADD KEY `sponsors_ibfk_1` (`id_admin`);

--
-- Indexes for table `ticktes`
--
ALTER TABLE `ticktes`
  ADD PRIMARY KEY (`id_tk`),
  ADD KEY `cle_etrng1` (`id3_ev`);

--
-- Indexes for table `typee`
--
ALTER TABLE `typee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`),
  ADD KEY `id_pr` (`id_pr`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_cmt` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `emplois`
--
ALTER TABLE `emplois`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `enclos`
--
ALTER TABLE `enclos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_ev` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `gestion_animaux`
--
ALTER TABLE `gestion_animaux`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID_ord` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=379;

--
-- AUTO_INCREMENT for table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_panier` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID_Pr` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `id_rdv` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `regime_animaux`
--
ALTER TABLE `regime_animaux`
  MODIFY `id_regime` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id_sp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `ticktes`
--
ALTER TABLE `ticktes`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `typee`
--
ALTER TABLE `typee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wishlist` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`ID_Pr`) REFERENCES `product` (`ID_Pr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enclos`
--
ALTER TABLE `enclos`
  ADD CONSTRAINT `enclos_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `typee` (`id`),
  ADD CONSTRAINT `enclos_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gestion_animaux`
--
ALTER TABLE `gestion_animaux`
  ADD CONSTRAINT `cle_etr` FOREIGN KEY (`idrg`) REFERENCES `regime_animaux` (`id_regime`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gestion_animaux_ibfk_2` FOREIGN KEY (`id_enclos`) REFERENCES `enclos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gestion_animaux_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`ID_Pr`) REFERENCES `product` (`ID_Pr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_panier`) REFERENCES `panier` (`id_panier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`id_client`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`ID_Pr`) REFERENCES `product` (`ID_Pr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `cle etrangere` FOREIGN KEY (`id_animal`) REFERENCES `gestion_animaux` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD CONSTRAINT `cle_etrng` FOREIGN KEY (`id2_ev`) REFERENCES `events` (`id_ev`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sponsors_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticktes`
--
ALTER TABLE `ticktes`
  ADD CONSTRAINT `cle_etrng1` FOREIGN KEY (`id3_ev`) REFERENCES `events` (`id_ev`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`id_pr`) REFERENCES `product` (`ID_Pr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
