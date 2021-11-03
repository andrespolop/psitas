--- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2021 a las 21:02:42
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
(1, 'h5', '2021-11-03', 12, 1, NULL),
(2, 'h25', '2021-11-06', 8, 1, 7),
(3, 'h41', '2021-11-08', 8, 1, 6),
(4, 'h17', '2021-11-05', 8, 2, 6),
(5, 'h45', '2021-11-08', 12, 2, NULL),
(6, 'h55', '2021-11-09', 14, 2, NULL);

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
  `telefono` bigint(20) NOT NULL,
  `cedula` int(10) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `tipo_u` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `contrasena`, `telefono`, `cedula`, `direccion`, `tipo_u`) VALUES
(1, 'Andres', 'Polo', 'polo@gmail.com', 'polopolo', 300703158, 1234, 'Recreo', 2),
(2, 'Fernando', 'Padilla', 'padilla@gmail.com', 'padilla123', 1231342543, 1235, 'Marbella', 2),
(4, 'root2', 'root2', 'root2@gmail.com', 'root', 123456789, 123456789, NULL, 3),
(6, 'Andres', 'Paciente', 'andresp@gmail.com', 'polo123', 323232323, 12112121, 'Zaragocilla', 1),
(7, 'padillaP', 'Paciente', 'fernandop@gmail.com', 'padilla123', 2312124, 45447778, NULL, 1),
(15, 'root', 'root', 'root@gmail.com', 'root', 123456789, 123456789, NULL, 3);

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `horarios_disponibles`
--
ALTER TABLE `horarios_disponibles`
  MODIFY `id_horarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;