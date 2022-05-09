-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Maio-2022 às 17:33
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
-- Banco de dados: `clientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cpfs`
--

CREATE TABLE `cpfs` (
  `id` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cpfs`
--

INSERT INTO `cpfs` (`id`, `cpf`, `usuario_id`, `created`, `modified`) VALUES
(1, '82274878072', 1, '2022-05-08 22:37:51', NULL),
(2, '02188942019', 2, '2022-05-08 22:45:40', NULL),
(3, '419.872.410', 3, '2022-05-08 22:50:33', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id` int(11) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `numero` int(15) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `cidade` varchar(220) NOT NULL,
  `uf` varchar(200) NOT NULL,
  `cep` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id`, `rua`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `usuario_id`, `created`, `modified`) VALUES
(1, 'jardin atlantico', 82, 'COHAB DUQUE', 'SoLeopoldo', '', 93037, 1, '2022-05-08 22:37:51', NULL),
(2, 'pato', 3, 'moabita', 'SoLeopoldo', '', 93037, 2, '2022-05-08 22:45:40', NULL),
(3, 'rerre', 23, 'COHAB DUQUE', 'SoLeopoldo', '', 93037, 3, '2022-05-08 22:50:33', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `id` int(11) NOT NULL,
  `fone_pessoal` varchar(15) NOT NULL,
  `fone_contato` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `telefone`
--

INSERT INTO `telefone` (`id`, `fone_pessoal`, `fone_contato`, `email`, `whatsapp`, `usuario_id`, `created`, `modified`) VALUES
(1, '51981369633', '51933004869', 'cleberpeph@gmai', '51981369633', 1, 2147483647, NULL),
(2, '61132123132', '45412356456', 'gisa@gmail.com', '.66465412313', 2, 2147483647, NULL),
(3, '123', '454123', 'amanda@gmail.co', '5898', 3, 2147483647, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `nome_meio` varchar(220) NOT NULL,
  `sobre_nome` varchar(200) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `created` datetime NOT NULL,
  `modifed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `nome_meio`, `sobre_nome`, `rg`, `cpf`, `created`, `modifed`) VALUES
(1, 'Cleber', 'DosSantos', 'Moraes', '1085951828', '82274878072', '2022-05-08 22:37:51', NULL),
(2, 'Gislaine', 'deSouza', 'Moraes', '1067331891', '02188942019', '2022-05-08 22:45:40', NULL),
(3, 'Amanda', 'Thailine', 'Moraes', '1125248301', '419.872.410-53', '2022-05-08 22:50:33', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cpfs`
--
ALTER TABLE `cpfs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices para tabela `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cpfs`
--
ALTER TABLE `cpfs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `telefone`
--
ALTER TABLE `telefone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cpfs`
--
ALTER TABLE `cpfs`
  ADD CONSTRAINT `cpfs_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
