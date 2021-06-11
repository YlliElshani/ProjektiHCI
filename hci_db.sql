-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 02:10 PM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` binary(66) NOT NULL,
  `ccNo` bigint(20) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `lastname`, `email`, `password`, `ccNo`, `role`) VALUES
(1, 'hysnije', 'zllanoga', 'hysnijee.zllanoga@gmail.com', 0x123456780000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 1234566, 0),
(2, '', '', '', 0x643431643863643938663030623230346539383030393938656366383432376500000000000000000000000000000000000000000000000000000000000000000000, 0, 0),
(3, '', '', '', 0x643431643863643938663030623230346539383030393938656366383432376500000000000000000000000000000000000000000000000000000000000000000000, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movieinfo`
--
ALTER TABLE `movieinfo`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
