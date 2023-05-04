-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2023 a las 22:41:20
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
  `Cartuchos_toner_KG` decimal(11,2) NOT NULL,
  `Latas` decimal(11,2) NOT NULL,
  `Taparroscas` decimal(11,2) NOT NULL,
  `Residuos_peligrosos` decimal(11,2) NOT NULL,
  `Fecha_entrega` date DEFAULT NULL,
  `Semestre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ds`
--

INSERT INTO `ds` (`ID`, `Nombre_completo`, `Papel_KG`, `Carton_KG`, `Vidrio_KG`, `PET_KG`, `PEAD_KG`, `Electronicos_KG`, `Cartuchos_toner_KG`, `Latas`, `Taparroscas`, `Residuos_peligrosos`, `Fecha_entrega`, `Semestre`) VALUES
(88985, 'PIA', '20.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-11-24', 'Julio-Diciembre'),
(88986, 'PIA', '20.00', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2022-11-24', 'Julio-Diciembre'),
(88988, 'PIA', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00', '0.00', '0.00', '0.00', '2023-01-30', 'Enero-Junio'),
(88989, 'PIA', '9.00', '9.00', '9.00', '9.00', '9.00', '9.00', '9.00', '0.00', '0.00', '0.00', '2023-01-30', 'Enero-Junio'),
(88990, 'PIA', '9.00', '9.00', '9.00', '9.00', '9.00', '9.00', '9.00', '0.00', '0.00', '0.00', '2023-01-30', 'Enero-Junio'),
(88991, 'PIA', '9.00', '9.00', '9.00', '9.00', '9.00', '9.00', '9.00', '0.00', '0.00', '0.00', '2023-02-03', 'Enero-Junio'),
(88992, 'Diego', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2023-02-03', 'Enero-Junio'),
(88994, 'PIA', '12.00', '12.00', '9.00', '9.00', '9.00', '9.00', '9.00', '0.00', '0.00', '0.00', '2023-03-01', 'Enero-Junio'),
(88995, 'PIA', '70.50', '70.00', '40.00', '56.00', '0.00', '24.00', '0.00', '0.00', '0.00', '0.00', '2023-03-02', 'Enero-Junio'),
(88996, 'Diego', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00', '0.00', '0.00', '0.00', '2023-03-23', 'Enero-Junio'),
(88998, 'PIA', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '0.00', '0.00', '0.00', '2023-04-16', 'Enero-Junio'),
(89000, 'e', '11.00', '11.00', '99.00', '9.00', '1.00', '1.00', '9.00', '0.00', '0.00', '0.00', '2023-08-10', 'Julio-Diciembre'),
(89001, 'Diego', '1111.00', '11.00', '111.00', '1.00', '1.00', '1.00', '1.00', '0.00', '0.00', '0.00', '2023-04-16', 'Enero-Junio'),
(89006, '2', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00', '0.00', '0.00', '0.00', '2023-11-07', 'Julio-Diciembre'),
(89007, '2', '22.00', '222.00', '3.00', '3.00', '3.00', '3.00', '333.00', '0.00', '0.00', '0.00', '2023-12-12', 'Julio-Diciembre'),
(89008, 'PIA', '45.00', '1.00', '0.50', '6.00', '10.00', '30.00', '25.00', '0.00', '0.00', '0.00', '2023-04-17', 'Enero-Junio'),
(89009, 'PIA', '6.00', '6.00', '6.00', '6.00', '6.00', '6.00', '6.00', '0.00', '0.00', '0.00', '2023-04-17', 'Enero-Junio');

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
(11, 'PIA', '11', '$2y$10$VG9vJRzvzlrqFHE5y2BaxOAaJ5to9f5HxONMQ92lOlPVTMeL2W/X2');

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
(11, 'PIA', 11, '$2y$10$th8gu.KeqDSWf69v/qrz0ut4dXP46dd69AdPEKQnaXTmPNU6V.YkK');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89010;

--
-- AUTO_INCREMENT de la tabla `loginadmin`
--
ALTER TABLE `loginadmin`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `loginoperador`
--
ALTER TABLE `loginoperador`
  MODIFY `ID_operador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=433436;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;