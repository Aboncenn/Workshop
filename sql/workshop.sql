-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 08, 2018 at 03:29 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bien`
--

CREATE TABLE `bien` (
  `id` int(11) NOT NULL,
  `intitule` text NOT NULL,
  `date_achat` date NOT NULL,
  `id_type_bien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bien`
--

INSERT INTO `bien` (`id`, `intitule`, `date_achat`, `id_type_bien`) VALUES
(1, 'Skoda octavia', '2017-03-13', 0),
(2, 'Skoda Fabia', '2016-05-10', 0),
(3, 'Skoda superb', '2018-11-09', 0),
(15797, 'DACIA Duster', '2017-06-13', 0),
(15798, 'DACIA Sandero', '2017-07-19', 0),
(15799, 'DACIA Dokker', '2016-09-12', 0),
(15800, 'DACIA logan', '2017-02-28', 0),
(15801, 'Fiat Punto', '2017-02-15', 0),
(15802, 'Fiat 500', '2015-04-07', 0),
(15803, 'Fiat Qubo', '2011-05-10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blockchain`
--

CREATE TABLE `blockchain` (
  `id` int(11) NOT NULL,
  `Intitule_bien` varchar(30) NOT NULL,
  `Date_achat` date NOT NULL,
  `description` text NOT NULL,
  `acte_prestation` text NOT NULL,
  `nom_prestataires` varchar(20) NOT NULL,
  `Dates` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contrat`
--

CREATE TABLE `contrat` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_biens` int(11) NOT NULL,
  `id_assureur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contrat`
--

INSERT INTO `contrat` (`id`, `date`, `id_user`, `id_biens`, `id_assureur`) VALUES
(1, '2017-11-07', 1, 1, 2),
(2, '2018-11-12', 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `files_url` varchar(30) NOT NULL,
  `name` varchar(16) NOT NULL,
  `intitule` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fonction`
--

CREATE TABLE `fonction` (
  `id` int(11) NOT NULL,
  `fonction` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fonction`
--

INSERT INTO `fonction` (`id`, `fonction`) VALUES
(1, 'Client'),
(2, 'Assureur'),
(3, 'Prestataire');

-- --------------------------------------------------------

--
-- Table structure for table `incident`
--

CREATE TABLE `incident` (
  `id` int(11) NOT NULL,
  `id_bien` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_prestataire` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `acte_de_prestation` text,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incident`
--

INSERT INTO `incident` (`id`, `id_bien`, `id_user`, `id_prestataire`, `description`, `acte_de_prestation`, `id_status`) VALUES
(1, 3, 1, 3, 'MA voiture a été erafflé', 'Voiture repeint', 4),
(2, 1, 1, 3, 'bug', 'dfss', 4),
(4, 1, 1, NULL, 'lol', NULL, 1),
(5, 1, 1, NULL, 'test', NULL, 1),
(6, 1, 1, NULL, 'test', NULL, 1),
(7, 1, 1, NULL, 'La chèvre des rocheuses', NULL, 1),
(8, 1, 1, NULL, 'fzez', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `prestataire`
--

CREATE TABLE `prestataire` (
  `id` int(11) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `siret` text NOT NULL,
  `domaine` varchar(40) NOT NULL,
  `adresse` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestataire`
--

INSERT INTO `prestataire` (`id`, `nom`, `siret`, `domaine`, `adresse`) VALUES
(1, 'Union', '37863002400099', 'Assureur', ' 	UNION DES PRESTATAIRES DE SERVICES'),
(2, 'BELLICOL', ' 84064059300017', 'Carroserrie ', '23 rue charrel'),
(3, 'Garage Soleil', '80804901900017', 'Garage', '40 che Groslay, 93000 BOBIGNY'),
(4, 'LUXURY CAR AUTO', '75249029200022', 'garage', '19 r Industrie, 93000 BOBIGNY');

-- --------------------------------------------------------

--
-- Table structure for table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_prestataire` int(11) NOT NULL,
  `date` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rendez_vous`
--

INSERT INTO `rendez_vous` (`id`, `id_user`, `id_prestataire`, `date`, `Status`) VALUES
(1, 1, 1, '2018-11-05', '2'),
(2, 1, 2, '2018-11-04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `intitule_statut` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `intitule_statut`) VALUES
(1, 'En cours'),
(4, 'Accepté'),
(5, 'Cloturé');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `mot_de_passe` varchar(40) NOT NULL,
  `telephone` int(11) NOT NULL,
  `id_fonction` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `mail`, `mot_de_passe`, `telephone`, `id_fonction`) VALUES
(1, 'Patrick', 'Jean pascal', 'jeanpascal@gmail.com', 'mangedespommes1', 908070765, 1),
(2, 'Patrick', 'George', 'patrick.george@gmail.com', 'mangedespommes', 90807063, 2),
(3, 'Patrick', 'Pommes', 'lolilstant@gmail.com', 'mangedespommes', 90807063, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bien`
--
ALTER TABLE `bien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blockchain`
--
ALTER TABLE `blockchain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contrat`
--
ALTER TABLE `contrat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incident`
--
ALTER TABLE `incident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestataire`
--
ALTER TABLE `prestataire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bien`
--
ALTER TABLE `bien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15804;

--
-- AUTO_INCREMENT for table `blockchain`
--
ALTER TABLE `blockchain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contrat`
--
ALTER TABLE `contrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `incident`
--
ALTER TABLE `incident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `prestataire`
--
ALTER TABLE `prestataire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
