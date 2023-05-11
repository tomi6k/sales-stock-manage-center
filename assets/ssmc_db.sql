-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2023 a las 19:05:05
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ssmc_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ssmc_prods`
--

CREATE TABLE `ssmc_prods` (
  `id_prod` int(255) NOT NULL,
  `nombre_prod` varchar(255) NOT NULL,
  `cant_prod` int(255) NOT NULL,
  `cod_barras` varchar(255) NOT NULL,
  `fecha_vencimiento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `ssmc_prods`
--

INSERT INTO `ssmc_prods` (`id_prod`, `nombre_prod`, `cant_prod`, `cod_barras`, `fecha_vencimiento`) VALUES
(1, 'TARTA FRITA', 10, '120010204128501020812803', '2023-04-22'),
(2, 'GALLETAS OREO', 5, '12903109571651902381920', '2023-04-13'),
(4, 'pan bimbo', 2, '128948616916296891', '2023-04-12'),
(5, 'papa frita lays', 5, '876742546756535434', '2023-04-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ssmc_user`
--

CREATE TABLE `ssmc_user` (
  `id_user` int(99) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  `sess_user` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `ssmc_user`
--

INSERT INTO `ssmc_user` (`id_user`, `name_user`, `pass_user`, `sess_user`) VALUES
(1, 'admin', '2204', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ssmc_prods`
--
ALTER TABLE `ssmc_prods`
  ADD PRIMARY KEY (`id_prod`);

--
-- Indices de la tabla `ssmc_user`
--
ALTER TABLE `ssmc_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ssmc_prods`
--
ALTER TABLE `ssmc_prods`
  MODIFY `id_prod` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ssmc_user`
--
ALTER TABLE `ssmc_user`
  MODIFY `id_user` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
