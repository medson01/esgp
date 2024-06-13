-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Set-2020 às 19:28
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `prontuario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisos`
--

CREATE TABLE `avisos` (
  `id` int(11) NOT NULL,
  `id_credenciado` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `conteudo` text NOT NULL,
  `data` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `avisos`
--

INSERT INTO `avisos` (`id`, `id_credenciado`, `titulo`, `conteudo`, `data`, `status`) VALUES
(27, 21, 'Fechamento Pronto Atendimento Veredas', ' Caro Credenciado, favor fechar os Prontos Atendimento em aberto. \r\n                                  ', '2019-08-13 07:52:19', 1),
(30, 21, 'Biometria', ' Caro Credenciado, Informamos que a partir do dia 01 de fevereiro de 2020, o Ipaseal Saúde implantará a Biometria em seu sistema de atendimento. Funcionalidade que visa trazer maior segurança aos atendimentos executados. Os treinamentos e implantação deverão acontecer nas primeiras semanas de fevereiro nos postos de atendimento dos credenciados.  Qualquer dúvida, entrar em contato pelo fone: 3315-3226 Att.: TI - Ipaseal Saúde\r\n                                  ', '2020-01-29 16:24:55', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `credenciado`
--

CREATE TABLE `credenciado` (
  `id` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `codigo` varchar(11) CHARACTER SET utf8 NOT NULL,
  `cpf_cnpj` varchar(11) CHARACTER SET utf8 NOT NULL,
  `nome` varchar(30) CHARACTER SET utf8 NOT NULL,
  `nome_fantasia` varchar(50) CHARACTER SET utf8 NOT NULL,
  `endereco` varchar(30) CHARACTER SET utf8 NOT NULL,
  `bairro` varchar(30) CHARACTER SET utf8 NOT NULL,
  `numero` int(11) NOT NULL,
  `cep` varchar(20) CHARACTER SET utf8 NOT NULL,
  `cidade` varchar(20) CHARACTER SET utf8 NOT NULL,
  `estado` varchar(20) CHARACTER SET utf8 NOT NULL,
  `telefone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `celular` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `banco` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `agencia` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `operacao` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `conta` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `data_inc` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `credenciado`
--

INSERT INTO `credenciado` (`id`, `id_usuarios`, `codigo`, `cpf_cnpj`, `nome`, `nome_fantasia`, `endereco`, `bairro`, `numero`, `cep`, `cidade`, `estado`, `telefone`, `celular`, `email`, `banco`, `agencia`, `operacao`, `conta`, `data_inc`) VALUES
(21, 21, '000100', '56454545454', 'HOSPITAL SANATORIO', 'SANATORIO', 'sdfgsdfg', 'Farol', 45645, '57000000', 'Maceió', 'AL', '8233333333', '', 'sasdfas@gmail.com', '', '', '', '', '0000-00-00 00:00:00'),
(22, 21, '123465', '12346513214', 'HOSPITAL CHAMA', 'CHAMA', 'asdfasdf', 'Centro', 13246, '57000000', 'Arapiraca', 'AL', '8213132131', '32132132132', 'asdfsdfa@gmail.com', '', '', '', '', '0000-00-00 00:00:00'),
(23, 21, '123465', '21321321321', 'HOSPITAL VEREDAS', 'VEREDAS', 'dfgdsfgs', 'Farol', 34435, '57000000', 'Maceió', 'AL', '1132132132', '32132132132', 'msafasd@gmail.comm', '', '', '', '', '0000-00-00 00:00:00'),
(26, 21, '123456', '12346564654', 'HOSPITAL ARTUR RAMOS', 'ARTUS RAMOS', 'SAFASDFS', 'Farol', 54646, '57013213', 'Maceió', 'AL', '8798465465', '65465465465', '654654654654', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(27, 21, '123465', '65465465465', 'IPASEAL SAÚDE', 'IPASEAL SAÚDE', 'asdfasdfa', 'Centro', 65454, '57000000', 'Maceio', 'AL', '5546546544', '654654654', '46546546546', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fisioterapia`
--

CREATE TABLE `fisioterapia` (
  `id` int(11) NOT NULL,
  `id_prontuario` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estado_paciente` varchar(5) NOT NULL,
  `posicionamento` varchar(5) NOT NULL,
  `sedestacao` tinyint(1) NOT NULL,
  `bipedestacao` tinyint(1) NOT NULL,
  `pressao_arterial` int(11) NOT NULL,
  `auscuta_pulmonar` int(11) NOT NULL,
  `saturacao_periferica` int(11) NOT NULL,
  `freq_cardiaca` varchar(10) NOT NULL,
  `freq_respiratoria` varchar(10) NOT NULL,
  `glicemia` float NOT NULL,
  `temperatura` int(11) NOT NULL,
  `ex_ativo_passivo` tinyint(1) NOT NULL,
  `ex_motabolico` tinyint(1) NOT NULL,
  `ex_respiratorio` tinyint(1) NOT NULL,
  `aspiracao` tinyint(1) NOT NULL,
  `descarga_peso` tinyint(1) NOT NULL,
  `alongamento` tinyint(1) NOT NULL,
  `cambulacao` tinyint(1) NOT NULL,
  `observacao` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

CREATE TABLE `prontuario` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `matricula` varchar(16) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `celular` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `data_nasc` datetime NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `peso` varchar(5) NOT NULL,
  `altura` varchar(5) NOT NULL,
  `raca` varchar(30) NOT NULL,
  `tipo_sang` varchar(30) NOT NULL,
  `fator_rh` varchar(30) DEFAULT NULL,
  `quadro_clinico` text DEFAULT NULL,
  `diagnostico` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deficiente` tinyint(1) NOT NULL,
  `complexidade` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `prontuario`
--

INSERT INTO `prontuario` (`id`, `id_usuario`, `matricula`, `nome`, `endereco`, `bairro`, `cidade`, `estado`, `telefone`, `celular`, `email`, `data_nasc`, `data_cadastro`, `sexo`, `peso`, `altura`, `raca`, `tipo_sang`, `fator_rh`, `quadro_clinico`, `diagnostico`, `status`, `deficiente`, `complexidade`) VALUES
(75, 74, '0001000100000801', 'asdfasdf', 'fasdfa', 'fasdfasdfa', 'Maceió', 'AL', '2342342342', '23423423423', 'medson@gmail.com', '1973-11-07 00:00:00', '2020-09-14 12:14:27', 'f', '94', '1.74', 'amarela', 'A', 'positivo', 'asdfasdf', 'asdfasdfa', 1, 1, 'null Média 1.74'),
(76, 74, '0001000100008010', 'asdfasdfasd', 'asdfasdfa', 'afasdfasdfa', 'Maceió', 'AL', '8113213213', '32132132132', 'medson@gmial.com', '1973-11-07 00:00:00', '2020-09-14 12:20:06', 'f', '94', '1.74', 'branca', 'A', 'positivo', 'asdfasdf', 'asdfasd', 1, 1, 'Baixa Média Alta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `celular` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `justificativa` varchar(50) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`id`, `nome`, `tipo`, `telefone`, `celular`, `email`, `justificativa`, `id_paciente`) VALUES
(32, 'null', 'Esposo(a)', 'null', 'null', 'null', 'null', 75),
(33, 'null', 'Esposo(a)', 'null', 'null', 'null', 'null', 76);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `id_credenciado` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `sobre_nome` varchar(30) DEFAULT NULL,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `perfil` varchar(30) DEFAULT NULL,
  `ultimo_logon` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `id_credenciado`, `nome`, `sobre_nome`, `login`, `senha`, `perfil`, `ultimo_logon`) VALUES
(42, 27, 'MEDSON', NULL, 'MEDSON', 'puba01', 'administrador', '0000-00-00 00:00:00'),
(33, 27, 'AUDITOR', NULL, 'AUDITOR', '123456', 'auditor', '2020-09-14 10:50:43'),
(21, 27, 'ADMIN', NULL, 'ADMIN', '33153226', 'administrador', '2020-09-14 10:49:16'),
(74, 23, 'VEREDAS', 'VEREDAS', '00000000001', 'veredas123456', 'fisioterapia', '2020-09-17 14:21:33');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuarios_2` (`id_credenciado`);

--
-- Índices para tabela `credenciado`
--
ALTER TABLE `credenciado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Índices para tabela `fisioterapia`
--
ALTER TABLE `fisioterapia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paciente` (`id_prontuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `prontuario`
--
ALTER TABLE `prontuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_credenciado` (`id_credenciado`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `credenciado`
--
ALTER TABLE `credenciado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `fisioterapia`
--
ALTER TABLE `fisioterapia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de tabela `prontuario`
--
ALTER TABLE `prontuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de tabela `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `avisos`
--
ALTER TABLE `avisos`
  ADD CONSTRAINT `avisos_ibfk_1` FOREIGN KEY (`id_credenciado`) REFERENCES `credenciado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `fisioterapia`
--
ALTER TABLE `fisioterapia`
  ADD CONSTRAINT `fisioterapia_ibfk_1` FOREIGN KEY (`id_prontuario`) REFERENCES `prontuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD CONSTRAINT `responsavel_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `prontuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
