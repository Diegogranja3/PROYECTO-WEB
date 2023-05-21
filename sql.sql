-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2023 a las 01:04:16
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sql`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ds`
--

CREATE TABLE `ds` (
  `ID` int(11) NOT NULL,
  `Nombre_completo` varchar(40) NOT NULL,
  `Papel_KG` decimal(11,2) NOT NULL,
  `Carton_KG` decimal(11,2) NOT NULL,
  `Vidrio_KG` decimal(11,2) NOT NULL,
  `PET_KG` decimal(11,2) NOT NULL,
  `PEAD_KG` decimal(11,2) NOT NULL,
  `Electronicos_KG` decimal(11,2) NOT NULL,
  `Cartuchos_toner` decimal(11,2) NOT NULL,
  `Latas_KG` decimal(11,2) NOT NULL,
  `Taparroscas_KG` decimal(11,2) NOT NULL,
  `Residuos_peligrosos_KG` decimal(11,2) NOT NULL,
  `Residuos_biologicos` decimal(11,2) NOT NULL,
  `Fecha_entrega` date DEFAULT NULL,
  `Semestre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ds`
--

INSERT INTO `ds` (`ID`, `Nombre_completo`, `Papel_KG`, `Carton_KG`, `Vidrio_KG`, `PET_KG`, `PEAD_KG`, `Electronicos_KG`, `Cartuchos_toner`, `Latas_KG`, `Taparroscas_KG`, `Residuos_peligrosos_KG`, `Residuos_biologicos`, `Fecha_entrega`, `Semestre`) VALUES
(1, 'rfp', '9.00', '99.00', '9.00', '9.00', '9.00', '999.00', '9.00', '9.00', '9.00', '9.00', '0.00', '2023-10-10', 'Julio-Diciembre'),
(2, 'a', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2023-05-02', 'Enero-Junio'),
(3, 'a', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2020-10-10', 'Enero-Junio'),
(4, 's', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0001-01-01', 'Enero-Junio'),
(5, 'wawa', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0111-11-11', 'Enero-Junio'),
(6, 'wawa', '0.00', '0.00', '101.00', '10.00', '1010.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2023-05-11', 'Enero-Junio'),
(7, 'deirf', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2023-05-24', 'Enero-Junio'),
(8, 'wawa', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2023-05-21', 'Enero-Junio'),
(9, 'wawa', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2023-05-21', 'Enero-Junio'),
(10, 'wa', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1010-10-10', 'Enero-Junio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loginadmin`
--

CREATE TABLE `loginadmin` (
  `ID_admin` int(11) NOT NULL,
  `Nombre_admin` varchar(80) NOT NULL,
  `Usuario_admin` varchar(10) NOT NULL,
  `Clave_admin` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `loginadmin`
--

INSERT INTO `loginadmin` (`ID_admin`, `Nombre_admin`, `Usuario_admin`, `Clave_admin`) VALUES
(11, 'PIA', '11', '$2y$10$FpD2BOrf5B.pMPDoD5gi9ec6ivSmPom7qygQ87vRvud5IJipyB7tG'),
(13, 'Dora', '11', '$2y$10$SnqdgM0/WDs/Tr64wWvfpu.i0VcOBJjnjLS18NCrbYP5SIYiH2Pmi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loginoperador`
--

CREATE TABLE `loginoperador` (
  `ID_operador` int(11) NOT NULL,
  `Nombre_operador` char(80) NOT NULL,
  `Usuario_operador` int(10) NOT NULL,
  `Clave_operador` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `loginoperador`
--

INSERT INTO `loginoperador` (`ID_operador`, `Nombre_operador`, `Usuario_operador`, `Clave_operador`) VALUES
(11, 'PIA', 100, '$2y$10$NEr3XI5qVYKZb26jJz5XnOh4LzI2I7ZBIP2qXow/sW8sjNynWFmTy'),
(433438, 'r', 39, '$2y$10$thXpY3ERAlpR./jSGnbHoO8iukd3xFUnIJzRtF0Sw7JY60uA7hPcq'),
(433439, 'wawa', 11, '$2y$10$WHwS6sY2x0qhSzV.f2gFnO9QOTn/yOWgbcotPRn9M84/iqOAsfzhe'),
(433440, 'Diego', 99, '$2y$10$cz42oXGElrJLIvkTCyJN3OLG7LKsvLHL8IcsioxFieXgn42BrDOh.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ds`
--
ALTER TABLE `ds`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Indices de la tabla `loginoperador`
--
ALTER TABLE `loginoperador`
  ADD PRIMARY KEY (`ID_operador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ds`
--
ALTER TABLE `ds`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `loginadmin`
--
ALTER TABLE `loginadmin`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `loginoperador`
--
ALTER TABLE `loginoperador`
  MODIFY `ID_operador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=433441;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
