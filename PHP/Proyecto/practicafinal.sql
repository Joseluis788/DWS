-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2023 a las 10:48:34
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicafinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Lugar` varchar(50) NOT NULL,
  `Imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Nombre`, `Descripcion`, `Lugar`, `Imagen`) VALUES
(1, 'Restaurante IL POSTO', 'Especializado en comida italiana y perfecto para una comida en familia', 'Almerimar', 'Comida1.jpg'),
(2, 'Restaurante La Jábega', 'Ofrecen comida clásica española como paella o sopa de mariscos para toda la familia', 'Almeria', 'Comida2.png'),
(3, 'Restaurante Aniceto', 'Se especializa en las mejores carnes del mundo, ¡Es el restaurante que debes probar al menos una vez!', 'Almeria', 'Comida3.jpg'),
(4, 'Restaurante La Mala Pecora', 'El restaurante perfecto para una escapada romántica a las orillas del mar', 'Almerimar', 'Comida4.jpg'),
(5, 'Restaurante Tierra de Nadie', 'Uno de los restaurantes más lujosos de toda la provincia digno de una estrella michelín.', 'Almeria', 'Comida5.png'),
(6, 'Restaurante Cuatro Hojas', 'Si eres un amante de las decoraciones no te puedes perder este restaurante. ¡Te encantará!', 'Almeria', 'Comida6.jpg'),
(7, 'Restaurante La Mala Vida', 'Delicioso restaurante a las afueras del pueblo de La Mojonera', 'La Mojonera', 'Comida2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `Descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID`, `Descripcion`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Contraseña` varchar(32) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `Nombre`, `Contraseña`, `Email`, `id_rol`) VALUES
(12, 'JoseLuis', '2e1f56acaf75899c0793ad9ae02e3a00', 'faewffa', 2),
(15, 'Administrador', '27d446454304fd70c6982222d9ee17dd', 'Admin@gmail.com', 1),
(16, 'Gabriel', 'b040f624234328f8ae4d06568dc86be3', 'Gabriel@gmail.com', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
