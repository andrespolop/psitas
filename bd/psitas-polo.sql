-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2021 a las 22:08:44
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `psitas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `terapeuta_id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `terapeuta_id`, `paciente_id`, `fecha`) VALUES
(1, 1, 4, '2022-10-25 20:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios_disponibles`
--

CREATE TABLE `horarios_disponibles` (
  `id_horarios` int(11) NOT NULL,
  `id` varchar(3) NOT NULL,
  `fecha` date NOT NULL,
  `hora` int(11) NOT NULL,
  `id_terapeuta` int(11) NOT NULL,
  `id_paciente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horarios_disponibles`
--

INSERT INTO `horarios_disponibles` (`id_horarios`, `id`, `fecha`, `hora`, `id_terapeuta`, `id_paciente`) VALUES
(1, 'h1', '2021-10-28', 8, 1, 7),
(2, 'h10', '2021-10-29', 9, 1, 6),
(3, 'h5', '2021-10-28', 12, 1, 7),
(4, 'h17', '2021-10-30', 8, 1, 7),
(5, 'h25', '2021-10-31', 8, 1, NULL),
(6, 'h3', '2021-10-28', 10, 2, 6),
(7, 'h7', '2021-10-28', 14, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `cedula` int(10) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `tipo_u` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `contrasena`, `telefono`, `cedula`, `direccion`, `tipo_u`) VALUES
(1, 'Andres', 'Polo', 'polo@gmail.com', 'polopolo', 2147483647, 1234, 'Dg 32 #80D-87, conjunto residencial Fiorentti, apto 614', 2),
(2, 'Fernando', 'Padilla', 'padilla@gmail.com', 'padilla123', 1231342543, 1235, 'Marbella', 2),
(3, 'dario', 'ruiz', 'dario@gmail.com', 'dario123', 1234599929, 1236, NULL, 2),
(4, 'pepe', 'peres', 'elpepe@gmail.com', '007123', 3140002, 1237, NULL, 3),
(6, 'AndresPaci', 'Paciente', 'andresp@gmail.com', 'polo123', 323232323, 12112121, NULL, 1),
(7, 'padillaP', 'Paciente', 'fernandop@gmail.com', 'padilla123', 2312124, 45447778, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `terapeuta_id` (`terapeuta_id`),
  ADD KEY `paciente_id` (`paciente_id`);

--
-- Indices de la tabla `horarios_disponibles`
--
ALTER TABLE `horarios_disponibles`
  ADD PRIMARY KEY (`id_horarios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `horarios_disponibles`
--
ALTER TABLE `horarios_disponibles`
  MODIFY `id_horarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`terapeuta_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`paciente_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;