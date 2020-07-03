-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-05-2019 a las 02:31:15
-- Versión del servidor: 10.0.30-MariaDB-cll-lve
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `admincac_cacsa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloc_notas`
--

CREATE TABLE IF NOT EXISTS `bloc_notas` (
  `id_bloc` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_conta` varchar(255) DEFAULT NULL,
  `telefono_conta` varchar(15) DEFAULT NULL,
  `email_conta` varchar(255) DEFAULT NULL,
  `nota` text,
  `empresa` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_bloc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ruta`
--

CREATE TABLE IF NOT EXISTS `detalle_ruta` (
  `id_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `id_orden` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle`),
  KEY `id_orden` (`id_orden`),
  KEY `id_producto` (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_rutatemp`
--

CREATE TABLE IF NOT EXISTS `detalle_rutatemp` (
  `id_temp` int(11) NOT NULL AUTO_INCREMENT,
  `id_orden` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  PRIMARY KEY (`id_temp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
  `id_documento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_archivo` varchar(150) NOT NULL DEFAULT '0',
  `id_orden` int(11) DEFAULT NULL,
  `tipo_documento` enum('SalidaOEntrega','RetiroORecoleccion','Reparación','Pases y accesos','Otros') NOT NULL,
  `ruta_archivo` varchar(250) NOT NULL DEFAULT '0',
  `fecha_subida` datetime DEFAULT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `giros_comerciales`
--

CREATE TABLE IF NOT EXISTS `giros_comerciales` (
  `id_giro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_giro` varchar(150) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_giro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `giros_comerciales`
--

INSERT INTO `giros_comerciales` (`id_giro`, `nombre_giro`) VALUES
(8, 'SERVICIO DE SUMINISTRO DE AGUA POTABLE (H2O)'),
(9, 'SERVICIO DE SANITARIOS PORTÃTILES (WC MÃ“VIL)'),
(10, 'SERVICIO DE FOSAS SÃ‰PTICAS'),
(11, 'SERVICIO DE KITs'),
(12, 'SERVICIO DE RECOLECCIÃ“N, TRANSPORTE Y DISPOSICIÃ“N FINAL DE RESIDUOS DE MANEJO ESPECIAL'),
(13, 'SERVICIO DE RECOLECCIÃ“N, TRANSPORTE Y DISPOSICIÃ“N FINAL DE RESIDUOS SOLIDOS URBANOS'),
(14, 'RENTA DE OFICINAS MÃ“VILES, DORMITORIOS Y CONTENEDORES'),
(15, 'SERVICIO ABATIMIENTO DE MANTO FREÃTICO (WELLPOINT)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) NOT NULL,
  `estado` enum('Disponible','Mantenimiento','En uso') NOT NULL DEFAULT 'Disponible',
  `descrip` varchar(50) DEFAULT NULL,
  `id_lugar` int(11) NOT NULL DEFAULT '1',
  `id_giro` int(11) NOT NULL DEFAULT '1',
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `id_lugar` (`id_lugar`),
  KEY `id_giro` (`id_giro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE IF NOT EXISTS `lugares` (
  `id_lugar` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_lugar` varchar(150) NOT NULL,
  PRIMARY KEY (`id_lugar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id_lugar`, `nombre_lugar`) VALUES
(29, 'Las Choapas'),
(30, 'Las Choapas'),
(32, 'IxthuatlÃ¡n del Sureste');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operadores`
--

CREATE TABLE IF NOT EXISTS `operadores` (
  `id_operador` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(150) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `email_op` varchar(105) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `ife` varchar(150) DEFAULT NULL,
  `imss_arch` varchar(150) DEFAULT NULL,
  `no_imss` varchar(150) DEFAULT NULL,
  `lic_manejo` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_operador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_entrega`
--

CREATE TABLE IF NOT EXISTS `orden_entrega` (
  `id_orden` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) DEFAULT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `lugar_entrega` varchar(150) NOT NULL,
  `id_operador` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_orden`),
  KEY `id_proyecto` (`id_proyecto`),
  KEY `id_operador` (`id_operador`),
  KEY `FK_orden_entrega_persona` (`id_persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pases_personales`
--

CREATE TABLE IF NOT EXISTS `pases_personales` (
  `id_pase` int(11) NOT NULL AUTO_INCREMENT,
  `id_operador` int(11) NOT NULL,
  `nombre_pase` varchar(250) DEFAULT NULL,
  `arch_pase` varchar(250) DEFAULT NULL,
  `fecha_venci` date DEFAULT NULL,
  PRIMARY KEY (`id_pase`),
  KEY `id_operador` (`id_operador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pases_vehiculos`
--

CREATE TABLE IF NOT EXISTS `pases_vehiculos` (
  `id_pasev` int(11) NOT NULL AUTO_INCREMENT,
  `id_vehiculo` int(11) NOT NULL,
  `nombre_pasev` varchar(250) NOT NULL,
  `archi_pasev` varchar(250) DEFAULT NULL,
  `fecha_venci` date NOT NULL,
  PRIMARY KEY (`id_pasev`),
  KEY `id_vehiculo` (`id_vehiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pendientes`
--

CREATE TABLE IF NOT EXISTS `pendientes` (
  `id_pendiente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_pendiente` varchar(150) NOT NULL DEFAULT '0',
  `descripcion_pendiente` varchar(500) NOT NULL DEFAULT '0',
  `fecha_cumplir` date DEFAULT NULL,
  PRIMARY KEY (`id_pendiente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` tinyint(1) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `comercial` varchar(250) DEFAULT NULL,
  `nombre2` text,
  `nombre3` text,
  `apellidos` varchar(50) DEFAULT NULL,
  `apellidos2` text,
  `rfc` varchar(13) DEFAULT NULL,
  `RFC2` text,
  `RFC3` text,
  `telefono` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `direccion_fiscal` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `tipo`, `nombre`, `comercial`, `nombre2`, `nombre3`, `apellidos`, `apellidos2`, `rfc`, `RFC2`, `RFC3`, `telefono`, `email`, `direccion_fiscal`) VALUES
(6, 2, 'Constructora y Abastecedora Ca', NULL, 'Omar', 'Daniel ', 'Kuri', 'Montanaro', 'cac110412bz9', 'KUAO851021CX3', '', '(921)2124242', 'servicios@cacsawc.com', 'lopez mateos 112.A. Colonia Petrolera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `id_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_proy` varchar(100) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_lugar` int(11) NOT NULL,
  `estado_p` enum('En curso','Finalizado') NOT NULL,
  PRIMARY KEY (`id_proyecto`,`id_lugar`),
  KEY `id_persona` (`id_persona`),
  KEY `id_lugar` (`id_lugar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE IF NOT EXISTS `rutas` (
  `id_ruta` int(11) NOT NULL AUTO_INCREMENT,
  `id_orden` int(11) NOT NULL DEFAULT '0',
  `id_lugar` int(11) DEFAULT NULL,
  `id_operador` int(11) NOT NULL,
  `id_giro` int(11) DEFAULT NULL,
  `tipo_servicio` enum('Lunes-Viernes','Lunes-Sabado','Lunes-Domingo','Lunes,Miercoles,Viernes','Martes,Jueves,Sabado','Por Dia') NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `estado_ruta` enum('En curso','Finalizada') NOT NULL DEFAULT 'En curso',
  `subtotal` float DEFAULT NULL,
  `iva` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `nom_ar_r` varchar(100) DEFAULT NULL,
  `ruta_ar_r` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_ruta`),
  KEY `id_lugar` (`id_lugar`),
  KEY `id_operador` (`id_operador`),
  KEY `id_giro` (`id_giro`),
  KEY `id_orden` (`id_orden`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE IF NOT EXISTS `tarifas` (
  `id_tarifa` int(11) NOT NULL AUTO_INCREMENT,
  `id_lugar` int(11) NOT NULL,
  `precio` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tarifa`),
  KEY `id_lugar` (`id_lugar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE IF NOT EXISTS `vehiculos` (
  `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(250) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_vehiculo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehiculo`, `modelo`, `descripcion`) VALUES
(2, 'Taxi', 'MTOTO');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_ruta`
--
ALTER TABLE `detalle_ruta`
  ADD CONSTRAINT `FK_detalle_ruta_inventario` FOREIGN KEY (`id_producto`) REFERENCES `inventario` (`id_producto`),
  ADD CONSTRAINT `FK_detalle_ruta_orden_entrega` FOREIGN KEY (`id_orden`) REFERENCES `orden_entrega` (`id_orden`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `FK_inventario_giros_comerciales` FOREIGN KEY (`id_giro`) REFERENCES `giros_comerciales` (`id_giro`),
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_lugar`) REFERENCES `lugares` (`id_lugar`);

--
-- Filtros para la tabla `orden_entrega`
--
ALTER TABLE `orden_entrega`
  ADD CONSTRAINT `FK_orden_entrega_operadores` FOREIGN KEY (`id_operador`) REFERENCES `operadores` (`id_operador`);

--
-- Filtros para la tabla `pases_personales`
--
ALTER TABLE `pases_personales`
  ADD CONSTRAINT `FK_pases_personales_operadores` FOREIGN KEY (`id_operador`) REFERENCES `operadores` (`id_operador`);

--
-- Filtros para la tabla `pases_vehiculos`
--
ALTER TABLE `pases_vehiculos`
  ADD CONSTRAINT `FK_pases_vehiculos_vehiculos` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculos` (`id_vehiculo`);

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`),
  ADD CONSTRAINT `proyectos_ibfk_2` FOREIGN KEY (`id_lugar`) REFERENCES `lugares` (`id_lugar`);

--
-- Filtros para la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD CONSTRAINT `FK_detalle_rutas_giros_comerciales` FOREIGN KEY (`id_giro`) REFERENCES `giros_comerciales` (`id_giro`),
  ADD CONSTRAINT `FK_rutas_orden_entrega` FOREIGN KEY (`id_orden`) REFERENCES `orden_entrega` (`id_orden`),
  ADD CONSTRAINT `rutas_ibfk_1` FOREIGN KEY (`id_lugar`) REFERENCES `lugares` (`id_lugar`),
  ADD CONSTRAINT `rutas_ibfk_3` FOREIGN KEY (`id_operador`) REFERENCES `operadores` (`id_operador`);

--
-- Filtros para la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD CONSTRAINT `tarifas_ibfk_1` FOREIGN KEY (`id_lugar`) REFERENCES `lugares` (`id_lugar`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
