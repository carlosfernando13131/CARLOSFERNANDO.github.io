-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2025 a las 15:40:37
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `papeleriadui`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventaspape`
--

CREATE TABLE `ventaspape` (
  `CLAVE_PROD` int(10) NOT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `CANTIDAD` int(5) DEFAULT NULL,
  `PRECIO` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventaspape`
--

INSERT INTO `ventaspape` (`CLAVE_PROD`, `NOMBRE`, `CANTIDAD`, `PRECIO`) VALUES
(1001, 'LISTONES', 15, 8),
(1002, 'HULE CRISTAL', 15, 24),
(1003, 'PAPEL AMERICA', 25, 12),
(1004, 'PAPEL CONTAC', 20, 10),
(1005, 'PAPEL CRAFT', 12, 11),
(1006, 'LAPICES', 15, 6),
(1007, 'MONOGRAFIAS', 35, 4),
(1008, 'PLUMAS', 36, 8),
(1009, 'PRIT GRANDE', 10, 32),
(1010, 'GOMAS', 16, 12),
(1011, 'SACAPUNTAS', 23, 5),
(1012, 'LAPICERAS', 6, 30),
(1013, 'PAPEL BOND', 12, 8),
(1014, 'CARTULINA', 16, 7),
(1015, 'CUADERNO', 7, 24),
(1016, 'TIJERAS', 13, 15),
(1017, 'CINTA ADHESIVA', 14, 10),
(1018, 'CORRECTOR LAPIZ', 11, 15),
(1019, 'LIMPIA PIPAS', 5, 3),
(1020, 'MAPAS', 20, 4),
(1021, 'ACUARELAS', 15, 20),
(1022, 'FOLDER', 25, 5),
(1023, 'FOMI', 16, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ventaspape`
--
ALTER TABLE `ventaspape`
  ADD PRIMARY KEY (`CLAVE_PROD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
