-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Set-2022 às 17:51
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tarefas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_tarefas`
--

CREATE TABLE `cad_tarefas` (
  `id` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `custo` float NOT NULL,
  `data` date NOT NULL,
  `ordem` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cad_tarefas`
--

INSERT INTO `cad_tarefas` (`id`, `nome`, `custo`, `data`, `ordem`) VALUES
(1, 'Comprar equipamento para TI.', 100000, '2023-01-01', 1),
(2, 'Contratar novo estágiario. ', 1350, '2022-10-03', 2),
(3, 'Assistir senhor dos aneis.', 15, '2022-10-02', 4),
(4, 'Atualizar tarefas.', 0, '2022-09-30', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_tarefas`
--
ALTER TABLE `cad_tarefas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_tarefas`
--
ALTER TABLE `cad_tarefas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
