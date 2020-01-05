-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Nov-2019 às 03:12
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schedule-generator`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `curso_sigla` varchar(10) NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nome`, `curso_sigla`) VALUES
(1, 'AdministraÃ§Ã£o', 'ADM'),
(2, 'Alimentos', 'ALM'),
(3, 'ComÃ©rcio', 'CMC'),
(4, 'EdificaÃ§Ãµes', 'EDF'),
(5, 'InformÃ¡tica', 'INF');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE IF NOT EXISTS `disciplinas` (
  `id_disciplina` int(11) NOT NULL AUTO_INCREMENT,
  `id_professor` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `curso` varchar(250) NOT NULL,
  PRIMARY KEY (`id_disciplina`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id_disciplina`, `id_professor`, `nome`, `curso`) VALUES
(1, 0, 'PPW', 'InformÃ¡tica'),
(2, 0, 'LP', 'InformÃ¡tica'),
(3, 0, 'SIS.EMBARCADOS', 'InformÃ¡tica'),
(4, 0, 'ADMINISTRAÃ‡ÃƒO', 'AdministraÃ§Ã£o'),
(5, 0, 'ECONOMIA ', 'AdministraÃ§Ã£o'),
(6, 0, 'CONSTRUÃ‡ÃƒO', 'EdificaÃ§Ãµes'),
(7, 0, 'PLANILIA', 'EdificaÃ§Ãµes'),
(8, 0, 'MARKETING ', 'ComÃ©rcio'),
(9, 0, 'VENDAS ', 'ComÃ©rcio'),
(10, 0, 'BIOQUIMICA', 'Alimentos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios_turmas`
--

CREATE TABLE IF NOT EXISTS `horarios_turmas` (
  `id_horario_turma` int(11) NOT NULL AUTO_INCREMENT,
  `turma` varchar(250) NOT NULL,
  `horariosemana` varchar(250) NOT NULL,
  PRIMARY KEY (`id_horario_turma`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `horarios_turmas`
--

INSERT INTO `horarios_turmas` (`id_horario_turma`, `turma`, `horariosemana`) VALUES
(1, '3-51', 'segundaMatutino'),
(2, '3-51', 'segundaVespertino'),
(3, '3-51', 'tercaMatutino'),
(4, '3-51', 'tercaVespertino'),
(5, '3-51', 'quartaMatutino'),
(6, '3-51', 'quintaMatutino'),
(7, '3-51', 'sextaMatutino'),
(8, '3-51', 'sextaVespertino'),
(9, '3-53', 'segundaMatutino'),
(10, '3-53', 'segundaVespertino'),
(11, '3-53', 'tercaMatutino'),
(12, '3-53', 'quartaMatutino'),
(13, '3-53', 'quartaVespertino'),
(14, '3-53', 'quintaMatutino'),
(15, '3-53', 'quintaVespertino'),
(16, '3-53', 'sextaMatutino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
  `id_professor` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `nomehorario` varchar(150) NOT NULL,
  PRIMARY KEY (`id_professor`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id_professor`, `id_curso`, `nome`, `nomehorario`) VALUES
(1, 0, 'EVANDRO VIEIRA', 'EVANDRO'),
(2, 0, 'RAMON VENSON', 'RAMON'),
(3, 0, 'ALEXANDER ROSA', 'ALEX'),
(4, 0, 'JUSSANARA SILVA', 'JUSSANARA'),
(5, 0, 'LETICIA CARBONI', 'LETICIA'),
(6, 0, 'MARIO SILVA', 'MARIO'),
(7, 0, 'JOSÃ‰ ALVES', 'JOSÃ‰'),
(8, 0, 'Ã‰RICA FIGUEREDO', 'Ã‰RICA'),
(9, 0, 'BEATRIZ MACHADO', 'BEATRIZ'),
(10, 0, 'JANINE GOMES', 'JANINE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `propostas`
--

CREATE TABLE IF NOT EXISTS `propostas` (
  `id_proposta` int(11) NOT NULL AUTO_INCREMENT,
  `id_professor` int(11) NOT NULL,
  `dia_semana_turno` varchar(250) DEFAULT NULL,
  `nome_professor` varchar(250) NOT NULL,
  PRIMARY KEY (`id_proposta`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `propostas`
--

INSERT INTO `propostas` (`id_proposta`, `id_professor`, `dia_semana_turno`, `nome_professor`) VALUES
(1, 0, 'segundaMatutino', 'EVANDRO VIEIRA'),
(2, 0, 'segundaVespertino', 'EVANDRO VIEIRA'),
(3, 0, 'tercaMatutino', 'EVANDRO VIEIRA'),
(4, 0, 'tercaVespertino', 'EVANDRO VIEIRA'),
(5, 0, 'quartaMatutino', 'RAMON VENSON'),
(6, 0, 'quartaVespertino', 'RAMON VENSON'),
(7, 0, 'quintaMatutino', 'RAMON VENSON'),
(8, 0, 'quintaVespertino', 'RAMON VENSON'),
(9, 0, 'sextaMatutino', 'ALEXANDER ROSA'),
(10, 0, 'sextaVespertino', 'ALEXANDER ROSA'),
(11, 0, 'sextaNoturno', 'ALEXANDER ROSA'),
(12, 0, 'sabadoMatutino', 'BEATRIZ MACHADO'),
(13, 0, 'sabadoVespertino', 'BEATRIZ MACHADO'),
(14, 0, 'sabadoNoturno', 'BEATRIZ MACHADO'),
(15, 0, 'tercaMatutino', 'MARIO SILVA'),
(16, 0, 'tercaVespertino', 'MARIO SILVA'),
(17, 0, 'tercaNoturno', 'MARIO SILVA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE IF NOT EXISTS `turmas` (
  `id_turma` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `curso` varchar(50) NOT NULL,
  PRIMARY KEY (`id_turma`),
  KEY `id_curso_FK` (`id_curso`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id_turma`, `nome`, `id_curso`, `curso`) VALUES
(1, '3-51', 0, 'InformÃ¡tica'),
(2, '3-52', 0, 'InformÃ¡tica'),
(3, '3-53', 0, 'InformÃ¡tica'),
(4, '3-41', 0, ' EdificaÃ§Ãµes'),
(5, '3-31', 0, ' ComÃ©rcio'),
(6, '3-11', 0, ' AdministraÃ§Ã£o'),
(7, '3-21', 0, ' Alimentos'),
(8, '3-22', 0, ' Alimentos'),
(9, '3-32', 0, ' ComÃ©rcio'),
(10, '3-33', 0, ' ComÃ©rcio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `email`, `senha`) VALUES
(1, 'Fabiano Daros Freitas', 'fabinho_070', 'freitasfabiano08@gmail.com', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
