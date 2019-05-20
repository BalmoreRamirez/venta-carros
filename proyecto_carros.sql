-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2019 a las 22:19:48
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_carros`
--

create database proyecto_carros;
use proyecto_carros;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_auto`
--

CREATE TABLE `tab_auto` (
  `id_auto` int(11) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Modelo` varchar(50) NOT NULL,
  `año` varchar(7) NOT NULL,
  `tipo_carro` int(11) NOT NULL,
  `Monto` varchar(15) NOT NULL,
  `stock` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tab_auto`
--

INSERT INTO `tab_auto` (`id_auto`, `Marca`, `Modelo`, `año`, `tipo_carro`, `Monto`, `stock`, `id_estado`) VALUES
(1, 'Toyota', 'Hilux', '2000', 1, '25,000', 3, 1),
(2, 'KIA', 'rio', '2014', 2, '12,000', 3, 1),
(3, 'Honda', 'Honda civic', '2016', 2, '27,000', 8, 1),
(4, 'Toyota', ' GT86', '2018', 4, '30,000.00', 5, 1),
(5, 'Hyundai', 'Elantra', '2017', 2, '17,052.00', 10, 1),
(6, 'kia', 'Forte', '2015', 2, '15,023.00', 8, 1),
(7, 'Ford', 'Fiesta', '2016', 2, '14,652.00', 6, 1),
(8, 'Toyota ', 'land cruiser', '2018', 3, '50,000.00', 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_cliente`
--

CREATE TABLE `tab_cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `nit` varchar(17) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tab_cliente`
--

INSERT INTO `tab_cliente` (`id_cliente`, `nombre`, `apellido`, `nit`, `telefono`, `correo`, `direccion`) VALUES
(1, 'FSGEF', 'SGF', 'DSGD', 'DFG', 'DGS', 'DGSDFG'),
(2, 'FSGEF', 'SGF', 'DSGD', 'DFG', 'DGS', 'DGSDFG'),
(3, 'FSGEF', 'SGF', 'DSGD', 'DFG', 'DGS', 'DGSDFG'),
(4, 'FSGEF', 'SGF', 'DSGD', 'DFG', 'DGS', 'DGSDFG'),
(5, 'FSGEF', 'SGF', 'DSGD', 'DFG', 'DGS', 'DGSDFG'),
(6, 'FSGEF', 'SGF', 'DSGD', 'DFG', 'DGS', 'DGSDFG'),
(7, 'FSGEF', 'SGF', 'DSGD', 'DFG', 'DGS', 'DGSDFG'),
(8, 'FSGEF', 'SGF', 'DSGD', 'DFG', 'DGS', 'DGSDFG'),
(9, 'FSGEF', 'SGF', 'DSGD', 'DFG', 'DGS', 'DGSDFG'),
(10, 'FSGEF', 'SGF', 'DSGD', 'DFG', 'DGS', 'DGSDFG'),
(11, 'FSGEF', 'SGF', 'DSGD', 'DFG', 'DGS', 'DGSDFG'),
(12, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_estado`
--

CREATE TABLE `tab_estado` (
  `id_estado` int(11) NOT NULL,
  `Estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tab_estado`
--

INSERT INTO `tab_estado` (`id_estado`, `Estado`) VALUES
(1, 'disponible'),
(2, 'no disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_factura`
--

CREATE TABLE `tab_factura` (
  `id_factura` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_Metodopago` int(11) NOT NULL,
  `monto` varchar(15) NOT NULL,
  `iva` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_gerente`
--

CREATE TABLE `tab_gerente` (
  `id_gerente` int(11) NOT NULL,
  `nombreG` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tab_gerente`
--

INSERT INTO `tab_gerente` (`id_gerente`, `nombreG`, `apellido`, `codigo`) VALUES
(1, 'carlos', 'sanchez', 21321423),
(2, 'ana', 'lopez', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_metodo_pagos`
--

CREATE TABLE `tab_metodo_pagos` (
  `id_metodo` int(11) NOT NULL,
  `pago` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_roles`
--

CREATE TABLE `tab_roles` (
  `id_roles` int(11) NOT NULL,
  `Rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tab_roles`
--

INSERT INTO `tab_roles` (`id_roles`, `Rol`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_sucursal`
--

CREATE TABLE `tab_sucursal` (
  `id_sucursal` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `id_gerente` int(11) NOT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `imagen` varchar(255) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tab_sucursal`
--

INSERT INTO `tab_sucursal` (`id_sucursal`, `nombre`, `direccion`, `id_gerente`, `id_estado`, `imagen`, `telefono`, `correo`) VALUES
(1, 'Grupo Q Santa Elena', 'uhiobuhpo', 1, 1, 'libre/assets/img/santa.jpg', '2555-5555', 'SantaElena@grupoQ.es'),
(9, ' Grupo Q San Salvador', 'san salvador 2 calle', 2, 1, 'libre/assets/img/san.jpg', '2355-5555', 'SanSalvador@grupoQ@.es'),
(10, 'Grupo Q Bulevar los proceres', 'saasmd', 2, 1, 'libre/assets/img/pro.jpg', '2255-5555', 'Proceres@GrupoQ.es'),
(11, 'San Vicente', 'colonia las flores', 2, 1, 'libre/assets/img/sanvi.jpg', '78965874', 'sanvi@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_tipoauto`
--

CREATE TABLE `tab_tipoauto` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tab_tipoauto`
--

INSERT INTO `tab_tipoauto` (`id_tipo`, `tipo`) VALUES
(1, 'Pick Up'),
(2, 'sedan'),
(3, 'Camionetas'),
(4, 'cupe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_vendedor`
--

CREATE TABLE `tab_vendedor` (
  `id_vendedor` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tab_vendedor`
--

INSERT INTO `tab_vendedor` (`id_vendedor`, `nombre`, `apellido`, `codigo`, `direccion`, `dui`, `id_estado`) VALUES
(1, 'juan', 'Rodriguez', '101', 'san salvador ', '10234546-9', 1),
(2, 'Melissa', 'Rios', '102', 'calle al volcan', '10213456-7', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_venta`
--

CREATE TABLE `tab_venta` (
  `id_auto` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usario` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usario`, `user_name`, `password`, `id_rol`) VALUES
(1, 'Cober_94', '1234', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tab_auto`
--
ALTER TABLE `tab_auto`
  ADD PRIMARY KEY (`id_auto`),
  ADD KEY `tipo_carro` (`tipo_carro`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `tab_cliente`
--
ALTER TABLE `tab_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tab_estado`
--
ALTER TABLE `tab_estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `tab_factura`
--
ALTER TABLE `tab_factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_Metodopago` (`id_Metodopago`),
  ADD KEY `id_vendedor` (`id_vendedor`);

--
-- Indices de la tabla `tab_gerente`
--
ALTER TABLE `tab_gerente`
  ADD PRIMARY KEY (`id_gerente`);

--
-- Indices de la tabla `tab_metodo_pagos`
--
ALTER TABLE `tab_metodo_pagos`
  ADD PRIMARY KEY (`id_metodo`);

--
-- Indices de la tabla `tab_roles`
--
ALTER TABLE `tab_roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indices de la tabla `tab_sucursal`
--
ALTER TABLE `tab_sucursal`
  ADD PRIMARY KEY (`id_sucursal`),
  ADD KEY `id_gerente` (`id_gerente`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `tab_tipoauto`
--
ALTER TABLE `tab_tipoauto`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `tab_vendedor`
--
ALTER TABLE `tab_vendedor`
  ADD PRIMARY KEY (`id_vendedor`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `tab_venta`
--
ALTER TABLE `tab_venta`
  ADD KEY `id_auto` (`id_auto`),
  ADD KEY `id_factura` (`id_factura`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tab_auto`
--
ALTER TABLE `tab_auto`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tab_cliente`
--
ALTER TABLE `tab_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tab_estado`
--
ALTER TABLE `tab_estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tab_factura`
--
ALTER TABLE `tab_factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_gerente`
--
ALTER TABLE `tab_gerente`
  MODIFY `id_gerente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tab_metodo_pagos`
--
ALTER TABLE `tab_metodo_pagos`
  MODIFY `id_metodo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_roles`
--
ALTER TABLE `tab_roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tab_sucursal`
--
ALTER TABLE `tab_sucursal`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tab_tipoauto`
--
ALTER TABLE `tab_tipoauto`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tab_vendedor`
--
ALTER TABLE `tab_vendedor`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tab_auto`
--
ALTER TABLE `tab_auto`
  ADD CONSTRAINT `tab_auto_ibfk_1` FOREIGN KEY (`tipo_carro`) REFERENCES `tab_tipoauto` (`id_tipo`),
  ADD CONSTRAINT `tab_auto_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `tab_estado` (`id_estado`);

--
-- Filtros para la tabla `tab_factura`
--
ALTER TABLE `tab_factura`
  ADD CONSTRAINT `tab_factura_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tab_cliente` (`id_cliente`),
  ADD CONSTRAINT `tab_factura_ibfk_2` FOREIGN KEY (`id_Metodopago`) REFERENCES `tab_metodo_pagos` (`id_metodo`),
  ADD CONSTRAINT `tab_factura_ibfk_3` FOREIGN KEY (`id_vendedor`) REFERENCES `tab_vendedor` (`id_vendedor`);

--
-- Filtros para la tabla `tab_sucursal`
--
ALTER TABLE `tab_sucursal`
  ADD CONSTRAINT `tab_sucursal_ibfk_1` FOREIGN KEY (`id_gerente`) REFERENCES `tab_gerente` (`id_gerente`),
  ADD CONSTRAINT `tab_sucursal_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `tab_estado` (`id_estado`);

--
-- Filtros para la tabla `tab_vendedor`
--
ALTER TABLE `tab_vendedor`
  ADD CONSTRAINT `tab_vendedor_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `tab_estado` (`id_estado`);

--
-- Filtros para la tabla `tab_venta`
--
ALTER TABLE `tab_venta`
  ADD CONSTRAINT `tab_venta_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `tab_auto` (`id_auto`),
  ADD CONSTRAINT `tab_venta_ibfk_2` FOREIGN KEY (`id_factura`) REFERENCES `tab_factura` (`id_factura`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `tab_roles` (`id_roles`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
