-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2020 a las 05:08:43
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(3) NOT NULL,
  `especialidad` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL,
  `telefono` int(10) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `especialidad`, `nombre`, `apellido`, `ciudad`, `latitude`, `longitude`, `telefono`, `mail`) VALUES
(5, 'Alergista', 'Alberto', 'Klein', 'C.A.B.A.', '-34.5677206', '-58.451593100000004', 1127645038, 'klein994@hotmail.com'),
(6, 'DermatÃ³logo', 'pepe', 'perez', 'La Plata', '-34.5677206', '-58.451593100000004', 1234567890, '123pepe@gmail.com'),
(7, 'Alergista', 'Alberto', 'Klein', 'cordoba', '-34.5677206', '-58.451593100000004', 1127645038, 'klein994@hotmail.com'),
(8, 'Anestesista', 'pepe', 'Alarcon', 'CÃ³rdoba', '-34.5677206', '-58.451593100000004', 1127645038, 'rmadeleinne@gmail.com'),
(9, 'Alergista', 'Alberto', 'Klein', 'C.A.B.A.', '-34.5677206', '-58.451593100000004', 1127645038, 'klein994@hotmail.com'),
(10, 'CardiÃ³logo', 'pepe', 'Klein', 'CÃ³rdoba', '-34.5677206', '-58.451593100000004', 1127645038, '123pepe@gmail.com'),
(11, 'CardiÃ³logo', 'Rocio', 'Alarcon', 'CÃ³rdoba', '-34.5677206', '-58.451593100000004', 1127645039, 'rmadeleinne@gmail.com'),
(12, 'Alergista', 'Alberto', 'Klein', 'C.A.B.A.', '-34.5677206', '-58.451593100000004', 1127645038, 'klein994@hotmail.com'),
(13, 'DermatÃ³logo', 'pepe', 'perez', 'La Plata', '-34.5677206', '-58.451593100000004', 1234567890, '123pepe@gmail.com'),
(14, 'Alergista', 'Alberto', 'Klein', 'cordoba', '-34.5677206', '-58.451593100000004', 1127645038, 'klein994@hotmail.com'),
(15, 'Anestesista', 'pepe', 'Alarcon', 'CÃ³rdoba', '-34.5677206', '-58.451593100000004', 1127645038, 'rmadeleinne@gmail.com'),
(16, 'Alergista', 'Alberto', 'Klein', 'C.A.B.A.', '-34.5677206', '-58.451593100000004', 1127645038, 'klein994@hotmail.com'),
(17, 'CardiÃ³logo', 'pepe', 'Klein', 'CÃ³rdoba', '-34.5677206', '-58.451593100000004', 1127645038, '123pepe@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
