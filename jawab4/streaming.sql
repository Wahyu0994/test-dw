-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 02:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `streaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(3, 'WAHYU PRASETYO BY SORAYA FILM'),
(4, 'BEJO BY DISNEY FILM'),
(5, 'ALI BABA BY RAFI FILM'),
(6, 'DINA OKTA BY CINEMA FILM'),
(7, 'AGUNG PRAMUJA BY SORAYA FILM'),
(8, 'INDAH LAILA BY DISNEY FILM'),
(9, 'ADI PAMUNGKAS BY RAFI FILM'),
(10, 'ANDIKA BY INTERCINE FILM');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `attache` varchar(100) NOT NULL,
  `thumbnail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `category`, `attache`, `thumbnail`) VALUES
(6, 'PAMIT', 'HORROR', 'RCTI', 'pamit.mp4'),
(7, 'SETAN BUDEK', 'HORROR', 'SCTV', 'setan budek.mp4'),
(8, 'DUKUN NGIBUL', 'COMEDY', 'GTV', 'dukun ngibul.mp4'),
(9, 'JOKER', 'HORROR,ACTION', 'TRANS TV', 'joker.mp4'),
(10, 'MAAF', 'ROMANTIS', 'INDOSIAR', 'maaf.mp4'),
(11, 'NASEHAT', 'MOTIVATION', 'GLOBAL TV', 'nasehat.mp4'),
(12, 'PREMAN', 'ACTION', 'TRANS 7', 'preman.mp4'),
(13, 'SANTAI', 'COMEDY', 'ANTV', 'santai.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
