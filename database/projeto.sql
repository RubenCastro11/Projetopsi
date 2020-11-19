-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Nov-2020 às 11:20
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atores`
--

CREATE TABLE `atores` (
  `id_ator` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacionalidade` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_nascimento` datetime DEFAULT NULL,
  `fotografia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `atores`
--

INSERT INTO `atores` (`id_ator`, `nome`, `nacionalidade`, `data_nascimento`, `fotografia`, `updated_at`, `created_at`) VALUES
(1, 'Zé Bino', 'Portuguesa', '2020-11-10 14:24:21', NULL, NULL, NULL),
(2, 'Aurélio Lobo', 'Portuguesa', '2020-11-03 06:19:18', NULL, NULL, NULL),
(3, 'Armindo Costa', 'Angolana', '2017-05-10 08:16:33', NULL, NULL, NULL),
(4, 'Marcelo Bobine', 'Portuguesa', '2017-10-19 04:15:23', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id_filme` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `sinopse` text COLLATE utf8mb4_unicode_ci,
  `quantidade` smallint(6) NOT NULL,
  `idioma` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_ator` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id_filme`, `titulo`, `id_genero`, `sinopse`, `quantidade`, `idioma`, `id_ator`, `updated_at`, `created_at`) VALUES
(3, 'Velocidade Furiosa', 123, 'Brian O\'Conner é um policia que se infiltra no submundo dos picas de rua para investigar uma série de furtos. Enquanto tenta ganhar o respeito e a confiança do líder Dom Toretto, ele corre o risco de ser desmascarado.', 23, 'Americano', 1, NULL, NULL),
(4, 'Balas e Bolinhos', 321, 'O Tone voltou e está com umas ideias!\r\nQuatro pouco inteligentes criminosos à portuguesa planeiam o crime das suas vidas \"desta vez é que vai ser!\"\r\ne porque o Tone é demais... todos o seguem.\r\n', 142, 'Português', 2, NULL, NULL),
(5, 'Balburdia na Quinta', 555, 'O touro Otis gosta de cantar e tocar como todos os outros animais do celeiro, quando o agricultor está fora. No entanto, o bovino despreocupado deve logo encontrar coragem para ser um líder quando, inesperadamente, ele se encontra em uma posição de grande responsabilidade.', 534, 'Português', 3, NULL, NULL),
(6, 'Homem Aranha', 327, 'Depois de ser picado por uma aranha geneticamente modificada em uma demonstração científica, o jovem nerd Peter Parker ganha superpoderes. Inicialmente, ele pretende usá-los para para ganhar dinheiro, adotando o nome de Homem-Aranha e se apresentando em lutas de exibição. Porém, ao presenciar o assassinando de seu tio Ben e sentir-se culpado, Peter decide não mais usar seus poderes para proveito próprio e sim para enfrentar o mal, tendo como seu primeiro grande desafio o psicótico Duende Verde.', 756, 'Americano', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `designacao` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacoes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `generos`
--

INSERT INTO `generos` (`id_genero`, `designacao`, `observacoes`, `created_at`, `updated_at`) VALUES
(123, 'Ação', 'Este filme é baseado em carros e luta.', NULL, NULL),
(321, 'Comédia', 'Este filme é baseado num grupo de 4 homens pouco inteligentes que cometem crimes.', NULL, NULL),
(327, 'Ação', 'Este filme é baseado num homem que foi picado por uma aranha e que salva o mundo dos criminosos.', NULL, NULL),
(555, 'Comédia', 'Este filme é baseado em animais que causam o desastre total.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atores`
--
ALTER TABLE `atores`
  ADD PRIMARY KEY (`id_ator`);

--
-- Indexes for table `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id_filme`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atores`
--
ALTER TABLE `atores`
  MODIFY `id_ator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id_filme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=556;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
