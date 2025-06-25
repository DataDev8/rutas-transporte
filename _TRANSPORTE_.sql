-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql101.byetcluster.com
-- Tiempo de generación: 25-06-2025 a las 01:01:37
-- Versión del servidor: 10.6.19-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `if0_36994981_marcaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id` int(11) NOT NULL,
  `origen` varchar(255) NOT NULL,
  `destino` varchar(255) NOT NULL,
  `duracion` int(11) NOT NULL,
  `tipo` enum('carga','pasajeros') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id`, `origen`, `destino`, `duracion`, `tipo`, `created_at`) VALUES
(1, 'Zipaquira', 'Cajica', 1, 'carga', '2025-06-24 21:35:45'),
(2, 'Chia', 'Cajica', 2, 'pasajeros', '2025-06-24 21:36:10'),
(3, 'Bogota ', 'Chia', 2, 'carga', '2025-06-25 00:44:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL,
  `placa` varchar(20) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `capacidad` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `placa`, `tipo`, `capacidad`) VALUES
(1, 'ABC123', 'pasajeros', 35),
(2, 'DEF456', 'carga', 22),
(3, 'GHI789', 'pasajeros', 30),
(4, 'JKL321', 'carga', 18),
(5, 'MNO654', 'pasajeros', 26),
(6, 'PQR987', 'carga', 39),
(7, 'STU159', 'pasajeros', 20),
(8, 'VWX753', 'carga', 28),
(9, 'YZA852', 'pasajeros', 33),
(10, 'BCD741', 'carga', 36),
(11, 'EFG963', 'pasajeros', 14),
(12, 'HIJ357', 'carga', 17),
(13, 'KLM258', 'pasajeros', 40),
(14, 'NOP159', 'carga', 25),
(15, 'QRS456', 'pasajeros', 29),
(16, 'TUV753', 'carga', 10),
(17, 'WXY321', 'pasajeros', 32),
(18, 'ZAB147', 'carga', 19),
(19, 'CDE258', 'pasajeros', 37),
(20, 'FGH369', 'carga', 24);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
