-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2018 a las 19:45:39
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `noticpelic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--
create database noticpelic;
use noticpelic;

CREATE TABLE `noticias` (
  `ID_NOTICIA` int(11) NOT NULL,
  `NOT_TITULO` varchar(50) DEFAULT NULL,
  `NOT_SUBTITULO` varchar(50) DEFAULT NULL,
  `NOT_CONTENIDO` text,
  `NOT_IMG` varchar(50) DEFAULT NULL,
  `NOT_FECHA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `USUARIO` varchar(25) DEFAULT NULL,
  `USU_CONTRASENA` varchar(25) DEFAULT NULL,
  `USU_APATERNO` varchar(45) DEFAULT NULL,
  `USU_AMATERNO` varchar(45) DEFAULT NULL,
  `USU_NOMBRE` varchar(45) DEFAULT NULL,
  `USU_CORREO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`ID_NOTICIA`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
