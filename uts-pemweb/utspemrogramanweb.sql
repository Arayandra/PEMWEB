-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 07:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utspemrogramanweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` smallint(3) NOT NULL,
  `namapanjang` varchar(50) NOT NULL,
  `tentangsaya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabel About';

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `namapanjang`, `tentangsaya`) VALUES
(1, 'Advani Rayandra Kahfi', 'I am a 5th semester student from the Informatics Study Program at Pembangunan Jaya University, I am doing a mid-semester exam project by creating an HTML and PHP based website.');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` smallint(3) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabel Article';

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `kategori`, `judul`, `isi`) VALUES
(1, 'Technology', 'The Newest Technology On This Year', 'Every year, the world of technology continues to develop rapidly, bringing the latest innovations that change the way we live, work and interact. This year is no different. From increasingly sophisticated artificial intelligence to breakthroughs in healthcare and quantum computing, the latest technologies carry incredible potential that will profoundly impact our modern lives.'),
(2, 'Summer', 'The Golden Days of Summer', 'Summer is a time when the sun seems to never tire of shining, providing warmth that permeates every corner of the earth. This is the time when the days are long, the skies are endlessly bright, and all outdoor activities are a moment to look forward to. It\'s no wonder that many call it \"The Golden Days of Summer\"—days full of light and joy that never seem to end.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `judul` varchar(150) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `judul`, `pesan`, `tanggal`) VALUES
(1, 'Advanii', 'advanirayandrak@gmail.com', 'gatauu', 'gg banget', '2024-10-28 13:39:31'),
(2, 'dapaa', 'dapa@gmail.com', 'kata dapa', 'asli bagus banget', '2024-10-28 14:49:04'),
(3, 'dapaa', 'dapa@gmail.com', 'dapa says', 'this is great!', '2024-10-28 14:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(3) NOT NULL,
  `namapanjang` varchar(50) NOT NULL,
  `karier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabel Home';

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `namapanjang`, `karier`) VALUES
(1, 'Advani Rayandra Kahfi', 'This is my first portfolio');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` smallint(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabel Project';

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `judul`, `isi`) VALUES
(1, 'My First Project in 2023', 'My first project in 2023 is the development of an inventory management system that includes item data input features as well as item list presentation, which is designed to make it easier to track stock and manage inventory efficiently.'),
(2, 'My Second Project in 2024', 'My second project in 2024 is the development of a cashier application for bookstores which is designed to simplify transaction processes, stock management and real-time sales reports, thereby increasing store operational efficiency.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
