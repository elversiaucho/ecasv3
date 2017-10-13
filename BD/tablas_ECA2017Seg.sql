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


-- Volcando estructura para tabla dane_ecas_v2.asig_monitor
CREATE TABLE IF NOT EXISTS `asig_monitor` (
  `id_asignacion` varchar(50) NOT NULL,
  `cod_colegio` varchar(20) NOT NULL,
  `grado_asignado` int(11) NOT NULL,
  `curso_nro` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL,
  `us_monitor` char(20) DEFAULT NULL,
  `us_asignador` char(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_asignacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabla de asignacion de colegios al monitor';

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para procedimiento dane_ecas_v2.cursos10
DELIMITER //
CREATE DEFINER=`dimpe`@`%` PROCEDURE `cursos10`()
BEGIN
 declare valor int default 0;
 declare v1 int default 0;
 declare ciclo1 int default 0;
 declare cont int default 1; 
 declare colegio varchar(20) default '';

 declare tot_colegios int default 0;
 
 set @tot_colegios =(SELECT count(*) FROM mtra_colegios);
 set ciclo1 = @tot_colegios;

  WHILE ciclo1 > 0 DO
     set @valor =(SELECT GRADO10 FROM mtra_colegios WHERE Cod_colegio_op = ciclo1);
   set colegio =(SELECT SEDE_CODIGO FROM mtra_colegios WHERE Cod_colegio_op = ciclo1);
   #set colegio = @colegio;
   set v1 = @valor;
    WHILE v1 > 0 DO #inserta cursos para asignar grado 10
    #
    INSERT INTO asig_monitor (`id_asignacion`, `cod_colegio`,`grado_asignado`, `curso_nro`, `estado`, `us_monitor`, `us_asignador`, `fecha`)
     VALUES (CONCAT(ciclo1,'_10_',cont), colegio, 10,cont, 0 ,'', '', NULL);
    #
      set cont = cont + 1;
      SET v1 = v1 - 1;
    END WHILE;
    set cont = 1;
  set ciclo1 = ciclo1 - 1;
   END WHILE;
    
  set @valor = cont;
 #select @tot_colegios;
END//
DELIMITER ;


-- Volcando estructura para procedimiento dane_ecas_v2.cursos11
DELIMITER //
CREATE DEFINER=`dimpe`@`%` PROCEDURE `cursos11`()
BEGIN
 declare valor int default 0;
 declare v1 int default 0;
 declare ciclo1 int default 0;
 declare cont int default 1; 
 declare colegio varchar(20) default '';

 declare tot_colegios int default 0;
 
 set @tot_colegios =(SELECT count(*) FROM mtra_colegios);
 set ciclo1 = @tot_colegios;

  WHILE ciclo1 > 0 DO
     set @valor =(SELECT GRADO11_OMAS FROM mtra_colegios WHERE Cod_colegio_op = ciclo1);
   set colegio =(SELECT SEDE_CODIGO FROM mtra_colegios WHERE Cod_colegio_op = ciclo1);
   #set colegio = @colegio;
   set v1 = @valor;
    WHILE v1 > 0 DO #inserta cursos para asignar grado 11
    #
    INSERT INTO asig_monitor (`id_asignacion`, `cod_colegio`,`grado_asignado`, `curso_nro`, `estado`, `us_monitor`, `us_asignador`, `fecha`)
     VALUES (CONCAT(ciclo1,'_11_',cont), colegio, 11,cont, 0 ,'', '', NULL);
    #
      set cont = cont + 1;
      SET v1 = v1 - 1;
    END WHILE;
    set cont = 1;
  set ciclo1 = ciclo1 - 1;
   END WHILE;
    
  set @valor = cont;
 #select @tot_colegios;
END//
DELIMITER ;


-- Volcando estructura para procedimiento dane_ecas_v2.cursos6
DELIMITER //
CREATE DEFINER=`dimpe`@`%` PROCEDURE `cursos6`()
BEGIN
 declare valor int default 0;
 declare v1 int default 0;
 declare ciclo1 int default 0;
 declare cont int default 1; 
 declare colegio varchar(20) default '';

 declare tot_colegios int default 0;
 
 set @tot_colegios =(SELECT count(*) FROM mtra_colegios);
 set ciclo1 = @tot_colegios;

  WHILE ciclo1 > 0 DO
     set @valor =(SELECT GRADO6 FROM mtra_colegios WHERE Cod_colegio_op = ciclo1);
   set colegio =(SELECT SEDE_CODIGO FROM mtra_colegios WHERE Cod_colegio_op = ciclo1);
   #set colegio = @colegio;
   set v1 = @valor;
    WHILE v1 > 0 DO #inserta cursos para asignar grado 6
    #
    INSERT INTO asig_monitor (`id_asignacion`, `cod_colegio`,`grado_asignado`, `curso_nro`, `estado`, `us_monitor`, `us_asignador`, `fecha`)
     VALUES (CONCAT(ciclo1,'_6_',cont), colegio, 6,cont, 0 ,'', '', NULL);
    #
      set cont = cont + 1;
      SET v1 = v1 - 1;
    END WHILE;
    set cont = 1;
  set ciclo1 = ciclo1 - 1;
   END WHILE;
    
  set @valor = cont;
 #select @tot_colegios;
END//
DELIMITER ;


-- Volcando estructura para procedimiento dane_ecas_v2.cursos7
DELIMITER //
CREATE DEFINER=`dimpe`@`%` PROCEDURE `cursos7`()
BEGIN
 declare valor int default 0;
 declare v1 int default 0;
 declare ciclo1 int default 0;
 declare cont int default 1; 
 declare colegio varchar(20) default '';

 declare tot_colegios int default 0;
 
 set @tot_colegios =(SELECT count(*) FROM mtra_colegios);
 set ciclo1 = @tot_colegios;

  WHILE ciclo1 > 0 DO
     set @valor =(SELECT GRADO7 FROM mtra_colegios WHERE Cod_colegio_op = ciclo1);
   set colegio =(SELECT SEDE_CODIGO FROM mtra_colegios WHERE Cod_colegio_op = ciclo1);
   #set colegio = @colegio;
   set v1 = @valor;
    WHILE v1 > 0 DO #inserta cursos para asignar grado 7
    #
    INSERT INTO asig_monitor (`id_asignacion`, `cod_colegio`,`grado_asignado`, `curso_nro`, `estado`, `us_monitor`, `us_asignador`, `fecha`)
     VALUES (CONCAT(ciclo1,'_7_',cont), colegio, 7,cont, 0 ,'', '', NULL);
    #
      set cont = cont + 1;
      SET v1 = v1 - 1;
    END WHILE;
    set cont = 1;
  set ciclo1 = ciclo1 - 1;
   END WHILE;
    
  set @valor = cont;
 #select @tot_colegios;
END//
DELIMITER ;


-- Volcando estructura para procedimiento dane_ecas_v2.cursos8
DELIMITER //
CREATE DEFINER=`dimpe`@`%` PROCEDURE `cursos8`()
BEGIN
 declare valor int default 0;
 declare v1 int default 0;
 declare ciclo1 int default 0;
 declare cont int default 1; 
 declare colegio varchar(20) default '';

 declare tot_colegios int default 0;
 
 set @tot_colegios =(SELECT count(*) FROM mtra_colegios);
 set ciclo1 = @tot_colegios;

  WHILE ciclo1 > 0 DO
     set @valor =(SELECT GRADO8 FROM mtra_colegios WHERE Cod_colegio_op = ciclo1);
   set colegio =(SELECT SEDE_CODIGO FROM mtra_colegios WHERE Cod_colegio_op = ciclo1);
   #set colegio = @colegio;
   set v1 = @valor;
    WHILE v1 > 0 DO #inserta cursos para asignar grado 8
    #
    INSERT INTO asig_monitor (`id_asignacion`, `cod_colegio`,`grado_asignado`, `curso_nro`, `estado`, `us_monitor`, `us_asignador`, `fecha`)
     VALUES (CONCAT(ciclo1,'_8_',cont), colegio, 8,cont, 0 ,'', '', NULL);
    #
      set cont = cont + 1;
      SET v1 = v1 - 1;
    END WHILE;
    set cont = 1;
  set ciclo1 = ciclo1 - 1;
   END WHILE;
    
  set @valor = cont;
 #select @tot_colegios;
END//
DELIMITER ;


-- Volcando estructura para procedimiento dane_ecas_v2.cursos9
DELIMITER //
CREATE DEFINER=`dimpe`@`%` PROCEDURE `cursos9`()
BEGIN
 declare valor int default 0;
 declare v1 int default 0;
 declare ciclo1 int default 0;
 declare cont int default 1; 
 declare colegio varchar(20) default '';

 declare tot_colegios int default 0;
 
 set @tot_colegios =(SELECT count(*) FROM mtra_colegios);
 set ciclo1 = @tot_colegios;

  WHILE ciclo1 > 0 DO
     set @valor =(SELECT GRADO9 FROM mtra_colegios WHERE Cod_colegio_op = ciclo1);
   set colegio =(SELECT SEDE_CODIGO FROM mtra_colegios WHERE Cod_colegio_op = ciclo1);
   #set colegio = @colegio;
   set v1 = @valor;
    WHILE v1 > 0 DO #inserta cursos para asignar grado 9
    #
    INSERT INTO asig_monitor (`id_asignacion`, `cod_colegio`,`grado_asignado`, `curso_nro`, `estado`, `us_monitor`, `us_asignador`, `fecha`)
     VALUES (CONCAT(ciclo1,'_9_',cont), colegio, 9,cont, 0 ,'', '', NULL);
    #
      set cont = cont + 1;
      SET v1 = v1 - 1;
    END WHILE;
    set cont = 1;
  set ciclo1 = ciclo1 - 1;
   END WHILE;
    
  set @valor = cont;
 #select @tot_colegios;
END//
DELIMITER ;


-- Volcando estructura para tabla dane_ecas_v2.encuesta3
CREATE TABLE IF NOT EXISTS `encuesta3` (
  `ID_ENCUESTA` varchar(10) NOT NULL,
  `LOTE_ENC` varchar(10) NOT NULL,
  `Cod_col_op` int(11) DEFAULT NULL,
  `USUARIO` varchar(50) NOT NULL,
  `NRO_ENCUESTA` int(11) NOT NULL,
  `ESTADO_ENCUESTA` int(11) DEFAULT NULL,
  `OBSERVACIONES` varchar(200) DEFAULT NULL,
  `SLIDE_NRO` int(11) DEFAULT NULL,
  `A1` int(11) NOT NULL,
  `A2` int(11) NOT NULL,
  `A3` int(11) NOT NULL,
  `A4a` int(11) NOT NULL,
  `A4b` int(11) NOT NULL,
  `A4c` int(11) NOT NULL,
  `A4d` int(11) NOT NULL,
  `A4e` int(11) NOT NULL,
  `A4f` int(11) NOT NULL,
  `A4g` int(11) NOT NULL,
  `A4h` int(11) NOT NULL,
  `A4i` int(11) NOT NULL,
  `A4j` int(11) NOT NULL,
  `A4k` int(11) NOT NULL,
  `A4l` int(11) NOT NULL,
  `A5` int(11) NOT NULL,
  `A6a` int(11) NOT NULL,
  `A6b` int(11) NOT NULL,
  `A6c` int(11) NOT NULL,
  `A6d` int(11) NOT NULL,
  `A6e` int(11) NOT NULL,
  `A7a` int(11) NOT NULL,
  `A7b` int(11) NOT NULL,
  `A7c` int(11) NOT NULL,
  `A7d` int(11) NOT NULL,
  `A7e` int(11) NOT NULL,
  `A7f` int(11) NOT NULL,
  `A7g` int(11) NOT NULL,
  `A7h` int(11) NOT NULL,
  `A7i` int(11) NOT NULL,
  `A7j` int(11) NOT NULL,
  `A8` int(11) NOT NULL,
  `A9` int(11) NOT NULL,
  `A10` int(11) NOT NULL,
  `A11` int(11) NOT NULL,
  `A12` int(2) NOT NULL,
  `A13` int(2) NOT NULL,
  `A14` int(1) NOT NULL,
  `A14_cual` varchar(250) DEFAULT NULL,
  `A15` int(2) NOT NULL,
  `B8a` int(11) NOT NULL,
  `B8b` int(11) NOT NULL,
  `B8c` int(11) NOT NULL,
  `B8d` int(11) NOT NULL,
  `B8e` int(11) NOT NULL,
  `B8f` int(11) NOT NULL,
  `B8g` int(11) NOT NULL,
  `B8h` int(11) NOT NULL,
  `B8i` int(11) NOT NULL,
  `B8j` int(11) NOT NULL,
  `B8k` int(11) NOT NULL,
  `B8l` int(11) NOT NULL,
  `B8m` int(11) NOT NULL,
  `B8n` int(11) NOT NULL,
  `B9a` int(11) NOT NULL,
  `B9b` int(11) NOT NULL,
  `B9c` int(11) NOT NULL,
  `B9d` int(11) NOT NULL,
  `B9e` int(11) NOT NULL,
  `B9f` int(11) NOT NULL,
  `B9g` int(11) NOT NULL,
  `B9h` int(11) NOT NULL,
  `B9i` int(11) NOT NULL,
  `B9j` int(11) NOT NULL,
  `B9k` int(11) NOT NULL,
  `B10a` int(11) NOT NULL,
  `B10b` int(11) NOT NULL,
  `B10c` int(11) NOT NULL,
  `B10d` int(11) NOT NULL,
  `B10e` int(11) NOT NULL,
  `B10f` int(11) NOT NULL,
  `B10g` int(11) NOT NULL,
  `B10h` int(11) NOT NULL,
  `B10i` int(11) NOT NULL,
  `B10j` int(11) NOT NULL,
  `B10k` int(11) NOT NULL,
  `B10l` int(11) NOT NULL,
  `B10m` int(11) NOT NULL,
  `B10n` int(11) NOT NULL,
  `B11` int(11) NOT NULL,
  `B12` int(11) NOT NULL,
  `B13` int(11) NOT NULL,
  `B13_cual` varchar(200) DEFAULT NULL,
  `B14a` int(11) NOT NULL,
  `B14b` int(11) NOT NULL,
  `B14c` int(11) NOT NULL,
  `B14d` int(11) NOT NULL,
  `B14e` int(11) NOT NULL,
  `B14f` int(11) NOT NULL,
  `B15a` int(11) NOT NULL,
  `B15b` int(11) NOT NULL,
  `B15c` int(11) NOT NULL,
  `B15d` int(11) NOT NULL,
  `B15e` int(11) NOT NULL,
  `B15f` int(11) NOT NULL,
  `B15g` int(11) NOT NULL,
  `B15h` int(11) NOT NULL,
  `B15i` int(11) NOT NULL,
  `B15j` int(11) NOT NULL,
  `B15k` int(11) NOT NULL,
  `B15l` int(11) NOT NULL,
  `B15m` int(11) NOT NULL,
  `B15n` int(11) NOT NULL,
  `B15o` int(11) NOT NULL,
  `B15p` int(11) NOT NULL,
  `B15q` int(11) NOT NULL,
  `B15r` int(11) NOT NULL,
  `B15s` int(11) NOT NULL,
  `B15t` int(11) NOT NULL,
  `C16a` int(11) NOT NULL,
  `C16b` int(11) NOT NULL,
  `C16c` int(11) NOT NULL,
  `C16d` int(11) NOT NULL,
  `C16e` int(11) NOT NULL,
  `C16f` int(11) NOT NULL,
  `C16g` int(11) NOT NULL,
  `C16h` int(11) NOT NULL,
  `C16i` int(11) NOT NULL,
  `C16j` int(11) NOT NULL,
  `C16k` int(11) NOT NULL,
  `C16l` int(11) NOT NULL,
  `C16m` int(11) NOT NULL,
  `C16n` int(11) NOT NULL,
  `C16o` int(11) NOT NULL,
  `C16p` int(11) DEFAULT NULL,
  `C17a` int(11) NOT NULL,
  `C17b` int(11) NOT NULL,
  `C17c` int(11) NOT NULL,
  `C17d` int(11) NOT NULL,
  `C17e` int(11) NOT NULL,
  `C17f` int(11) NOT NULL,
  `C17g` int(11) NOT NULL,
  `C17h` int(11) NOT NULL,
  `C17i` int(11) NOT NULL,
  `C18a` int(11) NOT NULL,
  `C18b` int(11) NOT NULL,
  `C18c` int(11) NOT NULL,
  `C18d` int(11) NOT NULL,
  `C18e` int(11) NOT NULL,
  `C18f` int(11) NOT NULL,
  `C18g` int(11) NOT NULL,
  `C18h` int(11) NOT NULL,
  `C18i` int(11) NOT NULL,
  `C18j` int(11) NOT NULL,
  `C18k` int(11) NOT NULL,
  `C18l` int(11) NOT NULL,
  `C18m` int(11) NOT NULL,
  `C18n` int(11) NOT NULL,
  `C18o` int(11) NOT NULL,
  `C18p` int(11) NOT NULL,
  `C18q` int(11) NOT NULL,
  `C18r` int(11) NOT NULL,
  `C19` int(2) NOT NULL,
  `C20` int(2) NOT NULL,
  `C21` int(2) NOT NULL,
  `C22` int(2) NOT NULL,
  `C23` int(2) NOT NULL,
  `C24` int(2) NOT NULL,
  `C25` int(2) NOT NULL,
  `C25a_cual` varchar(100) DEFAULT NULL,
  `C26a` int(2) DEFAULT NULL,
  `C25b_cual` varchar(100) DEFAULT NULL,
  `C26b` int(2) DEFAULT NULL,
  `C25c_cual` varchar(100) DEFAULT NULL,
  `C26c` int(2) DEFAULT NULL,
  `C25d_cual` varchar(100) DEFAULT NULL,
  `C26d` int(2) DEFAULT NULL,
  `C25e_cual` varchar(100) DEFAULT NULL,
  `C26e` int(2) DEFAULT NULL,
  `C25f_cual` varchar(100) DEFAULT NULL,
  `C26f` int(2) DEFAULT NULL,
  `C25g_cual` varchar(100) DEFAULT NULL,
  `C26g` int(2) DEFAULT NULL,
  `C25h_cual` varchar(100) DEFAULT NULL,
  `C26h` int(2) DEFAULT NULL,
  `C25i_cual` varchar(100) DEFAULT NULL,
  `C26i` int(2) DEFAULT NULL,
  `C25j_cual` varchar(100) DEFAULT NULL,
  `C26j` int(2) NOT NULL,
  `C27a` int(2) NOT NULL,
  `C27b` int(2) NOT NULL,
  `C27c` int(2) NOT NULL,
  `C27d` int(2) NOT NULL,
  `C27e` int(2) NOT NULL,
  `C27f` int(2) NOT NULL,
  `D26a` int(11) NOT NULL,
  `D26b` int(11) NOT NULL,
  `D26c` int(11) NOT NULL,
  `D26d` int(11) NOT NULL,
  `D26e` int(11) NOT NULL,
  `D26f` int(11) NOT NULL,
  `D26g` int(11) NOT NULL,
  `D26h` int(11) NOT NULL,
  `D26i` int(11) NOT NULL,
  `D26j` int(11) NOT NULL,
  `D26k` int(11) NOT NULL,
  `D26l` int(11) NOT NULL,
  `D26m` int(11) NOT NULL,
  `D26n` int(11) NOT NULL,
  `D26o` int(11) NOT NULL,
  `D26p` int(11) NOT NULL,
  `D26q` int(11) NOT NULL,
  `D26r` int(11) NOT NULL,
  `D27a` int(11) NOT NULL,
  `D27b` int(11) NOT NULL,
  `D27c` int(11) NOT NULL,
  `D27d` int(11) NOT NULL,
  `D27e` int(11) NOT NULL,
  `D27f` int(11) NOT NULL,
  `D27g` int(11) NOT NULL,
  `D27h` int(11) NOT NULL,
  `D27i` int(11) NOT NULL,
  `D27j` int(11) NOT NULL,
  `D27k` int(11) NOT NULL,
  `D27l` int(11) NOT NULL,
  `D27m` int(11) NOT NULL,
  `D27n` int(11) NOT NULL,
  `D27o` int(11) NOT NULL,
  `D27p` int(11) NOT NULL,
  `D27q` int(11) NOT NULL,
  `D27r` int(11) NOT NULL,
  `D28` int(2) NOT NULL,
  `D31` int(11) NOT NULL,
  `D32` int(11) NOT NULL,
  `D33` int(11) NOT NULL,
  `D34` int(11) NOT NULL,
  `D35` int(11) NOT NULL,
  `D36` int(11) NOT NULL,
  `D46a` int(11) NOT NULL,
  `D46b` int(11) NOT NULL,
  `D46c` int(11) NOT NULL,
  `D46d` int(11) NOT NULL,
  `D46e` int(11) NOT NULL,
  `D38` int(11) NOT NULL,
  `D39` int(2) NOT NULL,
  `D39a` int(11) NOT NULL,
  `D39b` int(11) NOT NULL,
  `D39c` int(11) NOT NULL,
  `D39d` int(11) NOT NULL,
  `D39e` int(11) NOT NULL,
  `D39f` int(11) NOT NULL,
  `D39g` int(11) NOT NULL,
  `D39g_cual` varchar(200) DEFAULT NULL,
  `D40` int(11) NOT NULL,
  `D41` int(11) NOT NULL,
  `D41a` int(2) NOT NULL,
  `D42I` int(11) NOT NULL,
  `D55II` int(2) NOT NULL,
  `D42III` int(11) NOT NULL,
  `D43` int(11) NOT NULL,
  `D43_cual` varchar(200) DEFAULT NULL,
  `D44` int(11) NOT NULL,
  `D45` int(11) NOT NULL,
  `D46` int(11) NOT NULL,
  `D47` int(11) NOT NULL,
  `D48a` int(11) NOT NULL,
  `D48b` int(11) NOT NULL,
  `D48c` int(11) NOT NULL,
  `D48d` int(11) NOT NULL,
  `D48e` int(11) NOT NULL,
  `D48f` int(11) NOT NULL,
  `D48g` int(11) NOT NULL,
  `D48h` int(11) NOT NULL,
  `D48i` int(11) NOT NULL,
  `D48j` int(11) NOT NULL,
  `D48k` int(11) NOT NULL,
  `D49` int(11) NOT NULL,
  `D50` int(11) NOT NULL,
  `D50_51` int(2) NOT NULL,
  `D51` int(11) NOT NULL,
  `D52` int(11) NOT NULL,
  `D53` int(11) NOT NULL,
  `D54a` int(11) NOT NULL,
  `D54b` int(11) NOT NULL,
  `D54c` int(11) NOT NULL,
  `D54d` int(11) NOT NULL,
  `D54e` int(11) NOT NULL,
  `D54f` int(11) NOT NULL,
  `D54g` int(11) NOT NULL,
  `D54g_cual` varchar(200) DEFAULT NULL,
  `D60` int(2) NOT NULL,
  `D61` int(2) NOT NULL,
  `D62` int(2) NOT NULL,
  `D63a` int(2) NOT NULL,
  `D63b` int(2) NOT NULL,
  `D63c` int(2) NOT NULL,
  `D63d` int(2) NOT NULL,
  `E55` int(11) NOT NULL,
  `E56a` int(11) NOT NULL,
  `E56b` int(11) NOT NULL,
  `E56c` int(11) NOT NULL,
  `E56d` int(11) NOT NULL,
  `E56e` int(11) NOT NULL,
  `E56f` int(11) NOT NULL,
  `E57` int(11) NOT NULL,
  `E58a` int(11) NOT NULL,
  `E58b` int(11) NOT NULL,
  `E58c` int(11) NOT NULL,
  `E58d` int(11) NOT NULL,
  `E58e` int(11) NOT NULL,
  `E58f` int(11) NOT NULL,
  `E58g` int(11) NOT NULL,
  `E58h` int(11) NOT NULL,
  `E59` int(11) NOT NULL,
  `E60` int(11) NOT NULL,
  `E61` int(11) NOT NULL,
  `E62` int(11) NOT NULL,
  `E63a` int(11) NOT NULL,
  `E63b` int(11) NOT NULL,
  `E63c` int(11) NOT NULL,
  `E63d` int(11) NOT NULL,
  `E63e` int(11) NOT NULL,
  `E64a` int(11) NOT NULL,
  `E64b` int(11) NOT NULL,
  `E64c` int(11) NOT NULL,
  `E64d` int(11) NOT NULL,
  `E64e` int(11) NOT NULL,
  PRIMARY KEY (`ID_ENCUESTA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para procedimiento dane_ecas_v2.full_monitorv3
DELIMITER //
CREATE DEFINER=`dimpe`@`%` PROCEDURE `full_monitorv3`()
BEGIN
  SELECT  
    (SELECT NOMBRE FROM user_2016 U WHERE U.USUARIO = L.USUARIO) as Monitor,
    ID_LOTE as Nro_lote,
    L.SEDE_CODIGO,
    M.SEDE_NOMBRE,
    (SELECT distinct(MUNICIPIO) FROM mtra_colegios M WHERE M.COD_MUNI = L.COD_MUNI) as Municipio,
    PRESENTES,
    count(ID_LOTE) as Registradas,
    (SELECT count(ESTADO_ENCUESTA) FROM encuesta3 WHERE ESTADO_ENCUESTA =1 AND LOTE_ENC = L.ID_LOTE) AS COMPLETAS,
    (SELECT count(ESTADO_ENCUESTA) FROM encuesta3 WHERE ESTADO_ENCUESTA IN (3,2) AND LOTE_ENC= L.ID_LOTE) AS IN_COMPLETAS,
    (SELECT count(ESTADO_ENCUESTA) FROM encuesta3 WHERE ESTADO_ENCUESTA =0 AND LOTE_ENC= L.ID_LOTE) AS ENCUENTAS_VACIAS
  FROM encuesta3 as E
  join
  lote as L on (ID_LOTE = LOTE_ENC)
  JOIN 
  muestra_2016 M ON (L.COD_COLEGIO_OP = M.Cod_colegio_op)
  group by ID_LOTE;
END//
DELIMITER ;


-- Volcando estructura para tabla dane_ecas_v2.lote
CREATE TABLE IF NOT EXISTS `lote` (
  `ID_LOTE` varchar(10) NOT NULL,
  `USUARIO` varchar(30) NOT NULL,
  `COD_COLEGIO_OP` int(11) NOT NULL,
  `COD_DEPTO` varchar(3) NOT NULL,
  `COD_MUNI` varchar(5) NOT NULL,
  `JORNADA` int(11) NOT NULL,
  `SEDE_CODIGO` varchar(20) NOT NULL,
  `SECTOR` varchar(20) DEFAULT NULL,
  `GRADO` int(11) NOT NULL,
  `CURSO` varchar(2) NOT NULL,
  `MATRICULADOS` int(11) DEFAULT NULL,
  `REGULARES` int(11) DEFAULT NULL,
  `PRESENTES` int(11) NOT NULL,
  `OCUPADOS_LG` int(11) DEFAULT NULL,
  `AUSENTES_LG` int(11) DEFAULT NULL,
  `RECHAZARON_LG` int(11) DEFAULT NULL,
  `MENORES_DE_12` int(11) DEFAULT NULL,
  `CON_MOTIVO_LG` int(11) DEFAULT NULL,
  `MOTIVO_LG` varchar(200) DEFAULT NULL,
  `OBSERVACIONES` varchar(300) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `ESTADO_LOTE` int(11) DEFAULT NULL,
  `OFFLINE` int(11) DEFAULT NULL,
  `SIS_RECOLECTA` int(11) DEFAULT NULL,
  `NOVEDAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_LOTE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para procedimiento dane_ecas_v2.rep_monitorv3
DELIMITER //
CREATE DEFINER=`dimpe`@`%` PROCEDURE `rep_monitorv3`(IN `cod_mpio` VARCHAR(10))
BEGIN
  SELECT  
    (SELECT NOMBRE FROM user_2016 U WHERE U.USUARIO = L.USUARIO) as Monitor,
    ID_LOTE as Nro_lote,
    L.SEDE_CODIGO,
    M.SEDE_NOMBRE,
    (SELECT distinct(MUNICIPIO) FROM mtra_colegios M WHERE M.COD_MUNI = L.COD_MUNI) as Municipio,
    PRESENTES,
    count(ID_LOTE) as Registradas,
    (SELECT count(ESTADO_ENCUESTA) FROM encuesta3 WHERE ESTADO_ENCUESTA =1 AND LOTE_ENC= L.ID_LOTE) AS COMPLETAS,
    (SELECT count(ESTADO_ENCUESTA) FROM encuesta3 WHERE ESTADO_ENCUESTA IN (3,2) AND LOTE_ENC= L.ID_LOTE) AS IN_COMPLETAS,
    (SELECT count(ESTADO_ENCUESTA) FROM encuesta3 WHERE ESTADO_ENCUESTA =0 AND LOTE_ENC= L.ID_LOTE) AS ENCUENTAS_VACIAS
  FROM encuesta3 as E
  join
  lote as L on (ID_LOTE = LOTE_ENC and L.COD_MUNI = cod_mpio)
  JOIN 
  muestra_2016 M ON (L.COD_COLEGIO_OP = M.Cod_colegio_op)
  group by ID_LOTE;
END//
DELIMITER ;


-- Volcando estructura para procedimiento dane_ecas_v2.ver_asignaciones
DELIMITER //
CREATE DEFINER=`dimpe`@`%` PROCEDURE `ver_asignaciones`(IN cod_mpio VARCHAR(10))
BEGIN
  SELECT cod_colegio_op,
    SEDE_CODIGO,
    SEDE_NOMBRE,
    grado_asignado,
      curso_nro,
    id_asignacion,
    MUNICIPIO,
    us_asignador,
    us_monitor,
    SECTOR,
    fecha
    FROM asig_monitor A 
    JOIN mtra_colegios M ON(A.cod_colegio = M.SEDE_CODIGO AND COD_MUNI=cod_mpio);
    
END//
DELIMITER ;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`teine_enc` AS select `l`.`ID_LOTE` AS `ID_LOTE`,(case when ((case when isnull((select count(0) AS `total_e` from `dane_ecas_v2`.`encuesta3` where (`l`.`ID_LOTE` = `dane_ecas_v2`.`encuesta3`.`LOTE_ENC`) group by `l`.`ID_LOTE`)) then 0 else (select count(0) AS `total_e` from `dane_ecas_v2`.`encuesta3` where (`l`.`ID_LOTE` = `dane_ecas_v2`.`encuesta3`.`LOTE_ENC`) group by `l`.`ID_LOTE`) end) > (case when isnull((select count(0) AS `total_e` from `dane_ecas_v2`.`encuesta3` where ((`l`.`ID_LOTE` = `dane_ecas_v2`.`encuesta3`.`LOTE_ENC`) and (`dane_ecas_v2`.`encuesta3`.`ESTADO_ENCUESTA` = 0)) group by `l`.`ID_LOTE`)) then 0 else (select count(0) AS `total_e` from `dane_ecas_v2`.`encuesta3` where ((`l`.`ID_LOTE` = `dane_ecas_v2`.`encuesta3`.`LOTE_ENC`) and (`dane_ecas_v2`.`encuesta3`.`ESTADO_ENCUESTA` = 0)) group by `l`.`ID_LOTE`) end)) then 'si' else 'no' end) AS `tiene_enc` from `dane_ecas_v2`.`lote` `l`;

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_alertalotes` AS select `v_lotes`.`SEDE_NOMBRE` AS `SEDE_NOMBRE`,`v_lotes`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`v_lotes`.`COD_MUNI` AS `COD_MUNI`,`v_lotes`.`Cod_colegio_op` AS `Cod_colegio_op`,`v_lotes`.`id_lote` AS `id_lote`,`v_lotes`.`GRADO` AS `GRADO`,`v_lotes`.`CURSO` AS `CURSO`,`v_lotes`.`PRESENTES` AS `PRESENTES`,`v_lotes`.`MATRICULADOS` AS `MATRICULADOS`,`v_lotes`.`REGULARES` AS `REGULARES`,`v_lotes`.`RECHAZARON_LG` AS `RECHAZARON_LG`,`v_lotes`.`AUSENTES_LG` AS `AUSENTES_LG`,`v_lotes`.`MENORES_DE_12` AS `MENORES_DE_12`,`v_lotes`.`CON_MOTIVO_LG` AS `CON_MOTIVO_LG`,`v_lotes`.`MOTIVO_LG` AS `MOTIVO_LG`,`v_lotes`.`OCUPADOS_LG` AS `OCUPADOS_LG`,`v_lotes`.`OBSERVACIONES` AS `OBSERVACIONES`,`v_lotes`.`ESTADO_LOTE` AS `ESTADO_LOTE`,`v_lotes`.`SIS_RECOLECTA` AS `SIS_RECOLECTA`,`v_lotes`.`USUARIO` AS `USUARIO`,`v_lotes`.`NOVEDAD` AS `NOVEDAD`,`v_lotes`.`OFFLINE` AS `OFFLINE`,`v_lotes`.`FECHA` AS `FECHA`,`v_lotes`.`regWeb` AS `regWeb`,`v_lotes`.`regOff` AS `regOff`,(case when ((`v_lotes`.`regOff` = 0) and ((select (curdate() - `v_lotes`.`FECHA`)) > 5)) then 'No se han enviado encuestas offline' else (case when ((`v_lotes`.`regOff` > 0) and (`v_lotes`.`regOff` < `v_lotes`.`OFFLINE`)) then concat('Faltan (',(`v_lotes`.`OFFLINE` - `v_lotes`.`regOff`),') encuestas offline, enviarlas o cerrar nuevamnete el lote validando los valores.') else (case when (`v_lotes`.`regOff` <> `v_lotes`.`OFFLINE`) then 'En procesos de envió y/o cargue.' else 'ok' end) end) end) AS `alerta` from `dane_ecas_v2`.`v_lotes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_asignaciones` AS select `m`.`MUNICIPIO` AS `MUNICIPIO`,`m`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`m`.`SECTOR` AS `SECTOR`,`m`.`SEDE_NOMBRE` AS `SEDE_NOMBRE`,`a`.`grado_asignado` AS `grado_asignado`,`a`.`curso_nro` AS `curso_nro`,(case when (`a`.`us_monitor` <> '') then 'ASIGNADO' else 'SIN ASIGNAR' end) AS `estado`,(select `dane_ecas_v2`.`user_2016`.`NOMBRE` from `dane_ecas_v2`.`user_2016` where (`a`.`us_asignador` = `dane_ecas_v2`.`user_2016`.`USUARIO`)) AS `coordinador`,(select `dane_ecas_v2`.`user_2016`.`NOMBRE` from `dane_ecas_v2`.`user_2016` where (`a`.`us_monitor` = `dane_ecas_v2`.`user_2016`.`USUARIO`)) AS `monitor`,`a`.`fecha` AS `fecha` from (`dane_ecas_v2`.`asig_monitor` `a` join `dane_ecas_v2`.`mtra_colegios` `m` on((`a`.`cod_colegio` = `m`.`SEDE_CODIGO`)));

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_aux_est_muni` AS select `m`.`MUNICIPIO` AS `MUNICIPIO`,(select sum(`c`.`REG6`) from `dane_ecas_v2`.`v_estudiantes` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `REGULARES6`,(select sum(`c`.`REG7`) from `dane_ecas_v2`.`v_estudiantes` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `REGULARES7`,(select sum(`c`.`REG8`) from `dane_ecas_v2`.`v_estudiantes` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `REGULARES8`,(select sum(`c`.`REG9`) from `dane_ecas_v2`.`v_estudiantes` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `REGULARES9`,(select sum(`c`.`REG10`) from `dane_ecas_v2`.`v_estudiantes` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `REGULARES10`,(select sum(`c`.`REG11`) from `dane_ecas_v2`.`v_estudiantes` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `REGULARES11`,(select sum(`c`.`ENCUESTADOS6`) from `dane_ecas_v2`.`v_estudiantes` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `ENCUESTADOS6`,(select sum(`c`.`ENCUESTADOS7`) from `dane_ecas_v2`.`v_estudiantes` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `ENCUESTADOS7`,(select sum(`c`.`ENCUESTADOS8`) from `dane_ecas_v2`.`v_estudiantes` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `ENCUESTADOS8`,(select sum(`c`.`ENCUESTADOS9`) from `dane_ecas_v2`.`v_estudiantes` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `ENCUESTADOS9`,(select sum(`c`.`ENCUESTADOS10`) from `dane_ecas_v2`.`v_estudiantes` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `ENCUESTADOS10`,(select sum(`c`.`ENCUESTADOS11`) from `dane_ecas_v2`.`v_estudiantes` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `ENCUESTADOS11`,(select sum(`c`.`E_COMPLETA6`) from `dane_ecas_v2`.`v_det_est` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `E_COMPLETA6`,(select sum(`c`.`E_COMPLETA7`) from `dane_ecas_v2`.`v_det_est` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `E_COMPLETA7`,(select sum(`c`.`E_COMPLETA8`) from `dane_ecas_v2`.`v_det_est` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `E_COMPLETA8`,(select sum(`c`.`E_COMPLETA9`) from `dane_ecas_v2`.`v_det_est` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `E_COMPLETA9`,(select sum(`c`.`E_COMPLETA10`) from `dane_ecas_v2`.`v_det_est` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `E_COMPLETA10`,(select sum(`c`.`E_COMPLETA11`) from `dane_ecas_v2`.`v_det_est` `c` where (`m`.`MUNICIPIO` = `c`.`MUNICIPIO`)) AS `E_COMPLETA11` from `dane_ecas_v2`.`mtra_colegios` `m` group by `m`.`COD_MUNI`;

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_aux_joinle` AS select `l`.`COD_COLEGIO_OP` AS `COD_COLEGIO_OP`,`l`.`COD_MUNI` AS `COD_MUNI`,`l`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`l`.`SECTOR` AS `SECTOR`,`l`.`GRADO` AS `GRADO`,`l`.`MATRICULADOS` AS `MATRICULADOS`,`l`.`REGULARES` AS `REGULARES`,`l`.`PRESENTES` AS `PRESENTES`,`l`.`OCUPADOS_LG` AS `OCUPADOS_LG`,`l`.`AUSENTES_LG` AS `AUSENTES_LG`,`l`.`RECHAZARON_LG` AS `RECHAZARON_LG`,`l`.`MENORES_DE_12` AS `MENORES_DE_12`,`l`.`CON_MOTIVO_LG` AS `CON_MOTIVO_LG`,`l`.`FECHA` AS `FECHA`,`l`.`ESTADO_LOTE` AS `ESTADO_LOTE`,`l`.`OFFLINE` AS `OFFLINE`,`l`.`ID_LOTE` AS `ID_LOTE`,`e`.`Cod_col_op` AS `Cod_col_op`,`e`.`ESTADO_ENCUESTA` AS `ESTADO_ENCUESTA` from (`dane_ecas_v2`.`lote` `l` join `dane_ecas_v2`.`encuesta3` `e` on((`l`.`ID_LOTE` = `e`.`LOTE_ENC`)));

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_auxcurso` AS select `m`.`MUNICIPIO` AS `MUNICIPIO`,(select count(0) from `dane_ecas_v2`.`mtra_colegios` `cm` where ((`m`.`COD_MUNI` = `cm`.`COD_MUNI`) and (`cm`.`GRADO6` = 1))) AS `T6`,(select count(0) from `dane_ecas_v2`.`mtra_colegios` `cm` where ((`m`.`COD_MUNI` = `cm`.`COD_MUNI`) and (`cm`.`GRADO7` = 1))) AS `T7`,(select count(0) from `dane_ecas_v2`.`mtra_colegios` `cm` where ((`m`.`COD_MUNI` = `cm`.`COD_MUNI`) and (`cm`.`GRADO8` = 1))) AS `T8`,(select count(0) from `dane_ecas_v2`.`mtra_colegios` `cm` where ((`m`.`COD_MUNI` = `cm`.`COD_MUNI`) and (`cm`.`GRADO9` = 1))) AS `T9`,(select count(0) from `dane_ecas_v2`.`mtra_colegios` `cm` where ((`m`.`COD_MUNI` = `cm`.`COD_MUNI`) and (`cm`.`GRADO10` = 1))) AS `T10`,(select count(0) from `dane_ecas_v2`.`mtra_colegios` `cm` where ((`m`.`COD_MUNI` = `cm`.`COD_MUNI`) and (`cm`.`GRADO11_OMAS` = 1))) AS `T11`,(select count(0) from `dane_ecas_v2`.`v_detcurso` `d` where ((`m`.`MUNICIPIO` = `d`.`MUNICIPIO`) and (`d`.`C6` > 0))) AS `C6`,(select count(0) from `dane_ecas_v2`.`v_detcurso` `d` where ((`m`.`MUNICIPIO` = `d`.`MUNICIPIO`) and (`d`.`C7` > 0))) AS `C7`,(select count(0) from `dane_ecas_v2`.`v_detcurso` `d` where ((`m`.`MUNICIPIO` = `d`.`MUNICIPIO`) and (`d`.`C8` > 0))) AS `C8`,(select count(0) from `dane_ecas_v2`.`v_detcurso` `d` where ((`m`.`MUNICIPIO` = `d`.`MUNICIPIO`) and (`d`.`C9` > 0))) AS `C9`,(select count(0) from `dane_ecas_v2`.`v_detcurso` `d` where ((`m`.`MUNICIPIO` = `d`.`MUNICIPIO`) and (`d`.`C10` > 0))) AS `C10`,(select count(0) from `dane_ecas_v2`.`v_detcurso` `d` where ((`m`.`MUNICIPIO` = `d`.`MUNICIPIO`) and (`d`.`C11` > 0))) AS `C11`,(select count(0) from `dane_ecas_v2`.`v_detcurso` `d` where ((`m`.`MUNICIPIO` = `d`.`MUNICIPIO`) and (`d`.`INC6` > 0))) AS `INC6`,(select count(0) from `dane_ecas_v2`.`v_detcurso` `d` where ((`m`.`MUNICIPIO` = `d`.`MUNICIPIO`) and (`d`.`INC7` > 0))) AS `INC7`,(select count(0) from `dane_ecas_v2`.`v_detcurso` `d` where ((`m`.`MUNICIPIO` = `d`.`MUNICIPIO`) and (`d`.`INC8` > 0))) AS `INC8`,(select count(0) from `dane_ecas_v2`.`v_detcurso` `d` where ((`m`.`MUNICIPIO` = `d`.`MUNICIPIO`) and (`d`.`INC9` > 0))) AS `INC9`,(select count(0) from `dane_ecas_v2`.`v_detcurso` `d` where ((`m`.`MUNICIPIO` = `d`.`MUNICIPIO`) and (`d`.`INC10` > 0))) AS `INC10`,(select count(0) from `dane_ecas_v2`.`v_detcurso` `d` where ((`m`.`MUNICIPIO` = `d`.`MUNICIPIO`) and (`d`.`INC11` > 0))) AS `INC11` from `dane_ecas_v2`.`mtra_colegios` `m` group by `m`.`MUNICIPIO`;

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_cober_c` AS select `v_auxcurso`.`MUNICIPIO` AS `MUNICIPIO`,`v_auxcurso`.`T6` AS `T6`,`v_auxcurso`.`T7` AS `T7`,`v_auxcurso`.`T8` AS `T8`,`v_auxcurso`.`T9` AS `T9`,`v_auxcurso`.`T10` AS `T10`,`v_auxcurso`.`T11` AS `T11`,round((((`v_auxcurso`.`C6` + `v_auxcurso`.`INC6`) * 100) / `v_auxcurso`.`T6`),1) AS `cb6`,round((((`v_auxcurso`.`C7` + `v_auxcurso`.`INC7`) * 100) / `v_auxcurso`.`T7`),1) AS `cb7`,round((((`v_auxcurso`.`C8` + `v_auxcurso`.`INC8`) * 100) / `v_auxcurso`.`T8`),1) AS `cb8`,round((((`v_auxcurso`.`C9` + `v_auxcurso`.`INC9`) * 100) / `v_auxcurso`.`T9`),1) AS `cb9`,round((((`v_auxcurso`.`C10` + `v_auxcurso`.`INC10`) * 100) / `v_auxcurso`.`T10`),1) AS `cb10`,round((((`v_auxcurso`.`C11` + `v_auxcurso`.`INC11`) * 100) / `v_auxcurso`.`T11`),1) AS `cb11` from `dane_ecas_v2`.`v_auxcurso`;

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_coberturaee` AS select `m`.`MUNICIPIO` AS `MUNICIPIO`,(select count(0) from `dane_ecas_v2`.`mtra_colegios` where (`dane_ecas_v2`.`mtra_colegios`.`COD_MUNI` = `m`.`COD_MUNI`)) AS `TOTAL_MUESTRA`,(select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'COMPLETO'))) AS `TOTAL_COMPLETOS`,(select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'INCOMPLETO'))) AS `TOTAL_INCOMPLETOS`,(select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'SIN INFORMACIÓN'))) AS `SIN_INFORMACION`,round((((select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'COMPLETO'))) / (select count(0) from `dane_ecas_v2`.`mtra_colegios` where (`dane_ecas_v2`.`mtra_colegios`.`COD_MUNI` = `m`.`COD_MUNI`))) * 100),1) AS `C_COMPLETOS`,round((((select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'INCOMPLETO'))) / (select count(0) from `dane_ecas_v2`.`mtra_colegios` where (`dane_ecas_v2`.`mtra_colegios`.`COD_MUNI` = `m`.`COD_MUNI`))) * 100),1) AS `INCOMPLETOS`,round((((select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'SIN INFORMACIÓN'))) / (select count(0) from `dane_ecas_v2`.`mtra_colegios` where (`dane_ecas_v2`.`mtra_colegios`.`COD_MUNI` = `m`.`COD_MUNI`))) * 100),1) AS `SIN_INFO` from `dane_ecas_v2`.`mtra_colegios` `m` group by `m`.`COD_MUNI`;

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_det_cobertura` AS select `m`.`MUNICIPIO` AS `MUNICIPIO`,(select count(0) from `dane_ecas_v2`.`mtra_colegios` where ((`dane_ecas_v2`.`mtra_colegios`.`COD_MUNI` = `m`.`COD_MUNI`) and (`dane_ecas_v2`.`mtra_colegios`.`SECTOR` = 'No Oficial'))) AS `TOTAL_NO_OFICIALES`,(select count(0) from `dane_ecas_v2`.`mtra_colegios` where ((`dane_ecas_v2`.`mtra_colegios`.`COD_MUNI` = `m`.`COD_MUNI`) and (`dane_ecas_v2`.`mtra_colegios`.`SECTOR` = 'Oficial'))) AS `TOTAL_OFICIALES`,(select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'COMPLETO') and (`v_estadoie`.`SECTOR` = 'No Oficial'))) AS `COMPLETOS_NO_OF`,(select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'COMPLETO') and (`v_estadoie`.`SECTOR` = 'Oficial'))) AS `COMPLETOS_OF`,(select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'INCOMPLETO') and (`v_estadoie`.`SECTOR` = 'No Oficial'))) AS `INCOMPLETOS_NO_OF`,(select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'INCOMPLETO') and (`v_estadoie`.`SECTOR` = 'Oficial'))) AS `INCOMPLETOS_OF`,(select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'SIN INFORMACIÓN') and (`v_estadoie`.`SECTOR` = 'No Oficial'))) AS `SIN_INFO_NO_OF`,(select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'SIN INFORMACIÓN') and (`v_estadoie`.`SECTOR` = 'Oficial'))) AS `SIN_INFO_OF`,round((((select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'COMPLETO') and (`v_estadoie`.`SECTOR` = 'No Oficial'))) / (select count(0) from `dane_ecas_v2`.`mtra_colegios` where (`dane_ecas_v2`.`mtra_colegios`.`COD_MUNI` = `m`.`COD_MUNI`))) * 100),1) AS `X100_COMPLETOS_NO_OF`,round((((select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'COMPLETO') and (`v_estadoie`.`SECTOR` = 'Oficial'))) / (select count(0) from `dane_ecas_v2`.`mtra_colegios` where (`dane_ecas_v2`.`mtra_colegios`.`COD_MUNI` = `m`.`COD_MUNI`))) * 100),1) AS `X100_COMPLETOS_OF`,round((((select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'INCOMPLETO') and (`v_estadoie`.`SECTOR` = 'No Oficial'))) / (select count(0) from `dane_ecas_v2`.`mtra_colegios` where (`dane_ecas_v2`.`mtra_colegios`.`COD_MUNI` = `m`.`COD_MUNI`))) * 100),1) AS `X100_INCOMPLETOS_NO_OF`,round((((select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'INCOMPLETO') and (`v_estadoie`.`SECTOR` = 'Oficial'))) / (select count(0) from `dane_ecas_v2`.`mtra_colegios` where (`dane_ecas_v2`.`mtra_colegios`.`COD_MUNI` = `m`.`COD_MUNI`))) * 100),1) AS `X100_INCOMPLETOS_OF`,round((((select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'SIN INFORMACIÓN') and (`v_estadoie`.`SECTOR` = 'No Oficial'))) / (select count(0) from `dane_ecas_v2`.`mtra_colegios` where (`dane_ecas_v2`.`mtra_colegios`.`COD_MUNI` = `m`.`COD_MUNI`))) * 100),1) AS `X100_SIN_INFO_NO_OF`,round((((select count(0) from `dane_ecas_v2`.`v_estadoie` where ((`v_estadoie`.`COD_MUNI` = `m`.`COD_MUNI`) and (`v_estadoie`.`ESTADO_IE` = 'SIN INFORMACIÓN') and (`v_estadoie`.`SECTOR` = 'Oficial'))) / (select count(0) from `dane_ecas_v2`.`mtra_colegios` where (`dane_ecas_v2`.`mtra_colegios`.`COD_MUNI` = `m`.`COD_MUNI`))) * 100),1) AS `X100_SIN_INFO_OF` from `dane_ecas_v2`.`mtra_colegios` `m` group by `m`.`COD_MUNI`;

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_det_est` AS select `m`.`MUNICIPIO` AS `MUNICIPIO`,`m`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`m`.`SECTOR` AS `SECTOR`,`m`.`SEDE_NOMBRE` AS `SEDE_NOMBRE`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 6) and (`e`.`ESTADO_ENCUESTA` = 1))) AS `E_COMPLETA6`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 7) and (`e`.`ESTADO_ENCUESTA` = 1))) AS `E_COMPLETA7`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 8) and (`e`.`ESTADO_ENCUESTA` = 1))) AS `E_COMPLETA8`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 9) and (`e`.`ESTADO_ENCUESTA` = 1))) AS `E_COMPLETA9`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 10) and (`e`.`ESTADO_ENCUESTA` = 1))) AS `E_COMPLETA10`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 11) and (`e`.`ESTADO_ENCUESTA` = 1))) AS `E_COMPLETA11`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 6) and (`e`.`ESTADO_ENCUESTA` > 1))) AS `E_INC6`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 7) and (`e`.`ESTADO_ENCUESTA` > 1))) AS `E_INC7`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 8) and (`e`.`ESTADO_ENCUESTA` > 1))) AS `E_INC8`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 9) and (`e`.`ESTADO_ENCUESTA` > 1))) AS `E_INC9`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 10) and (`e`.`ESTADO_ENCUESTA` > 1))) AS `E_INC10`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 11) and (`e`.`ESTADO_ENCUESTA` > 1))) AS `E_INC11` from `dane_ecas_v2`.`mtra_colegios` `m`;

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_det_est2` AS select `m`.`MUNICIPIO` AS `MUNICIPIO`,`m`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`m`.`SECTOR` AS `SECTOR`,`m`.`SEDE_NOMBRE` AS `SEDE_NOMBRE`,(select sum(`l`.`OCUPADOS_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 6))) AS `OCUPADOS6`,(select sum(`l`.`OCUPADOS_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 7))) AS `OCUPADOS7`,(select sum(`l`.`OCUPADOS_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 8))) AS `OCUPADOS8`,(select sum(`l`.`OCUPADOS_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 9))) AS `OCUPADOS9`,(select sum(`l`.`OCUPADOS_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 10))) AS `OCUPADOS10`,(select sum(`l`.`OCUPADOS_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 11))) AS `OCUPADOS11`,(select sum(`l`.`AUSENTES_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 6))) AS `AUSENTES6`,(select sum(`l`.`AUSENTES_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 7))) AS `AUSENTES7`,(select sum(`l`.`AUSENTES_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 8))) AS `AUSENTES8`,(select sum(`l`.`AUSENTES_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 9))) AS `AUSENTES9`,(select sum(`l`.`AUSENTES_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 10))) AS `AUSENTES10`,(select sum(`l`.`AUSENTES_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 11))) AS `AUSENTES11`,(select sum(`l`.`RECHAZARON_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 6))) AS `RECHAZARON6`,(select sum(`l`.`RECHAZARON_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 7))) AS `RECHAZARON7`,(select sum(`l`.`RECHAZARON_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 8))) AS `RECHAZARON8`,(select sum(`l`.`RECHAZARON_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 9))) AS `RECHAZARON9`,(select sum(`l`.`RECHAZARON_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 10))) AS `RECHAZARON10`,(select sum(`l`.`RECHAZARON_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 11))) AS `RECHAZARON11`,(select sum(`l`.`MENORES_DE_12`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 6))) AS `MENORES6`,(select sum(`l`.`MENORES_DE_12`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 7))) AS `MENORES7`,(select sum(`l`.`MENORES_DE_12`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 8))) AS `MENORES8`,(select sum(`l`.`MENORES_DE_12`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 9))) AS `MENORES9`,(select sum(`l`.`MENORES_DE_12`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 10))) AS `MENORES10`,(select sum(`l`.`MENORES_DE_12`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 11))) AS `MENORES11`,(select sum(`l`.`CON_MOTIVO_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 6))) AS `CON_MOTIVO6`,(select sum(`l`.`CON_MOTIVO_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 7))) AS `CON_MOTIVO7`,(select sum(`l`.`CON_MOTIVO_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 8))) AS `CON_MOTIVO8`,(select sum(`l`.`CON_MOTIVO_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 9))) AS `CON_MOTIVO9`,(select sum(`l`.`CON_MOTIVO_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 10))) AS `CON_MOTIVO10`,(select sum(`l`.`CON_MOTIVO_LG`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 11))) AS `CON_MOTIVO11` from `dane_ecas_v2`.`mtra_colegios` `m`;

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_detcurso` AS select `m`.`MUNICIPIO` AS `MUNICIPIO`,`m`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`m`.`SECTOR` AS `SECTOR`,`m`.`SEDE_NOMBRE` AS `SEDE_NOMBRE`,(select count(0) from `dane_ecas_v2`.`v_estadocurso` `v` where ((`m`.`SEDE_CODIGO` = `v`.`SEDE_CODIGO`) and (`v`.`GRADO` = 6) and (`v`.`ESTADO_LOTE` = 'COMPLETO'))) AS `C6`,(select count(0) from `dane_ecas_v2`.`v_estadocurso` `v` where ((`m`.`SEDE_CODIGO` = `v`.`SEDE_CODIGO`) and (`v`.`GRADO` = 7) and (`v`.`ESTADO_LOTE` = 'COMPLETO'))) AS `C7`,(select count(0) from `dane_ecas_v2`.`v_estadocurso` `v` where ((`m`.`SEDE_CODIGO` = `v`.`SEDE_CODIGO`) and (`v`.`GRADO` = 8) and (`v`.`ESTADO_LOTE` = 'COMPLETO'))) AS `C8`,(select count(0) from `dane_ecas_v2`.`v_estadocurso` `v` where ((`m`.`SEDE_CODIGO` = `v`.`SEDE_CODIGO`) and (`v`.`GRADO` = 9) and (`v`.`ESTADO_LOTE` = 'COMPLETO'))) AS `C9`,(select count(0) from `dane_ecas_v2`.`v_estadocurso` `v` where ((`m`.`SEDE_CODIGO` = `v`.`SEDE_CODIGO`) and (`v`.`GRADO` = 10) and (`v`.`ESTADO_LOTE` = 'COMPLETO'))) AS `C10`,(select count(0) from `dane_ecas_v2`.`v_estadocurso` `v` where ((`m`.`SEDE_CODIGO` = `v`.`SEDE_CODIGO`) and (`v`.`GRADO` = 11) and (`v`.`ESTADO_LOTE` = 'COMPLETO'))) AS `C11`,(select count(0) from `dane_ecas_v2`.`v_estadocurso` `v` where ((`m`.`SEDE_CODIGO` = `v`.`SEDE_CODIGO`) and (`v`.`GRADO` = 6) and (`v`.`ESTADO_LOTE` = 'INCOMPLETO'))) AS `INC6`,(select count(0) from `dane_ecas_v2`.`v_estadocurso` `v` where ((`m`.`SEDE_CODIGO` = `v`.`SEDE_CODIGO`) and (`v`.`GRADO` = 7) and (`v`.`ESTADO_LOTE` = 'INCOMPLETO'))) AS `INC7`,(select count(0) from `dane_ecas_v2`.`v_estadocurso` `v` where ((`m`.`SEDE_CODIGO` = `v`.`SEDE_CODIGO`) and (`v`.`GRADO` = 8) and (`v`.`ESTADO_LOTE` = 'INCOMPLETO'))) AS `INC8`,(select count(0) from `dane_ecas_v2`.`v_estadocurso` `v` where ((`m`.`SEDE_CODIGO` = `v`.`SEDE_CODIGO`) and (`v`.`GRADO` = 9) and (`v`.`ESTADO_LOTE` = 'INCOMPLETO'))) AS `INC9`,(select count(0) from `dane_ecas_v2`.`v_estadocurso` `v` where ((`m`.`SEDE_CODIGO` = `v`.`SEDE_CODIGO`) and (`v`.`GRADO` = 10) and (`v`.`ESTADO_LOTE` = 'INCOMPLETO'))) AS `INC10`,(select count(0) from `dane_ecas_v2`.`v_estadocurso` `v` where ((`m`.`SEDE_CODIGO` = `v`.`SEDE_CODIGO`) and (`v`.`GRADO` = 11) and (`v`.`ESTADO_LOTE` = 'INCOMPLETO'))) AS `INC11` from `dane_ecas_v2`.`mtra_colegios` `m`;

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_detnoe` AS select `m`.`MUNICIPIO` AS `MUNICIPIO`,`m`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`m`.`SECTOR` AS `SECTOR`,`m`.`SEDE_NOMBRE` AS `SEDE_NOMBRE`,`l`.`GRADO` AS `grado`,`l`.`CURSO` AS `CURSO`,`l`.`OCUPADOS_LG` AS `OCUPADOS_LG`,`l`.`AUSENTES_LG` AS `AUSENTES_LG`,`l`.`RECHAZARON_LG` AS `RECHAZARON_LG`,`l`.`MENORES_DE_12` AS `MENORES_DE_12`,`l`.`CON_MOTIVO_LG` AS `CON_MOTIVO_LG` from (`dane_ecas_v2`.`lote` `l` join `dane_ecas_v2`.`mtra_colegios` `m` on((`l`.`COD_COLEGIO_OP` = `m`.`Cod_colegio_op`)));

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_estadocurso` AS select (select `m`.`MUNICIPIO` from `dane_ecas_v2`.`mtra_colegios` `m` where (`l`.`COD_COLEGIO_OP` = `m`.`Cod_colegio_op`)) AS `MUNICIPIO`,`l`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`l`.`SECTOR` AS `SECTOR`,(select `m`.`SEDE_NOMBRE` from `dane_ecas_v2`.`mtra_colegios` `m` where (`l`.`COD_COLEGIO_OP` = `m`.`Cod_colegio_op`)) AS `SEDE_NOMBRE`,`l`.`GRADO` AS `GRADO`,`l`.`CURSO` AS `CURSO`,(case when (`l`.`NOVEDAD` = 1) then 'OCUPADO' else (case when (`l`.`NOVEDAD` = 2) then 'NO ASISTIO' else (case when (`l`.`NOVEDAD` = 3) then 'RECHAZO' else (case when (((((`l`.`OCUPADOS_LG` + `l`.`AUSENTES_LG`) + `l`.`RECHAZARON_LG`) + `l`.`CON_MOTIVO_LG`) > 0) and ((select count(0) from `dane_ecas_v2`.`encuesta3` where ((`l`.`ID_LOTE` = `dane_ecas_v2`.`encuesta3`.`LOTE_ENC`) and (`dane_ecas_v2`.`encuesta3`.`ESTADO_ENCUESTA` <> 0)) group by `dane_ecas_v2`.`encuesta3`.`LOTE_ENC`) > 0) and (`l`.`ESTADO_LOTE` = 1)) then 'INCOMPLETO' else (case when ((`l`.`REGULARES` = ((select count(0) from `dane_ecas_v2`.`encuesta3` where ((`l`.`ID_LOTE` = `dane_ecas_v2`.`encuesta3`.`LOTE_ENC`) and (`dane_ecas_v2`.`encuesta3`.`ESTADO_ENCUESTA` <> 0)) group by `dane_ecas_v2`.`encuesta3`.`LOTE_ENC`) + `l`.`MENORES_DE_12`)) and (`l`.`ESTADO_LOTE` = 1)) then 'COMPLETO' else (case when isnull((select count(0) from `dane_ecas_v2`.`encuesta3` where ((`l`.`ID_LOTE` = `dane_ecas_v2`.`encuesta3`.`LOTE_ENC`) and (`dane_ecas_v2`.`encuesta3`.`ESTADO_ENCUESTA` <> 0)) group by `dane_ecas_v2`.`encuesta3`.`LOTE_ENC`)) then 'SIN INFORMACION' else 'SIN CERRAR' end) end) end) end) end) end) AS `ESTADO_LOTE`,(case when (`l`.`SIS_RECOLECTA` = 1) then 'WEB' else (case when (`l`.`SIS_RECOLECTA` = 2) then 'MIXTO' else (case when (`l`.`SIS_RECOLECTA` = 3) then 'OFFLINE' else '' end) end) end) AS `TIPO_RECOLECCION` from `dane_ecas_v2`.`lote` `l` union select `m`.`MUNICIPIO` AS `MUNICIPIO`,`m`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`m`.`SECTOR` AS `SECTOR`,`m`.`SEDE_NOMBRE` AS `SEDE_NOMBRE`,`v`.`grado_asignado` AS `grado_asignado`,'' AS `CURSO`,'SIN CREAR LOTE' AS `ESTADO_LOTE`,'' AS `TIPO_RECOLECCION` from (`dane_ecas_v2`.`asig_monitor` `v` join `dane_ecas_v2`.`mtra_colegios` `m` on(((`v`.`cod_colegio` = `m`.`SEDE_CODIGO`) and (((select count(0) from `dane_ecas_v2`.`asig_monitor` `a` where (concat(`a`.`cod_colegio`,`a`.`grado_asignado`) = concat(`v`.`cod_colegio`,`v`.`grado_asignado`))) - (select count(0) from `dane_ecas_v2`.`lote` `sl` where (concat(`sl`.`SEDE_CODIGO`,`sl`.`GRADO`) = concat(`v`.`cod_colegio`,`v`.`grado_asignado`)))) > 0)))) group by `v`.`cod_colegio`,`v`.`grado_asignado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_estadoie` AS select `m`.`COD_MUNI` AS `COD_MUNI`,`m`.`MUNICIPIO` AS `MUNICIPIO`,`m`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`m`.`SECTOR` AS `SECTOR`,`m`.`SEDE_NOMBRE` AS `SEDE_NOMBRE`,(case when ((((((`m`.`GRADO6` + `m`.`GRADO7`) + `m`.`GRADO8`) + `m`.`GRADO9`) + `m`.`GRADO10`) + `m`.`GRADO11_OMAS`) = ((((((select count(0) from `dane_ecas_v2`.`lote` `sl` where ((`m`.`Cod_colegio_op` = `sl`.`COD_COLEGIO_OP`) and (`sl`.`GRADO` = 6) and (`sl`.`ESTADO_LOTE` = 1) and `sl`.`ID_LOTE` in (select `teine_enc`.`ID_LOTE` from `dane_ecas_v2`.`teine_enc` where (`teine_enc`.`tiene_enc` = 'si')))) + (select count(0) from `dane_ecas_v2`.`lote` `sl` where ((`m`.`Cod_colegio_op` = `sl`.`COD_COLEGIO_OP`) and (`sl`.`GRADO` = 7) and (`sl`.`ESTADO_LOTE` = 1) and `sl`.`ID_LOTE` in (select `teine_enc`.`ID_LOTE` from `dane_ecas_v2`.`teine_enc` where (`teine_enc`.`tiene_enc` = 'si'))))) + (select count(0) from `dane_ecas_v2`.`lote` `sl` where ((`m`.`Cod_colegio_op` = `sl`.`COD_COLEGIO_OP`) and (`sl`.`GRADO` = 8) and (`sl`.`ESTADO_LOTE` = 1) and `sl`.`ID_LOTE` in (select `teine_enc`.`ID_LOTE` from `dane_ecas_v2`.`teine_enc` where (`teine_enc`.`tiene_enc` = 'si'))))) + (select count(0) from `dane_ecas_v2`.`lote` `sl` where ((`m`.`Cod_colegio_op` = `sl`.`COD_COLEGIO_OP`) and (`sl`.`GRADO` = 9) and (`sl`.`ESTADO_LOTE` = 1) and `sl`.`ID_LOTE` in (select `teine_enc`.`ID_LOTE` from `dane_ecas_v2`.`teine_enc` where (`teine_enc`.`tiene_enc` = 'si'))))) + (select count(0) from `dane_ecas_v2`.`lote` `sl` where ((`m`.`Cod_colegio_op` = `sl`.`COD_COLEGIO_OP`) and (`sl`.`GRADO` = 10) and (`sl`.`ESTADO_LOTE` = 1) and `sl`.`ID_LOTE` in (select `teine_enc`.`ID_LOTE` from `dane_ecas_v2`.`teine_enc` where (`teine_enc`.`tiene_enc` = 'si'))))) + (select count(0) from `dane_ecas_v2`.`lote` `sl` where ((`m`.`Cod_colegio_op` = `sl`.`COD_COLEGIO_OP`) and (`sl`.`GRADO` = 11) and (`sl`.`ESTADO_LOTE` = 1) and `sl`.`ID_LOTE` in (select `teine_enc`.`ID_LOTE` from `dane_ecas_v2`.`teine_enc` where (`teine_enc`.`tiene_enc` = 'si')))))) then 'COMPLETO' else (case when (((((((select count(0) from `dane_ecas_v2`.`lote` `sl` where ((`m`.`Cod_colegio_op` = `sl`.`COD_COLEGIO_OP`) and (`sl`.`GRADO` = 6) and `sl`.`ID_LOTE` in (select `teine_enc`.`ID_LOTE` from `dane_ecas_v2`.`teine_enc` where (`teine_enc`.`tiene_enc` = 'si')))) + (select count(0) from `dane_ecas_v2`.`lote` `sl` where ((`m`.`Cod_colegio_op` = `sl`.`COD_COLEGIO_OP`) and (`sl`.`GRADO` = 7) and `sl`.`ID_LOTE` in (select `teine_enc`.`ID_LOTE` from `dane_ecas_v2`.`teine_enc` where (`teine_enc`.`tiene_enc` = 'si'))))) + (select count(0) from `dane_ecas_v2`.`lote` `sl` where ((`m`.`Cod_colegio_op` = `sl`.`COD_COLEGIO_OP`) and (`sl`.`GRADO` = 8) and `sl`.`ID_LOTE` in (select `teine_enc`.`ID_LOTE` from `dane_ecas_v2`.`teine_enc` where (`teine_enc`.`tiene_enc` = 'si'))))) + (select count(0) from `dane_ecas_v2`.`lote` `sl` where ((`m`.`Cod_colegio_op` = `sl`.`COD_COLEGIO_OP`) and (`sl`.`GRADO` = 9) and `sl`.`ID_LOTE` in (select `teine_enc`.`ID_LOTE` from `dane_ecas_v2`.`teine_enc` where (`teine_enc`.`tiene_enc` = 'si'))))) + (select count(0) from `dane_ecas_v2`.`lote` `sl` where ((`m`.`Cod_colegio_op` = `sl`.`COD_COLEGIO_OP`) and (`sl`.`GRADO` = 10) and `sl`.`ID_LOTE` in (select `teine_enc`.`ID_LOTE` from `dane_ecas_v2`.`teine_enc` where (`teine_enc`.`tiene_enc` = 'si'))))) + (select count(0) from `dane_ecas_v2`.`lote` `sl` where ((`m`.`Cod_colegio_op` = `sl`.`COD_COLEGIO_OP`) and (`sl`.`GRADO` = 11) and `sl`.`ID_LOTE` in (select `teine_enc`.`ID_LOTE` from `dane_ecas_v2`.`teine_enc` where (`teine_enc`.`tiene_enc` = 'si'))))) > 0) then 'INCOMPLETO' else 'SIN INFORMACIÓN' end) end) AS `ESTADO_IE` from (`dane_ecas_v2`.`mtra_colegios` `m` join `dane_ecas_v2`.`lote` `l` on((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`))) group by `l`.`COD_COLEGIO_OP` union select `m`.`COD_MUNI` AS `COD_MUNI`,`m`.`MUNICIPIO` AS `MUNICIPIO`,`m`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`m`.`SECTOR` AS `SECTOR`,`m`.`SEDE_NOMBRE` AS `SEDE_NOMBRE`,'SIN INFORMACIÓN' AS `ESTADO_IE` from `dane_ecas_v2`.`mtra_colegios` `m` where (not(`m`.`Cod_colegio_op` in (select `dane_ecas_v2`.`lote`.`COD_COLEGIO_OP` from `dane_ecas_v2`.`lote` group by `dane_ecas_v2`.`lote`.`COD_COLEGIO_OP`)));

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_estudiantes` AS select `m`.`MUNICIPIO` AS `MUNICIPIO`,`m`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`m`.`SECTOR` AS `SECTOR`,`m`.`SEDE_NOMBRE` AS `SEDE_NOMBRE`,(select sum(`l`.`MATRICULADOS`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 6))) AS `MTRI6`,(select sum(`l`.`MATRICULADOS`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 7))) AS `MTRI7`,(select sum(`l`.`MATRICULADOS`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 8))) AS `MTRI8`,(select sum(`l`.`MATRICULADOS`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 9))) AS `MTRI9`,(select sum(`l`.`MATRICULADOS`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 10))) AS `MTRI10`,(select sum(`l`.`MATRICULADOS`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 11))) AS `MTRI11`,(select sum(`l`.`REGULARES`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 6))) AS `REG6`,(select sum(`l`.`REGULARES`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 7))) AS `REG7`,(select sum(`l`.`REGULARES`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 8))) AS `REG8`,(select sum(`l`.`REGULARES`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 9))) AS `REG9`,(select sum(`l`.`REGULARES`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 10))) AS `REG10`,(select sum(`l`.`REGULARES`) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 11))) AS `REG11`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 6) and (`e`.`ESTADO_ENCUESTA` > 0))) AS `ENCUESTADOS6`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 7) and (`e`.`ESTADO_ENCUESTA` > 0))) AS `ENCUESTADOS7`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 8) and (`e`.`ESTADO_ENCUESTA` > 0))) AS `ENCUESTADOS8`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 9) and (`e`.`ESTADO_ENCUESTA` > 0))) AS `ENCUESTADOS9`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 10) and (`e`.`ESTADO_ENCUESTA` > 0))) AS `ENCUESTADOS10`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`m`.`Cod_colegio_op` = `e`.`COD_COLEGIO_OP`) and (`e`.`GRADO` = 11) and (`e`.`ESTADO_ENCUESTA` > 0))) AS `ENCUESTADOS11`,(select ((((sum(`l`.`OCUPADOS_LG`) + sum(`l`.`AUSENTES_LG`)) + sum(`l`.`RECHAZARON_LG`)) + sum(`l`.`MENORES_DE_12`)) + sum(`l`.`CON_MOTIVO_LG`)) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 6))) AS `NO_E6`,(select ((((sum(`l`.`OCUPADOS_LG`) + sum(`l`.`AUSENTES_LG`)) + sum(`l`.`RECHAZARON_LG`)) + sum(`l`.`MENORES_DE_12`)) + sum(`l`.`CON_MOTIVO_LG`)) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 7))) AS `NO_E7`,(select ((((sum(`l`.`OCUPADOS_LG`) + sum(`l`.`AUSENTES_LG`)) + sum(`l`.`RECHAZARON_LG`)) + sum(`l`.`MENORES_DE_12`)) + sum(`l`.`CON_MOTIVO_LG`)) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 8))) AS `NO_E8`,(select ((((sum(`l`.`OCUPADOS_LG`) + sum(`l`.`AUSENTES_LG`)) + sum(`l`.`RECHAZARON_LG`)) + sum(`l`.`MENORES_DE_12`)) + sum(`l`.`CON_MOTIVO_LG`)) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 9))) AS `NO_E9`,(select ((((sum(`l`.`OCUPADOS_LG`) + sum(`l`.`AUSENTES_LG`)) + sum(`l`.`RECHAZARON_LG`)) + sum(`l`.`MENORES_DE_12`)) + sum(`l`.`CON_MOTIVO_LG`)) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 10))) AS `NO_E10`,(select ((((sum(`l`.`OCUPADOS_LG`) + sum(`l`.`AUSENTES_LG`)) + sum(`l`.`RECHAZARON_LG`)) + sum(`l`.`MENORES_DE_12`)) + sum(`l`.`CON_MOTIVO_LG`)) from `dane_ecas_v2`.`lote` `l` where ((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`GRADO` = 11))) AS `NO_E11` from `dane_ecas_v2`.`mtra_colegios` `m`;

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_estxcurso` AS select `m`.`MUNICIPIO` AS `MUNICIPIO`,`m`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`m`.`SECTOR` AS `SECTOR`,`m`.`SEDE_NOMBRE` AS `SEDE_NOMBRE`,`l`.`GRADO` AS `GRADO`,`l`.`CURSO` AS `CURSO`,`l`.`MATRICULADOS` AS `MATRICULADOS`,`l`.`REGULARES` AS `REGULARES`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`e`.`ID_LOTE` = `l`.`ID_LOTE`) and (`e`.`ESTADO_ENCUESTA` > 0))) AS `CARGADAS_BD`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`e`.`ID_LOTE` = `l`.`ID_LOTE`) and (`e`.`ESTADO_ENCUESTA` = 1))) AS `ENC_COMPLETA`,(select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`e`.`ID_LOTE` = `l`.`ID_LOTE`) and (`e`.`ESTADO_ENCUESTA` > 1))) AS `ENC_INCOMPLETA`,((select count(0) from `dane_ecas_v2`.`v_aux_joinle` `e` where ((`e`.`ID_LOTE` = `l`.`ID_LOTE`) and (`e`.`ESTADO_ENCUESTA` > 0))) + (case when (`l`.`OFFLINE` > 0) then `l`.`OFFLINE` else 0 end)) AS `REGISTRADAS`,((((`l`.`OCUPADOS_LG` + `l`.`AUSENTES_LG`) + `l`.`RECHAZARON_LG`) + `l`.`MENORES_DE_12`) + `l`.`CON_MOTIVO_LG`) AS `NO_ENCUESTADOS`,`l`.`ID_LOTE` AS `ID_LOTE` from (`dane_ecas_v2`.`lote` `l` join `dane_ecas_v2`.`mtra_colegios` `m` on((`l`.`COD_COLEGIO_OP` = `m`.`Cod_colegio_op`)));

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_loteconenc` AS select `l`.`ID_LOTE` AS `ID_LOTE`,(case when ((case when isnull((select count(0) AS `total_e` from `dane_ecas_v2`.`encuesta3` where (`l`.`ID_LOTE` = `dane_ecas_v2`.`encuesta3`.`LOTE_ENC`) group by `l`.`ID_LOTE`)) then 0 else (select count(0) AS `total_e` from `dane_ecas_v2`.`encuesta3` where (`l`.`ID_LOTE` = `dane_ecas_v2`.`encuesta3`.`LOTE_ENC`) group by `l`.`ID_LOTE`) end) > (case when isnull((select count(0) AS `total_e` from `dane_ecas_v2`.`encuesta3` where ((`l`.`ID_LOTE` = `dane_ecas_v2`.`encuesta3`.`LOTE_ENC`) and (`dane_ecas_v2`.`encuesta3`.`ESTADO_ENCUESTA` = 0)) group by `l`.`ID_LOTE`)) then 0 else (select count(0) AS `total_e` from `dane_ecas_v2`.`encuesta3` where ((`l`.`ID_LOTE` = `dane_ecas_v2`.`encuesta3`.`LOTE_ENC`) and (`dane_ecas_v2`.`encuesta3`.`ESTADO_ENCUESTA` = 0)) group by `l`.`ID_LOTE`) end)) then 'si' else 'no' end) AS `tiene_enc` from `dane_ecas_v2`.`lote` `l`;

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_lotes` AS select `m`.`SEDE_NOMBRE` AS `SEDE_NOMBRE`,`m`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`m`.`Cod_colegio_op` AS `Cod_colegio_op`,`m`.`COD_MUNI` AS `COD_MUNI`,`l`.`ID_LOTE` AS `id_lote`,`l`.`GRADO` AS `GRADO`,`l`.`CURSO` AS `CURSO`,`l`.`PRESENTES` AS `PRESENTES`,`l`.`MATRICULADOS` AS `MATRICULADOS`,`l`.`REGULARES` AS `REGULARES`,`l`.`RECHAZARON_LG` AS `RECHAZARON_LG`,`l`.`AUSENTES_LG` AS `AUSENTES_LG`,`l`.`MENORES_DE_12` AS `MENORES_DE_12`,`l`.`CON_MOTIVO_LG` AS `CON_MOTIVO_LG`,`l`.`MOTIVO_LG` AS `MOTIVO_LG`,`l`.`OCUPADOS_LG` AS `OCUPADOS_LG`,`l`.`OBSERVACIONES` AS `OBSERVACIONES`,`l`.`ESTADO_LOTE` AS `ESTADO_LOTE`,`l`.`SIS_RECOLECTA` AS `SIS_RECOLECTA`,`l`.`USUARIO` AS `USUARIO`,`l`.`NOVEDAD` AS `NOVEDAD`,`l`.`OFFLINE` AS `OFFLINE`,`l`.`FECHA` AS `FECHA`,((select count(0) from `dane_ecas_v2`.`encuesta3` `e` where ((`l`.`ID_LOTE` = `e`.`LOTE_ENC`) and (`e`.`ESTADO_ENCUESTA` > 0))) - (select count(0) from `dane_ecas_v2`.`encuesta3` `e` where ((`l`.`ID_LOTE` = `e`.`LOTE_ENC`) and (`e`.`OBSERVACIONES` like '%Of_line%')))) AS `regWeb`,(select count(0) from `dane_ecas_v2`.`encuesta3` `e` where ((`l`.`ID_LOTE` = `e`.`LOTE_ENC`) and (`e`.`OBSERVACIONES` like '%Of_line%'))) AS `regOff` from (`dane_ecas_v2`.`mtra_colegios` `m` join `dane_ecas_v2`.`lote` `l` on(((`m`.`Cod_colegio_op` = `l`.`COD_COLEGIO_OP`) and (`l`.`ESTADO_LOTE` = 1) and (`l`.`SIS_RECOLECTA` > 1))));

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_novie` AS select `dane_ecas_v2`.`mtra_colegios`.`MUNICIPIO` AS `MUNICIPIO`,`dane_ecas_v2`.`mtra_colegios`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`dane_ecas_v2`.`mtra_colegios`.`SECTOR` AS `SECTOR`,`dane_ecas_v2`.`mtra_colegios`.`SEDE_NOMBRE` AS `SEDE_NOMBRE`,(case when (`dane_ecas_v2`.`mtra_colegios`.`Novedad` = 1) then 'Razón social diferente' else (case when (`dane_ecas_v2`.`mtra_colegios`.`Novedad` = 2) then 'Demolición-Construcción' else (case when (`dane_ecas_v2`.`mtra_colegios`.`Novedad` = 3) then 'Lote' else (case when (`dane_ecas_v2`.`mtra_colegios`.`Novedad` = 4) then 'Rechazo' else (case when (`dane_ecas_v2`.`mtra_colegios`.`Novedad` = 5) then 'Otro' end) end) end) end) end) AS `NOVEDAD` from `dane_ecas_v2`.`mtra_colegios` where (`dane_ecas_v2`.`mtra_colegios`.`Novedad` > 0);

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_temp_asignaciones` AS select `m`.`Cod_colegio_op` AS `cod_colegio_op`,`m`.`SEDE_CODIGO` AS `SEDE_CODIGO`,`m`.`SEDE_NOMBRE` AS `SEDE_NOMBRE`,`a`.`grado_asignado` AS `grado_asignado`,`a`.`curso_nro` AS `curso_nro`,`a`.`id_asignacion` AS `id_asignacion`,`m`.`MUNICIPIO` AS `MUNICIPIO`,`a`.`us_asignador` AS `us_asignador`,`a`.`us_monitor` AS `us_monitor`,`m`.`SECTOR` AS `SECTOR`,`a`.`fecha` AS `fecha` from (`dane_ecas_v2`.`asig_monitor` `a` join `dane_ecas_v2`.`mtra_colegios` `m` on((`a`.`cod_colegio` = `m`.`SEDE_CODIGO`)));

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_x100_enc` AS select `v_aux_est_muni`.`MUNICIPIO` AS `MUNICIPIO`,`v_aux_est_muni`.`REGULARES6` AS `REGULARES6`,`v_aux_est_muni`.`REGULARES7` AS `REGULARES7`,`v_aux_est_muni`.`REGULARES8` AS `REGULARES8`,`v_aux_est_muni`.`REGULARES9` AS `REGULARES9`,`v_aux_est_muni`.`REGULARES10` AS `REGULARES10`,`v_aux_est_muni`.`REGULARES11` AS `REGULARES11`,round(((`v_aux_est_muni`.`ENCUESTADOS6` * 100) / `v_aux_est_muni`.`REGULARES6`),1) AS `X100_ENCUESTADOS6`,round(((`v_aux_est_muni`.`ENCUESTADOS7` * 100) / `v_aux_est_muni`.`REGULARES7`),1) AS `X100_ENCUESTADOS7`,round(((`v_aux_est_muni`.`ENCUESTADOS8` * 100) / `v_aux_est_muni`.`REGULARES8`),1) AS `X100_ENCUESTADOS8`,round(((`v_aux_est_muni`.`ENCUESTADOS9` * 100) / `v_aux_est_muni`.`REGULARES9`),1) AS `X100_ENCUESTADOS9`,round(((`v_aux_est_muni`.`ENCUESTADOS10` * 100) / `v_aux_est_muni`.`REGULARES10`),1) AS `X100_ENCUESTADOS10`,round(((`v_aux_est_muni`.`ENCUESTADOS11` * 100) / `v_aux_est_muni`.`REGULARES11`),1) AS `X100_ENCUESTADOS11` from `dane_ecas_v2`.`v_aux_est_muni`;

CREATE ALGORITHM=UNDEFINED DEFINER=`dimpe`@`%` SQL SECURITY DEFINER VIEW `dane_ecas_v2`.`v_x100e_completa` AS select `v_aux_est_muni`.`MUNICIPIO` AS `MUNICIPIO`,`v_aux_est_muni`.`REGULARES6` AS `REGULARES6`,`v_aux_est_muni`.`REGULARES7` AS `REGULARES7`,`v_aux_est_muni`.`REGULARES8` AS `REGULARES8`,`v_aux_est_muni`.`REGULARES9` AS `REGULARES9`,`v_aux_est_muni`.`REGULARES10` AS `REGULARES10`,`v_aux_est_muni`.`REGULARES11` AS `REGULARES11`,round(((`v_aux_est_muni`.`E_COMPLETA6` * 100) / `v_aux_est_muni`.`REGULARES6`),1) AS `X100_E_COMPLETA6`,round(((`v_aux_est_muni`.`E_COMPLETA7` * 100) / `v_aux_est_muni`.`REGULARES7`),1) AS `X100_E_COMPLETA7`,round(((`v_aux_est_muni`.`E_COMPLETA8` * 100) / `v_aux_est_muni`.`REGULARES8`),1) AS `X100_E_COMPLETA8`,round(((`v_aux_est_muni`.`E_COMPLETA9` * 100) / `v_aux_est_muni`.`REGULARES9`),1) AS `X100_E_COMPLETA9`,round(((`v_aux_est_muni`.`E_COMPLETA10` * 100) / `v_aux_est_muni`.`REGULARES10`),1) AS `X100_E_COMPLETA10`,round(((`v_aux_est_muni`.`E_COMPLETA11` * 100) / `v_aux_est_muni`.`REGULARES11`),1) AS `X100_E_COMPLETA11` from `dane_ecas_v2`.`v_aux_est_muni`;
