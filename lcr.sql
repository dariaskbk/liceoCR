-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-08-2017 a las 01:17:28
-- Versión del servidor: 5.7.10-log
-- Versión de PHP: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lcr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `circulares`
--

CREATE TABLE `circulares` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Archivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `circulares`
--

INSERT INTO `circulares` (`id`, `Nombre`, `imagen`, `Descripcion`, `Archivo`) VALUES
(1, 'Circular DLSG 0017-16', 'word-doc-icon.png', 'Circular DLSG 0017-16 para Personal Docente, Administrativo, Padres de Familia y Estudiantes.', 'archivo_de_prueba.doc'),
(3, 'Agenda Octubre 2015', '', 'Agenda Octubre 2015', 'archivo_de_prueba.doc'),
(4, 'Celebración 12 de Octubre', '', 'Celebración 12 de Octubre', 'archivo_de_prueba.doc'),
(5, 'Agenda Setiembre 2015', '', 'Agenda Setiembre 2015', 'archivo_de_prueba.doc'),
(6, 'Agenda Agosto 2015', '', 'Agenda Agosto 2015', 'archivo_de_prueba.doc');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `circulares`
--
ALTER TABLE `circulares`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `circulares`
--
ALTER TABLE `circulares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
