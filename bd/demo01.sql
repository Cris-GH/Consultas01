-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-04-2023 a las 08:05:16
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
-- Base de datos: `demo01`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Lacteos', 'Para productos lácteos'),
(2, 'Tecnologia', 'Para dispositivos electrónicos'),
(3, 'Electrodomésticos', 'Para dispositivos para el hogar'),
(4, 'Congelados', 'Para alimentos congelados'),
(5, 'Frutas y verduras', 'Para frutas y verduras'),
(6, 'Limpieza', 'Para productos de limpieza'),
(7, 'Dormitorio', 'Para accesorios y muebles de dormitorio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `descripcion`, `precio`, `categoria`) VALUES
(1, 'Celular ', '550.00', 2),
(2, 'Chocolatada', '7.00', 1),
(3, 'Horno microondas', '350.00', 3),
(4, 'Freidora de aire', '220.00', 3),
(5, 'Mandarina 1KG', '4.00', 5),
(6, 'Pera 1KG', '3.00', 5),
(7, 'Naranja 1KG', '7.00', 5),
(8, 'Piña 1KG', '3.00', 5),
(9, 'Papaya 1KG', '5.00', 5),
(10, 'Hamburguesas', '14.00', 4),
(11, 'Nuggets', '10.00', 4),
(12, 'Helado', '12.00', 4),
(13, 'Yogurt', '9.00', 1),
(14, 'Mantequilla', '6.00', 1),
(15, 'Televisor', '2500.00', 2),
(16, 'Laptop', '1900.00', 2),
(17, 'Tablet', '1100.00', 2),
(18, 'Impresora', '750.00', 2),
(19, 'Altavoces ', '350.00', 2),
(20, 'Refrigeradora', '1300.00', 3),
(21, 'Lavadora', '1300.00', 3),
(22, 'Licuadora', '130.00', 3),
(23, 'Papel higiénico 12uni', '24.00', 6),
(24, 'Desinfectante de cocina', '20.00', 6),
(25, 'Colchón King', '1400.00', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
