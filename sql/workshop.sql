-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 08, 2018 at 09:01 AM
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
(15793, 'Skoda octavia', '2017-03-13', 0),
(15794, 'Skoda Fabia', '2016-05-10', 0),
(15796, 'Skoda superb', '2018-11-09', 0),
(15797, 'DACIA Duster', '2017-06-13', 0),
(15798, 'DACIA Sandero', '2017-07-19', 0),
(15799, 'DACIA Dokker', '2016-09-12', 0),
(15800, 'DACIA logan', '2017-02-28', 0),
(15801, 'Fiat Punto', '2017-02-15', 0),
(15802, 'Fiat 500', '2015-04-07', 0),
(15803, 'Fiat Qubo', '2011-05-10', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bien`
--
ALTER TABLE `bien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bien`
--
ALTER TABLE `bien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15804;
