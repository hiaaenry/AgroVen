-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3312
-- Tempo de geração: 08-Dez-2021 às 15:46
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
-- Banco de dados: `agroven`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista_de_desejos`
--

CREATE TABLE `lista_de_desejos` (
  `id_lista_desejos` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `lista_de_desejos`
--

INSERT INTO `lista_de_desejos` (`id_lista_desejos`, `id_produto`) VALUES
(9, 5),
(10, 6),
(11, 6),
(12, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `descricao` varchar(220) NOT NULL,
  `preco` varchar(220) NOT NULL,
  `imagem` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `descricao`, `preco`, `imagem`) VALUES
(5, 'Milho', 'Amarelo', '5,20', 'diadomilho.jpg'),
(10, 'Banana', 'A banana é uma fruta comestível alongada - botanicamente uma baga - produzida por vários tipos de grandes plantas com flores herbáceas do gênero Musa. ', '3,50', 'banana-cachos.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(100) NOT NULL,
  `email` varchar(240) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `senha`, `id`) VALUES
('', 'mizael.jxjunior@aluno.educacao.pe.gov.br', '$2y$10$8pp34Ky0OQ9be', 1),
('alexandre', 'teste123@gmail.com', '12345', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `lista_de_desejos`
--
ALTER TABLE `lista_de_desejos`
  ADD PRIMARY KEY (`id_lista_desejos`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `lista_de_desejos`
--
ALTER TABLE `lista_de_desejos`
  MODIFY `id_lista_desejos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
