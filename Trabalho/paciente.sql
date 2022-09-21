-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Set-2022 às 11:31
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dentista`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `cpf` char(11) NOT NULL,
  `data_consulta` date DEFAULT NULL,
  `horario_consulta` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id`, `nome`, `sobrenome`, `cpf`, `data_consulta`, `horario_consulta`) VALUES
(1, 'Douglas', 'Dantas', '12345678910', '2022-09-15', '10:43:42'),
(2, 'Matheus', 'Costa', '12345678911', '2022-09-16', '09:43:42'),
(3, 'Carlos', 'Henrique', '12345678912', '2022-09-17', '08:43:42'),
(4, 'Sidio', 'Loiola', '12345678913', '2022-09-19', '11:43:42'),
(5, 'Alexandre', 'Magno', '12345678916', '2022-09-19', '07:42:42'),
(6, 'Fabiola', 'Fernandes', '12345672314', '2022-09-20', '04:59:42'),
(7, 'Isabela', 'Fátima', '12345678756', '2022-09-10', '22:43:59'),
(8, 'Sidio', 'Loiola', '12378678913', '2016-09-07', '18:37:30'),
(9, 'taudo  matias', 'bshjah', '000.000.000', '0000-00-00', '00:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
