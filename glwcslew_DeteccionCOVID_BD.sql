-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-02-2022 a las 16:40:02
-- Versión del servidor: 10.3.28-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `glwcslew_DeteccionCOVID`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cita`
--

CREATE TABLE `Cita` (
  `Id` int(11) NOT NULL,
  `Nombre Paciente` varchar(80) NOT NULL,
  `Resultado` varchar(50) NOT NULL DEFAULT 'Negativo',
  `Fecha` date NOT NULL,
  `Sintomas` varchar(160) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Cita`
--

INSERT INTO `Cita` (`Id`, `Nombre Paciente`, `Resultado`, `Fecha`, `Sintomas`) VALUES
(1, 'Juan Gonzalez', 'Positivo', '2021-10-08', 'Estornudos, Escurrimiento Nasal'),
(2, 'Jorge Luis Salas', 'Negativo', '2021-09-17', 'Escurrimiento Nasal, Estornudos'),
(3, 'Alberto Rodriguez', 'Positivo', '2021-11-29', 'Fiebre Intensa, Dolor de Cabeza'),
(4, 'Daniela Torres', 'Positivo', '2021-11-25', 'Estornudos frecuentes, Escurrimiento Nasal, Dolor de Cabeza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Diagnostico`
--

CREATE TABLE `Diagnostico` (
  `Id` int(11) NOT NULL,
  `Nombre Paciente` varchar(80) NOT NULL,
  `Promedio Aciertos` float NOT NULL,
  `Fecha Diagnostico` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Diagnostico`
--

INSERT INTO `Diagnostico` (`Id`, `Nombre Paciente`, `Promedio Aciertos`, `Fecha Diagnostico`) VALUES
(1, 'Juan Gonzalez', 70, '2021-12-02'),
(2, 'Jorge Luis Salas', 10, '2021-08-23'),
(3, 'Daniela Torres', 40, '2021-10-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Medico`
--

CREATE TABLE `Medico` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(80) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `Password` blob NOT NULL,
  `Numero Cedula` bigint(20) NOT NULL,
  `Fecha Nacimiento` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Medico`
--

INSERT INTO `Medico` (`Id`, `Nombre`, `Correo`, `Password`, `Numero Cedula`, `Fecha Nacimiento`) VALUES
(1, 'Octavio Villalobos', 'octavio.vb210@gmail.com', 0x6f63743231307662, 2913102838027267, '1965-06-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ocupacion UDG`
--

CREATE TABLE `Ocupacion UDG` (
  `Id` int(11) NOT NULL,
  `Codigo UDG` varchar(10) NOT NULL,
  `Puesto` varchar(50) NOT NULL,
  `Carrera` varchar(10) NOT NULL,
  `Semestre` varchar(10) NOT NULL,
  `Fecha Ingreso` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Ocupacion UDG`
--

INSERT INTO `Ocupacion UDG` (`Id`, `Codigo UDG`, `Puesto`, `Carrera`, `Semestre`, `Fecha Ingreso`) VALUES
(1, '238127069', 'Docente', 'INNI', 'Egresado', '2003-08-18'),
(2, '214431276', 'Alumno', 'INNI', 'Noveno', '2017-08-14'),
(3, '268403125', 'Alumno', 'INCO', 'Septimo', '2018-08-13'),
(4, '258190673', 'Alumno', 'INNI', 'Octavo', '2017-08-14'),
(6, '228782649', 'Administrativo', 'INCO', 'Septimo', '2018-01-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sintoma`
--

CREATE TABLE `Sintoma` (
  `Id` int(11) NOT NULL,
  `Nombre Persona` varchar(60) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Descripcion` text NOT NULL,
  `Fecha Inicio` date NOT NULL,
  `Resultado` varchar(30) NOT NULL,
  `Medicamento` varchar(80) NOT NULL,
  `Contacto Con Infectado` varchar(5) NOT NULL DEFAULT 'Si',
  `Salido Viaje` varchar(5) NOT NULL DEFAULT 'Si'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Sintoma`
--

INSERT INTO `Sintoma` (`Id`, `Nombre Persona`, `Tipo`, `Descripcion`, `Fecha Inicio`, `Resultado`, `Medicamento`, `Contacto Con Infectado`, `Salido Viaje`) VALUES
(1, 'Juan Gonzalez', 'Estornudo', 'Estornudos frecuentes', '2021-09-21', 'Grave', 'Ninguno', 'No', 'Si'),
(2, 'Jorge Luis Salas', 'Escurrimiento Nasal', 'Escurrimiento nasal frecuente y abundante', '2010-10-04', 'Leve', 'Ninguno', 'No', 'No'),
(3, 'Alberto Rodriguez', 'Fiebre', 'Fiebre intensa de más de 36° C', '2021-11-08', 'Grave', 'Paracetamol', 'Si', 'No'),
(4, 'Daniela Torres', 'Dolor de Cabeza', 'Dolor de cabeza moderado', '2021-11-05', 'Moderado', 'Paracetamol', 'No', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(80) NOT NULL,
  `Codigo UDG` varchar(10) NOT NULL,
  `Correo Electronico` varchar(80) NOT NULL,
  `Password` blob NOT NULL,
  `Fecha Nacimiento` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`Id`, `Nombre`, `Codigo UDG`, `Correo Electronico`, `Password`, `Fecha Nacimiento`) VALUES
(1, 'Juan Gonzalez', '238127069', 'juan.glz23@outlook.com', 0x676c7a3231386a, '1978-06-15'),
(2, 'Jorge Luis Salas', '214431276', 'jorge98.2@outlook.com', 0x6a6c73343331326973, '1998-05-21'),
(3, 'Alberto Rodriguez', '268403125', 'alberto.rdgz28@gmail.com', 0x616c626572746f32363834, '1997-08-12'),
(4, 'Daniela Torres', '258190673', 'dani.tor315@gmail.com', 0x64616e693139746f72, '1995-07-14'),
(12, 'Alan', '212210264', 'conkeer51@gmail.com', 0x41746c61733034, '1995-04-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Cita`
--
ALTER TABLE `Cita`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Diagnostico`
--
ALTER TABLE `Diagnostico`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Medico`
--
ALTER TABLE `Medico`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Ocupacion UDG`
--
ALTER TABLE `Ocupacion UDG`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Codigo UDG` (`Codigo UDG`);

--
-- Indices de la tabla `Sintoma`
--
ALTER TABLE `Sintoma`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Codigo UDG` (`Codigo UDG`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Cita`
--
ALTER TABLE `Cita`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Diagnostico`
--
ALTER TABLE `Diagnostico`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Medico`
--
ALTER TABLE `Medico`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Ocupacion UDG`
--
ALTER TABLE `Ocupacion UDG`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `Sintoma`
--
ALTER TABLE `Sintoma`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
