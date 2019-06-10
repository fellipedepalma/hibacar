-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jun-2019 às 14:31
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hibacar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `hcar_oficina`
--

CREATE TABLE `hcar_oficina` (
  `ofc_id` int(11) NOT NULL,
  `ofc_nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `ofc_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_pass` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_telefone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_celular` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_site` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_endereco` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_numero` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_complemento` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hcar_servicos`
--

CREATE TABLE `hcar_servicos` (
  `serv_id` int(11) NOT NULL,
  `serv_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `serv_slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `serv_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `hcar_servicos`
--

INSERT INTO `hcar_servicos` (`serv_id`, `serv_nome`, `serv_slug`, `serv_img`) VALUES
(1, 'Revisão Preventiva', 'revisao-preventiva', 'revisao.jpg'),
(2, 'Troca De Óleo', 'troca-de-oleo', 'trocadeoleo.jpg'),
(3, 'Funilaria', 'funilaria', 'funilaria.jpg'),
(4, 'Motor', 'motor', 'motor.jpeg'),
(5, 'Injeção Eletrônica', 'injecao-eletronica', 'injecao.jpg'),
(6, 'Elétrica', 'eletrica', 'eletrica.jpg'),
(7, 'Alinhamento e Balanceamento', 'alinhamento-e-balanceamento', 'alinhamento.jpg'),
(8, 'Suspensão', 'suspensao', 'suspensao.jpg'),
(9, 'Freios', 'freios', 'freio.jpg'),
(10, 'Câmbio', 'cambio', 'cambio.png'),
(11, 'Escapamento', 'escapamento', 'escapamento.jpg'),
(12, 'Ar Condicionado', 'ar-condicionado', 'ar-condicionado.jpg'),
(13, 'Direção', 'direção', 'direcao.png'),
(14, 'Pneus', 'pneus', 'pneu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hcar_oficina`
--
ALTER TABLE `hcar_oficina`
  ADD PRIMARY KEY (`ofc_id`);

--
-- Indexes for table `hcar_servicos`
--
ALTER TABLE `hcar_servicos`
  ADD PRIMARY KEY (`serv_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hcar_oficina`
--
ALTER TABLE `hcar_oficina`
  MODIFY `ofc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hcar_servicos`
--
ALTER TABLE `hcar_servicos`
  MODIFY `serv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
