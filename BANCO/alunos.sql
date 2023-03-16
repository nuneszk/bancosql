-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Mar-2023 às 13:38
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `wendell`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `ID` int(11) DEFAULT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `Sobrenome` varchar(255) DEFAULT NULL,
  `Turma` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`ID`, `Nome`, `Sobrenome`, `Turma`) VALUES
(1, 'Wendell', 'Nunes', '3ºB'),
(2, 'gabriel', 'martins', '3ºB'),
(NULL, 'wendell', 'nunes', '3ºB');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
