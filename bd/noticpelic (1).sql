-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2018 a las 19:21:44
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
(30, 'Caravana de Migrantes', 'Caravana de Migrantes llega a La Rosa de Guadalupe', 'En semanas pasadas La Rosa de Guadalupe, el programa estrella de Televisa, utilizÃ³ sus redes sociales para preguntar a televidentes quÃ© temas les gustarÃ­a que se abordaran en prÃ³ximos episodios de ficciÃ³n.\r\n\r\nLa gente no tardÃ³ en contestar; casos de la vida real como la caravana migrante, la cancelaciÃ³n del partido en el Estadio Azteca, y el linchamiento del Nazi ruso en CancÃºn fueron algunos de los temas pedidos por sus seguidores.\r\n\r\nEl primer capÃ­tulo del programa mexicano fue transmitido en el aÃ±os 2008, 10 aÃ±os despuÃ©s La Rosa de Guadalupe se ha convertido en el programa mÃ¡s visto de todo MÃ©xico.\r\n\r\nLa Caravana de Migrantes, desde su iniciÃ³ fue un tema polÃ©mico y preocupante para la sociedad mexicana y el programa de Televisa no podÃ­a dejar pasar el tema por lo que estrenÃ³ un capitulo en honor a los mÃ¡s de 7 mil migrantes que atravesaron MÃ©xico en su afÃ¡n de llegar al territorio de Estados Unidos', 'galeria/noticias/noti_01.jpeg', '2018-12-05 06:01:39', 'Publicada'),
(31, 'Baterias de litio Eternas', 'Las baterias de litio van a durar toda la vida', 'Juan Carlos OrdoÃ±ez, director comercial de CEGASA, explica en Boulevard Magazine que las baterÃ­as permiten acumular la energÃ­a de las placas solares que podamos tener en casa y aÃ±ade que con una baterÃ­a normal estamos en un 10% de autoconsumo, pero con una de litio pequeÃ±a podrÃ­amos tener entre un 40 y un 50% de autoconsumo.\r\n\r\nAdemÃ¡s, una de las ventajas del litio frente a las baterÃ­as de plomo es que van a durar prÃ¡cticamente toda la vida.', 'galeria/noticias/noti_02.jpg', '2018-12-05 06:06:59', 'Publicada'),
(32, 'Telefono lg con camra inteligente', 'LG lanzo en Argentina el G7 ', 'LG presentÃ³ la nueva versiÃ³n de su smartphone de la lÃ­nea G, el LG G7 ThinQ como\r\nel tope de gama de sus telÃ©fonos disponibles en el paÃ­s. De diseÃ±o delgado y con el\r\nformato de pantalla sin bordes y con "pestaÃ±a" como el iPhone X, el nuevo G7, que se\r\npresentÃ³ internacionalmente en mayo, tiene una pantalla QHD (3120 x 1440) de 6,1\r\npulgadas y 1000 nits, lo que la hace destacarse por su excelente brillo.\r\nEn lo que refiere a la cÃ¡mara de fotos, tiene inteligencia artificial integrada a la hora de\r\ntomar las fotografÃ­as con el IA CAM mode, lo que hace que mejore las fotografÃ­as\r\ntomadas elevando el brillo, detectando el Ã¡rea de foco, elevado la luz en caso que detecte\r\noscuridad y hasta distinga los objetivos entre 19 modos distintos como cielo, paisajes,\r\nflores, personas, bebÃ©s, comida, entre otros, de manera autÃ³noma', 'galeria/noticias/noti_03.jpeg', '2018-12-05 06:11:52', 'Publicada'),
(33, 'WhatsApp dejara de funcionar', 'Unicamente dejara de funcionar en algunos moviles', 'WhatsApp cumple 10 aÃ±os en enero de 2019. Desde su creaciÃ³n, en 2009, se han introducido numerosas novedades en la app: desde las notas de audio o los gifs a los stickers o las historias. Ahora sus propietarios trabajan para incorporar otras funciones como el modo vacaciones o el modo oscuro. Pero no todos los mÃ³viles pueden soportar estas nuevas caracterÃ­sticas. El ritmo de actualizaciones hace que muchos terminales se queden obsoletos, por lo que WhatsApp no serÃ¡ compatible con algunos mÃ³viles a partir de 2019.\r\n\r\nLa app dejarÃ¡ de funcionar en el Nokia S40 el 31 de diciembre de este aÃ±o. MÃ¡s tarde, a partir del 1 de febrero de 2020, tambiÃ©n se verÃ¡n afectados los terminales con el sistema operativo Android 2.3.7 o anteriores y los iPhone que cuenten con iOS 7. No obstante, la compaÃ±Ã­a explica que estos smartphones podrÃ­an dejar de funcionar antes de las fechas indicadas. â€œDebido a que ya no estamos desarrollando funciones para estos sistemas operativos, algunas funciones podrÃ­an dejar de funcionar en cualquier momentoâ€, explica la compaÃ±Ã­a en su pÃ¡gina de preguntas y respuestas frecuentes.\r\n', 'galeria/noticias/noti_04.jpg', '2018-12-05 06:15:55', 'Publicada'),
(34, 'Drones contra accidentes', 'Se crean algoritmos para detectar accidentes', 'Norberto GonzÃ¡lez, Jorge LÃ³pez y Mario FernÃ¡ndez trabajaban hace cuatro aÃ±os como ingenieros en empresas espaÃ±olas en Ghana, Australia y Reino Unido. Detectaron entonces que muchas vÃ­as fÃ©rreas tienen unos planos muy tÃ©cnicos y sin actualizar. Para solventar este problema idearon SigmaRail, una start-up con la que recogen informaciÃ³n en la vÃ­a mediante drones o con un lÃ¡ser que incorporan a un tren y crean un mapa en tres dimensiones para visualizar los trazados ferroviarios con todos sus elementos.\r\n\r\nÂ¿Para quÃ© sirve esta informaciÃ³n? Es vital para las empresas que quieren hacer reformas y actuaciones en el trazado o para conocer el mantenimiento de la misma y evitar accidentes, afirma GonzÃ¡lez. Para automatizar el proceso los ingenieros construyeron un algoritmo que aprende mediante inteligencia artificial a localizar todos los elementos de las vÃ­as, como seÃ±ales, balizas o desniveles.', 'galeria/noticias/noti_05.jpg', '2018-12-05 06:18:15', 'Publicada'),
(35, 'El nuevo Apple Watch', 'Apple Watch Series 4 la joya oculta', 'El pasado mes de septiembre se puso a la venta una nueva versiÃ³n del Apple Watch, considerado por muchos como la novedad mÃ¡s interesante de la firma, incluso por delante de los nuevos iPhone. Se trata del rediseÃ±o mÃ¡s palpable que ha experimentado el reloj inteligente desde que saliera a la venta en 2015, con nuevas propuestas tanto en el exterior como en sus funcionalidades entre las que destacan las aplicaciones de salud y ejercicio.\r\nDesde su presentaciÃ³n, lo hemos utilizado como complemento inseparable del iPhone XS (aquÃ­ puedes leer nuestro anÃ¡lisis publicado en Banco de Pruebas, de EL PAÃS Escaparate, el pasado mes de octubre), y aunque a simple vista no lo parezca, el Apple Watch Series 4 posee diferencias de diseÃ±o sustanciales con respecto a la generaciÃ³n anterior. ', 'galeria/noticias/noti_06.jpg', '2018-12-05 06:20:09', 'Publicada'),
(36, 'Nueva version de airpod', 'Apple prepara una nueva version de los AirPods', 'En un principio su aspecto fue motivo de chanzas por una parte del mercado que intuÃ­a un aspecto un tanto ridÃ­culo al llevar dos auriculares recortados y sin cables en las orejas; poco duraron las bromas y los AirPods cse convirtieron en un Ã©xito de ventas y, lo que resulta mÃ¡s importante para Apple, a convertirse en un nuevo signo de identidad. \r\nLa idea de llevar los auriculares en una funda cargadora que siempre podÃ­amos tener en los pantalones resultÃ³ un Ã©xito y las ventas se dispararon haciendo que el producto contara con plazos de entrega larguÃ­simos que hasta hace bien poco Apple no ha sido capaz de regularizar. Cuando la demanda supera la capacidad productiva de la oferta, no parece que sea necesario fustigarla con nuevos modelos equipados con nuevas funciones que excitaran mÃ¡s si cabe el Ã¡nimo comprador de los clientes.', 'galeria/noticias/noti_07.jpg', '2018-12-05 06:22:21', 'Publicada'),
(37, 'El reinado de los algoritmos en tu vida', 'Piensan por nosotros y nos hacen la vida mas facil', 'Si haces una bÃºsqueda en Google y le pides a un amigo que haga lo mismo, tendrÃ©is resultados completamente distintos. Â¿El motivo? El triunfo de los algoritmos en tu vida. Google lanzÃ³ en 2009 la nueva personalizaciÃ³n en los buscadores: 57 indicadores que estiman cÃ³mo eres y quÃ© te gusta y con todo ello, te arroja la informaciÃ³n mÃ¡s acorde a tus gustos. Tiene ventajas, no lo discutimos, nos ayudan a seleccionar informaciÃ³n en el maremagno en el que nos encontramos. Pero los algoritmos tambiÃ©n presentan muchos inconvenientes que afectan a nuestro dÃ­a a dÃ­a aunque no nos demos ni cuenta, segÃºn Eli Pariser en su libro El efecto burbuja.\r\n\r\nGoogle no es el Ãºnico, ni mucho menos. Yahoo, Facebook o YouTube te van a mostrar los anuncios que mÃ¡s encajan a tu perfil. En el caso de Netflix, por ejemplo, el 60% de las propuestas que te sugieren son en base a conjeturas personalizadas acerca de tus gustos. AsÃ­ pues, los algoritmos piensan por nosotros y nos hacen la vida mÃ¡s fÃ¡cil, pero tambiÃ©n mÃ¡s irreal y filtrada.', 'galeria/noticias/noti_08.jpg', '2018-12-05 06:24:06', 'Publicada'),
(38, 'noticia de prueba', 'Esta noticia es de prueba', 'pueba prueba pureba prueba .......... ', 'galeria/noticias/imagen.png', '2018-12-05 19:13:53', 'Eliminada');

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

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`ID_PELICULA`, `PEL_TITULO`, `PEL_SIPOPSIS`, `PEL_GENERO`, `PEL_IMG`, `PEL_ESTADO`) VALUES
(1, 'Guardianes de la Galaxia', 'Ambientada en el nuevo contexto sonoro de "Awesome Mixtape #2", Guardianes de la Galaxia Vol. 2 de Marvel, continÃºa las aventuras del equipo en su travesÃ­a por los confines del cosmos. Los Guardianes deberÃ¡n luchar para mantener unida a su nueva familia mientras intentan desentraÃ±ar el misterio del verdadero linaje de Peter Quill', 'Superheroes', 'galeria/noticias/peli4.png', 'Publicada'),
(2, 'Battleship ', 'Una batalla Ã©pica se libra en alta mar entre marineros estadounidenses y una fuerza superior extraterrestre que ataca La Tierra.', 'accion ciencia ficcion aventura ', 'galeria/noticias/peli3.png', 'Publicada'),
(3, 'Valerian y la ciudad de los mil planetas', 'En el siglo XXVIII, los agentes terrÃ­colas Valerian y Laureline son enviadas por el ministro de Defensa a explorar un nuevo mundo que estÃ¡ al borde de una guerra civil para comprobar si son una amenaza potencial contra la Tierra. La situaciÃ³n polÃ­tica del planeta, divido entre una aristocracia decadente, un pueblo exaltado y unos sabios astutos y manipuladores les obligarÃ¡ a tomar partido por uno de los dos bandos.', 'Ciencia Ficcion ', 'galeria/noticias/peli2.png', 'Publicada'),
(4, 'ready player one', 'La historia sigue los pasos del joven Wade Owen Watts, un jugador de videojuegos del aÃ±o 2045 que, como el resto de la humanidad, prefiere el metauniverso de realidad virtual OASIS al cada vez mÃ¡s sombrÃ­o mundo real. En este lugar su creador escondiÃ³ las piezas de un rompecabezas cuya resoluciÃ³n conduce a una fortuna de medio billÃ³n de dÃ³lares y el control total de la empresa que mantiene OASIS. Las claves del enigma estÃ¡n basadas en la cultura popular de los aÃ±os 80 y la vida del creador.', 'accion ciencia ficcion aventura ', 'galeria/noticias/peli1.png', 'Publicada');

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
(3, 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', 'garcia', 'garcia', 'Fernando', 'fernando@gmail.com', 'Administrador'),
(4, 'usuario', '81dc9bdb52d04dc20036dbd8313ed055', 'fernando', 'fernando', 'fercho', 'fernando@gmail.com', 'Cliente');

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
  MODIFY `ID_NOTICIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `ID_PELICULA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
