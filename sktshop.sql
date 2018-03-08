-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Mar-2018 às 01:04
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sktshop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(3) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `cpf` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `datan` varchar(8) COLLATE utf8_bin NOT NULL,
  `senha` varchar(10) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `email`, `datan`, `senha`, `endereco`) VALUES
(1, 'erica coelho', 2147483647, 'erica@gmail.com', '0', '123456789', '16/08/1999'),
(2, 'igor alvez', 2147483647, 'igor@gmail.com', '0', '123456789', '16/08/1997'),
(3, 'pedro', 2147483647, 'pedro@gmail.com', '1', '335447350', '2000-08-16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(255) COLLATE utf8_bin NOT NULL,
  `modelo` varchar(255) COLLATE utf8_bin NOT NULL,
  `sistema` varchar(255) COLLATE utf8_bin NOT NULL,
  `autor` varchar(255) COLLATE utf8_bin NOT NULL,
  `editora` varchar(255) COLLATE utf8_bin NOT NULL,
  `tamanho` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL,
  `genero` varchar(255) COLLATE utf8_bin NOT NULL,
  `preco` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `tipo`, `modelo`, `sistema`, `autor`, `editora`, `tamanho`, `foto`, `genero`, `preco`) VALUES
(1, 'A culpa eh das estrelas', 'Livros', '', '', 'John Green', 'Intrinseca', '', 'img/livro1.jpg', 'romance', '40,00'),
(2, 'minecraft', 'game', '', '', '', '', '', 'img/game1.jpg', '', '45,00'),
(3, 'assassins creed revelations', 'game', '', '', '', '', '', 'img/game2.jpg', '', '70,00'),
(4, 'L-prime', 'cel', '', '', '', '', '', 'img/cel1.jpg', '', '700,00'),
(5, 'microfone de lapela', 'eletro', '', '', '', '', '', 'img/eletro1.jpg', '', '15,00'),
(6, 'Mouse Razer', 'info', '', '', '', '', '', 'img/info1.jpg', '', '9201,00'),
(7, 'camisaSKT', 'roupa', '', '', '', '', '', 'img/roupa1.jpg', '', '45,00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
