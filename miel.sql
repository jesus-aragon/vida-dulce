-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-05-2021 a las 20:49:50
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_prod` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `precio` varchar(30) NOT NULL,
  `existencias` varchar(30) NOT NULL,
  `imag` varchar(30) NOT NULL,
  `descrip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_prod`, `nombre`, `tipo`, `precio`, `existencias`, `imag`, `descrip`) VALUES
(1500, 'Parches de miel', 'Parches para heridas ', '350', '150', 'img_parche.png', 'Parche para heridas caja con10 unidades'),
(1851, 'Brillante mirada', 'Exfoliante facial', '150', '150', 'img_exf.jpg', 'Exfoliante corporal de jalea real y avena'),
(1870, 'Tiempos dulces', 'Crema Corporal', '75', '300', 'img_crema.jpg', 'Crema corporal 350 gr.'),
(1891, 'Brillo ', 'Aceite corporal', '85', '150', 'img_aceite.jpg', 'Aceite corporal y capilar de 250 ml.'),
(1895, 'Dulce piel', 'Jabón Corporal', '65', '300', 'img_jabon.jpg', 'Jabón corporal creado con jalea real.'),
(1896, 'Brillo dorado', 'Champú', '88', '300', 'img_champu.jpg', 'Champú de 1 ltr. creado con miel.'),
(1897, 'Dulce piel', 'Jabón Corporal', '88', '150', 'img_jabon2.png', 'Jabón corporal con jalea real y trigo'),
(4578, 'Miel pura', 'Miel', '155', '150', 'img3.png', 'Miel real comestible.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `cant_prod` varchar(30) NOT NULL,
  `prec_unit` varchar(30) NOT NULL,
  `prec_tp` varchar(30) NOT NULL,
  `prec_total` varchar(30) NOT NULL,
  `id_ven_sec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_secundaria`
--

CREATE TABLE `venta_secundaria` (
  `id_vent_sec` int(11) NOT NULL,
  `id_prod` varchar(30) NOT NULL,
  `cant_prod` varchar(30) NOT NULL,
  `prec_unit` varchar(30) NOT NULL,
  `prec_tp` varchar(30) NOT NULL,
  `prec_tot_vent` varchar(30) NOT NULL,
  `nom_prod` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_prod`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- Indices de la tabla `venta_secundaria`
--
ALTER TABLE `venta_secundaria`
  ADD PRIMARY KEY (`id_prod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
