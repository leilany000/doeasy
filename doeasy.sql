-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Set-2018 às 14:52
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doeasy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao`
--

CREATE TABLE `doacao` (
  `id` int(11) NOT NULL,
  `descricao` varchar(30) DEFAULT NULL,
  `tipo_doacao` int(11) DEFAULT NULL,
  `data_doacao` date DEFAULT NULL,
  `doador` int(11) DEFAULT NULL,
  `receptor` int(11) DEFAULT NULL,
  `data_recebimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doadores`
--

CREATE TABLE `doadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `senha` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `doadores`
--

INSERT INTO `doadores` (`id`, `nome`, `endereco`, `email`, `telefone`, `cpf`, `senha`) VALUES
(1, 'frvrt4vrtv', 'frfr4f', 'vtv@ftgfr4t', '4tgt5g', 'fr4f4r', '9c023beccee66dc'),
(2, 'eded', 'dede', 'deded@fef', 'ded', 'ded', 'b4be1c568a6dc02'),
(3, 'tgtgt', 'gtg', 'gtgt@ded', 'gt', 'gtg', 'ff8ea425d3e258f'),
(4, 'e3e3e', 'ddede', 'deded@fef', 'frfr', 'dede', '22c50379b54e364'),
(5, 'rfrf', 'frfr', 'frfr@deed', 'frfr', 'frfr', '22c50379b54e364'),
(6, 'sdsdsd', 'sdaa', 'dsd@dsad', 'ads', 'das', 'ae97a3162c8302f'),
(7, 'frvrt4vrtv', 'dwefwefwvsv', 'Mariasdvsd@sdsd', 'sdsd', 'ded', 'e52fdc32daba527'),
(8, 'leilany', 'rua brusque', 'leilanyoliveira12@gmail.com', '88396655', '12311123', '202cb962ac59075');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ong`
--

CREATE TABLE `ong` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cnpj` varchar(19) DEFAULT NULL,
  `endereco` varchar(34) DEFAULT NULL,
  `senha` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ong`
--

INSERT INTO `ong` (`id`, `nome`, `email`, `telefone`, `cnpj`, `endereco`, `senha`) VALUES
(1, '5tgetrfgsf', 'tgtg4tg@dedwe', 'fwfrf', 'fwfw', 'dwefwefw', '342f9c9485be86c'),
(2, 'gtgtgt', 'gtgtg@ff', 'gtgt', 'gtgt', 'ggtg', 'bda08e5056fe7f4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_doacao`
--

CREATE TABLE `tipo_doacao` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `itens` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_doacao`
--

INSERT INTO `tipo_doacao` (`id`, `descricao`, `itens`) VALUES
(1, '', 'vestuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(30) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `endereco` varchar(100) NOT NULL,
  `cpf_cnpj` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`, `tipo`, `email`, `endereco`, `cpf_cnpj`, `telefone`) VALUES
(1, 'leilany', NULL, '202cb962ac59075b964b', NULL, 'leilanyoliveira12@gmail.com', 'SWDWDW', '121132323', '1212132'),
(2, 'leilany', NULL, '202cb962ac59075b964b', 'O', 'leilanyoliveira12@gmail.com', 'DDEQDE', '112324', '2132434');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pk_doadores` (`doador`),
  ADD KEY `pk_ong` (`receptor`),
  ADD KEY `pk_tipo_doacao` (`tipo_doacao`);

--
-- Indexes for table `doadores`
--
ALTER TABLE `doadores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_doacao`
--
ALTER TABLE `tipo_doacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doacao`
--
ALTER TABLE `doacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doadores`
--
ALTER TABLE `doadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ong`
--
ALTER TABLE `ong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tipo_doacao`
--
ALTER TABLE `tipo_doacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `pk_doadores` FOREIGN KEY (`doador`) REFERENCES `doadores` (`id`),
  ADD CONSTRAINT `pk_ong` FOREIGN KEY (`receptor`) REFERENCES `ong` (`id`),
  ADD CONSTRAINT `pk_tipo_doacao` FOREIGN KEY (`tipo_doacao`) REFERENCES `tipo_doacao` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
