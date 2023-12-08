-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2023 a las 05:02:07
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bibliotecasm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm`
--

CREATE TABLE `adm` (
  `id_adm` int(11) NOT NULL,
  `usuario` varchar(10) DEFAULT NULL,
  `clave` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `adm`
--

INSERT INTO `adm` (`id_adm`, `usuario`, `clave`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idlibro` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `editorial` varchar(20) DEFAULT NULL,
  `edicion` varchar(20) DEFAULT NULL,
  `numpag` int(5) DEFAULT NULL,
  `descriptores` varchar(30) DEFAULT NULL,
  `observaciones` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idlibro`, `nombre`, `editorial`, `edicion`, `numpag`, `descriptores`, `observaciones`) VALUES
(1, 'Cien años de soledad', 'Editorial Sudamerica', '50 aniversario', 471, 'Gabriel García Márquez', 'Ganadora del Premio Nobel de Literatura'),
(2, 'El nombre del viento', 'Penguin Random House', 'Edición especial', 752, 'Patrick Rothfuss', 'Un libro apreciado por los amantes de la literatura fantástica.'),
(3, 'El retrato de Dorian', 'Penguin Clásicos', 'Edición ilustrada', 304, 'Oscar Wilde', ' Una obra provocadora y cargada de reflexiones sobre la belleza y la decadencia.'),
(4, 'Mujercitas', 'Puffin Books', 'Edición anotada', 752, 'Louisa May Alcott', 'Una historia entrañable que ha cautivado'),
(5, 'Sapiens: De animales', 'Debate', 'Edición ampliada', 528, ' Yuval Noah Harari', ' Un libro que ofrece una visión amplia y fascinante de la historia y la evolución humana.'),
(6, '1984', 'Penguin Books', '1ª edición', 328, 'George Orwell', 'Publicada originalmente en 1949, su visión profética continúa siendo relevante hoy en día.'),
(7, 'El señor de los anillos', 'Minotauro', 'Edición especial', 576, 'J.R.R. Tolkien', 'Inspiró la exitosa adaptación cinematográfica dirigida por Peter Jackson.'),
(8, 'Crónica de una muerte', 'Penguin Random House', '1ª edición', 120, 'Gabriel García Márquez', 'Una obra maestra breve y poderosa.'),
(9, 'El gran Gatsby', 'Scribner', 'Edición de lujo', 180, 'F. Scott Fitzgerald', ' Considerada una de las mejores novelas'),
(10, 'Orgullo y prejuicio', 'Penguin Clásicos', '1ª edición', 416, 'Jane Austen', 'Una novela que ha perdurado a lo largo del tiempo y sigue siendo apreciada por su estilo elegante y personajes memorables.'),
(11, 'Matar a un ruiseñor', 'Vintage Books', 'Edición aniversario', 336, 'Harper Lee', 'Ganadora del Premio Pulitzer en 1961.'),
(12, 'Don Quijote de la Mancha', 'Editorial Castalia', 'Edición crítica', 992, 'Miguel de Cervantes Saavedra', 'Considerada una de las obras cumbre de la literatura universal.'),
(13, 'El gran libro', 'RBA Libros', '1ª edición', 288, 'Jorge Bucay', 'Un libro que ofrece una visión interesante sobre el mundo onírico y su interpretación.'),
(14, 'El principito', 'Salamandra', 'Edición de lujo', 96, 'Antoine de Saint-Exupéry', ' Un clásico de la literatura infantil y una lectura con mensajes profundos para todas las edades.'),
(15, 'El alquimista', 'HarperOne', '25 aniversario', 208, 'Paulo Coelho', 'Considerado un libro inspirador y motiva'),
(16, 'El amor en los tiempos del colera', 'Vintage Español', 'Edición especial', 368, 'Gabriel García Márquez', ' Una obra romántica y melancólica del aclamado autor colombiano.'),
(17, 'El poder del ahora', 'Gaia Ediciones', '10ª edición', 224, 'Eckhart Tolle', 'Considerado un libro transformador y una guía para el crecimiento personal.'),
(18, 'Los pilares de la Tierra', 'Plaza & Janés', 'Edición de bolsillo', 1056, ' Ken Follett', 'Una mezcla de drama histórico y ficción que ha cautivado a millones de lectores.'),
(19, 'La sombra del viento', 'Planeta', '1ª edición', 552, 'Carlos Ruiz Zafón', 'El primer libro de la tetralogía \"El Cementerio de los Libros Olvidados\".'),
(20, 'El viejo y el mar', 'Scribner', 'Edición especial', 128, 'Ernest Hemingway', 'Ganadora del Premio Pulitzer en 1953 y una de las obras más conocidas de Hemingway.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `idreserva` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apepat` varchar(40) NOT NULL,
  `apemat` varchar(35) NOT NULL,
  `domicilio` char(40) NOT NULL,
  `nombrelibro` varchar(40) NOT NULL,
  `editorial` varchar(30) NOT NULL,
  `fecha_reserva` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`idreserva`, `nombre`, `apepat`, `apemat`, `domicilio`, `nombrelibro`, `editorial`, `fecha_reserva`) VALUES
(1, 'av', 'qw', '', 'jhj', '1', '1', '0000-00-00'),
(2, 'j', 'k', '', 'jh', '2', '2', '0000-00-00'),
(3, 'jose', 'jose', 'jose', 'jose', 'el principito', 'terror', '0000-00-00'),
(4, 'juan', 'juan', '', 'juan', '1', '3', '2023-04-23'),
(5, 'Amparo', 'Vazquez', '', 'Mariano Abasolo #729', '1', '2', '2023-04-29'),
(7, 'av', 'a', '', 'de', '1', '1', '2023-05-06'),
(8, 'julian', 'ab', 'am', 'am', '1', '2', '2023-04-23'),
(9, 'Alejandro', 'AmparoV', 'Vazquez', 'Mariano Abasolo #729', '3', '2', '2023-04-28'),
(10, 'Juan', 'av', 'av', 'Mariano Abasolo #729', '32', '2', '2023-05-25'),
(11, 'Diego alejandro ', 'Amparo ', 'Vazquez ', 'Abasolo 729', '13', '6', '2023-06-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitantes`
--

CREATE TABLE `solicitantes` (
  `idsolicitante` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellidopat` varchar(20) DEFAULT NULL,
  `apellidomat` varchar(20) DEFAULT NULL,
  `edad` int(4) DEFAULT NULL,
  `domicilio` char(40) DEFAULT NULL,
  `usuario` char(12) DEFAULT NULL,
  `clave` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitantes`
--

INSERT INTO `solicitantes` (`idsolicitante`, `nombre`, `apellidopat`, `apellidomat`, `edad`, `domicilio`, `usuario`, `clave`) VALUES
(2, 'Juan Martin', 'Amparo', 'Vazquez', 21, 'Mariano Abasolo #729', 'juan123', '1234'),
(3, 'Diego Alejandro', 'Amparo', 'Vazquez', 16, 'Mariano Abasolo #729', 'Diego69', '123'),
(4, 'maria', 'maria', 'maria', 23, 'jo', 'maria', '123'),
(5, 'Juan', 'av', 'av', 21, 'ma', 'juan', '123'),
(6, 'pedro', 'valero', 'ortega', 21, 'san luis', 'pedro', '1234'),
(7, 'Diego alejandro', 'Amparo', 'Vazquez', 16, 'Abasolo 729', 'Diegovqzq12', '060606');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idlibro`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idreserva`);

--
-- Indices de la tabla `solicitantes`
--
ALTER TABLE `solicitantes`
  ADD PRIMARY KEY (`idsolicitante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adm`
--
ALTER TABLE `adm`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idlibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idreserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `solicitantes`
--
ALTER TABLE `solicitantes`
  MODIFY `idsolicitante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
