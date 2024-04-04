-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.29 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para c2490504_meraki
CREATE DATABASE IF NOT EXISTS `c2490504_meraki` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `c2490504_meraki`;

-- Volcando estructura para tabla c2490504_meraki.cf_archivo
CREATE TABLE IF NOT EXISTS `cf_archivo` (
  `cf_id` int NOT NULL AUTO_INCREMENT,
  `cf_nombre` varchar(50) NOT NULL,
  `cf_descripcion` varchar(1000) DEFAULT NULL,
  `cf_url` varchar(50) NOT NULL,
  `APPS_TRANSACTION_USER` varchar(30) NOT NULL DEFAULT 'DEFAULT',
  `APPS_TRANSACTION_DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `USRS_ID` int DEFAULT NULL,
  PRIMARY KEY (`cf_id`),
  KEY `fk_cvArchivo_user_idx` (`USRS_ID`),
  CONSTRAINT `fk_cfArchivo_user` FOREIGN KEY (`USRS_ID`) REFERENCES `users` (`USRS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla c2490504_meraki.cf_archivo: ~0 rows (aproximadamente)

-- Volcando estructura para tabla c2490504_meraki.cv_archivo
CREATE TABLE IF NOT EXISTS `cv_archivo` (
  `cv_id` int NOT NULL AUTO_INCREMENT,
  `cv_nombre` varchar(50) NOT NULL,
  `cv_descripcion` varchar(1000) DEFAULT NULL,
  `cv_url` varchar(50) NOT NULL,
  `APPS_TRANSACTION_USER` varchar(30) NOT NULL DEFAULT 'DEFAULT',
  `APPS_TRANSACTION_DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `USRS_ID` int DEFAULT NULL,
  PRIMARY KEY (`cv_id`),
  KEY `fk_cvArchivo_user_idx` (`USRS_ID`),
  CONSTRAINT `fk_cvArchivo_user` FOREIGN KEY (`USRS_ID`) REFERENCES `users` (`USRS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla c2490504_meraki.cv_archivo: ~0 rows (aproximadamente)

-- Volcando estructura para tabla c2490504_meraki.empleo_ofertas
CREATE TABLE IF NOT EXISTS `empleo_ofertas` (
  `id_oferta` int NOT NULL AUTO_INCREMENT,
  `nombre_oferta` varchar(100) NOT NULL,
  `descripcion_oferta` varchar(50) NOT NULL,
  `salario` varchar(50) NOT NULL,
  `ubicacion` varchar(15) NOT NULL,
  `horario` varchar(13) NOT NULL,
  `habilidades` varchar(500) DEFAULT NULL,
  `user_create` varchar(10) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_update` varchar(10) DEFAULT NULL,
  `date_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `tareas` varchar(800) DEFAULT NULL,
  `responsabilidades` varchar(800) DEFAULT NULL,
  `id_empresa` int DEFAULT NULL,
  PRIMARY KEY (`id_oferta`),
  KEY `fk_empresa_oferta_idx` (`id_empresa`),
  CONSTRAINT `fk_empresa_oferta` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla c2490504_meraki.empleo_ofertas: ~0 rows (aproximadamente)

-- Volcando estructura para tabla c2490504_meraki.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(100) NOT NULL,
  `descripcion_empresa` varchar(50) NOT NULL,
  `user_create` varchar(10) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_update` varchar(10) DEFAULT NULL,
  `date_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `USRS_ID` int NOT NULL,
  `Ubicacion` varchar(45) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Web` varchar(45) NOT NULL,
  `Razon_Social` varchar(45) DEFAULT NULL,
  `RFC` varchar(45) DEFAULT NULL,
  `Representante` varchar(45) DEFAULT NULL,
  `Facebook` varchar(45) DEFAULT NULL,
  `Twitter` varchar(45) DEFAULT NULL,
  `Instagram` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_empresa`),
  KEY `fk_user_empresa_idx` (`USRS_ID`),
  CONSTRAINT `fk_user_empresa` FOREIGN KEY (`USRS_ID`) REFERENCES `users` (`USRS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla c2490504_meraki.empresa: ~0 rows (aproximadamente)

-- Volcando estructura para tabla c2490504_meraki.emp_logo
CREATE TABLE IF NOT EXISTS `emp_logo` (
  `Emp_id` int NOT NULL AUTO_INCREMENT,
  `USRS_ID` int DEFAULT NULL,
  `Emp_url` varchar(50) NOT NULL,
  `APPS_TRANSACTION_USER` varchar(30) NOT NULL DEFAULT 'DEFAULT',
  `APPS_TRANSACTION_DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Emp_id`),
  KEY `fk_Emp_Logo_user_idx` (`USRS_ID`),
  CONSTRAINT `fk_Emp_Logo_user` FOREIGN KEY (`USRS_ID`) REFERENCES `users` (`USRS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla c2490504_meraki.emp_logo: ~0 rows (aproximadamente)
INSERT INTO `emp_logo` (`Emp_id`, `USRS_ID`, `Emp_url`, `APPS_TRANSACTION_USER`, `APPS_TRANSACTION_DATE`, `active`) VALUES
	(1, 1, 'Emp_Logo/meraki-1.png', 'DEFAULT', '2022-04-06 12:36:05', 1);

-- Volcando estructura para tabla c2490504_meraki.solicitante
CREATE TABLE IF NOT EXISTS `solicitante` (
  `id_solicitante` int NOT NULL AUTO_INCREMENT,
  `telefono` varchar(20) NOT NULL,
  `Profecion` varchar(20) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_update` varchar(10) DEFAULT NULL,
  `date_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `USRS_ID` int NOT NULL,
  PRIMARY KEY (`id_solicitante`),
  KEY `fk_usuario_solicitante_idx` (`USRS_ID`),
  CONSTRAINT `fk_usuario_solicitante` FOREIGN KEY (`USRS_ID`) REFERENCES `users` (`USRS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla c2490504_meraki.solicitante: ~0 rows (aproximadamente)

-- Volcando estructura para tabla c2490504_meraki.solicitante_oferta
CREATE TABLE IF NOT EXISTS `solicitante_oferta` (
  `id_solicitudes` int NOT NULL AUTO_INCREMENT,
  `id_oferta` int NOT NULL,
  `id_solicitante` int NOT NULL,
  `user_create` varchar(10) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_update` varchar(10) DEFAULT NULL,
  `date_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `Estatus` varchar(45) NOT NULL DEFAULT 'Pendiente',
  PRIMARY KEY (`id_solicitudes`),
  KEY `fk_Solicitud_Oferta_idx` (`id_oferta`),
  KEY `fk_Solicitud_Solicitante_idx` (`id_solicitante`),
  CONSTRAINT `fk_Solicitud_Oferta` FOREIGN KEY (`id_oferta`) REFERENCES `empleo_ofertas` (`id_oferta`),
  CONSTRAINT `fk_Solicitud_Solicitante` FOREIGN KEY (`id_solicitante`) REFERENCES `solicitante` (`id_solicitante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla c2490504_meraki.solicitante_oferta: ~0 rows (aproximadamente)

-- Volcando estructura para tabla c2490504_meraki.users
CREATE TABLE IF NOT EXISTS `users` (
  `USRS_ID` int NOT NULL AUTO_INCREMENT,
  `USRS_NAME` varchar(30) NOT NULL,
  `USRS_LASTNAME` varchar(30) NOT NULL,
  `USRS_EMAIL` varchar(30) NOT NULL,
  `USRS_PASSWORD` varchar(20) NOT NULL,
  `USRS_ACCESS_ATTEMPTS` int NOT NULL DEFAULT '0',
  `USRS_ONLINE` char(1) DEFAULT 'N',
  `USRS_PASSWORD_QUESTION` varchar(100) DEFAULT NULL,
  `USRS_PASSWORD_ANSWER` varchar(100) DEFAULT NULL,
  `USRS_LAST_LOGIN_DATE` datetime DEFAULT NULL,
  `USRS_STATUS` char(1) DEFAULT 'Y',
  `USRS_TIPO` varchar(45) NOT NULL,
  `USR_CURP` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`USRS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla c2490504_meraki.users: ~2 rows (aproximadamente)
INSERT INTO `users` (`USRS_ID`, `USRS_NAME`, `USRS_LASTNAME`, `USRS_EMAIL`, `USRS_PASSWORD`, `USRS_ACCESS_ATTEMPTS`, `USRS_ONLINE`, `USRS_PASSWORD_QUESTION`, `USRS_PASSWORD_ANSWER`, `USRS_LAST_LOGIN_DATE`, `USRS_STATUS`, `USRS_TIPO`, `USR_CURP`) VALUES
	(1, 'Meraki', 'Meraki', 'meraki@meraki.com', '123', 0, 'N', 'Nombre de Mascota', 'Perro', NULL, 'Y', 'Empresa', 'Meraki312'),
	(2, 'Kevin', 'Ibarra', 'kevin@mail.com', '123', 0, 'N', 'Â¿CuÃ¡l es tu comida favorita?', 'Mole', NULL, 'Y', 'Solicitante', 'Kevin123');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
