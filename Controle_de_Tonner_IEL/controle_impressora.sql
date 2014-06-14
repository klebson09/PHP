-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 06-Jun-2014 às 18:12
-- Versão do servidor: 5.5.32
-- versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `controle_impressora`
--
CREATE DATABASE IF NOT EXISTS `controle_impressora` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `controle_impressora`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `brother`
--

CREATE TABLE IF NOT EXISTS `brother` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) NOT NULL,
  `quantidade` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `brother`
--

INSERT INTO `brother` (`id`, `tipo`, `quantidade`) VALUES
(1, 'toner', 555),
(2, 'cilindro', 22);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
