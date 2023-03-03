-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Ago-2022 às 16:57
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdescola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbaluno`
--

CREATE TABLE `tbaluno` (
  `idaluno` int(11) NOT NULL,
  `nomealuno` varchar(80) DEFAULT NULL,
  `cpfaluno` varchar(14) DEFAULT NULL,
  `idturma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbaluno`
--

INSERT INTO `tbaluno` (`idaluno`, `nomealuno`, `cpfaluno`, `idturma`) VALUES
(1, 'Aline', '111.222.333-96', 1),
(2, 'Aline', '111.222.333-96', 1),
(3, 'Julia', '111.111.111-11', 3),
(4, 'Fabrício', '222.222.222-22', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbturma`
--

CREATE TABLE `tbturma` (
  `idturma` int(11) NOT NULL,
  `nometurma` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbturma`
--

INSERT INTO `tbturma` (`idturma`, `nometurma`) VALUES
(1, '1º MTec A'),
(2, '1º MTec B'),
(3, '2º MTec A'),
(4, '3º MTec A');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbaluno`
--
ALTER TABLE `tbaluno`
  ADD PRIMARY KEY (`idaluno`),
  ADD KEY `idturma` (`idturma`);

--
-- Índices para tabela `tbturma`
--
ALTER TABLE `tbturma`
  ADD PRIMARY KEY (`idturma`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbaluno`
--
ALTER TABLE `tbaluno`
  MODIFY `idaluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbturma`
--
ALTER TABLE `tbturma`
  MODIFY `idturma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbaluno`
--
ALTER TABLE `tbaluno`
  ADD CONSTRAINT `tbaluno_ibfk_1` FOREIGN KEY (`idturma`) REFERENCES `tbturma` (`idturma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
