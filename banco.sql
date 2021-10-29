-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Set-2021 às 13:41
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetoweb`
--
CREATE DATABASE IF NOT EXISTS `projetoweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projetoweb`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `origem` varchar(50) DEFAULT NULL,
  `data_consulta` datetime DEFAULT NULL,
  `observacao` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`id`, `nome`, `telefone`, `origem`, `data_consulta`, `observacao`) VALUES
(3, 'Roberta Lima', '11913516482', 'instagram', '2021-06-01 00:00:00', 'Agendado para 14:05'),
(2, 'Jorge Silva', '11999999999', 'Instagram', '2021-06-01 00:00:00', 'teste observação'),
(4, 'Cassiano Junior', '1191657428', 'Fcaebook', '2021-06-01 00:00:00', 'Agendado para 16:05'),
(5, 'Matheus Silva', '119362014510', 'Facebook', '2021-06-02 00:00:00', 'Agendado para 10:00'),
(6, 'Maria Santos', '11914720360', 'whatsapp', '2021-06-02 00:00:00', 'Agendado para 12:00'),
(7, 'Juliana Silveira', '11951326841', 'Instagram', '2021-06-02 00:00:00', 'Agendado para 14:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
