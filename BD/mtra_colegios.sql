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
	(1, '305001005991', '5', 'Antioquia', '5001', 'MEDELLIN', 'Urbana', 'No Oficial', 'COLEGIO GIMNASIO LOS CEDROS', '890981525-2', 'KR 25 6 105 BR POBLADO', '2669966', '3186060', 'rectoria@cedros.edu.co', 'www.gimnasioloscedros.net', 'CALENDARIO A', 1, 1, 0, 1, 0, 1, 0, '', ''),
	(2, '305001025592', '5', 'Antioquia', '5001', 'MEDELLIN', 'Urbana', 'No Oficial', 'COLEGIO EMPRESARIAL', '800055169-4', 'AC 42 S 69 58 BR VILLA LOMA PRADITO PARTE ALTA', '4444262', '', 'empresarial@coomulsap.com', 'www.coomulsap.com', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
	(3, '105001001716', '5', 'Antioquia', '5001', 'MEDELLIN', 'Urbana', 'Oficial', 'INSTITUCIÓN EDUCATIVA SANTA CATALINA DE SENA', '900707080-1', 'CL 1 SUR 29 300', '3541437', '', 'ie.santacatalina@medellin.gov.co', '', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
	(4, '105001006530', '5', 'Antioquia', '5001', 'MEDELLIN', 'Urbana', 'Oficial', 'ESCUELA PEDRO J GOMEZ', '811021743-6', 'KR 118 39 DA 85', '4484845', '2536425', 'ie.eduardosantos@medellin.gov.co', 'www.ieduardosantos.edu.co', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
	(5, '105001017876', '5', 'Antioquia', '5001', 'MEDELLIN', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVA FRANCISCO LUIS HERNANDEZ  BETANCUR', '811019153-4', 'CL 87 50AA 21 BR ARANJUEZ', '4448971', '', 'ie.franciscoluishern@medellin.gov.co', 'www.franciscoluis.edu.co', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
	(6, '305001018839', '5', 'Antioquia', '5001', 'MEDELLIN', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVA MADRE LAURA', '811021967-9', 'CL 45 22A8 BR BUENOS AIRES', '2690627', '2690627', 'ie.madrelaura@hotmail.com', 'www.iemadrelaura.edu.co', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
	(7, '308001000297', '8', 'Atlántico', '8001', 'BARRANQUILLA', 'Urbana', 'No Oficial', 'COLEGIO BIFFI LA SALLE', '890901130-5', 'CL 85 53 71 BARRIO RIOMAR', '3586807', '3576083', 'sandra.gutierrez@delasalle.edu.co', 'www.biffilasalle.edu.co', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
	(8, '308001007356', '8', 'Atlántico', '8001', 'BARRANQUILLA', 'Urbana', 'No Oficial', 'INSTITUTO COLOMBIANO DE EDUCACION PARA EL TALENTO HUMANO ESPECIALIZADO ICETEC', '900124580-8', 'CL 42 3C 07 3', '3873864', '3855614', 'colicetec@gmail.com', '', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
	(9, '308001074126', '8', 'Atlántico', '8001', 'BARRANQUILLA', 'Urbana', 'No Oficial', 'INSTITUCION EDUCATIVA PENTECOSTAL', '900135721-7', 'BR BOSTON CL 57 KR 43 EN 131', '3511702', '', 'insep016@gmail.com', '', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
	(10, '108001002606', '8', 'Atlántico', '8001', 'BARRANQUILLA', 'Urbana', 'Oficial', 'INSTITUTO DISTRITAL  DE EXPERIENCIAS PEDAGOGICAS  IDEP', '802007336-0', 'CL 55 43 BIS 77 BR BOSTON', '3720369', '', 'idep06@hotmail.com', '', 'CALENDARIO A', 0, 1, 0, 0, 1, 1, 0, '', ''),
	(11, '108001003688', '8', 'Atlántico', '8001', 'BARRANQUILLA', 'Urbana', 'Oficial', 'INSTITUTO DISTRITAL TECNICO MEIRA DEL MAR', '802000318-6', 'KR 13 56 21', '3657544', '3657829', 'meiradelmat@sedbarranquilla.gov.co', 'www.idtmeiravirtual.edu.ci', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
	(12, '108001073392', '8', 'Atlántico', '8001', 'BARRANQUILLA', 'Urbana', 'Oficial', 'IE DIST CIUDADELA ESTUDIANTIL', '802001221-5', 'BR CHERASSI UR KR 1A N 4749', '3629252', '3629252', 'insedices4@hotmail.com', '', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
	(13, '317001001861', '17', 'Caldas', '17001', 'MANIZALES', 'Urbana', 'No Oficial', 'LICEO ARQUIDIOCESANO DE NUESTRA SEÑORA MASCULINO', '890801018-9', 'KR 21 27 33 BR CENTRO', '8848249', '8849109', 'liceoarquidiocesano@une.net.co', '', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
	(14, '317001007142', '17', 'Caldas', '17001', 'MANIZALES', 'Urbana', 'No Oficial', 'GIMNASIO CAMPESTRE LA CONSOLATA', '860007368-7', 'BR MALTERIA ZN', '8741777', '8741784', 'gimconsolata@hotmail.com', 'www.gimnasiolaconsolata.edu.co', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
	(15, '117001000769', '17', 'Caldas', '17001', 'MANIZALES', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVO COLEGIO LA ASUNCION SEDE B', '890802582-9', 'CL 51 D 17 15', '8854473', '', 'i.e.asuncionmanizales@hotmail.com', '', 'CALENDARIO A', 1, 0, 1, 1, 0, 0, 0, '', ''),
	(16, '117001002290', '17', 'Caldas', '17001', 'MANIZALES', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVA ARANJUEZ', '890807397-9', 'KR 42 71 34', '8784153', '', 'aranjuez.rector@yahoo.com', '', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
	(17, '117001004438', '17', 'Caldas', '17001', 'MANIZALES', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVA SAN JUAN BAUTISTA DE LA SALLE SEDE A', '800184324-2', 'CL 48K 9C 9 14 BR SAN CAYETANO', '8767374', '8767374106', 'lasallemanizaless@gmail.com', 'www.lasallemanizales.edu.co', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
	(18, '117001006902', '17', 'Caldas', '17001', 'MANIZALES', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVA INSTITUTO TECNICO  MARCO FIDEL SUAREZ', '890805037-7', 'KR 10 12 B 65 BR CAMPOHERMOSO', '8831476', '8805471', 'itmarcofidelsuarez@gmail.com', '', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
	(19, '352001000873', '52', 'Nariño', '52001', 'PASTO', 'Urbana', 'No Oficial', 'LICEO JOSE FELIX JIMENEZ', '814000317-2', 'BR TEJAR ET III CL 19', '7305121', '7302552', 'liceojosefelixjimenez@live.com', '', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
	(20, '352001003201', '52', 'Nariño', '52001', 'PASTO', 'Urbana', 'No Oficial', 'COLEGIO LA INMACULADA', '814000112-1', 'AV CHAMPAGNAT KR 14 N 15 100', '7219917', '7211945', 'colainpasto@gmail.com', '', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
	(21, '352001006677', '52', 'Nariño', '52001', 'PASTO', 'Urbana', 'No Oficial', 'INSTITUCIÓN EDUCATIVA SIMON BOLIVAR', '30742919-6', 'AK 7 21 26', '7298170', '', 'i.e.m.simon.bolivar@gmail.com', '', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
	(22, '152001000785', '52', 'Nariño', '52001', 'PASTO', 'Urbana', 'Oficial', 'INSTITUCION EDUCATIVA MUNICIPAL LUIS DELFIN INSUASTY RODRIGUEZ  INEM', '800168203-2', 'BR MIJITAYO SEC', '7235141', '7237356', 'rectoriainempasto@gmail.com', 'www.inempasto.edu.co', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', ''),
	(23, '152001002842', '52', 'Nariño', '52001', 'PASTO', 'Urbana', 'Oficial', 'INSTITUCIÓN EDUCATIVA MUNICIPAL MERCEDARIO', '891224071-8', 'CL 21D 1 25 BR MERCEDARIO', '7303859', '7303859', 'iemmercedario@sempasto.gov.co', '', 'CALENDARIO A', 1, 0, 1, 0, 1, 0, 0, '', ''),
	(24, '152001005051', '52', 'Nariño', '52001', 'PASTO', 'Urbana', 'Oficial', 'INSTITUCÓN EDUCATIVA MUNICIPAL CIUDADELA EDUCATIVA DE PASTO', '814001128-1', 'BR VILLA FLOR 2 CL 20Y20A', '7308142', '7307963', 'iemciudadeladepasto@sempasto.gov.co', '', 'CALENDARIO A', 0, 1, 0, 1, 0, 1, 0, '', '');
/*!40000 ALTER TABLE `mtra_colegios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
