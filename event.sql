-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 12 juin 2021 à 07:45
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `event`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `id` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `first` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `tel` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id`, `email`, `first`, `last`, `password`, `tel`) VALUES
(1, 'customer1@mail.com', 'cus1', '1', 'afdd0b4ad2ec172c586e2150770fbf9e', 0),
(2, 'customer1@mail.com', 'cus2', '2', 'afdd0b4ad2ec172c586e2150770fbf9e', 0);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `choice` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `salle` varchar(20) NOT NULL,
  `year` int(4) NOT NULL,
  `people` varchar(28) NOT NULL,
  `price` int(10) NOT NULL,
  `Menu` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `choice`, `type`, `salle`, `year`, `people`, `price`, `Menu`, `status`) VALUES
(29, 'Premium', 'Birthday', 'Big Party Hall', 0, 'Unlimited', 20000, 'Savory/Sweet ', 1),
(30, 'Premium', 'Birthday', 'Normal Party Hall', 0, '1-50', 15000, 'Sweet only', 1),
(31, 'Basic', 'Birthday', 'Big Party Hall', 0, '1-100', 10000, 'Savory/Sweet ', 1),
(32, 'Basic', 'Birthday', 'Normal Party Hall', 0, '1-50', 5000, 'Sweet only', 1),
(33, 'Premium', 'Graduation Party', 'Big Party Hall', 0, '1-150', 17500, 'Savory/Sweet ', 1),
(34, 'Premium', 'Graduation Party', 'Normal Party Hall', 0, '1-90', 12500, 'Sweet only', 1),
(35, 'Premium', 'Wedding', 'Big Party Hall', 0, 'Unlimited', 45000, 'Savory/Sweet ', 1),
(36, 'Basic', 'Wedding', 'Big Party Hall', 0, '1-150', 29500, 'Sweet only', 1),
(37, 'Premium', 'Baby Shower', 'Normal Party Hall', 0, '1-40', 17500, 'Savory/Sweet ', 1),
(38, 'Basic', 'Baby Shower', 'Normal Party Hall', 0, '1-50', 12000, 'Sweet only', 1),
(39, 'Premium', 'proposal', 'Normal Party Hall', 0, '1-80', 13000, 'Sweet only', 1),
(40, 'Basic', 'proposal', 'Normal Party Hall', 0, '1-50', 11000, 'Sweet only', 1);

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `first` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `tel` int(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Déchargement des données de la table `staff`
--

INSERT INTO `staff` (`id`, `username`, `first`, `last`, `tel`, `password`, `type`) VALUES
(4, 'Administrator', 'Administrator', 'Admin', 123456, '64c2a97659f1ad91121bbcc613c031ab', '1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
