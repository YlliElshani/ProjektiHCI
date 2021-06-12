-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 08:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `favId` int(11) NOT NULL,
  `movie` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movieinfo`
--

CREATE TABLE `movieinfo` (
  `ID` int(11) NOT NULL,
  `Emri` varchar(30) NOT NULL,
  `Cmimi` varchar(10) NOT NULL,
  `Pershkrimi` varchar(200) NOT NULL,
  `fotosource` varchar(200) NOT NULL,
  `fotosource2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movieinfo`
--

INSERT INTO `movieinfo` (`ID`, `Emri`, `Cmimi`, `Pershkrimi`, `fotosource`, `fotosource2`) VALUES
(1, 'Wrath of Man', '3.99$', 'Adapted from the 2004 French film \"Le Convoyeur\" (aka \"Cash Truck\"), and borrowing the basic outline of the story, \"Wrath of Man\" is a time-shifting neo-noir crime thriller, filled with tough, sometim', '../media/detailsphoto1.jpg', '../media/detailsphoto2.jpg'),
(2, 'Before we Go', '5.00$', 'Two strangers stuck in Manhattan for the night grow into each other\'s most trusted confidants when an evening of unexpected adventure forces them to confront their fears and take control of their live', '../media/detailsphoto3.jpg\r\n', '../media/detailsphoto4.jpg'),
(3, 'Interstellar ', '2.10$', 'Interstellar is a 2014 British-American epic science fiction film co-written, directed and produced by Christopher Nolan. ... Set in a dystopian future where humanity is struggling to survive, the fil', '../media/detailsphoto5.jpg', '../media/detailsphoto6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticketid` int(11) NOT NULL,
  `movie` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ccNo` bigint(20) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `lastname`, `email`, `password`, `ccNo`, `role`) VALUES
(13, 'Hysnije ', 'Zllanoga', 'hysnijee.zllanoga@gmail.com', '$2y$10$nFFyogSJiP3MCLSB0Se1UuXufuqka5u7iXN2GfkqVMu4B1krmbYOK', 2345675432, 0),
(16, 'Endrit', 'Makolli', 'endrit.makolli@gmail.com', '$2y$10$jE9s2Ny5SDjU0.tFac2kt.vYjGc3/i3AsI6w9vHBnvDe1Hba28V/y', 1234343535, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`favId`),
  ADD KEY `movie` (`movie`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `movieinfo`
--
ALTER TABLE `movieinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticketid`),
  ADD KEY `movie` (`movie`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`movie`) REFERENCES `movieinfo` (`ID`),
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`user`) REFERENCES `user` (`userid`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`movie`) REFERENCES `movieinfo` (`ID`),
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`user`) REFERENCES `user` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
