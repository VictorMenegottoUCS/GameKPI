-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2022 at 10:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameficacao`
--

-- --------------------------------------------------------

--
-- Table structure for table `tcolaborador`
--

CREATE TABLE `tcolaborador` (
  `codigo` int(3) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `num_squad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tkpi`
--

CREATE TABLE `tkpi` (
  `codigo` int(3) NOT NULL,
  `descricao` varchar(120) NOT NULL,
  `pontos` int(3) NOT NULL,
  `meta` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tpontuacao`
--

CREATE TABLE `tpontuacao` (
  `codigo` int(3) NOT NULL,
  `num_squad` int(3) NOT NULL,
  `codigo_kpi` int(3) NOT NULL,
  `pontos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tsquad`
--

CREATE TABLE `tsquad` (
  `numero` int(3) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `sprint` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tcolaborador`
--
ALTER TABLE `tcolaborador`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `tkpi`
--
ALTER TABLE `tkpi`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `tpontuacao`
--
ALTER TABLE `tpontuacao`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `tsquad`
--
ALTER TABLE `tsquad`
  ADD PRIMARY KEY (`numero`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tpontuacao`
--
ALTER TABLE `tpontuacao`
  MODIFY `codigo` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
