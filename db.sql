-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-11-2018 a las 02:04:15
-- Versión del servidor: 5.7.24-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gespol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilos`
--

CREATE TABLE `estilos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `value` tinyint(1) NOT NULL,
  `ruta` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estilos`
--

INSERT INTO `estilos` (`id`, `descripcion`, `value`, `ruta`) VALUES
(1, 'jquery', 2, 'assets/vendor_components/jquery/dist/jquery.min.js'),
(2, 'popper', 2, 'assets/vendor_components/popper/dist/popper.min.js'),
(3, 'bootstrap', 2, 'assets/vendor_components/bootstrap/dist/js/bootstrap.min.js'),
(4, 'DataTables', 2, 'assets/vendor_components/datatables.net/js/jquery.dataTables.min.js'),
(5, 'DataTables-bs', 2, 'assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js'),
(6, 'DataTables2', 2, 'assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js'),
(7, 'DataTables3', 2, 'assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js'),
(8, 'DataTables4', 2, 'assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js'),
(9, 'DataTables5', 2, 'assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js'),
(10, 'DataTables6', 2, 'assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js'),
(11, 'DataTables7', 2, 'assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js'),
(12, 'DataTables8', 2, 'assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js'),
(13, 'DataTables9', 2, 'assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js'),
(14, 'siteTemplate', 2, 'js/template.js'),
(15, 'plantilla', 2, 'js/pagina.js'),
(17, 'dataTables.responsive', 2, 'js/dataTables.responsive.min.js'),
(18, 'responsive.bootstrap\r\n', 2, 'js/responsive.bootstrap.min.js'),
(19, 'slimscroll', 2, 'assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js\r\n'),
(20, 'fastclick', 2, 'assets/vendor_components/fastclick/lib/fastclick.js\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `fk_p_padron` int(11) DEFAULT NULL,
  `usuario` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` smallint(1) DEFAULT NULL,
  `foto` text COLLATE utf8_spanish2_ci,
  `ultimoLogin` date DEFAULT NULL,
  `ultimaActualizacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `fk_p_padron`, `usuario`, `password`, `estado`, `foto`, `ultimoLogin`, `ultimaActualizacion`) VALUES
(1, NULL, 'admin', 'admin', 1, NULL, '2018-11-07', '2018-11-07 18:31:01'),
(2, NULL, 'usuario1', 'usuario1', 1, NULL, '2018-11-07', '2018-11-07 23:34:08'),
(3, NULL, 'usuario2', 'usuario2', 0, NULL, '2018-11-07', '2018-11-07 23:34:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estilos`
--
ALTER TABLE `estilos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estilos`
--
ALTER TABLE `estilos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
