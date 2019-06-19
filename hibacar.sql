-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Jun-2019 às 02:11
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
-- Estrutura da tabela `hcar_forma_pagamento`
--

CREATE TABLE `hcar_forma_pagamento` (
  `id_forma_pagto` int(11) DEFAULT NULL,
  `tipo_forma_pagto` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `hcar_forma_pagamento`
--

INSERT INTO `hcar_forma_pagamento` (`id_forma_pagto`, `tipo_forma_pagto`) VALUES
(NULL, 'Visa'),
(NULL, 'Master Card'),
(NULL, 'Elo'),
(NULL, 'Amex'),
(NULL, 'HiperCard'),
(NULL, 'Boleto'),
(NULL, 'Débito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hcar_ofc_pagto`
--

CREATE TABLE `hcar_ofc_pagto` (
  `id_ofc_pagto` int(11) NOT NULL,
  `id_ofc` int(11) NOT NULL,
  `id_pagto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hcar_ofc_serv`
--

CREATE TABLE `hcar_ofc_serv` (
  `id_ofc_serv` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `serv_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `hcar_ofc_serv`
--

INSERT INTO `hcar_ofc_serv` (`id_ofc_serv`, `id`, `serv_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 2, 1),
(8, 2, 2),
(9, 2, 3),
(10, 2, 4),
(11, 2, 10),
(12, 2, 11),
(13, 4, 7);

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
  `ofc_celular` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_site` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_endereco` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_numero` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_complemento` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `ofc_cep` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `hcar_oficina`
--

INSERT INTO `hcar_oficina` (`ofc_id`, `ofc_nome`, `ofc_descricao`, `ofc_logo`, `ofc_email`, `ofc_pass`, `ofc_telefone`, `ofc_celular`, `ofc_site`, `ofc_endereco`, `ofc_numero`, `ofc_complemento`, `ofc_bairro`, `ofc_cidade`, `ofc_uf`, `ofc_cep`, `lat`, `lng`) VALUES
(1, 'Oficina Senac', 'Realizamos trabalhos como: ...', '-', 'oficinasenac@hibacar.com.br', '123456', '1155556666', '1198888777', 'https://www.hibacar.com.br', 'Av. Eng. Eusébio Stevaux', '823', '-', 'Santo Amaro', 'São Paulo', 'SP', '04696100', -23.669222, -46.699471),
(2, 'Hibacar', 'Realizamos trabalhos como: ...', '-', 'hibacar@hibacar.com.br', 'hibacar', '1155554444', '1199999888', 'https://www.hibacar.com.br', 'Av. Eng. Eusébio Stevaux', '823', '-', 'Santo Amaro', 'São Paulo', 'SP', '04696100', -23.680651, -46.698891),
(3, 'Murilo\'s Car', 'Blá Blá Blá', 'logo_murilos_car.png', 'murilo@hibacar.com.br', 'murilo', '1144443333', '1198855667', 'https://www.hibacar.com.br', 'R. Santo André', '2', '-', 'Vila Sao Pedro', 'São Paulo', 'SP', '04676080', -23.671085, -46.687321),
(4, 'Jean\'s Car', 'Blá Blá Blá', '-', 'jean@hibacar.com.br', 'murilo', '1144443333', '1198855667', 'https://www.hibacar.com.br', 'Av. Yervant Kissajikian', '789', '-', 'Vila Sao Pedro', 'São Paulo', 'SP', '04657000', -23.671089, -46.687332),
(5, 'Fellipe\'s Car', '		  \r\n		  Blá Blá Blá', '-', 'dfellipe7@gmail.com', 'fellipe', '1155556565', '11988777878', 'https://www.hibacar.com.br', 'R. Santo André', '2', '-', 'Jd. Consórcio', 'São Paulo', 'SP', '', -23.568642, -46.636162);

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
-- Indexes for table `hcar_ofc_pagto`
--
ALTER TABLE `hcar_ofc_pagto`
  ADD PRIMARY KEY (`id_ofc_pagto`);

--
-- Indexes for table `hcar_ofc_serv`
--
ALTER TABLE `hcar_ofc_serv`
  ADD PRIMARY KEY (`id_ofc_serv`);

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
-- AUTO_INCREMENT for table `hcar_ofc_pagto`
--
ALTER TABLE `hcar_ofc_pagto`
  MODIFY `id_ofc_pagto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hcar_ofc_serv`
--
ALTER TABLE `hcar_ofc_serv`
  MODIFY `id_ofc_serv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hcar_oficina`
--
ALTER TABLE `hcar_oficina`
  MODIFY `ofc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hcar_servicos`
--
ALTER TABLE `hcar_servicos`
  MODIFY `serv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
