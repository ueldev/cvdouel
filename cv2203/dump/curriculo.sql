-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Mar-2022 às 01:26
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `curriculo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cu_usuario`
--

CREATE TABLE `cu_usuario` (
  `usu_id_usuario` bigint(20) UNSIGNED NOT NULL,
  `usu_nome` varchar(64) NOT NULL,
  `usu_email` varchar(64) NOT NULL,
  `usu_senha` varchar(256) NOT NULL,
  `usu_login` varchar(32) NOT NULL,
  `usu_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `skill`
--

CREATE TABLE `skill` (
  `nome_hab` varchar(70) DEFAULT NULL,
  `nivel_habilidade` varchar(3) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `conteudo` varchar(1000) DEFAULT NULL,
  `idade` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `linguagem` varchar(30) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `skill1` varchar(40) DEFAULT NULL,
  `skill2` varchar(40) DEFAULT NULL,
  `skill3` varchar(40) DEFAULT NULL,
  `skill4` varchar(40) DEFAULT NULL,
  `skill5` varchar(40) DEFAULT NULL,
  `skill6` varchar(40) DEFAULT NULL,
  `nivel1` int(11) NOT NULL,
  `nivel2` int(11) NOT NULL,
  `nivel3` int(11) NOT NULL,
  `nivel4` int(11) NOT NULL,
  `nivel5` int(11) NOT NULL,
  `nivel6` int(11) NOT NULL,
  `linkedin` varchar(60) DEFAULT NULL,
  `instagram` varchar(40) DEFAULT NULL,
  `youtube` varchar(80) DEFAULT NULL,
  `github` varchar(60) DEFAULT NULL,
  `ano_inicio1` varchar(8) NOT NULL,
  `ano_inicio2` varchar(8) NOT NULL,
  `ano_inicio3` varchar(8) NOT NULL,
  `ano_termino3` varchar(8) NOT NULL,
  `ano_termino2` varchar(8) NOT NULL,
  `ano_termino1` varchar(8) NOT NULL,
  `nome_experiencia1` varchar(20) NOT NULL,
  `nome_experiencia2` varchar(20) NOT NULL,
  `nome_experiencia3` varchar(20) NOT NULL,
  `nome_empresa1` varchar(20) NOT NULL,
  `nome_empresa2` varchar(20) NOT NULL,
  `nome_empresa3` varchar(20) NOT NULL,
  `funcao1` varchar(500) NOT NULL,
  `funcao2` varchar(500) NOT NULL,
  `funcao3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`id`, `nome`, `conteudo`, `idade`, `email`, `telefone`, `linguagem`, `endereco`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `skill6`, `nivel1`, `nivel2`, `nivel3`, `nivel4`, `nivel5`, `nivel6`, `linkedin`, `instagram`, `youtube`, `github`, `ano_inicio1`, `ano_inicio2`, `ano_inicio3`, `ano_termino3`, `ano_termino2`, `ano_termino1`, `nome_experiencia1`, `nome_experiencia2`, `nome_experiencia3`, `nome_empresa1`, `nome_empresa2`, `nome_empresa3`, `funcao1`, `funcao2`, `funcao3`) VALUES
(1, 'sim', '<p>aaaa</p><p><br></p>', 11, '', '', 'c', '', 'Cantar', 'Correr', 'Andar', 'PRogramar', 'Designar', 'Gerenciar', 10, 60, 80, 50, 30, 80, '', 'https://github.com/ueldev/', '', 'https://instagram.com/s4wvel', '2022', '2015', '2020', '2025', '2017', 'Atuando', 'Co-CEO', 'Pedreiro MamÃ£o', 'Desenvolvedor IOS', 'Barril Tech!', 'Marlon ConstruÃ§Ãµes', 'Apple', 'Dono da disgrama e Ã© isso', 'Construindo Casas e sonhos', 'Eu fazia joguinhos IOS');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cu_usuario`
--
ALTER TABLE `cu_usuario`
  ADD PRIMARY KEY (`usu_id_usuario`),
  ADD UNIQUE KEY `usu_id_usuario` (`usu_id_usuario`);

--
-- Índices para tabela `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cu_usuario`
--
ALTER TABLE `cu_usuario`
  MODIFY `usu_id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sobre`
--
ALTER TABLE `sobre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
