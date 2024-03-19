-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 19, 2024 at 07:49 PM
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
-- Database: `pokedex`
--

-- --------------------------------------------------------

--
-- Table structure for table `pokemons`
--

DROP TABLE IF EXISTS `pokemons`;
CREATE TABLE IF NOT EXISTS `pokemons` (
  `poke_index` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `altura_cm` int(3) NOT NULL,
  `peso_kg` float NOT NULL,
  `geracao` int(1) NOT NULL,
  `n_pokedex` int(4) DEFAULT NULL,
  `tipo_1` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `tipo_2` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`poke_index`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pokemons`
--

INSERT INTO `pokemons` (`poke_index`, `nome`, `altura_cm`, `peso_kg`, `geracao`, `n_pokedex`, `tipo_1`, `tipo_2`) VALUES
(3, 'Bulbassaur', 70, 6.9, 1, 1, 'Grama', 'Veneno'),
(4, 'Ivyssaur', 100, 13, 1, 2, 'Grama', 'Veneno'),
(5, 'Venusaur', 200, 100, 1, 3, 'Grama', 'Veneno'),
(6, 'Charmander', 60, 8.5, 1, 4, 'Fogo', ''),
(7, 'Charmeleon', 110, 19, 1, 5, 'Fogo', ''),
(8, 'Charizard ', 170, 90.5, 1, 6, 'Fogo', 'Voador'),
(9, 'Squirtle', 50, 9, 1, 7, 'Água', ''),
(10, 'Wartortle', 100, 22.5, 1, 8, 'Água', ''),
(11, 'Blastoise', 160, 85.5, 1, 9, 'Água', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
