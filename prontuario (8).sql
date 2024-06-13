-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Abr-2022 às 20:43
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.30

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
-- Estrutura da tabela `clinico_geral`
--

CREATE TABLE `clinico_geral` (
  `id` int(11) NOT NULL,
  `id_prontuario` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `pressao_arterial` int(11) NOT NULL,
  `freq_cardiaca` varchar(10) NOT NULL,
  `temperatura` int(11) NOT NULL,
  `observacao` varchar(60) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `convites`
--

CREATE TABLE `convites` (
  `id_convite` int(11) NOT NULL,
  `fk_id_destinatario` int(11) NOT NULL,
  `fk_id_remetente` int(11) NOT NULL,
  `fk_id_evento` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `convites`
--

INSERT INTO `convites` (`id_convite`, `fk_id_destinatario`, `fk_id_remetente`, `fk_id_evento`, `status`) VALUES
(1, 2, 1, 2, NULL),
(5, 0, 97, 7, NULL),
(6, 0, 42, 8, NULL),
(7, 0, 97, 9, NULL),
(8, 0, 97, 10, NULL),
(9, 0, 97, 11, NULL),
(10, 0, 6, 12, NULL),
(11, 0, 13, 13, NULL);

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
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `fk_id_usuario` int(11) DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `cor` varchar(7) DEFAULT NULL,
  `inicio` datetime NOT NULL,
  `termino` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id_evento`, `fk_id_usuario`, `titulo`, `descricao`, `cor`, `inicio`, `termino`) VALUES
(1, 1, 'Aniversario', 'Aniversario do Fulano', '#40E0D0', '2019-07-06 13:30:00', '2019-07-06 16:30:00'),
(2, 1, 'Entrevista Tecnica', 'Entrevista com Carlos da TokenLab.', '#FF0000', '2019-07-11 09:30:00', '2019-07-11 10:30:00'),
(3, 2, 'Jogatina', 'Dia de jogatina com amigos.', '#0071c5', '2019-07-12 18:00:00', '2019-07-13 00:00:00'),
(4, 1, 'das', 'dasdasd', '', '2022-03-11 00:00:00', '2022-03-12 00:00:00'),
(5, 1, 'tese', 'sadfasdfasdf', '', '2022-03-11 00:00:00', '2022-03-15 00:00:00'),
(6, 3, 'fsdfs', 'sdfsdf', '', '2022-03-11 00:00:00', '2022-03-12 00:00:00'),
(7, 97, 'KARINE', 'sdf', '#0071c5', '2022-03-11 00:00:00', '2022-03-12 00:00:00'),
(8, 42, 'fsdf', 'sdfsdfsdfs', '', '2022-03-03 00:00:00', '2022-03-04 00:00:00'),
(9, 97, 'EDSON', 'ADFASDF', '#40E0D0', '2022-03-11 00:00:00', '2022-03-12 00:00:00'),
(10, 97, 'srrgfgsfgsdfsdf', '', '#0071c5', '2022-03-17 00:00:00', '2022-03-18 00:00:00'),
(11, 97, 'asdfasdf', 'sdfasd', '', '2022-03-19 00:00:00', '2022-03-20 00:00:00'),
(12, 6, 'kjhkjhkhj', 'mn,mn,mn,m', '', '2022-04-01 00:00:00', '2022-04-02 00:00:00'),
(13, 13, 'ijojojo', '', '', '2022-04-07 00:00:00', '2022-04-08 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `evolucao`
--

CREATE TABLE `evolucao` (
  `id` int(11) NOT NULL,
  `id_prontuario` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `especialidade` varchar(20) NOT NULL,
  `pressao_arterial` int(11) NOT NULL,
  `freq_cardiaca` varchar(10) NOT NULL,
  `cr` int(11) NOT NULL,
  `temperatura` int(11) NOT NULL,
  `observacao` text NOT NULL,
  `receita` text DEFAULT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `evolucao`
--

INSERT INTO `evolucao` (`id`, `id_prontuario`, `id_login`, `id_usuario`, `especialidade`, `pressao_arterial`, `freq_cardiaca`, `cr`, `temperatura`, `observacao`, `receita`, `data`) VALUES
(133, 95, 10, 141, '0', 111, '22-22', 0, 33, '<p>3asdfasdfa</p>', '<table style=\"height: 186px; background-color: #83b3e2;\" border=\"0\" width=\"1000\">\r\n<tbody>\r\n<tr style=\"width: 100%;\">\r\n<td><span style=\"font-size: 10pt;\"><img src=\"../imagem/logo_ipaseal.png\" width=\"67\" height=\"99\" /></span></td>\r\n<td colspan=\"3\"><span style=\"font-size: 10pt;\">INSTITUTO DE ASSIST&Ecirc;NCIA A SA&Uacute;DE DOS SERVIDORES DO ESTADO DE ALAGOAS<br />Rua Cincinato Pinto, 226, Centro - Macei&oacute; - AL - CEP 57020-050<br />Fone: (82) 3315-3267 - CNPJ.:05.115.840/0001-13</span></td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"3\"><center><span style=\"font-size: 10pt;\"><input style=\"border: 0; font-weight: bold; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"RECEITU&Aacute;RIO\" /></span></center></td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"M&eacute;dico:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"MEDICO1 MEDICO1\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"CR:   1234\" /></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"Especialidade:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"ALERGIA E IMUNOLOGIA\" /></span></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"Data:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"> <input style=\"border: 0; width: 300px; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"segunda-feira,  04 de abril de 2022	\" /> </span></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><br /><br /></p>\r\n<!-- // -->\r\n<p>asdfasdfasdfs</p>', '2022-04-04 16:00:40'),
(134, 95, 11, 142, '0', 111, '22-22', 0, 33, '<p>afsdfasdf</p>', '<table style=\"height: 186px; background-color: #83b3e2;\" border=\"0\" width=\"1000\">\r\n<tbody>\r\n<tr style=\"width: 100%;\">\r\n<td><span style=\"font-size: 10pt;\"><img src=\"../imagem/logo_ipaseal.png\" width=\"67\" height=\"99\" /></span></td>\r\n<td colspan=\"3\"><span style=\"font-size: 10pt;\">INSTITUTO DE ASSIST&Ecirc;NCIA A SA&Uacute;DE DOS SERVIDORES DO ESTADO DE ALAGOAS<br />Rua Cincinato Pinto, 226, Centro - Macei&oacute; - AL - CEP 57020-050<br />Fone: (82) 3315-3267 - CNPJ.:05.115.840/0001-13</span></td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"3\"><center><span style=\"font-size: 10pt;\"><input style=\"border: 0; font-weight: bold; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"RECEITU&Aacute;RIO\" /></span></center></td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"M&eacute;dico:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"MEDICO2 MEDICO2\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"CR:   1324\" /></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"Especialidade:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"ALERGIA E IMUNOLOGIA\" /></span></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"Data:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"> <input style=\"border: 0; width: 300px; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"segunda-feira,  04 de abril de 2022	\" /> </span></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><br /><br /></p>\r\n<!-- // -->\r\n<p>asdfasdfasdf</p>', '2022-04-04 16:02:41'),
(135, 87, 10, 141, '0', 111, '22-22', 0, 33, '<p>asfasdfa</p>', '<table style=\"height: 186px; background-color: #83b3e2;\" border=\"0\" width=\"1000\">\r\n<tbody>\r\n<tr style=\"width: 100%;\">\r\n<td><span style=\"font-size: 10pt;\"><img src=\"../imagem/logo_ipaseal.png\" width=\"67\" height=\"99\" /></span></td>\r\n<td colspan=\"3\"><span style=\"font-size: 10pt;\">INSTITUTO DE ASSIST&Ecirc;NCIA A SA&Uacute;DE DOS SERVIDORES DO ESTADO DE ALAGOAS<br />Rua Cincinato Pinto, 226, Centro - Macei&oacute; - AL - CEP 57020-050<br />Fone: (82) 3315-3267 - CNPJ.:05.115.840/0001-13</span></td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"3\"><center><span style=\"font-size: 10pt;\"><input style=\"border: 0; font-weight: bold; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"RECEITU&Aacute;RIO\" /></span></center></td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"M&eacute;dico:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"MEDICO1 MEDICO1\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"CR:   1234\" /></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"Especialidade:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"ALERGIA E IMUNOLOGIA\" /></span></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"Data:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"> <input style=\"border: 0; width: 300px; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"segunda-feira,  04 de abril de 2022	\" /> </span></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><br />asdfasdfad</p>\r\n<!-- // -->\r\n<p>&nbsp;</p>', '2022-04-04 16:04:12'),
(136, 87, 11, 142, '0', 123, '12-31', 0, 12, '<p>fsfsfds</p>', '<table style=\"height: 186px; background-color: #83b3e2;\" border=\"0\" width=\"1000\">\r\n<tbody>\r\n<tr style=\"width: 100%;\">\r\n<td><span style=\"font-size: 10pt;\"><img src=\"../imagem/logo_ipaseal.png\" width=\"67\" height=\"99\" /></span></td>\r\n<td colspan=\"3\"><span style=\"font-size: 10pt;\">INSTITUTO DE ASSIST&Ecirc;NCIA A SA&Uacute;DE DOS SERVIDORES DO ESTADO DE ALAGOAS<br />Rua Cincinato Pinto, 226, Centro - Macei&oacute; - AL - CEP 57020-050<br />Fone: (82) 3315-3267 - CNPJ.:05.115.840/0001-13</span></td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"3\"><center><span style=\"font-size: 10pt;\"><input style=\"border: 0; font-weight: bold; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"RECEITU&Aacute;RIO\" /></span></center></td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"M&eacute;dico:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"MEDICO2 MEDICO2\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"CR:   1324\" /></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"Especialidade:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"ALERGIA E IMUNOLOGIA\" /></span></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"Data:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"> <input style=\"border: 0; width: 300px; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"ter&ccedil;a-feira,  05 de abril de 2022	\" /> </span></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><br /><br /></p>\r\n<!-- // -->\r\n<p>fdgdfgdfgfdgdfgdf</p>', '2022-04-05 13:31:12'),
(137, 95, 10, 141, '0', 323, '23-42', 0, 23, '<p>asdfasdf</p>', '<table style=\"height: 186px; background-color: #83b3e2;\" border=\"0\" width=\"1000\">\r\n<tbody>\r\n<tr style=\"width: 100%;\">\r\n<td><span style=\"font-size: 10pt;\"><img src=\"../imagem/logo_ipaseal.png\" width=\"67\" height=\"99\" /></span></td>\r\n<td colspan=\"3\"><span style=\"font-size: 10pt;\">INSTITUTO DE ASSIST&Ecirc;NCIA A SA&Uacute;DE DOS SERVIDORES DO ESTADO DE ALAGOAS<br />Rua Cincinato Pinto, 226, Centro - Macei&oacute; - AL - CEP 57020-050<br />Fone: (82) 3315-3267 - CNPJ.:05.115.840/0001-13</span></td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"3\"><center><span style=\"font-size: 10pt;\"><input style=\"border: 0; font-weight: bold; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"RECEITU&Aacute;RIO\" /></span></center></td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"M&eacute;dico:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"Medico_ambul MEDICO1\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"CR:   1234\" /></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"Especialidade:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"ALERGIA E IMUNOLOGIA\" /></span></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"Data:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"> <input style=\"border: 0; width: 300px; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"quarta-feira,  06 de abril de 2022	\" /> </span></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><br /><br /></p>\r\n<!-- // -->\r\n<p>asdfasdfa</p>', '2022-04-06 15:39:32'),
(138, 95, 11, 142, '0', 234, '23-42', 0, 23, '<p>adsfasdfa</p>', '<table style=\"height: 186px; background-color: #83b3e2;\" border=\"0\" width=\"1000\">\r\n<tbody>\r\n<tr style=\"width: 100%;\">\r\n<td><span style=\"font-size: 10pt;\"><img src=\"../imagem/logo_ipaseal.png\" width=\"67\" height=\"99\" /></span></td>\r\n<td colspan=\"3\"><span style=\"font-size: 10pt;\">INSTITUTO DE ASSIST&Ecirc;NCIA A SA&Uacute;DE DOS SERVIDORES DO ESTADO DE ALAGOAS<br />Rua Cincinato Pinto, 226, Centro - Macei&oacute; - AL - CEP 57020-050<br />Fone: (82) 3315-3267 - CNPJ.:05.115.840/0001-13</span></td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"3\"><center><span style=\"font-size: 10pt;\"><input style=\"border: 0; font-weight: bold; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"RECEITU&Aacute;RIO\" /></span></center></td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"M&eacute;dico:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"medico_padi MEDICO2\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"CR:   1324\" /></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"Especialidade:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"ALERGIA E IMUNOLOGIA\" /></span></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"Data:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"> <input style=\"border: 0; width: 300px; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"quarta-feira,  06 de abril de 2022	\" /> </span></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><br />asdfasdfasdf</p>\r\n<!-- // -->\r\n<p>&nbsp;</p>', '2022-04-06 16:28:52'),
(139, 95, 13, 180, '0', 111, '22-22', 0, 44, '<p>ytfytfytyty</p>', '<table style=\"height: 186px; background-color: #83b3e2;\" border=\"0\" width=\"1000\">\r\n<tbody>\r\n<tr style=\"width: 100%;\">\r\n<td><span style=\"font-size: 10pt;\"><img src=\"../imagem/logo_ipaseal.png\" width=\"67\" height=\"99\" /></span></td>\r\n<td colspan=\"3\"><span style=\"font-size: 10pt;\">INSTITUTO DE ASSIST&Ecirc;NCIA A SA&Uacute;DE DOS SERVIDORES DO ESTADO DE ALAGOAS<br />Rua Cincinato Pinto, 226, Centro - Macei&oacute; - AL - CEP 57020-050<br />Fone: (82) 3315-3267 - CNPJ.:05.115.840/0001-13</span></td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"3\"><center><span style=\"font-size: 10pt;\"><input style=\"border: 0; font-weight: bold; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"RECEITU&Aacute;RIO\" /></span></center></td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"M&eacute;dico:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"SUPERVISOR MEDICO\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"CR:   1234\" /></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"Especialidade:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"\" /></span></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td><span style=\"font-size: 10pt;\"><input style=\"border: 0; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"Data:\" /></span></td>\r\n<td><span style=\"font-size: 10pt;\"> <input style=\"border: 0; width: 300px; background-color: #83b3e2;\" readonly=\"readonly\" type=\"text\" value=\"quinta-feira,  07 de abril de 2022	\" /> </span></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><br /><br /></p>\r\n<!-- // -->\r\n<p>dfgdfgdfgdgdfgdgdfgdfgd</p>', '2022-04-07 10:48:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `perfil` varchar(30) DEFAULT NULL,
  `ultimo_logon` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `id_usuarios`, `login`, `senha`, `perfil`, `ultimo_logon`) VALUES
(6, 97, '00000000001', 'veredas123456', 'administrador', '2022-03-18 14:27:58'),
(10, 141, '00000000002', '123456', 'medico_ambul', NULL),
(11, 142, '00000000003', '123456', 'medico_padi', NULL),
(12, 143, '00000000004', '123456', 'atendente', NULL),
(13, 180, '00000000005', '123456', 'supervisor', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

CREATE TABLE `prontuario` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `peso` varchar(5) NOT NULL,
  `altura` varchar(5) NOT NULL,
  `tipo_sang` varchar(30) NOT NULL,
  `fator_rh` varchar(30) DEFAULT NULL,
  `quadro_clinico` text DEFAULT NULL,
  `diagnostico` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `complexidade` varchar(30) NOT NULL,
  `data_prontuario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `prontuario`
--

INSERT INTO `prontuario` (`id`, `id_usuario`, `peso`, `altura`, `tipo_sang`, `fator_rh`, `quadro_clinico`, `diagnostico`, `status`, `complexidade`, `data_prontuario`) VALUES
(87, 157, '12', '1', 'NAO INFORMADO', 'não informado', '1fasdfasdf', 'sadfasdf', 0, 'BaixaMédiaAlta', '0000-00-00 00:00:00'),
(95, 155, '80', '1', 'A', 'positivo', 'dsfsdf', 'sdf', 1, 'BaixaMédia', '0000-00-00 00:00:00'),
(97, 155, '180', '1', 'A', 'positivo', 'asdfa', 'asdfasdf', 1, 'BaixaMédia', '0000-00-00 00:00:00'),
(98, 157, '82', '1', 'B', 'positivo', 'asdfas', 'asdfa', 1, 'BaixaMédia', '2022-04-11 17:01:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `parentesco` varchar(30) NOT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `celular` varchar(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`id`, `id_usuario`, `nome`, `parentesco`, `telefone`, `celular`, `email`) VALUES
(59, 155, 'responsavel1', 'filho', '', '99999999999', 'medson01@csd.com'),
(60, 156, 'null', 'conjuge', '', 'null', 'null'),
(61, 157, 'responsavel3', 'filho', '', '99999999999', 'meosn@connn.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `terapia_ocupacional`
--

CREATE TABLE `terapia_ocupacional` (
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
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `id_credenciado` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobre_nome` varchar(30) NOT NULL,
  `titular` char(1) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `matricula` varchar(16) NOT NULL,
  `data_nasc` datetime NOT NULL,
  `deficiente` tinyint(1) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` int(10) NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `cr` int(4) DEFAULT NULL,
  `lotacao` varchar(10) DEFAULT NULL,
  `especialidade` varchar(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `data_cadastro` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `id_credenciado`, `nome`, `sobre_nome`, `titular`, `cpf`, `matricula`, `data_nasc`, `deficiente`, `sexo`, `email`, `endereco`, `bairro`, `cidade`, `estado`, `telefone`, `celular`, `cr`, `lotacao`, `especialidade`, `status`, `data_cadastro`) VALUES
(97, 27, 'Admin', '', '', '', '', '0000-00-00 00:00:00', 0, '', '', '', '', '', 0, 0, NULL, NULL, NULL, 'IMUNOLOGIAdasd', 0, ''),
(172, 0, 'paciente4', '', '', '', '0000000000000001', '0000-00-00 00:00:00', 0, '', 'medson@sdf.com', 'asdfa', 'poço', 'Maceió', 0, 2147483647, 2147483647, NULL, NULL, 'ALERGIA E IMUNOLOGIA', 1, '2022-03-24'),
(141, 21, 'Medico_ambul', 'MEDICO1', '', '', '', '0000-00-00 00:00:00', 0, '', '', '', '', '', 0, NULL, NULL, 1234, 'EXTERNA', 'ALERGIA E IMUNOLOGIA', 0, ''),
(142, 21, 'medico_padi', 'MEDICO2', '', '', '', '0000-00-00 00:00:00', 0, '', '', '', '', '', 0, NULL, NULL, 1324, 'INTERNA', 'ALERGIA E IMUNOLOGIA', 0, ''),
(143, 21, 'atendente', 'MEDICO3', '', '', '', '0000-00-00 00:00:00', 0, '', '', '', '', '', 0, NULL, NULL, 1324, 'INTERNA', 'ALERGIA E IMUNOLOGIA', 0, ''),
(156, 0, 'paciente2', '', '', '', '0001000100000801', '1973-11-07 00:00:00', 0, 'm', '9meds@com.com', 'rua', 'poço', 'Maceió', 0, 2147483647, 2147483647, NULL, NULL, 'ALERGIA E IMUNOLOGIA', 1, '2022-03-24'),
(157, 0, 'paciente3', '', '', '02176683483', '0001000100000000', '1973-11-07 00:00:00', 1, 'm', 'meseon@g.com', 'rua', 'pço', 'Maceió', 0, 2147483647, 2147483647, NULL, NULL, 'ALERGIA E IMUNOLOGIA', 1, '2022-03-24'),
(155, 0, 'paciente1', '', '', '02176683480', '0001000100000801', '1973-11-07 00:00:00', 1, 'm', '9mme@ed.com', 'rua', 'poço', 'Maceió', 0, 2147483647, 2147483647, NULL, NULL, 'ALERGIA E IMUNOLOGIA', 1, '2022-03-24'),
(180, 27, 'SUPERVISOR', 'MEDICO', '', '', '', '0000-00-00 00:00:00', 0, '', '', '', '', '', 0, NULL, NULL, 1234, 'EXTERNA', '', 0, '');

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
-- Índices para tabela `clinico_geral`
--
ALTER TABLE `clinico_geral`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paciente` (`id_prontuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `convites`
--
ALTER TABLE `convites`
  ADD PRIMARY KEY (`id_convite`),
  ADD KEY `fk_id_destinatario` (`fk_id_destinatario`),
  ADD KEY `fk_id_remetente` (`fk_id_remetente`),
  ADD KEY `fk_id_evento` (`fk_id_evento`);

--
-- Índices para tabela `credenciado`
--
ALTER TABLE `credenciado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `fk_id_usuario` (`fk_id_usuario`);

--
-- Índices para tabela `evolucao`
--
ALTER TABLE `evolucao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paciente` (`id_prontuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `id_usuario` (`id_usuario`) USING BTREE;

--
-- Índices para tabela `terapia_ocupacional`
--
ALTER TABLE `terapia_ocupacional`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paciente` (`id_prontuario`),
  ADD KEY `id_usuario` (`id_usuario`);

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
-- AUTO_INCREMENT de tabela `clinico_geral`
--
ALTER TABLE `clinico_geral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de tabela `convites`
--
ALTER TABLE `convites`
  MODIFY `id_convite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `credenciado`
--
ALTER TABLE `credenciado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `evolucao`
--
ALTER TABLE `evolucao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `prontuario`
--
ALTER TABLE `prontuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT de tabela `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de tabela `terapia_ocupacional`
--
ALTER TABLE `terapia_ocupacional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `avisos`
--
ALTER TABLE `avisos`
  ADD CONSTRAINT `avisos_ibfk_1` FOREIGN KEY (`id_credenciado`) REFERENCES `credenciado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `clinico_geral`
--
ALTER TABLE `clinico_geral`
  ADD CONSTRAINT `clinico_geral_ibfk_1` FOREIGN KEY (`id_prontuario`) REFERENCES `prontuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `convites`
--
ALTER TABLE `convites`
  ADD CONSTRAINT `convites_ibfk_1` FOREIGN KEY (`fk_id_evento`) REFERENCES `eventos` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `evolucao`
--
ALTER TABLE `evolucao`
  ADD CONSTRAINT `evolucao_ibfk_1` FOREIGN KEY (`id_prontuario`) REFERENCES `prontuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `terapia_ocupacional`
--
ALTER TABLE `terapia_ocupacional`
  ADD CONSTRAINT `terapia_ocupacional_ibfk_1` FOREIGN KEY (`id_prontuario`) REFERENCES `prontuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
