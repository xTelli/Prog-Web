-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/11/2023 às 16:53
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(200) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cep` int(8) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `numero` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `cep`, `senha`, `cpf`, `numero`) VALUES
(15, 'joao', 'gui.261@hotmail.com', 58043320, 'teste123', '2147483647', '2147483647'),
(16, 'maria', 'maria@gmail', 58043320, 'teste12345678', '2147483647', '2147483647'),
(17, 'guilherme', 'felipe@gmail.com', 58043320, 'senha123', '2147483647', '2147483647'),
(18, 'teste', 'gui.261@hotmail.com', 58043320, 'teste', '2147483647', '2147483647'),
(19, 'teste', 'gui.261@hotmail.com', 58043320, 'teste', '2147483647', '2147483647'),
(20, 'teste', 'gui.261@hotmail.com', 58043320, 'teste', '40612353733', '2147483647'),
(21, 'teste', 'gui.261@hotmail.com', 58043320, 'teste', '40612353733', '8399699898'),
(22, 'felipe', 'felipe@gmail.com', 58043320, '6984', '5555555', '8399699898'),
(23, 'felipe', 'felipe@gmail.com', 58043320, '6984', '5555555', '8399699898'),
(24, 'felipe', 'felipe@gmail.com', 58043320, '6984', '5555555', '8399699898'),
(25, 'felipe', 'felipe@gmail.com', 58043320, '6984', '5555555', '8399699898'),
(26, 'joao', 'felipe@gmail.com', 58043320, 'rerer', '5555555', '8399699898'),
(27, 'joao', 'felipe@gmail.com', 58043320, 'rerer', '5555555', '8399699898'),
(28, 'joao', 'felipe@gmail.com', 58043320, 'rerer', '5555555', '8399699898'),
(29, 'julia', 'eoweiw@gmail.com', 45792368, 'ttttt44567', '5555555', '8399699898'),
(30, 'teste', 'maria@gmail', 58043320, 'test12323', '40612353733', '8399699898'),
(31, 'teste', 'maria@gmail', 58043320, 'test12323', '40612353733', '8399699898'),
(32, '', '', 0, '', '', ''),
(33, 'teste', 'maria@gmail', 58043320, 'test12323', '40612353733', '8399699898'),
(34, 'teste', 'maria@gmail', 58043320, 'test12323', '40612353733', '8399699898'),
(35, 'teste', 'maria@gmail', 58043320, 'test12323', '40612353733', '8399699898'),
(36, 'teste', 'marcos@gmail', 58043320, 'hduhaspdq83721', '40612353733', '8399699898'),
(37, 'teste', 'gui.261@hotmail.com', 58043320, '3781293123', '40612353733', '8399699898');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
