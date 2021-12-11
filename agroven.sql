-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3312
-- Tempo de geração: 30-Nov-2021 às 16:40
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

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
-- Estrutura da tabela `produto`
--
use agroven;

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
(3, 'Uva', 'Cachos de uva rubi', '10,00', 'muda_de_uva_red_globe_com_90cm_305_1_20201205190707.jpg'),
(5, 'Milho', 'Amarelo', '5,20', 'diadomilho.jpg'),
(6, 'Abacaxi', 'Abacaxi direto do pé', '6,60', 'abacaxi-1513012505452_v2_450x337.jpg'),
(9, 'Morango', 'Morango é considerado, na linguagem vulgar, como o fruto vermelho do morangueiro, da família das rosáceas.', '6,50', 'download.jpg'),
(10, 'Banana', 'A banana é uma fruta comestível alongada - botanicamente uma baga - produzida por vários tipos de grandes plantas com flores herbáceas do gênero Musa. ', '3,50', 'banana-cachos.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores`
--

CREATE TABLE `vendedores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendedores`
--

INSERT INTO `vendedores` (`id`, `nome`, `email`, `senha`) VALUES
(10, 'Gustavo Gomez', 'ggomez@gmail.com', '123456'),
(11, 'Chocolate Ruim', 'chocolateruim@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `finalizar_compra`(
  `id` int(10) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `pont_ref` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendedores`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--
ALTER TABLE `finalizar_compra`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `finalizar_compra`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
