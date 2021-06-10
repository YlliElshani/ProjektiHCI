-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 10:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hci`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movieinfo`
--
ALTER TABLE `movieinfo`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
