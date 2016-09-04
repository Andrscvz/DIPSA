-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2015 a las 18:56:01
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dipsa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

create database `dipsa`;
use `dipsa`;

CREATE TABLE IF NOT EXISTS `contacto` (
  `idContacto` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(150) DEFAULT NULL,
  `longitud` float(8,5) DEFAULT NULL,
  `latitud` float(8,5) DEFAULT NULL,
  PRIMARY KEY (`idContacto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`idContacto`, `direccion`, `longitud`, `latitud`) VALUES
(1, 'Colina Blanca # 449 Col. San Gerardo Monterrey, N.L, México Tel: +52 (81) 8315 1758', -100.36781, 25.69408);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `despacho`
--

CREATE TABLE IF NOT EXISTS `despacho` (
  `idDespacho` int(11) NOT NULL AUTO_INCREMENT,
  `arqTitulo` varchar(150) DEFAULT NULL,
  `arqTexto` text,
  `ventajasTitulo1` varchar(50) DEFAULT NULL,
  `ventajasTitulo2` varchar(50) DEFAULT NULL,
  `ventajasTitulo3` varchar(50) DEFAULT NULL,
  `ventajasTitulo4` varchar(50) DEFAULT NULL,
  `ventajasTexto1` text,
  `ventajasTexto2` text,
  `ventajasTexto3` text,
  `ventajasTexto4` text,
  `testimoniosPersona1` varchar(50) DEFAULT NULL,
  `testimoniosPersona2` varchar(50) DEFAULT NULL,
  `testimoniosPersona3` varchar(50) DEFAULT NULL,
  `testimoniosTexto1` text,
  `testimoniosTexto2` text,
  `testimoniosTexto3` text,
  PRIMARY KEY (`idDespacho`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `despacho`
--

INSERT INTO `despacho` (`idDespacho`, `arqTitulo`, `arqTexto`, `ventajasTitulo1`, `ventajasTitulo2`, `ventajasTitulo3`, `ventajasTitulo4`, `ventajasTexto1`, `ventajasTexto2`, `ventajasTexto3`, `ventajasTexto4`, `testimoniosPersona1`, `testimoniosPersona2`, `testimoniosPersona3`, `testimoniosTexto1`, `testimoniosTexto2`, `testimoniosTexto3`) VALUES
(1, 'auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit.', 'auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit. Aenean aucto. wisi et urna. Aliqat volutpat. Duisac turpis. Integer rutrum ante eu lacuestibulu. Duisac turpis. Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at nequeVivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi. Aenean auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit. Aenean aucto. wisi et urna. Aliqat volutpat. Duisac turpis. Integer rutrum ante eu lacuestibulu. Duisac turpis. Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at nequeVivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi. Aenean auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit. Aenean aucto. wisi et urna. Aliqat volutpat. Duisac turpis. Integer rutrum ante eu lacuestibulu. Duisac turpis. Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at nequeVivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi. Aenean', 'auris fermeum dictum magna.', 'auris fermeum dictum magna.', 'auris fermeum dictum magna.', 'auris fermeum dictum magna.', 'auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit. Aenean aucto. wisi et urna. Aliqat volutpat. Duisac turpis. Integer rutrum ante eu lacuestibulu. Duisac turpis. Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at nequeVivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi. Aenean', 'auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit. Aenean aucto. wisi et urna. Aliqat volutpat. Duisac turpis. Integer rutrum ante eu lacuestibulu. Duisac turpis. Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at nequeVivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi. Aenean', 'auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit. Aenean aucto. wisi et urna. Aliqat volutpat. Duisac turpis. Integer rutrum ante eu lacuestibulu. Duisac turpis. Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at nequeVivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi. Aenean', 'auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit. Aenean aucto. wisi et urna. Aliqat volutpat. Duisac turpis. Integer rutrum ante eu lacuestibulu. Duisac turpis. Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at nequeVivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi. Aenean', 'Persona 1', 'Persona 2', 'Persona 3', 'auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit. Aenean aucto. wisi et urna. Aliqat volutpat. Duisac turpis. Integer rutrum ante eu lacuestibulu. Duisac turpis. Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at nequeVivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi. Aenean', 'auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit. Aenean aucto. wisi et urna. Aliqat volutpat. Duisac turpis. Integer rutrum ante eu lacuestibulu. Duisac turpis. Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at nequeVivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi. Aenean', 'auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit. Aenean aucto. wisi et urna. Aliqat volutpat. Duisac turpis. Integer rutrum ante eu lacuestibulu. Duisac turpis. Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at nequeVivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi. Aenean');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE IF NOT EXISTS `inicio` (
  `idInicio` int(11) NOT NULL AUTO_INCREMENT,
  `bienvenidaHeading` varchar(150) DEFAULT NULL,
  `bienvenidaSubHeading` varchar(100) DEFAULT NULL,
  `quienesTitulo` varchar(150) DEFAULT NULL,
  `quienesTexto` text,
  `mision` text,
  `vision` text,
  `valores` text,
  `ultimosProyectos1` varchar(30) DEFAULT NULL,
  `ultimosProyectos2` varchar(30) DEFAULT NULL,
  `ultimosProyectos3` varchar(30) DEFAULT NULL,
  `ultimosProyectos4` varchar(30) DEFAULT NULL,
  `ultimosProyectos5` varchar(30) DEFAULT NULL,
  `ultimosProyectos6` varchar(30) DEFAULT NULL,
  `ultimosProyectosSubHeading` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idInicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`idInicio`, `bienvenidaHeading`, `bienvenidaSubHeading`, `quienesTitulo`, `quienesTexto`, `mision`, `vision`, `valores`, `ultimosProyectos1`, `ultimosProyectos2`, `ultimosProyectos3`, `ultimosProyectos4`, `ultimosProyectos5`, `ultimosProyectos6`, `ultimosProyectosSubHeading`) VALUES
(1, 'CREAMOS ESPACIOS QUE CUMPLEN PLANES DE VIDA', 'SED LOREET ALIQUAM LEOTELLUS', 'auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit.', 'auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit. Aenean aucto. wisi et urna. Aliqat volutpat. Duisac turpis. Integer rutrum ante eu lacuestibulu. Duisac turpis. Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at nequeVivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi. Aenean auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit. Aenean aucto. wisi et urna. Aliqat volutpat. Duisac turpis. Integer rutrum ante eu lacuestibulu. Duisac turpis. Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at nequeVivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi. Aenean', 'auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit. Aenean aucto. wisi et urna. Aliqat volutpat. Duisac turpis. Integer rutrum ante eu lacuestibulu. Duisac turpis. Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at nequeVivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi. Aenean', 'auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit. Aenean aucto. wisi et urna. Aliqat volutpat. Duisac turpis. Integer rutrum ante eu lacuestibulu. Duisac turpis. Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at nequeVivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi. Aenean', 'auris fermeum dictum magna. Sed loreet aliquam leote llus dolor dapibus eget elementum vel cursleifend elit. Aenean aucto. wisi et urna. Aliqat volutpat. Duisac turpis. Integer rutrum ante eu lacuestibulu. Duisac turpis. Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at nequeVivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi. Aenean', 'auris fermeum dictum magna', 'auris fermeum dictum magna', 'auris fermeum dictum magna', 'auris fermeum dictum magna', 'auris fermeum dictum magna', 'auris fermeum dictum magna', 'SED LOREET ALIQUAM LEOTELLUS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `idProyectos` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  `proyectoTitulo` varchar(30) DEFAULT NULL,
  `proyectoTexto` varchar(150) DEFAULT NULL,
  `categoria` 	varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idProyectos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`idProyectos`, `numero`, `proyectoTitulo`, `proyectoTexto`, `categoria`) VALUES
(1, 1, 'Project Name 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.', 'Residencial'),
(2, 2, 'Project Name 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.', 'Comercial'),
(3, 3, 'Project Name 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.', 'Residencial'),
(4, 4, 'Project Name 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.', 'Comercial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `idServicios` int(11) NOT NULL AUTO_INCREMENT,
  `servicioTitulo1` varchar(30) DEFAULT NULL,
  `servicioTitulo2` varchar(30) DEFAULT NULL,
  `servicioTitulo3` varchar(30) DEFAULT NULL,
  `servicioTitulo4` varchar(30) DEFAULT NULL,
  `servicioTitulo5` varchar(30) DEFAULT NULL,
  `servicioTitulo6` varchar(30) DEFAULT NULL,
  `servicioTexto1` text,
  `servicioTexto2` text,
  `servicioTexto3` text,
  `servicioTexto4` text,
  `servicioTexto5` text,
  `servicioTexto6` text,
  PRIMARY KEY (`idServicios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idServicios`, `servicioTitulo1`, `servicioTitulo2`, `servicioTitulo3`, `servicioTitulo4`, `servicioTitulo5`, `servicioTitulo6`, `servicioTexto1`, `servicioTexto2`, `servicioTexto3`, `servicioTexto4`, `servicioTexto5`, `servicioTexto6`) VALUES
(1, '1. Master Planning', '2. Feasibility Studies', '3. Site Analysis', '4. Space Planning', '5. 3D Modeling', '6. Needs Analysis', '- Plan personalizado.\n- Evaluación de propiedad.\n- Estructuración de capital y deuda.\n- Mercado meta.\n- Residencial/Comercial/Usos Mixtos', '- Plan personalizado.\n- Evaluación de propiedad.\n- Estructuración de capital y deuda.\n- Mercado meta.\n- Residencial/Comercial/Usos Mixtos', '- Plan personalizado.\n- Evaluación de propiedad.\n- Estructuración de capital y deuda.\n- Mercado meta.\n- Residencial/Comercial/Usos Mixtos', '- Plan personalizado.\n- Evaluación de propiedad.\n- Estructuración de capital y deuda.\n- Mercado meta.\n- Residencial/Comercial/Usos Mixtos', '- Plan personalizado.\n- Evaluación de propiedad.\n- Estructuración de capital y deuda.\n- Mercado meta.\n- Residencial/Comercial/Usos Mixtos', '- Plan personalizado.\n- Evaluación de propiedad.\n- Estructuración de capital y deuda.\n- Mercado meta.\n- Residencial/Comercial/Usos Mixtos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `idTipos` int(11) NOT NULL AUTO_INCREMENT,
  `clase` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idTipos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
