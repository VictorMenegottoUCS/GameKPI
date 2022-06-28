-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jun-2022 às 20:58
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
-- Banco de dados: `gameficacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tcolaborador`
--

CREATE TABLE `tcolaborador` (
  `codigo` int(3) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `num_squad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tkpi`
--

CREATE TABLE `tkpi` (
  `codigo` int(3) NOT NULL,
  `descricao` varchar(120) NOT NULL,
  `pontos` int(3) NOT NULL,
  `meta` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tsquad`
--

CREATE TABLE `tsquad` (
  `numero` int(3) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `sprint` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tcolaborador`
--
ALTER TABLE `tcolaborador`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `tkpi`
--
ALTER TABLE `tkpi`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `tsquad`
--
ALTER TABLE `tsquad`
  ADD PRIMARY KEY (`numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
