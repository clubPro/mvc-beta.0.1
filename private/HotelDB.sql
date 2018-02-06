-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2018 at 08:07 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HotelDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `ali`
--

CREATE TABLE `ali` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Chambre`
--

CREATE TABLE `Chambre` (
  `IDChambre` int(11) NOT NULL,
  `TypeChambre` int(11) NOT NULL,
  `Etat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Chambre`
--

INSERT INTO `Chambre` (`IDChambre`, `TypeChambre`, `Etat`) VALUES
(1, 2, 0),
(2, 3, 0),
(3, 4, 0),
(4, 2, 0),
(5, 2, 0),
(6, 2, 0),
(7, 3, 0),
(8, 4, 0),
(9, 4, 0),
(10, 33, 1),
(11, 33, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Client`
--

CREATE TABLE `Client` (
  `IDclient` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Prenom` text NOT NULL,
  `date` date NOT NULL,
  `Adress` text NOT NULL,
  `Telphone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Client`
--

INSERT INTO `Client` (`IDclient`, `Nome`, `Prenom`, `date`, `Adress`, `Telphone`) VALUES
(1, 'ali', 'kaka', '2017-11-15', 'sssssssssssssssssss', '54'),
(32, 'elhabib', 'kahla', '1997-02-15', 'city 5', '0655959'),
(33, 'samira', 'samira', '1997-07-23', 'city 5', '5454'),
(34, 'rawink', 'kaka', '1995-02-05', 'raba7', '032646'),
(35, 'rawink', 'kaka', '1995-02-05', 'raba7', '032646'),
(36, 'rawink', 'kaka', '1995-02-05', 'raba7', '032646'),
(37, 'hhh', 'jj', '1997-02-02', 'jjkj', '5545'),
(38, 'bj', 'jb j', '1997-02-13', 'kjbj', '2121'),
(39, 'kj', 'hyy', '1995-10-19', 'gfhy', '51155'),
(40, 'mimi', 'bissa', '1999-04-05', 'lolo', '02154'),
(41, 'ohhj', 'jkgkg', '2017-09-09', 'uiuyo', '06547'),
(42, 'jh', 'li', '1009-09-09', 'klhhlk', '032556'),
(43, 'yutyu', 'iuti', '1995-09-09', 'uui', '03214'),
(44, 'uyi', 'ioyo', '1005-05-05', 'uiti', '03248'),
(45, 'dghd', 'gfhfgd', '2000-09-09', 'kjgkj', '0325'),
(46, 'khk', 'klj', '2000-09-09', 'kikh', '23435'),
(47, 'sss', 'hkj', '1998-02-02', 'ftft', '0215663'),
(48, 'dfhh', 'ioyiu', '2017-12-14', 'wveV', '023557'),
(49, 'sonia', 'hfb', '2017-12-05', 'tttg', '0665');

-- --------------------------------------------------------

--
-- Table structure for table `Client_Payer`
--

CREATE TABLE `Client_Payer` (
  `IDclient` int(11) NOT NULL,
  `numCarte` int(11) NOT NULL,
  `Payer_Prix` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `MembreFamille`
--

CREATE TABLE `MembreFamille` (
  `IDMembreFamille` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Reservation`
--

CREATE TABLE `Reservation` (
  `IDReservation` int(11) NOT NULL,
  `IDclient` int(11) NOT NULL,
  `DateRES` date NOT NULL,
  `DateArrivE` date NOT NULL,
  `DateDépart` date NOT NULL,
  `Etat` tinyint(1) NOT NULL,
  `Prix` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Reservation`
--

INSERT INTO `Reservation` (`IDReservation`, `IDclient`, `DateRES`, `DateArrivE`, `DateDépart`, `Etat`, `Prix`) VALUES
(1, 1, '2017-11-21', '2017-11-22', '2017-11-23', 1, '2121'),
(2, 32, '1997-02-02', '1997-02-02', '1997-02-02', 0, '21'),
(3, 33, '1997-02-14', '1997-02-14', '1997-02-14', 12, '222'),
(4, 33, '1997-02-14', '1997-02-14', '1997-02-14', 12, '222');

-- --------------------------------------------------------

--
-- Table structure for table `ReservationChambre`
--

CREATE TABLE `ReservationChambre` (
  `IDReservation` int(11) NOT NULL,
  `IDChambre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ReservationChambre`
--

INSERT INTO `ReservationChambre` (`IDReservation`, `IDChambre`) VALUES
(1, 2),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Reservation_Mem_Famille`
--

CREATE TABLE `Reservation_Mem_Famille` (
  `IDMembreFamille` int(11) NOT NULL,
  `IDReservation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Services`
--

CREATE TABLE `Services` (
  `IDServices` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Prix` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Services`
--

INSERT INTO `Services` (`IDServices`, `Nom`, `Prix`) VALUES
(1, 'Manger', '20.00'),
(2, 'Jouer', '50.00');

-- --------------------------------------------------------

--
-- Table structure for table `Services_Reservation`
--

CREATE TABLE `Services_Reservation` (
  `IDReservation` int(11) NOT NULL,
  `IDServices` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `TypeChambre`
--

CREATE TABLE `TypeChambre` (
  `IDTypeChambre` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Prix` decimal(3,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TypeChambre`
--

INSERT INTO `TypeChambre` (`IDTypeChambre`, `Type`, `Prix`) VALUES
(2, 1, '200'),
(3, 2, '300'),
(4, 3, '350');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ali`
--
ALTER TABLE `ali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Chambre`
--
ALTER TABLE `Chambre`
  ADD PRIMARY KEY (`IDChambre`),
  ADD KEY `IDTypeChambre` (`TypeChambre`);

--
-- Indexes for table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`IDclient`);

--
-- Indexes for table `Client_Payer`
--
ALTER TABLE `Client_Payer`
  ADD PRIMARY KEY (`IDclient`);

--
-- Indexes for table `MembreFamille`
--
ALTER TABLE `MembreFamille`
  ADD PRIMARY KEY (`IDMembreFamille`);

--
-- Indexes for table `Reservation`
--
ALTER TABLE `Reservation`
  ADD PRIMARY KEY (`IDReservation`),
  ADD KEY `IDclient` (`IDclient`);

--
-- Indexes for table `ReservationChambre`
--
ALTER TABLE `ReservationChambre`
  ADD KEY `IDChambre` (`IDChambre`),
  ADD KEY `IDReservation` (`IDReservation`);

--
-- Indexes for table `Reservation_Mem_Famille`
--
ALTER TABLE `Reservation_Mem_Famille`
  ADD PRIMARY KEY (`IDMembreFamille`,`IDReservation`),
  ADD KEY `IDclient` (`IDReservation`);

--
-- Indexes for table `Services`
--
ALTER TABLE `Services`
  ADD PRIMARY KEY (`IDServices`);

--
-- Indexes for table `Services_Reservation`
--
ALTER TABLE `Services_Reservation`
  ADD KEY `IDReservation` (`IDReservation`),
  ADD KEY `IDServices` (`IDServices`);

--
-- Indexes for table `TypeChambre`
--
ALTER TABLE `TypeChambre`
  ADD PRIMARY KEY (`IDTypeChambre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Chambre`
--
ALTER TABLE `Chambre`
  MODIFY `IDChambre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `Client`
--
ALTER TABLE `Client`
  MODIFY `IDclient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `Client_Payer`
--
ALTER TABLE `Client_Payer`
  MODIFY `IDclient` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `MembreFamille`
--
ALTER TABLE `MembreFamille`
  MODIFY `IDMembreFamille` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Reservation`
--
ALTER TABLE `Reservation`
  MODIFY `IDReservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Services`
--
ALTER TABLE `Services`
  MODIFY `IDServices` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `TypeChambre`
--
ALTER TABLE `TypeChambre`
  MODIFY `IDTypeChambre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Client_Payer`
--
ALTER TABLE `Client_Payer`
  ADD CONSTRAINT `Client_Payer_ibfk_1` FOREIGN KEY (`IDclient`) REFERENCES `Client` (`IDclient`);

--
-- Constraints for table `Reservation`
--
ALTER TABLE `Reservation`
  ADD CONSTRAINT `Reservation_ibfk_1` FOREIGN KEY (`IDclient`) REFERENCES `Client` (`IDclient`);

--
-- Constraints for table `ReservationChambre`
--
ALTER TABLE `ReservationChambre`
  ADD CONSTRAINT `ReservationChambre_ibfk_1` FOREIGN KEY (`IDChambre`) REFERENCES `Chambre` (`IDChambre`),
  ADD CONSTRAINT `ReservationChambre_ibfk_2` FOREIGN KEY (`IDReservation`) REFERENCES `Reservation` (`IDReservation`);

--
-- Constraints for table `Reservation_Mem_Famille`
--
ALTER TABLE `Reservation_Mem_Famille`
  ADD CONSTRAINT `Client_Mem_Famille_ibfk_2` FOREIGN KEY (`IDMembreFamille`) REFERENCES `MembreFamille` (`IDMembreFamille`),
  ADD CONSTRAINT `Reservation_Mem_Famille_ibfk_1` FOREIGN KEY (`IDReservation`) REFERENCES `Reservation` (`IDReservation`);

--
-- Constraints for table `Services_Reservation`
--
ALTER TABLE `Services_Reservation`
  ADD CONSTRAINT `Services_Reservation_ibfk_1` FOREIGN KEY (`IDReservation`) REFERENCES `Reservation` (`IDReservation`),
  ADD CONSTRAINT `Services_Reservation_ibfk_2` FOREIGN KEY (`IDServices`) REFERENCES `Services` (`IDServices`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
