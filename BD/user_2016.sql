-- --------------------------------------------------------
-- Host:                         192.168.1.200
-- Versión del servidor:         5.1.73-log - Source distribution
-- SO del servidor:              redhat-linux-gnu
-- HeidiSQL Versión:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para dane_ecas_v2
CREATE DATABASE IF NOT EXISTS `dane_ecas_v2` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `dane_ecas_v2`;


-- Volcando estructura para tabla dane_ecas_v2.user_2016
CREATE TABLE IF NOT EXISTS `user_2016` (
  `USUARIO` char(20) NOT NULL,
  `NOMBRE` char(50) NOT NULL,
  `DOCUMENTO` char(15) NOT NULL,
  `COD_MUNI` varchar(5) NOT NULL,
  `CIUDAD` varchar(50) NOT NULL,
  `ROL` int(2) NOT NULL,
  `CLAVE` char(50) NOT NULL,
  `CORREO` char(50) DEFAULT NULL,
  PRIMARY KEY (`USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla dane_ecas_v2.user_2016: ~16 rows (aproximadamente)
DELETE FROM `user_2016`;
/*!40000 ALTER TABLE `user_2016` DISABLE KEYS */;
INSERT INTO `user_2016` (`USUARIO`, `NOMBRE`, `DOCUMENTO`, `COD_MUNI`, `CIUDAD`, `ROL`, `CLAVE`, `CORREO`) VALUES
	('cachembi', 'USUARIO monitor PARA PRUEBA sistemas', '5978300', '68001', 'BUCARAMANGA', 1, '5eb88534e2ff2268e3c5127f1957a34a', 'cachembi@dane.gov.co'),
	('cceballosm', 'Carolina Ceballos Medina', '31.320.385', '47001', 'SANTA MARTA', 2, '01c0583d5cca5ae7e8be3d679ebf0c2f', 'cceballosm@dane.gov.co'),
	('coordinador', 'coordinador Monica Jaimes', '369852', '47001', 'SANTA MARTA', 1, 'c59dce88f7b8727d0da75cab0e350961', 'mjjaimesm@dane.gov.co'),
	('coordpasto', 'USUARIO coordinador PRUEBA LOGISTICA', '5978300', '54001', 'CUCUTA', 1, '04ebeb272db8c757781abe816f8fc4d1', 'mjjaimesm@dane.gov.co'),
	('danecentral', 'USUARIO DANE CENTRAL', '5978300', '68001', 'BUCARAMANGA', 3, 'acab776a6d95c8a7eb2283a813ec4963', 'logistica@dane.gov.co'),
	('dcpenab', 'Diana Carolina Peña Bolívar', '53.008.713', '47001', 'SANTA MARTA', 1, 'a7e9e5dade9e23503ccf9909e532b68f', 'dcpenab@dane.gov.co'),
	('ecaslg', 'Pruebas Logística', '5978300', '68001', 'BUCARAMANGA', 2, '5eb88534e2ff2268e3c5127f1957a34a', 'contactodane@dane.gov.co'),
	('Eduard13', 'Eduardo Freire', '3574196', '66001', 'PEREIRA', 1, '480a3202b8f872effaae5c9d89201cf9', 'eefreired@dane.gov.co'),
	('elver', 'Elver Siauchó', '7179110', '68001', 'BUCARAMANGA', 3, 'bcdce08e2c1ff36daa3e389d76d5f631', 'easiauchor@dane.gov.co'),
	('jlfzorrom', 'Julieth Lina Fernanda Zorro Melo', '1.026.563.509', '68001', 'BUCARAMANGA', 2, '421d3e44ed93db44f5bb53a5871b3a7e', 'jlfzorrom@dane.gov.co'),
	('lesanchezm', 'Luis Edgar Sanchez Martinez', '9999999', '47001', 'SANTA MARTA', 2, '2c1732d0f514aef6c3b82b360404d19f', 'lesanchezm@dane.gov.co'),
	('monitor', 'MONITOR PARA PRUEBAS LOGISTICA', '5978300', '47001', 'SANTA MARTA', 2, 'f4a7b0f8ee05a2fb60cb9f7165692c32', 'mjjaimesm@dane.gov.co'),
	('monitorpasto', 'USUARIO monitor PARA PRUEBA LOGISTICA', '5978300', '54001', 'CUCUTA', 2, '88c14a9f5ccf93ef4b68f000f48e84c7', 'mjjaimesm@dane.gov.co'),
	('olgaar13', 'Olga Ardila', '178521', '66001', 'PEREIRA', 1, 'fdaf01d8e651f7520529c57ce3d0a628', 'olardilag@dane.gov.co'),
	('olgalu131', 'OLGA LUCIA SANTOS RAMIREZ', '1143324050', '66001', 'PEREIRA', 2, '79e4b4438aba2b6d8e1caf9568e73e12', 'olgasantosramirez@gmail.com'),
	('pruebaecas', 'USUARIO CENTRAL PARA PRUEBA LOGISTICA', '5978300', '68001', 'BUCARAMANGA', 3, 'ee2ec3cc66427bb422894495068222a8', 'mjjaimesm@dane.gov.co');
/*!40000 ALTER TABLE `user_2016` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
