-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2018 a las 18:32:44
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

CREATE TABLE `noticias` (
  `ID_NOTICIA` int(11) NOT NULL,
  `NOT_TITULO` varchar(50) DEFAULT NULL,
  `NOT_SUBTITULO` varchar(50) DEFAULT NULL,
  `NOT_CONTENIDO` text,
  `NOT_IMG` varchar(150) DEFAULT NULL,
  `NOT_FECHA` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `NOT_ESTADO` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`ID_NOTICIA`, `NOT_TITULO`, `NOT_SUBTITULO`, `NOT_CONTENIDO`, `NOT_IMG`, `NOT_FECHA`, `NOT_ESTADO`) VALUES
(17, 'galaxy', 'Samnsung Galaxy s9', 'Los Samsung Galaxy S9 y S9+ acaban de ser presentados en el MWC 2018, y ya conocemos sus precios y la fecha en la que aterrizarÃ¡n en las tiendas. Ahora que ya hemos visto todas las caracterÃ­sticas, especificaciones y detalles de los Galaxy S9 y S9+, y lo hemos comparado con uno de los grandes rivales como lo es el iPhone X, llega el momento de ver cuÃ¡ndo y cÃ³mo se podrÃ¡ comprar este dÃºo de terminales estrella surcoreanos, llamados a ser dos de los mÃ¡s vendidos del aÃ±o dentro del segmento del a gama alta.\r\n\r\nSi bien es cierto que el precio ha aumentado con respecto a los anteriores Galaxy S8 y S8+, no es un crecimiento que nos pille por sorpresa, pues la infinidad de filtraciones aparecidas sobre la pareja de telÃ©fonos Galaxy ya apuntaban a un aumento.\r\n\r\nSin mÃ¡s, pasamos a ver cuÃ¡nto costarÃ¡n los Samsung Galaxy S9 y S9+ en EspaÃ±a, LatinoamÃ©rica, y el resto de regiones del mundo en las que Samsung venderÃ¡ de forma oficial sus nuevos terminales.', 'galeria/noticias/noti1.jpg', '2018-11-28 21:45:28', 'publicada'),
(27, 'holapinche', 'holaaaaa', 'aaaaaaaaaaa', 'galeria/noticias/noti2.jpg', '2018-11-29 05:31:54', 'Eliminada'),
(28, 'noticia', 'noticia de prueba', 'noticia numero uno. noticia de prueba', 'galeria/noticias/noticia.png', '2018-11-29 18:51:37', 'Publicada'),
(29, 'noticia', 'pruebaaa', 'notonqskandoknkdnkwendkwesweasfkwefopswedc', 'galeria/noticias/titaniumfix.png', '2018-11-29 18:53:49', 'Eliminada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `ID_PELICULA` int(11) NOT NULL,
  `PEL_TITULO` varchar(100) NOT NULL,
  `PEL_SIPOPSIS` text NOT NULL,
  `PEL_GENERO` text NOT NULL,
  `PEL_IMG` varchar(200) NOT NULL,
  `PEL_ESTADO` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `USUARIO` varchar(25) DEFAULT NULL,
  `USU_CONTRASENA` varchar(50) DEFAULT NULL,
  `USU_APATERNO` varchar(45) DEFAULT NULL,
  `USU_AMATERNO` varchar(45) DEFAULT NULL,
  `USU_NOMBRE` varchar(45) DEFAULT NULL,
  `USU_CORREO` varchar(45) DEFAULT NULL,
  `USU_TIPO` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `USUARIO`, `USU_CONTRASENA`, `USU_APATERNO`, `USU_AMATERNO`, `USU_NOMBRE`, `USU_CORREO`, `USU_TIPO`) VALUES
(1, 'fer', 'c4ca4238a0b923820dcc509a6f75849b', 'Garcia', 'Garcia', 'Fernando', 'fer@.com', 'Administrador'),
(2, NULL, NULL, 'c', 'c', 'c', 'c', 'Administrador'),
(3, 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', 'garcia', 'garcia', 'Fernando', 'fernando@gmail.com', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`ID_NOTICIA`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`ID_PELICULA`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `ID_NOTICIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `ID_PELICULA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
