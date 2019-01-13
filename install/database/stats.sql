-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2018 a las 09:39:20
-- Versión del servidor: 10.0.37-MariaDB-0+deb8u1
-- Versión de PHP: 7.0.32-1~dotdeb+8.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `CherrycakeApp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cherrycake_stats`
--

CREATE TABLE `cherrycake_stats` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `subType` varchar(255) DEFAULT NULL,
  `resolution` tinyint(1) NOT NULL,
  `timestamp` datetime NOT NULL,
  `secondary_id` int(10) UNSIGNED DEFAULT NULL,
  `tertiary_id` int(10) UNSIGNED DEFAULT NULL,
  `count` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cherrycake_stats`
--
ALTER TABLE `cherrycake_stats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cherrycake_stats`
--
ALTER TABLE `cherrycake_stats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
