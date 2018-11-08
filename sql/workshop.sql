-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 08, 2018 at 08:14 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `workshop`
--

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
