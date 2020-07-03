-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2020 a las 03:21:50
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parquefa_admincac_cacsa1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloc_notas`
--

CREATE TABLE `bloc_notas` (
  `id_bloc` int(11) NOT NULL,
  `nombre_conta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono_conta` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_conta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nota` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ruta`
--

CREATE TABLE `detalle_ruta` (
  `id_detalle` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_ruta`
--

INSERT INTO `detalle_ruta` (`id_detalle`, `id_orden`, `id_producto`) VALUES
(10, 56, 7),
(11, 56, 6),
(12, 57, 8),
(13, 58, 7),
(19, 70, 24),
(20, 70, 25),
(21, 63, 10),
(24, 72, 29),
(28, 65, 128),
(29, 65, 129),
(30, 68, 16),
(31, 68, 17),
(32, 68, 18),
(33, 73, 38),
(34, 73, 39),
(35, 73, 40),
(36, 73, 41),
(37, 73, 42),
(38, 73, 43),
(39, 73, 44),
(40, 73, 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_rutatemp`
--

CREATE TABLE `detalle_rutatemp` (
  `id_temp` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id_documento` int(11) NOT NULL,
  `nombre_archivo` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `tipo_documento` enum('SalidaOEntrega','RetiroORecoleccion','Reparación','Pases y accesos','Otros') CHARACTER SET latin1 NOT NULL,
  `ruta_archivo` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `fecha_subida` datetime DEFAULT NULL,
  `est_doc` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id_documento`, `nombre_archivo`, `tipo_documento`, `ruta_archivo`, `fecha_subida`, `est_doc`) VALUES
(50, 'Bit_SERVICIO DE SANITARIOS PORTÃ_TILES (WC MÃ_VIL)GRUPO CONSTRUCTOR KAC SA DE CV CASTILLO.pdf', 'Otros', 'Otros/Bit_SERVICIO DE SANITARIOS PORTÃ_TILES (WC MÃ_VIL)GRUPO CONSTRUCTOR KAC SA DE CV CASTILLO.pdf', '2019-06-12 18:22:47', 0),
(51, 'Bit_SERVICIO DE SANITARIOS PORTÃ_TILES (WC MÃ_VIL)GRUPO CONSTRUCTOR KAC SA DE CV CASTILLO (1).pdf', 'Otros', 'Otros/Bit_SERVICIO DE SANITARIOS PORTÃ_TILES (WC MÃ_VIL)GRUPO CONSTRUCTOR KAC SA DE CV CASTILLO (1).pdf', '2019-06-12 18:44:24', 0),
(52, 'Rectángulo 6.png', 'Otros', 'Otros/Rectángulo 6.png', '2019-06-13 12:27:36', 0),
(53, 'Cableado Estructuradofan.docx', '', 'SANTOS GONZALEZ DE LA CRUZ/Cableado Estructuradofan.docx', '2019-06-25 16:38:07', 0),
(54, 'Escaneado_20190522-1119 (3).jpg', 'SalidaOEntrega', 'SalidaOEntrega/Escaneado_20190522-1119 (3).jpg', '2019-06-25 17:11:38', 0),
(55, 'descarga.jpg', 'SalidaOEntrega', 'SalidaOEntrega/descarga.jpg', '2019-06-25 17:12:31', 0),
(56, '', 'SalidaOEntrega', '', '2019-06-25 19:23:59', 0),
(57, 'Modelo-canvas-plantilla-word (2).docx', 'SalidaOEntrega', 'SalidaOEntrega/Modelo-canvas-plantilla-word (2).docx', '2019-06-25 19:24:45', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `giros_comerciales`
--

CREATE TABLE `giros_comerciales` (
  `id_giro` int(11) NOT NULL,
  `nombre_giro` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `est_gir` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'NOT NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `giros_comerciales`
--

INSERT INTO `giros_comerciales` (`id_giro`, `nombre_giro`, `est_gir`) VALUES
(8, 'SERVICIO DE SUMINISTRO DE AGUA POTABLE (H2O)', 1),
(9, 'SERVICIO DE SANITARIOS PORTÁTILES (WC MÓVIL)', 1),
(10, 'SERVICIO DE FOSAS SÉPTICAS', 1),
(11, 'SERVICIO DE KITs', 1),
(12, 'SERVICIO DE RECOLECCIÓN, TRANSPORTE Y DISPOSICIÓN FINAL DE RESIDUOS DE MANEJO ESPECIAL', 1),
(13, 'SERVICIO DE RECOLECCIÓN, TRANSPORTE Y DISPOSICIÓN FINAL DE RESIDUOS SOLIDOS URBANOS', 1),
(14, 'RENTA DE OFICINAS MÓVILES, DORMITORIOS Y CONTENEDORES', 1),
(15, 'SERVICIO ABATIMIENTO DE MANTO FREÁTICO (WELLPOINT)', 1),
(17, 'Prueba', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_producto` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `estado` enum('Disponible','Mantenimiento','En uso') NOT NULL DEFAULT 'Disponible',
  `descrip` varchar(50) DEFAULT NULL,
  `id_lugar` int(11) NOT NULL DEFAULT 1,
  `id_giro` int(11) NOT NULL DEFAULT 1,
  `cantidad` int(11) DEFAULT NULL,
  `est_inv` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'NOT NULL'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_producto`, `codigo`, `estado`, `descrip`, `id_lugar`, `id_giro`, `cantidad`, `est_inv`) VALUES
(10, 'B45', 'En uso', 'WC nuevo 123', 30, 8, 1, 0),
(11, 'CAC-WC-01', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(12, 'CAC-WC-02', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(13, 'CAC-WC-03', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(14, 'CAC-WC-04', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(15, 'CAC-WC-05', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(16, 'CAC-WC-06', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(17, 'CAC-WC-07', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(18, 'CAC-WC-08', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(19, 'CAC-WC-09', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 30, 9, 1, 1),
(20, 'CAC-WC-10', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 25O L', 35, 9, 1, 1),
(21, 'CAC-WC-11', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(22, 'CAC-WC-12', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(23, 'CAC-WC-13', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(24, 'CAC-WC-14', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(25, 'CAC-WC-15', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(26, 'CAC-WC-16', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(27, 'CAC-WC-17', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(28, 'CAC-WC-18', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(29, 'CAC-WC-19', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(30, 'CAC-WC-20', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(31, 'CAC-WC-21', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(32, 'CAC-WC-22', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(33, 'CAC-WC-23', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(34, 'CAC-WC-24', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(35, 'CAC-WC-25', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(36, 'CAC-WC-26', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(37, 'CAC-WC-27', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(38, 'CAC-WC-28', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(39, 'CAC-WC-29', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(40, 'CAC-WC-30', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(41, 'CAC-WC-31', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(42, 'CAC-WC-32', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(43, 'CAC-WC-33', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(44, 'CAC-WC-34', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(45, 'CAC-WC-35', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(46, 'CAC-WC-36', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(47, 'CAC-WC-37', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(48, 'CAC-WC-38', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(49, 'CAC-WC-39', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(50, 'CAC-WC-40', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(51, 'CAC-WC-41', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(52, 'CAC-WC-42', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(53, 'CAC-WC-43', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(54, 'CAC-WC-44', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(55, 'CAC-WC-45', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(56, 'CAC-WC-46', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(57, 'CAC-WC-47', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(58, 'CAC-WC-48', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(59, 'CAC-WC-49', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(60, 'CAC-WC-50', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(61, 'CAC-WC-51', 'Mantenimiento', 'SANITARIO PORTÁTIL POR CAPACIDAD DE 250 LTS', 35, 8, 1, 0),
(62, 'CAC-WC-52', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(63, 'CAC-WC-53', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(64, 'CAC-WC-54', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(65, 'CAC-WC-55', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(66, 'CAC-WC-56', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(67, 'CAC-WC-57', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(68, 'CAC-WC-58', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(69, 'CAC-WC-59', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(70, 'CAC-WC-60', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(71, 'CAC-WC-61', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(72, 'CAC-WC-62', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(73, 'CAC-WC-63', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(74, 'CAC-WC-64', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(75, 'CAC-WC-65', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(76, 'CAC-WC-66', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(77, 'CAC-WC-67', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(78, 'CAC-WC-68', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(79, 'CAC-WC-69', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(80, 'CAC-WC-70', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(81, 'CAC-WC-71', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(82, 'CAC-WC-72', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(83, 'CAC-WC-73', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(84, 'CAC-WC-74', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(85, 'CAC-WC-75', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(86, 'CAC-WC-76', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(87, 'CAC-WC-77', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(88, 'CAC-WC-78', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(89, 'CAC-WC-79', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(90, 'CAC-WC-80', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(91, 'CAC-WC-81', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(92, 'CAC-WC-82', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(93, 'CAC-WC-83', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(94, 'CAC-WC-84', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(95, 'CAC-WC-85', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(96, 'CAC-WC-86', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(97, 'CAC-WC-87', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(98, 'CAC-WC-88', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(99, 'CAC-WC-89', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(100, 'CAC-WC-90', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(101, 'CAC-WC-91', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(102, 'CAC-WC-92', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(103, 'CAC-WC-93', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L ', 35, 9, 1, 1),
(104, 'CAC-WC-94', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(105, 'CAC-WC-95', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(106, 'CAC-WC-96', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(107, 'CAC-WC-97', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(108, 'CAC-WC-98', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(109, 'CAC-WC-99', 'En uso', 'SANITARIO PORTÁTIL POR CAPACIDAD DE 250 LTS', 35, 9, 1, 0),
(110, 'CAC-WC-100', 'En uso', 'SANITARIO PORTÁTIL POR CAPACIDAD DE 250 LTS', 35, 9, 1, 0),
(111, 'CAC-WC-101', 'En uso', 'SANITARIO PORTÁTIL POR CAPACIDAD DE 250 LTS', 35, 9, 1, 0),
(118, 'CAC-WC-102', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(119, 'CAC-WC-103', 'En uso', 'SANITARIO PORTÁTIL POR CAPACIDAD DE 250 LTS', 35, 9, 1, 0),
(120, 'CAC-WC-104', 'En uso', 'SANITARIO PORTÁTIL POR CAPACIDAD DE 250 LTS', 35, 9, 1, 0),
(121, 'CAC-WC-105', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(122, 'CAC-WC-106', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(123, 'CAC-WC-107', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(124, 'CAC-WC-108', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(125, 'CAC-WC-109', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(126, 'CAC-WC-110', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(127, 'CAC-WC-111', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(128, 'SK10', 'En uso', 'Prueba', 35, 17, 1, 0),
(129, 'SK11', 'En uso', 'Prueba', 30, 17, 1, 0),
(131, 'CAC-WC-51', 'Mantenimiento', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(132, 'CAC-WC-99', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(133, 'CAC-WC-100', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(134, 'CAC-WC-101', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(135, 'CAC-WC-112', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 0),
(136, 'CAC-WC-113', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 0),
(137, 'CAC-WC-103', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(138, 'CAC-WC-104', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 9, 1, 1),
(139, 'CAC-FSP-1', 'En uso', 'FOSA SEPTICA', 35, 10, 5, 1),
(140, 'CAC-WC-010', 'En uso', 'SANITARIO PORTÁTIL CON CAPACIDAD DE 250 L', 35, 8, 9, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `id_lugar` int(11) NOT NULL,
  `nombre_lugar` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `est_lug` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id_lugar`, `nombre_lugar`, `est_lug`) VALUES
(30, 'Las Choapas, Veracruz.', 1),
(32, 'Ixthuatlán del Sureste, Veracruz.', 1),
(34, 'Nanchital, Veracruz.', 1),
(35, 'Coatzacoalcos, Veracruz.', 1),
(36, 'Veracruz, Veracruz.', 1),
(37, 'Minatitlán, Veracruz.', 1),
(38, 'Agua Dulce, Veracruz.', 1),
(39, 'Congregación Villa Allende (Coatzacoalcos), Veracruz.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento_productos`
--

CREATE TABLE `mantenimiento_productos` (
  `id_mant` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL DEFAULT 0,
  `descrip` text NOT NULL,
  `fecha_manpro` datetime DEFAULT NULL,
  `costo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento_vehiculos`
--

CREATE TABLE `mantenimiento_vehiculos` (
  `id_mantv` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `descrip` text NOT NULL,
  `fecha` date NOT NULL,
  `costo_manv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operadores`
--

CREATE TABLE `operadores` (
  `id_operador` int(11) NOT NULL,
  `nombres` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email_op` varchar(105) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `direccion` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ife` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imss_arch` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_imss` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lic_manejo` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `est_op` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `operadores`
--

INSERT INTO `operadores` (`id_operador`, `nombres`, `apellidos`, `email_op`, `telefono`, `direccion`, `ife`, `imss_arch`, `no_imss`, `lic_manejo`, `est_op`) VALUES
(11, 'Carlos de Jesús', 'KUBOTA PÉREZ', 'ckubota54@gmail.com', '9211874281', 'Juventino Rosas 1021', NULL, NULL, '123456', NULL, 0),
(12, 'SANTOS', 'GONZALEZ DE LA CRUZ', 'no tiene', '9221020516', 'Fernando López Arias #42, Colonia Barrio Primero, Cosaleacaque, Veracruz.', 'SANTOS GONZALEZ DE LA CRUZ/Modelo-canvas-plantilla-word (2) (1).docx', 'SANTOS GONZALEZ DE LA CRUZ/descarga.jpg', '67088912588', 'SANTOS GONZALEZ DE LA CRUZ/Modelo-canvas-plantilla-word (2) (1).docx', 1),
(13, 'FELIPE DE JESÚS', 'GÓMEZ LUGO', 'felipegomezlugo4@gmail.com', '9996376563', 'Lázaro Cárdenas #1710, Colonia Puerto México, Coatzacoalcos, Veracruz', NULL, NULL, '67129245931', NULL, 0),
(14, 'LUIS ANGEL', 'LOPEZ DE LA CRUZ ', '-----', '921 260 16', 'José Cardel 303 Col. Benito Juárez Norte, Coatzacoalcos, Ver.', NULL, NULL, '67119134640', NULL, 1),
(15, 'ADAN ALFREDO', 'PALACIOS RODRIGUEZ', '-----', '921 180 73', 'Valles Centrales 100 Col. Cd Olmeca. Coatzacoalcos, Ver', NULL, NULL, '67129006556', NULL, 1),
(16, 'mariano', 'kubota', 'starkupm85@hotmail.com', '1312312', 'juentino rosas 1021', NULL, NULL, '', NULL, 0),
(17, 'mariano', 'kubotayaaaa', 'starkupm85@hotmail.com', '1312312', 'juentino rosas 1021', NULL, NULL, '', NULL, 0),
(18, 'mariano', 'kubota', 'starkupm85@hotmail.com', '1312312', 'juentino rosas 1021', NULL, NULL, '', NULL, 0),
(19, ' JOSE ANGEL', 'MARTINEZ DECEANO', '-----', '921 150 94', 'Margaritas 87 Col. Rancho Alegre 1, Coatzacoalcos, Ver.', NULL, NULL, '', NULL, 1),
(20, ' JUAN RICARDO', 'GARCIA NUÑEZ', '-----', '229 138 46', 'Rio Era 1442, FRACC. Lomas de Rio Medio III Veracruz, Ver. ', NULL, NULL, '', NULL, 0),
(21, 'MARTIN VICENTE', 'GONZALEZ HERNANDEZ ', '-----', '921 119 83', 'Porvenir 11 B, Col. Guayacanal, Minatitlán Ver.', NULL, NULL, '', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_entrega`
--

CREATE TABLE `orden_entrega` (
  `id_orden` int(11) NOT NULL,
  `id_proyecto` int(11) DEFAULT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `lugar_entrega` varchar(150) NOT NULL,
  `id_operador` int(11) DEFAULT NULL,
  `est_ord_e` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orden_entrega`
--

INSERT INTO `orden_entrega` (`id_orden`, `id_proyecto`, `id_persona`, `lugar_entrega`, `id_operador`, `est_ord_e`) VALUES
(63, 18, 11, 'CALZADAS', 12, 1),
(64, 18, 9, 'CALZADAS', 12, 0),
(65, 18, 16, 'CALZADAS', 12, 0),
(66, 18, 17, 'CALZADAS', 12, 1),
(67, 18, 11, 'CALZADAS', 12, 0),
(68, 18, 9, 'CALZADAS', 12, 1),
(69, 18, 34, 'CALZADAS', 12, 1),
(70, 19, 10, 'CYDSA - SHALAPA', 15, 1),
(71, 18, 27, 'PVM PAJARITOS', 15, 1),
(72, 18, 29, 'PVM PAJARITOS', 15, 1),
(73, 18, 35, 'PLAYA', 14, 1),
(74, 18, 36, 'IDESA', 15, 1),
(75, 18, 37, 'SPP', 21, 1),
(76, 18, 38, 'EXPO COATZA', 14, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pases_personales`
--

CREATE TABLE `pases_personales` (
  `id_pase` int(11) NOT NULL,
  `id_operador` int(11) NOT NULL,
  `nombre_pase` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `arch_pase` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_venci` date DEFAULT NULL,
  `esta_p_p` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pases_personales`
--

INSERT INTO `pases_personales` (`id_pase`, `id_operador`, `nombre_pase`, `arch_pase`, `fecha_venci`, `esta_p_p`) VALUES
(20, 11, 'kubota', 'Carlos de JesúsKUBOTA PÉREZ/kubota.pdf', '2019-06-13', 0),
(21, 11, 'Lol', 'Carlos de JesúsKUBOTA PÉREZ/Lol.docx', '2019-12-12', 0),
(22, 11, 'kubota', 'Carlos de JesúsKUBOTA PÉREZ/kubota.docx', '2019-05-12', 0),
(23, 12, 'AGUAS RESIDUALES ', 'SantosGonzález de la Cruz/AGUAS RESIDUALES .application/pdf', '2019-06-21', 0),
(24, 12, 'AGUAS RESIDUALES | BREDERO', 'SantosGonzález de la Cruz/AGUAS RESIDUALES | BREDERO.pdf', '2019-06-21', 0),
(25, 15, 'RECOLECCIÓN DE BASURA | BREDERO', 'ADAN ALFREDOPALACIOS RODRIGUEZ/RECOLECCIÓN DE BASURA | BREDERO.pdf', '2019-06-21', 0),
(26, 15, 'RECOLECCIÓN MADERA | BREDERO', 'ADAN ALFREDOPALACIOS RODRIGUEZ/RECOLECCIÓN MADERA | BREDERO.pdf', '2019-06-21', 0),
(27, 12, 'AGUAS RESIDUALES | BREDERO', 'SANTOSGONZALEZ DE LA CRUZ/AGUAS RESIDUALES | BREDERO.application/pdf', '2019-08-22', 1),
(28, 14, 'RECOLECCIÓN DE BASURA | BREDERO', 'LUIS ANGELLOPEZ DE LA CRUZ /RECOLECCIÓN DE BASURA | BREDERO.pdf', '2019-08-22', 1),
(29, 14, 'RECOLECCIÓN MADERA | BREDERO', 'LUIS ANGELLOPEZ DE LA CRUZ /RECOLECCIÓN MADERA | BREDERO.pdf', '2019-08-22', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pases_vehiculos`
--

CREATE TABLE `pases_vehiculos` (
  `id_pasev` int(11) NOT NULL,
  `id_vehiculo` int(11) DEFAULT NULL,
  `nombre_pasev` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `archi_pasev` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fechavenciv` date DEFAULT NULL,
  `est_p_v` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pases_vehiculos`
--

INSERT INTO `pases_vehiculos` (`id_pasev`, `id_vehiculo`, `nombre_pasev`, `archi_pasev`, `fechavenciv`, `est_p_v`) VALUES
(1, 4, 'kubota', 'RAM 2012/kubota.image/jpeg', '2019-06-15', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pendientes`
--

CREATE TABLE `pendientes` (
  `id_pendiente` int(11) NOT NULL,
  `nombre_pendiente` varchar(150) NOT NULL DEFAULT '0',
  `descripcion_pendiente` varchar(500) NOT NULL DEFAULT '0',
  `fecha_cumplir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `comercial` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre3` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rfc` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RFC2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `RFC3` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion_fiscal` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `est_per` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `tipo`, `nombre`, `comercial`, `nombre2`, `nombre3`, `apellidos`, `apellidos2`, `rfc`, `RFC2`, `RFC3`, `telefono`, `email`, `direccion_fiscal`, `est_per`) VALUES
(6, 2, 'Constructora y Abastecedora Calzadas SA de CV', NULL, 'Lalo', 'Daniel ', 'Kuri', 'Montanaro', 'cac110412bz9', 'KUAO851021CX3', '', '(921)2124242', 'servicios@cacsawc.com', 'Av. Lopez Mateos 112.A. Colonia Petrolera', 0),
(7, 2, 'pol', 'pol', 'pedro', 'carlos', 'pepe', 'julion', '13425342DDd', 'ehjhygtfdeswa', 'dasdasd', '019211874281', 'ckubota54@gmail.com', 'Juventino Rosas 1021', 0),
(8, 1, 'susane', NULL, NULL, NULL, 'lopez', NULL, 'mnbvcvbnmk', NULL, NULL, '019211874281', 'asdas@vodka.com', 'Juventino Rosas 1021', 0),
(9, 2, 'ENTREPOSE DE MEXICO SA DE CV', 'ENTREPOSE', 'C.P. Diderot ', '', 'Maldonado Cruz', '', 'EME150710CM3', '', '', '(764) 110 63 56', 'Diderot.MALDONADO@entrepose.com', '\"AV Paseo de la Reforma, 300, 06600, Ciudad de México, PISO 3, Cuauhtémoc, Ciudad de México, México\"', 1),
(10, 2, 'MIURA SERVICIOS INTEGRALES SA DE CV', 'MIURA', 'Lic. Arely ', '', 'Ruiz Candanedo', '', 'MSI1108048G5', '', '', '(921) 16 3 39 7', 'acandanedo@miurasi.com', '\"AV. Revolución, 802, Coatzacoalcos Centro, 96400, Coatzacoalcos, Coatzacoalcos, Veracruz, México\"', 1),
(11, 2, 'GRUPO CONSTRUCTOR KAC SA DE CV', 'KAC', 'LIC. FABIOLA ', '', 'CASTILLO', '', 'GCK0802085W5', '', '', '(921) 212 2808', 'compraskac@gmail.com', 'Zamora #408, Colonia Centro, C.P. 96400, Coatzacoalcos, Ver.', 1),
(12, 2, 'CONSTRULIN SA DE CV', 'CONSTRULIN', 'Ing. Madeleinne', '', 'Salcedo', '', 'CON990813SD2', '', '', '', 'construlin.sa@hotmail.com', 'D, 202, Petrolera, 96850, Minatitlán, Minatitlán, Veracruz, México', 1),
(13, 2, 'SUMINISTRO Y DESARROLLOS DE PROYECTOS INSDUSTRIALES SA DE CV', 'SUMINISTRO Y DESARROLLOS DE PROYECTOS', 'Ing. Melina ', '', 'Quiñones Bielma', '', 'SDP050217KY5', '', '', '(922) 223 2069', 'spi.melina.quinones@gmail.com', 'MIGUEL ALEMAN, 40/0, Buenavista Norte, 96848, Minatitlán, Minatitlán, Veracruz, México', 1),
(14, 2, 'JCO96061347A', 'JUDEL', 'Ing. Daniela ', '', 'Barrios Andrade', '', 'JUDEL CONSTRU', '', '', '', 'daniela_coytra@outlook.com', 'BOULEVARD JOSE M. GZZ, 716, Cadereyta Jiménez Centro, 67480, Cadereyta Jiménez, Cadereyta Jiménez, Nuevo León, México', 1),
(15, 2, 'THE MUDLOGGING COMPANY MEXICO SA DE CV', 'MUDLOGGING ', 'ING PAOLA BERENICE ', '', 'JIMENEZ GUTIERREZ', '', 'MME980831JJ7', '', '', '', 'paola.gutierrez@mudlog.com.mx', 'JOSE MARIA IBARRAN, 47/PISO 6 B, San José Insurgentes, 03900, Ciudad de México, Benito Juárez, Ciudad de México, México', 1),
(16, 2, 'ALMACENAMIENTOS SUBTERRÁNEOS DEL SURESTE', 'CYDSA', 'GUILLERMO ARTURO', '', 'BROCA TREJO', '', 'ASS121115623', '', '', '019212118616', 'victoria.santos@cydsa.com', 'CARRET IXHUATLAN NANCHITA SN IXHUATLAN DEL STEIXHUATLAN, POP NANCHITAL, VER C.P. 96365', 1),
(17, 2, 'GRUPO CONSTRUCTOR DBI SA DE CV', 'DBI ', 'EDGAR DANIEL ', '', 'BAEZA GUERRERO', '', 'GCDB', 'D', '', '21 4 2674', 'd.baeza@live.com.mx', '', 1),
(18, 2, 'Bredero Shaw Mexico, S.A. de C.V.', 'Bredero ', 'Lic. Heydi', '', 'Granados', '', 'BSM931126QCA', '', '', '', 'heidy.granados@shawcor.com', 'Calle: Antigua Carretera a Roma, No exterior: Km 45, Municipio: San Nicolás de los Garza, Localidad: San Nicolás de los Garza, Estado: Nuevo León, Código postal: 66490, País: MEX', 1),
(19, 2, 'GRUAS VILLAREAL, S.A. DE C.V.', 'VILLAREAL', 'Cynthia ', '', 'Simonin Marquez', '', 'AMV950307R56', '', '', '	(921) 215.84.5', 'facturas@gruasvillarreal.com.mx', 'Calle: Carretera Coatza-mina, No exterior: Km. 9.7, Colonia: Esteros del pantano, Municipio: Cosoleacaque, Localidad: Cosoleacaque, Estado: Veracruz, Código postal: 96340, País: MEX', 1),
(20, 2, 'ATRIX S DE RL DE CV', 'ATRIX ', 'SANDRA', '', 'CAMBRANO', '', 'ATR160927942', '', '', '', 'sandra.cambrano@atrixmexico.com', '', 1),
(21, 2, 'NOE ROMERO TORRES', 'SERVICLEAN', 'NOE', '', 'ROMERO TORRES', '', 'ROTN840930M51', 'ROTN840930M51', '', '9932175619', 'servicleandetabasco@hotmail.com', 'Calle: Allende , No exterior: 309, Colonia: Centro, Municipio: Villahermosa, Localidad: Villahermosa, Estado: Tabasco, Código postal: 86000, País: MEX', 0),
(22, 1, 'NOE ROMERO TORRES ', NULL, NULL, NULL, '(SERVICLEAN)', NULL, 'ROTN840930M51', NULL, NULL, '9932175619', 'servicleandetabasco@hotmail.com', 'Calle: Allende , No exterior: 309, Colonia: Centro, Municipio: Villahermosa, Localidad: Villahermosa, Estado: Tabasco, Código postal: 86000, País: MEX', 1),
(23, 2, 'OB INGENIERÍA Y SUMINISTROS, S.A. DE C.V.', 'OBISA', '', '', '', '', 'OIS080404AR4', '', '', '', 'jcarvajalo@obisa.com.mx', 'Calle: AV. Fco. I. Madero, No exterior: 604, No interior: I, Colonia: Coatzacoalcos, Localidad: Coatzacoalcos, Estado: Veracruz, Código postal: 96400, País: MEX', 1),
(24, 2, 'GERMAN MARTELL LOPEZ', 'GERMAN MARTELL ', '', '', '', '', 'MALG600427IP4', '', '', '', 'gustavo.hermann@aidemexico.com', 'Calle: AV. AZCAPOTZALCO, No exterior: 398, No interior: b-1, Colonia: Del Recreo, Municipio: Ciudad de México, Localidad: Azcapotzalco, Estado: Mexico, Código postal: 02070, País: MEX', 1),
(25, 2, 'INSTALACION Y PUESTA EN SERVICIOS DE SISTEMAS ELECTROMECANICOS, S.A. DE C.V.', 'IPSSE', '', '', '', '', 'IPS940428FH9', '', '', '', '', '', 1),
(26, 2, 'SERVICIOS MARINOS Y TERRESTRES, S.A. DE C.V.', 'SEMAT', 'M. A. Carmita ', '', 'Almeida Sánchez.', '', 'SMT960416R7A', '', '', '(993) 3155226', '	calmeidas@semat.mx', '', 1),
(27, 2, 'ICACSA CONSTRUCCIONES S DE RL DE CV', 'ICACSA', 'NADIA', '', 'OCEGUERA', '', 'ICO081031GA6', '', '', '', 'noceguera@icacsac.com.mx', '', 1),
(28, 2, 'OLIMAR LIMPIEZA PROFESIONAL A CORPORATIVOS, S.A. DE C.V.', 'OLIMAR ', 'ALEJANDRA', '', '', '', 'OLP140127GQ4', '', '', '9211435312', 'ventas@olimar.com.mx', '', 1),
(29, 2, 'METALGIA S.A. DE C.V.', 'METALGIA ', 'Nestor Gutierrez Aleman', '', '', '', 'MET190311428', '', '', '', 'proycon.ggarza@outlook.com', '', 1),
(30, 2, 'SUMINISTRO Y DESARROLLOS DE PROYECTOS INSDUSTRIALES SA DE CV', 'SPISA', 'Ing. Melina ', '', 'QUIÑONES BIELMA', '', 'SDP050217KY5', '', '', '', 'spi.melina.quinones@gmail.com', 'Calle: MIGUEL ALEMAN, No exterior: 40, Colonia: BUENAVISTA NORTE, Municipio: MINATITLAN, Localidad: MINATITLAN, Estado: VERACRUZ, Código postal: 96848, País: MEX', 1),
(31, 2, 'RIVMAR EDIFICACIONES DE MEXICO SA DE CV', 'RIVMAR', '', '', '', '', 'REM1401013R2', '', '', '', '', 'alle: PAJARITOS, No exterior: 21, Colonia: PETROLERA, Municipio: BOCA DEL RIO, Localidad: BOCA DEL RIO, Estado: VERACRUZ, Código postal: 94299, País: MEX', 1),
(32, 2, 'NEUTRON ENERGY SA DE CV', 'NEUTRON ', 'JUAN CARLOS', '', 'DIAZ PONCE', '', 'NEN1205237I1', '', '', '', 'jdiaz@neutron.mx ', 'Calle: Gomez Morin, No exterior: 92912, Municipio: Plan de Ayala, Localidad: Plan de Ayala, Estado: Veracruz, Código postal: 92912, País: MEX', 1),
(33, 2, 'GRUPO CONSTRUCTOR DBI, SA DE CV', ' DBI', 'DANIEL', '', 'BAEZA', '', 'GCD150624BBA', '', '', 'd.baeza@live.co', '9211920636', 'Calle: Ahuitzol, No exterior: 31, Colonia: Cuauhtemoc, Municipio: Coatzacoalcos, Localidad: Coatzacoalcos, Estado: Veracruz, Código postal: 96569, País: MEX', 1),
(34, 2, 'Servicios Portuarios Pajaritos S.A. de C.V.', 'SPP', 'Elienai ', '', 'Perez', '', 'SPP9711285F5', '', '', '	01 800 902 250', 'Elienai.Perez@spprentamovil.mx', '', 1),
(35, 2, 'MUNICIPIO DE COATZACOALCOS', 'AYUNTAMIENTO DE CAOTZACOALCOS', 'ING. JUAN MANUEL ', '', 'VIRAMONTES', '', '', '', '', '9211618813', 'adquisiciones@coatzacoalcos.gob.mx ', '', 1),
(36, 2, 'Tecnologias y Equipos de Control S.A de C.V.', 'TECSA', 'LORENA ', '', 'MARTINEZ', '', 'T', '', '', '', '', '', 1),
(37, 2, 'REINIGEN DE MEXICO S DE RL DE CV', 'REINIGEN', '', '', '', '', '', '', '', '', '', '', 1),
(38, 1, 'GUILLERMO ', NULL, NULL, NULL, 'LOPEZ', NULL, '', NULL, NULL, '921 130 2900', '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla_lab`
--

CREATE TABLE `plantilla_lab` (
  `id_plant` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `nombres_plan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos_plan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email_plan` varchar(80) CHARACTER SET latin1 NOT NULL,
  `num_plan` int(50) NOT NULL,
  `direc_plan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ife_arch` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ims_arch` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `licmanej_plan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_imss` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `est_pla` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `plantilla_lab`
--

INSERT INTO `plantilla_lab` (`id_plant`, `id_rol`, `nombres_plan`, `apellidos_plan`, `email_plan`, `num_plan`, `direc_plan`, `ife_arch`, `ims_arch`, `licmanej_plan`, `no_imss`, `est_pla`) VALUES
(1, 1, 'juan', 'perez', 'car@hotmail.com', 12312312, 'juventino rosas', NULL, NULL, NULL, '30120020', 0),
(2, 1, 'zxzxc', 'zxczxczxc', 'zxczxc', 123132, '1231231', 'dasdasda', 'dsdasda', NULL, '1234', 0),
(3, 1, 'marianos', 'kubota', 'starkupm85@hotmail.com', 1312312, 'juentino rosas', NULL, NULL, NULL, '1021 123123v12d', 0),
(4, 1, 'mariano', 'kubota', 'starkupm85@hotmail.com', 12, 'juentino rosas 1021', NULL, NULL, NULL, '123123v12d', 0),
(5, 1, 'carlos', 'kubota', 'ckubota54@gmail.com', 2147483647, 'juentino rosas 1021', NULL, NULL, NULL, '123123v12d', 0),
(6, 1, 'AMANDA', 'CRUZ FERNANDEZ', 'cobranza@cacsawc.com', 0, '', NULL, NULL, NULL, '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `nombre_proy` varchar(100) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_lugar` int(11) NOT NULL,
  `estado_p` enum('En curso','Finalizado') NOT NULL,
  `est_pro` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `nombre_proy`, `id_persona`, `id_lugar`, `estado_p`, `est_pro`) VALUES
(14, 'PAJARITOS', 11, 35, 'En curso', 1),
(16, 'PECOSA', 12, 37, 'En curso', 1),
(17, 'PRUEBA', 14, 34, 'En curso', 0),
(18, 'COATZACOALCOS', 17, 35, 'En curso', 1),
(19, 'IXHUATLAN DEL SURESTE', 16, 32, 'En curso', 1),
(20, 'IXHUATLAN DEL SURESTE', 10, 32, 'En curso', 1),
(21, 'IXHUATLAN DEL SURESTE', 9, 32, 'En curso', 1),
(22, 'IXHUATLAN DEL SURESTE', 34, 32, 'En curso', 1),
(23, 'CUICHAPA', 22, 30, 'En curso', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` text CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'Ingeniero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id_ruta` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL DEFAULT 0,
  `id_lugar` int(11) DEFAULT NULL,
  `id_operador` int(11) NOT NULL,
  `id_giro` int(11) DEFAULT NULL,
  `tipo_servicio` enum('Lunes-Viernes','Lunes-Sabado','Lunes-Domingo','Lunes,Miercoles,Viernes','Martes,Jueves,Sabado','Por Dia') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `estado_ruta` enum('En curso','Finalizada') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'En curso',
  `subtotal` float DEFAULT NULL,
  `iva` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `nom_ar_r` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ruta_ar_r` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `est_rut` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id_ruta`, `id_orden`, `id_lugar`, `id_operador`, `id_giro`, `tipo_servicio`, `fecha_inicio`, `fecha_final`, `estado_ruta`, `subtotal`, `iva`, `total`, `nom_ar_r`, `ruta_ar_r`, `est_rut`) VALUES
(8, 63, 35, 11, 8, 'Lunes-Viernes', '2019-06-01', '2019-06-30', 'En curso', 5600, 896, 6496, NULL, NULL, 0),
(9, 63, 30, 11, 9, 'Lunes-Viernes', '2019-02-12', '2019-12-12', 'En curso', 5600, 896, 6496, NULL, NULL, 0),
(10, 64, 30, 11, 8, 'Lunes,Miercoles,Viernes', '2101-02-12', '2019-12-12', 'En curso', 12331, 1972.96, 14303, NULL, NULL, 0),
(11, 64, 35, 12, 15, 'Lunes-Sabado', '2019-12-12', '2019-02-12', 'En curso', 12331, 1972.96, 14303, NULL, NULL, 0),
(12, 63, 35, 14, 9, 'Lunes-Sabado', '2019-04-10', '2019-10-31', 'En curso', 5600, 896, 6496, NULL, NULL, 0),
(13, 64, 34, 21, 8, 'Por Dia', '1222-12-12', '1111-12-12', 'En curso', 1200, 192, 1392, NULL, NULL, 0),
(14, 64, 32, 15, 9, 'Lunes-Viernes', '2019-08-01', '2019-08-31', 'En curso', 2250, 360, 2610, NULL, NULL, 1),
(15, 70, 32, 15, 9, 'Lunes,Miercoles,Viernes', '2019-08-01', '2019-08-31', 'En curso', 2300, 368, 2668, NULL, NULL, 1),
(16, 65, 32, 15, 9, 'Lunes,Miercoles,Viernes', '2019-08-01', '2019-08-31', 'En curso', 2220, 355.2, 2575, NULL, NULL, 1),
(17, 69, 32, 15, 9, 'Lunes,Miercoles,Viernes', '2019-08-01', '2019-08-31', 'En curso', 2010.2, 321.632, 2331, NULL, NULL, 1),
(18, 73, 35, 12, 9, 'Lunes-Viernes', '2019-08-07', '2019-08-11', 'En curso', 10400, 1664, 12064, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `id_tarifa` int(11) NOT NULL,
  `id_lugar` int(11) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `est_tar` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarifas`
--

INSERT INTO `tarifas` (`id_tarifa`, `id_lugar`, `precio`, `est_tar`) VALUES
(1, 30, '300-400', 1),
(2, 32, '1200-3000 MXN', 1),
(3, 32, '1200-3000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_cacsa`
--

CREATE TABLE `usuarios_cacsa` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios_cacsa`
--

INSERT INTO `usuarios_cacsa` (`id`, `nombre_usuario`, `password`, `id_rol`) VALUES
(6, 'kubota', '1234', 1),
(7, 'Arturo', '1234', 1),
(8, 'Hector', '1234', 1),
(9, 'Toño', '1234', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_roles`
--

CREATE TABLE `usuarios_roles` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios_roles`
--

INSERT INTO `usuarios_roles` (`id_rol`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Operador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id_vehiculo` int(11) NOT NULL,
  `modelo` varchar(250) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `est_ve` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehiculo`, `modelo`, `descripcion`, `est_ve`) VALUES
(4, 'RAM 2012', 'Puerta rota', 1),
(5, '2017', 'RAM 4000', 1),
(6, '1997', 'FORD RANGER', 1),
(7, '2006', 'RAM 4000', 1),
(8, '2016', 'RAM 4000', 1),
(9, '2000', 'PIPA RENOVA', 1),
(10, 'KODIAK', 'PIPA ', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bloc_notas`
--
ALTER TABLE `bloc_notas`
  ADD PRIMARY KEY (`id_bloc`);

--
-- Indices de la tabla `detalle_ruta`
--
ALTER TABLE `detalle_ruta`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `id_orden` (`id_orden`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `detalle_rutatemp`
--
ALTER TABLE `detalle_rutatemp`
  ADD PRIMARY KEY (`id_temp`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `giros_comerciales`
--
ALTER TABLE `giros_comerciales`
  ADD PRIMARY KEY (`id_giro`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_lugar` (`id_lugar`),
  ADD KEY `id_giro` (`id_giro`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id_lugar`);

--
-- Indices de la tabla `mantenimiento_productos`
--
ALTER TABLE `mantenimiento_productos`
  ADD PRIMARY KEY (`id_mant`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `mantenimiento_vehiculos`
--
ALTER TABLE `mantenimiento_vehiculos`
  ADD PRIMARY KEY (`id_mantv`),
  ADD KEY `id_vehiculo` (`id_vehiculo`);

--
-- Indices de la tabla `operadores`
--
ALTER TABLE `operadores`
  ADD PRIMARY KEY (`id_operador`);

--
-- Indices de la tabla `orden_entrega`
--
ALTER TABLE `orden_entrega`
  ADD PRIMARY KEY (`id_orden`),
  ADD KEY `id_proyecto` (`id_proyecto`),
  ADD KEY `id_operador` (`id_operador`),
  ADD KEY `FK_orden_entrega_persona` (`id_persona`);

--
-- Indices de la tabla `pases_personales`
--
ALTER TABLE `pases_personales`
  ADD PRIMARY KEY (`id_pase`),
  ADD KEY `id_operador` (`id_operador`);

--
-- Indices de la tabla `pases_vehiculos`
--
ALTER TABLE `pases_vehiculos`
  ADD PRIMARY KEY (`id_pasev`),
  ADD KEY `id_vehiculo` (`id_vehiculo`);

--
-- Indices de la tabla `pendientes`
--
ALTER TABLE `pendientes`
  ADD PRIMARY KEY (`id_pendiente`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `plantilla_lab`
--
ALTER TABLE `plantilla_lab`
  ADD PRIMARY KEY (`id_plant`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`,`id_lugar`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id_lugar` (`id_lugar`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id_ruta`),
  ADD KEY `id_lugar` (`id_lugar`),
  ADD KEY `id_operador` (`id_operador`),
  ADD KEY `id_giro` (`id_giro`),
  ADD KEY `id_orden` (`id_orden`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`id_tarifa`),
  ADD KEY `id_lugar` (`id_lugar`);

--
-- Indices de la tabla `usuarios_cacsa`
--
ALTER TABLE `usuarios_cacsa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `usuarios_roles`
--
ALTER TABLE `usuarios_roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id_vehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bloc_notas`
--
ALTER TABLE `bloc_notas`
  MODIFY `id_bloc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_ruta`
--
ALTER TABLE `detalle_ruta`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `detalle_rutatemp`
--
ALTER TABLE `detalle_rutatemp`
  MODIFY `id_temp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `giros_comerciales`
--
ALTER TABLE `giros_comerciales`
  MODIFY `id_giro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id_lugar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `mantenimiento_productos`
--
ALTER TABLE `mantenimiento_productos`
  MODIFY `id_mant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mantenimiento_vehiculos`
--
ALTER TABLE `mantenimiento_vehiculos`
  MODIFY `id_mantv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `operadores`
--
ALTER TABLE `operadores`
  MODIFY `id_operador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `orden_entrega`
--
ALTER TABLE `orden_entrega`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `pases_personales`
--
ALTER TABLE `pases_personales`
  MODIFY `id_pase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `pases_vehiculos`
--
ALTER TABLE `pases_vehiculos`
  MODIFY `id_pasev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pendientes`
--
ALTER TABLE `pendientes`
  MODIFY `id_pendiente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `plantilla_lab`
--
ALTER TABLE `plantilla_lab`
  MODIFY `id_plant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id_ruta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `id_tarifa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios_cacsa`
--
ALTER TABLE `usuarios_cacsa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios_roles`
--
ALTER TABLE `usuarios_roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `FK_inventario_giros_comerciales` FOREIGN KEY (`id_giro`) REFERENCES `giros_comerciales` (`id_giro`),
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_lugar`) REFERENCES `lugares` (`id_lugar`);

--
-- Filtros para la tabla `mantenimiento_productos`
--
ALTER TABLE `mantenimiento_productos`
  ADD CONSTRAINT `FK_mantenimiento_productos_inventario` FOREIGN KEY (`id_producto`) REFERENCES `inventario` (`id_producto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `mantenimiento_vehiculos`
--
ALTER TABLE `mantenimiento_vehiculos`
  ADD CONSTRAINT `FK_mantenimiento_vehiculos_vehiculos` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculos` (`id_vehiculo`) ON UPDATE CASCADE;

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
  ADD CONSTRAINT `operadores_ibfk_1` FOREIGN KEY (`id_operador`) REFERENCES `operadores` (`id_operador`),
  ADD CONSTRAINT `rutas_ibfk_1` FOREIGN KEY (`id_lugar`) REFERENCES `lugares` (`id_lugar`);

--
-- Filtros para la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD CONSTRAINT `tarifas_ibfk_1` FOREIGN KEY (`id_lugar`) REFERENCES `lugares` (`id_lugar`);

--
-- Filtros para la tabla `usuarios_cacsa`
--
ALTER TABLE `usuarios_cacsa`
  ADD CONSTRAINT `FK_usuarios_usuarios_roles` FOREIGN KEY (`id_rol`) REFERENCES `usuarios_roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
