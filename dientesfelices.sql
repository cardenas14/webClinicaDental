-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2021 a las 07:06:56
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dientesfelices`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `IdEspecialidad` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `PrecioEspecialidad` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`IdEspecialidad`, `Descripcion`, `PrecioEspecialidad`) VALUES
(1, 'Odontopediatria', '150'),
(2, 'Ortodoncia', '200'),
(3, 'Implantes Dentales', '0'),
(4, 'Diseño de sonrisa', '100'),
(5, 'ortopedia maxilar', '150'),
(6, 'Blanqueamiento', '0'),
(7, 'Periodoncia', '85'),
(8, 'Endodoncia', '200'),
(9, 'Cirugia oral', '450');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_paciente`
--

CREATE TABLE `historial_paciente` (
  `ID_historial` int(9) NOT NULL,
  `DniPaciente` int(11) NOT NULL,
  `IdEspecialidad` int(11) NOT NULL,
  `CodDoctor` int(10) NOT NULL,
  `Cuota` decimal(9,0) NOT NULL,
  `Fecha_Atencio` date NOT NULL,
  `Receta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historial_paciente`
--

INSERT INTO `historial_paciente` (`ID_historial`, `DniPaciente`, `IdEspecialidad`, `CodDoctor`, `Cuota`, `Fecha_Atencio`, `Receta`) VALUES
(1, 12, 3, 13, '12', '2021-06-01', '12010'),
(2, 12, 3, 13, '152', '2021-06-18', 'algo nuevo'),
(3, 12, 2, 28, '254', '2021-06-26', 'venir el martes'),
(4, 12, 2, 28, '254', '2021-06-26', 'venir el martes'),
(5, 12, 2, 28, '254', '2021-06-26', 'venir el martes'),
(6, 123456789, 9, 20, '152', '2021-06-18', 'ffgg'),
(7, 5214, 1, 28, '12', '2021-06-26', 'probando ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `CodDoctor` int(10) NOT NULL,
  `Fecha` date NOT NULL,
  `Horario` time NOT NULL,
  `Turno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`CodDoctor`, `Fecha`, `Horario`, `Turno`) VALUES
(28, '2021-06-20', '17:12:00', 'maÃ±ana'),
(28, '2021-06-20', '18:12:00', ''),
(28, '2021-06-20', '18:12:00', ''),
(28, '2021-06-20', '20:14:00', 'tarde'),
(28, '2021-06-27', '19:17:00', 'tarde'),
(28, '2021-06-27', '19:33:00', 'maÃ±ana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_doctores`
--

CREATE TABLE `login_doctores` (
  `CodDoctor` int(10) NOT NULL,
  `DniDoctor` int(10) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `IdEspecialidad` int(11) NOT NULL,
  `Edad` int(3) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  `Sede` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login_doctores`
--

INSERT INTO `login_doctores` (`CodDoctor`, `DniDoctor`, `Usuario`, `Nombre`, `Apellido`, `IdEspecialidad`, `Edad`, `Contrasena`, `Sede`, `correo`, `rol_id`) VALUES
(13, 46, 'xdfgdsfgdsgf', 'cila', 'perez', 1, 45, 'dsfgdsfgds', 'sfdg', 'andy.av302@gmail.com', 1),
(14, 12, 'qw', 'cila', 'perez', 1, 1, 'qw', 'jorge', 'andy.av302@gmail.com', 1),
(15, 12, 'qw', 'cila', 'perez', 2, 1, '', 'jorge', 'andy.av302@gmail.com', 1),
(16, 12, '123ads', 'cila', 'perez', 1, 12, '12', 'jorge', 'andy.av302@gmail.com', 1),
(17, 12, '123ads', 'cila', 'perez', 1, 12, '', 'jorge', 'andy.av302@gmail.com', 1),
(18, 12, '123ads', 'cila', 'perez', 1, 12, '', 'jorge', 'andy.av302@gmail.com', 1),
(19, 12, '123ads', 'cila', 'perez', 1, 12, '', 'jorge', 'andy.av302@gmail.com', 1),
(20, 12, '123ads', 'cila', 'perez', 1, 12, '', 'jorge', 'andy.av302@gmail.com', 1),
(21, 12, '123ads', 'cila', 'perez', 1, 12, '', 'jorge', 'andy.av302@gmail.com', 1),
(22, 0, 'admin', 'cila', 'perez', 1, 0, 'admin', '1', 'andy.av302@gmail.com', 1),
(23, 123, 'nuevo 123', 'cila', 'perez', 1, 123, '123', '1', 'andy.av302@gmail.com', 1),
(26, 12, '123ads123', 'cila', 'perez', 1, 12, '123', '12', 'andy.av302@gmail.com', 1),
(27, 123, '123adsasdasdashola', 'datoregistreado', 'perez', 1, 12, '123', 'jorge', 'andy.av302@gmail.com', 1),
(28, 987658421, 'manuel', 'manuel', 'martines', 2, 24, '123', 'norte', 'manuel@gmail.com', 1),
(29, 987645, 'andy', 'andy', 'valentin', 2, 18, '123', 'lima norte', 'andy.av302@gmail.com', 1),
(30, 987645, 'andy', 'andy', 'valentin', 2, 18, '123', 'lima norte', 'andy.av302@gmail.com', 1),
(32, 987654, '123123asd', 'hola ', 'mundo', 1, 12, '152', 'norte', 'andy.av302@gmail.com', 1),
(33, 215012, 'frass', 'francisco ', 'Paredes', 1, 16, '123', 'lima norte', 'frans@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_paciente`
--

CREATE TABLE `login_paciente` (
  `DniPaciente` int(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` int(3) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `Contrasena` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login_paciente`
--

INSERT INTO `login_paciente` (`DniPaciente`, `nombre`, `apellido`, `edad`, `sexo`, `Contrasena`, `correo`, `rol_id`) VALUES
(0, '', '', 0, '', '', '', 2),
(12, 'cila', 'perez', 12, '123sdf', '12', 'andy.av302@gmail.com', 2),
(123, 'cila', 'perez', 12, '13', '123', 'andy.av302@gmail.com', 2),
(5214, 'jorge', 'valenti', 15, 'Masculino', '123', 'Blas@hotmail.com', 2),
(15424, 'joseph', 'valentin', 21, 'Masculino', '123', 'andy@gmail.com', 2),
(213100, 'cilaNuebvo', 'perez', 12, 'femenino', '123', 'andy.av302@gmail.com', 2),
(654321, 'Sebastian', 'Blas', 20, 'Masculino', '123', 'Blas@hotmail.com', 2),
(965852, 'cilanuevoooooooodato', 'perez', 12, 'femenino', '123', 'andy.av302@gmail.com', 2),
(987654, 'cila', 'perez', 12, 'ma', '123', 'andy.av302@gmail.com', 2),
(123456789, 'jorge', 'perez', 25, 'femenino', '123', 'andy.av302@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientedetalle`
--

CREATE TABLE `pacientedetalle` (
  `DniPaciente` int(15) NOT NULL,
  `IDVentas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `CodProducto` int(10) NOT NULL,
  `nomproduc` varchar(300) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`CodProducto`, `nomproduc`, `imagen`, `descripcion`, `precio`) VALUES
(1, 'Hilo Dental', 'hilodental.jpg', 'El uso correcto del hilo dental elimina la placa y las partículas de comida de lugares que el cepillo dental no puede alcanzar fácilmente: debajo de la encía y entre los dientes', 5.55),
(2, 'Pastillas', 'pastillas.jpg', 'La pasta de dientes en pastillas surge como la alternativa a los botes de dentífrico tradicionales y promete colarse en el neceser de medio mundo.\r\n', 3.25),
(3, 'Pasta dental', 'pastadental.jpg', 'La pasta dentífrica ayuda en nuestra higiene dental; protege los tejidos dentarios, con una acción bactericida, protegiendo el esmalte y disminuyendo la sensibilidad. También es muy importante su función removiendo la placa bacteriana, lo que requiere de una técnica de cepillado adecuada\r\n', 7.23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_cita`
--

CREATE TABLE `reservas_cita` (
  `DniPaciente` int(15) NOT NULL,
  `Truno` varchar(20) NOT NULL,
  `Fecha` date NOT NULL,
  `Horario` time NOT NULL,
  `Sede` varchar(50) NOT NULL,
  `IdEspecialidad` int(11) NOT NULL,
  `CodDoctor` int(11) NOT NULL,
  `Consulta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reservas_cita`
--

INSERT INTO `reservas_cita` (`DniPaciente`, `Truno`, `Fecha`, `Horario`, `Sede`, `IdEspecialidad`, `CodDoctor`, `Consulta`) VALUES
(123456789, 'mañana', '2021-06-08', '23:36:19', '123', 1, 14, 'hola como esta'),
(12, 'maÃ±ana', '2021-06-20', '13:21:00', 'norte', 1, 16, 'hola denuevo'),
(12, 'maÃ±ana', '2021-06-16', '13:33:00', 'lima', 2, 16, 'vengo de otro lado'),
(12, 'maÃ±ana', '2021-06-16', '17:39:00', 'Lima Centro', 2, 16, 'nuevo dato'),
(12, 'maÃ±ana', '2021-06-06', '16:37:00', 'Lima Norte', 1, 16, '5214'),
(123456789, 'maÃ±ana', '2021-06-27', '17:22:00', 'Lima Sur', 2, 16, 'consulta de prueba'),
(12, 'maÃ±ana', '2021-06-27', '22:30:00', 'Lima Norte', 1, 16, 'prueba 19'),
(12, 'maÃ±ana', '2021-07-17', '19:31:00', 'Lima Norte', 1, 16, 'asd'),
(12, 'maÃ±ana', '2021-07-17', '21:16:00', 'Lima Norte', 7, 16, 'vamos nos'),
(5214, 'mañana', '2021-06-08', '23:36:19', '123', 1, 28, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblventas`
--

CREATE TABLE `tblventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransaccion` varchar(250) NOT NULL,
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Total` decimal(60,2) NOT NULL,
  `Status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblventas`
--

INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `Status`) VALUES
(1, '89rdciamu4o19rriohb0r3fu4b', '', '2021-07-11 23:58:19', 'andy.av302@gmail.com', '26.51', 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtdetalleventa`
--

CREATE TABLE `tbtdetalleventa` (
  `ID` int(11) NOT NULL,
  `IDVENTA` int(11) NOT NULL,
  `IDPRODUCTO` int(11) NOT NULL,
  `PRECIOUNITARIO` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `DESCARGADO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbtdetalleventa`
--

INSERT INTO `tbtdetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) VALUES
(1, 1, 3, 7, 1, 0),
(2, 1, 2, 3, 1, 0),
(3, 1, 1, 6, 1, 0),
(4, 1, 2, 3, 1, 0),
(5, 1, 3, 7, 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`IdEspecialidad`);

--
-- Indices de la tabla `historial_paciente`
--
ALTER TABLE `historial_paciente`
  ADD PRIMARY KEY (`ID_historial`),
  ADD KEY `DniPaciente` (`DniPaciente`),
  ADD KEY `CodDoctor` (`CodDoctor`),
  ADD KEY `IdEspecialidad` (`IdEspecialidad`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD KEY `CodDoctor` (`CodDoctor`);

--
-- Indices de la tabla `login_doctores`
--
ALTER TABLE `login_doctores`
  ADD PRIMARY KEY (`CodDoctor`,`Usuario`),
  ADD KEY `IdEspecialidad` (`IdEspecialidad`),
  ADD KEY `fkrol` (`rol_id`);

--
-- Indices de la tabla `login_paciente`
--
ALTER TABLE `login_paciente`
  ADD PRIMARY KEY (`DniPaciente`),
  ADD KEY `fkrol` (`rol_id`);

--
-- Indices de la tabla `pacientedetalle`
--
ALTER TABLE `pacientedetalle`
  ADD KEY `dnipaciente` (`DniPaciente`),
  ADD KEY `IDVentas` (`IDVentas`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`CodProducto`);

--
-- Indices de la tabla `reservas_cita`
--
ALTER TABLE `reservas_cita`
  ADD KEY `DniPaciente` (`DniPaciente`),
  ADD KEY `fkEspecialidad` (`IdEspecialidad`),
  ADD KEY `CodDoctor` (`CodDoctor`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbtdetalleventa`
--
ALTER TABLE `tbtdetalleventa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDVENTA` (`IDVENTA`),
  ADD KEY `IDPRODUCTO` (`IDPRODUCTO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `IdEspecialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `historial_paciente`
--
ALTER TABLE `historial_paciente`
  MODIFY `ID_historial` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `login_doctores`
--
ALTER TABLE `login_doctores`
  MODIFY `CodDoctor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `CodProducto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbtdetalleventa`
--
ALTER TABLE `tbtdetalleventa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial_paciente`
--
ALTER TABLE `historial_paciente`
  ADD CONSTRAINT `historial_paciente_ibfk_2` FOREIGN KEY (`DniPaciente`) REFERENCES `login_paciente` (`DniPaciente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historial_paciente_ibfk_4` FOREIGN KEY (`CodDoctor`) REFERENCES `login_doctores` (`CodDoctor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historial_paciente_ibfk_5` FOREIGN KEY (`IdEspecialidad`) REFERENCES `especialidades` (`IdEspecialidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`CodDoctor`) REFERENCES `login_doctores` (`CodDoctor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `login_doctores`
--
ALTER TABLE `login_doctores`
  ADD CONSTRAINT `login_doctores_ibfk_1` FOREIGN KEY (`IdEspecialidad`) REFERENCES `especialidades` (`IdEspecialidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `login_doctores_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `login_paciente`
--
ALTER TABLE `login_paciente`
  ADD CONSTRAINT `login_paciente_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pacientedetalle`
--
ALTER TABLE `pacientedetalle`
  ADD CONSTRAINT `pacientedetalle_ibfk_1` FOREIGN KEY (`DniPaciente`) REFERENCES `login_paciente` (`DniPaciente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pacientedetalle_ibfk_2` FOREIGN KEY (`IDVentas`) REFERENCES `tblventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas_cita`
--
ALTER TABLE `reservas_cita`
  ADD CONSTRAINT `reservas_cita_ibfk_1` FOREIGN KEY (`DniPaciente`) REFERENCES `login_paciente` (`DniPaciente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservas_cita_ibfk_2` FOREIGN KEY (`CodDoctor`) REFERENCES `login_doctores` (`CodDoctor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbtdetalleventa`
--
ALTER TABLE `tbtdetalleventa`
  ADD CONSTRAINT `tbtdetalleventa_ibfk_1` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `producto` (`CodProducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbtdetalleventa_ibfk_2` FOREIGN KEY (`IDVENTA`) REFERENCES `tblventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
