-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 16, 2020 at 12:16 AM
-- Server version: 10.2.10-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `IDNum` int(11) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`IDNum`, `LastName`, `FirstName`, `Position`) VALUES
(1, 'Ahmed', 'Syed', 'CEO'),
(2, 'Gates', 'Bill', 'CEO'),
(3, 'Jobs', 'Steve', 'CEO'),
(3, 'Ma', 'Jack', 'Boss'),
(3, 'Jones', 'Jack', 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(100) NOT NULL,
  `firstname` varchar(200) DEFAULT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `is_verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `is_verified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `is_verified`) VALUES
(1, 'tasri60', 'd41d8cd98f00b204e9800998ecf8427e', 's.tasrif60@gmail.com', 0),
(2, 'tas', 'd41d8cd98f00b204e9800998ecf8427e', 'ewrer@gmail.com', 1),
(3, 'robin', 'fa246d0262c3925617b0c72bb20eeb1d', 'hee@gmail.com', 0),
(4, 'tas60', 'b7bc2a2f5bb6d521e64c8974c143e9a0', 's.tasrif604@gmail.com', 0),
(5, 'craig', 'fcab6fc3e662e21090924a2a211920a6', 'craig@gelowitz.org', 1),
(6, 'himel', '1a1dc91c907325c69271ddf0c944bc72', 'himelcuet10@gmail.com', 1),
(7, 'tasy', 'eff5a16cbdfda636b3a77dc041be0ab4', 'tasrif.grider@gmail.com', 1),
(8, 'gelowitz', 'fcab6fc3e662e21090924a2a211920a6', 'gelowitz@gelowitz.org', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
