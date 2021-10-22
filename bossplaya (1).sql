-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 23, 2021 at 08:12 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bossplaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `last_login` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `last_login`) VALUES
(1, 'admin', 'b1b1a261c309011239be26fba1cdfab5aed89114', 'admin@test.com', '2021-05-23'),
(5, 'denis', '$2y$10$TA5nWhSUTjWDaAP2AjaxzOITRC4vivCwDmWSIhRVDAMfXT3bV8.gO', '', '0000-00-00'),
(12, 'gregg', '$2y$10$g.IUJlgjE7l5FjLbOcugP.C51/5tacVe9EJyfdm/BzXhVyl8bh4P2', '', '0000-00-00'),
(11, 'Njambi', '$2y$10$WmAeBJ5cc9X4hGzPWCPW4.ASq4GKsjd..jnTJoO4Rl.ssvgX4Di0K', '', '0000-00-00'),
(10, 'Dustin', '$2y$10$sO3Rm/nEAY4.WMGRYf0gXu6wRePNR3Dpf5K/Wh2gpMlcfWKeYMDxi', '', '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
