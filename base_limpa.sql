-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: 10.1.2.120
-- Tempo de geração: 01/10/2017 às 12:17
-- Versão do servidor: 10.1.25-MariaDB
-- Versão do PHP: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u341749705_cei`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `boletim`
--

CREATE TABLE `boletim` (
  `id` int(11) NOT NULL,
  `dtInicio` date NOT NULL,
  `dtFim` date NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `citacao` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `livro` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(12) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `evento` varchar(255) NOT NULL,
  `cartaz` varchar(150) DEFAULT NULL,
  `slideshow` varchar(150) DEFAULT NULL,
  `data` date NOT NULL,
  `descricao` text,
  `dia` varchar(150) NOT NULL,
  `horarios` text,
  `programacao` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `imgName` varchar(20) NOT NULL,
  `idType` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `programacao`
--

CREATE TABLE `programacao` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `tema` varchar(150) CHARACTER SET utf8 NOT NULL,
  `subsidio` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `expositor` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `idImage` int(11) NOT NULL,
  `evento` int(11) DEFAULT NULL,
  `dtInicio` date NOT NULL,
  `dtFinal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(1, 'jpg'),
(2, 'png'),
(3, 'gif'),
(4, 'JPG');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `Senha` char(50) NOT NULL,
  `admin` char(1) NOT NULL DEFAULT 'N',
  `Nome` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Pergunta` varchar(200) NOT NULL,
  `Resposta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--
-- Senha: abc123

INSERT INTO `usuarios` (`id`, `Login`, `Senha`, `admin`, `Nome`, `Email`, `Pergunta`, `Resposta`) VALUES
(1, 'admin', 'e99a18c428cb38d5f260853678922e03', 'S', 'Administrador', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `dtVideo` date NOT NULL,
  `url` varchar(255) NOT NULL,
  `expositor` varchar(200) DEFAULT NULL,
  `descricao` text,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `boletim`
--
ALTER TABLE `boletim`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `images`
--
ALTER TABLE `images`
  ADD UNIQUE KEY `imgName` (`imgName`),
  ADD KEY `id` (`id`);

--
-- Índices de tabela `programacao`
--
ALTER TABLE `programacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `boletim`
--
ALTER TABLE `boletim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de tabela `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de tabela `programacao`
--
ALTER TABLE `programacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=750;
--
-- AUTO_INCREMENT de tabela `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de tabela `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
