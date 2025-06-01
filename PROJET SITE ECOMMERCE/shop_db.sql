-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 27 jan. 2023 à 18:14
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shop_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(1, 'Poulet', '3500', 'poulet2.jpg', 2),
(2, 'porc long chassi', '300000', 'porcLongchassi2-removebg-preview.png', 1),
(3, 'chevre', '1', 'chevre-1-074448.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `flat` int(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pin_code` int(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `country`, `pin_code`, `total_products`, `total_price`, `state`) VALUES
(1, 'souksouna', 237, 'reinesouksouna@gmail.com', 'cash on delivery', 0, 'star land hotel', 'douala', 'cameroun', 1230, 'Poulet (2) , porc long chassi (1) ', '307', ''),
(2, 'souksouna', 237, 'reinesouksouna@gmail.com', 'om', 0, 'star land hotel', 'douala', 'cameroun', 1230, 'Poulet (2) , porc long chassi (1) ', '307', 'MISHI'),
(3, 'souksouna', 237, 'reinesouksouna@gmail.com', 'cash on delivery', 0, 'star land hotel', 'douala', 'Cameroon', 1230, 'Poulet (2) , porc long chassi (1) ', '307', 'MISHI'),
(4, 'souksouna', 237, 'reinesouksouna@gmail.com', 'cash on delivery', 0, 'star land hotel', 'douala', 'Cameroon', 1230, 'Poulet (2) , porc long chassi (1) ', '307', 'MISHI'),
(5, 'souksouna', 237, 'reinesouksouna@gmail.com', 'cash on delivery', 0, 'star land hotel', 'douala', 'Cameroon', 1230, 'Poulet (2) , porc long chassi (1) ', '307', 'MISHI'),
(6, 'souksouna', 237, 'reinesouksouna@gmail.com', 'cash on delivery', 0, 'star land hotel', 'douala', 'Cameroon', 1230, 'Poulet (2) , porc long chassi (1) ', '307', 'MISHI'),
(7, 'souksouna', 237, 'reinesouksouna@gmail.com', 'cash on delivery', 0, 'star land hotel', 'douala', 'Cameroon', 1230, 'Poulet (2) , porc long chassi (1) , chevre (1) ', '308', 'MISHI'),
(8, 'souksouna', 237, 'reinesouksouna@gmail.com', 'cash on delivery', 0, 'star land hotel', 'douala', 'Cameroon', 1230, 'Poulet (2) , porc long chassi (1) , chevre (1) ', '308', 'MISHI'),
(9, 'souksouna', 237, 'reinesouksouna@gmail.com', 'cash on delivery', 0, 'star land hotel', 'douala', 'Cameroon', 1230, 'Poulet (2) , porc long chassi (1) , chevre (1) ', '308', 'MISHI'),
(10, 'souksouna', 237, 'reinesouksouna@gmail.com', 'cash on delivery', 0, 'star land hotel', 'douala', 'Cameroon', 1230, 'Poulet (2) , porc long chassi (1) , chevre (1) ', '308', 'MISHI'),
(11, 'souksouna', 237, 'reinesouksouna@gmail.com', 'cash on delivery', 0, 'star land hotel', 'douala', 'Cameroon', 1230, 'Poulet (2) , porc long chassi (1) , chevre (1) ', '308', 'MISHI'),
(12, 'souksouna', 237, 'reinesouksouna@gmail.com', 'cash on delivery', 0, 'star land hotel', 'douala', 'Cameroon', 1230, 'Poulet (2) , porc long chassi (1) , chevre (1) ', '308', 'MISHI'),
(13, 'souksouna', 237, 'reinesouksouna@gmail.com', 'cash on delivery', 0, 'star land hotel', 'douala', 'Cameroon', 1230, 'Poulet (2) , porc long chassi (1) , chevre (1) ', '308', 'MISHI'),
(14, 'souksouna', 237, 'reinesouksouna@gmail.com', 'cash on delivery', 0, 'star land hotel', 'douala', 'Cameroon', 1230, 'Poulet (2) , porc long chassi (1) , chevre (1) ', '308', 'MISHI'),
(15, 'souksouna', 237, 'reinesouksouna@gmail.com', 'cash on delivery', 0, 'star land hotel', 'douala', 'Cameroon', 1230, 'Poulet (2) , porc long chassi (1) , chevre (1) ', '308', 'MISHI');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(6, 'porc long chassi', '300000', 'porcLongchassi2-removebg-preview.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
