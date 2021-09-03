-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 31 août 2021 à 07:10
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cogip`
--

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `VAT_number` varchar(12) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `company`
--

INSERT INTO `company` (`id`, `name`, `country`, `VAT_number`, `type_id`) VALUES
(1, 'CompanyName01', 'Belgium', '222233334444', 1),
(2, 'CompanyName02', 'Belgium', '222233334444', 2),
(3, 'CompanyName03', 'France', '222233335555', 2),
(4, 'CompanyName04', 'Spain', '222233336666', 1),
(5, 'CompanyName05', 'Belgium', '222233334445', 1),
(6, 'CompanyName06', 'Belgium', '222233334446', 1),
(7, 'CompanyName07', 'France', '222233335556', 2),
(8, 'CompanyName08', 'Spain', '222233336667', 1);

-- --------------------------------------------------------

--
-- Structure de la table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `number` varchar(13) NOT NULL,
  `date` date NOT NULL,
  `people_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `invoice`
--

INSERT INTO `invoice` (`id`, `number`, `date`, `people_id`, `company_id`) VALUES
(1, '111', '2021-08-01', 4, 1),
(2, '112', '2021-08-02', 8, 3),
(3, '113', '2021-08-05', 8, 3),
(4, '123', '2021-08-19', 2, 2),
(5, '124', '2021-08-20', 5, 2),
(6, '125', '2021-08-23', 4, 1),
(7, '137', '2021-08-24', 3, 4),
(8, '138', '2021-08-25', 6, 4),
(9, '139', '2021-08-26', 1, 1),
(10, '140', '2021-08-27', 7, 1),
(11, '141', '2021-08-29', 6, 4),
(12, '142', '2021-08-30', 3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `people`
--

INSERT INTO `people` (`id`, `firstname`, `lastname`, `email`, `company_id`) VALUES
(1, 'John', 'Do', 'john@do.com', 1),
(2, 'Jane', 'Doe', 'jane@doe.com', 2),
(3, 'Arthur', 'Did', 'arhur@did.com', 4),
(4, 'Jack', 'Zoo', 'jack@zoo.com', 1),
(5, 'Goerges', 'Arthur', 'goerges@arthur.com', 2),
(6, 'Jake', 'Junior', 'jake@junior.com', 4),
(7, 'James', 'Senior', 'james@senior.com', 1),
(8, 'Jacky', 'Dont', 'jacky@dont.com', 3);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'client'),
(2, 'provider');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `grade`) VALUES
(1, 'rayane', 'mypass', 'rayane@gmail.com', 0),
(3, 'test', '$2y$10$GkQuH6szHLQP7fuu6wtFyeoJGIeAOidLEhZfGkkliUUYJWbwX5Rwq', 'test@gmail.com', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
