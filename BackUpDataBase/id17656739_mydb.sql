-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2021 a las 06:28:41
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id17656739_mydb`
--
DROP DATABASE IF EXISTS `id17656739_mydb`;
CREATE DATABASE IF NOT EXISTS `id17656739_mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id17656739_mydb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `Nombre_Categoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `idContactos` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Mensaje` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`idContactos`, `Nombre`, `Telefono`, `Correo`, `Mensaje`) VALUES
(3, 'daniela', '78523696', 'daniela@gmail.com', 'tienda muy linda.'),
(4, 'Martin Guzman', '76192001', 'correo2@correo.com', 'Hola me pueden llamar?'),
(9, 'John Smith', '76191547', 'Correo123.com', 'I like your store!'),
(11, 'Jonathan', '78556633', 'daniela@gmail.com', 'hola bb'),
(12, 'Vicente', 'Hernandez', 'vicente@hotmail.com', 'cuidalas'),
(13, 'Jonathan Alexander', 'Lopez', 'jonalopez@gmail.com', 'hola guapo'),
(14, 'Jonathan', '78556633', 'jonalopez@gmail.com', 'hola wapo'),
(15, 'Maria Perez', '76192001', 'correo2@correo.com', 'Me gustan los juguetes'),
(16, 'Susan Reyes', '256547896', 'correo@suan14.com', 'Hola que tal'),
(17, 'Benito Guzman', '74569820', 'correo12@correo.com', 'Hola Buenas Noches');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `idDetalles` int(11) NOT NULL,
  `idFactura` int(11) NOT NULL,
  `Producto` varchar(100) NOT NULL,
  `Precio` double(10,2) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`idDetalles`, `idFactura`, `Producto`, `Precio`, `Cantidad`) VALUES
(1, 1, 'Bicicleta PawPatrol', 185.50, 1),
(2, 1, 'Combo Patines', 99.99, 1),
(3, 2, 'Peluche', 15.00, 2),
(4, 3, 'Carro Control Remoto TodoTerreno', 32.25, 1),
(5, 3, 'Pelota de goma', 5.00, 3),
(6, 4, 'Pelota de goma', 5.00, 2),
(7, 4, 'Pulpos de felpa', 3.50, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `idEncuesta` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Monto` double NOT NULL,
  `Precio` varchar(15) NOT NULL,
  `Genero` varchar(15) NOT NULL,
  `Encontrar` varchar(2) NOT NULL,
  `Calidad` varchar(30) NOT NULL,
  `Gustar` varchar(45) NOT NULL,
  `Color` varchar(10) NOT NULL,
  `Calificacion` int(11) NOT NULL,
  `Navegar` varchar(8) NOT NULL,
  `Pagina` varchar(8) NOT NULL,
  `Pago` varchar(10) NOT NULL,
  `Comentario` varchar(200) NOT NULL,
  `Fallas` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`idEncuesta`, `Nombre`, `Edad`, `Fecha`, `Monto`, `Precio`, `Genero`, `Encontrar`, `Calidad`, `Gustar`, `Color`, `Calificacion`, `Navegar`, `Pagina`, `Pago`, `Comentario`, `Fallas`) VALUES
(18, 'Carlos Perez', 25, '2021-10-19', 63.25, 'Justos', 'Ambos', 'Si', 'Alta', 'Mucho', '#971aa8', 9, 'Si', 'Si', 'Si', 'Ninguna', 'No'),
(19, 'Isabel Castillo', 27, '2021-10-11', 108.98, 'Altos', 'Ambos', 'Si', 'Alta', 'Mucho', '#dd2c2c', 9, 'Si', 'Un Poco', 'Si', 'Necesitan mas promociones ', 'Ninguno'),
(20, 'tomas', 24, '2021-10-26', 10, 'Muy Bajos', 'Niño', 'Si', 'Muy Baja', 'Mucho', '#000000', 5, 'Si', 'Si', 'Si', '2', '2'),
(21, 'Pedro Pedro', 25, '2021-11-10', 63.25, 'Justos', 'Ambos', 'No', 'Muy Baja', 'Nada', '#29337f', 10, 'Si', 'Si', 'Si', '', ''),
(22, 'Vilma Palmas', 25, '2021-11-09', 63.25, 'Altos', 'Ambos', 'No', 'Alta', 'Mucho', '#295a7f', 10, 'Si', 'Si', 'Si', '', ''),
(23, 'Bryan Ramirez', 25, '2021-11-17', 63.25, 'Altos', 'Niño', 'Si', 'Alta', 'Poco', '#df4343', 6, 'Si', 'No', 'No', '', ''),
(24, 'Juan', 18, '2021-11-11', 18, 'Altos', 'Niña', 'No', 'Muy Baja', 'Nada', '#1e27a9', 8, 'No', 'Si', 'No Compro', 'no', 'no'),
(25, 'Daniela', 30, '2021-06-09', 15, 'Justos', 'Ambos', 'No', 'Regular', 'Poco', '#532f7f', 9, 'Si', 'Si', 'Si', 'no se', 'no se'),
(27, 'Maria Martinez', 24, '2021-11-09', 63.25, 'Bajos', 'Ambos', 'Si', 'Alta', 'Mucho', '#b23873', 10, 'Si', 'Si', 'Si', '', ''),
(28, 'Nancy Stefany', 23, '2021-02-17', 125.1, 'Justos', 'Ambos', 'Si', 'Alta', 'Mucho', '#e81111', 9, 'Si', 'Si', 'Si', 'Ninguna', 'No'),
(29, 'Sofia Perez', 47, '2021-05-19', 256.01, 'Altos', 'Ambos', 'Si', 'Muy Alta', 'Mucho', '#d80e0e', 10, 'Si', 'Si', 'Si', 'No', 'Ninguno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `idFactura` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `Nombre_Cliente` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_Compra` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Total` double(10,2) NOT NULL,
  `TipoT` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `NombreT` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `BancoT` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NumeroT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `VenceMes` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `VenceYear` char(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`idFactura`, `idCliente`, `Nombre_Cliente`, `Fecha_Compra`, `Total`, `TipoT`, `NombreT`, `BancoT`, `NumeroT`, `VenceMes`, `VenceYear`) VALUES
(1, 53, 'Jonathan Lopez', '2021-12-06', 285.49, 'Mastercard', 'Jonathan Lopez', 'Banco Cuscatlan', '4785201036982100', '03', '2022'),
(2, 56, 'Edwin Ricardo', '2021-12-07', 30.00, 'Mastercard', 'Edwin Ricardo', 'Banco de America Central', '4563001233975562', '03', '2025'),
(3, 54, 'Allan Bonilla', '2021-12-07', 47.25, 'Mastercard', 'Allan Martinez', 'Banco Cuscatlan', '4897200145697820', '05', '2024'),
(4, 54, 'Allan Bonilla', '2021-12-07', 13.50, 'Mastercard', 'Allan Martinez', 'Banco Cuscatlan', '4589301250630098', '03', '2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProductos` int(11) NOT NULL,
  `Nombre_Producto` varchar(50) NOT NULL,
  `Precio` double NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Proveedor` varchar(100) NOT NULL,
  `Fecha_Registro` date NOT NULL,
  `Marca_Producto` varchar(45) NOT NULL,
  `Categoria` varchar(100) NOT NULL,
  `Detalles` varchar(100) NOT NULL,
  `Foto` varchar(250) NOT NULL,
  `Estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProductos`, `Nombre_Producto`, `Precio`, `Cantidad`, `Proveedor`, `Fecha_Registro`, `Marca_Producto`, `Categoria`, `Detalles`, `Foto`, `Estado`) VALUES
(13, 'Peluche', 15, 75, 'Lego', '2020-11-19', 'lego', 'Manualidades', 'Buenos peluches', 'peluche1.jpg', 'A'),
(14, 'Pelota de goma', 5, 100, 'Toys', '2021-06-17', 'none', 'Disfraces', 'Un excelente producto para los niños', 'pelota.jpg', 'A'),
(15, 'Pulpos de felpa', 3.5, 150, 'ToyPeluches', '2020-05-12', 'none', 'Disfraces', 'Hermosos peluches de diferentes colores', 'peluche3.jpg', 'A'),
(16, 'Bicicleta PawPatrol', 185.5, 35, 'KTM', '2021-10-20', 'Nickelodeon', 'Montables', 'Bicicleta Rin 12 PawPatrol', 'BiciPaw.jpg', 'A'),
(17, 'Combo Patines', 99.99, 55, 'PatinesSV', '2021-10-19', 'Duff', 'Montables', 'Combo Completo Patines Rosa', 'Patines.jpg', 'A'),
(18, 'Monopoly Junior', 20.8, 50, 'JuegosDeMesaCO', '2021-10-19', 'Monopoly', 'Manualidades', 'Monopoly Version Junior', 'Monopoly.jpg', 'A'),
(19, 'Carro Control Remoto TodoTerreno', 32.25, 60, 'TodoJuegosSV', '2021-10-19', 'RCToys', 'Disfraces', 'Carro Control Remoto Todo Terreno Verde', 'AutoRC.jpg', 'A'),
(20, 'Lego Creator ', 59.99, 65, 'JuegosDeMesaCO', '2021-10-19', 'Lego', 'Bloques de Armar', 'Lego Creator 3 en 1', 'Lego3en1.jpg', 'A'),
(21, 'Set LadyBug', 21.99, 30, 'JuegosDeMesaCO', '2021-10-10', 'Miraculus', 'Manualidades', 'Set Todo en uno LadyBug', 'SetLB.jpg', 'A'),
(23, 'Scooter ', 45.6, 30, 'KTM', '2021-12-07', 'BMX', 'Montables', 'Scooter Todo Terreno', 'Scooter.png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` int(11) NOT NULL,
  `Nombre_Proveedor` varchar(45) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idCliente` int(11) NOT NULL,
  `Nombre_Cliente` varchar(45) NOT NULL,
  `Apellido_Cliente` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Contraseña` varchar(45) NOT NULL,
  `Tipo_Usuario` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idCliente`, `Nombre_Cliente`, `Apellido_Cliente`, `Correo`, `Direccion`, `Telefono`, `Sexo`, `Contraseña`, `Tipo_Usuario`) VALUES
(52, 'Tomas', 'Urbina', 'admin', 'Ilopango', '75684411', 'Masculino', '12345', 'Admin'),
(53, 'Jonathan', 'Lopez', 'jona@gmail.com', 'Soyapango', '78632564', 'Masculino', '123456', 'Cliente'),
(54, 'Allan', 'Bonilla', 'allan@mail.com', 'San Salvador', '512125122', 'Masculino', 'diseñoweb', 'Cliente'),
(55, 'Abigail', 'Ortiz', 'abi@gmail.com', 'La Union', '78551423', 'Femenino', '123456', 'Cliente'),
(56, 'Edwin', 'Ricardo', 'correo@correo', 'Calle Buenos Aires No. 255', '26894563', 'Masculino', '123', 'Cliente'),
(57, 'tomas', 'urbina', 'turbina@mail.com', 'utec', '22222323', 'Masculino', '12345', 'Cliente'),
(58, 'Elizabeth', 'Martinez', 'elimarti@gmail.com', 'San Vicente', '75897852', 'Femenino', 'elimarti', 'Cliente'),
(61, 'Roberto Carlos', 'Bermudez', 'correo@correo12', 'Calle la Calle 2', '25647896', 'Masculino', '123', 'Cliente'),
(62, 'Prueba', 'Prueba', 'correo@correopp', 'Av.Cuba No.78', '78652103', 'Masculino', '123', 'Cliente'),
(63, 'Prueba2', 'Prueba2', 'Prueba2@Prueba2', 'Prueba2', '2365874123', 'Masculino', 'Prueba2', 'Cliente'),
(64, 'Prueba3', 'Prueba3', 'Prueba3@Prueba3', 'Prueba3', '25647841', 'Masculino', 'Prueba3', 'Cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`idContactos`) USING BTREE;

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`idDetalles`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`idEncuesta`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`idFactura`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProductos`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `idContactos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `idDetalles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `idEncuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
