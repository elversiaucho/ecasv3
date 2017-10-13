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


-- Volcando estructura para tabla dane_ecas_v2.mtra_colegios
CREATE TABLE IF NOT EXISTS `mtra_colegios` (
  `Cod_colegio_op` int(11) NOT NULL,
  `SEDE_CODIGO` varchar(50) NOT NULL,
  `COD_DEPTO` varchar(3) NOT NULL,
  `DEPARTAMENTO` varchar(50) NOT NULL,
  `COD_MUNI` varchar(5) NOT NULL,
  `MUNICIPIO` varchar(50) NOT NULL,
  `AREA` varchar(20) NOT NULL,
  `SECTOR` varchar(20) NOT NULL,
  `SEDE_NOMBRE` varchar(100) NOT NULL,
  `SEDE_NIT` varchar(50) NOT NULL,
  `SEDE_DIRECCION` varchar(200) DEFAULT NULL,
  `SEDE_TELEFONO` varchar(20) DEFAULT NULL,
  `SEDE_TELEFONO1` varchar(20) DEFAULT NULL,
  `SEDE_EMAIL` varchar(100) DEFAULT NULL,
  `SEDE_SITIOWEB` varchar(100) DEFAULT NULL,
  `CALENDARIO` varchar(20) DEFAULT NULL,
  `GRADO6` int(2) DEFAULT NULL,
  `GRADO7` int(2) DEFAULT NULL,
  `GRADO8` int(2) DEFAULT NULL,
  `GRADO9` int(2) DEFAULT NULL,
  `GRADO10` int(2) DEFAULT NULL,
  `GRADO11_OMAS` int(2) DEFAULT NULL,
  `Novedad` int(2) DEFAULT NULL,
  `otra_novedad` varchar(100) DEFAULT NULL,
  `Obs_campo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Cod_colegio_op`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla dane_ecas_v2.mtra_colegios: ~24 rows (aproximadamente)
DELETE FROM `mtra_colegios`;
/*!40000 ALTER TABLE `mtra_colegios` DISABLE KEYS */;
INSERT INTO `mtra_colegios` (`Cod_colegio_op`, `SEDE_CODIGO`, `COD_DEPTO`, `DEPARTAMENTO`, `COD_MUNI`, `MUNICIPIO`, `AREA`, `SECTOR`, `SEDE_NOMBRE`, `SEDE_NIT`, `SEDE_DIRECCION`, `SEDE_TELEFONO`, `SEDE_TELEFONO1`, `SEDE_EMAIL`, `SEDE_SITIOWEB`, `CALENDARIO`, `GRADO6`, `GRADO7`, `GRADO8`, `GRADO9`, `GRADO10`, `GRADO11_OMAS`, `Novedad`, `otra_novedad`, `Obs_campo`) VALUES
  (1, '147001051238', '47', 'Magdalena', '47001', 'SANTA MARTA', 'Urbana', 'Oficial', 'IE DIST JACKELINE KENNEDY SEDE 1', '819001282-6', 'KR 16 35 37 BR MARIA EUGENIA', '3043799513', '', 'salunal@hotmail.com', '', 'CALENDARIO A', 1, 1, 1, 0, 0, 0, 0, '', ''),
  (2, '247001000221', '47', 'Magdalena', '47001', 'SANTA MARTA', 'Rural', 'Oficial', 'INSTITUCION EDUCATIVA DISTRITAL NUEVA COLOMBIA', '819003176-2', 'VD PERICO AGUAO KM 58', '31549773370', '', 'iednuevacolombia@gmail.com', '', 'CALENDARIO A', 0, 0, 0, 1, 1, 1, 0, '', ''),
  (3, '247001003564', '47', 'Magdalena', '47001', 'SANTA MARTA', 'Urbana', 'Oficial', 'IE DIST ONCE DE NOVIEMBRE SEDE  5  YUCAL', '819000381-2', 'CL 46 66 16 BR YUCAL', '3015959253', '', 'ied11denoviembre@hotmail.com', '', 'CALENDARIO A', 1, 1, 1, 0, 0, 0, 0, '', ''),
  (4, '147001053133', '47', 'Magdalena', '47001', 'SANTA MARTA', 'Urbana', 'Oficial', 'INTITUCI?N EDUCATIVA DISTRITAL LICEO  SAMARIO', '819005887-1', 'CL 27 7 B 111 BR TAMINACA', '4350468', '', 'iedliseosamario@hotmail.com', '', 'CALENDARIO A', 0, 0, 0, 1, 1, 1, 0, '', ''),
  (5, '247001001472', '47', 'Magdalena', '47001', 'SANTA MARTA', 'Rural', 'Oficial', 'INSTITUCION EDUCATIVA DISTRITAL T?CNICA ECOLOGICA LA REVUELTA', '819006517-4', 'VD LA REVUELTA KM 27', '3008170900', '', 'carloscorreaperez@yahoo.com.mx', '', 'CALENDARIO A', 1, 1, 1, 0, 0, 0, 0, '', ''),
  (6, '147001053567', '47', 'Magdalena', '47001', 'SANTA MARTA', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVA DISTRITAL DE LA PAZ', '816000639-6', 'CL 108 10 Y 12 BR LA PAZ', '3104906815', '4382777', 'lizeth.diaz@pinoverde.co', '', 'CALENDARIO A', 0, 0, 0, 1, 1, 1, 0, '', ''),
  (7, '154001007944', '54', 'Norte de Santander', '54001', 'CUCUTA', 'Urbana', 'Oficial', 'COLEGIO  ANDRES BELLO', '800188261-5', 'AV 7A 7AN 7 06 BR SEVILLA', '5791264', '5791264', 'col_andresbello@yahoo.es', 'www.colandresbello.edu.co', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
  (8, '154001004732', '54', 'Norte de Santander', '54001', 'CUCUTA', 'Urbana', 'Oficial', 'COLEGIO CARLOS PEREZ ESCALANTE', '900041241-9', 'CL AV 13 226 2 BR SAN LUIS', '5766588', '5764075', 'colcarlosperez@yahoo.es', '', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
  (9, '154001004724', '54', 'Norte de Santander', '54001', 'CUCUTA', 'Urbana', 'Oficial', 'INSTITUTO TECNICO  ALEJANDRO GUTIERREZ CALDERON', '800125192-5', 'CL 11 22 40 BR CUNDINAMARCA', '5821586', '5821259', 'colaleguti@yahoo.es', '', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
  (10, '154001004333', '54', 'Norte de Santander', '54001', 'CUCUTA', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVA CARLOS RAMIREZ PARIS', '807007191-8', 'BR ANTONIA SANTOS UR 51 31 CL 18 AV 51', '5734514', '', 'iecarlosramirezparis@gmail.com', '', 'CALENDARIO A', 0, 1, 0, 0, 1, 1, 0, '', ''),
  (11, '154001003779', '54', 'Norte de Santander', '54001', 'CUCUTA', 'Urbana', 'Oficial', 'COL INTEG JUAN ATALAYA', '890503221-1', 'CL 6N 26 118 BR TUCUNARE', '5785588', '5785557', 'coljuanatalaya@yahoo.es', '', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
  (12, '154001000796', '54', 'Norte de Santander', '54001', 'CUCUTA', 'Urbana', 'Oficial', 'ESCUELA PABLO VI N 43', '900068461-1', 'AV 2 6 41 BR LA VICTORIA', '5815139', '', 'coord.pablosextom@gmail.com', '', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
  (13, '166001002886', '66', 'Risaralda', '66001', 'PEREIRA', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVA LENINGRADO', '816002832-0', 'KR 28 80 00 BR LENINGRADO', '3373653', '3373653', 'leningrado@leningrado.edu.co', 'www.leningrado.edu.co', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
  (14, '166001004617', '66', 'Risaralda', '66001', 'PEREIRA', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVA  EL DORADO', '816006283-5', 'BR EL DORADO MZ 1 CS 0', '3126036', '', 'ie_eldorado@hotmail.com', '', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
  (15, '266001005928', '66', 'Risaralda', '66001', 'PEREIRA', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVA CARLOS EDUARDO VASCO', '81600409-6', 'BR SAN MARCOS UR MORELIA KM 4', '3235461', '3235480', 'carloseduardovasco1@gmail.com', '', 'CALENDARIO A', 1, 0, 1, 1, 0, 0, 0, '', ''),
  (16, '166001002916', '66', 'Risaralda', '66001', 'PEREIRA', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVA INSTITUTO KENNEDY', '891411813-8', 'KR 12 9 E 12 BR KENNEDY', '3314546', '3314620', 'institutokennedy.edu@gmail.com', 'institutokennedypereira.wordpress.com', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
  (17, '266001005499', '66', 'Risaralda', '66001', 'PEREIRA', 'Rural', 'Oficial', 'LEONIDAS TOBON MARQUEZ', '816002999-1', 'VD CERRITOS KM 14', '3132302', '', 'comunitariocerritos@gmail.com', '', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
  (18, '166001003572', '66', 'Risaralda', '66001', 'PEREIRA', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVA HERNANDO VELEZ MARULANDA', '891411960-2', 'KR 7 BIS 2 13 BR HERNANDO VELEZ MARULANDA', '3315125', '', 'iehernandovelez@gmai.com', '', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
  (19, '168001001025', '68', 'Santander', '68001', 'BUCARAMANGA', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVA LAS AMERICAS', '804003902-9', 'CL 33 31 16 BR ALVAREZ', '6340088', '6329166', 'ieamericasbucaramanga@gmail.com', '', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
  (20, '168001001408', '68', 'Santander', '68001', 'BUCARAMANGA', 'Urbana', 'Oficial', 'LICEO PATRIA', '804011722-3', 'KR 33 BR SAN ALONSO', '6453048', '6322350', 'liceopatria@gmail.com', '', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
  (21, '168001003591', '68', 'Santander', '68001', 'BUCARAMANGA', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVO INEM CUSTODIO GARCIA ROVIRA', '804001555-7', 'KR 19A 104 56 BR PROVENZA', '6361099', '', 'rectoriainembucaramanga@gmail.com', '', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
  (22, '168001006396', '68', 'Santander', '68001', 'BUCARAMANGA', 'Urbana', 'Oficial', 'INSTITUTO EDUCATIVO GUSTAVO COTE URIBE', '804010823-4', 'KR 5 15 DN 23 BR MAR?A PAZ', '6732742', '6732742', 'coteuribe25@yahoo.com', 'www.colegiogustavocoteuribe.edu.co', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
  (23, '168001004580', '68', 'Santander', '68001', 'BUCARAMANGA', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVO CENTRO PILOTO SIMON BOLIVAR', '8040000048-1', 'CT 20 11 83 BR MUTUALIDAD', '6714527', '6718145', 'cpsbolivar@hotmail.com', '', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
  (24, '168001007627', '68', 'Santander', '68001', 'BUCARAMANGA', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVA BICENTENARIO DE LA INDEPENDENCIA DE LA REPUBLICA DE COLOMBI', '900272394-8', 'BR ALVAREZ UR KR 43 34A11', '6450054', '6450054', 'iebicentenario@gmail.com', 'www.colbicentenario.com', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', '');
/*!40000 ALTER TABLE `mtra_colegios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
