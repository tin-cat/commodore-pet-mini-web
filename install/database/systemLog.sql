-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2018 a las 09:26:14
-- Versión del servidor: 10.0.37-MariaDB-0+deb8u1
-- Versión de PHP: 7.0.32-1~dotdeb+8.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cherrycake-skeleton`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cherrycake_systemLog`
--

CREATE TABLE `cherrycake_systemLog` (
  `id` int(10) UNSIGNED NOT NULL,
  `dateAdded` datetime NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` int(10) UNSIGNED DEFAULT NULL,
  `httpHost` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `requestUri` text COLLATE utf8_unicode_ci,
  `browserString` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `data` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cherrycake_systemLog`
--
ALTER TABLE `cherrycake_systemLog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cherrycake_systemLog`
--
ALTER TABLE `cherrycake_systemLog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
