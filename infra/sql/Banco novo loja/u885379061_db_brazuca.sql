-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jun-2021 às 19:36
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

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
-- Estrutura da tabela `boosters`
--

CREATE TABLE `boosters` (
  `id_boosters` int(11) NOT NULL,
  `nome_boosters` varchar(255) NOT NULL,
  `conteudo_boosters` varchar(255) NOT NULL,
  `preco_boosters` decimal(2,0) NOT NULL,
  `img_boosters` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixas`
--

CREATE TABLE `caixas` (
  `id_caixas` int(11) NOT NULL,
  `nome_caixas` varchar(255) NOT NULL,
  `conteudo_caixas` varchar(255) NOT NULL,
  `preco_caixas` decimal(2,0) NOT NULL,
  `img_caixas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cosmeticos`
--

CREATE TABLE `cosmeticos` (
  `id_cosmeticos` int(11) NOT NULL,
  `nome_cosmesticos` varchar(120) DEFAULT NULL,
  `conteudo_cosmeticos` varchar(240) DEFAULT NULL,
  `preco_cosmeticos` decimal(2,0) DEFAULT NULL,
  `img_cosmeticos` varchar(240) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `moedas`
--

CREATE TABLE `moedas` (
  `id_moedas` int(11) NOT NULL,
  `nome_moedas` varchar(255) NOT NULL,
  `conteudo_moedas` varchar(255) NOT NULL,
  `preco_moedas` decimal(2,0) NOT NULL,
  `img_moedas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiros`
--

CREATE TABLE `parceiros` (
  `id_parceiros` int(11) NOT NULL,
  `nome_parceiros` varchar(255) NOT NULL,
  `conteudo_parceiros` varchar(255) NOT NULL,
  `preco_parceiros` decimal(2,0) NOT NULL,
  `img_parceiros` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(5, 0, 'JJJJ', 'AAAA', '15.00', '31a8e9ec1c55b3059e8156f4b8711ae9..png', '', ''),
(6, 0, 'miquelute', 'aaaaa', '12.00', 'e1646d711928e6d6c5c7147e2f4e77fb..png', '', ''),
(7, 0, 'Vip Teste', 'Esse é um vip com acesso total', '10.00', 'padrao.png', '', ''),
(8, 0, 'Vip 2', 'Vip 2', '16.00', 'padrao.png', '', ''),
(9, 0, 'Vip 4', 'Hoje', '34.00', '12cd83ad01ada3b2e2e1432f6a421950..jpg', '', '');

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

INSERT INTO `usuarios` (`ai_Usuario`, `idUsuario`, `nomeUsuario`, `permissao`, `usuarioLogin`, `usuarioSenha`, `dataCadastro`) VALUES
(1, 0, '', '', 'teste', '$2y$08$JJGF5lgxfOYNq.j6Ozw7LuKLWZbSegprVGbJk01i3/kWSeUxU1vOy', '18 de Abril de 2021 / 23:37'),
(2, 0, 'admin', '', 'felipe', '123$2y$08$JJGF5lgxfOYNq.j6Ozw7LuKLWZbSegprVGbJk01i3/kWSeUxU1vOy', '18 de Abril de 2021 / 23:37'),
(4, 0, '', '', 'joao', '$2y$08$JJGF5lgxfOYNq.j6Ozw7LuKLWZbSegprVGbJk01i3/kWSeUxU1vOy', '18 de Abril de 2021 / 23:37'),
(5, 0, 'Jocazera', 'Usuario', 'joca', '$2y$08$JJGF5lgxfOYNq.j6Ozw7LuKLWZbSegprVGbJk01i3/kWSeUxU1vOy', '18 de Abril de 2021 / 23:37'),
(6, 0, 'Soethe', 'Administrador', 'soethe', '$2y$08$zs1zamYtHoeR5bQ8QLyqSOvdSwUHi5oK.2md/Ak5TUGHIPZNt/jei', '18 de Abril de 2021 / 23:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vips`
--

CREATE TABLE `vips` (
  `id_vips` int(11) NOT NULL,
  `nome_vips` varchar(120) DEFAULT NULL,
  `conteudo_vips` varchar(240) DEFAULT NULL,
  `preco_vips` decimal(2,0) DEFAULT NULL,
  `img_vips` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `boosters`
--
ALTER TABLE `boosters`
  ADD PRIMARY KEY (`id_boosters`);

--
-- Índices para tabela `caixas`
--
ALTER TABLE `caixas`
  ADD PRIMARY KEY (`id_caixas`);

--
-- Índices para tabela `cosmeticos`
--
ALTER TABLE `cosmeticos`
  ADD PRIMARY KEY (`id_cosmeticos`);

--
-- Índices para tabela `moedas`
--
ALTER TABLE `moedas`
  ADD PRIMARY KEY (`id_moedas`);

--
-- Índices para tabela `parceiros`
--
ALTER TABLE `parceiros`
  ADD PRIMARY KEY (`id_parceiros`);

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
-- Índices para tabela `vips`
--
ALTER TABLE `vips`
  ADD PRIMARY KEY (`id_vips`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `boosters`
--
ALTER TABLE `boosters`
  MODIFY `id_boosters` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `caixas`
--
ALTER TABLE `caixas`
  MODIFY `id_caixas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cosmeticos`
--
ALTER TABLE `cosmeticos`
  MODIFY `id_cosmeticos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `moedas`
--
ALTER TABLE `moedas`
  MODIFY `id_moedas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `parceiros`
--
ALTER TABLE `parceiros`
  MODIFY `id_parceiros` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ai_produto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ai_Usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `vips`
--
ALTER TABLE `vips`
  MODIFY `id_vips` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
