-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 26, 2020 at 11:30 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `idadmin` int(4) NOT NULL,
  `nomadmin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`idadmin`, `nomadmin`, `username`, `password`) VALUES
(0, 'abdelmoumen', 'admin1', 'pass1'),
(1, 'amine', 'admin2', 'pass2'),
(2, 'halima', 'admin3', 'pass3'),
(3, 'samah', 'admin4', 'pass4');

-- --------------------------------------------------------

--
-- Table structure for table `dict`
--

CREATE TABLE `dict` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `syn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dict`
--

INSERT INTO `dict` (`id`, `nom`, `syn`) VALUES
(1, 'x', 'x_syn'),
(2, 'x', 'x_syn'),
(3, 'x', 'x_syn'),
(1, 'x', 'x_syn');

-- --------------------------------------------------------

--
-- Table structure for table `dict2`
--

CREATE TABLE `dict2` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `syn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dict2`
--

INSERT INTO `dict2` (`id`, `nom`, `syn`) VALUES
(1, 'x', 'xsyn'),
(1, 'x', 'xsyn'),
(1, 'x', 'xsyn'),
(1, 'x', 'xsyn'),
(2, 'y', 'ysyn');

-- --------------------------------------------------------

--
-- Table structure for table `dict3`
--

CREATE TABLE `dict3` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `syn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dict3`
--

INSERT INTO `dict3` (`id`, `nom`, `syn`) VALUES
(1, 'x', 'xsyn'),
(2, 'y', 'ysyn'),
(3, 'z', 'zsyn'),
(4, 'w', 'wsyn'),
(5, 'v', 'vsyn');

-- --------------------------------------------------------

--
-- Table structure for table `donneurs`
--

CREATE TABLE `donneurs` (
  `iddonneur` int(4) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `daten` date NOT NULL,
  `lieun` varchar(20) NOT NULL,
  `tlphfixe` varchar(20) NOT NULL,
  `tlph` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `nwilaya` int(3) NOT NULL,
  `addr` varchar(20) NOT NULL,
  `groupage` varchar(4) NOT NULL,
  `existance` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donneurs`
--

INSERT INTO `donneurs` (`iddonneur`, `nom`, `prenom`, `profession`, `daten`, `lieun`, `tlphfixe`, `tlph`, `email`, `ville`, `nwilaya`, `addr`, `groupage`, `existance`, `img`) VALUES
(5, 'drici', 'abdelmoumen', 'student', '1999-01-19', 'tlmcn', '065484544', '0254654265', 'abdelmoumendrici@gmail.com', 'gombitta', 31, 'e1 ff', 'O+', 'sba', 'uploads/image5.jpeg'),
(7, 'samira', 'hamidan', 'commercial', '1882-02-03', 'france', '01244858415', '0515499797', 'hamidanmknk@jndf', 'el biar', 16, 'jelfa', 'AB+', 'borj boureridj', 'uploads/image2.jpeg'),
(8, 'sliman', 'kadda', 'designer', '1664-12-09', 'spain', '05505151', '0516514561', 'slimanniijh@jhb', 'akha', 1, '56FGG', 'A+', 'oran', 'uploads/image5.jpeg'),
(9, 'mehdi', 'bendira', 'adminstrateur', '1478-12-31', 'sba', '0515156454', '0251665', 'slimanniijh@jhb', 'ghiaa', 1, '5LLL', 'B+', 'alger', 'uploads/image3.jpeg'),
(10, 'jamal', 'hamza', 'mechanicien', '1777-01-23', 'jijel', '02518548795', '02455454', 'hamzahamza@ggg', 'el kasba', 16, 'bejaij 7H', 'A+', 'ain benian', 'uploads/image4.jpeg'),
(15, 'jamal', 'jilali', 'chauffeur', '9975-04-05', 'mascara', '02154155', '0251515', 'jilali@gmail.com', 'filo', 17, 'sid jilali', 'B+', 'mascara', 'uploads/image5.jpeg'),
(16, 'jadalii karim', 'salimo', 'professor decdfcd', '1689-01-15', 'oran sedidkia', '025151515545', '0415318455454', 'jadal_sedikia@gmail', 'orannnnn', 19, 'sedikia', 'A+', 'algerrrrr', 'uploads/image2.jpeg'),
(17, 'hmidan', 'salim', 'medecin', '2020-01-23', 'djelfa', '021515151', '021549445', 'benhmidan', 'dkilla', 58, 'E111', 'AB-', 'oran', 'uploads/image1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `code_e` int(11) NOT NULL,
  `code_n` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`code_e`, `code_n`, `note`) VALUES
(1, 1, 'sdfjsfad da dsnkl sjd df'),
(1, 1, 'sdfjsfad da dsnkl sjd df'),
(1, 1, 'sdfjsfad da dsnkl sjd df');

-- --------------------------------------------------------

--
-- Table structure for table `note2`
--

CREATE TABLE `note2` (
  `code_e` int(11) NOT NULL,
  `code_n` int(11) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note3`
--

CREATE TABLE `note3` (
  `code_e` int(11) NOT NULL,
  `code_n` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note3`
--

INSERT INTO `note3` (`code_e`, `code_n`, `note`) VALUES
(1, 0, 'dzfvbsdzfvbsdzfbv ds f '),
(2, 1, 'dzfvbsdzfvbsdzfbv ds f etud 2'),
(3, 2, 'dzfvbsdzfvbsdzfdfg sdbv ds f etud 3'),
(4, 3, 'dzfdsfg sdfgsdf dgvbsdzfvbsdzfbv ds f  etud 4 ');

-- --------------------------------------------------------

--
-- Table structure for table `note4`
--

CREATE TABLE `note4` (
  `code_e` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note4`
--

INSERT INTO `note4` (`code_e`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(1),
(1),
(1),
(1),
(1),
(2),
(2),
(2),
(2),
(2),
(3),
(3),
(3),
(3),
(3),
(3),
(4),
(4),
(4),
(4),
(4),
(4),
(5),
(5),
(5),
(5),
(5),
(5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `donneurs`
--
ALTER TABLE `donneurs`
  ADD PRIMARY KEY (`iddonneur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donneurs`
--
ALTER TABLE `donneurs`
  MODIFY `iddonneur` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
