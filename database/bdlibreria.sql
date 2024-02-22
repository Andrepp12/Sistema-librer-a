-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2024 a las 22:20:28
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6
drop database if exists bdlibreria;
create database bdlibreria;
use bdlibreria;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdlibreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `idAlmacen` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`idAlmacen`, `nombre`, `estado`) VALUES
(9, 'ALMACEN A', 0),
(10, 'ALMACEN A', 1),
(11, 'ALMACEN B', 1),
(12, 'ALMACEN C', 1),
(13, 'E', 1),
(14, 'c', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `idAsistencia` int(11) NOT NULL,
  `idTrabajador` tinyint(4) NOT NULL,
  `idFecha` int(11) NOT NULL,
  `hora_extra` tinyint(4) DEFAULT NULL,
  `estadoA` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asistencias`
--

INSERT INTO `asistencias` (`idAsistencia`, `idTrabajador`, `idFecha`, `hora_extra`, `estadoA`) VALUES
(1, 1, 32, 0, '3'),
(2, 2, 32, 0, '2'),
(3, 3, 32, 0, '3'),
(4, 3, 33, 0, '3'),
(5, 2, 33, 0, '1'),
(6, 1, 33, 2, '2'),
(7, 2, 34, 0, '3'),
(8, 3, 34, 0, '3'),
(9, 1, 34, 0, '3'),
(10, 3, 35, 0, '3'),
(11, 1, 35, 0, '3'),
(12, 2, 35, 0, '3'),
(13, 3, 36, 0, '1'),
(14, 2, 36, 0, '3'),
(15, 1, 36, 0, '3'),
(16, 3, 37, 0, '3'),
(17, 2, 37, 0, '3'),
(18, 1, 37, 0, '3'),
(19, 3, 38, 0, '3'),
(20, 2, 38, 0, '1'),
(21, 1, 38, 0, '3'),
(22, 3, 39, 0, '2'),
(23, 1, 39, 0, '2'),
(24, 2, 39, 1, '3'),
(25, 3, 40, 0, '3'),
(26, 2, 40, 0, '3'),
(27, 1, 40, 5, '2'),
(28, 3, 41, 0, '3'),
(29, 2, 41, 0, '3'),
(30, 1, 41, 0, '1'),
(31, 3, 42, 0, '2'),
(32, 1, 42, 0, '3'),
(33, 2, 42, 0, '3'),
(34, 1, 43, 0, '3'),
(35, 3, 43, 0, '3'),
(36, 2, 43, 0, '2'),
(37, 3, 44, 0, '3'),
(38, 2, 44, 0, '3'),
(39, 1, 44, 0, '3'),
(40, 3, 45, 0, '3'),
(41, 1, 45, 0, '3'),
(42, 2, 45, 0, '3'),
(43, 3, 46, 0, '3'),
(44, 1, 46, 0, '3'),
(45, 2, 46, 1, '3'),
(46, 3, 94, 2, '3'),
(47, 1, 94, 0, '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balance_general2s`
--

CREATE TABLE `balance_general2s` (
  `idBalance` int(11) NOT NULL,
  `efectivo` float NOT NULL,
  `cuentasxcobrar` float NOT NULL,
  `inventario` float NOT NULL,
  `inversion` float NOT NULL,
  `bono` float NOT NULL,
  `accion` float NOT NULL,
  `letrasxcobrar` float NOT NULL,
  `enser` float NOT NULL,
  `otributaria` float NOT NULL,
  `olaboral` float NOT NULL,
  `ocomercial` float NOT NULL,
  `olargoplazo` float NOT NULL,
  `capital` float NOT NULL,
  `reserva` float NOT NULL,
  `tac` float NOT NULL,
  `tanc` float NOT NULL,
  `ta` float NOT NULL,
  `tpc` float NOT NULL,
  `tpnc` float NOT NULL,
  `tpsvo` float NOT NULL,
  `tptri` float NOT NULL,
  `tpp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `balance_general2s`
--

INSERT INTO `balance_general2s` (`idBalance`, `efectivo`, `cuentasxcobrar`, `inventario`, `inversion`, `bono`, `accion`, `letrasxcobrar`, `enser`, `otributaria`, `olaboral`, `ocomercial`, `olargoplazo`, `capital`, `reserva`, `tac`, `tanc`, `ta`, `tpc`, `tpnc`, `tpsvo`, `tptri`, `tpp`) VALUES
(1, 6751, 10877, 8446, 14499, 6346, 11291, 7402, 85314, 12081, 13087, 12091, 12401, 6424, 8557, 40573, 110353, 150926, 25168, 24492, 49660, 14981, 64641),
(2, 6751.5, 10877, 8446, 14499, 6346, 11268, 7402, 85314, 12081, 13087, 12091, 12401, 6424, 8557, 40573, 110330, 150903, 25168, 24492, 49660, 14981, 64641),
(3, 12306.5, 10877, 8446, 14499, 6346, 11268, 7402, 85314, 12081, 13087, 12091, 12401, 6424, 8557, 40573, 110330, 150903, 25168, 24492, 49660, 14981, 64641),
(4, 6751.5, 10877, 8446, 14499, 6346, 11268, 7402, 85314, 12081, 13087, 12091, 12401, 6424, 8557, 40573, 110330, 150903, 25168, 24492, 49660, 14981, 64641),
(5, 6751.5, 10877, 8446, 14499, 6346, 11268, 7402, 85314, 12081, 13087, 12091, 12401, 6424, 8557, 40573, 110330, 150903, 25168, 24492, 49660, 14981, 64641),
(6, 6751.5, 10925, 8446, 14499, 6346, 11268, 7402, 85314, 12081, 13087, 12091, 12401, 6424, 8557, 40621, 110330, 150951, 25168, 24492, 49660, 14981, 64641),
(7, 6751.5, 10926, 8446, 14499, 6346, 11268, 7402, 85314, 12081, 13087, 12091, 12401, 6424, 8557, 40622, 110330, 150952, 25168, 24492, 49660, 14981, 64641),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balance_generals`
--

CREATE TABLE `balance_generals` (
  `idBalance` int(11) NOT NULL,
  `efectivo` float NOT NULL,
  `cuentasxcobrar` float NOT NULL,
  `inventario` float NOT NULL,
  `inversion` float NOT NULL,
  `bono` float NOT NULL,
  `accion` float NOT NULL,
  `letrasxcobrar` float NOT NULL,
  `enser` float NOT NULL,
  `otributaria` float NOT NULL,
  `olaboral` float NOT NULL,
  `ocomercial` float NOT NULL,
  `olargoplazo` float NOT NULL,
  `capital` float NOT NULL,
  `reserva` float NOT NULL,
  `estado` char(1) NOT NULL,
  `dia` char(2) NOT NULL,
  `mes` char(2) NOT NULL,
  `ano` char(4) NOT NULL,
  `tac` float NOT NULL,
  `tanc` float NOT NULL,
  `ta` float NOT NULL,
  `tpc` float NOT NULL,
  `tpnc` float NOT NULL,
  `tpsvo` float NOT NULL,
  `tptri` float NOT NULL,
  `tpp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `balance_generals`
--

INSERT INTO `balance_generals` (`idBalance`, `efectivo`, `cuentasxcobrar`, `inventario`, `inversion`, `bono`, `accion`, `letrasxcobrar`, `enser`, `otributaria`, `olaboral`, `ocomercial`, `olargoplazo`, `capital`, `reserva`, `estado`, `dia`, `mes`, `ano`, `tac`, `tanc`, `ta`, `tpc`, `tpnc`, `tpsvo`, `tptri`, `tpp`) VALUES
(1, 15, 4545, 2121, 332, 12, 555, 556, 78979, 4545, 6352, 4555, 5456, 66, 2222, '1', '30', '01', '2023', 7013, 80102, 87115, 10897, 10011, 20908, 2288, 23196),
(2, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, '1', '28', '02', '2023', 5024, 5024, 10048, 2512, 2512, 5024, 2512, 7536),
(3, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, '1', '31', '03', '2023', 5024, 5024, 10048, 2512, 2512, 5024, 2512, 7536),
(4, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, '1', '30', '04', '2023', 5024, 5024, 10048, 2512, 2512, 5024, 2512, 7536),
(5, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, '1', '30', '05', '2023', 5024, 5024, 10048, 2512, 2512, 5024, 2512, 7536),
(6, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, 1256, '1', '30', '06', '2023', 5024, 5024, 10048, 2512, 2512, 5024, 2512, 7536),
(7, 456.5, 101, 45, 7887, 54, 4433, 566, 55, 1256, 455, 1256, 665, 78, 55, '1', '16', '07', '2023', 8489, 5108, 13597, 1711, 1921, 3632, 133, 3765),
(8, 5555, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '16', '07', '2023', 0, 0, 0, 0, 0, 0, 0, 0),
(9, 543, 435, 3456, 567, 987, 354, 65, 57, 88, 56, 345, 5678, 868, 756, '1', '19', '01', '2024', 5001, 1463, 6464, 144, 6023, 6167, 1624, 7791);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id_cliente` int(11) NOT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `DNI` varchar(8) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `Correo` varchar(500) DEFAULT NULL,
  `Celular` varchar(9) DEFAULT NULL,
  `Notas` varchar(500) DEFAULT NULL,
  `idsegmento` int(11) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `sendCorreo` int(11) DEFAULT NULL,
  `creaPerfil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id_cliente`, `Nombres`, `Apellidos`, `DNI`, `FechaNacimiento`, `Edad`, `Correo`, `Celular`, `Notas`, `idsegmento`, `estado`, `sendCorreo`, `creaPerfil`) VALUES
(1, 'Andre', 'Prieto', '12345679', '2002-10-11', 20, 'andre.flog@gmail.com', '957733147', 'ci', 1, 1, 0, 1),
(2, 'Elvis', 'oRTIZ', '12345678', '2024-01-16', 20, 'T033300320@UNITRU.EDU.PE', '123456789', 'hfh', 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dashboard`
--

CREATE TABLE `dashboard` (
  `idDasbhboard` int(11) NOT NULL,
  `pdf` varchar(25) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dashboard`
--

INSERT INTO `dashboard` (`idDasbhboard`, `pdf`, `estado`) VALUES
(1, 'Exam.pdf', 1),
(2, 'imagen2.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desecho_recurso`
--

CREATE TABLE `desecho_recurso` (
  `idRecuDesecho` int(11) NOT NULL,
  `idRecurso` int(11) NOT NULL,
  `Identificador` char(6) DEFAULT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Fecha` date NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `desecho_recurso`
--

INSERT INTO `desecho_recurso` (`idRecuDesecho`, `idRecurso`, `Identificador`, `Descripcion`, `Fecha`, `estado`) VALUES
(7, 1, NULL, 'Ninguna', '2023-07-21', 0),
(10, 6, NULL, 'sssss', '2023-07-28', 0),
(11, 4, NULL, 'asdsdadsa', '2023-07-22', 0),
(12, 14, 'DE5090', 'adadsasd', '2024-01-19', 1),
(13, 14, 'DE6039', 'ddassad', '2024-01-19', 0),
(14, 15, 'DE4813', 'wqdwq', '2024-01-27', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalledevolucion`
--

CREATE TABLE `detalledevolucion` (
  `iddevolucion` int(11) NOT NULL,
  `idrecurso` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleoperacion`
--

CREATE TABLE `detalleoperacion` (
  `idoperacion` int(11) NOT NULL,
  `idAlmacen` int(11) NOT NULL,
  `idRecurso` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalleoperacion`
--

INSERT INTO `detalleoperacion` (`idoperacion`, `idAlmacen`, `idRecurso`, `cantidad`) VALUES
(1, 10, 13, 10),
(1, 10, 14, 2),
(1, 10, 15, 5),
(1, 10, 16, 6),
(1, 11, 13, 1),
(1, 11, 14, 1),
(1, 11, 15, 5),
(1, 11, 16, 1),
(1, 12, 13, 1),
(1, 12, 14, 1),
(1, 12, 15, 5),
(1, 12, 16, 3),
(1, 13, 13, 2),
(1, 13, 15, 3),
(1, 13, 16, 1),
(1, 14, 13, 4),
(1, 14, 15, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallereserva`
--

CREATE TABLE `detallereserva` (
  `idreserva` int(11) NOT NULL,
  `idrecurso` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallereserva`
--

INSERT INTO `detallereserva` (`idreserva`, `idrecurso`, `cantidad`) VALUES
(6, 1, 1),
(7, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE `detalleventa` (
  `idVenta` int(11) NOT NULL,
  `idRecurso` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalleventa`
--

INSERT INTO `detalleventa` (`idVenta`, `idRecurso`, `cantidad`) VALUES
(22, 1, 1),
(22, 4, 1),
(23, 1, 1),
(23, 4, 1),
(24, 1, 6),
(24, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_entrega`
--

CREATE TABLE `detalle_entrega` (
  `idRecuDesecho` int(11) NOT NULL,
  `idReciclador` int(11) NOT NULL,
  `FechaEntrega` date NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Pago` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_planillas`
--

CREATE TABLE `detalle_planillas` (
  `idDPlanilla` int(4) NOT NULL,
  `idPlanilla` int(4) NOT NULL,
  `idTrabajador` tinyint(4) NOT NULL,
  `sueldo` float NOT NULL,
  `descuento` float NOT NULL,
  `bonificacion` float NOT NULL,
  `desembolso` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_planillas`
--

INSERT INTO `detalle_planillas` (`idDPlanilla`, `idPlanilla`, `idTrabajador`, `sueldo`, `descuento`, `bonificacion`, `desembolso`) VALUES
(1, 1, 1, 800, 0, 0, 800),
(2, 1, 2, 1000, 0, 0, 1000),
(3, 1, 3, 900, 0, 0, 900),
(4, 2, 1, 800, 0, 0, 800),
(5, 2, 2, 1000, 0, 0, 1000),
(6, 2, 3, 900, 0, 0, 900),
(7, 3, 1, 800, 0, 0, 800),
(8, 3, 2, 1000, 0, 0, 1000),
(9, 3, 3, 900, 0, 0, 900),
(10, 4, 1, 800, 0, 0, 800),
(11, 4, 2, 1000, 0, 0, 1000),
(12, 4, 3, 900, 0, 0, 900),
(13, 5, 1, 800, 0, 0, 800),
(14, 5, 2, 1000, 0, 0, 1000),
(15, 5, 3, 900, 0, 0, 900),
(16, 6, 1, 800, 0, 0, 800),
(17, 6, 2, 1000, 0, 0, 1000),
(18, 6, 3, 900, 0, 0, 900),
(19, 7, 1, 800, 48, 7, 759),
(20, 7, 2, 1000, 80, 2, 922),
(21, 7, 3, 900, 45, 0, 855),
(22, 8, 1, 800, 0, 0, 800),
(23, 8, 2, 1000, 0, 0, 1000),
(24, 8, 3, 900, 0, 0, 900),
(25, 9, 1, 800, 48, 112, 864),
(26, 9, 2, 1000, 80, 40, 960),
(27, 9, 3, 900, 45, 0, 855),
(28, 10, 1, 800, 48, 56, 808),
(29, 10, 2, 1000, 80, 20, 940),
(30, 10, 3, 900, 45, 0, 855),
(31, 11, 1, 800, 0, 0, 800),
(32, 11, 2, 1000, 0, 0, 1000),
(33, 11, 3, 900, 0, 0, 900),
(34, 12, 1, 800, 0, 0, 800),
(35, 12, 2, 1000, 0, 0, 1000),
(36, 12, 3, 900, 0, 0, 900),
(37, 13, 1, 1025, 0, 0, 1025),
(38, 13, 2, 1500, 0, 0, 1500),
(39, 13, 3, 1500, 0, 30, 1530),
(40, 14, 1, 1025, 0, 0, 1025),
(41, 14, 2, 1500, 0, 0, 1500),
(42, 14, 3, 1500, 0, 30, 1530),
(43, 14, 4, 1025, 0, 0, 1025),
(44, 14, 5, 1025, 0, 0, 1025),
(45, 14, 6, 1025, 0, 0, 1025);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

CREATE TABLE `devolucion` (
  `idDevolucion` int(11) NOT NULL,
  `fechadev` date NOT NULL,
  `idVenta` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `razon` varchar(200) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `devolucion`
--

INSERT INTO `devolucion` (`idDevolucion`, `fechadev`, `idVenta`, `idCliente`, `razon`, `estado`) VALUES
(5, '2023-07-18', 22, 1, 'no me gusto', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion_general`
--

CREATE TABLE `devolucion_general` (
  `idDevolucion_G` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `idDevolucion` int(11) NOT NULL,
  `fechag` date NOT NULL,
  `motivo` text NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `devolucion_general`
--

INSERT INTO `devolucion_general` (`idDevolucion_G`, `id_usuario`, `idDevolucion`, `fechag`, `motivo`, `estado`) VALUES
(1, 3, 5, '2023-07-18', 'Fallos en impresion', 1),
(2, 3, 5, '2023-07-18', 'Fallos en impresion', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE `fechas` (
  `idFecha` int(11) NOT NULL,
  `dia` char(2) NOT NULL,
  `mes` char(2) NOT NULL,
  `ano` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fechas`
--

INSERT INTO `fechas` (`idFecha`, `dia`, `mes`, `ano`) VALUES
(1, '1', '01', '2023'),
(2, '2', '01', '2023'),
(3, '3', '01', '2023'),
(4, '4', '01', '2023'),
(5, '5', '01', '2023'),
(6, '6', '01', '2023'),
(7, '7', '01', '2023'),
(8, '8', '01', '2023'),
(9, '9', '01', '2023'),
(10, '10', '01', '2023'),
(11, '11', '01', '2023'),
(12, '12', '01', '2023'),
(13, '13', '01', '2023'),
(14, '14', '01', '2023'),
(15, '15', '01', '2023'),
(16, '16', '01', '2023'),
(17, '17', '01', '2023'),
(18, '18', '01', '2023'),
(19, '19', '01', '2023'),
(20, '20', '01', '2023'),
(21, '21', '01', '2023'),
(22, '22', '01', '2023'),
(23, '23', '01', '2023'),
(24, '24', '01', '2023'),
(25, '25', '01', '2023'),
(26, '26', '01', '2023'),
(27, '27', '01', '2023'),
(28, '28', '01', '2023'),
(29, '29', '01', '2023'),
(30, '30', '01', '2023'),
(31, '31', '01', '2023'),
(32, '1', '07', '2023'),
(33, '2', '07', '2023'),
(34, '3', '07', '2023'),
(35, '4', '07', '2023'),
(36, '5', '07', '2023'),
(37, '6', '07', '2023'),
(38, '7', '07', '2023'),
(39, '8', '07', '2023'),
(40, '9', '07', '2023'),
(41, '10', '07', '2023'),
(42, '11', '07', '2023'),
(43, '12', '07', '2023'),
(44, '13', '07', '2023'),
(45, '14', '07', '2023'),
(46, '15', '07', '2023'),
(47, '16', '07', '2023'),
(48, '17', '07', '2023'),
(49, '18', '07', '2023'),
(50, '19', '07', '2023'),
(51, '20', '07', '2023'),
(52, '21', '07', '2023'),
(53, '22', '07', '2023'),
(54, '23', '07', '2023'),
(55, '24', '07', '2023'),
(56, '25', '07', '2023'),
(57, '26', '07', '2023'),
(58, '27', '07', '2023'),
(59, '28', '07', '2023'),
(60, '29', '07', '2023'),
(61, '30', '07', '2023'),
(62, '31', '07', '2023'),
(63, '1', '07', '2022'),
(64, '2', '07', '2022'),
(65, '3', '07', '2022'),
(66, '4', '07', '2022'),
(67, '5', '07', '2022'),
(68, '6', '07', '2022'),
(69, '7', '07', '2022'),
(70, '8', '07', '2022'),
(71, '9', '07', '2022'),
(72, '10', '07', '2022'),
(73, '11', '07', '2022'),
(74, '12', '07', '2022'),
(75, '13', '07', '2022'),
(76, '14', '07', '2022'),
(77, '15', '07', '2022'),
(78, '16', '07', '2022'),
(79, '17', '07', '2022'),
(80, '18', '07', '2022'),
(81, '19', '07', '2022'),
(82, '20', '07', '2022'),
(83, '21', '07', '2022'),
(84, '22', '07', '2022'),
(85, '23', '07', '2022'),
(86, '24', '07', '2022'),
(87, '25', '07', '2022'),
(88, '26', '07', '2022'),
(89, '27', '07', '2022'),
(90, '28', '07', '2022'),
(91, '29', '07', '2022'),
(92, '30', '07', '2022'),
(93, '31', '07', '2022'),
(94, '1', '01', '2024'),
(95, '2', '01', '2024'),
(96, '3', '01', '2024'),
(97, '4', '01', '2024'),
(98, '5', '01', '2024'),
(99, '6', '01', '2024'),
(100, '7', '01', '2024'),
(101, '8', '01', '2024'),
(102, '9', '01', '2024'),
(103, '10', '01', '2024'),
(104, '11', '01', '2024'),
(105, '12', '01', '2024'),
(106, '13', '01', '2024'),
(107, '14', '01', '2024'),
(108, '15', '01', '2024'),
(109, '16', '01', '2024'),
(110, '17', '01', '2024'),
(111, '18', '01', '2024'),
(112, '19', '01', '2024'),
(113, '20', '01', '2024'),
(114, '21', '01', '2024'),
(115, '22', '01', '2024'),
(116, '23', '01', '2024'),
(117, '24', '01', '2024'),
(118, '25', '01', '2024'),
(119, '26', '01', '2024'),
(120, '27', '01', '2024'),
(121, '28', '01', '2024'),
(122, '29', '01', '2024'),
(123, '30', '01', '2024'),
(124, '31', '01', '2024');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `idMaterial` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`idMaterial`, `Nombre`, `Cantidad`, `Estado`) VALUES
(1, 'Cinta', 50, 1),
(2, 'Vinifan', 101, 1),
(3, 'Papel de color', 90, 0),
(4, 'Celofan', 10, 1),
(5, 'Cartulina', 6, 1),
(6, 'Goma', 12, 1),
(7, 'Super Glue', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_08_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_08_03_061844_create_user_types_table', 1),
(4, '2022_08_03_061918_create_role_type_users_table', 1),
(5, '2022_08_04_053627_create_sequence_tbls_table', 1),
(6, '2022_08_04_053741_create_generate_id_tbls_table', 1),
(7, '2023_02_26_224452_create_students_table', 1),
(8, '2023_04_17_223959_create_teachers_table', 1),
(9, '2023_09_16_222120_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

CREATE TABLE `operacion` (
  `idoperacion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `subtotal` int(11) NOT NULL,
  `igv` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `operacion`
--

INSERT INTO `operacion` (`idoperacion`, `fecha`, `subtotal`, `igv`, `total`, `id_usuario`, `estado`) VALUES
(1, '2023-07-19', 23, 4, 27, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planillas`
--

CREATE TABLE `planillas` (
  `idPlanilla` int(4) NOT NULL,
  `mes` char(2) NOT NULL,
  `ano` char(4) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `planillas`
--

INSERT INTO `planillas` (`idPlanilla`, `mes`, `ano`, `estado`) VALUES
(1, '01', '2023', '1'),
(2, '02', '2023', '1'),
(3, '03', '2023', '1'),
(4, '04', '2023', '1'),
(5, '05', '2023', '1'),
(6, '06', '2023', '1'),
(7, '07', '2023', '0'),
(8, '11', '2023', '0'),
(9, '07', '2023', '0'),
(10, '07', '2023', '1'),
(11, '02', '2022', '1'),
(12, '01', '2024', '0'),
(13, '01', '2024', '0'),
(14, '01', '2024', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reciclador`
--

CREATE TABLE `reciclador` (
  `IdReciclador` int(11) NOT NULL,
  `NombreInstitucion` varchar(100) NOT NULL,
  `Representante` varchar(100) NOT NULL,
  `Contacto` varchar(40) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reciclador`
--

INSERT INTO `reciclador` (`IdReciclador`, `NombreInstitucion`, `Representante`, `Contacto`, `estado`) VALUES
(1, 'SEGAT', 'Jose Hernandez', '976491345', 1),
(2, 'MUNICIPALIDAD', 'Jack Portilla', '938611040', 0),
(3, 'MINEDU', 'Jose Benites', '927378223', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recurso`
--

CREATE TABLE `recurso` (
  `idRecurso` int(11) NOT NULL,
  `tipo` varchar(35) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recurso`
--

INSERT INTO `recurso` (`idRecurso`, `tipo`, `estado`) VALUES
(1, 'RECURSO BIBLIOGRAFICO', 1),
(2, 'RECURSO NO BIBLIOGRAFICO', 1),
(3, 'RECURSO NO BIBLIOGRAFICO', 1),
(4, 'RECURSO BIBLIOGRAFICO', 1),
(5, 'RECURSO BIBLIOGRAFICO', 1),
(6, 'RECURSO BIBLIOGRAFICO', 1),
(7, 'RECURSO NO BIBLIOGRAFICO', 1),
(8, 'RECURSO BIBLIOGRAFICO', 1),
(9, 'RECURSO BIBLIOGRAFICO', 1),
(10, 'RECURSO BIBLIOGRAFICO', 1),
(11, 'RECURSO BIBLIOGRAFICO', 1),
(12, 'RECURSO BIBLIOGRAFICO', 1),
(13, 'RECURSO BIBLIOGRAFICO', 1),
(14, 'RECURSO BIBLIOGRAFICO', 1),
(15, 'RECURSO BIBLIOGRAFICO', 1),
(16, 'RECURSO BIBLIOGRAFICO', 1),
(17, 'RECURSO BIBLIOGRAFICO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursobibliografico`
--

CREATE TABLE `recursobibliografico` (
  `idRecurso` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(25) NOT NULL,
  `editorial` varchar(25) NOT NULL,
  `preciou` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recursobibliografico`
--

INSERT INTO `recursobibliografico` (`idRecurso`, `titulo`, `autor`, `editorial`, `preciou`, `estado`, `stock`) VALUES
(13, 'Luces de Bohemi', 'Valle-Inclan', 'Alfaguara', 20, 1, 40),
(14, 'Crimen y castigo', 'Fedor Dostoievski', 'Alfaguara', 30, 0, 15),
(15, '100 años de Soledad', 'Gabriel García Márquez', 'Alfaguara', 25, 0, 12),
(16, 'La casa de los espíritus', 'Isabel Allende', 'Alfaguara', 33, 1, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursonobibliografico`
--

CREATE TABLE `recursonobibliografico` (
  `idRecurso` int(11) NOT NULL,
  `nombreP` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `preciou` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recursonobibliografico`
--

INSERT INTO `recursonobibliografico` (`idRecurso`, `nombreP`, `stock`, `preciou`, `estado`) VALUES
(2, 'Andamios', 0, 30, 1),
(3, 'Paquete Papel Bond', 0, 17, 1),
(7, 'Escritorio', 3, 456, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recurso_mantenimiento`
--

CREATE TABLE `recurso_mantenimiento` (
  `idRecurso` int(11) NOT NULL,
  `idMaterial` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `CantidadUso` int(11) NOT NULL,
  `Costo` float NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `idReserva` int(11) NOT NULL,
  `fechares` date NOT NULL,
  `fechacad` date NOT NULL,
  `idCliente` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`idReserva`, `fechares`, `fechacad`, `idCliente`, `estado`) VALUES
(6, '2023-07-18', '2023-07-23', 1, 1),
(7, '2023-07-18', '2023-07-23', 1, 1),
(8, '2023-07-18', '2023-07-23', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nom_rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nom_rol`) VALUES
(1, 'ADMIN'),
(2, 'CLIENTE'),
(3, 'REGISTRADOR'),
(4, 'MARKETING'),
(5, 'PROVEEDOR'),
(6, 'RRHH'),
(7, 'CONTADOR'),
(8, 'GERENTE'),
(9, 'EMPLEADO'),
(10, 'ADMINISTRADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_type_users`
--

CREATE TABLE `role_type_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_type_users`
--

INSERT INTO `role_type_users` (`id`, `role_type`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Super Admin', NULL, NULL),
(3, 'Normal User', NULL, NULL),
(4, 'Teachers', NULL, NULL),
(5, 'Student', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `segmento`
--

CREATE TABLE `segmento` (
  `idsegmento` int(11) NOT NULL,
  `segmento_name` varchar(40) DEFAULT NULL,
  `segmento_descripcion` varchar(100) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `idDasbhboard` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `segmento`
--

INSERT INTO `segmento` (`idsegmento`, `segmento_name`, `segmento_descripcion`, `estado`, `idDasbhboard`) VALUES
(1, 'Segmento Prueba', 'Segmento prueba', 1, 1),
(2, 'Segmento 2', 'fgbrgf', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sequence_tbl`
--

CREATE TABLE `sequence_tbl` (
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sequence_tbl`
--

INSERT INTO `sequence_tbl` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicituds`
--

CREATE TABLE `solicituds` (
  `idSolicitud` int(11) NOT NULL,
  `razon` text NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `visibilidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicituds`
--

INSERT INTO `solicituds` (`idSolicitud`, `razon`, `id_usuario`, `estado`, `visibilidad`) VALUES
(1, 'Nos gustaría conocer más detalles sobre los títulos disponibles, sus precios, condiciones de compra y cualquier otra información relevante.', 2, 'APROBADO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admission_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `idRol` tinyint(11) NOT NULL,
  `nombreR` varchar(20) NOT NULL,
  `sueldo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`idRol`, `nombreR`, `sueldo`) VALUES
(2, 'Recepcionista', 1125),
(3, 'Vendedor', 1025),
(5, 'Contador', 1500),
(6, 'Almacenero', 1025),
(7, 'Recursos Humanos', 1500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `idTrabajador` tinyint(4) NOT NULL,
  `idRol` tinyint(4) NOT NULL,
  `nombreT` varchar(40) NOT NULL,
  `correo` varchar(20) DEFAULT NULL,
  `cv_dia` char(2) NOT NULL,
  `cv_mes` char(2) NOT NULL,
  `cv_ano` char(4) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`idTrabajador`, `idRol`, `nombreT`, `correo`, `cv_dia`, `cv_mes`, `cv_ano`, `estado`) VALUES
(1, 6, 'Kevin Abelardo Paredes', NULL, '31', '10', '2024', '1'),
(2, 5, 'Cesar Quiñones Salvador', NULL, '31', '12', '2024', '1'),
(3, 7, 'Diego Acosta Aguilar', NULL, '31', '10', '2024', '1'),
(4, 6, 'Marcelo Gabriel Curihuaman Ceña', NULL, '29', '2', '2024', '1'),
(5, 3, 'Ysabel Marco Gubernal', NULL, '30', '6', '2024', '1'),
(6, 3, 'Marco Gonzalo Gutiérrez', NULL, '31', '6', '2024', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `user_id`, `email`, `join_date`, `phone_number`, `status`, `role_name`, `avatar`, `position`, `department`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Julio Enrique Marreros Urquiza', '00001', 'enriquemarreros2002@gmail.com', 'Sat, Jun 24, 2023 8:21 PM', NULL, NULL, 'Admin', 'photo_defaults.jpg', NULL, NULL, NULL, '$2y$10$eCxVh.l4vwkCe7FgA6PEKeqAjkFK4jJl3dqFJPEHDeRd9yC3s4Jlu', NULL, '2023-06-25 01:21:05', '2023-06-25 01:21:05'),
(2, 'Luis Gutierrez', '00002', 'enrique_julito@hotmail.com', 'Sat, Jun 24, 2023 8:23 PM', NULL, NULL, 'Student', 'photo_defaults.jpg', NULL, NULL, NULL, '$2y$10$Ic5gThCW4fc.es569XsB9enHA.EtfUXaRNUrwOPXJi/T8BjZb3Vbq', NULL, '2023-06-25 01:23:01', '2023-06-25 01:23:01'),
(3, 'Luis Kiro', '00003', 'julio@gmail.com', 'Sat, Jun 24, 2023 8:32 PM', NULL, NULL, '3', 'photo_defaults.jpg', NULL, NULL, NULL, '$2y$10$Nk9UEHgh5wEMtMDzRQQI0ubT8XnwhdCXlPPGKgJireC6mzfcngNLy', NULL, '2023-06-25 01:32:53', '2023-06-25 01:32:53'),
(4, 'jenrique.maur', '00004', 'enriquemarreros2001@gmail.com', 'Sat, Jun 24, 2023 8:33 PM', NULL, NULL, '3', 'photo_defaults.jpg', NULL, NULL, NULL, '$2y$10$zbN4NtejOx9AjWh4vqIjFumwkMB6/MFV2knA2OM9Jtln3tL90U9OC', NULL, '2023-06-25 01:33:35', '2023-06-25 01:33:35'),
(5, 'Pedro VKio', '00005', 'enrique_julit22o@hotmail.com', 'Sat, Jun 24, 2023 8:35 PM', NULL, NULL, 'Normal User', 'photo_defaults.jpg', NULL, NULL, NULL, '$2y$10$9U0GCYNDJ6KK6mlkWwHdHujgRq7vLqP1dCgyrlWVhY3gDWomwhSce', NULL, '2023-06-25 01:35:34', '2023-06-25 01:35:34'),
(6, 'Maria Hiso', '00006', 'maia2@gmail.com', 'Sat, Jun 24, 2023 8:42 PM', NULL, NULL, 'Normal User', 'photo_defaults.jpg', NULL, NULL, NULL, '$2y$10$VVjp3qH.Br6p0dumnRYyV.obB591i2bPmC1.NBMqdMhkuUys8R0Na', NULL, '2023-06-25 01:42:32', '2023-06-25 01:42:32');

--
-- Disparadores `users`
--
DELIMITER $$
CREATE TRIGGER `id_store` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
                INSERT INTO sequence_tbl VALUES (NULL);
                SET NEW.user_id = CONCAT("0", LPAD(LAST_INSERT_ID(), 4, "0"));
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_types`
--

INSERT INTO `user_types` (`id`, `type_name`, `created_at`, `updated_at`) VALUES
(1, 'Active', NULL, NULL),
(2, 'Inactive', NULL, NULL),
(3, 'Disable', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `passsword` varchar(100) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `passsword`, `nombre`, `id_rol`) VALUES
(1, 'Gestion_cliente', '123456', 'Admin', 1),
(2, 'proveedor1@gmail.com', '123456', 'ASTURLIBROS', 5),
(3, 'axeta@ax.com', '123456', 'AXETA', 5),
(4, 'lukia@gmail.com', '123456', 'LUKIBOOKS', 5),
(6, 'RRHH', '123456', 'RRHH', 6),
(7, 'CONTADOR', '123456', 'CONTADOR', 7),
(8, 'Elvis oRTIZ', '123', '12345678', 2),
(9, 'DIEGO ACOSTA', '123456', 'EMPLEADO', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idVenta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total` float NOT NULL,
  `idCliente` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idVenta`, `fecha`, `total`, `idCliente`, `estado`) VALUES
(22, '2023-07-18', 15, 1, 0),
(23, '2023-07-18', 15, 1, 0),
(24, '2023-07-18', 50, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`idAlmacen`);

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`idAsistencia`);

--
-- Indices de la tabla `balance_general2s`
--
ALTER TABLE `balance_general2s`
  ADD PRIMARY KEY (`idBalance`);

--
-- Indices de la tabla `balance_generals`
--
ALTER TABLE `balance_generals`
  ADD PRIMARY KEY (`idBalance`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_cliente`),
  ADD KEY `idsegmento` (`idsegmento`);

--
-- Indices de la tabla `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`idDasbhboard`);

--
-- Indices de la tabla `desecho_recurso`
--
ALTER TABLE `desecho_recurso`
  ADD PRIMARY KEY (`idRecuDesecho`),
  ADD KEY `idRecurso` (`idRecurso`);

--
-- Indices de la tabla `detalledevolucion`
--
ALTER TABLE `detalledevolucion`
  ADD PRIMARY KEY (`iddevolucion`,`idrecurso`),
  ADD KEY `idrecurso` (`idrecurso`);

--
-- Indices de la tabla `detalleoperacion`
--
ALTER TABLE `detalleoperacion`
  ADD PRIMARY KEY (`idoperacion`,`idAlmacen`,`idRecurso`),
  ADD KEY `idRecurso` (`idRecurso`),
  ADD KEY `idAlmacen` (`idAlmacen`);

--
-- Indices de la tabla `detallereserva`
--
ALTER TABLE `detallereserva`
  ADD PRIMARY KEY (`idreserva`,`idrecurso`),
  ADD KEY `idrecurso` (`idrecurso`);

--
-- Indices de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`idVenta`,`idRecurso`),
  ADD KEY `idRecurso` (`idRecurso`);

--
-- Indices de la tabla `detalle_entrega`
--
ALTER TABLE `detalle_entrega`
  ADD PRIMARY KEY (`idRecuDesecho`),
  ADD KEY `idReciclador` (`idReciclador`);

--
-- Indices de la tabla `detalle_planillas`
--
ALTER TABLE `detalle_planillas`
  ADD PRIMARY KEY (`idDPlanilla`);

--
-- Indices de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD PRIMARY KEY (`idDevolucion`),
  ADD KEY `idVenta` (`idVenta`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `devolucion_general`
--
ALTER TABLE `devolucion_general`
  ADD PRIMARY KEY (`idDevolucion_G`);

--
-- Indices de la tabla `fechas`
--
ALTER TABLE `fechas`
  ADD PRIMARY KEY (`idFecha`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`idMaterial`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `operacion`
--
ALTER TABLE `operacion`
  ADD PRIMARY KEY (`idoperacion`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `planillas`
--
ALTER TABLE `planillas`
  ADD PRIMARY KEY (`idPlanilla`);

--
-- Indices de la tabla `reciclador`
--
ALTER TABLE `reciclador`
  ADD PRIMARY KEY (`IdReciclador`);

--
-- Indices de la tabla `recurso`
--
ALTER TABLE `recurso`
  ADD PRIMARY KEY (`idRecurso`);

--
-- Indices de la tabla `recurso_mantenimiento`
--
ALTER TABLE `recurso_mantenimiento`
  ADD PRIMARY KEY (`idRecurso`),
  ADD KEY `idMaterial` (`idMaterial`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idReserva`),
  ADD KEY `reserva_ibfk_1` (`idCliente`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `role_type_users`
--
ALTER TABLE `role_type_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `segmento`
--
ALTER TABLE `segmento`
  ADD PRIMARY KEY (`idsegmento`),
  ADD KEY `idDasbhboard` (`idDasbhboard`);

--
-- Indices de la tabla `sequence_tbl`
--
ALTER TABLE `sequence_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `solicituds`
--
ALTER TABLE `solicituds`
  ADD PRIMARY KEY (`idSolicitud`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`idTrabajador`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idVenta`),
  ADD KEY `idCliente` (`idCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacen`
--
ALTER TABLE `almacen`
  MODIFY `idAlmacen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `idAsistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `balance_general2s`
--
ALTER TABLE `balance_general2s`
  MODIFY `idBalance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `balance_generals`
--
ALTER TABLE `balance_generals`
  MODIFY `idBalance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `idDasbhboard` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `desecho_recurso`
--
ALTER TABLE `desecho_recurso`
  MODIFY `idRecuDesecho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `detalle_planillas`
--
ALTER TABLE `detalle_planillas`
  MODIFY `idDPlanilla` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  MODIFY `idDevolucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `devolucion_general`
--
ALTER TABLE `devolucion_general`
  MODIFY `idDevolucion_G` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fechas`
--
ALTER TABLE `fechas`
  MODIFY `idFecha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `idMaterial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `operacion`
--
ALTER TABLE `operacion`
  MODIFY `idoperacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `planillas`
--
ALTER TABLE `planillas`
  MODIFY `idPlanilla` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `reciclador`
--
ALTER TABLE `reciclador`
  MODIFY `IdReciclador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `recurso`
--
ALTER TABLE `recurso`
  MODIFY `idRecurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idReserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `role_type_users`
--
ALTER TABLE `role_type_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `segmento`
--
ALTER TABLE `segmento`
  MODIFY `idsegmento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sequence_tbl`
--
ALTER TABLE `sequence_tbl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `solicituds`
--
ALTER TABLE `solicituds`
  MODIFY `idSolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `idRol` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `idTrabajador` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idsegmento`) REFERENCES `segmento` (`idsegmento`);

--
-- Filtros para la tabla `desecho_recurso`
--
ALTER TABLE `desecho_recurso`
  ADD CONSTRAINT `FK_DESECHO_RECURSO_RECURSOBIBIOGRAFICO` FOREIGN KEY (`idRecurso`) REFERENCES `recurso` (`idRecurso`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalledevolucion`
--
ALTER TABLE `detalledevolucion`
  ADD CONSTRAINT `detalledevolucion_ibfk_1` FOREIGN KEY (`iddevolucion`) REFERENCES `devolucion` (`idDevolucion`),
  ADD CONSTRAINT `detalledevolucion_ibfk_2` FOREIGN KEY (`idrecurso`) REFERENCES `recurso` (`idRecurso`);

--
-- Filtros para la tabla `detalleoperacion`
--
ALTER TABLE `detalleoperacion`
  ADD CONSTRAINT `detalleOperacion_ibfk_1` FOREIGN KEY (`idoperacion`) REFERENCES `operacion` (`idoperacion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalleOperacion_ibfk_2` FOREIGN KEY (`idAlmacen`) REFERENCES `almacen` (`idAlmacen`),
  ADD CONSTRAINT `detalleOperacion_ibfk_3` FOREIGN KEY (`idRecurso`) REFERENCES `recurso` (`idRecurso`);

--
-- Filtros para la tabla `detallereserva`
--
ALTER TABLE `detallereserva`
  ADD CONSTRAINT `detallereserva_ibfk_1` FOREIGN KEY (`idreserva`) REFERENCES `reserva` (`idReserva`),
  ADD CONSTRAINT `detallereserva_ibfk_2` FOREIGN KEY (`idrecurso`) REFERENCES `recurso` (`idRecurso`);

--
-- Filtros para la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD CONSTRAINT `detalleVenta_ibfk_1` FOREIGN KEY (`idVenta`) REFERENCES `venta` (`idVenta`),
  ADD CONSTRAINT `detalleVenta_ibfk_2` FOREIGN KEY (`idRecurso`) REFERENCES `recurso` (`idRecurso`);

--
-- Filtros para la tabla `detalle_entrega`
--
ALTER TABLE `detalle_entrega`
  ADD CONSTRAINT `FK_DETALLE_ENTREGA_DESECHO_RECURSO` FOREIGN KEY (`idRecuDesecho`) REFERENCES `desecho_recurso` (`idRecuDesecho`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DETALLE_ENTREGA_RECICLADOR` FOREIGN KEY (`idReciclador`) REFERENCES `reciclador` (`IdReciclador`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD CONSTRAINT `devolucion_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`Id_cliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `devolucion_ibfk_2` FOREIGN KEY (`idVenta`) REFERENCES `venta` (`idVenta`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `recurso_mantenimiento`
--
ALTER TABLE `recurso_mantenimiento`
  ADD CONSTRAINT `FK_RECURSO_MANTENIMIENTO_MATERIAL` FOREIGN KEY (`idMaterial`) REFERENCES `material` (`idMaterial`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RECURSO_MANTENIMIENTO_RECURSOBIBLIOGRAFICO` FOREIGN KEY (`idRecurso`) REFERENCES `recurso` (`idRecurso`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`Id_cliente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `segmento`
--
ALTER TABLE `segmento`
  ADD CONSTRAINT `segmento_ibfk_1` FOREIGN KEY (`idDasbhboard`) REFERENCES `dashboard` (`idDasbhboard`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`Id_cliente`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
