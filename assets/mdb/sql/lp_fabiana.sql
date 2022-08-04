-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Out-2019 às 17:28
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lp_fabiana`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'chocolate'),
(2, 'sorvete'),
(3, 'café'),
(4, 'doces');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `texto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `texto`) VALUES
(6, 'Zero', 0x446f6365732065787472656d616d656e746520676f73746f736f7321),
(7, 'Shin', 0x436f6d2063657274657a6120766f6c7461726569206d6169732076657a657321),
(8, 'Lúpus', 0x4ec3a36f206669636f207361746973666569746f206170656e617320636f6d20756d612078c3ad636172612064652063686f636f6c617465);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `categoria` int(11) NOT NULL,
  `texto` blob NOT NULL,
  `num_aleatorio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `categoria`, `texto`, `num_aleatorio`) VALUES
(20, 'Bolo de Chocolate', 4, 0x556d20626f6c6f2064652063686f636f6c617465206465636f7261646f, 8366),
(21, 'Moccaccino', 3, 0x556d20636166c3a920636f6d2063686f636f6c6174652065206368616e74696c6c79, 1258),
(22, 'Sorvete de Morango', 2, 0x556d20736f7276657465206372656d6f736f206465204d6f72616e676f20636f6d20667275746173, 9358),
(23, 'Chocolate gelado', 1, 0x43686f636f6c6174652067656c61646f20636f6d206368616e74696c69206520636572656a61, 3984),
(24, 'Chocolate quente', 1, 0x436cc3a1737369636f2063686f636f6c617465207175656e7465206372656d6f736f, 6427),
(25, 'Mochi de morango', 4, 0x4d6f636869206465206d6f72616e676f20656d20666f726d6120646520636f656c686f, 4210),
(26, 'Doces variados', 4, 0x4469766572736f7320626f6c696e686f732064652076c3a172696f73207361626f726573, 3192),
(27, 'Bolo de morango', 4, 0x436cc3a1737369636f20626f6c6f206465206d6f72616e676f, 9634),
(28, 'Pudim', 4, 0x556d2064656c6963696f736f20707564696d20656d20666f726d61746f20646520636f7261c3a7c3a36f, 1869),
(29, 'Sorvete de Chocolate', 2, 0x536f72766574652064652063686f636f6c61746520636f6d2070656461c3a76f7320646520626973636f69746f, 9676),
(30, 'Café cremoso', 3, 0x556d2064656c6963696f736f20636166c3a9206372656d6f736f20656e6665697461646f, 1015);

-- --------------------------------------------------------

--
-- Estrutura da tabela `recomendacao`
--

CREATE TABLE `recomendacao` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `recomendacao`
--

INSERT INTO `recomendacao` (`id`, `id_produto`, `date`) VALUES
(1, 30, '2019-10-07 00:32:21'),
(2, 21, '2019-10-07 00:32:21'),
(3, 28, '2019-10-07 00:32:21'),
(4, 26, '2019-10-07 00:32:21'),
(5, 23, '2019-10-07 00:32:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recomendacao`
--
ALTER TABLE `recomendacao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `recomendacao`
--
ALTER TABLE `recomendacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
