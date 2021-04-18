-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Mar-2021 às 04:22
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u885379061_db_brazuca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ai_produto` int(5) NOT NULL,
  `idProduto` int(5) NOT NULL,
  `nomeProduto` varchar(255) NOT NULL,
  `descricaoProduto` varchar(255) DEFAULT NULL,
  `precoProduto` varchar(255) NOT NULL,
  `imagemProduto` varchar(255) NOT NULL,
  `promocao` varchar(255) NOT NULL,
  `precoPromocao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ai_produto`, `idProduto`, `nomeProduto`, `descricaoProduto`, `precoProduto`, `imagemProduto`, `promocao`, `precoPromocao`) VALUES
(1, 0, 'Vip 1', 'Vip basico', 'R$23,50', 'vip1.png', '0', 'R$2,00'),
(2, 0, 'VIP 2', 'Vip Basico\r\n', 'R$53,50', 'vip2.png', '0', 'R$5,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ai_Usuario` int(5) NOT NULL,
  `idUsuario` int(5) NOT NULL,
  `nomeUsuario` varchar(255) NOT NULL,
  `permissao` varchar(255) NOT NULL,
  `usuarioLogin` varchar(255) NOT NULL,
  `usuarioSenha` varchar(255) NOT NULL,
  `dataCadastro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ai_Usuario`, `idUsuario`, `nomeUsuario`, `permissao`, `usuarioLogin`, `usuarioSenha`) VALUES
(1, 0, '', '', 'teste', '123'),
(2, 0, '', '', 'felipe', '123'),
(3, 0, '', '2', 'Soethe', 'soethe321');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ai_produto`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ai_Usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ai_produto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ai_Usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
