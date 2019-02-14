-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2018 a las 03:09:49
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
-- Base de datos: `asistencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_usuario` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Fecha_Registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Permisos` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `direccion`, `telefono`, `correo`, `nombre_usuario`, `password`, `Fecha_Registro`, `Permisos`) VALUES
('Aaron Velasco Agustin', 'callejon Gloria Numero 15', '5527564376', 'aaronvelasco1993@outlook.com', 'HuronMarron', '123456', '2018-10-29 18:37:10', 1),
('Hugo', 'direcion hugo', '561213', 'pablito.r@gmail.com', 'hugo', '123456', '2018-11-22 18:08:12', 1),
('Uriel', 'direccion uriel', '123456887', 'juan.@gmail.com', 'uriel', '123456', '2018-11-22 19:29:48', 1),
('jsadasd', 'asdasd', '65465465', 'asds@asas.com', 'kasjkas', '123456', '2018-11-22 20:59:37', 1),
('Hugo', 'direccion hugo', '123123', 'fernandoberistain2@hotmail.com', 'jisijijsda', 'asdadad', '2018-11-23 18:58:33', 1),
('jksjdks', 'asdsad', '4654', 'Aaronvelasco@gmail.com', 'HuronMarronqq', 'www', '2018-11-23 19:14:24', 1),
('Aaron', 'asdsad', '56418189', 'Aaronvelasco@gmail.com', 'HuronMarron2', '1324654', '2018-11-23 19:14:56', 1),
('alberto ledesma', 'av rancho seco', '12345678911111', 'pablito.r@gmail.com', 'ledesma', 'ledesma', '2018-11-23 19:58:56', 1),
('javier', 'asasa', '546545', 'asasasa@hotmail.com', 'javier', 'javier', '2018-11-23 20:00:12', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
