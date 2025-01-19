-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-01-2025 a las 22:04:21
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

CREATE SCHEMA chatbotHC;
USE chatbotHC;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chatbothc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nombreCurso` varchar(150) NOT NULL,
  `descripCurso` longtext NOT NULL,
  `creador` varchar(150) NOT NULL,
  `nivelCurso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombreCurso`, `descripCurso`, `creador`, `nivelCurso`) VALUES
(3, 'Pablo Reyes', '1103421321', '1760876001321', 'Medicina General'),
(23, 'Leonardo Chuquimarca', '1104445132', '21321321331', 'Ginecologia y Obstetricia'),
(25, 'ISAAC VEGA', '1104371859', 'SD46132', 'Centro Qui.'),
(26, 'PATRICIA GONZÁLEZ', '1100000002', 'SD54303', 'Centro Qui.'),
(27, 'DARIO SEBASTIAN', 'PEREZ ROMERO', 'SD65057', 'Centro Qui.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `rol` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(150) NOT NULL,
  `fechaCuenta` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `rol`, `telefono`, `correo`, `clave`, `fechaCuenta`) VALUES
(14, 'Pablo', 'Reyes', 'admin', 'Admin', '000000000', 'reyes@utpl.edu.ec', '$2y$10$OmO0OlqZPhUgkVSE6GWAhe/erUB.PIXKE6Yp0IEdfnl94WaVceKhG', '2024-04-18'),
(25, 'Leonardo', 'Chuquimarca', 'leo12345', 'Admin', '1104445132', 'hlchuquimarca@utpl.edu.ec', '$2y$10$NeQCgMz98GDxQGio5S0Si.B5xtT1/zJqHDKLOkIL9D8i9qomVdC16', '2024-07-22'),
(36, 'DARIO SEBASTIAN', 'PEREZ ROMERO', 'dspr1', 'Paciente', '1100000001', 'dspr@ejemplo.com', '$2y$10$WZYTfKBjqS0W4glboy5FW.kpir5qHQ1dSVpl4dH9.kM/RYTwjoH3S', '2025-01-13'),
(37, 'PATRICIA', 'GONZÁLEZ', 'PaGo1', 'Paciente', '1100000002', 'pago@ejemplo.com', '$2y$10$ZwWpzPfG2iFV3ScMGcHmY.hAeUSuc0OCPpYLtOJ8JlQOy8OnhjOYi', '2025-01-13'),
(38, 'ISAAC', 'VEGA', 'IsVe1', 'Paciente', '1104371859', 'isve@ejemplo.com', '$2y$10$tkJ/c335ZKIhsD4.byoH.erTNeM8v7FYfgHxykvSN.1kbrxSDcNvi', '2025-01-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `urlVideo` varchar(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `duracionMin` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `urlVideo`, `nombre`, `duracionMin`, `idCurso`) VALUES
(14, '2025-01-22', 'Cardiologia', 110005152, 3),
(40, '2025-01-21', 'Medicina General', 312321, 23);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`,`idCurso`),
  ADD KEY `fk_Video_Cursos1_idx` (`idCurso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `fk_Video_Cursos1` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
