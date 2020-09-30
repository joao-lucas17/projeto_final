-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.14-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para banco_exemplo
CREATE DATABASE IF NOT EXISTS `banco_exemplo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `banco_exemplo`;

-- Copiando estrutura para tabela banco_exemplo.alimento
CREATE TABLE IF NOT EXISTS `alimento` (
  `idalimento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idalimento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco_exemplo.alimento: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `alimento` DISABLE KEYS */;
REPLACE INTO `alimento` (`idalimento`, `nome`) VALUES
	(1, 'Arroz'),
	(2, 'Feijao'),
	(3, 'Saladas');
/*!40000 ALTER TABLE `alimento` ENABLE KEYS */;

-- Copiando estrutura para tabela banco_exemplo.cardapio
CREATE TABLE IF NOT EXISTS `cardapio` (
  `idcardapio` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idcardapio`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco_exemplo.cardapio: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `cardapio` DISABLE KEYS */;
REPLACE INTO `cardapio` (`idcardapio`, `nome`) VALUES
	(5, 'Strogonoff'),
	(6, 'Purê de batata'),
	(7, 'Lasanha'),
	(8, 'Arroz gratinado com atum'),
	(9, 'Carne moída de forno'),
	(10, 'Parafuso com molho rosé e atum'),
	(11, 'Charuto de carne moída');
/*!40000 ALTER TABLE `cardapio` ENABLE KEYS */;

-- Copiando estrutura para tabela banco_exemplo.cardapio_alimento
CREATE TABLE IF NOT EXISTS `cardapio_alimento` (
  `idcardapio_alimento` int(11) NOT NULL AUTO_INCREMENT,
  `cardapio_idcardapio` int(11) DEFAULT NULL,
  `alimento_idalimento` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcardapio_alimento`),
  KEY `cardapio_idcardapio` (`cardapio_idcardapio`),
  KEY `alimento_idalimento` (`alimento_idalimento`),
  CONSTRAINT `cardapio_alimento_ibfk_1` FOREIGN KEY (`cardapio_idcardapio`) REFERENCES `cardapio` (`idcardapio`),
  CONSTRAINT `cardapio_alimento_ibfk_2` FOREIGN KEY (`alimento_idalimento`) REFERENCES `alimento` (`idalimento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco_exemplo.cardapio_alimento: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cardapio_alimento` DISABLE KEYS */;
/*!40000 ALTER TABLE `cardapio_alimento` ENABLE KEYS */;

-- Copiando estrutura para tabela banco_exemplo.desperdicio
CREATE TABLE IF NOT EXISTS `desperdicio` (
  `iddesperdicio` int(11) NOT NULL AUTO_INCREMENT,
  `peso` varchar(50) DEFAULT NULL,
  `refeicao_idrefeicao` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddesperdicio`),
  KEY `refeicao_idrefeicao` (`refeicao_idrefeicao`),
  CONSTRAINT `desperdicio_ibfk_1` FOREIGN KEY (`refeicao_idrefeicao`) REFERENCES `refeicao` (`idrefeicao`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco_exemplo.desperdicio: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `desperdicio` DISABLE KEYS */;
REPLACE INTO `desperdicio` (`iddesperdicio`, `peso`, `refeicao_idrefeicao`) VALUES
	(1, '150 kg', 4),
	(2, '200 kg', 6),
	(3, '215 kg', 7),
	(4, '156 kg', 8),
	(5, '230 kg', 9),
	(6, '231 kg', 10),
	(7, '192 kg', 11),
	(8, '187 kg', 12),
	(9, '271 kg', 13),
	(10, '199 kg', 14),
	(11, '222 kg', 15);
/*!40000 ALTER TABLE `desperdicio` ENABLE KEYS */;

-- Copiando estrutura para tabela banco_exemplo.refeicao
CREATE TABLE IF NOT EXISTS `refeicao` (
  `idrefeicao` int(11) NOT NULL AUTO_INCREMENT,
  `dia` date DEFAULT NULL,
  `tipo` enum('Almoço','Jantar') DEFAULT NULL,
  `observacao` text DEFAULT NULL,
  `quantidade_pessoas` int(11) DEFAULT NULL,
  `cardapio_idcardapio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idrefeicao`),
  KEY `cardapio_idcardapio` (`cardapio_idcardapio`),
  CONSTRAINT `refeicao_ibfk_1` FOREIGN KEY (`cardapio_idcardapio`) REFERENCES `cardapio` (`idcardapio`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco_exemplo.refeicao: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `refeicao` DISABLE KEYS */;
REPLACE INTO `refeicao` (`idrefeicao`, `dia`, `tipo`, `observacao`, `quantidade_pessoas`, `cardapio_idcardapio`) VALUES
	(4, '2020-09-07', 'Almoço', '<p>\n	Teve batata frita</p>\n', 200, 5),
	(6, '2020-09-15', 'Almoço', '<p>\n	Dia anterior foi feriado</p>\n', 112, 6),
	(7, '2020-09-16', 'Jantar', '<p>\n	Um dia antes foi feriado</p>\n', 59, 9),
	(8, '2020-09-17', 'Almoço', NULL, 150, 11),
	(9, '2020-09-18', 'Almoço', '<p>\n	O refeit&oacute;rio teve sua lota&ccedil;&atilde;o m&aacute;xima</p>\n', 150, 5),
	(10, '2020-09-19', 'Almoço', '<p>\n	Estava chovendo muito</p>\n', 39, 8),
	(11, '2020-09-20', 'Jantar', NULL, 34, 8),
	(12, '2020-09-21', 'Almoço', '<p>\n	Anivers&aacute;rio da escola</p>\n', 245, 7),
	(13, '2020-09-22', 'Jantar', NULL, 51, 9),
	(14, '2020-09-23', 'Almoço', '<p>\n	Teve doce de sobremesa</p>\n', 202, 6),
	(15, '2020-09-24', 'Jantar', NULL, 56, 9),
	(16, '2020-09-25', 'Almoço', '<p>\n	Choveu bastante</p>\n', 132, 10),
	(17, '2020-09-26', 'Almoço', '<p>\n	O arroz queimou&nbsp;</p>\n', 124, 8),
	(18, '2020-09-27', 'Jantar', '<p>\n	Teve peixe frito</p>\n', 35, 10),
	(19, '2020-09-28', 'Almoço', '<p>\n	A comida atrasou para sair</p>\n', 106, 11),
	(20, '2020-09-29', 'Jantar', '<p>\n	Teve um evento especial no bar do Nen&ecirc;</p>\n', 26, 6),
	(21, '2020-09-29', 'Almoço', '<p>\n	Come&ccedil;ou o campeonato de interclasse</p>\n', 220, 7),
	(22, '2020-09-30', 'Jantar', '<p>\n	Hoje veio a quantidade m&eacute;dia de alunos para Jantar</p>\n', 54, 11),
	(23, '2020-10-01', 'Almoço', '<p>\n	Nada a considerar</p>\n', 176, 6),
	(24, '2020-09-01', 'Jantar', '<p>\n	Nada a considerar</p>\n', 58, 11),
	(25, '2020-09-02', 'Almoço', '<p>\n	Come&ccedil;o a semana de inform&aacute;tica. Houve sobremesa hoje</p>\n', 223, 5);
/*!40000 ALTER TABLE `refeicao` ENABLE KEYS */;

-- Copiando estrutura para tabela banco_exemplo.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `tipo` enum('Administrador','Servidor','Nutricionista') DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco_exemplo.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
REPLACE INTO `usuario` (`idusuario`, `nome`, `login`, `senha`, `tipo`, `email`) VALUES
	(39, 'Rafaela', '123.456.789-12', 'e10adc3949ba59abbe56e057f20f883e', 'Nutricionista', 'joao');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
